<?php

/**
 * Films model config
 */

return array(

	'title' => 'Pitch Documents',

	'single' => 'document',

	'model' => 'Document',

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


		'title' => array(
			'title' => 'Title',
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
			'title' => 'Pledge Title',
		),

		'updated_at' => array(
			'title' => 'Updated',
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

    	    	 'position' => array(
		    'type' => 'enum',
		    'title' => 'Position',
		    'options' => array('1', '2', '3', '4', '5', '6', '7', '8'), //must be an array
		),


    	   'file' => array(
		    'type' => 'file',
		    'location' => public_path() . '/uploads/',
		    'naming' => 'keep',
		    'length' => 20,
		    'size_limit' => 200,
		    'mimes' => 'pdf,psd,doc',
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