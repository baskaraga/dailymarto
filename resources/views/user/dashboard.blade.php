<x-app-layout>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title', 'Dashboard')
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .price-original {
            text-decoration: line-through;
        }
    </style>
</head>
<body class="bg-gray-50 py-8">

<div class="container-slider mx-auto px-4 mt-3 mb-3 flex justify-center">
    <!-- Tambahkan di dalam section content -->
    <div class="swiper mySwiper w-full max-w-[500px] h-[270px] rounded-lg overflow-hidden">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{ asset('images/slider 1.png') }}" class="w-full h-full object-cover" />
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/slider 2.png') }}" class="w-full h-full object-cover" />
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/slider 3.png') }}" class="w-full h-full object-cover" />
            </div>
        </div>
    </div>
</div>


    <div class="container mx-auto px-4">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800 mt-5 ml-3">Produk Rekomendasi</h2>
        </div>
        
        <!-- Grid Cards - 6 per baris -->
        <div class="grid grid-cols-6 gap-4">
            @php
    $products = [
        [
            'name' => 'Milo Cereal',
            'category' => 'Snack',
            'price' => 27000,
            'originalPrice' => 35000,
            'image' => 'milo.svg'
        ],
        [
            'name' => 'Shinju Whiteessential',
            'category' => 'Snack',
            'price' => 23100,
            'originalPrice' => null,
            'image' => 'shinju.svg'
        ],
        // Tambah produk lain di sini
    ];
    @endphp

     @foreach ($products as $product)
        <x-product-card 
            :name="$product['name']" 
            :category="$product['category']" 
            :price="$product['price']" 
            :originalPrice="$product['originalPrice']" 
            :image="$product['image']" 
        />
    @endforeach

            <!-- Card 2: Milo Cereal -->
            <div class="bg-white rounded-lg shadow-sm card-hover overflow-hidden border h-80 flex flex-col">
                <div class="p-4 flex-1 flex flex-col">
                    <div class="bg-green-100 rounded-lg mb-3 h-24 flex items-center justify-center flex-shrink-0">
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiByeD0iOCIgZmlsbD0iI0Y0RjRGNSIvPgo8cmVjdCB4PSIxNiIgeT0iMTYiIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgcng9IjQiIGZpbGw9IiMyMkMzNTUiLz4KPHN2ZyB4PSIyNCIgeT0iMjQiIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiIgdmlld0JveD0iMCAwIDE2IDE2IiBmaWxsPSJub25lIj4KPHBhdGggZD0iTTggNEM2LjY3IDQgNS42IDQuNjcgNSA1LjY3VjEwLjMzQzUuNiAxMS4zMyA2LjY3IDEyIDggMTJDOS4zMyAxMiAxMC40IDExLjMzIDExIDEwLjMzVjUuNjdDMTAuNCA0LjY3IDkuMzMgNCA4IDRaIiBmaWxsPSJ3aGl0ZSIvPgo8L3N2Zz4KPC9zdmc+" alt="Milo Cereal" class="w-12 h-12">
                    </div>
                    <div class="bg-red-600 text-white text-xs px-2 py-1 rounded mb-2 inline-block w-fit">Snack</div>
                    <h3 class="font-medium text-sm text-gray-800 mb-2 flex-1 line-clamp-2 leading-relaxed">Milo Cereal Breakfast + Calcium</h3>
                    <div class="mt-auto">
                        <div class="mb-1">
                            <span class="text-gray-400 text-xs price-original">Rp 35.000</span>
                        </div>
                        <div class="text-red-600 font-bold text-sm mb-3">Rp 27.000</div>
                        <a href="{{ url('/user/detail_produk') }}" class="block w-full bg-red-600 hover:bg-red-700 text-white text-sm py-2 rounded font-medium transition-colors text-center">
    Buy
</a>
                    </div>
                </div>
            </div>

            <!-- Card 3: Nescafe Kopi Instant -->
            <div class="bg-white rounded-lg shadow-sm card-hover overflow-hidden border h-80 flex flex-col">
                <div class="p-4 flex-1 flex flex-col">
                    <div class="bg-gray-800 rounded-lg mb-3 h-24 flex items-center justify-center flex-shrink-0">
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiByeD0iOCIgZmlsbD0iIzM3NDE0QiIvPgo8Y2lyY2xlIGN4PSIzMiIgY3k9IjMyIiByPSIxNiIgZmlsbD0iI0ZGRkZGRiIvPgo8Y2lyY2xlIGN4PSIzMiIgY3k9IjMyIiByPSIxMiIgZmlsbD0iIzM3NDE0QiIvPgo8L3N2Zz4K" alt="Nescafe" class="w-12 h-12">
                    </div>
                    <div class="bg-orange-500 text-white text-xs px-2 py-1 rounded mb-2 inline-block w-fit">Minuman</div>
                    <h3 class="font-medium text-sm text-gray-800 mb-2 flex-1 line-clamp-2 leading-relaxed">Nescafe Kopi Instant Classic 100g</h3>
                    <div class="mt-auto">
                        <div class="text-red-600 font-bold text-sm mb-3">Rp 7.600</div>
                        <button class="w-full bg-red-600 hover:bg-red-700 text-white text-sm py-2 rounded font-medium transition-colors">
                            Buy
                        </button>
                    </div>
                </div>
            </div>

            <!-- Card 4: Sari Ayu Loose Powder -->
            <div class="bg-white rounded-lg shadow-sm card-hover overflow-hidden border h-80 flex flex-col">
                <div class="p-4 flex-1 flex flex-col">
                    <div class="bg-orange-100 rounded-lg mb-3 h-24 flex items-center justify-center flex-shrink-0">
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiByeD0iOCIgZmlsbD0iI0ZFRjNFMiIvPgo8Y2lyY2xlIGN4PSIzMiIgY3k9IjI4IiByPSIxMiIgZmlsbD0iI0ZCQjY2MyIvPgo8cGF0aCBkPSJNMjAgNDBIMjRWNDRIMjBWNDBaIiBmaWxsPSIjMjI0MzNEIi8+CjxwYXRoIGQ9Ik00MCA0MEg0NFY0NEg0MFY0MFoiIGZpbGw9IiMyMjQzM0QiLz4KPC9zdmc+" alt="Sari Ayu" class="w-12 h-12">
                    </div>
                    <div class="bg-red-600 text-white text-xs px-2 py-1 rounded mb-2 inline-block w-fit">Snack</div>
                    <h3 class="font-medium text-sm text-gray-800 mb-2 flex-1 line-clamp-2 leading-relaxed">Sari Ayu Loose Powder Kuning Langsat 14g</h3>
                    <div class="mt-auto">
                        <div class="text-red-600 font-bold text-sm mb-3">Rp 23.900</div>
                        <button class="w-full bg-red-600 hover:bg-red-700 text-white text-sm py-2 rounded font-medium transition-colors">
                            Buy
                        </button>
                    </div>
                </div>
            </div>

        

            
            <!-- Card 6: Abc Saus Tiram -->
            <div class="bg-white rounded-lg shadow-sm card-hover overflow-hidden border h-80 flex flex-col">
                <div class="p-4 flex-1 flex flex-col">
                    <div class="bg-red-100 rounded-lg mb-3 h-24 flex items-center justify-center flex-shrink-0">
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiByeD0iOCIgZmlsbD0iI0ZFRjJGMiIvPgo8cmVjdCB4PSIyNCIgeT0iMTYiIHdpZHRoPSIxNiIgaGVpZ2h0PSIzMiIgcng9IjIiIGZpbGw9IiNEQzI2MjYiLz4KPGNpcmNsZSBjeD0iMzIiIGN5PSIyNCIgcj0iNCIgZmlsbD0iI0ZGRkZGRiIvPgo8L3N2Zz4K" alt="ABC Saus" class="w-12 h-12">
                    </div>
                    <div class="bg-red-600 text-white text-xs px-2 py-1 rounded mb-2 inline-block w-fit">Snack</div>
                    <h3 class="font-medium text-sm text-gray-800 mb-2 flex-1 line-clamp-2 leading-relaxed">Abc Saus Tiram 135ml</h3>
                    <div class="mt-auto">
                        <div class="mb-1">
                            <span class="text-gray-400 text-xs price-original">Rp 5.000</span>
                        </div>
                        <div class="text-red-600 font-bold text-sm mb-3">Rp 14.500</div>
                        <button class="w-full bg-red-600 hover:bg-red-700 text-white text-sm py-2 rounded font-medium transition-colors">
                            Buy
                        </button>
                    </div>
                </div>
            </div>
            </div>

            <div class="container mx-auto px-4">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800 mt-5 ml-3">Produk Terbaru</h2>
        </div>
        
        <!-- Grid Cards - 6 per baris -->
        <div class="grid grid-cols-6 gap-4">
            
            <!-- Card 1: Shinju Whiteessential -->
            <div class="bg-white rounded-lg shadow-sm card-hover overflow-hidden border h-80 flex flex-col">
                <div class="p-4 flex-1 flex flex-col">
                    <div class="bg-gray-100 rounded-lg mb-3 h-24 flex items-center justify-center flex-shrink-0">
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiByeD0iOCIgZmlsbD0iI0Y5RkFGQiIvPgo8cGF0aCBkPSJNMjQgMjBIMTZWNDRIMjRWMjBaIiBmaWxsPSIjNjM2NjZEIi8+CjxwYXRoIGQ9Ik00OCAyMEg0MFY0NEg0OFYyMFoiIGZpbGw9IiM2MzY2NkQiLz4KPHBhdGggZD0iTTM2IDI0SDI4VjQ0SDM2VjI0WiIgZmlsbD0iIzYzNjY2RCIvPgo8L3N2Zz4K" alt="Shinju Whiteessential" class="w-12 h-12">
                    </div>
                    <div class="bg-red-600 text-white text-xs px-2 py-1 rounded mb-2 inline-block w-fit">Snack</div>
                    <h3 class="font-medium text-sm text-gray-800 mb-2 flex-1 line-clamp-2 leading-relaxed">Shinju Whiteessential</h3>
                    <div class="mt-auto">
                        <div class="text-red-600 font-bold text-sm mb-3">Rp 23.100</div>
                        <button class="w-full bg-red-600 hover:bg-red-700 text-white text-sm py-2 rounded font-medium transition-colors">
                            Buy
                        </button>
                    </div>
                </div>
            </div>

            <!-- Card 2: Milo Cereal -->
            <div class="bg-white rounded-lg shadow-sm card-hover overflow-hidden border h-80 flex flex-col">
                <div class="p-4 flex-1 flex flex-col">
                    <div class="bg-green-100 rounded-lg mb-3 h-24 flex items-center justify-center flex-shrink-0">
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiByeD0iOCIgZmlsbD0iI0Y0RjRGNSIvPgo8cmVjdCB4PSIxNiIgeT0iMTYiIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgcng9IjQiIGZpbGw9IiMyMkMzNTUiLz4KPHN2ZyB4PSIyNCIgeT0iMjQiIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiIgdmlld0JveD0iMCAwIDE2IDE2IiBmaWxsPSJub25lIj4KPHBhdGggZD0iTTggNEM2LjY3IDQgNS42IDQuNjcgNSA1LjY3VjEwLjMzQzUuNiAxMS4zMyA2LjY3IDEyIDggMTJDOS4zMyAxMiAxMC40IDExLjMzIDExIDEwLjMzVjUuNjdDMTAuNCA0LjY3IDkuMzMgNCA4IDRaIiBmaWxsPSJ3aGl0ZSIvPgo8L3N2Zz4KPC9zdmc+" alt="Milo Cereal" class="w-12 h-12">
                    </div>
                    <div class="bg-red-600 text-white text-xs px-2 py-1 rounded mb-2 inline-block w-fit">Snack</div>
                    <h3 class="font-medium text-sm text-gray-800 mb-2 flex-1 line-clamp-2 leading-relaxed">Milo Cereal Breakfast + Calcium</h3>
                    <div class="mt-auto">
                        <div class="mb-1">
                            <span class="text-gray-400 text-xs price-original">Rp 35.000</span>
                        </div>
                        <div class="text-red-600 font-bold text-sm mb-3">Rp 27.000</div>
                        <button class="w-full bg-red-600 hover:bg-red-700 text-white text-sm py-2 rounded font-medium transition-colors">
                            Buy
                        </button>
                    </div>
                </div>
            </div>

            <!-- Card 3: Nescafe Kopi Instant -->
            <div class="bg-white rounded-lg shadow-sm card-hover overflow-hidden border h-80 flex flex-col">
                <div class="p-4 flex-1 flex flex-col">
                    <div class="bg-gray-800 rounded-lg mb-3 h-24 flex items-center justify-center flex-shrink-0">
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiByeD0iOCIgZmlsbD0iIzM3NDE0QiIvPgo8Y2lyY2xlIGN4PSIzMiIgY3k9IjMyIiByPSIxNiIgZmlsbD0iI0ZGRkZGRiIvPgo8Y2lyY2xlIGN4PSIzMiIgY3k9IjMyIiByPSIxMiIgZmlsbD0iIzM3NDE0QiIvPgo8L3N2Zz4K" alt="Nescafe" class="w-12 h-12">
                    </div>
                    <div class="bg-orange-500 text-white text-xs px-2 py-1 rounded mb-2 inline-block w-fit">Minuman</div>
                    <h3 class="font-medium text-sm text-gray-800 mb-2 flex-1 line-clamp-2 leading-relaxed">Nescafe Kopi Instant Classic 100g</h3>
                    <div class="mt-auto">
                        <div class="text-red-600 font-bold text-sm mb-3">Rp 7.600</div>
                        <button class="w-full bg-red-600 hover:bg-red-700 text-white text-sm py-2 rounded font-medium transition-colors">
                            Buy
                        </button>
                    </div>
                </div>
            </div>

            <!-- Card 4: Sari Ayu Loose Powder -->
            <div class="bg-white rounded-lg shadow-sm card-hover overflow-hidden border h-80 flex flex-col">
                <div class="p-4 flex-1 flex flex-col">
                    <div class="bg-orange-100 rounded-lg mb-3 h-24 flex items-center justify-center flex-shrink-0">
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiByeD0iOCIgZmlsbD0iI0ZFRjNFMiIvPgo8Y2lyY2xlIGN4PSIzMiIgY3k9IjI4IiByPSIxMiIgZmlsbD0iI0ZCQjY2MyIvPgo8cGF0aCBkPSJNMjAgNDBIMjRWNDRIMjBWNDBaIiBmaWxsPSIjMjI0MzNEIi8+CjxwYXRoIGQ9Ik00MCA0MEg0NFY0NEg0MFY0MFoiIGZpbGw9IiMyMjQzM0QiLz4KPC9zdmc+" alt="Sari Ayu" class="w-12 h-12">
                    </div>
                    <div class="bg-red-600 text-white text-xs px-2 py-1 rounded mb-2 inline-block w-fit">Snack</div>
                    <h3 class="font-medium text-sm text-gray-800 mb-2 flex-1 line-clamp-2 leading-relaxed">Sari Ayu Loose Powder Kuning Langsat 14g</h3>
                    <div class="mt-auto">
                        <div class="text-red-600 font-bold text-sm mb-3">Rp 23.900</div>
                        <button class="w-full bg-red-600 hover:bg-red-700 text-white text-sm py-2 rounded font-medium transition-colors">
                            Buy
                        </button>
                    </div>
                </div>
            </div>

            <!-- Card 5: Sunlight Cairan Pencuci -->
            <div class="bg-white rounded-lg shadow-sm card-hover overflow-hidden border h-80 flex flex-col">
                <div class="p-4 flex-1 flex flex-col">
                    <div class="bg-green-100 rounded-lg mb-3 h-24 flex items-center justify-center flex-shrink-0">
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiByeD0iOCIgZmlsbD0iI0VDRkRGNCIvPgo8cGF0aCBkPSJNMjQgMTZDMjIuOSAxNiAyMiAxNi45IDIyIDE4VjQ2QzIyIDQ3LjEgMjIuOSA0OCAyNCA0OEg0MEM0MS4xIDQ4IDQyIDQ3LjEgNDIgNDZWMThDNDIgMTYuOSA0MS4xIDE2IDQwIDE2SDI0WiIgZmlsbD0iIzEwQjk4MSIvPgo8cGF0aCBkPSJNMjggMjBIMzZWMjhIMjhWMjBaIiBmaWxsPSIjRkZGRkZGIi8+CjwvN3ZnPgo=" alt="Sunlight" class="w-12 h-12">
                    </div>
                    <div class="bg-red-600 text-white text-xs px-2 py-1 rounded mb-2 inline-block w-fit">Snack</div>
                    <h3 class="font-medium text-sm text-gray-800 mb-2 flex-1 line-clamp-2 leading-relaxed">Sunlight Cairan Pencuci Piring Jeruk</h3>
                    <div class="mt-auto">
                        <div class="text-red-600 font-bold text-sm mb-3">Rp 13.500</div>
                        <button class="w-full bg-red-600 hover:bg-red-700 text-white text-sm py-2 rounded font-medium transition-colors">
                            Buy
                        </button>
                    </div>
                </div>
            </div>

            
            <!-- Card 6: Abc Saus Tiram -->
            <div class="bg-white rounded-lg shadow-sm card-hover overflow-hidden border h-80 flex flex-col">
                <div class="p-4 flex-1 flex flex-col">
                    <div class="bg-red-100 rounded-lg mb-3 h-24 flex items-center justify-center flex-shrink-0">
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiByeD0iOCIgZmlsbD0iI0ZFRjJGMiIvPgo8cmVjdCB4PSIyNCIgeT0iMTYiIHdpZHRoPSIxNiIgaGVpZ2h0PSIzMiIgcng9IjIiIGZpbGw9IiNEQzI2MjYiLz4KPGNpcmNsZSBjeD0iMzIiIGN5PSIyNCIgcj0iNCIgZmlsbD0iI0ZGRkZGRiIvPgo8L3N2Zz4K" alt="ABC Saus" class="w-12 h-12">
                    </div>
                    <div class="bg-red-600 text-white text-xs px-2 py-1 rounded mb-2 inline-block w-fit">Snack</div>
                    <h3 class="font-medium text-sm text-gray-800 mb-2 flex-1 line-clamp-2 leading-relaxed">Abc Saus Tiram 135ml</h3>
                    <div class="mt-auto">
                        <div class="mb-1">
                            <span class="text-gray-400 text-xs price-original">Rp 5.000</span>
                        </div>
                        <div class="text-red-600 font-bold text-sm mb-3">Rp 14.500</div>
                        <button class="w-full bg-red-600 hover:bg-red-700 text-white text-sm py-2 rounded font-medium transition-colors">
                            Buy
                        </button>
                    </div>
                </div>
            </div>
            </div>
    </div>

</x-app-layout>
