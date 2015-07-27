<?php

/**
 * Films model config
 */

return array(

	'title' => 'Pitches',

	'single' => 'pitch',

	'model' => 'Pitch',

	 'form_width' => 600,

	/**
	 * The display columns
	 */

	'columns' => array(
		
		'id' => array(
			'title' => 'ID',
			'type' => 'text',
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



		'id',


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



    	'title' => array(
			'title' => 'Title',
    		'type' => 'text',
    	),

		'image' => array(
    		'title' => 'Logo',
    		'type' => 'image',
    		'location' => public_path() . '/uploads/',
    		'naming' => 'keep',
    		'length' => 20,
    		'size_limit' => 20,
		),

		'pledges_image' => array(
    		'title' => 'Pledges Image',
    		'type' => 'image',
    		'location' => public_path() . '/uploads/',
    		'naming' => 'keep',
    		'length' => 20,
    		'size_limit' => 20,
		),

		'why_image' => array(
    		'title' => 'Why Image',
    		'type' => 'image',
    		'location' => public_path() . '/uploads/',
    		'naming' => 'keep',
    		'length' => 20,
    		'size_limit' => 20,
		),

		'team_image' => array(
    		'title' => 'Team Image',
    		'type' => 'image',
    		'location' => public_path() . '/uploads/',
    		'naming' => 'keep',
    		'length' => 20,
    		'size_limit' => 20,
		),

		'document_image' => array(
    		'document_title' => 'Document Image',
    		'type' => 'image',
    		'location' => public_path() . '/uploads/',
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