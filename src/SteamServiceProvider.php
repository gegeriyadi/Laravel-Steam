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
        include __DIR__.'/routes.php';
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
