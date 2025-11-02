<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>MOVr - Local Brand</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white text-gray-900 font-sans">
  <!-- Header -->
 <header class="bg-white shadow-md">
  <div class="container mx-auto flex items-center justify-between py-4 px-6">
    {{-- Logo --}}
    <div class="flex items-center gap-2">
      <div class="bg-green-600 rounded-md p-1">
        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
          stroke-linejoin="round" viewBox="0 0 24 24">
          <path d="M12 20v-6"></path>
          <path d="M6 12h12"></path>
          <circle cx="12" cy="12" r="10"></circle>
        </svg>
      </div>
      <span class="font-bold text-lg text-green-700 select-none">MOVr</span>
    </div>

    {{-- Navigation --}}
    <nav class="hidden md:flex space-x-8 font-semibold text-gray-700 text-sm">
      <a href="#" class="hover:text-green-600 transition">Beranda</a>
      <a href="#" class="hover:text-green-600 transition">Produk</a>
      <a href="#" class="hover:text-green-600 transition">Tentang Kami</a>
      <a href="#" class="hover:text-green-600 transition">Kontak</a>
    </nav>

    {{-- Icons --}}
    <div class="flex items-center space-x-4 text-gray-700">
      <button aria-label="Search" class="hover:text-green-600 transition">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
          stroke-linejoin="round" viewBox="0 0 24 24">
          <circle cx="11" cy="11" r="8"></circle>
          <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
        </svg>
      </button>

      <button aria-label="Cart" class="hover:text-green-600 transition">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
          stroke-linejoin="round" viewBox="0 0 24 24">
          <path d="M6 6h15l-1.5 9h-13z" />
          <circle cx="9" cy="21" r="1" />
          <circle cx="18" cy="21" r="1" />
        </svg>
      </button>

      {{-- Tombol Sidebar --}}
      <button 
        aria-label="User Account"
        class="hover:text-green-600 transition"
        @click="openSidebar = true"
      >
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
          stroke-linejoin="round" viewBox="0 0 24 24">
          <circle cx="12" cy="7" r="4" />
          <path d="M5.5 21a9 9 0 0113 0" />
        </svg>
      </button>
    </div>
  </div>
</header>
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>
</html>