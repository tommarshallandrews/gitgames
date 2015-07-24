<?php

// app/controllers/GamesController.php

class GamesController extends BaseController
{
    public function index()
    {
        // Show a listing of games.
        //$games = Game::all();
        $games = Game::with('user')->get();

        return View::make('index', compact('games', 'user'));
    }

        public function helpList()
    {
        // Show the help list
        $helps = Help::all();

        return View::make('helpList', compact('helps'));
        //return $helps;
    }

    public function makeHelp()
    {
        // Show the create game form.
        return View::make('makeHelp');
    }




    public function create()
    {
        // Show the create game form.
        $users = User::all();
        return View::make('create', compact('users'));
        //return $users;
    }



    public function handleCreate()
    {
                $validation = Validator::make(Input::all(), Game::$rules);
    
            if ($validation->fails())
            {
            return Redirect::back()->withinput()->withErrors($validation->messages());
            }
        // Handle create form submission.
        $game = new Game;
        $game->title        = Input::get('title');
        $game->publisher    = Input::get('publisher');
        $game->complete     = Input::has('complete');
		$game->description  = Input::get('description');
        $game->user_id      = Input::get('user_id');
        $game->save();

        return Redirect::action('GamesController@index');
    }

    public function handleMakeHelp()
    {
        // Handle create form submission.
        $game = new Help;
        $game->title   = Input::get('title');
        $game->text    = Input::get('text');
        $game->save();

        return Redirect::action('GamesController@helpList');
    }
    

    public function edit(Game $game)
    {
        // Show the edit game form.
        $users = User::all();

        return View::make('edit', compact('game', 'users'));
    }

    public function handleEdit()
    {
        // Handle edit form submission.
        $game = Game::findOrFail(Input::get('id'));
        $game->title        = Input::get('title');
        $game->publisher    = Input::get('publisher');
        $game->complete     = Input::has('complete');
		$game->description  = Input::get('description');
        $game->user_id      = Input::get('user_id');
        $game->save();

        return Redirect::action('GamesController@index');
    }

    public function delete(Game $game)
    {
        // Show delete confirmation page.
        return View::make('delete', compact('game'));
    }

    public function handleDelete()
    {
        // Handle the delete confirmation.
        $id = Input::get('game');
        $game = Game::findOrFail($id);
        $game->delete();

        return Redirect::action('GamesController@index');
    }

    public function plusHelp()
    {
        // Handle the delete confirmation.
        $id = Input::get('id');
        $help = Help::findOrFail($id);
        $help->votes = "hello";

        return Redirect::action('GamesController@help');
    }

    public function help(Help $help)
    {
        // Show the edit game form.
        return View::make('help', compact('help'));
    }

}
