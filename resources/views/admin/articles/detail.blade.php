@extends('admin.layouts.sidebar')
@section('content')

<div class="cnbwt cs7xl c6btv clbq0 cxsfz">
            
                    <!-- Page content -->
                    <div class="flex c7k8z c2eqw cxsy8 cbxj7 cetff clu2m">
            
                        <!-- Content -->
                        <div>
                            <div class="cai6b">
                                <a class="bg-white border-gray-200 text-gray-800 cc0oq cghq3 cspbm c0zkc c2vpa cnf4p cb2br" href="{{ route('admin.articles.index') }}">
                                    <svg class="mr-2 cmpw7 cdqku cbm9w" width="7" height="12" viewBox="0 0 7 12">
                                        <path d="M5.4.6 6.8 2l-4 4 4 4-1.4 1.4L0 6z"></path>
                                    </svg>
                                    <span>Back To Articles</span>
                                </a>
                            </div>
                            <div class="text-sm  text-gray-500 dark:text-gray-400 caf78 c6f83">Posted {{ $article->created_at->timezone('Asia/Jakarta')->format('M d, Y') }}</div>
                            <header class="cdiog">
                                <!-- Title -->
                                <h1 class="text-gray-800 dark:text-gray-100 font-bold c459m cbtcb">{{ $article->title }}</h1>
                            </header>

                            <!-- Company information (mobile) -->
                            <div class="bg-white c2vpa c1hly c2y99 ccwri cai6b csusu">
                                <div class="cydwr cai6b">
                                    <div class="inline-flex cxg65">
                                        <img class="rounded-full c3nk1 crzrx" src="./images/company-icon-01.svg" width="64" height="64" alt="Author">
                                    </div>
                                    <div class="font-bold text-gray-800 dark:text-gray-100 c7x0x cu6vl">Admin</div>
                                    <div class="text-sm text-gray-500 dark:text-gray-400 caf78">Author</div>
                                </div>
                                <div class="c40hu cld0c cweej cnlq0">
                                    <a href="{{ route('admin.articles.edit', $article->id) }}" class="btn bg-gray-900 cdj8c cg0jr ch8z9 cilvw cyn7a c6btv">edit -&gt;</a>
                                    <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this article?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn border-gray-200 text-gray-800 cc0oq cghq3 cspbm c0zkc c6btv">delete</button>
                                    </form>
                                </div>
                            </div>
            
                            <!-- Tags -->
                            <div class="cai6b">
                                <div class="flex flex-wrap items-center -m-1">
                                    @foreach($article->hashtags as $hashtag)
                                    <div class="m-1">
                                        <a class="btn-xs border-gray-200 text-gray-800 rounded-full cc0oq cghq3 cspbm c0zkc cpw2l ch4gv c1iho cwn3v" href="#0">#{{ $hashtag }}</a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <hr class="cghq3 cbv37 cr4kg cf7n6">
            
                            <!-- ISI KONTEN ARTICLE -->
                            @foreach($article->content as $block)
                                @if($block['type'] === 'paragraph')
                                    <div>
                                        <div class="cmxzb">
                                            <p>{{ $block['text'] }}</p>
                                        </div>
                                    </div>
                                    <hr class="cghq3 cbv37 cr4kg cf7n6">
                                @elseif($block['type'] === 'point')
                                    <div>
                                        <div class="cmxzb">
                                            <ul class="cjqz5 cektu c1647">
                                                @foreach($block['points'] as $point)
                                                    <li>{{ $point }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <hr class="cghq3 cbv37 cr4kg cf7n6">
                                @elseif($block['type'] === 'photo' && isset($block['path']))
                                    <div>
                                        <div class="cmxzb">
                                            <img src="{{ asset('storage/' . $block['path']) }}" alt="Article image" class="c6btv rounded">
                                        </div>
                                    </div>
                                    <hr class="cghq3 cbv37 cr4kg cf7n6">
                                @endif
                            @endforeach
                            
                            <!-- Apply section -->
                            <div class="cgndh">
                                <div class="flex items-center cm3rx">
                                    <!-- Share -->
                                    <div class="flex items-center">
                                        <div class="text-sm text-gray-500 dark:text-gray-400 mr-4 caf78">Share:</div>
                                        <div class="flex items-center cp3jk">
                                           <button class="casia cz0f0 cmpw7 cdqku">
   <span class="cn8jz">Share on Website</span>
   <svg class="cbm9w" width="16" height="16" viewBox="0 0 16 16"
      xmlns="http://www.w3.org/2000/svg">
      <path d="M11 0c1.3 0 2.6.5 3.5 1.5 1 .9 1.5 2.2 1.5 3.5 0 1.3-.5 2.6-1.4 3.5l-1.2 1.2c-.2.2-.5.3-.7.3-.2 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l1.1-1.2c.6-.5.9-1.3.9-2.1s-.3-1.6-.9-2.2C12 1.7 10 1.7 8.9 2.8L7.7 4c-.4.4-1 .4-1.4 0-.4-.4-.4-1 0-1.4l1.2-1.1C8.4.5 9.7 0 11 0zM8.3 12c.4-.4 1-.5 1.4-.1.4.4.4 1 0 1.4l-1.2 1.2C7.6 15.5 6.3 16 5 16c-1.3 0-2.6-.5-3.5-1.5C.5 13.6 0 12.3 0 11c0-1.3.5-2.6 1.5-3.5l1.1-1.2c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4L2.9 8.9c-.6.5-.9 1.3-.9 2.1s.3 1.6.9 2.2c1.1 1.1 3.1 1.1 4.2 0L8.3 12zm1.1-6.8c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-4.2 4.2c-.2.2-.5.3-.7.3-.2 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l4.2-4.2z"
         fill="currentColor"/>
   </svg>
</button>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="cghq3 cbv37 cr4kg cf7n6">
            
                        </div>
            
                        <!-- Sidebar -->
                        <div class="hidden cr78y cv9uc">
            
                            <!-- Company information (desktop) -->
                            <div class="bg-white c2vpa c1hly c5vqk cl6wk ch0sq csusu">
                                <div class="cydwr cai6b">
                                    <div class="inline-flex cxg65">
                                        <img class="rounded-full c3nk1 crzrx" src="./images/company-icon-01.svg" width="64" height="64" alt="Author">
                                    </div>
                                    <div class="font-bold text-gray-800 dark:text-gray-100 c7x0x cu6vl">Admin</div>
                                    <div class="text-sm text-gray-500 dark:text-gray-400 caf78">Author</div>
                                </div>
                                <div class="cweej">
                                    <a href="{{ route('admin.articles.edit', $article->id) }}" class="btn bg-gray-900 cdj8c cg0jr ch8z9 cilvw cyn7a c6btv">edit -&gt;</a>
                                    <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this article?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn border-gray-200 text-gray-800 cc0oq cghq3 cspbm c0zkc c6btv">delete</button>
                                    </form>
                                </div>
                            </div>
            
                        </div>
            
                    </div>
            
                </div>

@endsection
