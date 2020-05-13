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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Clientes', 'ClienteController@index')->name('Cliente.index');
Route::get('/Clientes/new', 'ClienteController@Create')->name('Cliente.create');
Route::post('/Clientes', 'ClienteController@store')->name('Cliente.store');
Route::delete('/Clientes/{id}', 'ClienteController@destroy')->name('Cliente.destroy');