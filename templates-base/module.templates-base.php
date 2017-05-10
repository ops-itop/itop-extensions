<?php
// Copyright (C) 2010 Combodo SARL
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

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'templates-base/3.0.4', array(
		// Identification
		//
		'label' => 'Templates foundation',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(
			
		),
		'mandatory' => true,
		'visible' => false,
		'installer' => 'TemplatesBaseInstaller',

		// Components
		//
		'datamodel' => array(
			'model.templates-base.php'
		),
		'webservice' => array(
			
		),
		'data.struct' => array(
			// add your 'structure' definition XML files here,
		),
		'data.sample' => array(
			// add your sample data XML files here,
		),
		
		// Documentation
		//
		'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
		'doc.more_information' => '', // hyperlink to more information, if any 

		// Default settings
		//
		'settings' => array(
			// Select where, in the main UI, the extra data should be displayed:
			//     tab (dedicated tab)
			//     properties (right after the properties, but before the log if any)
			//     none (extra data accessed only by programs)
			'view_extra_data' => 'relations',
		),
	)
);

if (!class_exists('TemplatesBaseInstaller'))
{
	/**
	 * Update all TemplateField 'codes' to remove non A-Za-z0-9 characters
	 */
	class TemplatesBaseInstaller extends ModuleInstallerAPI
	{
		/**
		 * Do nothing !!
		 * @param Config $oConfiguration
		 */
		public static function BeforeWritingConfig(Config $oConfiguration)
		{
			return $oConfiguration;
		}
	
		/**
		 * Handler called before creating or upgrading the database schema: do nothing
		 * @param $oConfiguration Config The new configuration of the application
		 * @param $sPreviousVersion string Previous version number of the module (empty string in case of first install)
		 * @param $sCurrentVersion string Current version number of the module
		 */
		public static function BeforeDatabaseCreation(Config $oConfiguration, $sPreviousVersion, $sCurrentVersion)
		{
		}
		
		/**
		 * Handler called after the creation/update of the database schema: update all TemplateField 'codes' to remove non A-Za-z characters
		 * @param $oConfiguration Config The new configuration of the application
		 * @param $sPreviousVersion string Previous version number of the module (empty string in case of first install)
		 * @param $sCurrentVersion string Current version number of the module
		 */
		public static function AfterDatabaseCreation(Config $oConfiguration, $sPreviousVersion, $sCurrentVersion)
		{
			$oAttDef = MetaModel::GetAttributeDef('TemplateField', 'code');
			$sPattern = $oAttDef->GetValidationPattern();
			SetupPage::log_info("Checking for TemplateFields with values in the 'code' field not following the consistency rule: '$sPattern'.");
			$oSearch = DBObjectSearch::FromOQL("SELECT TemplateField WHERE (code REGEXP :pattern) = 0");
			$oSet = new DBObjectSet($oSearch, array(), array('pattern' => $sPattern));
			$iUpdated = 0;
			while ($oTemplateField = $oSet->Fetch())
			{
				$oTemplateField->Set('code', static::CleanCode($oTemplateField->Get('code')));
				$oTemplateField->DBUpdate();
				$iUpdated++;
			}
	
			if ($iUpdated > 0)
			{
				SetupPage::log_info("TemplateFields: $iUpdated TemplateField(s) have been modified.");
			}
			else
			{
				SetupPage::log_info("No TemplateField modified.");
			}
		}
		
		/**
		 * Clean a text string by removing all characters not in A-Za-z0-9
		 * @param string $sCode
		 * @return string
		 */
		protected static function CleanCode($sCode)
		{
			// Try to "downgrade" the characters to something meaningful
			// Array of replacements: $sReplace => $aSearches
			$aToReplace = array(
					'a' => array('à', 'â', 'ä'),
					'e' => array('é', 'ê', 'è', 'ë'),
					'i' => array('ï', 'î'),
					'o' => array('ô', 'ö'),
					'u' => array('ù', 'ü'),
					'o' => array('°'),
			);
			
			foreach($aToReplace as $sReplace => $aSearch)
			{
				$sCode = str_replace($aSearch, $sReplace, $sCode);
			}
			
			// Replace all other "weird" characters by an underscore
			$sCleanifyPattern = '/[^A-Za-z0-9]/';
			$sCode = preg_replace($sCleanifyPattern, '_', $sCode);
			
			return $sCode;
		}
	
		/**
		 * Handler called at the end of the setup of the database (profiles and admin accounts created), but before the data load
		 * @param $oConfiguration Config The new configuration of the application
		 * @param $sPreviousVersion string Previous version number of the module (empty string in case of first install)
		 * @param $sCurrentVersion string Current version number of the module
		 */
		public static function AfterDatabaseSetup(Config $oConfiguration, $sPreviousVersion, $sCurrentVersion)
		{	
		}
	}
}
