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
    return view('home');
});

Route::get('/contactotbjoshuaperu', function () {
    return view('contact');
});

Route::get('/tbjoshuaperu', function () {
    return view('tbjoshua');
});

Route::get('/questions', function () {
    return view('questions');
});

Route::get('/hotels', function () {
    return view('hotels');
});

Route::get('/conference', function () {
    return view('conference');
});

