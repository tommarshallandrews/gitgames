@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Delete {{ $help->title }} <small>Are you sure?</small></h1>
        <h4>Delete {{ $help->text }} </h4>
    </div>
@stop