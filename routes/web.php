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


/*VIEW ACCESS LOGIN*/
Route::get('login','Login@view_login');
Route::get('assets','Assets@example');
/*VIEW ACCESS LOGIN*/



/*API ACCESS LOGIN*/
Route::post('doLogin','Login@setLogin');
Route::post('insert','Login@setCadastro');
Route::post('doLogout','Login@setLogout');
/*API ACCESS LOGIN*/



/*VIEW ACCESS HOME*/
Route::get('home','Home@view_Home');

/*VIEW ACCESS HOME*/


/*API ACCESS HOME*/
/*API ACCESS HOME*/



/*VIEW ACCESS PAINEL*/
Route::get('painel','painel@view_painel');

/*VIEW ACCESS PAINEL*/


/*API ACCESS PAINEL*/
Route::get('delete','Login@deleteTeste');
/*API ACCESS PAINEL*/



/*VIEW ACCESS RELATORIOS*/
Route::get('relatorios','Relatorios@view_relatorios');

/*VIEW ACCESS RELATORIOS*/


/*API ACCESS RELATORIOS*/
/*API ACCESS RELATORIOS*/


/*VIEW ACCESS PROFILE*/
Route::get('profile','Profile@view_profile');

/*VIEW ACCESS PROFILE*/

/*API ACCESS PROFILE*/
/*API ACCESS PROFILE*/




