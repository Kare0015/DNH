@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Ledenadministratie</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Leden</h3>
                </div>
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
                    </table>
                    <br/>
                    <a class="btn btn-primary" href="">Lid toevoegen</a>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@stop
