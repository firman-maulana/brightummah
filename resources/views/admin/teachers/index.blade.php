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
                            <div class="table-items-action hidden">
                                <div class="flex items-center">
                                    <div class="hidden text-sm mr-2 cq84g c3nql caf78"><span class="table-items-count"></span> items selected</div>
                                    <button type="button" @click="$dispatch('open-delete-modal')" class="btn bg-white border-gray-200 cc0oq cghq3 cspbm c2vpa czr3n">Delete</button>
                                </div>
                            </div>

                            <!-- Add customer button -->
                            @if(($teachersCount ?? $teachers->count()) >= 4)
                                <button class="btn bg-gray-900 cpqp6 cv9uq c14v6 cha85 cbnll cqvjc cdj8c cg0jr ch8z9 cat76 cilvw cyn7a c6btv" disabled>Add Teachers</button>
                            @else
                                <a class="btn bg-gray-900 cdj8c cg0jr ch8z9 cilvw cyn7a" href="{{ route('admin.teachers.create') }}">
                                    <svg class="cbm9w cbmv0 coqgc" width="16" height="16" viewBox="0 0 16 16">
                                        <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                                    </svg>
                                    <span class="cyga5">Add Teachers</span>
                                </a>
                            @endif
                            
                        </div>

                    </div>

                    <!-- Table -->
                    <div class="bg-white c2vpa c1hly c5vqk">
                        <header class="cx3hp cz8qb">
                            <h2 class="text-gray-800 dark:text-gray-100 cgulq">All Teachers <span class="cmpw7 cdqku c1k3n">{{ $teachers->count() }}</span></h2>
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
                                                        <input class="table-item crgcy" type="checkbox" value="{{ $teacher->id }}" @click="uncheckParent">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                <div class="flex items-center">
                                                    <div class="mr-2 coqgc czvpl cr0m4 c59cs">
    @if($teacher->photo_url)
        <div style="width:40px;height:40px;border-radius:9999px;overflow:hidden;">
            <img style="width:100%;height:100%;object-fit:cover;border-radius:9999px;display:block;"
                 src="{{ $teacher->photo_url }}"
                 alt="{{ $teacher->name }}">
        </div>
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
                                                <div class="cm84d">
                                                    <div class="inline-flex cqdkw cgky2 cli41" x-data="{ open: false }">
                                                        <button class="rounded-full" :class="open ? 'cyhlg cmr9m text-gray-500 dark:cdqku': 'cdqku cg12x cmpw7 c3e4j'" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                                                            <span class="cn8jz">Menu</span>
                                                            <svg class="cbm9w cue4z cmwfi" viewBox="0 0 32 32">
                                                                <circle cx="16" cy="16" r="2"></circle>
                                                                <circle cx="10" cy="16" r="2"></circle>
                                                                <circle cx="22" cy="16" r="2"></circle>
                                                            </svg>
                                                        </button>
                                                        <div class="bg-white border border-gray-200 cghq3 c2vpa cbx8s cxe43 cb8zv ccwri cqdkw ctd47 cr617 cgky2 cbxoy cvggx ccwg3" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="cxxol cbmha c8uqq c98dn" x-transition:enter-start="opacity-0 cx9xg" x-transition:enter-end="cgcrn csdj3" x-transition:leave="cxxol cbmha c8uqq" x-transition:leave-start="cgcrn" x-transition:leave-end="opacity-0" x-cloak="">
                                                            <ul>
                                                                <li>
                                                                    <a class="text-sm flex c196r cqahh c0zkc c1ukq c1k3n cb2br cwn3v" href="{{ route('admin.teachers.edit', $teacher) }}" @click="open = false" @focus="open = true" @focusout="open = false">Edit</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
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
                        </div>
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

                    <!-- Delete Modal -->
                    <div x-data="{ modalOpen: false }" @open-delete-modal.window="modalOpen = true">
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
                                            <div class="text-gray-800 dark:text-gray-100 cgulq c7x0x">Delete Selected Teachers?</div>
                                        </div>
                                        <!-- Modal content -->
                                        <div class="text-sm ckdp3">
                                            <div class="cweej">
                                                <p>Are you sure you want to delete the selected teacher(s)? This action cannot be undone.</p>
                                            </div>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="flex flex-wrap justify-end ch3kz">
                                            <button class="border-gray-200 text-gray-800 cc0oq cghq3 cspbm c0zkc cnf4p" @click="modalOpen = false">Cancel</button>
                                            <button type="button" class="c8ham cg902 cpcyu cnf4p" @click="deleteSelected()">Yes, Delete it</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                                            
                    </div>

                    <script>
                        function deleteSelected() {
                            const checkboxes = document.querySelectorAll('input.table-item:checked');
                            const ids = Array.from(checkboxes).map(cb => cb.value);
                            
                            if (ids.length === 0) {
                                alert('Please select at least one teacher to delete');
                                return;
                            }

                            // Create form and submit
                            const form = document.createElement('form');
                            form.method = 'POST';
                            form.action = '{{ route("admin.teachers.bulk-destroy") }}';
                            
                            const csrfToken = document.createElement('input');
                            csrfToken.type = 'hidden';
                            csrfToken.name = '_token';
                            csrfToken.value = '{{ csrf_token() }}';
                            form.appendChild(csrfToken);
                            
                            const methodField = document.createElement('input');
                            methodField.type = 'hidden';
                            methodField.name = '_method';
                            methodField.value = 'DELETE';
                            form.appendChild(methodField);
                            
                            ids.forEach(id => {
                                const idField = document.createElement('input');
                                idField.type = 'hidden';
                                idField.name = 'ids[]';
                                idField.value = id;
                                form.appendChild(idField);
                            });
                            
                            document.body.appendChild(form);
                            form.submit();
                        }
                    </script>

                </div>

@endsection