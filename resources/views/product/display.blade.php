@extends('layouts.user')

@section('title')
Products
@endsection
@section('content')
<div class="container mx-auto p-6">
  <!-- Judul Produk -->
  <h1 class="text-center text-2xl mb-6">PRODUCTS</h1>

  <!-- Search Section -->
  <div class="flex items-center justify-center mb-6">
    <input 
      type="text" 
      placeholder="Search" 
      class="p-2 border-2 border-gray-300 rounded-l-lg"
    />
    <select
      class="p-2 bg-blue-500 text-white rounded-r-lg hover:bg-blue-600 border-2 border-blue-500"
    >
      <option>New</option>
      <option>Best Seller</option>
    </select>
  </div>

  <div class="flex h-auto  flex-col md:flex-row w-2p">
  <!-- Filter Section (Di kiri) -->
  <div class="container w-[20%]  mb-6 h-auto">
    <h2 class="text-lg  mb-6">Filters</h2>
    <!-- Size Filter -->
    <div class="mb-6">
      <h3 class=" mb-2">Size</h3>
      <div class="flex space-x-2">
        <div class="h-8 w-8 border-2 text-center">XS</div>
        <div class="h-8 w-8 border-2 text-center">S</div>
        <div class="h-8 w-8 border-2 text-center">M</div>
        <div class="h-8 w-8 border-2 text-center">L</div>
        <div class="h-8 w-8 border-2 text-center">XL</div>
        <div class="h-8 w-8 border-2 text-center">2X</div>
      </div>
    </div>

    <!-- Category Filter -->
    <div class="py-0">
      <h3 class="flex items-center justify-between ">
        <span>Category</span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>
      </h3>
      <hr class="border-t-2 border-dashed border-gray-500 my-2">
    </div>
<!-- colors -->
<div class="py-0">
      <h3 class="flex items-center justify-between">
        <span>Colors</span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 8.25l7.5 7.5 7.5-7.5" />
</svg>

      </h3>
      <hr class="border-t-2 border-dashed border-gray-500 my-2">
    </div>
    <!-- Colors Filter -->
    <div class="mb-3s">
      <div class="space-y-1 text-gray-500">
        <p>Black</p>
        <p>White</p>
        <p>Yellow</p>
      </div>
    </div>
    <!-- Price Range Filter -->
    <div class="py-0 my-0 mt-0">
      <h3 class="flex items-center justify-between">
        <span class="py-0 my-0 mb-0">Price Range</span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>
      </h3>
      <hr class="border-t-2 border-dashed border-gray-500 my-2">
    </div>

    <!-- Ratings Filter -->
    <div class="py-2">
      <h3 class="flex items-center justify-between">
        <span>Ratings</span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>
      </h3>
      <hr class="border-t-2 border-dashed border-gray-500 my-2">
    </div>
</div>



<!-- Main Content Section (Di kanan) -->
<div class="container mx-auto p-6">
  <div class="grid grid-cols-8 gap-5">

    <!-- Product Image with Text, | Separator and Rating -->
    <div class="col-span-8 sm:col-span-4 md:col-span-2 h-80 mb-3">
      <img src="https://colorbox.co.id/cdn/shop/files/I-TSKKEY224L180_BLACK_4_5b6fec48-10a2-4425-98c8-f0f86b4f3896.jpg?v=1732775288&width=700" alt="Baju" class="object-cover h-full w-full">
      <div class="text-center mt-2">
        <p class="font-semibold ">Sleeves Midi Dres</p>
        <div class="flex justify-center items-center">
          <!-- Text Separator | -->
          <span class="mx-2 ">IDR.250.000  | 5.0</span> 
          <!-- Star Rating -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-5.6 3.3 1.4-6.1L1 7.5l6.2-.5L10 1l2.8 5 6.2.5-4.8 4.7 1.4 6.1L10 15z" /></svg>
          
        </div>
      </div>
    </div>

    <div class="col-span-8 sm:col-span-4 md:col-span-2 h-80 mb-3">
      <img src="https://colorbox.co.id/cdn/shop/files/I-COGKEY224L057_LT._PINK_5_7773e51d-cec5-43f2-b3fd-84b13659d301.jpg?v=1732774965&width=700" alt="Baju" class="object-cover h-80 w-full">
      <div class="text-center mt-2">
        <p class="font-semibold">Floral Midi Dress</p>
        <div class="flex justify-center items-center">
          <!-- Text Separator | -->
          <span class="mx-2">IDR.300.000  | 5.0</span> 
          <!-- Star Rating -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-5.6 3.3 1.4-6.1L1 7.5l6.2-.5L10 1l2.8 5 6.2.5-4.8 4.7 1.4 6.1L10 15z" /></svg>
          
        </div>
      </div>
    </div>
    <div class="col-span-8 sm:col-span-4 md:col-span-2 h-80 mb-3">
      <img src="https://colorbox.co.id/cdn/shop/files/I-BSWKEY224L184_LT._PINK_4_3369f2e4-b95a-4410-9b59-976d2943ebb3.jpg?v=1732775304&width=700" alt="Baju" class="object-cover h-80 w-full">
      <div class="text-center mt-2">
        <p class="font-semibold">Sleeve Blouse</p>
        <div class="flex justify-center items-center">
          <!-- Text Separator | -->
          <span class="mx-2">IDR.199.900| 5.0</span> 
          <!-- Star Rating -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-5.6 3.3 1.4-6.1L1 7.5l6.2-.5L10 1l2.8 5 6.2.5-4.8 4.7 1.4 6.1L10 15z" /></svg>
          
        </div>
      </div>
    </div>
    <div class="col-span-8 sm:col-span-4 md:col-span-2 h-80 mb-3">
      <img src="https://colorbox.co.id/cdn/shop/files/I-SWGKEY224L059_LT._PINK_4_e47f340f-728e-4f3d-8d82-89bd9f480ea5.jpg?v=1732774986&width=700" alt="Baju" class="object-cover h-80 w-full">
      <div class="text-center mt-2">
        <p class="font-semibold">Neck Crop SweateR</p>
        <div class="flex justify-center items-center">
          <!-- Text Separator | -->
          <span class="mx-2">IDR.150.000| 5.0</span> 
          <!-- Star Rating -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-5.6 3.3 1.4-6.1L1 7.5l6.2-.5L10 1l2.8 5 6.2.5-4.8 4.7 1.4 6.1L10 15z" /></svg>
          
        </div>
      </div>
    </div>
    <div class="col-span-8 sm:col-span-4 md:col-span-2 h-80 mb-3">
      <img src="https://colorbox.co.id/cdn/shop/files/I-TSKKEY224L179_LT._BLUE_4_3593ad99-5d95-4e0a-ba13-07ddf0590a8e.jpg?v=1732775280&width=700" alt="Baju" class="object-cover h-80 w-full">
      <div class="text-center mt-2">
        <p class="font-semibold">Short Sleeve Top</p>
        <div class="flex justify-center items-center">
          <!-- Text Separator | -->
          <span class="mx-2">IDR.100.000| 5.0</span> 
          <!-- Star Rating -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-5.6 3.3 1.4-6.1L1 7.5l6.2-.5L10 1l2.8 5 6.2.5-4.8 4.7 1.4 6.1L10 15z" /></svg>
          
        </div>
      </div>
    </div>
    <div class="col-span-8 sm:col-span-4 md:col-span-2 h-80 mb-3">
      <img src="https://colorbox.co.id/cdn/shop/files/I-LPWKEY224L152_SAND_4_cf5dd34f-aa88-4ddb-a946-4a134df345a1.jpg?v=1732775241&width=700" alt="Baju" class="object-cover h-80 w-full">
      <div class="text-center mt-2">
        <p class="font-semibold">Drawstring Pants</p>
        <div class="flex justify-center items-center">
          <!-- Text Separator | -->
          <span class="mx-2">IDR.259.000 | 5.0</span> 
          <!-- Star Rating -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-5.6 3.3 1.4-6.1L1 7.5l6.2-.5L10 1l2.8 5 6.2.5-4.8 4.7 1.4 6.1L10 15z" /></svg>
          
        </div>
      </div>
    </div>
    <div class="col-span-8 sm:col-span-4 md:col-span-2 h-80 mb-3">
      <img src="https://colorbox.co.id/cdn/shop/files/I-SKWKEY224L097_LT._PINK_4_8cfb8cf9-386a-4a04-8d5b-b92ea6c75c5c.jpg?v=1732775105&width=700" alt="Baju" class="object-cover h-80 w-full">
      <div class="text-center mt-2">
        <p class="font-semibold">Mini Skirt</p>
        <div class="flex justify-center items-center">
          <!-- Text Separator | -->
          <span class="mx-2">IDR.200.000| 5.0</span> 
          <!-- Star Rating -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-5.6 3.3 1.4-6.1L1 7.5l6.2-.5L10 1l2.8 5 6.2.5-4.8 4.7 1.4 6.1L10 15z" /></svg>
          
        </div>
      </div>
    </div>
    <div class="col-span-8 sm:col-span-4 md:col-span-2 h-80 mb-3">
      <img src="https://colorbox.co.id/cdn/shop/files/I-JKWKEY224L044_GREY_4_7e02bf76-ae18-48c5-92b1-72788c5517e0.jpg?v=1732774884&width=700" alt="Baju" class="object-cover h-80 w-full">
      <div class="text-center mt-2">
        <p class="font-semibold">Boomber Jacket</p>
        <div class="flex justify-center items-center">
          <!-- Text Separator | -->
          <span class="mx-2">IDR.300.000| 5.0</span> 
          <!-- Star Rating -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-5.6 3.3 1.4-6.1L1 7.5l6.2-.5L10 1l2.8 5 6.2.5-4.8 4.7 1.4 6.1L10 15z" /></svg>
          
        </div>
      </div>
    </div>

      </div>
    </div>

  </div>
</div>

  </div>
</div>


<div class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center z-10 ">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Pop-up Product</title>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <!-- Product Pop-up -->
    <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="bg-white rounded-lg shadow-lg max-w-3xl w-full p-6 relative flex">
            <!-- Image Section -->
            <div class="w-1/2">
                <img src="https://colorbox.co.id/cdn/shop/files/I-JKWKEY224L044_GREY_4_7e02bf76-ae18-48c5-92b1-72788c5517e0.jpg?v=1732774884&width=700" alt="Printed Loose T-shirt" class="rounded-md">
            </div>

            <!-- Details Section -->
            <div class="w-1/2 pl-6">
                <div class="flex justify-between items-center">
                    <h3 class="text-2xl font-semibold">Printed Loose T-shirt</h3>
                    <button class="text-gray-400 hover:text-gray-600 text-2xl">&times;</button>
                </div>
                <p class="text-lg text-blue-600 font-bold mt-2">IDR. 150.000</p>
                <p class="text-gray-600 mt-4">Relaxed-fit shirt. Camp collar and short sleeves. Button-up front.</p>

                <!-- Colors -->
                <div class="mt-6">
                    <p class="text-sm font-medium">Color:</p>
                    <div class="flex space-x-2 mt-2">
                        <span class="w-6 h-6  bg-gray-300 border"></span>
                        <span class="w-6 h-6r bg-black border"></span>
                        <span class="w-6 h-6  bg-green-400 border"></span>
                        <span class="w-6 h-6  bg-blue-400 border"></span>
                    </div>
                </div>

                <!-- Sizes -->
                <div class="mt-6">
                    <p class="text-sm font-medium">Size:</p>
                    <div class="flex space-x-2 mt-2">
                        <button class="px-3 py-1 border  text-sm hover:bg-gray-100">XS</button>
                        <button class="px-3 py-1 border text-sm hover:bg-gray-100">S</button>
                        <button class="px-3 py-1 border text-sm hover:bg-gray-100">M</button>
                        <button class="px-3 py-1 border  text-sm hover:bg-gray-100">L</button>
                        <button class="px-3 py-1 border  text-sm hover:bg-gray-100">XL</button>
                        <button class="px-3 py-1 border  text-sm hover:bg-gray-100">2XL</button>
                        
                    </div>
                </div>
                <div class="text-sm font-medium text-gray-500 mt-4">FIND YOUR SIZE | MEASUREMENT GUIDE</div>

                <!-- Add to Cart Button -->
                <button class="mt-6 w-full bg-blue-600 text-white py-2  hover:bg-blue-800">Add to Cart</button>
            </div>
        </div>
    </div>
</body>
</html>


@endsection
