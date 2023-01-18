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
    return view('home');
});

Route::get('/chi-sono', function () {
    return view('chisono');    
})->name('chi-sono');

Route::get('/studi', function () {
    return view('studi');   
})->name('studi');

Route::get('/esperienze', function () {
    return view('esperienze');   
})->name('esperienze');

Route::get('/skills', function () {
    return view('skills');   
})->name('skills');

Route::get('/contatti', function () {
    return view('contatti');   
})->name('contatti');



