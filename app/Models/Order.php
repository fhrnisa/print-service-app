<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_code', 'customer_name', 'customer_phone', 'channel',
        'status', 'total_price', 'confirmed_by_user_id', 'confirmed_at',
    ];
    protected $casts = ['confirmed_at' => 'datetime'];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function confirmedBy()
    {
        return $this->belongsTo(User::class, 'confirmed_by_user_id');
    }
}