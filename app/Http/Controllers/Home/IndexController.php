<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Article;

class IndexController extends Controller
{

    public function index()
    {
        $articles = Article::select('id', 'category_id', 'title', 'slug', 'author', 'description', 'cover', 'is_top', 'created_at')
            ->orderBy('created_at', 'desc')
            ->with(['category', 'tags'])
            ->paginate(10);

        $head = [
            'title' => config('sample.head.title'),
            'keywords' => config('sample.head.keywords'),
            'description' => config('sample.head.description')
        ];
        $assign = [
            'category_id' => 'index',
            'articles' => $articles,
            'head' => $head,
            'tagName' => '',
        ];

        return view('home.index.index', $assign);

    }
}