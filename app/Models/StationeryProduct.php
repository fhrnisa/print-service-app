<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StationeryProduct extends Model
{
    protected $fillable = ['name', 'description', 'price', 'stock', 'image', 'is_active'];

    public function orderItems()
    {
        return $this->morphMany(OrderItem::class, 'itemable');
    }
}