<?php

use Illuminate\Support\Facades\Route;

// الصفحة الرئيسية
Route::get('/', function () {
    return view('home');
});

// صفحة تسجيل الدخول
Route::get('/login', function () {
    return view('login');
});
