@extends('layouts.admin')

@section('title', 'Customers')

@section('content')
    <form class="flex items-center border border-gray-300 rounded-md bg-white p-2 w-80">
        <input type="text" placeholder="Search..." name="search" class="flex-grow outline-none text-gray-700 bg-white" />
        <button class="p-1 text-gray-500 hover:text-gray-700 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                class="w-5 h-5">
                <path d="M10 4a6 6 0 100 12 6 6 0 000-12z" />
                <path d="M21 21l-4.35-4.35" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
    </form>

    <div class="mt-4">
        <!-- Tabel -->
        <div class="overflow-x-auto bg-white shadow-md rounded-md">
            <table class="w-full text-left text-sm text-gray-500">
                <!-- Header -->
                <thead class="bg-gray-50 text-gray-700 uppercase text-xs">
                    <tr>
                        <th scope="col" class="px-6 py-3">Name</th>
                        <th scope="col" class="px-6 py-3">Phone Number</th>
                        <th scope="col" class="px-6 py-3">Created</th>
                        <th scope="col" class="px-6 py-3">Shopping Total</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <!-- Body -->
                <tbody>
                    <!-- Row -->
                    @foreach ($users as $user)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-6 py-4 flex items-center">
                                {{-- <div class="w-8 h-8 bg-blue-200 rounded-full flex items-center justify-center">
                            <span class="text-xs font-bold text-blue-600">R</span>
                        </div> --}}
                                <img src="{{ $user->photo_profil }}" alt="" class="size-8 rounded-full">
                                <div class="ml-3">
                                    <p class="font-medium text-gray-900">{{ $user->fullName }}</p>
                                    <p class="text-sm text-gray-500">{{ $user->email }}</p>
                                </div>
                            </td>
                            <td class="px-6 py-4">{{ $user->phone_number }}</td>
                            <td class="px-6 py-4">{{ $user->created_at->format('j F Y') }}</td>
                            <td class="px-6 py-4">{{ Number::currency($user->transaksi->sum('total_harga'), 'IDR', 'id') }}
                            </td>
                            <td class="px-6 py-4 flex space-x-4 text-gray-500">
                                <!-- Visit Icon -->
                                <a href="/admin/customer/{{ $user->id_user }}" class="hover:text-blue-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                    </svg>
                                </a>
                                <!-- Edit Icon -->
                                <a href="/admin/customer/{{ $user->id_user }}/edit" class="hover:text-blue-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M11 4H5a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-6M18.5 5.5a2.121 2.121 0 010 3l-7.5 7.5-3 1 1-3 7.5-7.5a2.121 2.121 0 013 0z" />
                                    </svg>
                                </a>
                                <!-- Delete Icon -->
                                <button class="hover:text-red-500 delete" data-id="{{ $user->id_user }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19 7l-.867 12.142A2 2 0 0116.137 21H7.863a2 2 0 01-1.996-1.858L5 7M10 11v6m4-6v6M6 7h12M9 7V5a2 2 0 012-2h2a2 2 0 012 2v2" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    <!-- More rows can be added as necessary -->
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="p-4">
                {{ $users->links() }}
            </div>
            {{-- <div class="flex items-center justify-between px-6 py-4 bg-gray-50">
                <div class="flex items-center space-x-2">
                    <label for="rows" class="text-sm text-gray-600">Showing</label>
                    <select id="rows"
                        class="border border-gray-300 rounded-md text-sm text-gray-600 p-1 focus:outline-none focus:ring-2 focus:ring-blue-300">
                        <option>10</option>
                        <option>20</option>
                        <option>50</option>
                    </select>
                    <span class="text-sm text-gray-600">of 50</span>
                </div>
                <div class="flex items-center space-x-1">
                    <button class="p-2 text-gray-500 hover:text-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button
                        class="px-3 py-1 bg-blue-500 text-white text-sm rounded-md focus:ring-2 focus:ring-blue-300">1</button>
                    <button class="px-3 py-1 text-gray-500 hover:text-blue-500 text-sm rounded-md">2</button>
                    <button class="p-2 text-gray-500 hover:text-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div> --}}
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        document.querySelectorAll('.delete').forEach(btn => {
            const id = btn.getAttribute('data-id')
            btn.addEventListener('click', () => {
                Swal.fire({
                    title: "Do you want to delete this customer?",
                    showCancelButton: true,
                    confirmButtonText: `
                  <form action="/admin/customer/delete" method="POST">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                    <input name="id" type="hidden" value="${id}">
                    <button type="submit">Delete</button>
                  </form>
                  `,
                    icon: 'warning',
                })
            })
        })
    </script>
@endsection
