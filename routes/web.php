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
    return view('welcome');
});

Route::get('movements', function () {
    return DB::table('movements')->get();
});

Route::get('movements/{id}',function ($id){
    $usuarios = App\User::find($id);
    return $usuarios;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
