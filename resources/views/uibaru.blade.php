<div class="ch3yp cnbwt cs7xl clu2m c6btv clbq0 cxsfz">

                    <!-- Page header -->
                    <div class="c2g1r cwnq4 cnlq0 cgd7w">

                        <!-- Left: Title -->
                        <div class="c2rn6 cdiog">
                            <h1 class="text-gray-800 dark:text-gray-100 font-bold c459m cbtcb">Admins</h1>
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

                            <!-- Add Admin button -->
                            <button class="btn bg-gray-900 cdj8c cg0jr ch8z9 cilvw cyn7a">
                                <svg class="cbm9w cbmv0 coqgc" width="16" height="16" viewBox="0 0 16 16">
                                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                                </svg>
                                <span class="cyga5">Add Admin</span>
                            </button>                            
                            
                        </div>

                    </div>

                    <!-- Table -->
                    <div class="bg-white c2vpa c1hly c5vqk">
                        <header class="cx3hp cz8qb">
                            <h2 class="text-gray-800 dark:text-gray-100 cgulq">All Admins <span class="cmpw7 cdqku c1k3n">248</span></h2>
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
                                            <th class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cgulq c2hoo">Name</div>
                                            </th>
                                            <th class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cgulq c2hoo">Email</div>
                                            </th>
                                            <th class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cgulq">Created</div>
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
                                                        <img class="rounded-full" src="./images/user-40-01.jpg" width="40" height="40" alt="User 01">
                                                    </div>
                                                    <div class="text-gray-800 dark:text-gray-100 c1k3n">Patricia Semklo</div>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c2hoo"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5929382d2b303a3038772a3c3432353619382929773a3634">[email&#160;protected]</a></div>
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
                                                        <img class="rounded-full" src="./images/user-40-02.jpg" width="40" height="40" alt="User 02">
                                                    </div>
                                                    <div class="text-gray-800 dark:text-gray-100 c1k3n">Dominik Lamakani</div>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c2hoo"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="096d666460676062276568646862686760496e64686065276a6664">[email&#160;protected]</a></div>
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
                                                        <img class="rounded-full" src="./images/user-40-03.jpg" width="40" height="40" alt="User 03">
                                                    </div>
                                                    <div class="text-gray-800 dark:text-gray-100 c1k3n">Ivan Mesaros</div>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c2hoo"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6f060206190e01020a1c2f08020e0603410c0002">[email&#160;protected]</a></div>
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
                                                        <img class="rounded-full" src="./images/user-40-04.jpg" width="40" height="40" alt="User 04">
                                                    </div>
                                                    <div class="text-gray-800 dark:text-gray-100 c1k3n">Maria Martinez</div>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c2hoo"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="aac7cbd8dec3c4cfd0c2c5c7cfeacdc7cbc3c684c9c5c7">[email&#160;protected]</a></div>
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
                                                        <img class="rounded-full" src="./images/user-40-05.jpg" width="40" height="40" alt="User 05">
                                                    </div>
                                                    <div class="text-gray-800 dark:text-gray-100 c1k3n">Vicky Jung</div>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c2hoo"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="aec7daddd8c7cdc5d7eecdc1c0dacfcdda80cdc1c3">[email&#160;protected]</a></div>
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
                                                        <img class="rounded-full" src="./images/user-40-06.jpg" width="40" height="40" alt="User 06">
                                                    </div>
                                                    <div class="text-gray-800 dark:text-gray-100 c1k3n">Tisho Yanchev</div>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c2hoo"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="deaab7adb6b1f0a79eb5abacb2a7aabbbdb6f0bdb1b3">[email&#160;protected]</a></div>
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
                                                        <img class="rounded-full" src="./images/user-40-07.jpg" width="40" height="40" alt="User 07">
                                                    </div>
                                                    <div class="text-gray-800 dark:text-gray-100 c1k3n">James Cameron</div>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c2hoo"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1d777c70786e337e78725d777c70786e3369787e75">[email&#160;protected]</a></div>
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
                                                        <img class="rounded-full" src="./images/user-40-08.jpg" width="40" height="40" alt="User 08">
                                                    </div>
                                                    <div class="text-gray-800 dark:text-gray-100 c1k3n">Haruki Masuno</div>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c2hoo"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a2cac3d0d7c9cbe2d1d7d2c7d0cfc3cbce8cc8d2">[email&#160;protected]</a></div>
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
                                                        <img class="rounded-full" src="./images/user-40-09.jpg" width="40" height="40" alt="User 09">
                                                    </div>
                                                    <div class="text-gray-800 dark:text-gray-100 c1k3n">Joe Huang</div>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c2hoo"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3f55505a574a5e51587f57504b525e5653115c5052">[email&#160;protected]</a></div>
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
                                                        <img class="rounded-full" src="./images/user-40-10.jpg" width="40" height="40" alt="User 10">
                                                    </div>
                                                    <div class="text-gray-800 dark:text-gray-100 c1k3n">Carolyn McNeail</div>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c2hoo"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9dfefceff2f1e4f3f1f2ebf8ddfaf0fcf4f1b3fef2f0">[email&#160;protected]</a></div>
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