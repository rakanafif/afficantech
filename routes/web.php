<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AuthController;

// وظيفة صغيرة لتطبيق اللغة المختارة
function set_my_locale() {
    if (Session::has('locale')) {
        App::setLocale(Session::get('locale'));
    }
}

// 1. الصفحة الرئيسية
Route::get('/', function () {
    set_my_locale();
    return view('home');
});

// 2. صفحة تسجيل الدخول
Route::get('/login', function () {
    set_my_locale();
    return view('login');
})->name('login');

// 3. صفحة التسجيل
Route::get('/register', function () {
    set_my_locale();
    return view('register');
});

// 4. مساحة البائع (الداشبورد)
Route::get('/vendor/dashboard', function () {
    set_my_locale();
    return view('vendor.dashboard');
})->middleware('auth');

// 5. تغيير اللغة (المحرك)
Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['ar', 'fr', 'en'])) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
});

// 6. استقبال بيانات التسجيل (POST)
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

// --- روابط الطوارئ ---
Route::get('/clear', function() { Artisan::call('optimize:clear'); return "🏆 تم التطهير!"; });
Route::get('/force-build', function() {
    DB::statement('DROP SCHEMA public CASCADE');
    DB::statement('CREATE SCHEMA public');
    Artisan::call('migrate', ['--force' => true]);
    return "🏆 تم بناء القاعدة بنجاح!";
});
