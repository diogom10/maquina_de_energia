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

//Route::get('/', function () {
//    return view('login');
//});


/*VIEW ACCESS*/
Route::get('login','Login@view_login');
Route::get('assets','Assets@example');
Route::get('painel','Home@painel');
/*VIEW ACCESS*/

/*API ACCESS*/
Route::post('doLogin','Login@setLogin');
Route::post('insert','Login@setCadastro');
/*API ACCESS*/