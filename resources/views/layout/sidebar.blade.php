<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Movr' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div
  x-show="openSidebar"
  @click.away="openSidebar = false"
  class="fixed inset-0  bg-opacity-1 z-10 flex justify-end backdrop-blur-sm"
  x-transition.opacity
>
  <div
    class="w-64 bg-white shadow-lg h-full p-6 transform transition-transform duration-300"
    x-transition:enter="transform translate-x-full"
    x-transition:enter-end="transform translate-x-0"
    x-transition:leave="transform translate-x-0"
    x-transition:leave-end="transform translate-x-full"
  >
    <!-- Tombol Tutup -->
    <button
      @click="openSidebar = false"
      class="absolute top-4 right-4 text-gray-500 hover:text-gray-700"
    >
      ✕
    </button>

    <!-- Profil -->
    <div class="flex flex-col items-center mb-8 mt-8">
      <div class="h-16 w-16 bg-green-100 rounded-full flex items-center justify-center mb-3">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 15c2.484 0 4.78.748 6.879 2.021M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
      </div>
      <p class="font-bold text-lg text-center">fahmi</p>
    </div>

    <!-- Navigasi -->
    <nav class="flex flex-col space-y-5 mb-8">
      <a href="#" class="flex items-center space-x-3 text-gray-700 hover:text-green-600 transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <rect x="3" y="3" width="7" height="7" rx="1" ry="1"/>
          <rect x="14" y="3" width="7" height="7" rx="1" ry="1"/>
          <rect x="14" y="14" width="7" height="7" rx="1" ry="1"/>
          <rect x="3" y="14" width="7" height="7" rx="1" ry="1"/>
        </svg>
        <span>Dashboard</span>
      </a>

      <a href="#" class="flex items-center space-x-3 text-gray-700 hover:text-green-600 transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2" />
          <circle cx="12" cy="12" r="10" stroke-width="2"/>
        </svg>
        <span>Settings</span>
      </a>
    </nav>

    <!-- Tombol Logout -->
    <button class="w-full bg-green-700 text-white py-2 rounded hover:bg-green-800 flex justify-center items-center space-x-2">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7" />
        <path stroke-linecap="round" stroke-linejoin="round" d="M7 12H3" />
      </svg>
      <span>Log Out</span>
    </button>
  </div>
</div>


</body>
</html>
