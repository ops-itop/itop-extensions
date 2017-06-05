<?php
// Copyright (C) 2016 Combodo SARL
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
 * Class RequestTemplateFieldsHandler
 * Build the customfields, depending on the service of the user request
 *
 */
class RequestTemplateFieldsHandler extends TemplateFieldsHandler
{
	/**
	 * @param null $sClass
	 * @return array
	 */
	static public function GetPrerequisiteAttributes($sClass = null)
	{
		return array('servicesubcategory_id');
	}

	/**
	 * @return DBObjectSet of Templates
	 */
	protected function FindTemplates(DBObject $oHostObject)
	{
		$oSearch = DBSearch::FromOQL('SELECT RequestTemplate WHERE servicesubcategory_id = :servicesubcategory_id');
		$oSet = new DBObjectSet($oSearch, array(), array('servicesubcategory_id' => $oHostObject->Get('servicesubcategory_id')));
		return $oSet;
	}

	/**
	 * Write template data to the case log (legacy behavior)
	 * @param $aValues
	 * @param $oExtraData|null TemplateExtraData
	 * @throws CoreUnexpectedValue
	 * @throws Exception
	 */
	public function BeyondWriteValues(DBObject $oHostObject, $aValues, TemplateExtraData $oExtraData = null)
	{
		if (!isset($oHostObject->__request_template_in_update__))
		{
			$sCopyToLog = utils::GetConfig()->GetModuleSetting('itop-request-template', 'copy_to_log', 'public_log');
			if (($sCopyToLog != '') && MetaModel::IsValidAttCode(get_class($oHostObject), $sCopyToLog))
			{
				if ($oExtraData)
				{
					$aTemplateData = json_decode($aValues['template_data'], true);
					foreach ($aTemplateData['hidden_fields'] as $sFieldCode => $foo)
					{
						// Do not show this value in the case log
						unset($aValues['user_data'][$sFieldCode]);
					}

					$aLines = array();
					foreach ($aValues['user_data'] as $sFieldCode => $value)
					{
						$aFieldData = $aTemplateData['fields'][$sFieldCode];
						$sLabel = $aFieldData['label'];
						$sDisplayValue = RequestTemplate::MakeHTMLValue($aFieldData, $value);
						if (array_key_exists($sFieldCode, $aValues['user_data_objclass']))
						{
							$sDisplayValue = $aValues['user_data_objname'][$sFieldCode];
						}
						switch($aTemplateData['fields'][$sFieldCode]['input_type'])
						{
							case 'date':
							$sDisplayValue = AttributeDate::GetFormat()->Format($sDisplayValue);
							break;
							
							case 'date_and_time':
							$sDisplayValue = AttributeDateTime::GetFormat()->Format($sDisplayValue);
							break;
							
						}
						$aLines[] = '<b>'.$sLabel.'</b> : '.$sDisplayValue;
					}
					$sValuesAsText = '<ul><li>'.implode('</li><li>', $aLines).'</li></ul>';
					$sTemplateDesc = '<p>'.MetaModel::GetAttributeDef(get_class($oHostObject), $this->sAttCode)->GetLabel().' : '.$aTemplateData['label'].'</p>'.$sValuesAsText;

					// Mark the object for update because we are currently in DBUpdate and the case log might already have been written, and DBUpdate cannot be called from within this function.
					$oHostObject->__request_template_to_case_log__ = $sTemplateDesc;
				}
			}
		}
	}
}

class RequestTemplatePlugIn implements iApplicationObjectExtension
{
	public function OnIsModified($oObject)
	{
		return false;
	}

	public function OnCheckToWrite($oObject)
	{
		return array();
	}

	public function OnCheckToDelete($oObject)
	{
		return array();
	}

	public function OnDBUpdate($oObject, $oChange = null)
	{
	}

	public function OnDBInsert($oObject, $oChange = null)
	{
		if (isset($oObject->__request_template_to_case_log__))
		{
			$sTemplateDesc = $oObject->__request_template_to_case_log__;
			unset($oObject->__request_template_to_case_log__);
			$sCopyToLog = utils::GetConfig()->GetModuleSetting('itop-request-template', 'copy_to_log', 'public_log');
			$oObject->Set($sCopyToLog, $sTemplateDesc);
			$oObject->__request_template_in_update__ = true;
			$oObject->DBUpdate();
		}
	}

	public function OnDBDelete($oObject, $oChange = null)
	{
	}
}
