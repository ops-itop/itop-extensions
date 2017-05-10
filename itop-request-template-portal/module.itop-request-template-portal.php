<?php
//
// iTop module definition file
//

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'itop-request-template-portal/1.0.0',
	array(
		// Identification
		//
		'label' => 'Bridge - Request Templates + Modern Portal',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(
			'itop-portal/1.0.0',
			'itop-request-template/2.0.0',
		),
		'mandatory' => false,
		'visible' => false, // To prevent auto-install but shall not be listed in the install wizard
		'auto_select' => 'SetupInfo::ModuleIsSelected("itop-portal") && SetupInfo::ModuleIsSelected("itop-request-template")',

		// Components
		//
		'datamodel' => array(
			//'model.itop-request-template-portal.php'
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
			// Module specific settings go here, if any
		),
	)
);


?>
