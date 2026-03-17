<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    return view('welcome');
});

// لاحظ أننا غيرنا الرابط بالكامل للهروب من الذاكرة القديمة
Route::get('/setup-db', function() {
    try {
        // 1. مسح ذاكرة السيرفر
        Artisan::call('optimize:clear');
        
        // 2. أمر SQL مباشر لمسح كل الطاولات من جذورها أياً كان اسمها
        $tables = DB::select('SELECT tablename FROM pg_catalog.pg_tables WHERE schemaname = \'public\'');
        foreach ($tables as $table) {
            DB::statement('DROP TABLE IF EXISTS "' . $table->tablename . '" CASCADE');
        }
        
        // 3. بناء الجداول الجديدة الخاصة بنا
        Artisan::call('migrate', ['--force' => true]);
        
        return "🎉 انتصار ساحق! تم محو الماضي بالكامل وبناء جداول Affican Digital بنجاح.";
    } catch (\Throwable $e) { 
        // استخدمنا Throwable لتلتقط أي خطأ مهما كان نوعه وتكتبه لنا بالعربية
        return "⛔ السيرفر يقول: " . $e->getMessage();
    }
});
