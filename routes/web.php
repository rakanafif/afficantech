<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    return view('welcome');
});

// مسار جديد لم يره المتصفح في حياته لكي لا يستخدم الذاكرة القديمة
Route::get('/run-final-setup', function() {
    try {
        Artisan::call('migrate', ['--force' => true]);
        return "🏆 مبروك يا راكان! لقد هزمنا المتصفح وقاعدة البيانات معاً! المنصة جاهزة 100% 🚀🎉";
    } catch (\Exception $e) {
        return "⛔ خطأ: " . $e->getMessage();
    }
});
