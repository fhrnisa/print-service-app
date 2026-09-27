@extends('layouts.admin')

@section('title', 'Produk')

@section('content')

<div class="mx-auto max-w-7xl">

    <div class="mb-6 flex flex-col justify-between gap-4 sm:flex-row sm:items-center">

        <div>
            <h1 class="text-2xl font-bold">
                Produk
            </h1>

            <p class="mt-1 text-gray-600">
                Kelola produk stationery dan kebutuhan lainnya.
            </p>
        </div>

        <a href="{{ route('admin.products.create') }}"
            class="rounded-lg bg-[#1976D2] px-5 py-2.5 text-center font-medium text-white hover:bg-blue-700">
            + Tambah Produk
        </a>

    </div>


    @if (session('success'))
        <div class="mb-6 rounded-lg bg-green-50 px-4 py-3 text-green-700">
            {{ session('success') }}
        </div>
    @endif


    <form method="GET" class="mb-6">

        <input
            type="text"
            name="search"
            value="{{ request('search') }}"
            placeholder="Cari produk..."
            class="w-full rounded-lg border-gray-300">

    </form>


    <div class="overflow-hidden rounded-xl border bg-white">

        <div class="overflow-x-auto">

            <table class="w-full min-w-[700px] text-left">

                <thead class="bg-gray-50 text-sm text-gray-500">

                    <tr>

                        <th class="px-6 py-4">
                            Produk
                        </th>

                        <th class="px-6 py-4">
                            Kategori
                        </th>

                        <th class="px-6 py-4">
                            Harga
                        </th>

                        <th class="px-6 py-4">
                            Stok
                        </th>

                        <th class="px-6 py-4">
                            Aksi
                        </th>
                    </tr>

                </thead>


                <tbody class="divide-y">

                    @forelse ($products as $product)

                        <tr>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">

                                    @if ($product->image)
                                        <img
                                            src="{{ asset('storage/' . $product->image) }}"
                                            alt="{{ $product->name }}"
                                            class="h-12 w-12 rounded-lg object-cover">
                                    @else
                                        <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-gray-100 text-xs text-gray-400">
                                            No Image
                                        </div>
                                    @endif

                                    <span class="font-medium">
                                        {{ $product->name }}
                                    </span>

                                </div>
                            </td>

                            <td class="px-6 py-4">
                                {{ $product->category }}
                            </td>

                            <td class="px-6 py-4">
                                Rp{{ number_format($product->price, 0, ',', '.') }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $product->stock }}
                            </td>

                            <td class="px-6 py-4">

                                <div class="flex gap-3">

                                    <a href="{{ route('admin.products.edit', $product) }}"
                                        class="text-[#1976D2] hover:underline">
                                        Edit
                                    </a>

                                    <form
                                        method="POST"
                                        action="{{ route('admin.products.destroy', $product) }}"
                                        onsubmit="return confirm('Hapus produk ini?')">

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            class="text-red-500 hover:underline">
                                            Hapus
                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="5"
                                class="px-6 py-10 text-center text-gray-500">
                                Belum ada produk.
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>


        <div class="border-t px-6 py-4">
            {{ $products->links() }}
        </div>

    </div>

</div>

@endsection