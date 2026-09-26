<section
    id="layanan"
    class="bg-[#FAFAFA] py-20">

    <div class="mx-auto max-w-6xl px-6">

        {{-- Heading --}}
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="mt-2 text-2xl font-semibold text-[#121212] md:text-4xl">
                Layanan 
                <span class="text-[#1976D2]">
                    Unggulan
                </span>
            </h2>

            <p class="mt-4 text-[#666] text-base leading-6 md:text-lg">
                Berbagai layanan untuk membantu kebutuhan
                cetak dan pengetikan Anda.
            </p>
        </div>

        {{-- Cards --}}
        <div class="mt-8 grid gap-6 md:grid-cols-3">

            {{-- Print --}}
            <article class="rounded-2xl bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-md border-1 border-[#D1D1D1]">

                <img src="{{ asset('images/print-img.webp') }}" alt="Print image" class="rounded-t-2xl">

                <div class="p-6">
                    <h3 class="text-lg font-semibold">
                        Cetak Dokumen
                    </h3>
    
                    <p class="mt-1 text-base leading-6 text-[#666]">    
                       Cetak dokumen hingga gambar hitam putih atau warna.
                    </p>
    
                    <a href="#" class="mt-5 items-center gap-1 flex inline-block text-base font-semibold text-[#1976D2]">
                        Lihat Detail
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 12H18.5M12.5 18L18.5 12L12.5 6" stroke="#125BB4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </article>


            {{-- Typing --}}
            <article class="rounded-2xl bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-md border-1 border-[#D1D1D1]">

                <img src="{{ asset('images/pengetikan-img.webp') }}" alt="Pengetikan image" class="rounded-t-2xl">

                <div class="p-6">
                    <h3 class="text-lg font-semibold">
                        Pengetikan
                    </h3>
    
                    <p class="mt-1 text-base leading-6 text-[#666]">    
                       Jasa pengetikan surat, laporan, atau transkripsi dokumen.
                    </p>
    
                    <a href="#" class="mt-5 items-center gap-1 flex inline-block text-base font-semibold text-[#1976D2]">
                        Lihat Detail
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 12H18.5M12.5 18L18.5 12L12.5 6" stroke="#125BB4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </article>


            {{-- Photo --}}
            <article class="rounded-2xl bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-md border-1 border-[#D1D1D1]">

                <img src="{{ asset('images/cetak-foto-img.webp') }}" alt="Cetak Foto image" class="rounded-t-2xl">

                <div class="p-6">
                    <h3 class="text-lg font-semibold">
                        Cetak Foto
                    </h3>
    
                    <p class="mt-1 text-base leading-6 text-[#666]">    
                       Cetak foto dengan berbagai ukuran (3x4, 4x6, dll).
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