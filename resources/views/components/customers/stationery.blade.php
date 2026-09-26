<section id="stationery" class="bg-[#FAFAFA] py-20">
    <div class="mx-auto max-w-6xl px-6">
        <div class="flex flex-col justify-between gap-6 md:flex-row md:items-end">

            <div class="mx-auto max-w-2xl text-center">
                <h2 class="mt-2 text-2xl font-semibold text-[#242424] sm:text-4xl">
                    Lengkapi <span class="text-[#1976D2]">Kebutuhan</span> Anda
                </h2>

                <p class="mt-3 max-w-xl text-[#666]">
                    Temukan alat tulis dan kebutuhan sehari-hari
                    yang tersedia di Ruang Cetak.
                </p>
            </div>
        </div>

        {{-- Product Cards --}}
        <div class="mt-8 grid gap-6 md:grid-cols-2">

            <article class="rounded-2xl bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-md border-1 border-[#D1D1D1]">

                <img src="{{ asset('images/alat-tulis-img.webp') }}" alt="Alat tulis image" class="rounded-t-2xl md:w-full md:h-[200px] object-cover">

                <div class="p-6">
                    <h3 class="text-lg font-semibold">
                        Alat Tulis
                    </h3>
    
                    <p class="mt-1 text-base leading-6 text-[#666]">    
                       Tersedia berbagai alat tulis seperti pulpen, buku tulis, map, dan perlengkapan lainnya.
                    </p>
    
                    <a href="#" class="mt-5 items-center gap-1 flex inline-block text-base font-semibold text-[#1976D2]">
                        Lihat Katalog
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 12H18.5M12.5 18L18.5 12L12.5 6" stroke="#125BB4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </article>

            <article class="rounded-2xl bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-md border-1 border-[#D1D1D1]">

                <img src="{{ asset('images/materai-img.webp') }}" alt="Materai image" class="rounded-t-2xl md:w-full md:h-[200px] object-cover">

                <div class="p-6">
                    <h3 class="text-lg font-semibold">
                        Materai
                    </h3>
    
                    <p class="mt-1 text-base leading-6 text-[#666]">    
                       Materai Rp10.000 — tersedia untuk kebutuhan dokumen Anda.
                    </p>
    
                    <a href="#" class="mt-5 items-center gap-1 flex inline-block text-base font-semibold text-[#1976D2]">
                        Lihat Detail
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 12H18.5M12.5 18L18.5 12L12.5 6" stroke="#125BB4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </article>

        </div>

    </div>

</section>