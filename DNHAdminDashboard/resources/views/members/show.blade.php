@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <div class="col-sm-1">
      <a class="btn btn-default" href="{{action('MemberController@index', $member->id)}}">Terug</a>
    </div>
    <h1>{{$member['firstname']."  ".$member['prefix']." ".$member['surname']}}</h1>
@stop

@section('content')
    <table class="table table-striped table-hover">
        <thead>
        <th class="col-sm-1">Voornaam</th>
        <th class="col-sm-4">Tussenvoegsel</th>
        <th class="col-sm-2">Achternaam</th>
        <th class="col-sm-2">Email</th>
        <th class="col-sm-2">Adres</th>
        </thead>
        <tbody>
        <tr>
            <td class="table-text">{{ $member->firstname }}</td>
            <td class="table-text">{{ $member->prefix }}</td>
            <td class="table-text">{{ $member->surname }}</td>
            <td class="table-text">{{ $member->email }}</td>
            <td class="table-text">{{ $member->street, $member->number, $member->city }}</td>
        </tr>
        </tbody>
    </table>
    <div class="col-sm-1">
		 <a class="btn btn-default" href="{{action('MemberController@edit', $member->id)}}">Bewerken</a>
	</div>


@stop
