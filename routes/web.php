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

Route::get('id/{id}',function ($id){
    $Mov = App\Movement::find($id);
    return $Mov;
});

Route::get('Desc/{desc}',function ($desc){
    return App\Movement::where('description', $desc)->get();

});

Route::get('fecha/{fecha}',function ($fecha){

$Movements=App\Movement::where('movement_date', $fecha)->get();

});

Route::get('Aver',function (){
    
    return view("home");

})->middleware('CheckAge','auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Movements','MovementController@index');
Route::get('/Category','CategoryController@index');