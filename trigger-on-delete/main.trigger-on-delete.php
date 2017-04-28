<?php

class TriggerOnObjectDelete extends TriggerOnObject
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
            "db_table" => "priv_trigger_onobjdelete",
            "db_key_field" => "id",
            "db_finalclass_field" => "",
            "display_template" => "",
        );
        MetaModel::Init_Params($aParams);
        MetaModel::Init_InheritAttributes();

        // Display lists
        MetaModel::Init_SetZListItems('details', array('description', 'target_class', 'filter', 'action_list')); // Attributes to be displayed for the complete details
        MetaModel::Init_SetZListItems('list', array('finalclass', 'target_class')); // Attributes to be displayed for a list
        // Search criteria
        MetaModel::Init_SetZListItems('standard_search', array('description', 'target_class')); // Criteria of the std search form
        //MetaModel::Init_SetZListItems('advanced_search', array('name')); // Criteria of the advanced search form
    }
}

class TriggerOnObjectDeletePlugIn implements iApplicationObjectExtension
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
    }

    public function OnDBDelete($oObject, $oChange = null)
    {
        if (!is_object($oChange)) return;
		/*
        $aChangeLog = array(); // лог изменения как в истории(如何改变历史日志)
        $aContextArgs = array(); // аргументы контекста для использования в уведомлении в виде $change->html(log)$（上下文参数用于通知作为$ change - > html(log)$）
        $oFilter = new DBObjectSearch('CMDBChangeOpDelete');
        $oFilter->AddCondition('objkey', $oObject->GetKey(), '=');
        $oFilter->AddCondition('objclass', get_class($oObject), '=');
        $oFilter->AddCondition('change', $oChange->GetKey(), '=');
        $oChangeOpSet = new DBObjectSet($oFilter);
        while ($oChangeOp = $oChangeOpSet->Fetch()) {
            $aChangeLog[] = $oChangeOp->GetDescription();
            $aContextArgs['change->userinfo'] = $oChangeOp->Get('userinfo');
            $aContextArgs['change->date'] = $oChangeOp->Get('date');
        }
        $aContextArgs['change->log'] = strip_tags(implode(" ", $aChangeLog));
        $aContextArgs['change->html(log)'] = "<ul><li>" . implode('</li><li>', $aChangeLog) . "</li></ul>";
        foreach ($aContextArgs as $key => $val) {
            $aContextArgs[str_replace('->', '-&gt;', $key)] = $val;
        }
		*/
		
        $sClassList = implode("', '", MetaModel::EnumParentClasses(get_class($oObject), ENUM_PARENT_CLASSES_ALL));
		
        $oSet = new DBObjectSet(DBObjectSearch::FromOQL("SELECT TriggerOnObjectDelete WHERE target_class IN ('$sClassList')"));
        if ($oSet->Count() > 0) {
            while ($oTrigger = $oSet->Fetch()) {
                $oTrigger->DoActivate($oObject->ToArgs('this'));
            }
        }		
    }
}

?>