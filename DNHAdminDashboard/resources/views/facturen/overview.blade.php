@extends('adminlte::page')

@section('title', 'Facturen printen')

@section('content_header')
    <h1>Facturen generen</h1>
@stop

@section('body')
    <head>
        <meta charset="utf-8">
        <title>Facturen genereren</title>

        <style>
            .invoice-box {
                max-width: 800px;
                margin: auto;
                padding: 30px;
                border: 1px solid #eee;
                box-shadow: 0 0 10px rgba(0, 0, 0, .15);
                font-size: 16px;
                line-height: 24px;
                font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
                color: #555;
            }

            .invoice-box table {
                width: 100%;
                line-height: inherit;
                text-align: left;
            }

            .invoice-box table td {
                padding: 5px;
                vertical-align: top;
            }

            .invoice-box table tr td:nth-child(2) {
                text-align: right;
            }

            .invoice-box table tr.top table td {
                padding-bottom: 20px;
            }

            .invoice-box table tr.top table td.title {
                font-size: 45px;
                line-height: 45px;
                color: #333;
            }

            .invoice-box table tr.information table td {
                padding-bottom: 40px;
            }

            .invoice-box table tr.heading td {
                background: #eee;
                border-bottom: 1px solid #ddd;
                font-weight: bold;
            }

            .invoice-box table tr.details td {
                padding-bottom: 20px;
            }

            .invoice-box table tr.item td {
                border-bottom: 1px solid #eee;
            }

            .invoice-box table tr.item.last td {
                border-bottom: none;
            }

            .invoice-box table tr.total td:nth-child(2) {
                border-top: 2px solid #eee;
                font-weight: bold;
            }

            @media only screen and (max-width: 600px) {
                .invoice-box table tr.top table td {
                    width: 100%;
                    display: block;
                    text-align: center;
                }

                .invoice-box table tr.information table td {
                    width: 100%;
                    display: block;
                    text-align: center;
                }
            }

            /*page size and format to A4 sizing*/
            @page {
                size: A4;
                margin: 0;
            }
            .invoice-box {
                width: 210mm;
                height: 297mm;
            }

        </style>
    </head>

    <body>

    @foreach($members as $member)
        <div class="invoice-box">
            <table cellpadding="0" cellspacing="0">
                <tr class="top">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td class="title">
                                    <img src="http://placehold.it/350x150" style="width:100%; max-width:300px;">
                                </td>

                                <td>
                                    Factuurnummer #: 1<br>
                                    Gemaakt op:<br>
                                    Uiterste betaaldatum:
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr class="information">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td>
                                    De Nieuwlandse Haven<br>
                                    123 Straat<br>
                                    Nieuwland 4444XD
                                </td>

                                <td>
                                    {{$member['voornaam'] . ' ' . $member['achternaam']}}<br>
                                    {{$member['woonplaats']}}
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr class="heading">
                    <td>
                        Betaal informatie
                    </td>

                    <td>

                    </td>
                </tr>

                <tr class="details">
                    <td>
                        NL98ABNA083085938
                    </td>

                    <td>
                        ABNAMRO
                    </td>
                </tr>

                <tr class="heading">
                    <td>
                        Onderdeel
                    </td>

                    <td>
                        Kosten totaal
                    </td>
                </tr>

                <tr class="item">
                    <td>
                        Gas kosten
                    </td>

                    <td>
                        €200,-
                    </td>
                </tr>

                <tr class="item">
                    <td>
                        Zeilboot #1 35m
                    </td>

                    <td>
                        €75,-
                    </td>
                </tr>

                <tr class="item last">
                    <td>
                        Stoomboot #4 90m
                    </td>

                    <td>
                        €109,-
                    </td>
                </tr>

                <tr class="total">
                    <td></td>

                    <td>
                        Totaal: €899,-
                    </td>
                </tr>
            </table>
        </div>
    @endforeach
@stop