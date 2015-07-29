<?php

/**
 * Films model config
 */

return array(

	'title' => 'Pledges',

	'single' => 'pledge',

	'model' => 'Promise',

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

			'position' => array(
			'title' => 'Position',
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

		'image' => array(
    		'title' => 'Image',
    		'type' => 'image',
    		'location' => public_path() . '/uploads/',
    		'naming' => 'keep',
    		'length' => 20,
    		'size_limit' => 200,
		),


    	 'position' => array(
		    'type' => 'enum',
		    'title' => 'Position',
		    'options' => array('1', '2', '3', '4', '5', '6', '7', '8','9','10','11','12','13','14','15','16','17','18','19','20'), //must be an array
		),






    	   'text1' => array(
			'title' => 'Pledge 1',
    		'type' => 'text',
    		'description' => '---------- Add text and file below ------------',
    	),

    	   'file1' => array(
		    'type' => 'file',
		    'location' => public_path() . '/uploads/',
		    'naming' => 'keep',
		    'length' => 20,
		    'size_limit' => 200,
		    'mimes' => 'pdf,psd,doc',
		),



    	   'text2' => array(
			'title' => 'Pledge 2',
    		'type' => 'text',
    	),

    	   'file2' => array(
		    'type' => 'file',
		    'location' => public_path() . '/uploads/',
		    'naming' => 'keep',
		    'length' => 20,
		    'size_limit' => 200,
		    'mimes' => 'pdf,psd,doc',
		),




    	    'text3' => array(
			'title' => 'Pledge 3',
    		'type' => 'text',
    	),

    	   'file3' => array(
		    'type' => 'file',
		    'location' => public_path() . '/uploads/',
		    'naming' => 'keep',
		    'length' => 20,
		    'size_limit' => 200,
		    'mimes' => 'pdf,psd,doc',
		),


    	       	   'text4' => array(
			'title' => 'Pledge 4',
    		'type' => 'text',
    	),

    	   'file4' => array(
		    'type' => 'file',
		    'location' => public_path() . '/uploads/',
		    'naming' => 'keep',
		    'length' => 20,
		    'size_limit' => 200,
		    'mimes' => 'pdf,psd,doc',
		),



    	   'text5' => array(
			'title' => 'Pledge 5',
    		'type' => 'text',
    	),

    	   'file5' => array(
		    'type' => 'file',
		    'location' => public_path() . '/uploads/',
		    'naming' => 'keep',
		    'length' => 20,
		    'size_limit' => 200,
		    'mimes' => 'pdf,psd,doc',
		),



    	    'text6' => array(
			'title' => 'Pledge 6',
    		'type' => 'text',
    	),

    	   'file6' => array(
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