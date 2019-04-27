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
 //   return view('welcome');
//});
Route::get('/', function () {
    return redirect('login');
});
Route::get('list', 'IndexController@list');
Route::get('edit/{id}', 'IndexController@edit');
Route::post('update', 'IndexController@editValues');
Route::get('add', 'IndexController@add');
Route::post('add', 'IndexController@add');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

