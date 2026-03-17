
namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // وظيفة رفع كتاب جديد من قبل البائع
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'required|mimes:pdf,doc,docx|max:20480', // الحد الأقصى 20 ميجا
            'price' => 'required|numeric|min:10', // الحد الأدنى 10$ كما في المواصفات
        ]);

        $book = new Book();
        $book->user_id = auth()->id();
        $book->title = $request->title;
        $book->price = $request->price;
        
        // احتساب العمولات تلقائياً قبل الحفظ
        $book->site_commission = $request->price * 0.20; // 20% للموقع
        $book->seller_net = $request->price * 0.80;    // 80% للبائع
        
        $book->file_path = $request->file('file')->store('books');
        $book->status = 'pending'; // ينتظر موافقة الإدارة
        $book->save();

        return back()->with('success', 'Livre téléchargé, en attente d'approbation.');
    }
}
