<?php
// Copyright (C) 2010-2016 Combodo SARL
//
//   This program is free software; you can redistribute it and/or modify
//   it under the terms of the GNU General Public License as published by
//   the Free Software Foundation; version 3 of the License.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of the GNU General Public License
//   along with this program; if not, write to the Free Software
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA


/**
 * Module templates-base
 *
 * @author      Erwan Taloc <erwan.taloc@combodo.com>
 * @author      Romain Quetiez <romain.quetiez@combodo.com>
 * @author      Denis Flaven <denis.flaven@combodo.com>
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */

abstract class Template extends cmdbAbstractObject
{
	public static function Init()
	{
		$aParams = array
		(
			"category" => "bizmodel,searchable",
			"key_type" => "autoincrement",
			"name_attcode" => "name",
			"state_attcode" => "",
			"reconc_keys" => array("name","label"),
			"db_table" => "tpl_base",
			"db_key_field" => "id",
			"db_finalclass_field" => "",
			"display_template" => "",
		);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();

		MetaModel::Init_AddAttribute(new AttributeString("name", array("allowed_values"=>null, "sql"=>"name", "default_value"=>"", "is_null_allowed"=>false, "depends_on"=>array())));
		MetaModel::Init_AddAttribute(new AttributeString("label", array("allowed_values"=>null, "sql"=>"label", "default_value"=>"", "is_null_allowed"=>false, "depends_on"=>array())));
		MetaModel::Init_AddAttribute(new AttributeString("description", array("allowed_values"=>null, "sql"=>"description", "default_value"=>"", "is_null_allowed"=>true, "depends_on"=>array())));
		MetaModel::Init_AddAttribute(new AttributeLinkedSet("field_list", array("linked_class"=>"TemplateField", "ext_key_to_me"=>"template_id", "allowed_values"=>null, "count_min"=>0, "count_max"=>0,"edit_mode"=>LINKSET_EDITMODE_INPLACE, "depends_on"=>array())));

		MetaModel::Init_SetZListItems('details', array('name', 'label', 'description', 'field_list'));
		MetaModel::Init_SetZListItems('advanced_search', array('name', 'label', 'description'));
		MetaModel::Init_SetZListItems('standard_search', array('name', 'label', 'description'));
		MetaModel::Init_SetZListItems('list', array('name', 'label'));
	}

	/**
	 * Make a serializable array out of the characteristics of the template
	 */
	public function ToArray()
	{
		$aRet = array(
			'class' => get_class($this),
			'id' => $this->GetKey(),
			'label' => $this->Get('label'),
			'name' => $this->Get('name'),
			'description' => $this->Get('description'),
			'fields' => array(),
			'hidden_fields' => array(),
		);
		$oFieldSet = $this->Get('field_list');
		while ($oField = $oFieldSet->Fetch())
		{
			$aFieldData = $oField->ToArray();
			$aRet['fields'][$aFieldData['code']] = $aFieldData;
			if ($aFieldData['input_type'] == 'hidden')
			{
				$aRet['hidden_fields'][$aFieldData['code']] = true;
			}
		}
		return $aRet;
	}

	/**
	 * @param \Combodo\iTop\Form\Form $oForm
	 * @param $aTemplateData
	 * @param $aValues
	 * @throws Exception
	 */
	static public function PopulateUserDataForm(\Combodo\iTop\Form\Form $oForm, $aTemplateData, $aValues)
	{
		$aFieldSpecs = $aTemplateData['fields'];
		$aExtKeyFields = array();
		$aFields = array(); // code => field spec
		$aDisplaySortKeys = array();
		foreach ($aFieldSpecs as $aFieldData)
		{
			$sFieldCode = $aFieldData['code'];
			$aFields[$sFieldCode] = $aFieldData;
			$aDisplaySortKeys[] = (int)$aFieldData['order'];

			switch ($aFieldData['input_type'])
			{
				case 'drop_down_list':
				case 'radio_buttons':
					$sValues = $aFieldData['values'];
					$oSearch = null;
					$aTemplateArgs = array();
					if (strlen($sValues) > 0)
					{
						try
						{
							$oSearch = DBObjectSearch::FromOQL($sValues);
							foreach ($oSearch->GetQueryParams() as $sParam => $foo)
							{
								$iPos = strpos($sParam, '->');
								if ($iPos !== false)
								{
									$sRefName = substr($sParam, 0, $iPos);
									if ($sRefName == 'template')
									{
										$sCode = substr($sParam, $iPos + 2);
										$aTemplateArgs[$sCode] = null;
										$oForm->AddFieldDependency($sFieldCode, $sCode);
									}
								}
							}
						}
						catch(Exception $e)
						{
							// The values are defined as a CSV list
						}
					}
					// Keep that information for further reuse in ArrayToFormField
					$aFields[$sFieldCode]['_oSearch_'] = $oSearch;
					$aFields[$sFieldCode]['_aTemplateArgs_'] = $aTemplateArgs;
					if ($oSearch)
					{
						// List ext keys to record object class/name when storing the info into the DB
						$aExtKeyFields[$sFieldCode] = $oSearch->GetClass();
					}
					break;
			} // switch(input_type)
		}

		// Build the fields with the relevant display order
		array_multisort($aDisplaySortKeys, $aFields);
		foreach ($aFields as $sFieldCode => $aFieldData)
		{
			if (self::IsFieldVisibleToCurrentUser($aTemplateData, $sFieldCode))
			{
				$oField = static::MakeFormField($aFieldData, $oForm);
				if (array_key_exists($sFieldCode, $aValues))
				{
					$oField->SetCurrentValue($aValues[$sFieldCode]);
				}
			}
			else
			{
				// Leave a placeholder so as to preserve the field order
				$oField = new Combodo\iTop\Form\Field\HiddenField($aFieldData['code']);
				$oField->SetCurrentValue('');
			}
			$oForm->AddField($oField);
		}
		return $aExtKeyFields;
	}

	/**
	 * Overridable in derived classes
	 * @param $aFieldData Field spec as returned by ToArray()
	 * @return bool
	 */
	static protected function IsVisibleToCurrentUser($aFieldData)
	{
		$bRet = true;
		switch ($aFieldData['input_type'])
		{
			case 'hidden':
				$bRet = true;
				$sProfiles = utils::GetConfig()->GetModuleSetting('templates-base', 'hidden_fields_profiles', 'Portal user');
				foreach (explode(',', $sProfiles) as $sProfile)
				{
					if (UserRights::HasProfile(trim($sProfile)))
					{
						$bRet = false;
						break;
					}
				}
				break;
		}
		return $bRet;
	}

	/**
	 * API for checking the visibility of a field
	 * @param $aTemplateData Template spec as returned by ToArray()
	 * @param $sFieldCode
	 * @return bool
	 */
	final static public function IsFieldVisibleToCurrentUser($aTemplateData, $sFieldCode)
	{
		$aCallIsVisibleToCurrentUser = array($aTemplateData['class'], 'IsVisibleToCurrentUser');
		$aFieldData = $aTemplateData['fields'][$sFieldCode];
		return (call_user_func($aCallIsVisibleToCurrentUser, $aFieldData));
	}

	/**
	 * @param $aFieldData Field spec as returned by TemplateField::ToArray()
	 * @return \Combodo\iTop\Form\Field\Field
	 */
	static protected function MakeFormField($aFieldData, \Combodo\iTop\Form\Form $oForm)
	{
		switch ($aFieldData['input_type'])
		{
			case 'date':
				$oField = new Combodo\iTop\Form\Field\DateTimeField($aFieldData['code']);
				$oField->SetPHPDateTimeFormat((string)AttributeDate::GetFormat());
				$oField->SetJSDateTimeFormat(AttributeDate::GetFormat()->ToMomentJS());
				$oField->AddValidator(new Combodo\iTop\Form\Validator\Validator(AttributeDate::GetFormat()->ToRegExpr()));
				$oField->SetLabel($aFieldData['label']);
				$oField->SetMandatory($aFieldData['mandatory'] == 'yes');
				$oField->SetCurrentValue(AttributeDate::GetFormat()->Format($aFieldData['initial_value']));
				$oField->SetDateOnly(true);
				break;

			case 'date_and_time':
				$oField = new Combodo\iTop\Form\Field\DateTimeField($aFieldData['code']);
				$oField->SetPHPDateTimeFormat((string)AttributeDateTime::GetFormat());
				$oField->SetJSDateTimeFormat(AttributeDateTime::GetFormat()->ToMomentJS());
				$oField->AddValidator(new Combodo\iTop\Form\Validator\Validator(AttributeDateTime::GetFormat()->ToRegExpr()));
				$oField->SetLabel($aFieldData['label']);
				$oField->SetMandatory($aFieldData['mandatory'] == 'yes');
				$oField->SetCurrentValue(AttributeDateTime::GetFormat()->Format($aFieldData['initial_value']));
				break;

			case 'duration':
				$oField = new Combodo\iTop\Form\Field\DurationField($aFieldData['code']);
				$oField->SetLabel($aFieldData['label']);
				$oField->SetMandatory($aFieldData['mandatory'] == 'yes');
				$oField->SetCurrentValue($aFieldData['initial_value']);
				break;

			case 'text_area':
				$oField = new Combodo\iTop\Form\Field\TextAreaField($aFieldData['code']);
				$oField->SetFormat(Combodo\iTop\Form\Field\TextAreaField::ENUM_FORMAT_TEXT);
				$oField->SetLabel($aFieldData['label']);
				$oField->SetMandatory($aFieldData['mandatory'] == 'yes');
				$oField->SetCurrentValue($aFieldData['initial_value']);
				$oField->AddValidator(new \Combodo\iTop\Form\Validator\Validator($aFieldData['format']));
				break;

			case 'drop_down_list':
			case 'radio_buttons':
				$sInputType = $aFieldData['input_type']; // could be changed to autocomplete...

				switch($sInputType)
				{
					case 'radio_buttons':
					case 'drop_down_list':
					default:
						$oSearch = $aFieldData['_oSearch_'];
						if ($oSearch !== null)
						{
							$oField = new Combodo\iTop\Form\Field\SelectObjectField($aFieldData['code'], function($oThis) use($aFieldData, $oForm) {
								// Prepare arguments out of the current values (already validated)
								$aTemplateArgs = $aFieldData['_aTemplateArgs_'];
								$aQueryArgs = array();
								foreach ($aTemplateArgs as $sCode => $foo)
								{
									$value = $oForm->GetField($sCode)->GetCurrentValue();
									if (is_null($value)) $value = 0; // Otherwise the parameter is evaluated to NULL, which is NOT valid in OQL
									$aQueryArgs['template->'.$sCode] = $value;
								}
								$oSearch = $aFieldData['_oSearch_'];
								$oSearch->SetInternalParams($aQueryArgs);
								$oThis->SetSearch($oSearch);
							});
							$oField->SetLabel($aFieldData['label']);
							$oField->SetMandatory($aFieldData['mandatory'] == 'yes');
							$oField->SetCurrentValue($aFieldData['initial_value']);
							if ($sInputType == 'radio_buttons')
							{
								$oField->SetControlType(Combodo\iTop\Form\Field\SelectObjectField::CONTROL_RADIO_VERTICAL);
							}
							$oField->SetMaximumComboLength(MetaModel::GetConfig()->Get('max_combo_length'));
							$oField->SetMinAutoCompleteChars(MetaModel::GetConfig()->Get('min_autocomplete_chars'));
						}
						elseif ($sInputType == 'radio_buttons')
						{
							$oField = new Combodo\iTop\Form\Field\RadioField($aFieldData['code']);
							$oField->SetLabel($aFieldData['label']);
							$oField->SetMandatory($aFieldData['mandatory'] == 'yes');
							$oField->SetCurrentValue($aFieldData['initial_value']);

							$aChoices = array();
							foreach(explode(',',$aFieldData['values']) as $sVal)
							{
								$aChoices[$sVal] = $sVal;
							}
							$oField->SetChoices($aChoices);
						}
						else
						{
							$oField = new Combodo\iTop\Form\Field\SelectField($aFieldData['code']);
							$oField->SetLabel($aFieldData['label']);
							$oField->SetMandatory($aFieldData['mandatory'] == 'yes');
							$oField->SetCurrentValue($aFieldData['initial_value']);

							$aChoices = array();
							foreach(explode(',',$aFieldData['values']) as $sVal)
							{
								$aChoices[$sVal] = $sVal;
							}
							$oField->SetChoices($aChoices);
						}
				}
				break;

			case 'read_only':
			case 'hidden':
				$oField = new Combodo\iTop\Form\Field\TextAreaField($aFieldData['code']);
				$oField->SetFormat(Combodo\iTop\Form\Field\TextAreaField::ENUM_FORMAT_TEXT);
				$oField->SetLabel($aFieldData['label']);
				$oField->SetReadOnly(true);
				$oField->SetCurrentValue($aFieldData['initial_value']);
				break;

			case 'text':
			default:
				$oField = new Combodo\iTop\Form\Field\StringField($aFieldData['code']);
				$oField->SetLabel($aFieldData['label']);
				$oField->SetMandatory($aFieldData['mandatory'] == 'yes');
				$oField->SetCurrentValue($aFieldData['initial_value']);
				$oField->AddValidator(new \Combodo\iTop\Form\Validator\Validator($aFieldData['format']));
				break;
		} // switch(input_type)
		return $oField;
	}

	/**
	 * @param $aFieldData Field spec as returned by TemplateField::ToArray()
	 * @param $value
	 * @return string
	 */
	static public function MakeHTMLValue($aFieldData, $value)
	{
		$sRet = $value;
		switch ($aFieldData['input_type'])
		{
			case 'drop_down_list':
			case 'radio_buttons':
				break;

			case 'text_area':
			case 'read_only':
			case 'hidden':
				$sRet = '<div>'.utils::TextToHtml($value).'</div>';
				break;

			case 'duration':
				$sRet = htmlentities(AttributeDuration::FormatDuration($value), ENT_QUOTES, 'UTF-8');
				break;

			case 'text':
			default:
				$sRet = htmlentities($value, ENT_QUOTES, 'UTF-8');
				break;
		} // switch(input_type)
		return $sRet;
	}

	/**
	 *	Get the form data as an array
	 * Must be preserved for the legacy User Portal
	 */
	public function GetPostedValuesAsArray($oObject)
	{
		$aValues = array();

		$sFormPrefix = '';

		$oFieldSearch = DBObjectSearch::FromOQL('SELECT TemplateField WHERE template_id = :template_id');
		$oFieldSearch->AllowAllData();
		$oFieldSet = new DBObjectSet($oFieldSearch, array('order' => true), array('template_id' => $this->GetKey()));
		while($oField = $oFieldSet->Fetch())
		{
			$sAttCode = $oField->GetKey();
			$value = utils::ReadPostedParam("tpl_{$sFormPrefix}{$sAttCode}", null, 'raw_data');
			if (!is_null($value))
			{
				$aValues[$oField->GetKey()] = array(
					'code' => $oField->Get('code'),
					'label' => $oField->Get('label'),
					'input_type' => $oField->Get('input_type'),
					'value' => $value
				);

				if ($oField->Get('input_type') == 'duration')
				{
					$iDurationSec = $value['d']*86400 + $value['h']*3600 + $value['m']*60 + $value['s'];
					$aValues[$oField->GetKey()]['value'] = AttributeDuration::FormatDuration($iDurationSec);
				}
				else if ($oField->Get('input_type') == 'date')
				{
					$aValues[$oField->GetKey()]['value'] = AttributeDate::GetFormat()->Parse($value);
				}
				else if ($oField->Get('input_type') == 'date_and_time')
				{
					$aValues[$oField->GetKey()]['value'] = AttributeDateTime::GetFormat()->Parse($value);
				}

				$sValues = $oField->Get('values');
				if (strlen($sValues) > 0)
				{
					try
					{
						$aAllowedValues = array();
						$oSearch = DBObjectSearch::FromOQL($sValues);
						// An OQL has been given, the value is in fact an object id
						// let's store the object friendlyname and metadata about the object
						if ($value == '')
						{
							$aValues[$oField->GetKey()]['value'] = '';
							$aValues[$oField->GetKey()]['value_obj_key'] = 0;
							$aValues[$oField->GetKey()]['value_obj_class'] = $oSearch->GetClass();
						}
						else
						{
							$oSelectedObject = MetaModel::GetObject($oSearch->GetClass(), $value);
							$aValues[$oField->GetKey()]['value'] = $oSelectedObject->Get('friendlyname');
							$aValues[$oField->GetKey()]['value_obj_key'] = $value;
							$aValues[$oField->GetKey()]['value_obj_class'] = get_class($oSelectedObject);
						}
					}
					catch(Exception $e)
					{
						// A CSV list has been given, keep it as is
					}
				}
			}
		}

		return $aValues;
	}

	/**
	 * Helper to dump the template data as text
	 * Must be preserved for the legacy User Portal
	 */
	public function GetPostedValuesAsText($oObject)
	{
		$aValues = $this->GetPostedValuesAsArray($oObject);
		$aLines = array();
		foreach ($aValues as $sFieldId => $aFieldData)
		{
			$aLines[] = $aFieldData['label']." : ".$aFieldData['value'];
		}

		$sRet = implode("\n", $aLines);
		return $sRet;
	}

	/**
	 * Record the template data in a structured way
	 * Must be preserved for the legacy User Portal
	 */
	public function RecordExtraDataFromPostedForm($oObject)
	{
		$aValues = $this->GetPostedValuesAsArray($oObject);

		$oExtraData = new TemplateExtraData();
		$oExtraData->Set('template_id', $this->GetKey());
		$oExtraData->Set('data', serialize($aValues));
		$oExtraData->Set('obj_class', get_class($oObject));
		$oExtraData->Set('obj_key', $oObject->GetKey());
		$oExtraData->DBInsert();
	}

	/**
	 * Display the form preview tab
	 *
	 */
	function DisplayBareRelations(WebPage $oPage, $bEditMode = false)
	{
		parent::DisplayBareRelations($oPage, $bEditMode);
		if (!$bEditMode)
		{
			$oPage->SetCurrentTab(Dict::S('Templates:PreviewTab:Title'));
			try
			{
				$oPage->add('<fieldset>');
				$oPage->add('<legend>'.Dict::S('Templates:PreviewTab:FormFields').'</legend>');

				$iId = 'fake_tpl';
				$sReloadSpan = "<span class=\"field_status\" id=\"fstatus_{$iId}\"></span>";
				$oPage->add('<table>');
				$oPage->add('<tr>');
				$oPage->add('<td>');
				$oPage->add('<div id="'.$iId.'_console_form">');
				$oPage->add('<div id="'.$iId.'_field_set">');
				$oPage->add('</div>');
				$oPage->add('</div>');
				$oPage->add('</td>');
				$oPage->add('<td>'.$sReloadSpan.'</td>'); // No validation span for this one: it does handle its own validation!
				$oPage->add('</tr>');
				$oPage->add('</table>');

				$oPage->add('</fieldset>');

				$aTemplateData = $this->ToArray();
				$oForm = new \Combodo\iTop\Form\Form('faker');
				$this->PopulateUserDataForm($oForm, $aTemplateData, array());
				$oForm->Finalize();
				$oRenderer = new \Combodo\iTop\Renderer\Console\ConsoleFormRenderer($oForm);
				$aRenderRes = $oRenderer->Render();

				$aFormHandlerOptions = array(
					'template_id' => $this->GetKey(),
				);
				$sFormHandlerOptions = json_encode($aFormHandlerOptions);
				$aFieldSetOptions = array(
					'field_identifier_attr' => 'data-field-id', // convention: fields are rendered into a div and are identified by this attribute
					'fields_list' => $aRenderRes,
					'fields_impacts' => $oForm->GetFieldsImpacts(),
					'form_path' => $oForm->GetId()
				);
				$sFieldSetOptions = json_encode($aFieldSetOptions);
				$oPage->add_linked_script(utils::GetAbsoluteUrlAppRoot().'js/form_handler.js');
				$oPage->add_linked_script(utils::GetAbsoluteUrlModulesRoot().'templates-base/template_form_handler.js');
				$oPage->add_linked_script(utils::GetAbsoluteUrlAppRoot().'js/field_set.js');
				$oPage->add_linked_script(utils::GetAbsoluteUrlAppRoot().'js/form_field.js');
				$oPage->add_linked_script(utils::GetAbsoluteUrlAppRoot().'js/subform_field.js');
				$oPage->add_ready_script("$('#{$iId}_console_form').template_form_handler($sFormHandlerOptions);");
				$oPage->add_ready_script("$('#{$iId}_field_set').field_set($sFieldSetOptions);");
				$oPage->add_ready_script("$('#{$iId}_console_form').template_form_handler('alignColumns');");
				$oPage->add_ready_script("$('#{$iId}_console_form').template_form_handler('option', 'field_set', $('#{$iId}_field_set'));");
				// field_change must be processed to refresh the hidden value at anytime
				$oPage->add_ready_script("$('#{$iId}_console_form').bind('value_change', function() { $('#{$iId}').val(JSON.stringify($('#{$iId}_field_set').triggerHandler('get_current_values'))); });");
				// update_value is triggered when preparing the wizard helper object for ajax calls
				$oPage->add_ready_script("$('#{$iId}').bind('update_value', function() { $(this).val(JSON.stringify($('#{$iId}_field_set').triggerHandler('get_current_values'))); });");
				// validate is triggered by CheckFields, on all the input fields, once at page init and once before submitting the form
				$oPage->add_ready_script("$('#{$iId}').bind('validate', function(evt, sFormId) { return ValidateCustomFields('$iId', sFormId) } );"); // Custom validation function


				$oPage->add_ready_script(
					<<<EOF
								// Starts the validation when the page is ready
			CheckFields('tpl_preview', false);
EOF
				);
			}
			catch (Exception $e)
			{
				$oPage->add('ERROR: '.$e->getMessage());
			}
		}
	}
}


class TemplateField extends cmdbAbstractObject
{
	public static function Init()
	{
		$aParams = array
		(
			"category" => "bizmodel,searchable,servicemgmt",
			"key_type" => "autoincrement",
			"name_attcode" => "code",
			"state_attcode" => "",
			"reconc_keys" => array("code"),
			"db_table" => "tpl_field",
			"db_key_field" => "id",
			"db_finalclass_field" => "",
			"display_template" => "",
			'order_by_default' => array('order' => true),
		);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();

		MetaModel::Init_AddAttribute(new AttributeExternalKey("template_id", array("targetclass"=>"Template", "jointype"=>null, "allowed_values"=>null, "sql"=>"template_id", "is_null_allowed"=>false, "on_target_delete"=>DEL_SILENT, "depends_on"=>array())));
		MetaModel::Init_AddAttribute(new AttributeExternalField("template_name", array("allowed_values"=>null, "extkey_attcode"=>'template_id', "target_attcode"=>'name', "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("code", array("allowed_values"=>null, "sql"=>"code", "default_value"=>"", "is_null_allowed"=>false, "depends_on"=>array(), 'validation_pattern' => '^[A-Za-z0-9_]*$')));
		MetaModel::Init_AddAttribute(new AttributeString("label", array("allowed_values"=>null, "sql"=>"label", "default_value"=>"", "is_null_allowed"=>false, "depends_on"=>array())));
		MetaModel::Init_AddAttribute(new AttributeInteger("order", array("allowed_values"=>null, "sql"=>"order", "default_value"=>0, "is_null_allowed"=>false, "depends_on"=>array())));
		MetaModel::Init_AddAttribute(new AttributeEnum("mandatory", array("allowed_values"=>new ValueSetEnum('yes,no'), "sql"=>"mandatory", "default_value"=>"no", "is_null_allowed"=>false, "depends_on"=>array())));
		MetaModel::Init_AddAttribute(new AttributeEnum("input_type", array("allowed_values"=>new ValueSetEnum('text,text_area,drop_down_list,radio_buttons,date,date_and_time,duration,read_only,hidden'), "sql"=>"input_type", "default_value"=>"text", "is_null_allowed"=>false, "depends_on"=>array())));
		MetaModel::Init_AddAttribute(new AttributeText("values", array("allowed_values"=>null, "sql"=>"values", "default_value"=>"", "is_null_allowed"=>true, "depends_on"=>array())));
		MetaModel::Init_AddAttribute(new AttributeText("initial_value", array("allowed_values"=>null, "sql"=>"initial_value", "default_value"=>"", "is_null_allowed"=>true, "depends_on"=>array())));
		MetaModel::Init_AddAttribute(new AttributeString("format", array("allowed_values"=>null, "sql"=>"format", "default_value"=>"", "is_null_allowed"=>true, "depends_on"=>array())));

		MetaModel::Init_SetZListItems('details', array('template_id', 'code', 'order', 'label', 'mandatory', 'input_type', 'values', 'initial_value', 'format'));
		MetaModel::Init_SetZListItems('advanced_search', array('template_id', 'code', 'label', 'mandatory', 'input_type'));
		MetaModel::Init_SetZListItems('standard_search', array('template_id', 'code', 'label', 'mandatory', 'input_type'));
		MetaModel::Init_SetZListItems('list', array('template_id', 'code', 'order', 'mandatory', 'input_type'));
	}

	/**
	 * Make a serializable array out of the characteristics of the field
	 */
	public function ToArray()
	{
		$aRet = array(
			'class' => get_class($this),
			'id' => $this->GetKey(),
			'code' => $this->Get('code'),
			'label' => $this->Get('label'),
			'order' => $this->Get('order'),
			'mandatory' => $this->Get('mandatory'),
			'input_type' => $this->Get('input_type'),
			'values' => $this->Get('values'),
			'initial_value' => $this->Get('initial_value'),
			'format' => $this->Get('format'),
		);
		return $aRet;
	}

	/**
	 * Must be preserved for the legacy User Portal
	 *
	 * @param $oPage
	 * @param null $sClass
	 * @param string $sFormPrefix
	 * @return string
	 * @throws CoreException
	 * @throws DictExceptionMissingString
	 * @throws Exception
	 */
	public function GetFormElement($oPage, $sClass = null, $sFormPrefix = '')
	{
		$sAttCode = $this->GetKey();

		$value = $this->Get('initial_value');

		$sFieldPrefix = '';
		$sNameSuffix = '';
		$iId = 'tpl_'.$sAttCode;
		if (!empty($iId))
		{
			$iInputId = $iId;
		}
		else
		{
			$iInputId = $oPage->GetUniqueId();
		}

		$bMandatory = 'false';
		if ($this->Get('mandatory') == 'yes')
		{
			$bMandatory = 'true';
		}

		$sValidationField = "<span class=\"form_validation\" id=\"v_{$iId}\"></span>";
		$sHelpText = '';

		$aEventsList = array();
		switch($this->Get('input_type'))
		{
		case 'date':
			$aEventsList[] ='validate';
			$aEventsList[] ='keyup';
			$aEventsList[] ='change';
			$sPlaceholderValue = 'placeholder="'.htmlentities(AttributeDate::GetFormat()->ToPlaceholder(), ENT_QUOTES, 'UTF-8').'"';
			$sDisplayValue = AttributeDate::GetFormat()->Format($value);
			$sHTMLValue = "<input title=\"$sHelpText\" class=\"date-pick\" type=\"text\" size=\"12\" $sPlaceholderValue name=\"tpl_{$sFieldPrefix}{$sAttCode}{$sNameSuffix}\" value=\"".htmlentities($value, ENT_QUOTES, 'UTF-8')."\" id=\"$iId\"/>&nbsp;{$sValidationField}";
			break;

		case 'date_and_time':
			$aEventsList[] ='validate';
			$aEventsList[] ='keyup';
			$aEventsList[] ='change';
			$sPlaceholderValue = 'placeholder="'.htmlentities(AttributeDateTime::GetFormat()->ToPlaceholder(), ENT_QUOTES, 'UTF-8').'"';
			$sDisplayValue = AttributeDateTime::GetFormat()->Format($value);
			$sHTMLValue = "<input title=\"$sHelpText\" class=\"datetime-pick\" type=\"text\" size=\"15\" $sPlaceholderValue name=\"tpl_{$sFieldPrefix}{$sAttCode}{$sNameSuffix}\" value=\"".htmlentities($sDisplayValue, ENT_QUOTES, 'UTF-8')."\" id=\"$iId\"/>&nbsp;{$sValidationField}";
			break;

		case 'duration':
			$aEventsList[] ='validate';
			$aEventsList[] ='change';
			$oPage->add_ready_script("$('#{$iId}_d').bind('keyup change', function(evt, sFormId) { return UpdateDuration('$iId'); });");
			$oPage->add_ready_script("$('#{$iId}_h').bind('keyup change', function(evt, sFormId) { return UpdateDuration('$iId'); });");
			$oPage->add_ready_script("$('#{$iId}_m').bind('keyup change', function(evt, sFormId) { return UpdateDuration('$iId'); });");
			$oPage->add_ready_script("$('#{$iId}_s').bind('keyup change', function(evt, sFormId) { return UpdateDuration('$iId'); });");
			$aVal = AttributeDuration::SplitDuration($value);
			$sDays = "<input title=\"$sHelpText\" type=\"text\" size=\"3\" name=\"tpl_{$sFieldPrefix}{$sAttCode}[d]{$sNameSuffix}\" value=\"{$aVal['days']}\" id=\"{$iId}_d\"/>";
			$sHours = "<input title=\"$sHelpText\" type=\"text\" size=\"2\" name=\"tpl_{$sFieldPrefix}{$sAttCode}[h]{$sNameSuffix}\" value=\"{$aVal['hours']}\" id=\"{$iId}_h\"/>";
			$sMinutes = "<input title=\"$sHelpText\" type=\"text\" size=\"2\" name=\"tpl_{$sFieldPrefix}{$sAttCode}[m]{$sNameSuffix}\" value=\"{$aVal['minutes']}\" id=\"{$iId}_m\"/>";
			$sSeconds = "<input title=\"$sHelpText\" type=\"text\" size=\"2\" name=\"tpl_{$sFieldPrefix}{$sAttCode}[s]{$sNameSuffix}\" value=\"{$aVal['seconds']}\" id=\"{$iId}_s\"/>";
			$sHidden = "<input type=\"hidden\" id=\"{$iId}\" value=\"".htmlentities($value, ENT_QUOTES, 'UTF-8')."\"/>";
			$sHTMLValue = Dict::Format('UI:DurationForm_Days_Hours_Minutes_Seconds', $sDays, $sHours, $sMinutes, $sSeconds).$sHidden."&nbsp;".$sValidationField;
			$oPage->add_ready_script("$('#{$iId}').bind('update', function(evt, sFormId) { return ToggleDurationField('$iId'); });");
			break;

		case 'text_area':
			$aEventsList[] ='validate';
			$aEventsList[] ='keyup';
			$aEventsList[] ='change';
			$sEditValue = $value;
			$aStyles = array();
			$sStyle = '';
			if (count($aStyles) > 0)
			{
				$sStyle = 'style="'.implode('; ', $aStyles).'"';
			}
			$sAdditionalStuff = "";
			// Ok, the text area is drawn here
			$sHTMLValue = "<table><tr><td><textarea class=\"resizable\" title=\"$sHelpText\" name=\"tpl_{$sFieldPrefix}{$sAttCode}{$sNameSuffix}\" rows=\"8\" cols=\"40\" id=\"$iId\" $sStyle>".htmlentities($sEditValue, ENT_QUOTES, 'UTF-8')."</textarea>$sAdditionalStuff</td><td>{$sValidationField}</td></tr></table>";
			break;

		case 'drop_down_list':
		case 'radio_buttons':
			$aEventsList[] ='validate';
			$aEventsList[] ='change';

			$aAllowedValues = array();
			$sInputType = $this->Get('input_type');
			$sValues = $this->Get('values');
			if (strlen($sValues) > 0)
			{
				try
				{
					$oSearch = DBObjectSearch::FromOQL($sValues);
					foreach($oSearch->ToDataArray(array('id', 'friendlyname')) as $aRow)
					{
						$aAllowedValues[$aRow['id']] = $aRow['friendlyname'];
					}
					if (count($aAllowedValues) > MetaModel::GetConfig()->Get('max_combo_length'))
					{
						$sInputType = 'autocomplete';
					}
				}
				catch(Exception $e)
				{
					foreach(explode(',',$sValues) as $sVal)
					{
						$aAllowedValues[$sVal] = $sVal;
					}
				}
			}
			switch($sInputType)
			{
				case 'autocomplete':
				$oSearch = DBObjectSearch::FromOQL($sValues);
				$sTargetClass = $oSearch->GetClass();
				$oSearch->SetModifierProperty('UserRightsGetSelectFilter', 'bSearchMode', true);
				$oAllowedValues = new DBObjectSet($oSearch);

				$iMaxComboLength = MetaModel::GetConfig()->Get('max_combo_length');
				$aExtKeyParams = array();
				$aExtKeyParams['iFieldSize'] = 10;
				$aExtKeyParams['iMinChars'] = MetaModel::GetConfig()->Get('min_autocomplete_chars');
				$sFilterCode = '';
				$sFieldName = 'tpl_'.$sFieldPrefix.$sAttCode.$sNameSuffix;
				$sFormPrefix = '';
				$oWidget = new UIExtKeyWidget($sTargetClass, $iId, '', true);
				$aArgs = array();
				$sDisplayStyle = 'select';
				$sTitle = $this->Get('label');
				$sHTMLValue = $oWidget->Display($oPage, $iMaxComboLength, false /* $bAllowTargetCreation */, $sTitle, $oAllowedValues, '' /*$value*/, $iId, $bMandatory, $sFieldName, $sFormPrefix, $aArgs, null, $sDisplayStyle);
				break;

				case 'radio_buttons':
				$bVertical = true;
				$sHTMLValue = $oPage->GetRadioButtons($aAllowedValues, $value, $iId, "tpl_{$sFieldPrefix}{$sAttCode}{$sNameSuffix}", $bMandatory, $bVertical, $sValidationField);
				break;

				case 'drop_down_list':
				default:
				$sHTMLValue = "<select title=\"$sHelpText\" name=\"tpl_{$sFieldPrefix}{$sAttCode}{$sNameSuffix}\" id=\"$iId\">\n";
				$sHTMLValue .= "<option value=\"\">".Dict::S('UI:SelectOne')."</option>\n";
				foreach($aAllowedValues as $key => $display_value)
				{
					if ((count($aAllowedValues) == 1) && ($bMandatory == 'true') )
					{
						// When there is only once choice, select it by default
						$sSelected = ' selected';
					}
					else
					{
						$sSelected = ($value == $key) ? ' selected' : '';
					}
					$sHTMLValue .= "<option value=\"$key\"$sSelected>$display_value</option>\n";
				}
				$sHTMLValue .= "</select>&nbsp;{$sValidationField}\n";
			}

			break;

		case 'read_only':
			$sHTMLLabel = htmlentities($value, ENT_QUOTES, 'UTF-8');
			$sHTMLValue = "<input type=\"hidden\"name=\"tpl_{$sFieldPrefix}{$sAttCode}{$sNameSuffix}\" value=\"".htmlentities($value, ENT_QUOTES, 'UTF-8')."\" id=\"$iId\"/>".$sHTMLLabel;
			break;

		case 'hidden':
			$sHTMLValue = "<input type=\"hidden\"name=\"tpl_{$sFieldPrefix}{$sAttCode}{$sNameSuffix}\" value=\"".htmlentities($value, ENT_QUOTES, 'UTF-8')."\" id=\"$iId\"/>";
			break;

		case 'text':
		default:
			$aEventsList[] ='validate';
			$iFieldSize = 255;
			$sHTMLValue = "<input title=\"$sHelpText\" type=\"text\" size=\"30\" maxlength=\"$iFieldSize\" name=\"tpl_{$sFieldPrefix}{$sAttCode}{$sNameSuffix}\" value=\"".htmlentities($value, ENT_QUOTES, 'UTF-8')."\" id=\"$iId\"/>&nbsp;{$sValidationField}";
			$aEventsList[] ='keyup';
			$aEventsList[] ='change';
			break;
		} // switch(input_type)
		$sPattern = $this->Get('format'); //'^([0-9]+)$';			
		if (!empty($aEventsList))
		{
			$sNullValue = '';
			if (!is_numeric($sNullValue))
			{
				$sNullValue = "'$sNullValue'"; // Add quotes to turn this into a JS string if it's not a number
			}
			$oPage->add_ready_script("$('#$iId').bind('".implode(' ', $aEventsList)."', function(evt, sFormId) { return ValidateField('$iId', '$sPattern', $bMandatory, sFormId, $sNullValue) } );\n"); // Bind to a custom event: validate
		}
		return "<div>{$sHTMLValue}</div>";
	}
}


class TemplateExtraData extends DBObject
{
	public static function Init()
	{
		$aParams = array
		(
			"category" => "",
			"key_type" => "autoincrement",
			"name_attcode" => array("obj_class", "obj_key"),
			"state_attcode" => "",
			"reconc_keys" => array("obj_class", "obj_key"),
			"db_table" => "tpl_extradata",
			"db_key_field" => "id",
			"db_finalclass_field" => "",
			"display_template" => "",
			'indexes' => array(
				array('obj_class', 'obj_key'),
			)
		);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();

		MetaModel::Init_AddAttribute(new AttributeExternalKey("template_id", array("targetclass"=>"Template", "jointype"=>null, "allowed_values"=>null, "sql"=>"template_id", "is_null_allowed"=>true, "on_target_delete"=>DEL_SILENT, "depends_on"=>array())));
		MetaModel::Init_AddAttribute(new AttributeString("obj_class", array("allowed_values"=>null, "sql"=>"obj_class", "default_value"=>"", "is_null_allowed"=>false, "depends_on"=>array())));
		MetaModel::Init_AddAttribute(new AttributeInteger("obj_key", array("allowed_values"=>null, "sql"=>"obj_key", "default_value"=>"", "is_null_allowed"=>false, "depends_on"=>array())));

		// User data
		MetaModel::Init_AddAttribute(new AttributeLongText("data", array("allowed_values"=>null, "sql"=>"data", "default_value"=>"", "is_null_allowed"=>false, "depends_on"=>array())));
		//MetaModel::Init_SetZListItems('details', array('obj_class', 'obj_key'));
		//MetaModel::Init_SetZListItems('advanced_search', array('obj_class', 'obj_key'));
		//MetaModel::Init_SetZListItems('standard_search', array('obj_class', 'obj_key'));
		//MetaModel::Init_SetZListItems('list', array('obj_class', 'obj_key'));
	}

	static public function FindByObject($sClass, $iKey)
	{
		$oSearch = DBObjectSearch::FromOQL('SELECT '.__class__.' WHERE obj_class = :obj_class AND obj_key = :obj_key');
		$oSearch->AllowAllData();
		$oSet = new DBObjectSet($oSearch, array(), array('obj_class' => $sClass, 'obj_key' => $iKey));
		return $oSet->Fetch();
	}
}

/**
 * Class TemplateFieldsHandler
 * Provides templating commons
 * Must be derived to implement GetPrerequisiteAttributes() and BuildForm(),
 * depending on custom conditions
 *
 */
abstract class TemplateFieldsHandler extends CustomFieldsHandler
{
	/**
	 * @param $aValues
	 * @param bool|true $bLocalize
	 * @return string
	 */
	public function GetAsHTML($aValues, $bLocalize = true)
	{
		if ($aValues['extradata_id'] == 0)
		{
			$sRet = '';
		}
		else
		{
			$aDisplayValues = array();
			if (self::IsLegacyFormat($aValues))
			{
				if (!is_null($aValues['template_label']))
				{
					$aDisplayValues[Dict::Format('Templates:Need')] = $aValues['template_label'];
				}

				$aExtraData = json_decode($aValues['extradata_legacy'], true);
				foreach ($aExtraData as $iField => $aInfo)
				{
					$sLabel = $aInfo['label'];
					$sDisplayValue = $aInfo['value'];
					if (isset($aInfo['value_obj_class']) && isset($aInfo['value_obj_key']))
					{
						$oSelectedObj = MetaModel::GetObject($aInfo['value_obj_class'], $aInfo['value_obj_key'], false);
						if ($oSelectedObj)
						{
							$sDisplayValue = $oSelectedObj->GetHyperLink();
						}
					}
					$aDisplayValues[$sLabel] = $sDisplayValue;
				}
			}
			else
			{
				// This is the full featured / modern format
				if (!array_key_exists('template_data', $aValues)) throw new Exception('Wrong format: missing template_data');
				$aTemplateData = json_decode($aValues['template_data'], true);
				$aDisplayValues[Dict::Format('Templates:Need')] = $aTemplateData['label'];
				$aFieldLabels = array();
				foreach ($aTemplateData['fields'] as $aFieldData)
				{
					$aFieldLabels[$aFieldData['code']] = $aFieldData['label'];
				}
				foreach ($aValues['user_data'] as $sCode => $value)
				{
					// Skip hidden fields
					if (!Template::IsFieldVisibleToCurrentUser($aTemplateData, $sCode)) continue;

					$aFieldData = $aTemplateData['fields'][$sCode];
					$sDisplayValue = Template::MakeHTMLValue($aFieldData, $value);
					if (isset($aValues['user_data_objclass'][$sCode]))
					{
						if ($oObject = MetaModel::GetObject($aValues['user_data_objclass'][$sCode], $value, false))
						{
							$sDisplayValue = $oObject->GetHyperlink();
						}
						else
						{
							$sDisplayValue = $aValues['user_data_objname'][$sCode];
						}
					}
					$aDisplayValues[$aFieldLabels[$sCode]] = $sDisplayValue;
				}
			}

			$sRet = '<table class="details">';
			$sRet .= '<tbody>';

			foreach ($aDisplayValues as $sLabel => $sDisplayValue)
			{
				$sRet .= '<tr>';
				$sRet .= '<td class="label"><span>'.$sLabel.'</span></td><td>'.$sDisplayValue.'</td>';
				$sRet .= '</tr>';
			}
			$sRet .= '</tbody>';
			$sRet .= '</table>';
		}
		return $sRet;
	}

	/**
	 * @param $aValues
	 * @param bool|true $bLocalize
	 * @return string
	 */
	public function GetAsXML($aValues, $bLocalize = true)
	{
		$sRet = '';
		if ($aValues['extradata_id'] == 0)
		{
			// Leave the container tag empty
		}
		else
		{
			if (self::IsLegacyFormat($aValues))
			{
				$sRet .= '<legacy_format>yes</legacy_format>';
				$sRet .= '<template_label>'.$aValues['template_label'].'</template_label>';

				$aExtraData = json_decode($aValues['extradata_legacy'], true);
				$sRet .= '<fields>';
				foreach ($aExtraData as $iField => $aInfo)
				{
					$sCode = $aInfo['code'];
					$sDisplayValue = $aInfo['value'];
					if (isset($aInfo['value_obj_class']) && isset($aInfo['value_obj_key']))
					{
						$oSelectedObj = MetaModel::GetObject($aInfo['value_obj_class'], $aInfo['value_obj_key'], false);
						if ($oSelectedObj)
						{
							$sDisplayValue = $oSelectedObj->Get('friendlyname');
						}
					}
					$sRet .= '<field id="'.$sCode.'">';
					$sRet .= '<value>'.Str::pure2xml((string)$aInfo['value']).'</value>';
					$sRet .= '<label>'.Str::pure2xml($sDisplayValue).'</label>';
					$sRet .= '</field>';
				}
				$sRet .= '</fields>';
			}
			else
			{
				$aTemplateData = json_decode($aValues['template_data'], true);
				$sRet .= '<template_id>'.$aTemplateData['id'].'</template_id>';
				$sRet .= '<template_label>'.Str::pure2xml($aTemplateData['label']).'</template_label>';
				$sRet .= '<fields>';
				foreach ($aValues['user_data'] as $sCode => $sValue)
				{
					// Skip hidden fields
					if (!Template::IsFieldVisibleToCurrentUser($aTemplateData, $sCode)) continue;

					$sDisplayValue = $sValue;
					if (array_key_exists($sCode, $aValues['user_data_objclass']))
					{
						if ($oObject = MetaModel::GetObject($aValues['user_data_objclass'][$sCode], $sValue, false))
						{
							$sDisplayValue = $oObject->Get('friendlyname');
						} else
						{
							$sDisplayValue = $aValues['user_data_objname'][$sCode];
						}
					}
					$sRet .= '<field id="'.$sCode.'">';
					$sRet .= '<value>'.Str::pure2xml((string)$sValue).'</value>';
					$sRet .= '<label>'.Str::pure2xml($sDisplayValue).'</label>';
					$sRet .= '</field>';
				}
				$sRet .= '</fields>';
			}
		}
		return $sRet;
	}

	/**
	 * @param $aValues
	 * @param string $sSeparator
	 * @param string $sTextQualifier
	 * @param bool|true $bLocalize
	 * @return string
	 */
	public function GetAsCSV($aValues, $sSeparator = ',', $sTextQualifier = '"', $bLocalize = true)
	{
		$aRetValues = array();
		if (self::IsLegacyFormat($aValues))
		{
			$aExtraData = json_decode($aValues['extradata_legacy'], true);
			foreach ($aExtraData as $iField => $aInfo)
			{
				$sCode = $aInfo['code'];
				$sDisplayValue = $aInfo['value'];
				if (isset($aInfo['value_obj_class']) && isset($aInfo['value_obj_key']))
				{
					$oSelectedObj = MetaModel::GetObject($aInfo['value_obj_class'], $aInfo['value_obj_key'], false);
					if ($oSelectedObj)
					{
						$sDisplayValue = $oSelectedObj->Get('friendlyname');
					}
				}
				$aRetValues[$sCode] = $sDisplayValue;
			}
		}
		elseif ($aValues['template_id'] > 0)
		{
			// This is the full featured / modern format
			if (!array_key_exists('template_data', $aValues)) throw new Exception('Wrong format: missing template_data');
			$aTemplateData = json_decode($aValues['template_data'], true);
			$aRetValues[Dict::Format('Templates:Need')] = $aTemplateData['label'];
			$aFieldLabels = array();
			foreach ($aTemplateData['fields'] as $aFieldData)
			{
				$aFieldLabels[$aFieldData['code']] = $aFieldData['label'];
			}
			foreach ($aValues['user_data'] as $sCode => $sValue)
			{
				// Skip hidden fields
				if (!Template::IsFieldVisibleToCurrentUser($aTemplateData, $sCode)) continue;

				$sDisplayValue = $sValue;
				if (array_key_exists($sCode, $aValues['user_data_objclass']))
				{
					if ($oObject = MetaModel::GetObject($aValues['user_data_objclass'][$sCode], $sValue, false))
					{
						$sDisplayValue = $oObject->Get('friendlyname');
					}
					else
					{
						$sDisplayValue = $aValues['user_data_objname'][$sCode];
					}
				}
				$sFieldLabel = $aFieldLabels[$sCode];
				$aRetValues[$sFieldLabel] = $sDisplayValue;
			}
		}

		$sQualifier = "'";
		$sSepItem = ',';

		$aItems = array();
		foreach ($aRetValues as $sCode => $sDisplayValue)
		{
			$sCSV = $sCode.'='.$sDisplayValue;
			$sCSV = str_replace($sQualifier, $sQualifier.$sQualifier, $sCSV);
			$aItems[] = $sQualifier.$sCSV.$sQualifier;
		}
		$sRawRes = implode($sSepItem, $aItems);
		$sRawRes = str_replace($sTextQualifier, $sTextQualifier.$sTextQualifier, $sRawRes);
		$sRes = $sTextQualifier.$sRawRes.$sTextQualifier;
		return $sRes;
	}

	/**
	 * List the available verbs for 'GetForTemplate'
	 */
	public static function EnumTemplateVerbs()
	{
		return array(
			'' => 'Plain text (unlocalized) representation',
			'html' => 'HTML representation (unordered list)',
		);
	}

	/**
	 * Get various representations of the value, for insertion into a template (e.g. in Notifications)
	 * @param $aValues array The current values
	 * @param $sVerb string The verb specifying the representation of the value
	 * @param $bLocalize bool Whether or not to localize the value
	 * @return string
	 */
	public function GetForTemplate($aValues, $sVerb, $bLocalize = true)
	{
		return 'template...verb='.$sVerb.' sur "'.json_encode($aValues).'"';
	}

	/**
	 * @return DBObjectSet of Templates
	 */
	abstract protected function FindTemplates(DBObject $oHostObject);

	/**
	 * @throws CoreException
	 * @throws DictExceptionMissingString
	 */
	public function BuildForm(DBObject $oHostObject, $sFormId)
	{
		$this->oForm = new \Combodo\iTop\Form\Form($sFormId);

		$oField = new Combodo\iTop\Form\Field\HiddenField('legacy');
		$oField->SetCurrentValue($this->aValues['legacy']);
		$this->oForm->AddField($oField);

		if ($this->IsLegacyFormat($this->aValues))
		{
			$this->AddLegacyFormFields();
		}
		else
		{
			// Keep information that will be necessary when refreshing the form
			$oField = new Combodo\iTop\Form\Field\HiddenField('extradata_id');
			$oField->SetCurrentValue($this->aValues['extradata_id']);
			$this->oForm->AddField($oField);
			$oField = new Combodo\iTop\Form\Field\HiddenField('current_template_id');
			$oField->SetCurrentValue($this->aValues['current_template_id']);
			$this->oForm->AddField($oField);
			$oField = new Combodo\iTop\Form\Field\HiddenField('current_template_data');
			$oField->SetCurrentValue($this->aValues['current_template_data']);
			$this->oForm->AddField($oField);

			$bForceEmptyTemplate = false;
			if (!$oHostObject->IsNew() && ($this->aValues['current_template_id'] == 0))
			{
				// The object has been recorded without templates
				// Keep it as is (make sure that the object could pass the CheckToWrite test), except if a change on the object has an impact on the template
				$bForceEmptyTemplate = true;
				$aChanges = $oHostObject->ListChanges();
				foreach (static::GetPrerequisiteAttributes() as $sAttCode)
				{
					if (array_key_exists($sAttCode, $aChanges))
					{
						$bForceEmptyTemplate = false;
					}
				}
			}

			$aChoices = array();
			if (!$bForceEmptyTemplate)
			{
				$aTemplates = array();
				$oTemplateSet = static::FindTemplates($oHostObject);
				while ($oTemplate = $oTemplateSet->Fetch())
				{
					$aChoices[$oTemplate->GetKey()] = $oTemplate->Get('label');
					$aTemplates[$oTemplate->GetKey()] = $oTemplate;
				}
			}

			if (count($aChoices) == 0)
			{
				// Empty form
			}
			else
			{
				if (count($aChoices) == 1)
				{
					// There is one single template: auto select this one
					$aTemplateIds = array_keys($aChoices);
					$iTemplate = $aTemplateIds[0];
				}
				else
				{
					$iTemplate = isset($this->aValues['template_id']) ? $this->aValues['template_id'] : 0;
					if (!array_key_exists($iTemplate, $aChoices))
					{
						$iTemplate = 0;
					}
				}

				if ($iTemplate == 0)
				{
					// No template selected
					$aTemplateData = null;
				}
				elseif ($iTemplate == $this->aValues['current_template_id'])
				{
					// The user has selected the template that corresponds to the one stored in the DB
					$aTemplateData = json_decode($this->aValues['current_template_data'], true);
					if (array_key_exists($aTemplateData['id'], $aChoices))
					{
						// Make sure that the label is the legacy one
						$aChoices[$aTemplateData['id']] = $aTemplateData['label'];
					}
				}
				else
				{
					// The user has selected a template different from the one stored in the DB (if any)
					$oTemplate = $aTemplates[$iTemplate];
					$aTemplateData = $oTemplate->ToArray();
				}

				if (count($aChoices) > 1)
				{
					$oField = new Combodo\iTop\Form\Field\SelectField('template_id');
					$oField->SetLabel(Dict::S('Templates:Need'));
					$oField->SetMandatory(true);
					$oField->SetChoices($aChoices);
					$oField->SetCurrentValue($iTemplate);
					$this->oForm->AddField($oField);
				}
				else
				{
					// There is one single template: no need to select it

					// This field is for the label
					$oField = new Combodo\iTop\Form\Field\StringField('_template_name_');
					$oField->SetLabel(Dict::S('Templates:Need'));
					$oField->SetReadOnly(true);
					$oField->SetCurrentValue($aChoices[$iTemplate]);
					$this->oForm->AddField($oField);

					// This field to keep the value
					$oField = new Combodo\iTop\Form\Field\HiddenField('template_id');
					$oField->SetCurrentValue($iTemplate);
					$this->oForm->AddField($oField);
				}

				$oField = new Combodo\iTop\Form\Field\HiddenField('template_data');
				$oField->SetCurrentValue(json_encode($aTemplateData));
				$this->oForm->AddField($oField);
				$this->oForm->AddFieldDependency('template_data', 'template_id');

				$aUserData = isset($this->aValues['user_data']) ? $this->aValues['user_data'] : array();
				$oUserDataField = new Combodo\iTop\Form\Field\SubFormField('user_data');
				if (!is_null($aTemplateData))
				{
					$aCallSpec = array($aTemplateData['class'], 'PopulateUserDataForm');
					$aExtKeyFields = call_user_func($aCallSpec, $oUserDataField->GetForm(), $aTemplateData, $aUserData);
				}
				else
				{
					$aExtKeyFields = array();
				}
				$this->oForm->AddField($oUserDataField);
				$this->oForm->AddFieldDependency('user_data', 'template_id');

				$oField = new Combodo\iTop\Form\Field\HiddenField('__extkeys__');
				$oField->SetCurrentValue(json_encode($aExtKeyFields));
				$this->oForm->AddField($oField);
				$this->oForm->AddFieldDependency('__extkeys__', 'template_id');
			}
		}

		$this->oForm->Finalize();
	}

	protected function AddLegacyFormFields()
	{
		$oField = new Combodo\iTop\Form\Field\HiddenField('extradata_legacy');
		$oField->SetCurrentValue($this->aValues['extradata_legacy']);
		$this->oForm->AddField($oField);

		if (isset($this->aValues['template_label']) && (strlen($this->aValues['template_label']) > 0))
		{
			$oField = new Combodo\iTop\Form\Field\StringField('template_label');
			$oField->SetLabel(Dict::S('Templates:Need'));
			$oField->SetReadOnly(true);
			$oField->SetCurrentValue($this->aValues['template_label']);
			$this->oForm->AddField($oField);
		}

		$aExtraDataLegacy = json_decode($this->aValues['extradata_legacy'], true);
		foreach ($aExtraDataLegacy as $iField => $aInfo)
		{
			$sDisplayValue = $aInfo['value'];
			if (isset($aInfo['value_obj_class']) && isset($aInfo['value_obj_key']))
			{
				$oSelectedObj = MetaModel::GetObject($aInfo['value_obj_class'], $aInfo['value_obj_key'], false);
				if ($oSelectedObj)
				{
					$sDisplayValue = $oSelectedObj->GetHyperLink();
				}
			}
			// Note : those fields are here for the presentation and will never be read: only the extradata_legacy value will be interpreted
			$oField = new Combodo\iTop\Form\Field\StringField('extradata_legacy_'.$aInfo['code']);
			$oField->SetLabel($aInfo['label']);
			$oField->SetReadOnly(true);
			$oField->SetCurrentValue($sDisplayValue);
			$this->oForm->AddField($oField);
		}
	}

	/**
	 * @param DBObject $oHostObject
	 * @return array Associative array id => value
	 */
	public function ReadValues(DBObject $oHostObject)
	{
		if ($oHostObject->IsNew())
		{
			$oExtraData = null;
		}
		else
		{
			$oExtraData = TemplateExtraData::FindByObject(get_class($oHostObject), $oHostObject->GetKey());
		}
		if ($oExtraData)
		{
			$aRawData = unserialize($oExtraData->Get('data'));
			if (!array_key_exists('user_data', $aRawData))
			{
				// Legacy format (template-base version 2.1.4 or older):
				// array of iTemplateField => array(
				//     'code' => ...
				//     'label' => ...
				//     'input_type' => ...
				//     'value' => ...
				// )
				$oTemplate = MetaModel::GetObject('Template', $oExtraData->Get('template_id'), false);
				$sTemplateLabel = $oTemplate ? $oTemplate->Get('label') : null;
				$aRet = array(
					'legacy' => true,
					'extradata_legacy' => json_encode($aRawData),
					'template_label' => $sTemplateLabel
				);
			}
			else
			{
				// Current format
				// 'legacy' => false,
				// 'template_id' => null or selected template id,
				// 'template_data' => null or template as an array (json encoded),
				// 'user_data' => array of <code> => <value>,
				// 'extradata_id' => 0 or extra data record id (used to read the format)
				if (!array_key_exists('template_id', $aRawData)) throw new Exception('Wrong format: missing template_id');
				if (!array_key_exists('template_data', $aRawData)) throw new Exception('Wrong format: missing template_id');
				if (!array_key_exists('user_data', $aRawData)) throw new Exception('Wrong format: missing user_data');
				if (!array_key_exists('extradata_id', $aRawData)) throw new Exception('Wrong format: missing extradata_id');

				$aRet = $aRawData;

				// Hidden fields are part of the internal data
				$aTemplateData = json_decode($aRet['template_data'], true);
				foreach($aTemplateData['fields'] as $sFieldCode => $aFieldData)
				{
					switch($aFieldData['input_type'])
					{
						case 'date':
						$aRet['user_data'][$sFieldCode] = AttributeDate::GetFormat()->Format($aRet['user_data'][$sFieldCode]);
						break;
						
						case 'date_and_time':
						$aRet['user_data'][$sFieldCode] = AttributeDateTime::GetFormat()->Format($aRet['user_data'][$sFieldCode]);
						break;
					}
				}
				foreach ($aTemplateData['hidden_fields'] as $sFieldCode => $foo)
				{
					$aFieldData = $aTemplateData['fields'][$sFieldCode];
					if (Template::IsFieldVisibleToCurrentUser($aTemplateData, $sFieldCode))
					{
						// A placeholder is already there (empty string) so that the value will be correctly placed
						$aRet['user_data'][$sFieldCode] = $aFieldData['initial_value'];
					}
					else
					{
						// Hide this value
						unset($aRet['user_data'][$sFieldCode]);
					}
				}
				// Keep track of the current (persistent) values, that may differ from template_id/template_data if the user selects another template (or none)
				$aRet['current_template_id'] = $aRet['template_id'];
				$aRet['current_template_data'] = $aRet['template_data'];
			}
			// Make sure that the source id is correct (not set on the first round - See WriteValues/DBInsert)
			$aRet['extradata_id'] = $oExtraData->GetKey();
		}
		else
		{
			$aRet = array(
				'legacy' => false,
				'template_id' => null,
				'template_data' => null,
				'current_template_id' => null,
				'current_template_data' => null,
				'user_data' => array(),
				'extradata_id' => 0
			);
		}

		return $aRet;
	}

	/**
	 * Record the data (currently in the processing of recording the host object)
	 * It is assumed that the data has been checked prior to calling Write()
	 * @param DBObject $oHostObject
	 * @param array Associative array id => value
	 */
	public function WriteValues(DBObject $oHostObject, $aValues)
	{
		if (isset($aValues['template_id']) && ($aValues['template_id'] > 0))
		{
			if ($aValues['extradata_id'] == 0)
			{
				$oExtraData = MetaModel::NewObject('TemplateExtraData');
				$oExtraData->Set('obj_class', get_class($oHostObject));
				$oExtraData->Set('obj_key', $oHostObject->GetKey());
			}
			else
			{
				$oExtraData = MetaModel::GetObject('TemplateExtraData', $aValues['extradata_id']);
			}
			$oExtraData->Set('template_id', $aValues['template_id']); // Legacy field (redundant with the data 'template_id' !

			$aTemplateData = json_decode($aValues['template_data'], true);

			// Normalize the structure of aValues
			$aHiddenFields = $aTemplateData['hidden_fields'];
			$aExtKeys = json_decode($aValues['__extkeys__'], true);
			unset($aValues['__extkeys__']);
			$aValues['user_data_objclass'] = array();
			$aValues['user_data_objname'] = array();
			foreach ($aValues['user_data'] as $sFieldCode => $value)
			{
				if ($aTemplateData['fields'][$sFieldCode]['input_type'] == 'date')
				{
					$val = AttributeDate::GetFormat()->Parse($value);
					if (is_object($val))
					{
						$val = $val->Format(AttributeDate::GetSQLFormat());
					}
					$aValues['user_data'][$sFieldCode] = $val;
				}
				else if($aTemplateData['fields'][$sFieldCode]['input_type'] == 'date_and_time')
				{
					$val = AttributeDateTime::GetFormat()->Parse($value);
					if (is_object($val))
					{
						$val = $val->Format(AttributeDateTime::GetSQLFormat());
					}
					$aValues['user_data'][$sFieldCode] = $val;					
				}
				if (isset($aExtKeys[$sFieldCode]))
				{
					$sClass = $aExtKeys[$sFieldCode];
					if ($oObject = MetaModel::GetObject($sClass, $value, false))
					{
						$aValues['user_data_objclass'][$sFieldCode] = get_class($oObject);
						$aValues['user_data_objname'][$sFieldCode] = $oObject->Get('friendlyname');
					}
				}
				if (isset($aHiddenFields[$sFieldCode]))
				{
					// Note: depending on the current user, hidden values might be given here or not
					// Let's normalize stored data (while leaving a placeholder so as to preserve the order)
					// Hidden values will be automatically restored by ReadValues, based on the 'initial_value'
					$aValues['user_data'][$sFieldCode] = '';
				}
			}
			unset($aValues['current_template_id']); // the right one is 'template_id'
			unset($aValues['current_template_data']); // the right one is 'template_data'
			$oExtraData->Set('data', serialize($aValues));

			$oExtraData->DBWrite();

			$this->BeyondWriteValues($oHostObject, $aValues, $oExtraData);
		}
		else
		{
			if ($aValues['extradata_id'] > 0)
			{
				$oExtraData = MetaModel::GetObject('TemplateExtraData', $aValues['extradata_id']);
				$oExtraData->DBDelete();
			}
			$this->BeyondWriteValues($oHostObject, $aValues, null);
		}
	}

	/**
	 * Cleanup data upon object deletion (object id still available here)
	 * @param DBObject $oHostObject
	 */
	public function DeleteValues(DBObject $oHostObject)
	{
		$oSearch = DBObjectSearch::FromOQL("SELECT TemplateExtraData WHERE obj_class = :obj_class AND obj_key = :obj_key");
		$oSearch->AllowAllData();
		$oSet = new DBObjectSet($oSearch, array(), array('obj_class' => get_class($oHostObject), 'obj_key' => $oHostObject->GetKey()));
		while ($oExtraData = $oSet->Fetch())
		{
			$oExtraData->DBDelete();
		}
	}

	/**
	 * Returns true if the values are equivalent
	 * The comparison is not straightforward as the data read from the DB can slightly differ from the data obtained by the form
	 * @param $aValuesA
	 * @param $aValuesB
	 * @return bool
	 */
	public function CompareValues($aValuesA, $aValuesB)
	{
		if ($this->IsLegacyFormat($aValuesA))
		{
			// No change is possible in the legacy format
			return true;
		}

		$iTemplateA =  (isset($aValuesA['template_id']) && ($aValuesA['template_id'] > 0)) ? $aValuesA['template_id'] : 0;
		$iTemplateB =  (isset($aValuesB['template_id']) && ($aValuesB['template_id'] > 0)) ? $aValuesB['template_id'] : 0;
		if ($iTemplateA != $iTemplateB)
		{
			return false;
		}
		if ($iTemplateA != 0)
		{
			foreach ($aValuesA['user_data'] as $sFieldCode => $value)
			{
				if (!isset($aValuesB['user_data'][$sFieldCode]))
				{
					return false;
				}
				if ($aValuesB['user_data'][$sFieldCode] != $value)
				{
					return false;
				}
			}
		}
		return true;
	}

	/**
	 * String representation of the value, must depend solely on the semantics
	 * @return string
	 */
	public function GetValueFingerprint()
	{
		// todo: check if a cleaning is required
		return json_encode($this->aValues);
	}


	public function IsLegacyFormat($aValues)
	{
		return ($aValues['legacy']);
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
	}
}
