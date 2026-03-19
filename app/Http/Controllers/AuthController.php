<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\{Hash, Auth};

class AuthController extends Controller {
    // وظيفة التسجيل
    public function register(Request $request) {
        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            Auth::login($user);
            return redirect('/vendor/dashboard');
        } catch (\Exception $e) {
            return "هذا الحساب موجود بالفعل، يرجى تسجيل الدخول.";
        }
    }

    // وظيفة الدخول (نحتاجها الآن)
    public function login(Request $request) {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/vendor/dashboard');
        }
        return back()->with('error', 'بيانات الدخول غير صحيحة');
    }
    public function store_book(\Illuminate\Http\Request $request) {
    // 1. استقبال وحفظ صورة الغلاف (إذا وجدت)
    $path = null;
    if ($request->hasFile('cover')) {
        $path = $request->file('cover')->store('covers', 'public');
    }

    // 2. حفظ بيانات الكتاب في القاعدة
    \App\Models\Book::create([
        'title' => $request->title,
        'description' => $request->description,
        'price' => $request->price ?? 0,
        'cover_path' => $path,
        'user_id' => \Illuminate\Support\Facades\Auth::id() ?? 1 // مؤقتاً 1 حتى نعيد الحماية
    ]);

    return redirect('/vendor/dashboard')->with('success', 'تم نشر كتابك بنجاح!');
    }
    public function store_book(\Illuminate\Http\Request $request) {
    // 1. استقبال وحفظ صورة الغلاف (إذا وجدت)
    $path = null;
    if ($request->hasFile('cover')) {
        $path = $request->file('cover')->store('covers', 'public');
    }

    // 2. حفظ بيانات الكتاب في القاعدة
    \App\Models\Book::create([
        'title' => $request->title,
        'description' => $request->description,
        'price' => $request->price ?? 0,
        'cover_path' => $path,
        'user_id' => \Illuminate\Support\Facades\Auth::id() ?? 1 // مؤقتاً 1 حتى نعيد الحماية
    ]);

    return redirect('/vendor/dashboard')->with('success', 'تم نشر كتابك بنجاح!');
}

}
