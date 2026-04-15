@php
    $title = 'Bright Ummah Academy - Program Detail';
@endphp
@extends('admin.layouts.sidebar')
@section('content')

<div class="cnbwt cs7xl c6btv clbq0 cxsfz">

                    <!-- Page content -->
                    <div class="flex c7k8z c2eqw cxsy8 cbxj7 cetff clu2m">

                        <!-- Content -->
                        <div>
                            <div class="cai6b">
                                <a class="bg-white border-gray-200 text-gray-800 cc0oq cghq3 cspbm c0zkc c2vpa cnf4p cb2br" href="{{ route('admin.programs') }}">
                                    <svg class="mr-2 cmpw7 cdqku cbm9w" width="7" height="12" viewBox="0 0 7 12">
                                        <path d="M5.4.6 6.8 2l-4 4 4 4-1.4 1.4L0 6z"></path>
                                    </svg>
                                    <span>Back To Program</span>
                                </a>
                            </div>
                            <div class="text-sm text-violet-500 cgulq c0ef0 c6f83">{{ $program->category }}</div>
                            <header class="cdiog">
                                <!-- Title -->
                                <h1 class="text-gray-800 dark:text-gray-100 font-bold c459m cbtcb c6f83">{{ $program->name }}</h1>
                                <p>{{ $program->tujuan_program }}</p>
                            </header>

                            <!-- Meta -->
                            <div class="c2g1r cwnq4 cld0c cjav5 cnlq0 cai6b">
                                <!-- Author -->
                                <div class="flex items-center ccduf">
                                </div>
                                <!-- Right side -->
                                <div class="flex flex-wrap items-center c51uw ch3kz">
                                    <!-- Tags -->
                                    <div class="inline-flex items-center border border-gray-200 dark:text-gray-400 rounded-full cghq3 c1ukq cydwr c1k3n ch4gv c1iho cwn3v">
                                        <svg class="h-3 mr-2 ca2tk cyq9w cuv1l" viewBox="0 0 16 12">
                                            <path d="m16 2-4 2.4V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7.6l4 2.4V2ZM2 10V2h8v8H2Z"></path>
                                        </svg>
                                        <span>{{ $program->mode }}</span>
                                    </div>
                                    <div class="inline-flex rounded-full c1lu4 c19il cydwr c1k3n c0ef0 ch4gv c1iho cwn3v">{{ $program->level }}</div>
                                </div>
                            </div>

                            <!-- Image -->
                            <figure class="cai6b">
                                @if($program->image)
                                    <img class="rounded-sm c6btv" src="{{ $program->image }}" width="640" height="360" alt="{{ $program->name }}">
                                @else
                                    <img class="rounded-sm c6btv" src="{{ asset('assets/admin/img/meetup-image.jpg') }}" width="640" height="360" alt="{{ $program->name }}">
                                @endif
                            </figure>

                            <!-- Post content -->
                            <div>
                                <h2 class="text-gray-800 dark:text-gray-100 font-bold ce5fk clctu c6f83">Program Details</h2>
                                <p class="cai6b">{{ $program->manfaat_program }}</p>
                                <p class="cai6b">{{ $program->fokus_pembelajaran }}</p>
                            </div>

                            <hr class="cghq3 cbv37 cr4kg cf7n6">

                            <div>
                                <h2 class="text-gray-800 dark:text-gray-100 font-bold ce5fk clctu c6f83">Other Programs</h2>
                                <div class="ccr53 cvsuf cifdz cf7n6">
                                    @if($otherProgram)
                                    <!-- Related item -->
                                    <article class="flex bg-white c2vpa cxe43 c1hly c5vqk">
                                        <!-- Image -->
                                        <a class="block ck67t ccnsg cm84d coqgc ckarq cd1i2" href="{{ route('admin.programs.show', $otherProgram) }}">
                                            @if($otherProgram->image)
                                                <img class="ccrfs cfwu1 cqdkw cav8x c6btv" src="{{ $otherProgram->image }}" width="220" height="236" alt="{{ $otherProgram->name }}">
                                            @else
                                                <img class="ccrfs cfwu1 cqdkw cav8x c6btv" src="{{ asset('assets/admin/img/meetups-thumb-01.jpg') }}" width="220" height="236" alt="{{ $otherProgram->name }}">
                                            @endif
                                        </a>
                                        <!-- Content -->
                                        <div class="flex cetff cbw8w csusu">
                                            <div class="cbw8w">
                                                <div class="text-sm text-violet-500 cgulq c0ef0 c6f83">{{ $otherProgram->category }}</div>
                                                <a class="inline-flex c6f83" href="{{ route('admin.programs.show', $otherProgram) }}">
                                                    <h3 class="font-bold text-gray-800 dark:text-gray-100 c7x0x">{{ $otherProgram->name }}</h3>
                                                </a>
                                                <div class="text-sm">{{ Str::limit($otherProgram->tujuan_program, 100) }}</div>
                                            </div>
                                            <!-- Footer -->
                                            <div class="flex items-center cm3rx c7gr8">
                                                <!-- Tag -->
                                                <div class="inline-flex items-center border border-gray-200 dark:text-gray-400 rounded-full cghq3 c1ukq cydwr c1k3n ch4gv c1iho cwn3v">
                                                    <svg class="h-3 mr-2 ca2tk cyq9w cuv1l" viewBox="0 0 16 12">
                                                        <path d="m16 2-4 2.4V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7.6l4 2.4V2ZM2 10V2h8v8H2Z"></path>
                                                    </svg>
                                                    <span>{{ $otherProgram->mode }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    @else
                                    <p class="text-sm text-gray-500">No other programs available</p>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar -->
                        <div class="cr78y">

                            <!-- 1st block -->
                            <div class="bg-white c2vpa c1hly c5vqk cl6wk ch0sq csusu">
                                <div class="cydwr cai6b">
                                    <div class="inline-flex cxg65">
                                        <img class="rounded-full c3nk1 crzrx" src="{{ asset('assets/admin/img/user-avatar-32.png') }}" width="64" height="64" alt="Author">
                                    </div>
                                    <div class="font-bold text-gray-800 dark:text-gray-100 c7x0x cu6vl">{{ $program->user ? $program->user->name : 'Admin' }}</div>
                                    <div class="text-sm text-gray-500 dark:text-gray-400 caf78">{{ $program->user ? ucfirst($program->user->role) : 'Admin' }}</div>
                                </div>
                                <div class="cweej">
                                    <a href="{{ route('admin.programs.edit', $program) }}" class="btn bg-gray-900 cdj8c cg0jr ch8z9 cilvw cyn7a c6btv">
                                        <svg class="cmpw7 cdqku cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                <path d="M11.7.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM4.6 14H2v-2.6l6-6L10.6 8l-6 6zM12 6.6L9.4 4 11 2.4 13.6 5 12 6.6z"></path>
                                            </svg>

                                        <span class="cpts2">Edit</span>
                                    </a>
                                    <button @click="$dispatch('open-delete-modal', { id: {{ $program->id }}, name: '{{ $program->name }}' })" class="btn border-gray-200 text-gray-800 cc0oq cghq3 cspbm c0zkc c6btv">
                                        <svg class="cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
    <path fill="red"
          d="M5 7h2v6H5V7zm4 0h2v6H9V7zm3-6v2h4v2h-1v10c0 .6-.4 1-1 1H2c-.6 0-1-.4-1-1V5H0V3h4V1c0-.6.4-1 1-1h6c.6 0 1 .4 1 1zM6 2v1h4V2H6zm7 3H3v9h10V5z"/>
</svg>

                                        <span class="c8bkw">Delete</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- Delete Modal -->
                <div x-data="{ modalOpen: false, deleteProgramId: null, deleteProgramName: '' }" @open-delete-modal.window="modalOpen = true; deleteProgramId = $event.detail.id; deleteProgramName = $event.detail.name">
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
                                        <div class="text-gray-800 dark:text-gray-100 cgulq c7x0x">Delete Program?</div>
                                    </div>
                                    <!-- Modal content -->
                                    <div class="text-sm ckdp3">
                                        <div class="cweej">
                                            <p>Are you sure you want to delete program <strong x-text="deleteProgramName"></strong>? This action cannot be undone.</p>
                                        </div>
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="flex flex-wrap justify-end ch3kz">
                                        <button class="border-gray-200 text-gray-800 cc0oq cghq3 cspbm c0zkc cnf4p" @click="modalOpen = false">Cancel</button>
                                        <form :action="'/admin/programs/' + deleteProgramId" method="POST" style="display: inline;">
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

@endsection