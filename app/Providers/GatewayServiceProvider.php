<?php

namespace App\Providers;

use App\Gateway\Gateway1;
use App\Gateway\Gateway2;
use App\Gateway\GatewayInterface;
use App\Gateway\NotFound;
use Illuminate\Support\ServiceProvider;

class GatewayServiceProvider extends ServiceProvider
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
        $this->app->bind(GatewayInterface::class, Gateway1::class);
        $this->app->bind(GatewayInterface::class, Gateway2::class);
        $this->app->bind(GatewayInterface::class, NotFound::class);
    }
}
