@if (session()->has('success'))
    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)"
        class="relative alert bg-indigo-200 md:max-w-xl mt-12 text-center max-w-6xl mx-auto border-indigo-300 text-indigo-900">
        <i class="fa fa-info-circle " aria-hidden="true"></i>

        {{ session('success') }}
    </div>
@endif
