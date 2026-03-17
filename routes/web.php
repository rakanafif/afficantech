<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// الزر النووي: تدمير شامل ثم بناء
Route::get('/run-migrate', function() {
    try {
        // 1. مسح القاعدة بالكامل من جذورها بدون رحمة
        \Illuminate\Support\Facades\Artisan::call('db:wipe', ['--force' => true]);
        
        // 2. بناء الجداول النظيفة الخاصة بمنصتك
        \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
        
        return "تم تدمير القاعدة القديمة بالكامل وبناء جداول Affican Digital بنجاح 100%! 🎉";
    } catch (\Exception $e) {
        return "حدث خطأ: " . $e->getMessage();
    }
});
