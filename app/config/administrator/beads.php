<?php

/**
 * Films model config
 */

return array(

	'title' => 'Beads',

	'single' => 'bead',

	'model' => 'Bead',

	'form_width' => 400,

	/**
	 * The display columns
	 */
	'columns' => array(


        'image1' => array(
        'title' => 'Image',
        'output' => '<img src="http://localhost/rock/public/images/beads/(:value)" height="5%" height="50px"/>',
        ),


		'name' => array(
			'title' => 'Name',
			'type' => 'text',
		),	

		'type' => array(
			'title' => 'Type',
			'relationship' => 'type',
			'select' => 'name',
		),

        'diameter' => array(
            'title' => 'Diameter',
            'type' => 'text',
        ),  
		
		'price' => array(
    		'type' => 'number',
    		'title' => 'Price each (pence)',
    		'symbol' => '', //optional, defaults to ''
    		'decimals' => 0, //optional, defaults to 0
    		'thousands_separator' => ',', //optional, defaults to ','
    		'decimal_separator' => '.', //optional, defaults to '.'
		),	

		'shape' => array(
			'title' => 'Shape',
			'relationship' => 'shape',
			'select' => 'name',
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
			'relationship' => 'type',
			'select' => 'name'
		),

        'diameter' => array(
            'title' => 'Diameter',
            'type' => 'text',
        ),

		'shape' => array(
			'title' => 'Shape',
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

		
		  'consistency' => array(
			'title' => 'Colour consistency (1 is very consistent)',
    		'type' => 'enum',
    		'options' => array('1','2','3'), //must be an array
    	),


		'image1' => array(
    		'title' => 'Image',
    		'type' => 'image',
    		'location' => public_path() . '/images/beads/',
    		'naming' => 'keep',
    		'length' => 20,
    		'size_limit' => 20,
		),

		'image2' => array(
    		'title' => 'Image',
    		'type' => 'image',
    		'location' => public_path() . '/images/beads/',
    		'naming' => 'keep',
    		'length' => 20,
    		'size_limit' => 20,
		),

		'image3' => array(
    		'title' => 'Image',
    		'type' => 'image',
    		'location' => public_path() . '/images/beads/',
    		'naming' => 'keep',
    		'length' => 20,
    		'size_limit' => 20,
		),


		'type' => array(
    		'type' => 'relationship',
    		'title' => 'Type',
    		'name_field' => 'name', //what column or accessor on the other table you want to use to represent this object
    	),	


    	'shape' => array(
    		'type' => 'relationship',
    		'title' => 'Shape',
    		'name_field' => 'name', //what column or accessor on the other table you want to use to represent this object
    	),	


    	'colour' => array(
    		'type' => 'relationship',
    		'title' => 'Colour',
    		'name_field' => 'name', //what column or accessor on the other table you want to use to represent this object
    	),	

    	'width' => array(
    		'type' => 'number',
    		'title' => 'Width along string (mm)',
    		'decimals' => 1, //optional, defaults to 0
    		'thousands_separator' => ',', //optional, defaults to ','
    		'decimal_separator' => '.', //optional, defaults to '.'
    		'description' => 'This should set as the space taken up along the string',
		),

		'diameter' => array(
    		'type' => 'number',
    		'title' => 'Diameter (mm)',
    		'decimals' => 1, //optional, defaults to 0
    		'thousands_separator' => ',', //optional, defaults to ','
    		'decimal_separator' => '.', //optional, defaults to '.'
    		'description' => 'This should set as twice the height above the string',
		),

    	'variation' => array(
    		'type' => 'number',
    		'title' => 'Max variation (mm)',
    		'decimals' => 1, //optional, defaults to 0
    		'thousands_separator' => ',', //optional, defaults to ','
    		'decimal_separator' => '.', //optional, defaults to '.'
    		'description' => 'This should set to the max variation along the string (width)',
		),


		'pendantWidth' => array(
    		'type' => 'number',
    		'title' => 'Total width of pendant (mm)',
    		'decimals' => 1, //optional, defaults to 0
    		'thousands_separator' => ',', //optional, defaults to ','
    		'decimal_separator' => '.', //optional, defaults to '.'
    		'description' => 'This should be set to 0 for round and other symetrical beads',
		),

		 'pendantHeight' => array(
    		'type' => 'number',
    		'title' => 'Total height of pendant to string (mm)',
    		'decimals' => 1, //optional, defaults to 0
    		'thousands_separator' => ',', //optional, defaults to ','
    		'decimal_separator' => '.', //optional, defaults to '.'
    		'description' => 'This should be set to 0 for round and other symetrical beads',
		),





	),

);