<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/tasm', function () {
    return view('calcul');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', 'CalculController@calcul');
Route::resource('user', 'UsersController');
Route::resource('calcul','CalculController');
Route::get('export', 'CalculController@indexx')->name('indexx');
Route::delete('DeleteAll', 'CalculController@deleteAll')->name('DeleteAll');
