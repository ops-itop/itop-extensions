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
        MetaModel::Init_AddAttribute(new AttributeString("exclude_attcodes", array("allowed_values" => null, "sql" => "exclude_attcodes", "default_value" => null, "is_null_allowed" => true, "depends_on" => array())));
        // Display lists
        MetaModel::Init_SetZListItems('details', array('description', 'target_class', 'filter', 'exclude_attcodes', 'tracked_attcodes', 'action_list')); // Attributes to be displayed for the complete details
        MetaModel::Init_SetZListItems('list', array('finalclass', 'target_class', 'exclude_attcodes', 'tracked_attcodes')); // Attributes to be displayed for a list
        // Search criteria
        MetaModel::Init_SetZListItems('standard_search', array('description', 'target_class')); // Criteria of the std search form
        //MetaModel::Init_SetZListItems('advanced_search', array('name')); // Criteria of the advanced search form
    }
}

class TriggerOnObjectUpdatePlugIn implements iApplicationObjectExtension
{
    private $aChangedAttCodes = [];

    public function OnIsModified($oObject)
    {
        return false;
    }
    
    public function OnCheckToWrite($oObject)
    {
        if ($oObject->IsNew()) return array();
        // See comment to OnDBUpdate bellow to figure it out.
        // TODO: haven't worked with list attcodes yet, like contact_list, functionalci_list, etc.
        $aAttCodesWithoutLists = array_filter(array_keys($oObject->ListChanges()), function($sAttCode) {
            //return !preg_match('/_list$/', $sAttCode);   某些场景下需要_list属性更新时触发, 通过支持exclude_attcodes来排除某些属性
            return true;
        });
        $aNewAttCodes = array_fill_keys($aAttCodesWithoutLists, true);
        $sKey = get_class($oObject) . '::' . $oObject->GetKey();
        $this->aChangedAttCodes[$sKey] = isset($this->aChangedAttCodes[$sKey]) ?
            array_merge($aNewAttCodes, $this->aChangedAttCodes[$sKey]) : $aNewAttCodes;
        return array();
    }
    
    public function OnCheckToDelete($oObject)
    {
        return array();
    }

    /**
     * OnDBUpdate can be called multiple times for one real update and each time it adds new attcodes.
     * On each iteration we collect attcodes and mark them as triggered to prevent re-trigger on the same attcodes.
     * ListChanges doesn't work sometimes inside OnDBUpdate (don't know why). So we get changed attcodes inside OnCheckToWrite,
     * because it's called at least once for every OnDBUpdate and ListChanges works inside it.
     *
     * @param DBObject $oObject
     * @param null $oChange
     */
    public function OnDBUpdate($oObject, $oChange = null)
    {
        if (!is_object($oChange)) return;
        $sClass = get_class($oObject);
        $sKey = $sClass . '::' . $oObject->GetKey();
        $aFilteredAttcodes = isset($this->aChangedAttCodes[$sKey]) ?
            array_keys(array_filter($this->aChangedAttCodes[$sKey])) : []; // select only 'attcode' => true
        if (empty($aFilteredAttcodes)) return;
        array_walk($this->aChangedAttCodes[$sKey], function (&$item) { $item = false; });
        $sClassList = implode("', '", MetaModel::EnumParentClasses($sClass, ENUM_PARENT_CLASSES_ALL));
        $sRegExp = '^ *$|' . implode('|', $aFilteredAttcodes); // '^ *$' - regexp for an empty tracked_attcodes (exactly with space!)
        $oSet = new DBObjectSet(DBObjectSearch::FromOQL("SELECT TriggerOnObjectUpdate WHERE target_class IN ('$sClassList') AND tracked_attcodes REGEXP '$sRegExp'"));
        if ($oSet->Count() > 0) {
            $aChangeLog = array(); // change log like in ticket's history
            $aContextArgs = array(); // context arguments to use in notifications as placeholders $change->html(log)$
            $oFilter = DBObjectSearch::FromOQL("SELECT CMDBChangeOpSetAttribute WHERE attcode IN ('" . implode("','", $aFilteredAttcodes) . "')");
            // $oFilter->AddCondition('attcode', $aFilteredAttcodes, 'IN'); // it throws an exception, but works in OQL above
            $oFilter->AddCondition('objkey', $oObject->GetKey(), '=');
            $oFilter->AddCondition('objclass', $sClass, '=');
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
            while ($oTrigger = $oSet->Fetch()) {
                $exclude_attcodes = $oTrigger->Get('exclude_attcodes');
                $exclude_attcodes = explode(",", $exclude_attcodes);
                // 如果变化的属性全都在exclude_attcodes里，则不触发
                $flag = false;
                foreach($aFilteredAttcodes as $val) {
                    if(!in_array($val, $exclude_attcodes)) {
                        $flag = true;break;
                    }
                }
                if($flag) {
                    $oTrigger->DoActivate(array_merge($oObject->ToArgs('this'), $aContextArgs));
                }
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
