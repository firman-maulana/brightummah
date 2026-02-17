@extends('admin.layouts.sidebar')
@section('content')

<div class="ch3yp cnbwt cs7xl clu2m c6btv clbq0 cxsfz">

    <!-- Page header -->
    <div class="c2g1r cwnq4 cnlq0 cgd7w">
        <!-- Left: Title -->
        <div class="c2rn6 cdiog">
            <h1 class="text-gray-800 dark:text-gray-100 font-bold c459m cbtcb">BUA Articles</h1>
        </div>

        <!-- Right: Actions -->
        <div class="cm3b7 c51uw ccww4 csdex cbe1i c4sak">
            <!-- Add Articles button -->
            <a href="{{ route('admin.articles.create') }}" class="btn bg-gray-900 cdj8c cg0jr ch8z9 cilvw cyn7a">Add Articles</a>
        </div>
    </div>

    <!-- Cards -->
    <div class="c7nom cw4lm c6dm7 c4sak">
        @php
            $columns = 4;
            // Reverse articles so newest is first
            $articlesArray = $articles->reverse()->values();
            
            // Group articles by columns (fill columns from left to right, top to bottom)
            $articlesGrouped = collect([]);
            for ($i = 0; $i < $columns; $i++) {
                $articlesGrouped->push(collect());
            }
            
            foreach ($articlesArray as $index => $article) {
                $columnIndex = $index % $columns;
                $articlesGrouped[$columnIndex]->push($article);
            }
        @endphp

        @foreach($articlesGrouped as $columnIndex => $columnArticles)
        <!-- Column {{ $columnIndex + 1 }} -->
        <div class="ci500 cdjoa coz6m">
            <!-- Column header -->
            <header>
                <div class="flex items-center cm3rx c6f83">
                    <h2 class="text-gray-800 dark:text-gray-100 cgulq c941w cbw8w">
                        @if($columnIndex === 0) Articles @else &nbsp; @endif
                    </h2>
                </div>

                <!-- Cards -->
                <div class="cbe1i c4sak">
                    @foreach($columnArticles as $article)
                    <!-- Article Card -->
                    <div class="bg-white c2vpa c1hly c5vqk clxb7">
                        <!-- Body -->
                        <div class="cxg65">
                            <!-- Title -->
                            <div class="flex items-center c6f83">
                                <div class="flex mr-2 cjgpi coqgc cg40v">
                                    <a class="block" href="#0">
                                        <img class="rounded-full ctxup cv1so chwil ct7xr" 
                                             src="./images/user-28-12.jpg" 
                                             width="28" height="28" alt="User 12">
                                    </a>
                                </div>
                                <div class="cbw8w">
                                    <h2 class="text-gray-800 dark:text-gray-100 cgulq">Admin</h2>
                                    <div class="text-gray-500 c1k3n c1iho">
                                        {{ $article->created_at->timezone('Asia/Jakarta')->format('g:i A M d') }}
                                    </div>
                                </div>
                            </div>
                            <!-- Content -->
                            <div>
                                <div class="text-sm">
                                    <a href="{{ route('admin.articles.show', $article->id) }}" 
                                       class="text-gray-800 dark:text-gray-100 hover:text-violet-500">
                                        {{ $article->title }}
                                    </a>
                                    @foreach($article->hashtags as $hashtag)
                                        <a class="text-violet-500 c5ylh ceetm c1k3n" href="#0">#{{ $hashtag }}</a>
                                    @endforeach
                                </div>
                                
                                @if($article->has_photo)
                                    @php
                                        $firstPhoto = collect($article->content)->firstWhere('type', 'photo');
                                    @endphp
                                    @if($firstPhoto && isset($firstPhoto['path']))
                                        <img class="c6btv c7gr8" 
                                             src="{{ asset('storage/' . $firstPhoto['path']) }}" 
                                             width="259" height="142" alt="{{ $article->title }}">
                                    @endif
                                @endif
                            </div>
                        </div>
                        <!-- Footer -->
                        <div class="flex items-center cm3rx">
                            <!-- Left side -->
                            <div></div>
                            <!-- Right side -->
                            <div class="flex items-center">
                                <!-- Like button -->
                                <button class="flex items-center ml-3 casia cz0f0 cmpw7 cdqku">
                                    <svg class="cbm9w coqgc ci53t" width="16" height="16" viewBox="0 0 16 16">
                                        <path d="M14.682 2.318A4.485 4.485 0 0011.5 1 4.377 4.377 0 008 2.707 4.383 4.383 0 004.5 1a4.5 4.5 0 00-3.182 7.682L8 15l6.682-6.318a4.5 4.5 0 000-6.364zm-1.4 4.933L8 12.247l-5.285-5A2.5 2.5 0 014.5 3c1.437 0 2.312.681 3.5 2.625C9.187 3.681 10.062 3 11.5 3a2.5 2.5 0 011.785 4.251h-.003z"></path>
                                    </svg>
                                    <div class="text-sm text-gray-500 dark:text-gray-400">0</div>
                                </button>
                                <!-- Attach button -->
                                <button class="ml-3 casia cz0f0 cmpw7 cdqku">
                                    <svg class="cbm9w coqgc ci53t" width="16" height="16" viewBox="0 0 16 16">
                                        <path d="M11 0c1.3 0 2.6.5 3.5 1.5 1 .9 1.5 2.2 1.5 3.5 0 1.3-.5 2.6-1.4 3.5l-1.2 1.2c-.2.2-.5.3-.7.3-.2 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l1.1-1.2c.6-.5.9-1.3.9-2.1s-.3-1.6-.9-2.2C12 1.7 10 1.7 8.9 2.8L7.7 4c-.4.4-1 .4-1.4 0-.4-.4-.4-1 0-1.4l1.2-1.1C8.4.5 9.7 0 11 0zM8.3 12c.4-.4 1-.5 1.4-.1.4.4.4 1 0 1.4l-1.2 1.2C7.6 15.5 6.3 16 5 16c-1.3 0-2.6-.5-3.5-1.5C.5 13.6 0 12.3 0 11c0-1.3.5-2.6 1.5-3.5l1.1-1.2c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4L2.9 8.9c-.6.5-.9 1.3-.9 2.1s.3 1.6.9 2.2c1.1 1.1 3.1 1.1 4.2 0L8.3 12zm1.1-6.8c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-4.2 4.2c-.2.2-.5.3-.7.3-.2 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l4.2-4.2z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </header>
        </div>
        @endforeach
    </div>

</div>

@endsection
