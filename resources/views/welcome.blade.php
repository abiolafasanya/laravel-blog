<x-layout>
    <div class="container mx-auto">
        <div class="flex flex-col md:flex-row items-center justify-center p-5">
            <div class="md:w-1/2 pt-[40px]">
                <img src="{{ asset('img/creative.png') }}" alt="" class="w-full md:w-3/4">
            </div>
            <div class="md:w-1/2">
                <h1 class="text-2xl md:text-4xl">Explore the world of knowledge.</h1>
                <p class="text-base">
                    Tell me and I forget, teach me and I may remember, involve me and I learn.
                    This webiste will involve you and give you the needed information at the tip of your hand
                </p>
                <button class="btn-indigo mt-5">Learn More</button>
            </div>
        </div>
    </div>
    {{-- <x-articles /> --}}

    <div>
        <div class="container mx-auto max-w-6xl">
            <h1 class="text-2xl font-semibold my-5">Trending Topics</h1>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($trendings as $trending)
                    <div class="py-2 px-5 bg-white rounded border">
                        <img src="{{ $trending['urlToImage'] }}" class="rounded" alt="">
                        <h1 class="text-lg font-semibold">{{ $trending['title'] }}</h1>
                        <p class="text-base text-black">
                            {{ $trending['description'] }}
                        </p>
                        <span class="text-sm font-semibold text-dark">Source: {{ $trending['source']['name'] }}</span>
                        <span class="flex justify-between mt-4">
                            <a href="{{ $trending['url'] }}" class="text-indigo-600">Learn more...</a>
                            <span class="text-gray-700">
                                <i class="fa-solid fa-clock" aria-hidden="true"></i>
                                <span>{{ isset($trending['publishedAt']) ? \Carbon\Carbon::parse($trending['publishedAt'])->format('M d,Y g:i a') : 'No date' }}</span>
                            </span>
                        </span>
                    </div>
                @endforeach
            </div>
            <div class="p-2">
                {!! $trendings->links() !!}
            </div>
        </div>
        <div>
        </div>
    </div>
</x-layout>
