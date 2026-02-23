@php
    $title = 'Bright Ummah Academy - Changelog';
@endphp
@extends('admin.layouts.secondsidebar')

@section('content')

<!-- Page header -->
                <div class="border-gray-200 cghq3 c2g1r cwnq4 ctv3r cnlq0 cnbwt clbq0 cxsfz">
                
                    <!-- Left: Title -->
                    <div class="c2rn6 cdiog">
                        <h1 class="text-gray-800 dark:text-gray-100 font-bold c459m cbtcb">Changelog</h1>
                    </div>
                </div>  

                <div class="ch3yp cnbwt cs7xl clu2m c6btv clbq0 cxsfz" x-data="{ activeFilter: '{{ request('category', 'all') }}' }">
                    <div class="cbb0u ct8yz">

                        <!-- Filters -->
                        <div class="cjdac cmfxv c6f83">
                            <ul class="flex flex-wrap -m-1">
                                <li class="m-1">
                                    <a href="{{ route('admin.changelog') }}" 
                                       @click="activeFilter = 'all'"
                                       class="inline-flex items-center justify-center text-sm rounded-full border c1k3n cpcyu cxxol cdzfq c5vqk cb2br cwn3v"
                                       :class="activeFilter === 'all' ? 'bg-gray-900 cg0jr c1xby cilvw' : 'border-gray-200 bg-white text-gray-500 dark:text-gray-400 cc0oq cghq3 cspbm c2vpa'">
                                        View All
                                    </a>
                                </li>
                                <li class="m-1">
                                    <a href="{{ route('admin.changelog', ['category' => 'Saran Fitur']) }}" 
                                       @click="activeFilter = 'Saran Fitur'"
                                       class="inline-flex items-center justify-center text-sm rounded-full border c1k3n cxxol cdzfq c5vqk cb2br cwn3v"
                                       :class="activeFilter === 'Saran Fitur' ? 'bg-gray-900 cg0jr c1xby cilvw' : 'border-gray-200 bg-white text-gray-500 dark:text-gray-400 cc0oq cghq3 cspbm c2vpa'">
                                        Saran Fitur
                                    </a>
                                </li>
                                <li class="m-1">
                                    <a href="{{ route('admin.changelog', ['category' => 'Lapor Bug']) }}" 
                                       @click="activeFilter = 'Lapor Bug'"
                                       class="inline-flex items-center justify-center text-sm rounded-full border c1k3n cxxol cdzfq c5vqk cb2br cwn3v"
                                       :class="activeFilter === 'Lapor Bug' ? 'bg-gray-900 cg0jr c1xby cilvw' : 'border-gray-200 bg-white text-gray-500 dark:text-gray-400 cc0oq cghq3 cspbm c2vpa'">
                                        Lapor Bug
                                    </a>
                                </li>
                                <li class="m-1">
                                    <a href="{{ route('admin.changelog', ['category' => 'Lainnya']) }}" 
                                       @click="activeFilter = 'Lainnya'"
                                       class="inline-flex items-center justify-center text-sm rounded-full border c1k3n cxxol cdzfq c5vqk cb2br cwn3v"
                                       :class="activeFilter === 'Lainnya' ? 'bg-gray-900 cg0jr c1xby cilvw' : 'border-gray-200 bg-white text-gray-500 dark:text-gray-400 cc0oq cghq3 cspbm c2vpa'">
                                        Lainnya
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Posts -->
                        <div class="cjdac">
                            @forelse($bugReports as $report)
                            <!-- Post -->
                            <article class="cxtep">
                                <div class="clxbf">
                                    <div class="coqgc c5srn">
                                        <div class="cmpw7 cgulq cdqku cg5yh c0ef0 c1iho">{{ $report->created_at->format('d F, Y') }}</div>
                                    </div>
                                    <div class="border-gray-200 cghq3 ctv3r cbw8w cfv15">
                                        <header>
                                            <div class="flex items-center c8vtj ch3kz cdiog">
                                                <div class="flex items-center">
                                                    <a class="block mr-2 coqgc" href="#0">
                                                        <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/user-avatar-32.png') }}" width="32" height="32" alt="User">
                                                    </a>
                                                    <a class="block text-sm text-gray-800 dark:text-gray-100 cgulq" href="#0">
                                                        {{ $report->user->name }}
                                                    </a>
                                                </div>
                                                <div class="co1wq cdqku">·</div>
                                                <div>
                                                    @if($report->category == 'Saran Fitur')
                                                        <div class="inline-flex rounded-full c1lu4 c19il cydwr c1k3n ch4gv c1iho cwn3v">{{ $report->category }}</div>
                                                    @elseif($report->category == 'Lapor Bug')
                                                        <div class="inline-flex rounded-full cfts0 c5px7 cydwr c1k3n ch4gv c1iho cwn3v">{{ $report->category }}</div>
                                                    @else
                                                        <div class="inline-flex rounded-full cx6qj cz4gk cydwr c1k3n ch4gv c1iho cwn3v">{{ $report->category }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                        </header>
                                        <div class="cjav5">
                                            <p>{{ $report->message }}</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            @empty
                            <div class="text-center text-gray-500 dark:text-gray-400 cjav5">
                                <p>Belum ada laporan.</p>
                            </div>
                            @endforelse
                        </div>

                        <!-- Pagination -->
                        @if($bugReports->hasPages())
                        <div class="cjdac cmfxv cgndh">
                            <div class="flex c2g1r cwnq4 c6o0w cetff">
                                <nav class="cafp8 c2rn6 cdiog" role="navigation" aria-label="Navigation">
                                    <ul class="flex justify-center">
                                        <li class="ml-3 c77jh">
                                            @if($bugReports->onFirstPage())
                                                <span class="btn bg-white border-gray-200 cghq3 co1wq c2vpa ckbo4">&lt;- Previous</span>
                                            @else
                                                <a href="{{ $bugReports->appends(['category' => request('category')])->previousPageUrl() }}" class="btn bg-white border-gray-200 text-gray-800 cc0oq cghq3 cspbm c0zkc c2vpa">&lt;- Previous</a>
                                            @endif
                                        </li>
                                        <li class="ml-3 c77jh">
                                            @if($bugReports->hasMorePages())
                                                <a class="btn bg-white border-gray-200 text-gray-800 cc0oq cghq3 cspbm c0zkc c2vpa" href="{{ $bugReports->appends(['category' => request('category')])->nextPageUrl() }}">Next -&gt;</a>
                                            @else
                                                <span class="btn bg-white border-gray-200 cghq3 co1wq c2vpa ckbo4">Next -&gt;</span>
                                            @endif
                                        </li>
                                    </ul>
                                </nav>
                                <div class="text-sm text-gray-500 c2bzj cydwr">
                                    Showing <span class="c0zkc c1ukq c1k3n">{{ $bugReports->firstItem() ?? 0 }}</span> to <span class="c0zkc c1ukq c1k3n">{{ $bugReports->lastItem() ?? 0 }}</span> of <span class="c0zkc c1ukq c1k3n">{{ $bugReports->total() }}</span> results
                                </div>
                            </div>
                        </div>
                        @endif

                    </div>
                </div>

@endsection
