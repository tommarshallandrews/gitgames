<?php

/**
 * Films model config
 */

return array(

	'title' => 'Orders',

	'single' => 'order',

	'model' => 'Order',

	 'form_width' => 600,

	/**
	 * The display columns
	 */

	'columns' => array(
		
		'id' => array(
			'title' => 'Order ID',
			'type' => 'text',
		),	

		'updated_at' => array(
			'title' => 'Order Updated',
			'type' => 'text',
		),

		'status' => array(
			'title' => 'Status',
			'type' => 'text',
		),	

		'lastname' => array(
			'title' => 'Surname',
			'relationship' => 'user',
			'select' => 'lastname',
		),

		'firstname' => array(
			'title' => 'First name',
			'relationship' => 'user',
			'select' => 'firstname',
		),

		'email' => array(
			'title' => 'Email',
			'relationship' => 'user',
			'select' => 'email',
		),

		'username' => array(
			'title' => 'Username',
			'relationship' => 'user',
			'select' => 'username',
		),



		
	),



	/**
	 * The filter set
	 */
	'filters' => array(
		'id',
		"status",

		'updated_at' => array(
			'title' => 'Order Updated',
			'type' => 'date',
			'date_format' => 'yy-mm-dd',
		),



		'user' => array(
		    'type' => 'relationship',
		    'title' => 'Email (orderer)',
		    'name_field' => 'email',
		    'autocomplete' => true,
		    'num_options' => 10, //default is 10

		),

		'deliveryAddressF' => array(
    	'type' => 'relationship',
		'title' => 'Delivery Postcode',
		'name_field' => 'postal_code',
    	'autocomplete' => true,
    	 'num_options' => 10, //default is 10
    	),


	),

	/**
	 * The editable fields
	 */
	'edit_fields' => array(

		'id' => array(
			'title' => 'Order ID',
    		'type' => 'text',
    	),

    	'status' => array(
			'title' => 'Status',
    		'type' => 'enum',
    		'options' => array('open','paid','complete','cancelled','refunded'), //must be an array
    	),


    	'billingAddressF' => array(
    	'type' => 'relationship',
		'title' => 'Billing Address',
    	'name_field' => 'postal_code',

    	),


    	'deliveryAddressF' => array(
    	'type' => 'relationship',
		'title' => 'Delivery Address',
    	'name_field' => 'postal_code',
    	),

    	'make' => array(
    	'type' => 'relationship',
		'title' => 'Makes',
    	'name_field' => 'name',
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