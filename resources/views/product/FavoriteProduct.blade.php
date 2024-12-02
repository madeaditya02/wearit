@extends('layouts.user')

@section('title')
Products
@endsection
@section('content')



<!-- Main Content Section (Di kanan) -->
<div class="container ml-auto p-6 w-[75%] mt-20">
  <div class="grid grid-cols-8 gap-5">

    <!-- Product Image with Text, | Separator and Rating -->
    <div class="col-span-2 h-80 mb-3 relative">
      <img src="https://colorbox.co.id/cdn/shop/files/I-TSKKEY224L180_BLACK_4_5b6fec48-10a2-4425-98c8-f0f86b4f3896.jpg?v=1732775288&width=700" alt="Baju" class="object-cover h-full w-full"> 
      <div class="text-center mt-2">
      <div class="absolute top-2 right-2 bg-white rounded-full p-1 shadow">
        <!-- love -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-red-500">
        <path d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
        </svg>
    </div>
        <p class="font-semibold ">Sleeves Pink Blou</p>
        <div class="flex justify-center items-center">
          <!-- Text Separator | -->
          <span class="mx-2 ">IDR.250.000</span> 
    

        </div>
      </div>
    </div>

    <div class="col-span-2 h-80 mb-3 relative">
      <img src="https://colorbox.co.id/cdn/shop/files/I-COGKEY224L057_LT._PINK_5_7773e51d-cec5-43f2-b3fd-84b13659d301.jpg?v=1732774965&width=700" alt="Baju" class="object-cover h-full w-full"> 
      <div class="text-center mt-2">
      <div class="absolute top-2 right-2 bg-white rounded-full p-1 shadow">
        <!-- love -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-red-500">
        <path d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
        </svg>
     </div>
          <!-- Text Separator | -->
          <p class="font-semibold ">Sleeves Midi Dres</p>
          <span class="mx-2">IDR.300.000 </span> 
         
      </div>
    </div>
    <div class="col-span-2 h-80 mb-3 relative">
      <img src="https://colorbox.co.id/cdn/shop/files/I-BSWKEY224L184_LT._PINK_4_3369f2e4-b95a-4410-9b59-976d2943ebb3.jpg?v=1732775304&width=700" alt="Baju" class="object-cover h-80 w-full">
      <div class="text-center mt-2">
        <!-- love -->
        <div class="absolute top-2 right-2 bg-white rounded-full p-1 shadow">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-red-500">
        <path d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
        </svg>
        </div>
       
          <!-- Text Separator | -->
          <p class="font-semibold">Sleeve Blouse</p>
          <div class="flex justify-center items-center">
          <span class="mx-2">IDR.199.900</span> 
         
        </div>
      </div>
    </div>
    <div class="col-span-2 h-80 mb-3 relative">
      <img src="https://colorbox.co.id/cdn/shop/files/I-SWGKEY224L059_LT._PINK_4_e47f340f-728e-4f3d-8d82-89bd9f480ea5.jpg?v=1732774986&width=700" alt="Baju" class="object-cover h-80 w-full">
      <div class="text-center mt-2">
        <!-- love -->
         <div class="absolute top-2 right-2 bg-white rounded-full p-1 shadow">
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-red-500">
        <path d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
        </svg>
         </div>
        <p class="font-semibold">Neck Crop SweateR</p>
        <div class="flex justify-center items-center">
          <!-- Text Separator | -->
          <span class="mx-2">IDR.150.000</span> 
         
        </div>
      </div>
    </div>
  

 


@endsection
