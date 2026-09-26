<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['name', 'slug', 'type', 'base_price', 'is_active'];

    public function fields()
    {
        return $this->hasMany(ServiceField::class);
    }

    public function orderItems()
    {
        return $this->morphMany(OrderItem::class, 'itemable');
    }
}
