
Route::get('/run-migrate', function() {
    try {
        \Illuminate\Support\Facades\Artisan::call('optimize:clear');
        \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
        return "تم مسح الذاكرة القديمة وبناء الجداول بنجاح! قاعدة البيانات جاهزة 100% 🎉";
    } catch (\Exception $e) {
        return "حدث خطأ: " . $e->getMessage();
    }
});
