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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/BlackJack', function () {
    return view('Games.BlackJack.try1');
});

Route::get('/Craps', function () {
    return view('Games.Craps.index');
});

Route::get('/Poker', function () {
    return view('Games.Poker.index');
});

Route::get('/Roulette', function () {
    return view('Games.Roulette.index');
});

Route::get('/SlotMachine', function () {
    return view('Games.SlotMachine.index');
});