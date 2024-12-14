@extends('layouts.user')

@section('title')
    Cart
@endsection

@section('content')
    <!-- Cart Header -->
    <div class="flex flex-col space-y-2 px-6 ml-12">
        <h1 class="text-4xl font-semibold font-poppins text-primary-darker leading-tight">Cart</h1>
        <p class="text-l font-poppins text-gray-700 ml-4">{{ $cart->count() }} ITEMS</p>
    </div>
    @if ($cart->count() > 0)
        <div class="flex gap-6 px-12" x-data="cart">
            <!-- Product List -->
            <div class="flex flex-col border border-none p-10 space-y-8 flex-grow">
                @foreach ($cart as $produk)
                    <!-- Product 1 -->
                    <div class="flex items-start border-b border-gray-300 pb-6 space-x-4">
                        <img src="{{ $produk->gambar_produk }}" class="w-[180px] h-[180px] object-cover object-center"
                            alt="">
                        <div class="flex items-start justify-between flex-grow mt-4">
                            <div class="flex-1 flex flex-col justify-between space-y-2">
                                <p class="text-2xl font-semibold text-gray-800 capitalize">{{ $produk->nama_produk }}</p>
                                <div class="space-y-1">
                                    {{-- <p class="text-lg font-medium text-gray-500">Color: <span class="text-black">Gray</span></p> --}}
                                    <p class="text-lg font-medium text-gray-500">Size: <span
                                            class="text-black">{{ Str::upper($produk->pivot->size) }}</span></p>
                                </div>
                                <!-- Quantity and Remove Button -->
                                <div class="flex gap-4 items-center mt-4">
                                    <form action="/cart/updateQuantity" method="POST" class="flex gap-4 items-center">
                                        @csrf
                                        <div class="flex items-center border border-gray-400 rounded w-[160px] h-[52px]">
                                            <button type="button"
                                                class="px-7 text-gray-800 hover:text-gray-600 focus:outline-none"
                                                x-on:click="decreaseQuantity({{ $produk->pivot->id_keranjang }})">-</button>
                                            <span class="mx-auto font-semibold text-lg text-gray-800"
                                                x-text="cart.filter(c => c.pivot.id_keranjang == {{ $produk->pivot->id_keranjang }})[0].pivot.quantity">1</span>
                                            <input type="hidden" name="quantity"
                                                :value="cart.filter(c => c.pivot.id_keranjang ==
                                                    {{ $produk->pivot->id_keranjang }})[0].pivot.quantity">
                                            <input type="hidden" name="produk"
                                                value="{{ $produk->id }}-{{ $produk->pivot->size }}">
                                            <button type="button"
                                                class="px-7 text-gray-800 hover:text-gray-600 focus:outline-none"
                                                x-on:click="addQuantity({{ $produk->pivot->id_keranjang }})">+</button>
                                        </div>
                                        <template
                                            x-if="cart.filter(c => c.pivot.id_keranjang == {{ $produk->pivot->id_keranjang }})[0].showSave">
                                            <button
                                                class="text-blue-600 font-medium hover:text-blue-800 focus:outline-none">Save</button>
                                        </template>
                                    </form>
                                    <form action="/cart/delete" method="POST">
                                        @csrf
                                        <input type="hidden" name="produk"
                                            value="{{ $produk->id }}-{{ $produk->pivot->size }}">
                                        <button
                                            class="text-red-600 font-medium hover:text-red-800 focus:outline-none">Remove</button>
                                    </form>
                                </div>
                            </div>
                            <p class="text-lg font-semibold text-gray-800">
                                {{ Number::currency($produk->pivot->quantity * $produk->harga_produk, 'IDR', 'id') }}</p>
                        </div>
                    </div>
                @endforeach
                <!-- Product 2 -->
                {{-- <div class="flex items-center border-gray-300 pb-6 space-x-4">
                <input type="checkbox" id="product2" class="w-4 h-4 mt-5">
                <div class="w-[180px] h-[180px] bg-cover bg-center"
                    style="background-image: url('https://image.uniqlo.com/UQ/ST3/id/imagesgoods/470182/item/idgoods_69_470182_3x4.jpg?width=648');">
                </div>
                <div class="flex items-center justify-between flex-grow">
                    <div class="flex-1 flex flex-col justify-between space-y-2">
                        <p class="text-2xl font-semibold text-gray-800 capitalize">Denim Jacket</p>
                        <div class="space-y-1">
                            <p class="text-lg font-medium text-gray-500">Color: <span class="text-black">Sky Blue</span></p>
                            <p class="text-lg font-medium text-gray-500">Size: <span class="text-black">XL</span></p>
                        </div>
                        <div class="flex gap-6 items-center mt-4">
                            <div class="flex items-center border border-gray-400 rounded w-[160px] h-[52px]">
                                <button class="px-7 text-gray-800 hover:text-gray-600 focus:outline-none">-</button>
                                <span class="mx-auto font-semibold text-lg text-gray-800">1</span>
                                <button class="px-7 text-gray-800 hover:text-gray-600 focus:outline-none">+</button>
                            </div>
                            <button class="text-red-600 font-medium hover:text-red-800 focus:outline-none">Remove</button>
                        </div>
                    </div>
                    <p class="text-lg font-semibold text-gray-800">Rp. 150.000,00</p>
                </div>
            </div> --}}
            </div>

            <!-- Order Summary -->
            <div class="flex justify-end">
                <div class="w-[376px] h-[434px] border-2 border-gray-300 p-6 space-y-6">
                    <p class="text-xl font-semibold font-poppins text-center capitalize">Order Summary</p>
                    <div class="flex justify-between text-lg font-medium font-poppins">
                        <p>Price</p>
                        <p>{{ Number::currency($total_harga, 'IDR', 'id') }}</p>
                    </div>
                    <div class="flex justify-between text-lg font-medium font-poppins">
                        <p>Shipping</p>
                        <p>-</p>
                    </div>
                    <div class="flex justify-between text-lg font-medium font-poppins">
                        <p>Quantity</p>
                        <p>{{ $cart->count() }} Item</p>
                    </div>
                    <div class="flex justify-between text-lg font-medium font-poppins border-t pt-4">
                        <p>Total</p>
                        <p>{{ Number::currency($produk->pivot->quantity * $produk->harga_produk, 'IDR', 'id') }}</p>
                    </div>
                    <a href="/cart/checkout"
                        class="w-full block text-center py-2 bg-blue-900 text-white text-lg font-semibold rounded-lg">Proceed
                        To
                        Checkout</a>
                    <a href="/product"
                        class="w-full block text-center  py-2 border border-blue-900 text-blue-900 text-lg font-semibold rounded-lg">Continue
                        Shopping</a>
                </div>
            </div>
        </div>
    @else
        <div class="px-6 ml-12 mt-10">
            <h2 class="text-4xl font-semibold mb-4">No products added to cart</h2>
            <a href="/product" class="text-xl font-medium text-blue-600">Continue Shopping</a>
        </div>
    @endif
@endsection

@section('javascript')
    <script src="//unpkg.com/alpinejs" defer></script>
    <script>
        const cart = {!! json_encode($cart) !!} ?? []
        console.log(cart);

        document.addEventListener('alpine:init', () => {
            Alpine.data('cart', () => ({
                cart,
                addQuantity(id) {
                    console.log(id);
                    this.cart.filter(c => c.pivot.id_keranjang == id)[0].pivot.quantity++
                    this.cart.filter(c => c.pivot.id_keranjang == id)[0].showSave = true
                },
                decreaseQuantity(id) {
                    const item = this.cart.filter(c => c.pivot.id_keranjang == id)[0]
                    if (item.pivot.quantity > 1) {
                        this.cart.filter(c => c.pivot.id_keranjang == id)[0].pivot.quantity--
                        this.cart.filter(c => c.pivot.id_keranjang == id)[0].showSave = true
                    }
                },
            }))
        })
    </script>
@endsection
