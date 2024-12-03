@extends('layouts.user')

@section('title', 'New Address')

@section('content')

<!-- Elemen Blur -->
<div class="absolute top-0 left-0 w-full h-full bg-[#D1D1D8] bg-opacity-30 backdrop-blur-sm z-40"></div>

<!-- Elemen Pop Out -->
<div class="box-border absolute w-[916px] h-[683px] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-white border border-gray-300 rounded-[14px] shadow-lg z-50">
<h1 class="w-[692px] h-[60px] font-poppins font-semibold text-[40px] leading-[60px] absolute left-[320px] top-[25px] capitalize text-[#011F66]">
    New Address
</h1>
<div class="w-[692px] h-[2px] bg-[#D1D1D8] absolute left-[120px] top-[90px]"></div>

<div class="absolute flex flex-row justify-between items-center gap-[57px] w-[829px] h-[74px] left-1/2 top-[calc(50%-200px)] -translate-x-1/2">
  <!-- Frame 1275 (Fullname) -->
  <div class="flex flex-row justify-center items-center w-[386px] h-[74px] px-[139px] py-[21px] gap-2 bg-white border border-[#C1BBBB] rounded-[8px]">
    <span class="text-[21.88px] leading-[140%] text-[#2D3748] opacity-70">Fullname</span>
  </div>

  <!-- Frame 1274 (Phone Number) -->
  <div class="flex flex-row justify-center items-center w-[386px] h-[74px] px-[109px] py-[21px] gap-2 bg-white border border-[#C1BBBB] rounded-[8px]">
    <span class="text-[21.88px] leading-[140%] text-[#2D3748] opacity-70">Phone Number</span>
  </div>
</div>

<div class="absolute flex flex-row justify-between items-center gap-[57px] w-[829px] h-[74px] left-1/2 top-[calc(50%-100px)] -translate-x-1/2">
  <!-- Frame 1275 (Fullname) -->
  <div class="flex flex-row justify-center items-center w-[386px] h-[74px] px-[139px] py-[21px] gap-2 bg-white border border-[#C1BBBB] rounded-[8px]">
    <span class="text-[21.88px] leading-[140%] text-[#2D3748] opacity-70">Address</span>
  </div>

  <!-- Frame 1274 (Phone Number) -->
  <div class="flex flex-row justify-center items-center w-[386px] h-[74px] px-[109px] py-[21px] gap-2 bg-white border border-[#C1BBBB] rounded-[8px]">
    <span class="text-[21.88px] leading-[140%] text-[#2D3748] opacity-70">Province</span>
  </div>
</div>

<div class="absolute flex flex-row justify-between items-center gap-[57px] w-[829px] h-[74px] left-1/2 top-[calc(50%-0px)] -translate-x-1/2">
  <!-- Frame 1275 (Fullname) -->
  <div class="flex flex-row justify-center items-center w-[386px] h-[74px] px-[139px] py-[21px] gap-2 bg-white border border-[#C1BBBB] rounded-[8px] relative">
    <span class="text-[21.88px] leading-[140%] text-[#2D3748] opacity-70">City</span>

    <!-- Panah dropdown untuk Address -->
    <button id="address-toggle" class="absolute right-4">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-[#2D3748]">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
      </svg>
    </button>
    <!-- Dropdown menu (hidden by default) -->
    <div id="address-dropdown" class="absolute top-full left-0 hidden bg-white border border-[#C1BBBB] rounded-md w-full mt-2">
      <!-- Isi dropdown dapat disesuaikan -->
      <ul class="p-2">
        <li class="px-4 py-2 hover:bg-gray-100">Option 1</li>
        <li class="px-4 py-2 hover:bg-gray-100">Option 2</li>
        <li class="px-4 py-2 hover:bg-gray-100">Option 3</li>
      </ul>
    </div>
  </div>

  <!-- Frame 1274 (Phone Number) -->
  <div class="flex flex-row justify-center items-center w-[386px] h-[74px] px-[109px] py-[21px] gap-2 bg-white border border-[#C1BBBB] rounded-[8px] relative">
    <span class="text-[21.88px] leading-[140%] text-[#2D3748] opacity-70">District</span>

    <!-- Panah dropdown untuk Province -->
    <button id="province-toggle" class="absolute right-4">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-[#2D3748]">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
      </svg>
    </button>
    <!-- Dropdown menu (hidden by default) -->
    <div id="province-dropdown" class="absolute top-full left-0 hidden bg-white border border-[#C1BBBB] rounded-md w-full mt-2">
      <!-- Isi dropdown dapat disesuaikan -->
      <ul class="p-2">
        <li class="px-4 py-2 hover:bg-gray-100">Option 1</li>
        <li class="px-4 py-2 hover:bg-gray-100">Option 2</li>
        <li class="px-4 py-2 hover:bg-gray-100">Option 3</li>
      </ul>
    </div>
  </div>
</div>

<div class="absolute flex flex-row justify-between items-center gap-[57px] w-[829px] h-[74px] left-1/2 bottom-[calc(50%-180px)] -translate-x-1/2">
  <!-- Frame 1275 (Fullname) -->
  <div class="flex flex-row justify-center items-center w-[386px] h-[74px] px-[139px] py-[21px] gap-2 bg-white border border-[#C1BBBB] rounded-[8px]">
  <span class="text-[21.88px] leading-[140%] text-[#2D3748] opacity-70">Postal</span>
  <span class="text-[21.88px] leading-[140%] text-[#2D3748] opacity-70">Code</span>
</div>


  <!-- Frame 1274 (Phone Number) -->
  <div class="flex flex-row justify-center items-center w-[386px] h-[74px] px-[109px] py-[21px] gap-2 bg-white border border-[#C1BBBB] rounded-[8px]">
    <span class="text-[21.88px] leading-[140%] text-[#2D3748] opacity-70">Add Detail</span>
  </div>
</div>

<div class="absolute flex flex-row justify-center items-center px-[123px] py-[16px] gap-2 w-[343px] h-[64px] left-[300px] top-[calc(50%-64px/2+250px)] -translate-x-[7.5px] bg-[#002E89] rounded-[8px]">
  <span class="text-[23px] font-semibold leading-[140%] text-white">Confirm</span>
</div>


</div>


<!-- Konten halaman checkout -->
<div class="absolute w-[213px] h-[60px] left-[78px] top-[140px] font-poppins font-semibold text-[40px] leading-[60px] capitalize text-[#011F66] z-30">
    Check Out 
</div>

<!-- Alamat pertama, kedua, dll. -->
<!-- Pastikan elemen-elemen lain memiliki z-index lebih rendah dari elemen blur jika tidak ingin tertutup -->
<div class="absolute w-[464px] h-[24px] left-[78px] top-[220px] flex items-center space-x-4 z-30">
    <span class="font-poppins font-medium text-[25px] leading-[24px] text-[#383838]">
        Address
    </span>
    <span class="font-poppins font-medium text-[25px] leading-[24px] text-[#A2A3B1]"> > </span>
    <span class="font-poppins font-medium text-[25px] leading-[24px] text-[#A2A3B1]">
        Shipping
    </span>
    <span class="font-poppins font-medium text-[25px] leading-[24px] text-[#A2A3B1]"> > </span>
    <span class="font-poppins font-medium text-[25px] leading-[24px] text-[#A2A3B1]">
        Payment
    </span>
</div>

<!-- Alamat pertama -->
<div class="absolute w-[778px] h-[118px] left-[78px] top-[320px] flex items-start z-30">
    <div class="relative">
        <input type="checkbox" class="appearance-none w-[20.32px] h-[20.32px] border-[1.27px] border-[#002E89] rounded-full checked:bg-[#002E89] checked:border-[#002E89] cursor-pointer" />
    </div>

    <div class="ml-[24px] flex flex-col gap-[15px]">
        <span class="font-poppins font-semibold text-[24px] leading-[20px] text-[#383838] capitalize">Andi Sutedjo</span>
        <span class="font-poppins font-medium text-[17px] leading-[50px] text-[#383838] capitalize">Jalan Giri Kencono 29, Badung, 80361</span>
        <span class="font-poppins font-medium text-[17px] leading-[26px] text-[#383838] capitalize">Contact - 0815555444</span>
    </div>

    <!-- Kanan: Edit | Remove -->
    <div class="flex items-center gap-[16px] text-[16px] font-poppins font-medium text-[#383838] absolute left-[720px] top-[40px]">
        <span class="cursor-pointer hover:text-[#002E89]">Edit</span>
        <span class="text-[#A2A3B1]">|</span>
        <span class="cursor-pointer text-[#E14B4B] hover:text-[#E14B4B]">Remove</span>
    </div>
</div>

<!-- Alamat kedua -->
<div class="absolute w-[778px] h-[118px] left-[78px] top-[500px] flex items-start z-30">
    <div class="relative">
        <input type="checkbox" class="appearance-none w-[20.32px] h-[20.32px] border-[1.27px] border-[#002E89] rounded-full checked:bg-[#002E89] checked:border-[#002E89] cursor-pointer" />
    </div>

    <div class="ml-[24px] flex flex-col gap-[15px]">
        <span class="font-poppins font-semibold text-[24px] leading-[20px] text-[#383838] capitalize">Andi Sutedjo</span>
        <span class="font-poppins font-medium text-[17px] leading-[50px] text-[#383838] capitalize">Jalan Giri Kencono 29, Badung, 80361</span>
        <span class="font-poppins font-medium text-[17px] leading-[26px] text-[#383838] capitalize">Contact - 0815555444</span>
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