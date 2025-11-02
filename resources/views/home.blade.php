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
@extends('layout.app')

  <!-- Hero Section -->
@section('content')
  <section class="relative h-[500px] md:h-[600px] mt-6">
    <img src="https://images.unsplash.com/photo-1508214751196-bcfd4ca60f91?auto=format&fit=crop&w=1470&q=80"
      alt="Hero Image" class="absolute inset-0 w-full h-full object-cover brightness-[.4]" />
    <div
      class="relative h-full flex flex-col justify-center items-center px-4 text-center max-w-4xl mx-auto text-white font-extrabold text-4xl md:text-5xl drop-shadow-lg">
      Local Brand. Global Vibe.
      <button
        class="mt-6 bg-black bg-opacity-70 px-6 py-3 rounded-full font-semibold text-base hover:bg-opacity-90 transition">
        Belanja Sekarang
      </button>
    </div>
  </section>

  <!-- Kategori Produk -->
  <section class="mt-16 container mx-auto px-6">
    <h2 class="text-center font-bold text-2xl mb-8">Kategori Produk</h2>
    <div class="flex justify-center gap-6 flex-wrap">
      <!-- Category Cards -->
      <div class="max-w-[120px] cursor-pointer group">
        <img class="rounded-lg object-cover h-28 w-full" src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=400&q=80"
          alt="Hoodie" />
        <p class="mt-2 text-center text-sm font-medium">Hoodie</p>
      </div>
      <div class="max-w-[120px] cursor-pointer group">
        <img class="rounded-lg object-cover h-28 w-full" src="https://images.unsplash.com/photo-1521334884684-d80222895322?auto=format&fit=crop&w=400&q=80"
          alt="T-Shirt" />
        <p class="mt-2 text-center text-sm font-medium">T-Shirt</p>
      </div>
      <div class="max-w-[120px] cursor-pointer group">
        <img class="rounded-lg object-cover h-28 w-full" src="https://images.unsplash.com/photo-1562157879-818bc0726c89?auto=format&fit=crop&w=400&q=80"
          alt="Jaket" />
        <p class="mt-2 text-center text-sm font-medium">Jaket</p>
      </div>
      <div class="max-w-[120px] cursor-pointer group">
        <img class="rounded-lg object-cover h-28 w-full" src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&w=400&q=80"
          alt="Sepatu" />
        <p class="mt-2 text-center text-sm font-medium">Sepatu</p>
      </div>
      <div class="max-w-[120px] cursor-pointer group">
        <img class="rounded-lg object-cover h-28 w-full" src="https://images.unsplash.com/photo-1585386959984-a415522ea9d5?auto=format&fit=crop&w=400&q=80"
          alt="Aksesori" />
        <p class="mt-2 text-center text-sm font-medium">Aksesori</p>
      </div>
    </div>
  </section>

  <!-- Produk Terbaru -->
  <section class="mt-16 container mx-auto px-6">
<h2 class="text-center font-bold text-2xl mb-8">Produk Terbaru</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
        @foreach ($produkTerbaru as $item)
            <div class="border rounded-lg p-4 shadow-sm flex flex-col">
                <img class="h-40 w-full object-cover rounded-lg mb-4"
                    src="{{ asset('uploads/' . $item->gambar) }}"
                    alt="{{ $item->nama }}" />
                <h3 class="font-semibold text-base mb-1">{{ $item->nama }}</h3>
                <p class="font-bold text-green-700 mb-3">
                    Rp {{ number_format($item->harga, 0, ',', '.') }}
                </p>
                <div class="mt-auto flex space-x-3">
                    <button class="flex-1 bg-green-600 text-white rounded-md py-2 font-semibold hover:bg-green-700 transition">
                        Add to Cart
                    </button>
                    <a href="#"
                        class="flex-1 border border-gray-300 rounded-md py-2 font-semibold text-gray-700 hover:bg-gray-100 transition text-center">
                        Lihat Detail
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>

  </section>

  <!-- Produk Unggulan -->
  <section class="mt-20 container mx-auto px-6">
<h2 class="text-center font-bold text-2xl mb-8">Produk Unggulan</h2>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
    @foreach ($produkUnggulan as $item)
        <div class="border rounded-lg p-4 shadow-sm flex flex-col">
            <img class="h-40 w-full object-cover rounded-lg mb-4"
                src="{{ asset('uploads/' . $item->gambar) }}"
                alt="{{ $item->nama }}" />
            <h3 class="font-semibold text-base mb-1">{{ $item->nama }}</h3>
            <p class="font-bold text-green-700 mb-3">
                Rp {{ number_format($item->harga, 0, ',', '.') }}
            </p>
            <div class="mt-auto flex space-x-3">
                <button class="flex-1 bg-green-600 text-white rounded-md py-2 font-semibold hover:bg-green-700 transition">
                    Add to Cart
                </button>
                <a href="#"
                    class="flex-1 border border-gray-300 rounded-md py-2 font-semibold text-gray-700 hover:bg-gray-100 transition text-center">
                    Lihat Detail
                </a>
            </div>
        </div>
    @endforeach
</div>


  </section>

  <!-- Testimonial Section -->
  <section class="mt-24 bg-white container mx-auto px-6 max-w-6xl">
    <h2 class="text-center font-bold text-2xl mb-12">Apa Kata Pelanggan Kami?</h2>
    <div class="flex flex-col md:flex-row gap-12 justify-center">
      <!-- Each Testimonial -->
      <div class="flex flex-col items-center text-center max-w-xs mx-auto">
        <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Sarah W." class="w-16 h-16 rounded-full mb-4" />
        <h3 class="font-semibold text-lg">Sarah W.</h3>
        <p class="text-sm italic text-gray-600">Pemilik Hustler</p>
        <p class="mt-3 text-gray-700 text-sm">
          Produk MOVr selalu memberi saya banyak inspirasi dan kualitas bahannya luar biasa, nyaman dipakai seharian,
          dan desainnya sangat modern. Sangat merekomendasikan!
        </p>
      </div>

      <div class="flex flex-col items-center text-center max-w-xs mx-auto">
        <img src="https://randomuser.me/api/portraits/men/33.jpg" alt="Budi S." class="w-16 h-16 rounded-full mb-4" />
        <h3 class="font-semibold text-lg">Budi S.</h3>
        <p class="text-sm italic text-gray-600">Pelanggan Setia</p>
        <p class="mt-3 text-gray-700 text-sm">
          Saya adalah pelanggan setia MOVr karena tidak pernah kecewa. Pelayanannya cepat, pengiriman tepat waktu, dan
          selalu produk sesuai ekspektasi. Mantap!
        </p>
      </div>

      <div class="flex flex-col items-center text-center max-w-xs mx-auto">
        <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Maya P." class="w-16 h-16 rounded-full mb-4" />
        <h3 class="font-semibold text-lg">Maya P.</h3>
        <p class="text-sm italic text-gray-600">Influencer Gaya</p>
        <p class="mt-3 text-gray-700 text-sm">
          Sangat stylish dan berkualitas! Saya cek dan beli hampir semua produk dari MOVr. Desainnya unik, nyaman
          banget, dan harga pas di kantong!
        </p>
      </div>
    </div>
  </section>

  <!-- Newsletter Subscription -->
  <section class="mt-24 bg-white container mx-auto max-w-2xl px-6 text-center">
    <h2 class="text-2xl font-bold mb-4">Dapatkan Pembaruan Terbaru</h2>
    <p class="mb-6 text-gray-700">
      Daftarkan email Anda untuk mendapatkan informasi eksklusif tentang produk baru, penawaran spesial, dan tren fashion
      terbaru dari MOVr.
    </p>
    <form class="flex gap-4 justify-center">
      <input type="email" placeholder="Masukkan email Anda"
        class="w-full max-w-md rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-600" />
      <button type="submit"
        class="bg-green-600 hover:bg-green-700 transition text-white font-semibold px-6 py-2 rounded-lg">Langganan
        Sekarang</button>
    </form>
  </section>
@endsection  
</body>

</html>
