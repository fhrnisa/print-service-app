@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

    <div class="mx-auto max-w-7xl">

        {{-- Heading --}}
        <div class="mb-8">
            <h2 class="text-2xl font-bold text-gray-900">
                Dashboard
            </h2>

            <p class="mt-1 text-gray-600">
                Kelola pesanan dan layanan Ruang Cetak.
            </p>
        </div>


        {{-- Statistics --}}
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">

            <div class="rounded-xl border bg-white p-5">
                <p class="text-sm text-gray-500">
                    Total Pesanan
                </p>

                <p class="mt-2 text-3xl font-bold">
                    24
                </p>
            </div>


            <div class="rounded-xl border bg-white p-5">
                <p class="text-sm text-gray-500">
                    Menunggu
                </p>

                <p class="mt-2 text-3xl font-bold text-yellow-600">
                    5
                </p>
            </div>


            <div class="rounded-xl border bg-white p-5">
                <p class="text-sm text-gray-500">
                    Diproses
                </p>

                <p class="mt-2 text-3xl font-bold text-blue-600">
                    7
                </p>
            </div>


            <div class="rounded-xl border bg-white p-5">
                <p class="text-sm text-gray-500">
                    Selesai
                </p>

                <p class="mt-2 text-3xl font-bold text-green-600">
                    12
                </p>
            </div>

        </div>


        {{-- Recent Orders --}}
        <div class="mt-8 rounded-xl border bg-white">

            <div class="flex items-center justify-between border-b px-6 py-5">

                <div>
                    <h3 class="font-semibold text-gray-900">
                        Pesanan Terbaru
                    </h3>

                    <p class="mt-1 text-sm text-gray-500">
                        Pesanan yang baru masuk.
                    </p>
                </div>

                <a href="#"
                    class="text-sm font-medium text-[#1976D2] hover:underline">
                    Lihat semua
                </a>

            </div>


            {{-- Table --}}
            <div class="overflow-x-auto">

                <table class="w-full min-w-[700px] text-left">

                    <thead class="bg-gray-50 text-sm text-gray-500">
                        <tr>
                            <th class="px-6 py-4 font-medium">
                                No. Pesanan
                            </th>

                            <th class="px-6 py-4 font-medium">
                                Layanan
                            </th>

                            <th class="px-6 py-4 font-medium">
                                Pelanggan
                            </th>

                            <th class="px-6 py-4 font-medium">
                                Status
                            </th>

                            <th class="px-6 py-4 font-medium">
                                Aksi
                            </th>
                        </tr>
                    </thead>


                    <tbody class="divide-y">

                        <tr>
                            <td class="px-6 py-4 font-medium">
                                ORD-27092026-001
                            </td>

                            <td class="px-6 py-4">
                                Print Dokumen
                            </td>

                            <td class="px-6 py-4">
                                Fahrunnisa
                            </td>

                            <td class="px-6 py-4">
                                <span class="rounded-full bg-yellow-100 px-3 py-1 text-sm text-yellow-700">
                                    Menunggu
                                </span>
                            </td>

                            <td class="px-6 py-4">
                                <a href="#"
                                    class="font-medium text-[#1976D2] hover:underline">
                                    Detail
                                </a>
                            </td>
                        </tr>


                        <tr>
                            <td class="px-6 py-4 font-medium">
                                ORD-27092026-002
                            </td>

                            <td class="px-6 py-4">
                                Cetak Foto
                            </td>

                            <td class="px-6 py-4">
                                Nisa
                            </td>

                            <td class="px-6 py-4">
                                <span class="rounded-full bg-blue-100 px-3 py-1 text-sm text-blue-700">
                                    Diproses
                                </span>
                            </td>

                            <td class="px-6 py-4">
                                <a href="#"
                                    class="font-medium text-[#1976D2] hover:underline">
                                    Detail
                                </a>
                            </td>
                        </tr>


                        <tr>
                            <td class="px-6 py-4 font-medium">
                                ORD-27092026-003
                            </td>

                            <td class="px-6 py-4">
                                Pengetikan
                            </td>

                            <td class="px-6 py-4">
                                Rani
                            </td>

                            <td class="px-6 py-4">
                                <span class="rounded-full bg-green-100 px-3 py-1 text-sm text-green-700">
                                    Selesai
                                </span>
                            </td>

                            <td class="px-6 py-4">
                                <a href="#"
                                    class="font-medium text-[#1976D2] hover:underline">
                                    Detail
                                </a>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

@endsection