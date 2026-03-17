<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['book_id', 'seller_id', 'total_amount', 'site_commission', 'seller_net', 'payment_status'];

    public function book() {
        return $this->belongsTo(Book::class);
    }

    public function seller() {
        return $this->belongsTo(User::class, 'seller_id');
    }
}

