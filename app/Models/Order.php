<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    protected $fillable = [
        'order_code', 'customer_name', 'customer_phone', 'channel',
        'status', 'total_price', 'confirmed_by_user_id', 'confirmed_at',
    ];

    protected $casts = [
        'confirmed_at' => 'datetime',
    ];

    protected static function booted(): void
    {
        static::creating(function (self $order) {
            if (empty($order->order_code)) {
                // panggil DI DALAM closure, pakai $order yang valid
                $order->order_code = self::generateOrderCode($order->channel ?? 'online');
            }
        });
    }

    public static function generateOrderCode(string $channel = 'online'): string
    {
        $prefix = $channel === 'in_store_qr' ? 'QR' : 'ORD';
        $date   = now()->format('dmY');

        return DB::transaction(function () use ($prefix, $date) {
            $last = self::where('order_code', 'like', "{$prefix}-{$date}-%")
                ->lockForUpdate()
                ->orderByDesc('order_code')
                ->first();

            $next = $last
                ? ((int) substr($last->order_code, -3)) + 1
                : 1;

            return sprintf('%s-%s-%03d', $prefix, $date, $next);
        });
    }

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