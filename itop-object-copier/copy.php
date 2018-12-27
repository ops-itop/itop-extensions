<?php
// Copyright (C) 2014-2017 Combodo SARL
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


/**
 * GUI for the itop-object-copier module
 * - operation=new to show the form to create an object
 * - operation=create to execute the operation  
 *
 * @copyright   Copyright (C) 2014-2017 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */


/**
 * Apply the 'next-action' to the given object or redirect to the page that prompts for additional information if needed
 * @param $oP WebPage The page for the output
 * @param $oObj CMDBObject The object to process
 * @param $sNextAction string The code of the stimulus for the 'action' (i.e. Transition) to apply
 */
function ApplyNextAction(Webpage $oP, CMDBObject $oObj, $sNextAction)
{
	// Here handle the apply stimulus
	$aTransitions = $oObj->EnumTransitions();
	$aStimuli = MetaModel::EnumStimuli(get_class($oObj));
	if (!isset($aTransitions[$sNextAction]))
	{
		// Invalid stimulus
		throw new ApplicationException(Dict::Format('UI:Error:Invalid_Stimulus_On_Object_In_State', $sNextAction, $oObj->GetName(), $oObj->GetStateLabel()));
	}
	// Get the list of missing mandatory fields for the target state, considering only the changes from the previous form (i.e don't prompt twice)
	$aExpectedAttributes = $oObj->GetExpectedAttributes($oObj->GetState(), $sNextAction, true /* $bOnlyNewOnes */);
	
	if (count($aExpectedAttributes) == 0)
	{
		// If all the mandatory fields are already present, just apply the transition silently...
		if ($oObj->ApplyStimulus($sNextAction))
		{
			$oObj->DBUpdate();
		}
		ReloadAndDisplay($oP, $oObj);
	}
	else
	{
		// redirect to the 'stimulus' action
		$oAppContext = new ApplicationContext();
//echo "<p>Missing Attributes <pre>".print_r($aExpectedAttributes, true)."</pre></p>\n";
		
		$oP->add_header('Location: '.utils::GetAbsoluteUrlAppRoot().'pages/UI.php?operation=stimulus&class='.get_class($oObj).'&stimulus='.$sNextAction.'&id='.$oObj->getKey().'&'.$oAppContext->GetForLink());
	}
}

function ReloadAndDisplay($oPage, $oObj, $sMessageId = '', $sMessage = '', $sSeverity = null)
{
	$oAppContext = new ApplicationContext();
	if ($sMessageId != '')
	{
		cmdbAbstractObject::SetSessionMessage(get_class($oObj), $oObj->GetKey(), $sMessageId, $sMessage, $sSeverity, 0, true /* must not exist */);
	}
	$oPage->add_header('Location: '.utils::GetAbsoluteUrlAppRoot().'pages/UI.php?operation=details&class='.get_class($oObj).'&id='.$oObj->getKey().'&'.$oAppContext->GetForLink());
}


/***********************************************************************************
 * 
 * Main user interface page, starts here
 *
 * ***********************************************************************************/
try
{
// Must be launched by exec.php
//
//	require_once('../approot.inc.php');
	require_once(APPROOT.'/application/application.inc.php');
	require_once(APPROOT.'/application/itopwebpage.class.inc.php');
	require_once(APPROOT.'/application/wizardhelper.class.inc.php');

	require_once(APPROOT.'/application/startup.inc.php');
	$operation = utils::ReadParam('operation', '');

	$oKPI = new ExecutionKPI();
	$oKPI->ComputeAndReport('Data model loaded');

	$oKPI = new ExecutionKPI();

	require_once(APPROOT.'/application/loginwebpage.class.inc.php');
	$sLoginMessage = LoginWebPage::DoLogin(); // Check user rights and prompt if needed
	$oAppContext = new ApplicationContext();

	$oKPI->ComputeAndReport('User login');

	$oP = new iTopWebPage(Dict::S('UI:WelcomeToITop'));
	$oP->SetMessage($sLoginMessage);

	if (method_exists($oP, 'DisableBreadCrumb')) // Preserve compatibility with iTop < 2.3.0
	{
		$oP->DisableBreadCrumb();
	}

	// All the following actions use advanced forms that require more javascript to be loaded
	switch($operation)
	{
		case 'new': // Form to create a new object
		case 'apply_new': // Creation of a new object
		$oP->add_linked_script("../js/json.js");
		$oP->add_linked_script("../js/forms-json-utils.js");
		$oP->add_linked_script("../js/wizardhelper.js");
		$oP->add_linked_script("../js/wizard.utils.js");
		$oP->add_linked_script("../js/linkswidget.js");
		$oP->add_linked_script("../js/linksdirectwidget.js");
		$oP->add_linked_script("../js/extkeywidget.js");
		$oP->add_linked_script("../js/jquery.blockUI.js");
		break;		
	}
		
	switch($operation)
	{
		case 'new': // Form to create a new object
			// Specific to itop-object-copier
			$iRule = utils::ReadParam('rule', -1);
			$iSourceId = utils::ReadParam('source_id', -1);
			$sSourceClass = utils::ReadParam('source_class', '');
			if ($iRule == -1)
			{
				throw new ApplicationException(Dict::Format('UI:Error:1ParametersMissing', 'rule'));
			}
			if ($iSourceId == -1)
			{
				throw new ApplicationException(Dict::Format('UI:Error:1ParametersMissing', 'source_id'));
			}
			$aRules = MetaModel::GetModuleSetting('itop-object-copier', 'rules', array());
			if (!isset($aRules[$iRule]))
			{
				throw new ApplicationException('Wrong rule id: '.$iRule);
			}
			$aRuleData = $aRules[$iRule];

			$bCheckSubClass = utils::ReadParam('checkSubclass', true);

			// Specific to itop-object-copier
			if ($bCheckSubClass)
			{
				$sClass = $aRuleData['dest_class'];
				if ($sClass == '')
				{
					$sClass = $sSourceClass;
				}
			}
			else
			{
				$sClass = utils::ReadParam('class', true);
			}
			$oSourceObject = MetaModel::GetObject($sSourceClass, $iSourceId);
			$sTitle = iTopObjectCopier::FormatMessage($aRuleData, 'form_label', $oSourceObject);
			$oP->add("<div class=\"header_message message_info\">$sTitle</div>\n");

			// If the specified class has subclasses, ask the user an instance of which class to create
			$aSubClasses = MetaModel::EnumChildClasses($sClass, ENUM_CHILD_CLASSES_ALL); // Including the specified class itself
			$aPossibleClasses = array();
			$sRealClass = '';
			if ($bCheckSubClass)
			{
				foreach($aSubClasses as $sCandidateClass)
				{
					if (!MetaModel::IsAbstract($sCandidateClass) && (UserRights::IsActionAllowed($sCandidateClass, UR_ACTION_MODIFY) == UR_ALLOWED_YES))
					{
						$aPossibleClasses[$sCandidateClass] = MetaModel::GetName($sCandidateClass);
					}
				}
				// Only one of the subclasses can be instantiated...
				if (count($aPossibleClasses) == 1)
				{
					$aKeys = array_keys($aPossibleClasses);
					$sRealClass = $aKeys[0];
				}
			}
			else
			{
				$sRealClass = $sClass;
			}

			// Specific to itop-object-copier
			$aCopyArgs = array();
			$aCopyArgs['exec_module'] = utils::ReadParam('exec_module', null, false, 'raw_data');
			$aCopyArgs['exec_page'] = utils::ReadParam('exec_page', null, false, 'raw_data');
			$aCopyArgs['exec_env'] = utils::ReadParam('exec_env', null, false, 'raw_data');
			$aCopyArgs['rule'] = $iRule;
			$aCopyArgs['source_id'] = $iSourceId;
			$aCopyArgs['source_class'] = $sSourceClass;
			$aCopyArgs['action'] = utils::GetAbsoluteUrlModulePage(basename(__DIR__), basename(__FILE__)); // 'action' must be specified for compatibility with iTop 2.2.0

			if (!empty($sRealClass))
			{
				// Display the creation form
				$sClassLabel = MetaModel::GetName($sRealClass);
				// Note: some code has been duplicated to the case 'apply_new' when a data integrity issue has been found
				$oP->set_title(Dict::Format('UI:CreationPageTitle_Class', $sClassLabel));
				$oP->add("<h1>".MetaModel::GetClassIcon($sRealClass)."&nbsp;".Dict::Format('UI:CreationTitle_Class', $sClassLabel)."</h1>\n");
				$oP->add("<div class=\"wizContainer\">\n");

				// Set all the default values in an object and clone this "default" object
				$oObjToClone = MetaModel::NewObject($sRealClass);

				// 1st - set context values
				$oAppContext->InitObjectFromContext($oObjToClone);

				// 2nd - set values from the page argument 'default'
				$oObjToClone->UpdateObjectFromArg('default');

				// Specific to itop-object-copier
				try
				{
					iTopObjectCopier::PrepareObject($aRuleData, $oObjToClone, $oSourceObject);
				}
				catch (Exception $e)
				{
					iTopObjectCopier::LogError($iRule, 'preset - '.$e->getMessage());
					$sMessage = Dict::Format('object-copier:error:preset', $e->getMessage());
					$oP->add("<div class=\"header_message message_error\">$sMessage</div>\n");
				}

				cmdbAbstractObject::DisplayCreationForm($oP, $sRealClass, $oObjToClone, array(), $aCopyArgs);
				$oP->add("</div>\n");

				$aCurrentValues = array();
				foreach (MetaModel::ListAttributeDefs(get_class($oObjToClone)) as $sAttCode => $oAttDef)
				{
					if (!$oAttDef->IsScalar()) continue;

					$iFlags = $oObjToClone->GetAttributeFlags($sAttCode);
					if ($oAttDef->IsWritable() && (($iFlags & OPT_ATT_READONLY) || ($iFlags & OPT_ATT_HIDDEN)))
					{
						if ($oAttDef instanceof AttributeDateTime)
						{
							// Such attributes are parsed on the server side
							$aCurrentValues[$sAttCode] = $oObjToClone->GetEditValue($sAttCode);
						}
						else
						{
							$aCurrentValues[$sAttCode] = $oObjToClone->Get($sAttCode);
						}
					}
				}
				$sCurrentValues = json_encode($aCurrentValues);

				$oP->add_ready_script(
					<<<EOF
// Cancel => Back to details of the object we come from
$('#form_2 button.cancel').click( function() { BackToDetails('$sSourceClass', $iSourceId, '')} );

// Hack: add the hidden (preset) fields into the Wizard Helper data (ajax autocomplete and widget reloads)
oWizardHelper.ToJSON_original = oWizardHelper.ToJSON;
oWizardHelper.ToJSON = function(){
	var oData = this.m_oData;
	var oFixedData = $sCurrentValues;
	for (var sAttCode in oFixedData)
	{
		if (!oData.m_oCurrentValues.hasOwnProperty(sAttCode))
		{
			oData.m_oCurrentValues[sAttCode] = oFixedData[sAttCode];
		}
	}
	return JSON.stringify(oData);
};
EOF
				);
			}
			else
			{
				// Select the derived class to create
				$sClassLabel = MetaModel::GetName($sClass);
				$oP->add("<h1>".MetaModel::GetClassIcon($sClass)."&nbsp;".Dict::Format('UI:CreationTitle_Class', $sClassLabel)."</h1>\n");
				$oP->add("<div class=\"wizContainer\">\n");
				$oP->add('<form>');
				$oP->add('<p>'.Dict::Format('UI:SelectTheTypeOf_Class_ToCreate', $sClassLabel));
				foreach($aCopyArgs as $sName => $value)
				{
					if (is_scalar($value))
					{
						$oP->add("<input type=\"hidden\" name=\"$sName\" value=\"$value\">\n");
					}
				}
				$oP->add($oAppContext->GetForForm());
				$oP->add("<input type=\"hidden\" name=\"checkSubclass\" value=\"0\">\n");
				$oP->add("<input type=\"hidden\" name=\"operation\" value=\"new\">\n");
				$aDefaults = utils::ReadParam('default', array(), false, 'raw_data');
				foreach($aDefaults as $key => $value)
				{
					if (is_array($value))
					{
						foreach($value as $key2 => $value2)
						{
							if (is_array($value2))
							{
								foreach($value2 as $key3 => $value3)
								{
									$sValue = htmlentities($value3, ENT_QUOTES, 'UTF-8');
									$oP->add("<input type=\"hidden\" name=\"default[$key][$key2][$key3]\" value=\"$sValue\">\n");
								}
							}
							else
							{
								$sValue = htmlentities($value2, ENT_QUOTES, 'UTF-8');
								$oP->add("<input type=\"hidden\" name=\"default[$key][$key2]\" value=\"$sValue\">\n");
							}
						}
					}
					else
					{
						$sValue = htmlentities($value, ENT_QUOTES, 'UTF-8');
						$oP->add("<input type=\"hidden\" name=\"default[$key]\" value=\"$sValue\">\n");
					}
				}
				$oP->add('<select name="class">');
				asort($aPossibleClasses);
				foreach($aPossibleClasses as $sClassName => $sClassLabel)
				{
					$sSelected = ($sClassName == $sClass) ? 'selected' : '';
					$oP->add("<option $sSelected value=\"$sClassName\">$sClassLabel</option>");
				}
				$oP->add('</select>');
				$oP->add("&nbsp; <input type=\"submit\" value=\"".Dict::S('UI:Button:Apply')."\"></p>");
				$oP->add('</form>');
				$oP->add("</div>\n");
			}
		break;
	
		///////////////////////////////////////////////////////////////////////////////////////////

		case 'apply_new': // Creation of a new object
		// Specific to itop-object-copier
		$iRule = utils::ReadParam('rule', -1);
		$iSourceId = utils::ReadParam('source_id', -1);
		$sSourceClass = utils::ReadParam('source_class', '');
		$oSourceObject = MetaModel::GetObject($sSourceClass, $iSourceId);
		$aRules = MetaModel::GetModuleSetting('itop-object-copier', 'rules', array());
		if (!isset($aRules[$iRule]))
		{
			throw new ApplicationException('Wrong rule id: '.$iRule);
		}
		$aRuleData = $aRules[$iRule];

		$sClass = utils::ReadPostedParam('class', '', 'class');
		$sClassLabel = MetaModel::GetName($sClass);
		$sTransactionId = utils::ReadPostedParam('transaction_id', '');
		if ( empty($sClass) ) // TO DO: check that the class name is valid !
		{
			throw new ApplicationException(Dict::Format('UI:Error:1ParametersMissing', 'class'));
		}
		if (!utils::IsTransactionValid($sTransactionId, false))
		{
			$oP->p("<strong>".Dict::S('UI:Error:ObjectAlreadyCreated')."</strong>\n");
		}
		else
		{
			$oObj = MetaModel::NewObject($sClass);
			try
			{
				// Do not write attributes that will be updated with posted data (conflict with case logs)
				iTopObjectCopier::PrepareObject($aRuleData, $oObj, $oSourceObject, true);
			}
			catch (Exception $e)
			{
				iTopObjectCopier::LogError($iRule, 'preset - '.$e->getMessage());
			}
			$sStateAttCode = MetaModel::GetStateAttributeCode($sClass);
			if (!empty($sStateAttCode))
			{
				$sTargetState = utils::ReadPostedParam('obj_state', '');
				if ($sTargetState != '')
				{
					$oObj->Set($sStateAttCode, $sTargetState);
				}
			}
			$oObj->UpdateObjectFromPostedForm();
		}
		if (isset($oObj) && is_object($oObj))
		{
			$sClass = get_class($oObj);
			$sClassLabel = MetaModel::GetName($sClass);

			list($bRes, $aIssues) = $oObj->CheckToWrite();
			if ($bRes)
			{
				$oObj->DBInsert();

				// Specific to itop-object-copier
				// Note: must be done when the id is known
				try
				{
					$oSourceObject = MetaModel::GetObject($sSourceClass, $iSourceId);
					iTopObjectCopier::RetrofitOnSourceObject($aRuleData, $oObj, $oSourceObject);
					$oSourceObject->DBUpdate();

					$sMessage = iTopObjectCopier::FormatMessage($aRuleData, 'report_label', $oSourceObject);
					cmdbAbstractObject::SetSessionMessage(get_class($oObj), $oObj->GetKey(), 'object-copier', $sMessage, 'info', 0, true /* must not exist */);
				}
				catch (Exception $e)
				{
					iTopObjectCopier::LogError($iRule, 'retrofit - '.$e->getMessage());
					$sMessage = Dict::Format('object-copier:error:retrofit', $e->getMessage());
					cmdbAbstractObject::SetSessionMessage(get_class($oObj), $oObj->GetKey(), 'object-copier', $sMessage, 'error', 0, true /* must not exist */);
				}

				utils::RemoveTransaction($sTransactionId);
				$oP->set_title(Dict::S('UI:PageTitle:ObjectCreated'));
				$sMessage = Dict::Format('UI:Title:Object_Of_Class_Created', $oObj->GetName(), $sClassLabel);
				
				$oObj = MetaModel::GetObject(get_class($oObj), $oObj->GetKey()); //Workaround: reload the object so that the linkedset are displayed properly

				$sNextAction = utils::ReadPostedParam('next_action', '');
				if (!empty($sNextAction))
				{
					$oP->add("<h1>$sMessage</h1>");
					ApplyNextAction($oP, $oObj, $sNextAction);
				}
				else
				{
					// Nothing more to do
					ReloadAndDisplay($oP, $oObj, 'create', $sMessage, 'ok');
				}
			}
			else
			{
				// Found issues, explain and give the user a second chance
				//
				$oP->set_title(Dict::Format('UI:CreationPageTitle_Class', $sClassLabel));
				$oP->add("<h1>".MetaModel::GetClassIcon($sClass)."&nbsp;".Dict::Format('UI:CreationTitle_Class', $sClassLabel)."</h1>\n");
				$oP->add("<div class=\"wizContainer\">\n");
				cmdbAbstractObject::DisplayCreationForm($oP, $sClass, $oObj);
				$oP->add("</div>\n");
				$sIssueDesc = Dict::Format('UI:ObjectCouldNotBeWritten', implode(', ', $aIssues));
				$oP->add_ready_script("alert('".addslashes($sIssueDesc)."');");
			}
		}
		break;
			
		///////////////////////////////////////////////////////////////////////////////////////////

		case 'cancel': // An action was cancelled
		$oP->set_title(Dict::S('UI:OperationCancelled'));
		$oP->add('<h1>'.Dict::S('UI:OperationCancelled').'</h1>');
		break;
	
		///////////////////////////////////////////////////////////////////////////////////////////

		default: // Menu node rendering (templates)
		ApplicationMenu::LoadAdditionalMenus();
		$oMenuNode = ApplicationMenu::GetMenuNode(ApplicationMenu::GetMenuIndexById(ApplicationMenu::GetActiveNodeId()));
		if (is_object($oMenuNode))
		{
		
			$oMenuNode->RenderContent($oP, $oAppContext->GetAsHash());
			$oP->set_title($oMenuNode->GetLabel());
		}
		
		///////////////////////////////////////////////////////////////////////////////////////////

	}
	$oP->output();	
}
catch(CoreException $e)
{
	require_once(APPROOT.'/setup/setuppage.class.inc.php');
	$oP = new SetupPage(Dict::S('UI:PageTitle:FatalError'));
	if ($e instanceof SecurityException)
	{
		$oP->add("<h1>".Dict::S('UI:SystemIntrusion')."</h1>\n");
	}
	else
	{
		$oP->add("<h1>".Dict::S('UI:FatalErrorMessage')."</h1>\n");
	}	
	$oP->error(Dict::Format('UI:Error_Details', $e->getHtmlDesc()));	
	$oP->output();

	if (MetaModel::IsLogEnabledIssue())
	{
		if (MetaModel::IsValidClass('EventIssue'))
		{
			try
			{
				$oLog = new EventIssue();
	
				$oLog->Set('message', $e->getMessage());
				$oLog->Set('userinfo', '');
				$oLog->Set('issue', $e->GetIssue());
				$oLog->Set('impact', 'Page could not be displayed');
				$oLog->Set('callstack', $e->getTrace());
				$oLog->Set('data', $e->getContextData());
				$oLog->DBInsertNoReload();
			}
			catch(Exception $e)
			{
				IssueLog::Error("Failed to log issue into the DB");
			}
		}

		IssueLog::Error($e->getMessage());
	}

	// For debugging only
	//throw $e;
}
catch(Exception $e)
{
	require_once(APPROOT.'/setup/setuppage.class.inc.php');
	$oP = new SetupPage(Dict::S('UI:PageTitle:FatalError'));
	$oP->add("<h1>".Dict::S('UI:FatalErrorMessage')."</h1>\n");	
	$oP->error(Dict::Format('UI:Error_Details', $e->getMessage()));	
	$oP->output();

	if (MetaModel::IsLogEnabledIssue())
	{
		if (MetaModel::IsValidClass('EventIssue'))
		{
			try
			{
				$oLog = new EventIssue();
	
				$oLog->Set('message', $e->getMessage());
				$oLog->Set('userinfo', '');
				$oLog->Set('issue', 'PHP Exception');
				$oLog->Set('impact', 'Page could not be displayed');
				$oLog->Set('callstack', $e->getTrace());
				$oLog->Set('data', array());
				$oLog->DBInsertNoReload();
			}
			catch(Exception $e)
			{
				IssueLog::Error("Failed to log issue into the DB");
			}
		}

		IssueLog::Error($e->getMessage());
	}
}
?>