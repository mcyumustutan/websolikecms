<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use Filament\Facades\Filament;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Filament login rotasına rate limiting ekle
        Filament::serving(function () {
            Route::middleware(['throttle:login'])->group(function () {
                Route::post('/filament/login', [\Filament\Http\Controllers\Auth\LoginController::class, 'store']);
            });
        });

        // Rate Limiting tanımlaması
        RateLimiter::for('login', function ($request) {
            return Limit::perMinute(60)->by($request->ip());
        });
    }
}
