<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.admin.sidebar' , function( $view ){
            $view->with('tasksCount', \App\Task::getAll());
        });
        view()->composer('layouts.admin.sidebar' , function( $view ){
            $view->with('blogpostsPublished', \App\Blogpost::getPostsPublished());
        });
        view()->composer('layouts.admin.header' , function( $view ){
            $view->with('blogpostsPublished', \App\Blogpost::getPostsPublished());
        });
        view()->composer('layouts.admin.sidebar' , function( $view ){
            $view->with('blogpostsOutstanding', \App\Blogpost::getPostsOutstanding());
        });
        view()->composer('layouts.admin.header' , function( $view ){
            $view->with('blogpostsOutstanding', \App\Blogpost::getPostsOutstanding());
        });
        view()->composer('layouts.admin.header' , function( $view ){
            $view->with('inboxOutstanding', \App\Contact::getInboxOutstanding());
        });

        view()->composer('layouts.footer' , function( $view ){
            $view->with('blogpostsPublished', \App\Blogpost::getPostsPublished());
        });

        if(config('app.env') === 'production') {
            \URL::forceScheme('https');
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Libraries\Gtmetrix', function ($app) {
            return new \App\Libraries\Gtmetrix("nico@anastasionico.uk", "5b129a54a7f0cc1bd4652390438d5401");
        });

    }
}
