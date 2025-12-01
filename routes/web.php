<?php
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Back\HomeBannerController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\PagesController;
use App\Http\Controllers\Front\ServiceController;
use App\Http\Controllers\Front\SubscribeController;
use Illuminate\Support\Facades\Route;

Route::get('/language/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
})->name('locale');

Route::group(['middleware' => ['visitor','locale']], function () {
    Route::get('/', [HomeController::class, 'home'])->name('front.home');
    Route::get('/about', [AboutController::class, 'about'])->name('front.about');
    Route::get('/service', [ServiceController::class, 'service'])->name('front.service');
    Route::get('/pages', [PagesController::class, 'pages'])->name('front.pages');
    Route::get('/contact', [ContactController::class, 'contact'])->name('front.contact');
    Route::post('/subscribe', [SubscribeController::class, 'store'])->name('subscribe.store');
});

Auth::routes([
    'reset' => false,
    'verify' => false,
]);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('/home_banners', HomeBannerController::class, );
    Route::get('/subscribes', [SubscribeController::class, 'index'])->name('subscribes');
});


//Route::get('/2fa/setup', [TwoFAController::class, 'show2FASetup'])->name('2fa.setup');
//Route::post('/2fa/enable', [TwoFAController::class, 'enable2FA'])->name('2fa.enable');
//Route::post('/2fa/disable', [TwoFAController::class, 'disable2FA'])->name('2fa.disable');

