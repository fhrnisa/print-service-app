@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

    <div class="mx-auto max-w-7xl">

        {{-- Heading --}}
        <div class="mb-8">
            <h2 class="text-2xl font-bold text-gray-900">Dashboard</h2>
            <p class="mt-1 text-gray-600">Kelola pesanan dan layanan Ruang Cetak.</p>
        </div>

        {{-- Statistics --}}
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <div class="rounded-xl border bg-white p-5">
                <p class="text-sm text-gray-500">Total Pesanan</p>
                <p class="mt-2 text-3xl font-bold">{{ $stats['total'] }}</p>
            </div>

            <div class="rounded-xl border bg-white p-5">
                <p class="text-sm text-gray-500">Menunggu</p>
                <p class="mt-2 text-3xl font-bold text-yellow-600">{{ $stats['menunggu'] }}</p>
            </div>

            <div class="rounded-xl border bg-white p-5">
                <p class="text-sm text-gray-500">Diproses</p>
                <p class="mt-2 text-3xl font-bold text-blue-600">{{ $stats['diproses'] }}</p>
            </div>

            <div class="rounded-xl border bg-white p-5">
                <p class="text-sm text-gray-500">Selesai</p>
                <p class="mt-2 text-3xl font-bold text-green-600">{{ $stats['selesai'] }}</p>
            </div>
        </div>

        {{-- Recent Orders --}}
        <div class="mt-8 rounded-xl border bg-white">

            <div class="flex items-center justify-between border-b px-6 py-5">
                <div>
                    <h3 class="font-semibold text-gray-900">Pesanan Terbaru</h3>
                    <p class="mt-1 text-sm text-gray-500">Pesanan yang baru masuk.</p>
                </div>

                <a href="{{ route('admin.orders.index') }}"
                   class="text-sm font-medium text-[#1976D2] hover:underline">
                    Lihat semua
                </a>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full min-w-[700px] text-left">
                    <thead class="bg-gray-50 text-sm text-gray-500">
                        <tr>
                            <th class="px-6 py-4 font-medium">No. Pesanan</th>
                            <th class="px-6 py-4 font-medium">Layanan</th>
                            <th class="px-6 py-4 font-medium">Pelanggan</th>
                            <th class="px-6 py-4 font-medium">Status</th>
                            <th class="px-6 py-4 font-medium">Aksi</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y">
                        @forelse ($recentOrders as $order)
                            <tr>
                                <td class="px-6 py-4 font-medium">{{ $order->order_code }}</td>
                                <td class="px-6 py-4">{{ $order->channel }}</td>
                                <td class="px-6 py-4">{{ $order->customer_name }}</td>
                                <td class="px-6 py-4">
                                    @php
                                        $colors = [
                                            'pending'         => 'bg-yellow-100 text-yellow-700',
                                            'price_confirmed' => 'bg-orange-100 text-orange-700',
                                            'paid'            => 'bg-purple-100 text-purple-700',
                                            'processing'      => 'bg-blue-100 text-blue-700',
                                            'completed'       => 'bg-green-100 text-green-700',
                                            'cancelled'       => 'bg-red-100 text-red-700',
                                        ];
                                    @endphp
                                    <span class="rounded-full px-3 py-1 text-sm {{ $colors[$order->status] ?? 'bg-gray-100 text-gray-700' }}">
                                        {{ ucfirst(str_replace('_', ' ', $order->status)) }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('admin.orders.show', $order) }}"
                                       class="font-medium text-[#1976D2] hover:underline">
                                        Detail
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-10 text-center text-gray-500">
                                    Belum ada pesanan.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>

    </div>

@endsection