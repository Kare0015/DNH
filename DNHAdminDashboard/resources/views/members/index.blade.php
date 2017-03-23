@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Leden Overzicht</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Voornaam</th>
                            <th>Tussenvoegsel</th>
                            <th>Achternaam</th>
                            <th>Email</th>
                            <th>Adres</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($members as $member)
                            <tr>
                                <td>{{$member['firstname']}}</td>
                                <td>{{$member['prefix']}}</td>
                                <td>{{$member['surname']}}</td>
                                <td>{{$member['email']}}</td>
                                <td>{{$member['street']."  ".$member['number'].", ".$member['city']}}</td>
                                <td style='width:90px;'><a class="btn btn-default" href="/members/{{$member['id']}}">Bekijken</a>
                                <td>{!! Form::open(['route' => ['member.destroy', $member->id], 'method'=>'DELETE']) !!}
                                    {!! Form::submit('Verwijderen', array('class'=>'btn btn-danger')) !!}
                                    {!! Form::close() !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <br/>
                    <a class="btn btn-primary" href="/members/toevoegen">Lid toevoegen</a>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@stop
