<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain\Phone\Battery;
use App\Domain\Phone\Smartphone;
use App\Domain\Phone\Processor;
use App\Domain\Phone\Camera;
use App\Domain\Phone\Display;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $phone = new Smartphone(new Processor(), new Display(), new Camera(), new Battery());
        $this->app->instance('Phone', $phone);
    }
}
