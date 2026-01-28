@extends('coba.layouts.sidebar')

@section('content')

<div class="flex cm84d cav8x">

                    <!-- Messages sidebar -->
                    <div id="messages-sidebar" class="czdd1 c20xe cxt2v c8uqq cd9rr cz9ag cdxer cn0oz cqdkw cq5bq cez7y c6btv cli41 cunkr" :class="msgSidebarOpen ? 'translate-x-0' : '-translate-x-full'">
                        <div class="bg-white border-gray-200 czwcc cghq3 cdtzi cbyyo c2p0j c1n9k cn0pv cu49b coqgc cpsmr ckxi0 cf5iw">

                            <!-- #Marketing group -->
                            <div>
                                <!-- Group header -->
                                <div class="ckxi0 cli41 cvggx">
                                    <div class="flex items-center bg-white border-gray-200 cghq3 cdtzi ctv3r c3nk1 cx3hp">
                                        <div class="flex items-center cm3rx c6btv">
                                            <!-- Channel menu -->
                                            <div class="cm84d" x-data="{ open: false }">
                                                <button class="flex items-center c941w cbw8w" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                                                    <img class="rounded-full mr-2 cue4z cmwfi" src="{{ asset('assets/admin/img/channel-01.png') }}" width="32" height="32" alt="Group 01">
                                                    <div class="c941w">
                                                        <span class="text-gray-800 dark:text-gray-100 cgulq">#Marketing</span>
                                                    </div>
                                                    <svg class="w-3 h-3 cmpw7 cdqku cbm9w coqgc cpts2" viewBox="0 0 12 12">
                                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                                    </svg>
                                                </button>
                                                <div class="bg-white border border-gray-200 cghq3 c2vpa cbx8s cxe43 cb8zv ccwri cqdkw ctd47 cnuel cbxoy cu1dd cvggx ccwg3" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="cxxol cbmha c8uqq c98dn" x-transition:enter-start="opacity-0 cx9xg" x-transition:enter-end="cgcrn csdj3" x-transition:leave="cxxol cbmha c8uqq" x-transition:leave-start="cgcrn" x-transition:leave-end="opacity-0" x-cloak="">
                                                    <ul>
                                                        <li>
                                                            <a class="text-sm block c196r cqahh c0zkc c1ukq c1k3n cbxoy cb2br" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                                                <div class="flex items-center cm3rx">
                                                                    <div class="flex items-center c941w cbw8w">
                                                                        <img class="rounded-full mr-2 c2pqt ca4pv" src="{{ asset('assets/admin/img/channel-01.png') }}" width="28" height="28" alt="Channel 01">
                                                                        <div class="c941w">#Marketing</div>
                                                                    </div>
                                                                    <svg class="w-3 h-3 text-violet-500 cbm9w coqgc cpts2" viewBox="0 0 12 12">
                                                                        <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                                    </svg>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="text-sm block c196r cqahh c0zkc c1ukq c1k3n cbxoy cb2br" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                                                <div class="flex items-center cm3rx">
                                                                    <div class="flex items-center c941w cbw8w">
                                                                        <img class="rounded-full mr-2 c2pqt ca4pv" src="{{ asset('assets/admin/img/channel-02.png') }}" width="28" height="28" alt="Channel 02">
                                                                        <div class="c941w">#Developing</div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="text-sm block c196r cqahh c0zkc c1ukq c1k3n cbxoy cb2br" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                                                <div class="flex items-center cm3rx">
                                                                    <div class="flex items-center c941w cbw8w">
                                                                        <img class="rounded-full mr-2 c2pqt ca4pv" src="{{ asset('assets/admin/img/channel-03.png') }}" width="28" height="28" alt="Channel 03">
                                                                        <div class="c941w">#ProductSupport</div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Edit button -->
                                            <button class="bg-white border border-gray-200 cc0oq cghq3 cspbm c2vpa cb8zv c5vqk coqgc c1ga4 c8bkw">
                                                <svg class="cmpw7 cdqku cbm9w" width="16" height="16" viewBox="0 0 16 16">
                                                    <path d="M11.7.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM4.6 14H2v-2.6l6-6L10.6 8l-6 6zM12 6.6L9.4 4 11 2.4 13.6 5 12 6.6z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Group body -->
                                <div class="cx3hp cz8qb">
                                    <!-- Search form -->
                                    <form class="cm84d">
                                        <label for="msg-search" class="cn8jz">Search</label>
                                        <input id="msg-search" class="bg-white c2vpa caqf9 c6btv ct9oo" type="search" placeholder="Search…">
                                        <button class="c29dn cqdkw cini7 cqogy" type="submit" aria-label="Search">
                                            <svg class="ml-3 mr-2 cba8l c4it8 cmpw7 cdqku cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                                                <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                                            </svg>
                                        </button>
                                    </form>
                                    <!-- Direct messages -->
                                    <div class="cfo3t">
                                        <div class="cmpw7 cgulq cdqku c0ef0 c1iho cxg65">Direct messages</div>
                                        <ul class="cai6b">
                                            <li class="c73dq">
                                                <button class="flex items-center cvwie cosgb c33r0 cgnhv cm3rx cb8zv c6btv c27zx" @click="msgSidebarOpen = false; $refs.contentarea.scrollTop = 99999999;">
                                                    <div class="flex items-center c941w">
                                                        <img class="rounded-full mr-2 cue4z cmwfi" src="{{ asset('assets/admin/img/user-32-01.jpg') }}" width="32" height="32" alt="User 01">
                                                        <div class="c941w">
                                                            <span class="text-sm text-gray-800 dark:text-gray-100 c1k3n">Dominik Lamakani</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center c8bkw">
                                                        <div class="inline-flex rounded-full cb63n cydwr c1k3n cpcyu cdzfq c1iho c9hxi">2</div>
                                                    </div>
                                                </button>
                                            </li>
                                            <li class="c73dq">
                                                <button class="flex items-center rounded cm3rx c6btv c27zx" @click="msgSidebarOpen = false; $refs.contentarea.scrollTop = 99999999;">
                                                    <div class="flex items-center c941w">
                                                        <img class="rounded-full mr-2 cue4z cmwfi" src="{{ asset('assets/admin/img/user-32-02.jpg') }}" width="32" height="32" alt="User 02">
                                                        <div class="c941w">
                                                            <span class="text-sm text-gray-800 dark:text-gray-100 c1k3n">Tisha Yanchev</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center c8bkw">
                                                        <div class="inline-flex rounded-full cb63n cydwr c1k3n cpcyu cdzfq c1iho c9hxi">4</div>
                                                    </div>
                                                </button>
                                            </li>
                                            <li class="c73dq">
                                                <button class="flex items-center rounded cm3rx c6btv c27zx" @click="msgSidebarOpen = false; $refs.contentarea.scrollTop = 99999999;">
                                                    <div class="flex items-center c941w">
                                                        <img class="rounded-full mr-2 cue4z cmwfi" src="{{ asset('assets/admin/img/user-32-03.jpg') }}" width="32" height="32" alt="User 03">
                                                        <div class="c941w">
                                                            <span class="text-sm text-gray-800 dark:text-gray-100 c1k3n">Jerzy Wierzy</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center c8bkw">
                                                        <img class="rounded-full coqgc" src="{{ asset('assets/admin/img/user-32-03.jpg') }}" width="20" height="20" alt="User 03">
                                                    </div>
                                                </button>
                                            </li>
                                            <li class="c73dq">
                                                <button class="flex items-center rounded cm3rx c6btv c27zx" @click="msgSidebarOpen = false; $refs.contentarea.scrollTop = 99999999;">
                                                    <div class="flex items-center c941w">
                                                        <img class="rounded-full mr-2 cue4z cmwfi" src="{{ asset('assets/admin/img/user-32-04.jpg') }}" width="32" height="32" alt="User 04">
                                                        <div class="c941w">
                                                            <span class="text-sm text-gray-800 dark:text-gray-100 c1k3n">Adrian Przetocki</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center c8bkw">
                                                        <svg class="w-3 h-3 cdqku cbm9w coqgc" viewBox="0 0 12 12">
                                                            <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"></path>
                                                        </svg>
                                                    </div>
                                                </button>
                                            </li>
                                            <li class="c73dq">
                                                <button class="flex items-center rounded cm3rx c6btv c27zx" @click="msgSidebarOpen = false; $refs.contentarea.scrollTop = 99999999;">
                                                    <div class="flex items-center c941w">
                                                        <img class="rounded-full mr-2 cue4z cmwfi" src="{{ asset('assets/admin/img/user-32-05.jpg') }}" width="32" height="32" alt="User 05">
                                                        <div class="c941w">
                                                            <span class="text-sm text-gray-800 dark:text-gray-100 c1k3n">Simona Lürwer</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center c8bkw">
                                                        <svg class="w-3 h-3 cdqku cbm9w coqgc" viewBox="0 0 12 12">
                                                            <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"></path>
                                                        </svg>
                                                    </div>
                                                </button>
                                            </li>
                                            <li class="c73dq">
                                                <button class="flex items-center rounded cm3rx c6btv c27zx" @click="msgSidebarOpen = false; $refs.contentarea.scrollTop = 99999999;">
                                                    <div class="flex items-center c941w">
                                                        <img class="rounded-full mr-2 cue4z cmwfi" src="{{ asset('assets/admin/img/user-32-06.jpg') }}" width="32" height="32" alt="User 06">
                                                        <div class="c941w">
                                                            <span class="text-sm text-gray-800 dark:text-gray-100 c1k3n">Mary Roszczewski</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center c8bkw">
                                                        <svg class="w-3 h-3 cdqku cbm9w coqgc" viewBox="0 0 12 12">
                                                            <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"></path>
                                                        </svg>
                                                    </div>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Channels -->
                                    <div class="cfo3t">
                                        <div class="cmpw7 cgulq cdqku c0ef0 c1iho cxg65">Channels</div>
                                        <ul class="cai6b">
                                            <li class="c73dq">
                                                <button class="flex items-center rounded cm3rx c6btv c27zx" @click="msgSidebarOpen = false; $refs.contentarea.scrollTop = 99999999;">
                                                    <div class="flex items-center">
                                                        <div class="c941w">
                                                            <span class="text-sm text-gray-800 dark:text-gray-100 c1k3n">#New Leads</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center c8bkw">
                                                        <div class="w-2 h-2 rounded-full cb63n"></div>
                                                    </div>
                                                </button>
                                            </li>
                                            <li class="c73dq">
                                                <button class="flex items-center rounded cm3rx c6btv c27zx" @click="msgSidebarOpen = false; $refs.contentarea.scrollTop = 99999999;">
                                                    <div class="flex items-center c941w">
                                                        <div class="c941w">
                                                            <span class="text-sm text-gray-800 dark:text-gray-100 c1k3n">#Development Team</span>
                                                        </div>
                                                    </div>
                                                </button>
                                            </li>
                                            <li class="c73dq">
                                                <button class="flex items-center rounded cm3rx c6btv c27zx" @click="msgSidebarOpen = false; $refs.contentarea.scrollTop = 99999999;">
                                                    <div class="flex items-center c941w">
                                                        <div class="c941w">
                                                            <span class="text-sm text-gray-800 dark:text-gray-100 c1k3n">#Product Tips</span>
                                                        </div>
                                                    </div>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Messages body -->
                    <div class="flex czdd1 c20xe cfjy9 cz9ag cetff cbw8w" :class="msgSidebarOpen ? 'translate-x-1/3' : 'translate-x-0'">

                        <!-- Header -->
                        <div class="ckxi0 cf5iw">
                            <div class="flex items-center border-gray-200 c0sx7 cghq3 cn67g c5x21 cpawk cm3rx c7pl5 c8rmw ctv3r cnbwt c7uj9 c3nk1 clbq0">
                                <!-- People -->
                                <div class="flex items-center">
                                    <!-- Close button -->
                                    <button class="mr-4 cg12x cdqku czxy6" @click.stop="msgSidebarOpen = !msgSidebarOpen" aria-controls="messages-sidebar" :aria-expanded="msgSidebarOpen">
                                        <span class="cn8jz">Close sidebar</span>
                                        <svg class="cbm9w ctt6r cg8so" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z"></path>
                                        </svg>
                                    </button>
                                    <!-- People list -->
                                    <div class="flex cjgpi cg40v">
                                        <a class="block" href="#0">
                                            <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/user-32-01.jpg') }}" width="32" height="32" alt="User 01">
                                        </a>
                                        <a class="block" href="#0">
                                            <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/user-32-07.jpg') }}" width="32" height="32" alt="User 04">
                                        </a>
                                    </div>
                                </div>
                                <!-- Buttons on the right side -->
                                <div class="flex">
                                    <button class="bg-white border border-gray-200 cc0oq cghq3 cspbm c2vpa cb8zv c5vqk coqgc c1ga4 c8bkw">
                                        <svg class="cmpw7 cdqku cbm9w" width="16" height="16" viewBox="0 0 16 16">
                                            <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                        </svg>
                                    </button>
                                    <button class="bg-white border border-gray-200 cc0oq cghq3 cspbm c2vpa cb8zv c5vqk coqgc c1ga4 c8bkw">
                                        <svg class="text-violet-500 cbm9w" width="16" height="16" viewBox="0 0 16 16">
                                            <path d="M14.3 2.3L5 11.6 1.7 8.3c-.4-.4-1-.4-1.4 0-.4.4-.4 1 0 1.4l4 4c.2.2.4.3.7.3.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4-.4-.4-1-.4-1.4 0z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Body -->
                        <div class="cnbwt c7uj9 cbw8w clbq0 cwlwv">
                            <!-- Chat msg -->
                            <div class="flex ce4zk c5w78 cdiog">
                                <img class="rounded-full mr-4" src="{{ asset('assets/admin/img/user-40-11.jpg') }}" width="40" height="40" alt="User 01">
                                <div>
                                    <div class="text-sm text-gray-800 dark:text-gray-100 c2vpa ce449 cvwbh cb8zv cu6vl c9j8s">
                                        Can anyone help? I have a question about Acme Professional
                                    </div>
                                    <div class="flex items-center cm3rx">
                                        <div class="text-gray-500 c1k3n c1iho">2:40 PM</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Chat msg -->
                            <div class="flex ce4zk c5w78 cdiog">
                                <img class="rounded-full mr-4" src="{{ asset('assets/admin/img/user-40-12.jpg') }}" width="40" height="40" alt="User 02">
                                <div>
                                    <div class="text-sm border c1xby ce449 cjnnd cb8zv cpcyu cu6vl c9j8s">
                                        Hey Dominik Lamakani 👋<br>
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est 🙌
                                    </div>
                                    <div class="flex items-center cm3rx">
                                        <div class="text-gray-500 c1k3n c1iho">2:40 PM</div>
                                        <svg class="h-3 c612e cbm9w coqgc cye3x" viewBox="0 0 20 12">
                                            <path d="M10.402 6.988l1.586 1.586L18.28 2.28a1 1 0 011.414 1.414l-7 7a1 1 0 01-1.414 0L8.988 8.402l-2.293 2.293a1 1 0 01-1.414 0l-3-3A1 1 0 013.695 6.28l2.293 2.293L12.28 2.28a1 1 0 011.414 1.414l-3.293 3.293z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <!-- Chat msg -->
                            <div class="flex ce4zk c5w78 cdiog">
                                <img class="rounded-full mr-4" src="{{ asset('assets/admin/img/user-40-11.jpg') }}" width="40" height="40" alt="User 01">
                                <div>
                                    <div class="flex items-center">
                                        <img class="cb8zv c5vqk cu6vl" src="{{ asset('assets/admin/img/chat-image.jpg') }}" width="240" height="180" alt="Chat image">
                                        <button class="rounded-full border border-gray-200 cghq3 c5oeb cmilp cxxol c1ga4 cfh3y">
                                            <span class="cn8jz">Download</span>
                                            <svg class="cmpw7 cdqku cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                <path d="M15 15H1a1 1 0 01-1-1V2a1 1 0 011-1h4v2H2v10h12V3h-3V1h4a1 1 0 011 1v12a1 1 0 01-1 1zM9 7h3l-4 4-4-4h3V1h2v6z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="flex items-center cm3rx">
                                        <div class="text-gray-500 c1k3n c1iho">2:48 PM</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Chat msg -->
                            <div class="flex ce4zk c5w78 cdiog">
                                <img class="rounded-full mr-4" src="{{ asset('assets/admin/img/user-40-11.jpg') }}" width="40" height="40" alt="User 01">
                                <div>
                                    <div class="text-sm text-gray-800 dark:text-gray-100 c2vpa ce449 cvwbh cb8zv cu6vl c9j8s">
                                        What do you think? Duis aute irure dolor in reprehenderit 🔥
                                    </div>
                                    <div class="flex items-center cm3rx">
                                        <div class="text-gray-500 c1k3n c1iho">2:48 PM</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Chat msg -->
                            <div class="flex ce4zk c5w78 cdiog">
                                <img class="rounded-full mr-4" src="{{ asset('assets/admin/img/user-40-12.jpg') }}" width="40" height="40" alt="User 02">
                                <div>
                                    <div class="text-sm border c1xby ce449 cjnnd cb8zv cpcyu cu6vl c9j8s">
                                        Sed euismod nisi porta lorem mollis. Tellus elementum sagittis vitae et leo duis. Viverra justo nec ultrices dui.<br>
                                        Sed lectus vestibulum mattis ullamcorper velit sed. Ut sem nulla pharetra diam sit amet 🎁
                                    </div>
                                    <div class="flex items-center cm3rx">
                                        <div class="text-gray-500 c1k3n c1iho">2:55 PM</div>
                                        <svg class="w-3 h-3 cdqku cbm9w coqgc" viewBox="0 0 12 12">
                                            <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <!-- Date separator -->
                            <div class="flex justify-center">
                                <div class="inline-flex items-center justify-center dark:text-gray-400 bg-white dark:bg-gray-700 rounded-full c1ukq c1k3n c5vqk ch4gv c1iho cxzop cwn3v">
                                    Tuesday, 20 January
                                </div>
                            </div>
                            <!-- Chat msg -->
                            <div class="flex ce4zk c5w78 cdiog">
                                <img class="rounded-full mr-4" src="{{ asset('assets/admin/img/user-40-12.jpg') }}" width="40" height="40" alt="User 02">
                                <div>
                                    <div class="text-sm border c1xby ce449 cjnnd cb8zv cpcyu cu6vl c9j8s">
                                        Can you join <a class="c1k3n" href="#0">@dominik</a>? <a class="celj7" href="#0">https://meet.google.com/haz-r3gt-idj</a>
                                    </div>
                                    <div class="flex items-center cm3rx">
                                        <div class="text-gray-500 c1k3n c1iho">10:15 AM</div>
                                        <svg class="w-3 h-3 cdqku cbm9w coqgc" viewBox="0 0 12 12">
                                            <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <!-- Chat msg -->
                            <div class="flex ce4zk c5w78 cdiog">
                                <img class="rounded-full mr-4" src="{{ asset('assets/admin/img/user-40-11.jpg') }}" width="40" height="40" alt="User 01">
                                <div>
                                    <div class="text-sm text-gray-800 dark:text-gray-100 c2vpa ce449 cvwbh cb8zv cu6vl c9j8s">
                                        <svg class="cmpw7 cdqku cbm9w" viewBox="0 0 15 3" width="15" height="3">
                                            <circle cx="1.5" cy="1.5" r="1.5">
                                                <animate attributeName="opacity" dur="1s" values="0;1;0" repeatCount="indefinite" begin="0.1"></animate>
                                            </circle>
                                            <circle cx="7.5" cy="1.5" r="1.5">
                                                <animate attributeName="opacity" dur="1s" values="0;1;0" repeatCount="indefinite" begin="0.2"></animate>
                                            </circle>
                                            <circle cx="13.5" cy="1.5" r="1.5">
                                                <animate attributeName="opacity" dur="1s" values="0;1;0" repeatCount="indefinite" begin="0.3"></animate>
                                            </circle>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="cq5bq ckxi0">
                            <div class="flex items-center bg-white border-gray-200 cghq3 cecbd cm3rx cr4kg cnbwt c7uj9 c3nk1 clbq0">
                                <!-- Plus button -->
                                <button class="c3e4j cg12x cmpw7 cdqku coqgc chfzq">
                                    <span class="cn8jz">Add</span>
                                    <svg class="cbm9w ctt6r cg8so" viewBox="0 0 24 24">
                                        <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12C23.98 5.38 18.62.02 12 0zm6 13h-5v5h-2v-5H6v-2h5V6h2v5h5v2z"></path>
                                    </svg>
                                </button>
                                <!-- Message input -->
                                <form class="flex cbw8w">
                                    <div class="chfzq cbw8w">
                                        <label for="message-input" class="cn8jz">Type a message</label>
                                        <input id="message-input" class="cozqq cao1x co6ep c1xby c2vpa cq5lu cyhlg caqf9 c6btv" type="text" placeholder="Aa">
                                    </div>
                                    <button type="submit" class="btn bg-gray-900 cdj8c cg0jr ch8z9 cq84g cilvw cyn7a">Send -&gt;</button>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>

@endsection