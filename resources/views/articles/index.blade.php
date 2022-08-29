<x-layout>
    <section class="container mx-auto mt-12">

        <div class="flex justify-between items-center p-5">
            <h1 class="text-2xl">Articles</h1>
            <a href="{{ route('articles.create') }}" class="btn btn-indigo">Add Article</a>
        </div>
        @if ($articles->count() < 1)
            <div class="alert text-dark max-w-6xl md:max-w-xl text-center mx-auto bg-gray-200 border border-gray-300"><i
                    class="fa fa-info-circle" aria-hidden="true"></i> No articles found</div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                @foreach ($articles as $article)
                    <article class="card">
                        <img class="w-full mb-2" src="{{ $article->image ? asset('storage/' . $article->image) : '' }}"
                            alt="">
                        <section class="p-5">
                            <h1 class="text-xl">{{ $article->title }}</h1>
                            <p class="text-lead capitalize">{!! $article->body !!}</p>
                            <div class="flex justify-between">
                                <span>created by: abiola</span>
                                <span class="text-sm">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    {{ $article->created_at }}
                                </span>
                            </div>
                            <div class="flex justify-between items-center mt-4">
                                @livewire('counter')
                                <a class="link border border-indigo-500 rounded-lg p-3"
                                    href="{{ route('articles.show', $article->id) }}">
                                    Read Article
                                </a>
                            </div>
                        </section>
                    </article>
                @endforeach
            </div>
        @endif
        {!! $articles->links() !!}
    </section>
</x-layout>
