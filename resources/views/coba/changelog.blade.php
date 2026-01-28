@extends('coba.layouts.sidebar')

@section('content')

<!-- Page header -->
                <div class="border-gray-200 cghq3 c2g1r cwnq4 ctv3r cnlq0 cnbwt clbq0 cxsfz">
                
                    <!-- Left: Title -->
                    <div class="c2rn6 cdiog">
                        <h1 class="text-gray-800 dark:text-gray-100 font-bold c459m cbtcb">Changelog</h1>
                    </div>
                
                    <!-- Right: Actions -->
                    <div class="cm3b7 c51uw ccww4 csdex cbe1i c4sak">
                
                        <!-- Add entry button -->
                        <button class="btn bg-gray-900 cdj8c cg0jr ch8z9 cilvw cyn7a">Add Entry</button>
                
                    </div>
                
                </div>  

                <div class="ch3yp cnbwt cs7xl clu2m c6btv clbq0 cxsfz">
                    <div class="cbb0u ct8yz">

                        <!-- Filters -->
                        <div class="cjdac cmfxv c6f83">
                            <ul class="flex flex-wrap -m-1">
                                <li class="m-1">
                                    <button class="inline-flex items-center justify-center text-sm rounded-full border bg-gray-900 cg0jr c1xby cilvw c1k3n cpcyu cxxol cdzfq c5vqk cb2br cwn3v">View All</button>
                                </li>
                                <li class="m-1">
                                    <button class="inline-flex items-center justify-center text-sm rounded-full border border-gray-200 bg-white text-gray-500 dark:text-gray-400 cc0oq cghq3 cspbm c2vpa c1k3n cxxol cdzfq c5vqk cb2br cwn3v">Announcements</button>
                                </li>
                                <li class="m-1">
                                    <button class="inline-flex items-center justify-center text-sm rounded-full border border-gray-200 bg-white text-gray-500 dark:text-gray-400 cc0oq cghq3 cspbm c2vpa c1k3n cxxol cdzfq c5vqk cb2br cwn3v">Bug Fix</button>
                                </li>
                                <li class="m-1">
                                    <button class="inline-flex items-center justify-center text-sm rounded-full border border-gray-200 bg-white text-gray-500 dark:text-gray-400 cc0oq cghq3 cspbm c2vpa c1k3n cxxol cdzfq c5vqk cb2br cwn3v">Product</button>
                                </li>
                                <li class="m-1">
                                    <button class="inline-flex items-center justify-center text-sm rounded-full border border-gray-200 bg-white text-gray-500 dark:text-gray-400 cc0oq cghq3 cspbm c2vpa c1k3n cxxol cdzfq c5vqk cb2br cwn3v">Exciting News</button>
                                </li>
                            </ul>
                        </div>

                        <!-- Posts -->
                        <div class="cjdac">
                            <!-- Post -->
                            <article class="cxtep">
                                <div class="clxbf">
                                    <div class="coqgc c5srn">
                                        <div class="cmpw7 cgulq cdqku cg5yh c0ef0 c1iho">8 July, 2024</div>
                                    </div>
                                    <div class="border-gray-200 cghq3 ctv3r cbw8w cfv15">
                                        <header>
                                            <h2 class="text-gray-800 dark:text-gray-100 font-bold cbtcb cxg65">Released version 2.0</h2>
                                            <div class="flex items-center c8vtj ch3kz cdiog">
                                                <div class="flex items-center">
                                                    <a class="block mr-2 coqgc" href="#0">
                                                        <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/user-32-07.jpg') }}" width="32" height="32" alt="User 04">
                                                    </a>
                                                    <a class="block text-sm text-gray-800 dark:text-gray-100 cgulq" href="#0">
                                                        Simona Lürwer
                                                    </a>
                                                </div>
                                                <div class="co1wq cdqku">·</div>
                                                <div>
                                                    <div class="inline-flex rounded-full c1lu4 c19il cydwr c1k3n ch4gv c1iho cwn3v">Product</div>
                                                </div>
                                            </div>
                                        </header>
                                        <div class="cjav5">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident.</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Post -->
                            <article class="cxtep">
                                <div class="clxbf">
                                    <div class="coqgc c5srn">
                                        <div class="cmpw7 cgulq cdqku cg5yh c0ef0 c1iho">6 July, 2024</div>
                                    </div>
                                    <div class="border-gray-200 cghq3 ctv3r cbw8w cfv15">
                                        <header>
                                            <h2 class="text-gray-800 dark:text-gray-100 font-bold cbtcb cxg65">Feature Name is now public 🎉</h2>
                                            <div class="flex items-center c8vtj ch3kz cdiog">
                                                <div class="flex items-center">
                                                    <a class="block mr-2 coqgc" href="#0">
                                                        <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/user-32-02.jpg') }}" width="32" height="32" alt="User 04">
                                                    </a>
                                                    <a class="block text-sm text-gray-800 dark:text-gray-100 cgulq" href="#0">
                                                        Danielle Cohen
                                                    </a>
                                                </div>
                                                <div class="co1wq cdqku">·</div>
                                                <div>
                                                    <div class="inline-flex rounded-full cfts0 c5px7 cydwr c1k3n ch4gv c1iho cwn3v">Announcement</div>
                                                </div>
                                            </div>
                                        </header>
                                        <div class="cjav5">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident.</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Post -->
                            <article class="cxtep">
                                <div class="clxbf">
                                    <div class="coqgc c5srn">
                                        <div class="cmpw7 cgulq cdqku cg5yh c0ef0 c1iho">4 July, 2024</div>
                                    </div>
                                    <div class="border-gray-200 cghq3 ctv3r cbw8w cfv15">
                                        <header>
                                            <h2 class="text-gray-800 dark:text-gray-100 font-bold cbtcb cxg65">Bugs fixed, issues, and more</h2>
                                            <div class="flex items-center c8vtj ch3kz cdiog">
                                                <div class="flex items-center">
                                                    <a class="block mr-2 coqgc" href="#0">
                                                        <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/user-32-01.jpg') }}" width="32" height="32" alt="User 04">
                                                    </a>
                                                    <a class="block text-sm text-gray-800 dark:text-gray-100 cgulq" href="#0">
                                                        Patrick Kumar
                                                    </a>
                                                </div>
                                                <div class="co1wq cdqku">·</div>
                                                <div>
                                                    <div class="inline-flex rounded-full cx6qj cz4gk cydwr c1k3n ch4gv c1iho cwn3v">Bug Fix</div>
                                                </div>
                                            </div>
                                        </header>
                                        <div class="cjav5">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident.</p>
                                            <ul class="cjqz5 cektu c1647">
                                                <li>E-commerce: Better lorem ipsum generator.</li>
                                                <li>Booking: Lorem ipsum post generator.</li>
                                                <li>Retail: Better lorem ipsum generator.</li>
                                                <li>Services: Better lorem ipsum generator.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Post -->
                            <article class="cxtep">
                                <div class="clxbf">
                                    <div class="coqgc c5srn">
                                        <div class="cmpw7 cgulq cdqku cg5yh c0ef0 c1iho">2 July, 2024</div>
                                    </div>
                                    <div class="border-gray-200 cghq3 ctv3r cbw8w cfv15">
                                        <header>
                                            <h2 class="text-gray-800 dark:text-gray-100 font-bold cbtcb cxg65">Thanks, everyone 🙌</h2>
                                            <div class="flex items-center c8vtj ch3kz cdiog">
                                                <div class="flex items-center">
                                                    <a class="block mr-2 coqgc" href="#0">
                                                        <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/user-32-02.jpg') }}" width="32" height="32" alt="User 04">
                                                    </a>
                                                    <a class="block text-sm text-gray-800 dark:text-gray-100 cgulq" href="#0">
                                                        Danielle Cohen
                                                    </a>
                                                </div>
                                                <div class="co1wq cdqku">·</div>
                                                <div>
                                                    <div class="inline-flex rounded-full chk7w cinhi cydwr c1k3n ch4gv c1iho cwn3v">Exciting News</div>
                                                </div>
                                            </div>
                                        </header>
                                        <div class="cjav5">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident.</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!-- Pagination -->
                        <div class="cjdac cmfxv cgndh">
                            <div class="flex c2g1r cwnq4 c6o0w cetff">
                                <nav class="cafp8 c2rn6 cdiog" role="navigation" aria-label="Navigation">
                                    <ul class="flex justify-center">
                                        <li class="ml-3 c77jh">
                                            <span class="btn bg-white border-gray-200 cghq3 co1wq c2vpa ckbo4">&lt;- Previous</span>
                                        </li>
                                        <li class="ml-3 c77jh">
                                            <a class="btn bg-white border-gray-200 text-gray-800 cc0oq cghq3 cspbm c0zkc c2vpa" href="#0">Next -&gt;</a>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="text-sm text-gray-500 c2bzj cydwr">
                                    Showing <span class="c0zkc c1ukq c1k3n">1</span> to <span class="c0zkc c1ukq c1k3n">10</span> of <span class="c0zkc c1ukq c1k3n">467</span> results
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

@endsection