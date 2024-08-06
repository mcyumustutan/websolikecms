<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\SmsListController;
use App\Http\Controllers\SolutionCenterController;
use App\Http\Middleware\SetLocale;
use App\Models\Page;
use Illuminate\Support\Facades\Route;


Route::get('/{lang?}', [PageController::class, 'index'])
    ->name('page.index')
    ->middleware(SetLocale::class);


Route::get('/test', function () {

    $pages = Page::select('id', 'lang', 'title', 'url')->get()->toArray();
    return response()->json($pages);
});

Route::get('/{lang?}/{params?}', [PageController::class, 'show'])
    ->name('page.view')
    ->where('params', '.*')
    ->middleware(SetLocale::class);

Route::name('solutioncenter.')
    ->prefix('/solutioncenter')
    ->group(function () {
        Route::post('/send', [SolutionCenterController::class, 'send'])->name('send');
    });

Route::name('smssignup.')
    ->prefix('/smssignup')
    ->group(function () {
        Route::post('/send', [SmsListController::class, 'send'])->name('send');
    });
