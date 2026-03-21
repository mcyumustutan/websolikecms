<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectSpamUrls
{
    public function handle(Request $request, Closure $next)
    {
        // 1. Durum: Sorgu dizisinde varsa (index.php?shop/items...)
        // 2. Durum: URL yolunda (path) varsa (/shop/items/...)
        // 3. Durum: 'burgh' veya 'subsizar' gibi bilinen spam imzaları varsa
        
        $fullUrl = $request->fullUrl();
        $spamKeywords = ['shop/items', 'shop', 'items', 'burgh', 'subsizar'];

        foreach ($spamKeywords as $keyword) {
            if (str_contains($fullUrl, $keyword)) {
                // Google'a bu sayfanın kalıcı olarak silindiğini bildir
                abort(410, 'Gone');
            }
        }

        return $next($request);
    }
}