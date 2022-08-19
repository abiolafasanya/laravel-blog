{{-- <x-layout> --}}
    <div class="card md:max-w-xl max-w-6xl mx-auto mt-14">
        <div class="p-12">
            <h2 class="text-2xl font-semibold py-4 text-center capitalize text-gray-800 mb-2">Login Form</h2>
            @if ($errors->login->first('email'))
                <div class="py-2 px-5 max-w-xl mx-auto rounded border text-center border-red-300 text-red-900 bg-red-200">
                    {{ $errors->login->first('email') }}
                </div>
            @endif
            <form action="{{ route('signin') }}" method="POST" class="w-full block">
                @csrf

                <div class="mt-2">
                    <label for="email" class="block">Email</label>
                    <input type="email" name="email" placeholder="Email Address" class="form-control">
                    @error('email')
                        <x-layout :message="$message" />
                    @enderror
                </div>
                <div class="mt-2">
                    <label for="password" class="block">Password</label>
                    <input type="password" name="password" placeholder="password" class="form-control">
                    @error('password')
                        <x-layout :message="$message" />
                    @enderror
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

{{-- </x-layout> --}}
