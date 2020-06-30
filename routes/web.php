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

Route::get('/inicio', function () {
    return view('Games.BlackJack.index');
});

Route::get('/BlackJack', function () {
    return view('Games.BlackJack.index', ['isGame' => true]);
});

Route::get('/Craps', function () {
    return view('Games.Craps.index', ['isGame' => true]);
});

Route::get('/Poker', function () {
    return view('Games.Poker.index', ['isGame' => true]);
});

Route::get('/Roulette', function () {
    return view('Games.Roulette.index', ['isGame' => true]);
});

Route::get('/SlotMachine', function () {
    return view('Games.SlotMachine.index', ['isGame' => true]);
});

Route::get('/juegoPrueba', function () {
    return view('Games.JuegoPrueba.index', ['isGame' => true]);
});

Route::post('/ajax', 'BalanceController@ajaxRequestPost');