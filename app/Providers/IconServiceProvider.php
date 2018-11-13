<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helpers\ServiceHelpers\IconServiceHelper;

class IconServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('dashboard.icons',function($app) {
            return new IconServiceHelper();
        });
    }
}
