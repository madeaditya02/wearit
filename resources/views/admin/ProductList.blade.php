@extends('layouts.admin')

@section('title')
    Products
@endsection
@section('content')
    <div class="container mx-auto">
        <div class="flex justify-between mb-4">
            <!-- Search Bar -->
            <a href="/admin/discount/create"
                class="px-4 py-2 bg-blue-600 text-white text-sm font-semibold rounded-md shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 inline-flex gap-3 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
                Add New Product
            </a>
            <form class="flex justify-start gap-4">
                <input type="text" placeholder="Search by product name or id" name="search"
                    class="border rounded w-64 p-2 focus:ring focus:ring-blue-300" />
                <button
                    class="px-4 py-2 bg-blue-600 text-white text-sm font-semibold rounded-md shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Search
                </button>
            </form>
        </div>
        <!-- Judul kolom Tabel -->
        <div class="overflow-x-auto">
            {{-- <table class="min-w-full bg-white border border-gray-300 rounded-md">
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
                        @foreach ($semuaProduk as $produk)
                            <tr class="border-b hover:bg-gray-50">
                                <td class="px-6 py-4 text-sm text-gray-700">{{ $produk->id }}</td>
                                <td class="px-6 py-4 text-sm text-gray-700">{{ $produk->created_at }}</td>
                                <td class="px-6 py-4 text-sm text-gray-700">{{ $produk->nama_produk }}</td>
                                <td class="px-6 py-4 text-sm text-gray-700">{{ $produk->harga_produk }}</td>

                                <td>
                                    <form action="/admin/product/{{ $produk->id }}/delete" method="post">
                                        @csrf<button>Hapus</button></form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table> --}}
            <table class="w-full text-left text-sm text-gray-500">
                <!-- Header -->
                <thead class="bg-gray-50 text-gray-700 uppercase text-xs">
                    <tr>
                        <th scope="col" class="px-6 py-3">ID</th>
                        <th scope="col" class="px-6 py-3">Created</th>
                        <th scope="col" class="px-6 py-3">Name</th>
                        <th scope="col" class="px-6 py-3">Price</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <!-- Body -->
                <tbody>
                    <!-- Row -->
                    @foreach ($semuaProduk as $produk)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-6 py-4 flex items-center">#{{ $produk->id }}</td>
                            <td class="px-6 py-4">{{ $produk->created_at ? $produk->created_at->format('j F Y') : '' }}
                            </td>
                            <td class="px-6 py-4">{{ $produk->nama_produk }}</td>
                            <td class="px-6 py-4">{{ Number::currency($produk->harga_produk, 'IDR', 'id') }}</td>
                            <td class="px-6 py-4 flex space-x-4 text-gray-500">
                                <!-- Visit Icon -->
                                <a href="/admin/product/{{ $produk->id }}" class="hover:text-blue-500 font-extrabold">
                                    &#37;
                                </a>
                                <!-- Edit Icon -->
                                <a href="/admin/product/{{ $produk->id }}/edit" class="hover:text-blue-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M11 4H5a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-6M18.5 5.5a2.121 2.121 0 010 3l-7.5 7.5-3 1 1-3 7.5-7.5a2.121 2.121 0 013 0z" />
                                    </svg>
                                </a>
                                <!-- Delete Icon -->
                                <button class="hover:text-red-500 delete" data-id="{{ $produk->id }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19 7l-.867 12.142A2 2 0 0116.137 21H7.863a2 2 0 01-1.996-1.858L5 7M10 11v6m4-6v6M6 7h12M9 7V5a2 2 0 012-2h2a2 2 0 012 2v2" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- dropdown-->
        {{-- <div class="flex flex-wrap items-center justify-between mt-4">
                <div class="relative">
                    <div class="flex flex-wrap items-center justify-between mt-4">
                        <!-- Showing Section -->
                        <div class="flex items-center space-x-2">
                          <h1 class="text-gray-500">Showing</h1>
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
                    <ul id="showingDropdown"
                        class="absolute left-0 z-10 hidden w-40 mt-2 bg-white border border-gray-200 rounded-md shadow-md">

                        <li class="px-4 py-2 cursor-pointer hover:bg-gray-100" data-value="10">10</li>
                        <li class="px-4 py-2 cursor-pointer hover:bg-gray-100" data-value="20">20</li>
                        <li class="px-4 py-2 cursor-pointer hover:bg-gray-100" data-value="50">50</li>
                    </ul>
                </div>
            </div> --}}
        {{ $semuaProduk->links() }}
    </div>
@endsection

@section('javascript')
    <script>
        document.querySelectorAll('.delete').forEach(btn => {
            const id = btn.getAttribute('data-id')
            btn.addEventListener('click', () => {
                Swal.fire({
                    title: "Do you want to delete this product?",
                    showCancelButton: true,
                    confirmButtonText: `
                  <form action="/admin/product/${id}" method="POST">
                    <input name="_method" type="hidden" value="DELETE">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                    <button type="submit">Delete</button>
                  </form>
                  `,
                    icon: 'warning',
                })
            })
        })
    </script>
@endsection
