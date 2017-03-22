<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/admin/facturen', 'FacturenController@facturen');

Route::get('/admin/enkelefactuur/{id}', 'FacturenController@enkelefactuur');

Route::get('/admin/facturen/overview', 'FacturenController@facturenOverview');

Route::get('/transactions/translist', 'TransactionController@translist');


Route::get('/members', 'MemberController@index');

Route::resource('member', 'MemberController');

Route::get('/members/toevoegen', function() {
    return view('members.create');
});

Route::resource('transaction', 'TransactionController');

Route::get('/transactions/toevoegen', function() {
    return view('transactions.create');
});