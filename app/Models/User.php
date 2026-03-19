<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // هذه المصفوفة تسمح بحفظ البيانات في القاعدة
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // حماية كلمة المرور
    protected $hidden = [
        'password',
        'remember_token',
    ];
}

