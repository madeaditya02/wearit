@extends('layouts.admin')

@section('content')
<div class="flex items-center border border-gray-300 rounded-md bg-white p-2 w-80">
    <input 
        type="text" 
        placeholder="Search..." 
        class="flex-grow outline-none text-gray-700 bg-white"/>
    <button class="p-1 text-gray-500 hover:text-gray-700 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
            <path d="M10 4a6 6 0 100 12 6 6 0 000-12z" />
            <path d="M21 21l-4.35-4.35" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </button>
</div>

<div class="p-4">
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
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-6 py-4 flex items-center">
                        <div class="w-8 h-8 bg-blue-200 rounded-full flex items-center justify-center">
                            <span class="text-xs font-bold text-blue-600">R</span>
                        </div>
                        <div class="ml-3">
                            <p class="font-medium text-gray-900">Robert Fox</p>
                            <p class="text-sm text-gray-500">robert@gmail.com</p>
                        </div>
                    </td>
                    <td class="px-6 py-4">(201) 555-0124</td>
                    <td class="px-6 py-4">6 April 2023</td>
                    <td class="px-6 py-4">$654</td>
                    <td class="px-6 py-4 flex space-x-4 text-gray-500">
                        <!-- Edit Icon -->
                        <button class="hover:text-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 4H5a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-6M18.5 5.5a2.121 2.121 0 010 3l-7.5 7.5-3 1 1-3 7.5-7.5a2.121 2.121 0 013 0z" />
                            </svg>
                        </button>
                        <!-- Lock Icon -->
                        <button class="hover:text-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c1.083 0 2-.917 2-2V6a2 2 0 00-4 0v3c0 1.083.917 2 2 2zM5 11h14M7 19h10v-8H7v8z" />
                            </svg>
                        </button>
                        <!-- Delete Icon -->
                        <button class="hover:text-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.137 21H7.863a2 2 0 01-1.996-1.858L5 7M10 11v6m4-6v6M6 7h12M9 7V5a2 2 0 012-2h2a2 2 0 012 2v2" />
                            </svg>
                        </button>
                    </td>
                </tr>

                <!-- Additional rows as needed -->
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-6 py-4 flex items-center">
                        <div class="w-8 h-8 bg-blue-200 rounded-full flex items-center justify-center">
                            <span class="text-xs font-bold text-blue-600">D</span>
                        </div>
                        <div class="ml-3">
                            <p class="font-medium text-gray-900">Daniel Caesar</p>
                            <p class="text-sm text-gray-500">daniel@gmail.com</p>
                        </div>
                    </td>
                    <td class="px-6 py-4">(201) 555-0124</td>
                    <td class="px-6 py-4">10 April 2023</td>
                    <td class="px-6 py-4">$78</td>
                    <td class="px-6 py-4 flex space-x-4 text-gray-500">
                        <!-- Edit Icon -->
                        <button class="hover:text-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 4H5a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-6M18.5 5.5a2.121 2.121 0 010 3l-7.5 7.5-3 1 1-3 7.5-7.5a2.121 2.121 0 013 0z" />
                            </svg>
                        </button>
                        <!-- Lock Icon -->
                        <button class="hover:text-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c1.083 0 2-.917 2-2V6a2 2 0 00-4 0v3c0 1.083.917 2 2 2zM5 11h14M7 19h10v-8H7v8z" />
                            </svg>
                        </button>
                        <!-- Delete Icon -->
                        <button class="hover:text-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.137 21H7.863a2 2 0 01-1.996-1.858L5 7M10 11v6m4-6v6M6 7h12M9 7V5a2 2 0 012-2h2a2 2 0 012 2v2" />
                            </svg>
                        </button>
                    </td>
                </tr>

                <!-- Additional rows as needed -->
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-6 py-4 flex items-center">
                        <div class="w-8 h-8 bg-blue-200 rounded-full flex items-center justify-center">
                            <span class="text-xs font-bold text-blue-600">G</span>
                        </div>
                        <div class="ml-3">
                            <p class="font-medium text-gray-900">Genandra Algibra</p>
                            <p class="text-sm text-gray-500">genand@gmail.com</p>
                        </div>
                    </td>
                    <td class="px-6 py-4">(201) 555-0124</td>
                    <td class="px-6 py-4">24 April 2023</td>
                    <td class="px-6 py-4">$290</td>
                    <td class="px-6 py-4 flex space-x-4 text-gray-500">
                        <!-- Edit Icon -->
                        <button class="hover:text-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 4H5a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-6M18.5 5.5a2.121 2.121 0 010 3l-7.5 7.5-3 1 1-3 7.5-7.5a2.121 2.121 0 013 0z" />
                            </svg>
                        </button>
                        <!-- Lock Icon -->
                        <button class="hover:text-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c1.083 0 2-.917 2-2V6a2 2 0 00-4 0v3c0 1.083.917 2 2 2zM5 11h14M7 19h10v-8H7v8z" />
                            </svg>
                        </button>
                        <!-- Delete Icon -->
                        <button class="hover:text-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.137 21H7.863a2 2 0 01-1.996-1.858L5 7M10 11v6m4-6v6M6 7h12M9 7V5a2 2 0 012-2h2a2 2 0 012 2v2" />
                            </svg>
                        </button>
                    </td>
                </tr>
                <!-- More rows can be added as necessary -->
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="flex items-center justify-between px-6 py-4 bg-gray-50">
            <div class="flex items-center space-x-2">
                <label for="rows" class="text-sm text-gray-600">Showing</label>
                <select id="rows" class="border border-gray-300 rounded-md text-sm text-gray-600 p-1 focus:outline-none focus:ring-2 focus:ring-blue-300">
                    <option>10</option>
                    <option>20</option>
                    <option>50</option>
                </select>
                <span class="text-sm text-gray-600">of 50</span>
            </div>
            <div class="flex items-center space-x-1">
                <button class="p-2 text-gray-500 hover:text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button class="px-3 py-1 bg-blue-500 text-white text-sm rounded-md focus:ring-2 focus:ring-blue-300">1</button>
                <button class="px-3 py-1 text-gray-500 hover:text-blue-500 text-sm rounded-md">2</button>
                <button class="p-2 text-gray-500 hover:text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>

@endsection