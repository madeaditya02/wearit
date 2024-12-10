@extends('layouts.user')

@section('title', 'New Address')

@section('content')
  <!-- Elemen Blur -->
  <div class="fixed inset-0 bg-gray-300 bg-opacity-10 backdrop-blur-sm z-40"></div>
  
  <!-- background address -->
  <div class="flex justify-between mt-20 mb-8 ml-20 mr-20 gap-6">
    <!-- Address Section -->
    <div class="w-[65%] space-y-6">
        <!-- alamat pertama -->
        <div class="flex items-start gap-6">
            <input type="checkbox" class="w-5 h-5 border rounded-full cursor-pointer border-blue-800 checked:bg-blue-800 checked:border-blue-800">
            <div class="flex flex-col gap-4">
                <span class="font-poppins text-2xl capitalize">Andi Sutedjo</span>
                <span class="font-poppins text-lg capitalize">Jalan Giri Kencono 29, Badung, 80361</span>
                <span class="font-poppins text-lg capitalize">Contact - 0815555444</span>
            </div>
            <div class="ml-auto flex gap-4 text-lg font-poppins">
                <span class="cursor-pointer hover:text-blue-800">Edit</span>
                <span class="text-gray-400">|</span>
                <span class="cursor-pointer text-red-500 hover:text-red-500">Remove</span>
            </div>
        </div>
        <!-- alamat kedua -->
        <div class="flex items-start gap-6">
            <input type="checkbox" class="w-5 h-5 border rounded-full cursor-pointer border-blue-800 checked:bg-blue-800 checked:border-blue-800">
            <div class="flex flex-col gap-4">
                <span class="font-poppins text-2xl capitalize">Bela Tobing</span>
                <span class="font-poppins text-lg capitalize">Jalan Raya Unud, Badung, 80361</span>
                <span class="font-poppins text-lg capitalize">Contact - 0815555444</span>
            </div>
            <div class="ml-auto flex gap-4 text-lg font-poppins">
                <span class="cursor-pointer hover:text-blue-800">Edit</span>
                <span class="text-gray-400">|</span>
                <span class="cursor-pointer text-red-500 hover:text-red-500">Remove</span>
            </div>
        </div>
        <!-- alamat ketiga -->
        <div class="flex items-start gap-6">
            <input type="checkbox" class="w-5 h-5 border rounded-full cursor-pointer border-blue-800 checked:bg-blue-800 checked:border-blue-800">
            <div class="flex flex-col gap-4">
                <span class="font-poppins text-2xl capitalize">Ananda Cahya</span>
                <span class="font-poppins text-lg capitalize">Jalan Ngurah Rai, Badung, 80361</span>
                <span class="font-poppins text-lg capitalize">Contact - 0815555444</span>
            </div>
            <div class="ml-auto flex gap-4 text-lg font-poppins">
                <span class="cursor-pointer hover:text-blue-800">Edit</span>
                <span class="text-gray-400">|</span>
                <span class="cursor-pointer text-red-500 hover:text-red-500">Remove</span>
            </div>
        </div>
        <div class="w-full max-w-[900px] h-px bg-gray-300"></div>

        <!-- icon + add new address -->
        <div class="w-[400px] h-[200px] flex justify-start gap-3">
            <!-- Plus Icon Button -->
            <button class="w-8 h-8 flex items-center justify-center bg-blue-800 text-white text-3xl font-bold rounded-full hover:bg-blue-700 focus:outline-none">
                <span>+</span>
            </button>
            <!-- Text 'Add New Address' -->
            <span class="text-lg text-blue-800">Add New Address</span>
        </div>

        <!-- Back to Cart -->
        <div class="flex justify-center">
            <button class="font-poppins font-semibold text-2xl text-blue-900 capitalize">Back To Cart</button>
        </div>
    </div>

    <!-- Order Summary Section -->
    <div class="w-[376px] h-[370px] border-2 border-gray-300 p-6 space-y-6">
        <p class="text-xl font-semibold font-poppins text-center capitalize">Order Summary</p>
        <div class="flex justify-between text-lg font-medium font-poppins">
            <p>Price</p>
            <p>Rp. 150.000,00</p>
        </div>
        <div class="flex justify-between text-lg font-medium font-poppins">
            <p>Shipping</p>
            <p>-</p>
        </div>
        <div class="flex justify-between text-lg font-medium font-poppins">
            <p>Quantity</p>
            <p>1 Item</p>
        </div>
        <div class="flex justify-between text-lg font-medium font-poppins border-t pt-4">
            <p>Total</p>
            <p>Rp. 150.000,00</p>
        </div>
        <button class="w-full py-2 bg-blue-900 text-white text-lg font-semibold rounded-lg">Continue To Shipping</button>
    </div>
</div>
  
  <!-- Elemen Pop Out (Konten Utama) -->
  <div class="relative z-50 max-w-5xl mx-auto bg-white border border-gray-200 rounded-lg shadow p-8">
    <h1 class="text-2xl font-bold font-poppins text-center text-blue-700 mb-8">New Address</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <!-- Fullname -->
      <div>
        <label for="fullname" class="block text-sm font-medium text-gray-700 mb-1">Fullname</label>
        <input
          id="fullname"
          type="text"
          placeholder="Enter fullname"
          class="block w-full h-12 px-4 text-gray-700 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
        />
      </div>
      <!-- Phone Number -->
      <div>
        <label for="phone-number" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
        <input
          id="phone-number"
          type="text"
          placeholder="Enter phone number"
          class="block w-full h-12 px-4 text-gray-700 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
        />
      </div>
      <!-- Address -->
      <div>
        <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Address</label>
        <input
          id="address"
          type="text"
          placeholder="Enter address"
          class="block w-full h-12 px-4 text-gray-700 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
        />
      </div>
      <!-- Province -->
      <div>
        <label for="province" class="block text-sm font-medium text-gray-700 mb-1">Province</label>
        <select
          id="province"
          class="block w-full h-12 px-4 text-gray-700 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
        >
          <option>Select province</option>
          <option>Option 1</option>
          <option>Option 2</option>
        </select>
      </div>
      <!-- City -->
      <div>
        <label for="city" class="block text-sm font-medium text-gray-700 mb-1">City</label>
        <select
          id="city"
          class="block w-full h-12 px-4 text-gray-700 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
        >
          <option>Select city</option>
          <option>Option 1</option>
          <option>Option 2</option>
        </select>
      </div>
      <!-- District -->
      <div>
        <label for="district" class="block text-sm font-medium text-gray-700 mb-1">District</label>
        <select
          id="district"
          class="block w-full h-12 px-4 text-gray-700 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
        >
          <option>Select district</option>
          <option>Option 1</option>
          <option>Option 2</option>
        </select>
      </div>
      <!-- Postal Code -->
      <div>
        <label for="postal-code" class="block text-sm font-medium text-gray-700 mb-1">Postal Code</label>
        <input
          id="postal-code"
          type="text"
          placeholder="Enter postal code"
          class="block w-full h-12 px-4 text-gray-700 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
        />
      </div>
      <!-- Add Detail -->
      <div>
        <label for="add-detail" class="block text-sm font-medium text-gray-700 mb-1">Add Detail</label>
        <textarea
          id="add-detail"
          placeholder="Enter additional details"
          class="block w-full h-24 px-4 text-gray-700 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
        ></textarea>
      </div>
    </div>
    <!-- Confirm Button -->
    <div class="mt-8 flex justify-center">
      <button
        type="submit"
        class="px-6 py-3 text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300">Confirm
      </button>
    </div>
  </div>

@endsection