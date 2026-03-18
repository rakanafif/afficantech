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

// 2. تغيير اللغة
Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['ar', 'fr', 'en'])) { Session::put('locale', $locale); }
    return redirect()->back();
});

// 3. مساحة البائع
Route::get('/vendor/dashboard', function () {
    if (Session::has('locale')) { App::setLocale(Session::get('locale')); }
    return view('vendor.dashboard');
});

// 4. الضربة القاضية (The Master Reset)
Route::get('/force-build', function() {
    try {
        // مسح قاعدة البيانات بالكامل بالقوة (مخصص لـ PostgreSQL)
        DB::statement('DROP SCHEMA public CASCADE; CREATE SCHEMA public;');
        
        // إعادة بناء الجداول بنظافة تامة
        Artisan::call('migrate', ['--force' => true]);
        
        return "🏆 انتصار تاريخي يا راكان! تم تصفير القاعدة وبناؤها بنجاح 100%.";
    } catch (\Exception $e) {
        return "حدث خطأ: " . $e->getMessage();
    }
});
