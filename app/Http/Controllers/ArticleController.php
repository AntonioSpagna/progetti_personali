<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index' , 'show');
    }

    public function index()
    {
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->get();
        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    public function byCategory(Category $category){
        
        $articles = $category->articles->sortByDesc('created_at')->filter(function($article){
            return $article->is_accepted==true;
        });
        return view('article.by-category' , compact('category' , 'articles'));
    }

    public function byUser(User $user){
        
        $articles = $user->articles->sortByDesc('created_at')->filter(function($article){
            return $article->is_accepted==true;
        });
        return view('article.by-user' , compact('user', 'articles'));
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
            'img'=>'unique:articles',
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
        return redirect(route('homepage'))->with('message','Il tuo articolo è stato creato ed è in fase di revisione');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
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
