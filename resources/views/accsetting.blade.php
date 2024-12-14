@extends('layouts.user')

@section('title')
    Account Setting
@endsection

@section('content')
    <div class="flex md:px-14 px-6 py-10 md:flex-row flex-col">
        <div class="md:w-[28%] w-full flex-row">
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
                <a class="group flex items-center gap-5 border border-b-0 px-4 md:py-4 py-3 border-primary rounded-t-md hover:bg-primary hover:border-primary"
                    href="/profile">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="group-hover:text-white size-8 text-primary">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                    <h1 class="font-semibold text-primary group-hover:text-white">Profile</h1>
                </a>
                <a class="group flex items-center gap-5 border border-b-0 px-4 md:py-4 py-3 border-primary  hover:bg-primary hover:border-primary"
                    href="/history">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-8 group-hover:text-white text-primary">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                    </svg>
                    <h1 class="font-semibold text-primary group-hover:text-white">Order History</h1>
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
                <a class="flex items-center gap-5 border border-b-0 px-4 md:py-4 py-3 border-primary bg-primary"
                    href="/accsetting">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="text-white size-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    <h1 class="font-semibold text-white">Account Setting</h1>
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
        <div class="md:w-[72%] w-full md:pl-16 md:mt-0 mt-8">
            <h1 class="md:text-3xl text-xl font-semibold">ACCOUNT SETTING</h1>
            <form action="/accsetting/edit-password" method="POST">
                @csrf
                <div class="mt-4">
                    <h1 class="text-gray-700">Old Password</h1>
                    <input type="password" name="old_password" placeholder="Type your current password"
                        class="border border-gray-400 rounded-md w-full py-2 px-3 mt-3">
                    @error('old_password')
                        <p class="text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-4">
                    <h1 class="text-gray-700">New Password</h1>
                    <input type="password" name="new_password" placeholder="Type your new password"
                        class="border border-gray-400 rounded-md w-full py-2 px-3 mt-3">
                    @error('new_password')
                        <p class="text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-4">
                    <h1 class="text-gray-700">Password Confirmation</h1>
                    <input type="password" name="new_password_confirmation" placeholder="Type password confirmation"
                        class="border border-gray-400 rounded-md w-full py-2 px-3 mt-3">
                    @error('new_password_confirmation')
                        <p class="text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <button
                    class="mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:outline-none font-medium rounded-lg text-sm px-16 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700">
                    Change Password
                </button>
            </form>
            {{-- <div class="flex-col md:mt-8 mt-5">
                <h1 class="text-lg">Request Account Deletion</h1>
                <button
                    class="confirmDelete mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:outline-none font-medium rounded-lg text-sm px-16 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700"
                    type="button">
                    Delete Account
                </button>
            </div> --}}
        </div>
    </div>
@endsection

@section('javascript')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

        document.querySelector('.confirmDelete').addEventListener('click', function() {
            Swal.fire({
                title: "Do you want to log out?",
                showCancelButton: true,
                confirmButtonText: "Log Out",
                icon: 'warning',
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire("Logged Out!", "", "success");
                }
            });
        })
    </script>
@endsection