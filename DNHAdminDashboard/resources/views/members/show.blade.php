@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
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
            {{--@if(!empty($user->role->name))
                <td class="table-text">{{ $user->role->name }}</td>
            @endif --}}
        </tr>
        </tbody>
    </table>


@stop