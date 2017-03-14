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
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Rubriek</th>
                            <th>Klantnaam</th>
                            <th>Bootnaam</th>
                            <th>Bedrag</th>
                            <th>Factuurdatum</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        {{--{{ dd(get_defined_vars()) }}--}}
                        {{--{{ dd(get_defined_vars()['__data']) }}--}}
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>{{date("d-m-y")}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <br/>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@stop