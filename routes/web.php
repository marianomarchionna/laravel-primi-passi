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
})->name('home');;

Route::get('/contact', function () {
    return view('contact');
})->name('contatti');

Route::get('/form', function () {
    return view('form');
})->name('form');;

Route::get('/terms', function () {
    return view('terms');
})->name('termini');;

Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');;