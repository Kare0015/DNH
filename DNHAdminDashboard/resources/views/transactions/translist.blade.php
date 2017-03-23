@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Transactielijst</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <p>Deze pagina geeft een transactielijst weer waarin alle transacties terug komen.</p>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Leden</h3>
                    <a href="{{ url('/transactions/toevoegen') }}" class="btn btn-primary pull-right">Handmatig toevoegen</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Rubriek</th>
                            <th>Transactieomschrijving</th>
                            <th>Klantnaam</th>
                            <th>Bedrag</th>
                            <th>Factuurdatum</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{--{{ dd(get_defined_vars()) }}--}}
                        {{--{{ dd(get_defined_vars()['__data']) }}--}}
                        @foreach($transactions as $transaction)
                            <tr>
                                <td>{{$transaction['rubriek']}}</td>
                                <td>{{$transaction['transactienaam']}}</td>
                                <td>{{$transaction['klantnaam']}}</td>
                                <td>€ {{$transaction['bedrag']}}</td>
                                <td>{{$transaction['created_at']}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <br/>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@stop