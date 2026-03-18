<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;

// --- الغلاف الذكي للغات (هذا هو المحرك الذي سيجعل الموقع يتذكر لغتك) ---
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
    });

    // 3. صفحة إنشاء حساب (سأقوم ببرمجتها لك لاحقاً)
    Route::get('/register', function () {
        return view('register');
    });

});
// --- نهاية الغلاف الذكي ---

// محرك تغيير اللغة (لحفظ الاختيار في الذاكرة)
Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['ar', 'fr', 'en'])) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
});

// رابط تطهير السيرفر (المنقذ)
Route::get('/clear', function() {
    Artisan::call('optimize:clear');
    return "🏆 تم تطهير السيرفر بنجاح! جرب الآن تغيير اللغة من الهوم.";
});
