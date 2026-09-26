<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'order_id', 'itemable_type', 'itemable_id', 'quantity',
        'details', 'file_path', 'estimated_price', 'confirmed_price',
    ];
    protected $casts = ['details' => 'array'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function itemable()
    {
        return $this->morphTo();
    }
}