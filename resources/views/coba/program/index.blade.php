@extends('coba.layouts.sidebar')
@section('content')

<div class="ch3yp cnbwt cs7xl clu2m c6btv clbq0 cxsfz">

                    <!-- Page header -->
                    <div class="c2g1r cwnq4 cnlq0 c6r0l">

                        <!-- Left: Title -->
                        <div class="c2rn6 cdiog">
                            <h1 class="text-gray-800 dark:text-gray-100 font-bold c459m cbtcb">Discover Meetups</h1>
                        </div>

                        <!-- Right: Actions -->
                        <div class="cm3b7 c51uw ccww4 csdex cbe1i c4sak">

                            <!-- Search form -->
                            <form class="cm84d">
                                <label for="action-search" class="cn8jz">Search</label>
                                <input id="action-search" class="bg-white c2vpa caqf9 ct9oo" type="search" placeholder="Search…">
                                <button class="c29dn cqdkw cini7 cqogy" type="submit" aria-label="Search">
                                    <svg class="ml-3 mr-2 cba8l c4it8 cmpw7 cdqku cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                                        <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                                    </svg>
                                </button>
                            </form>

                            <!-- Add meetup button -->
                            <button class="btn bg-gray-900 cdj8c cg0jr ch8z9 cilvw cyn7a">
                                <svg class="cbm9w cbmv0 coqgc" width="16" height="16" viewBox="0 0 16 16">
                                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                                </svg>
                                <span class="cyga5">Add Meetup</span>
                            </button>

                        </div>

                    </div>

                    <!-- Filters -->
                    <div class="c6r0l">
                        <ul class="flex flex-wrap -m-1">
                            <li class="m-1">
                                <button class="inline-flex items-center justify-center text-sm rounded-full border bg-gray-900 cg0jr c1xby cilvw c1k3n cpcyu cxxol cdzfq c5vqk cb2br cwn3v">View All</button>
                            </li>
                            <li class="m-1">
                                <button class="inline-flex items-center justify-center text-sm rounded-full border border-gray-200 bg-white text-gray-500 dark:text-gray-400 cc0oq cghq3 cspbm c2vpa c1k3n cxxol cdzfq c5vqk cb2br cwn3v">Online</button>
                            </li>
                            <li class="m-1">
                                <button class="inline-flex items-center justify-center text-sm rounded-full border border-gray-200 bg-white text-gray-500 dark:text-gray-400 cc0oq cghq3 cspbm c2vpa c1k3n cxxol cdzfq c5vqk cb2br cwn3v">Local</button>
                            </li>
                            <li class="m-1">
                                <button class="inline-flex items-center justify-center text-sm rounded-full border border-gray-200 bg-white text-gray-500 dark:text-gray-400 cc0oq cghq3 cspbm c2vpa c1k3n cxxol cdzfq c5vqk cb2br cwn3v">This Week</button>
                            </li>
                            <li class="m-1">
                                <button class="inline-flex items-center justify-center text-sm rounded-full border border-gray-200 bg-white text-gray-500 dark:text-gray-400 cc0oq cghq3 cspbm c2vpa c1k3n cxxol cdzfq c5vqk cb2br cwn3v">This Month</button>
                            </li>
                            <li class="m-1">
                                <button class="inline-flex items-center justify-center text-sm rounded-full border border-gray-200 bg-white text-gray-500 dark:text-gray-400 cc0oq cghq3 cspbm c2vpa c1k3n cxxol cdzfq c5vqk cb2br cwn3v">Following</button>
                            </li>
                        </ul>                    
                    </div>
                    <div class="text-sm text-gray-500 dark:text-gray-400 caf78 cdiog">289 Meetups</div>

                    <!-- Content -->
                    <div class="cfjlj ckn6o cgd7w c4sak">

                        <!-- Item 1 -->
                        <article class="flex bg-white c2vpa cxe43 c1hly c5vqk">
                            <!-- Image -->
                            <a class="block 2xl:sidebar-expanded:w-56 cwdfl cdafh cm84d coqgc ckarq cd1i2" href="{{ route('detailprogram') }}">
                                <img class="ccrfs cfwu1 cqdkw cav8x c6btv" src="{{ asset('assets/admin/img/meetups-thumb-01.jpg') }}" width="220" height="236" alt="Meetup 01">
                                <!-- Like button -->
                                <button class="mr-4 cqdkw cgky2 cli41 cfo3t">
                                    <div class="bg-gray-900 rounded-full cxnba cyn7a">
                                        <span class="cn8jz">Like</span>
                                        <svg class="cbm9w cue4z cmwfi" viewBox="0 0 32 32">
                                            <path d="M22.682 11.318A4.485 4.485 0 0019.5 10a4.377 4.377 0 00-3.5 1.707A4.383 4.383 0 0012.5 10a4.5 4.5 0 00-3.182 7.682L16 24l6.682-6.318a4.5 4.5 0 000-6.364zm-1.4 4.933L16 21.247l-5.285-5A2.5 2.5 0 0112.5 12c1.437 0 2.312.681 3.5 2.625C17.187 12.681 18.062 12 19.5 12a2.5 2.5 0 011.785 4.251h-.003z"></path>
                                        </svg>
                                    </div>
                                </button>
                            </a>
                            <!-- Content -->
                            <div class="flex cetff cbw8w csusu">
                                <div class="cbw8w">
                                    <div class="text-sm text-violet-500 cgulq c0ef0 c6f83">Mon 27 Dec, 2024</div>
                                    <a class="inline-flex c6f83" href="{{ route('detailprogram') }}">
                                        <h3 class="font-bold text-gray-800 dark:text-gray-100 c7x0x">Silicon Valley Bootstrapper Breakfast Online for 2024</h3>
                                    </a>
                                    <div class="text-sm">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts.</div>
                                </div>
                                <!-- Footer -->
                                <div class="flex items-center cm3rx c7gr8">
                                    <!-- Tag -->
                                    <div class="inline-flex items-center border border-gray-200 dark:text-gray-400 rounded-full cghq3 c1ukq cydwr c1k3n ch4gv c1iho cwn3v">
                                        <svg class="h-3 mr-2 ca2tk cyq9w cuv1l" viewBox="0 0 16 12">
                                            <path d="m16 2-4 2.4V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7.6l4 2.4V2ZM2 10V2h8v8H2Z"></path>
                                        </svg>
                                        <span>Online Event</span>
                                    </div>
                                    <!-- Avatars -->
                                    <div class="flex items-center ch3kz">
                                        <div class="flex cjgpi c45a5">
                                            <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/avatar-01.jpg') }}" width="28" height="28" alt="User 01">
                                            <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/avatar-04.jpg') }}" width="28" height="28" alt="User 04">
                                            <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/avatar-05.jpg') }}" width="28" height="28" alt="User 05">
                                        </div>
                                        <div class="cmpw7 cdqku c1k3n c1iho caf78">+22</div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- Item 2 -->
                        <article class="flex bg-white c2vpa cxe43 c1hly c5vqk">
                            <!-- Image -->
                            <a class="block 2xl:sidebar-expanded:w-56 cwdfl cdafh cm84d coqgc ckarq cd1i2" href="{{ route('detailprogram') }}">
                                <img class="ccrfs cfwu1 cqdkw cav8x c6btv" src="{{ asset('assets/admin/img/meetups-thumb-02.jpg') }}" width="220" height="236" alt="Meetup 02">
                                <!-- Like button -->
                                <button class="mr-4 cqdkw cgky2 cli41 cfo3t">
                                    <div class="bg-gray-900 rounded-full cxnba cyn7a">
                                        <span class="cn8jz">Like</span>
                                        <svg class="cbm9w cue4z cmwfi" viewBox="0 0 32 32">
                                            <path d="M22.682 11.318A4.485 4.485 0 0019.5 10a4.377 4.377 0 00-3.5 1.707A4.383 4.383 0 0012.5 10a4.5 4.5 0 00-3.182 7.682L16 24l6.682-6.318a4.5 4.5 0 000-6.364zm-1.4 4.933L16 21.247l-5.285-5A2.5 2.5 0 0112.5 12c1.437 0 2.312.681 3.5 2.625C17.187 12.681 18.062 12 19.5 12a2.5 2.5 0 011.785 4.251h-.003z"></path>
                                        </svg>
                                    </div>
                                </button>
                            </a>
                            <!-- Content -->
                            <div class="flex cetff cbw8w csusu">
                                <div class="cbw8w">
                                    <div class="text-sm text-violet-500 cgulq c0ef0 c6f83">Mon 27 Dec, 2024</div>
                                    <a class="inline-flex c6f83" href="{{ route('detailprogram') }}">
                                        <h3 class="font-bold text-gray-800 dark:text-gray-100 c7x0x">New York &amp; New Jersey Virtual Retreat 2024</h3>
                                    </a>
                                    <div class="text-sm">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts.</div>
                                </div>
                                <!-- Footer -->
                                <div class="flex items-center cm3rx c7gr8">
                                    <!-- Tag -->
                                    <div class="inline-flex items-center border border-gray-200 dark:text-gray-400 rounded-full cghq3 c1ukq cydwr c1k3n ch4gv c1iho cwn3v">
                                        <svg class="h-3 mr-2 ca2tk cyq9w cuv1l" viewBox="0 0 16 12">
                                            <path d="m16 2-4 2.4V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7.6l4 2.4V2ZM2 10V2h8v8H2Z"></path>
                                        </svg>
                                        <span>Online Event</span>
                                    </div>
                                    <!-- Avatars -->
                                    <div class="flex items-center ch3kz">
                                        <div class="flex cjgpi c45a5">
                                            <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/avatar-02.jpg') }}" width="28" height="28" alt="User 02">
                                            <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/avatar-03.jpg') }}" width="28" height="28" alt="User 03">
                                            <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/avatar-04.jpg') }}" width="28" height="28" alt="User 04">
                                        </div>
                                        <div class="cmpw7 cdqku c1k3n c1iho caf78">+132</div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- Item 3 -->
                        <article class="flex bg-white c2vpa cxe43 c1hly c5vqk">
                            <!-- Image -->
                            <a class="block 2xl:sidebar-expanded:w-56 cwdfl cdafh cm84d coqgc ckarq cd1i2" href="{{ route('detailprogram') }}">
                                <img class="ccrfs cfwu1 cqdkw cav8x c6btv" src="{{ asset('assets/admin/img/meetups-thumb-03.jpg') }}" width="220" height="236" alt="Meetup 03">
                                <!-- Like button -->
                                <button class="mr-4 cqdkw cgky2 cli41 cfo3t">
                                    <div class="bg-gray-900 rounded-full cxnba cyn7a">
                                        <span class="cn8jz">Like</span>
                                        <svg class="cbm9w cue4z cmwfi" viewBox="0 0 32 32">
                                            <path d="M22.682 11.318A4.485 4.485 0 0019.5 10a4.377 4.377 0 00-3.5 1.707A4.383 4.383 0 0012.5 10a4.5 4.5 0 00-3.182 7.682L16 24l6.682-6.318a4.5 4.5 0 000-6.364zm-1.4 4.933L16 21.247l-5.285-5A2.5 2.5 0 0112.5 12c1.437 0 2.312.681 3.5 2.625C17.187 12.681 18.062 12 19.5 12a2.5 2.5 0 011.785 4.251h-.003z"></path>
                                        </svg>
                                    </div>
                                </button>
                            </a>
                            <!-- Content -->
                            <div class="flex cetff cbw8w csusu">
                                <div class="cbw8w">
                                    <div class="text-sm text-violet-500 cgulq c0ef0 c6f83">Wed 29 Dec, 2024</div>
                                    <a class="inline-flex c6f83" href="{{ route('detailprogram') }}">
                                        <h3 class="font-bold text-gray-800 dark:text-gray-100 c7x0x">The World of AI and Machine Learning — Open Chat</h3>
                                    </a>
                                    <div class="text-sm">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts.</div>
                                </div>
                                <!-- Footer -->
                                <div class="flex items-center cm3rx c7gr8">
                                    <!-- Tag -->
                                    <div class="inline-flex items-center border border-gray-200 dark:text-gray-400 rounded-full cghq3 c1ukq cydwr c1k3n ch4gv c1iho cwn3v">
                                        <svg class="h-3 mr-2 ca2tk cyq9w cuv1l" viewBox="0 0 16 12">
                                            <path d="m16 2-4 2.4V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7.6l4 2.4V2ZM2 10V2h8v8H2Z"></path>
                                        </svg>
                                        <span>Online Event</span>
                                    </div>
                                    <!-- Avatars -->
                                    <div class="flex items-center ch3kz">
                                        <div class="flex cjgpi c45a5">
                                            <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/avatar-06.jpg') }}" width="28" height="28" alt="User 06">
                                            <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/avatar-03.jpg') }}" width="28" height="28" alt="User 03">
                                            <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/avatar-01.jpg') }}" width="28" height="28" alt="User 01">
                                        </div>
                                        <div class="cmpw7 cdqku c1k3n c1iho caf78">+12</div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- Item 4 -->
                        <article class="flex bg-white c2vpa cxe43 c1hly c5vqk">
                            <!-- Image -->
                            <a class="block 2xl:sidebar-expanded:w-56 cwdfl cdafh cm84d coqgc ckarq cd1i2" href="{{ route('detailprogram') }}">
                                <img class="ccrfs cfwu1 cqdkw cav8x c6btv" src="{{ asset('assets/admin/img/meetups-thumb-04.jpg') }}" width="220" height="236" alt="Meetup 04">
                                <!-- Like button -->
                                <button class="mr-4 cqdkw cgky2 cli41 cfo3t">
                                    <div class="bg-gray-900 rounded-full cxnba cyn7a">
                                        <span class="cn8jz">Like</span>
                                        <svg class="cbm9w cue4z cmwfi" viewBox="0 0 32 32">
                                            <path d="M22.682 11.318A4.485 4.485 0 0019.5 10a4.377 4.377 0 00-3.5 1.707A4.383 4.383 0 0012.5 10a4.5 4.5 0 00-3.182 7.682L16 24l6.682-6.318a4.5 4.5 0 000-6.364zm-1.4 4.933L16 21.247l-5.285-5A2.5 2.5 0 0112.5 12c1.437 0 2.312.681 3.5 2.625C17.187 12.681 18.062 12 19.5 12a2.5 2.5 0 011.785 4.251h-.003z"></path>
                                        </svg>
                                    </div>
                                </button>
                            </a>
                            <!-- Content -->
                            <div class="flex cetff cbw8w csusu">
                                <div class="cbw8w">
                                    <div class="text-sm text-violet-500 cgulq c0ef0 c6f83">Wed 29 Dec, 2024</div>
                                    <a class="inline-flex c6f83" href="{{ route('detailprogram') }}">
                                        <h3 class="font-bold text-gray-800 dark:text-gray-100 c7x0x">NYC Code &amp; Coffee 2.0 @ Freehold Brooklyn</h3>
                                    </a>
                                    <div class="text-sm">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts.</div>
                                </div>
                                <!-- Footer -->
                                <div class="flex items-center cm3rx c7gr8">
                                    <!-- Tag -->
                                    <div class="inline-flex items-center border border-gray-200 dark:text-gray-400 rounded-full cghq3 c1ukq cydwr c1k3n ch4gv c1iho cwn3v">
                                        <svg class="h-3 mr-2 ca2tk cyq9w cuv1l" viewBox="0 0 16 12">
                                            <path d="m16 2-4 2.4V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7.6l4 2.4V2ZM2 10V2h8v8H2Z"></path>
                                        </svg>
                                        <span>Online Event</span>
                                    </div>
                                    <!-- Avatars -->
                                    <div class="flex items-center ch3kz">
                                        <div class="flex cjgpi c45a5">
                                            <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/avatar-05.jpg') }}" width="28" height="28" alt="User 05">
                                            <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/avatar-02.jpg') }}" width="28" height="28" alt="User 02">
                                        </div>
                                        <div class="cmpw7 cdqku c1k3n c1iho caf78">+17</div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- Item 5 -->
                        <article class="flex bg-white c2vpa cxe43 c1hly c5vqk">
                            <!-- Image -->
                            <a class="block 2xl:sidebar-expanded:w-56 cwdfl cdafh cm84d coqgc ckarq cd1i2" href="{{ route('detailprogram') }}">
                                <img class="ccrfs cfwu1 cqdkw cav8x c6btv" src="{{ asset('assets/admin/img/meetups-thumb-05.jpg') }}" width="220" height="236" alt="Meetup 05">
                                <!-- Like button -->
                                <button class="mr-4 cqdkw cgky2 cli41 cfo3t">
                                    <div class="bg-gray-900 rounded-full cxnba cyn7a">
                                        <span class="cn8jz">Like</span>
                                        <svg class="cbm9w cue4z cmwfi" viewBox="0 0 32 32">
                                            <path d="M22.682 11.318A4.485 4.485 0 0019.5 10a4.377 4.377 0 00-3.5 1.707A4.383 4.383 0 0012.5 10a4.5 4.5 0 00-3.182 7.682L16 24l6.682-6.318a4.5 4.5 0 000-6.364zm-1.4 4.933L16 21.247l-5.285-5A2.5 2.5 0 0112.5 12c1.437 0 2.312.681 3.5 2.625C17.187 12.681 18.062 12 19.5 12a2.5 2.5 0 011.785 4.251h-.003z"></path>
                                        </svg>
                                    </div>
                                </button>
                            </a>
                            <!-- Content -->
                            <div class="flex cetff cbw8w csusu">
                                <div class="cbw8w">
                                    <div class="text-sm text-violet-500 cgulq c0ef0 c6f83">Mon 3 Jan, 2024</div>
                                    <a class="inline-flex c6f83" href="{{ route('detailprogram') }}">
                                        <h3 class="font-bold text-gray-800 dark:text-gray-100 c7x0x">Acme Inc. London Meetup: Women in Tech Night</h3>
                                    </a>
                                    <div class="text-sm">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts.</div>
                                </div>
                                <!-- Footer -->
                                <div class="flex items-center cm3rx c7gr8">
                                    <!-- Tag -->
                                    <div class="inline-flex items-center border border-gray-200 dark:text-gray-400 rounded-full cghq3 c1ukq cydwr c1k3n ch4gv c1iho cwn3v">
                                        <svg class="h-3 mr-2 ca2tk cyq9w cuv1l" viewBox="0 0 16 12">
                                            <path d="m16 2-4 2.4V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7.6l4 2.4V2ZM2 10V2h8v8H2Z"></path>
                                        </svg>
                                        <span>Online Event</span>
                                    </div>
                                    <!-- Avatars -->
                                    <div class="flex items-center ch3kz">
                                        <div class="flex cjgpi c45a5">
                                            <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/avatar-02.jpg') }}" width="28" height="28" alt="User 02">
                                            <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/avatar-01.jpg') }}" width="28" height="28" alt="User 01">
                                        </div>
                                        <div class="cmpw7 cdqku c1k3n c1iho caf78">+117</div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- Item 6 -->
                        <article class="flex bg-white c2vpa cxe43 c1hly c5vqk">
                            <!-- Image -->
                            <a class="block 2xl:sidebar-expanded:w-56 cwdfl cdafh cm84d coqgc ckarq cd1i2" href="{{ route('detailprogram') }}">
                                <img class="ccrfs cfwu1 cqdkw cav8x c6btv" src="{{ asset('assets/admin/img/meetups-thumb-06.jpg') }}" width="220" height="236" alt="Meetup 06">
                                <!-- Like button -->
                                <button class="mr-4 cqdkw cgky2 cli41 cfo3t">
                                    <div class="bg-gray-900 rounded-full cxnba cyn7a">
                                        <span class="cn8jz">Like</span>
                                        <svg class="cbm9w cue4z cmwfi" viewBox="0 0 32 32">
                                            <path d="M22.682 11.318A4.485 4.485 0 0019.5 10a4.377 4.377 0 00-3.5 1.707A4.383 4.383 0 0012.5 10a4.5 4.5 0 00-3.182 7.682L16 24l6.682-6.318a4.5 4.5 0 000-6.364zm-1.4 4.933L16 21.247l-5.285-5A2.5 2.5 0 0112.5 12c1.437 0 2.312.681 3.5 2.625C17.187 12.681 18.062 12 19.5 12a2.5 2.5 0 011.785 4.251h-.003z"></path>
                                        </svg>
                                    </div>
                                </button>
                            </a>
                            <!-- Content -->
                            <div class="flex cetff cbw8w csusu">
                                <div class="cbw8w">
                                    <div class="text-sm text-violet-500 cgulq c0ef0 c6f83">Thu 6 Jan, 2024</div>
                                    <a class="inline-flex c6f83" href="{{ route('detailprogram') }}">
                                        <h3 class="font-bold text-gray-800 dark:text-gray-100 c7x0x">Founder Worldwide - First Meetup of 2022!</h3>
                                    </a>
                                    <div class="text-sm">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts.</div>
                                </div>
                                <!-- Footer -->
                                <div class="flex items-center cm3rx c7gr8">
                                    <!-- Tag -->
                                    <div class="inline-flex items-center border border-gray-200 dark:text-gray-400 rounded-full cghq3 c1ukq cydwr c1k3n ch4gv c1iho cwn3v">
                                        <svg class="h-3 mr-2 ca2tk cyq9w cuv1l" viewBox="0 0 16 12">
                                            <path d="m16 2-4 2.4V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7.6l4 2.4V2ZM2 10V2h8v8H2Z"></path>
                                        </svg>
                                        <span>Online Event</span>
                                    </div>
                                    <!-- Avatars -->
                                    <div class="flex items-center ch3kz">
                                        <div class="flex cjgpi c45a5">
                                            <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/avatar-03.jpg') }}" width="28" height="28" alt="User 03">
                                            <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/avatar-05.jpg') }}" width="28" height="28" alt="User 05">
                                            <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/avatar-04.jpg') }}" width="28" height="28" alt="User 04">
                                        </div>
                                        <div class="cmpw7 cdqku c1k3n c1iho caf78">+64</div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- Item 7 -->
                        <article class="flex bg-white c2vpa cxe43 c1hly c5vqk">
                            <!-- Image -->
                            <a class="block 2xl:sidebar-expanded:w-56 cwdfl cdafh cm84d coqgc ckarq cd1i2" href="{{ route('detailprogram') }}">
                                <img class="ccrfs cfwu1 cqdkw cav8x c6btv" src="{{ asset('assets/admin/img/meetups-thumb-07.jpg') }}" width="220" height="236" alt="Meetup 07">
                                <!-- Like button -->
                                <button class="mr-4 cqdkw cgky2 cli41 cfo3t">
                                    <div class="bg-gray-900 rounded-full cxnba cyn7a">
                                        <span class="cn8jz">Like</span>
                                        <svg class="cbm9w cue4z cmwfi" viewBox="0 0 32 32">
                                            <path d="M22.682 11.318A4.485 4.485 0 0019.5 10a4.377 4.377 0 00-3.5 1.707A4.383 4.383 0 0012.5 10a4.5 4.5 0 00-3.182 7.682L16 24l6.682-6.318a4.5 4.5 0 000-6.364zm-1.4 4.933L16 21.247l-5.285-5A2.5 2.5 0 0112.5 12c1.437 0 2.312.681 3.5 2.625C17.187 12.681 18.062 12 19.5 12a2.5 2.5 0 011.785 4.251h-.003z"></path>
                                        </svg>
                                    </div>
                                </button>
                            </a>
                            <!-- Content -->
                            <div class="flex cetff cbw8w csusu">
                                <div class="cbw8w">
                                    <div class="text-sm text-violet-500 cgulq c0ef0 c6f83">Thu 6 Jan, 2024</div>
                                    <a class="inline-flex c6f83" href="{{ route('detailprogram') }}">
                                        <h3 class="font-bold text-gray-800 dark:text-gray-100 c7x0x">NYC Blockchain Network - Monthly 3rd Thursday Meetup</h3>
                                    </a>
                                    <div class="text-sm">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts.</div>
                                </div>
                                <!-- Footer -->
                                <div class="flex items-center cm3rx c7gr8">
                                    <!-- Tag -->
                                    <div class="inline-flex items-center border border-gray-200 dark:text-gray-400 rounded-full cghq3 c1ukq cydwr c1k3n ch4gv c1iho cwn3v">
                                        <svg class="h-3 mr-2 ca2tk cyq9w cuv1l" viewBox="0 0 16 12">
                                            <path d="m16 2-4 2.4V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7.6l4 2.4V2ZM2 10V2h8v8H2Z"></path>
                                        </svg>
                                        <span>Online Event</span>
                                    </div>
                                    <!-- Avatars -->
                                    <div class="flex items-center ch3kz">
                                        <div class="flex cjgpi c45a5">
                                            <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/avatar-02.jpg') }}" width="28" height="28" alt="User 02">
                                            <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/avatar-04.jpg') }}" width="28" height="28" alt="User 04">
                                        </div>
                                        <div class="cmpw7 cdqku c1k3n c1iho caf78">+112</div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- Item 8 -->
                        <article class="flex bg-white c2vpa cxe43 c1hly c5vqk">
                            <!-- Image -->
                            <a class="block 2xl:sidebar-expanded:w-56 cwdfl cdafh cm84d coqgc ckarq cd1i2" href="{{ route('detailprogram') }}">
                                <img class="ccrfs cfwu1 cqdkw cav8x c6btv" src="{{ asset('assets/admin/img/meetups-thumb-08.jpg') }}" width="220" height="236" alt="Meetup 08">
                                <!-- Like button -->
                                <button class="mr-4 cqdkw cgky2 cli41 cfo3t">
                                    <div class="bg-gray-900 rounded-full cxnba cyn7a">
                                        <span class="cn8jz">Like</span>
                                        <svg class="cbm9w cue4z cmwfi" viewBox="0 0 32 32">
                                            <path d="M22.682 11.318A4.485 4.485 0 0019.5 10a4.377 4.377 0 00-3.5 1.707A4.383 4.383 0 0012.5 10a4.5 4.5 0 00-3.182 7.682L16 24l6.682-6.318a4.5 4.5 0 000-6.364zm-1.4 4.933L16 21.247l-5.285-5A2.5 2.5 0 0112.5 12c1.437 0 2.312.681 3.5 2.625C17.187 12.681 18.062 12 19.5 12a2.5 2.5 0 011.785 4.251h-.003z"></path>
                                        </svg>
                                    </div>
                                </button>
                            </a>
                            <!-- Content -->
                            <div class="flex cetff cbw8w csusu">
                                <div class="cbw8w">
                                    <div class="text-sm text-violet-500 cgulq c0ef0 c6f83">Fri 7 Jan, 2024</div>
                                    <a class="inline-flex c6f83" href="{{ route('detailprogram') }}">
                                        <h3 class="font-bold text-gray-800 dark:text-gray-100 c7x0x">Build a Personal Brand and Boost Your Career in AI!</h3>
                                    </a>
                                    <div class="text-sm">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts.</div>
                                </div>
                                <!-- Footer -->
                                <div class="flex items-center cm3rx c7gr8">
                                    <!-- Tag -->
                                    <div class="inline-flex items-center border border-gray-200 dark:text-gray-400 rounded-full cghq3 c1ukq cydwr c1k3n ch4gv c1iho cwn3v">
                                        <svg class="h-3 mr-2 ca2tk cyq9w cuv1l" viewBox="0 0 16 12">
                                            <path d="m16 2-4 2.4V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7.6l4 2.4V2ZM2 10V2h8v8H2Z"></path>
                                        </svg>
                                        <span>Online Event</span>
                                    </div>
                                    <!-- Avatars -->
                                    <div class="flex items-center ch3kz">
                                        <div class="flex cjgpi c45a5">
                                            <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/avatar-01.jpg') }}" width="28" height="28" alt="User 01">
                                            <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/avatar-05.jpg') }}" width="28" height="28" alt="User 05">
                                            <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/avatar-06.jpg') }}" width="28" height="28" alt="User 06">
                                        </div>
                                        <div class="cmpw7 cdqku c1k3n c1iho caf78">+32</div>
                                    </div>
                                </div>
                            </div>
                        </article>

                    </div>
                    
                    <!-- Pagination -->
                    <div class="cvxzw">
                        <div class="flex justify-center">
                            <nav class="flex" role="navigation" aria-label="Navigation">
                                <div class="mr-2">
                                    <span class="inline-flex items-center justify-center bg-white border border-gray-200 cghq3 co1wq c2vpa ckbo4 cb8zv cdzfq ch4gv cuvgf">
                                        <span class="cn8jz">Previous</span><wbr>
                                        <svg class="cbm9w" width="16" height="16" viewBox="0 0 16 16">
                                            <path d="M9.4 13.4l1.4-1.4-4-4 4-4-1.4-1.4L4 8z"></path>
                                        </svg>
                                    </span>
                                </div>
                                <ul class="inline-flex text-sm cd1s6 c1k3n cb8zv c5vqk">
                                    <li>
                                        <span class="inline-flex items-center justify-center bg-white border border-gray-200 text-violet-500 cghq3 c2vpa cj8eb cdzfq cypnr cuvgf">1</span>
                                    </li>
                                    <li>
                                        <a class="inline-flex items-center justify-center bg-white border border-gray-200 cghq3 ck4w7 c0zkc csd0k c2vpa c1ukq cdzfq cypnr cuvgf" href="#0">2</a>
                                    </li>
                                    <li>
                                        <a class="inline-flex items-center justify-center bg-white border border-gray-200 cghq3 ck4w7 c0zkc csd0k c2vpa c1ukq cdzfq cypnr cuvgf" href="#0">3</a>
                                    </li>
                                    <li>
                                        <span class="inline-flex items-center justify-center bg-white border border-gray-200 cghq3 cmpw7 c2vpa cdqku cdzfq cypnr cuvgf">…</span>
                                    </li>
                                    <li>
                                        <a class="inline-flex items-center justify-center bg-white border border-gray-200 cghq3 ck4w7 c0zkc csd0k c2vpa c1ukq cespo cdzfq cypnr cuvgf" href="#0">9</a>
                                    </li>
                                </ul>
                                <div class="c8bkw">
                                    <a href="#0" class="inline-flex items-center justify-center bg-white border border-gray-200 text-violet-500 cghq3 ck4w7 csd0k c2vpa cb8zv cdzfq c5vqk ch4gv cuvgf">
                                        <span class="cn8jz">Next</span><wbr>
                                        <svg class="cbm9w" width="16" height="16" viewBox="0 0 16 16">
                                            <path d="M6.6 13.4L5.2 12l4-4-4-4 1.4-1.4L12 8z"></path>
                                        </svg>
                                    </a>
                                </div>
                            </nav>
                        </div>
                    </div>

                </div>

@endsection