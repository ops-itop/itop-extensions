<?php
//
// iTop module definition file
//

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'kubernetes/1.0.0',
	array(
		// Identification
		//
		'label' => 'Kubernetes',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(
			'itop-config-mgmt/2.2.0',
			'le-config-mgmt/1.0.0'
		),
		'mandatory' => false,
		'visible' => true,

		// Components
		//
		'datamodel' => array(
			'model.kubernetes.php',
			'main.kubernetes.php'
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
			'cron_updatecontacts_interval' => 180,
			'reserve' => array('default-http-backend'),
			'kubernetes_dashboard_url' => 'http://localhost/',
			'iframe_height' => ' 600px',
			'ingress_doc_url' => 'http://localhost/',
			'confirm-theme' => 'modern',
			'confirm-icon' => '',
			'confirm-widt' => '30%',
			'ace_editor_theme' => 'xcode',
			'ace_editor_minHeight' => '300px',
		),
	)
);


?>
