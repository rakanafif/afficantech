
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    return view('welcome');
});

// سلاح القوة الغاشمة: مسح الذاكرة، التدمير المباشر، ثم البناء
Route::get('/run-migrate', function() {
    try {
        // 1. صفع السيرفر لمسح ذاكرته العالقة فوراً
        Artisan::call('optimize:clear');
        Artisan::call('route:clear');
        Artisan::call('cache:clear');
        
        // 2. استخدام أوامر SQL مباشرة لتدمير الجداول القديمة من جذورها بدون نقاش
        $tables = ['users', 'books', 'transactions', 'migrations', 'personal_access_tokens', 'password_reset_tokens', 'sessions', 'cache', 'cache_locks', 'jobs', 'job_batches', 'failed_jobs'];
        foreach($tables as $table) {
            DB::statement("DROP TABLE IF EXISTS {$table} CASCADE;");
        }
        
        // 3. البناء على أرض نظيفة تماماً
        Artisan::call('migrate', ['--force' => true]);
        
        return "أخيراً! تم مسح الذاكرة العالقة، تدمير الجداول المتمردة، وبناء القاعدة بنجاح ساحق! 🏁🎉";
    } catch (\Exception $e) {
        return "حدث خطأ: " . $e->getMessage();
    }
});
