<x-guest-app-layout>
    <div class="p-6 max-w-xl mx-auto">
        <h1 class="text-xl font-bold mb-4">{{ $service->name }}</h1>

        @if ($errors->any())
            <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('orders.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="service_id" value="{{ $service->id }}">

            <div class="mb-4">
                <label class="block mb-1">Nama</label>
                <input type="text" name="customer_name" value="{{ old('customer_name') }}" class="border rounded w-full p-2">
            </div>

            <div class="mb-4">
                <label class="block mb-1">No. HP / WhatsApp</label>
                <input type="text" name="customer_phone" value="{{ old('customer_phone') }}" class="border rounded w-full p-2">
            </div>

            <div class="mb-4">
                <label class="block mb-1">Jumlah</label>
                <input type="number" name="quantity" min="1" value="{{ old('quantity', 1) }}" class="border rounded w-full p-2">
            </div>

            @foreach ($service->fields->sortBy('sort_order') as $field)
                <div class="mb-4">
                    <label class="block mb-1">
                        {{ $field->field_name }}
                        @if ($field->is_required) <span class="text-red-500">*</span> @endif
                    </label>

                    @if ($field->field_type === 'select')
                        <select name="fields[{{ $field->field_name }}]" class="border rounded w-full p-2">
                            <option value="">-- Pilih --</option>
                            @foreach ($field->options as $option)
                                <option value="{{ $option }}" {{ old("fields.$field->field_name") === $option ? 'selected' : '' }}>
                                    {{ $option }}
                                </option>
                            @endforeach
                        </select>

                    @elseif ($field->field_type === 'boolean')
                        <select name="fields[{{ $field->field_name }}]" class="border rounded w-full p-2">
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>

                    @elseif ($field->field_type === 'file')
                        <input type="file" name="fields[{{ $field->field_name }}]" class="border rounded w-full p-2">

                    @elseif ($field->field_type === 'number')
                        <input type="number" name="fields[{{ $field->field_name }}]" value="{{ old("fields.$field->field_name") }}" class="border rounded w-full p-2">

                    @else
                        <input type="text" name="fields[{{ $field->field_name }}]" value="{{ old("fields.$field->field_name") }}" class="border rounded w-full p-2">
                    @endif
                </div>
            @endforeach

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Kirim Pesanan</button>
        </form>
    </div>
</x-guest-app-layout>