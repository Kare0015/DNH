@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Nieuwe transactie toevoegen</h1>
@stop

@section('content')
    {!! Form::open(['action' => ['TransactionController@store'], 'method' => 'post', 'class' => 'form']) !!}
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Transactie toevoegen</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('transactienaam', 'Transactie Naam', ['class' => 'control-label']) !!}
                        {!! Form::text('transactienaam', null, ['class' => 'form-control', 'placeholder' => 'Schoonmaakartikelen']) !!}
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('bedrag', 'Bedrag', ['class' => 'control-label']) !!}
                        {!! Form::text('bedrag', null, ['class' => 'form-control', 'placeholder' => '€0.00']) !!}
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    {!! Form::close() !!}
@stop