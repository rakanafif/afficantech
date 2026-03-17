
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PaymentController;

// 1. المسارات العامة (Public)
Route::get('/', function () { return view('home'); })->name('home');
Route::get('/terms', function () { return view('policies.terms'); })->name('terms');
Route::get('/privacy', function () { return view('policies.privacy'); })->name('privacy');

// 2. مسارات الأعضاء المسجلين (Authenticated Users)
Route::middleware(['auth'])->group(function () {
    
    // المجتمع (Community)
    Route::get('/community', [CommunityController::class, 'index'])->name('community.index');
    Route::post('/community/post', [CommunityController::class, 'store'])->name('community.store');

    // الرسائل الخاصة (Private Messages)
    Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
    Route::post('/messages/send', [MessageController::class, 'store'])->name('messages.store');

    // المكتبة والدفع (Library & Payments)
    Route::post('/book/upload', [BookController::class, 'store'])->name('book.store');
    Route::get('/pay/book/{id}', [PaymentController::class, 'processPayment'])->name('payment.process');
});

// 3. مسارات الإدارة المحمية (Admin Only)
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::post('/approve-book/{id}', [AdminController::class, 'approveBook'])->name('admin.approve.book');
});
// مسار استقبال رسائل واتساب (Webhook)
use App\Http\Controllers\WhatsAppController;
Route::post('/whatsapp/webhook', [WhatsAppController::class, 'handleWebhook']);
use App\Http\Controllers\SitemapController;
Route::get('/sitemap.xml', [SitemapController::class, 'index']);

