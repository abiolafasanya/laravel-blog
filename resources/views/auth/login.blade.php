<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>
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
        <div class="card">
            <div class="p-12">
                <h2 class="text-2xl font-semibold py-4 text-center capitalize text-gray-800 mb-2">Login Form</h2>

                <form action="/login" method="post" class="w-full block">
                    <div class="mt-2">
                        <label for="email" class="block">Email</label>
                        <input type="email" name="email" placeholder="Email Address" class="form-control">
                    </div>
                    <div class="mt-2">
                        <label for="password" class="block">Password</label>
                        <input type="password" name="password" placeholder="password" class="form-control">
                    </div>
                    <div class="mt-4">
                        <button class="btn-blue">Login</button>
                    </div>
                    <div class="mt-2 flex justify-between items-center space-x-8 ">
                        <a href="/register" class="link">Not Registered?</a>
                        <a href="/forgot-password" class="link">Forgot Password</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>
