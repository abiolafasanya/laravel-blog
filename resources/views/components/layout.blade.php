<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Wunmi Blog</title>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="font-sans relative">
    <x-header />

    <main class="min-h-[100vh]">
        <x-success />
        {{ $slot }}
    </main>

    <footer class="py-3 px-5 mx-auto mt-12">
        <p class="text-center p--3">
            WunmiBlog &copy; 2022
        </p>
    </footer>


    <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor.create(document.querySelector("#body"))
            .then((editor) => {
                console.log(editor);
            })
            .catch((error) => {
                console.error(error);
            });
    </script>
    @livewireScripts
</body>

</html>
