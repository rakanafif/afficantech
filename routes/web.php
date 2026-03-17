<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;

// الصفحة الرئيسية (نتركها تعمل بسلام)
Route::get('/', function () {
    return view('welcome');
});

// الباب السري الخاص بك لتجهيز القاعدة (لم يره المتصفح من قبل)
Route::get('/rakan-setup', function() {
    try {
        // 1. مسح الذاكرة
        Artisan::call('optimize:clear');
        
        // 2. نسف القاعدة من جذورها
        DB::statement('DROP SCHEMA public CASCADE;');
        DB::statement('CREATE SCHEMA public;');
        
        // 3. بناء الجداول الجديدة
        Artisan::call('migrate', ['--force' => true]);
        
        return "🏆 تم النصر يا راكان! تم نسف قاعدة البيانات وإعادة بناء جداول Affican Digital بنجاح 100%!";
    } catch (\Throwable $e) { 
        return "⛔ خطأ: " . $e->getMessage();
    }
});
