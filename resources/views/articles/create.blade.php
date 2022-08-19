<x-layout>
    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <div class="card max-w-2xl mx-auto p-5 mt-12">
            <h1 class="text-2xl">Create Article</h1>
            <div class="my-2">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                @error('title')
                    <p class="text-sm text-red-500 mt-1">
                        <i class="fa fa-warning" aria-hidden="true"></i>
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="my-2">
                <label for="body">Body</label>
                <input type="text" name="body" class="form-control" value="{{ old('body') }}">
                @error('body')
                    <p class="text-sm text-red-500 mt-1">
                        <i class="fa fa-warning" aria-hidden="true"></i>
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <button class="btn btn-indigo">Create Article</button>
        </div>
    </form>

</x-layout>
