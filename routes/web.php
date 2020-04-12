<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cabinet', 'HomeController@cabinet')->name('cabinet');













// prefix - путь от которого начнутся роуты
// namespace - папка в которой лежат контроллеры
// middleware - массив с middleware для всех контроллеров этой группы
//Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth']], function (){
//    Route::get('/', '');
//});