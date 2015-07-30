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



		$answers = Answer::has('section')->with('section','pitch')
		->where('pitch_id','=', Session::get('pitch'))
		->where('section_id','<>', 'null')
		->orderby('section_id','Asc')
		->orderby('position','ASC')
		->get();     

        

        //return $answers[0]->pitch->title;

      




		    //$Billingpledges = Address::all();
    		//return $pledges;
        //return $answer;
		return View::make('answers', compact('answers'));
	}



}
