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
                            <th> </th>
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
                                <td>{{$member['email']}}</td>
                                <td>{{$member['street']."  ".$member['number'].", ".$member['city']}}</td>
                                <td><a class="btn btn-default" href="/members/{{$member['id']}}">Profiel bekijken</a></td>
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
{{-- @section('scripts')

    <script>
        jQuery(document).ready(function($) {
            $(".row-link").click(function() {
                window.document.location = $(this).data("href");
            });
            $('#cohort-tabs a:first').tab('show'); // Select first tab

            $.get(
                url, datatype, data, success
            )
        });
    </script>

@stop --}}
