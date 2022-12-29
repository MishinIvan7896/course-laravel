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
Route::get('/catalog/', function () {
    return view('catalog');
});
Route::get('/bytovka/', function () {
    return view('bytovka');
});
Route::get('/contacts/', function () {
    return view('contacts');
});
Route::get('/photogallery/', function () {
    return view('photogallery');
});
Route::get('/delivery/', function () {
    return view('delivery');
});
Route::get('/price/', function () {
    return view('price');
});
Route::get('/rent/', function () {
    return view('rent');
});