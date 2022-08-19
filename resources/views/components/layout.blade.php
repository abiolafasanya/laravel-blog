<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Wunmi Blog</title>
    @vite('resources/js/app.js')
    @livewireStyles
</head>

<body class="antialiased bg-gray-50 font-sans relative">
    <x-header />
    <main class="min-h-[100vh]">
        <x-success />
        {{ $slot }}
    </main>
    <footer class=" w-full relative bottom-0 bg-gray-100">
        <div id="footer" class="text-center p-2 border-t border-gray-200"></div>
    </footer>


    @livewireScripts
    <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
</body>

</html>
