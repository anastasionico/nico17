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
    $projects = \App\Project::select('img','name','excerpt','seo','ecommerce','responsive','social_marketing','host_support','cta_link','slug')->limit(5)->orderBy('created_at', 'desc')->get();
    $projectsCount = \App\Project::count();
    // $posts = \App\Blogpost::limit(5)->where('status', 3)->orderBy('created_at', 'desc')->get();
    $posts = \App\Blogpost::select('img','category_id','published_at','name','excerpt','cta_link','cta_text','slug','minutes_to_read')->limit(5)->where('status', 3)->orderBy('published_at', 'desc')->get();

    $postsCount = \App\Blogpost::count();
    return view('home', compact('skills', 'projects', 'projectsCount', 'posts', 'postsCount'));
});
Route::get('/projects', 'ProjectFrontendController@index');
Route::get('/projects/{param}', 'ProjectFrontendController@show');
Route::get('/blog', 'BlogFrontendController@index');
Route::get('/blog/{param}', 'BlogFrontendController@show');
Route::get('/blogCat/{param}', 'BlogFrontendController@filterCategory');

Route::get('/detail', function () {
    return view('detail');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::group(['prefix' => "/newsletter"], function(){
    Route::post('', 'NewsLetterController@subscribe');
}); 
Route::get('community', function () {
    return redirect('https://www.facebook.com/anastasionico.uk');
});
Route::get('/web-development-resources', function () {
    return view('web-development-resources');
});




// ADMIN
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

    Route::get('gtmetrix', 'GtmetrixController@index');
    Route::post('gtmetrix', 'GtmetrixController@maketest');

    // admin/task
    Route::group(['prefix' => 'newsletter/'], function()
    {
        Route::get('', 'NewsLetterController@getMembers');
        Route::get('issubscribed', 'NewsLetterController@isSubscribed');
        Route::get('unsubscribe/{email}', 'NewsLetterController@unsubscribe');
    });
});


// LANDING PAGE
Route::get('/freelance-web-developer-london', function () {
    return view('freelance-web-developer-london');
});
Route::get('/web-developer-upwork', function () {
    return view('web-developer-upwork');
});
Route::get('/learn-php', function () {
    return view('learn-php');
});
Route::get('/web-designer-london', function () {
    return view('landingPage/web-designer-london');
});
Route::get('/web-design-london', function () {
    return view('landingPage/web-design-london');
});
Route::get('/web-design-haringey', function () {
    return view('landingPage/web-design-haringey');
});
Route::get('/web-design-camden', function () {
    return view('landingPage/web-design-camden');
});
Route::get('/creative-web-design-london', function () {
    return view('landingPage/creative-web-design-london');
});
