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



		$answers = Answer::with('whysection')
		->orderby('whysection_id','ASC')
		->orderby('position','ASC')
		->get();     


        

        //return $answers;

      




      	$pitch = Pitch::where('id','=', Session::get('pitch'))
        ->first();


		    //$Billingpledges = Address::all();
    		//return $pledges;
        //return $answer;
		return View::make('answers', compact('answers','pitch'));
	}



}
