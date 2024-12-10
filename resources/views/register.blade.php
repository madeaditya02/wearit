<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WearIt - Register</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="flex">
        <div class ="w-[40%] hidden md:block">
            <img src="/img/left.png" alt="WearIt" class="w-full h-screen object-cover">
        </div>
        <div class ="w-full px-12 md:w-[60%] md:px-20">
            <div class="flex flex-col gap-3 md:flex-row items-center md:gap-5 w-full pt-20">
                <img src="/img/logo.png" alt="WearIt" class="w-20 h-20">
                <h1 class="drop-shadow-lg font-semibold text-2xl">WearIt</h1>
            </div>
            <form class="pt-8" action="/register" method="POST">
                @csrf
                <h1 class="font-semibold text-xl pb-5">Create Account</h1>
                <div class="flex flex-col md:flex-row md:gap-5 gap-2">
                    <div class="pb-1 md:pb-3 md:w-[50%]">
                        <label class="text-slate-600 text-sm">
                            <span>First Name</span>
                        </label>
                        <input type="text" name="first_name"class="border 1px py-2 px-3 rounded-md w-full">
                        @error('first_name')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="pb-1 md:pb-3 md:w-[50%]">
                        <label class="text-slate-600 text-sm">
                            <span>Last Name</span>
                        </label>
                        <input type="text" name="last_name" class="border 1px py-2 px-3 rounded-md w-full">
                        @error('last_name')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div class="flex flex-col md:flex-row md:gap-5 gap-2">
                    <div class="pb-1 md:pb-3 md:w-[50%]">
                        <label class="text-slate-600 text-sm">
                            <span>Email</span>
                        </label>
                        <input type="text"name="email" class="border 1px py-2 px-3 rounded-md w-full">
                        @error('email')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="pb-1 md:pb-3 md:w-[50%]">
                        <label class="text-slate-600 text-sm">
                            <span>Phone Number</span>
                        </label>
                        <input type="text" name="phone_number" class="border 1px py-2 px-3 rounded-md w-full">
                        @error('phone_number')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                
                <div class="flex flex-col md:flex-row md:gap-5 gap-2 md:pb-1 pb-3">
                    <div class="pb-1 md:pb-3 md:w-[50%]">
                        <label class="text-slate-600 text-sm">
                            <span>Password</span>
                        </label>
                        <input type="Password"name="password" class="border 1px py-2 px-3 rounded-md w-full">
                        @error('password')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="pb-1 md:pb-3 md:w-[50%]">
                        <label class="text-slate-600 text-sm">
                            <span>Confirm Password</span>
                        </label>
                        <input type="Password" name="password_confirmation" class="border 1px py-2 px-3 rounded-md w-full">
                    </div>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" class="w-4 h-4 shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-default-checkbox">
                    <label for="hs-default-checkbox" class="text-sm text-slate-950 ms-3">I agree to all the <a class="text-blue-700">Terms</a> and <a class="text-blue-700">Privacy policy</a></label>
                </div>
                <div class="pt-10 flex flex-col md:flex-row md:gap-5 gap-2">
                    <div class="w-full md:w-[50%]">
                        <button class="font-semibold bg-blue-700 text-white py-2 px-3 rounded-md w-full">Create Account</button>
                    </div>
                    <div class="w-full md:w-[50%]">
                        <button type="button" class="font-semibold bg-gray-700 text-white py-2 px-3 rounded-md w-full flex justify-center items-center gap-2">
                            <img src="/img/googleIcon.png" class="w-5 h-5"alt="">
                            Login with Google
                        </button>
                    </div>
                </div>
                <div class="flex pt-7 pb-9 md:pt-10 place-content-center">
                    <h1 class="text-sm text-slate-950">Already have an account? <a href='/login' class="text-blue-700">Login</a></h1>
            </form>
        </div>
    </div>
</body>
</html>