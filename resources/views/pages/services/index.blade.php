<x-guest-app-layout>
    <div class="p-6">
        @if (session('success'))
            <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif
        <h1 class="text-xl font-bold mb-4">Layanan Print</h1>
        <ul>
            @foreach ($services as $service)
                <li>
                    <a href="{{ route('services.show', $service) }}">{{ $service->name }}</a>
                </li>
            @endforeach
        </ul>

        <h1 class="text-xl font-bold mt-8 mb-4">Stationery</h1>
        <ul>
            @foreach ($stationery as $product)
                <li>{{ $product->name }} - Rp{{ number_format($product->price, 0, ',', '.') }}</li>
            @endforeach
        </ul>
    </div>
</x-guest-app-layout>