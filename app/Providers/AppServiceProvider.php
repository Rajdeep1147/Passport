<?php

namespace App\Providers;
use App\Payment\BankPayment;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      
      $this->app->singleton(BankPayment::class,function(){
            return new BankPayment('Usd');
       });
      
      
      
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
