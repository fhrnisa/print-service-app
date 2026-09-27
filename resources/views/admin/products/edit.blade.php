@extends('layouts.admin')

@section('title', 'Edit Produk')

@section('content')

<div class="mx-auto max-w-2xl">

    <div class="mb-6">

        <a href="{{ route('admin.products.index') }}"
            class="text-sm text-[#1976D2] hover:underline">
            ← Kembali ke Produk
        </a>

        <h1 class="mt-4 text-2xl font-bold">
            Edit Produk
        </h1>

    </div>

    @if ($errors->any())
        <div class="mb-6 rounded-lg bg-red-50 px-4 py-3 text-red-700">
            <ul class="list-inside list-disc">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form
        method="POST"
        action="{{ route('admin.products.update', $product) }}"
        enctype="multipart/form-data"
        class="space-y-6 rounded-xl border bg-white p-6">

        @csrf
        @method('PUT')


        <div>

            <label class="mb-2 block font-medium">
                Nama Produk
            </label>

            <input
                type="text"
                name="name"
                value="{{ old('name', $product->name) }}"
                class="w-full rounded-lg border-gray-300"
                required>
        </div>


        <div class="grid gap-4 sm:grid-cols-2">

            <div>

                <label class="mb-2 block font-medium">
                    Harga
                </label>

                <input
                    type="number"
                    name="price"
                    value="{{ old('price', $product->price) }}"
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
                    value="{{ old('stock', $product->stock) }}"
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
                class="w-full rounded-lg border-gray-300">{{ old('description', $product->description) }}</textarea>

        </div>


        <div>
            <label class="mb-2 block font-medium">
                Gambar Produk
            </label>

            @if ($product->image)
                <div class="mb-3">

                    <img
                        src="{{ asset('storage/' . $product->image) }}"
                        alt="{{ $product->name }}"
                        class="h-32 w-32 rounded-lg object-cover">

                    <p class="mt-2 text-sm text-gray-500">
                        Pilih gambar baru jika ingin menggantinya.
                    </p>

                </div>
            @endif

            <input
                type="file"
                name="image"
                accept="image/*">

            @error('image')
                <p class="mt-2 text-sm text-red-500">
                    {{ $message }}
                </p>
            @enderror

            <p class="mt-1 text-sm text-gray-500">
                Kosongkan jika tidak ingin mengganti gambar.
            </p>
        </div>

        <div class="flex justify-end gap-3">

            <a href="{{ route('admin.products.index') }}"
                class="rounded-lg border px-5 py-2.5">
                Batal
            </a>

            <button
                class="rounded-lg bg-[#1976D2] px-5 py-2.5 font-medium text-white">
                Simpan Perubahan
            </button>

        </div>

    </form>

</div>

@endsection