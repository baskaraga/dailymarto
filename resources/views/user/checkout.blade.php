<x-app-layout>
    <div class="bg-gray-50 min-h-screen py-10 px-4 sm:px-6 lg:px-8 font-poppins">
        <!-- Header -->
       <h1 class="text-2xl font-bold mb-6 flex items-center gap-3 text-red-600">
            <i class="fa-solid fa-money-bill-1-wave text-red-600"></i>
            Checkout
        </h1>

        <div class="bg-white rounded-xl shadow-md overflow-hidden">

            <!-- Alamat Pengiriman -->
            <div class="border-b px-6 py-4">
                <div class="flex items-center justify-between mb-2">
                    <div class="flex items-center space-x-2 text-red-600">
                        <i class="fa-solid fa-map-location-dot"></i>
                        <h2 class="font-bold">Alamat Pengiriman</h2>
                    </div>
                    <a href="#" class="text-sm text-blue-600 font-medium hover:underline">Edit</a>
                </div>
                <div class="ml-6 text-sm text-gray-800">
                    <p class="font-semibold">Panji Petualang</p>
                    <div class="flex items-center gap-2 mt-1">
                        <i class="fa-solid fa-map-pin text-gray-500"></i>
                        <p>Jl. Jend. Sudirman No.296, Pereng, Sokanegara, Kec. Purwokerto Tim., Kabupaten Banyumas, Jawa Tengah 53116</p>
                    </div>
                </div>
            </div>

            <!-- Produk Dipesan -->
            <div class="px-6 py-4 border-b">
                <h2 class="text-lg font-semibold mb-4">Produk Dipesan</h2>
                <div class="grid grid-cols-12 items-center text-sm text-gray-600 font-semibold border-b pb-2">
                    <div class="col-span-5">Produk</div>
                    <div class="col-span-2 text-center">Harga Satuan</div>
                    <div class="col-span-2 text-center">Jumlah</div>
                    <div class="col-span-3 text-right">Subtotal</div>
                </div>
                <div class="grid grid-cols-12 items-center py-4 text-sm">
                    <div class="col-span-5 flex items-center gap-4">
                        <input type="checkbox" class="w-4 h-4 accent-red-500">
                        <img src="{{ asset('images/snickers.png') }}" class="w-14 h-14 object-contain" alt="Snickers">
                        <p class="font-semibold">Snickers 45gr</p>
                    </div>
                    <div class="col-span-2 text-center">Rp 5.400</div>
                    <div class="col-span-2 text-center">1</div>
                    <div class="col-span-3 text-right text-red-600 font-semibold">Rp 5.400</div>
                </div>
            </div>

            <!-- Voucher -->
            <div class="px-6 py-4 border-b">
                <div class="flex justify-between items-center mb-2">
                    <div class="flex items-center space-x-2 text-red-600">
                        <i class="fa-solid fa-ticket"></i>
                        <h2 class="font-bold">Voucher</h2>
                    </div>
                    <a href="#" class="text-sm text-blue-600 font-medium hover:underline">Pilih Voucher</a>
                </div>
            </div>

            <!-- Ringkasan -->
            <div class="px-6 py-6">
                <div class="flex justify-end">
                    <div class="w-full max-w-sm space-y-2 text-sm text-gray-800">
                        <div class="flex justify-between">
                            <span>Subtotal Pesanan</span>
                            <span>Rp 5.400</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Subtotal Pengiriman</span>
                            <span>Rp 5.400</span>
                        </div>
                        <div class="flex justify-between font-bold text-red-600 text-base mt-2">
                            <span>Total Pembayaran</span>
                            <span>Rp 5.400</span>
                        </div>
                       <div class="flex justify-end space-x-4">
                            <button id="btn-kembali" class="bg-gray-500 hover:bg-gray-600 mt-2 text-white py-3 px-4 rounded-lg font-semibold text-center">
                                Kembali
                            </button>
                            <button id="btn-transaksi" class="bg-red-500  hover:bg-red-600 mt-2 text-white py-3 px-4 rounded-lg font-semibold text-center">
                                Transaksi
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const transaksiBtn = document.getElementById('btn-transaksi');
        const BtnKembali = document.getElementById('btn-kembali');

        if (transaksiBtn) {
            transaksiBtn.addEventListener('click', function (e) {
                e.preventDefault();

                const isChecked = document.querySelector('input[type="checkbox"]').checked;

                if (!isChecked) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Transaksi Gagal',
                        text: 'Silakan pilih produk terlebih dahulu!',
                        confirmButtonColor: '#e3342f',
                        confirmButtonText: 'OK',
                        customClass: {
                            popup: 'rounded-xl',
                            text: 'text-slate-700 text-md',
                            title: 'font-semibold text-slate-700 text-2xl',
                            confirmButton: 'text-sm px-6 py-2 rounded-md'
                        }
                        
                    });
                } else {
                    Swal.fire({
                        icon: 'success',
                        title: 'Transaksi Berhasil',
                        text: 'Pesanan kamu sedang diproses!',
                        confirmButtonColor: '#38c172',
                        confirmButtonText: 'OK',
                        customClass: {
                            popup: 'rounded-xl',
                            text: 'text-slate-700 text-md',
                            title: 'font-semibold text-slate-700 text-2xl',
                            confirmButton: 'text-sm px-6 py-2 rounded-md'
                        }
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = 'dashboard'; // Redirect to dashboard or another page
                        }
                    });
                }
            });
        }

            if(BtnKembali) {
                BtnKembali.addEventListener('click', function (e) {
                    e.preventDefault();
                    history.back();
                });
            }
    });
</script>

</x-app-layout>
