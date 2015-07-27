<?php

class reasonsController extends \BaseController {

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

		$reasons = Reason::where('pitch_id','=', Session::get('pitch'))
		->orderby('position','ASC')
		->orderby('id','DESC')
        ->get();


		    //$Billingpledges = Address::all();
    		//return $pledges;

		return View::make('reasons', compact('reasons'));
	}



}
