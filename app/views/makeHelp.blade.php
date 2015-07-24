@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Create Help <small>and someday finish it!</small></h1>
    </div>

    <form action="{{ action('GamesController@handleMakeHelp') }}" method="post" role="form">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" />
        </div>
        <div class="form-group">
            <label for="publisher">Text</label>
            <input type="text" class="form-control" name="text" />
        </div>
        <input type="submit" value="Create" class="btn btn-primary" />
        <a href="{{ action('GamesController@index') }}" class="btn btn-link">Cancel</a>
    </form>
@stop

