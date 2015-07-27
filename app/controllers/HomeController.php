<?php

class homeController extends \BaseController {

	    public function __construct()
    {
        $this->beforeFilter('auth');

    }

	/**
	 * Display a listing of pledges
	 
	 * @return Response
	 */
	public function index()
	{
		//$makes = Make::where('zodiac_id','LIKE', $zodiac_id)	

		$pitch = Pitch::where('id','=', Session::get('pitch'))
        ->first();


		    //$Billingpledges = Address::all();
    		//return $pledges;
		//return $pitch;
		return View::make('home', compact('pitch'));
		
	}

	/**
	 * Show the form for creating a new address
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('pledges.create');
	}

	/**
	 * Store a newly created address in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Address::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		$data['user_id'] = Auth::user()->id;
		Address::create($data);

		//var_dump($data);

		$orderOpen = Order::where('user_id','=', Auth::user()->id)
		->where('status', '=', 'open')
        ->first();

        if ($orderOpen){
        	//return Redirect::route('orders.index');
        }

		return Redirect::route('pledges.index');
	}

	/**
	 * Display the specified address.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	//use SHOW to select pledges for open order
	public function show($id)
	{


		$billingType = $id;





         $pledges = Address::where('user_id','=', Auth::user()->id)
		//->where('billing', '=', 0)
        ->get();



    	$orderOpen = Order::where('user_id','=', Auth::user()->id)
		->where('status', '=', 'open')
        ->first();
    	
    	//return $pledges;


		return View::make('pledges.index', compact('pledges','billingType', 'orderOpen'));
	}

	/**
	 * Show the form for editing the specified address.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

		$address = Address::find($id);

		return View::make('pledges.edit', compact('address'));

	}

	/**
	 * Update the specified address in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$address = Address::findOrFail($id);
		$allAddress = Address::all();

		$validator = Validator::make($data = Input::all(), Address::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$address->update($data);

		$billing = Input::get('billing') ? 1 : 0;

		if ($billing = 1) {
			
			//DB::table('pledges')->where('billing', '=', 1)->update(array('billing' => 0));

			$address->billing = 1;
			
			//return $address;
		}

		$orderOpen = Order::where('user_id','=', Auth::user()->id)
		->where('status', '=', 'open')
        ->first();

        if ($orderOpen){
        	return Redirect::route('orders.index');
        }
		//$address->save();

		return Redirect::route('pledges.index');
	}

	/**
	 * Remove the specified address from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Address::destroy($id);

		return Redirect::route('pledges.index');
	}

}
