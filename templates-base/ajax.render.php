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
 * Handles various ajax requests
 *
 * @copyright   Copyright (C) 2010-2016 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

require_once('../../approot.inc.php');
require_once(APPROOT.'/application/application.inc.php');
require_once(APPROOT.'/application/webpage.class.inc.php');
require_once(APPROOT.'/application/ajaxwebpage.class.inc.php');
require_once(APPROOT.'/application/wizardhelper.class.inc.php');
require_once(APPROOT.'/application/ui.linkswidget.class.inc.php');
require_once(APPROOT.'/application/ui.extkeywidget.class.inc.php');
require_once(APPROOT.'/application/datatable.class.inc.php');

try
{
	require_once(APPROOT.'/application/startup.inc.php');

	require_once(APPROOT.'/application/loginwebpage.class.inc.php');
	LoginWebPage::DoLoginEx(null /* any portal */, false);
	
	$oPage = new ajax_page("");
	$oPage->no_cache();

	
	$operation = utils::ReadParam('operation', '');

	switch($operation)
	{
		case 'fake_form_update':
			$oPage->SetContentType('application/json');
			$iTemplate = utils::ReadParam('template_id', null);
			$aRequestedFields = utils::ReadParam('requested_fields', array());
			$sRequestedFieldsFormPath = utils::ReadParam('form_path', '');
			$aCurrentValues = utils::ReadParam('current_values', array(), false, 'raw_data');

			$oTemplate = MetaModel::GetObject('Template', $iTemplate);

			$aTemplateData = $oTemplate->ToArray();
			$oForm = new \Combodo\iTop\Form\Form('faker');
			$oTemplate->PopulateUserDataForm($oForm, $aTemplateData['fields'], $aCurrentValues);
			$oForm->Finalize();

			$oSubForm = $oForm->FindSubForm($sRequestedFieldsFormPath);
			$oRenderer = new \Combodo\iTop\Renderer\Console\ConsoleFormRenderer($oSubForm);
			$aRenderRes = $oRenderer->Render($aRequestedFields);

			$aResult = array();
			$aResult['form']['updated_fields'] = $aRenderRes;
			$oPage->add(json_encode($aResult));
			break;

		default:
		$oPage->p("Invalid query.");
	}

	$oPage->output();
}
catch (Exception $e)
{
	// note: transform to cope with XSS attacks
	echo htmlentities($e->GetMessage(), ENT_QUOTES, 'utf-8');
	IssueLog::Error($e->getMessage()."\nDebug trace:\n".$e->getTraceAsString());
}
