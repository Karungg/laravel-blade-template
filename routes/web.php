<?php

use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello', ['name'    => "Miftah Fadilah"]);
});

Route::get('/hello/world', function () {
    return view('hello.world', ['name'  => "Hello World!"]);
});

Route::get('/html-encoding', function (Request $request) {
    return view('html-encoding', ["name"    => $request->input("name")]);
});
