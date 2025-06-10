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
  <a href="{{ route('admin.customers') }}" class="flex items-center space-x-4 text-pink-600 font-semibold">
    <span>👥</span>
    <span class="menu-text">Customers</span>
  </a>
  <a href="{{ route('admin.products') }}" class="flex items-center space-x-4 text-gray-700 hover:text-pink-600">
    <span>👜</span>
    <span class="menu-text">Products</span>
  </a>
  <a href="{{ route('admin.promo') }}" class="flex items-center space-x-4 text-gray-700 hover:text-pink-600">
    <span>💸</span>
    <span class="menu-text">Promo</span>
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


<h1 class="text-2xl font-bold text-[#AF1740]">Customers</h1>

    <div class="p-6">
         <form action="{{ route('admin.customers') }}" method="GET" class="flex items-center">
      <input
        type="text"
        name="search"
        value="{{ request('search') }}"
        placeholder="Search customers..."
        class="border border-gray-300 rounded-lg px-3 py-1.5 text-sm focus:outline-none focus:ring focus:border-blue-300"
      />
<button
  type="submit"
  class="ml-2 bg-[#AF1740] text-white px-3 py-1.5 rounded-lg text-sm hover:bg-[#991430]"
>
        Search
      </button>
    </form>
<!-- Tombol Create Customer -->
<p
   class="fixed bottom-12 right-12 bg-[#AF1740] text-white px-4 py-2 rounded-lg text-sm shadow-lg hover:bg-[#991430] transition">
   + Create Customer
</p>

  <div class="overflow-x-auto">
    <table class="min-w-full divide-y divide-gray-200">
      <thead class="text-left text-sm text-gray-600 uppercase tracking-wider border-b border-gray-200">
        <tr>
          <th class="py-3">Name</th>
          <th class="py-3">Email</th>
          <th class="py-3">Phone</th>
          <th class="py-3">Membership</th>
          <th class="py-3">Action</th>
        </tr>
      </thead>
      <tbody class="text-sm text-gray-800">
        <tr class="border-b border-gray-200 hover:bg-gray-50">
          <td class="py-3">John Doe</td>
          <td class="py-3">john@example.com</td>
          <td class="py-3">08123456789</td>
          <td class="py-3">Gold</td>
          <td class="py-3">
            <button class="text-blue-600 hover:underline">Edit</button>
            <button class="text-red-600 hover:underline ml-2">Delete</button>
          </td>
        </tr>
        <tr class="border-b border-gray-200 hover:bg-gray-50">
          <td class="py-3">Jane Smith</td>
          <td class="py-3">jane@example.com</td>
          <td class="py-3">08987654321</td>
          <td class="py-3">Silver</td>
          <td class="py-3">
            <button class="text-blue-600 hover:underline">Edit</button>
            <button class="text-red-600 hover:underline ml-2">Delete</button>
          </td>
        </tr>
        <!-- Tambah baris lain di sini -->
      </tbody>
    </table>
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
