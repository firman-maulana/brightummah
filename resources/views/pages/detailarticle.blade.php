@extends('layouts.main')

@section('content')
<!-- breadcrumb-area-start -->
<div class="it-breadcrumb-area it-breadcrumb-bg" style="background-image: url('{{ asset('storage/' . $article->thumbnail) }}'); background-size: cover; background-position: center;">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="it-breadcrumb-content text-center">
               <h3 class="it-breadcrumb-title text-white">{{ $article->title }}</h3>
               <div class="it-breadcrumb-item">
                  <span><a href="{{ route('home') }}">home</a></span>
                  <span class="color">Article Detail</span>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- breadcrumb-area-end -->

<!-- article-details-area-start -->
<div class="it-blog-details-area pt-120 pb-120">
   <div class="container">
      <div class="row">
         <div class="col-xl-8 col-lg-8">
            <div class="it-blog-details-wrap">
               <!-- Article Header -->
               <div class="it-blog-details-thumb mb-40">
                  <img class="w-100 border-radius-20" src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->title }}">
               </div>

               <!-- Article Meta -->
               <div class="it-blog-details-meta mb-30">
                  <div class="d-flex flex-wrap gap-3">
                     @foreach($article->hashtags as $tag)
                        <span class="badge bg-primary">{{ $tag }}</span>
                     @endforeach
                  </div>
                  <div class="mt-3">
                     <span class="text-muted"><i class="fa-light fa-calendar-days"></i> {{ $article->created_at->format('M d, Y') }}</span>
                  </div>
               </div>

               <!-- Article Title -->
               <h3 class="it-blog-details-title mb-30">{{ $article->title }}</h3>

               <!-- Article Content -->
               <div class="it-blog-details-content">
                  @foreach($article->content as $block)
                     @if($block['type'] === 'paragraph')
                        <p class="mb-30">{{ $block['text'] }}</p>
                     @elseif($block['type'] === 'point')
                        <ul class="it-blog-details-list mb-30">
                           @foreach($block['points'] as $point)
                              <li><i class="fa-light fa-check"></i> {{ $point }}</li>
                           @endforeach
                        </ul>
                     @elseif($block['type'] === 'photo')
                        <div class="it-blog-details-thumb mb-40">
                           <img class="w-100 border-radius-20" src="{{ asset('storage/' . $block['path']) }}" alt="Article photo">
                        </div>
                     @endif
                  @endforeach
               </div>

               <!-- Share Section -->
               <div class="it-blog-details-share mt-50 pt-40 border-top">
                  <div class="row align-items-center">
                     <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="it-blog-details-tag">
                           <span>Tags:</span>
                           @foreach($article->hashtags as $tag)
                              <a href="#">{{ $tag }}</a>
                           @endforeach
                        </div>
                     </div>
                     <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="it-blog-details-social text-end">
                           <span>Share:</span>
                           <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                           <a href="#"><i class="fa-brands fa-twitter"></i></a>
                           <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- Sidebar -->
         <div class="col-xl-4 col-lg-4">
            <div class="it-blog-sidebar">
               <!-- Recent Articles -->
               <div class="it-blog-sidebar-widget mb-40">
                  <h4 class="it-blog-sidebar-title">Recent Articles</h4>
                  <div class="it-blog-sidebar-rc">
                     @php
                        $recentArticles = \App\Models\Article::where('id', '!=', $article->id)->latest()->take(3)->get();
                     @endphp
                     @foreach($recentArticles as $recent)
                     <div class="it-blog-sidebar-rc-item d-flex align-items-center mb-20">
                        <div class="it-blog-sidebar-rc-thumb">
                           <a href="{{ route('articles.detail', $recent->id) }}">
                              <img src="{{ asset('storage/' . $recent->thumbnail) }}" alt="{{ $recent->title }}" style="width: 80px; height: 80px; object-fit: cover; border-radius: 10px;">
                           </a>
                        </div>
                        <div class="it-blog-sidebar-rc-content">
                           <h5 class="it-blog-sidebar-rc-title">
                              <a href="{{ route('articles.detail', $recent->id) }}">{{ Str::limit($recent->title, 50) }}</a>
                           </h5>
                           <span><i class="fa-light fa-calendar-days"></i> {{ $recent->created_at->format('M d, Y') }}</span>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>

               <!-- Tags -->
               <div class="it-blog-sidebar-widget">
                  <h4 class="it-blog-sidebar-title">Popular Tags</h4>
                  <div class="it-blog-sidebar-tag">
                     @php
                        $allTags = \App\Models\Article::pluck('hashtags')->flatten()->unique()->take(10);
                     @endphp
                     @foreach($allTags as $tag)
                        <a href="#">{{ $tag }}</a>
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- article-details-area-end -->
@endsection
