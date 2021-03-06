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
Route::get('/master', function () {
    return view('CustomAuth.master');
});
Route::get('/newLogin', function () {
    return view('CustomAuth.newLogin');
});

Route::get('/newRegister', function () {
    return view('CustomAuth.newRegister');
});

Route::get('/newForget', function () {
    return view('CustomAuth.newForget');
});

Route::get('/newLogin', function () {
    return view('CustomAuth.newLogin');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
