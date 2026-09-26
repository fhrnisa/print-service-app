<section id="home"
    class="mt-16 relative overflow-hidden bg-gradient-to-b from-[#FAFAFA] to-[#CDE0F2]">

    <div class="mx-auto flex min-h-[620px] max-w-6xl flex-col items-center justify-center gap-12 px-6 py-16">

        {{-- Text --}}
        <div class="max-w-xl text-center">

            <h1 class="mt-5 text-4xl font-bold leading-tight tracking-tight text-[#0C4497] sm:text-5xl lg:text-6xl">
                Cetak & Pengetikan
                <span class="text-[#121212]">
                    Jadi Lebih Mudah
                </span>
            </h1>

            <p class="mt-3 max-w-lg text-base leading-6 text-[#666] sm:text-lg">
                Unggah file, isi detail pesanan, lalu kami akan
                mengonfirmasi harga. Ambil pesanan Anda langsung
                di toko.
            </p>

            {{-- CTA --}}
            <div class="mt-6 flex flex-row gap-3 sm:justify-center">

                <a href="{{ route('pages.orders.choose') }}"
                    class="inline-flex h-12 flex-1 sm:flex-none items-center justify-center rounded-lg
                        bg-[#1976D2] px-4 sm:px-6 font-semibold text-base text-white
                        transition hover:bg-[#1565C0]">
                    Pesan Sekarang
                </a>

                <a href="#layanan"
                    class="inline-flex h-12 flex-1 sm:flex-none items-center justify-center rounded-lg
                        border border-[#1976D2] px-4 sm:px-6 font-semibold text-base text-[#1976D2]
                        transition hover:bg-[#F2F8FE]">
                    Lihat Layanan
                </a>

            </div>

        </div>


        {{-- Card Cek Pesanan --}}
        <div class="text-center text-[#121212] border-2 border-[#D1D9E6] rounded-2xl p-4 bg-white/90 mt-40">
            <p class="text-lg font-semibold">Sudah melakukan pemesanan?</p>
            <p class="text-base mt-1 text-[#555555]">
                Pantau pesanan dengan menggunakan nomor pesanan atau nomor HP.
            </p>

            <a href="{{ route('orders.status') }}"
                class="mt-3 block w-full text-center border border-[#1976D2] rounded-md py-2 px-4 text-base font-semibold text-[#1976D2] hover:bg-[#F2F8FE]">
                Lihat Status Pesanan
            </a>
           </div>
    </div>
</section>