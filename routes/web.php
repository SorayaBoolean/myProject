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
})->name('studi-page');

Route::get('/esperienze', function () {
    return view('esperienze');    
})->name('esperienze-page');

Route::get('/my-skills', function () {
    return view('skills');    
})->name('my-skills-page');
