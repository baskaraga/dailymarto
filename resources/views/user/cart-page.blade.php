<x-app-layout>
@section('content')
<div class="font-poppins bg-white text-gray-800 min-h-screen">
    <div class="max-w-6xl mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6 flex items-center gap-3 text-gray-800">
            <i class="fa-solid fa-cart-shopping text-red-600"></i>
            Keranjang Belanja
        </h1>

        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-100 text-sm">
                    <th class="py-3 px-4">Produk</th>
                    <th class="py-3 px-4">Harga Satuan</th>
                    <th class="py-3 px-4">Kuantitas</th>
                    <th class="py-3 px-4">Total Harga</th>
                    <th class="py-3 px-4">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-sm">
                @foreach ([
                    ['img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Snickers-barpromo.png/320px-Snickers-barpromo.png', 'name' => 'Snickers 45gr', 'price' => 5400],
                    ['img' => 'https://images.tokopedia.net/img/cache/700/VqbcmM/2022/5/18/2cb63b07-1420-438b-a0de-ef5ae2e45f36.jpg', 'name' => 'Cimory Fresh Milk', 'price' => 7600]
                ] as $item)
                <tr class="border-t">
                    <td class="flex items-center py-4 px-4 space-x-3">
                        <input type="checkbox" class="mr-2">
                        <img src="{{ $item['img'] }}" alt="{{ $item['name'] }}" class="w-16 h-16 object-contain">
                        <span>{{ $item['name'] }}</span>
                    </td>
                    <td class="py-4 px-4">Rp {{ number_format($item['price'], 0, ',', '.') }}</td>
                    <td class="py-4 px-4">
                        <div class="flex items-center space-x-2">
                            <button class="w-6 h-6 text-red-600 border border-red-500 rounded">−</button>
                            <span>1</span>
                            <button class="w-6 h-6 text-green-600 border border-green-500 rounded">+</button>
                        </div>
                    </td>
                    <td class="py-4 px-4 text-red-500 font-semibold">Rp {{ number_format($item['price'], 0, ',', '.') }}</td>
                    <td class="py-4 px-4 text-red-600 cursor-pointer">Hapus</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Voucher --}}
        <div class="mt-6 bg-gray-50 p-4 rounded-lg shadow-sm">
            <div class="flex items-center space-x-4">
                <span class="text-red-600 font-bold">🎫 Voucher</span>
                <input type="text" placeholder="Kode voucher" class="border px-3 py-1 rounded w-64">
                <button class="bg-red-600 text-white px-4 py-1 font-semibold rounded-xl">Pakai</button>
            </div>
        </div>

        {{-- Total & Checkout --}}
        <div class="flex justify-end items-center mt-6">
            <div class="text-right">
                <p class="text-sm">Total (2 Produk)</p>
                <p class="text-xl font-bold text-red-600">Rp 13.000</p>
                <a href="{{ route('user.checkout') }}" class="bg-red-600 text-white px-6 py-2 mt-2 rounded-xl font-semibold hover:bg-red-700 block text-center">
            Checkout
        </a>
            </div>
        </div>
    </div>
</div>
@endsection

</x-app-layout>