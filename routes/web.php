<?php

use Illuminate\Support\Facades\Route;

// هذا السطر سيوجه الزوار فوراً لصفحة الهوم بالألوان الجديدة
Route::get('/', function () {
    return view('home'); // تأكد أن الملف اسمه home.blade.php داخل مجلد views
});
Route::get('/login', function () {
    return view('login');
});
