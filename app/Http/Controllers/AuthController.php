<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use Illuminate\Support\Facades\{Hash, Auth};

class AuthController extends Controller {

    // 1. وظيفة التسجيل
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

    // 3. المحرك العالمي لحفظ أي كتاب
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

        return redirect('/vendor/dashboard')->with('success', 'تم النشر بنجاح');
    }
}
