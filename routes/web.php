<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;

// دالة صغيرة لتطبيق اللغة المختارة
function applyLang() {
    if (Session::has('locale')) {
        App::setLocale(Session::get('locale'));
    }
}

// 1. الصفحة الرئيسية
Route::get('/', function () {
    applyLang();
    return view('home');
});

// 2. صفحة تسجيل الدخول
Route::get('/login', function () {
    applyLang();
    return view('login');
});

// 3. صفحة إنشاء حساب
Route::get('/register', function () {
    applyLang();
    return view('register');
});

// 4. محرك تغيير اللغة (يحفظ اختيارك)
Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['ar', 'fr', 'en'])) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
});

// 5. رابط تطهير السيرفر (المنقذ)
Route::get('/clear', function() {
    Artisan::call('optimize:clear');
    return "🏆 تم تطهير السيرفر بنجاح! جرب الآن تغيير اللغة من الهوم.";
});
