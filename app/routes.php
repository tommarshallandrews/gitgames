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

// Bind route parameters.
Route::model('game', 'Game');
Route::model('help', 'Help');

// Show pages.
Route::get('/', 'GamesController@index');
Route::get('/help', 'GamesController@helpList');
Route::get('/makeHelp', 'GamesController@makeHelp');
Route::get('/help/{help}', 'GamesController@help');
Route::get('/create', 'GamesController@create');
Route::get('/edit/{game}', 'GamesController@edit');
Route::get('/delete/{game}', 'GamesController@delete');


// Handle form submissions.
Route::post('/create', 'GamesController@handleCreate');
Route::post('/edit', 'GamesController@handleEdit');
Route::post('/delete', 'GamesController@handleDelete');
Route::post('/plusHelp', 'GamesController@plusHelp');
Route::get('/makeHelp', 'GamesController@handleMakeHelp');



Route::get('/users', function()
{
    $users = User::with('games')->get();
    return $users;
});


Route::get('/games', function()
{
    $games = Game::with('user')->get();
    return $games;
});





