<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\URL;

// الرجوع للوضع الآمن الذي يتجاوز فحص Render
if (config('app.env') !== 'local') {
    URL::forceScheme('https');
}

// ----------------------------------------

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

// 4. لوحة تحكم البائع (محمية)
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

// --- روابط الطوارئ والتنظيف ---
Route::get('/clear', function() { Artisan::call('optimize:clear'); return "🏆 الكاش فارغ"; });
Route::get('/force-build', function () {
    DB::statement('DROP SCHEMA public CASCADE');
    DB::statement('CREATE SCHEMA public');
    Artisan::call('migrate', ['--force' => true]);
    return '🏆 تم بناء قاعدة البيانات';
});

// استقبال بيانات الدخول
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// صفحة رفع كتاب جديد
Route::get('/vendor/books/create', function () {
    set_my_locale();
    return view('vendor.books.create');
})->name('books.create');

// مسار استقبال بيانات الكتاب وحفظها
Route::post('/vendor/books/store', [AuthController::class, 'store_book'])->name('books.store');

// مسار تنظيف الروابط ومسار الصور
Route::get('/setup-storage', function () {
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
    \Illuminate\Support\Facades\Artisan::call('storage:link');
    return '✅ تم تنظيف النظام وربط مسار الصور بنجاح! يمكنك الآن رؤية أغلفة الكتب.';
});

   
