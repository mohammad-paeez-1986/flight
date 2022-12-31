<?php

namespace App\Providers;

use App\Factories\FlightCompanyFactory;
use App\Interfaces\FlightCompanyInterface;
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
        $this->app->bind(FlightCompanyInterface::class, function() {
            return FlightCompanyFactory::make(request()->company);
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
