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
 * Modify itop-request-template.
 * Add OnCheckToWrite on name or friendlyname.
 */

class ListFunctionalCIHandler extends CustomFieldsHandler
{
	public function GetForTemplate($aValues, $sVerb, $bLocalize = true)
	{}
	public function GetAsHTML($aValues, $bLocalize = true)
	{}
	public function GetAsXML($aValues, $bLocalize = true)
	{}
	public function GetAsCSV($aValues, $sSeparator = ',', $sTextQualifier = '"', $bLocalize = true)
	{}
	public function ReadValues(DBObject $oHostObject)
	{}
	public function WriteValues(DBObject $oHostObject, $aValues)
	{}
	public function DeleteValues(DBObject $oHostObject)
	{}
	public function CompareValues($aValuesA, $aValuesB)
	{}
	public function GetValueFingerprint()
	{}
	public function BuildForm(DBObject $oHostObject, $sFormId)
	{
		$aSubClasses = MetaModel::EnumChildClasses('FunctionalCI', ENUM_CHILD_CLASSES_EXCLUDETOP);
		$aPossibleClasses = array();
		foreach($aSubClasses as $sCandidateClass)
		{
			if (!MetaModel::IsAbstract($sCandidateClass))
			{
				array_push($aPossibleClasses, $sCandidateClass);
			}
		}
		//$sPossibleClasses = implode(",",$aPossibleClasses);
		
		$iFunctionalCI = isset($this->aValues['functionalci_id']) ? $this->aValues['functionalci_id'] : 0;
		$this->oForm = new \Combodo\iTop\Form\Form($sFormId);
		$oField = new Combodo\iTop\Form\Field\SelectField('functionalci_id');
		$oField->SetChoices($aPossibleClasses);
		$oField->SetCurrentValue("iFunctionalCI");
		$this->oForm->AddField($oField);
	}
}

class RequestTemplatePlugInModify extends RequestTemplatePlugIn
{
	public function OnCheckToWrite($oObject)
	{
		$errmsg = array("对象已存在");
		return(array());
	}
}
