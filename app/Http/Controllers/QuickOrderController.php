<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class QuickOrderController extends Controller
{
    public function create()
    {
        return view('pages.orders.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_phone' => 'nullable|string|max:20',
            'file' => 'required|file|mimes:pdf,jpg,jpeg,png,doc,docx|max:5120',
        ]);

        $order = Order::create([
            'order_code' => 'ORD-' . now()->format('ymd') . '-' . strtoupper(Str::random(4)),
            'customer_name' => $validated['customer_name'],
            'customer_phone' => $validated['customer_phone'] ?? '-',
            'channel' => 'in_store_qr',
            'status' => 'pending',
        ]);

        $path = $request->file('file')->store('order-uploads', 'public');

        $order->items()->create([
            'itemable_type' => null,
            'itemable_id' => null,
            'quantity' => 1,
            'details' => ['files' => [$path]],
        ]);

        return redirect()
            ->route('pages.orders.create')
            ->with('success', "Pesanan berhasil dikirim. Tunjukkan kode ini ke kasir: {$order->order_code}");
    }
}