<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Articles;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreArticlesRequest;
use App\Http\Requests\UpdateArticlesRequest;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $views = 0;

        // $articles = Articles::with('user')->get();
        // $articles = Articles::find(auth()->id());
        
        $articles = Articles::latest()->with('user')->paginate(5);
        return view('articles.index', ['articles' => $articles, 'views' => $views+1]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(auth()->user()){
            return view('articles.create');
        }
        return back()->with('success', 'You need to signin first');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArticlesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticlesRequest $request)
    {
        // dd(Auth::id());
        $articles = $request->all();
        $articles['user_id'] = Auth::id();
        if($request->hasFile('image')){
            $articles['image'] = $request->file('image')->store('articles', 'public');
        }
        Articles::create($articles);
        return redirect('/articles')->with('success', 'Article successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function show(Articles $article)
    {
        // dd($articles);
        return view('articles.show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function edit(Articles $article)
    {
        if(auth()->user()){
            return view('articles.edit', ['article' => $article]);
        }
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArticlesRequest  $request
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticlesRequest $request, Articles $article)
    {
        
        if(Auth::id() == $article->user_id){
            if($request->hasFile('image')){
                $article['image'] = $request->file('image')->store('articles', 'public');
            }
            $article['title'] = $request->input('title');
            $article['body'] = $request->input('body');

            $article->update();
            return back()->with('success','Article updated successfully');
        }
        return back()->withErrors('Error updating article');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articles $article)
    {
        $article->delete();
       
        return redirect()->route('articles.index')
                        ->with('success','Article deleted successfully');
    }
}
