<?php

namespace App\Providers;

use App\Services\TheDogApiService;
use Illuminate\Support\ServiceProvider;

class TheDogApiServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(TheDogApiService::class, function ($app) {
            return new TheDogApiService();
        });
    }
}
