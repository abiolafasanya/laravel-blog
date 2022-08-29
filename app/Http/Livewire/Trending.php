<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Trending extends Component
{
    public $trendings;
    public function render()
    {
        return view('livewire.trending');
    }

    public function mount() 
    {
        $response = Http::withToken(env('GOOGLE_NEW_KEY'))
        ->get('https://newsapi.org/v2/top-headlines?country=ng')['articles'];
        $this->trendings = collect($response)->sortByDesc('publishedAt')->take(8);
    }
}
