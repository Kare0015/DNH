@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Bewerk {{ $member->firstname }} {{ $member->surname }}</h1>
@stop

@section('content')
{!! Form::model($member, ['route' => ['member.update', $member->id], 'method' => 'put', 'class' => 'form-horizontal']) !!}
<div class="form-group">
    <div class="col-sm-6">
        {!! Form::label('firstname', 'Voornaam', ['class' => 'control-label']) !!}
        {!! Form::text('firstname', null, ['class' => 'form-control', 'placeholder' => 'Voornaam']) !!}
    </div>
    <div class="col-sm-6">
        {!! Form::label('prefix', 'Tussenvoegsel', ['class' => 'control-label']) !!}
        {!! Form::text('prefix', null, ['class' => 'form-control', 'placeholder' => 'Tussenvoegsel']) !!}
    </div>
    <div class="col-sm-6">
        {!! Form::label('surname', 'Achternaam', ['class' => 'control-label']) !!}
        {!! Form::text('surname', null, ['class' => 'form-control', 'placeholder' => 'Achternaam']) !!}
    </div>
    <div class="col-sm-6">
        {!! Form::label('email', 'Emailadres', ['class' => 'control-label']) !!}
        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
    </div>
    <div class="col-sm-6">
        {!! Form::label('street', 'Straatnaam', ['class' => 'control-label']) !!}
        {!! Form::text('street', null, ['class' => 'form-control', 'placeholder' => 'Straatnaam']) !!}
    </div>
    <div class="col-sm-6">
        {!! Form::label('number', 'Huisnummer', ['class' => 'control-label']) !!}
        {!! Form::text('number', null, ['class' => 'form-control', 'placeholder' => 'Nummer']) !!}
    </div>
    <div class="col-sm-6">
        {!! Form::label('postalCode', 'Postcode', ['class' => 'control-label']) !!}
        {!! Form::text('postalCode', null, ['class' => 'form-control', 'placeholder' => 'Postcode']) !!}
    </div>
    <div class="col-sm-6">
        {!! Form::label('city', 'Woonplaats', ['class' => 'control-label']) !!}
        {!! Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'Woonplaats']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-12">
        <button type="submit" class="btn btn-primary">
            Opslaan
        </button>
    </div>
</div>{!! Form::close() !!}

@stop
