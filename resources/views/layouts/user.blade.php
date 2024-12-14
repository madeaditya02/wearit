<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Public+Sans:ital,wght@0,100..900;1,100..900&family=Roboto+Slab:wght@100..900&family=Rufina:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @yield('head')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>WearIt - @yield('title')</title>
</head>

<body class="font-poppins">
    <nav class="navbar px-8 sm:px-16 py-6 flex justify-between fixed top-0 left-0 right-0 z-50 transition duration-300"
        @class(['border-b' => !Request::is('/')])>
        <a href="#" class="flex gap-3 items-center">
            <img src="{{ asset('/img/logo.png') }}" class="h-8" alt="">
            <h1 class="text-3xl font-semibold hidden sm:block">Wearit</h1>
        </a>
        <div
            class="navbar-nav gap-5 md:gap-8 pb-4 md:py-0 md:items-center uppercase absolute top-full left-0 right-0 flex-col px-6 bg-inherit md:bg-transparent shadow-md md:static md:flex-row md:shadow-none bg-white">
            <a href="/" class="px-3 py-1.5 rounded-lg hover:bg-gray-50">Home</a>
            <a href="/favorites" class="px-3 py-1.5 rounded-lg hover:bg-gray-50">Favorite</a>
            <a href="/product" class="px-3 py-1.5 rounded-lg hover:bg-gray-50">Shop</a>
        </div>
        <div class="flex md:gap-8 gap-4 items-center">
            <a href="/cart" class="p-1.5 hover:bg-gray-50">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                </svg>
            </a>
            @guest
                <a href="/login" class="px-5 py-1.5 border border-primary">
                    Login
                </a>
            @endguest
            @auth
                <a href="/profile">
                    <img src="{{ asset('/img/user.png') }}" class="size-6 rounded-full" alt="">
                </a>
            @endauth
            <button class="px-1.5 py-1.5 hover:bg-gray-50 bar-btn md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-7">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
    </nav>

    <div @class(['pt-28' => !Request::is('/')])>
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        const alert = {!! json_encode(session('alert')) !!}
        if (alert) {
            Swal.fire({
                title: alert.title,
                icon: alert.icon,
                text: alert.text,
            })
        }
    </script>

    <script>
        const navbar = document.querySelector('.navbar')
        const navbarNav = document.querySelector('.navbar-nav')
        const btn = document.querySelector('.bar-btn').addEventListener('click', () => {
            navbarNav.classList.toggle('show')
        })
        navbar.classList.toggle('scrolled', window.scrollY > 0)
        document.addEventListener('scroll', () => {
            navbar.classList.toggle('scrolled', window.scrollY > 0)
        })
    </script>

    @yield('javascript')
</body>

</html>
