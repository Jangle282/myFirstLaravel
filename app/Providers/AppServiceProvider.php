<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     * // here is where you can register classes into the 
     * // app service container
     * // can create own service providers when this gets bloated
     * // after creatign need to declare it under config app.php 
     * // provders help compoents register and stuff with the laravel framework.
     * // boot method once all components are registered.
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     * // laravel calls register method for each service and then 
     * // when it is loaded will call boot method for each one again 
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}