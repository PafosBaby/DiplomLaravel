<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.articles.index',[
            'articles'=>Article::all()->sortBy('name')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.articles.create', [
        "categories"=>Category::all(),
        "tags"=>Tag::all(),
       ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
        'title'=>'required',
        'category_id'=>'required'
       ]);

       $article = Article::add($request->all());
       $article->uploadImage($request->file('image_path'));

       $article->tags()->attach($request->input('tags'));


       return redirect()->route('articles.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('admin.articles.edit',[
            'article'=> $article,
            'categories'=> Category::all()->sortBy('name'),
            'tags'=> Tag::all()->sortBy('name')
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title'=>'required',
            'category_id'=>'required'
           ]);

           $article->update($request->all());
           $article->uploadImage($request->file('image_path'));
        //    $tagsArr=[];
        //    foreach($article->tags as $tag){
        //     $tagsArr[] =$tag->id;
        //    }
        //    $article->tags()->detach();
           $article->tags()->sync($request->input('tags'));
           return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->removeImage();
        $article->delete();
        return back();
    }

    public function removeImage(Article $article)
    {
        $article->removeImage();
        return back();
    }
}
