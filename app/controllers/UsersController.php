<?php

class UsersController extends BaseController {

	protected $layout = "masters.default";

	public function __construct() {
		$this->beforeFilter('csrf', array('on'=>'post'));
		$this->beforeFilter('auth', array('only'=>array('getDashboard')));
	}

	
	public function getIndex() {
		return 'index';
	}


	
	public function getRegister() {
		return View::make('users.register');
	}


	public function postCreate() {
		$validator = Validator::make(Input::all(), User::$newUpdateRules);

		if ($validator->passes()) {
			$user = new User;
		$user->email = Input::get('email');
		$user->username = Input::get('username');
		$user->password = Hash::make(Input::get('password'));
			$user->save();

			Auth::login($user);

			//return Redirect::to('dashboard');

			return Redirect::to('/')->with('message', 'Thanks for registering!');
		} else {
			return Redirect::to('users/register')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
		}
	}


	public function postNew()
	{
		$validator = Validator::make($data = Input::all(), User::$newUpdateRules);

		if ($validator->fails())
		{	
			$input = Input::all();
   			$input['autoOpenModal'] = true;
   			return Redirect::back()->withErrors($validator)->withInput($input);
		}

		$user = Auth::user();
	
		$user->email = Input::get('email');
		$user->username = Input::get('username');
		$user->password = Hash::make(Input::get('password'));
		$user->save();

		Auth::login($user);

		return Redirect::action('WorkshopController@show', Session::get('make_id', '0'));
	}






	//update user as automatically assigned user account
	public function postStore()
	{
		$validator = Validator::make($data = Input::all(), User::$updateRules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$user = Auth::user();
	
		$user->email = Input::get('email');
		$user->username = Input::get('username');
		$user->firstname = Input::get('firstname');
		$user->lastname = Input::get('lastname');

		$user->save();

		return Redirect::back()->with('message', 'Update sucessful');
	}




	public function getLogin() {
		return View::make('users.login');
	}




	public function postSignin() {

		$make = '0';
			//check for an orphan make
		if (Auth::check() AND empty(Auth::user()->email)) {
				$make = Make::where('user_id','LIKE', (Auth::user()->id))->first();
			}


		if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')), true)) {


				//get array of likes and store in session

				
				//check if an orphan make is in progress and assign make to them
				if ($make <> '0'){
				$make->user_id = Auth::user()->id;
							
				if (empty($make->name)){
					$make->name = "String-".$make->id;
					}

				$make->save();
				return Redirect::action('WorkshopController@show', $make->id);
				}


			return Redirect::to('users/dashboard')->with('message', 'You are now logged in!');

		} else {
			return Redirect::to('users/login')
				->with('message', 'Your username/password combination was incorrect')
				->withInput();
		}
	}




	public function getDashboard() {
		return View::make('dashboard');

	}


		//acount form for anonomous user who has not regisered
		public function getNew($id) {
		$user = User::find($id);
		Auth::login($user);

		return View::make('users.New', compact('user'));
		//return "edit";
	}


		//acount form user who has previously regisered
		public function getEdit($id) {
		$user = User::find($id);

		return View::make('users.edit', compact('user'));
		//return "edit";
	}

		//set default scale for user
		public function getScale($newScale) {
		$user = (Auth::user());
		$user->scale = $newScale;
		$user->save();
		//return Redirect::action('WorkshopController@show', $id);
		return Redirect::to(URL::previous());
		//return $user;
	}





		

	public function getLogout() {
		Auth::logout();
		return Redirect::to('users/login')->with('message', 'Your are now logged out!');
	}
}