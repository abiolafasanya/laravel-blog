@error($errors->any())
    <div id="alert" class="relative alert bg-red-200 md:max-w-2xl mt-12 max-w-6xl mx-auto border-red-300 text-red-900">
        <ul>
            @foreach ($errors->all() as $error)
                <i class="fa fa-info-warning" aria-hidden="true"></i>
                <li class="ml-2">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@enderror
