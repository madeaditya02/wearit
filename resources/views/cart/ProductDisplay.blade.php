@extends('layouts.user')

@section('title')
Cart 
@endsection

@section('content')
    <!-- Cart Header -->
    <div class="flex flex-col space-y-2 p-6 ml-12">
        <h1 class="text-4xl font-semibold font-poppins text-primary-darker leading-tight">Cart</h1>
            <p class="text-l font-poppins text-gray-700 ml-4">2 ITEMS</p>
      </div>

    <!-- Product List -->
    <div class="flex flex-col border border-none w-[893px] h-[538px] p-10 ml-20 space-y-8">
        <!-- Product 1 -->
        <div class="flex items-start border-b border-gray-300 pb-6 space-x-4">
          <input type="checkbox" id="product1" class="w-4 h-4 mt-5">
            <div class="w-[180px] h-[180px] bg-cover bg-center" style="background-image: url('https://colorbox.co.id/cdn/shop/files/I-BSWFCR224L165_LT._PINK_2_77c94d75-a0e1-4d9d-bca2-f53f7d4cf404.jpg?v=1732775256&width=600');"></div>
              <div class="flex-1 flex flex-col justify-between space-y-2">
              <p class="text-2xl font-semibold text-gray-800 capitalize">Oversize Tshirt Christy Edition</p>
              <div class="space-y-1">
            <p class="text-lg font-medium text-gray-500">Color: <span class="text-black">Gray</span></p>
          <p class="text-lg font-medium text-gray-500">Size: <span class="text-black">XL</span></p>
        </div>
        <!-- Quantity and Remove Button -->
        <div class="flex justify-between items-center mt-4">
          <div class="flex items-center border border-gray-400 rounded w-[160px] h-[52px]">
            <button class="px-7 text-gray-800 hover:text-gray-600 focus:outline-none">-</button>
              <span class="mx-auto font-semibold text-lg text-gray-800">1</span>
            <button class="px-7 text-gray-800 hover:text-gray-600 focus:outline-none">+</button>
          </div>
          <button class="text-red-600 font-medium hover:text-red-800 focus:outline-none">Remove</button>
        </div>
        </div>
          <p class="text-lg font-semibold text-gray-800">Rp. 300.000,00</p>
        </div>
        <!-- Product 2 -->
        <div class="flex items-start border-gray-300 pb-6 space-x-4">
          <input type="checkbox" id="product2" class="w-4 h-4 mt-5">
            <div class="w-[180px] h-[180px] bg-cover bg-center" style="background-image: url('https://image.uniqlo.com/UQ/ST3/id/imagesgoods/470182/item/idgoods_69_470182_3x4.jpg?width=648');"></div>
              <div class="flex-1 flex flex-col justify-between space-y-2">
                <p class="text-2xl font-semibold text-gray-800 capitalize">Denim Jacket</p>
                <div class="space-y-1">
              <p class="text-lg font-medium text-gray-500">Color: <span class="text-black">Sky Blue</span></p>
            <p class="text-lg font-medium text-gray-500">Size: <span class="text-black">XL</span></p>
          </div>
        <div class="flex justify-between items-center mt-4">
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
      </div>

    <!-- Order Summary -->
    <div class="flex justify-end mt-[-500px] mr-20">
      <div class="w-[376px] h-[434px] border-2 border-gray-300 p-6 space-y-6">
      <p class="text-xl font-semibold font-poppins text-center capitalize">Order Summary</p>
        <div class="flex justify-between text-lg font-medium font-poppins">
          <p>Price</p>
          <p>Rp. 150.000,00</p>
        </div>
      <div class="flex justify-between text-lg font-medium font-poppins">
        <p>Shipping</p>
          <p>-</p>
        </div>
      <div class="flex justify-between text-lg font-medium font-poppins">
        <p>Quantity</p>
          <p>1 Item</p>
        </div>
      <div class="flex justify-between text-lg font-medium font-poppins border-t pt-4">
        <p>Total</p>
          <p>Rp. 150.000,00</p>
        </div>
          <button class="w-full py-2 bg-blue-900 text-white text-lg font-semibold rounded-lg">Proceed To Checkout</button>
            <button class="w-full py-2 border border-blue-900 text-blue-900 text-lg font-semibold rounded-lg">Continue Shopping</button>
          </div>
        </div>

@endsection