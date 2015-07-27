<?php

/**
 * Films model config
 */

return array(

	'title' => 'Types',

	'single' => 'type',

	'model' => 'Type',

	'form_width' => 400,

	/**
	 * The display columns
	 */
	'columns' => array(

		
		'name' => array(
			'title' => 'Name',
			'type' => 'text',
			'order' => 'Name',
		),	

	),

	/**
	 * The filter set
	 */
	'filters' => array(
		'id',

		'name' => array(
			'title' => 'Name',
			'type' => 'text',
		),	
		

	),

	/**
	 * The editable fields
	 */
	'edit_fields' => array(

		'name' => array(
			'title' => 'Name',
			'type' => 'text',
		),	

		'description' => array(
    		'type' => 'textarea',
    		'title' => 'Description',
   			'limit' => 1000, //optional, defaults to no limit
    		'height' => 130, //optional, defaults to 100
		),	


		'month' => array(
    		'type' => 'relationship',
    		'title' => 'Month',
    		'name_field' => 'name', //what column or accessor on the other table you want to use to represent this object
    	),	

    	'zodiac' => array(
    		'type' => 'relationship',
    		'title' => 'Zodiac sign',
    		'name_field' => 'name', //what column or accessor on the other table you want to use to represent this object
    	),	


    	'hardness' => array(
			'title' => 'Hardness',
			'type' => 'text',
		),	



	),

);