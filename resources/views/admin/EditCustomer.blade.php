@extends('layouts.admin')

@section('title', 'Edit Customer')

@section('content')
    <form method="POST" enctype="multipart/form-data" class="grid grid-cols-2 gap-x-12 gap-y-8">
        @csrf
        <input type="hidden" value="{{ $user->id_user }}" name="id">
        <div>
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name" placeholder="First Name" value="{{ $user->first_name }}"
                class="block w-full mt-2 px-3 py-2 rounded-lg border focus-visible:outline-none focus:border-gray-600">
            @error('first_name')
                <p class="text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name" placeholder="Last Name" value="{{ $user->last_name }}"
                class="block w-full mt-2 px-3 py-2 rounded-lg border focus-visible:outline-none focus:border-gray-600">
            @error('last_name')
                <p class="text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Email" value="{{ $user->email }}"
                class="block w-full mt-2 px-3 py-2 rounded-lg border focus-visible:outline-none focus:border-gray-600">
            @error('email')
                <p class="text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="phone_number">Phone Number</label>
            <input type="text" id="phone_number" name="phone_number" placeholder="Phone Number"
                value="{{ $user->phone_number }}"
                class="block w-full mt-2 px-3 py-2 rounded-lg border focus-visible:outline-none focus:border-gray-600">
            @error('phone_number')
                <p class="text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="pictureFile">Profile Picture</label>
            <a href="#" class="relative block w-fit mt-4 photo_profile">
                <img src="{{ $user->photo_profil }}" alt="" class="w-32 h-32 rounded-full shadow-xl img-element">
                <button class="px-2 py-1.5 rounded-md bg-white border absolute bottom-0 left-0">Edit</button>
            </a>
            <input type="file" name="pictureFile" id="pictureFile" class="hidden" accept="image/*">
            @error('pictureFile')
                <p class="text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-span-2">
            <button class="px-3 py-2 bg-primary-light text-white rounded-lg hover:bg-blue-700">Save Change</button>
        </div>
    </form>
@endsection
