<header class=" bg-gray-100 border-b border-gray-200 py-3 px-7">
    <nav class="flex justify-between items-center text-lg">
        <span class="text-2xl font-sans">WumBlog</span>
        <ul class="hidden md:flex items-center justify-center space-x-8">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('posts') }}">Posts</a></li>
            <li><a href="{{ route('articles.index') }}">Articles</a></li>
            <li><a href="{{ route('library') }}">Library</a></li>
        </ul>
        <div>
            <span id="userMenu" class="md:flex items-center hidden relative cursor-pointer ">
                @auth
                    <i class="fa-solid fa-user-astronaut"></i>
                    <span class="ml-2 text-base">{{ auth()->user()->name }}</span>
                @else
                    <ul class="text-gray-700 flex text-base">
                        <li><a href="{{ route('login') }}" class="hover:text-gray-900 py-2 ">Login</a></li>
                        <li><a href="{{ route('register') }}" class="hover:text-gray-900 px-5 py-2">Register</a></li>
                    </ul>
                @endauth
            </span>
            <span id="Mbars" class="md:hidden"><i class="fa fa-bars text-gray-800 text-[30px]"></i></span>
        </div>
    </nav>
    <div>
        @auth
            <ul id="showMenu"
                class="hidden top-14 bg-white absolute p-4 right-[35px] flex-col rounded shadow-md text-gray-700">
                <li><a href="{{ route('profile') }}" class="hover:text-gray-900 px-5 py-2">Profile</a></li>
                <li><a href="{{ route('logout') }}" class="hover:text-gray-900 px-5 py-2">Logout</a></li>
            </ul>
        @else
            <ul id="showMenu"
                class="hidden top-14 bg-white absolute p-4 right-[35px] flex-col rounded shadow-md text-gray-700">
                <li><a href="{{ route('login') }}" class="hover:text-gray-900 px-5 py-2 ">Login</a></li>
                <li><a href="{{ route('register') }}" class="hover:text-gray-900 px-5 py-2">Register</a></li>
            </ul>
        @endauth
        {{-- mobile --}}
        <ul id="navM"
            class="md:hidden absolute left-0 h-screen space-y-14 text-2xl flex flex-col w-full bg-slate-300 items-center justify-center">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('posts') }}">Posts</a></li>
            <li><a href="{{ route('articles.index') }}">Articles</a></li>
            <li><a href="{{ route('library') }}">Library</a></li>
        </ul>
    </div>
</header>
