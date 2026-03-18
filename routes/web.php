<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

// 1. الصفحة الرئيسية
Route::get('/', function () {
    if (Session::has('locale')) { App::setLocale(Session::get('locale')); }
    return view('home');
});

// 2. صفحة تسجيل الدخول (Login)
Route::get('/login', function () {
    if (Session::has('locale')) { App::setLocale(Session::get('locale')); }
    return view('login');
});

// 3. صفحة إنشاء حساب جديد (Register) - التي كانت مفقودة
Route::get('/register', function () {
    if (Session::has('locale')) { App::setLocale(Session::get('locale')); }
    return view('register');
});

// 4. تغيير اللغة
Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['ar', 'fr', 'en'])) { Session::put('locale', $locale); }
    return redirect()->back();
});

// 5. مساحة البائع (Dashboard)
Route::get('/vendor/dashboard', function () {
    if (Session::has('locale')) { App::setLocale(Session::get('locale')); }
    return view('vendor.dashboard');
});

// 6. زر تنظيف السيرفر
Route::get('/clear', function() {
    Artisan::call('optimize:clear');
    return "🏆 تم تطهير السيرفر بنجاح!";
});

// 7. زر بناء قاعدة البيانات (للطوارئ)
Route::get('/force-build', function() {
    try {
        DB::statement('DROP SCHEMA public CASCADE');
        DB::statement('CREATE SCHEMA public');
        Artisan::call('migrate', ['--force' => true]);
        return "🏆 القاعدة جاهزة والمسارات تعمل الآن!";
    } catch (\Exception $e) {
        return "حدث خطأ: " . $e->getMessage();
    }
});
