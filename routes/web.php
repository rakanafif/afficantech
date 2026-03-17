// أمر مسح الذاكرة وبناء قاعدة البيانات
Route::get('/run-migrate', function() {
    try {
        // السطر السحري لمسح الذاكرة القديمة
        \Illuminate\Support\Facades\Artisan::call('optimize:clear'); 
        
        // بناء الجداول
        \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
        
        return "تم مسح الذاكرة القديمة وبناء الجداول بنجاح! قاعدة البيانات جاهزة 100% 🎉";
    } catch (\Exception $e) {
        return "حدث خطأ: " . $e->getMessage();
    }
});
