@extends('layouts.admin')

@section('title', 'Pesanan')

@section('content')

<div class="mx-auto max-w-7xl">

    <div class="mb-6">
        <h1 class="text-2xl font-bold">
            Pesanan
        </h1>

        <p class="mt-1 text-gray-600">
            Kelola pesanan pelanggan.
        </p>
    </div>


    {{-- Success --}}
    @if (session('success'))
        <div class="mb-6 rounded-lg bg-green-50 px-4 py-3 text-green-700">
            {{ session('success') }}
        </div>
    @endif


    {{-- Search & Filter --}}
    <form method="GET"
        class="mb-6 flex flex-col gap-3 rounded-xl border bg-white p-4 md:flex-row">

        <input
            type="text"
            name="search"
            value="{{ request('search') }}"
            placeholder="Cari nomor pesanan, nama, atau WhatsApp..."
            class="w-full rounded-lg border-gray-300 md:flex-1">

        <select
            name="status"
            class="rounded-lg border-gray-300">

            <option value="">
                Semua Status
            </option>

            <option value="menunggu"
                @selected(request('status') === 'menunggu')>
                Menunggu
            </option>

            <option value="diproses"
                @selected(request('status') === 'diproses')>
                Diproses
            </option>

            <option value="selesai"
                @selected(request('status') === 'selesai')>
                Selesai
            </option>

            <option value="ditolak"
                @selected(request('status') === 'ditolak')>
                Ditolak
            </option>

        </select>

        <button
            class="rounded-lg bg-[#1976D2] px-5 py-2.5 font-medium text-white hover:bg-blue-700">
            Cari
        </button>

    </form>


    {{-- Table --}}
    <div class="overflow-hidden rounded-xl border bg-white">

        <div class="overflow-x-auto">

            <table class="w-full min-w-[750px] text-left">

                <thead class="bg-gray-50 text-sm text-gray-500">

                    <tr>

                        <th class="px-6 py-4">
                            No. Pesanan
                        </th>

                        <th class="px-6 py-4">
                            Pelanggan
                        </th>

                        <th class="px-6 py-4">
                            Layanan
                        </th>

                        <th class="px-6 py-4">
                            Status
                        </th>

                        <th class="px-6 py-4">
                        </th>

                    </tr>

                </thead>


                <tbody class="divide-y">

                    @forelse ($orders as $order)

                        <tr>

                            <td class="px-6 py-4 font-medium">
                                {{ $order->order_code }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $order->customer_name }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $order->channel }}
                            </td>

                            <td class="px-6 py-4">
                                {{ ucfirst($order->status) }}
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

                            <td colspan="5"
                                class="px-6 py-10 text-center text-gray-500">

                                Pesanan tidak ditemukan.

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>


        <div class="border-t px-6 py-4">
            {{ $orders->links() }}
        </div>

    </div>

</div>

@endsection