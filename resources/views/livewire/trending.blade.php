@foreach ($trendings as $trending)
    <div class="py-2 px-5 bg-white rounded border">
        <img src="{{ $trending['urlToImage'] }}" class="rounded" alt="">
        <h1 class="text-lg font-semibold">{{ $trending['title'] }}</h1>
        <p class="text-base text-black">
            {{ $trending['description'] }}
        </p>
        <span class="text-sm font-semibold text-dark">Source: {{$trending['source']['name']}}</span>
        <span class="flex justify-between mt-4">
            <a href="{{ $trending['url'] }}" class="text-indigo-600">Learn more...</a>
            <span class="text-gray-700">
                <i class="fa-solid fa-clock" aria-hidden="true"></i>
                <span>{{ isset($trending['publishedAt']) ? \Carbon\Carbon::parse($trending['publishedAt'])->format('M d,Y g:i a') : 'No date' }}</span>
            </span>
        </span>
    </div>
@endforeach
