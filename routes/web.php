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

Route::get('/inicio', function ($isGame = true) {
    return view('Games.BlackJack.index', compact('isGame'));
});

Route::get('/BlackJack', function ($isGame = true) {
    return view('Games.BlackJack.index', compact('isGame'));
});

Route::get('/Craps', function ($isGame = true) {
    return view('Games.Craps.index', compact('isGame'));
});

Route::get('/Poker', function ($isGame = true) {
    return view('Games.Poker.index');
});

Route::get('/Roulette', function ($isGame = true) {
    return view('Games.Roulette.index');
});

Route::get('/SlotMachine', function ($isGame = true) {
    return view('Games.SlotMachine.index');
});

Route::get('/juegoPrueba', function ($isGame = true) {
    return view('Games.JuegoPrueba.index');
});