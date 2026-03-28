<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // السماح بحفظ هذه البيانات في قاعدة البيانات
    protected $fillable = ['title', 'description', 'price', 'cover_image', 'user_id'];

    // ربط الكتاب بصاحبه (المؤلف)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
