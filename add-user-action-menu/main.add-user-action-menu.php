<?php
// Copyright (C) 2013 Combodo SARL
//
//   This file is a sample extension for iTop
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
 * Sample extension to show how adding menu items in iTop
 * This extension does nothing really useful but shows how to use the three possible
 * types of menu items:
 * 
 * - An URL to any web page
 * - A Javascript function call
 * - A separator (horizontal line in the menu)
 */
class AddUserActionMenuExtension implements iPopupMenuExtension
{
	/**
	 * Get the list of items to be added to a menu.
	 *
	 * This method is called by the framework for each menu.
	 * The items will be inserted in the menu in the order of the returned array.
	 * @param int $iMenuId The identifier of the type of menu, as listed by the constants MENU_xxx
	 * @param mixed $param Depends on $iMenuId, see the constants defined above
	 * @return object[] An array of ApplicationPopupMenuItem or an empty array if no action is to be added to the menu
	 */
	public static function EnumItems($iMenuId, $param)
	{		
		if($iMenuId == self::MENU_USER_ACTIONS)
		{
			$sAppRootUrl = trim(MetaModel::GetConfig()->Get('app_root_url'));
			$sPersonId = UserRights::GetContactId();
			$sUID = 'EditCurrentPerson';
			$sLabel = '编辑个人资料';
			$sURL = $sAppRootUrl . 'pages/UI.php?operation=modify&class=Person&id=' . $sPersonId;
			$sTarget = '';
			$oMenuItem = new UrlPopupMenuItem($sUID, $sLabel, $sURL, $sTarget);
			return array($oMenuItem);
		}
		return array();
	}
}

