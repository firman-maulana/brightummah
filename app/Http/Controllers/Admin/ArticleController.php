<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Traits\LogsActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cloudinary\Cloudinary;

class ArticleController extends Controller
{
    use LogsActivity;
    
    private function getCloudinary()
    {
        return new Cloudinary([
            'cloud' => [
                'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
                'api_key'    => env('CLOUDINARY_API_KEY'),
                'api_secret' => env('CLOUDINARY_API_SECRET'),
            ],
        ]);
    }
    
    public function index()
    {
        $articles = Article::with('user')->latest()->get();
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
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg|max:10240',
            'hashtags' => 'required|array',
            'content' => 'required|array',
            'content.*.file' => 'nullable|image|mimes:jpeg,png,jpg|max:10240'
        ]);

        $cloudinary = $this->getCloudinary();
        
        // Upload thumbnail to Cloudinary
        $thumbnailUpload = $cloudinary->uploadApi()->upload(
            $request->file('thumbnail')->getRealPath(),
            ['folder' => 'articles/thumbnails']
        );
        $thumbnailPath = $thumbnailUpload['secure_url'];

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
                        $photoUpload = $cloudinary->uploadApi()->upload(
                            $block['file']->getRealPath(),
                            ['folder' => 'articles/photos']
                        );
                        $contentBlock['path'] = $photoUpload['secure_url'];
                        $hasPhoto = true;
                    }
                }

                $content[] = $contentBlock;
            }
        }

        Article::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'thumbnail' => $thumbnailPath,
            'hashtags' => $request->hashtags,
            'content' => $content,
            'has_photo' => $hasPhoto
        ]);
        
        // Log activity
        $this->logCreate('Article', $request->title);

        return redirect()->route('admin.articles.index')->with('success', 'Article created successfully');
    }

    public function show(Article $article, $title = null)
    {
        $article->load('user');
        return view('admin.articles.detail', compact('article'));
    }

    public function edit(Article $article, $title = null)
    {
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:10240',
            'hashtags' => 'required|array',
            'content' => 'required|array',
            'content.*.file' => 'nullable|image|mimes:jpeg,png,jpg|max:10240'
        ]);
        
        // Deteksi field yang berubah sebelum update
        $changedFields = $this->detectChangedFields($article, $request);

        $data = [
            'title' => $request->title,
            'hashtags' => $request->hashtags,
        ];

        if ($request->hasFile('thumbnail')) {
            $cloudinary = $this->getCloudinary();
            $thumbnailUpload = $cloudinary->uploadApi()->upload(
                $request->file('thumbnail')->getRealPath(),
                ['folder' => 'articles/thumbnails']
            );
            $data['thumbnail'] = $thumbnailUpload['secure_url'];
        }

        // Process content blocks
        $hasPhoto = false;
        $content = [];
        
        if ($request->has('content')) {
            $cloudinary = $this->getCloudinary();
            
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
                        $photoUpload = $cloudinary->uploadApi()->upload(
                            $block['file']->getRealPath(),
                            ['folder' => 'articles/photos']
                        );
                        $contentBlock['path'] = $photoUpload['secure_url'];
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
        
        // Log activity dengan field yang berubah
        $this->logUpdate('Article', $article->title, $changedFields);

        return redirect()->route('admin.articles.index')->with('success', 'Article updated successfully');
    }

    public function destroy(Article $article)
    {
        $articleTitle = $article->title;
        
        $article->delete();
        
        // Log activity
        $this->logDelete('Article', $articleTitle);

        return redirect()->route('admin.articles.index')->with('success', 'Article deleted successfully');
    }
}
