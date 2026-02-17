<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'hashtags' => 'required|array',
            'content' => 'required|array'
        ]);

        $thumbnailPath = $request->file('thumbnail')->store('articles/thumbnails', 'public');

        // Process content blocks and check if has photo
        $hasPhoto = false;
        $content = [];
        
        if ($request->has('content')) {
            foreach ($request->content as $blockId => $block) {
                $contentBlock = [
                    'type' => $block['type']
                ];

                if ($block['type'] === 'paragraph') {
                    $contentBlock['text'] = $block['text'];
                } elseif ($block['type'] === 'point') {
                    $contentBlock['points'] = $block['points'];
                } elseif ($block['type'] === 'photo') {
                    if (isset($block['file']) && $block['file'] instanceof \Illuminate\Http\UploadedFile) {
                        $photoPath = $block['file']->store('articles/photos', 'public');
                        $contentBlock['path'] = $photoPath;
                        $hasPhoto = true;
                    }
                }

                $content[] = $contentBlock;
            }
        }

        Article::create([
            'title' => $request->title,
            'thumbnail' => $thumbnailPath,
            'hashtags' => $request->hashtags,
            'content' => $content,
            'has_photo' => $hasPhoto
        ]);

        return redirect()->route('admin.articles.index')->with('success', 'Article created successfully');
    }

    public function show(Article $article)
    {
        return view('admin.articles.detail', compact('article'));
    }

    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'hashtags' => 'required|array',
            'content' => 'required|array'
        ]);

        $data = [
            'title' => $request->title,
            'hashtags' => $request->hashtags,
        ];

        if ($request->hasFile('thumbnail')) {
            Storage::disk('public')->delete($article->thumbnail);
            $data['thumbnail'] = $request->file('thumbnail')->store('articles/thumbnails', 'public');
        }

        // Process content blocks
        $hasPhoto = false;
        $content = [];
        
        if ($request->has('content')) {
            foreach ($request->content as $blockId => $block) {
                $contentBlock = [
                    'type' => $block['type']
                ];

                if ($block['type'] === 'paragraph') {
                    $contentBlock['text'] = $block['text'];
                } elseif ($block['type'] === 'point') {
                    $contentBlock['points'] = $block['points'];
                } elseif ($block['type'] === 'photo') {
                    if (isset($block['file']) && $block['file'] instanceof \Illuminate\Http\UploadedFile) {
                        $photoPath = $block['file']->store('articles/photos', 'public');
                        $contentBlock['path'] = $photoPath;
                        $hasPhoto = true;
                    } elseif (isset($block['path'])) {
                        $contentBlock['path'] = $block['path'];
                        $hasPhoto = true;
                    }
                }

                $content[] = $contentBlock;
            }
        }

        $data['content'] = $content;
        $data['has_photo'] = $hasPhoto;

        $article->update($data);

        return redirect()->route('admin.articles.index')->with('success', 'Article updated successfully');
    }

    public function destroy(Article $article)
    {
        Storage::disk('public')->delete($article->thumbnail);
        
        foreach ($article->content as $block) {
            if ($block['type'] === 'photo' && isset($block['path'])) {
                Storage::disk('public')->delete($block['path']);
            }
        }

        $article->delete();

        return redirect()->route('admin.articles.index')->with('success', 'Article deleted successfully');
    }
}
