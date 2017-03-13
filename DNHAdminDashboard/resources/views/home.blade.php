@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>De Nieuwlandse Haven</h1>
@stop

@section('content')
    <p>Welkom beste {{Auth::user()->name}}</p>
@stop