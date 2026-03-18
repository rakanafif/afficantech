<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;
// 1. الصفحة الرئيسية مع تفعيل اللغة
Route::get('/', function () {
    if (Session::has('locale')) {
        App::setLocale(Session::get('locale'));
    }
    return view('home');
});

// 2. صفحة تسجيل الدخول مع تفعيل اللغة
Route::get('/login', function () {
    if (Session::has('locale')) {
        App::setLocale(Session::get('locale'));
    }
    return view('login');
});

// 3. صفحة إنشاء حساب (سأبرمجها لك لاحقاً)
Route::get('/register', function () {
    if (Session::has('locale')) {
        App::setLocale(Session::get('locale'));
    }
    return view('register');
});

// 4. محرك تغيير اللغة (لحفظ اختيارك في الذاكرة)
Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['ar', 'fr', 'en'])) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
});

// 5. رابط تطهير السيرفر (المنقذ)
Route::get('/clear', function() {
    Artisan::call('optimize:clear');
    return "🏆 تم تطهير السيرفر بنجاح! الموقع عاد للعمل بجماله المعهود.";
});
// 6. مساحة البائع (لوحة التحكم)
Route::get('/vendor/dashboard', function () {
    if (Session::has('locale')) {
        App::setLocale(Session::get('locale'));
    }
    return view('vendor.dashboard');
});
   // 5. الضربة القاضية لبناء قاعدة البيانات (القوة القصوى)
Route::get('/force-build', function() {
    try {
        // مسح شامل لكل الجداول والبيانات بالقوة
        Artisan::call('db:wipe', ['--force' => true]);
        
        // بناء الجداول الجديدة من الصفر بنظافة
        Artisan::call('migrate', ['--force' => true]);
        
        return "🏆 انتصار ساحق يا راكان! القاعدة الآن نظيفة وتم بناؤها 100%.";
    } catch (\Exception $e) {
        return "خطأ تقني: " . $e->getMessage();
    }
});
     
        // إعادة البناء من الصفر بنظافة
        Artisan::call('migrate', ['--force' => true]);
        
        return "🏆 انتصار ساحق يا راكان! تم مسح القاعدة القديمة وبناؤها من الصفر بنجاح. المنصة الآن حية وجاهزة!";
    } catch (\Exception $e) {
        return "خطأ تقني: " . $e->getMessage();
    }
});

