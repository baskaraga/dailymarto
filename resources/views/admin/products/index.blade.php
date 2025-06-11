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
    <!-- Toggle Button -->


<h1 class="text-2xl font-bold text-[#AF1740]">Products</h1>
<div class="p-6">
      <!-- Search -->
      <form action="{{ route('admin.categories.index') }}" method="GET" class="flex items-center">
        <input
          type="text"
          name="search"
          value="{{ request('search') }}"
          placeholder="Cari Barang..."
          class="border border-gray-300 rounded-lg px-3 py-1.5 text-sm focus:outline-none focus:ring focus:border-blue-300"
        />
        <button
          type="submit"
          class="ml-2 bg-[#AF1740] text-white px-3 py-1.5 rounded-lg text-sm hover:bg-[#991430]"
        >
          Search
        </button>
      </form>

      <!-- Create Button -->
      <a
        href="{{ route('admin.products.create') }}"
        class="fixed bottom-12 right-12 bg-[#AF1740] text-white px-4 py-2 rounded-lg text-sm shadow-lg hover:bg-[#991430] transition"
      >
        + Create Product
      </a>

      <!-- Table -->
      <div class="overflow-x-auto mt-6">
  <table class="min-w-full divide-y divide-gray-200">
    <thead class="text-left text-sm text-gray-600 uppercase tracking-wider border-b border-gray-200">
      <tr>
        <th class="py-3">ID</th>
        <th class="py-3">Nama</th>
        <th class="py-3">Harga</th>
        <th class="py-3">Stok</th>
        <th class="py-3">Gambar</th>
        <th class="py-3">Kategori</th>
        <th class="py-3">Aksi</th>
      </tr>
    </thead>
    <tbody class="text-sm text-gray-800">
      @foreach ($barang as $item)
        <tr class="border-b border-gray-200 hover:bg-gray-50">
          <td class="py-3">{{ $item->id_barang }}</td>
          <td class="py-3">{{ $item->nama_barang }}</td>
          <td class="py-3">Rp{{ number_format($item->harga, 0, ',', '.') }}</td>
          <td class="py-3">{{ $item->stok }}</td>
          <td class="py-3">
            @if ($item->gambar)
              <img src="{{ asset('storage/gambar/' . $item->gambar) }}" alt="Gambar" class="w-12 h-12 object-cover rounded">
            @else
              Tidak ada
            @endif
          </td>
          <td class="py-3">{{ $item->kategori->nama_kategori ?? '-' }}</td>
          <td class="py-3">
            <a href="{{ route('admin.products.edit', $item->id_barang) }}" class="text-blue-600 hover:underline">Edit</a>
            <form action="{{ route('admin.products.destroy', $item->id_barang) }}" method="POST" class="inline">
              @csrf
              @method('DELETE')
              <button type="submit" onclick="return confirm('Yakin ingin hapus?')" class="text-red-600 hover:underline ml-2">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

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
