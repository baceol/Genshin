@extends('layout.app')

@section('content')
    Welcome, {{$_SESSION['session_user']->name}}
@stop
