<?php

namespace App\Providers;

use App\Services\TheCatApiService;
use Illuminate\Support\ServiceProvider;

class TheCatApiServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(TheCatApiService::class, function ($app) {
            return new TheCatApiService();
        });
    }
}
