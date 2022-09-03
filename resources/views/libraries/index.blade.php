<x-layout>
    <div class="max-w-6xl m-auto">
        <h1 class="mt-5 text-2xl">Library</h1>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            @foreach ($books as $book)
                <a href="{{ route('library', $book['id']) }}">
                    <div class="p-2">
                        <div class="flex-1">
                            <img src="{{ $book['volumeInfo']['imageLinks']['thumbnail'] }}"
                                alt="{{ $book['volumeInfo']['title'] }}" class="w-full">
                        </div>
                        <div class="flex flex-col">
                            <div class="flex-1">
                                <h2 class="font-bold">
                                    {{ $book['volumeInfo']['title'] }}
                                </h2>
                                <p class="text-sm"> Author:
                                    @foreach ($book['volumeInfo']['authors'] as $author)
                                        {{ $author }}
                                    @endforeach
                                </p>
                                <p class="text-sm"> Catergory:
                                    @foreach ($book['volumeInfo']['categories'] as $category)
                                        {{ $category }}
                                    @endforeach
                                </p>


                                {{-- @livewire('google-book-download', ['book' => $book]) --}}

                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <div>
            {{-- {!! $books->links() !!} --}}
        </div>
    </div>
</x-layout>
