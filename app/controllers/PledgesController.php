<?php

class pledgesController extends \BaseController {

	    public function __construct()
    {
        $this->beforeFilter('auth');

    }

	/**
	 * Display a listing of pledges
	 *
	 * @return Response
	 */
	public function index()
	{
		//$makes = Make::where('zodiac_id','LIKE', $zodiac_id)	

		$pledges = Promise::where('pitch_id','=', Session::get('pitch'))
		->orderby('position','ASC')
        ->get();


		    //$Billingpledges = Address::all();
    		//return $pledges;

		return View::make('pledges', compact('pledges'));
	}



}
