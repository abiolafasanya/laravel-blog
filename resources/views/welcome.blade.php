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
    <x-articles />
</x-layout>
