<?php

use App\Http\Controllers\Back\BackAboutController;
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Back\HomeBannerController;
use App\Http\Controllers\Back\RHController;
use App\Http\Controllers\Back\SubscribersController;
use App\Http\Controllers\Back\UserController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\PagesController;
use App\Http\Controllers\Front\ServiceController;
use App\Http\Controllers\Front\UserPanel;
use Illuminate\Support\Facades\Route;
use UniSharp\LaravelFilemanager\Lfm;

Route::get('/language/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
})->name('locale');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['auth'], 'as' => 'custom_namespace.'], function () {
    Lfm::class::routes();
});


Route::group(['middleware' => ['visitor','locale']], function () {
    Route::get('/', [HomeController::class, 'home'])->name('front.home');
    Route::get('/about', [AboutController::class, 'about'])->name('front.about');
    Route::get('/service', [ServiceController::class, 'service'])->name('front.service');
    Route::get('/pages', [PagesController::class, 'pages'])->name('front.pages');
    Route::get('/contact', [ContactController::class, 'contact'])->name('front.contact');
    Route::post('/subscribe', [SubscribersController::class, 'store'])->name('front.subscribe.store');
});

Auth::routes([
    'reset' => false,
    'verify' => false,
]);

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['auth'], 'as' => 'custom_namespace.'], function () {
    Lfm::routes();
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::group(['middleware' => ['admin']], function () {
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
        Route::get('/subscribers', [SubscribersController::class, 'index'])->name('back.subscribers');
        Route::delete('/subscribers/{id}', [SubscribersController::class, 'destroy'])->name('back.subscriber.destroy');
        Route::resource('home_banners',HomeBannerController::class);
        Route::get('/users', [UserController::class, 'index'])->name('back.users');
        Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('back.users.destroy');
        Route::get('/about' , [BackAboutController::class, 'index'])->name('back.about');
        Route::get('/rh',[RHController::class, 'index'])->name('back.rh');
    });
  // Route::get('/panel'[UserPanel::class],'index')->name('back.user.panel');
});


