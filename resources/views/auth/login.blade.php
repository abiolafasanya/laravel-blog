<x-layout>
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

        <div class="card px-12">
            <div class="p-8">
                <h2 class="text-2xl font-semibold py-4 text-center capitalize text-gray-800 mb-2">Login Form</h2>
                @error('login')
                    <div id="alert"
                        class="py-2 px-5 max-w-xl mx-auto rounded border text-center border-red-300 text-red-900 bg-red-200">
                        <x-error :message="$message" />
                    </div>
                @enderror
                <form action="{{ route('signin') }}" method="post" class="w-full block">
                    @csrf
                    <div class="mt-2">
                        <label for="email" class="block">Email</label>
                        <input type="email" name="email" placeholder="Email Address" class="form-control" required
                            value="{{ old('email') }}">
                        @error('email')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div class="mt-2">
                        <label for="password" class="block">Password</label>
                        <input type="password" name="password" placeholder="password" class="form-control"
                            minlength="7">
                        @error('password')
                            <x-error :message="$message" />
                        @enderror
                    </div>

                    <div class="mt-4">
                        <button class="btn-blue">Login</button>
                    </div>
                    <div class="mt-2 ">
                        <a href="/register" class="link">Not Registered? register</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
</x-layout>
