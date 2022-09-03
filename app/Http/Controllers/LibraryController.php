<?php

namespace App\Http\Controllers;

use Hamcrest\Core\AllOf;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
// use Symfony\Component\HttpFoundation\Response;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fantacy_books = Http::get('https://www.googleapis.com/books/v1/volumes?q=subject:fiction&key='.env('GOOGLE_BOOKS_KEY'))
            ->json()['items'];
        $response = collect($fantacy_books)->all();
        return view('libraries.index', ['books' => $response]);
    }

    public function googleBooks() 
    {
        //
        $fantacy_books = Http::get('https://www.googleapis.com/books/v1/volumes?q=subject:fiction&key='.env('GOOGLE_BOOKS_KEY'))->json()['items'];
        $e_books = Http::get('https://books.google.com/ebooks?key='.env('GOOGLE_BOOKS_KEY'))->json();
        $response = collect($fantacy_books)->paginate(10);
        return view('libraries.index', ['books' => $response]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $url = 'https://www.googleapis.com/books/v1/volumes/'.$id.'?key='.env('GOOGLE_BOOKS_KEY');
        $book = Http::get($url)->json();
        // dump($book);
        return view('libraries.show', ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
