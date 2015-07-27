<?php

/**
 * Directors model config
 */

return array(

	'title' => 'Users',

	'single' => 'user',

	'model' => 'User',

	/**
	 * The display columns
	 */

	'columns' => array(
		'id',
		'lastname', 
		'firstname', 
		'created_at',
	),

	/**
	 * The filter set
	 */
	'filters' => array(
		'id',
		'firstname',
		'lastname',
		'address' => array(
    	'type' => 'relationship',
		'title' => 'Postcode',
		'name_field' => 'postal_code',
    	'autocomplete' => true,
    	 'num_options' => 10, //default is 10
    	),

	),

	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'firstname' => array(
			'title' => 'First Name',
			'type' => 'text',
		),
		'lastname' => array(
			'title' => 'Last Name',
			'type' => 'text',
		),

		 'username' => array(
			'title' => 'Username',
			'type' => 'text',
		),

		'email' => array(
			'title' => 'Email',
			'type' => 'text',
		),

				  'created_at' => array(
			'title' => 'Created',
			'editable' => false,
		), 

    	'updated_at' => array(
			'title' => 'Updated',
			'editable' => false,
		), 
	),

);