@extends('admin.layouts.sidebar')
@section('content')

<div class="ch3yp cnbwt cs7xl clu2m c6btv clbq0 cxsfz">

                    <!-- Page header -->
                    <div class="c2g1r cwnq4 cnlq0 cgd7w">

                        <!-- Left: Title -->
                        <div class="c2rn6 cdiog">
                            <h1 class="text-gray-800 dark:text-gray-100 font-bold c459m cbtcb">Teachers</h1>
                        </div>

                        <!-- Right: Actions -->
                        <div class="cm3b7 c51uw ccww4 csdex cbe1i c4sak">

                            <!-- Delete button -->
                            <!-- Add customer button -->
                            <a class="btn bg-gray-900 cdj8c cg0jr ch8z9 cilvw cyn7a {{ ($teachersCount ?? $teachers->count()) >= 4 ? 'opacity-50 pointer-events-none' : '' }}" href="{{ route('admin.teachers.create') }}" {{ ($teachersCount ?? $teachers->count()) >= 4 ? 'aria-disabled=true' : '' }}>
                                <svg class="cbm9w cbmv0 coqgc" width="16" height="16" viewBox="0 0 16 16">
                                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                                </svg>
                                <span class="cyga5">Add Teachers</span>
                            </a>
                            
                        </div>

                    </div>

                    <!-- Table -->
                    <div class="bg-white c2vpa c1hly c5vqk">
                        <header class="cx3hp cz8qb">
                            <h2 class="text-gray-800 dark:text-gray-100 cgulq">All Teachers <span class="cmpw7 cdqku c1k3n">{{ $teachers->count() }}</span></h2>
                        </header>
                        <form method="POST" action="{{ route('admin.teachers.bulk-destroy') }}" x-data="handleSelect">
                            @csrf
                            @method('DELETE')

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
                                                <div class="cgulq c2hoo">Categories</div>
                                            </th>
                                            <th class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="cgulq">Institusi</div>
                                            </th>
                                            <th class="cq84g cyjcc cgn91 cn8zk c9hxi c72q5">
                                                <span class="cn8jz">Menu</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <!-- Table body -->
                                    <tbody class="text-sm ce8qq ca8s8 co0ms">
                                        @forelse($teachers as $teacher)
                                        <tr>
                                            <td class="cq84g cyjcc cgn91 cn8zk c9hxi c72q5">
                                                <div class="flex items-center">
                                                    <label class="inline-flex">
                                                        <span class="cn8jz">Select</span>
                                                        <input class="table-item crgcy" type="checkbox" name="ids[]" value="{{ $teacher->id }}" @click="uncheckParent">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="flex items-center">
                                                    <div class="mr-2 coqgc czvpl cr0m4 c59cs">
                                                        @if($teacher->photo_url)
                                                            <img class="rounded-full" src="{{ $teacher->photo_url }}" width="40" height="40" alt="{{ $teacher->name }}">
                                                        @else
                                                            <img class="rounded-full" src="{{ asset('assets/admin/img/user-avatar-32.png') }}" width="40" height="40" alt="{{ $teacher->name }}">
                                                        @endif
                                                    </div>
                                                    <div class="text-gray-800 dark:text-gray-100 c1k3n">{{ $teacher->name }}</div>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c2hoo">{{ $teacher->categories }}</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="c2hoo">{{ $teacher->institusi }}</div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 cn8zk c9hxi c72q5">
                                                <a class="btn bg-white border-gray-200 cc0oq cghq3 cspbm c2vpa" href="{{ route('admin.teachers.edit', $teacher) }}" aria-label="Edit">
                                                    <svg class="cmpw7 cdqku cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                        <path d="M11.7.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM4.6 14H2v-2.6l6-6L10.6 8l-6 6zM12 6.6L9.4 4 11 2.4 13.6 5 12 6.6z"></path>
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="5" class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="text-center cydwr">No data</div>
                                            </td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>

                            </div>
                            <div class="table-items-action hidden mt-4">
                                <div class="flex items-center">
                                    <div class="hidden text-sm mr-2 cq84g c3nql caf78"><span class="table-items-count"></span> items selected</div>
                                    <button type="submit" class="btn bg-white border-gray-200 cc0oq cghq3 cspbm c2vpa czr3n" onclick="return confirm('Hapus teacher terpilih?');">Delete</button>
                                </div>
                            </div>

                        </form>
                    </div>

                    <script>
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

                </div>

@endsection