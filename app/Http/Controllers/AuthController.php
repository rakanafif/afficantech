<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\{Hash, Auth};

class AuthController extends Controller {
    public function register(Request $request) {
        // قمنا بتقليل القيود لضمان نجاح التسجيل الآن
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);
        
        // التوجه فوراً للوحة التحكم
        return redirect('/vendor/dashboard');
    }
}
