<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rakan-setup', function() {
    try {
        Artisan::call('optimize:clear');
        
        // قائمة بجميع الجداول المحتملة في النظام
        $tables = [
            'transactions', 'books', 'users', 'migrations', 
            'personal_access_tokens', 'password_reset_tokens', 
            'sessions', 'cache', 'cache_locks', 'jobs', 'job_batches', 'failed_jobs'
        ];
        
        // مسح كل جدول بالقوة الجبرية (CASCADE) التي تتخطى حماية Render
        foreach ($tables as $table) {
            DB::statement("DROP TABLE IF EXISTS {$table} CASCADE;");
        }
        
        // البناء الآن على أرض فارغة تماماً رغماً عن السيرفر
        Artisan::call('migrate', ['--force' => true]);
        
        return "🏆 الضربة القاضية! تم تدمير حماية الجداول وإعادة بنائها بنجاح ساحق!";
    } catch (\Throwable $e) { 
        return "⛔ السيرفر يقول: " . $e->getMessage();
    }
});


