<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Movr')</title>
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body x-data="{ openSidebar: false }" class="relative">

  @include('layout.navbar')
  @include('layout.sidebar')

  <main class="min-h-screen">
    @yield('content')
  </main>

  @include('layout.footer')

</body>
</html>
