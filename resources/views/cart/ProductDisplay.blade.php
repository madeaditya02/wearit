@extends('layouts.user')

@section('title', 'Cart')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frame 1258</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="relative">
    <div class="absolute flex flex-col items-end w-[90px] h-[84px] top-[100px] left-[78px]">
        <!-- Cart -->
        <div class="w-[90px] h-[60px] font-semibold text-[40px] leading-[60px] capitalize text-[#011F66]">
            Cart
        </div>
        <!-- 2 ITEMS -->
        <div class="w-[90px] h-[24px] font-medium text-[20px] leading-[24px] text-right text-[#A2A3B1]">
            2 ITEMS
        </div>
    </div>
</body>
</html>


<!-- Group 1258 -->
<div class="absolute w-[893px] h-[538px] left-[120px] top-[250px] border border-gray-300 border-0">

  <!-- Frame untuk konten -->
  <div class="flex flex-col items-start p-0 gap-4 w-full h-full relative">
    
    <!-- Produk 1 -->
    <div class="flex items-start p-0 gap-4 w-full h-[200px] border-b border-gray-300 pb-8">
      
    <!-- Checkbox -->
      <div class="flex items-center">
        <input type="checkbox" id="product1" class="w-4 h-4 mt-20">
          </div>

      <!-- Gambar Produk -->
      <div class="w-[180px] h-[180px] bg-cover bg-center" style="background-image: url('https://colorbox.co.id/cdn/shop/files/I-BSWFCR224L165_LT._PINK_2_77c94d75-a0e1-4d9d-bca2-f53f7d4cf404.jpg?v=1732775256&width=600');"></div>

      <!-- Informasi Produk -->
      <div class="flex flex-col justify-between h-full flex-1">
        
        <!-- Nama Produk -->
        <p class="font-poppins font-semibold text-[25px] leading-[38px] text-[#383838] capitalize">
          Oversize Tshirt Christy Edition
        </p>

        <!-- Informasi Color dan Size -->
        <div class="flex flex-col gap-2">
          <!-- Warna -->
          <div class="flex items-center">
            <p class="font-poppins font-medium text-[20px] text-[#A2A3B1]">Color:</p>
            <span class="ml-2 font-poppins text-[20px] text-black">Gray</span>
          </div>
          <!-- Ukuran -->
          <div class="flex items-center">
            <p class="font-poppins font-medium text-[20px] text-[#A2A3B1]">Size:</p>
            <span class="ml-2 font-poppins text-[20px] text-black">XL</span>
          </div>
        </div>

        <!-- Qty dan Remove -->
        <div class="flex items-center justify-between w-full">
          <!-- Pilihan Qty -->
          <div class="flex items-center border border-[#A2A3B1] rounded-[4px] w-[160px] h-[52px] mt-4">
            <!-- Minus -->
            <button class="w-[20px] h-[20px] flex items-center justify-center text-[#17183B] ml-4">
              -
            </button>
            <!-- Jumlah -->
            <span class="mx-auto font-proxima-nova font-semibold text-[20px] text-[#17183B]">
              1
            </span>
            <!-- Plus -->
            <button class="w-[20px] h-[20px] flex items-center justify-center text-[#17183B] mr-4">
              +
            </button>
          </div>

          <!-- Tombol Remove -->
          <button class="font-poppins font-medium text-[#E70004] absolute ml-44 mt-4">
            Remove
          </button>
        </div>
      </div>

      <!-- Harga -->
      <p class="font-poppins font-semibold text-[20px] leading-[30px] capitalize text-[#383838] mt-20">
        Rp. 300.000,00
      </p>
    </div>

<!-- Produk 2 -->
<div class="flex items-start p-0 gap-4 w-full h-[255px]">
  
  <!-- Checkbox -->
  <div class="flex items-center">
    <input type="checkbox" id="product1" class="w-4 h-4 mt-20">
  </div>

  <!-- Bungkus semua elemen lainnya -->
  <div class="flex items-start p-0 gap-4 w-full h-full"> <!-- Tambahkan margin kiri di sini -->

    <!-- Gambar Produk -->
    <div class="w-[180px] h-[180px] bg-cover bg-center" style="background-image: url('https://image.uniqlo.com/UQ/ST3/id/imagesgoods/470182/item/idgoods_69_470182_3x4.jpg?width=648');"></div>

    <!-- Informasi Produk -->
    <div class="flex flex-col justify-between h-full flex-1">
      
      <!-- Nama Produk -->
      <p class="font-poppins font-semibold text-[25px] leading-[38px] text-[#383838] capitalize">
        Denim Jacket
      </p>

      <!-- Informasi Color -->
      <div class="flex items-center">
        <p class="font-poppins font-medium text-[20px] text-[#A2A3B1] -mt-24">Color:</p>
        <span class="ml-2 font-poppins text-[20px] text-black -mt-24">Sky Blue</span>
      </div>
      
      <!-- Informasi Size -->
      <div class="flex items-center">
        <p class="font-poppins font-medium text-[20px] text-[#A2A3B1] -mt-40">Size:</p>
        <span class="ml-2 font-poppins text-[20px] text-black -mt-40">XL</span>
      </div>

      <!-- Qty dan Remove -->
      <div class="flex items-center justify-between w-full">
        <!-- Pilihan Qty -->
        <div class="flex items-center border border-[#A2A3B1] rounded-[4px] w-[160px] h-[52px] -mt-48">
          <!-- Minus -->
          <button class="w-[20px] h-[20px] flex items-center justify-center text-[#17183B] ml-5">
            -
          </button>
          <!-- Jumlah -->
          <span class="mx-auto font-proxima-nova font-semibold text-[20px] text-[#17183B]">
            1
          </span>
          <!-- Plus -->
          <button class="w-[20px] h-[20px] flex items-center justify-center text-[#17183B] mr-5">
            +
          </button>
        </div>

        <!-- Tombol Remove -->
        <button class="font-poppins font-medium text-[#E70004] absolute ml-44 -mt-48">
          Remove
        </button>
      </div>
    </div>

    <!-- Harga -->
    <p class="font-poppins font-semibold text-[20px] leading-[30px] capitalize text-[#383838] mt-20">
      Rp. 150.000,00
    </p>
  </div>
</div>
      </p>
    </div>

  </div>
</div>

<!-- Frame 427318186 -->
<div class="absolute flex flex-col items-center w-[376px] h-[434px] left-[1200px] top-[260px] gap-[34px]">

  <!-- Group 1268 -->
  <div class="relative w-[376px] h-[351px]">

    <!-- Rectangle 75 -->
    <div class="absolute w-full h-[351px] top-0 left-0 border-2 border-[#D9D9D9] box-border"></div>

    <!-- Order Summary -->
    <p class="absolute w-[215px] h-[38px] top-[31px] left-[81px] text-[25px] leading-[38px] font-semibold capitalize text-[#383838]">
      Order Summary
    </p>

    <!-- Group 1260 -->
    <div class="absolute w-[322px] h-[29px] top-[87px] left-[35px]">
      <!-- Price -->
      <p class="absolute text-[17px] leading-[26px] font-medium capitalize text-[#383838] top-[3px] left-0">
        Price
      </p>
      <p class="absolute text-[17px] leading-[26px] font-medium capitalize text-[#383838] top-0 right-0">
        Rp. 150.000,00
      </p>
    </div>

    <!-- Frame 1268 -->
    <div class="absolute flex flex-row justify-between items-center w-[322px] h-[26px] top-[129px] left-[35px] gap-[124px]">
      <p class="text-[17px] leading-[26px] font-medium capitalize text-[#383838]">
        Shipping
      </p>
      <p class="text-[17px] leading-[26px] font-medium capitalize text-[#383838] text-right">
        -
      </p>
    </div>

    <!-- Frame 1261 -->
    <div class="absolute flex flex-row justify-between items-center w-[322px] h-[26px] top-[189px] left-[35px] gap-[196px]">
      <p class="text-[17px] leading-[26px] font-medium capitalize text-[#383838]">
        Quantity
      </p>
      <p class="text-[17px] leading-[26px] font-medium capitalize text-[#383838]">
        1 Item
      </p>
    </div>

    <!-- Group 1262 -->
    <div class="absolute w-[322px] h-[27px] top-[226px] left-[35px]">
      <!-- Total -->
      <p class="absolute text-[17px] leading-[26px] font-medium capitalize text-[#383838] top-[1px] left-0">
        Total
      </p>
      <p class="absolute text-[17px] leading-[26px] font-medium capitalize text-[#383838] top-0 right-0">
        Rp. 150.000,00
      </p>
    </div>

    <!-- Rectangle 22 -->
    <div class="absolute w-[300px] h-[2px] top-[170px] left-[38px] bg-[#D1D1D8]"></div>

    <!-- Group 1267 -->
    <div class="absolute flex flex-col items-center gap-[20px] top-[265px] left-[63px]">
      
      <!-- Proceed To Checkout -->
      <div class="relative w-[251px] h-[49px] bg-[#002E89] rounded-[7px] mt-4">
        <p class="absolute text-[18px] leading-[27px] font-semibold capitalize text-white left-[30px] top-[11px]">
          Proceed To Checkout
        </p>
      </div>

      <!-- Continue Shopping -->
      <div class="flex justify-center items-center w-[251px] h-[49px] border-[1.5px] border-[#002E89] rounded-[7px] mt-4">
        <p class="text-[18px] leading-[27px] font-semibold capitalize text-[#002E89]">
          Continue Shopping
        </p>
      </div>
    </div>
  </div>
</div>

@endsection