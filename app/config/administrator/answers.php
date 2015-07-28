<?php

/**
 * Films model config
 */

return array(

	'title' => 'Q&A',

	'single' => 'answer',

	'model' => 'Answer',

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
			'title' => 'Question',
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
			'title' => 'Question',
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

    	'position' => array(
		    'type' => 'enum',
		    'title' => 'Position',
		    'options' => array('1', '2', '3', '4', '5', '6', '7', '8'), //must be an array
		),

    	'title' => array(
			'title' => 'Question',
    		'type' => 'text',
    	),

    	'text' => array(
			'title' => 'Answer',
    		 'type' => 'textarea',
    		'height' => 130, //optional, defaults to 100
    	),


    	'file' => array(
    		'title' => 'File 1',
		    'type' => 'file',
		    'location' => public_path() . '/uploads/',
		    'naming' => 'keep',
		    'length' => 20,
		    'size_limit' => 200,
		    'mimes' => 'pdf,psd,doc,docx,xls,xlsx,mov,mp4',
		),

		 'filetitle' => array(
			'title' => 'File 1 Title',
    		'type' => 'text',
		),



		 'file2' => array(
    		'title' => 'File 2',
		    'type' => 'file',
		    'location' => public_path() . '/uploads/',
		    'naming' => 'keep',
		    'length' => 20,
		    'size_limit' => 200,
		    'mimes' => 'pdf,psd,doc,docx,xls,xlsx,mov,mp4',
		),

		 'filetitle2' => array(
			'title' => 'File 2 Title',
    		'type' => 'text',
		),



		'file3' => array(
    		'title' => 'File 3',
		    'type' => 'file',
		    'location' => public_path() . '/uploads/',
		    'naming' => 'keep',
		    'length' => 20,
		    'size_limit' => 200,
		    'mimes' => 'pdf,psd,doc,docx,xls,xlsx,mov,mp4',
		),

		 'filetitle3' => array(
			'title' => 'File 3 Title',
    		'type' => 'text',
		),



		 'file4' => array(
    		'title' => 'File 4',
		    'type' => 'file',
		    'location' => public_path() . '/uploads/',
		    'naming' => 'keep',
		    'length' => 20,
		    'size_limit' => 200,
		    'mimes' => 'pdf,psd,doc,docx,xls,xlsx,mov,mp4',
		),

		 'filetitle4' => array(
			'title' => 'File 4 Title',
    		'type' => 'text',
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