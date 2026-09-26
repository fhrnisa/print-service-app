<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Sekarang</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-[#FAFAFA]">

    <main class="mx-auto flex min-h-screen w-full max-w-md flex-col px-5 py-12">

        {{-- Question --}}
        <div class="text-center">
            <h1 class="text-2xl md:text-4xl font-medium leading-7 text-[#242424]">
                Bagaimana Anda akan melakukan pemesanan?
            </h1>
        </div>


        {{-- Location Options --}}
        <div class="mt-24 grid grid-cols-2 gap-3">

            {{-- Saya sedang berada di toko --}}
             <button type="button" data-location="store"
                class="location-option flex h-auto flex-col items-center justify-center rounded-lg border border-[#DDDDDD]
                       bg-white px-4 py-10 text-center transition hover:border-[#1976D2] hover:shadow-[0_8px_20px_rgba(0,0,0,0.08)]
                       hover:bg-[#F2F8FE]">

                {{-- Store Icon --}}
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.4859 3H16.4941L16.9941 8C16.9941 8 17.9941 9 19.4941 9C20.5712 9 21.3045 8.48445 21.6324 8.1937C21.7631 8.07782 21.811 7.90091 21.7822 7.72861L21.0777 3.50136C21.0295 3.21205 20.7792 3 20.4859 3Z" stroke="#131927" stroke-width="1.5"/>
                    <path d="M16.4941 3L16.9941 8C16.9941 8 15.9941 9 14.4941 9C12.9941 9 11.9941 8 11.9941 8V3H16.4941Z" stroke="#131927" stroke-width="1.5"/>
                    <path d="M11.9941 3V8C11.9941 8 10.9941 9 9.49414 9C7.99414 9 6.99414 8 6.99414 8L7.49414 3H11.9941Z" stroke="#131927" stroke-width="1.5"/>
                    <path d="M7.49325 3H3.50152C3.20822 3 2.9579 3.21205 2.90969 3.50136L2.20514 7.72862C2.17643 7.90091 2.22426 8.07782 2.35495 8.1937C2.68288 8.48445 3.4162 9 4.49323 9C5.99323 9 6.99325 8 6.99325 8L7.49325 3Z" stroke="#131927" stroke-width="1.5"/>
                    <path d="M3 9V19C3 20.1046 3.89543 21 5 21H19C20.1046 21 21 20.1046 21 19V9" stroke="#131927" stroke-width="1.5"/>
                    <path d="M14.834 21V15C14.834 13.8954 13.9386 13 12.834 13H10.834C9.72941 13 8.83398 13.8954 8.83398 15V21" stroke="#131927" stroke-width="1.5" stroke-miterlimit="16"/>
                </svg>


                <span class="text-base leading-4 text-[#242424] mt-2">
                    Saya sedang berada
                    di toko
                </span>
            </button>


            {{-- Pesan untuk diambil nanti --}}
            <button type="button" data-location="outside"
                class="location-option flex h-auto flex-col items-center justify-center rounded-lg border border-[#DDDDDD]
                       bg-white px-4 py-10 text-center transition hover:border-[#1976D2]
                       hover:shadow-[0_8px_20px_rgba(0,0,0,0.08)] hover:bg-[#F2F8FE]">

                {{-- Clock Icon --}}
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 6L12 12L18 12" stroke="#131927" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#131927" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                <span class="text-base leading-4 text-[#242424] mt-2">
                    Pesan untuk diambil
                    nanti
                </span>
            </button>

        </div>


        {{-- Bottom Navigation --}}
        <div class="mt-auto flex items-center justify-between gap-6 pt-10">

            {{-- Previous --}}
            <a href="{{ url()->previous() }}"
                class="inline-flex h-auto flex-1 items-center justify-center gap-2 rounded-lg
                       border border-[#1976D2] bg-white px-3 py-2 text-base font-medium
                       text-[#1976D2] transition hover:bg-[#F2F8FE]">

                <span class="text-base">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.5 12H6M12 18L6 12L12 6" stroke="#1976D2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
                Sebelumnya
            </a>


            {{-- Next --}}
            <button id="nextButton" type="button" disabled
                class="inline-flex h-auto flex-1 cursor-not-allowed items-center justify-center gap-2 rounded-lg bg-[#D5D5D5] px-3 py-2
                        text-base font-medium text-white transition">

                Selanjutnya
                <span class="text-base">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 12H18.5M12.5 18L18.5 12L12.5 6" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
            </button>

        </div>

    </main>

<script>
    const options = document.querySelectorAll('.location-option');
    const nextButton = document.getElementById('nextButton');

    let selectedLocation = null;

    options.forEach(option => {
        option.addEventListener('click', () => {

            // Remove selected state from all options
            options.forEach(item => {
                item.classList.remove(
                    'border-[#1976D2]',
                    'bg-[#F2F8FE]',
                    'shadow-sm'
                );

                item.classList.add('border-[#DDDDDD]');
            });

            // Add selected state
            option.classList.remove('border-[#DDDDDD]');
            option.classList.add(
                'border-[#1976D2]',
                'bg-[#F2F8FE]',
                'shadow-sm'
            );

            // Save selected location
            selectedLocation = option.dataset.location;

            // Enable next button
            nextButton.disabled = false;

            nextButton.classList.remove(
                'cursor-not-allowed',
                'bg-[#D5D5D5]'
            );

            nextButton.classList.add(
                'cursor-pointer',
                'bg-[#1976D2]',
                'hover:bg-[#1565C0]'
            );
        });
    });


    nextButton.addEventListener('click', () => {

        if (!selectedLocation) {
            return;
        }

        const url = "{{ route('pages.orders.form') }}";

        window.location.href =
            url + "?location=" + selectedLocation;
    });
</script>

</body>
</html>