<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        // URL'den gelen opsiyonel locale parametresini al
        $locale = $request->route('lang');
        //dd($request->route('lang'));

        // Geçerli dil ayarlarını kontrol et ve ayarla
        if ($locale && in_array($locale, ['en', 'tr'])) { // İhtiyacınıza göre dilleri ekleyin
            App::setLocale($locale);
        } else {
            // Opsiyonel parametre yoksa varsayılan dili ayarla
            App::setLocale(config('app.locale'));
        }

        return $next($request);
    }
}
