<nav class="bg-[#FAFAFA] fixed top-0 left-0 right-0 z-50">
    <div class="max-w-7xl mx-auto py-4 lg:py-6 px-6 lg:px-20">
        <div class="flex-shrink-0 flex justify-between items-center">
            <a href="{{ url('/') }}" class="flex gap-2 items-center">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23.4286 23.9999H27.4C27.7314 23.9999 28 23.7313 28 23.3999V13.3333C28 11.1241 26.2091 9.33325 24 9.33325H8C5.79086 9.33325 4 11.1241 4 13.3333V23.3999C4 23.7313 4.26863 23.9999 4.6 23.9999H8.57143" stroke="#1976D2" stroke-width="2"/>
                    <path d="M10.6667 9.33333V4.8C10.6667 4.35817 11.0249 4 11.4667 4H20.5334C20.9752 4 21.3334 4.35817 21.3334 4.8V9.33333" stroke="#1976D2" stroke-width="2"/>
                    <path d="M8.13051 27.0869L8.57149 24.0001L9.23527 19.3536C9.29157 18.9595 9.62911 18.6667 10.0272 18.6667H21.9729C22.371 18.6667 22.7085 18.9595 22.7648 19.3536L23.4286 24.0001L23.8696 27.0869C23.9385 27.5689 23.5645 28.0001 23.0776 28.0001H8.92246C8.43563 28.0001 8.06166 27.5689 8.13051 27.0869Z" stroke="#1976D2" stroke-width="2"/>
                    <path d="M22.6667 13.3466L22.6801 13.3318" stroke="#1976D2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                <h1 class="text-xl font-semibold text-[#121212]">Ruang Cetak</h1>
            </a>

            <div class="hidden items-center gap-8 md:flex">
                <a href="{{ route('orders.status') }}"
                    class="text-base text-[#333] transition hover:text-[#1976D2]">
                    Cek Pesanan
                </a>

                <a href="#"
                    class="text-base text-[#333] transition hover:text-[#1976D2]">
                    Layanan
                </a>

                <a href="#"
                    class="text-base text-[#333] transition hover:text-[#1976D2]">
                    Alat Tulis
                </a>

                <a href="#"
                    class="text-base text-[#333] transition hover:text-[#1976D2]">
                    Tentang
                </a>

                <a href="#contact"
                    class="text-base text-[#333] transition hover:text-[#1976D2]">
                    Kontak
                </a>

            </div>

            <!-- Mobile Hamburger -->
            <button
                id="menuButton"
                type="button"
                aria-label="Buka menu"
                aria-expanded="false"
                class="flex h-10 w-10 items-center justify-center rounded-lg
                    text-[#333] transition hover:bg-gray-100
                    md:hidden">

                {{-- Hamburger icon --}}
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 6.66675H28" stroke="#131927" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M4 16H28" stroke="#131927" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M4 25.3333H28" stroke="#131927" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

            </button>
        </div>


    <!-- MOBILE MENU -->
    <div
        id="mobileMenu"
        class="hidden border-t border-gray-100 bg-[#FAFAFA] md:hidden">

        <div class="mx-auto max-w-6xl px-6 py-3 items-center justify-between flex flex-col">

            <a
                href="{{ url('/') }}"
                class="block rounded-lg px-4 py-3 text-base text-[#121212]
                    transition hover:bg-[#F2F8FE] hover:text-[#1976D2]">
                Beranda
            </a>

            <a
                href="#"
                class="block rounded-lg px-4 py-3 text-base text-[#121212]
                    transition hover:bg-[#F2F8FE] hover:text-[#1976D2]">
                Pesan
            </a>

            <a
                href="#"
                class="block rounded-lg px-4 py-3 text-base text-[#121212]
                    transition hover:bg-[#F2F8FE] hover:text-[#1976D2]">
                Cek Pesanan
            </a>

            <a
                href="#layanan"
                class="block rounded-lg px-4 py-3 text-base text-[#121212]
                    transition hover:bg-[#F2F8FE] hover:text-[#1976D2]">
                Layanan
            </a>

        </div>
    </div>
</nav>

<script>

    const menuButton = document.getElementById('menuButton');
    const mobileMenu = document.getElementById('mobileMenu');
    const menuIcon = document.getElementById('menuIcon');

    menuButton.addEventListener('click', () => {

        const isOpen = !mobileMenu.classList.contains('hidden');

        mobileMenu.classList.toggle('hidden');

        menuButton.setAttribute(
            'aria-expanded',
            String(!isOpen)
        );

        if (!isOpen) {

            // Change hamburger → X
            menuIcon.innerHTML = `
                <path
                    stroke-linecap="round"
                    d="M6 6l12 12"/>

                <path
                    stroke-linecap="round"
                    d="M18 6L6 18"/>
            `;

        } else {

            // Change X → hamburger
            menuIcon.innerHTML = `
                <path
                    stroke-linecap="round"
                    d="M4 6h16"/>

                <path
                    stroke-linecap="round"
                    d="M4 12h16"/>

                <path
                    stroke-linecap="round"
                    d="M4 18h16"/>
            `;

        }

    });


    // Close menu after clicking a link
    document.querySelectorAll('#mobileMenu a').forEach(link => {

        link.addEventListener('click', () => {

            mobileMenu.classList.add('hidden');

            menuButton.setAttribute(
                'aria-expanded',
                'false'
            );

            menuIcon.innerHTML = `
                <path
                    stroke-linecap="round"
                    d="M4 6h16"/>

                <path
                    stroke-linecap="round"
                    d="M4 12h16"/>

                <path
                    stroke-linecap="round"
                    d="M4 18h16"/>
            `;

        });

    });

</script>
