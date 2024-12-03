@extends('layouts.user')

@section('title')
Products
@endsection
@section('content')
<!-- Bagain kiri -->
<div class="md:w-[28%] w-full flex-row">
            <div class="flex w-full h-20 border border-primary rounded-md items-center px-4">
                <img src="/img/user.png" alt="WearIt" class="w-10 h-10">
                <div class="ml-2">
                    <div>
                        <h1 class="font-semibold md:text-base text-gray-700 pl-3">Luis Suarez</h1>
                    </div>
                    <div>
                        <h1 class="font-semibold text-xs md:text-base text-gray-700 pl-3">luissuares@gmail.com</h1>
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a class="flex items-center gap-5 border border-b-0 px-4 md:py-4 py-3 border-primary rounded-t-md bg-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                    <h1 class="font-semibold text-white">Profile</h1>
                </a>
                <a class="group flex items-center gap-5 border border-b-0 px-4 md:py-4 py-3 border-primary  hover:bg-primary hover:border-primary hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="group-hover:text-white size-8 text-primary">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                    </svg>
                    <h1 class="font-semibold text-primary group-hover:text-white">Order History</h1>  
                </a>
                <a class="group flex items-center gap-5 border border-b-0 px-4 md:py-4 py-3 border-primary  hover:bg-primary hover:border-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="group-hover:text-white size-8 text-primary">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                    </svg>
                    <h1 class="font-semibold text-primary group-hover:text-white">Favourite</h1>    
                </a>
                <a class="group flex items-center gap-5 border border-b-0 px-4 md:py-4 py-3 border-primary  hover:bg-primary hover:border-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="group-hover:text-white size-8 text-primary">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    <h1 class="font-semibold text-primary group-hover:text-white">Account Setting</h1>    
                </a>
                <a class="group flex items-center gap-5 border px-4 md:py-4 py-3 border-primary rounded-b-md  hover:bg-primary hover:border-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="group-hover:text-white size-8 text-primary">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                    </svg>
                    <h1 class="font-semibold text-primary group-hover:text-white">Log Out</h1> 
                </a>
            </div>

<!-- Main Content Section (Di kanan) -->
<div class="container mx-auto p-6">
  <div class="grid grid-cols-8 gap-5 ">

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
