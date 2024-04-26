<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage()
    {
        return view('home');
    }

    public function blogPage($categorySlug)
    {
        $category = Category::where('slug', $categorySlug)->first();
        return view('blog', [
            'category' => $category,
        ]);
    }

    public function articlePage($categorySlug, $articleSlug)
    {
        return view('article',[
            "article"=>Article::where('slug', $articleSlug)->first(),
        ]);
    }


    public function changeLocale($locale)
    {
        if ($locale != null) {
            session(['lang'=>$locale]);
        }
        return back();
    }


}
