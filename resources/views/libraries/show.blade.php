<x-layout>
    <div class="max-w-6xl mt-12 py-2 px-7 mx-auto">
        <div class="flex md:flex-row flex-col md:space-x-8">
            <div class="w-full md:w-1/3">

                @if (array_key_exists('meduim', $book['volumeInfo']['imageLinks']))
                    <img src="{{ $book['volumeInfo']['imageLinks']['medium'] }}" alt="{{ $book['volumeInfo']['title'] }}"
                        class="w-full">
                @else
                    <img src="{{ $book['volumeInfo']['imageLinks']['thumbnail'] }}" alt="{{ $book['volumeInfo']['title'] }}"
                        class="w-full">
                @endif
                <div class="hidden md:visible">

                    <span class="text-lg font-bold">
                        {{ $book['volumeInfo']['title'] }}
                    </span>

                    <div class="flex flex-col">
                        {{ $book['volumeInfo']['publisher'] }} ,
                        {{ $book['volumeInfo']['publishedDate'] }} ,
                        {{ $book['volumeInfo']['pageCount'] }} - pages
                    </div>
                    <div>
                        @if (array_key_exists('industryIdentifiers', $book['volumeInfo']))
                            @foreach ($book['volumeInfo']['industryIdentifiers'] as $identifier)
                                <p class="text-sm"> ISBN:
                                    {{ $identifier['identifier'] }}
                                </p>
                            @endforeach
                        @endif

                    </div>
                </div>
            </div>
            <div class="flex flex-col w-full md:w-2/3">
                <div class="">
                    <h2 class="text-2xl font-bold my-4 md:my-2">Overview</h2>
                    <p>
                        <span class="font-bold text-lg">
                            {{ $book['volumeInfo']['title'] }}:
                        </span>
                        @if (array_key_exists('subtitle', $book['volumeInfo']))
                            <span>{{ $book['volumeInfo']['subtitle'] }}</span>
                        @endif
                    </p>
                    <p class="text-sm"> Author:
                        @foreach ($book['volumeInfo']['authors'] as $author)
                            {{ $author }}
                            @if (!$loop->last)
                                ,
                            @endif
                        @endforeach
                    </p>
                    <p class="text-sm"> Catergory:
                        @foreach ($book['volumeInfo']['categories'] as $category)
                            {{ $category }}
                            @if (!$loop->last)
                                ,
                            @endif
                        @endforeach
                    </p>

                    <p class="font-bold text-lg mt-12"> Description:
                        {!! $book['volumeInfo']['description'] !!}
                    </p>

                </div>
</x-layout>
