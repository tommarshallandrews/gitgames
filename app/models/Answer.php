<?php

class Answer extends \Eloquent {

	// Add your validation rules here
	public static $rules = array(
		'title'=>'required',



	);

	// Don't forget to fill this array
	protected $guarded = [array('id','created_at','updated_at')];


		public function pitch()
	{
		return $this->belongsTo('Pitch');
	}


	//	public function billingAddress()
	//{
	//	return $this->hasMany('Order','id', 'billingAddress');
	//}


		//public function deliveryOrder()
	//{
		//return $this->hasMany('Order','id', 'billingAddress');
	//}




}