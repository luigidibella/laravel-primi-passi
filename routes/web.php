<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $name = 'Jiji';
    $lastname = 'Gudoghi';

    return view('home', compact('name', 'lastname'));
})->name('home');

Route::get('/get-started', function () {
    $pkmn_1_name = 'bulbasaur';
    $pkmn_2_name = 'charmander';
    $pkmn_3_name = 'squirtle';

    $pkmn_1_desc = 'pokémon seed';
    $pkmn_2_desc = 'pokémon lizard';
    $pkmn_3_desc = 'pokémon tiny turtle';

    return view('get-started', compact('pkmn_1_name', 'pkmn_2_name', 'pkmn_3_name', 'pkmn_1_desc', 'pkmn_2_desc', 'pkmn_3_desc'));
})->name('get-started');
