@extends('layouts.user')

@section('title')
    Products
@endsection
@section('content')
    <!-- Tombol Back -->
    <div class="w-fit mx-auto mt-4 px-48">
        <a href="/product" class="text-blue-900 font-semibold text-xl inline-flex items-center gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>
            <span>Back</span>
        </a>
        <!-- Grid Utama -->
        <div class="mt-10 flex gap-28 mx-auto items-start">

            <!-- Gambar Produk -->
            <div class="bg-gray-300 p-7 rounded-lg sm:w-full md:w-10/12 lg:w-4/12">
                <img src="https://colorbox.co.id/cdn/shop/files/I-TSKBSC502O105_2_763e644d-3c4a-4f7c-b4a6-b0eea8ec5aea.jpg?v=1717404703&width=450"
                    alt="Product Image" class="rounded-lg">
            </div>

            <!-- Detail Produk -->
            <div class="bg-white rounded-lg shadow sm:mb-8 flex-grow">
                <!-- Nama Produk -->
                <div class="flex items-center justify-between gap-4 mt-6">
                    <h1 class="text-gray-600 font-bold text-2xl">Printed Loose T-shirt</h1>
                    <div class="ml-auto flex items-center text-xl">
                        <p class="text-gray-600 mr-2">5.0</p>
                        <span class="text-yellow-500">&#9733;</span>
                    </div>
                </div>

                <!-- Harga dan Rating -->
                <p class="text-xl text-blue-600 font-semibold mt-2">Rp. 500.000,00</p>


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
                    <button class="text-red-500 text-4xl sm:text-5xl pl-4 sm:pl-8">&#9825;</button>
                </div>
            </div>
        </div>
    </div>
@endsection
