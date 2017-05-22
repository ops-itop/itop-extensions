<?php
//
// iTop module definition file
//

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'itop-request-template-modify/2.0.0',
	array(
		// Identification
		//
		'label' => 'Modify of Request Templates',
		'category' => 'business,portal',

		// Setup
		//
		'dependencies' => array(
			'itop-request-template/2.0.0',
			'itop-config-mgmt/2.3.0',
			'attribute-custom/1.0.0',
			'itop-portal-base/1.0.0',
			'itop-tickets/2.2.0',
			'api-client/1.0.0'
		),
		'mandatory' => false,
		'visible' => true,

		// Components
		//
		'datamodel' => array(
			'main.itop-request-template-modify.php',
			'model.itop-request-template-modify.php',
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
			// 以下全部使用person和team的id
			'special' => array('上线APP'=>2),
			'plan' => array(2,3,5),
			'team_id' => 4,
			// 用friendlyname做唯一性校验的类
			'checkuniq_with_friendlyname' => array("RDS", "MySQL")			
		),
	)
);


?>
