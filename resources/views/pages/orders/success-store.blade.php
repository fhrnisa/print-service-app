<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Terkirim</title>
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
            File Sudah Terkirim
        </h1>

        <p class="mt-3 text-base leading-relaxed text-gray-500">
            File Anda sudah berhasil dikirim ke petugas toko. Silakan tunggu konfirmasi dari petugas.
        </p>

        <a href="{{ route('welcome') }}"
           class="mt-10 w-full rounded-lg bg-[#1976D2] px-4 py-3 text-base font-medium text-white">
            Kembali ke Beranda
        </a>

    </main>

</body>
</html>