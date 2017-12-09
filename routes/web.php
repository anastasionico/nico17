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
    $skills = \App\Skill::all();
    $projects = \App\Project::limit(5)->orderBy('created_at', 'desc')->get();
    $posts = \App\Blogpost::limit(5)->where('status', 3)->orderBy('created_at', 'desc')->get();
    return view('home', compact('skills', 'projects', 'posts'));
});

Route::get('/projects', 'ProjectFrontendController@index');
Route::get('/projects/{param}', 'ProjectFrontendController@show');
Route::get('/blog', 'BlogFrontendController@index');
Route::get('/blog/{param}', 'BlogFrontendController@show');




Route::get('/detail', function () {
    return view('detail');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::post('/admin/contact', 'ContactController@store');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function()
{
    // /admin/dashboard
    Route::get('dashboard', 'HomeController@index')->name('dashboard');
    
    // /admin/contact
    Route::resource('contact', 'ContactController',['except' => 'store']);
    Route::post('contact/answer', 'ContactController@answer');    
    
    Route::get('/mail', function () {
        return new App\Mail\AnswerContact();
    });

    
    // admin/task
    Route::group(['prefix' => 'tasks/'], function()
    {
    	Route::get('', 'TaskController@index');
        Route::get('create', 'TaskController@create');
        Route::post('', 'TaskController@store');
        Route::get('/setDone/{task}', 'TaskController@setDone');
        Route::get('/delete/{task}', 'TaskController@destroy');
        Route::get('/edit/{task}', 'TaskController@edit');
        Route::post('/update/{task}', 'TaskController@update');
                
    });
    
    Route::group(['prefix' => 'about/'], function(){
        Route::resource('skills', 'SkillsController');
    });

    Route::group(['prefix' => 'projects/'], function(){
        Route::resource('projects', 'ProjectController');
        Route::resource('/projects/{project}/images', 'ProjectImageController');   
    });

    Route::group(['prefix' => 'blog/'], function(){
        Route::get('postlist', 'BlogpostController@postlist');
        Route::resource('supercategory', 'BlogsupercategoryController');
        Route::resource('/{supercategory}/category', 'BlogcategoryController');
        Route::resource('/{supercategory}/{category}/post', 'BlogpostController');
    });



    
    
});
