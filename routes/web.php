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

Route::get('/dashboard', function () {
    return view('layouts.dash.dashboard');
})->name('dashboard');

Route::get('/categorie', function () {
    return view('layouts.dash.categorie');
})->name('categorie');

Route::get('/livre', function () {
    return view('layouts.dash.livre');
})->name('livre');

//Auth::routes();

//Route::get('/', 'HomeController@index')->name('home');
