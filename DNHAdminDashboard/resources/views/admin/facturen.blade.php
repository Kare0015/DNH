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
                        </tr>
                        </thead>
                        <tbody>
                        {{--{{ dd(get_defined_vars()) }}--}}
                        @foreach($members as $member)
                            {{--{{dd($lid)}}--}}
                            <tr>
                                <td>{{$member['voornaam']}}</td>
                                <td>{{$member['achternaam']}}</td>
                                <td>{{$member['woonplaats']}}</td>
                                <td>{{$member['boten']}}</td>
                                <td>€ {{$member['totaalbedrag']}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <br />
                    <button class="btn btn-primary" type="submit">Genereer x facturen</button>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@stop