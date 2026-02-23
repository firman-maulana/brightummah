@php
    $title = 'Bright Ummah Academy - Article Detail';
@endphp
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
                                        <img class="rounded-full c3nk1 crzrx" src="{{ asset('assets/admin/img/user-avatar-32.png') }}" width="64" height="64" alt="Author">
                                    </div>
                                    <div class="font-bold text-gray-800 dark:text-gray-100 c7x0x cu6vl">{{ $article->user ? $article->user->name : 'Admin' }}</div>
                                    <div class="text-sm text-gray-500 dark:text-gray-400 caf78">{{ $article->user ? ucfirst($article->user->role) : 'Admin' }}</div>
                                </div>
                                <div class="c40hu cld0c cweej cnlq0">
                                    <a href="{{ route('admin.articles.edit', $article->id) }}" class="btn bg-gray-900 cdj8c cg0jr ch8z9 cilvw cyn7a c6btv">
                                        <svg class="cmpw7 cdqku cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
                                            <path d="M11.7.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM4.6 14H2v-2.6l6-6L10.6 8l-6 6zM12 6.6L9.4 4 11 2.4 13.6 5 12 6.6z"></path>
                                        </svg>
                                        <span class="cpts2">Edit</span>
                                    </a>
                                    <button @click="$dispatch('open-delete-modal', { id: {{ $article->id }}, title: '{{ addslashes($article->title) }}' })" class="btn border-gray-200 text-gray-800 cc0oq cghq3 cspbm c0zkc c6btv">
                                        <svg class="cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
                                            <path fill="red" d="M5 7h2v6H5V7zm4 0h2v6H9V7zm3-6v2h4v2h-1v10c0 .6-.4 1-1 1H2c-.6 0-1-.4-1-1V5H0V3h4V1c0-.6.4-1 1-1h6c.6 0 1 .4 1 1zM6 2v1h4V2H6zm7 3H3v9h10V5z"/>
                                        </svg>
                                        <span class="c8bkw">Delete</span>
                                    </button>
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
                                            <img src="{{ $block['path'] }}" alt="Article image" class="c6btv rounded">
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
                                        <img class="rounded-full c3nk1 crzrx" src="{{ asset('assets/admin/img/user-avatar-32.png') }}" width="64" height="64" alt="Author">
                                    </div>
                                    <div class="font-bold text-gray-800 dark:text-gray-100 c7x0x cu6vl">{{ $article->user ? $article->user->name : 'Admin' }}</div>
                                    <div class="text-sm text-gray-500 dark:text-gray-400 caf78">{{ $article->user ? ucfirst($article->user->role) : 'Admin' }}</div>
                                </div>
                                <div class="cweej">
                                    <a href="{{ route('admin.articles.edit', $article->id) }}" class="btn bg-gray-900 cdj8c cg0jr ch8z9 cilvw cyn7a c6btv">
                                        <svg class="cmpw7 cdqku cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
                                            <path d="M11.7.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM4.6 14H2v-2.6l6-6L10.6 8l-6 6zM12 6.6L9.4 4 11 2.4 13.6 5 12 6.6z"></path>
                                        </svg>
                                        <span class="cpts2">Edit</span>
                                    </a>
                                    <button @click="$dispatch('open-delete-modal', { id: {{ $article->id }}, title: '{{ addslashes($article->title) }}' })" class="btn border-gray-200 text-gray-800 cc0oq cghq3 cspbm c0zkc c6btv">
                                        <svg class="cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
                                            <path fill="red" d="M5 7h2v6H5V7zm4 0h2v6H9V7zm3-6v2h4v2h-1v10c0 .6-.4 1-1 1H2c-.6 0-1-.4-1-1V5H0V3h4V1c0-.6.4-1 1-1h6c.6 0 1 .4 1 1zM6 2v1h4V2H6zm7 3H3v9h10V5z"/>
                                        </svg>
                                        <span class="c8bkw">Delete</span>
                                    </button>
                                </div>
                            </div>
            
                        </div>
            
                    </div>
            
                </div>

                <!-- Delete Modal -->
                <div x-data="{ modalOpen: false, deleteArticleId: null, deleteArticleTitle: '' }" @open-delete-modal.window="modalOpen = true; deleteArticleId = $event.detail.id; deleteArticleTitle = $event.detail.title">
                    <!-- Modal backdrop -->
                    <div class="bg-gray-900 c29tc c2iqv cini7 cjxg0 cys4p" x-show="modalOpen" x-transition:enter="cxxol cbmha c8uqq" x-transition:enter-start="opacity-0" x-transition:enter-end="cgcrn" x-transition:leave="cxxol cbmha cf39k" x-transition:leave-start="cgcrn" x-transition:leave-end="opacity-0" aria-hidden="true" x-cloak=""></div>
                    <!-- Modal dialog -->
                    <div id="danger-modal" class="flex items-center justify-center cxe43 cnbwt cini7 cjxg0 cys4p codu7 clbq0" role="dialog" aria-modal="true" x-show="modalOpen" x-transition:enter="cxxol cz9ag c8uqq" x-transition:enter-start="opacity-0 cu867" x-transition:enter-end="cgcrn csdj3" x-transition:leave="cxxol cz9ag c8uqq" x-transition:leave-start="cgcrn csdj3" x-transition:leave-end="opacity-0 cu867" x-cloak="">
                        <div class="bg-white c2vpa co669 caufm cb8zv ccwri crwo8 c6btv" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                            <div class="flex cm4ey csusu">
                                <!-- Icon -->
                                <div class="rounded-full flex items-center justify-center dark:bg-gray-700 cyhlg coqgc cr0m4 c59cs">
                                    <svg class="cbm9w czr3n coqgc" width="16" height="16" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                    </svg>
                                </div>
                                <!-- Content -->
                                <div>
                                    <!-- Modal header -->
                                    <div class="c6f83">
                                        <div class="text-gray-800 dark:text-gray-100 cgulq c7x0x">Delete Article?</div>
                                    </div>
                                    <!-- Modal content -->
                                    <div class="text-sm ckdp3">
                                        <div class="cweej">
                                            <p>Are you sure you want to delete article <strong x-text="deleteArticleTitle"></strong>? This action cannot be undone.</p>
                                        </div>
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="flex flex-wrap justify-end ch3kz">
                                        <button class="border-gray-200 text-gray-800 cc0oq cghq3 cspbm c0zkc cnf4p" @click="modalOpen = false">Cancel</button>
                                        <form :action="'/admin/articles/' + deleteArticleId" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="c8ham cg902 cpcyu cnf4p">Yes, Delete it</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                            
                </div>

@endsection
