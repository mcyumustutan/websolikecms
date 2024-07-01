<?php

use App\Http\Controllers\PageController;
use App\Http\Middleware\SetLocale;
use App\Models\Page;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


Route::get('/linkstorage', function () {
    try {
        Artisan::call('storage:link');
    } catch (Exception $e) {
        dd($e);
    }
});


Route::get('/{lang?}', [PageController::class, 'index'])
    ->name('page.index')
    ->middleware(SetLocale::class);

Route::get('/test', function () {

    $pages = Page::select('id', 'lang', 'title', 'url')->get()->toArray();
    return response()->json($pages);
});


// Route::get('/{lang}/{page?}', function ($page) {
//     return response()->json($page);
// })->name('page.view');

Route::get('/{lang?}/{params?}', [PageController::class, 'show'])
    ->name('page.view')
    ->where('params', '.*')
    ->middleware(SetLocale::class);
