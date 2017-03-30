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
 * 服务器账号管理
 * @annhe.net
 */

require_once('../../approot.inc.php');
require_once(APPROOT.'/application/application.inc.php');
require_once(APPROOT.'/application/itopwebpage.class.inc.php');

require_once(APPROOT.'/application/startup.inc.php');
require_once(APPROOT.'/application/loginwebpage.class.inc.php');
LoginWebPage::DoLogin(false); // false，不需要管理员权限

$oAppContext = new ApplicationContext();
$oP = new iTopWebPage(Dict::S('UI:ServerAccount:Title'));
$oP->set_base(utils::GetAbsoluteUrlAppRoot().'pages/');
$oP->SetBreadCrumbEntry('ui-tool-runquery', Dict::S('Menu:ServerAccountMenu'), Dict::S('Menu:ServerAccountMenu+'), '', utils::GetAbsoluteUrlAppRoot().'images/wrench.png');


$sValues = utils::ReadParam('expression', '', false, 'raw_data');
$current_user = UserRights::GetUserId();
$current_person = UserRights::GetContactId();
$lnkExpression = "SELECT lnkUserToServer WHERE user_id=$current_user";
$ServerExpression = "SELECT Server AS s JOIN lnkContactToFunctionalCI AS l ON l.functionalci_id=s.id WHERE l.contact_id=$current_person";

$helpLink = MetaModel::GetModuleSetting('custom-pages', 'helplink', "itop-help");

$oP->add("<h1>" . Dict::Format('UI:ServerAccount:Title') . "</h1><hr/>");
$oP->add("<p><a href=\"$helpLink\" _target=\"_blank\">" . Dict::Format('UI:ServerAccount:Help') . "</a></p>");

function runOql($sExpression, $title, &$oP)
{
	$oFilter = null;
	$aArgs = array();
	$sSyntaxError = null;
	
	$oP->add("<br/><h1>$title</h1><hr/>\n");

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
	
	if ($oFilter)
	{
		
		$oResultBlock = new DisplayBlock($oFilter, 'list', false);
		$oResultBlock->Display($oP, $title);

		// Breadcrumb
		//$iCount = $oResultBlock->GetDisplayedCount();
		$sPageId = "ui-search-serveraccount";
		$sLabel = Dict::Format('UI:ServerAccount:Title');
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
		$sUrl = utils::GetAbsoluteUrlAppRoot().'env-production/custom-pages/server_accounts.php?'.implode('&', $aArgs);
		$oP->SetBreadCrumbEntry($sPageId, $sLabel, '', $sUrl, '../images/breadcrumb-search.png');

		//$oP->p('');
		//$oP->EndCollapsibleSection();
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

try
{
	runOql($lnkExpression, Dict::Format('UI:ServerAccount:ServerYouCanLogin'), $oP);
	runOql($ServerExpression, Dict::Format('UI:ServerAccount:ServerYouManaged'), $oP);
}
catch(Exception $e)
{
	$oP->p('<b>'.Dict::Format('UI:RunQuery:Error', $e->getMessage()).'</b>');
}

$oP->output();
?>
