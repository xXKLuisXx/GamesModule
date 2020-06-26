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
    return view('main');
});

Route::get('/juegoPrueba', function(){
    return view('juegoPrueba.index');
});

Route::get('/slotMachine', function(){
    return view('slotMachine.index');
});

Route::get('/blackJack', function(){
    return view('BlackJack.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
