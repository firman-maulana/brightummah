@extends('coba.layouts.sidebar')

@section('content')

<div class="flex cm84d cav8x">

                    <!-- Inbox sidebar -->
                    <div id="inbox-sidebar" class="czdd1 c20xe cxt2v c8uqq cd9rr cz9ag cdxer cn0oz cqdkw cq5bq cez7y c6btv cli41 cunkr" :class="inboxSidebarOpen ? 'translate-x-0' : '-translate-x-full'">
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
                                        <label for="inbox-search" class="cn8jz">Search</label>
                                        <input id="inbox-search" class="bg-white c2vpa caqf9 c6btv ct9oo" type="search" placeholder="Search…">
                                        <button class="c29dn cqdkw cini7 cqogy" type="submit" aria-label="Search">
                                            <svg class="ml-3 mr-2 cba8l c4it8 cmpw7 cdqku cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                                                <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                                            </svg>
                                        </button>
                                    </form>
                                    <!-- Tabs -->
                                    <div class="cm84d cfo3t">
                                        <div class="cmr9m cvwbh cqdkw cq5bq c6btv cfwuq" aria-hidden="true"></div>
                                        <ul class="text-sm flex c9zp2 cu49b c8vtj c1k3n c49xy csf8j cm84d chp98">
                                            <li class="chndw cddmn cxjgq ci2ft ckjy4 cbhw6 c5ggj c3osb">
                                                <a class="block text-violet-500 cq84g ci0dd cp2rp cphv1" href="#0">Primary</a>
                                            </li>
                                            <li class="chndw cddmn cxjgq ci2ft ckjy4 cbhw6 c5ggj c3osb">
                                                <a class="block text-gray-500 dark:text-gray-400 czr0s clwnn cq84g cphv1" href="#0">Social</a>
                                            </li>
                                            <li class="chndw cddmn cxjgq ci2ft ckjy4 cbhw6 c5ggj c3osb">
                                                <a class="block text-gray-500 dark:text-gray-400 czr0s clwnn cq84g cphv1" href="#0">Promotions</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Inbox -->
                                    <div class="cfo3t">
                                        <div class="cmpw7 cgulq cdqku c0ef0 c1iho cxg65">Inbox (44)</div>
                                        <ul class="cai6b">
                                            <li class="c73dq">
                                                <button class="flex cvwie cosgb c33r0 cgnhv cb8zv c2hoo c6btv c27zx" @click="inboxSidebarOpen = false">
                                                    <img class="rounded-full mr-2 cue4z cmwfi" src="{{ asset('assets/admin/img/user-32-01.jpg') }}" width="32" height="32" alt="User 01">
                                                    <div class="c941w cbw8w">
                                                        <div class="flex items-center cm3rx csyhb">
                                                            <div class="c941w">
                                                                <span class="text-sm text-gray-800 dark:text-gray-100 cgulq">Dominik Lamakani</span>
                                                            </div>
                                                            <div class="text-gray-500 c1k3n c1iho">4 Aug</div>
                                                        </div>
                                                        <div class="text-gray-800 dark:text-gray-100 c1k3n c941w cjxkd c1iho">Chill your mind with this amazing offer 🎉</div>
                                                        <div class="c5s5t c1iho">Lorem ipsum dolor sit amet, consecte adipiscing elit aute irure dolor…</div>
                                                    </div>
                                                </button>
                                            </li>
                                            <li class="c73dq">
                                                <button class="flex rounded c2hoo c6btv c27zx" @click="inboxSidebarOpen = false">
                                                    <img class="rounded-full mr-2 cue4z cmwfi" src="{{ asset('assets/admin/img/user-32-05.jpg') }}" width="32" height="32" alt="User 05">
                                                    <div class="c941w cbw8w">
                                                        <div class="flex items-center cm3rx csyhb">
                                                            <div class="c941w">
                                                                <span class="text-sm text-gray-800 dark:text-gray-100 cgulq">Simona Lürwer</span>
                                                            </div>
                                                            <div class="text-gray-500 c1k3n c1iho">4 Aug</div>
                                                        </div>
                                                        <div class="text-gray-800 dark:text-gray-100 c1k3n c941w cjxkd c1iho">🙌 Help us improve Mosaic by giving…</div>
                                                        <div class="c5s5t c1iho">Lorem ipsum dolor sit amet, consecte adipiscing elit aute irure dolor…</div>
                                                    </div>
                                                </button>
                                            </li>
                                            <li class="c73dq">
                                                <button class="flex rounded c2hoo c6btv c27zx" @click="inboxSidebarOpen = false">
                                                    <img class="rounded-full mr-2 cue4z cmwfi" src="{{ asset('assets/admin/img/user-32-06.jpg') }}" width="32" height="32" alt="User 05">
                                                    <div class="c941w cbw8w">
                                                        <div class="flex items-center cm3rx csyhb">
                                                            <div class="c941w">
                                                                <span class="text-sm text-gray-800 dark:text-gray-100 cgulq">Mary Roszczewski</span>
                                                            </div>
                                                            <div class="text-gray-500 c1k3n c1iho">1 Aug</div>
                                                        </div>
                                                        <div class="text-gray-800 dark:text-gray-100 c1k3n c941w cjxkd c1iho">[Urgent] Changes to links for public…</div>
                                                        <div class="c5s5t c1iho">👋 Lorem ipsum dolor sit amet, consecte adipiscing elit aute irure dolor…</div>
                                                    </div>
                                                </button>
                                            </li>
                                            <li class="c73dq">
                                                <button class="flex rounded c2hoo c6btv c27zx" @click="inboxSidebarOpen = false">
                                                    <img class="rounded-full mr-2 cue4z cmwfi" src="{{ asset('assets/admin/img/user-32-04.jpg') }}" width="32" height="32" alt="User 05">
                                                    <div class="c941w cbw8w">
                                                        <div class="flex items-center cm3rx csyhb">
                                                            <div class="c941w">
                                                                <span class="text-sm text-gray-800 dark:text-gray-100 cgulq">Adrian Przetocki</span>
                                                            </div>
                                                            <div class="text-gray-500 c1k3n c1iho">1 Aug</div>
                                                        </div>
                                                        <div class="text-gray-800 dark:text-gray-100 c1k3n c941w cjxkd c1iho">🙌 Help us improve Mosaic by giving…</div>
                                                        <div class="c5s5t c1iho">Lorem ipsum dolor sit amet, consecte adipiscing elit aute irure dolor…</div>
                                                    </div>
                                                </button>
                                            </li>
                                            <li class="c73dq">
                                                <button class="flex rounded c2hoo c6btv c27zx" @click="inboxSidebarOpen = false">
                                                    <img class="rounded-full mr-2 cue4z cmwfi" src="{{ asset('assets/admin/img/user-32-02.jpg') }}" width="32" height="32" alt="User 05">
                                                    <div class="c941w cbw8w">
                                                        <div class="flex items-center cm3rx csyhb">
                                                            <div class="c941w">
                                                                <span class="text-sm text-gray-800 dark:text-gray-100 cgulq">Tisha Yanchev</span>
                                                            </div>
                                                            <div class="text-gray-500 c1k3n c1iho">1 Aug</div>
                                                        </div>
                                                        <div class="text-gray-800 dark:text-gray-100 c1k3n c941w cjxkd c1iho">Re: Here’s an extra 25% OFF 🎉</div>
                                                        <div class="c5s5t c1iho">Excepteur sint occaecat cupidatat non proident sunt in culpa qui deserunt…</div>
                                                    </div>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Inbox body -->
                    <div class="flex czdd1 c20xe cfjy9 cz9ag cetff cbw8w" :class="inboxSidebarOpen ? 'translate-x-1/3' : 'translate-x-0'">

                        <!-- Header -->
                        <div class="ckxi0 cf5iw">
                            <div class="flex items-center border-gray-200 c0sx7 cghq3 cn67g c5x21 cpawk cm3rx c7pl5 c8rmw ctv3r cnbwt c7uj9 c3nk1 clbq0">
                                <!-- Buttons on the left side -->
                                <div class="flex">
                                    <!-- Close button -->
                                    <button class="mr-4 cg12x cdqku czxy6" @click.stop="inboxSidebarOpen = !inboxSidebarOpen" aria-controls="inbox-sidebar" :aria-expanded="inboxSidebarOpen">
                                        <span class="cn8jz">Close sidebar</span>
                                        <svg class="cbm9w ctt6r cg8so" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z"></path>
                                        </svg>
                                    </button>
                                    <button class="bg-white border border-gray-200 cc0oq cghq3 cspbm c2vpa cb8zv c5vqk coqgc c1ga4 c8bkw">
                                        <svg class="cmpw7 cdqku cbm9w" width="16" height="16" viewBox="0 0 16 16">
                                            <path d="M5 7h2v6H5V7zm4 0h2v6H9V7zm3-6v2h4v2h-1v10c0 .6-.4 1-1 1H2c-.6 0-1-.4-1-1V5H0V3h4V1c0-.6.4-1 1-1h6c.6 0 1 .4 1 1zM6 2v1h4V2H6zm7 3H3v9h10V5z"></path>
                                        </svg>
                                    </button>
                                    <button class="bg-white border border-gray-200 cc0oq cghq3 cspbm c2vpa cb8zv c5vqk coqgc c1ga4 c8bkw">
                                        <svg class="cveo1 cbm9w" width="16" height="16" viewBox="0 0 16 16">
                                            <path d="M10 5.934 8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                        </svg>
                                    </button>
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
                                <!-- Buttons on the right side -->
                                <div class="flex items-center">
                                    <div class="mr-1 c1iho"><span class="c0zkc c1k3n">10</span> <span class="text-gray-500 dark:text-gray-400">of</span> <span class="c0zkc c1k3n">467</span></div>
                                    <button class="bg-white border border-gray-200 cc0oq cghq3 cspbm c2vpa cb8zv c5vqk coqgc c1ga4 c8bkw">
                                        <svg class="cmpw7 cdqku cbm9w" width="16" height="16" viewBox="0 0 16 16">
                                            <path d="m10 13.4 1.4-1.4-4-4 4-4L10 2.6 4.6 8z"></path>
                                        </svg>
                                    </button>
                                    <button class="bg-white border border-gray-200 cc0oq cghq3 cspbm c2vpa cb8zv c5vqk coqgc c1ga4 c8bkw">
                                        <svg class="cmpw7 cdqku cbm9w" width="16" height="16" viewBox="0 0 16 16">
                                            <path d="M7 13.4 5.6 12l4-4-4-4L7 2.6 12.4 8z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Body -->
                        <div class="cnbwt c7uj9 cbw8w clbq0 cz8qb">

                            <!-- Mail subject -->
                            <header class="c2g1r cv0ns cnlq0 cdiog">
                                <h1 class="text-gray-800 dark:text-gray-100 font-bold ce5fk c2rn6 clctu cu6vl c8bkw">Chill your mind with this amazing offer 🎉</h1>
                                <button class="inline-flex rounded-full cq84g chk7w cinhi cydwr c1k3n ch4gv c1iho cwn3v">Exciting news</button>
                            </header>

                            <!-- Messages box -->
                            <div class="bg-white ce8qq c2vpa c6sh9 c1hly c5vqk co0ms cj8hp">

                                <!-- Mail -->
                                <div class="cwlwv" x-data="{ open: false }">
                                    <!-- Header -->
                                    <header class="flex ce4zk">
                                        <!-- Avatar -->
                                        <img class="rounded-full coqgc chfzq" src="{{ asset('assets/admin/img/user-40-11.jpg') }}" width="40" height="40" alt="User 11">
                                        <!-- Meta -->
                                        <div class="cbw8w">
                                            <div class="cm3rx ce4zk cnlq0 cjxkd">
                                                <!-- Message author -->
                                                <div class="items-center c2rn6 clxbf c6f83">
                                                    <button class="text-sm text-gray-800 dark:text-gray-100 cgulq c2hoo c941w" @click.prevent="open = !open">Dominik Lamakani</button>
                                                    <div class="text-sm hidden co1wq cdqku c3nql c1ibf" x-show="open" x-cloak="">·</div>
                                                    <div class="cmpw7 c1iho" x-show="open" x-cloak=""><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="294d4644404740424548444869484a444c074a4644">[email&#160;protected]</a></div>
                                                </div>
                                                <!-- Date -->
                                                <div class="text-gray-500 cq84g c1k3n c2rn6 c1iho c6f83">Sep 3, 3:18 PM</div>
                                            </div>
                                            <!-- To -->
                                            <div class="text-gray-500 c1k3n c1iho" x-show="open" x-cloak="">To me, Carolyn</div>
                                            <!-- Excerpt -->
                                            <div class="text-sm" x-show="!open">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore…</div>
                                        </div>
                                    </header>
                                    <!-- Body -->
                                    <div class="text-sm text-gray-800 dark:text-gray-100 cweej cfo3t" x-show="open" x-cloak="">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                        <p>Consectetur adipiscing elit, sed do eiusmod aliqua? Check below:</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                        <p>Cheers,</p>
                                        <p class="c1k3n">Dominik Lamakani</p>
                                    </div>
                                </div>

                                <!-- Mail -->
                                <div class="cwlwv" x-data="{ open: false }">
                                    <!-- Header -->
                                    <header class="flex ce4zk">
                                        <!-- Avatar -->
                                        <img class="rounded-full coqgc chfzq" src="{{ asset('assets/admin/img/user-avatar-80.png') }}" width="40" height="40" alt="User 11">
                                        <!-- Meta -->
                                        <div class="cbw8w">
                                            <div class="cm3rx ce4zk cnlq0 cjxkd">
                                                <!-- Message author -->
                                                <div class="items-center c2rn6 clxbf c6f83">
                                                    <button class="text-sm text-gray-800 dark:text-gray-100 cgulq c2hoo c941w" @click.prevent="open = !open">Acme Inc.</button>
                                                    <div class="text-sm hidden co1wq cdqku c3nql c1ibf" x-show="open" x-cloak="">·</div>
                                                    <div class="cmpw7 c1iho" x-show="open" x-cloak=""><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="88e9ebe5ede1e6ebc8e9ebe5eda6ebe7e5">[email&#160;protected]</a></div>
                                                </div>
                                                <!-- Date -->
                                                <div class="text-gray-500 cq84g c1k3n c2rn6 c1iho c6f83">Sep 3, 3:18 PM</div>
                                            </div>
                                            <!-- To -->
                                            <div class="text-gray-500 c1k3n c1iho" x-show="open" x-cloak="">To me, Dominik</div>
                                            <!-- Excerpt -->
                                            <div class="text-sm" x-show="!open">Dominik, lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt…</div>
                                        </div>
                                    </header>
                                    <!-- Body -->
                                    <div class="text-sm text-gray-800 dark:text-gray-100 cweej cfo3t" x-show="open" x-cloak="">
                                        <p>Dominik, lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                        <p>Consectetur adipiscing elit, sed do eiusmod aliqua? Check below:</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                        <p>Cheers,</p>
                                        <p class="c1k3n">Acme Inc.</p>
                                    </div>
                                </div>

                                <!-- Mail -->
                                <div class="cwlwv" x-data="{ open: true }">
                                    <!-- Header -->
                                    <header class="flex ce4zk">
                                        <!-- Avatar -->
                                        <img class="rounded-full coqgc chfzq" src="{{ asset('assets/admin/img/user-40-11.jpg') }}" width="40" height="40" alt="User 11">
                                        <!-- Meta -->
                                        <div class="cbw8w">
                                            <div class="cm3rx ce4zk cnlq0 cjxkd">
                                                <!-- Message author -->
                                                <div class="items-center c2rn6 clxbf c6f83">
                                                    <button class="text-sm text-gray-800 dark:text-gray-100 cgulq c2hoo c941w" @click.prevent="open = !open">Dominik Lamakani</button>
                                                    <div class="text-sm hidden co1wq cdqku c3nql c1ibf" x-show="open" x-cloak="">·</div>
                                                    <div class="cmpw7 c1iho" x-show="open" x-cloak=""><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="aacec5c7c3c4c3c1c6cbc7cbeacbc9c7cf84c9c5c7">[email&#160;protected]</a></div>
                                                </div>
                                                <!-- Date -->
                                                <div class="text-gray-500 cq84g c1k3n c2rn6 c1iho c6f83">Sep 4, 3:37 AM</div>
                                            </div>
                                            <!-- To -->
                                            <div class="text-gray-500 c1k3n c1iho" x-show="open" x-cloak="">To me, Carolyn</div>
                                            <!-- Excerpt -->
                                            <div class="text-sm" x-show="!open">Hey Acme 👋 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt…</div>
                                        </div>
                                    </header>
                                    <!-- Body -->
                                    <div class="text-sm text-gray-800 dark:text-gray-100 cweej cfo3t" x-show="open" x-cloak="">
                                        <p>Hey Acme 👋</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis <span class="celj7">nostrud exercitation ullamco</span> laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                        <p>Consectetur adipiscing elit, sed do eiusmod <a class="text-violet-500 c5ylh ceetm c1k3n" href="#0">tempor magna</a> aliqua? Check below:</p>
                                        <p>
                                            <img src="{{ asset('assets/admin/img/inbox-image.jpg') }}" width="320" height="190" alt="Inbox image">
                                        </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                        <p>Cheers,</p>
                                        <p class="c1k3n">Dominik Lamakani</p>
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