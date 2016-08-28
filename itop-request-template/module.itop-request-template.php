<?php
//
// iTop module definition file
//

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'itop-request-template/1.0.1',
	array(
		// Identification
		//
		'label' => 'Request Templates',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(
			'itop-service-mgmt/2.0.0||itop-service-mgmt-provider/2.0.0',	
			'itop-request-mgmt/2.0.0||itop-request-mgmt-itil/2.0.0',	
			'itop-profiles-itil/1.0.0',
		),
		'mandatory' => false,
		'visible' => true,

		// Components
		//
		'datamodel' => array(
			'model.itop-request-template.php'
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
