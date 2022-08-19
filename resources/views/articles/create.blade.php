<x-layout>
    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card max-w-2xl mx-auto p-5 mt-12">
            <h1 class="text-2xl">Create Article</h1>
            <div class="my-2">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                @error('title')
                    <x-error :message="$message" />
                @enderror
            </div>
            <div class="my-2">
                <label for="body">Body</label>
                <textarea class="ckeditor form-control" id="body" name="body">{{ old('body') }}</textarea>
                {{-- <input type="text" name="body" id="ckeditor" class="ckeditor form-control" value="{{ old('body') }}"> --}}
                @error('body')
                    <x-error :message="$message" />
                @enderror
            </div>
            <div class="my-2">
                <div class="my-2 w-56 rounded">
                    <img src="{{ old('image') }}" alt="">
                </div>
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control">
                @error('image')
                    <x-error :message="$message" />
                @enderror
            </div>
            <button class="btn btn-indigo">Create Article</button>
        </div>
    </form>

</x-layout>
