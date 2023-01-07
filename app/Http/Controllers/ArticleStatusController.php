<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Post;
use Illuminate\Http\Request;

class ArticleStatusController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        $posts = Post::all();
        return view('welcome', compact(['articles', 'posts']));
    }
}
