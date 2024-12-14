@extends('layouts.admin')

@section('title')
    Add Product
@endsection

@section('content')
    <form action="/addProductSubmit" method="POST" enctype="multipart/form-data" class="flex">
        @csrf
        <div class="relative w-[50%] h-full border rounded-lg border-[#134563]">
            <input type="file" name="gambar_produk" required class=" w-full h-full px-20 flex flex-col place-items-center opacity-0 absolute inset-0">
            <div class=" flex flex-col place-items-center justify-items-center py-32">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" id="camera" class="h-28 w-28">
                    <g fill="#134563">
                        <path d="M51.5 51.5h-39c-2.3 0-4.2-1.9-4.2-4.2V22.2c0-2.3 1.9-4.2 4.2-4.2h8.4c.2 0 .7-.3.8-.5l1.5-3.1c.6-1.1 2-2 3.3-2h11.1c1.3 0 2.7.9 3.3 2l1.5 3.1c.1.2.5.5.8.5h8.4c2.3 0 4.2 1.9 4.2 4.2v25.1c-.1 2.3-2 4.2-4.3 4.2zm-39-30.6c-.8 0-1.4.6-1.4 1.4v25.1c0 .8.6 1.4 1.4 1.4h39c.8 0 1.4-.6 1.4-1.4V22.3c0-.8-.6-1.4-1.4-1.4h-8.4c-1.3 0-2.7-.9-3.3-2l-1.5-3.1c-.1-.2-.5-.5-.8-.5H26.4c-.2 0-.7.3-.8.5l-1.5 3.1c-.6 1.1-2 2-3.3 2h-8.3z"></path>
                        <path d="M32 45.9c-6.9 0-12.5-5.6-12.5-12.5S25.1 20.9 32 20.9s12.5 5.6 12.5 12.5S38.9 45.9 32 45.9zm0-22.3c-5.4 0-9.8 4.4-9.8 9.8s4.4 9.8 9.8 9.8 9.8-4.4 9.8-9.8-4.4-9.8-9.8-9.8zm15.3 0c0 .8-.6 1.4-1.4 1.4s-1.4-.6-1.4-1.4.6-1.4 1.4-1.4 1.4.7 1.4 1.4M13.9 15.3h5.6v1.4h-5.6z"></path>
                        <path d="M32 27.8v-1.4c-3.8 0-7 3.1-7 7h1.4c0-3.1 2.5-5.6 5.6-5.6"></path>
                    </g>
                </svg>
                <label for="image" class="mt-2 cursor-pointer text-[#134563]">Add Image</label>
            </div>
        </div>
        <div class="w-full flex-row ml-7">
            <div class="flex flex-col">
                <label for="nama_produk">Product name</label>
                <input type="text" name="nama_produk" class="mt-2 border 1px py-2 px-3 rounded-md"required>
            </div>
            <div class="flex flex-col mt-3">
                <label for="deskripsi">Description</label>
                <textarea name="deskripsi" id="deskripsi" class="mt-2 border 1px py-2 px-3 rounded-md h-20" required></textarea>
            </div>
            <div class="flex flex-col mt-3">
                <label for="size">Size</label>
                <div class="mt-2 flex justify-normal gap-3">
                    <div class="place-items-center py-3 px-3 w-12 h-12 border border-slate-200 rounded-sm bg-white shadow-md hover:bg-slate-200 hover:border-slate-200">
                        <h1 class="text-sm text-gray-700">XS</h1>
                    </div>
                    <div class="place-items-center py-3 px-3 w-12 h-12 border border-slate-200 rounded-sm bg-white shadow-md hover:bg-slate-200 hover:border-slate-200">
                        <h1 class="text-sm text-gray-700">S</h1>
                    </div>
                    <div class="place-items-center py-3 px-3 w-12 h-12 border border-slate-200 rounded-sm bg-white shadow-md hover:bg-slate-200 hover:border-slate-200">
                        <h1 class="text-sm text-gray-700">M</h1>
                    </div>
                    <div class="place-items-center py-3 px-3 w-12 h-12 border border-slate-200 rounded-sm bg-white shadow-md hover:bg-slate-200 hover:border-slate-200">
                        <h1 class="text-sm text-gray-700">L</h1>
                    </div>
                    <div class="place-items-center py-3 px-3 w-12 h-12 border border-slate-200 rounded-sm bg-white shadow-md hover:bg-slate-200 hover:border-slate-200">
                        <h1 class="text-sm text-gray-700">XL</h1>
                    </div>
                    <div class="place-items-center py-3 px-3 w-12 h-12 border border-slate-200 rounded-sm bg-white shadow-md hover:bg-slate-200 hover:border-slate-200">
                        <h1 class="text-sm text-gray-700">2XL</h1>
                    </div>
                </div>
            </div>
            <div class="flex flex-col mt-3">
                <label for="harga_produk">Price</label>
                <input type="number" name="harga_produk" class="mt-2 border 1px py-2 px-3 rounded-md" required>
            </div>
            <div class="flex flex-col mt-3">
                <label for="tersedia">Total Items</label>
                <input type="number" name="tersedia" class="mt-2 border 1px py-2 px-3 rounded-md" required>
            </div>
            <div>
                <button type="submit" class="mt-5 font-semibold bg-blue-700 text-white py-2 px-3 rounded-md w-full">Add Product</button>
            </div>
        </div>
    </form>
@endsection