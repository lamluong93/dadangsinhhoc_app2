<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;

Route::prefix('web')->group(function(){
    Route::get('/', HomeController::class)->name('web.home');
});

Route::prefix('search-species')->group(function(){
    Route::get('/', [SearchController::class,'species'])->name('search-species');
    Route::post('/search-post-species', [SearchController::class,'searchSpecies'])->name('search-species-post');
});

Route::prefix('protectedarea')->group(function(){
    Route::get('/', [SearchController::class,'protectedarea'])->name('protectedarea');
    Route::post('/search-post', [SearchController::class, 'search'])->name('protectedarea-search');
});