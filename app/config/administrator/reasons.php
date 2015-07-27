<?php

/**
 * Films model config
 */

return array(

	'title' => 'Why CL',

	'single' => 'reason',

	'model' => 'Reason',

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

		'title' => array(
			'title' => 'Title',
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

    	'title' => array(
			'title' => 'Title',
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
    		'location' => public_path() . '/images/',
    		'naming' => 'keep',
    		'length' => 20,
    		'size_limit' => 20,
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