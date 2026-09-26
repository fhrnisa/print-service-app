<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Berhasil</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-[#F5F5F5]">

    <main class="mx-auto flex min-h-screen w-full max-w-md flex-col items-center justify-center bg-white px-5 py-6 text-center">

        {{-- Ikon centang --}}
        <div class="mb-6 flex h-24 w-24 items-center justify-center rounded-full bg-green-100">
            <svg width="56" height="56" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 6L9 17L4 12" stroke="#22C55E" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>

        <h1 class="text-2xl font-semibold text-gray-900">
            Pesanan Berhasil Dibuat
        </h1>

        <p class="mt-3 text-base leading-relaxed text-gray-500">
            Simpan nomor pesanan Anda untuk mengecek status pesanan.
        </p>

        {{-- Nomor pesanan --}}
        <div class="mt-6 w-full rounded-lg border border-dashed border-[#1976D2] bg-blue-50 px-4 py-4">
            <p class="text-sm text-gray-500">Nomor Pesanan</p>
            <p id="order-number" class="mt-1 text-xl font-semibold tracking-wide text-[#1976D2]">
                {{ $orderNumber }}
            </p>
        </div>

        {{-- Tombol salin --}}
        <button
            type="button"
            onclick="copyOrderNumber()"
            class="mt-4 w-full rounded-lg border border-[#1976D2] px-4 py-3 text-base font-medium text-[#1976D2]">
            Salin Nomor Pesanan
        </button>

        {{-- Tombol cek status --}}
        <a href="{{ route('pages.orders.status', ['order' => $orderNumber]) }}"
           class="mt-3 w-full rounded-lg bg-[#1976D2] px-4 py-3 text-base font-medium text-white">
            Cek Status Pesanan
        </a>

        {{-- Tombol kembali --}}
        <a href="{{ route('welcome') }}"
           class="mt-3 w-full rounded-lg border border-gray-300 px-4 py-3 text-base font-medium text-gray-700">
            Kembali ke Beranda
        </a>

    </main>

    <script>
        function copyOrderNumber() {
            const el = document.getElementById('order-number');
            if (!el) return;
            navigator.clipboard.writeText(el.textContent.trim()).then(function () {
                alert('Nomor pesanan berhasil disalin');
            }).catch(function () {
                alert('Gagal menyalin nomor pesanan');
            });
        }
    </script>

</body>
</html>