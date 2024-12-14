@extends('layouts.user')

@section('title')
    Products
@endsection
@section('content')
    <form class="products container mx-auto">
        <!-- Judul Produk -->
        <h1 class="text-center text-2xl mb-6">PRODUCTS</h1>

        <!-- Search Section -->
        <div class="flex items-center justify-center mb-6 w-80 max-w-full mx-auto">
            <div class="relative flex-grow">
                <input type="text" placeholder="Search by name" name="search" value="{{ $filters['search'] ?? '' }}"
                    autocomplete="off"
                    class="pl-3 pr-10 py-2 border-2 border-gray-300 rounded-l-lg md:rounded-lg focus-visible:outline-none focus-visible:ring-0 w-full flex-grow items-stretch" />
                <button class="p-2 absolute right-2 top-1/2 -translate-y-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5 text-gray-500">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                </button>
            </div>
            <button type="button"
                class="btn-show-filter px-3 py-2 text-sm bg-primary text-white rounded-r-lg hover:bg-blue-900 border-4 border-primary flex gap-2.5 items-center md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z" />
                </svg>
                Filter
            </button>
            {{-- <select class="p-2 bg-blue-500 text-white rounded-r-lg hover:bg-blue-600 border border-blue-500">
                <option>New</option>
                <option>Best Seller</option>
            </select> --}}
            {{-- <button class="px-6 py-2 bg-primary text-white rounded-r-lg hover:bg-blue-900 border-2 border-primary">Search &
                Filter</button> --}}
        </div>

        <div class="flex h-auto  flex-col md:flex-row gap-12 px-4 lg:px-8">
            <!-- Filter Section (Di kiri) -->
            <div
                class="form-filter md:w-[25%] min-w-[240px] mb-6 h-auto fixed md:static top-0 left-0 right-0 bg-white z-50 md:z-0 py-4 md:m-0 px-6 md:px-0 max-h-screen md:max-h-none overflow-y-auto">
                <div class="flex items-center gap-4 mb-6 justify-between w-full">
                    <h2 class="text-lg">Filters</h2>
                    <button
                        class="px-4 py-1.5 text-sm bg-primary text-white rounded-lg hover:bg-blue-900 border-2 border-primary flex gap-2.5 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z" />
                        </svg>
                        Filter
                    </button>
                </div>
                <!-- Size Filter -->
                <div class="mb-6 size-filter">
                    <h3 class="mb-2">Size</h3>
                    <div class="flex space-x-2 size-filter">
                        @foreach ($sizes as $size)
                            <button type="button" data-size="{{ $size }}" name="size"
                                @class([
                                    'h-8 w-8 border-2 flex items-center justify-center',
                                    'active' => $filters['sizes']->contains($size),
                                ])>{{ Str::upper($size) }}</button>
                        @endforeach
                        {{-- <button type="button" data-size="s" name="size" value="s"
                            class="h-8 w-8 border-2 flex items-center justify-center">S</button>
                        <button type="button" data-size="m"
                            class="h-8 w-8 border-2 flex items-center justify-center">M</button>
                        <button type="button" data-size="l"
                            class="h-8 w-8 border-2 flex items-center justify-center">L</button>
                        <button type="button" data-size="xl"
                            class="h-8 w-8 border-2 flex items-center justify-center">XL</button>
                        <button type="button" data-size="2x"
                            class="h-8 w-8 border-2 flex items-center justify-center">2X</button> --}}
                    </div>
                    <input type="hidden" name="sizes">
                </div>

                <!-- Category Filter -->
                <div @class([
                    'category-filter',
                    'show' => $filters['category']->count() > 0 || $type,
                ])>
                    <div class="py-0 cursor-pointer button">
                        <h3 class="flex items-center justify-between ">
                            <span>Category</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </h3>
                        <hr class="border-t-2 border-dashed border-gray-500 my-2">
                    </div>
                    <div class="mb-3 overflow-hidden panel">
                        <div class="space-y-1 text-gray-500">
                            <div class="flex items-center gap-3">
                                <input type="checkbox" name="type" id="type-new"
                                    value="new"{{ $type == 'new' ? ' checked' : '' }}>
                                <label for="type-new">New</label>
                            </div>
                            <div class="flex items-center gap-3">
                                <input type="checkbox" name="type" id="type-best"
                                    value="best"{{ $type == 'best' ? ' checked' : '' }}>
                                <label for="type-best">Best Seller</label>
                            </div>
                            <hr class="my-1">
                            @foreach ($categories as $key => $category)
                                <div class="flex items-center gap-3">
                                    <input type="checkbox" name="category[]" id="category-{{ $key }}"
                                        value="{{ $key }}"{{ $filters['category']->contains($key) ? ' checked' : '' }}>
                                    <label for="category-{{ $key }}">{{ $category }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Colors Filter -->
                {{-- <div @class(['colors-filter', 'show' => $filters['colors']->count() > 0])>
                    <div class="py-0 cursor-pointer button">
                        <h3 class="flex items-center justify-between">
                            <span>Colors</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5 transition">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </h3>
                        <hr class="border-t-2 border-dashed border-gray-500 my-2">
                    </div>
                    <div class="mb-3 overflow-hidden panel">
                        <div class="space-y-1 text-gray-500">
                            @foreach ($colors as $color)
                                <div class="flex items-center gap-3">
                                    <input type="checkbox" name="colors[]" id="color-{{ $color }}"
                                        value="{{ $color }}"{{ $filters['colors']->contains($color) ? ' checked' : '' }}>
                                    <label for="color-{{ $color }}">{{ ucwords($color) }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div> --}}
                <!-- Price Range Filter -->
                <div @class([
                    'prices-filter',
                    'show' => $filters['min_price'] || $filters['max_price'],
                ])>
                    <div class="max-h-full button cursor-pointer">
                        <h3 class="flex items-center justify-between">
                            <span class="py-0 my-0 mb-0">Price Range</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </h3>
                        <hr class="border-t-2 border-dashed border-gray-500 my-2">
                    </div>
                    <div class="mb-3 overflow-hidden panel">
                        {{-- <div class="space-y-1 text-gray-500">
                            @foreach ($price_range as $key => $price)
                                <div class="flex items-center gap-3">
                                    <input type="checkbox" name="prices[]" id="price-{{ $key }}"
                                        value="{{ $key }}"{{ $filters['prices']->contains($key) ? ' checked' : '' }}>
                                    <label for="price-{{ $key }}">{{ $price }}</label>
                                </div>
                            @endforeach
                        </div> --}}
                        <div class="relative text-gray-600">
                            <div class="absolute left-3 top-1/2 -translate-y-1/2">Rp</div>
                            <input type="number" name="min_price" value="{{ $filters['min_price'] }}"
                                class="w-full pl-10 pr-3 py-1.5 border rounded-md focus-visible:outline-none focus-visible:ring-0 focus:border-gray-500"
                                placeholder="Minimum Price">
                        </div>
                        <div class="relative text-gray-600 mt-2">
                            <div class="absolute left-3 top-1/2 -translate-y-1/2">Rp</div>
                            <input type="number" name="max_price" value="{{ $filters['max_price'] }}"
                                class="w-full pl-10 pr-3 py-1.5 border rounded-md focus-visible:outline-none focus-visible:ring-0 focus:border-gray-500"
                                placeholder="Maximum Price">
                        </div>
                    </div>
                </div>

                <!-- Ratings Filter -->
                {{-- <div class="py-2">
                    <h3 class="flex items-center justify-between">
                        <span>Ratings</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </h3>
                    <hr class="border-t-2 border-dashed border-gray-500 my-2">
                </div> --}}
            </div>

            <div class="md:hidden fixed inset-0 bg-black/30 z-40 overlay"></div>

            <!-- Main Content Section (Di kanan) -->
            <div class="grid grid-cols-8 gap-5 flex-grow">
                @foreach ($products as $product)
                    <div class="col-span-8 sm:col-span-4 lg:col-span-2 ">
                        <a href="/product/{{ $product->id_produk }}">
                            <img src="{{ $product->gambar_produk }}" alt="Baju" class="object-cover h-80 w-full">
                        </a>
                        <div class="text-center mt-2.5">
                            <a href="/product/{{ $product->id_produk }}"
                                class="font-semibold hover:underline">{{ $product->nama_produk }}</a>
                            <div class="flex justify-center items-center mt-1">
                                <span
                                    class="mx-2 text-sm">{{ Number::currency($product->harga_produk, 'IDR', 'id') }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        </div>

        </div>
        </div>
    @endsection

    @section('javascript')
        <script>
            const buttons = document.querySelectorAll('.size-filter button')
            const filter_data = {
                size: {!! json_encode($filters['sizes']) !!} ?? [],
                categories: {!! json_encode($filters['sizes']) !!} ?? [],
                // price_range: [],
                show_colors: false,
                show_category: ({!! json_encode($filters['category']) !!} ?? []).length > 0,
                // set size(s) {
                //     buttons.forEach(el => el.classList.remove('active'))
                //     document.querySelector(`.size-filter button[data-size="${s}"]`).classList.add('active')
                //     this.size_data = s
                // }
            }
            const filter_handler = {
                set(target, prop, receiver) {
                    console.log(prop, receiver);
                    if (prop == 'size') {
                        buttons.forEach(el => {
                            const is_active = target.size.indexOf(el.getAttribute('data-size')) != -1
                            el.classList.toggle('active', is_active)
                        })
                    } else if (prop == 'show_colors')
                        document.querySelector('.colors-filter').classList.toggle('show', receiver)
                    else if (prop == 'show_price_range')
                        document.querySelector('.prices-filter').classList.toggle('show', receiver)
                    else if (prop == 'show_category')
                        document.querySelector('.category-filter').classList.toggle('show', receiver)
                    return Reflect.set(target, prop, receiver)
                }
            }
            const filters = new Proxy(filter_data, filter_handler)

            buttons.forEach(el => {
                el.addEventListener('click', event => {
                    const size = el.getAttribute('data-size');
                    const index = filters.size.indexOf(size)
                    if (index == -1)
                        filters.size.push(size)
                    else
                        filters.size.splice(index, 1)
                    filters.size = filters.size

                    // filters.size = size
                })
            })
            // document.querySelector('.colors-filter .button').addEventListener('click', () => filters.show_colors = !filters
            //     .show_colors)
            document.querySelector('.prices-filter .button').addEventListener('click', () => filters.show_price_range = !filters
                .show_price_range)
            document.querySelector('.category-filter .button').addEventListener('click', () => filters.show_category = !filters
                .show_category)
            const typeInputs = document.querySelectorAll('input[name=type]')
            typeInputs.forEach(input => input.addEventListener('input', function(event) {
                if (input.checked) {
                    typeInputs.forEach(i => i.checked = false)
                    input.checked = true
                }
            }))

            document.querySelector('form.products').addEventListener('submit', event => {
                // event.preventDefault()
                document.querySelector('.size-filter input').value = filter_data.size.join('_')
                // const categories_input = document.querySelectorAll('.category-filter input[name=category]')
                // const categories = [...categories_input].map(el => [el.value, el.checked]).filter(c => c[1]).map(c => c[
                //     0])
                // console.log(categories);
            })
            const formFilter = document.querySelector('.form-filter')
            const overlay = document.querySelector('.overlay')
            document.querySelector('.btn-show-filter').addEventListener('click', event => {
                overlay.classList.add('show')
                formFilter.classList.add('show')
            })
            overlay.addEventListener('click', () => {
                overlay.classList.remove('show')
                formFilter.classList.remove('show')
            })
        </script>
    @endsection
