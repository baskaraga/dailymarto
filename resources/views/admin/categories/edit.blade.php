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
  <a href="{{ route('admin.products.index') }}" class="flex items-center space-x-4 text-gray-700 hover:text-pink-600">
    <span>👜</span>
    <span class="menu-text">Products</span>
  </a>
  <a href="{{ route('admin.promo') }}" class="flex items-center space-x-4 text-gray-700 hover:text-pink-600">
    <span>💸</span>
    <span class="menu-text">Promo</span>
  </a>
  <a href="{{ route('admin.categories.index') }}" class="flex items-center space-x-4 text-pink-600 font-semibold">
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
  <h1 class="text-2xl font-bold text-[#AF1740]">Edit Kategori Barang</h1>

  <div class="p-6 flex justify-center">
    <div class="w-full max-w-xl bg-white p-6 rounded-lg shadow-md">
      <h2 class="text-xl font-semibold text-gray-800 mb-6">Edit Kategori</h2>

      <form action="{{ route('admin.categories.update', $kategori->id_kategori) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <!-- Input Nama Kategori -->
        <div class="flex items-center space-x-4">
          <label for="nama_kategori" class="w-40 text-sm font-medium text-gray-700">
            Nama Kategori:
          </label>
          <input
            type="text"
            name="nama_kategori"
            id="nama_kategori"
            required
            value="{{ $kategori->nama_kategori }}"
            class="flex-1 border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#AF1740] focus:border-transparent"
          />
        </div>

        <!-- Tombol Aksi -->
        <div class="pt-4 flex justify-end space-x-4">
          <button
            type="submit"
            class="bg-[#AF1740] hover:bg-[#991430] text-white font-medium px-5 py-2 rounded-lg shadow-md transition duration-200"
          >
            Simpan Perubahan
          </button>
          <a
            href="{{ route('admin.categories.index') }}"
            class="text-sm text-gray-600 hover:text-[#AF1740] hover:underline transition py-2"
          >
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
