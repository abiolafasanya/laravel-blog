<x-layout>
    <div class="max-w-6xl mx-auto mt-12 p-5">
        <form action="{{ route('articles.update', $article->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card max-w-2xl mx-auto p-5 mt-12">
                <h1 class="text-2xl">Edit Post</h1>
                <div class="my-2">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $article->title }}">
                    @error('title')
                        <x-error :message="$message" />
                    @enderror
                </div>
                <div class="my-2">
                    <label for="body">Body</label>
                    <textarea class="ckeditor form-control" id="body" name="body">{{ $article->body }}</textarea>
                    @error('body')
                        <x-error :message="$message" />
                    @enderror
                </div>
                <div class="my-2">
                    <div class="my-2 w-56 rounded">
                        <img src="{{ asset('storage/' . $article->image) }}" alt="" class="w-[256px]">
                    </div>
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control">

                    @error('image')
                        <x-error :message="$message" />
                    @enderror
                </div>
                <div class="my-2">
                    <label for="Category">Category</label>
                    <select name="category" class="form-control">
                        <option value="">Select Category</option>
                        <option value="">Category 1</option>
                        <option value="">Category 2</option>
                        <option value="">Category 3</option>
                        <option value="">Category 4</option>
                        {{-- @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach --}}
                    </select>
                </div>
                <button class="btn btn-indigo">Update Article</button>
            </div>
        </form>
    </div>
</x-layout>
