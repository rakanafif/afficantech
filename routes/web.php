
use App\Http\Controllers\AdminController;

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::post('/approve-book/{id}', [AdminController::class, 'approveBook'])->name('admin.approve.book');
});
