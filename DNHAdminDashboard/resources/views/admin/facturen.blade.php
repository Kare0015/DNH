@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Facturen generen</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <p>Selecteer hier de gebruikers om de facturen te genereren.</p>
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
                            <th>Tussenvoegsel</th>
                            <th>Achternaam</th>
                            <th>Adres</th>
                            <th>Boten</th>
                            <th>Totaalbedrag Factuur Periode {{date("Y")-1}}</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        {{--{{ dd(get_defined_vars()) }}--}}
                        {{--{{ dd(get_defined_vars()['__data']) }}--}}
                        @foreach($members as $member)
                            <tr>
                                <td>{{$member['firstname']}}</td>
                                <td>{{$member['prefix']}}</td>
                                <td>{{$member['surname']}}</td>
                                <td>{{$member['street']."  ".$member['number'].", ".$member['city']}}</td>
                                <td>{{$member['boten']}}</td>
                                <td>€ {{$member['totaalbedrag']}}</td>
                                <th>
                                    <a href="/admin/enkelefactuur/{{$member['id']}}" class="btn btn-primary">Genereer deze factuur</a>
                                </th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <br/>
                    <a class="btn btn-primary" href="/admin/facturen/overview">Genereer alle facturen ({{$totalFacturen}})</a>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@stop
