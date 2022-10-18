<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ProviderName extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Service\ServiceInterface','App\Service\ProviderName');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        
    }
}
