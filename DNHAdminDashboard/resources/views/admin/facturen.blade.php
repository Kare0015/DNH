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
                            <th>Achternaam</th>
                            <th>Woonplaats</th>
                            <th>Aantal boten</th>
                            <th>Totaalbedag Factuur Periode {{date("Y")-1}}</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        {{--{{ dd(get_defined_vars()) }}--}}
                        {{--{{ dd(get_defined_vars()['__data']) }}--}}
                        @foreach($members as $member)
                            <tr>
                                <td>{{$member['voornaam']}}</td>
                                <td>{{$member['achternaam']}}</td>
                                <td>{{$member['woonplaats']}}</td>
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