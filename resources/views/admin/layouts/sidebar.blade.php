
<!DOCTYPE html><html lang="en"><head>
    <meta charset="utf-8">
    <title>Mosaic HTML Demo - Home</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link href="{{ asset('assets/admin/css/flatpickr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/flatpickr.min.css') }}" rel="stylesheet">              
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet">       
    <script>
        if (localStorage.getItem('dark-mode') === 'false' || !('dark-mode' in localStorage)) {
            document.querySelector('html').classList.remove('dark');
            document.querySelector('html').style.colorScheme = 'light';
        } else {
            document.querySelector('html').classList.add('dark');
            document.querySelector('html').style.colorScheme = 'dark';
        }
    </script>    
<script defer data-domain='preview.cruip.com,rollup.cruip.com' src='https://plausible.cruip.com/js/script.js'></script></head>

<body class="dark:text-gray-400 cecbd c1ukq cyhlg c11jl cfh61" :class="{ 'sidebar-expanded': sidebarExpanded }" x-data="{ sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }" x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))">

    <script>
        if (localStorage.getItem('sidebar-expanded') == 'true') {
            document.querySelector('body').classList.add('sidebar-expanded');
        } else {
            document.querySelector('body').classList.remove('sidebar-expanded');
        }
    </script>

    <!-- Page wrapper -->
    <div class="flex cxe43 cmi6g">

        <!-- Sidebar -->
        <div class="c7io3">
            <!-- Sidebar backdrop (mobile only) -->
            <div class="bg-gray-900 c29tc c2iqv c8uqq cklrd c2y99 cini7 cjxg0 cbzdv" :class="sidebarOpen ? 'cgcrn' : 'opacity-0 pointer-events-none'" aria-hidden="true" x-cloak=""></div>

            <!-- Sidebar -->
            <div id="sidebar" class="flex 2xl:!w-64 bg-white cb401 cz8c3 cggqk c2vpa c8xsn c9hmh cm4k8 cohrt cvssj cu49b cmi6g c8uqq cwecn cz9ag c3aql c5vqk cqdkw coqgc cetff crey7 cu1dd cli41 cbzdv chreu clxb7" :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'" @click.outside="sidebarOpen = false" @keydown.escape.window="sidebarOpen = false" x-cloak="lg">

                <!-- Sidebar header -->
                <div class="flex cm3rx c83go ckdp3 cnbr1">
                    <!-- Close button -->
                    <button class="text-gray-500 c6jfa c2y99" @click.stop="sidebarOpen = !sidebarOpen" aria-controls="sidebar" :aria-expanded="sidebarOpen">
                        <span class="cn8jz">Close sidebar</span>
                        <svg class="cbm9w ctt6r cg8so" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z"></path>
                        </svg>
                    </button>
                    <!-- Logo -->
                    <a class="block" href="{{ route('admin.dashboard') }}">
                        <img src="{{ asset('assets/img/logo/logo.png') }}" class="cwjz0" width="64" height="64">
                    </a>
                </div>

                <!-- Links -->
                <div class="cvsuf">
                    <!-- Pages group -->
                    <div>
                        <h3 class="cmpw7 cgulq cdqku c0ef0 c1iho c9aea">
                            <span class="hidden 2xl:hidden cs2n8 cbbia cydwr cv9uc cg8so" aria-hidden="true">•••</span>
                            <span class="2xl:block c185y cmt20 c2y99">Menu</span>
                        </h3>
                        <ul class="c7gr8">
                            <li class="cvwie cosgb c33r0 cgnhv cb8zv c5w78 cjxkd cuvgf csr1i cnbr1">
                                <a class="block text-gray-800 dark:text-gray-100 {{ request()->routeIs('admin.users') ? 'text-violet-500' : 'text-gray-800' }}" href="{{ route('admin.users') }}">
                                    <div class="flex items-center">
                                        <svg class="cmpw7 cdqku cbm9w coqgc" xmlns="http://www.w3.org/2000/svg"
     width="16" height="16" viewBox="0 0 24 24" fill="none"
     stroke="currentColor" stroke-width="2"
     stroke-linecap="round" stroke-linejoin="round">
    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
    <circle cx="9" cy="7" r="4"/>
    <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
    <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
</svg>

                                        <span class="text-sm 2xl:opacity-100 c68cp c9gyy cvxm1 c8uqq c1k3n cfh3y">Users</span>
                                    </div>
                                </a>
                            </li>
                            <li class="cvwie cosgb c33r0 cgnhv cb8zv c5w78 cjxkd cuvgf csr1i cnbr1">
                                <a class="block text-gray-800 dark:text-gray-100 {{ request()->routeIs('admin.programs') ? 'text-violet-500' : 'text-gray-800' }}" href="{{ route('admin.programs') }}">
                                    <div class="flex items-center">
                                        <svg class="cmpw7 cdqku cbm9w coqgc" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                <path d="M12 1a1 1 0 1 0-2 0v2a3 3 0 0 0 3 3h2a1 1 0 1 0 0-2h-2a1 1 0 0 1-1-1V1ZM1 10a1 1 0 1 0 0 2h2a1 1 0 0 1 1 1v2a1 1 0 1 0 2 0v-2a3 3 0 0 0-3-3H1ZM5 0a1 1 0 0 1 1 1v2a3 3 0 0 1-3 3H1a1 1 0 0 1 0-2h2a1 1 0 0 0 1-1V1a1 1 0 0 1 1-1ZM12 13a1 1 0 0 1 1-1h2a1 1 0 1 0 0-2h-2a3 3 0 0 0-3 3v2a1 1 0 1 0 2 0v-2Z"></path>
                                        </svg> 
                                        <span class="text-sm 2xl:opacity-100 c68cp c9gyy cvxm1 c8uqq c1k3n cfh3y">Programs</span>
                                    </div>
                                </a>
                            </li>
                            <!-- E-Commerce -->
                            <!-- Community -->
                            <!-- Finance -->
                            <!-- Job Board -->
                            <!-- Tasks -->
                            <!-- Messages -->
                            <!-- Inbox -->
                            <!-- Calendar -->
                            <li class="cvwie cosgb c33r0 cgnhv cb8zv c5w78 cjxkd cuvgf csr1i cnbr1">
                                <a class="block text-gray-800 dark:text-gray-100 {{ request()->routeIs('admin.calendar') ? 'text-violet-500' : 'text-gray-800' }}" href="{{ route('admin.calendar') }}">
                                    <div class="flex items-center">
                                        <svg class="cmpw7 cdqku cbm9w coqgc" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                            <path d="M5 4a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2H5Z"></path>
                                            <path d="M4 0a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V4a4 4 0 0 0-4-4H4ZM2 4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4Z"></path>
                                        </svg>                                        
                                        <span class="text-sm 2xl:opacity-100 c68cp c9gyy cvxm1 c8uqq c1k3n cfh3y">Calendar</span>
                                    </div>
                                </a>
                            </li>
                            <!-- Campaigns -->
                            <!-- Settings -->
                            <!-- Utility -->
                        </ul>
                    </div>
                    <!-- More group -->
                    <div>
                        <h3 class="cmpw7 cgulq cdqku c0ef0 c1iho c9aea">
                            <span class="hidden 2xl:hidden cs2n8 cbbia cydwr cv9uc cg8so" aria-hidden="true">•••</span>
                            <span class="2xl:block c185y cmt20 c2y99">Settings</span>
                        </h3>
                        <ul class="c7gr8">
                            <li class="cvwie cosgb c33r0 cgnhv cb8zv c5w78 cjxkd cuvgf csr1i cnbr1">
                                <a class="block text-gray-800 dark:text-gray-100 {{ request()->routeIs('admin.account') ? 'text-violet-500' : 'text-gray-800' }}" href="{{ route('admin.account') }}">
                                    <div class="flex items-center">
                                        <svg class="mr-2 cmpw7 cdqku cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                    <path d="M8 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm-5.143 7.91a1 1 0 1 1-1.714-1.033A7.996 7.996 0 0 1 8 10a7.996 7.996 0 0 1 6.857 3.877 1 1 0 1 1-1.714 1.032A5.996 5.996 0 0 0 8 12a5.996 5.996 0 0 0-5.143 2.91Z"></path>
                                                </svg>                                        
                                        <span class="text-sm 2xl:opacity-100 c68cp c9gyy cvxm1 c8uqq c1k3n cfh3y">My Account</span>
                                    </div>
                                </a>
                            </li>
                            <li class="cvwie cosgb c33r0 cgnhv cb8zv c5w78 cjxkd cuvgf csr1i cnbr1">
                                <a class="block text-gray-800 dark:text-gray-100 {{ request()->routeIs('admin.notifications') ? 'text-violet-500' : 'text-gray-800' }}" href="{{ route('admin.notifications') }}">
                                    <div class="flex items-center">
                                        <svg class="mr-2 cmpw7 cdqku cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                    <path d="m9 12.614 4.806 1.374a.15.15 0 0 0 .174-.21L8.133 2.082a.15.15 0 0 0-.268 0L2.02 13.777a.149.149 0 0 0 .174.21L7 12.614V9a1 1 0 1 1 2 0v3.614Zm-1 1.794-5.257 1.503c-1.798.514-3.35-1.355-2.513-3.028L6.076 1.188c.791-1.584 3.052-1.584 3.845 0l5.848 11.695c.836 1.672-.714 3.54-2.512 3.028L8 14.408Z"></path>
                                                </svg>                                       
                                        <span class="text-sm 2xl:opacity-100 c68cp c9gyy cvxm1 c8uqq c1k3n cfh3y">My Notifications</span>
                                    </div>
                                </a>
                            </li>
                            <li class="cvwie cosgb c33r0 cgnhv cb8zv c5w78 cjxkd cuvgf csr1i cnbr1">
                                <a class="block text-gray-800 dark:text-gray-100 {{ request()->routeIs('admin.feedback') ? 'text-violet-500' : 'text-gray-800' }}" href="{{ route('admin.feedback') }}">
                                    <div class="flex items-center">
                                        <svg class="mr-2 cmpw7 cdqku cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                    <path d="M14.3.3c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-8 8c-.2.2-.4.3-.7.3-.3 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l8-8zM15 7c.6 0 1 .4 1 1 0 4.4-3.6 8-8 8s-8-3.6-8-8 3.6-8 8-8c.6 0 1 .4 1 1s-.4 1-1 1C4.7 2 2 4.7 2 8s2.7 6 6 6 6-2.7 6-6c0-.6.4-1 1-1z"></path>
                                                </svg>                                      
                                        <span class="text-sm 2xl:opacity-100 c68cp c9gyy cvxm1 c8uqq c1k3n cfh3y">Feedback</span>
                                    </div>
                                </a>
                            </li>
                            <!-- Authentication -->
                            <!-- Onboarding -->
                        </ul>
                    </div>
                </div>

                <!-- Expand / collapse button -->
                <div class="hidden 2xl:hidden justify-end cw8up cbbia czn6f cmyi8">
                    <div class="ct03h cuvgf csr1i cnbr1">
                        <button class="c3e4j cg12x cmpw7 cvvyz cdqku" @click="sidebarExpanded = !sidebarExpanded">
                            <span class="cn8jz">Expand / collapse sidebar</span>
                            <svg class="cfa4k cmpw7 cdqku cbm9w coqgc" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <path d="M15 16a1 1 0 0 1-1-1V1a1 1 0 1 1 2 0v14a1 1 0 0 1-1 1ZM8.586 7H1a1 1 0 1 0 0 2h7.586l-2.793 2.793a1 1 0 1 0 1.414 1.414l4.5-4.5A.997.997 0 0 0 12 8.01M11.924 7.617a.997.997 0 0 0-.217-.324l-4.5-4.5a1 1 0 0 0-1.414 1.414L8.586 7M12 7.99a.996.996 0 0 0-.076-.373Z"></path>
                            </svg>                            
                        </button>
                    </div>
                </div>

            </div>
        </div>

        <!-- Content area -->
        <div class="flex cbyyo c2p0j cm84d cetff c7jh9">

            <!-- Site header -->
            <header class="cko4k c1f82 ckkje cn67g cgnj8 cc06z cpawk c7pl5 c8rmw ckxi0 cli41 c99j0">
                <div class="cnbwt cs7xl clbq0">
                    <div class="flex items-center border-gray-200 cghq3 cm3rx czl0j c3nk1">

                        <!-- Header: Left side -->
                        <div class="flex">
                            <!-- Hamburger button -->
                            <button class="text-gray-500 c3e4j clwnn c2y99" @click.stop="sidebarOpen = !sidebarOpen" aria-controls="sidebar" :aria-expanded="sidebarOpen">
                                <span class="cn8jz">Open sidebar</span>
                                <svg class="cbm9w ctt6r cg8so" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="4" y="5" width="16" height="2"></rect>
                                    <rect x="4" y="11" width="16" height="2"></rect>
                                    <rect x="4" y="17" width="16" height="2"></rect>
                                </svg>
                            </button>

                        </div>

                        <!-- Header: Right side -->
                        <div class="flex items-center cp3jk">

                            <!-- Search button -->
                            <div x-data="{ searchOpen: false }">
                                <!-- Button -->
                                <button class="flex items-center justify-center rounded-full cukve cvdqj cw5z1 c76um cue4z cmwfi" :class="{ 'cvwbh c2vpa': searchOpen }" @click.prevent="searchOpen = true;if (searchOpen) $nextTick(()=>{$refs.searchInput.focus();});" aria-controls="search-modal">
                                    <span class="cn8jz">Search</span>
                                    <svg class="cp14x ch0mp cbm9w" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7ZM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5Z"></path>
                                        <path d="m13.314 11.9 2.393 2.393a.999.999 0 1 1-1.414 1.414L11.9 13.314a8.019 8.019 0 0 0 1.414-1.414Z"></path>
                                    </svg>
                                </button>
                                <!-- Modal backdrop -->
                                <div class="bg-gray-900 c29tc c2iqv cini7 cjxg0 cys4p" x-show="searchOpen" x-transition:enter="cxxol cbmha c8uqq" x-transition:enter-start="opacity-0" x-transition:enter-end="cgcrn" x-transition:leave="cxxol cbmha cf39k" x-transition:leave-start="cgcrn" x-transition:leave-end="opacity-0" aria-hidden="true" x-cloak=""></div>
                                <!-- Modal dialog -->
                                <div id="search-modal" class="flex justify-center cxe43 ce4zk cnbwt cini7 c8zfd cjxg0 cys4p cdiog clbq0" role="dialog" aria-modal="true" x-show="searchOpen" x-transition:enter="cxxol cz9ag c8uqq" x-transition:enter-start="opacity-0 cu867" x-transition:enter-end="cgcrn csdj3" x-transition:leave="cxxol cz9ag c8uqq" x-transition:leave-start="cgcrn csdj3" x-transition:leave-end="opacity-0 cu867" x-cloak="">
                                    <div class="bg-white border cghq3 c1xby c2vpa co669 caufm cb8zv cn9uy ccwri c6btv" @click.outside="searchOpen = false" @keydown.escape.window="searchOpen = false">   
                                        <!-- Search form -->
                                        <form class="border-gray-200 cghq3 ctv3r">
                                            <div class="cm84d">
                                                <label for="modal-search" class="cn8jz">Search</label>
                                                <input id="modal-search" class="bg-white c9hby c37no c7vc0 c0zkc c2vpa co5c0 cs6bq c6btv cih2z c72q5 cnqyw" type="search" placeholder="Search Anything…" x-ref="searchInput">
                                                <button class="c29dn cqdkw cini7 cqogy" type="submit" aria-label="Search">
                                                    <svg class="mr-2 cba8l c4it8 cmpw7 cdqku cbm9w coqgc cfh3y" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                                                        <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </form>
                                        <div class="c9hxi cz8qb">
                                            <!-- Recent searches -->
                                            <div class="c5w78 cxg65">
                                                <div class="cmpw7 cgulq cdqku c0ef0 c1iho c6f83 c9hxi">Recent searches</div>
                                                <ul class="text-sm">
                                                    <li>
                                                        <a class="flex items-center text-gray-800 dark:text-gray-100 chfxh c76um cb8zv c27zx" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="cmpw7 cdqku cbm9w coqgc chfzq" width="16" height="16" viewBox="0 0 16 16">
                                                                <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                            </svg>
                                                            <span>Form Builder - 23 hours on-demand video</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="flex items-center text-gray-800 dark:text-gray-100 chfxh c76um cb8zv c27zx" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="cmpw7 cdqku cbm9w coqgc chfzq" width="16" height="16" viewBox="0 0 16 16">
                                                                <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                            </svg>
                                                            <span>Access Mosaic on mobile and TV</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="flex items-center text-gray-800 dark:text-gray-100 chfxh c76um cb8zv c27zx" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="cmpw7 cdqku cbm9w coqgc chfzq" width="16" height="16" viewBox="0 0 16 16">
                                                                <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                            </svg>
                                                            <span>Product Update - Q4 2024</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="flex items-center text-gray-800 dark:text-gray-100 chfxh c76um cb8zv c27zx" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="cmpw7 cdqku cbm9w coqgc chfzq" width="16" height="16" viewBox="0 0 16 16">
                                                                <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                            </svg>
                                                            <span>Master Digital Marketing Strategy course</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="flex items-center text-gray-800 dark:text-gray-100 chfxh c76um cb8zv c27zx" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="cmpw7 cdqku cbm9w coqgc chfzq" width="16" height="16" viewBox="0 0 16 16">
                                                                <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                            </svg>
                                                            <span>Dedicated forms for products</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="flex items-center text-gray-800 dark:text-gray-100 chfxh c76um cb8zv c27zx" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="cmpw7 cdqku cbm9w coqgc chfzq" width="16" height="16" viewBox="0 0 16 16">
                                                                <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                            </svg>
                                                            <span>Product Update - Q4 2024</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Recent pages -->
                                            <div class="c5w78 cxg65">
                                                <div class="cmpw7 cgulq cdqku c0ef0 c1iho c6f83 c9hxi">Recent pages</div>
                                                <ul class="text-sm">
                                                    <li>
                                                        <a class="flex items-center text-gray-800 dark:text-gray-100 chfxh c76um cb8zv c27zx" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="cmpw7 cdqku cbm9w coqgc chfzq" width="16" height="16" viewBox="0 0 16 16">
                                                                <path d="M14 0H2c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h8l5-5V1c0-.6-.4-1-1-1zM3 2h10v8H9v4H3V2z"></path>
                                                            </svg>
                                                            <span><span class="c1k3n">Messages</span> - <span class="dark:text-gray-400 c1ukq">Conversation / … / Mike Mills</span></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="flex items-center text-gray-800 dark:text-gray-100 chfxh c76um cb8zv c27zx" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="cmpw7 cdqku cbm9w coqgc chfzq" width="16" height="16" viewBox="0 0 16 16">
                                                                <path d="M14 0H2c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h8l5-5V1c0-.6-.4-1-1-1zM3 2h10v8H9v4H3V2z"></path>
                                                            </svg>
                                                            <span><span class="c1k3n">Messages</span> - <span class="dark:text-gray-400 c1ukq">Conversation / … / Eva Patrick</span></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>                    
                            </div>

                            <!-- Notifications button -->

                            <!-- Info button -->

                            <!-- Dark mode toggle -->
                            <div>
                                <input type="checkbox" name="light-switch" id="light-switch" class="light-switch cn8jz">
                                <label class="flex items-center justify-center rounded-full cukve cvdqj cw5z1 c76um c5flv cue4z cmwfi" for="light-switch">
                                    <svg class="cp14x ch0mp cbm9w c1bco" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0a1 1 0 0 1 1 1v.5a1 1 0 1 1-2 0V1a1 1 0 0 1 1-1Z"></path>
                                        <path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0Zm-4 2a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"></path>
                                        <path d="M13.657 3.757a1 1 0 0 0-1.414-1.414l-.354.354a1 1 0 0 0 1.414 1.414l.354-.354ZM13.5 8a1 1 0 0 1 1-1h.5a1 1 0 1 1 0 2h-.5a1 1 0 0 1-1-1ZM13.303 11.889a1 1 0 0 0-1.414 1.414l.354.354a1 1 0 0 0 1.414-1.414l-.354-.354ZM8 13.5a1 1 0 0 1 1 1v.5a1 1 0 1 1-2 0v-.5a1 1 0 0 1 1-1ZM4.111 13.303a1 1 0 1 0-1.414-1.414l-.354.354a1 1 0 1 0 1.414 1.414l.354-.354ZM0 8a1 1 0 0 1 1-1h.5a1 1 0 0 1 0 2H1a1 1 0 0 1-1-1ZM3.757 2.343a1 1 0 1 0-1.414 1.414l.354.354A1 1 0 1 0 4.11 2.697l-.354-.354Z"></path>
                                    </svg>
                                    <svg class="hidden cp14x ch0mp cbm9w c2e1r" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.875 4.375a.625.625 0 1 0 1.25 0c.001-.69.56-1.249 1.25-1.25a.625.625 0 1 0 0-1.25 1.252 1.252 0 0 1-1.25-1.25.625.625 0 1 0-1.25 0 1.252 1.252 0 0 1-1.25 1.25.625.625 0 1 0 0 1.25c.69.001 1.249.56 1.25 1.25Z"></path>
                                        <path d="M7.019 1.985a1.55 1.55 0 0 0-.483-1.36 1.44 1.44 0 0 0-1.53-.277C2.056 1.553 0 4.5 0 7.9 0 12.352 3.648 16 8.1 16c3.407 0 6.246-2.058 7.51-4.963a1.446 1.446 0 0 0-.25-1.55 1.554 1.554 0 0 0-1.372-.502c-4.01.552-7.539-2.987-6.97-7ZM2 7.9C2 5.64 3.193 3.664 4.961 2.6 4.82 7.245 8.72 11.158 13.36 11.04 12.265 12.822 10.341 14 8.1 14 4.752 14 2 11.248 2 7.9Z"></path>                                        
                                    </svg>
                                    <span class="cn8jz">Switch to light / dark version</span>
                                </label>
                            </div>

                            <!-- Divider -->
                            <hr class="cmr9m cb4ug cvwbh cn8zk ctt6r">

                            <!-- User button -->
                            <div class="inline-flex cm84d" x-data="{ open: false }">
                                <button class="inline-flex justify-center items-center cqogy" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                                    <img class="rounded-full cue4z cmwfi" src="{{ asset('assets/admin/img/user-avatar-32.png') }}" width="32" height="32" alt="User">
                                    <div class="flex items-center c941w">
                                        <span class="text-sm dark:text-gray-100 croon ccuo4 c1ukq c1k3n c941w c8bkw">Bright Ummah</span>
                                        <svg class="w-3 h-3 cmpw7 cdqku cbm9w coqgc cpts2" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                        </svg>
                                    </div>
                                </button>
                                <div class="bg-white border border-gray-200 cghq3 c2vpa cbx8s cxe43 cb8zv ccwri cqdkw ctd47 c45yg cgky2 cbxoy cvggx ccwg3" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="cxxol cbmha c8uqq c98dn" x-transition:enter-start="opacity-0 cx9xg" x-transition:enter-end="cgcrn csdj3" x-transition:leave="cxxol cbmha c8uqq" x-transition:leave-start="cgcrn" x-transition:leave-end="opacity-0" x-cloak="">
                                    <div class="border-gray-200 cghq3 ctv3r c8asz cu6vl cb2br cif3q">
                                        <div class="text-gray-800 dark:text-gray-100 c1k3n">Bright Ummah</div>
                                        <div class="text-gray-500 dark:text-gray-400 c1iho caf78">Administrator</div>
                                    </div>
                                    <ul>
                                        <li>
                                            <a class="text-sm text-violet-500 flex items-center c5ylh ceetm c1k3n cb2br cwn3v" href="settings.html" @click="open = false" @focus="open = true" @focusout="open = false">Settings</a>
                                        </li>
<li>
    <form id="logout-form" method="POST" action="{{ route('logout') }}" class="hidden">
        @csrf
    </form>

    <a href="#"
       class="text-sm text-violet-500 flex items-center c5ylh ceetm c1k3n cb2br cwn3v"
       @click.prevent="
            open = false;
            document.getElementById('logout-form').submit();
       ">
       Sign Out
    </a>
</li>
                                    </ul>                
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </header>

            <main class="cbw8w">
                @yield('content')
            </main>

        </div>

    </div>

    <script src="{{ asset('assets/admin/js/alpinejs.min.js') }}" defer=""></script>
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
    <script src="{{ asset('assets/admin/js/chart.js') }}"></script>
    <script src="{{ asset('assets/admin/js/moment.js') }}"></script>
    <script src="{{ asset('assets/admin/js/chartjs-adapter-moment.js') }}"></script>

    @yield('page-scripts')
    <script src="{{ asset('assets/admin/js/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/admin/js/flatpickr-init.js') }}"></script>

<script>console.log("%cImportant!", "color: blue; font-size: x-large");console.log("%cThe page you are viewing is for demo purposes only. CSS and HTML have been minified and class names have been shortened to improve the page load time. Download our templates from https://cruip.com/ 😉", "font-size: large");</script><script>const pagesList = [{"name":"Dashboard","url":"https://preview.cruip.com/mosaic/{{ route('admin.dashboard') }}","active":true},{"name":"Analytics","url":"https://preview.cruip.com/mosaic/analytics.html","active":false},{"name":"Fintech","url":"https://preview.cruip.com/mosaic/fintech.html","active":false},{"name":"Customers","url":"https://preview.cruip.com/mosaic/customers.html","active":false},{"name":"Orders","url":"https://preview.cruip.com/mosaic/orders.html","active":false},{"name":"Invoices","url":"https://preview.cruip.com/mosaic/invoices.html","active":false},{"name":"Shop","url":"https://preview.cruip.com/mosaic/shop.html","active":false},{"name":"Shop 2","url":"https://preview.cruip.com/mosaic/shop-2.html","active":false},{"name":"Single Product","url":"https://preview.cruip.com/mosaic/product.html","active":false},{"name":"Cart","url":"https://preview.cruip.com/mosaic/cart.html","active":false},{"name":"Cart 2","url":"https://preview.cruip.com/mosaic/cart-2.html","active":false},{"name":"Cart 3","url":"https://preview.cruip.com/mosaic/cart-3.html","active":false},{"name":"Pay","url":"https://preview.cruip.com/mosaic/pay.html","active":false},{"name":"Campaigns","url":"https://preview.cruip.com/mosaic/campaigns.html","active":false},{"name":"Users Tabs","url":"https://preview.cruip.com/mosaic/users-tabs.html","active":false},{"name":"Users Tiles","url":"https://preview.cruip.com/mosaic/users-tiles.html","active":false},{"name":"Profile","url":"https://preview.cruip.com/mosaic/profile.html","active":false},{"name":"Feed","url":"https://preview.cruip.com/mosaic/feed.html","active":false},{"name":"Forum","url":"https://preview.cruip.com/mosaic/forum.html","active":false},{"name":"Forum Post","url":"https://preview.cruip.com/mosaic/forum-post.html","active":false},{"name":"Meetups","url":"https://preview.cruip.com/mosaic/meetups.html","active":false},{"name":"Meetups Post","url":"https://preview.cruip.com/mosaic/meetups-post.html","active":false},{"name":"Cards","url":"https://preview.cruip.com/mosaic/credit-cards.html","active":false},{"name":"Transactions","url":"https://preview.cruip.com/mosaic/transactions.html","active":false},{"name":"Transaction Details","url":"https://preview.cruip.com/mosaic/transaction-details.html","active":false},{"name":"Jobs Listing","url":"https://preview.cruip.com/mosaic/job-listing.html","active":false},{"name":"Jobs Post","url":"https://preview.cruip.com/mosaic/job-post.html","active":false},{"name":"Company Profile","url":"https://preview.cruip.com/mosaic/company-profile.html","active":false},{"name":"Kanban","url":"https://preview.cruip.com/mosaic/tasks-kanban.html","active":false},{"name":"Tasks List","url":"https://preview.cruip.com/mosaic/tasks-list.html","active":false},{"name":"Messages","url":"https://preview.cruip.com/mosaic/messages.html","active":false},{"name":"Inbox","url":"https://preview.cruip.com/mosaic/inbox.html","active":false},{"name":"Calendar","url":"https://preview.cruip.com/mosaic/calendar.html","active":false},{"name":"Applications","url":"https://preview.cruip.com/mosaic/applications.html","active":false},{"name":"My Account","url":"https://preview.cruip.com/mosaic/settings.html","active":false},{"name":"My Notifications","url":"https://preview.cruip.com/mosaic/notifications.html","active":false},{"name":"Connected Apps","url":"https://preview.cruip.com/mosaic/connected-apps.html","active":false},{"name":"Plans","url":"https://preview.cruip.com/mosaic/plans.html","active":false},{"name":"Billing & Invoices","url":"https://preview.cruip.com/mosaic/billing.html","active":false},{"name":"Give Feedback","url":"https://preview.cruip.com/mosaic/feedback.html","active":false},{"name":"Changelog","url":"https://preview.cruip.com/mosaic/changelog.html","active":false},{"name":"Roadmap","url":"https://preview.cruip.com/mosaic/roadmap.html","active":false},{"name":"FAQs","url":"https://preview.cruip.com/mosaic/faqs.html","active":false},{"name":"Empty State","url":"https://preview.cruip.com/mosaic/empty-state.html","active":false},{"name":"Page Not Found","url":"https://preview.cruip.com/mosaic/404.html","active":false},{"name":"Knowledge Base","url":"https://preview.cruip.com/mosaic/knowledge-base.html","active":false},{"name":"Sign in","url":"https://preview.cruip.com/mosaic/signin.html","active":false},{"name":"Sign up","url":"https://preview.cruip.com/mosaic/signup.html","active":false},{"name":"Reset password","url":"https://preview.cruip.com/mosaic/reset-password.html","active":false},{"name":"Onboarding 1","url":"https://preview.cruip.com/mosaic/onboarding-01.html","active":false},{"name":"Onboarding 2","url":"https://preview.cruip.com/mosaic/onboarding-02.html","active":false},{"name":"Onboarding 3","url":"https://preview.cruip.com/mosaic/onboarding-03.html","active":false},{"name":"Onboarding 4","url":"https://preview.cruip.com/mosaic/onboarding-04.html","active":false},{"name":"Button","url":"https://preview.cruip.com/mosaic/component-button.html","active":false},{"name":"Input Form","url":"https://preview.cruip.com/mosaic/component-form.html","active":false},{"name":"Dropdown","url":"https://preview.cruip.com/mosaic/component-dropdown.html","active":false},{"name":"Alert & Banner","url":"https://preview.cruip.com/mosaic/component-alert.html","active":false},{"name":"Modal","url":"https://preview.cruip.com/mosaic/component-modal.html","active":false},{"name":"Pagination","url":"https://preview.cruip.com/mosaic/component-pagination.html","active":false},{"name":"Tabs","url":"https://preview.cruip.com/mosaic/component-tabs.html","active":false},{"name":"Breadcrumb","url":"https://preview.cruip.com/mosaic/component-breadcrumb.html","active":false},{"name":"Badge","url":"https://preview.cruip.com/mosaic/component-badge.html","active":false},{"name":"Avatar","url":"https://preview.cruip.com/mosaic/component-avatar.html","active":false},{"name":"Tooltip","url":"https://preview.cruip.com/mosaic/component-tooltip.html","active":false},{"name":"Accordion","url":"https://preview.cruip.com/mosaic/component-accordion.html","active":false},{"name":"Icons","url":"https://preview.cruip.com/mosaic/component-icons.html","active":false}];if(window != top){window.parent.postMessage(pagesList, "https://cruip.com")};</script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"59cc17d45d734f9ba118c63036ab1b84","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
<script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('calendar', () => ({
                month: null,
                year: null,
                daysInMonth: [],
                startingBlankDays: [],
                endingBlankDays: [],
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                dayNames: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                events: [
                    // Previous month
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth() - 1, 8, 3),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth() - 1, 8, 7),
                        eventName: '⛱️ Relax for 2 at Marienbad',
                        eventColor: 'indigo'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth() - 1, 12, 10),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 12, 11),
                        eventName: 'Team Catch-up',
                        eventColor: 'sky'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth() - 1, 18, 2),
                        eventEnd: '',
                        eventName: '✍️ New Project (2)',
                        eventColor: 'yellow'
                    },                    
                    // Current month
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 1, 10),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 1, 11),
                        eventName: 'Meeting w/ Patrick Lin',
                        eventColor: 'sky'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 1, 19),
                        eventEnd: '',
                        eventName: 'Reservation at La Ginestre',
                        eventColor: 'indigo'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 3, 9),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 3, 10),
                        eventName: '✍️ New Project',
                        eventColor: 'yellow'
                    }, 
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 7, 21),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 7, 22),
                        eventName: '⚽ 2024 - Semi-final',
                        eventColor: 'red'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 9, 10),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 9, 11),
                        eventName: 'Meeting w/Carolyn',
                        eventColor: 'sky'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 9, 13),
                        eventEnd: '',
                        eventName: 'Pick up Marta at school',
                        eventColor: 'green'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 9, 14),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 9, 15),
                        eventName: 'Meeting w/ Patrick Lin',
                        eventColor: 'green'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 9, 19),
                        eventEnd: '',
                        eventName: 'Reservation at La Ginestre',
                        eventColor: 'indigo'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 11, 10),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 11, 11),
                        eventName: '⛱️ Relax for 2 at Marienbad',
                        eventColor: 'indigo'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 11, 19),
                        eventEnd: '',
                        eventName: '⚽ 2024 - Semi-final',
                        eventColor: 'red'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 14, 10),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 14, 11),
                        eventName: 'Team Catch-up',
                        eventColor: 'sky'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 21, 2),
                        eventEnd: '',
                        eventName: 'Pick up Marta at school',
                        eventColor: 'green'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 21, 3),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 21, 7),
                        eventName: '✍️ New Project (2)',
                        eventColor: 'yellow'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 22, 10),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 22, 11),
                        eventName: 'Team Catch-up',
                        eventColor: 'sky'
                    },                     
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 22, 19),
                        eventEnd: '',
                        eventName: '⚽ 2024 - Semi-final',
                        eventColor: 'red'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 23, 0),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 23, 23),
                        eventName: 'You stay at Meridiana B&B',
                        eventColor: 'indigo'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 25, 10),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 25, 11),
                        eventName: 'Meeting w/ Kylie Joh',
                        eventColor: 'sky'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 29, 10),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 29, 11),
                        eventName: 'Call Request ->',
                        eventColor: 'sky'
                    },
                    // Next month
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth() + 1, 2, 3),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth() + 1, 2, 7),
                        eventName: '✍️ New Project (2)',
                        eventColor: 'yellow'
                    },                    
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth() + 1, 14, 10),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 14, 11),
                        eventName: 'Team Catch-up',
                        eventColor: 'sky'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth() + 1, 25, 2),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth() + 1, 25, 3),
                        eventName: 'Pick up Marta at school',
                        eventColor: 'green'
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth() + 1, 27, 21),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth() + 1, 27, 22),
                        eventName: '⚽ 2024 - Semi-final',
                        eventColor: 'red'
                    },                    
                ],

                initCalendar() {
                    const today = new Date();
                    this.month = today.getMonth();
                    this.year = today.getFullYear();
                    this.getDays();
                },

                isToday(date) {
                    const today = new Date();
                    const day = new Date(this.year, this.month, date);
                    return today.toDateString() === day.toDateString() ? true : false;
                },

                getEvents(date) {
                    return this.events.filter(e => new Date(e.eventStart).toDateString() === new Date(this.year, this.month, date).toDateString());
                },

                getDays() {
                    const daysInMonth = new Date(this.year, this.month + 1, 0).getDate();

                    // starting empty cells (previous month)
                    const startingDayOfWeek = new Date(this.year, this.month).getDay();
                    let startingBlankDaysArray = [];
                    for (let i = 1; i <= startingDayOfWeek; i++) {
                        startingBlankDaysArray.push(i);
                    }

                    // ending empty cells (next month)
                    const endingDayOfWeek = new Date(this.year, this.month + 1, 0).getDay();
                    let endingBlankDaysArray = [];
                    for (let i = 1; i < 7 - endingDayOfWeek; i++) {
                        endingBlankDaysArray.push(i);
                    }                    

                    // current month cells
                    let daysArray = [];
                    for (let i = 1; i <= daysInMonth; i++) {
                        daysArray.push(i);
                    }

                    this.startingBlankDays = startingBlankDaysArray;
                    this.endingBlankDays = endingBlankDaysArray;
                    this.daysInMonth = daysArray;
                }
            }))
        })
	</script> 
</body>
</html>