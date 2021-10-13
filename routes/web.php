<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('web.home');
});

// Route::get('/slug', function () {
//     echo Str::of('THành phố Hà   Nội')->slug('-');
//     echo Str::slug('THành phố Hà   Nội');
// });

Route::get('search-species', function () {
    return redirect()->route('search-species');
});
Route::get('protectedarea', function () {
    return redirect()->route('protectedarea');
});

Route::get('dashboard', function () {
    $title = 'Quản trị hệ thống';
    $nav = 'Bảng điều khiển';
    $type = 0;
    return view('administrator.dashboard', compact(['title', 'nav', 'type']));
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
require __DIR__.'/home.php';
require __DIR__.'/dadangsinhhoctphanoi.php';
require __DIR__.'/import_excel.php';
