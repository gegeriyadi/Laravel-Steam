<?php

namespace Gegeriyadi\Steam;

use Illuminate\Support\ServiceProvider;

class SteamServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/steamapi.php' => config_path('steamapi.php')
        ], 'config');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('gegeriyadi-steam', function() {
            return new Steam();
        });
    }
}
