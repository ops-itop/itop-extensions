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
 * 由于setup/compiler.class.inc.php中写死了编译的Attribute类型，AttributeClass不能正确编译
 * 这里自定义一个AttributeClassCustom，将default_value作为class_category，可以走编译的默认行为
 **/
class AttributeClassCustom extends AttributeClass
{
	public function __construct($sCode, $aParams)
	{
		$aParams["class_category"] = $aParams["default_value"];
		$aParams["more_values"] = "";
		$aParams["default_value"] = ""; // 需要清空default_value，因为AttributeClass的default_value需要在ValueSetEnumClasses中存在
		parent::__construct($sCode, $aParams);
	}
}

/**
 * 这段代码使用AttributeClassCustom可以替代，暂时没有用到
 **/
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
