@extends('layouts.admin')

@section('content')
<div class="p-8 bg-gray-50">
    <div class="flex justify-between items-start border-b pb-4 mb-6">
    <div class="flex items-center space-x-4">
        <div class="w-16 h-16 rounded-full bg-blue-200"></div>
        <div>
            <h1 class="text-xl font-semibold">Robert Fox</h1>
                <p class="text-gray-600">robert@gmail.com</p>
            </div>
        </div>
    <div class="grid grid-cols-3 gap-4">
        <div class="text-center">
            <p class="text-xl font-semibold">150</p>
            <p class="text-gray-600">Total Order</p>
        </div>
            <div class="text-center">
                <p class="text-xl font-semibold">140</p>
                <p class="text-gray-600">Completed</p>
                </div>
            <div class="text-center">
                <p class="text-xl font-semibold">10</p>
                <p class="text-gray-600">Canceled</p>
            </div>
        </div>
    </div>
    <!-- Personal Information -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-6">
            <div>
                <p class="text-sm text-gray-600">Contact Number</p>
                <p class="font-semibold">(201) 555-0124</p>
                </div>
            <div>
                <p class="text-sm text-gray-600">Gender</p>
                <p class="font-semibold">Male</p>
                </div>
            <div>
                <p class="text-sm text-gray-600">Date of Birth</p>
                <p class="font-semibold">1 Jan, 1985</p>
                </div>
            <div>
                <p class="text-sm text-gray-600">Member Since</p>
                <p class="font-semibold">3 March, 2023</p>
                </div>
            <div class="col-span-2">
                <p class="text-sm text-gray-600">Shipping Address</p>
                <p class="font-semibold">3517 W. Gray St. Utica, Pennsylvania 57867</p>
            </div>
        </div>
    <!-- Tabs -->
        <div class="flex space-x-8 border-b pb-2 mb-4">
            <button class="text-blue-600 font-semibold border-b-2 border-blue-600">All Orders</button>
            <button class="text-gray-600">Completed</button>
            <button class="text-gray-600">Canceled</button>
        </div>
    <!-- Search and Filter -->
        <div class="flex items-center pb-4 w-full justify-between">
            <div class="flex items-center space-x-4">
                <div class="relative flex items-center w-full max-w-xs">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-gray-400 absolute left-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m0 0a7.5 7.5 0 111.5-1.5l4.35 4.35z" />
                    </svg>
                <input 
                    type="text" 
                    placeholder="Search by Order ID" 
                    class="w-full py-2 pl-10 pr-4 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm"/>
                </div>
                    <button 
                        class="px-4 py-2 bg-blue-600 text-white text-sm font-semibold rounded-md shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Search
                    </button>
                </div>
    <!-- Filter by Date Range -->
        <button 
            class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm flex items-center space-x-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <span>Filter by Date Range</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-gray-600">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
            </div>
    <!-- Orders Table -->
        <div class="bg-white shadow rounded-md">
            <table class="w-full table-auto">
                <thead class="bg-gray-100 border-b">
                    <tr>
                        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-600">Order ID</th>
                        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-600">Created</th>
                        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-600">Total</th>
                        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-600">Payment</th>
                        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-600">Status</th>
                    </tr>
                </thead>
            <tbody>
                    <tr class="border-b">
                        <td class="py-3 px-4 text-blue-600 font-semibold">#6548</td>
                        <td class="py-3 px-4 text-gray-600">2 min ago</td>
                        <td class="py-3 px-4 text-gray-600">$654</td>
                        <td class="py-3 px-4 text-gray-600">CC</td>
                        <td class="py-3 px-4 flex items-center justify-between">
                    <span class="text-green-600 font-semibold">Completed</span>
                        <button class="w-6 h-6 bg-gray-200 rounded-full flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-gray-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                    </td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-3 px-4 text-blue-600 font-semibold">#6548</td>
                        <td class="py-3 px-4 text-gray-600">2 min ago</td>
                        <td class="py-3 px-4 text-gray-600">$654</td>
                        <td class="py-3 px-4 text-gray-600">COD</td>
                        <td class="py-3 px-4 flex items-center justify-between">
                    <span class="text-red-600 font-semibold">Canceled</span>
                        <button class="w-6 h-6 bg-gray-200 rounded-full flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-gray-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                    </td>
                </tr>
                <tr>
                        <td class="py-3 px-4 text-blue-600 font-semibold">#6548</td>
                        <td class="py-3 px-4 text-gray-600">2 min ago</td>
                        <td class="py-3 px-4 text-gray-600">$654</td>
                        <td class="py-3 px-4 text-gray-600">CC</td>
                        <td class="py-3 px-4 flex items-center justify-between">
                    <span class="text-yellow-600 font-semibold">Pending</span>
                        <button class="w-6 h-6 bg-gray-200 rounded-full flex justify-center items-center transform rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-gray-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    <!-- Expanded Order Details -->
        <div class="p-4 border-t">
            <table class="w-full table-auto text-sm">
                <thead class="bg-gray-100 border-b">
                    <tr>
                        <th class="py-3 px-4 text-left font-semibold text-gray-600">#</th>
                        <th class="py-3 px-4 text-left font-semibold text-gray-600">SKU</th>
                        <th class="py-3 px-4 text-left font-semibold text-gray-600">Price</th>
                        <th class="py-3 px-4 text-left font-semibold text-gray-600">Qty</th>
                        <th class="py-3 px-4 text-left font-semibold text-gray-600">Disc.</th>
                        <th class="py-3 px-4 text-left font-semibold text-gray-600">Total</th>
                        <th class="py-3 px-4 text-left font-semibold text-gray-600">Actions</th>
                    </tr>
                </thead>
                    <tbody>
                    <tr class="border-b">
                        <td class="py-3 px-4">#6548</td>
                        <td class="py-3 px-4">LONG PANTS</td>
                        <td class="py-3 px-4">$999.29</td>
                        <td class="py-3 px-4">x1</td>
                        <td class="py-3 px-4">5%</td>
                        <td class="py-3 px-4">$949.32</td>
                        <td class="py-3 px-4">
                        <button class="text-blue-600 hover:text-blue-800 font-semibold">...</button>
                        </td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-3 px-4">#6548</td>
                        <td class="py-3 px-4">LONG PANTS</td>
                        <td class="py-3 px-4">$999.29</td>
                        <td class="py-3 px-4">x1</td>
                        <td class="py-3 px-4">5%</td>
                        <td class="py-3 px-4">$949.32</td>
                        <td class="py-3 px-4">
                        <button class="text-blue-600 hover:text-blue-800 font-semibold">...</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4">#6548</td>
                        <td class="py-3 px-4">LONG PANTS</td>
                        <td class="py-3 px-4">$999.29</td>
                        <td class="py-3 px-4">x1</td>
                        <td class="py-3 px-4">5%</td>
                        <td class="py-3 px-4">$949.32</td>
                        <td class="py-3 px-4">
                        <button class="text-blue-600 hover:text-blue-800 font-semibold">...</button>
                        </td>
                    </tr>
                </tbody>
            </table>
    <!-- Order Summary -->
        <div class="mt-4 text-sm">
            <div class="flex justify-between py-1">
                <span class="text-gray-600">Subtotal</span>
                <span>$2,847.96</span>
            </div>
            <div class="flex justify-between py-1">
                <span class="text-gray-600">Shipping</span>
                <span>$5.50</span>
            </div>
            <div class="flex justify-between py-1">
                <span class="text-gray-600">Discount</span>
                <span class="text-red-600">-$150.32</span>
            </div>
            <div class="flex justify-between font-semibold py-1">
                <span>Total</span>
                <span>$2,647.32</span>
            </div>
        </div>
    </div>
</div>
</div>

@endsection