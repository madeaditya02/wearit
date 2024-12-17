@extends('layouts.user')

@section('title')
    Profile
@endsection

@section('content')
    <div class="flex md:px-14 px-6 py-10 md:flex-row flex-col">
        <div class="md:min-w-[28%] md:w-fit w-full flex-row">
            <div class="flex w-full h-20 border border-primary rounded-md items-center px-4">
                <img src="{{ $user->photo_profil }}" alt="WearIt" class="w-10 h-10 rounded-full">
                <div class="ml-2">
                    <div>
                        <h1 class="font-semibold md:text-base text-gray-700 pl-3">{{ $user->fullName }}</h1>
                    </div>
                    <div>
                        <h1 class="font-semibold text-xs md:text-base text-gray-700 pl-3">{{ $user->email }}</h1>
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a class="flex items-center gap-5 border border-b-0 px-4 md:py-4 py-3 border-primary rounded-t-md bg-primary"
                    href="/profile">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-8 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                    <h1 class="font-semibold text-white">Profile</h1>
                </a>
                <a class="group flex items-center gap-5 border border-b-0 px-4 md:py-4 py-3 border-primary  hover:bg-primary hover:border-primary hover:text-white"
                    href="/history">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="group-hover:text-white size-8 text-primary">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                    </svg>
                    <h1 class="font-semibold text-primary group-hover:text-white">Order History</h1>
                </a>
                <a class="flex items-center gap-5 border border-b-0 px-4 md:py-4 py-3 border-primary bg-white text-primary hover:bg-primary hover:text-white"
                    href="/profile/address">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                    </svg>
                    <h1 class="font-semibold">Addresses</h1>
                </a>
                <a class="group flex items-center gap-5 border border-b-0 px-4 md:py-4 py-3 border-primary  hover:bg-primary hover:border-primary"
                    href="/favorites">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="group-hover:text-white size-8 text-primary">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                    </svg>
                    <h1 class="font-semibold text-primary group-hover:text-white">Favourite</h1>
                </a>
                <a class="group flex items-center gap-5 border border-b-0 px-4 md:py-4 py-3 border-primary  hover:bg-primary hover:border-primary"
                    href="/accsetting">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="group-hover:text-white size-8 text-primary">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    <h1 class="font-semibold text-primary group-hover:text-white">Account Setting</h1>
                </a>
                <button
                    class="confirmLogout w-full group flex items-center gap-5 border px-4 md:py-4 py-3 border-primary rounded-b-md  hover:bg-primary hover:border-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="group-hover:text-white size-8 text-primary">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                    </svg>
                    <h1 class="font-semibold text-primary group-hover:text-white">Log Out</h1>
                </button>
            </div>
        </div>
        <form method="POST" enctype="multipart/form-data" class="md:w-[72%] w-full md:pl-16 md:mt-0 mt-8">
            @csrf
            <h1 class="md:text-3xl text-2xl font-semibold">PROFILE</h1>
            <div class="md:mt-8 mt-4">
                <h1 class="text-gray-700">First Name</h1>
                <input type="text" name="first_name"
                    value="{{ $user->first_name }}"class="border border-gray-400 rounded-md w-full py-2 px-3 mt-3">
                @error('first_name')
                    <p class="text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="md:mt-5 mt-3">
                <h1 class="text-gray-700">Last Name</h1>
                <input type="text" name="last_name"
                    value="{{ $user->last_name }}"class="border border-gray-400 rounded-md w-full py-2 px-3 mt-3">
                @error('last_name')
                    <p class="text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="md:mt-5 mt-3">
                <h1 class="text-gray-700">Email</h1>
                <input type="email" disabled
                    value="{{ $user->email }}"class="border border-gray-400 rounded-md w-full py-2 px-3 mt-3">
            </div>
            <div class="md:mt-5 mt-3">
                <h1 class="text-gray-700">Phone Number</h1>
                <input type="text" name="phone_number"
                    value="{{ $user->phone_number }}"class="border border-gray-400 rounded-md w-full py-2 px-3 mt-3">
                @error('phone_number')
                    <p class="text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mt-3">
                <label class="font-medium" for="name">Profile Picture</label>
                <a href="#" class="relative block w-fit mt-4 photo_profile">
                    <img src="{{ $user->photo_profil }}" alt=""
                        class="w-32 md:w-48 h-32 md:h-48 rounded-full shadow-xl img-element">
                    <button class="px-2 py-1.5 rounded-md bg-white border absolute bottom-0 left-0">Edit</button>
                </a>
                <input type="file" name="pictureFile" id="pictureFile" class="hidden" accept="image/*">
                @error('pictureFile')
                    <p class="text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="mt-8 font-semibold bg-primary text-white py-2 md:w-[25%] w-full rounded-md">
                SIMPAN
            </button>
        </form>
    </div>
@endsection

@section('javascript')
    <script>
        document.querySelector('.confirmLogout').addEventListener('click', function() {
            Swal.fire({
                title: "Do you want to log out?",
                showCancelButton: true,
                confirmButtonText: `
                <form action="/logout" method="POST">
                  <input name="_token" type="hidden" value="{{ csrf_token() }}">
                  <button type="submit">Log Out</button>
                </form>
                `,
                icon: 'warning',
            })
        })
        document.querySelector('.photo_profile').addEventListener('click', event => {
            event.preventDefault()
            document.querySelector('#pictureFile').click()
        })
        document.querySelector('#pictureFile').addEventListener('input', event => {
            const file = event.target.files[0]
            console.log(file);
            document.querySelector('.img-element').setAttribute('src', URL.createObjectURL(file))
        })
    </script>
@endsection
