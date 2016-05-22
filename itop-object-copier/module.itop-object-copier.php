<?php
//
// iTop module definition file
//

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'itop-object-copier/1.1.3',
	array(
		// Identification
		//
		'label' => 'Object copier',
		'category' => 'tooling',

		// Setup
		//
		'dependencies' => array(
			
		),
		'mandatory' => false,
		'visible' => true,

		// Components
		//
		'datamodel' => array(
			'main.itop-object-copier.php'
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
			'rules' => array(
				array(
					'source_scope' => 'SELECT Location',
					'allowed_profiles' => 'Administrator,Configuration Manager',
					'menu_label' => 'Clone...', // Label or dictionary entry
					'menu_label/FR FR' => 'Cloner...', // Label
					'form_label' => 'Cloning %1$s', // Label or dictionary entry
					'form_label/FR FR' => 'Clonage de %1$s', // Label
					'report_label' => 'Cloned from %1$s', // Label or dictionary entry
					'report_label/FR FR' => 'Cloné depuis %1$s', // Label
					'dest_class' => 'Location', // Class of the new object
					'preset' => array( // Series of actions to preset the object in the creation form
						'clone_scalars(*)',
						'reset(name)',
					),
					'retrofit' => array( // Series of actions to retrofit some information from the created object to the source object
					),
				),
				array(
					'source_scope' => "SELECT UserRequest WHERE status NOT IN ('resolved','closed')",
					'allowed_profiles' => 'Support Agent,Administrator',
					'menu_label' => 'Create a child request...', // Label or dictionary entry
					'menu_label/FR FR' => 'Créer une demande fille...', // Label
					'form_label' => 'Create a child request from %1$s', // Label or dictionary entry
					'form_label/FR FR' => 'Créer une demande fille depuis %1$s', // Label
					'report_label' => 'Created from %1$s', // Label or dictionary entry
					'report_label/FR FR' => 'Créée depuis %1$s', // Label
					'dest_class' => 'UserRequest', // Class of the new object
					'preset' => array ( // Series of actions to preset the object in the creation form
						'clone(caller_id,org_id,contacts_list,functionalcis_list)',
						'copy(id,parent_request_id)',
					),
					'retrofit' => array( // Series of actions to retrofit some information from the created object to the source object
					),
				),
				array(
					'source_scope' => 'SELECT Person',
					'allowed_profiles' => 'Support Agent,Administrator',
					'menu_label' => 'Create a user request...',
					'menu_label/FR FR' => 'Créer une demande utilisateur...',
					'form_label' => 'Create a user request from %1$s',
					'form_label/FR FR' => 'Créer une demande utilisateur pour %1$s',
					'report_label' => 'Created from %1$s',
					'report_label/FR FR' => 'Créée depuis %1$s',
					'dest_class' => 'UserRequest',
					'preset' => array(
						'copy(org_id,org_id)',
						'copy(id,caller_id)',
					),
					'retrofit' => array( // Series of actions to retrofit some information from the created object to the source object
					),
				),
				array(
					'source_scope' => 'SELECT FunctionalCI',
					'allowed_profiles' => 'Support Agent,Administrator',
					'menu_label' => 'Create a user request...',
					'menu_label/FR FR' => 'Créer une demande utilisateur...',
					'form_label' => 'Create a user request from  %1$s',
					'form_label/FR FR' => 'Créer une demande utilisateur pour %1$s',
					'report_label' => 'Created from %1$s',
					'report_label/FR FR' => 'Créée depuis %1$s',
					'dest_class' => 'UserRequest',
					'preset' => array(
						'copy(org_id,org_id)',
						'add_to_list(id,functionalcis_list,impact,Impacted CI)',
					),
					'retrofit' => array( // Series of actions to retrofit some information from the created object to the source object
					),
				),
				array(
					'source_scope' => 'SELECT FunctionalCI',
					'allowed_profiles' => 'Administrator,Configuration Manager',
					'dest_class' => '', // Same class as the source object
					'preset' => array( // Series of actions to preset the object in the creation form
						'clone_scalars(*)',
						'reset(name)',
					),
					'retrofit' => array( // Series of actions to retrofit some information from the created object to the source object
					),
				),
				array(
					'source_scope' => 'SELECT IPAddress',
					'allowed_profiles' => 'Administrator,Configuration Manager',
					'dest_class' => '', // Same class as the source object
					'preset' => array( // Series of actions to preset the object in the creation form
						'clone_scalars(*)',
						'reset(name)',
					),
					'retrofit' => array( // Series of actions to retrofit some information from the created object to the source object
					),
				),
			)
		),
	)
);


?>
