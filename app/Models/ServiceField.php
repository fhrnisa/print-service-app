<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceField extends Model
{
    protected $fillable = ['service_id', 'field_name', 'field_type', 'options', 'is_required', 'sort_order'];
    protected $casts = ['options' => 'array'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
