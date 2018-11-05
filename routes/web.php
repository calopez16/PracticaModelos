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


return App\Movement::where('movement_date', $fecha)->get();

})->where(['fecha'=>'yyyy/dd/mm'])->view('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Movements','Movements@index');
Route::get('/Category','CategoryController@index');