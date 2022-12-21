<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogCategoryController;
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
    return view('pages.dashboard');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resources([
        'blogs' => App\Http\Controllers\Admin\BlogController::class,
        'blog-categories' => App\Http\Controllers\Admin\BlogCategoryController::class,
    ]);
});
