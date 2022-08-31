<header class="bg-white px-7 border-b py-2 mx-auto" x-data="{ isOpen: false }" x-data="{ open: false }"
    @click.away="open = false">
    <nav class="flex justify-between items-center text-lg p-3">
        <span class="text-2xl font-sans">{{ config('app.name') }}</span>
        <ul class="hidden md:flex items-center justify-center space-x-8">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('posts') }}">Posts</a></li>
            <li><a href="{{ route('articles.index') }}">Articles</a></li>
            <li><a href="{{ route('library') }}">Library</a></li>
        </ul>
        <div>
            {{-- <span id="userMenu" class="md:flex items-center hidden relative cursor-pointer" x-data="isOpen = true"> --}}
            <span class="md:flex items-center hidden relative cursor-pointer">
                @auth
                    <span class="rounded-full py-1 px-2 border border-indigo-500" x-on:click="open = !open"
                        @keydown.enter="open = true" @keydown.tab="open = false">
                        <x-nameicon />
                    </span>
                    <span class="ml-2 text-base">{{ auth()->user()->name }}</span>
                @else
                    <ul class="text-gray-700 flex space-x-4">
                        <li><a href="{{ route('login') }}" class="hover:text-gray-900 py-2 ">Login</a></li>
                        <li><a href="{{ route('register') }}"
                                class="bg-indigo-500 text-sm hover:bg-indigo-600 rounded-full text-white px-5 py-2">Register</a>
                        </li>
                    </ul>
                @endauth
            </span>
            <span id="mobileMenu" class="md:hidden" x-on:click="isOpen = !isOpen">
                <i class="fa fa-bars text-gray-800 text-[30px]"></i>
            </span>
        </div>
    </nav>
    <div>
        @auth
            <ul class="flex mt-[10px] bg-white absolute p-4 right-[35px] flex-col rounded shadow-md text-gray-700"
                x-show="open" @click.outside="open = false" @keydown.escape.window="open = false"
                @keydown.tab="open = false">
                <li><a href="{{ route('profile') }}" class="hover:text-gray-900 px-5 py-2">Profile</a></li>
                <li><a href="{{ route('logout') }}" class="hover:text-gray-900 px-5 py-2">Logout</a></li>
            </ul>
        @endauth
        {{-- mobile --}}
        <ul x-show="isOpen"
            class="md:hidden absolute left-0 h-screen space-y-14 text-2xl flex flex-col w-full bg-slate-300 items-center justify-center">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('posts') }}">Posts</a></li>
            <li><a href="{{ route('articles.index') }}">Articles</a></li>
            <li><a href="{{ route('library') }}">Library</a></li>
        </ul>
    </div>
</header>
