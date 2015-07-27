<?php

// app/routes.php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Session::put('pitch', '4');


Route::group(array('domain' => '{user}.myapp.dev'), function()
{
    Route::get('profile/{page}', function($user, $page) {
        // ...
    });
});



View::composer('masters.header', function($view)
{
    $view->with('pitch', Pitch::find(Session::get('pitch')));
});



Route::resource('pledges', 'PledgesController');

Route::resource('team', 'PitchersController');

Route::resource('documents', 'DocumentController');

Route::resource('reasons', 'ReasonsController');

Route::resource('/', 'HomeController');


Route::controller('users', 'UsersController', array('getLogin' => 'users.login'));

Route::controller('password', 'RemindersController');




Route::get('/logout', function()
  {
 Auth::logout();
return View::make('users/login');
  });





