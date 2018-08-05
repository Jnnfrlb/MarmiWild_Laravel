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

Route::get('/welcome', function() {
    return view('welcome');
});

Route::get('/', function() {
    return view('accueil');
})->name('accueil');

Route::get('/inscription', function() {
    return view('inscription');
})->name('inscription');

Route::post('/inscription', function(){
    return "Nous avons bien reçu votre mail : " . request('email');
});