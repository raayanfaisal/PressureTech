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
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/mch', function () {
    return view('mch');
});

Route::get('/aboutus', function () {
    return view('about');
});

Route::get('/mark3', function () {
    return view('mark3');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/compressor', function () {
    return view('compressor');
});

Route::get('/aircompressor', function () {
    return view('aircomp');
});

Route::get('/coltri', function () {
    return view('coltri');
});

Route::get('/Bauer', function () {
    return view('tepe');
});

Route::get('/gener', function () {
    return view('pete');
})

