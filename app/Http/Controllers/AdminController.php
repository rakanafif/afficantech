
<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Post;
use App\Models\Transaction;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // عرض إحصائيات المنصة وإدارة المحتوى المعلق
        $pending_books = Book::where('status', 'pending')->get();
        $total_users = User::count();
        $site_revenue = Transaction::sum('site_commission'); // مجموع عمولة الموقع (20%)

        return view('admin.dashboard', compact('pending_books', 'total_users', 'site_revenue'));
    }

    public function approveBook($id)
    {
        $book = Book::findOrFail($id);
        $book->update(['status' => 'published']);
        return back()->with('success', 'Livre approuvé avec succès.');
    }
}
