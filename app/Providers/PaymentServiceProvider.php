<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\PaymentGateway\payment;

class PaymentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('payment',function(){
            return new Payment();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
