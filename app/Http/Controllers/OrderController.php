<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // =============================
        // 1. Validasi dasar (semua flow)
        // =============================
        $baseRules = [
            'location' => 'required|in:store,outside',
            'name'     => 'required|string|max:255',
            'file'     => 'required|file|mimes:pdf,jpg,jpeg,png,doc,docx|max:102400',
        ];

        // phone wajib hanya di flow "outside" (di toko opsional)
        if ($request->location === 'outside') {
            $baseRules['phone'] = 'required|string|max:20';
        } else {
            $baseRules['phone'] = 'nullable|string|max:20';
        }

        // =============================
        // 2. Validasi khusus flow "outside"
        // =============================
        $outsideRules = [];
        if ($request->location === 'outside') {
            $outsideRules = [
                'service'         => 'required|in:print,typing,photo',
                'paper_size'      => 'required|string',
                'paper_type'      => 'required|string',
                'quantity'        => 'required|integer|min:1',
                'color'           => 'required|in:black_white,color',
                'notes'           => 'nullable|string',
                'pickup_option'   => 'required|in:today,tomorrow,custom',
                'pickup_time'     => 'required|string',
                'pickup_date'     => 'required_if:pickup_option,custom|nullable|date',
            ];
        }

        $validated = $request->validate(array_merge($baseRules, $outsideRules));

        // =============================
        // 3. Simpan file upload
        // =============================
        $filePath = null;
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('order-uploads', 'public');
        }

        // =============================
        // 4. Tentukan channel & data
        // =============================
        $channel = $request->location === 'store' ? 'walk_in' : 'online';

        // Gabungkan info layanan (khusus outside)
        $details = [
            'file_path' => $filePath,
        ];

        if ($request->location === 'outside') {
            $details = array_merge($details, [
                'service'       => $validated['service'],
                'paper_size'    => $validated['paper_size'],
                'paper_type'    => $validated['paper_type'],
                'quantity'      => $validated['quantity'],
                'color'         => $validated['color'],
                'notes'         => $validated['notes'] ?? null,
                'pickup_option' => $validated['pickup_option'],
                'pickup_time'   => $validated['pickup_time'],
                'pickup_date'   => $validated['pickup_date'] ?? null,
            ]);
        }

        // =============================
        // 5. Buat order
        // =============================
        $order = Order::create([
            'order_code'     => 'ORD-' . now()->format('ymd') . '-' . strtoupper(Str::random(4)),
            'customer_name'  => $validated['name'],
            'customer_phone' => $validated['phone'] ?? null,
            'channel'        => $channel,
            'status'         => 'pending',
        ]);

        $order->items()->create([
            'itemable_type' => 'service',
            'itemable_id'   => null, // tidak ada service_id di form baru
            'quantity'      => $validated['quantity'] ?? 1,
            'details'       => $details,
        ]);

        // =============================
        // 6. Redirect ke success page
        // =============================
        if ($request->location === 'store') {
            return redirect()->route('pages.orders.success.store');
        }

        return redirect()->route('pages.orders.success.outside', [
            'order' => $order->order_code,
        ]);
    }

    public function choose()
    {
        return view('pages.orders.choose');
    }

    public function form(Request $request)
    {
        $location = $request->location;

        if (!in_array($location, ['store', 'outside'])) {
            return redirect()->route('pages.orders.choose');
        }

        return view('pages.orders.create', compact('location'));
    }

    // =============================
    // SUCCESS PAGE
    // =============================
    public function successStore()
    {
        return view('pages.orders.success-store');
    }

    public function successOutside(string $order)
    {
        return view('pages.orders.success-outside', [
            'orderNumber' => $order,
        ]);
    }
}