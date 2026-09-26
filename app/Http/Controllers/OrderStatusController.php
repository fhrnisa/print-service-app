<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderStatusController extends Controller
{
    public function index(Request $request)
    {
        $searched = $request->has('searched');
        $orders = collect();

        if ($searched) {
            $whatsapp    = $request->whatsapp;
            $orderNumber = $request->order_number;

            $query = Order::with('items')
                ->where('customer_phone', $whatsapp)
                ->latest();

            if ($orderNumber) {
                $query->where('order_code', $orderNumber);
            }

            $orders = $query->get()->map(function (Order $order) {

                // Ambil item pertama (asumsi 1 order = 1 item)
                $item    = $order->items->first();
                $details = $item->details ?? [];

                // Mapping status -> label & warna
                [$statusLabel, $statusColor] = $this->mapStatus($order->status);

                return [
                    'order_number' => $order->order_code,
                    'service'      => $details['service'] ?? 'Print Dokumen',
                    'file'         => basename($details['file_path'] ?? '-'),
                    'pages'        => $details['quantity'] ?? 1,
                    'color'        => $details['color'] ?? 'Hitam Putih',
                    'total'        => 'Rp' . number_format($order->total ?? 0, 0, ',', '.'),
                    'status'       => $statusLabel,
                    'status_color' => $statusColor,
                    'estimate'     => $order->estimate ?? '-',
                ];
            });
        }

        return view('pages.orders.status', compact('orders', 'searched'));
    }

    public function detail(Request $request)
    {
        $orderNumber = $request->order_number;

        $order = Order::with('items')
            ->where('order_code', $orderNumber)
            ->firstOrFail();

        $item    = $order->items->first();
        $details = $item->details ?? [];

        [$statusLabel] = $this->mapStatus($order->status);

        // Riwayat status (bisa dari kolom JSON / tabel terpisah)
        $history = [
            ['title' => 'Menunggu Konfirmasi', 'description' => 'Pesanan berhasil diterima sistem.'],
            ['title' => 'Harga Dikonfirmasi',  'description' => 'Admin menetapkan harga final.'],
            ['title' => 'Diproses',            'description' => 'Dokumen sedang dicetak dan disiapkan.'],
        ];

        $orderData = [
            'order_number' => $order->order_code,
            'status'       => $statusLabel,
            'total'        => 'Rp' . number_format($order->total ?? 0, 0, ',', '.'),
            'estimate'     => $order->estimate ?? '-',
            'service'      => $details['service'] ?? 'Print Dokumen',
            'color'        => $details['color'] ?? 'Hitam Putih',
            'pages'        => $details['quantity'] ?? 1,
            'paper_type'   => $details['paper_type'] ?? '-',
            'paper_size'   => $details['paper_size'] ?? '-',
            'notes'        => $details['notes'] ?? null,
            'file'         => basename($details['file_path'] ?? '-'),
            'history'      => $history,
        ];

        return view('pages.orders.status-detail', [
            'order' => $orderData,
        ]);
    }

    /**
     * Mapping status DB -> label & warna.
     */
    private function mapStatus(string $status): array
    {
        return match ($status) {
            'pending'    => ['Menunggu Konfirmasi', 'yellow'],
            'confirmed'  => ['Harga Dikonfirmasi',  'yellow'],
            'processing' => ['Diproses',            'yellow'],
            'done'       => ['Selesai',             'green'],
            'cancelled'  => ['Dibatalkan',          'red'],
            default      => [ucfirst($status),      'yellow'],
        };
    }
}