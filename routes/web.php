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
    return view('index');
});


Route::get('/saree', function () {
    return view('saree');
});


Route::get('/salwar', function () {
    return view('salwar');
});


Route::get('/gown', function () {
    return view('gown');
});


Route::get('/contactus', function () {
    return view('contactus');
});
