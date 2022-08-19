@if (session()->has('success'))
    <div id="alert"
        class="relative alert bg-indigo-200 md:max-w-2xl mt-12 max-w-6xl mx-auto border-indigo-300 text-indigo-900">
        <i class="fa fa-info-circle " aria-hidden="true"></i>
       
        {{ session('success') }}
    </div>
@endif
