@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Lid toevoegen</h1>
@stop

@section('content')
    {!! Form::open(['route' => ['member.store'], 'method' => 'post', 'class' => 'form-horizontal']) !!}
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped table-hover">
                        <tbody>
                        {{--{{ dd(get_defined_vars()) }}--}}
                        {{--{{ dd(get_defined_vars()['__data']) }}--}}
                            <tr>
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        {!! Form::label('voornaam', 'Voornaam', ['class' => 'control-label']) !!}
                                        {!! Form::text('voornaam', null, ['class' => 'form-control', 'placeholder' => 'Voornaam']) !!}
                                    </div>
                                    <div class="col-sm-6">
                                        {!! Form::label('tussenvoegsel', 'Tussenvoegsel', ['class' => 'control-label']) !!}
                                        {!! Form::text('tussenvoegsel', null, ['class' => 'form-control', 'placeholder' => 'Tussenvoegsel']) !!}
                                    </div>
                                    <div class="col-sm-6">
                                        {!! Form::label('achternaam', 'Achternaam', ['class' => 'control-label']) !!}
                                        {!! Form::text('achternaam', null, ['class' => 'form-control', 'placeholder' => 'Achternaam']) !!}
                                    </div>
                                    <div class="col-sm-6">
                                        {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
                                        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                                    </div>
                                    <div class="col-sm-6">
                                        {!! Form::label('woonplaats', 'Woonplaats', ['class' => 'control-label']) !!}
                                        {!! Form::text('woonplaats', null, ['class' => 'form-control', 'placeholder' => 'Woonplaats']) !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary">
                                            Opslaan
                                        </button>
                                    </div>
                                </div>
                            </tr>
                        </tbody>
                    </table>
                    <br/>

                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@stop