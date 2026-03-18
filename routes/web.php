<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AuthController; // استدعاء المتحكم الجديد

// المسارات الأساسية
Route::get('/', function () {
    if (Session::has('locale')) { App::setLocale(Session::get('locale')); }
    return view('home');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
});

// --- السطر الأهم: استقبال بيانات التسجيل ---
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::get('/vendor/dashboard', function () {
    return view('vendor.dashboard');
})->middleware('auth'); // حماية اللوحة لتدخلها أنت فقط

// روابط الطوارئ (التي استخدمناها سابقاً)
Route::get('/clear', function() { Artisan::call('optimize:clear'); return "🏆 تم التطهير!"; });
Route::get('/force-build', function() {
    DB::statement('DROP SCHEMA public CASCADE');
    DB::statement('CREATE SCHEMA public');
    Artisan::call('migrate', ['--force' => true]);
    return "🏆 تم بناء القاعدة بنجاح!";
});
