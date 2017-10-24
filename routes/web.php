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
// the following routes method manage all the register, login, and password routes
Auth::routes();


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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function()
{
    // /admin/dashboard
    Route::get('dashboard', 'HomeController@index');
	



    

    // admin/task
    Route::group(['prefix' => 'tasks/'], function()
    {
    	Route::get('', 'TaskController@index');
        
    });
    
    
});

