<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WearIt - Log In</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-poppins">
    <form class="flex items-stretch" action="" method="post">
        @csrf
        <div class="w-[60%] px-16 py-10">
            <div>
                <div class="pb-4 flex flex-col gap-0 md:flex-row items-center md:gap-10 w-full pt-0">
                    <img src="/img/logo.png" alt="WearIt" class="w-20 h-20">
                    <h1 class="font-bold text-4xl " style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">WearIt</h1>
                </div>
                <h1
                    class='font-rufina'style="font-size: 2rem; color: #1d4ed8; font-weight: bold; padding-bottom: 1rem;">
                    Forgot Password
                </h1>
            </div>

            <div>
                <div class="font-poppins">
                    <label for="email" class="text-lg">Email</label>
                    <input type="text" name="email" id="email" placeholder="Your email"
                        class="border border-slate-300 mt-2 px-5 py-4 rounded-md w-full focus:border-blue-500 focus:outline-none">
                    @error('email')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="pb-20 md:pb-0 relative font-poppins">
                    <div class="flex items-center justify-between gap-5 w-full mt-4">
                        <a href="/login" class="text-sm text-blue-800 cursor-pointer">Remember your password? Login</a>
                    </div>
                </div>
            </div>

            <div>


            </div>
            <div class="flex flex-col items-center justify-center mt-8">
                <p>Click submit to send the password change request to your email</p>
                <div class="flex flex-col gap-5 w-60 mt-3">
                    <div class="w-full">
                        <button class="font-semibold bg-blue-700 text-white py-2 px-3 rounded-md w-full">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-[40%] hidden md:block">
            <img src="/img/register.png" alt="WearIt" class="w-full h-full object-cover">
        </div>
    </form>

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
</body>

</html>
