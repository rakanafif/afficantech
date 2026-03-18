<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Artisan;

// 1. الصفحة الرئيسية
Route::get('/', function () {
    return view('home');
});

// 2. صفحة تسجيل الدخول
Route::get('/login', function () {
    return view('login');
});

// 3. صفحة إنشاء حساب
Route::get('/register', function () {
    return view('register');
});

// 4. محرك تغيير اللغة
Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['ar', 'fr', 'en'])) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
});

// 5. رابط تطهير السيرفر (المنقذ) - يجب أن يكون مستقلاً هنا
Route::get('/clear', function() {
    Artisan::call('optimize:clear');
    return "🏆 تم تطهير السيرفر بنجاح! Affican Digital جاهزة الآن.";
});
