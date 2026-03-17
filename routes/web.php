
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;

// الصفحة الرئيسية (نتركها بسلام)
Route::get('/', function () {
    return "الموقع قيد التجهيز... الرجاء استخدام الرابط السري.";
});

// الجرافة الخاصة بك
Route::get('/rakan-win', function() {
    try {
        // 1. هدم الجداول بالترتيب الصحيح (عكس ترتيب البناء لتجنب قيود الحماية)
        Schema::dropIfExists('transactions');
        Schema::dropIfExists('books');
        Schema::dropIfExists('users');
        Schema::dropIfExists('migrations'); // نمسح ذاكرة لارافيل القديمة أيضاً
        
        // 2. البناء النظيف بعد تنظيف الأرضية
        Artisan::call('migrate', ['--force' => true]);
        
        return "🏆 انتصار تاريخي! تم تشغيل الجرافة بنجاح، ومسح الماضي، وبناء جداولك النظيفة 100%!";
    } catch (\Exception $e) {
        return "⛔ السيرفر يقول: " . $e->getMessage();
    }
});
