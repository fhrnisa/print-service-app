<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Admin') - Ruang Cetak</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gray-50 text-base text-gray-800">

    <div class="flex min-h-screen">

        {{-- Sidebar --}}
        <aside class="hidden w-64 border-r bg-white lg:block">

            <div class="flex h-16 items-center border-b px-6">
                <h1 class="text-xl font-bold text-[#1976D2]">
                    Ruang Cetak
                </h1>
            </div>

            <nav class="space-y-1 p-4">

                <a href="{{ route('admin.dashboard') }}"
                    class="block rounded-lg px-4 py-3 hover:bg-blue-50 hover:text-[#1976D2]">
                    Dashboard
                </a>

                <a href="{{ route('admin.orders.index') }}"
                    class="block rounded-lg px-4 py-3 hover:bg-blue-50 hover:text-[#1976D2]">
                    Pesanan
                </a>

                <a href="{{ route('admin.products.index') }}"
                    class="block rounded-lg px-4 py-3 hover:bg-blue-50 hover:text-[#1976D2]">
                    Produk
                </a>

            </nav>

        </aside>


        {{-- Main --}}
        <div class="flex min-w-0 flex-1 flex-col">

            {{-- Header --}}
            <header class="flex h-16 items-center justify-between border-b bg-white px-6">

                <button class="lg:hidden">
                    ☰
                </button>

                <div></div>

                <div class="flex items-center gap-4">

                    <span class="hidden text-sm text-gray-600 sm:block">
                        {{ auth()->user()->name }}
                    </span>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit"
                            class="text-sm text-gray-600 hover:text-red-500">
                            Keluar
                        </button>
                    </form>

                </div>

            </header>


            {{-- Content --}}
            <main class="flex-1 p-6">
                @yield('content')
            </main>

        </div>

    </div>

</body>

</html>