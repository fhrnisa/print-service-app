@extends('layouts.app')

@section('title', 'Cek Status Pesanan')

@section('content')

    <main class="mx-auto my-10 min-h-screen w-full max-w-md bg-white">

        <div class="px-5 pb-8">

            {{-- ================================================= --}}
            {{-- SEARCH FORM --}}
            {{-- ================================================= --}}

            @if (!$searched)

                <div class="pt-8 text-center">
                    <h1 class="text-xl font-semibold text-gray-900">
                        Cek Status Pesanan
                    </h1>
                    <p class="mx-auto mt-2 max-w-sm text-base leading-relaxed text-gray-500">
                        Masukkan nomor WhatsApp yang digunakan saat memesan.
                        Nomor pesanan bersifat opsional.
                    </p>
                </div>

                <form
                    id="statusForm"
                    action="{{ route('orders.status') }}"
                    method="GET"
                    class="mt-10"
                >
                    <input type="hidden" name="searched" value="1">

                    {{-- WhatsApp --}}
                    <div>
                        <label for="whatsapp" class="mb-2 block text-base font-medium text-gray-800">
                            Nomor WhatsApp
                        </label>
                        <input
                            id="whatsapp"
                            type="text"
                            name="whatsapp"
                            value="{{ request('whatsapp') }}"
                            placeholder="081234567890"
                            required
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 text-base outline-none transition focus:border-[#1976D2] focus:ring-1 focus:ring-[#1976D2]"
                        >
                    </div>

                    {{-- Nomor Pesanan --}}
                    <div class="mt-5">
                        <label for="order_number" class="mb-2 block text-base font-medium text-gray-800">
                            Nomor Pesanan
                            <span class="font-normal text-gray-400">(opsional)</span>
                        </label>
                        <input
                            id="order_number"
                            type="text"
                            name="order_number"
                            value="{{ request('order_number') }}"
                            placeholder="ORD-01012026-001"
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 text-base outline-none transition focus:border-[#1976D2] focus:ring-1 focus:ring-[#1976D2]"
                        >
                    </div>

                    {{-- Button --}}
                    <button
                        id="checkButton"
                        type="submit"
                        disabled
                        class="mt-5 w-full rounded-lg bg-[#1976D2] px-4 py-3 text-base font-medium text-white transition disabled:cursor-not-allowed disabled:opacity-40"
                    >
                        Cek Pesanan
                    </button>

                    <p class="mt-3 text-center text-base text-gray-500">
                        Tidak menemukan pesanan?
                        <a href="#" class="text-[#1976D2]">Hubungi Admin</a>
                    </p>
                </form>

            @else

                {{-- ================================================= --}}
                {{-- RESULT --}}
                {{-- ================================================= --}}

                @php
                    $hasOrderNumber = request('order_number');
                @endphp

                <div class="pt-8 text-center">
                    <h1 class="text-xl font-semibold text-gray-900">
                        Pesanan Ditemukan
                    </h1>

                    @if (!$hasOrderNumber)
                        <p class="mt-1 text-base text-gray-800">
                            No WhatsApp:
                            <span class="font-semibold">{{ request('whatsapp') }}</span>
                        </p>
                        <p class="mt-1 text-base text-gray-500">
                            {{ $orders->count() }} pesanan ditemukan
                        </p>
                    @endif
                </div>

                <div class="mt-8 space-y-4">

                    @forelse ($orders as $order)

                        <div class="rounded-lg border border-gray-200 p-4">

                            {{-- Header card --}}
                            <div class="flex items-start justify-between gap-3">
                                <div>
                                    <p class="text-base text-gray-500">Nomor Pesanan</p>
                                    <p class="text-base font-medium text-gray-900">
                                        {{ $order['order_number'] }}
                                    </p>
                                </div>

                                @if ($order['status_color'] === 'yellow')
                                    <span class="rounded-full bg-yellow-50 px-3 py-1 text-xs font-medium text-yellow-600">
                                        {{ $order['status'] }}
                                    </span>
                                @elseif ($order['status_color'] === 'green')
                                    <span class="rounded-full bg-green-50 px-3 py-1 text-xs font-medium text-green-600">
                                        {{ $order['status'] }}
                                    </span>
                                @endif
                            </div>

                            {{-- Product --}}
                            <div class="mt-4 flex gap-3 border-b border-gray-100 pb-4">
                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-blue-50 text-[#1976D2]">
                                    ▱
                                </div>
                                <div class="min-w-0">
                                    <p class="text-base text-gray-900">{{ $order['service'] }}</p>
                                    <p class="truncate text-base text-gray-500">{{ $order['file'] }}</p>
                                    <p class="text-xs text-gray-400">
                                        {{ $order['pages'] }} Lembar • {{ $order['color'] }}
                                    </p>
                                </div>
                            </div>

                            {{-- Total --}}
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-base text-gray-500">Total harga</span>
                                <span class="text-base font-semibold text-[#1976D2]">
                                    {{ $order['total'] }}
                                </span>
                            </div>

                            {{-- Estimate --}}
                            <div class="mt-2 flex items-center justify-between">
                                <span class="text-base text-gray-500">Estimasi selesai</span>
                                <span class="text-sm text-gray-800">{{ $order['estimate'] }}</span>
                            </div>

                            {{-- Detail --}}
                            <a
                                href="{{ route('orders.status.detail', ['order_number' => $order['order_number']]) }}"
                                class="mt-5 block border-t border-gray-100 pt-4 text-center text-base font-medium text-[#1976D2]"
                            >
                                Lihat Detail Pesanan →
                            </a>
                        </div>

                    @empty

                        <div class="rounded-lg border border-gray-200 p-6 text-center">
                            <p class="text-base font-medium text-gray-900">
                                Pesanan tidak ditemukan
                            </p>
                            <p class="mt-2 text-base text-gray-500">
                                Periksa kembali nomor WhatsApp atau nomor pesanan Anda.
                            </p>
                        </div>

                    @endforelse

                </div>

                <p class="mt-6 text-center text-base text-gray-500">
                    Butuh bantuan?
                    <a href="#" class="text-[#1976D2]">Hubungi Admin</a>
                </p>

                <a
                    href="{{ route('orders.status') }}"
                    class="mt-4 block text-center text-base text-[#1976D2]"
                >
                    ← Cek Pesanan Lain
                </a>

            @endif

        </div>
    </main>

    @if (!$searched)
        <script>
            const whatsappInput = document.getElementById('whatsapp');
            const checkButton = document.getElementById('checkButton');

            function updateButton() {
                checkButton.disabled = whatsappInput.value.trim() === '';
            }

            whatsappInput.addEventListener('input', updateButton);
            updateButton();
        </script>
    @endif

@endsection