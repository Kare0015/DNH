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

Route::get('/admin/facturen', 'HomeController@facturen');

Route::get('/admin/facturen/overview', 'HomeController@facturenOverview');

Route::get('/members', 'MemberController@index');

Route::post('/members/toevoegen', array('as'=>'toevoegen', 'uses' => 'MemberController@create'));

Route::get('/members/toevoegen', function() {
    return view('members.create');
});