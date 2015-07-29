<?php

/**
 * Films model config
 */

return array(

	'title' => 'Why CL sections',

	'single' => 'Why section',

	'model' => 'Whysection',

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

	'position' => array(
			'title' => 'Position',
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


    	'pitch' => array(
    		'type' => 'relationship',
    		'title' => 'Pitch',
    		'name_field' => 'title', //what column or accessor on the other table you want to use to represent this object
    	),

    	    	 'position' => array(
		    'type' => 'enum',
		    'title' => 'Position',
		    'options' => array('1', '2', '3', '4', '5', '6', '7', '8','9','10','11','12','13','14','15','16','17','18','19','20'), //must be an array
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