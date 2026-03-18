<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AuthController;

// مصفوفة لتطبيق اللغة تلقائياً على أي صفحة يفتحها المستخدم
Route::middleware([function ($request, $next) {
    if (Session::has('locale')) {
        App::setLocale(Session::get('locale'));
    }
    return $next($request);
}])->group(function () {

    // 1. الصفحة الرئيسية
    Route::get('/', function () {
        return view('home');
    });

    // 2. صفحة تسجيل الدخول
    Route::get('/login', function () {
        return view('login');
    })->name('login');

    // 3. صفحة التسجيل (التي ظهر فيها الخطأ)
    Route::get('/register', function () {
        return view('register');
    });

    // 4. مساحة البائع (الداشبورد)
    Route::get('/vendor/dashboard', function () {
        return view('vendor.dashboard');
    })->middleware('auth');

});

// --- مسارات التحكم (خارج مجموعة اللغة لضمان السرعة) ---

// تغيير اللغة (هذا هو المحرك)
Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['ar', 'fr', 'en'])) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
});

// استقبال بيانات التسجيل
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

// روابط التطهير والبناء (للطوارئ فقط)
Route::get('/clear', function() { Artisan::call('optimize:clear'); return "🏆 تم التطهير!"; });
Route::get('/force-build', function() {
    DB::statement('DROP SCHEMA public CASCADE');
    DB::statement('CREATE SCHEMA public');
    Artisan::call('migrate', ['--force' => true]);
    return "🏆 تم بناء القاعدة بنجاح!";
});
