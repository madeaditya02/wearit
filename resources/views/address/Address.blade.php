@extends('layouts.user')

@section('title', 'Address')

@section('content')

<div class="absolute w-[213px] h-[60px] left-[78px] top-[140px] font-poppins font-semibold text-[40px] leading-[60px] capitalize text-[#011F66]">
    Check Out
</div>

<div class="absolute w-[464px] h-[24px] left-[78px] top-[220px] flex items-center space-x-4">
    <!-- Address -->
    <span class="font-poppins font-medium text-[25px] leading-[24px] text-[#383838]">
        Address
    </span>

    <!-- > -->
    <span class="font-poppins font-medium text-[25px] leading-[24px] text-[#A2A3B1]">
        >
    </span>

    <!-- Shipping -->
    <span class="font-poppins font-medium text-[25px] leading-[24px] text-[#A2A3B1]">
        Shipping
    </span>

    <!-- > -->
    <span class="font-poppins font-medium text-[25px] leading-[24px] text-[#A2A3B1]">
        >
    </span>

    <!-- Payment -->
    <span class="font-poppins font-medium text-[25px] leading-[24px] text-[#A2A3B1]">
        Payment
    </span>
</div>

<!-- alamat pertama -->
<!-- Checkbox -->
<div class="absolute w-[778px] h-[118px] left-[78px] top-[320px] flex items-start">
    <div class="relative">
        <input 
        type="checkbox" 
        class="appearance-none w-[20.32px] h-[20.32px] border-[1.27px] border-[#002E89] rounded-full checked:bg-[#002E89] checked:border-[#002E89] cursor-pointer"
    />
</div>

<div class="ml-[24px] flex flex-col gap-[15px]">
    <!-- Andi Sutedjo -->
    <span class="font-poppins font-semibold text-[24px] leading-[20px] text-[#383838] capitalize">
    Andi Sutedjo
    </span>
    <!-- Jalan Giri Kencono 29, Badung, 80361 -->
    <span class="font-poppins font-medium text-[17px] leading-[50px] text-[#383838] capitalize">
    Jalan Giri Kencono 29, Badung, 80361
    </span>
    <!-- Contact - 0815555444 -->
    <span class="font-poppins font-medium text-[17px] leading-[26px] text-[#383838] capitalize">
    Contact - 0815555444
    </span>
</div>

<!-- Kanan: Edit | Remove -->
<div class="flex items-center gap-[16px] text-[16px] font-poppins font-medium text-[#383838] absolute left-[720px] top-[40px]">
    <span class="cursor-pointer hover:text-[#002E89]">Edit</span>
    <span class="text-[#A2A3B1]">|</span>
    <span class="cursor-pointer text-[#E14B4B] hover:text-[#E14B4B]">Remove</span>
</div>
</div>


<!-- alamat kedua -->
<!-- Checkbox -->
<div class="absolute w-[778px] h-[118px] left-[78px] top-[500px] flex items-start">
    <div class="relative">
    <input 
        type="checkbox" 
        class="appearance-none w-[20.32px] h-[20.32px] border-[1.27px] border-[#002E89] rounded-full checked:bg-[#002E89] checked:border-[#002E89] cursor-pointer"
    />
</div>

<div class="ml-[24px] flex flex-col gap-[15px]">
    <!-- Andi Sutedjo -->
    <span class="font-poppins font-semibold text-[24px] leading-[20px] text-[#383838] capitalize">
    Andi Sutedjo
    </span>
    <!-- Jalan Giri Kencono 29, Badung, 80361 -->
    <span class="font-poppins font-medium text-[17px] leading-[50px] text-[#383838] capitalize">
    Jalan Giri Kencono 29, Badung, 80361
    </span>
    <!-- Contact - 0815555444 -->
    <span class="font-poppins font-medium text-[17px] leading-[26px] text-[#383838] capitalize">
    Contact - 0815555444
    </span>
</div>

<!-- Kanan: Edit | Remove -->
<div class="flex items-center gap-[16px] text-[16px] font-poppins font-medium text-[#383838] absolute left-[720px] top-[40px]">
    <span class="cursor-pointer hover:text-[#002E89]">Edit</span>
    <span class="text-[#A2A3B1]">|</span>
    <span class="cursor-pointer text-[#E14B4B] hover:text-[#E14B4B]">Remove</span>
</div>
</div>

<!-- Garis -->
    <div class="absolute w-[820px] h-[3px] left-[75px] top-[680px] w-[900px] bg-[#D1D1D8]"></div>

<!-- icon + add new address -->
<div class="absolute w-[200px] h-[24px] left-[88px] top-[720px] flex items-center justify-start gap-[8px]">
<!-- Plus Icon -->
    <div class="w-[24px] h-[24px] relative">
        <button class="absolute top-[20.83%] left-[50%] transform -translate-x-1/2 w-[2px] h-[60%] bg-[#002E89]"></button>
        <button class="absolute top-[50%] left-[50%] transform -translate-x-1/2 -translate-y-1/2 w-[60%] h-[2px] bg-[#002E89]"></button>
    </div>
<!-- Text 'Add New Address' -->
    <span class="font-[Proxima Nova] text-[16px] leading-[20px] tracking-[0.1px] text-[#002E89]">
        Add New Address
    </span>
    </div>

<!-- tulisan back to cart -->
<div class="absolute w-[148px] h-[33px] left-1/2 -translate-x-[74px] top-[860px] font-poppins font-semibold text-[22px] leading-[33px] text-[#011F66] capitalize">
    Back To Cart
</div>

<!-- order summary nya -->
<div class="absolute w-[376px] h-[434px] left-[1019px] top-[346px] flex flex-col items-center p-0 gap-[34px]">
<!-- frame nya -->
    <div class="w-[376px] h-[351px] relative">
    <!-- Rectangle 75 -->
    <div class="absolute w-[376px] h-[351px] left-[200px] bottom-[40px] border-2 border-[#D9D9D9]"></div>

    <!-- Order Summary -->
    <div class="absolute w-[215px] h-[38px] left-[280px] bottom-[332px] font-poppins font-semibold text-[25px] leading-[38px] text-[#383838]">
    Order Summary
    </div>

<!-- detail nya -->
<div class="absolute w-[322px] left-[224px] top-[40px]">
        <!-- Price -->
        <div class="flex justify-between items-center w-full h-[26px] text-[#383838]">
        <div class="font-poppins font-medium text-[17px] leading-[26px]">
        Price
        </div>
    <div class="font-poppins font-medium text-[17px] leading-[26px]">
        Rp. 150.000,00
    </div>
    </div>

    <!-- Shipping -->
    <div class="flex justify-between items-center w-full h-[26px] mt-[20px] text-[#383838]">
    <div class="font-poppins font-medium text-[17px] leading-[26px]">
        Shipping
    </div>
    <div class="font-poppins font-medium text-[17px] leading-[26px] text-right">
        -
    </div>
    </div>

<!-- garis di detail nya -->
<div class="absolute w-[320px] h-[2px] left-[2px] top-[96px] bg-[#D1D1D8]"></div>

    <!-- Quantity -->
    <div class="flex justify-between items-center w-full h-[26px] mt-[42px] text-[#383838]">
    <div class="font-poppins font-medium text-[17px] leading-[26px]">
        Quantity
    </div>
    <div class="font-poppins font-medium text-[17px] leading-[26px]">
        1 Item
    </div>
    </div>

    <!-- Total -->
    <div class="flex justify-between items-center w-full h-[26px] mt-[20px] text-[#383838]">
    <div class="font-poppins font-medium text-[17px] leading-[26px]">
        Total
    </div>
    <div class="font-poppins font-medium text-[17px] leading-[26px]">
        Rp. 150.000,00
    </div>
    </div>
</div>

<!-- Tulisan kotak biru -->
<div class="absolute w-[251px] h-[49px] left-[260px] top-[240px] flex justify-center items-center bg-[#002E89] rounded-[7px] p-[11px_27px]">
    <div class="w-[196px] h-[27px] font-poppins font-semibold text-[18px] leading-[27px] text-white capitalize">
        Continue To Shipping
    </div>
</div>

@endsection