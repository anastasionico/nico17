<?php

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});
Route::get('/projects', function () {
    return view('projects');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/detail', function () {
    return view('detail');
});
Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/admin/home', 'HomeController@index');
