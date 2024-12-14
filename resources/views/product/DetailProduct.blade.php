@extends('layouts.user')

@section('title')
    Products
@endsection
@section('content')
    <!-- Tombol Back -->
    <div class="w-fit mx-auto px-48 detail-product">
        <a href="/product" class="text-blue-900 font-semibold text-xl inline-flex items-center gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>
            <span>Back</span>
        </a>
        <!-- Grid Utama -->
        <div class="mt-8 flex gap-28 mx-auto items-start">

            <!-- Gambar Produk -->
            <div class="bg-gray-300 p-7 rounded-lg sm:w-full md:w-10/12 lg:w-4/12">
                <img src="{{ $produk->gambar_produk }}" alt="Product Image" class="rounded-lg">
            </div>

            <!-- Detail Produk -->
            <div class="bg-white rounded-lg sm:mb-8 flex-grow">
                <!-- Nama Produk -->
                <div class="flex items-center justify-between gap-4 mt-6 mb-2">
                    <h1 class="text-gray-600 font-bold text-3xl">{{ $produk->nama_produk }}</h1>
                    {{-- <div class="ml-auto flex items-center text-xl">
                        <p class="text-gray-600 mr-2">5.0</p>
                        <span class="text-yellow-500">&#9733;</span>
                    </div> --}}
                </div>

                <!-- Harga -->
                {{-- <p class="text-xl text-blue-600 font-semibold mt-2">
                    {{ Number::currency($produk->harga_produk, 'IDR', 'id') }}
                </p> --}}
                @if ($produk->diskon->count())
                    <p class="text-blue-600 font-medium line-through text-sm">
                        {{ Number::currency($produk->harga_produk, 'IDR', 'id') }}
                    </p>
                @endif
                <p class="text-2xl text-blue-600 font-semibold mt-px flex gap-4 items-center">
                    {{ Number::currency($produk->harga_setelah_diskon, 'IDR', 'id') }}
                    @if ($produk->diskon->count())
                        <span class="px-3 py-1 rounded-lg border border-blue-600 text-blue-600 text-xs">Diskon
                            {{ $produk->diskon[0]->jumlah_diskon }}%</span>
                    @endif
                </p>
                <!-- Deskripsi Produk -->
                <p class="mt-4 text-gray-600">
                    {{ $produk->deskripsi_produk }}
                </p>

                <!-- Pilihan Warna -->
                {{-- <div class="mt-6">
                    <h2 class="font-semibold">Color</h2>
                    <div class="flex space-x-2 mt-2">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gray-300 shadow rounded border"></div>
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gray-400 shadow rounded border"></div>
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-black shadow rounded border"></div>
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-teal-300 shadow rounded border"></div>
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-blue-300 shadow rounded border"></div>
                    </div>
                </div> --}}

                <!-- Pilihan Ukuran -->
                <div class="mt-6">
                    <h2 class="font-semibold">Size</h2>
                    <div class="flex space-x-2 sm:space-x-4 mt-2 btn-size">
                        <button type="button" class="px-2 sm:px-4 py-2 text-sm border rounded">XS</button>
                        <button type="button" class="px-2 sm:px-4 py-2 text-sm border rounded">S</button>
                        <button type="button" class="px-2 sm:px-4 py-2 text-sm border rounded">M</button>
                        <button type="button" class="px-2 sm:px-4 py-2 text-sm border rounded">L</button>
                        <button type="button" class="px-2 sm:px-4 py-2 text-sm border rounded">XL</button>
                    </div>
                    {{-- <a href="#" class="text-sm ml-4 sm:ml-10 text-blue-600 mt-2 inline-block">
                      Find your size | Measurement guide
                    </a> --}}
                </div>

                <!-- Tombol Add to Cart -->
                <div class="mt-6 flex items-center gap-x-8">
                    <form action="/cart/add" method="POST" class="flex items-start">
                        @csrf
                        <input type="hidden" class="input-size" name="size">
                        <input type="hidden" value="{{ $produk->id_produk }}" name="product">
                        <button class="px-6 sm:px-10 py-2 bg-blue-900 text-white rounded">
                            Add to Cart
                        </button>
                    </form>
                    <form action="/favorites/add" method="POST" class="flex items-start m-0">
                        @csrf
                        <input type="hidden" value="{{ $produk->id_produk }}" name="product">
                        {{-- <button class="text-red-500 text-4xl sm:text-5xl">&#9825;</button> --}}
                        <button class="text-red-500 text-4xl sm:text-5xl">
                            @if ($favorited)
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="size-7">
                                    <path
                                        d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
                                </svg>
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-7">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                </svg>
                            @endif
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        let size = null

        const buttons = document.querySelectorAll('.btn-size button')
        const inputSize = document.querySelector('.input-size')

        function setSize(event) {
            size = event.target.innerHTML
            inputSize.value = size

            buttons.forEach(button => button.classList.toggle('clicked', button.innerHTML == size))
        }
        buttons.forEach(button => button.addEventListener('click', setSize));
    </script>
@endsection
