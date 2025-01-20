@extends('layouts.admin')

@section('title')
    Order Management
@endsection

@section('content')

    <body class="bg-gray-100 p-6">
        <div class="container mx-auto">
            <!-- Search and Filter -->
            <form class="flex gap-4 mb-4">
                <input type="text" name="search" placeholder="Search by order id"
                    class="px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200" />
                <button
                    class="px-4 py-2 bg-blue-600 text-white text-sm font-semibold rounded-md shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Search
                </button>
            </form>

            <!-- Table -->
            <div class="bg-white shadow rounded-md overflow-x-auto mb-4">
                <table class="w-full table-auto overflow-y-hidden">
                    <thead class="text-left text-gray-600 text-sm font-medium">
                        <tr class="border-b">
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">ORDER ID</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">CREATED</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">CUSTOMER</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">TOTAL</th>
                            {{-- <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">PROFIT</th> --}}
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">STATUS</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700 text-sm">
                        <!-- Example Row -->
                        @foreach ($dataTransaksi as $transaksi)
                            <tr class="border-b hover:bg-gray-50">
                                <td class="px-4 py-3">#{{ $transaksi->id_transaksi }}</td>
                                <td class="px-4 py-3">{{ $transaksi->waktu_transaksi->diffForHumans() }}</td>
                                <td class="px-4 py-3">{{ $transaksi->user->fullName }}</td>
                                <td class="px-4 py-3">{{ Number::currency($transaksi->total_harga, 'IDR', 'id') }}</td>
                                {{-- <td class="px-4 py-3">Rp.150.000</td> --}}
                                <td class="px-4 py-3 flex items-center space-x-2 overflow-y-visible relative">
                                    <span
                                        class="px-3 py-1 text-sm font-semibold rounded-lg badge-{{ $transaksi->status_transaksi }}">
                                        {{ ucwords($transaksi->status_transaksi) }}
                                    </span>
                                    <button type="button" class="text-gray-500 hover:text-gray-700 status-opt"
                                        data-target="{{ $transaksi->id_transaksi }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 9l6 6 6-6" />
                                        </svg>
                                    </button>
                                    <form action="/admin/order/status" method="POST"
                                        class="absolute w-32 top-[90%] left-0 bg-white border rounded-lg hidden popover z-10 last:-top-8"
                                        data-id="{{ $transaksi->id_transaksi }}">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $transaksi->id_transaksi }}">
                                        <button type="submit" name="status" value="processing"
                                            class="block px-3 py-1.5 border-b w-full text-left hover:bg-gray-50">Processing</button>
                                        <button type="submit" name="status" value="delivered"
                                            class="block px-3 py-1.5 w-full text-left hover:bg-gray-50">Delivered</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            {{ $dataTransaksi->links() }}
            {{-- <div class="flex items-center justify-between mt-4 text-sm">
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
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-gray-600 hover:bg-gray-100"><svg
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </button>
                    <button class="px-3 py-1 bg-blue-500 text-white rounded-md">1</button>
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-gray-600 hover:bg-gray-100">2</button>
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-gray-600 hover:bg-gray-100">3</button>
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-gray-600 hover:bg-gray-100">4</button>
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-gray-600 hover:bg-gray-100">5</button>
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-gray-600 hover:bg-gray-100"><svg
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>

                    </button>
                </div>
            </div> --}}
        </div>
    </body>
@endsection

@section('javascript')
    <script>
        const allPopover = document.querySelectorAll(`.popover`)
        let selectedId;
        const clickOutsidePopoverEvent = function(event) {
            const popover = document.querySelector(`.popover[data-id="${selectedId}"].show`)
            if (selectedId && popover) {
                // console.log(popover);
                console.log(selectedId);

                const popoverBtn = document.querySelector(`.status-opt[data-target="${selectedId}"]`)
                if (!(popover === event.target || popover.contains(event.target) || event.target == popoverBtn ||
                        popoverBtn.contains(event.target))) {
                    popover.classList.add('hidden')
                }
            }
        };
        document.addEventListener('click', clickOutsidePopoverEvent)
        document.querySelectorAll('.status-opt').forEach(btn => {
            const prevPopover = document.querySelector(`.popover[data-id="${selectedId}"]`)
            selectedId = btn.getAttribute('data-target')
            const popover = document.querySelector(`.popover[data-id="${selectedId}"]`)
            btn.addEventListener('click', function() {
                // allPopover.forEach(el => {
                // console.log(el != popover);

                // if (el != popover) {
                //     el.classList.add('hidden')
                //     el.classList.remove('show')
                // }
                // })

                if (prevPopover) {
                    prevPopover.classList.add('hidden')
                    prevPopover.classList.remove('show')
                }
                popover.classList.toggle('hidden')
                popover.classList.toggle('show')
                console.log(prevPopover, popover);
            })
        })
    </script>
@endsection
