<?php
//
// iTop module definition file
//

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'custom-pages/1.0.0',
	array(
		// Identification
		//
		'label' => 'Custom Pages',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(
			'itop-request-mgmt/2.0.0||itop-request-mgmt-itil/2.0.0',
			'itop-config-mgmt/2.2.0',
			'itop-request-template/1.0.1',
			'templates-base/2.1.4',
			'api-client/1.0.0'
		),
		'mandatory' => false,
		'visible' => true,

		// Components
		//
		'datamodel' => array(
			'model.custom-pages.php',
			'main.custom-pages.php',
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
			'helplink' => 'http://localhost',
			'ip_regexp' => '^\\\s*(([0-9]{1,3}\\.){3}[0-9]{1,3}[\\\n,\\\s]*)*\\\s*([0-9]{1,3}\\.){3}[0-9]{1,3}[\\\n,\\\s]*$',
			'ticket_title' => '服务器登录权限申请-Server IDs: ',
			'service_id' => '1',
			'user_expiration_day' => 3,
			'ak' => 'reset#user#pwd#default*ak'
		),
	)
);


?>
