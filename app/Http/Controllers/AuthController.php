<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use Illuminate\Support\Facades\{Hash, Auth};

class AuthController extends Controller {

    // 1. وظيفة التسجيل (مع دخول تلقائي)
    public function register(Request $request) {
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);
        Auth::login($user);
        return redirect('/vendor/dashboard');
    }

    // 2. وظيفة الدخول
    public function login(Request $request) {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/vendor/dashboard');
        }
        return back()->with('error', 'بيانات الدخول غير صحيحة');
    }
    // 3. المحرك العالمي: حفظ ونشر الكتب الرقمية
    public function store_book(Request $request) {
        $path = null;
        
        // معالجة غلاف الكتاب إذا وجد
        if ($request->hasFile('cover')) {
            $path = $request->file('cover')->store('covers', 'public');
        }

        // حفظ بيانات الكتاب كما أدخلتها أنت في النموذج
        \App\Models\Book::create([
            'title'       => $request->title,       // سيأخذ "الهاوية" أو أي عنوان آخر
            'description' => $request->description, // سيأخذ الوصف الذي تضعه
            'price'       => $request->price ?? 0,  // السعر الذي تحدده
            'cover_path'  => $path,
            'user_id'     => Auth::id() ?? 1,       // ربط الكتاب بحسابك كـ مؤلف
        ]);

        // العودة للوحة التحكم مع رسالة نجاح عامة
        return redirect('/vendor/dashboard')->with('success', 'تم نشر عملك الإبداعي بنجاح!');
    }
