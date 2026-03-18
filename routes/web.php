<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

// الصفحة الرئيسية
Route::get('/', function () {
    return view('home');
});

// صفحة الدخول
Route::get('/login', function () {
    return view('login');
});

// صفحة التسجيل
Route::get('/register', function () {
    return view('register');
});

// محرك تغيير اللغة
Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['ar', 'fr', 'en'])) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
});
