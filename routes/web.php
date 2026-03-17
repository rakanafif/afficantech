<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return "الموقع قيد التجهيز... الرجاء استخدام الرابط السري.";
});

// الرابط النهائي الذي يتجاوز كل الأخطاء
Route::get('/rakan-final', function() {
    try {
        // 1. تدمير كل شيء بالقوة الجبرية لتنظيف الأرضية
        $tables = ['transactions', 'books', 'users', 'sessions', 'password_reset_tokens', 'migrations', 'cache', 'cache_locks', 'jobs', 'job_batches', 'failed_jobs'];
        foreach ($tables as $table) {
            DB::statement("DROP TABLE IF EXISTS {$table} CASCADE");
        }

        // 2. بناء جدول المستخدمين (نحن نأمر قاعدة البيانات مباشرة هنا)
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone')->nullable(); // هنا رقم الهاتف الخاص بنا
            $table->string('password');
            $table->enum('role', ['reader', 'seller', 'admin'])->default('reader');
            $table->boolean('is_approved')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });

        // 3. بناء جدول الكتب
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('title');
            $table->text('description');
            $table->string('cover_image')->nullable();
            $table->string('file_path')->nullable();
            $table->decimal('price', 8, 2);
            $table->decimal('site_commission', 8, 2)->nullable();
            $table->decimal('seller_net', 8, 2)->nullable();
            $table->enum('status', ['pending', 'published', 'rejected'])->default('pending');
            $table->timestamps();
        });

        // 4. بناء جدول المعاملات
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('book_id')->constrained('books')->onDelete('cascade');
            $table->foreignId('seller_id')->constrained('users')->onDelete('cascade');
            $table->decimal('total_amount', 10, 2);
            $table->decimal('site_commission', 10, 2);
            $table->decimal('seller_net', 10, 2);
            $table->string('payment_status')->default('completed');
            $table->timestamps();
        });

        // 5. بناء جدول الجلسات (مهم جداً لنظام تسجيل الدخول)
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

        return "🏆 الضربة القاضية الحقيقية! تم تجاوز نظام لارافيل القديم وبناء جميع الجداول يدوياً بنجاح 100%! منصة Affican Digital جاهزة الآن.";
    } catch (\Exception $e) {
        return "⛔ السيرفر يقول: " . $e->getMessage();
    }
});
