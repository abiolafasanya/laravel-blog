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
    $response = Http::withToken(env('GOOGLE_NEW_KEY'))->get('https://newsapi.org/v2/top-headlines?country=us')['articles'];
    $news = collect($response)->sortByDesc('publishedAt')->take(10);
    // dd($response);
    // dd(env('GOOGLE_NEW_KEY'));
    return $news;
    }
}
