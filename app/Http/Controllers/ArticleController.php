<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|min:5|unique:articles',
            'subtitle'=>'required|min:5|unique:articles',
            'body'=>'required|min:20|unique:articles',
            'img'=>'required|unique:articles',
            'category'=>'required',
        ]);

        Article::create([
            'title'=>$request->title,
            'subtitle'=>$request->subtitle,
            'body'=>$request->body,
            'img'=>$request->has('img') ? $request->file('img')->store('public/article') : '/img/default.jpg',
            'category_id'=>$request->category,
            'user_id'=>Auth::user()->id,
        ]);
        return redirect(route('homepage'))->with('message','Il tuo articolo è stato creato');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
