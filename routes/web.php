<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/admin', 'App\Http\Controllers\backend\authController@welcome')->name('/admin');


Route::get('/login', function () {
    return view('backend.login');
});

Route::post('/setLogin', 'App\Http\Controllers\backend\authController@setLogin')->name('setLogin');

Route::get('/blank', function () {
    return view('backend.blank');
});
