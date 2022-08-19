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
                </div>
                <div class="my-2">
                    <label for="body">Body</label>
                    <input type="text" name="body" class="form-control" value="{{ $article->body }}">
                </div>
                <button class="btn btn-indigo">Create Post</button>
            </div>
        </form>
    </div>
</x-layout>
