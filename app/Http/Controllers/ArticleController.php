<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function detail($id)
    {
        $article = Article::with('user')->findOrFail($id);
        return view('pages.detailarticle', compact('article'));
    }

    public function like(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        
        // Increment likes count
        $article->increment('likes_count');
        
        return response()->json([
            'success' => true,
            'liked' => true,
            'likes_count' => $article->likes_count
        ]);
    }
}
