@extends('layout')

@section('content')

<table>
 @foreach($helps as $help)
                <tr>
                    <td><b>{{ $help->title }}</b></td>
                    <td>{{ $help->text }}</td>
                    <td>
                        <a href="{{ action('GamesController@help', $help->id) }}" class="btn btn-default">Edit</a>
                        <a href="{{ action('GamesController@help', $help->id) }}" class="btn btn-danger">Delete</a>
                        <a href="{{ action('GamesController@plusHelp', $help->id) }}" class="btn btn-default">Up</a>
                    </td>
                </tr>
@endforeach
 </table>               


@stop

               