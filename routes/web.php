<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// الروابط الأساسية
Route::get('/', function () { return view('home'); });
Route::get('/login', function () { return view('auth.login'); })->name('login');
Route::get('/register', function () { return view('auth.register'); });

// روابط معالجة البيانات (AuthController)
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// مسار رفع الخدمات الجديدة
Route::post('/services/store', [AuthController::class, 'store_service'])->name('services.store');

// رابط لوحة التحكم (يجب أن يكون مسجلاً للدخول)
Route::get('/vendor/dashboard', function () {
    return view('vendor.dashboard');
})->middleware('auth');

// مسار عرض تفاصيل الخدمة الفردية للزوار
Route::get('/service/{id}', function ($id) {
    $service = \App\Models\Service::findOrFail($id);
    return view('service', compact('service'));
})->name('service.show');

// رابط تغيير اللغة
Route::get('/lang/{locale}', function ($locale) {
    session(['locale' => $locale]);
    return redirect()->back();
});
