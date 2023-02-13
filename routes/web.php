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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/admin', function () {
    return view('admin.dashboard');
});
Route::get('/profil', function () {
    return view('admin.profil');
});
Route::get('/about', function () {
    return view('admin.about');
});
Route::get('/berita', function () {
    return view('admin.berita');
});
Route::get('/user', function () {
    return view('admin.user');
});
Route::get('/form', function () {
    return view('admin.form_user');
});
Route::get('/login', function () {
    return view('admin.login');
});
Route::get('/register', function () {
    return view('admin.register');
});
