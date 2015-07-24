@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Create Game <small>and someday finish it!</small></h1>
    </div>

    <form action="{{ action('GamesController@handleCreate') }}" method="post" role="form">
        <div class="form-group">
            <label for="title">Title</label> <span class="formError">{{ $errors->first('title')}}</span>
            <input type="text" class="form-control" name="title" />
            
        </div>
        <div class="form-group">
            <label for="publisher">Publisher</label> <span class="formError">{{ $errors->first('publisher')}}</span>
            <input type="text" class="form-control" name="publisher" />
            
        </div>
        
		<div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description" />
        </div>

        <div class="form-group">
            <label for="description">User</label> <span class="formError">{{ $errors->first('user_id')}}</span>
            <select type="select" class="form-control" name="user_id" />
                <option value=''>Please select</option>
            @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->username }}</option>
            @endforeach        
            </select>
            
        </div>
        <div class="checkbox">
            <label for="complete">
                <input type="checkbox" name="complete" /> Complete?
            </label>
        </div>
        <input type="submit" value="Create" class="btn btn-primary" />
        <a href="{{ action('GamesController@index') }}" class="btn btn-link">Cancel</a>
    </form>
@stop

