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

Route::get('/interactive-media', function () {
    return view('interactive-media');
});

Route::get('/development', function () {
    return view('development');
});

Route::get('/design', function () {
    return view('design');
});

Route::get('/research', function () {
    return view('research');
});

Route::get('/communication', function () {
    return view('communication');
});

Route::get('/professional-identity', function () {
    return view('professional-identity');
});

Route::get('/shihaab', function () {
    return view('shihaab');
});

Route::get('/selfportrait-old', function () {
    return view('selfportrait-old');
});

Route::get('/selfportrait', function () {
    return view('selfportrait');
});