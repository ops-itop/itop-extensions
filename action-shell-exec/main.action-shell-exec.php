<?php

/**
 * @copyright   Copyright (C) 2016 Vladimir Kunin <v.b.kunin@gmail.com>
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

class ActionShellExec extends Action
{
  public static function Init()
  {
    $aParams = array
    (
        "category" => "core/cmdb,application",
        "key_type" => "autoincrement",
        "name_attcode" => "name",
        "state_attcode" => "",
        "reconc_keys" => array('name'),
        "db_table" => "priv_action_shell_exec",
        "db_key_field" => "id",
        "db_finalclass_field" => "",
        "display_template" => "",
    );
    MetaModel::Init_Params($aParams);
    MetaModel::Init_InheritAttributes();
    MetaModel::Init_AddAttribute(new AttributeString("script_path", array("allowed_values"=>null, "sql"=>'script_path', "default_value"=>'', "is_null_allowed"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
    MetaModel::Init_AddAttribute(new AttributeText("params", array("allowed_values"=>null, "sql"=>'params', "default_value"=>'', "is_null_allowed"=>true, "depends_on"=>array(), "always_load_in_tables"=>false)));
    MetaModel::Init_SetZListItems('details', array('name', 'description', 'status', 'script_path', 'params', 'trigger_list'));
    MetaModel::Init_SetZListItems('list', array('finalclass', 'name', 'description', 'status', 'script_path', 'params'));
    // MetaModel::Init_SetZListItems('standard_search', array('name')); // Criteria of the std search form
    // MetaModel::Init_SetZListItems('advanced_search', array('name')); // Criteria of the advanced search form
  }

  public function DoExecute($oTrigger, $aContextArgs)
  {
    if (MetaModel::IsLogEnabledNotification())
    {
      $oLog = new EventNotificationShellExec();
      if ($this->IsBeingTested())
      {
        $oLog->Set('message', 'TEST - Executing script ('.$this->Get('script_path').')');
      }
      else
      {
        $oLog->Set('message', 'Executing script');
      }
      $oLog->Set('userinfo', UserRights::GetUser());
      $oLog->Set('trigger_id', $oTrigger->GetKey());
      $oLog->Set('action_id', $this->GetKey());
      $oLog->Set('object_id', $aContextArgs['this->object()']->GetKey());
      // Must be inserted now so that it gets a valid id that will make the link
      // between an eventual asynchronous task (queued) and the log
      $oLog->DBInsertNoReload();
    }
    else
    {
      $oLog = null;
    }
    try
    {
      $sRes = $this->_DoExecute($oTrigger, $aContextArgs, $oLog);

      if ($this->IsBeingTested())
      {
        $sPrefix = 'TEST ('.$this->Get('script_path').') - ';
      }
      else
      {
        $sPrefix = '';
      }
      $oLog->Set('message', $sPrefix.$sRes);
    }
    catch (Exception $e)
    {
      if ($oLog)
      {
        $oLog->Set('message', 'Error: '.$e->getMessage());
      }
    }
    if ($oLog)
    {
      $oLog->DBUpdate();
    }
  }

  protected function _DoExecute($oTrigger, $aContextArgs, &$oLog)
  {
    $sPreviousUrlMaker = ApplicationContext::SetUrlMakerClass();
    try
    {
      $sScriptPath = $this->Get('script_path');
      if (!is_executable($sScriptPath)) {
          throw new Exception('cannot execute script');
      }
      $sCMD = '';
      $aParams = explode("\n", $this->Get('params'));
      array_walk($aParams, function(&$aParam) {
        $aParam = explode('=', $aParam);
        $aParam = array_map('trim', $aParam);
      });
      foreach($aParams as $aParam) {
        if (count($aParam) == 2) {
          $sVarName = $aParam[0];
          $sVarValue = MetaModel::ApplyParams($aParam[1], $aContextArgs);
          /* 不检查是否有此变量，用于自定义变量。例如指定SCRIPT_NAME=demo.php，可以在shell脚本中调用一个后台
           * 执行的php脚本。注意，变量赋值不要带引号，插件会自动加上引号
          if ($sVarValue == $aParam[1]) {
            $sVarValue = '';
            // Значит ApplyParams не нашел такого плейсхолдера
            // 所以ApplyParams没有发现这种плейсхолдер
            if ($this->IsBeingTested() && !is_null($oLog))
              $oLog->Set('log', $oLog->Get('log')."There is no value for placeholder: $aParam[1]\n");
          }*/
        } else {
          $sVarName = $aParam[0];
          $sVarValue = MetaModel::ApplyParams($aParam[0], $aContextArgs);
          if ($sVarValue == $aParam[0]) {
            $sVarValue = '';
            if ($this->IsBeingTested() && !is_null($oLog))
              $oLog->Set('log', $oLog->Get('log')."There is no value for placeholder: $aParam[0]\n");
          }
        }
        $sVarName = str_replace('->', '_', $sVarName);
        $sVarName = str_replace('$', '', $sVarName);
        $sVarName = strtoupper($sVarName);
        $sCMD .= $sVarName.'="'.$sVarValue .'" ';
      }
      $sCMD .= ' '.$sScriptPath;
      if ($this->IsBeingTested()) {
        if (!is_null($oLog)) $oLog->Set('log', $oLog->Get('log')."Start executing shell command:\n$sCMD");
        return "Script will be started.";
      }
      if (!is_null($oLog))
	  {
		if(function_exists("shell_exec"))
		{
			$oLog_log = shell_exec($sCMD);
		}else
		{
			$oLog_log = "shell_exec() has been disabled for security reasons";
		}
		$oLog->Set('log', $oLog_log);
	  }
      return "Script $sScriptPath successfully started.";
    }
    catch(Exception $e)
    {
      ApplicationContext::SetUrlMakerClass($sPreviousUrlMaker);
      throw $e; // Ошибка выбрасывается на верхний уровень и записывается в лог оповещения. （分散到上层的错误写入日志和警报。）
    }
    ApplicationContext::SetUrlMakerClass($sPreviousUrlMaker);
  }
}

class EventNotificationShellExec extends EventNotification
{
  public static function Init()
  {
    $aParams = array
    (
        "category" => "core/cmdb,view_in_gui",
        "key_type" => "autoincrement",
        "name_attcode" => "",
        "state_attcode" => "",
        "reconc_keys" => array(),
        "db_table" => "priv_event_shellexec",
        "db_key_field" => "id",
        "db_finalclass_field" => "",
        "display_template" => "",
        "order_by_default" => array('date' => false)
    );
    MetaModel::Init_Params($aParams);
    MetaModel::Init_InheritAttributes();
    MetaModel::Init_AddAttribute(new AttributeText("log", array("allowed_values"=>null, "sql"=>"log", "default_value"=>null, "is_null_allowed"=>true, "depends_on"=>array())));
    MetaModel::Init_SetZListItems('details', array('date', 'message', 'userinfo', 'trigger_id', 'action_id', 'object_id', 'log'));
    MetaModel::Init_SetZListItems('list', array('date', 'message'));
    // Search criteria
    // MetaModel::Init_SetZListItems('standard_search', array('name')); // Criteria of the std search form
    // MetaModel::Init_SetZListItems('advanced_search', array('name')); // Criteria of the advanced search form
  }
}
