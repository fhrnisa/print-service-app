@extends('layouts.admin')

@section('title', 'Tambah Produk')

@section('content')

<div class="mx-auto max-w-2xl">

    <div class="mb-6">

        <a href="{{ route('admin.products.index') }}"
            class="text-sm text-[#1976D2] hover:underline">
            ← Kembali ke Produk
        </a>

        <h1 class="mt-4 text-2xl font-bold">
            Tambah Produk
        </h1>

    </div>


    <form
        method="POST"
        action="{{ route('admin.products.store') }}"
        enctype="multipart/form-data"
        class="space-y-6 rounded-xl border bg-white p-6">

        @csrf


        <div>
            <label class="mb-2 block font-medium">
                Nama Produk
            </label>

            <input
                type="text"
                name="name"
                value="{{ old('name') }}"
                class="w-full rounded-lg border-gray-300"
                required>

            @error('name')
                <p class="mt-1 text-sm text-red-500">
                    {{ $message }}
                </p>
            @enderror
        </div>


        <div class="grid gap-4 sm:grid-cols-2">

            <div>

                <label class="mb-2 block font-medium">
                    Harga
                </label>

                <input
                    type="number"
                    name="price"
                    value="{{ old('price') }}"
                    min="0"
                    class="w-full rounded-lg border-gray-300"
                    required>

            </div>


            <div>

                <label class="mb-2 block font-medium">
                    Stok
                </label>

                <input
                    type="number"
                    name="stock"
                    value="{{ old('stock', 0) }}"
                    min="0"
                    class="w-full rounded-lg border-gray-300"
                    required>

            </div>

        </div>


        <div>

            <label class="mb-2 block font-medium">
                Deskripsi
            </label>

            <textarea
                name="description"
                rows="4"
                class="w-full rounded-lg border-gray-300">{{ old('description') }}</textarea>

        </div>


        <div>

            <label class="mb-2 block font-medium">
                Gambar
            </label>

            <input
                type="file"
                name="image"
                accept="image/*"
                class="w-full">

            <p class="mt-1 text-sm text-gray-500">
                Maksimal 2 MB.
            </p>

        </div>


        <div class="flex justify-end gap-3">

            <a href="{{ route('admin.products.index') }}"
                class="rounded-lg border px-5 py-2.5">
                Batal
            </a>

            <button
                class="rounded-lg bg-[#1976D2] px-5 py-2.5 font-medium text-white">
                Simpan Produk
            </button>

        </div>

    </form>

</div>

@endsection