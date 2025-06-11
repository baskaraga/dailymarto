<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sidebar Collapsible Slide</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .sidebar-expanded {
      width: 16rem; /* w-64 */
    }
    .sidebar-collapsed {
      width: 4rem; /* w-16 */
    }
    .hide-text .menu-text, .hide-text .logo-text {
      display: none;
    }
  </style>
</head>
<body class="flex bg-gray-100 min-h-screen">

  <!-- Sidebar -->
  <div id="sidebar"
    class="bg-white shadow-md sidebar-expanded transition-all duration-300 ease-in-out p-4 flex flex-col overflow-hidden"
  >
    <button onclick="toggleSidebar()" class="mb-4 self-end text-gray-500 hover:text-gray-700">
    ☰
  </button>
<!-- Logo -->
<div class="flex items-center space-x-2 mb-8">
  <img src="https://cdn-icons-png.flaticon.com/512/135/135620.png" alt="Logo" class="w-6 h-6">
  <span class="text-xl font-semibold text-gray-800 logo-text">Daily Mart</span>
</div>


    <!-- Menu -->
<nav class="flex flex-col space-y-6">
  <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-4 text-gray-700 hover:text-pink-600">
    <span>🏠</span>
    <span class="menu-text">Dashboard</span>
  </a>
  <a href="{{ route('admin.customers') }}" class="flex items-center space-x-4 text-gray-700 hover:text-pink-600">
    <span>👥</span>
    <span class="menu-text">Customers</span>
  </a>
  <a href="{{ route('admin.products.index') }}" class="flex items-center space-x-4 text-pink-600 font-semibold">
    <span>👜</span>
    <span class="menu-text">Products</span>
  </a>
  <a href="{{ route('admin.promo') }}" class="flex items-center space-x-4 text-gray-700 hover:text-pink-600">
    <span>💸</span>
    <span class="menu-text">Promo</span>
  </a>
  <a href="{{ route('admin.categories.index') }}" class="flex items-center space-x-4 text-gray-700 hover:text-pink-600">
    <span>📦</span>
    <span class="menu-text">Kategori Barang</span>
  </a>
    <!-- Logout Button -->
  <form action="{{ route('logout') }}" method="POST" class="mt-10">
    @csrf
    <button type="submit" class="flex items-center space-x-4 text-gray-700 hover:text-red-600">
      <span>🚪</span>
      <span class="menu-text">Logout</span>
    </button>
  </form>
</nav>
</nav>
  </div>

  <!-- Main Content -->
<div class="flex-1 p-6">
  <h1 class="text-2xl font-bold text-[#AF1740]">Edit Barang</h1>

  <div class="p-6 flex justify-center">
    <div class="w-full max-w-xl bg-white p-6 rounded-lg shadow-md">
      <h2 class="text-xl font-semibold text-gray-800 mb-6">Edit Barang</h2>

      <form action="{{ route('admin.products.update', $barang->id_barang) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
  @csrf
  @method('PUT')

  <!-- Nama Barang -->
  <div class="flex items-center space-x-4">
    <label for="nama_barang" class="w-40 text-sm font-medium text-gray-700">Nama Barang:</label>
    <input type="text" name="nama_barang" id="nama_barang" required
      value="{{ $barang->nama_barang }}"
      class="flex-1 border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#AF1740] focus:border-transparent" />
  </div>

  <!-- Harga -->
  <div class="flex items-center space-x-4">
    <label for="harga" class="w-40 text-sm font-medium text-gray-700">Harga:</label>
    <input type="number" name="harga" id="harga" required
      value="{{ $barang->harga }}"
      class="flex-1 border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#AF1740] focus:border-transparent" />
  </div>

  <!-- Stok -->
  <div class="flex items-center space-x-4">
    <label for="stok" class="w-40 text-sm font-medium text-gray-700">Stok:</label>
    <input type="number" name="stok" id="stok" required
      value="{{ $barang->stok }}"
      class="flex-1 border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#AF1740] focus:border-transparent" />
  </div>

  <!-- Kategori -->
  <div class="flex items-center space-x-4">
    <label for="id_kategori" class="w-40 text-sm font-medium text-gray-700">Kategori:</label>
    <select name="id_kategori" id="id_kategori" required
      class="flex-1 border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#AF1740] focus:border-transparent">
      <option value="">-- Pilih Kategori --</option>
      @foreach($kategoris as $kategori)
        <option value="{{ $kategori->id_kategori }}" {{ $barang->id_kategori == $kategori->id_kategori ? 'selected' : '' }}>
          {{ $kategori->nama_kategori }}
        </option>
      @endforeach
    </select>
  </div>

  <!-- Gambar (opsional upload baru) -->
  <div class="flex items-center space-x-4">
    <label for="gambar" class="w-40 text-sm font-medium text-gray-700">Gambar (opsional):</label>
    <input type="file" name="gambar" id="gambar"
      class="flex-1 border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#AF1740] focus:border-transparent" />
  </div>

  <!-- Tampilkan gambar saat ini (jika ada) -->
  @if ($barang->gambar)
    <div class="flex items-center space-x-4">
      <label class="w-40 text-sm font-medium text-gray-700">Gambar Saat Ini:</label>
      <img src="{{ asset('storage/' . $barang->gambar) }}" alt="Gambar Barang" class="h-20">
    </div>
  @endif

  <!-- Tombol Aksi -->
  <div class="pt-4 flex justify-end space-x-4">
    <button type="submit"
      class="bg-[#AF1740] hover:bg-[#991430] text-white font-medium px-5 py-2 rounded-lg shadow-md transition duration-200">
      Simpan Perubahan
    </button>
    <a href="{{ route('admin.products.index') }}"
      class="text-sm text-gray-600 hover:text-[#AF1740] hover:underline transition py-2">
      Batal
    </a>
  </div>
</form>

    </div>
  </div>
</div>



  <script>
    const sidebar = document.getElementById('sidebar');
    let isExpanded = true;

    function toggleSidebar() {
      isExpanded = !isExpanded;

      if (isExpanded) {
        sidebar.classList.remove('sidebar-collapsed', 'hide-text');
        sidebar.classList.add('sidebar-expanded');
      } else {
        sidebar.classList.remove('sidebar-expanded');
        sidebar.classList.add('sidebar-collapsed', 'hide-text');
      }
    }
  </script>
</body>
</html>
