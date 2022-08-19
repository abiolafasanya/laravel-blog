<x-layout>
    <section class="container mx-auto mt-12">

        <div class="flex justify-between items-center p-5">
            <h1 class="text-2xl">Articles</h1>
            <a href="{{ route('articles.create') }}" class="btn btn-indigo">Add Article</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-5 ">
            @foreach ($articles as $article)
                <article class="card p-5">
                    <img src="" alt="">
                    <section>
                        <h1 class="text-xl">{{ $article->title }}</h1>
                        <p>{{ $article->body }}</p>
                        <div class="flex justify-between">
                            <span>created by: abiola</span>
                            <span class="text-sm">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                {{ $article->created_at }}
                            </span>
                        </div>
                        <a class="link" href="{{ route('articles.show', $article->id) }}">{{$views}}<i class="fa fa-eye"
                                aria-hidden="true"></i> view</a>
                    </section>
                </article>
            @endforeach
        </div>
        {!! $articles->links() !!}
    </section>
</x-layout>
