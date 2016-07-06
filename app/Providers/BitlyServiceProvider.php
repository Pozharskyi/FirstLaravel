<?php


namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use Jelovac\Bitly4laravel\Bitly4laravel;
use Vinelab\UrlShortener\Shorten;

class BitlyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
//        $this->app->bind('Shorten', Shorten::class);
        $this->app->bind('Bitly', Bitly4laravel::class);
    }
}