<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = []; // هذه العلامة تفتح الأبواب لكل الحقول (حل سريع وآمن للتطوير)

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
