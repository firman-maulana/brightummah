<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function detail($id)
    {
        $article = Article::findOrFail($id);
        return view('pages.detailarticle', compact('article'));
    }
}
