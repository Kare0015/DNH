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

Route::get('/admin/enkelefactuur/{id}', 'HomeController@enkelefactuur');

Route::get('/admin/facturen/overview', 'HomeController@facturenOverview');

Route::get('/transactions/translist', 'HomeController@translist');

