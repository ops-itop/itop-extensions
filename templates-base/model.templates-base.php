<?php
// Copyright (C) 2010-2013 Combodo SARL
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

		$aSubClasses = MetaModel::EnumChildClasses('FunctionalCI', ENUM_CHILD_CLASSES_EXCLUDETOP);
		$aPossibleClasses = array();
		foreach($aSubClasses as $sCandidateClass)
		{
			if (!MetaModel::IsAbstract($sCandidateClass))
			{
				array_push($aPossibleClasses, $sCandidateClass);
			}
		}
		$sPossibleClasses = implode(",",$aPossibleClasses);
		
		MetaModel::Init_AddAttribute(new AttributeString("name", array("allowed_values"=>null, "sql"=>"name", "default_value"=>"", "is_null_allowed"=>false, "depends_on"=>array())));
		MetaModel::Init_AddAttribute(new AttributeString("label", array("allowed_values"=>null, "sql"=>"label", "default_value"=>"", "is_null_allowed"=>false, "depends_on"=>array())));
		MetaModel::Init_AddAttribute(new AttributeString("description", array("allowed_values"=>null, "sql"=>"description", "default_value"=>"", "is_null_allowed"=>true, "depends_on"=>array())));
		MetaModel::Init_AddAttribute(new AttributeLinkedSet("field_list", array("linked_class"=>"TemplateField", "ext_key_to_me"=>"template_id", "allowed_values"=>null, "count_min"=>0, "count_max"=>0,"edit_mode"=>LINKSET_EDITMODE_INPLACE, "depends_on"=>array())));

		// 模板关联的功能配置类
		MetaModel::Init_AddAttribute(new AttributeEnum("relatedclass", array("allowed_values"=>new ValueSetEnum($sPossibleClasses), "display_style"=>'list', "sql"=>'relatedclass', "default_value"=>'', "is_null_allowed"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));

		MetaModel::Init_SetZListItems('details', array('name', 'label', 'relatedclass', 'description', 'field_list'));
		MetaModel::Init_SetZListItems('advanced_search', array('name', 'label', 'description'));
		MetaModel::Init_SetZListItems('standard_search', array('name', 'label', 'description'));
		MetaModel::Init_SetZListItems('list', array('name', 'label', 'relatedclass'));
	}

	/**
	 * CI唯一性验证
	 */
	public function CheckUniqFields($value)
	{
		$classname = $this->Get('relatedclass');
		
		//服务器申请不做校验
		if($classname == "Server")
		{
			return(true);
		}
		$oql = "SELECT " . $classname . " WHERE name=:name";
		$oSearch = DBObjectSearch::FromOQL_AllData($oql);
		$oSet = new DBObjectSet($oSearch, array(), array('name' => $value));
		if ($oSet->Count() > 0)
		{   
			$this->m_aCheckIssues[] = Dict::Format("Class:".$classname."/Error:".$classname."MustBeUnique", $value);
			return(false);
		}
		return(true);
	}
	 
	/**
	 * 从工单更新CMDB
	 * 要求：request template中Fields必须在对应类中存在，比如 name对应name，location对应location
	 * 工单创建时，新建对象，状态设置为实施，工单完成时，更改对象状态（上线或者废弃）
	 */
	public function CreateObject($data, $oObject)
	{
		$classname = $this->Get('relatedclass');
		
		//服务器申请不做操作
		if($classname == "Server")
		{
			return;
		}
		$myContactId = UserRights::GetContactId();
		$sContact = MetaModel::GetObject("Person", $myContactId);
		$sOrgId = $sContact->Get("org_id");
		$ticket_id = $oObject->GetKey();
		$ticket_description = $oObject->Get('description');
		
		$iTopAPI = new iTopClient();
		//$comment = 'iTopAPI library create '.$class.' from ticket #'.$ticket_id;
		$fields = array();
		$fields['org_id'] = $sOrgId;
		$fields['status'] = "implementation";
		$fields['description'] = $ticket_description;
				
		$lnkedAppID = "";
		
		$extKey = array("businessprocess_id", "record_id");
		foreach($data as $FieldId=>$FieldData)
		{
			if($FieldData['code'] == "applicationsolution_list")
			{
				// 和applicationsolution建立关联
				$lnkedAppID = $FieldData['value_obj_key'];
				
				/*
				$sApp = MetaModel::GetObjectByColumn('ApplicationSolution', 'friendlyname', $FieldData['value'], false);
				if(!$sApp)
				{
					$lnkedAppID = null;
				}else
				{
					$lnkedAppID = $sApp->GetKey();
				}*/
				//$oAppSet = DBObjectSet::FromScratch('lnkApplicationSolutionToFunctionalCI');
				//$oAppSet->AddObject($sApp);
				//$oNewCI->Set('applicationsolution_list', $oAppSet);
			}elseif(in_array($FieldData['code'], $extKey))  // 外键特殊处理
			{
				$fields[$FieldData['code']] = $FieldData['value_obj_key'];
			}elseif(preg_match("/^tips/", $FieldData['code']))  // tips开头字段做特殊处理，用于工单页面提醒信息或者扩展的工单信息
			{
				continue;
			}else
			{
				$fields[$FieldData['code']] = $FieldData['value'];
			}
		}
		$oNew = $iTopAPI->coreCreate($classname, $fields);
		if($oNew['code'] == 0)
		{
			foreach($oNew['objects'] as $k=>$v)
			{
				$oKey = $v['key'];
			}
		}else
		{
			die(json_encode($oNew['message']));
		}
		//die(json_encode($oKey));
		
		// 关联对象和工单
		$iTopAPI->coreCreate('lnkFunctionalCIToTicket', array(
			'ticket_id' => $ticket_id,
			'functionalci_id' => $oKey,
		));
		
		// 和applicationsolution建立关联
		if($lnkedAppID)
		{
			$iTopAPI->coreCreate('lnkApplicationSolutionToFunctionalCI', array(
				'applicationsolution_id' => $lnkedAppID,
				'functionalci_id' => $oKey,
			));
		}
		
		// ticket和工单发起人建立关联
		$iTopAPI->coreCreate('lnkContactToTicket', array(
			'ticket_id' => $ticket_id,
			'contact_id' => $myContactId,
		));
		
		// 如果是申请APP，APP联系人添加工单发起人
		if($classname == "ApplicationSolution")
		{
			$iTopAPI->coreCreate('lnkContactToApplicationSolution', array(
				'applicationsolution_id' => $oKey,
				'contact_id' => $myContactId,
			));
		}
	}
	 
	/**
	 * 根据联系人所在组织的交付模式获取该交付模式的联系人（团队），判断该联系人的团队ID
	 */
	public function GetAssignInfo($appId)
	{
		$oql = "SELECT lnkContactToApplicationSolution AS l WHERE l.applicationsolution_id=:applicationsolution_id";
		$oSearch = DBObjectSearch::FromOQL_AllData($oql);
		$oSet = new DBObjectSet($oSearch, array(), array("applicationsolution_id" => $appId));
		$oArray = $oSet->ToArrayOfValues();
		
		if(!$oArray)
		{
			return(false);
		}
		
		$oIds = array();
		foreach($oArray as $v)
		{
			if($v['l.contact_id_finalclass_recall'] == "Person")
			{
				array_push($oIds, $v['l.contact_id']);
			}
		}
		
		// 随机取一个联系人
		$oWinnerId = $oIds[array_rand($oIds, 1)];
		$oPerson = MetaModel::GetObject("Person", $oWinnerId);
		$org_id = $oPerson->Get('org_id');
		$oOrg = MetaModel::GetObject("Organization", $org_id);
		$deliverymodel_id = $oOrg->Get('deliverymodel_id');
		$oDeliveryModel = MetaModel::GetObject("DeliveryModel", $deliverymodel_id);
		
		// 用户所属组成的交付模式的contact列表
		$aim_team = $oDeliveryModel->Get("contacts_list")->ToArrayOfValues();
		$list_aim_team = array();
		foreach($aim_team as $v)
		{
			array_push($list_aim_team, $v['lnkDeliveryModelToContact.contact_id']);
		}
		
		// 用户的team列表
		$my_team = $oPerson->Get("team_list")->ToArrayOfValues();
		$list_my_team = array();
		foreach($my_team as $v)
		{
			array_push($list_my_team, $v['lnkPersonToTeam.team_id']);
		}
		
		$all_team = array_intersect($list_aim_team, $list_my_team);
		if(!$all_team)
		{
			return(false);
		}
		$team_id = $list_aim_team[array_rand($all_team, 1)];
		return(array('team_id'=>$team_id, 'agent_id' => $oWinnerId));
	}
	/**
	 * 创建事件之后，根据事件关联的APP自动更新事件的配置项、联系人
	 * 并且自动分配事件给该联系人
	 */
	public function UpdateIncident($data, $oObject)
	{
		if(get_class($oObject) != "Incident")
		{
			return;
		}
		
		$ticket_id = $oObject->GetKey();
		$lnkedAppID = -1;
		$iTopAPI = new iTopClient();
		
		// 链接事件单和app
		foreach($data as $FieldId=>$FieldData)
		{
			if($FieldData['code'] == "functionalcis_list")
			{
				// 和applicationsolution建立关联
				$lnkedAppID = $FieldData['value_obj_key'];
				// 关联对象和工单
				$iTopAPI->coreCreate('lnkFunctionalCIToTicket', array(
					'ticket_id' => $ticket_id,
					'functionalci_id' => $lnkedAppID,
				));
			}
		}
		
		// ticket和事件关联APP的负责人建立关联
		/*
		$iTopAPI->coreCreate('lnkContactToTicket', array(
			'ticket_id' => $ticket_id,
			'contact_id' => $myContactId,
		));*/
		
		// 自动指派
		if($lnkedAppID > 0)
		{
			$oAssign = $this->GetAssignInfo($lnkedAppID);
			//die(json_encode($oAssign));
			if($oAssign)
			{
				$iTopAPI->coreApply_stimulus('Incident', $ticket_id, array(
					'team_id' => $oAssign['team_id'],
					'agent_id' => $oAssign['agent_id']
				),'ev_assign');
			}else
			{
				$data = array("public_log" => "Auto Assign Failed");
				$iTopAPI->coreUpdate("Incident", $ticket_id, $data);
			}
		}
	}
	
	/**
	 *	Get the form data as an array
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
				$aCode = $oField->Get('code');
				$aValues[$oField->GetKey()] = array(
					'code' => $aCode,
					'label' => $oField->Get('label'),
					'input_type' => $oField->Get('input_type'),
					'value' => $value
				);
				
				if($aCode == "name" && !$this->CheckUniqFields($value))
				{
					return(false);
				}

				if ($oField->Get('input_type') == 'duration')
				{
					$iDurationSec = $value['d']*86400 + $value['h']*3600 + $value['m']*60 + $value['s'];
					$aValues[$oField->GetKey()]['value'] = AttributeDuration::FormatDuration($iDurationSec);
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
	 */
	public function GetPostedValuesAsText($oObject)
	{
		$aValues = $this->GetPostedValuesAsArray($oObject);
		if(!$aValues)
		{
			return($aValues);
		}

		/*  修改portal 的index.php代码
			if(!$oTemplate->GetPostedValuesAsText($oRequest))
			{
				RequestCreationForm($oP, $oUserOrg);
				$sIssueDesc = Dict::Format('此对象已存在，不能重复申请', implode(', ', $aIssues));
				$oP->add_ready_script("alert('".addslashes($sIssueDesc)."');");
				return;
			}else
			{
				$oRequest->Set($sLogAttCode, $oTemplate->GetPostedValuesAsText($oRequest)."\n");
				$oRequest->DBInsertNoReload();
				$oTemplate->RecordExtraDataFromPostedForm($oRequest);
			}
		*/
		$aLines = array();
		foreach ($aValues as $sFieldId => $aFieldData)
		{
			$aLines[] = $aFieldData['label']." : ".$aFieldData['value'];
		}

		$sRet = implode("<br>", $aLines);
		return $sRet;
	}

	/**
	 * Record the template data in a structured way	
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
		
		//创建对象
		$this->CreateObject($aValues,$oObject);
		// 自动指派事件工单
		$this->UpdateIncident($aValues, $oObject);
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

			$oFieldSearch = DBObjectSearch::FromOQL('SELECT TemplateField WHERE template_id = :template_id');
			$oFieldSearch->AllowAllData();
			$oFieldSet = new DBObjectSet($oFieldSearch, array('order' => true), array('template_id' => $this->GetKey()));
			$aInputs = array();
			$aHidden = array();
			while($oField = $oFieldSet->Fetch())
			{
				if ($oField->Get('input_type') == 'hidden')
 				{
					$aHidden[] = array('label' => '<span title="">'.$oField->Get('code').'</span>', 'value' => $oField->Get('initial_value'));
				}
				else
				{
	 				$sHTML = $oField->GetFormElement($oPage);
					$aInputs[] = array('label' => '<span title="">'.$oField->Get('label').'</span>', 'value' => $sHTML);
				}
			}
			$oPage->add('<table style="vertical-align:top">');
			$oPage->add('<tbody>');
			$oPage->add('<tr>');
			$oPage->add('<td style="vertical-align:top">');

			$oPage->add('<fieldset>');
			$oPage->add('<legend>'.Dict::S('Templates:PreviewTab:FormFields').'</legend>');
			$oPage->add('<form id="tpl_preview">');
			$oPage->details($aInputs);
			$oPage->add('</form>');
			$oPage->add('</fieldset>');

			if (count($aHidden) > 0)
			{
				$oPage->add('<fieldset>');
				$oPage->add('<legend>'.Dict::S('Templates:PreviewTab:HiddenFields').'</legend>');
				$oPage->details($aHidden);
				$oPage->add('</fieldset>');
			}

			$oPage->add('</td>');
			$oPage->add('</tr>');
			$oPage->add('</tbody>');
			$oPage->add('</table>');

			$oPage->add_ready_script(
<<<EOF
			// Starts the validation when the page is ready
			CheckFields('tpl_preview', false);
EOF
);
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
		MetaModel::Init_AddAttribute(new AttributeString("code", array("allowed_values"=>null, "sql"=>"code", "default_value"=>"", "is_null_allowed"=>false, "depends_on"=>array())));
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
			$sHTMLValue = "<input title=\"$sHelpText\" class=\"date-pick\" type=\"text\" size=\"12\" name=\"tpl_{$sFieldPrefix}{$sAttCode}{$sNameSuffix}\" value=\"".htmlentities($value, ENT_QUOTES, 'UTF-8')."\" id=\"$iId\"/>&nbsp;{$sValidationField}";
			break;

		case 'date_and_time':
			$aEventsList[] ='validate';
			$aEventsList[] ='keyup';
			$aEventsList[] ='change';
			$sHTMLValue = "<input title=\"$sHelpText\" class=\"datetime-pick\" type=\"text\" size=\"20\" name=\"tpl_{$sFieldPrefix}{$sAttCode}{$sNameSuffix}\" value=\"".htmlentities($value, ENT_QUOTES, 'UTF-8')."\" id=\"$iId\"/>&nbsp;{$sValidationField}";
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

	/*
	* Format the data for a user friendly output
	* Return Array The structure to pass to WebPage::details(), or null if nothing has been found	
	*/
	public function GetAsPageDetails($bViewHiddenFields = false)
	{
		$aData = unserialize($this->Get('data'));
		$iTemplateId = $this->Get('template_id');
		$sOQL = 'SELECT TemplateField WHERE template_id = :template_id';
		$oFieldsSet = new DBObjectSet(DBObjectSearch::FromOQL($sOQL), array(), array('template_id' => $iTemplateId));
		$aFields = array();
		while($oField = $oFieldsSet->Fetch())
		{
			$aFields[$oField->GetKey()] = $oField->Get('label');
		}
		$aTemplateData = array();
		foreach ($aData as $iField => $aInfo)
		{
			if (!$bViewHiddenFields &&($aInfo['input_type'] == 'hidden')) continue;

			$sLabel = (isset($aFields[$iField])) ? $aFields[$iField] : $aInfo['label'];
			$sDisplayValue = $aInfo['value'];
			if (isset($aInfo['value_obj_class']) && isset($aInfo['value_obj_key']))
			{
				$oSelectedObj = MetaModel::GetObject($aInfo['value_obj_class'], $aInfo['value_obj_key'], false);
				if ($oSelectedObj)
				{
					$sDisplayValue = $oSelectedObj->GetHyperLink();
				}
			}
			$aTemplateData[] = array('label' => '<span title="">'.$sLabel.'</span>', 'value' => $sDisplayValue);
		}
		return $aTemplateData;
	}
}


class FormTemplatePlugIn implements iApplicationUIExtension, iApplicationObjectExtension
{
	public function OnDisplayProperties($oObject, WebPage $oPage, $bEditMode = false)
	{
		$sViewMode = trim(strtolower(MetaModel::GetModuleSetting('templates-base', 'view_extra_data', 'relations')));
		if ($sViewMode == 'properties')
		{
			$oExtraData = TemplateExtraData::FindByObject(get_class($oObject), $oObject->GetKey());
			if ($oExtraData)
			{
				$oPage->add('<fieldset>');
				$oPage->add('<legend>'.Dict::S('Templates:UserData').'</legend>');
				$aTemplateData = $oExtraData->GetAsPageDetails(true /*view hidden fields*/);
				$oPage->details($aTemplateData);

				$iTemplate = $oExtraData->Get('template_id');
				$oTemplate = MetaModel::GetObject('Template', $iTemplate, false);
				if ($oTemplate)
				{
					$oPage->add('<p>'.Dict::Format('Templates:UserData-Source', $oTemplate->GetHyperLink()).'</p>');
				}

				$oPage->add('</fieldset>');
			}
		}
	}

	public function OnDisplayRelations($oObject, WebPage $oPage, $bEditMode = false)
	{
		$sViewMode = trim(strtolower(MetaModel::GetModuleSetting('templates-base', 'view_extra_data', 'relations')));
		if ($sViewMode != 'properties')
		{
			$oExtraData = TemplateExtraData::FindByObject(get_class($oObject), $oObject->GetKey());
			if ($oExtraData)
			{
				$oPage->SetCurrentTab(Dict::S('Templates:UserData'));
				$oPage->add('<table style="vertical-align:top">');
				$oPage->add('<tbody>');
				$oPage->add('<tr>');
				$oPage->add('<td style="vertical-align:top">');
				$aTemplateData = $oExtraData->GetAsPageDetails(true /*view hidden fields*/);
				$oPage->details($aTemplateData);
				$oPage->add('</td>');
				$oPage->add('</tr>');
				$oPage->add('</tbody>');
				$oPage->add('</table>');

				$iTemplate = $oExtraData->Get('template_id');
				$oTemplate = MetaModel::GetObject('Template', $iTemplate, false);
				if ($oTemplate)
				{
					$oPage->add('<p>'.Dict::Format('Templates:UserData-Source', $oTemplate->GetHyperLink()).'</p>');
				}
			}
		}
	}

	public function OnFormSubmit($oObject, $sFormPrefix = '')
	{
	}

	public function OnFormCancel($sTempId)
	{
	}

	public function EnumUsedAttributes($oObject)
	{
		return array();
	}

	public function GetIcon($oObject)
	{
		return '';
	}

	public function GetHilightClass($oObject)
	{
		// Possible return values are:
		// HILIGHT_CLASS_CRITICAL, HILIGHT_CLASS_WARNING, HILIGHT_CLASS_OK, HILIGHT_CLASS_NONE	
		return HILIGHT_CLASS_NONE;
	}

	public function EnumAllowedActions(DBObjectSet $oSet)
	{
		// No action
		return array();
	}

	public function OnIsModified($oObject)
	{
	}

	public function OnCheckToWrite($oObject)
	{
	}

	public function OnCheckToDelete($oObject)
	{
	}

	public function OnDBUpdate($oObject, $oChange = null)
	{
	}

	public function OnDBInsert($oObject, $oChange = null)
	{
	}

	public function OnDBDelete($oObject, $oChange = null)
	{
		$oLocSearch = DBObjectSearch::FromOQL("SELECT TemplateExtraData WHERE obj_class = '".get_class($oObject)."' AND obj_key = ".$oObject->GetKey());
		$oLocSearch->AllowAllData();
		// Warning: If 'TemplateExtraData' has to be derived, then this will not work because BulkDelete has a bug
		// Todo - replace by a loop to delete each item independently
		MetaModel::BulkDelete($oLocSearch);
	}
}

?>
