<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\MyFacade\CustomFacade;

class FacadeProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('customfacade',function(){
            return new CustomFacade();
        });
    }
}
