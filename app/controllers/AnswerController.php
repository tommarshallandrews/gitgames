<?php

class answerController extends \BaseController {

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

		$answers = Answer::where('pitch_id','=', Session::get('pitch'))
		->orderby('position','ASC')
        ->get();

       $pitch = Pitch::where('id','=', Session::get('pitch'))
        ->first();


		    //$Billingpledges = Address::all();
    		//return $pledges;
        //return $answer;
		return View::make('answers', compact('answers','pitch'));
	}



}
