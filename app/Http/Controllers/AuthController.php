<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // وظيفة تنفيذ عملية التسجيل
    public function register(Request $request)
    {
        // 1. التأكد من البيانات (Validation)
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // 2. إنشاء المستخدم الجديد في قاعدة البيانات
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // تشفير كلمة المرور فوراً
        ]);

        // 3. تسجيل الدخول تلقائياً بعد التسجيل
        Auth::login($user);

        // 4. التوجه إلى لوحة التحكم (الداشبورد)
        return redirect('/vendor/dashboard')->with('success', 'مرحباً بك في Affican Digital!');
    }
}

