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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/siterips', function () {
    return view('siterips');
});

Route::get('/topthots', function () {
    return view('topthots');
});

Route::get('/porndude', function () {
    return view('porndude');
});

Route::get('/porndeals', function () {
    return view('porndeals');
});

Route::get('/rabbit', function () {
    return view('rabbit');
});