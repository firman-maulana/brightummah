@extends('admin.layouts.sidebar')
@section('content')

 <div class="ch3yp cnbwt cs7xl clu2m c6btv clbq0 cxsfz">

                    <!-- Alert Messages -->
                    @if(session('success'))
                    <div x-show="open" x-data="{ open: true }" role="alert">
                                        <div class="text-sm cf8dr cje53 cb8zv clbq0 cuvgf">
                                            <div class="flex cm3rx ce4zk c6btv">
                                                <div class="flex">
                                                    <svg class="c612e cbm9w cq1qg coqgc chfzq" width="16" height="16" viewBox="0 0 16 16">
                                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM7 11.4L3.6 8 5 6.6l2 2 4-4L12.4 6 7 11.4z"></path>
                                                    </svg>
                                                    <div>{{ session('success') }}</div>
                                                </div>
                                                <button class="ml-3 cmsx4 cq1qg cnyvm" @click="open = false">
                                                    <div class="cn8jz">Close</div>
                                                    <svg class="cbm9w" width="16" height="16" viewBox="0 0 16 16">
                                                        <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                    @endif

                    @if(session('error'))
                    <div class="cq84g cbc6d c6btv" x-data="{ open: true }" x-show="open">
                        <div class="bg-red-100 border border-red-200 text-red-600 px-4 py-3 rounded relative" role="alert">
                            <span class="block sm:inline">{{ session('error') }}</span>
                            <button @click="open = false" class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                <svg class="fill-current h-6 w-6 text-red-600" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    @endif

                    <!-- Page header -->
                    <div class="c2g1r cwnq4 cnlq0 cgd7w">

                        <!-- Left: Title -->
                        <div class="c2rn6 cdiog">
                            <h1 class="text-gray-800 dark:text-gray-100 font-bold c459m cbtcb">Users</h1>
                        </div>

                        <!-- Right: Actions -->
                        <div class="cm3b7 c51uw ccww4 csdex cbe1i c4sak">

                            <!-- Delete button -->
                            <div class="table-items-action hidden" x-data="{ selectedCount: 0, selectedIds: [] }">
                                <div class="flex items-center">
                                    <div class="hidden text-sm mr-2 cq84g c3nql caf78"><span class="table-items-count"></span> items selected</div>
                                    <button 
                                        class="btn bg-white border-gray-200 cc0oq cghq3 cspbm c2vpa czr3n"
                                        @click="$dispatch('open-bulk-delete-modal', { count: document.querySelectorAll('input.table-item:checked:not([disabled])').length })"
                                    >Delete</button>
                                </div>
                            </div>

                            <!-- Dropdown -->
                            <div class="cm84d" x-data="{ open: false, selected: {{ request('filter', 2) }} }">
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
                                        <a href="{{ route('admin.users', ['filter' => 0]) }}" tabindex="0" class="flex items-center c35tg csd0k c5flv c6btv cb2br cwn3v" :class="selected === 0 && 'text-violet-500'" @click="selected = 0;open = false" @focus="open = true" @focusout="open = false">
                                            <svg class="mr-2 text-violet-500 cbm9w coqgc" :class="selected !== 0 && 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                                <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                            </svg>
                                            <span>Today</span>
                                        </a>
                                        <a href="{{ route('admin.users', ['filter' => 1]) }}" tabindex="0" class="flex items-center c35tg csd0k c5flv c6btv cb2br cwn3v" :class="selected === 1 && 'text-violet-500'" @click="selected = 1;open = false" @focus="open = true" @focusout="open = false">
                                            <svg class="mr-2 text-violet-500 cbm9w coqgc" :class="selected !== 1 && 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                                <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                            </svg>
                                            <span>Last 7 Days</span>
                                        </a>
                                        <a href="{{ route('admin.users', ['filter' => 2]) }}" tabindex="0" class="flex items-center c35tg csd0k c5flv c6btv cb2br cwn3v" :class="selected === 2 && 'text-violet-500'" @click="selected = 2;open = false" @focus="open = true" @focusout="open = false">
                                            <svg class="mr-2 text-violet-500 cbm9w coqgc" :class="selected !== 2 && 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                                <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                            </svg>
                                            <span>Last Month</span>
                                        </a>
                                        <a href="{{ route('admin.users', ['filter' => 3]) }}" tabindex="0" class="flex items-center c35tg csd0k c5flv c6btv cb2br cwn3v" :class="selected === 3 && 'text-violet-500'" @click="selected = 3;open = false" @focus="open = true" @focusout="open = false">
                                            <svg class="mr-2 text-violet-500 cbm9w coqgc" :class="selected !== 3 && 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                                <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                            </svg>
                                            <span>Last 12 Months</span>
                                        </a>
                                        <a href="{{ route('admin.users', ['filter' => 4]) }}" tabindex="0" class="flex items-center c35tg csd0k c5flv c6btv cb2br cwn3v" :class="selected === 4 && 'text-violet-500'" @click="selected = 4;open = false" @focus="open = true" @focusout="open = false">
                                            <svg class="mr-2 text-violet-500 cbm9w coqgc" :class="selected !== 4 && 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                                <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                            </svg>
                                            <span>All Time</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Table -->
                    <div class="bg-white c2vpa c1hly c5vqk">
                        <header class="cx3hp cz8qb">
                            <h2 class="text-gray-800 dark:text-gray-100 cgulq">All Users <span class="cmpw7 cdqku c1k3n">{{ $users->total() }}</span></h2>
                        </header>
                        <div x-data="handleSelect">

                            <!-- Table -->
                            <div class="cocyr">
                                @if($users->count())
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
                                                <div class="cgulq c2hoo">Registered</div>
                                            </th>
                                            <th class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cgulq c2hoo">Status</div>
                                            </th>
                                            <th class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <span class="cn8jz">Menu</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <!-- Table body -->
                                    <tbody class="text-sm ce8qq ca8s8 co0ms">
                                        @foreach($users as $index => $user)
                                        <!-- Row -->
                                        <tr>
                                            <td class="cq84g cyjcc cgn91 cn8zk c9hxi c72q5">
                                                <div class="flex items-center">
                                                    <label class="inline-flex">
                                                        <span class="cn8jz">Select</span>
                                                        <input 
                                                            class="table-item crgcy" 
                                                            type="checkbox" 
                                                            value="{{ $user->id }}"
                                                            @click="uncheckParent"
                                                            {{ $user->role === 'admin' ? 'disabled' : '' }}
                                                        >
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="flex items-center">
                                                    <div class="text-gray-800 dark:text-gray-100 c1k3n">{{ $user->name }}</div>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c2hoo">{{ $user->email }}</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c2hoo">{{ $user->created_at->format('d M Y') }}</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cdjj4 c1k3n c2hoo">Active</div>
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
                                        @endforeach
                                    </tbody>
                                </table>
                                @else
                                <div class="text-center py-5 text-muted">
                                    <svg class="bi bi-people fs-3 mx-auto" width="48" height="48" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                                    </svg>
                                    <p class="mt-2 mb-0">No users found</p>
                                </div>
                                @endif

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
                                    // Only count checkboxes that are not disabled
                                    checkboxes = document.querySelectorAll('input.table-item:checked:not([disabled])');
                                    document.querySelector('.table-items-count').innerHTML = checkboxes.length;
                                    if (checkboxes.length > 0) {
                                        countEl.classList.remove('hidden');
                                    } else {
                                        countEl.classList.add('hidden');
                                    }
                                },
                                toggleAll() {
                                    this.selectall = !this.selectall;
                                    // Only toggle checkboxes that are not disabled
                                    checkboxes = document.querySelectorAll('input.table-item:not([disabled])');
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
                                    @if ($users->onFirstPage())
                                    <li class="ml-3 c77jh">
                                        <span class="btn bg-white border-gray-200 cghq3 co1wq c2vpa ckbo4">&lt;- Previous</span>
                                    </li>
                                    @else
                                    <li class="ml-3 c77jh">
                                        <a class="btn bg-white border-gray-200 text-gray-800 cc0oq cghq3 cspbm c0zkc c2vpa" href="{{ $users->appends(['filter' => request('filter')])->previousPageUrl() }}">&lt;- Previous</a>
                                    </li>
                                    @endif
                                    
                                    @if ($users->hasMorePages())
                                    <li class="ml-3 c77jh">
                                        <a class="btn bg-white border-gray-200 text-gray-800 cc0oq cghq3 cspbm c0zkc c2vpa" href="{{ $users->appends(['filter' => request('filter')])->nextPageUrl() }}">Next -&gt;</a>
                                    </li>
                                    @else
                                    <li class="ml-3 c77jh">
                                        <span class="btn bg-white border-gray-200 cghq3 co1wq c2vpa ckbo4">Next -&gt;</span>
                                    </li>
                                    @endif
                                </ul>
                            </nav>
                            <div class="text-sm text-gray-500 c2bzj cydwr">
                                Showing <span class="c0zkc c1ukq c1k3n">{{ $users->firstItem() ?? 0 }}</span> to <span class="c0zkc c1ukq c1k3n">{{ $users->lastItem() ?? 0 }}</span> of <span class="c0zkc c1ukq c1k3n">{{ $users->total() }}</span> results
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Delete Modal -->
                <div x-data="{ modalOpen: false, deleteUserId: null, deleteUserName: '' }" @open-delete-modal.window="modalOpen = true; deleteUserId = $event.detail.id; deleteUserName = $event.detail.name">
                    <!-- Modal backdrop -->
                    <div class="bg-gray-900 c29tc c2iqv cini7 cjxg0 cys4p" x-show="modalOpen" x-transition:enter="cxxol cbmha c8uqq" x-transition:enter-start="opacity-0" x-transition:enter-end="cgcrn" x-transition:leave="cxxol cbmha cf39k" x-transition:leave-start="cgcrn" x-transition:leave-end="opacity-0" aria-hidden="true" x-cloak=""></div>
                    <!-- Modal dialog -->
                    <div id="danger-modal" class="flex items-center justify-center cxe43 cnbwt cini7 cjxg0 cys4p codu7 clbq0" role="dialog" aria-modal="true" x-show="modalOpen" x-transition:enter="cxxol cz9ag c8uqq" x-transition:enter-start="opacity-0 cu867" x-transition:enter-end="cgcrn csdj3" x-transition:leave="cxxol cz9ag c8uqq" x-transition:leave-start="cgcrn csdj3" x-transition:leave-end="opacity-0 cu867" x-cloak="">
                        <div class="bg-white c2vpa co669 caufm cb8zv ccwri crwo8 c6btv" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                            <div class="flex cm4ey csusu">
                                <!-- Icon -->
                                <div class="rounded-full flex items-center justify-center dark:bg-gray-700 cyhlg coqgc cr0m4 c59cs">
                                    <svg class="cbm9w czr3n coqgc" width="16" height="16" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                    </svg>
                                </div>
                                <!-- Content -->
                                <div>
                                    <!-- Modal header -->
                                    <div class="c6f83">
                                        <div class="text-gray-800 dark:text-gray-100 cgulq c7x0x">Delete User?</div>
                                    </div>
                                    <!-- Modal content -->
                                    <div class="text-sm ckdp3">
                                        <div class="cweej">
                                            <p>Are you sure you want to delete user <strong x-text="deleteUserName"></strong>? This action cannot be undone.</p>
                                        </div>
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="flex flex-wrap justify-end ch3kz">
                                        <button class="border-gray-200 text-gray-800 cc0oq cghq3 cspbm c0zkc cnf4p" @click="modalOpen = false">Cancel</button>
                                        <form :action="'/admin/users/' + deleteUserId" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="c8ham cg902 cpcyu cnf4p">Yes, Delete it</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                            
                </div>

                <!-- Bulk Delete Modal -->
                <div x-data="{ modalOpen: false, selectedCount: 0 }" @open-bulk-delete-modal.window="modalOpen = true; selectedCount = $event.detail.count">
                    <!-- Modal backdrop -->
                    <div class="bg-gray-900 c29tc c2iqv cini7 cjxg0 cys4p" x-show="modalOpen" x-transition:enter="cxxol cbmha c8uqq" x-transition:enter-start="opacity-0" x-transition:enter-end="cgcrn" x-transition:leave="cxxol cbmha cf39k" x-transition:leave-start="cgcrn" x-transition:leave-end="opacity-0" aria-hidden="true" x-cloak=""></div>
                    <!-- Modal dialog -->
                    <div id="bulk-danger-modal" class="flex items-center justify-center cxe43 cnbwt cini7 cjxg0 cys4p codu7 clbq0" role="dialog" aria-modal="true" x-show="modalOpen" x-transition:enter="cxxol cz9ag c8uqq" x-transition:enter-start="opacity-0 cu867" x-transition:enter-end="cgcrn csdj3" x-transition:leave="cxxol cz9ag c8uqq" x-transition:leave-start="cgcrn csdj3" x-transition:leave-end="opacity-0 cu867" x-cloak="">
                        <div class="bg-white c2vpa co669 caufm cb8zv ccwri crwo8 c6btv" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                            <div class="flex cm4ey csusu">
                                <!-- Icon -->
                                <div class="rounded-full flex items-center justify-center dark:bg-gray-700 cyhlg coqgc cr0m4 c59cs">
                                    <svg class="cbm9w czr3n coqgc" width="16" height="16" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                    </svg>
                                </div>
                                <!-- Content -->
                                <div>
                                    <!-- Modal header -->
                                    <div class="c6f83">
                                        <div class="text-gray-800 dark:text-gray-100 cgulq c7x0x">Delete Users?</div>
                                    </div>
                                    <!-- Modal content -->
                                    <div class="text-sm ckdp3">
                                        <div class="cweej">
                                            <p>Are you sure you want to delete <strong x-text="selectedCount"></strong> selected users? This action cannot be undone.</p>
                                        </div>
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="flex flex-wrap justify-end ch3kz">
                                        <button class="border-gray-200 text-gray-800 cc0oq cghq3 cspbm c0zkc cnf4p" @click="modalOpen = false">Cancel</button>
                                        <form id="bulk-delete-form" action="{{ route('admin.users.bulk-destroy') }}" method="POST" style="display: inline;" @submit.prevent="submitBulkDelete">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="c8ham cg902 cpcyu cnf4p">Yes, Delete them</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    function submitBulkDelete(e) {
                        const form = document.getElementById('bulk-delete-form');
                        // Remove any previously appended hidden inputs
                        form.querySelectorAll('input[name="user_ids[]"]').forEach(el => el.remove());
                        // Collect all checked (and not disabled) checkbox values
                        document.querySelectorAll('input.table-item:checked:not([disabled])').forEach(function(cb) {
                            const input = document.createElement('input');
                            input.type = 'hidden';
                            input.name = 'user_ids[]';
                            input.value = cb.value;
                            form.appendChild(input);
                        });
                        form.submit();
                    }
                </script>

@endsection