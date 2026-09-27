@extends('layouts.admin')

@section('title', 'Detail Pesanan')

@section('content')

<div class="mx-auto max-w-4xl">

    <div class="mb-6">

        <a href="{{ route('admin.orders.index') }}"
            class="text-sm text-[#1976D2] hover:underline">
            ← Kembali ke Pesanan
        </a>

        <h1 class="mt-4 text-2xl font-bold">
            {{ $order->order_number }}
        </h1>

    </div>


    @if (session('success'))
        <div class="mb-6 rounded-lg bg-green-50 px-4 py-3 text-green-700">
            {{ session('success') }}
        </div>
    @endif


    <div class="space-y-6">


        {{-- Customer --}}
        <div class="rounded-xl border bg-white p-6">

            <h2 class="mb-5 font-semibold">
                Informasi Pelanggan
            </h2>

            <div class="grid gap-4 sm:grid-cols-2">

                <div>
                    <p class="text-sm text-gray-500">
                        Nama
                    </p>

                    <p class="mt-1">
                        {{ $order->name }}
                    </p>
                </div>


                <div>
                    <p class="text-sm text-gray-500">
                        WhatsApp
                    </p>

                    <p class="mt-1">
                        {{ $order->whatsapp ?? '-' }}
                    </p>
                </div>

            </div>

        </div>


        {{-- Order --}}
        <div class="rounded-xl border bg-white p-6">

            <h2 class="mb-5 font-semibold">
                Detail Pesanan
            </h2>

            <dl class="space-y-4">

                <div class="flex justify-between gap-4">
                    <dt class="text-gray-500">
                        Layanan
                    </dt>

                    <dd class="font-medium">
                        {{ $order->service }}
                    </dd>
                </div>


                <div class="flex justify-between gap-4">
                    <dt class="text-gray-500">
                        File
                    </dt>

                    <dd>
                        @if ($order->file)
                            <a href="{{ asset('storage/' . $order->file) }}"
                                target="_blank"
                                class="text-[#1976D2] hover:underline">
                                Lihat file
                            </a>
                        @else
                            -
                        @endif
                    </dd>
                </div>


                <div class="flex justify-between gap-4">
                    <dt class="text-gray-500">
                        Jumlah
                    </dt>

                    <dd>
                        {{ $order->quantity ?? '-' }}
                    </dd>
                </div>


                <div class="flex justify-between gap-4">
                    <dt class="text-gray-500">
                        Catatan
                    </dt>

                    <dd class="max-w-sm text-right">
                        {{ $order->notes ?? '-' }}
                    </dd>
                </div>

            </dl>

        </div>


        {{-- Status --}}
        <div class="rounded-xl border bg-white p-6">

            <h2 class="mb-5 font-semibold">
                Status Pesanan
            </h2>

            <form method="POST"
                action="{{ route('admin.orders.update-status', $order) }}">

                @csrf
                @method('PATCH')

                <div class="flex flex-col gap-4 sm:flex-row">

                    <select
                        name="status"
                        class="rounded-lg border-gray-300 sm:flex-1">

                        <option value="menunggu"
                            @selected($order->status === 'menunggu')>
                            Menunggu
                        </option>

                        <option value="diproses"
                            @selected($order->status === 'diproses')>
                            Diproses
                        </option>

                        <option value="selesai"
                            @selected($order->status === 'selesai')>
                            Selesai
                        </option>

                        <option value="ditolak"
                            @selected($order->status === 'ditolak')>
                            Ditolak
                        </option>

                    </select>


                    <button
                        class="rounded-lg bg-[#1976D2] px-6 py-2.5 font-medium text-white hover:bg-blue-700">
                        Simpan Status
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection