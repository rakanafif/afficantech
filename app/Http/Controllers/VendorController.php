
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Transaction;

class VendorController extends Controller
{
    public function index()
    {
        $vendorId = auth()->id();
        
        // جلب إحصائيات البائع
        $data = [
            'total_books' => Book::where('user_id', $vendorId)->count(),
            'published_books' => Book::where('user_id', $vendorId)->where('status', 'published')->count(),
            'total_sales' => Transaction::where('seller_id', $vendorId)->sum('total_amount'),
            'net_profit' => Transaction::where('seller_id', $vendorId)->sum('seller_net'), // الربح الصافي (80%)
        ];

        $my_books = Book::where('user_id', $vendorId)->latest()->get();

        return view('vendor.dashboard', compact('data', 'my_books'));
    }
}
