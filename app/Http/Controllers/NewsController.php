<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    //

    public function index() 
    {
    // $response = Http::withToken(env('GOOGLE_NEW_KEY'))->get('https://newsapi.org/v2/everything');
    $response = Http::withToken(env('GOOGLE_NEW_KEY'))
        ->get('https://newsapi.org/v2/top-headlines?country=ng')['articles'];
    $response1 = Http::withToken(env('GOOGLE_NEW_KEY'))
        ->get('https://newsapi.org/v2/top-headlines?country=us')['articles'];
    $response2 = Http::withToken(env('GOOGLE_NEW_KEY'))
        ->get('https://newsapi.org/v2/top-headlines?category=sports&language=en')['articles'];

    $trendings = collect($response)->merge(collect($response1)->merge($response2))
        ->sortByDesc('publishedAt')->paginate(6);
    return view('welcome', ['trendings' => $trendings]);
    
    }
}
