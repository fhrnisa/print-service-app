<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total'    => Order::count(),
            'menunggu' => Order::where('status', 'pending')->count(),
            'diproses' => Order::where('status', 'processing')->count(),
            'selesai'  => Order::where('status', 'completed')->count(),
        ];

        $recentOrders = Order::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentOrders'));
    }
}