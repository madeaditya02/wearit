@extends('layouts.admin')

@section('title')
    Edit Product
@endsection

@section('content')
    <form method="POST" enctype="multipart/form-data" class="flex" x-data='product'>
        @csrf
        <div class="w-[50%] h-72 border rounded-lg border-[#134563] box-gambar">
            <input type="file" name="gambar_produk" id="gambar_produk" accept="image/*"
                class="w-full h-full px-20 flex-col place-items-center hidden">
            <img src="{{ $produk->gambar_produk }}" alt="" class="w-full h-full object-cover img_produk rounded-lg">
        </div>
        <div class="w-full flex-row ml-7">
            <div class="flex flex-col">
                <label for="nama_produk">Product name</label>
                <input type="text" name="nama_produk" class="mt-2 border 1px py-2 px-3 rounded-md"
                    value="{{ $produk->nama_produk }}" required>
            </div>
            <div class="flex flex-col mt-3">
                <label for="deskripsi">Description</label>
                <textarea name="deskripsi" id="deskripsi" class="mt-2 border 1px py-2 px-3 rounded-md h-20" required>{{ $produk->deskripsi_produk }}</textarea>
            </div>
            <div class="flex flex-col mt-3">
                <label for="deskripsi">Category</label>
                <select name="category" id="category" class="px-3 py-2 border rounded-lg mt-2">
                    <option value="" selected disabled>Choose type of product</option>
                    <option value="dresses" @selected($produk->jenis_produk == 'dresses')>Dresses</option>
                    <option value="skirts" @selected($produk->jenis_produk == 'skirts')>Skirts</option>
                    <option value="shorts" @selected($produk->jenis_produk == 'shorts')>Shorts</option>
                    <option value="basics" @selected($produk->jenis_produk == 'basics')>Basics</option>
                    <option value="shirts-blouses" @selected($produk->jenis_produk == 'shirts-blouses')>Shirts Blouses</option>
                    <option value="outerwear" @selected($produk->jenis_produk == 'outerwear')>Outerwear</option>
                    <option value="knitwear" @selected($produk->jenis_produk == 'knitwear')>Knitwear</option>
                </select>
                @error('category')
                    <div class="mt-2 text-red-700">{{ $message }}</div>
                @enderror
            </div>
            <div class="flex flex-col mt-3">
                <label for="size">Size</label>
                <div class="mt-2 flex justify-normal gap-3">
                    <div class="place-items-center cursor-pointer py-3 px-3 w-12 h-12 border rounded-sm"
                        :class="sizes.indexOf('xs') != -1 ? 'border-primary bg-primary text-white' :
                            'border-slate-200 bg-white shadow-md hover:bg-slate-200 hover:border-slate-200 text-gray-700'"
                        x-on:click="setSize('xs')">
                        <h1 class="text-sm">XS</h1>
                    </div>
                    <div class="place-items-center cursor-pointer py-3 px-3 w-12 h-12 border rounded-sm"
                        :class="sizes.indexOf('s') != -1 ? 'border-primary bg-primary text-white' :
                            'border-slate-200 bg-white shadow-md hover:bg-slate-200 hover:border-slate-200 text-gray-700'"
                        x-on:click="setSize('s')">
                        <h1 class="text-sm">S</h1>
                    </div>
                    <div class="place-items-center cursor-pointer py-3 px-3 w-12 h-12 border rounded-sm"
                        :class="sizes.indexOf('m') != -1 ? 'border-primary bg-primary text-white' :
                            'border-slate-200 bg-white shadow-md hover:bg-slate-200 hover:border-slate-200 text-gray-700'"
                        x-on:click="setSize('m')">
                        <h1 class="text-sm">M</h1>
                    </div>
                    <div class="place-items-center cursor-pointer py-3 px-3 w-12 h-12 border rounded-sm"
                        :class="sizes.indexOf('l') != -1 ? 'border-primary bg-primary text-white' :
                            'border-slate-200 bg-white shadow-md hover:bg-slate-200 hover:border-slate-200 text-gray-700'"
                        x-on:click="setSize('l')">
                        <h1 class="text-sm">L</h1>
                    </div>
                    <div class="place-items-center cursor-pointer py-3 px-3 w-12 h-12 border rounded-sm"
                        :class="sizes.indexOf('xl') != -1 ? 'border-primary bg-primary text-white' :
                            'border-slate-200 bg-white shadow-md hover:bg-slate-200 hover:border-slate-200 text-gray-700'"
                        x-on:click="setSize('xl')">
                        <h1 class="text-sm">XL</h1>
                    </div>
                    <div class="place-items-center cursor-pointer py-3 px-3 w-12 h-12 border rounded-sm"
                        :class="sizes.indexOf('2x') != -1 ? 'border-primary bg-primary text-white' :
                            'border-slate-200 bg-white shadow-md hover:bg-slate-200 hover:border-slate-200 text-gray-700'"
                        x-on:click="setSize('2x')">
                        <h1 class="text-sm">2XL</h1>
                    </div>
                </div>
                <template x-for="s in sizes">
                    <div class="flex items-center gap-3 mt-3">
                        <input type="text" name="size[]" :value="s.toUpperCase()"
                            class="px-3 py-2 w-12 bg-white border rounded-lg" readonly>
                        <input type="text" name="quantity[]" :value="sizes_data[s.toUpperCase()]" placeholder="Quantity"
                            class="px-3 py-2 block w-72 max-w-full bg-white border rounded-lg">
                    </div>
                </template>
                <input type="hidden" name="ukuran" :value="size_str">
            </div>
            <div class="flex flex-col mt-3">
                <label for="harga_produk">Price</label>
                <input type="number" name="harga_produk" class="mt-2 border 1px py-2 px-3 rounded-md"
                    value="{{ $produk->harga_produk }}" required>
            </div>
            {{-- <div class="flex flex-col mt-3">
                <label for="tersedia">Total Items</label>
                <input type="number" name="tersedia" class="mt-2 border 1px py-2 px-3 rounded-md"
                    value="{{}}" required>
            </div> --}}
            <div>
                <button type="submit" class="mt-5 font-semibold bg-blue-700 text-white py-2 px-3 rounded-md w-full">Edit
                    Product</button>
            </div>
        </div>
    </form>
@endsection

@section('javascript')
    <script src="//unpkg.com/alpinejs" defer></script>
    <script>
        document.querySelector('.box-gambar').addEventListener('click', () => {
            document.querySelector('#gambar_produk').click()
        })
        document.querySelector('#gambar_produk').addEventListener('change', (event) => {
            const [file] = event.target.files
            document.querySelector('.box-gambar img').setAttribute('src', URL.createObjectURL(file))
            document.querySelector('.box-gambar img').classList.remove('hidden')
            document.querySelector('.box-gambar .box').classList.add('hidden')
        })

        const sizes_data = {!! json_encode($ukuran) !!}
        const sizes = Object.keys(sizes_data).map(s => s.toLowerCase())

        document.addEventListener('alpine:init', () => {
            Alpine.data('product', () => ({
                sizes_data: sizes_data ?? {},
                sizes: sizes ?? [],
                size_str: sizes.join('_').toLowerCase() ?? '',
                setSize(size) {
                    var index = this.sizes.indexOf(size);
                    if (index === -1) {
                        this.sizes.push(size);
                    } else {
                        this.sizes.splice(index, 1);
                    }
                    console.log(this.sizes);

                    this.size_str = this.sizes.join('_')
                }
            }))
        })
    </script>
@endsection
