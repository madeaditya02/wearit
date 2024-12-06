l;@extends('layouts.user')

@section('title')
Products
@endsection
@section('content')
<div> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Detail Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white-100 p-6">
  
  <!-- Tombol Back -->
  <a href="#" class="text-blue-900 font-bold text-xl">Back</a>

  <!-- Grid Utama -->
  <div class="mt-2 grid gap-6 sm:grid-cols-1 md:grid-cols-2">

    <!-- Gambar Produk -->
    <div class="flex justify-center p-6">
      <div class="bg-gray-300 p-7 rounded-lg sm:w-full md:w-10/12 lg:w-8/12">
        <img src="https://colorbox.co.id/cdn/shop/files/I-TSKBSC502O105_2_763e644d-3c4a-4f7c-b4a6-b0eea8ec5aea.jpg?v=1717404703&width=450" alt="Product Image" class="rounded-lg">
      </div>
    </div>

    <!-- Detail Produk -->
    <div class="bg-white p-8 rounded-lg shadow sm:mb-8 md:mr-4 lg:mr-14">
      <!-- Nama Produk -->
      <h1 class="text-2xl text-gray-600 font-bold mt-6">Printed Loose T-shirt</h1>

      <!-- Harga dan Rating -->
      <div class="mt-2 flex items-center">
        <p class="text-xl text-blue-600 font-semibold">Rp. 500.000,00</p>
        <div class="ml-auto flex items-center">
          <p class="text-gray-600 mr-2">5.0</p>
          <span class="text-yellow-500">&#9733;</span>
        </div>
      </div>

      <!-- Deskripsi Produk -->
      <p class="mt-4 text-gray-600">
        Relaxed-fit shirt. Camp collar and short sleeves. Button-up front.
      </p>

      <!-- Pilihan Warna -->
      <div class="mt-6">
        <h2 class="font-semibold">Color</h2>
        <div class="flex space-x-2 mt-2">
          <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gray-300 shadow rounded border"></div>
          <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gray-400 shadow rounded border"></div>
          <div class="w-8 h-8 sm:w-10 sm:h-10 bg-black shadow rounded border"></div>
          <div class="w-8 h-8 sm:w-10 sm:h-10 bg-teal-300 shadow rounded border"></div>
          <div class="w-8 h-8 sm:w-10 sm:h-10 bg-blue-300 shadow rounded border"></div>
        </div>
      </div>

      <!-- Pilihan Ukuran -->
      <div class="mt-6">
        <h2 class="font-semibold">Size</h2>
        <div class="flex space-x-2 sm:space-x-4 mt-2">
          <button class="px-2 sm:px-4 py-2 text-sm border rounded">XS</button>
          <button class="px-2 sm:px-4 py-2 text-sm border rounded">S</button>
          <button class="px-2 sm:px-4 py-2 text-sm border rounded">M</button>
          <button class="px-2 sm:px-4 py-2 text-sm border rounded">L</button>
          <button class="px-2 sm:px-4 py-2 text-sm border rounded">XL</button>
        </div>
        <a href="#" class="text-sm ml-4 sm:ml-10 text-blue-600 mt-2 inline-block">
          Find your size | Measurement guide
        </a>
      </div>

      <!-- Tombol Add to Cart -->
      <div class="mt-6 flex items-center space-x-4">
        <button class="px-6 sm:px-10 py-2 bg-blue-900 text-white rounded">
          Add to Cart
        </button>
        <button class="text-red-500 text-4xl sm:text-5xl pl-4 sm:pl-8">&#9829;</button>
      </div>
    </div>
  </div>
</body>
</html>

@endsection