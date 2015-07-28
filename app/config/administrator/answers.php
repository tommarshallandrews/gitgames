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
		    'mimes' => 'pdf,psd,doc,mov,mp4,xls,xlsx,docx,pptx',
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
		   'mimes' => 'pdf,psd,doc,mov,mp4,xls,xlsx,docx,pptx',
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
		    'mimes' => 'pdf,psd,doc,mov,mp4,xls,xlsx,docx,pptx',
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
		    'mimes' => 'pdf,psd,doc,mov,mp4,xls,xlsx,docx,pptx',
		),

		 'filetitle4' => array(
			'title' => 'File 4 Title',
    		'type' => 'text',


		),




		 'file5' => array(
    		'title' => 'File 5',
		    'type' => 'file',
		    'location' => public_path() . '/uploads/',
		    'naming' => 'keep',
		    'length' => 20,
		    'size_limit' => 200,
		    'mimes' => 'pdf,psd,doc,mov,mp4,xls,xlsx,docx,pptx',
		),

		 'filetitle5' => array(
			'title' => 'File 5 Title',
    		'type' => 'text',


		),






		 'file6' => array(
    		'title' => 'File 6',
		    'type' => 'file',
		    'location' => public_path() . '/uploads/',
		    'naming' => 'keep',
		    'length' => 20,
		    'size_limit' => 200,
		    'mimes' => 'pdf,psd,doc,mov,mp4,xls,xlsx,docx,pptx',
		),

		 'filetitle6' => array(
			'title' => 'File 6 Title',
    		'type' => 'text',


		),






		 'file7' => array(
    		'title' => 'File 7',
		    'type' => 'file',
		    'location' => public_path() . '/uploads/',
		    'naming' => 'keep',
		    'length' => 20,
		    'size_limit' => 200,
		    'mimes' => 'pdf,psd,doc,mov,mp4,xls,xlsx,docx,pptx',
		),

		 'filetitle7' => array(
			'title' => 'File 7 Title',
    		'type' => 'text',


		),





		 'file8' => array(
    		'title' => 'File 8',
		    'type' => 'file',
		    'location' => public_path() . '/uploads/',
		    'naming' => 'keep',
		    'length' => 20,
		    'size_limit' => 200,
		    'mimes' => 'pdf,psd,doc,mov,mp4,xls,xlsx,docx,pptx',
		),

		 'filetitle8' => array(
			'title' => 'File 8 Title',
    		'type' => 'text',


		),





		 'file9' => array(
    		'title' => 'File 9',
		    'type' => 'file',
		    'location' => public_path() . '/uploads/',
		    'naming' => 'keep',
		    'length' => 20,
		    'size_limit' => 200,
		    'mimes' => 'pdf,psd,doc,mov,mp4,xls,xlsx,docx,pptx',
		),

		 'filetitle9' => array(
			'title' => 'File 9 Title',
    		'type' => 'text',


		),





		 'file10' => array(
    		'title' => 'File 10',
		    'type' => 'file',
		    'location' => public_path() . '/uploads/',
		    'naming' => 'keep',
		    'length' => 20,
		    'size_limit' => 200,
		    'mimes' => 'pdf,psd,doc,mov,mp4,xls,xlsx,docx,pptx',
		),

		 'filetitle10' => array(
			'title' => 'File 10 Title',
    		'type' => 'text',


		),





		 'file11' => array(
    		'title' => 'File 11',
		    'type' => 'file',
		    'location' => public_path() . '/uploads/',
		    'naming' => 'keep',
		    'length' => 20,
		    'size_limit' => 200,
		    'mimes' => 'pdf,psd,doc,mov,mp4,xls,xlsx,docx,pptx',
		),

		 'filetitle11' => array(
			'title' => 'File 11 Title',
    		'type' => 'text',


		),






		 'file12' => array(
    		'title' => 'File 12',
		    'type' => 'file',
		    'location' => public_path() . '/uploads/',
		    'naming' => 'keep',
		    'length' => 20,
		    'size_limit' => 200,
		    'mimes' => 'pdf,psd,doc,mov,mp4,xls,xlsx,docx,pptx',
		),

		 'filetitle12' => array(
			'title' => 'File 12 Title',
    		'type' => 'text',


		),






		 'file13' => array(
    		'title' => 'File 13',
		    'type' => 'file',
		    'location' => public_path() . '/uploads/',
		    'naming' => 'keep',
		    'length' => 20,
		    'size_limit' => 200,
		    'mimes' => 'pdf,psd,doc,mov,mp4,xls,xlsx,docx,pptx',
		),

		 'filetitle13' => array(
			'title' => 'File 13 Title',
    		'type' => 'text',


		),






		 'file14' => array(
    		'title' => 'File 14',
		    'type' => 'file',
		    'location' => public_path() . '/uploads/',
		    'naming' => 'keep',
		    'length' => 20,
		    'size_limit' => 200,
		    'mimes' => 'pdf,psd,doc,mov,mp4,xls,xlsx,docx,pptx',
		),

		 'filetitle14' => array(
			'title' => 'File 14 Title',
    		'type' => 'text',


		),






		 'file15' => array(
    		'title' => 'File 15',
		    'type' => 'file',
		    'location' => public_path() . '/uploads/',
		    'naming' => 'keep',
		    'length' => 20,
		    'size_limit' => 200,
		    'mimes' => 'pdf,psd,doc,mov,mp4,xls,xlsx,docx,pptx',
		),

		 'filetitle15' => array(
			'title' => 'File 15 Title',
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
