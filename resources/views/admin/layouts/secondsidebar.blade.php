
<!DOCTYPE html><html lang="en"><head>
    <meta charset="utf-8">
    <title>{{ $title ?? 'Bright Ummah Academy' }}</title>
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

<body class="bg-white text-gray-800 cecbd c1ukq cyhlg c11jl cfh61" :class="{ 'sidebar-expanded': sidebarExpanded }" x-data="{ sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }" x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))">

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
            <div id="sidebar" class="flex 2xl:!w-64 bg-white border-gray-200 cb401 cghq3 cz8c3 cggqk c2vpa c8xsn c9hmh cohrt cvssj cu49b cmi6g c8uqq cwecn cz9ag c3aql cqdkw coqgc cetff cpsmr crey7 cu1dd cli41 cbzdv chreu clxb7" :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'" @click.outside="sidebarOpen = false" @keydown.escape.window="sidebarOpen = false" x-cloak="lg">

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
                    <a class="block" href="{{ route('admin.programs') }}">
                        <img id="sidebar-logo" src="{{ asset('assets/img/logo/logo.png') }}" class="cwjz0" width="64" height="64">
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
                            <li class="c5w78 cjxkd cuvgf csr1i cnbr1 {{ request()->routeIs('admin.programs*') ? 'cvwie cosgb c33r0 cgnhv cb8zv' : '' }}">
                                <a class="block text-gray-800 dark:text-gray-100" href="{{ route('admin.programs') }}">
                                    <div class="flex items-center">
                                        <svg class="cmpw7 cdqku cbm9w coqgc {{ request()->routeIs('admin.programs*') ? 'text-violet-500 dark:text-violet-400' : '' }}" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                <path d="M12 1a1 1 0 1 0-2 0v2a3 3 0 0 0 3 3h2a1 1 0 1 0 0-2h-2a1 1 0 0 1-1-1V1ZM1 10a1 1 0 1 0 0 2h2a1 1 0 0 1 1 1v2a1 1 0 1 0 2 0v-2a3 3 0 0 0-3-3H1ZM5 0a1 1 0 0 1 1 1v2a3 3 0 0 1-3 3H1a1 1 0 0 1 0-2h2a1 1 0 0 0 1-1V1a1 1 0 0 1 1-1ZM12 13a1 1 0 0 1 1-1h2a1 1 0 1 0 0-2h-2a3 3 0 0 0-3 3v2a1 1 0 1 0 2 0v-2Z"></path>
                                        </svg> 
                                        <span class="text-sm 2xl:opacity-100 c68cp c9gyy cvxm1 c8uqq c1k3n cfh3y">Programs</span>
                                    </div>
                                </a>
                            </li>
                            <li class="c5w78 cjxkd cuvgf csr1i cnbr1 {{ request()->routeIs('admin.teachers.*') ? 'cvwie cosgb c33r0 cgnhv cb8zv' : '' }}">
                                <a class="block text-gray-800 dark:text-gray-100" href="{{ route('admin.teachers.index') }}">
                                    <div class="flex items-center">
                                        <svg class="cmpw7 cdqku cbm9w coqgc {{ request()->routeIs('admin.teachers.*') ? 'text-violet-500 dark:text-violet-400' : '' }}" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M5 7a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                            <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                                        </svg>
                                        <span class="text-sm 2xl:opacity-100 c68cp c9gyy cvxm1 c8uqq c1k3n cfh3y">Teachers</span>
                                    </div>
                                </a>
                            </li>
                            <li class="c5w78 cjxkd cuvgf csr1i cnbr1 {{ request()->routeIs('admin.articles.*') ? 'cvwie cosgb c33r0 cgnhv cb8zv' : '' }}">
                                <a class="block text-gray-800 dark:text-gray-100" href="{{ route('admin.articles.index') }}">
                                    <div class="flex items-center">
                                        <svg class="cmpw7 cdqku cbm9w coqgc {{ request()->routeIs('admin.articles.*') ? 'text-violet-500 dark:text-violet-400' : '' }}" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />
                                            <path d="M8 8l4 0" />
                                            <path d="M8 12l4 0" />
                                            <path d="M8 16l4 0" />
                                        </svg>
                                        <span class="text-sm 2xl:opacity-100 c68cp c9gyy cvxm1 c8uqq c1k3n cfh3y">Articles</span>
                                    </div>
                                </a>
                            </li>
                            <li class="c5w78 cjxkd cuvgf csr1i cnbr1 {{ request()->is('admin/testimonials') ? 'cvwie cosgb c33r0 cgnhv cb8zv' : '' }}">
                                <a class="block text-gray-800 dark:text-gray-100" href="{{ url('/admin/testimonials') }}">
                                    <div class="flex items-center">
                                        <svg class="cmpw7 cdqku cbm9w coqgc {{ request()->is('admin/testimonials') ? 'text-violet-500 dark:text-violet-400' : '' }}" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M8 9h8" />
                                            <path d="M8 13h4.5" />
                                            <path d="M10.325 19.605l-2.325 1.395v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v4.5" />
                                            <path d="M17.8 20.817l-2.172 1.138a.392 .392 0 0 1 -.568 -.41l.415 -2.411l-1.757 -1.707a.389 .389 0 0 1 .217 -.665l2.428 -.352l1.086 -2.193a.392 .392 0 0 1 .702 0l1.086 2.193l2.428 .352a.39 .39 0 0 1 .217 .665l-1.757 1.707l.414 2.41a.39 .39 0 0 1 -.567 .411l-2.172 -1.138" />
                                        </svg>
                                        <span class="text-sm 2xl:opacity-100 c68cp c9gyy cvxm1 c8uqq c1k3n cfh3y">Testimonials</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    @if(auth()->user()->role === 'superadmin')
                    <!-- Lainnya group (Superadmin Only) -->
                    <div>
                        <h3 class="cmpw7 cgulq cdqku c0ef0 c1iho c9aea">
                            <span class="hidden 2xl:hidden cs2n8 cbbia cydwr cv9uc cg8so" aria-hidden="true">•••</span>
                            <span class="2xl:block c185y cmt20 c2y99">Lainnya</span>
                        </h3>
                        <ul class="c7gr8">
                            <li class="c5w78 cjxkd cuvgf csr1i cnbr1 {{ request()->routeIs('admin.admins*') ? 'cvwie cosgb c33r0 cgnhv cb8zv' : '' }}">
                                <a class="block text-gray-800 dark:text-gray-100" href="{{ route('admin.admins') }}">
                                    <div class="flex items-center">
                                        <svg class="cmpw7 cdqku cbm9w coqgc {{ request()->routeIs('admin.admins*') ? 'text-violet-500 dark:text-violet-400' : '' }}" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                            <path d="M16 19h6" />
                                            <path d="M19 16v6" />
                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4" />
                                        </svg>
                                        <span class="text-sm 2xl:opacity-100 c68cp c9gyy cvxm1 c8uqq c1k3n cfh3y">Admins</span>
                                    </div>
                                </a>
                            </li>
                            <li class="c5w78 cjxkd cuvgf csr1i cnbr1 {{ request()->routeIs('admin.changelog') ? 'cvwie cosgb c33r0 cgnhv cb8zv' : '' }}">
                                <a class="block text-gray-800 dark:text-gray-100" href="{{ route('admin.changelog') }}">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <svg class="cmpw7 cdqku cbm9w coqgc {{ request()->routeIs('admin.changelog') ? 'text-violet-500 dark:text-violet-400' : '' }}" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0ZM1.5 8a6.5 6.5 0 1 1 13 0 6.5 6.5 0 0 1-13 0Z"></path>
                                                <path d="M8 4a.75.75 0 0 1 .75.75v3.5a.75.75 0 0 1-1.5 0v-3.5A.75.75 0 0 1 8 4Zm0 8a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"></path>
                                            </svg>
                                            <span class="text-sm 2xl:opacity-100 c68cp c9gyy cvxm1 c8uqq c1k3n cfh3y">Changelog</span>
                                        </div>
                                        @php
                                            $unreadBugReports = \App\Models\BugReport::where('is_read', false)->count();
                                        @endphp
                                        @if($unreadBugReports > 0)
                                            <span style="background-color: #ef4444; color: white; font-size: 10px; font-weight: 600; padding: 2px 6px; border-radius: 10px; margin-left: 8px; min-width: 18px; text-align: center; display: inline-block;">{{ $unreadBugReports }}</span>
                                        @endif
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    @endif

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
            <header class="cxtaf cuzab cnl4h curk8 cn67g cij5c cpawk cno1a cd0ew c7pl5 cuc0w c5jn9 c8rmw ciybg cx5ad ckxi0 cli41 c99j0">
                <div class="cnbwt cs7xl clbq0">
                    <div class="flex items-center cm3rx c3nk1">

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

                        <!-- Notifications button -->
                            <div class="inline-flex cm84d" x-data="{ open: false, hasUnread: {{ $unreadCount ?? 0 }} > 0 }">
                                <button class="flex items-center justify-center rounded-full cukve cvdqj cw5z1 c76um cue4z cmwfi" :class="{ 'cvwbh c2vpa': open }" aria-haspopup="true" @click.prevent="open = !open; if(open && hasUnread) { markAllAsRead(); hasUnread = false; }" :aria-expanded="open">
                                    <span class="cn8jz">Notifications</span>
                                    <svg class="cp14x ch0mp cbm9w" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 0a7 7 0 0 0-7 7c0 1.202.308 2.33.84 3.316l-.789 2.368a1 1 0 0 0 1.265 1.265l2.595-.865a1 1 0 0 0-.632-1.898l-.698.233.3-.9a1 1 0 0 0-.104-.85A4.97 4.97 0 0 1 2 7a5 5 0 0 1 5-5 4.99 4.99 0 0 1 4.093 2.135 1 1 0 1 0 1.638-1.148A6.99 6.99 0 0 0 7 0Z"></path>
                                        <path d="M11 6a5 5 0 0 0 0 10c.807 0 1.567-.194 2.24-.533l1.444.482a1 1 0 0 0 1.265-1.265l-.482-1.444A4.962 4.962 0 0 0 16 11a5 5 0 0 0-5-5Zm-3 5a3 3 0 0 1 6 0c0 .588-.171 1.134-.466 1.6a1 1 0 0 0-.115.82 1 1 0 0 0-.82.114A2.973 2.973 0 0 1 11 14a3 3 0 0 1-3-3Z"></path>                                        
                                    </svg>
                                    @php
                                        $unreadCount = \App\Models\Notification::where('user_id', '!=', auth()->id())
                                            ->where('is_read', false)
                                            ->count();
                                    @endphp
                                    <div x-show="hasUnread" class="rounded-full cdnc2 cbv37 cg902 cqdkw ct7xr cgky2 cf894 cych8 cli41"></div>
                                </button>
                                <div class="bg-white border border-gray-200 cghq3 c2vpa cbx8s cxe43 cb8zv ccwri cqdkw ctd47 cyh17 ctj0o cgky2 cbxoy cdqsh cvggx ccwg3" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="cxxol cbmha c8uqq c98dn" x-transition:enter-start="opacity-0 cx9xg" x-transition:enter-end="cgcrn csdj3" x-transition:leave="cxxol cbmha c8uqq" x-transition:leave-start="cgcrn" x-transition:leave-end="opacity-0" x-cloak="">
                                    <div class="cmpw7 cgulq cdqku c0ef0 c1yoz c1iho clbq0 cif3q">Notifications</div>
                                    <ul style="max-height: 300px; overflow-y: auto;">
                                        @php
                                            $notifications = \App\Models\Notification::with('user')
                                                ->where('user_id', '!=', auth()->id())
                                                ->latest()
                                                ->take(10)
                                                ->get();
                                        @endphp
                                        
                                        @forelse($notifications as $notification)
                                        <li class="border-gray-200 cghq3 cmtlz ctv3r">
                                            <div class="block chfxh csd0k clbq0 cuvgf hover:bg-gray-100 cursor-default">
                                                <span class="block text-sm c6f83">
                                                    <span class="text-gray-800 dark:text-gray-100 c1k3n">
                                                        {{ $notification->user->name }}
                                                    </span> 
                                                    <span class="dark:text-gray-400">
                                                        {{ $notification->message }}
                                                    </span>
                                                </span>
                                                <span class="block cmpw7 cdqku c1k3n c1iho">
                                                {{ $notification->created_at->format('M d, Y') }}
                                                </span>
                                            </div>
                                        </li>
                                        @empty
                                        <li class="border-gray-200 cghq3 cmtlz ctv3r">
                                            <div class="block chfxh csd0k clbq0 cuvgf">
                                                <span class="block text-sm c6f83 text-gray-500">Tidak ada notifikasi</span>
                                            </div>
                                        </li>
                                        @endforelse
                                    </ul>                
                                </div>
                            </div>

                        <!-- Send Feedback (Admin Only) -->
                        @if(auth()->user()->role === 'admin')
                                    <div class="ctq43">
                                        <!-- Start -->
                                        <div x-data="{ modalOpen: false }">
                                            <button class="text-gray-500 hover:text-gray-600 dark:text-gray-400 dark:hover:text-gray-300 flex items-center justify-center" @click.prevent="modalOpen = true" aria-controls="feedback-modal" title="Laporkan Bug">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                                    <path d="M22 17a2 2 0 0 1-2 2H6.828a2 2 0 0 0-1.414.586l-2.202 2.202A.71.71 0 0 1 2 21.286V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2z"></path>
                                                    <path d="M12 8v6"></path>
                                                    <path d="M9 11h6"></path>
                                                </svg>
                                            </button>
                                            <!-- Modal backdrop -->
                                            <div class="bg-gray-900 c29tc c2iqv cini7 cjxg0 cys4p" x-show="modalOpen" x-transition:enter="cxxol cbmha c8uqq" x-transition:enter-start="opacity-0" x-transition:enter-end="cgcrn" x-transition:leave="cxxol cbmha cf39k" x-transition:leave-start="cgcrn" x-transition:leave-end="opacity-0" aria-hidden="true" x-cloak=""></div>
                                            <!-- Modal dialog -->
                                            <div id="feedback-modal" class="flex items-center justify-center cxe43 cnbwt cini7 cjxg0 cys4p codu7 clbq0" role="dialog" aria-modal="true" x-show="modalOpen" x-transition:enter="cxxol cz9ag c8uqq" x-transition:enter-start="opacity-0 cu867" x-transition:enter-end="cgcrn csdj3" x-transition:leave="cxxol cz9ag c8uqq" x-transition:leave-start="cgcrn csdj3" x-transition:leave-end="opacity-0 cu867" x-cloak="">
                                                <div class="bg-white c2vpa co669 caufm cb8zv ccwri crwo8 c6btv" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                                                    <form method="POST" action="{{ route('admin.bug-reports.store') }}">
                                                        @csrf
                                                        <!-- Modal header -->
                                                        <div class="border-gray-200 cghq3 ctv3r cx3hp c72q5">
                                                            <div class="flex items-center cm3rx">
                                                                <div class="text-gray-800 dark:text-gray-100 cgulq">Laporkan Bug</div>
                                                                <button type="button" class="c3e4j cg12x cmpw7 cdqku" @click="modalOpen = false">
                                                                    <div class="cn8jz">Close</div>
                                                                    <svg class="cbm9w" width="16" height="16" viewBox="0 0 16 16">
                                                                        <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <!-- Modal content -->
                                                        <div class="cx3hp cz8qb">
                                                            <div class="text-sm">
                                                                <div class="text-gray-800 dark:text-gray-100 c1k3n cxg65">Bantu kami meningkatkan dashboard Bright Ummah Academy. Laporkan bug atau berikan saran fitur baru.</div>
                                                            </div>
                                                            <div class="cjav5">
                                                                <div>
                                                                    <div class="inline-flex cm84d c6btv" x-data="{ open: false, selected: 0, categories: ['Saran Fitur', 'Lapor Bug', 'Lainnya'] }">
                                                                        <input type="hidden" name="category" :value="categories[selected]">
                                                                        <button type="button" class="btn bg-white border-gray-200 cc0oq c29yw cghq3 cspbm cqahh c0zkc c2vpa cm3rx c1ukq c45yg c6btv" aria-label="Select category" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                                                                            <span class="flex items-center">
                                                                                <span x-text="categories[selected]"></span>
                                                                            </span>
                                                                            <svg class="cmpw7 cdqku cbm9w coqgc cpts2" width="11" height="7" viewBox="0 0 11 7">
                                                                                <path d="M5.4 6.8L0 1.4 1.4 0l4 4 4-4 1.4 1.4z"></path>
                                                                            </svg>
                                                                        </button>
                                                                        <div class="bg-white border border-gray-200 cghq3 c2vpa cxe43 cb8zv ccwri cqdkw ctd47 cbxoy cu1dd c6btv cvggx ccwg3" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="cxxol cbmha cf39k c98dn" x-transition:enter-start="opacity-0 cx9xg" x-transition:enter-end="cgcrn csdj3" x-transition:leave="cxxol cbmha cf39k" x-transition:leave-start="cgcrn" x-transition:leave-end="opacity-0" x-cloak="">
                                                                            <div class="text-sm ce8qq c0zkc c6sh9 c1ukq c1k3n co0ms">
                                                                                <button type="button" tabindex="0" class="flex items-center chfxh csd0k cm3rx c5flv c6btv cb2br cuvgf" :class="selected === 0 && 'text-violet-500'" @click="selected = 0;open = false" @focus="open = true" @focusout="open = false">
                                                                                    <span>Saran Fitur</span>
                                                                                    <svg class="text-violet-400 cbm9w coqgc c8bkw" :class="selected !== 0 && 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                                                                        <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                                                                    </svg>
                                                                                </button>
                                                                                <button type="button" tabindex="0" class="flex items-center chfxh csd0k cm3rx c5flv c6btv cb2br cuvgf" :class="selected === 1 && 'text-violet-500'" @click="selected = 1;open = false" @focus="open = true" @focusout="open = false">
                                                                                    <span>Lapor Bug</span>
                                                                                    <svg class="text-violet-400 cbm9w coqgc c8bkw" :class="selected !== 1 && 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                                                                        <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                                                                    </svg>
                                                                                </button>
                                                                                <button type="button" tabindex="0" class="flex items-center chfxh csd0k cm3rx c5flv c6btv cb2br cuvgf" :class="selected === 2 && 'text-violet-500'" @click="selected = 2;open = false" @focus="open = true" @focusout="open = false">
                                                                                    <span>Lainnya</span>
                                                                                    <svg class="text-violet-400 cbm9w coqgc c8bkw" :class="selected !== 2 && 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                                                                        <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                                                                    </svg>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <label class="block text-sm c1k3n cu6vl dark:text-gray-400" for="message">Message</label>
                                                                    <textarea id="message" name="message" class="c071z c6btv c9hxi cwn3v" rows="4" required></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Modal footer -->
                                                        <div class="border-gray-200 cghq3 cr4kg cx3hp cz8qb">
                                                            <div class="flex flex-wrap justify-end ch3kz">
                                                                <button type="button" class="border-gray-200 text-gray-800 cc0oq cghq3 cspbm c0zkc cnf4p" @click="modalOpen = false">Cancel</button>
                                                                <button type="submit" class="bg-gray-900 cdj8c cg0jr ch8z9 cilvw cyn7a cnf4p">Send</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>                                            
                                        </div>
                                        <!-- End -->
                                    </div>
                        @endif

                        <!-- Info button -->
                            <div class="inline-flex cm84d" x-data="{ open: false }">
                                <button class="flex items-center justify-center rounded-full cukve cvdqj cw5z1 c76um cue4z cmwfi" :class="{ 'cvwbh c2vpa': open }" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                                    <span class="cn8jz">Info</span>
                                    <svg class="cp14x ch0mp cbm9w" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 7.5a1 1 0 1 0-2 0v4a1 1 0 1 0 2 0v-4ZM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z"></path>
                                        <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16Zm6-8A6 6 0 1 1 2 8a6 6 0 0 1 12 0Z"></path>
                                    </svg>
                                </button>
                                <div class="bg-white border border-gray-200 cghq3 c2vpa cbx8s cxe43 cb8zv ccwri cqdkw ctd47 c45yg cgky2 cbxoy cvggx ccwg3" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="cxxol cbmha c8uqq c98dn" x-transition:enter-start="opacity-0 cx9xg" x-transition:enter-end="cgcrn csdj3" x-transition:leave="cxxol cbmha c8uqq" x-transition:leave-start="cgcrn" x-transition:leave-end="opacity-0" x-cloak="">
                                    <div class="cmpw7 cgulq cdqku c0ef0 c1yoz c1iho cb2br cif3q">Need help?</div>
                                    <ul>
                                        <li>
                                            <a class="text-sm text-violet-500 flex items-center c5ylh ceetm c1k3n cb2br cwn3v" href="https://drive.google.com/drive/folders/1K7Emajal5D02opyL-yDyOBti3eWMt5oN?usp=sharing" @click="open = false" @focus="open = true" @focusout="open = false">
                                                <svg class="w-3 h-3 text-violet-500 mr-2 cbm9w coqgc" viewBox="0 0 12 12">
                                                    <rect y="3" width="12" height="9" rx="1"></rect>
                                                    <path d="M2 0h8v2H2z"></path>
                                                </svg>
                                                <span>Document</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-sm text-violet-500 flex items-center c5ylh ceetm c1k3n cb2br cwn3v" href="https://wa.me/62895378059606" @click="open = false" @focus="open = true" @focusout="open = false">
                                                <svg class="w-3 h-3 text-violet-500 mr-2 cbm9w coqgc" viewBox="0 0 12 12">
                                                    <path d="M11.854.146a.5.5 0 00-.525-.116l-11 4a.5.5 0 00-.015.934l4.8 1.921 1.921 4.8A.5.5 0 007.5 12h.008a.5.5 0 00.462-.329l4-11a.5.5 0 00-.116-.525z"></path>
                                                </svg>
                                                <span>Contact us</span>
                                            </a>
                                        </li>
                                    </ul>                
                                </div>
                            </div>

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
                                        <span class="text-sm dark:text-gray-100 croon ccuo4 c1ukq c1k3n c941w c8bkw">{{ auth()->user()->name }}</span>
                                        <svg class="w-3 h-3 cmpw7 cdqku cbm9w coqgc cpts2" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                        </svg>
                                    </div>
                                </button>
                                <div class="bg-white border border-gray-200 cghq3 c2vpa cbx8s cxe43 cb8zv ccwri cqdkw ctd47 c45yg cgky2 cbxoy cvggx ccwg3" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="cxxol cbmha c8uqq c98dn" x-transition:enter-start="opacity-0 cx9xg" x-transition:enter-end="cgcrn csdj3" x-transition:leave="cxxol cbmha c8uqq" x-transition:leave-start="cgcrn" x-transition:leave-end="opacity-0" x-cloak="">
                                    <div class="border-gray-200 cghq3 ctv3r c8asz cu6vl cb2br cif3q">
                                        <div class="text-gray-800 dark:text-gray-100 c1k3n">{{ auth()->user()->name }}</div>
                                        <div class="text-gray-500 dark:text-gray-400 c1iho caf78">{{ ucfirst(auth()->user()->role) }}</div>
                                    </div>
                                    <ul>
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
    
    <script>
        // Update sidebar logo based on dark mode
        function updateSidebarLogo() {
            const isDarkMode = localStorage.getItem('dark-mode') === 'true';
            const sidebarLogo = document.getElementById('sidebar-logo');
            
            if (sidebarLogo) {
                const lightLogo = '{{ asset('assets/img/logo/logo.png') }}';
                const darkLogo = '{{ asset('assets/admin/img/logo_darkmode.png') }}';
                sidebarLogo.src = isDarkMode ? darkLogo : lightLogo;
            }
        }

        // Update logo on page load
        document.addEventListener('DOMContentLoaded', updateSidebarLogo);
        
        // Update logo when dark mode changes
        document.addEventListener('darkMode', updateSidebarLogo);
    </script>

<script>console.log("%cImportant!", "color: blue; font-size: x-large");console.log("%cThe page you are viewing is for demo purposes only. CSS and HTML have been minified and class names have been shortened to improve the page load time. Download our templates from https://cruip.com/ 😉", "font-size: large");</script><script>const pagesList = [{"name":"Dashboard","url":"https://preview.cruip.com/mosaic/{{ route('admin.programs') }}","active":true},{"name":"Analytics","url":"https://preview.cruip.com/mosaic/analytics.html","active":false},{"name":"Fintech","url":"https://preview.cruip.com/mosaic/fintech.html","active":false},{"name":"Customers","url":"https://preview.cruip.com/mosaic/customers.html","active":false},{"name":"Orders","url":"https://preview.cruip.com/mosaic/orders.html","active":false},{"name":"Invoices","url":"https://preview.cruip.com/mosaic/invoices.html","active":false},{"name":"Shop","url":"https://preview.cruip.com/mosaic/shop.html","active":false},{"name":"Shop 2","url":"https://preview.cruip.com/mosaic/shop-2.html","active":false},{"name":"Single Product","url":"https://preview.cruip.com/mosaic/product.html","active":false},{"name":"Cart","url":"https://preview.cruip.com/mosaic/cart.html","active":false},{"name":"Cart 2","url":"https://preview.cruip.com/mosaic/cart-2.html","active":false},{"name":"Cart 3","url":"https://preview.cruip.com/mosaic/cart-3.html","active":false},{"name":"Pay","url":"https://preview.cruip.com/mosaic/pay.html","active":false},{"name":"Campaigns","url":"https://preview.cruip.com/mosaic/campaigns.html","active":false},{"name":"Users Tabs","url":"https://preview.cruip.com/mosaic/users-tabs.html","active":false},{"name":"Users Tiles","url":"https://preview.cruip.com/mosaic/users-tiles.html","active":false},{"name":"Profile","url":"https://preview.cruip.com/mosaic/profile.html","active":false},{"name":"Feed","url":"https://preview.cruip.com/mosaic/feed.html","active":false},{"name":"Forum","url":"https://preview.cruip.com/mosaic/forum.html","active":false},{"name":"Forum Post","url":"https://preview.cruip.com/mosaic/forum-post.html","active":false},{"name":"Meetups","url":"https://preview.cruip.com/mosaic/meetups.html","active":false},{"name":"Meetups Post","url":"https://preview.cruip.com/mosaic/meetups-post.html","active":false},{"name":"Cards","url":"https://preview.cruip.com/mosaic/credit-cards.html","active":false},{"name":"Transactions","url":"https://preview.cruip.com/mosaic/transactions.html","active":false},{"name":"Transaction Details","url":"https://preview.cruip.com/mosaic/transaction-details.html","active":false},{"name":"Jobs Listing","url":"https://preview.cruip.com/mosaic/job-listing.html","active":false},{"name":"Jobs Post","url":"https://preview.cruip.com/mosaic/job-post.html","active":false},{"name":"Company Profile","url":"https://preview.cruip.com/mosaic/company-profile.html","active":false},{"name":"Kanban","url":"https://preview.cruip.com/mosaic/tasks-kanban.html","active":false},{"name":"Tasks List","url":"https://preview.cruip.com/mosaic/tasks-list.html","active":false},{"name":"Messages","url":"https://preview.cruip.com/mosaic/messages.html","active":false},{"name":"Inbox","url":"https://preview.cruip.com/mosaic/inbox.html","active":false},{"name":"Calendar","url":"https://preview.cruip.com/mosaic/calendar.html","active":false},{"name":"Applications","url":"https://preview.cruip.com/mosaic/applications.html","active":false},{"name":"My Account","url":"https://preview.cruip.com/mosaic/settings.html","active":false},{"name":"My Notifications","url":"https://preview.cruip.com/mosaic/notifications.html","active":false},{"name":"Connected Apps","url":"https://preview.cruip.com/mosaic/connected-apps.html","active":false},{"name":"Plans","url":"https://preview.cruip.com/mosaic/plans.html","active":false},{"name":"Billing & Invoices","url":"https://preview.cruip.com/mosaic/billing.html","active":false},{"name":"Give Feedback","url":"https://preview.cruip.com/mosaic/feedback.html","active":false},{"name":"Changelog","url":"https://preview.cruip.com/mosaic/changelog.html","active":false},{"name":"Roadmap","url":"https://preview.cruip.com/mosaic/roadmap.html","active":false},{"name":"FAQs","url":"https://preview.cruip.com/mosaic/faqs.html","active":false},{"name":"Empty State","url":"https://preview.cruip.com/mosaic/empty-state.html","active":false},{"name":"Page Not Found","url":"https://preview.cruip.com/mosaic/404.html","active":false},{"name":"Knowledge Base","url":"https://preview.cruip.com/mosaic/knowledge-base.html","active":false},{"name":"Sign in","url":"https://preview.cruip.com/mosaic/signin.html","active":false},{"name":"Sign up","url":"https://preview.cruip.com/mosaic/signup.html","active":false},{"name":"Reset password","url":"https://preview.cruip.com/mosaic/reset-password.html","active":false},{"name":"Onboarding 1","url":"https://preview.cruip.com/mosaic/onboarding-01.html","active":false},{"name":"Onboarding 2","url":"https://preview.cruip.com/mosaic/onboarding-02.html","active":false},{"name":"Onboarding 3","url":"https://preview.cruip.com/mosaic/onboarding-03.html","active":false},{"name":"Onboarding 4","url":"https://preview.cruip.com/mosaic/onboarding-04.html","active":false},{"name":"Button","url":"https://preview.cruip.com/mosaic/component-button.html","active":false},{"name":"Input Form","url":"https://preview.cruip.com/mosaic/component-form.html","active":false},{"name":"Dropdown","url":"https://preview.cruip.com/mosaic/component-dropdown.html","active":false},{"name":"Alert & Banner","url":"https://preview.cruip.com/mosaic/component-alert.html","active":false},{"name":"Modal","url":"https://preview.cruip.com/mosaic/component-modal.html","active":false},{"name":"Pagination","url":"https://preview.cruip.com/mosaic/component-pagination.html","active":false},{"name":"Tabs","url":"https://preview.cruip.com/mosaic/component-tabs.html","active":false},{"name":"Breadcrumb","url":"https://preview.cruip.com/mosaic/component-breadcrumb.html","active":false},{"name":"Badge","url":"https://preview.cruip.com/mosaic/component-badge.html","active":false},{"name":"Avatar","url":"https://preview.cruip.com/mosaic/component-avatar.html","active":false},{"name":"Tooltip","url":"https://preview.cruip.com/mosaic/component-tooltip.html","active":false},{"name":"Accordion","url":"https://preview.cruip.com/mosaic/component-accordion.html","active":false},{"name":"Icons","url":"https://preview.cruip.com/mosaic/component-icons.html","active":false}];if(window != top){window.parent.postMessage(pagesList, "https://cruip.com")};</script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"59cc17d45d734f9ba118c63036ab1b84","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
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
	
        <script>
        // Function to mark all notifications as read
        function markAllAsRead() {
            fetch('{{ route("admin.notifications.readAll") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    console.log('All notifications marked as read');
                }
            })
            .catch(error => console.error('Error:', error));
        }
        </script>
</script> 
</body>
</html>