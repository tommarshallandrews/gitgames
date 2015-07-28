<?php

/**
 * Films model config
 */

return array(

	'title' => 'Pitch Team',

	'single' => 'pitcher',

	'model' => 'Pitcher',

	 'form_width' => 600,

	/**
	 * The display columns
	 */

	'columns' => array(
		
		'pitch' => array(
			'title' => 'Pitch',
			'relationship' => 'pitch',
			'select' => 'title',
		),


		'name' => array(
			'title' => 'Name',
			'type' => 'text',
		),

		
	),



	/**
	 * The filter set
	 */
	'filters' => array(



		'pitch' => array(
    		'type' => 'relationship',
    		'title' => 'Pitch',
    		'name_field' => 'title', //what column or accessor on the other table you want to use to represent this object
    	),

		'name' => array(
			'title' => 'Name',
		),


		'updated_at' => array(
			'title' => 'Order Updated',
			'type' => 'date',
			'date_format' => 'yy-mm-dd',
		),






	),

	/**
	 * The editable fields
	 */
	'edit_fields' => array(

		'pitch' => array(
    		'type' => 'relationship',
    		'title' => 'Pitch',
    		'name_field' => 'title', //what column or accessor on the other table you want to use to represent this object
    	),


    	 'position' => array(
		    'type' => 'enum',
		    'title' => 'Position',
		    'options' => array('1', '2', '3', '4', '5', '6', '7', '8'), //must be an array
		),

    	'name' => array(
			'title' => 'Name',
    		'type' => 'text',
    	),

    	 'job' => array(
			'title' => 'Title',
    		'type' => 'text',
    	),

    	'phone' => array(
			'title' => 'Phone',
    		'type' => 'text',
    	),


    	'email' => array(
			'title' => 'Email',
    		'type' => 'text',
    	),


    	'text' => array(
			'title' => 'Text',
    		'type' => 'textarea',
    		'height' => 130, //optional, defaults to 100
    	),


		'image' => array(
    		'title' => 'Image',
    		'type' => 'image',
    		'location' => public_path() . '/uploads/',
    		'naming' => 'keep',
    		'length' => 20,
    		'size_limit' => 200,
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