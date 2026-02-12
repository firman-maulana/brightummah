@extends('admin.layouts.sidebar')
@section('content')

<div class="ch3yp cnbwt cs7xl clu2m c6btv clbq0 cxsfz">

                    <!-- Page header -->
                    <div class="c2g1r cwnq4 cnlq0 c6r0l">

                        <!-- Left: Title -->
                        <div class="c2rn6 cdiog">
                            <h1 class="text-gray-800 dark:text-gray-100 font-bold c459m cbtcb">Discover Program</h1>
                        </div>

                        <!-- Right: Actions -->
                        <div class="cm3b7 c51uw ccww4 csdex cbe1i c4sak">

                            <!-- Search form -->
                            <form method="GET" action="{{ route('admin.programs') }}" class="cm84d" id="searchFormPrograms">
                                <label for="action-search" class="cn8jz">Search</label>
                                <input id="action-search" name="search" class="bg-white c2vpa caqf9 ct9oo" type="search" placeholder="Search programs..." value="{{ request('search') }}">
                                <input type="hidden" name="category" value="{{ request('category') }}">
                                <button class="c29dn cqdkw cini7 cqogy" type="submit" aria-label="Search">
                                    <svg class="ml-3 mr-2 cba8l c4it8 cmpw7 cdqku cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                                        <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                                    </svg>
                                </button>
                            </form>

                            <script>
                            document.getElementById('action-search').addEventListener('input', function() {
                                document.getElementById('searchFormPrograms').submit();
                            });
                            </script>

                            <!-- Add meetup button -->
                            <a class="btn bg-gray-900 cdj8c cg0jr ch8z9 cilvw cyn7a" href="{{ route('admin.programs.create') }}">
                                <svg class="cbm9w cbmv0 coqgc" width="16" height="16" viewBox="0 0 16 16">
                                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                                </svg>
                                <span class="cyga5">Add Program</span>
                            </a>
                        </div>

                    </div>

                    <!-- Filters -->
                    <div class="c6r0l">
                        <ul class="flex flex-wrap -m-1">
                            <li class="m-1">
                                <a href="{{ route('admin.programs', ['search' => request('search')]) }}" class="inline-flex items-center justify-center text-sm rounded-full border {{ !request('category') ? 'bg-gray-900 cg0jr c1xby cilvw c1k3n cpcyu' : 'border-gray-200 bg-white text-gray-500 dark:text-gray-400 cc0oq cghq3 cspbm c2vpa c1k3n' }} cxxol cdzfq c5vqk cb2br cwn3v">All</a>
                            </li>
                            @foreach($categories as $cat)
                            <li class="m-1">
                                <a href="{{ route('admin.programs', ['category' => $cat, 'search' => request('search')]) }}" class="inline-flex items-center justify-center text-sm rounded-full border {{ request('category') == $cat ? 'bg-gray-900 cg0jr c1xby cilvw c1k3n cpcyu' : 'border-gray-200 bg-white text-gray-500 dark:text-gray-400 cc0oq cghq3 cspbm c2vpa c1k3n' }} cxxol cdzfq c5vqk cb2br cwn3v">{{ $cat }}</a>
                            </li>
                            @endforeach
                        </ul>                    
                    </div>

                    <div class="text-sm text-gray-500 dark:text-gray-400 caf78 cdiog">{{ $totalPrograms }} {{ Str::plural('Program', $totalPrograms) }}</div>

                    @if($programs->count())
                    <!-- Content -->
                    <div class="cfjlj ckn6o cgd7w c4sak">

                        @foreach($programs as $index => $program)
                        <!-- Item -->
                        <article class="flex bg-white c2vpa cxe43 c1hly c5vqk">
                            <!-- Image -->
                            <a class="block 2xl:sidebar-expanded:w-56 cwdfl cdafh cm84d coqgc ckarq cd1i2" href="{{ route('admin.programs.show', $program) }}">
                                @if($program->image)
                                    <img class="ccrfs cfwu1 cqdkw cav8x c6btv" src="{{ $program->image }}" width="220" height="236" alt="{{ $program->name }}">
                                @else
                                    <img class="ccrfs cfwu1 cqdkw cav8x c6btv" src="{{ asset('assets/admin/img/meetups-thumb-01.jpg') }}" width="220" height="236" alt="{{ $program->name }}">
                                @endif
                            </a>
                            <!-- Content -->
                            <div class="flex cetff cbw8w csusu">
                                <div class="cbw8w">
                                    <div class="text-sm text-violet-500 cgulq c0ef0 c6f83">{{ $program->category }}</div>
                                    <a class="inline-flex c6f83" href="{{ route('admin.programs.show', $program) }}">
                                        <h3 class="font-bold text-gray-800 dark:text-gray-100 c7x0x">{{ $program->name }}</h3>
                                    </a>
                                    <div class="text-sm">{{ Str::limit($program->tujuan_program, 100) }}</div>
                                </div>
                                <!-- Footer -->
                                <div class="flex items-center cm3rx c7gr8">
                                    <!-- Tag -->
                                    <div class="inline-flex items-center border border-gray-200 dark:text-gray-400 rounded-full cghq3 c1ukq cydwr c1k3n ch4gv c1iho cwn3v">
                                        <svg class="h-3 mr-2 ca2tk cyq9w cuv1l" viewBox="0 0 16 12">
                                            <path d="m16 2-4 2.4V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7.6l4 2.4V2ZM2 10V2h8v8H2Z"></path>
                                        </svg>
                                        <span>{{ $program->mode }}</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        @endforeach

                    </div>
                    @else
                    {{-- Empty State --}}
                    <div class="text-center py-5">
                        <i class="bi bi-folder text-muted fs-1"></i>
                        <p class="mt-3 text-muted">No programs available</p>
                        <a href="{{ route('admin.programs.create') }}" class="btn btn-primary btn-sm">
                            Add your first program
                        </a>
                    </div>
                    @endif
                    
                    <!-- Pagination -->
                     @if($programs->hasPages())
                    <div class="cvxzw">
                        <div class="flex justify-center">
                            <nav class="flex" role="navigation" aria-label="Navigation">
                                <!-- Previous Button -->
                                <div class="mr-2">
                                    @if($programs->onFirstPage())
                                        <span class="inline-flex items-center justify-center bg-white border border-gray-200 cghq3 co1wq c2vpa ckbo4 cb8zv cdzfq ch4gv cuvgf">
                                            <span class="cn8jz">Previous</span>
                                            <svg class="cbm9w" width="16" height="16" viewBox="0 0 16 16">
                                                <path d="M9.4 13.4l1.4-1.4-4-4 4-4-1.4-1.4L4 8z"></path>
                                            </svg>
                                        </span>
                                    @else
                                        <a href="{{ $programs->appends(request()->except('page'))->previousPageUrl() }}" class="inline-flex items-center justify-center bg-white border border-gray-200 text-violet-500 cghq3 ck4w7 csd0k c2vpa cb8zv cdzfq c5vqk ch4gv cuvgf">
                                            <span class="cn8jz">Previous</span>
                                            <svg class="cbm9w" width="16" height="16" viewBox="0 0 16 16">
                                                <path d="M9.4 13.4l1.4-1.4-4-4 4-4-1.4-1.4L4 8z"></path>
                                            </svg>
                                        </a>
                                    @endif
                                </div>
                                
                                <!-- Page Numbers -->
                                <ul class="inline-flex text-sm cd1s6 c1k3n cb8zv c5vqk">
                                    @foreach($programs->getUrlRange(1, $programs->lastPage()) as $page => $url)
                                        @if($page == $programs->currentPage())
                                            <li>
                                                <span class="inline-flex items-center justify-center bg-white border border-gray-200 text-violet-500 cghq3 c2vpa cj8eb cdzfq cypnr cuvgf">{{ $page }}</span>
                                            </li>
                                        @else
                                            <li>
                                                <a class="inline-flex items-center justify-center bg-white border border-gray-200 cghq3 ck4w7 c0zkc csd0k c2vpa c1ukq cdzfq cypnr cuvgf" href="{{ $programs->appends(request()->except('page'))->url($page) }}">{{ $page }}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                                
                                <!-- Next Button -->
                                <div class="c8bkw">
                                    @if($programs->hasMorePages())
                                        <a href="{{ $programs->appends(request()->except('page'))->nextPageUrl() }}" class="inline-flex items-center justify-center bg-white border border-gray-200 text-violet-500 cghq3 ck4w7 csd0k c2vpa cb8zv cdzfq c5vqk ch4gv cuvgf">
                                            <span class="cn8jz">Next</span>
                                            <svg class="cbm9w" width="16" height="16" viewBox="0 0 16 16">
                                                <path d="M6.6 13.4L5.2 12l4-4-4-4 1.4-1.4L12 8z"></path>
                                            </svg>
                                        </a>
                                    @else
                                        <span class="inline-flex items-center justify-center bg-white border border-gray-200 cghq3 co1wq c2vpa ckbo4 cb8zv cdzfq ch4gv cuvgf">
                                            <span class="cn8jz">Next</span>
                                            <svg class="cbm9w" width="16" height="16" viewBox="0 0 16 16">
                                                <path d="M6.6 13.4L5.2 12l4-4-4-4 1.4-1.4L12 8z"></path>
                                            </svg>
                                        </span>
                                    @endif
                                </div>
                            </nav>
                        </div>
                    </div>
                    @endif


                </div>

@endsection