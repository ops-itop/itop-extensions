<?php

// Copyright (C) 2014 Combodo SARL
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
	 */
	static public function LogError($iRule, $sMessage)
	{
		IssueLog::Error('Module itop-object-copy - invalid rule #'.$iRule.' - '.$sMessage);
	}

	/**
	 * Checks the structure and logs errors if issues have been encountered
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
					       		//$sContextForURL = $oAppContext->GetForLink();
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
	 */	 	
	public static function PrepareObject($aRuleData, $oDestObject, $oSourceObject)
	{
		self::ExecActions($aRuleData['preset'], $oSourceObject, $oDestObject);
	}

	/**
	 * Retrofit some information on the source object
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
	 */	
	public static function ExecActions($aActions, $oObjectToRead, $oObjectToWrite)
	{
		static $aVerbToProvider = array();
		if (count($aVerbToProvider) == 0)
		{
			foreach(get_declared_classes() as $sPHPClass)
			{
				$oRefClass = new ReflectionClass($sPHPClass);
				$oExtensionInstance = null;
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
					$oActionProvider->ExecAction($sVerb, $aParams, $oObjectToRead, $oObjectToWrite);
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
		return array('clone', 'clone_scalars', 'copy', 'reset', 'nullify', 'set', 'append', 'add_to_list', 'apply_stimulus', 'call_method');
	}

	/**
	 * Helper to check the attribute code before attempting to use it, thus generating the most relevant error message
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
	 */
	public function CloneObject($oSourceObject)
	{
		$sClass = get_class($oSourceObject);
		$oClone = MetaModel::NewObject($sClass);
		foreach(MetaModel::ListAttributeDefs($sClass) as $sAttCode => $oAttDef)
		{
			// As of now, ignore other attribute (do not attempt to recurse!)
			if ($oAttDef->IsScalar())
			{
				$this->SetAtt($oClone, $sAttCode, $this->GetAtt($oSourceObject, $sAttCode));
			}
		}
		return $oClone;
	}	

	/**
	 * Helper to copy an attribute between two objects (in memory)
	 * Used for several verbs like clone() and copy()	 	
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
				// Not necessary
				// $oDestLink->Set($oSourceAttDef->GetExtKeyToMe(), 0);
				$oDestSet->AddObject($oDestLink);
			}
			$this->SetAtt($oDestObject, $sDestAttCode, $oDestSet);
		}
		else
		{
			$this->SetAtt($oDestObject, $sDestAttCode, $this->GetAtt($oSourceObject, $sSourceAttCode));
		}
	}

	/**
	 * Handles the various actions (see the interface iObjectCopierActionProvider)	
	 */	
	public function ExecAction($sVerb, $aParams, $oObjectToRead, $oObjectToWrite)
	{
		switch($sVerb)
		{
		case 'clone':
			foreach($aParams as $sAttCode)
			{
				$sAttCode = trim($sAttCode);
				$this->CopyAttribute($oObjectToRead, $sAttCode, $oObjectToWrite, $sAttCode);
			}
			break;

		case 'clone_scalars':
			foreach(MetaModel::ListAttributeDefs(get_class($oObjectToWrite)) as $sAttCode => $oAttDef)
			{
				if ($oAttDef->IsScalar())
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
	 * @param aRuleData Rule settings
	 * @param sMsgCode The code in the rule settings and default dictionary (e.g. menu_label, defaulting to object-copier:menu_label:default)
	 * @param oSourceObject Optional: the source object	 	 	 
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
