<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Article $article)
    {
        $request->validate([
            'nickname'=>'required',
            'email'=>'required|email',
            'comment'=>'required'
        ]);

        Comment::add($request->all(),$article);
        return back();
    }
}
