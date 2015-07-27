<?php

/**
 * Films model config
 */

return array(

	'title' => 'Findings',

	'single' => 'finding',

	'model' => 'Finding',

	'form_width' => 400,

	/**
	 * The display columns
	 */
	'columns' => array(
		
		'name' => array(
			'title' => 'Name',
			'type' => 'text',
		),	

		'type' => array(
			'title' => 'Type',
			'relationship' => 'type',
			'select' => 'name'
		),
		
		'price' => array(
    		'type' => 'number',
    		'title' => 'Price each (pence)',
    		'symbol' => '', //optional, defaults to ''
    		'decimals' => 0, //optional, defaults to 0
    		'thousands_separator' => ',', //optional, defaults to ','
    		'decimal_separator' => '.', //optional, defaults to '.'
		),	

		'mechanism' => array(
			'title' => 'Mechanism',
			'relationship' => 'mechanism',
			'select' => 'name'
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
		
		'type' => array(
			'title' => 'Type',
			'type' => 'relationship',
			'name_field' => 'name',
		),

		'mechanism' => array(
			'title' => 'Mechanism',
			'type' => 'relationship',
			'name_field' => 'name',
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


		'price' => array(
    		'type' => 'number',
    		'title' => 'Price each (pence)',
    		'symbol' => '', //optional, defaults to ''
    		'decimals' => 0, //optional, defaults to 0
    		'thousands_separator' => ',', //optional, defaults to ','
    		'decimal_separator' => '.', //optional, defaults to '.'
		),		


		'image' => array(
    		'title' => 'Image',
    		'type' => 'image',
    		'location' => public_path() . '/images/original/',
    		'naming' => 'random',
    		'length' => 20,
    		  'sizes' => array(
        		array(20, 20, 'crop', public_path() . '/images/20/', 100),
        		array(40, 40, 'landscape', public_path() . '/images/40/', 100),
        		array(60, 60, 'fit', public_path() . '/images/60/', 100)
    						),
    		'size_limit' => 2,
		),

		'imageRight' => array(
    		'title' => 'Image',
    		'type' => 'image',
    		'location' => public_path() . '/images/original/',
    		'naming' => 'random',
    		'length' => 20,
    		  'sizes' => array(
        		array(20, 20, 'crop', public_path() . '/images/20/', 100),
        		array(40, 40, 'landscape', public_path() . '/images/40/', 100),
        		array(60, 60, 'fit', public_path() . '/images/60/', 100)
    						),
    		'size_limit' => 2,
		),

		'imageLeft' => array(
    		'title' => 'Image',
    		'type' => 'image',
    		'location' => public_path() . '/images/original/',
    		'naming' => 'random',
    		'length' => 20,
    		  'sizes' => array(
        		array(20, 20, 'crop', public_path() . '/images/20/', 100),
        		array(40, 40, 'landscape', public_path() . '/images/40/', 100),
        		array(60, 60, 'fit', public_path() . '/images/60/', 100)
    						),
    		'size_limit' => 2,
		),


		'type' => array(
    		'type' => 'relationship',
    		'title' => 'Type',
    		'name_field' => 'name', //what column or accessor on the other table you want to use to represent this object
    	),	



		'lengthTotal' => array(
    		'type' => 'number',
    		'title' => 'Diameter (mm)',
    		'symbol' => '', //optional, defaults to ''
    		'decimals' => 1, //optional, defaults to 0
    		'thousands_separator' => ',', //optional, defaults to ','
    		'decimal_separator' => '.', //optional, defaults to '.'
		),

		'lengthRight' => array(
    		'type' => 'number',
    		'title' => 'Diameter (mm)',
    		'symbol' => '', //optional, defaults to ''
    		'decimals' => 1, //optional, defaults to 0
    		'thousands_separator' => ',', //optional, defaults to ','
    		'decimal_separator' => '.', //optional, defaults to '.'
		),

		'lengthLeft' => array(
    		'type' => 'number',
    		'title' => 'Diameter (mm)',
    		'symbol' => '', //optional, defaults to ''
    		'decimals' => 1, //optional, defaults to 0
    		'thousands_separator' => ',', //optional, defaults to ','
    		'decimal_separator' => '.', //optional, defaults to '.'
		), 

    	'variation' => array(
    		'type' => 'number',
    		'title' => 'Variation (mm)',
    		'symbol' => '', //optional, defaults to ''
    		'decimals' => 1, //optional, defaults to 0
    		'thousands_separator' => ',', //optional, defaults to ','
    		'decimal_separator' => '.', //optional, defaults to '.'
		),





	),

);