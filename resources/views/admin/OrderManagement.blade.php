@extends('layouts.admin')

@section('title')
    Products
@endsection

@section('content')
<body class="bg-gray-100 p-6">
    <div class="container mx-auto">
        <!-- Search and Filter -->
        <div class="flex justify-between mb-4">
            <input 
                type="text" 
                placeholder="Search by order id"
                class="px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200"
            />
          
        </div>

        <!-- Table -->
        <div class="bg-white shadow rounded-md overflow-x-auto">
            <table class="w-full table-auto">
                <thead class="text-left text-gray-600 text-sm font-medium">
                    <tr class="border-b">
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">ORDER ID</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">CREATED</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">CUSTOMER</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">TOTAL</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">PROFIT</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">STATUS</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 text-sm">
                    <!-- Example Row -->
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-3">#1</td>
                        <td class="px-4 py-3">2 min ago</td>
                        <td class="px-4 py-3">Joseph Wheeler</td>
                        <td class="px-4 py-3">Rp.150.000</td>
                        <td class="px-4 py-3">Rp.150.000</td>
                        <td class="px-4 py-3 flex items-center space-x-2">
                        <span class="px-3 py-1 text-sm font-semibold text-yellow-500 bg-yellow-100 rounded-lg">
                                Pending
                            </span>
                            <button class="text-gray-500 hover:text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <!-- iis kolom -->
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-3">#1</td>
                        <td class="px-4 py-3">2 min ago</td>
                        <td class="px-4 py-3">Joseph Wheeler</td>
                        <td class="px-4 py-3">Rp.150.000</td>
                        <td class="px-4 py-3">Rp.150.000</td>
                        <td class="px-4 py-3 flex items-center space-x-2">
                            <span class="px-3 py-1 text-sm font-semibold text-yellow-500 bg-yellow-100 rounded-lg">
                                Pending
                            </span>
                            <button class="text-gray-500 hover:text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-3">#1</td>
                        <td class="px-4 py-3">2 min ago</td>
                        <td class="px-4 py-3">Joseph Wheeler</td>
                        <td class="px-4 py-3">Rp.150.000</td>
                        <td class="px-4 py-3">Rp.150.000</td>
                        <td class="px-4 py-3 flex items-center space-x-2">
                        <span class="px-3 py-1 text-sm font-semibold text-yellow-500 bg-yellow-100 rounded-lg">
                                Pending
                            </span>
                            <button class="text-gray-500 hover:text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-3">#1</td>
                        <td class="px-4 py-3">2 min ago</td>
                        <td class="px-4 py-3">Joseph Wheeler</td>
                        <td class="px-4 py-3">Rp.150.000</td>
                        <td class="px-4 py-3">Rp.150.000</td>
                        <td class="px-4 py-3 flex items-center space-x-2">
                        <span class="px-3 py-1 text-sm font-semibold text-yellow-500 bg-yellow-100 rounded-lg">
                                Pending
                            </span>
                            <button class="text-gray-500 hover:text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-3">#1</td>
                        <td class="px-4 py-3">2 min ago</td>
                        <td class="px-4 py-3">Joseph Wheeler</td>
                        <td class="px-4 py-3">Rp.150.000</td>
                        <td class="px-4 py-3">Rp.150.000</td>
                        <td class="px-4 py-3 flex items-center space-x-2">
                            <span class="px-3 py-1 text-sm font-semibold text-green-500 bg-green-100 rounded-lg">
                              Confirmed
                            </span>
                            <button class="text-gray-500 hover:text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-3">#1</td>
                        <td class="px-4 py-3">2 min ago</td>
                        <td class="px-4 py-3">Joseph Wheeler</td>
                        <td class="px-4 py-3">Rp.150.000</td>
                        <td class="px-4 py-3">Rp.150.000</td>
                        <td class="px-4 py-3 flex items-center space-x-2">
                        <span class="px-3 py-1 text-sm font-semibold text-green-500 bg-green-100 rounded-lg">
                             Confirmed
                            </span>
                            <button class="text-gray-500 hover:text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-3">#1</td>
                        <td class="px-4 py-3">2 min ago</td>
                        <td class="px-4 py-3">Joseph Wheeler</td>
                        <td class="px-4 py-3">Rp.150.000</td>
                        <td class="px-4 py-3">Rp.150.000</td>
                        <td class="px-4 py-3 flex items-center space-x-2">
                        <span class="px-3 py-1 text-sm font-semibold text-green-500 bg-green-100 rounded-lg">
                              Confirmed
                            </span>
                            <button class="text-gray-500 hover:text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-3">#1</td>
                        <td class="px-4 py-3">2 min ago</td>
                        <td class="px-4 py-3">Joseph Wheeler</td>
                        <td class="px-4 py-3">Rp.150.000</td>
                        <td class="px-4 py-3">Rp.150.000</td>
                        <td class="px-4 py-3 flex items-center space-x-2">
                        <span class="px-3 py-1 text-sm font-semibold text-green-500 bg-green-100 rounded-lg">
                        Confirmed
                            </span>
                            <button class="text-gray-500 hover:text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-3">#1</td>
                        <td class="px-4 py-3">2 min ago</td>
                        <td class="px-4 py-3">Joseph Wheeler</td>
                        <td class="px-4 py-3">Rp.150.000</td>
                        <td class="px-4 py-3">Rp.150.000</td>
                        <td class="px-4 py-3 flex items-center space-x-2">
                            <span class="px-3 py-1 text-sm font-semibold text-blue-500 bg-blue-100 rounded-lg">
                    Proccesing
                            </span>
                            <button class="text-gray-500 hover:text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-3">#1</td>
                        <td class="px-4 py-3">2 min ago</td>
                        <td class="px-4 py-3">Joseph Wheeler</td>
                        <td class="px-4 py-3">Rp.150.000</td>
                        <td class="px-4 py-3">Rp.150.000</td>
                        <td class="px-4 py-3 flex items-center space-x-2">
                            <span class="px-3 py-1 text-sm font-semibold text-blue-500 bg-blue-200 rounded-lg">
                             Processing
                            </span>
                            <button class="text-gray-500 hover:text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-3">#1</td>
                        <td class="px-4 py-3">2 min ago</td>
                        <td class="px-4 py-3">Joseph Wheeler</td>
                        <td class="px-4 py-3">Rp.150.000</td>
                        <td class="px-4 py-3">Rp.150.000</td>
                        <td class="px-4 py-3 flex items-center space-x-2">
                        <span class="px-3 py-1 text-sm font-semibold text-blue-500 bg-blue-200 rounded-lg">
                                Proccesing
                            </span>
                            <button class="text-gray-500 hover:text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-3">#1</td>
                        <td class="px-4 py-3">2 min ago</td>
                        <td class="px-4 py-3">Joseph Wheeler</td>
                        <td class="px-4 py-3">Rp.150.000</td>
                        <td class="px-4 py-3">Rp.150.000</td>
                        <td class="px-4 py-3 flex items-center space-x-2">
                        <span class="px-3 py-1 text-sm font-semibold text-red-500 bg-red-100 rounded-lg">
                          Cancelled
                            </span>
                            <button class="text-gray-500 hover:text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-3">#1</td>
                        <td class="px-4 py-3">2 min ago</td>
                        <td class="px-4 py-3">Joseph Wheeler</td>
                        <td class="px-4 py-3">Rp.150.000</td>
                        <td class="px-4 py-3">Rp.150.000</td>
                        <td class="px-4 py-3 flex items-center space-x-2">
                        <span class="px-3 py-1 text-sm font-semibold text-red-500 bg-red-100 rounded-lg">
                          Cancelled
                            </span>
                            <button class="text-gray-500 hover:text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-3">#1</td>
                        <td class="px-4 py-3">2 min ago</td>
                        <td class="px-4 py-3">Joseph Wheeler</td>
                        <td class="px-4 py-3">Rp.150.000</td>
                        <td class="px-4 py-3">Rp.150.000</td>
                        <td class="px-4 py-3 flex items-center space-x-2">
                        <span class="px-3 py-1 text-sm font-semibold text-red-500 bg-red-100 rounded-lg">
                          Cancelled
                            </span>
                            <button class="text-gray-500 hover:text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="flex items-center justify-between mt-4 text-sm">
            <div>
                Showing 
                <select class="border border-gray-300 rounded-md focus:ring focus:ring-blue-200">
                    <option>10</option>
                    <option>20</option>
                    <option>50</option>
                </select>
                of 50
            </div>
            <div class="flex space-x-1">
                <button class="px-3 py-1 border border-gray-300 rounded-md text-gray-600 hover:bg-gray-100"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
</svg>
</button>
                <button class="px-3 py-1 bg-blue-500 text-white rounded-md">1</button>
                <button class="px-3 py-1 border border-gray-300 rounded-md text-gray-600 hover:bg-gray-100">2</button>
                <button class="px-3 py-1 border border-gray-300 rounded-md text-gray-600 hover:bg-gray-100">3</button>
                <button class="px-3 py-1 border border-gray-300 rounded-md text-gray-600 hover:bg-gray-100">4</button>
                <button class="px-3 py-1 border border-gray-300 rounded-md text-gray-600 hover:bg-gray-100">5</button>
                <button class="px-3 py-1 border border-gray-300 rounded-md text-gray-600 hover:bg-gray-100"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
</svg>

</button>
            </div>
        </div>
    </div>
</body>
@endsection
