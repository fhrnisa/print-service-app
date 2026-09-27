<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;

class DashboardController extends Controller
{
    public function index()
    {
        $totalOrders = Order::count();

        $waitingOrders = Order::where('status', 'menunggu')->count();

        $processingOrders = Order::where('status', 'diproses')->count();

        $completedOrders = Order::where('status', 'selesai')->count();

        $recentOrders = Order::latest()
            ->take(5)
            ->get();

        return view('admin.dashboard', compact(
            'totalOrders',
            'waitingOrders',
            'processingOrders',
            'completedOrders',
            'recentOrders'
        ));
    }
}