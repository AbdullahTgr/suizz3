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

Route::get('/feature', function () {
    return view('layouts.pages.feature');
});

Route::get('/services', function () {
    return view('layouts.pages.services');
});

Route::get('/contact', function () {
    return view('layouts.pages.contact');
});
