@extends('layouts.app')

@section('title', 'Detail Pesanan - Ruang Cetak')

@section('content')

    <main class="mx-auto min-h-screen w-full max-w-md bg-white">

        <div class="px-5 pb-8">

            {{-- Header --}}
            <div class="pt-5 text-center">
                <h1 class="text-xl font-semibold text-gray-900">
                    Pesanan Ditemukan
                </h1>
            </div>

            {{-- Detail Pesanan --}}
            <div class="mt-8 rounded-lg border border-gray-200 p-4">

                <p class="text-center text-base text-gray-500">Nomor Pesanan</p>
                <p class="mt-1 text-center text-xl font-semibold text-[#1976D2]">
                    {{ $order['order_number'] }}
                </p>

                <div class="mt-5 flex items-center justify-between">
                    <span class="text-base text-gray-500">Status saat ini</span>
                    <span class="rounded-full bg-yellow-50 px-3 py-1 text-xs font-medium text-yellow-600">
                        {{ $order['status'] }}
                    </span>
                </div>

                <div class="mt-3 flex items-center justify-between">
                    <span class="text-base text-gray-500">Total harga</span>
                    <span class="text-base font-semibold">{{ $order['total'] }}</span>
                </div>

                <div class="mt-3 flex items-center justify-between">
                    <span class="text-base text-gray-500">Estimasi selesai</span>
                    <span class="text-sm">{{ $order['estimate'] }}</span>
                </div>

            </div>

            {{-- Riwayat Status --}}
            <div class="mt-4 rounded-lg border border-gray-200 p-4">

                <h2 class="text-base font-semibold text-gray-900">Riwayat Status</h2>

                <div class="mt-5 space-y-5">

                    @foreach ($order['history'] as $index => $item)
                        <div class="flex gap-3">
                            <div class="mt-1 h-3 w-3 shrink-0 rounded-full
                                {{ $index < count($order['history']) - 1 ? 'bg-[#1976D2]' : 'border-2 border-[#1976D2]' }}">
                            </div>
                            <div>
                                <p class="text-base font-medium">{{ $item['title'] }}</p>
                                <p class="text-sm text-gray-500">{{ $item['description'] }}</p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            {{-- Detail Cetak --}}
            <div class="mt-4 rounded-lg border border-gray-200 p-4">

                <h2 class="text-base font-semibold text-gray-900">Detail Cetak</h2>

                <div class="mt-4">
                    <p class="text-base font-medium">🖨 {{ $order['service'] }}</p>
                    <p class="text-base text-gray-500">{{ $order['color'] }}</p>
                </div>

                <div class="mt-5 grid grid-cols-2 gap-4">

                    <div>
                        <p class="text-sm text-gray-500">Jumlah Lembar</p>
                        <p class="text-base">{{ $order['pages'] }} Lembar</p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">Pilihan Warna</p>
                        <p class="text-base">{{ $order['color'] }}</p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">Jenis Kertas</p>
                        <p class="text-base">{{ $order['paper_type'] }}</p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500">Ukuran Kertas</p>
                        <p class="text-base">{{ $order['paper_size'] }}</p>
                    </div>

                </div>

                @if (!empty($order['notes']))
                    <div class="mt-5 border-t border-gray-100 pt-4">
                        <p class="text-sm text-gray-500">Catatan</p>
                        <p class="text-base">{{ $order['notes'] }}</p>
                    </div>
                @endif

                <div class="mt-5 border-t border-gray-100 pt-4">
                    <p class="text-sm text-gray-500">File</p>
                    <p class="mt-1 text-base">{{ $order['file'] }}</p>
                </div>

            </div>

            <p class="mt-6 text-center text-base text-gray-500">
                Butuh bantuan?
                <a href="#" class="text-[#1976D2]">Hubungi Admin</a>
            </p>

        </div>
    </main>

@endsection