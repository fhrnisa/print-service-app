<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;
use App\Models\Service;
use App\Models\StationeryProduct;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Relation::morphMap([
            'service' => Service::class,
            'stationery_product' => StationeryProduct::class,
        ]);
    }
}