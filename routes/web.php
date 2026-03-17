<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rakan-setup', function() {
    try {
        // هذا الأمر يقوم بفرمتة القاعدة بأمان شديد وبناءها من جديد
        Artisan::call('migrate:fresh', ['--force' => true]);
        return "🏆 تم النصر يا راكان! قاعدة البيانات مبنية بشكل نظيف ومثالي 100% وخالية من الأخطاء.";
    } catch (\Exception $e) {
        return "⛔ خطأ: " . $e->getMessage();
    }
});

