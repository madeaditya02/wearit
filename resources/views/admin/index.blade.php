@extends('layouts.admin')

@section('content')
    <div class="grid grid-cols-12 gap-5">
        <div class="flex items-center shadow-lg px-8 py-4 rounded-lg col-span-12 gap-5">
            <div class="flex-grow">
                <h1 class="text-3xl font-semibold">Total Sales</h1>
                <h1 class="text-4xl mt-4 font-semibold text-green-600">Rp {{ Number::abbreviate($totalSales, 2) }}</h1>
            </div>
            <div class="w-9/12">
                <canvas id="myChart"></canvas>
            </div>
        </div>
        <div class="col-span-12 shadow-lg p-5">
            <div class="flex justify-between mb-5">
                <h2 class="font-semibold">Last Transaction</h2>
                <a href="#" class="text-sm text-blue-600">View All</a>
            </div>
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Customer
                            </th>
                            <th scope="col" class="px-6 py-3">
                                total
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lastTransactions as $transaksi)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4">
                                    #{{ $transaksi->id_transaksi }}
                                </td>
                                <td scope="row" class="px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $transaksi->waktu_transaksi->format('j F Y') }}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="/admin/customer/{{ $transaksi->user->id_user }}"
                                        class="text-blue-600">{{ $transaksi->user->fullName }}</a>
                                </td>
                                <td class="px-6 py-4">
                                    {{ Number::currency($transaksi->total_harga, 'IDR', 'id') }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');

        const labels = {!! json_encode($dataLabels) !!}
        const sales = {!! json_encode($dataSales) !!}
        console.log(labels, sales);

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Profit',
                    data: sales,
                    // borderWidth: 1,
                    borderColor: '#3751FE',
                    fill: false,
                    cubicInterpolationMode: 'monotone',
                    tension: 0.4
                }]
            },
            options: {
                scales: {
                    x: {
                        display: true,
                        title: {
                            display: true
                        },
                        grid: {
                            display: false
                        }
                    },
                    y: {
                        beginAtZero: true,
                        display: false,
                        grid: {
                            display: false
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>
@endsection
