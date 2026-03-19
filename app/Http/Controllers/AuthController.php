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
}
