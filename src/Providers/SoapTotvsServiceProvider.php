<?php

namespace InnovationLatam\SoapTotvs\Providers;

use Illuminate\Support\ServiceProvider;

class SoapTotvsServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([__DIR__ . '/../../config/soap-totvs.php' => config_path('soap-totvs.php')], 'config');
    }

    public function register()
    {

    }
}