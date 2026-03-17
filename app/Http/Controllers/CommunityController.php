
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    // عرض جميع المنشورات في المجتمع
    public function index()
    {
        $posts = Post::with(['user', 'comments'])
                     ->where('is_approved', true) // نظام الإشراف لضمان نظافة المجتمع
                     ->latest()
                     ->get();
        return view('community.index', compact('posts'));
    }

    // إنشاء منشور جديد (نص، صورة، أو فيديو)
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
            'type' => 'required|in:news,work,educational,reviews', // الأقسام المطلوبة
            'media' => 'nullable|file|mimes:jpg,png,mp4|max:51200', // دعم الصور والفيديو
        ]);

        $post = new Post();
        $post->user_id = auth()->id();
        $post->content = $request->content;
        $post->type = $request->type;

        if ($request->hasFile('media')) {
            $post->media_path = $request->file('media')->store('community');
        }

        $post->save();
        return back()->with('success', 'Votre publication est en cours de révision.');
    }
}
