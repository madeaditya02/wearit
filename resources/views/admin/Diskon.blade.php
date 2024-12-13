@extends('layouts.admin')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <title>Dashboard - Product List</title>
                    <script src="https://cdn.tailwindcss.com"></script>
                </head>
            <body class="bg-gray-100 font-sans">
            <!-- Container Utama -->
            <div class="flex min-h-screen">
            <!-- Main Content -->
            <main class="flex-1 p-6">
            <!-- Tabs -->
            <div class="flex items-center space-x-6 mt-6 border-b">
                <a href="#" class="pb-2 text-blue-600 font-semibold border-b-2 border-blue-600">All</a>
                <a href="#" class="pb-2 text-gray-500 hover:text-gray-700">Pants</a>
                <a href="#" class="pb-2 text-gray-500 hover:text-gray-700">Shirt</a>
                <a href="#" class="pb-2 text-gray-500 hover:text-gray-700">Hat</a>
                <a href="#" class="pb-2 text-gray-500 hover:text-gray-700">Blazer</a>
            </div>
        <div class="flex mt-6">
        <!-- Search Bar -->
        <div class="flex justify-start">
            <input type="text" placeholder="Search by order id" class="border rounded w-50 p-2 focus:ring focus:ring-blue-300" />
        </div>
        <!-- Dropdown Button -->
        <div class="flex justify-end ml-auto">
            <button class="px-4 py-2 ml-auto bg-white text-gray-400 border border-gray-300 rounded hover:bg-gray-200 focus:ring-2 focus:ring-blue-300 focus:outline-none flex justify-end" id="dropdownButton">
                Filter by date range
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06-.02L10 10.94l3.72-3.75a.75.75 0 111.08 1.04l-4.25 4.25a.75.75 0 01-1.06 0L5.23 8.23a.75.75 0 01-.02-1.02z" clip-rule="evenodd" />
            </svg>
        </button>
        <!-- Dropdown Menu -->
        <div class="hidden absolute right-0 mt-2 w-48 bg-white border border-gray-300 rounded shadow-md" id="dropdownMenu">
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Today</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Last 7 days</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">This Month</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Custom Range</a>
        </div>
    </div>
</div>
    <div class="mt-6 bg-white shadow rounded">
        <table class="min-w-full text-sm">
        <thead class="bg-gray-50 border-b">
            <tr class="text-gray-400">
                <th class="py-3 px-6 text-left">PRODUCT ID</th>
                <th class="py-3 px-6 text-left">CREATED</th>
                <th class="py-3 px-6 text-left">NAME</th>
                <th class="py-3 px-6 text-left">PRICE</th>
                <th class="py-3 px-6 text-left">DISCOUNT ON%</th>
            </tr>
        </thead>
            <tbody class="bg-gray-50">
            <!-- Rows -->
            <tr class="border-b hover:bg-gray-50 text-black">
                <td class="py-3 px-6 font-bold">#6548</td>
                <td class="py-3 px-6">2 min ago</td>
                <td class="py-3 px-6">LONG PANTS</td>
                <td class="py-3 px-6">$654</td>
                <td class="py-3 px-6">0</td>
            </tr>
            <tr class="border-b hover:bg-gray-50">
                <td class="py-3 px-6 font-bold">#6548</td>
                <td class="py-3 px-6">2 min ago</td>
                <td class="py-3 px-6">LONG PANTS</td>
                <td class="py-3 px-6">$654</td>
                <td class="py-3 px-6">0</td>
            </tr>
            <tr class="border-b hover:bg-gray-50">
                <td class="py-3 px-6 font-bold">#6548</td>
                <td class="py-3 px-6">2 min ago</td>
                <td class="py-3 px-6">LONG PANTS</td>
                <td class="py-3 px-6">$654</td>
                <td class="py-3 px-6">7</td>
            </tr>
            <tr class="border-b hover:bg-gray-50 text-black">
                <td class="py-3 px-6 font-bold">#6548</td>
                <td class="py-3 px-6">2 min ago</td>
                <td class="py-3 px-6">LONG PANTS</td>
                <td class="py-3 px-6">$654</td>
                <td class="py-3 px-6">0</td>
            </tr>
            <tr class="border-b hover:bg-gray-50">
                <td class="py-3 px-6 font-bold">#6548</td>
                <td class="py-3 px-6">2 min ago</td>
                <td class="py-3 px-6">LONG PANTS</td>
                <td class="py-3 px-6">$654</td>
                <td class="py-3 px-6">0</td>
            </tr>
            <tr class="border-b hover:bg-gray-50">
                <td class="py-3 px-6 font-bold">#6548</td>
                <td class="py-3 px-6">2 min ago</td>
                <td class="py-3 px-6">LONG PANTS</td>
                <td class="py-3 px-6">$654</td>
                <td class="py-3 px-6">0</td>
            </tr>
            <tr class="border-b hover:bg-gray-50 text-black">
                <td class="py-3 px-6 font-bold">#6548</td>
                <td class="py-3 px-6">2 min ago</td>
                <td class="py-3 px-6">LONG PANTS</td>
                <td class="py-3 px-6">$654</td>
                <td class="py-3 px-6">0</td>
            </tr>
            <tr class="border-b hover:bg-gray-50">
                <td class="py-3 px-6 font-bold">#6548</td>
                <td class="py-3 px-6">2 min ago</td>
                <td class="py-3 px-6">LONG PANTS</td>
                <td class="py-3 px-6">$654</td>
                <td class="py-3 px-6">0</td>
            </tr>
            <tr class="border-b hover:bg-gray-50">
                <td class="py-3 px-6 font-bold">#6548</td>
                <td class="py-3 px-6">2 min ago</td>
                <td class="py-3 px-6">LONG PANTS</td>
                <td class="py-3 px-6">$654</td>
                <td class="py-3 px-6">0</td>
            </tr>
            <tr class="border-b hover:bg-gray-50">
                <td class="py-3 px-6 font-bold">#6548</td>
                <td class="py-3 px-6">2 min ago</td>
                <td class="py-3 px-6">LONG PANTS</td>
                <td class="py-3 px-6">$654</td>
                <td class="py-3 px-6">0</td>
            </tr>
        </tbody>
    </table>
</div>
        <!-- Pagination -->
        <div class="flex items-center justify-between mt-4">
            <div class="flex items-center space-x-2">
                <label for="itemsPerPage" class="text-gray-600">Showing</label>
                    <select id="itemsPerPage" class="px-2 py-1 border border-gray-300 rounded focus:ring-2 focus:ring-blue-300 focus:outline-none">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50" selected>50</option>
                        <option value="100">100</option>
                    </select>
                <span class="text-gray-600">of 50</span>
            </div>
        <div class="flex space-x-1">
            <a href="#" class="px-3 py-1 text-gray-600 hover:bg-gray-200 bg-gray-200 rounded"><</a>
            <a href="#" class="px-3 py-1 bg-blue-900 text-white rounded">1</a>
            <a href="#" class="px-3 py-1 text-gray-600 hover:bg-gray-200 bg-gray-200 rounded">2</a>
            <a href="#" class="px-3 py-1 text-gray-600 hover:bg-gray-200 bg-gray-200 rounded">3</a>
            <a href="#" class="px-3 py-1 text-gray-600 hover:bg-gray-200 bg-gray-200 rounded">4</a>
            <a href="#" class="px-3 py-1 text-gray-600 hover:bg-gray-200 bg-gray-200 rounded">5</a>
            <a href="#" class="px-3 py-1 text-gray-600 hover:bg-gray-200 bg-gray-200 rounded">></a>
            </div>
        </div>
    </main>
</div>
</body>
    <script>
        const dropdownButton = document.getElementById("dropdownButton");
        const dropdownMenu = document.getElementById("dropdownMenu");
        dropdownButton.addEventListener("click", () => {
        dropdownMenu.classList.toggle("hidden");
        });
    </script>
</html>

@endsection