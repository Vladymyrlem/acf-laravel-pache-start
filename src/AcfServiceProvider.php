<?php

namespace Vendor\AcfLaravel;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AcfServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'acf');

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        Blade::component('acf::components.fields', 'custom-fields');
    }

    public function register()
    {
        //
    }
}