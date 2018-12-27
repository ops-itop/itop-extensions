<?php
// Copyright (C) 2014-2018 Combodo SARL
//
//   This file is part of iTop.
//
//   iTop is free software; you can redistribute it and/or modify	
//   it under the terms of the GNU Affero General Public License as published by
//   the Free Software Foundation, either version 3 of the License, or
//   (at your option) any later version.
//
//   iTop is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU Affero General Public License for more details.
//
//   You should have received a copy of the GNU Affero General Public License
//   along with iTop. If not, see <http://www.gnu.org/licenses/>



interface iObjectCopierActionProvider
{
	public function EnumVerbs();
	public function ExecAction($sVerb, $aParams, $oObjectToRead, $oObjectToWrite);
}

class iTopObjectCopier implements iPopupMenuExtension, iObjectCopierActionProvider
{
	/**
	 * Helper to log errors
	 *
	 * @param int $iRule
	 * @param string $sMessage
	 */
	static public function LogError($iRule, $sMessage)
	{
		IssueLog::Error('Module itop-object-copy - invalid rule #'.$iRule.' - '.$sMessage);
	}

	/**
	 * Checks the structure and logs errors if issues have been encountered
	 *
	 * @param integer $iRule
	 * @param string[] $aRuleData
	 *
	 * @return bool
	 */
	public static function IsRuleValid($iRule, $aRuleData)
	{
		$bRet = true;
		if (!isset($aRuleData['source_scope']))
		{
			self::LogError($iRule, 'missing "source_scope"');
			$bRet = false;
		}
		if (!isset($aRuleData['dest_class']))
		{
			self::LogError($iRule, 'missing "dest_class"');
			$bRet = false;
		}
		if (!isset($aRuleData['preset']))
		{
			self::LogError($iRule, 'missing "preset"');
			$bRet = false;
		}
		if (!isset($aRuleData['retrofit']))
		{
			self::LogError($iRule, 'missing "retrofit"');
			$bRet = false;
		}
		if (!isset($aRuleData['allowed_profiles']))
		{
			self::LogError($iRule, 'missing "allowed_profiles"');
			$bRet = false;
		}

		if (!is_array($aRuleData['preset']))
		{
			self::LogError($iRule, 'preset must be an array');
			$bRet = false;
		}
		if (!is_array($aRuleData['retrofit']))
		{
			self::LogError($iRule, 'retrofit must be an array');
			$bRet = false;
		}
		if (($aRuleData['dest_class'] != '') && !MetaModel::IsValidClass($aRuleData['dest_class']))
		{
			self::LogError($iRule, 'dest_class "'.$aRuleData['dest_class'].'" is not a valid class');
			$bRet = false;
		}
		return $bRet;
	}

	/**
	 * Get the list of items to be added to a menu.
	 *
	 * This method is called by the framework for each menu.
	 * The items will be inserted in the menu in the order of the returned array.
	 * @param int $iMenuId The identifier of the type of menu, as listed by the constants MENU_xxx
	 * @param mixed $param Depends on $iMenuId, see the constants defined above
	 * @return object[] An array of ApplicationPopupMenuItem or an empty array if no action is to be added to the menu
	 */
	public static function EnumItems($iMenuId, $param)
	{
		$aRules = MetaModel::GetModuleSetting('itop-object-copier', 'rules', array());

		$aRet = array();
		if ($iMenuId == iPopupMenuExtension::MENU_OBJDETAILS_ACTIONS)
		{
			$oObject = $param;

			$oUser = UserRights::GetUserObject();
			$aUserProfiles = array();
			if (!is_null($oUser))
			{
				$oProfileSet = $oUser->Get('profile_list');
				while ($oProfile = $oProfileSet->Fetch())
				{
					$aUserProfiles[$oProfile->Get('profile')] = true;
				}
			}

			foreach($aRules as $iRule => $aRuleData)
			{
				if (self::IsRuleValid($iRule, $aRuleData))
				{
                    // Checking if user can write target class (DM rights, Archive mode on, Access mode restricted, ...)
                    $sTargetClass = ($aRuleData['dest_class'] === '') ? get_class($oObject) : $aRuleData['dest_class'];
                    if(!UserRights::IsActionAllowed($sTargetClass, UR_ACTION_CREATE))
                    {
                        continue;
                    }

                    $bAllowed = false;
					if (!isset($aRuleData['allowed_profiles']) || ($aRuleData['allowed_profiles'] == ''))
					{
						$bAllowed = true;
					}
					else
					{
						$sAllowedProfiles = $aRuleData['allowed_profiles'];
						foreach (explode(',', $sAllowedProfiles) as $sProfileRaw)
						{
							$sProfileName = trim($sProfileRaw);
							if (isset($aUserProfiles[$sProfileName]))
							{
								$bAllowed = true;
								break;
							}
						}
					}

					if ($bAllowed)
					{
						try
						{
							$oFilter = DBObjectSearch::FromOQL($aRuleData['source_scope']);

							if (MetaModel::IsParentClass($oFilter->GetClass(), get_class($oObject)))
							{
								$oFilter->AddCondition('id', $oObject->GetKey(), '=');
								$oCheckSet = new DBObjectSet($oFilter);
								if ($oCheckSet->Count() > 0)
								{
									$oAppContext = new ApplicationContext();
									$aParams = $oAppContext->GetAsHash();

									$aParams['operation'] = 'new';
									$aParams['rule'] = $iRule;
									$aParams['source_id'] = $oObject->GetKey();
									$aParams['source_class'] = get_class($oObject);
									$aRet[] = new URLPopupMenuItem
									(
										'object_copier_'.$iRule,
										self::FormatMessage($aRuleData, 'menu_label'),
										utils::GetAbsoluteUrlModulePage('itop-object-copier', 'copy.php', $aParams)
									);
								}
							}
						}
						catch (OqlException $e)
						{
							self::LogError($iRule, "Invalid source_scope '".$aRuleData['source_scope']."' - ".$e->getMessage());
						}
					}
				}
			}
		}
		return $aRet;
	}

	/**
	 * Prepare the destination object for user configuration (not saved yet!)
	 *
	 * @param string[string[]] $aRuleData
	 * @param \DBObject $oDestObject
	 * @param \DBObject $oSourceObject
	 * @param bool $bOnFormSubmit
	 *
	 * @throws \Exception
	 */
	public static function PrepareObject($aRuleData, $oDestObject, $oSourceObject, $bOnFormSubmit = false)
	{
		self::ExecActions($aRuleData['preset'], $oSourceObject, $oDestObject, $bOnFormSubmit);
	}

	/**
	 * Retrofit some information on the source object
	 *
	 * @param string[string[]] $aRuleData
	 * @param \DBObject $oSavedObject
	 * @param \DBObject $oSourceObject
	 *
	 * @throws \Exception
	 */
	public static function RetrofitOnSourceObject($aRuleData, $oSavedObject, $oSourceObject)
	{
		self::ExecActions($aRuleData['retrofit'], $oSavedObject, $oSourceObject);
	}

	// Note: not passed as a new parameter so as to preserve the existing API
	protected static $aContextObjects = array();
	public static function AddExecContextObject($oObject, $sAlias)
	{
		self::$aContextObjects[$sAlias] = $oObject;
	}

	/**
	 * Preset the object to create or retrofit some values...
	 *
	 * @param string[] $aActions
	 * @param \DBObject $oObjectToRead
	 * @param \DBObject $oObjectToWrite
	 * @param bool $bOnFormSubmit
	 *
	 * @throws \Exception
	 */
	public static function ExecActions($aActions, $oObjectToRead, $oObjectToWrite, $bOnFormSubmit = false)
	{
		static $aVerbToProvider = array();
		if (count($aVerbToProvider) == 0)
		{
			foreach(get_declared_classes() as $sPHPClass)
			{
				$oRefClass = new ReflectionClass($sPHPClass);
				if ($oRefClass->implementsInterface('iObjectCopierActionProvider'))
				{
					$oActionProvider = new $sPHPClass;
					foreach ($oActionProvider->EnumVerbs() as $sVerb)
					{
						$aVerbToProvider[$sVerb] = $oActionProvider;
					}
				}
			}
		}

		foreach($aActions as $sAction)
		{
			try
			{
				if (preg_match('/^(\S*)\s*\((.*)\)$/ms', $sAction, $aMatches)) // multiline and newline matched by a dot
				{
					$sVerb = trim($aMatches[1]);
					$sParams = $aMatches[2];

					// the coma is the separator for the parameters
					// comas can be escaped: \,
					$sParams = str_replace(array("\\\\", "\\,"), array("__backslash__", "__coma__"), $sParams);

					$aParams = explode(',', $sParams);
					foreach ($aParams as &$sParam)
					{
						$sParam = str_replace(array("__backslash__", "__coma__"), array("\\", ","), $sParam);
					}

					if (!array_key_exists($sVerb, $aVerbToProvider))
					{
						throw new Exception("Unknown verb '$sVerb'");
					}
					$oActionProvider = $aVerbToProvider[$sVerb];
					$oActionProvider->ExecAction($sVerb, $aParams, $oObjectToRead, $oObjectToWrite, $bOnFormSubmit);
				}
				else
				{
					throw new Exception("Invalid syntax");
				}
			}
			catch(Exception $e)
			{
				throw new Exception('Action: '.$sAction.' - '.$e->getMessage());
			}
		}
	}

	public function EnumVerbs()
	{
		return array(
			'clone',
			'clone_scalars',
			'copy',
			'copy_head',
			'reset',
			'nullify',
			'set',
			'append',
			'add_to_list',
			'apply_stimulus',
			'call_method'
		);
	}

	/**
	 * Helper to check the attribute code before attempting to use it, thus generating the most relevant error message
	 *
	 * @param \DBObject $oObject
	 * @param string $sAttCode
	 *
	 * @return mixed attribute value
	 * @throws \Exception
	 */
	protected function GetAtt($oObject, $sAttCode)
	{
		if ($sAttCode == 'id')
		{
			$ret = $oObject->GetKey();
		}
		else
		{
			if (!MetaModel::IsValidAttCode(get_class($oObject), $sAttCode))
			{
				throw new Exception("Unknown attribute ".get_class($oObject)."::".$sAttCode);
			}
			$ret = $oObject->Get($sAttCode);
		}
		return $ret;
	}

	/**
	 * Helper to check the attribute code before attempting to use it, thus generating the most relevant error message
	 *
	 * @param \DBObject $oObject
	 * @param string $sAttCode
	 * @param mixed $value
	 *
	 * @throws \Exception
	 */
	protected function SetAtt($oObject, $sAttCode, $value)
	{
		if (!MetaModel::IsValidAttCode(get_class($oObject), $sAttCode))
		{
			throw new Exception("Unknown attribute ".get_class($oObject)."::".$sAttCode);
		}
		$oObject->Set($sAttCode, $value);
	}

	/**
	 * Clone an object in memory (not the same as DBObject::Clone!)
	 * It will be used to clone link sets
	 *
	 * @param \DBObject $oSourceObject
	 *
	 * @return \DBObject
	 * @throws \Exception
	 */
	public function CloneObject($oSourceObject)
	{
		$sClass = get_class($oSourceObject);
		$oClone = MetaModel::NewObject($sClass);
		foreach(MetaModel::ListAttributeDefs($sClass) as $sAttCode => $oAttDef)
		{
			// As of now, ignore other attribute (do not attempt to recurse!)
            // Note: Condition should match those from DBObject::Set(), otherwise we might encounter an exception.
            if ($oAttDef->IsScalar() && $oAttDef->IsWritable())
			{
				$this->SetAtt($oClone, $sAttCode, $this->GetAtt($oSourceObject, $sAttCode));
			}
		}
		return $oClone;
	}

	/**
	 * Helper to copy an attribute between two objects (in memory)
	 * Used for several verbs like clone() and copy()
	 *
	 * @param \DBObject $oSourceObject
	 * @param string $sSourceAttCode
	 * @param \DBObject $oDestObject
	 * @param string $sDestAttCode
	 *
	 * @throws \Exception
	 */
	public function CopyAttribute($oSourceObject, $sSourceAttCode, $oDestObject, $sDestAttCode)
	{
		if ($sSourceAttCode == 'id')
		{
			$oSourceAttDef = null;
		}
		else
		{
			$oSourceAttDef = MetaModel::GetAttributeDef(get_class($oSourceObject), $sSourceAttCode);
		}

		if (is_object($oSourceAttDef) && $oSourceAttDef->IsLinkSet())
		{
			// The copy requires that we create a new object set (the semantic of DBObject::Set is unclear about link sets)
			$oDestSet = DBObjectSet::FromScratch($oSourceAttDef->GetLinkedClass());
			$oSourceSet = $this->GetAtt($oSourceObject, $sSourceAttCode);
			$oSourceSet->Rewind();
			while ($oSourceLink = $oSourceSet->Fetch())
			{
				$oDestLink = $this->CloneObject($oSourceLink);
				$oDestSet->AddObject($oDestLink);
			}
			$this->SetAtt($oDestObject, $sDestAttCode, $oDestSet);
		}
		// Note: Condition should match those from DBObject::Set(), otherwise we might encounter an exception.
		elseif(!is_object($oSourceAttDef) || $oSourceAttDef->IsWritable())
		{
		    $this->SetAtt($oDestObject, $sDestAttCode, $this->GetAtt($oSourceObject, $sSourceAttCode));
		}
	}

	/**
	 * @param DBObject $oSourceObject
	 * @param string $sSourceAttCode
	 * @param DBObject $oDestObject
	 * @param string $sDestAttCode
	 *
	 * @uses \ormCaseLog::GetLatestEntry()
	 *
	 * @throws \CoreException when getting source attribute value
	 * @throws \CoreUnexpectedValue if source attribute is not a CaseLog
	 * @throws \Exception when setting dest attribute
	 */
	public function CopyLastCaseLogEntry($oSourceObject, $sSourceAttCode, $oDestObject, $sDestAttCode)
	{
		$oSourceCaseLog = $oSourceObject->Get($sSourceAttCode);

		if (!is_a($oSourceCaseLog, 'ormCaseLog'))
		{
			throw new CoreUnexpectedValue("tried to use copy_head verb with '$sSourceAttCode' source attribute, which is not a CaseLog field");
		}

		$sSourceLastCaseLogEntry = $oSourceCaseLog->GetLatestEntry('html');
		$this->SetAtt($oDestObject, $sDestAttCode, $sSourceLastCaseLogEntry);
	}

	/**
	 * Handles the various actions (see the interface iObjectCopierActionProvider)
	 *
	 * @param string $sVerb
	 * @param array $aParams
	 * @param \DBObject $oObjectToRead
	 * @param \DBObject $oObjectToWrite
	 * @param bool $bOnFormSubmit
	 *
	 * @throws \CoreUnexpectedValue
	 * @throws \Exception
	 */
	public function ExecAction($sVerb, $aParams, $oObjectToRead, $oObjectToWrite, $bOnFormSubmit = false)
	{
		IssueLog::Info("entrée dans ExecAction");
		switch($sVerb)
		{
			case 'clone':
				foreach ($aParams as $sAttCode)
				{
					$sAttCode = trim($sAttCode);
					$this->CopyAttribute($oObjectToRead, $sAttCode, $oObjectToWrite, $sAttCode);
				}
				break;

			case 'clone_scalars':
				foreach (MetaModel::ListAttributeDefs(get_class($oObjectToWrite)) as $sAttCode => $oAttDef)
				{
					// Note: Condition should match those from DBObject::Set(), otherwise we might encounter an exception.
					if ($oAttDef->IsScalar() && $oAttDef->IsWritable())
					{
						$this->CopyAttribute($oObjectToRead, $sAttCode, $oObjectToWrite, $sAttCode);
					}
				}
				break;

			case 'copy':
				$sSourceAttCode = trim($aParams[0]);
				$sDestAttCode = trim($aParams[1]);
				$this->CopyAttribute($oObjectToRead, $sSourceAttCode, $oObjectToWrite, $sDestAttCode);
				break;

			case 'copy_head':
				$sSourceAttCode = trim($aParams[0]);
				$sDestAttCode = trim($aParams[1]);
				$this->CopyLastCaseLogEntry($oObjectToRead, $sSourceAttCode, $oObjectToWrite, $sDestAttCode);
				break;

			case 'reset':
				$sAttCode = trim($aParams[0]);
				if (!MetaModel::IsValidAttCode(get_class($oObjectToWrite), $sAttCode))
				{
					throw new Exception("Unknown attribute ".get_class($oObjectToWrite)."::".$sAttCode);
				}
				$oAttDef = MetaModel::GetAttributeDef(get_class($oObjectToWrite), $sAttCode);
				$this->SetAtt($oObjectToWrite, $sAttCode, $oAttDef->GetDefaultValue());
				break;

			case 'nullify':
				$sAttCode = trim($aParams[0]);
				if (!MetaModel::IsValidAttCode(get_class($oObjectToWrite), $sAttCode))
				{
					throw new Exception("Unknown attribute ".get_class($oObjectToWrite)."::".$sAttCode);
				}
				$oAttDef = MetaModel::GetAttributeDef(get_class($oObjectToWrite), $sAttCode);
				$this->SetAtt($oObjectToWrite, $sAttCode, $oAttDef->GetNullValue());
				break;

			case 'set':
				$sAttCode = trim($aParams[0]);
				$sRawValue = trim($aParams[1]);

				// Do not preset caselog value during form submission
				$iFlags = $oObjectToWrite->GetAttributeFlags($sAttCode);
				$bUpdate = true;
				if ($bOnFormSubmit)
				{
					// In this case, write only hidden case logs
					$bUpdate = ($iFlags & OPT_ATT_READONLY) || ($iFlags & OPT_ATT_HIDDEN);
				}
				if ($bUpdate)
				{
					$aContext = $oObjectToRead->ToArgs('this');
					foreach (self::$aContextObjects as $sAlias => $oObject)
					{
						$aContext = array_merge($aContext, $oObject->ToArgs($sAlias));
					}
					$aContext['current_contact_id'] = UserRights::GetContactId();
					$aContext['current_contact_friendlyname'] = UserRights::GetUserFriendlyName();
					$aContext['current_date'] = date('Y-m-d');
					$aContext['current_time'] = date('H:i:s');
					$sValue = MetaModel::ApplyParams($sRawValue, $aContext);
					$this->SetAtt($oObjectToWrite, $sAttCode, $sValue);
				}
				break;

			case 'append':
				$sAttCode = trim($aParams[0]);
				$sRawAddendum = $aParams[1];
				$aContext = $oObjectToRead->ToArgs('this');
				$aContext['current_contact_id'] = UserRights::GetContactId();
				$aContext['current_contact_friendlyname'] = UserRights::GetUserFriendlyName();
				$sAddendum = MetaModel::ApplyParams($sRawAddendum, $aContext);
				$this->SetAtt($oObjectToWrite, $sAttCode, $this->GetAtt($oObjectToWrite, $sAttCode).$sAddendum);
				break;

			case 'add_to_list':
				$sSourceKeyAttCode = trim($aParams[0]);
				$sTargetListAttCode = trim($aParams[1]); // indirect !!!
				if (isset($aParams[2]) && isset($aParams[3]))
				{
					$sRoleAttCode = trim($aParams[2]);
					$sRoleValue = $aParams[3];
				}

				$iObjKey = $this->GetAtt($oObjectToRead, $sSourceKeyAttCode);
				if ($iObjKey > 0)
				{
					$oLinkSet = $oObjectToWrite->Get($sTargetListAttCode);

					$oListAttDef = MetaModel::GetAttributeDef(get_class($oObjectToWrite), $sTargetListAttCode);
					$oLnk = MetaModel::NewObject($oListAttDef->GetLinkedClass());
					$oLnk->Set($oListAttDef->GetExtKeyToRemote(), $iObjKey);
					if (isset($sRoleAttCode))
					{
						$this->SetAtt($oLnk, $sRoleAttCode, $sRoleValue);
					}
					$oLinkSet->AddObject($oLnk);
					$this->SetAtt($oObjectToWrite, $sTargetListAttCode, $oLinkSet);
				}
				break;

			case 'apply_stimulus':
				$sStimulus = trim($aParams[0]);
				$oObjectToWrite->ApplyStimulus($sStimulus);
				break;

			case 'call_method':
				$sMethod = trim($aParams[0]);
				$aCallSpec = array($oObjectToWrite, $sMethod);
				if (!is_callable($aCallSpec))
				{
					throw new Exception("Unknown method ".get_class($oObjectToWrite)."::".$sMethod.'()');
				}
				call_user_func($aCallSpec, $oObjectToRead);
				break;

			default:
				throw new Exception("Invalid verb");
		}
	}

	/**
	 * Format the labels depending on the rule settings, and defaulting to dictionary entries
	 *
	 * @param array aRuleData Rule settings
	 * @param string sMsgCode The code in the rule settings and default dictionary (e.g. menu_label, defaulting to
	 *     object-copier:menu_label:default)
	 * @param \DBObject oSourceObject Optional: the source object
	 *
	 * @throws \DictExceptionMissingString
	 */
	public static function FormatMessage($aRuleData, $sMsgCode, $oSourceObject = null)
	{
		$sLangCode = Dict::GetUserLanguage();
		$sCodeWithLang = $sMsgCode.'/'.$sLangCode;
		if (isset($aRuleData[$sCodeWithLang]) && strlen($aRuleData[$sCodeWithLang]) > 0)
		{
			if ($oSourceObject)
			{
				$sRet = sprintf($aRuleData[$sCodeWithLang], $oSourceObject->GetHyperlink());
			}
			else
			{
				$sRet = $aRuleData[$sCodeWithLang];
			}
		}
		else
		{
			if (isset($aRuleData[$sMsgCode]) && strlen($aRuleData[$sMsgCode]) > 0)
			{
				$sDictEntry = $aRuleData[$sMsgCode];
			}
			else
			{
				$sDictEntry = 'object-copier:'.$sMsgCode.':default';
			}
			if ($oSourceObject)
			{
				// The format function does not format if the string is not a dictionary entry
				// so we do it ourselves here
				$sFormat = Dict::S($sDictEntry);
				$sRet = sprintf($sFormat, $oSourceObject->GetHyperlink());
			}
			else
			{
				$sRet = Dict::S($sDictEntry);
			}
		}
		return $sRet;
	}
}
