<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Register</title>
    @vite('resources/js/app.js')

</head>

<body class="antialiased font-sans">

    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        {{-- <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 bg-white p-6 shadow"> --}}
        <div class="card px-12">
            <div class="p-12">
                <h2 class="text-2xl font-semibold py-4 text-center capitalize text-gray-800 mb-2">Register Form</h2>

                <form action="/register" method="post" class="w-full block">
                    <div class="mt-2">
                        <label for="name" class="block">Name</label>
                        <input type="name" name="name" placeholder="Fullname" class="form-control" required>
                    </div>
                    <div class="mt-2">
                        <label for="email" class="block">Email</label>
                        <input type="email" name="email" placeholder="Email Address" class="form-control" required>
                    </div>
                    <div class="mt-2">
                        <label for="password" class="block">Password</label>
                        <input type="password" name="password" placeholder="password" class="form-control" minlength="7" required>
                    </div>
                    <div class="mt-2">
                        <label for="cpassword" class="block">Confirm Password</label>
                        <input type="password" name="cpassword" placeholder="Confirm password" class="form-control" required>
                    </div>
                    <div class="mt-2 ">
                        <input type="checkbox" required class="accent-indigo-600">
                       <span class="text-sm">Accept terms and conditions</span>
                    </div>
                    <div class="mt-4">
                        <button class="btn-blue">Register</button>
                    </div>
                    <div class="mt-2 ">
                        <a href="/login" class="link">Already Registered? Login</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>
