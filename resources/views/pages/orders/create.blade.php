<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pesan Sekarang</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-[#F5F5F5]">

    <main class="mx-auto min-h-screen w-full max-w-md bg-white px-5 py-6">

        {{-- ========================================= --}}
        {{-- FLOW: CUSTOMER BERADA DI TOKO --}}
        {{-- ========================================= --}}

        @if ($location === 'store')

            <form
                action="{{ route('pages.orders.store') }}"
                method="POST"
                enctype="multipart/form-data"
                class="flex min-h-[calc(100vh-3rem)] flex-col">

                @csrf

                <input type="hidden" name="location" value="store">

                {{-- Progress --}}
                <div class="mb-10 flex items-center justify-center gap-8">

                    <div class="flex flex-col items-center gap-1">
                        <div class="flex h-10 w-10 items-center justify-center rounded-full bg-[#4DA0E3]">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.6922 6.43281L12.3172 2.05781C12.2591 1.99979 12.1902 1.95378 12.1143 1.92241C12.0384 1.89105 11.9571 1.87494 11.875 1.875H4.375C4.04348 1.875 3.72554 2.0067 3.49112 2.24112C3.2567 2.47554 3.125 2.79348 3.125 3.125V16.875C3.125 17.2065 3.2567 17.5245 3.49112 17.7589C3.72554 17.9933 4.04348 18.125 4.375 18.125H15.625C15.9565 18.125 16.2745 17.9933 16.5089 17.7589C16.7433 17.5245 16.875 17.2065 16.875 16.875V6.875C16.8751 6.7929 16.859 6.71159 16.8276 6.63572C16.7962 6.55985 16.7502 6.4909 16.6922 6.43281ZM12.5 4.00859L14.7414 6.25H12.5V4.00859ZM15.625 16.875H4.375V3.125H11.25V6.875C11.25 7.04076 11.3158 7.19973 11.4331 7.31694C11.5503 7.43415 11.7092 7.5 11.875 7.5H15.625V16.875Z" fill="white"/>
                            </svg>
                        </div>

                        <span class="text-xs text-[#333]">
                            Upload File
                        </span>
                    </div>

                    <div class="h-px w-12 bg-gray-300"></div>

                    <div class="flex flex-col items-center gap-1">
                        <div class="flex h-10 w-10 items-center justify-center rounded-full bg-gray-300 text-white">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.1665 16.6667V15.8333C4.1665 12.6117 6.77818 10 9.99984 10C13.2215 10 15.8332 12.6117 15.8332 15.8333V16.6667" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9.99984 9.99992C11.8408 9.99992 13.3332 8.50753 13.3332 6.66658C13.3332 4.82564 11.8408 3.33325 9.99984 3.33325C8.15889 3.33325 6.6665 4.82564 6.6665 6.66658C6.6665 8.50753 8.15889 9.99992 9.99984 9.99992Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>

                        <span class="text-xs text-gray-500">
                            Info Pelanggan
                        </span>
                    </div>

                </div>


                {{-- STEP 1 --}}
                <section id="store-step-1">

                    <div class="mb-6 text-center">

                        <h1 class="text-2xl font-semibold text-gray-900">
                            Upload File
                        </h1>

                        <p class="mt-2 text-base leading-relaxed text-gray-500">
                            Unggah file atau dokumen yang ingin Anda cetak.
                        </p>

                    </div>


                    {{-- Upload --}}
                    <label
                        for="store-file"
                        class="flex cursor-pointer flex-col items-center rounded-lg border border-gray-300 px-5 py-6 text-center transition hover:border-[#1976D2]">

                        <div class="mb-3 flex h-12 w-12 items-center justify-center rounded-full bg-[#D0EFFC] text-[#1976D2]">
                            <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="52" height="52" rx="26" fill="#D0EFFC"/>
                                <path d="M26.0002 39.3333V27.3333M21.3335 31.9999L26.0002 27.3333L30.6668 31.9999" stroke="#0C4497" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M36.6668 33.4764C38.6585 32.6963 40.6668 30.9186 40.6668 27.3334C40.6668 22.0001 36.2224 20.6667 34.0002 20.6667C34.0002 18.0001 34.0002 12.6667 26.0002 12.6667C18.0002 12.6667 18.0002 18.0001 18.0002 20.6667C15.7779 20.6667 11.3335 22.0001 11.3335 27.3334C11.3335 30.9186 13.3419 32.6963 15.3335 33.4764" stroke="#0C4497" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                        </div>

                        <p class="text-base font-medium text-gray-800">
                            Unggah file yang ingin dicetak
                        </p>

                        <p class="mt-1 text-base text-gray-500">
                            Mendukung dokumen dan gambar hingga 100 MB.
                        </p>

                        <input id="store-file" type="file" name="file" class="hidden" required>

                    </label>

                    {{-- Preview nama file (toko) --}}
                    <p id="store-file-preview"
                        class="mt-3 hidden rounded-lg bg-gray-100 px-4 py-3 text-base text-gray-700">
                    </p>

                </section>


                {{-- STEP 2 --}}
                <section id="store-step-2" class="hidden">

                    <div class="mb-6 text-center">

                        <h1 class="text-xl font-semibold text-gray-900">
                            Detail Pelanggan
                        </h1>

                        <p class="mt-2 text-base leading-relaxed text-gray-500">
                            Masukkan informasi yang dapat kami gunakan untuk menghubungi Anda.
                        </p>

                    </div>


                    <div class="space-y-5">

                        <div>
                            <label class="mb-2 block text-base font-medium text-gray-800">
                                Nama
                            </label>

                            <input type="text" name="name" placeholder="Nisa Kusuma"
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-base outline-none focus:border-[#1976D2] focus:ring-1 focus:ring-[#1976D2]">
                        </div>

                        <div>

                            <label class="mb-2 block text-base font-medium text-gray-800">
                                Nomor WhatsApp
                                <span class="font-normal text-gray-400">(opsional)</span>
                            </label>

                            <input type="text" name="phone" placeholder="cth: 081234567890"
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-base outline-none focus:border-[#1976D2] focus:ring-1 focus:ring-[#1976D2]">
                        </div>

                    </div>

                </section>


                {{-- Buttons --}}
                <div class="mt-auto flex gap-3 pt-10">

                    <button
                        type="button"
                        id="store-back"
                        onclick="storePrevious()"
                        class="hidden flex-1 rounded-lg border border-[#1976D2] px-4 py-3 text-base font-medium text-[#1976D2]">
                        ← Sebelumnya
                    </button>

                    <button
                        type="button"
                        id="store-next"
                        onclick="storeNext()"
                        disabled
                        class="flex w-full gap-1 items-center justify-center rounded-lg bg-[#1976D2] px-4 py-3 text-base font-medium text-white">
                        Selanjutnya 
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 12H18.5M12.5 18L18.5 12L12.5 6" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>

                    <button
                        type="submit"
                        id="store-submit"
                        class="hidden flex-1 rounded-lg bg-[#1976D2] px-4 py-3 text-base font-medium text-white">
                        Kirim Form →
                    </button>

                </div>

            </form>


        {{-- ========================================= --}}
        {{-- FLOW: CUSTOMER TIDAK BERADA DI TOKO --}}
        {{-- ========================================= --}}

        @else

            <form
                action="{{ route('pages.orders.store') }}"
                method="POST"
                enctype="multipart/form-data"
                class="flex min-h-[calc(100vh-3rem)] flex-col">

                @csrf

                <input type="hidden" name="location" value="outside">

                {{-- ========================= --}}
                {{-- PROGRESS --}}
                {{-- ========================= --}}

                <div class="mb-8 flex items-start justify-between">

                    @foreach ([
                        1 => 'Pilih Layanan',
                        2 => 'Detail Layanan',
                        3 => 'Info Pelanggan',
                        4 => 'Review'
                    ] as $number => $label)

                        <div class="flex flex-1 flex-col items-center">
                            <div id="progress-{{ $number }}"
                                class="flex h-9 w-9 items-center justify-center rounded-full bg-gray-300 text-sm font-medium text-white">
                                {{ $number }}
                            </div>

                            <span class="mt-1 text-center text-xs text-gray-500">
                                {{ $label }}
                            </span>
                        </div>

                    @endforeach

                </div>


                {{-- ========================= --}}
                {{-- STEP 1 --}}
                {{-- ========================= --}}

                <section id="step-1">

                    <div class="mb-6 text-center">

                        <h1 class="text-xl font-semibold text-gray-900">
                            Pilih Jenis Layanan
                        </h1>

                        <p class="mt-2 text-base leading-relaxed text-gray-500">
                            Silakan pilih layanan yang Anda butuhkan untuk melanjutkan proses pesanan.
                        </p>

                    </div>


                    <div class="space-y-3">

                        <label class="block cursor-pointer">

                            <input
                                type="radio"
                                name="service"
                                value="print"
                                class="peer hidden"
                                required>

                            <div class="flex rounded-lg border border-gray-300 peer-checked:border-[#1976D2] peer-checked:bg-blue-50">
                                <img src="{{ asset('images/print-img.webp') }}" alt="Print Dokumen" class="h-auto w-auto max-w-28 rounded-l-lg object-cover">

                                <div class="p-4">
                                    <h3 class="text-base font-semibold text-gray-900">
                                        Print Dokumen
                                    </h3>
    
                                    <p class="mt-1 text-base text-gray-500">
                                        Cetak dokumen hitam putih atau warna.
                                    </p>
                                    
                                </div>

                            </div>

                        </label>


                        <label class="block cursor-pointer">

                            <input
                                type="radio"
                                name="service"
                                value="typing"
                                class="peer hidden">

                            <div class="flex rounded-lg border border-gray-300 peer-checked:border-[#1976D2] peer-checked:bg-blue-50">
                                <img src="{{ asset('images/pengetikan-img.webp') }}" alt="Pengetikan" class="h-auto w-auto max-w-28 rounded-l-lg object-cover">

                                <div class="p-4">
                                    <h3 class="text-base font-semibold text-gray-900">
                                        Pengetikan
                                    </h3>

                                    <p class="mt-1 text-base text-gray-500">
                                        Jasa pengetikan surat, tugas, atau transkripsi dokumen.
                                    </p>
                                </div>

                            </div>

                        </label>


                        <label class="block cursor-pointer">

                            <input
                                type="radio"
                                name="service"
                                value="photo"
                                class="peer hidden">

                            <div class="flex rounded-lg border border-gray-300 peer-checked:border-[#1976D2] peer-checked:bg-blue-50">

                                <img src="{{ asset('images/cetak-foto-img.webp') }}" alt="Cetak Foto" class="h-auto w-auto max-w-28 rounded-l-lg object-cover">

                                <div class="p-4">
                                    <h3 class="text-base font-semibold text-gray-900">
                                        Cetak Foto
                                    </h3>

                                    <p class="mt-1 text-base text-gray-500">
                                        Cetak foto dengan berbagai ukuran.
                                    </p>

                                </div>

                            </div>

                        </label>

                    </div>

                </section>


                {{-- ========================= --}}
                {{-- STEP 2 --}}
                {{-- ========================= --}}

                <section id="step-2" class="hidden">

                    <div class="mb-6 text-center">

                        <h1 class="text-xl font-semibold text-gray-900">
                            Detail Layanan
                        </h1>

                        <p class="mt-2 text-base leading-relaxed text-gray-500">
                            Masukkan informasi dokumen atau file yang ingin Anda cetak.
                        </p>

                    </div>


                    {{-- Upload --}}
                    <div>

                        <label class="mb-2 block text-base font-medium text-gray-800">
                            Unggah Dokumen
                        </label>

                        <label
                            for="outside-file"
                            class="flex cursor-pointer flex-col items-center rounded-lg border border-gray-300 px-5 py-6 text-center">

                            <div class="bg-[#D0EFFC] mb-3 flex h-12 w-12 items-center justify-center rounded-full text-[#1976D2]">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.9999 29.3335V17.3335M11.3333 22.0002L15.9999 17.3335L20.6666 22.0002" stroke="#0C4497" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M26.6666 23.4762C28.6582 22.696 30.6666 20.9184 30.6666 17.3332C30.6666 11.9998 26.2221 10.6665 23.9999 10.6665C23.9999 7.99984 23.9999 2.6665 15.9999 2.6665C7.99992 2.6665 7.99992 7.99984 7.99992 10.6665C5.7777 10.6665 1.33325 11.9998 1.33325 17.3332C1.33325 20.9184 3.34162 22.696 5.33325 23.4762" stroke="#0C4497" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>

                            <p class="text-base font-medium text-gray-800">
                                Unggah file yang ingin dicetak
                            </p>

                            <p class="mt-1 text-base text-gray-500">
                                Mendukung dokumen dan gambar hingga 100 MB.
                            </p>

                            <input
                                id="outside-file"
                                type="file"
                                name="file"
                                class="hidden"
                                required>

                        </label>
                            
                        {{-- Preview nama file (luar toko) --}}
                        <p id="outside-file-preview"
                            class="mt-3 hidden rounded-lg bg-gray-100 px-4 py-3 text-base text-gray-700">
                        </p>

                    </div>


                    <div class="mt-5">

                        <label class="mb-2 block text-base font-medium text-gray-800">
                            Ukuran Kertas
                        </label>

                        <div class="space-y-2">

                            <label class="flex items-center gap-3 text-base">
                                <input
                                    type="radio"
                                    name="paper_size"
                                    value="A4"
                                    checked>
                                A4 (21 × 29.7 cm)
                            </label>

                            <label class="flex items-center gap-3 text-base">
                                <input
                                    type="radio"
                                    name="paper_size"
                                    value="F4">
                                F4 (21.5 × 33 cm)
                            </label>

                            <label class="flex items-center gap-3 text-base">
                                <input
                                    type="radio"
                                    name="paper_size"
                                    value="A5">
                                A5 (14.8 × 21 cm)
                            </label>

                            <label class="flex items-center gap-3 text-base">
                                <input
                                    type="radio"
                                    name="paper_size"
                                    value="custom">
                                Custom
                            </label>

                        </div>

                    </div>


                    <div class="mt-5">

                        <label class="mb-2 block text-base font-medium text-gray-800">
                            Jenis Kertas
                        </label>

                        <select
                            name="paper_type"
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 text-base">

                            <option value="">
                                Pilih jenis kertas
                            </option>

                            <option value="hvs_70">
                                HVS 70gr
                            </option>

                            <option value="hvs_80">
                                HVS 80gr
                            </option>

                        </select>

                    </div>


                    <div class="mt-5">

                        <label class="mb-2 block text-base font-medium text-gray-800">
                            Jumlah Salinan
                        </label>

                        <input
                            type="number"
                            name="quantity"
                            min="1"
                            value="1"
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 text-base">
                    </div>


                    <div class="mt-5">

                        <label class="mb-2 block text-base font-medium text-gray-800">
                            Pilihan Warna
                        </label>

                        <div class="grid grid-cols-2 gap-3">

                            <label class="cursor-pointer">

                                <input
                                    type="radio"
                                    name="color"
                                    value="black_white"
                                    class="peer hidden"
                                    checked>

                                <div class="rounded-lg border border-gray-300 p-4 text-center text-base peer-checked:border-[#1976D2] peer-checked:bg-blue-50">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.9999 3.59988L12.0419 2.85108C12.0139 2.84977 11.9859 2.84977 11.9579 2.85108L11.9999 3.59988ZM12.9404 3.65268L13.0661 2.91318C13.0383 2.90877 13.0104 2.90567 12.9824 2.90388L12.9404 3.65268ZM13.8692 3.81048L14.0768 3.08988C14.0497 3.0823 14.0223 3.07599 13.9946 3.07098L13.8692 3.81048ZM14.7743 4.07148L15.0614 3.37848C15.0353 3.36794 15.0088 3.35863 14.9819 3.35058L14.7743 4.07148ZM15.6443 4.43148L16.0073 3.77538C15.9827 3.76201 15.9574 3.7498 15.9317 3.73878L15.6443 4.43148ZM16.469 4.88748L16.9031 4.27548C16.88 4.25957 16.8562 4.24476 16.8317 4.23108L16.469 4.88748ZM17.237 5.43258L17.7371 4.87338C17.7159 4.85486 17.6939 4.83734 17.6711 4.82088L17.237 5.43258ZM17.9399 6.05988L18.4991 5.56008C18.4802 5.53936 18.4604 5.51954 18.4397 5.50068L17.9399 6.05988ZM18.5675 6.76218L19.1795 6.32838C19.1629 6.30556 19.1453 6.28354 19.1267 6.26238L18.5675 6.76218ZM19.1126 7.53048L19.769 7.16748C19.7552 7.1431 19.7403 7.11937 19.7243 7.09638L19.1126 7.53048ZM19.5686 8.35488L20.2613 8.06808C20.2503 8.04222 20.2381 8.01689 20.2247 7.99218L19.5686 8.35488ZM19.9286 9.22518L20.6495 9.01758C20.6414 8.99076 20.6321 8.96433 20.6216 8.93838L19.9286 9.22518ZM20.1896 10.1303L20.9291 10.0049C20.9241 9.9772 20.9178 9.94977 20.9102 9.92268L20.1896 10.1303ZM20.3474 11.0591L21.0962 11.0171C21.0944 10.989 21.0913 10.9611 21.0869 10.9334L20.3474 11.0591ZM20.3999 11.9999L21.1487 12.0419C21.15 12.0139 21.15 11.9859 21.1487 11.9579L20.3999 11.9999ZM20.3471 12.9404L21.0866 13.0661C21.0912 13.0385 21.0943 13.0106 21.0959 12.9824L20.3471 12.9404ZM20.1893 13.8692L20.9099 14.0768C20.9177 14.0498 20.924 14.0224 20.9288 13.9946L20.1893 13.8692ZM19.9283 14.7743L20.6213 15.0614C20.6321 15.0354 20.6414 15.0089 20.6492 14.9819L19.9283 14.7743ZM19.5683 15.6443L20.2244 16.0073C20.238 15.9827 20.2502 15.9575 20.261 15.9317L19.5683 15.6443ZM19.1123 16.469L19.7243 16.9031C19.7403 16.8801 19.7551 16.8563 19.7687 16.8317L19.1123 16.469ZM18.5672 17.237L19.1264 17.7371C19.1452 17.7161 19.1627 17.6941 19.1789 17.6711L18.5672 17.237ZM17.9399 17.9399L18.4397 18.4991C18.4607 18.4805 18.4805 18.4607 18.4991 18.4397L17.9399 17.9399ZM17.2376 18.5675L17.6714 19.1795C17.6944 19.1631 17.7164 19.1455 17.7374 19.1267L17.2376 18.5675ZM16.4693 19.1126L16.8323 19.769C16.8565 19.7554 16.8802 19.7405 16.9034 19.7243L16.4693 19.1126ZM15.6449 19.5686L15.9317 20.2613C15.9577 20.2505 15.983 20.2383 16.0076 20.2247L15.6449 19.5686ZM14.7746 19.9286L14.9822 20.6495C15.0092 20.6417 15.0357 20.6324 15.0617 20.6216L14.7746 19.9286ZM13.8695 20.1896L13.9949 20.9291C14.0229 20.9243 14.0503 20.918 14.0771 20.9102L13.8695 20.1896ZM12.9407 20.3474L12.9827 21.0962C13.0109 21.0946 13.0388 21.0915 13.0664 21.0869L12.9407 20.3474ZM11.9999 20.3999L11.9579 21.1487C11.9859 21.1501 12.0139 21.1501 12.0419 21.1487L11.9999 20.3999ZM11.0594 20.3471L10.9337 21.0866C10.9613 21.0912 10.9892 21.0943 11.0174 21.0959L11.0594 20.3471ZM10.1306 20.1893L9.92298 20.9099C9.94998 20.9177 9.97738 20.924 10.0052 20.9288L10.1306 20.1893ZM9.22548 19.9283L8.93868 20.6213C8.96448 20.6321 8.99088 20.6414 9.01788 20.6492L9.22548 19.9283ZM8.35548 19.5683L7.99248 20.2244C8.01708 20.238 8.04238 20.2502 8.06838 20.261L8.35548 19.5683ZM7.53078 19.1123L7.09668 19.7243C7.11968 19.7403 7.14348 19.7551 7.16808 19.7687L7.53078 19.1123ZM6.76278 18.5672L6.26268 19.1264C6.28368 19.1452 6.30568 19.1627 6.32868 19.1789L6.76278 18.5672ZM6.05988 17.9399L5.50068 18.4397C5.51928 18.4607 5.53908 18.4805 5.56008 18.4991L6.05988 17.9399ZM5.43228 17.2376L4.82028 17.6714C4.83668 17.6944 4.85428 17.7164 4.87308 17.7374L5.43228 17.2376ZM4.88718 16.4693L4.23078 16.8323C4.24438 16.8565 4.25928 16.8802 4.27548 16.9034L4.88718 16.4693ZM4.43118 15.6449L3.73848 15.9317C3.74928 15.9577 3.76148 15.983 3.77508 16.0076L4.43118 15.6449ZM4.07118 14.7746L3.35028 14.9822C3.35808 15.0092 3.36738 15.0357 3.37818 15.0617L4.07118 14.7746ZM3.81018 13.8695L3.07068 13.9949C3.07548 14.0229 3.08178 14.0503 3.08958 14.0771L3.81018 13.8695ZM3.65238 12.9407L2.90358 12.9827C2.90518 13.0109 2.90828 13.0388 2.91288 13.0664L3.65238 12.9407ZM3.59988 11.9999L2.85108 11.9579C2.84977 11.9859 2.84977 12.0139 2.85108 12.0419L3.59988 11.9999ZM3.65268 11.0594L2.91318 10.9337C2.90877 10.9614 2.90567 10.9893 2.90388 11.0174L3.65268 11.0594ZM3.81048 10.1306L3.08988 9.92298C3.08208 9.94998 3.07578 9.97738 3.07098 10.0052L3.81048 10.1306ZM4.07148 9.22548L3.37848 8.93868C3.36795 8.96463 3.35864 8.99106 3.35058 9.01788L4.07148 9.22548ZM4.43148 8.35548L3.77538 7.99248C3.762 8.01719 3.74979 8.04252 3.73878 8.06838L4.43148 8.35548ZM4.88748 7.53078L4.27548 7.09668C4.25957 7.11977 4.24476 7.1436 4.23108 7.16808L4.88748 7.53078ZM5.43258 6.76278L4.87338 6.26268C4.85458 6.28368 4.83708 6.30568 4.82088 6.32868L5.43258 6.76278ZM6.05988 6.05988L5.56008 5.50068C5.53908 5.51928 5.51928 5.53908 5.50068 5.56008L6.05988 6.05988ZM6.76218 5.43228L6.32838 4.82028C6.30538 4.83668 6.28338 4.85428 6.26238 4.87308L6.76218 5.43228ZM7.53048 4.88718L7.16748 4.23078C7.1431 4.24456 7.11937 4.25948 7.09638 4.27548L7.53048 4.88718ZM8.35488 4.43118L8.06808 3.73848C8.04208 3.74928 8.01678 3.76148 7.99218 3.77508L8.35488 4.43118ZM9.22518 4.07118L9.01758 3.35028C8.99058 3.35808 8.96418 3.36738 8.93838 3.37818L9.22518 4.07118ZM10.1303 3.81018L10.0049 3.07068C9.9772 3.07569 9.94977 3.082 9.92268 3.08958L10.1303 3.81018ZM11.0591 3.65238L11.0171 2.90358C10.989 2.90537 10.9611 2.90847 10.9334 2.91288L11.0591 3.65238ZM11.9576 4.34838L12.8981 4.40118L12.9821 2.90358L12.0416 2.85078L11.9576 4.34838ZM12.8144 4.39188L13.7432 4.54968L13.9943 3.07068L13.0658 2.91288L12.8144 4.39188ZM13.661 4.53078L14.5664 4.79178L14.9816 3.35028L14.0765 3.08928L13.661 4.53078ZM14.4869 4.76388L15.3572 5.12448L15.9311 3.73848L15.0611 3.37818L14.4869 4.76388ZM15.2813 5.08788L16.106 5.54358L16.8314 4.23078L16.007 3.77478L15.2813 5.08788ZM16.0346 5.49888L16.8029 6.04398L17.6708 4.82058L16.9028 4.27548L16.0346 5.49888ZM16.7372 5.99148L17.4395 6.61908L18.4391 5.50068L17.7368 4.87308L16.7372 5.99148ZM17.3801 6.55968L18.0077 7.26198L19.1261 6.26238L18.4985 5.56038L17.3801 6.55968ZM17.9552 7.19628L18.5003 7.96428L19.7237 7.09638L19.1786 6.32838L17.9552 7.19628ZM18.4556 7.89318L18.9116 8.71788L20.2241 7.99218L19.7684 7.16778L18.4556 7.89318ZM18.8747 8.64198L19.2353 9.51198L20.6216 8.93838L20.2607 8.06808L18.8747 8.64198ZM19.2077 9.43278L19.4684 10.3382L20.9096 9.92268L20.6489 9.01758L19.2077 9.43278ZM19.4495 10.256L19.6073 11.1848L21.0863 10.9334L20.9285 10.0049L19.4495 10.256ZM19.598 11.1011L19.6508 12.0416L21.1484 11.9576L21.0956 11.0171L19.598 11.1011ZM19.6508 11.9576L19.598 12.8981L21.0956 12.9821L21.1484 12.0416L19.6508 11.9576ZM19.6073 12.8144L19.4495 13.7432L20.9285 13.9943L21.0863 13.0658L19.6073 12.8144ZM19.4684 13.661L19.2074 14.5664L20.6489 14.9816L20.9099 14.0768L19.4684 13.661ZM19.2353 14.4869L18.8747 15.3572L20.2607 15.9311L20.621 15.0611L19.2353 14.4869ZM18.9113 15.2813L18.4556 16.106L19.7684 16.8314L20.2244 16.007L18.9113 15.2813ZM18.5003 16.0346L17.9552 16.8029L19.1786 17.6708L19.7237 16.9028L18.5003 16.0346ZM18.0077 16.7372L17.3801 17.4395L18.4985 18.4391L19.1261 17.7368L18.0077 16.7372ZM17.4395 17.3801L16.7372 18.0077L17.7368 19.1261L18.4388 18.4985L17.4395 17.3801ZM16.8029 17.9552L16.0349 18.5003L16.9028 19.7237L17.6708 19.1786L16.8029 17.9552ZM16.106 18.4556L15.2813 18.9116L16.007 20.2241L16.8314 19.7684L16.106 18.4556ZM15.3572 18.8747L14.4872 19.2353L15.0611 20.6213L15.9311 20.2607L15.3572 18.8747ZM14.5664 19.2077L13.6613 19.4684L14.0765 20.9096L14.9816 20.6489L14.5664 19.2077ZM13.7432 19.4495L12.8144 19.6073L13.0658 21.0863L13.9943 20.9285L13.7432 19.4495ZM12.8981 19.598L11.9576 19.6508L12.0416 21.1484L12.9821 21.0956L12.8981 19.598ZM12.0416 19.6508L11.1011 19.598L11.0171 21.0956L11.9576 21.1484L12.0416 19.6508ZM11.1848 19.6073L10.256 19.4495L10.0049 20.9285L10.9334 21.0863L11.1848 19.6073ZM10.3382 19.4684L9.43278 19.2074L9.01758 20.6489L9.92298 20.9099L10.3382 19.4684ZM9.51228 19.2353L8.64198 18.8747L8.06808 20.2607L8.93808 20.621L9.51228 19.2353ZM8.71788 18.9113L7.89318 18.4556L7.16778 19.7684L7.99248 20.2244L8.71788 18.9113ZM7.96458 18.5003L7.19628 17.9552L6.32838 19.1786L7.09638 19.7237L7.96458 18.5003ZM7.26198 18.0077L6.55968 17.3801L5.56008 18.4985L6.26238 19.1261L7.26198 18.0077ZM6.61908 17.4395L5.99148 16.7372L4.87308 17.7368L5.50068 18.4388L6.61908 17.4395ZM6.04398 16.8029L5.49888 16.0349L4.27548 16.9028L4.82058 17.6708L6.04398 16.8029ZM5.54358 16.106L5.08758 15.2813L3.77508 16.007L4.23078 16.8314L5.54358 16.106ZM5.12448 15.3572L4.76388 14.4872L3.37788 15.0611L3.73848 15.9311L5.12448 15.3572ZM4.79148 14.5664L4.53078 13.6613L3.08958 14.0765L3.35028 14.9816L4.79148 14.5664ZM4.54968 13.7432L4.39188 12.8144L2.91288 13.0658L3.07068 13.9943L4.54968 13.7432ZM4.40118 12.8981L4.34838 11.9576L2.85078 12.0416L2.90358 12.9821L4.40118 12.8981ZM4.34838 12.0416L4.40118 11.1011L2.90358 11.0171L2.85078 11.9576L4.34838 12.0416ZM4.39188 11.1848L4.54968 10.256L3.07068 10.0049L2.91288 10.9334L4.39188 11.1848ZM4.53078 10.3382L4.79178 9.43278L3.35028 9.01758L3.08928 9.92268L4.53078 10.3382ZM4.76388 9.51228L5.12448 8.64198L3.73848 8.06808L3.37818 8.93808L4.76388 9.51228ZM5.08788 8.71788L5.54358 7.89318L4.23078 7.16778L3.77478 7.99218L5.08788 8.71788ZM5.49888 7.96458L6.04398 7.19628L4.82058 6.32838L4.27548 7.09668L5.49888 7.96458ZM5.99148 7.26198L6.61908 6.55968L5.50068 5.56008L4.87308 6.26238L5.99148 7.26198ZM6.55968 6.61908L7.26198 5.99148L6.26238 4.87308L5.56008 5.50068L6.55968 6.61908ZM7.19628 6.04398L7.96428 5.49888L7.09638 4.27548L6.32838 4.82028L7.19628 6.04398ZM7.89318 5.54358L8.71788 5.08758L7.99218 3.77508L7.16748 4.23078L7.89318 5.54358ZM8.64198 5.12448L9.51198 4.76388L8.93838 3.37818L8.06808 3.73848L8.64198 5.12448ZM9.43278 4.79148L10.3382 4.53078L9.92268 3.08958L9.01758 3.35028L9.43278 4.79148ZM10.256 4.54968L11.1848 4.39188L10.9334 2.91288L10.0049 3.07068L10.256 4.54968ZM11.1011 4.40118L12.0416 4.34838L11.9576 2.85078L11.0171 2.90358L11.1011 4.40118Z" fill="black"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9999 3.6001L11.0594 3.6529L10.1306 3.8107L9.22545 4.0717L8.35545 4.4317L7.53075 4.8877L6.76275 5.4328L6.05985 6.0601L5.43225 6.7624L4.88715 7.5307L4.43115 8.3551L4.07115 9.2254L3.81015 10.1305L3.65235 11.0593L3.59985 12.0001L3.65265 12.9406L3.81045 13.8694L4.07145 14.7745L4.43145 15.6445L4.88745 16.4692L5.43255 17.2372L6.05985 17.9401L6.76215 18.5677L7.53045 19.1128L8.35485 19.5688L9.22515 19.9288L10.1303 20.1898L11.0591 20.3476L11.9957 20.4001H11.9999V3.6001Z" fill="black"/>
                                    </svg>
                                    Hitam Putih
                                </div>

                            </label>

                            <label class="cursor-pointer">

                                <input
                                    type="radio"
                                    name="color"
                                    value="color"
                                    class="peer hidden">

                                <div class="rounded-lg border border-gray-300 p-4 items-center justify-center text-center text-base peer-checked:border-[#1976D2] peer-checked:bg-blue-50">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.5096 9.54C20.4243 9.77932 20.2918 9.99909 20.12 10.1863C19.9483 10.3735 19.7407 10.5244 19.5096 10.63C18.2796 11.1806 17.2346 12.0745 16.5002 13.2045C15.7659 14.3345 15.3733 15.6524 15.3696 17C15.3711 17.4701 15.418 17.9389 15.5096 18.4C15.5707 18.6818 15.5747 18.973 15.5215 19.2564C15.4682 19.5397 15.3588 19.8096 15.1996 20.05C15.0649 20.2604 14.8877 20.4403 14.6793 20.5781C14.4709 20.7158 14.2359 20.8085 13.9896 20.85C13.4554 20.9504 12.9131 21.0006 12.3696 21C11.1638 21.0006 9.97011 20.7588 8.85952 20.2891C7.74893 19.8194 6.74405 19.1314 5.90455 18.2657C5.06506 17.4001 4.40807 16.3747 3.97261 15.2502C3.53714 14.1257 3.33208 12.9252 3.36959 11.72C3.4472 9.47279 4.3586 7.33495 5.92622 5.72296C7.49385 4.11097 9.60542 3.14028 11.8496 3H12.3596C14.0353 3.00042 15.6777 3.46869 17.1017 4.35207C18.5257 5.23544 19.6748 6.49885 20.4196 8C20.6488 8.47498 20.6812 9.02129 20.5096 9.52V9.54Z" stroke="#0C4497" stroke-width="1.5"/>
                                        <path d="M8 16.01L8.01 15.9989" stroke="#EE443F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6 12.01L6.01 11.9989" stroke="#43B75D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M8 8.01L8.01 7.99889" stroke="#FFAA00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12 6.01L12.01 5.99889" stroke="#0095FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M16 8.01L16.01 7.99889" stroke="#54B8FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Warna
                                </div>

                            </label>

                        </div>

                    </div>


                    <div class="mt-5">

                        <label class="mb-2 block text-base font-medium text-gray-800">
                            Catatan Tambahan
                            <span class="font-normal text-gray-400">(opsional)</span>
                        </label>

                        <textarea
                            name="notes"
                            rows="3"
                            placeholder="Contoh: Jilidkan hitam, cetak bolak-balik, dsb."
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 text-base"
                        ></textarea>

                    </div>

                </section>


                {{-- ========================= --}}
                {{-- STEP 3 --}}
                {{-- ========================= --}}

                <section id="step-3" class="hidden">

                    <div class="mb-6 text-center">

                        <h1 class="text-xl font-semibold text-gray-900">
                            Detail Pelanggan
                        </h1>

                        <p class="mt-2 text-base leading-relaxed text-gray-500">
                            Masukkan informasi yang dapat kami gunakan untuk menghubungi Anda.
                        </p>

                    </div>


                    <div class="space-y-5">

                        <div>

                            <label class="mb-2 block text-base font-medium text-gray-800">
                                Nama
                            </label>

                            <input
                                type="text"
                                name="name"
                                placeholder="Nisa Kusuma"
                                required
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-base outline-none focus:border-[#1976D2]">

                        </div>


                        <div>
                            <label class="mb-2 block text-base font-medium text-gray-800">
                                Nomor WhatsApp
                            </label>

                            <input
                                type="text"
                                name="phone"
                                placeholder="cth: 081234567890"
                                required
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-base outline-none focus:border-[#1976D2]">
                        </div>

                                                <div>

                            <label class="mb-2 block text-base font-medium text-gray-800">
                                Waktu Pengambilan
                            </label>

                            <div class="space-y-2">

                                <label class="flex items-center gap-3 text-base">
                                    <input
                                        type="radio"
                                        name="pickup_option"
                                        value="today"
                                        checked>
                                    Hari ini
                                </label>

                                <label class="flex items-center gap-3 text-base">
                                    <input
                                        type="radio"
                                        name="pickup_option"
                                        value="tomorrow">
                                    Besok
                                </label>

                                <label class="flex items-center gap-3 text-base">
                                    <input
                                        type="radio"
                                        name="pickup_option"
                                        value="custom">
                                    Pilih tanggal tertentu
                                </label>

                            </div>

                        </div>

                        <div id="pickup-time-wrapper">

                            <label class="mb-2 block text-base font-medium text-gray-800">
                                Jam Pengambilan
                            </label>

                            <input
                                type="time"
                                name="pickup_time"
                                value="10:00"
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-base outline-none focus:border-[#1976D2]">

                        </div>

                        <div id="pickup-date-wrapper" class="hidden">

                            <label class="mb-2 block text-base font-medium text-gray-800">
                                Tanggal Pengambilan
                            </label>

                            <input
                                type="date"
                                name="pickup_date"
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-base outline-none focus:border-[#1976D2]">

                        </div>

                    </div>

                </section>


                {{-- ========================= --}}
                {{-- STEP 4 --}}
                {{-- ========================= --}}

                <section id="step-4" class="hidden">

                    <div class="mb-6 text-center">

                        <h1 class="text-xl font-semibold text-gray-900">
                            Review Pesanan
                        </h1>

                        <p class="mt-2 text-base leading-relaxed text-gray-500">
                            Pastikan semua data di bawah ini sudah benar sebelum melanjutkan.
                        </p>

                    </div>


                    <div class="space-y-4">

                        <div class="rounded-lg border border-gray-200 p-4">

                            <h3 class="mb-3 text-base font-semibold text-[#1976D2]">
                                Detail Layanan
                            </h3>

                            <p class="text-base">
                                Layanan:
                                <span id="review-service">-</span>
                            </p>

                            <p class="text-base">
                                Ukuran:
                                <span id="review-paper">-</span>
                            </p>

                            <p class="text-base">
                                Jumlah:
                                <span id="review-quantity">-</span>
                            </p>

                            <p class="text-base">
                                Warna:
                                <span id="review-color">-</span>
                            </p>

                        </div>


                        <div class="rounded-lg border border-gray-200 p-4">

                            <h3 class="mb-3 text-base font-semibold text-[#1976D2]">
                                Detail Pelanggan
                            </h3>

                            <p class="text-base">
                                Nama:
                                <span id="review-name">-</span>
                            </p>

                            <p class="text-base">
                                WhatsApp:
                                <span id="review-phone">-</span>
                            </p>

                            <p class="text-base">
                                Pengambilan:
                                <span id="review-pickup">-</span>
                            </p>

                        </div>


                        <div class="rounded-lg border border-gray-200 p-4">

                            <h3 class="mb-3 text-base font-semibold text-[#1976D2]">
                                File Dokumen
                            </h3>

                            <p
                                id="review-file"
                                class="rounded bg-gray-100 px-3 py-2 text-base"
                            >
                                Belum ada file
                            </p>

                        </div>

                    </div>

                </section>


                {{-- ========================= --}}
                {{-- BUTTON --}}
                {{-- ========================= --}}

                <div class="mt-auto flex gap-3 pt-8">

                    <button
                        type="button"
                        id="previous-button"
                        onclick="previousStep()"
                        class="hidden flex-1 rounded-lg border border-[#1976D2] px-4 py-3 text-base font-medium text-[#1976D2]"
                    >
                        ← Sebelumnya
                    </button>

                    <button
                        type="button"
                        id="next-button"
                        onclick="nextStep()"
                        disabled
                        class="flex w-full items-center justify-center rounded-lg bg-[#1976D2] px-4 py-3 text-base font-medium text-white
                        disabled:opacity-50 disabled:cursor-not-allowed">
                        Selanjutnya 
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 12H18.5M12.5 18L18.5 12L12.5 6" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>

                    <button
                        type="submit"
                        id="submit-button"
                        class="hidden flex w-full items-center justify-center rounded-lg bg-[#1976D2] px-4 py-3 text-base font-medium text-white">
                        Buat Pesanan
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 12H18.5M12.5 18L18.5 12L12.5 6" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>

                </div>

            </form>

        @endif

    </main>


    <script>

        // =========================================
        // FLOW DI TOKO
        // =========================================

        let storeStep = 1;

        function storeNext() {
            if (!validateStoreStep1()) {
                showIncompleteAlert();
                return;
            }

            document.getElementById('store-step-1').classList.add('hidden');
            document.getElementById('store-step-2').classList.remove('hidden');

            document.getElementById('store-next').classList.add('hidden');
            document.getElementById('store-submit').classList.remove('hidden');

            document.getElementById('store-back').classList.remove('hidden');

        }


        function storePrevious() {

            document.getElementById('store-step-2').classList.add('hidden');
            document.getElementById('store-step-1').classList.remove('hidden');

            document.getElementById('store-submit').classList.add('hidden');
            document.getElementById('store-next').classList.remove('hidden');

            document.getElementById('store-back').classList.add('hidden');

        }

        function validateStoreStep1() {
            const file = document.getElementById('store-file');
            return file && file.files.length > 0;
        }

        function refreshStoreNextButton() {
            const nextBtn = document.getElementById('store-next');
            const file = document.getElementById('store-file');
            if (!nextBtn || !file) return;
            nextBtn.disabled = file.files.length === 0;
        }


        // =========================================
        // FLOW TIDAK DI TOKO
        // =========================================

        let currentStep = 1;

        function showStep(step) {

            for (let i = 1; i <= 4; i++) {

                document
                    .getElementById('step-' + i)
                    .classList.add('hidden');

                document
                    .getElementById('progress-' + i)
                    .classList.remove(
                        'bg-[#1976D2]',
                        'bg-green-500'
                    );

                document
                    .getElementById('progress-' + i)
                    .classList.add('bg-gray-300');
            }


            document
                .getElementById('step-' + step)
                .classList.remove('hidden');


            for (let i = 1; i < step; i++) {

                document
                    .getElementById('progress-' + i)
                    .classList.remove('bg-gray-300');

                document
                    .getElementById('progress-' + i)
                    .classList.add('bg-green-500');

            }


            document
                .getElementById('progress-' + step)
                .classList.remove('bg-gray-300');

            document
                .getElementById('progress-' + step)
                .classList.add('bg-[#1976D2]');


            const previousButton =
                document.getElementById('previous-button');

            const nextButton =
                document.getElementById('next-button');

            const submitButton =
                document.getElementById('submit-button');


            previousButton.classList.toggle(
                'hidden',
                step === 1
            );

            nextButton.classList.toggle(
                'hidden',
                step === 4
            );

            submitButton.classList.toggle(
                'hidden',
                step !== 4
            );

            refreshNextButton();
        }


        function nextStep() {

            if (!validateStep(currentStep)) {
                showIncompleteAlert();
                return;
            }

            if (currentStep < 4) {

                currentStep++;

                if (currentStep === 4) {
                    updateReview();
                }

                showStep(currentStep);
            }

        }


        function previousStep() {

            if (currentStep > 1) {

                currentStep--;

                showStep(currentStep);
            }

        }


        function updateReview() {

            const service =
                document.querySelector(
                    'input[name="service"]:checked'
                );

            const paper =
                document.querySelector(
                    'input[name="paper_size"]:checked'
                );

            const quantity =
                document.querySelector(
                    'input[name="quantity"]'
                );

            const color =
                document.querySelector(
                    'input[name="color"]:checked'
                );

            const name =
                document.querySelector(
                    'input[name="name"]'
                );

            const phone =
                document.querySelector(
                    'input[name="phone"]'
                );

            const file =
                document.querySelector(
                    'input[name="file"]'
                );


            document.getElementById('review-service').textContent =
                service ? service.value : '-';

            document.getElementById('review-paper').textContent =
                paper ? paper.value : '-';

            document.getElementById('review-quantity').textContent =
                quantity ? quantity.value : '-';

            document.getElementById('review-color').textContent =
                color ? color.value : '-';

            document.getElementById('review-name').textContent =
                name ? name.value : '-';

            document.getElementById('review-phone').textContent =
                phone ? phone.value : '-';

            document.getElementById('review-file').textContent =
                file && file.files.length > 0
                    ? file.files[0].name
                    : 'Belum ada file';
        }

        function validateStep(step) {
            if (step === 1) {
                return !!document.querySelector('input[name="service"]:checked');
            }

            if (step === 2) {
                const file = document.getElementById('outside-file');
                const fileOk = file && file.files.length > 0;
                const paperSize = document.querySelector('input[name="paper_size"]:checked');
                const paperType = document.querySelector('select[name="paper_type"]');
                const quantity = document.querySelector('input[name="quantity"]');
                const color = document.querySelector('input[name="color"]:checked');

                return (
                    fileOk &&
                    !!paperSize &&
                    paperType && paperType.value !== '' &&
                    quantity && quantity.value !== '' && Number(quantity.value) >= 1 &&
                    !!color
                );
            }

            if (step === 3) {
                const name = document.querySelector('input[name="name"]');
                const phone = document.querySelector('input[name="phone"]');
                const pickupOption = document.querySelector('input[name="pickup_option"]:checked');
                const pickupTime = document.querySelector('input[name="pickup_time"]');
                const pickupDate = document.querySelector('input[name="pickup_date"]');

                let pickupText = '-';
                if (pickupOption) {
                    if (pickupOption.value === 'today') {
                        pickupText = 'Hari ini, ' + (pickupTime ? pickupTime.value : '');
                    } else if (pickupOption.value === 'tomorrow') {
                        pickupText = 'Besok, ' + (pickupTime ? pickupTime.value : '');
                    } else if (pickupOption.value === 'custom') {
                        pickupText = (pickupDate ? pickupDate.value : '-') + ', ' + (pickupTime ? pickupTime.value : '');
                    }
                }
                document.getElementById('review-pickup').textContent = pickupText;
                
                const basicOk =
                    name && name.value.trim() !== '' &&
                    phone && phone.value.trim() !== '' &&
                    !!pickupOption;

                if (!basicOk) return false;

                if (pickupOption.value === 'custom') {
                    return pickupDate && pickupDate.value !== '';
                }

                 return true;
            }

            return true; // step 4 (review) tidak ada input wajib
        }

        function refreshNextButton() {
            const nextBtn = document.getElementById('next-button');
            if (!nextBtn) return;
            nextBtn.disabled = !validateStep(currentStep);
        }

        // =========================================
        // EVENT LISTENER
        // =========================================
        document.addEventListener('DOMContentLoaded', function () {

            // Flow di toko
            const storeFile = document.getElementById('store-file');
            if (storeFile) {
                storeFile.addEventListener('change', function () {
                    updateFilePreview('store-file', 'store-file-preview');
                    refreshStoreNextButton();
                });
                refreshStoreNextButton(); // init
            }

            // Flow luar toko
            const outsideForm = document.querySelector('#step-1')?.closest('form');
            if (outsideForm) {
                outsideForm.addEventListener('input', function () {
                    updateFilePreview('outside-file', 'outside-file-preview');
                    refreshNextButton();
                });
                outsideForm.addEventListener('change', function () {
                    updateFilePreview('outside-file', 'outside-file-preview');
                    refreshNextButton();
                });
            }

            refreshNextButton();
        });

        document.addEventListener('DOMContentLoaded', function () {
            const outsideForm = document.querySelector('#step-1')?.closest('form');
            if (outsideForm) {
                outsideForm.addEventListener('submit', function (e) {
                    // validasi semua step wajib
                    for (let s = 1; s <= 3; s++) {
                        if (!validateStep(s)) {
                            e.preventDefault();
                            showIncompleteAlert();
                            return;
                        }
                    }
                });
            }

            const storeForm = document.getElementById('store-step-1')?.closest('form');
            if (storeForm) {
                storeForm.addEventListener('submit', function (e) {
                    if (!validateStoreStep1()) {
                        e.preventDefault();
                        showIncompleteAlert();
                    }
                });
            }
        });



        // =========================================
        // UTIL: ALERT
        // =========================================
        function showIncompleteAlert() {
            alert('Harap lengkapi form');
        }

        // =========================================
        // PREVIEW NAMA FILE
        // =========================================
        function updateFilePreview(inputId, previewId) {
            const input = document.getElementById(inputId);
            const preview = document.getElementById(previewId);
            if (!input || !preview) return;

            if (input.files && input.files.length > 0) {
                preview.textContent = '📎 ' + input.files[0].name;
                preview.classList.remove('hidden');
            } else {
                preview.textContent = '';
                preview.classList.add('hidden');
            }
        }


        // =========================================
        // DATE WRAPER
        // =========================================
        document.querySelectorAll('input[name="pickup_option"]').forEach(function (radio) {
            radio.addEventListener('change', function () {
                const dateWrapper = document.getElementById('pickup-date-wrapper');
                if (!dateWrapper) return;
                if (this.value === 'custom') {
                    dateWrapper.classList.remove('hidden');
                } else {
                    dateWrapper.classList.add('hidden');
                }
                refreshNextButton();
            });
        });

    </script>

</body>

</html>