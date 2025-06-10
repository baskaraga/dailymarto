
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
<!-- Menu -->
<nav class="flex flex-col space-y-6">
  <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-4 text-pink-600 font-semibold">
    <span>🏠</span>
    <span class="menu-text">Dashboard</span>
  </a>
  <a href="{{ route('admin.customers') }}" class="flex items-center space-x-4 text-gray-700 hover:text-pink-600">
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

  </div>

  <!-- Main Content -->
  <div class="flex-1 p-6">
    <!-- Toggle Button -->


<h1 class="text-2xl font-bold text-[#AF1740]">Dashboard</h1>

<div class="p-6 space-y-8">
  <!-- Grafik -->
<!-- Grafik Dummy -->
<div class="bg-white rounded-xl shadow-md p-6 mb-6">
  <h2 class="text-xl font-semibold text-[#AF1740] mb-4">Sales Overview</h2>
  <img 
    src="https://quickchart.io/chart?c={type:'bar',data:{labels:['Jan','Feb','Mar','Apr'],datasets:[{label:'Sales',data:[10,20,15,30]}]}}"
    alt="Dummy Chart"
    class="w-full h-64 object-contain"
  >
</div>

  {{-- Customers Preview --}}
<h2 class="text-2xl font-bold">Customers</h2>   
  <div class="bg-[#FFE1E1] rounded-2xl p-4 shadow-sm">

    <div class="overflow-x-auto">
      <table class="min-w-full divide-y divide-gray-300">
        <thead class="text-left text-sm text-gray-700 uppercase tracking-wider border-b border-gray-300">
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
        </tbody>
      </table>
    </div>
    <div class="mt-4 text-right">
      <a href="{{ route('admin.customers') }}" class="text-sm text-pink-600 hover:underline">View More</a>
    </div>
  </div>

  {{-- Products Preview --}}
<h2 class="text-2xl font-bold">Products</h2>  
  <div class="bg-[#FFE1E1] rounded-2xl p-4 shadow-sm">

    <div class="overflow-x-auto">
      <table class="min-w-full divide-y divide-gray-300">
        <thead class="text-left text-sm text-gray-700 uppercase tracking-wider border-b border-gray-300">
          <tr>
        <th class="py-3">SKU</th>
        <th class="py-3">Name</th>
        <th class="py-3">Price</th>
        <th class="py-3">In stock</th>
        <th class="py-3">Allocated</th>
        <th class="py-3">On hand</th>
        <th class="py-3">Action</th>
      </tr>
    </thead>
    <tbody class="text-sm text-gray-800">
      <tr class="border-b border-gray-200 hover:bg-gray-50">
        <td class="py-3">SKU1234</td>
        <td class="py-3">Apple iPhone 13</td>
        <td class="py-3">$799</td>
        <td class="py-3">25</td>
        <td class="py-3">5</td>
        <td class="py-3">30</td>
        <td class="py-3">
          <button class="text-blue-600 hover:underline">Edit</button>
          <button class="text-red-600 hover:underline ml-2">Delete</button>
        </td>
      </tr>
      <tr class="border-b border-gray-200 hover:bg-gray-50">
        <td class="py-3">SKU5678</td>
        <td class="py-3">Samsung Galaxy S22</td>
        <td class="py-3">$749</td>
        <td class="py-3">40</td>
        <td class="py-3">10</td>
        <td class="py-3">50</td>
        <td class="py-3">
          <button class="text-blue-600 hover:underline">Edit</button>
          <button class="text-red-600 hover:underline ml-2">Delete</button>
        </td>
      </tr>
        </tbody>
      </table>
    </div>
    <div class="mt-4 text-right">
      <a href="{{ route('admin.products') }}" class="text-sm text-pink-600 hover:underline">View More</a>
    </div>
  </div>

  {{-- Promos Preview --}}
<h2 class="text-2xl font-bold">Promo</h2>  
  <div class="bg-[#FFE1E1] rounded-2xl p-4 shadow-sm">

    <div class="overflow-x-auto">
      <table class="min-w-full divide-y divide-gray-300">
        <thead class="text-left text-sm text-gray-700 uppercase tracking-wider border-b border-gray-300">
          <tr>
        <th class="py-3">Created at</th>
        <th class="py-3">Name</th>
        <th class="py-3">Description</th>
        <th class="py-3">Start Date</th>
        <th class="py-3">End Date</th>
        <th class="py-3">Action</th>
      </tr>
    </thead>
    <tbody class="text-sm text-gray-800">
      <tr class="border-b border-gray-200 hover:bg-gray-50">
        <td class="py-3">2025-06-01</td>
        <td class="py-3">Summer Sale</td>
        <td class="py-3">Diskon hingga 50% untuk produk tertentu.</td>
        <td class="py-3">2025-06-01</td>
        <td class="py-3">2025-06-15</td>
        <td class="py-3">
          <button class="text-blue-600 hover:underline">Edit</button>
          <button class="text-red-600 hover:underline ml-2">Delete</button>
        </td>
      </tr>
      <tr class="border-b border-gray-200 hover:bg-gray-50">
        <td class="py-3">2025-06-05</td>
        <td class="py-3">Ramadan Promo</td>
        <td class="py-3">Diskon spesial menjelang lebaran.</td>
        <td class="py-3">2025-06-10</td>
        <td class="py-3">2025-06-20</td>
        <td class="py-3">
          <button class="text-blue-600 hover:underline">Edit</button>
          <button class="text-red-600 hover:underline ml-2">Delete</button>
        </td>
      </tr>
        </tbody>
      </table>
    </div>
    <div class="mt-4 text-right">
      <a href="{{ route('admin.promo') }}" class="text-sm text-pink-600 hover:underline">View More</a>
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
