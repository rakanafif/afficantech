<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up(): void
    {
        // تنظيف الطاولة: مسح الجداول القديمة إن وجدت (بالترتيب الصحيح)
        Schema::dropIfExists('transactions');
        Schema::dropIfExists('books');
        Schema::dropIfExists('users');

        // 1. بناء جدول المستخدمين من جديد
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone')->nullable();
            $table->string('password');
            $table->enum('role', ['reader', 'seller', 'admin'])->default('reader');
            $table->boolean('is_approved')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });

        // 2. بناء جدول الكتب
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->text('description');
            $table->string('cover_image')->nullable();
            $table->string('file_path')->nullable();
            $table->decimal('price', 8, 2);
            $table->decimal('site_commission', 8, 2)->virtualAs('price * 0.20');
            $table->decimal('seller_net', 8, 2)->virtualAs('price * 0.80');
            $table->enum('status', ['pending', 'published', 'rejected'])->default('pending');
            $table->timestamps();
        });

        // 3. بناء جدول المعاملات
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('book_id')->constrained();
            $table->foreignId('seller_id')->constrained('users');
            $table->decimal('total_amount', 10, 2);
            $table->decimal('site_commission', 10, 2);
            $table->decimal('seller_net', 10, 2);
            $table->string('payment_status')->default('completed');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transactions');
        Schema::dropIfExists('books');
        Schema::dropIfExists('users');
    }
}
