@extends('layouts.admin')

@section('title')
    Products
@endsection
@section('content')
</head>
<body class="bg-gray-100 p-6">
  <div class="container mx-auto">
    
    <!-- Search  -->
    <form class="flex-wrap items-center justify-between mb-4">
      <input name="search"
        id="searchInput"
        type="text"
        placeholder="Search by order id"
        class="px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200"
      />
</form>
    <!-- Judul kolom Tabel -->
    <div class="overflow-x-auto">
      <table class="min-w-full bg-white border border-gray-300 rounded-md">
        <thead>
          <tr class="border-b">
            <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">PRODUCT ID</th>
            <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">CREATED</th>
            <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">NAME</th>
            <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">PRICE</th>
          </tr>
        </thead>
        <tbody id="tableBody">
          <!-- iis kolom -->
           @foreach($semuaProduk as $produk)
          <tr class="border-b hover:bg-gray-50">
            <td class="px-6 py-4 text-sm text-gray-700">{{$produk->id}}</td>
            <td class="px-6 py-4 text-sm text-gray-700">{{ $produk->created_at}}</td>
            <td class="px-6 py-4 text-sm text-gray-700">{{ $produk->nama_produk }}</td>
            <td class="px-6 py-4 text-sm text-gray-700">{{$produk->harga_produk }}</td>
            
            <td>
              <form action="/admin/product/{{$produk->id}}/delete" method="post">@csrf<button>Hapus</button></form>
        
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- dropdown-->
    <div class="flex flex-wrap items-center justify-between mt-4">
      <div class="relative">
      <div class="flex flex-wrap items-center justify-between mt-4">
  <!-- Showing Section -->
  <div class="flex items-center space-x-2">
    <h1 class="text-gray-500">Showing</h1>
    <!-- Dropdown Button -->
    <button
      id="showingDropdownButton"
      class="flex items-center px-4 py-2 text-sm text-gray-500 border rounded-md hover:bg-gray-100"
    >
      10
      <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
      </svg>
    </button>
    <h1 class="text-gray-500">of 50</h1>
  </div>
</div>

        <ul
          id="showingDropdown"
          class="absolute left-0 z-10 hidden w-40 mt-2 bg-white border border-gray-200 rounded-md shadow-md"
        >
     
          <li class="px-4 py-2 cursor-pointer hover:bg-gray-100" data-value="10">10</li>
          <li class="px-4 py-2 cursor-pointer hover:bg-gray-100" data-value="20">20</li>
          <li class="px-4 py-2 cursor-pointer hover:bg-gray-100" data-value="50">50</li>
       
        </ul>
      </div>
      <!-- <div class="flex items-center space-x-2">
      <button class="px-3 py-1 text-sm text-gray-500 border rounded-md hover:bg-gray-100"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
</svg> -->
<!-- dropdown disamping
</button>
        <button class="px-3 py-1 text-sm text-gray-500 border rounded-md hover:bg-gray-100">1</button>
        <button class="px-3 py-1 text-sm text-gray-500 border rounded-md hover:bg-gray-100">2</button>
        <button class="px-3 py-1 text-sm text-gray-500 border rounded-md hover:bg-gray-100">3</button>
        <button class="px-3 py-1 text-sm text-gray-500 border rounded-md hover:bg-gray-100"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
</svg>
</button>
      </div> -->
      {{ $semuaProduk->links() }}
    </div>
  </div>


 

@endsection