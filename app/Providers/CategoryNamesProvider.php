<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;

class CategoryNamesProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function($view){
            $view->with('categoryNames', Category::all());
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
