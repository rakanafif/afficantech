<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use App\Models\Service;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller {

    // 1. وظيفة التسجيل (المحرك الحقيقي والآمن)
    public function register(Request $request) {
        // التحقق من صحة البيانات (منع الحسابات الوهمية أو المكررة)
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // إنشاء المستخدم في قاعدة البيانات وتشفير كلمة المرور
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // تسجيل الدخول فوراً للمنصة بعد إنشاء الحساب
        Auth::login($user);

        // تحويل المستخدم إلى لوحة التحكم الخاصة به
        return redirect('/vendor/dashboard')->with('success', 'تم إنشاء حسابك بنجاح!');
    }

    // 2. وظيفة الدخول
    public function login(Request $request) {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/vendor/dashboard');
        }
        return back()->with('error', 'بيانات الدخول غير صحيحة');
    }

    // 3. محرك رفع الكتب
    public function store_book(Request $request) {
        $path = null;
        if ($request->hasFile('cover')) {
            $path = $request->file('cover')->store('covers', 'public');
        }

        Book::create([
            'title'       => $request->title,
            'description' => $request->description,
            'price'       => $request->price ?? 0,
            'cover_path'  => $path,
            'user_id'     => Auth::id(),
        ]);

        return redirect('/vendor/dashboard')->with('success', 'تم نشر الكتاب بنجاح');
    }

    // 4. محرك رفع الخدمات مع الفيديو والصور
    public function store_service(Request $request) {
        $path = null;
        $type = 'image'; 

        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $extension = strtolower($file->getClientOriginalExtension());
            
            // تحديد إذا كان الملف فيديو أو صورة
            if (in_array($extension, ['mp4', 'mov', 'avi', 'wmv'])) {
                $type = 'video';
            }

            $path = $file->store('services', 'public');
        }

        Service::create([
            'title'       => $request->title,
            'description' => $request->description,
            'media_path'  => $path,
            'media_type'  => $type,
            'user_id'     => Auth::id(),
        ]);

        return redirect('/vendor/dashboard')->with('success', 'تم إضافة الخدمة والوسائط بنجاح');
    }
}
