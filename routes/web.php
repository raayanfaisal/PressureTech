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

Route::get('/p200', function () {
    return view('p200');
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

Route::get('/smart', function () {
    return view('smart');
});

Route::get('/scuba', function () {
    return view('scuba');
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

Route::get('/oxygen', function () {
    return view('oxygen');
});

Route::get('/gear', function () {
    return view('gear');
});

Route::get('/cylinder', function () {
    return view('cylinder');
});

Route::get('/gener', function () {
    return view('pete');
});

Auth::routes();

 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

