@extends('coba.layouts.sidebar')
@section('content')

<div class="ch3yp cnbwt cs7xl clu2m c6btv clbq0 cxsfz">

                    <!-- Page header -->
                    <div class="c2g1r cwnq4 cnlq0 cgd7w">

                        <!-- Left: Title -->
                        <div class="c2rn6 cdiog">
                            <h1 class="text-gray-800 dark:text-gray-100 font-bold c459m cbtcb">Customers</h1>
                        </div>

                        <!-- Right: Actions -->
                        <div class="cm3b7 c51uw ccww4 csdex cbe1i c4sak">

                            <!-- Delete button -->
                            <div class="table-items-action hidden">
                                <div class="flex items-center">
                                    <div class="hidden text-sm mr-2 cq84g c3nql caf78"><span class="table-items-count"></span> items selected</div>
                                    <button class="btn bg-white border-gray-200 cc0oq cghq3 cspbm c2vpa czr3n">Delete</button>
                                </div>
                            </div>

                            <!-- Dropdown -->
                            <div class="cm84d" x-data="{ open: false, selected: 2 }">
                                <button class="btn bg-white border-gray-200 cc0oq c29yw cghq3 cspbm cqahh c0zkc c2vpa cm3rx c1ukq c45yg" aria-label="Select date range" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                                    <span class="flex items-center">
                                        <svg class="mr-2 cmpw7 cdqku cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
                                            <path d="M5 4a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2H5Z"></path>
                                            <path d="M4 0a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V4a4 4 0 0 0-4-4H4ZM2 4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4Z"></path>
                                        </svg>
                                        <span x-text="$refs.options.children[selected].children[1].innerHTML"></span>
                                    </span>
                                    <svg class="cmpw7 cdqku cbm9w coqgc cpts2" width="11" height="7" viewBox="0 0 11 7">
                                        <path d="M5.4 6.8L0 1.4 1.4 0l4 4 4-4 1.4 1.4z"></path>
                                    </svg>
                                </button>
                                <div class="bg-white border border-gray-200 cghq3 c2vpa cxe43 cb8zv ccwri cqdkw ctd47 cgky2 cbxoy c6btv cvggx ccwg3" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="cxxol cbmha cf39k c98dn" x-transition:enter-start="opacity-0 cx9xg" x-transition:enter-end="cgcrn csdj3" x-transition:leave="cxxol cbmha cf39k" x-transition:leave-start="cgcrn" x-transition:leave-end="opacity-0" x-cloak="">
                                    <div class="text-sm c0zkc c1ukq c1k3n" x-ref="options">
                                        <button tabindex="0" class="flex items-center c35tg csd0k c5flv c6btv cb2br cwn3v" :class="selected === 0 &amp;&amp; 'text-violet-500'" @click="selected = 0;open = false" @focus="open = true" @focusout="open = false">
                                            <svg class="mr-2 text-violet-500 cbm9w coqgc" :class="selected !== 0 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                                <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                            </svg>
                                            <span>Today</span>
                                        </button>
                                        <button tabindex="0" class="flex items-center c35tg csd0k c5flv c6btv cb2br cwn3v" :class="selected === 1 &amp;&amp; 'text-violet-500'" @click="selected = 1;open = false" @focus="open = true" @focusout="open = false">
                                            <svg class="mr-2 text-violet-500 cbm9w coqgc" :class="selected !== 1 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                                <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                            </svg>
                                            <span>Last 7 Days</span>
                                        </button>
                                        <button tabindex="0" class="flex items-center c35tg csd0k c5flv c6btv cb2br cwn3v" :class="selected === 2 &amp;&amp; 'text-violet-500'" @click="selected = 2;open = false" @focus="open = true" @focusout="open = false">
                                            <svg class="mr-2 text-violet-500 cbm9w coqgc" :class="selected !== 2 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                                <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                            </svg>
                                            <span>Last Month</span>
                                        </button>
                                        <button tabindex="0" class="flex items-center c35tg csd0k c5flv c6btv cb2br cwn3v" :class="selected === 3 &amp;&amp; 'text-violet-500'" @click="selected = 3;open = false" @focus="open = true" @focusout="open = false">
                                            <svg class="mr-2 text-violet-500 cbm9w coqgc" :class="selected !== 3 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                                <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                            </svg>
                                            <span>Last 12 Months</span>
                                        </button>
                                        <button tabindex="0" class="flex items-center c35tg csd0k c5flv c6btv cb2br cwn3v" :class="selected === 4 &amp;&amp; 'text-violet-500'" @click="selected = 4;open = false" @focus="open = true" @focusout="open = false">
                                            <svg class="mr-2 text-violet-500 cbm9w coqgc" :class="selected !== 4 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                                <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                            </svg>
                                            <span>All Time</span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Filter button -->
                            <div class="inline-flex cm84d">
                                <button class="btn bg-white border-gray-200 cc0oq cghq3 cspbm cmpw7 c2vpa cdqku ch4gv">
                                    <span class="cn8jz">Filter</span><wbr>
                                    <svg class="cbm9w" width="16" height="16" viewBox="0 0 16 16">
                                        <path d="M0 3a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1ZM3 8a1 1 0 0 1 1-1h8a1 1 0 1 1 0 2H4a1 1 0 0 1-1-1ZM7 12a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2H7Z"></path>
                                    </svg>
                                </button>
                            </div>

                            <!-- Add customer button -->
                            <button class="btn bg-gray-900 cdj8c cg0jr ch8z9 cilvw cyn7a">
                                <svg class="cbm9w cbmv0 coqgc" width="16" height="16" viewBox="0 0 16 16">
                                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                                </svg>
                                <span class="cyga5">Add Customer</span>
                            </button>                            
                            
                        </div>

                    </div>

                    <!-- Table -->
                    <div class="bg-white c2vpa c1hly c5vqk">
                        <header class="cx3hp cz8qb">
                            <h2 class="text-gray-800 dark:text-gray-100 cgulq">All Customers <span class="cmpw7 cdqku c1k3n">248</span></h2>
                        </header>
                        <div x-data="handleSelect">

                            <!-- Table -->
                            <div class="cocyr">
                                <table class="c0zkc cn9pt c6btv">
                                    <!-- Table header -->
                                    <thead class="text-gray-500 dark:text-gray-400 cghq3 cib75 cbv37 cgulq cgk1f c0ef0 ctv3r cr4kg c1iho">
                                        <tr>
                                            <th class="cq84g cyjcc cgn91 cn8zk c9hxi c72q5">
                                                <div class="flex items-center">
                                                    <label class="inline-flex">
                                                        <span class="cn8jz">Select all</span>
                                                        <input id="parent-checkbox" class="crgcy" type="checkbox" @click="toggleAll">
                                                    </label>
                                                </div>
                                            </th>
                                            <th class="cq84g cyjcc cgn91 cn8zk c9hxi c72q5">
                                                <span class="cn8jz">Favourite</span>
                                            </th>
                                            <th class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cgulq c2hoo">Order</div>
                                            </th>
                                            <th class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cgulq c2hoo">Email</div>
                                            </th>
                                            <th class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cgulq c2hoo">Location</div>
                                            </th>
                                            <th class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cgulq">Orders</div>
                                            </th>
                                            <th class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cgulq c2hoo">Last order</div>
                                            </th>
                                            <th class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cgulq c2hoo">Total spent</div>
                                            </th>
                                            <th class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cgulq">Refunds</div>
                                            </th>
                                            <th class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <span class="cn8jz">Menu</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <!-- Table body -->
                                    <tbody class="text-sm ce8qq ca8s8 co0ms">
                                        <!-- Row -->
                                        <tr>
                                            <td class="cq84g cyjcc cgn91 cn8zk c9hxi c72q5">
                                                <div class="flex items-center">
                                                    <label class="inline-flex">
                                                        <span class="cn8jz">Select</span>
                                                        <input class="table-item crgcy" type="checkbox" @click="uncheckParent">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 cn8zk c9hxi c72q5">
                                                <div class="flex items-center cm84d">
                                                    <button>
                                                        <svg class="cveo1 cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                            <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="flex items-center">
                                                    <div class="mr-2 coqgc czvpl cr0m4 c59cs">
                                                        <img class="rounded-full" src="{{ asset('assets/admin/img/user-40-01.jpg') }}" width="40" height="40" alt="User 01">
                                                    </div>
                                                    <div class="text-gray-800 dark:text-gray-100 c1k3n">Patricia Semklo</div>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c2hoo"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cebeafbabca7ada7afe0bdaba3a5a2a18eafbebee0ada1a3">[email&#160;protected]</a></div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c2hoo">🇬🇧 London, UK</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cydwr">24</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c740r c1k3n c2hoo">#123567</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cdjj4 c1k3n c2hoo">$2,890.66</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cydwr">-</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 cn8zk c9hxi c72q5">
                                                <button class="rounded-full c3e4j cg12x cmpw7 cdqku">
                                                    <span class="cn8jz">Menu</span>
                                                    <svg class="cbm9w cue4z cmwfi" viewBox="0 0 32 32">
                                                        <circle cx="16" cy="16" r="2"></circle>
                                                        <circle cx="10" cy="16" r="2"></circle>
                                                        <circle cx="22" cy="16" r="2"></circle>
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- Row -->
                                        <tr>
                                            <td class="cq84g cyjcc cgn91 cn8zk c9hxi c72q5">
                                                <div class="flex items-center">
                                                    <label class="inline-flex">
                                                        <span class="cn8jz">Select</span>
                                                        <input class="table-item crgcy" type="checkbox" @click="uncheckParent">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="flex items-center cm84d">
                                                    <button>
                                                        <svg class="co1wq ckbo4 cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                            <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="flex items-center">
                                                    <div class="mr-2 coqgc czvpl cr0m4 c59cs">
                                                        <img class="rounded-full" src="{{ asset('assets/admin/img/user-40-02.jpg') }}" width="40" height="40" alt="User 02">
                                                    </div>
                                                    <div class="text-gray-800 dark:text-gray-100 c1k3n">Dominik Lamakani</div>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c2hoo"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7f1b10121611161451131e121e141e11163f18121e1613511c1012">[email&#160;protected]</a></div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c2hoo">🇩🇪 Dortmund, DE</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cydwr">77</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c740r c1k3n c2hoo">#779912</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cdjj4 c1k3n c2hoo">$14,767.04</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cydwr">4</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 cn8zk c9hxi c72q5">
                                                <button class="rounded-full c3e4j cg12x cmpw7 cdqku">
                                                    <span class="cn8jz">Menu</span>
                                                    <svg class="cbm9w cue4z cmwfi" viewBox="0 0 32 32">
                                                        <circle cx="16" cy="16" r="2"></circle>
                                                        <circle cx="10" cy="16" r="2"></circle>
                                                        <circle cx="22" cy="16" r="2"></circle>
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- Row -->
                                        <tr>
                                            <td class="cq84g cyjcc cgn91 cn8zk c9hxi c72q5">
                                                <div class="flex items-center">
                                                    <label class="inline-flex">
                                                        <span class="cn8jz">Select</span>
                                                        <input class="table-item crgcy" type="checkbox" @click="uncheckParent">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="flex items-center cm84d">
                                                    <button>
                                                        <svg class="cveo1 cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                            <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="flex items-center">
                                                    <div class="mr-2 coqgc czvpl cr0m4 c59cs">
                                                        <img class="rounded-full" src="{{ asset('assets/admin/img/user-40-03.jpg') }}" width="40" height="40" alt="User 03">
                                                    </div>
                                                    <div class="text-gray-800 dark:text-gray-100 c1k3n">Ivan Mesaros</div>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c2hoo"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e98084809f8887848c9aa98e84888085c78a8684">[email&#160;protected]</a></div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c2hoo">🇫🇷 Paris, FR</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cydwr">44</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c740r c1k3n c2hoo">#889924</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cdjj4 c1k3n c2hoo">$4,996.00</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cydwr">1</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 cn8zk c9hxi c72q5">
                                                <button class="rounded-full c3e4j cg12x cmpw7 cdqku">
                                                    <span class="cn8jz">Menu</span>
                                                    <svg class="cbm9w cue4z cmwfi" viewBox="0 0 32 32">
                                                        <circle cx="16" cy="16" r="2"></circle>
                                                        <circle cx="10" cy="16" r="2"></circle>
                                                        <circle cx="22" cy="16" r="2"></circle>
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- Row -->
                                        <tr>
                                            <td class="cq84g cyjcc cgn91 cn8zk c9hxi c72q5">
                                                <div class="flex items-center">
                                                    <label class="inline-flex">
                                                        <span class="cn8jz">Select</span>
                                                        <input class="table-item crgcy" type="checkbox" @click="uncheckParent">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="flex items-center cm84d">
                                                    <button>
                                                        <svg class="co1wq ckbo4 cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                            <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="flex items-center">
                                                    <div class="mr-2 coqgc czvpl cr0m4 c59cs">
                                                        <img class="rounded-full" src="{{ asset('assets/admin/img/user-40-04.jpg') }}" width="40" height="40" alt="User 04">
                                                    </div>
                                                    <div class="text-gray-800 dark:text-gray-100 c1k3n">Maria Martinez</div>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c2hoo"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2845495a5c41464d524047454d684f45494144064b4745">[email&#160;protected]</a></div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c2hoo">🇮🇹 Bologna, IT</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cydwr">29</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c740r c1k3n c2hoo">#897726</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cdjj4 c1k3n c2hoo">$3,220.66</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cydwr">2</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 cn8zk c9hxi c72q5">
                                                <button class="rounded-full c3e4j cg12x cmpw7 cdqku">
                                                    <span class="cn8jz">Menu</span>
                                                    <svg class="cbm9w cue4z cmwfi" viewBox="0 0 32 32">
                                                        <circle cx="16" cy="16" r="2"></circle>
                                                        <circle cx="10" cy="16" r="2"></circle>
                                                        <circle cx="22" cy="16" r="2"></circle>
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- Row -->
                                        <tr>
                                            <td class="cq84g cyjcc cgn91 cn8zk c9hxi c72q5">
                                                <div class="flex items-center">
                                                    <label class="inline-flex">
                                                        <span class="cn8jz">Select</span>
                                                        <input class="table-item crgcy" type="checkbox" @click="uncheckParent">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="flex items-center cm84d">
                                                    <button>
                                                        <svg class="cveo1 cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                            <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="flex items-center">
                                                    <div class="mr-2 coqgc czvpl cr0m4 c59cs">
                                                        <img class="rounded-full" src="{{ asset('assets/admin/img/user-40-05.jpg') }}" width="40" height="40" alt="User 05">
                                                    </div>
                                                    <div class="text-gray-800 dark:text-gray-100 c1k3n">Vicky Jung</div>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c2hoo"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0c65787f7a656f67754c6f6362786d6f78226f6361">[email&#160;protected]</a></div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c2hoo">🇬🇧 London, UK</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cydwr">22</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c740r c1k3n c2hoo">#123567</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cdjj4 c1k3n c2hoo">$2,890.66</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cydwr">-</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 cn8zk c9hxi c72q5">
                                                <button class="rounded-full c3e4j cg12x cmpw7 cdqku">
                                                    <span class="cn8jz">Menu</span>
                                                    <svg class="cbm9w cue4z cmwfi" viewBox="0 0 32 32">
                                                        <circle cx="16" cy="16" r="2"></circle>
                                                        <circle cx="10" cy="16" r="2"></circle>
                                                        <circle cx="22" cy="16" r="2"></circle>
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- Row -->
                                        <tr>
                                            <td class="cq84g cyjcc cgn91 cn8zk c9hxi c72q5">
                                                <div class="flex items-center">
                                                    <label class="inline-flex">
                                                        <span class="cn8jz">Select</span>
                                                        <input class="table-item crgcy" type="checkbox" @click="uncheckParent">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="flex items-center cm84d">
                                                    <button>
                                                        <svg class="cveo1 cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                            <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="flex items-center">
                                                    <div class="mr-2 coqgc czvpl cr0m4 c59cs">
                                                        <img class="rounded-full" src="{{ asset('assets/admin/img/user-40-06.jpg') }}" width="40" height="40" alt="User 06">
                                                    </div>
                                                    <div class="text-gray-800 dark:text-gray-100 c1k3n">Tisho Yanchev</div>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c2hoo"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a0d4c9d3c8cf8ed9e0cbd5d2ccd9d4c5c3c88ec3cfcd">[email&#160;protected]</a></div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c2hoo">🇬🇧 London, UK</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cydwr">14</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c740r c1k3n c2hoo">#896644</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cdjj4 c1k3n c2hoo">$1,649.99</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cydwr">1</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 cn8zk c9hxi c72q5">
                                                <button class="rounded-full c3e4j cg12x cmpw7 cdqku">
                                                    <span class="cn8jz">Menu</span>
                                                    <svg class="cbm9w cue4z cmwfi" viewBox="0 0 32 32">
                                                        <circle cx="16" cy="16" r="2"></circle>
                                                        <circle cx="10" cy="16" r="2"></circle>
                                                        <circle cx="22" cy="16" r="2"></circle>
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- Row -->
                                        <tr>
                                            <td class="cq84g cyjcc cgn91 cn8zk c9hxi c72q5">
                                                <div class="flex items-center">
                                                    <label class="inline-flex">
                                                        <span class="cn8jz">Select</span>
                                                        <input class="table-item crgcy" type="checkbox" @click="uncheckParent">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="flex items-center cm84d">
                                                    <button>
                                                        <svg class="cveo1 cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                            <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="flex items-center">
                                                    <div class="mr-2 coqgc czvpl cr0m4 c59cs">
                                                        <img class="rounded-full" src="{{ asset('assets/admin/img/user-40-07.jpg') }}" width="40" height="40" alt="User 07">
                                                    </div>
                                                    <div class="text-gray-800 dark:text-gray-100 c1k3n">James Cameron</div>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c2hoo"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a3c9c2cec6d08dc0c6cce3c9c2cec6d08dd7c6c0cb">[email&#160;protected]</a></div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c2hoo">🇫🇷 Marseille, FR</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cydwr">34</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c740r c1k3n c2hoo">#136988</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cdjj4 c1k3n c2hoo">$3,569.87</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cydwr">2</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 cn8zk c9hxi c72q5">
                                                <button class="rounded-full c3e4j cg12x cmpw7 cdqku">
                                                    <span class="cn8jz">Menu</span>
                                                    <svg class="cbm9w cue4z cmwfi" viewBox="0 0 32 32">
                                                        <circle cx="16" cy="16" r="2"></circle>
                                                        <circle cx="10" cy="16" r="2"></circle>
                                                        <circle cx="22" cy="16" r="2"></circle>
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- Row -->
                                        <tr>
                                            <td class="cq84g cyjcc cgn91 cn8zk c9hxi c72q5">
                                                <div class="flex items-center">
                                                    <label class="inline-flex">
                                                        <span class="cn8jz">Select</span>
                                                        <input class="table-item crgcy" type="checkbox" @click="uncheckParent">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="flex items-center cm84d">
                                                    <button>
                                                        <svg class="co1wq ckbo4 cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                            <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="flex items-center">
                                                    <div class="mr-2 coqgc czvpl cr0m4 c59cs">
                                                        <img class="rounded-full" src="{{ asset('assets/admin/img/user-40-08.jpg') }}" width="40" height="40" alt="User 08">
                                                    </div>
                                                    <div class="text-gray-800 dark:text-gray-100 c1k3n">Haruki Masuno</div>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c2hoo"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bcd4ddcec9d7d5fccfc9ccd9ced1ddd5d092d6cc">[email&#160;protected]</a></div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c2hoo">🇯🇵 Tokio, JP</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cydwr">112</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c740r c1k3n c2hoo">#442206</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cdjj4 c1k3n c2hoo">$19,246.07</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cydwr">6</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 cn8zk c9hxi c72q5">
                                                <button class="rounded-full c3e4j cg12x cmpw7 cdqku">
                                                    <span class="cn8jz">Menu</span>
                                                    <svg class="cbm9w cue4z cmwfi" viewBox="0 0 32 32">
                                                        <circle cx="16" cy="16" r="2"></circle>
                                                        <circle cx="10" cy="16" r="2"></circle>
                                                        <circle cx="22" cy="16" r="2"></circle>
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- Row -->
                                        <tr>
                                            <td class="cq84g cyjcc cgn91 cn8zk c9hxi c72q5">
                                                <div class="flex items-center">
                                                    <label class="inline-flex">
                                                        <span class="cn8jz">Select</span>
                                                        <input class="table-item crgcy" type="checkbox" @click="uncheckParent">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="flex items-center cm84d">
                                                    <button>
                                                        <svg class="cveo1 cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                            <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="flex items-center">
                                                    <div class="mr-2 coqgc czvpl cr0m4 c59cs">
                                                        <img class="rounded-full" src="{{ asset('assets/admin/img/user-40-09.jpg') }}" width="40" height="40" alt="User 09">
                                                    </div>
                                                    <div class="text-gray-800 dark:text-gray-100 c1k3n">Joe Huang</div>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c2hoo"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b6dcd9d3dec3d7d8d1f6ded9c2dbd7dfda98d5d9db">[email&#160;protected]</a></div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c2hoo">🇨🇳 Shanghai, CN</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cydwr">64</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c740r c1k3n c2hoo">#764321</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cdjj4 c1k3n c2hoo">$12,276.92</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cydwr">-</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 cn8zk c9hxi c72q5">
                                                <button class="rounded-full c3e4j cg12x cmpw7 cdqku">
                                                    <span class="cn8jz">Menu</span>
                                                    <svg class="cbm9w cue4z cmwfi" viewBox="0 0 32 32">
                                                        <circle cx="16" cy="16" r="2"></circle>
                                                        <circle cx="10" cy="16" r="2"></circle>
                                                        <circle cx="22" cy="16" r="2"></circle>
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- Row -->
                                        <tr>
                                            <td class="cq84g cyjcc cgn91 cn8zk c9hxi c72q5">
                                                <div class="flex items-center">
                                                    <label class="inline-flex">
                                                        <span class="cn8jz">Select</span>
                                                        <input class="table-item crgcy" type="checkbox" @click="uncheckParent">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="flex items-center cm84d">
                                                    <button>
                                                        <svg class="co1wq ckbo4 cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                            <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="flex items-center">
                                                    <div class="mr-2 coqgc czvpl cr0m4 c59cs">
                                                        <img class="rounded-full" src="{{ asset('assets/admin/img/user-40-10.jpg') }}" width="40" height="40" alt="User 10">
                                                    </div>
                                                    <div class="text-gray-800 dark:text-gray-100 c1k3n">Carolyn McNeail</div>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c2hoo"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b8dbd9cad7d4c1d6d4d7ceddf8dfd5d9d1d496dbd7d5">[email&#160;protected]</a></div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c2hoo">🇮🇹 Milan, IT</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cydwr">19</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c740r c1k3n c2hoo">#908764</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cdjj4 c1k3n c2hoo">$1,289.97</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cydwr">2</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 cn8zk c9hxi c72q5">
                                                <button class="rounded-full c3e4j cg12x cmpw7 cdqku">
                                                    <span class="cn8jz">Menu</span>
                                                    <svg class="cbm9w cue4z cmwfi" viewBox="0 0 32 32">
                                                        <circle cx="16" cy="16" r="2"></circle>
                                                        <circle cx="10" cy="16" r="2"></circle>
                                                        <circle cx="22" cy="16" r="2"></circle>
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
                        // A basic demo function to handle "select all" functionality
                        document.addEventListener('alpine:init', () => {
                            Alpine.data('handleSelect', () => ({
                                selectall: false,
                                selectAction() {
                                    countEl = document.querySelector('.table-items-action');
                                    if (!countEl) return;
                                    checkboxes = document.querySelectorAll('input.table-item:checked');
                                    document.querySelector('.table-items-count').innerHTML = checkboxes.length;
                                    if (checkboxes.length > 0) {
                                        countEl.classList.remove('hidden');
                                    } else {
                                        countEl.classList.add('hidden');
                                    }
                                },
                                toggleAll() {
                                    this.selectall = !this.selectall;
                                    checkboxes = document.querySelectorAll('input.table-item');
                                    [...checkboxes].map((el) => {
                                        el.checked = this.selectall;
                                    });
                                    this.selectAction();
                                },
                                uncheckParent() {
                                    this.selectall = false;
                                    document.getElementById('parent-checkbox').checked = false;
                                    this.selectAction();
                                }
                            }))
                        })    
                    </script>
                    
                    <!-- Pagination -->
                    <div class="cvxzw">
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

@endsection