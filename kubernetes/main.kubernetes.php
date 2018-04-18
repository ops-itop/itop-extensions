<?php
/**
 * Usage:
 * File Name: main.kubernetes.php
 * Author: annhe  
 * Mail: i@annhe.net
 * Created Time: 2018-04-18 13:44:54
 **/

class UpdateKubernetesContacts implements iBackgroundProcess
{
	public function GetPeriodicity()
	{	
		$interval = MetaModel::GetModuleSetting('kubernetes', 'cron_updatecontacts_interval', 180);
		return $interval;
	}

	private function Add($list, $kubernetes_id) {
		$c = DBObjectSet::FromScratch('lnkPersonToKubernetes');;
		foreach($list as $k => $v)
		{
			$p = new lnkPersonToKubernetes();
			$p->Set('person_id', $v['lnkContactToApplicationSolution.contact_id']);
			$p->Set('kubernetes_id', $kubernetes_id);
			$c->AddObject($p);
		}
		return $c;
	}

	private function Update($appid, $aReport) {
		$deployment = new DBObjectSet(DBObjectSearch::FromOQL("SELECT Deployment WHERE applicationsolution_id = $appid"));
		$ingress = new DBObjectSet(DBObjectSearch::FromOQL("SELECT Ingress WHERE applicationsolution_id = $appid"));

		// 根据关联的APP自动填充联系人字段
		$app = MetaModel::GetObject('ApplicationSolution', $appid);
		$list = $app->Get('contact_list_custom')->ToArrayOfValues();
		
		while($item = $deployment->Fetch()) {
			$c = $this->Add($list, $item->GetKey());
			$item->Set('person_list', $c);
			$item->DBUpdate();
			$aReport['Auto update lnkPersonToKubernetes'][] = $item->Get('friendlyname');
		}
		while($item = $ingress->Fetch()) {
			$c = $this->Add($list, $item->GetKey());
			$item->Set('person_list', $c);
			$item->DBUpdate();
			$aReport['Auto update lnkPersonToKubernetes'][] = $item->Get('friendlyname');
		}
		return $aReport;
	}

	public function Process($iTimeLimit)
	{
      	$aReport = array();
		if (MetaModel::IsValidClass('Deployment') || MetaModel::IsValidClass('Ingress'))
		{
			$iAutoCloseDelay = 3 * $this->GetPeriodicity();
			$oSet = new DBObjectSet(DBObjectSearch::FromOQL("SELECT CMDBChangeOpCreate WHERE objclass='lnkContactToApplicationSolution' AND date >= DATE_SUB(NOW(), INTERVAL $iAutoCloseDelay SECOND)"));
			$oSet->OptimizeColumnLoad(array()); // Optimize the query, we'll do a reload for each ticket to actually process but it's peanuts
			while ((time() < $iTimeLimit) && $oToUpdate = $oSet->Fetch())
			{
				$key = $oToUpdate->Get('objkey');
				$lnk = MetaModel::GetObject('lnkContactToApplicationSolution', $key);
				$appid = $lnk->Get('applicationsolution_id');
				$aReport = $this->Update($appid, $aReport);
			}

			$oSet = new DBObjectSet(DBObjectSearch::FromOQL("SELECT CMDBChangeOpDelete WHERE objclass='lnkContactToApplicationSolution' AND date >= DATE_SUB(NOW(), INTERVAL $iAutoCloseDelay SECOND)"));
			$oSet->OptimizeColumnLoad(array()); // Optimize the query, we'll do a reload for each ticket to actually process but it's peanuts
			while ((time() < $iTimeLimit) && $oToUpdate = $oSet->Fetch())
			{
				$key = $oToUpdate->Get('fname');
				$appid = explode(" ", $key)[1];
				$aReport = $this->Update($appid, $aReport);
			}
		}
		
		$aStringReport = array();
		foreach ($aReport as $sOperation => $aTicketRefs)
		{
			if (count($aTicketRefs) > 0)
			{
				$aStringReport[] = $sOperation.': '.count($aTicketRefs).' {'.implode(', ', $aTicketRefs).'}';
			}
		}
		if (count($aStringReport) == 0)
		{
			return "No lnkPersonToKubernetes to process";
			echo "No lnkPersonToKubernetes to process";
		}
		else
		{
			return "Some Kubernetes Obj were updated - ".implode('; ', $aStringReport);
			echo "Some Kubernetes Obj were updated - ".implode('; ', $aStringReport);
		}
	}
}
?>
