@extends('layouts.user')

@section('title', 'Address')

@section('content')
<div class="flex flex-col space-y-2 p-6 ml-12">
    <h1 class="text-4xl font-semibold font-poppins text-primary-darker leading-tight">Checkout</h1>
    <div class="flex items-center space-x-4 text-xl font-poppins font-medium mt-8">
        <span>Address</span>
        <span class="text-gray-400">&gt;</span>
        <span class="text-gray-400">Shipping</span>
        <span class="text-gray-400">&gt;</span>
        <span class="text-gray-400">Payment</span>
    </div>
</div>

<div class="flex justify-between mt-8 mb-8 ml-20 mr-20 gap-6">
    <!-- Address Section -->
    <div class="w-[65%] space-y-6">
        <!-- alamat pertama -->
        <div class="flex items-start gap-6">
            <input type="checkbox" class="w-5 h-5 border rounded-full cursor-pointer border-blue-800 checked:bg-blue-800 checked:border-blue-800">
            <div class="flex flex-col gap-4">
                <span class="font-poppins text-2xl capitalize">Andi Sutedjo</span>
                <span class="font-poppins text-lg capitalize">Jalan Giri Kencono 29, Badung, 80361</span>
                <span class="font-poppins text-lg capitalize">Contact - 0815555444</span>
            </div>
            <div class="ml-auto flex gap-4 text-lg font-poppins">
                <span class="cursor-pointer hover:text-blue-800">Edit</span>
                <span class="text-gray-400">|</span>
                <span class="cursor-pointer text-red-500 hover:text-red-500">Remove</span>
            </div>
        </div>
        <!-- alamat kedua -->
        <div class="flex items-start gap-6">
            <input type="checkbox" class="w-5 h-5 border rounded-full cursor-pointer border-blue-800 checked:bg-blue-800 checked:border-blue-800">
            <div class="flex flex-col gap-4">
                <span class="font-poppins text-2xl capitalize">Bela Tobing</span>
                <span class="font-poppins text-lg capitalize">Jalan Raya Unud, Badung, 80361</span>
                <span class="font-poppins text-lg capitalize">Contact - 0815555444</span>
            </div>
            <div class="ml-auto flex gap-4 text-lg font-poppins">
                <span class="cursor-pointer hover:text-blue-800">Edit</span>
                <span class="text-gray-400">|</span>
                <span class="cursor-pointer text-red-500 hover:text-red-500">Remove</span>
            </div>
        </div>
        <!-- alamat ketiga -->
        <div class="flex items-start gap-6">
            <input type="checkbox" class="w-5 h-5 border rounded-full cursor-pointer border-blue-800 checked:bg-blue-800 checked:border-blue-800">
            <div class="flex flex-col gap-4">
                <span class="font-poppins text-2xl capitalize">Ananda Cahya</span>
                <span class="font-poppins text-lg capitalize">Jalan Ngurah Rai, Badung, 80361</span>
                <span class="font-poppins text-lg capitalize">Contact - 0815555444</span>
            </div>
            <div class="ml-auto flex gap-4 text-lg font-poppins">
                <span class="cursor-pointer hover:text-blue-800">Edit</span>
                <span class="text-gray-400">|</span>
                <span class="cursor-pointer text-red-500 hover:text-red-500">Remove</span>
            </div>
        </div>
        <div class="w-full max-w-[900px] h-px bg-gray-300"></div>

        <!-- icon + add new address -->
        <div class="w-[400px] h-[200px] flex justify-start gap-3">
            <!-- Plus Icon Button -->
            <button class="w-8 h-8 flex items-center justify-center bg-blue-800 text-white text-3xl font-bold rounded-full hover:bg-blue-700 focus:outline-none">
                <span>+</span>
            </button>
            <!-- Text 'Add New Address' -->
            <span class="text-lg text-blue-800">Add New Address</span>
        </div>

        <!-- Back to Cart -->
        <div class="flex justify-center">
            <button class="font-poppins font-semibold text-2xl text-blue-900 capitalize">Back To Cart</button>
        </div>
    </div>

    <!-- Order Summary Section -->
    <div class="w-[376px] h-[370px] border-2 border-gray-300 p-6 space-y-6">
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
        <button class="w-full py-2 bg-blue-900 text-white text-lg font-semibold rounded-lg">Continue To Shipping</button>
    </div>
</div>

@endsection