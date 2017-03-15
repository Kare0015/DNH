@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Lid toevoegen</h1>
@stop

@section('content')
    {!! Form::open(['url' => 'members/toevoegen']) !!}
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Voornaam</th>
                            <th>Achternaam</th>
                            <th>Woonplaats</th>
                            <th>Aantal boten</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{--{{ dd(get_defined_vars()) }}--}}
                        {{--{{ dd(get_defined_vars()['__data']) }}--}}
                            <tr>
                                <td><input type="text" name="voornaam" placeholder="Voornaam"></td>
                                <td><input type="text" name="achternaam" placeholder="Achternaam"></td>
                                <td><input type="text" name="woonplaats" placeholder="Woonplaats"></td>
                                <td><input type="var" name="boten" placeholder="Aantal boten"></td>
                            </tr>
                        </tbody>
                    </table>
                    <br/>
                    <a class="btn btn-primary" type="submit">Opslaan</a>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
    {!! Form::close(); !!}
@stop