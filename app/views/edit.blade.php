@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Edit Game <small>Go on, mark it complete!</small></h1>
    </div>

    <form action="{{ action('GamesController@handleEdit') }}" method="post" role="form">
        <input type="hidden" name="id" value="{{ $game->id }}">

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" value="{{ $game->title }}" />
        </div>
        <div class="form-group">
            <label for="publisher">Publisher</label>
            <input type="text" class="form-control" name="publisher" value="{{ $game->publisher }}" />
        </div>
		        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description" value="{{ $game->description }}" />
        </div>
        <div class="form-group">
            <label for="description">User</label>
            <select type="select" class="form-control" name="user_id" />
            @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->username }}</option>
            @endforeach        
            </select>
        </div>
        <div class="checkbox">
            <label for="complete">
                <input type="checkbox" name="complete" {{ $game->complete ? 'checked' : '' }} /> Complete?
            </label>
        </div>
        <input type="submit" value="Save" class="btn btn-primary" />
        <a href="{{ action('GamesController@index') }}" class="btn btn-link">Cancel</a>
    </form>
@stop

