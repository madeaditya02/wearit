@extends('layouts.admin')

@section('title', 'Edit Discount')

@section('content')
    <form method="POST" action="/admin/discount/{{ $diskon->id_diskon }}" class="grid grid-cols-2 gap-x-12 gap-y-8">
        @csrf
        @method('PUT')
        <div>
            <label for="id_produk">ID Produk</label>
            <input type="number" id="id_produk" name="id_produk" placeholder="ID Produk" disabled
                value="{{ $diskon->id_produk }}"
                class="block w-full mt-2 px-3 py-2 rounded-lg border focus-visible:outline-none focus:border-gray-600">
            @error('id_produk')
                <p class="text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="jumlah_diskon">Angka Diskon (%)</label>
            <input type="number" min="0" id="jumlah_diskon" name="jumlah_diskon" placeholder="Angka Diskon"
                value="{{ $diskon->jumlah_diskon }}"
                class="block w-full mt-2 px-3 py-2 rounded-lg border focus-visible:outline-none focus:border-gray-600">
            @error('jumlah_diskon')
                <p class="text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="waktu_mulai">Waktu Mulai</label>
            <input type="datetime-local" id="waktu_mulai" name="waktu_mulai" placeholder="Waktu Mulai"
                value="{{ $diskon->waktu_mulai }}"
                class="block w-full mt-2 px-3 py-2 rounded-lg border focus-visible:outline-none focus:border-gray-600">
            @error('waktu_mulai')
                <p class="text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="waktu_akhir">Waktu Akhir</label>
            <input type="datetime-local" id="waktu_akhir" name="waktu_akhir" placeholder="Waktu Akhir"
                value="{{ $diskon->waktu_akhir }}"
                class="block w-full mt-2 px-3 py-2 rounded-lg border focus-visible:outline-none focus:border-gray-600">
            @error('waktu_akhir')
                <p class="text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-span-2">
            <button class="px-3 py-2 bg-primary-light text-white rounded-lg hover:bg-blue-700">Edit Discount</button>
        </div>
    </form>
@endsection
