
namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // عرض قائمة الرسائل (صندوق الوارد)
    public function index()
    {
        $messages = Message::where('receiver_id', auth()->id())
                           ->with('sender')
                           ->latest()
                           ->get();
        return view('messages.inbox', compact('messages'));
    }

    // إرسال رسالة جديدة
    public function store(Request $request)
    {
        $request->validate([
            'receiver_id' => 'required|exists:users,id',
            'content' => 'required|string|max:1000',
        ]);

        Message::create([
            'sender_id' => auth()->id(),
            'receiver_id' => $request->receiver_id,
            'content' => $request->content,
            'is_read' => false, // الحالة الافتراضية غير مقروءة
        ]);

        return back()->with('success', 'Message envoyé avec succès.');
    }
}
