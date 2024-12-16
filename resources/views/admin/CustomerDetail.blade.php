@extends('layouts.admin')

@section('title', 'Customer Detail')

@section('content')
    <div class="p-8 bg-gray-50" x-data="transaksi_user">
        <div class="flex justify-between items-start border-b pb-4 mb-6">
            <div class="flex items-center space-x-4">
                {{-- <div class="w-16 h-16 rounded-full bg-blue-200"></div> --}}
                <img src="{{ $user->photo_profil }}" alt="" class="size-16 rounded-full">
                <div>
                    <h1 class="text-xl font-semibold">{{ $user->fullName }}</h1>
                    <p class="text-gray-600">{{ $user->email }}</p>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-4">
                <div class="text-center">
                    <p class="text-xl font-semibold">{{ $user->transaksi->count() }}</p>
                    <p class="text-gray-600">Total Order</p>
                </div>
                <div class="text-center">
                    <p class="text-xl font-semibold">
                        {{ $user->transaksi->filter(fn($t) => $t->status_transaksi == 'delivered')->count() }}</p>
                    <p class="text-gray-600">Delivered</p>
                </div>
                <div class="text-center">
                    <p class="text-xl font-semibold">Rp {{ Number::abbreviate($user->transaksi->sum('total_harga')) }}</p>
                    <p class="text-gray-600">Shopping</p>
                </div>
            </div>
        </div>
        <!-- Personal Information -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-6">
            <div>
                <p class="text-sm text-gray-600">Contact Number</p>
                <p class="font-semibold">{{ $user->phone_number }}</p>
            </div>
            <div>
                <p class="text-sm text-gray-600">Logged Using</p>
                <p class="font-semibold">{{ $user->social ? 'Social' : 'Email' }}</p>
            </div>
            {{-- <div>
                <p class="text-sm text-gray-600">Date of Birth</p>
                <p class="font-semibold">1 Jan, 1985</p>
            </div> --}}
            <div>
                <p class="text-sm text-gray-600">Member Since</p>
                <p class="font-semibold">{{ $user->created_at->format('j F, Y') }}</p>
            </div>
            <div class="col-span-2">
                <p class="text-sm text-gray-600">Shipping Address</p>
                @foreach ($user->alamat as $alamat)
                    <p class="font-semibold">{{ $alamat->alamat_lengkap }}</p>
                @endforeach
            </div>
        </div>
        <!-- Tabs -->
        <hr class="mb-4">
        {{-- <div class="flex space-x-8 border-b pb-2 mb-4">
            <button class="text-blue-600 font-semibold border-b-2 border-blue-600">All Orders</button>
            <button class="text-gray-600">Completed</button>
            <button class="text-gray-600">Canceled</button>
        </div> --}}
        <!-- Search and Filter -->
        <div class="flex items-center pb-4 w-full justify-between">
            <form class="flex items-center space-x-4">
                <div class="relative flex items-center w-full max-w-xs">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="w-5 h-5 text-gray-400 absolute left-3">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-4.35-4.35m0 0a7.5 7.5 0 111.5-1.5l4.35 4.35z" />
                    </svg>
                    <input type="text" placeholder="Search by Order ID" name="search" value="{{ $search }}"
                        class="w-full py-2 pl-10 pr-4 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm" />
                </div>
                <button
                    class="px-4 py-2 bg-blue-600 text-white text-sm font-semibold rounded-md shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Search
                </button>
            </form>
            <!-- Filter by Date Range -->
            {{-- <button
                class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm flex items-center space-x-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <span>Filter by Date Range</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="w-5 h-5 text-gray-600">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </button> --}}
        </div>
        <!-- Orders Table -->
        <div class="bg-white shadow rounded-md">
            <table class="w-full table-auto">
                <thead class="bg-gray-100 border-b">
                    <tr>
                        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-600">Order ID</th>
                        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-600">Created</th>
                        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-600">Total</th>
                        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-600">Shipping</th>
                        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-600">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user->transaksi as $transaksi)
                        <tr class="border-b last:border-0"
                            :class="selectedTransaksi.id_transaksi == {{ $transaksi->id_transaksi }} ? '' : 'hidden'">
                            <td class="py-3 px-4 text-blue-600 font-semibold">#{{ $transaksi->id_transaksi }}</td>
                            <td class="py-3 px-4 text-gray-600">{{ $transaksi->created_at->diffForHumans() }}</td>
                            <td class="py-3 px-4 text-gray-600">
                                {{ Number::currency($transaksi->total_harga, 'IDR', 'id') }}</td>
                            <td class="py-3 px-4 text-gray-600">{{ Str::upper($transaksi->jenis_pengantaran) }}</td>
                            <td class="py-3 px-4 flex items-center justify-between">
                                <span
                                    class="status-{{ $transaksi->status_transaksi }} font-semibold">{{ ucwords($transaksi->status_transaksi) }}</span>
                                <button x-on:click="viewTransaksi({{ $transaksi->id_transaksi }})"
                                    class="w-6 h-6 bg-gray-200 rounded-full flex justify-center items-center"
                                    :class="selectedTransaksi.id_transaksi == {{ $transaksi->id_transaksi }} ? 'rotate-180' :
                                        ''">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-gray-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    {{-- <tr class="border-b">
                        <td class="py-3 px-4 text-blue-600 font-semibold">#6548</td>
                        <td class="py-3 px-4 text-gray-600">2 min ago</td>
                        <td class="py-3 px-4 text-gray-600">$654</td>
                        <td class="py-3 px-4 text-gray-600">COD</td>
                        <td class="py-3 px-4 flex items-center justify-between">
                            <span class="text-red-600 font-semibold">Canceled</span>
                            <button class="w-6 h-6 bg-gray-200 rounded-full flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-gray-600">
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
                            <button
                                class="w-6 h-6 bg-gray-200 rounded-full flex justify-center items-center transform rotate-180">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-gray-600">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>
                        </td>
                    </tr> --}}
                </tbody>
            </table>
            <!-- Expanded Order Details -->
            <template x-if="selectedTransaksi">
                <div class="p-4 border-t">
                    <table class="w-full table-auto text-sm">
                        <thead class="bg-gray-100 border-b">
                            <tr>
                                <th class="py-3 px-4 text-left font-semibold text-gray-600">Product Name</th>
                                <th class="py-3 px-4 text-left font-semibold text-gray-600">Price</th>
                                <th class="py-3 px-4 text-left font-semibold text-gray-600">Size</th>
                                <th class="py-3 px-4 text-left font-semibold text-gray-600">Qty</th>
                                <th class="py-3 px-4 text-left font-semibold text-gray-600">Disc.</th>
                                <th class="py-3 px-4 text-left font-semibold text-gray-600">Total</th>
                                {{-- <th class="py-3 px-4 text-left font-semibold text-gray-600">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            <template x-for="produk in selectedTransaksi.produk">
                                <tr class="border-b">
                                    <td class="py-3 px-4" x-text="produk.nama_produk">LONG PANTS</td>
                                    <td class="py-3 px-4" x-text="produk.harga_produk">$999.29</td>
                                    <td class="py-3 px-4" x-text="produk.pivot.size_produk">XL</td>
                                    <td class="py-3 px-4" x-text="'x'+produk.pivot.quantity">x1</td>
                                    <td class="py-3 px-4" x-text="(produk.diskon[0]?.jumlah_diskon ?? 0) + '%'">5%</td>
                                    <td class="py-3 px-4" x-text="formatter.format(getTotal(produk))">$949.32</td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                    <!-- Order Summary -->
                    <div class="mt-4 text-sm">
                        <div class="flex justify-between py-1">
                            <span class="text-gray-600">Subtotal</span>
                            <span x-text="formatter.format(getSumBeforeDiscount())">$2,847.96</span>
                        </div>
                        <div class="flex justify-between py-1">
                            <span class="text-gray-600">Shipping</span>
                            <span x-text="formatter.format(selectedTransaksi.ongkir)">$5.50</span>
                        </div>
                        <div class="flex justify-between py-1">
                            <span class="text-gray-600">Discount</span>
                            <span class="text-red-600"
                                x-text="formatter.format(selectedTransaksi.total_harga-(getSumBeforeDiscount()+selectedTransaksi.ongkir))">-$150.32</span>
                        </div>
                        <div class="flex justify-between font-semibold py-1">
                            <span>Total</span>
                            <span x-text="formatter.format(selectedTransaksi.total_harga)">$2,647.32</span>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="//unpkg.com/alpinejs" defer></script>
    <script>
        const formatter = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
        })
        const transaksi = {!! json_encode($user->transaksi) !!}
        console.log(transaksi);
        document.addEventListener('alpine:init', () => {
            Alpine.data('transaksi_user', () => ({
                transaksi: transaksi,
                selectedTransaksi: null,
                viewTransaksi(id) {
                    if (this.selectedTransaksi) {
                        this.selectedTransaksi = null
                    } else {
                        this.selectedTransaksi = this.transaksi.filter(t => t.id_transaksi == id)[0]
                    }
                },
                getTotal(detail_transaksi) {
                    return detail_transaksi.harga_produk * detail_transaksi.pivot.quantity *
                        ((100 - (detail_transaksi.diskon[0]?.jumlah_diskon ?? 0)) / 100)
                },
                getSumBeforeDiscount() {
                    return this.selectedTransaksi.produk.reduce((acc, p) => {
                        return acc + (p.harga_produk * p.pivot.quantity)
                    }, 0)
                }
            }))
        })
    </script>
@endsection
