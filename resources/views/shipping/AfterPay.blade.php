@extends('layouts.user')

@section('title', 'After Payment')

@section('content')
<!-- Elemen Blur -->
<div class="fixed inset-0 bg-gray-300 bg-opacity-10 backdrop-blur-sm z-40"></div>
    <!-- Konten Pop Up -->
        <div class="flex flex-col items-center p-14 gap-8 fixed w-[585px] h-[690px] left-1/2 top-[150px] transform -translate-x-1/2 bg-white border border-gray-300 shadow-lg rounded-lg z-50">
            <!-- Logo dan Title -->
                <div class="flex flex-col items-center">
                    <div class="mt-10 w-28 h-50">
                    <img src="/img/logo.png" alt="Logo" class="w-full h-auto object-contain">
                </div>
            <div class="font-poppins font-semibold text-[40px] text-center ">WearIt
        </div>
    </div>
<div class="w-3/4 h-[2px] mx-auto bg-gray-300"></div>
    <div class="flex flex-col items-center gap-4">
        <div class="font-poppins font-semibold text-[40px] text-center text-blue-900">Payment Complete
    </div>
        <div class="font-poppins font-semibold text-[30px] text-center text-gray-800">Thank You for Shopping!
    </div>
</div>
    <div>
        <button class="flex items-center justify-center mt-10 px-6 py-2.5 gap-2 bg-blue-900 rounded-md text-white font-poppins font-semibold text-lg leading-none">Back</button>
    </div>
</div>

@endsection