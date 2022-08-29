<x-guest>
    <div class="py-4">
        <div class="card max-w-2xl mx-auto p-3 mt-12">
            <div class="py-3 px-5">
                <h2 class="text-2xl font-semibold my-4 text-center capitalize text-gray-800 mb-2">Register Form</h2>

                <form action="{{ route('signup') }}" method="post" class="">
                    @csrf
                    <div class="mt-2">
                        <label for="name" class="block">Name</label>
                        <input type="name" name="name" placeholder="Fullname" class="form-control"
                            value="{{ old('name') }}">
                        @error('name')
                            <x-error :message="$message" />
                        @enderror
                    </div>
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
                    <div class="mt-2">
                        <label for="password_confirmation" class="block">Confirm Password</label>
                        <input type="password" name="password_confirmation" placeholder="Confirm password"
                            class="form-control">
                        @error('password_confirmation')
                            <x-error :message="$message" />
                        @enderror
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
</x-guest>
