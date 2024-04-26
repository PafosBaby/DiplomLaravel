<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $filable =[
        'nickname',
        'email',
        'comment',
        'article_id'
    ];

    public function article()
    {
        $this->belongsTo(Article::class);
    }

    public static function add(array $fields, $article)
    {
        $comment = new static;
        $comment->nickname=$fields['nickname'];
        $comment->email=$fields['email'];
        $comment->comment=$fields['comment'];
        $comment->article_id = $article->id;
        $comment->save();
        return $comment;
    }
}
