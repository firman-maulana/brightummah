@extends('admin.layouts.main')

@section('title', 'Articles')

@section('content')
<div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
    <div class="sm:flex sm:justify-between sm:items-center mb-8">
        <div class="mb-4 sm:mb-0">
            <h1 class="text-2xl md:text-3xl text-slate-800 dark:text-slate-100 font-bold">Articles</h1>
        </div>
        <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">
            <a href="{{ route('admin.articles.create') }}" class="btn bg-indigo-500 hover:bg-indigo-600 text-white">
                <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                </svg>
                <span class="ml-2">Add Article</span>
            </a>
        </div>
    </div>

    @if(session('success'))
    <div class="mb-4 px-4 py-3 rounded-lg bg-emerald-100 dark:bg-emerald-400/30 border border-emerald-200 dark:border-emerald-400/50 text-emerald-600 dark:text-emerald-400">
        {{ session('success') }}
    </div>
    @endif

    <div class="bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
        <div class="p-3">
            <div class="overflow-x-auto">
                <table class="table-auto w-full dark:text-slate-300">
                    <thead class="text-xs uppercase text-slate-400 dark:text-slate-500 bg-slate-50 dark:bg-slate-700/20 rounded-sm">
                        <tr>
                            <th class="p-2">
                                <div class="font-semibold text-left">Title</div>
                            </th>
                            <th class="p-2">
                                <div class="font-semibold text-left">Hashtags</div>
                            </th>
                            <th class="p-2">
                                <div class="font-semibold text-center">Status</div>
                            </th>
                            <th class="p-2">
                                <div class="font-s-->
                                        <div class="cxg65">
                                            <!-- Title -->
                                            <div class="flex items-center c6f83">
                                                <div class="flex mr-2 cjgpi coqgc cg40v">
                                                    <a class="block" href="#0">
                                                        <img class="rounded-full ctxup cv1so chwil ct7xr" src="./images/user-28-12.jpg" width="28" height="28" alt="User 12">
                                                    </a>
                                                </div>
                                                <div class="cbw8w">
                                                    <a class="inline-flex text-gray-800 dark:text-gray-100 cigpx c4t3r" href="#0">
                                                        <h2 class="text-gray-800 dark:text-gray-100 cgulq">username</h2>
                                                    </a>
                                                    <div class="text-gray-500 c1k3n c1iho">11:51 AM Jan 12</div>
                                                </div>
                                            </div>
                                            <!-- Content -->
                                            <div>
                                                <div class="text-sm">judul <a class="text-violet-500 c5ylh ceetm c1k3n" href="#0">#hastag</a></div>
                                                <img class="c6btv c7gr8" src="./images/task-image-02.jpg" width="259" height="142" alt="Task 02">
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
                                                    <div class="text-sm text-gray-500 dark:text-gray-400">4</div>
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

                                    <!-- Card 2 -->
                                    <div class="bg-white c2vpa c1hly c5vqk clxb7">
                                        <!-- Body -->
                                        <div class="cxg65">
                                            <!-- Title -->
                                            <div class="flex items-center c6f83">
                                                <div class="flex mr-2 cjgpi coqgc cg40v">
                                                    <a class="block" href="#0">
                                                        <img class="rounded-full ctxup cv1so chwil ct7xr" src="./images/user-28-12.jpg" width="28" height="28" alt="User 12">
                                                    </a>
                                                </div>
                                                <div class="cbw8w">
                                                    <a class="inline-flex text-gray-800 dark:text-gray-100 cigpx c4t3r" href="#0">
                                                        <h2 class="text-gray-800 dark:text-gray-100 cgulq">username</h2>
                                                    </a>
                                                    <div class="text-gray-500 c1k3n c1iho">11:51 AM Jan 12</div>
                                                </div>
                                            </div>
                                            <!-- Content -->
                                            <div>
                                                <div class="text-sm">judul <a class="text-violet-500 c5ylh ceetm c1k3n" href="#0">#hastag</a></div>
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
                                                    <div class="text-sm text-gray-500 dark:text-gray-400">6</div>
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

                                </div>
                            </header>
                        </div>
                        
                    </div>

                </div>

@endsection