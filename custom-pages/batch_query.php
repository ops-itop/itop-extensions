<?php
// Copyright (C) 2010-2016 Combodo SARL
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
 * 批量查询工具
 * @annhe.net
 */

require_once('../../approot.inc.php');
require_once(APPROOT.'/application/application.inc.php');
require_once(APPROOT.'/application/itopwebpage.class.inc.php');

require_once(APPROOT.'/application/startup.inc.php');
require_once(APPROOT.'/application/loginwebpage.class.inc.php');
LoginWebPage::DoLogin(false); // false，不需要管理员权限

$sOperation = utils::ReadParam('operation', 'menu');
$oAppContext = new ApplicationContext();
$oP = new iTopWebPage(Dict::S('UI:BatchQuery:Title'));
$oP->set_base(utils::GetAbsoluteUrlAppRoot().'pages/');
$oP->SetBreadCrumbEntry('ui-tool-runquery', Dict::S('Menu:BatchQueriesMenu'), Dict::S('Menu:BatchQueriesMenu+'), '', utils::GetAbsoluteUrlAppRoot().'images/wrench.png');

// Main program
function getExpression($values)
{
	$nameClass = utils::ReadParam('select_class', '', false, 'raw_data');
	if($nameClass == "")
	{
		$nameClass = "FunctionalCI";
	}
	
	$values = str_replace(",", "\n", $values);
	$values = str_replace(" ", "\n", $values);
	$values = explode("\n", $values);
	$ins = array();
	foreach($values as $k => $v)
	{
		$trim_v = trim($v);
		if($trim_v)
			array_push($ins, $trim_v);
	}
	$origIns = $ins;
	$ins = implode("','",$ins);
	
	if($nameClass == "Server")
	{
		$expression = "SELECT Server AS s JOIN PhysicalIP AS ip ON ip.connectableci_id=s.id WHERE ip.ipaddress IN ('$ins') UNION SELECT Server AS s WHERE s.hostname IN ('$ins') OR s.name IN ('$ins')";
	}elseif($nameClass == "IPBlock")
	{
		$where = array();
		foreach($origIns as $k => $v)
		{
			$ipblock = trim($v);
			$ipblock = preg_replace('#0.0.0/8|0.0/16|0/24|0/25|128/25#s', "%", trim($v));
			$where[] = "ip.ipaddress LIKE '" . $ipblock . "'";
		}
		$where = implode(" OR ", $where);
		$expression = "SELECT Server AS s JOIN PhysicalIP AS ip ON ip.connectableci_id=s.id WHERE " . $where;
	}else
	{
		$expression = "SELECT $nameClass WHERE name IN ('$ins')";
	}
	return($expression);
}

$sValues = utils::ReadParam('expression', '', false, 'raw_data');
$sExpression = getExpression($sValues);
$sEncoding = utils::ReadParam('encoding', 'oql');

try
{
	if ($sEncoding == 'crypted')
	{
		// Translate $sExpression into a oql expression
		$sClearText = base64_decode($sExpression);
		echo "<strong>FYI: '$sClearText'</strong><br/>\n";
		$oFilter = DBObjectSearch::unserialize($sExpression);
		$sExpression = $oFilter->ToOQL();
	}
	else
	{
		// leave $sExpression as is
	}

	$oFilter = null;
	$aArgs = array();
	$sSyntaxError = null;

	if (!empty($sExpression))
	{
		try
		{
			$oFilter = DBObjectSearch::FromOQL($sExpression);
		}
		catch(Exception $e)
		{
			if ($e instanceof OqlException)
			{
				$sSyntaxError = $e->getHtmlDesc();
			}
			else
			{
				$sSyntaxError = $e->getMessage();
			}
		}

		if ($oFilter)
		{
			$aArgs = array();
			foreach($oFilter->GetQueryParams() as $sParam => $foo)
			{
				$value = utils::ReadParam('arg_'.$sParam, null, true, 'raw_data');
				if (!is_null($value))
				{
					$aArgs[$sParam] = $value;
				}
				else
				{
					$aArgs[$sParam] = '';
				}
			}
			$oFilter->SetInternalParams($aArgs);
		}
		elseif ($sSyntaxError)
		{
			// Query arguments taken from the page args
		}
	}
	
	$aSubClasses = MetaModel::EnumChildClasses('FunctionalCI', ENUM_CHILD_CLASSES_EXCLUDETOP);
	$aPossibleClasses = array();
	foreach($aSubClasses as $sCandidateClass)
	{
		if (!MetaModel::IsAbstract($sCandidateClass))
		{
			$aPossibleClasses[$sCandidateClass] = Dict::S('Class:'.$sCandidateClass);
		}
	}

	$aPossibleClasses["IPBlock"] = "IP段";
	$oP->add("<br><form method=\"post\">\n");
	$oP->add(Dict::S('UI:BatchQuery:SelectClass')."<br>");
	$oP->add("<br>");
	$oP->add_select($aPossibleClasses, "select_class", "Server", "120" );
	$oP->add("<br><br>");
	$oP->add(Dict::S('UI:BatchQuery:Values')."<br/><br>\n");
	$oP->add("<textarea cols=\"100\" rows=\"8\" name=\"expression\">".htmlentities($sValues, ENT_QUOTES, 'UTF-8')."</textarea>\n");

	if (count($aArgs) > 0)
	{
		$oP->add("<div class=\"wizContainer\">\n");
		$oP->add("<h3>Query arguments</h3>\n");
		foreach($aArgs as $sParam => $sValue)
		{
			$oP->p("$sParam: <input type=\"string\" name=\"arg_$sParam\" value=\"$sValue\">\n");
		}
		$oP->add("</div>\n"); 
	}

	$oP->add("<br><input type=\"submit\" value=\"".Dict::S('UI:Button:Evaluate')."\">\n");
	$oP->add($oAppContext->GetForForm());
	$oP->add("</form>\n");

	if ($oFilter)
	{
		$oP->add("<h3>Query results</h3>\n");
		
		$oResultBlock = new DisplayBlock($oFilter, 'list', false);
		$oResultBlock->Display($oP, 'runquery');

		// Breadcrumb
		//$iCount = $oResultBlock->GetDisplayedCount();
		$sPageId = "ui-search-".$oFilter->GetClass();
		$sLabel = MetaModel::GetName($oFilter->GetClass());
		$aArgs = array();
		foreach (array_merge($_POST, $_GET) as $sKey => $value)
		{
			if (is_array($value))
			{
				$aItems = array();
				foreach($value as $sItemKey => $sItemValue)
				{
					$aArgs[] = $sKey.'['.$sItemKey.']='.urlencode($sItemValue);
				}
			}
			else
			{
				$aArgs[] = $sKey.'='.urlencode($value);
			}
		}
		$sUrl = utils::GetAbsoluteUrlAppRoot().'env-production/custom-pages/batch_query.php?'.implode('&', $aArgs);
		$oP->SetBreadCrumbEntry($sPageId, $sLabel, $oFilter->ToOQL(true), $sUrl, '../images/breadcrumb-search.png');

		$oP->p('');
		$oP->StartCollapsibleSection(Dict::S('UI:RunQuery:MoreInfo'), true);
		$oP->p(Dict::S('UI:RunQuery:DevelopedQuery').htmlentities($oFilter->ToOQL(), ENT_QUOTES, 'UTF-8'));
		//$oP->p(Dict::S('UI:RunQuery:SerializedFilter').$oFilter->serialize());
		$oP->EndCollapsibleSection();
	}
	elseif ($sSyntaxError)
	{
		if ($e instanceof OqlException)
		{
			$sWrongWord = $e->GetWrongWord();
			$aSuggestedWords = $e->GetSuggestions();
			if (count($aSuggestedWords) > 0)
			{
				$sSuggestedWord = OqlException::FindClosestString($sWrongWord, $aSuggestedWords);
		
				if (strlen($sSuggestedWord) > 0)
				{
					$oP->p('<b>'.Dict::Format('UI:RunQuery:Error', $e->GetIssue().' <em>'.$sWrongWord).'</em></b>');
					$sBefore = substr($sExpression, 0, $e->GetColumn());
					$sAfter = substr($sExpression, $e->GetColumn() + strlen($sWrongWord));
					$sFixedExpression = $sBefore.$sSuggestedWord.$sAfter;
					$sFixedExpressionHtml = $sBefore.'<span style="background-color:yellow">'.$sSuggestedWord.'</span>'.$sAfter;
					$oP->p("Suggesting: $sFixedExpressionHtml");
					$oP->add('<button onClick="$(\'textarea[name=expression]\').val(\''.htmlentities(addslashes($sFixedExpression)).'\');">Use this query</button>');
				}
				else
				{
					$oP->p('<b>'.Dict::Format('UI:RunQuery:Error', $e->getHtmlDesc()).'</b>');
				}
			}
			else
			{
				$oP->p('<b>'.Dict::Format('UI:RunQuery:Error', $e->getHtmlDesc()).'</b>');
			}
		}
		else
		{
			$oP->p('<b>'.Dict::Format('UI:RunQuery:Error', $e->getMessage()).'</b>');
		}
	}
}
catch(Exception $e)
{
	$oP->p('<b>'.Dict::Format('UI:RunQuery:Error', $e->getMessage()).'</b>');
}

$oP->output();
?>
