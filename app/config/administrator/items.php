<?php

/**
 * Films model config
 */

return array(

	'title' => 'Items',

	'single' => 'item',

	'model' => 'Item',

	 'form_width' => 600,

	/**
	 * The display columns
	 */

	'columns' => array(
		
		'id' => array(
			'title' => 'Order ID',
			'type' => 'text',
		),	

		'pitch' => array(
			'title' => 'Pitch',
			'relationship' => 'pitch',
			'select' => 'pitch',
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
			'title' => 'Pitch',
			'relationship' => 'pitch',
			'select' => 'pitch',
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



    	'title' => array(
			'title' => 'Title',
    		'type' => 'text',
    	),

		'image' => array(
    		'title' => 'Image',
    		'type' => 'file',
    		'location' => public_path() . '/images/',
    		'naming' => 'keep',
    		'length' => 20,
    		'size_limit' => 20,
		),

    	 'position' => array(
			'title' => 'Position',
    		'type' => 'text',
    	),



		'pledge' => array(
			'title' => 'Pledge',
			'relationship' => 'pledge',
			'select' => 'title',
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