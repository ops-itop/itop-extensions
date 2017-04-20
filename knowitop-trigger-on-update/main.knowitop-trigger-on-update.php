<?php

class TriggerOnObjectUpdate extends TriggerOnObject
{
    public static function Init()
    {
        $aParams = array
        (
            "category" => "core/cmdb,bizmodel",
            "key_type" => "autoincrement",
            "name_attcode" => "description",
            "state_attcode" => "",
            "reconc_keys" => array('description'),
            "db_table" => "priv_trigger_onobjupdate",
            "db_key_field" => "id",
            "db_finalclass_field" => "",
            "display_template" => "",
        );
        MetaModel::Init_Params($aParams);
        MetaModel::Init_InheritAttributes();
        MetaModel::Init_AddAttribute(new AttributeString("tracked_attcodes", array("allowed_values" => null, "sql" => "tracked_attcodes", "default_value" => null, "is_null_allowed" => true, "depends_on" => array())));

        // Display lists
        MetaModel::Init_SetZListItems('details', array('description', 'target_class', 'filter', 'tracked_attcodes', 'action_list')); // Attributes to be displayed for the complete details
        MetaModel::Init_SetZListItems('list', array('finalclass', 'target_class', 'tracked_attcodes')); // Attributes to be displayed for a list
        // Search criteria
        MetaModel::Init_SetZListItems('standard_search', array('description', 'target_class')); // Criteria of the std search form
        //MetaModel::Init_SetZListItems('advanced_search', array('name')); // Criteria of the advanced search form
    }
}

class TriggerOnObjectUpdatePlugIn implements iApplicationObjectExtension
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
        if (!is_object($oChange)) return;
        $aChangedAttcodes = array('^ *$'); // regexp пустого значения поля tracked_attcodes （tracked_attcodes regexp空字段值）
        $aChangeLog = array(); // лог изменения как в истории(如何改变历史日志)
        $aContextArgs = array(); // аргументы контекста для использования в уведомлении в виде $change->html(log)$（上下文参数用于通知作为$ change - > html(log)$）
        $oFilter = new DBObjectSearch('CMDBChangeOpSetAttribute');
        $oFilter->AddCondition('objkey', $oObject->GetKey(), '=');
        $oFilter->AddCondition('objclass', get_class($oObject), '=');
        $oFilter->AddCondition('change', $oChange->GetKey(), '=');
        $oChangeOpSet = new DBObjectSet($oFilter);
        while ($oChangeOp = $oChangeOpSet->Fetch()) {
            $aChangedAttcodes[] = $oChangeOp->Get('attcode');
            $aChangeLog[] = $oChangeOp->GetDescription();
            $aContextArgs['change->userinfo'] = $oChangeOp->Get('userinfo');
            $aContextArgs['change->date'] = $oChangeOp->Get('date');
        }
        $aContextArgs['change->log'] = strip_tags(implode(" ", $aChangeLog));
        $aContextArgs['change->html(log)'] = "<ul><li>" . implode('</li><li>', $aChangeLog) . "</li></ul>";
        foreach ($aContextArgs as $key => $val) {
            $aContextArgs[str_replace('->', '-&gt;', $key)] = $val;
        }
        $sClassList = implode("', '", MetaModel::EnumParentClasses(get_class($oObject), ENUM_PARENT_CLASSES_ALL));
        $sRegExp = implode('|', $aChangedAttcodes);
        $oSet = new DBObjectSet(DBObjectSearch::FromOQL("SELECT TriggerOnObjectUpdate WHERE target_class IN ('$sClassList') AND  tracked_attcodes REGEXP '$sRegExp'"));
        if ($oSet->Count() > 0) {
            while ($oTrigger = $oSet->Fetch()) {
                $oTrigger->DoActivate(array_merge($oObject->ToArgs('this'), $aContextArgs));
            }
        }
    }

    public function OnDBInsert($oObject, $oChange = null)
    {
    }

    public function OnDBDelete($oObject, $oChange = null)
    {
    }
}

?>