<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name') }}</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="antialiased bg-laravel font-sans relative">
    <header class="bg-white px-7 border-b py-2 mx-auto">
        <div class="p-3 flex items-center justify-between">
            <div class="logo ">
                <a href="{{ route('home') }}" class="text-2xl">{{config('app.name') }}</a>
            </div>
            <div class="menu">
                <a href="{{ route('login') }}" class="py-2 px-5 text-gray-800">Login</a>
                <a href="{{ route('register') }}"
                    class="py-2 px-5 bg-indigo-500 hover:bg-indigo-600 text-white rounded-full">Register</a>
            </div>
        </div>
    </header>
    <main class="">
        <x-success />
        {{ $slot }}
    </main>
    {{-- <footer class=" w-full relative bottom-0 bg-gray-100">
        <div id="footer" class="text-center p-2 border-t border-gray-200"></div>
    </footer> --}}




    <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
    @livewireScripts
</body>

</html>
