<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogCategoryController;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.dashboard');
    })->name('dashboard');

    // Route::middleware('contributor')->group(function () {
        Route::resources([
            'blog-categories' => App\Http\Controllers\Admin\BlogCategoryController::class,
        ]);
    // });

    //blog
    Route::controller(App\Http\Controllers\Admin\BlogController::class)->middleware('contributor')->prefix('blogs')->name('blogs.')->group(function () {
        Route::post('/', 'store')->name('store');
        Route::get('/create', 'create')->name('create');
        Route::put('/{blog}', 'update')->name('update');
        Route::delete('/{blog}', 'destroy')->name('destroy');
        Route::get('/{blog}/edit', 'edit')->name('edit');
        Route::withoutMiddleware('contributor')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/{blog}', 'show')->name('show');
        });
    });

    // users
    Route::controller(App\Http\Controllers\Admin\UserController::class)->middleware('admin')->prefix('users')->name('users.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{user}', 'show')->name('show');
        Route::get('/{user}/edit', 'edit')->name('edit');
        Route::put('/{user}', 'update')->name('update');
        Route::delete('/{user:id}', 'destroy')->name('destroy');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
