{{-- resources/views/detail-produk.blade.php --}}
<x-app-layout>
    <div class="flex flex-col min-h-screen bg-gray-50">

        <!-- Main Content -->
        <main class="flex-grow max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <!-- Tombol Kembali -->
           <div class="mb-6">
            <button onclick="window.location.href='{{ route('user.dashboard') }}'"
                class="flex items-center text-gray-600 hover:text-white bg-gray-200 hover:bg-red-500 px-4 py-2 rounded-full transition duration-300 shadow hover:shadow-md">
                <i class="fas fa-arrow-left"></i>
                <span class="hidden sm:inline-block font-medium"></span>
            </button>
</div>



            <!-- Product Detail Section -->
            <div class="bg-slate-100 rounded-xl shadow-sm p-8 pb-12">
                <!-- Red Header Bar -->
                <div class="bg-red-500 text-white px-4 py-2 rounded-t-lg -mx-8 -mt-8 mb-8">
                    <h2 class="text-lg nt-semibold">Informasi Produk</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <!-- Product Image -->
                    <div class="flex justify-center">
                        <div
                            class="w-80 h-80 bg-slate-100 rounded-lg flex items-center justify-center border-2 border-gray-100">
                            <img src="{{ asset('images/produk - 1.png') }}" alt="Lays"
                                class="w-full h-full object-contain">
                        </div>
                    </div>

                    <!-- Product Info -->
                    <div class="space-y-6">
                        <!-- Title & Price -->
                        <div>
                            <h1 class="text-2xl font-bold text-gray-900 mb-2">
                                Lays Potato Chips Original 150 g
                            </h1>
                            <p class="text-3xl font-bold text-red-500">Rp 4.400</p>
                        </div>

                        <!-- Description -->
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">Deskripsi</h3>
                            <ul class="space-y-2 text-gray-700">
                                <li class="flex items-start">
                                    <span
                                        class="w-2 h-2 bg-gray-400 rounded-full mt-2 mr-3 flex-shrink-0"></span>nutrition
                                    fact
                                </li>
                                <li class="flex items-start">
                                    <span
                                        class="w-2 h-2 bg-gray-400 rounded-full mt-2 mr-3 flex-shrink-0"></span>komposisi
                                </li>
                            </ul>
                        </div>

                        <!-- Quantity & Add to Cart -->
                        <div class="border-t pt-6">
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6">
        <!-- Quantity -->
        <div class="space-y-2">
            <span class="text-gray-700 font-medium block">Jumlah Pembelian</span>
            <div class="flex items-center bg-gray-100 rounded-full px-4 py-2 shadow-sm w-fit">
                <button id="btn-minus"
                    class="w-8 h-8 flex items-center justify-center text-red-500 bg-white rounded-full hover:bg-red-100 transition">
                    <i class="fa-solid fa-minus text-xl mb-2"></i>
                </button>
                <span id="qty" class="mx-6 text-lg font-semibold text-gray-800 select-none">0</span>
                <button id="btn-plus"
                    class="w-8 h-8 flex items-center justify-center text-green-500 bg-white rounded-full hover:bg-green-100 transition">
                    <i class="fa-solid fa-plus text-xl mb-2"></i>
                </button>
            </div>
        </div>

                                <!-- Wrapper tombol -->
                            <button
                                onclick="tambahKeKeranjang()"
                                class="bg-red-500 hover:bg-red-600 text-white px-8 py-3 rounded-lg font-semibold transition-colors duration-200 shadow-md hover:shadow-lg">
                                Tambah Ke Keranjang
                            </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    <script>
        function tambahKeKeranjang() {
        const qty = parseInt(document.getElementById('qty').textContent);

        if (qty > 0) {
            Swal.fire({
                icon: 'success',
                title: 'Produk telah ditambahkan ke keranjang belanja',
                confirmButtonText: 'OK',
                confirmButtonColor: '#ef4444', // Merah tailwind
                customClass: {
                    popup: 'rounded-xl',
                    title: 'font-semibold text-slate-700 text-lg',
                    confirmButton: 'text-sm px-6 py-2 rounded-md'
                }
            });
        } else {
            Swal.fire({
                icon: 'warning',
                title: 'Silakan pilih jumlah terlebih dahulu',
                confirmButtonText: 'OK',
                confirmButtonColor: '#ef4444',
                customClass: {
                    popup: 'rounded-xl',
                    title: 'font-semibold text-slate-700 text-lg',
                    confirmButton: 'text-sm px-6 py-2 rounded-md'
                }
            });
        }
    }

        document.addEventListener('DOMContentLoaded', function () {
            const minusBtn = document.getElementById('btn-minus');
            const plusBtn = document.getElementById('btn-plus');
            const qty = document.getElementById('qty');
            let quantity = 0;

            minusBtn.addEventListener('click', () => {
                if (quantity > 0) quantity--;
                qty.textContent = quantity;
            });

            plusBtn.addEventListener('click', () => {
                quantity++;
                qty.textContent = quantity;
            });
        });
    </script>
</x-app-layout>
