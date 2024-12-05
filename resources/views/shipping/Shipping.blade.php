@extends('layouts.user')

@section('title', 'Shipping')

@section('content')
<div class="flex flex-col space-y-2 p-6 ml-12">
    <h1 class="text-4xl font-semibold font-poppins text-primary-darker leading-tight">Checkout</h1>
    <div class="flex items-center space-x-4 text-xl font-poppins font-medium mt-8">
        <span>Address</span>
        <span>&gt;</span>
        <span>Shipping</span>
        <span class="text-gray-400">&gt;</span>
        <span class="text-gray-400">Payment</span>
    </div>
</div>

<div class="flex justify-between">
    <div class="flex-1">
        <!-- Tabel Konten -->
        <div class="w-[1100px] h-[178px] mt-[40px] ml-[70px] border border-gray-300 rounded-[10px] bg-white">
            <!-- Content -->
            <div class="ml-[30px] space-y-6">
                <!-- Name -->
                <div class="flex justify-between items-center mt-8 text-[20.46px]">
                    <span class="text-gray-400 w-20">Name</span>
                    <span class="text-gray-800 ml-8">Andi Sutedjo</span>
                    <button class="text-blue-500 text-[16px] font-medium ml-auto mr-10 hover:text-blue-700">Edit</button>
                </div>
                <div class="w-[1030px] mt-[80px] border-[1.46154px] border-gray-200 rotate-[0.14deg]"></div>
                <!-- Address -->
                <div class="flex justify-between items-center text-[20.46px] leading-[23px]">
                    <span class="text-gray-400 w-20">Ship to</span>
                    <span class="text-gray-800 w-30 ml-8">Jalan Giri Kencono 29, Jimbaran, KEC. Kuta Selatan, KAB. Badung, Bali 80361 and other</span>
                    <button class="text-blue-500 text-[16px] font-medium ml-20 mr-10 hover:text-blue-700">Edit</button>
                </div>
            </div>
        </div>
        <!-- Shipping method -->
        <div class="ml-14 mt-10 px-4">
            <div class="font-poppins text-xl text-gray-800 mb-6">Shipping Method</div>

            <div class="w-full max-w-[650px] h-[80px] border border-gray-300 rounded-lg bg-white mb-4 flex items-center px-4">
                <input type="radio" name="shipping" class="w-[20.32px] h-[20.32px] border-2 border-blue-800 rounded-full checked:bg-blue-800 checked:border-blue-800 mr-4"/>
                <div class="text-lg text-gray-800 flex-1">JNE</div>
                <span class="font-medium text-lg text-blue-800 cursor-pointer hover:text-blue-900 active:text-blue-700">Free</span>
            </div>

            <div class="w-full max-w-[650px] h-[80px] border border-gray-300 rounded-lg bg-white mb-4 flex items-center px-4">
                <input type="radio" name="shipping" class="w-[20.32px] h-[20.32px] border-2 border-blue-800 rounded-full checked:bg-blue-800 checked:border-blue-800 mr-4"/>
                <div class="text-lg text-gray-800 flex-1">JNT</div>
                <span class="font-medium text-lg text-blue-800 cursor-pointer hover:text-blue-900 active:text-blue-700">Free</span>
            </div>

            <div class="w-full max-w-[650px] h-[80px] border border-gray-300 rounded-lg bg-white mb-4 flex items-center px-4">
                <input type="radio" name="shipping" class="w-[20.32px] h-[20.32px] border-2 border-blue-800 rounded-full checked:bg-blue-800 checked:border-blue-800 mr-4"/>
                <div class="text-lg text-gray-800 flex-1">Standard Shipping</div>
                <span class="font-medium text-lg text-blue-800 cursor-pointer hover:text-blue-900 active:text-blue-700">Free</span>
            </div>
        </div>
    </div>
    <!-- Order Summary -->
    <div class="w-[376px] h-[370px] border-2 border-gray-300 p-6 space-y-6 mr-24">
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
        <button class="w-full py-2 bg-blue-900 text-white text-lg font-semibold rounded-lg">Continue To Payment</button>
    </div>
</div>

<!-- Back to Address Button -->
<button class="flex justify-center items-center fixed bottom-10 left-1/2 transform -translate-x-1/2 w-[200px] h-[33px] text-blue-800 text-[22px] font-poppins font-semibold capitalize">
    Back To Address
</button>

@endsection