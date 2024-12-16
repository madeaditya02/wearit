@extends('layouts.admin')

@section('title', 'Discount Product')

@section('content')
    <!-- Container Utama -->
    <div class="flex min-h-screen">
        <!-- Main Content -->
        <main class="flex-1">
            <!-- Tabs -->
            {{-- <div class="flex items-center space-x-6 mt-6 border-b">
                <a href="#" class="pb-2 text-blue-600 font-semibold border-b-2 border-blue-600">All</a>
                <a href="#" class="pb-2 text-gray-500 hover:text-gray-700">Pants</a>
                <a href="#" class="pb-2 text-gray-500 hover:text-gray-700">Shirt</a>
                <a href="#" class="pb-2 text-gray-500 hover:text-gray-700">Hat</a>
                <a href="#" class="pb-2 text-gray-500 hover:text-gray-700">Blazer</a>
            </div> --}}
            <div class="flex justify-between">
                <!-- Search Bar -->
                <a href="/admin/discount/create"
                    class="px-4 py-2 bg-blue-600 text-white text-sm font-semibold rounded-md shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 inline-flex gap-3 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Add New Discount
                </a>
                <form class="flex justify-start gap-4">
                    <input type="text" placeholder="Search by product name or id" name="search"
                        class="border rounded w-64 p-2 focus:ring focus:ring-blue-300" />
                    <button
                        class="px-4 py-2 bg-blue-600 text-white text-sm font-semibold rounded-md shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Search
                    </button>
                </form>
            </div>
            <div class="mt-4 bg-white shadow rounded">
                <table class="min-w-full text-sm">
                    <thead class="border-b">
                        <tr class="text-gray-400">
                            <th class="py-3 px-6 text-left">PRODUCT ID</th>
                            <th class="py-3 px-6 text-left">NAME</th>
                            <th class="py-3 px-6 text-left">PRICE</th>
                            <th class="py-3 px-6 text-left">DISCOUNT</th>
                            <th class="py-3 px-6 text-left">START</th>
                            <th class="py-3 px-6 text-left">END</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <!-- Rows -->
                        @foreach ($discounts as $diskon)
                            <tr class="border-b hover:bg-gray-50 text-black">
                                <td class="py-3 px-6 font-bold">#{{ $diskon->id_produk }}</td>
                                <td class="py-3 px-6">{{ $diskon->produk->nama_produk }}</td>
                                <td class="py-3 px-6">{{ Number::currency($diskon->produk->harga_produk, 'IDR', 'id') }}
                                </td>
                                <td class="py-3 px-6">{{ $diskon->jumlah_diskon }}%</td>
                                <td class="py-3 px-6">{{ $diskon->waktu_mulai->format('j F Y') }}</td>
                                <td class="py-3 px-6">{{ $diskon->waktu_akhir->format('j F Y') }}</td>
                                <td class="py-3 px-5 flex items-center gap-3">
                                    {{-- <button>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                        </svg>
                                    </button> --}}
                                    <!-- Edit Icon -->
                                    <a href="/admin/discount/{{ $diskon->id_diskon }}/edit" class="hover:text-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M11 4H5a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-6M18.5 5.5a2.121 2.121 0 010 3l-7.5 7.5-3 1 1-3 7.5-7.5a2.121 2.121 0 013 0z" />
                                        </svg>
                                    </a>
                                    <!-- Delete Icon -->
                                    <button class="hover:text-red-500 delete" data-id="{{ $diskon->id_diskon }}">
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
            <!-- Pagination -->
            {{-- <div class="flex items-center justify-between mt-4">
                <div class="flex items-center space-x-2">
                    <label for="itemsPerPage" class="text-gray-600">Showing</label>
                    <select id="itemsPerPage"
                        class="px-2 py-1 border border-gray-300 rounded focus:ring-2 focus:ring-blue-300 focus:outline-none">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50" selected>50</option>
                        <option value="100">100</option>
                    </select>
                    <span class="text-gray-600">of 50</span>
                </div>
                <div class="flex space-x-1">
                    <a href="#" class="px-3 py-1 text-gray-600 hover:bg-gray-200 bg-gray-200 rounded">
                        << /a>
                            <a href="#" class="px-3 py-1 bg-blue-900 text-white rounded">1</a>
                            <a href="#" class="px-3 py-1 text-gray-600 hover:bg-gray-200 bg-gray-200 rounded">2</a>
                            <a href="#" class="px-3 py-1 text-gray-600 hover:bg-gray-200 bg-gray-200 rounded">3</a>
                            <a href="#" class="px-3 py-1 text-gray-600 hover:bg-gray-200 bg-gray-200 rounded">4</a>
                            <a href="#" class="px-3 py-1 text-gray-600 hover:bg-gray-200 bg-gray-200 rounded">5</a>
                            <a href="#" class="px-3 py-1 text-gray-600 hover:bg-gray-200 bg-gray-200 rounded">></a>
                </div>
            </div> --}}
        </main>
    </div>

@endsection

@section('javascript')
    <script>
        document.querySelectorAll('.delete').forEach(btn => {
            const id = btn.getAttribute('data-id')
            btn.addEventListener('click', () => {
                Swal.fire({
                    title: "Do you want to delete this discount?",
                    showCancelButton: true,
                    confirmButtonText: `
                  <form action="/admin/discount/${id}" method="POST">
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
