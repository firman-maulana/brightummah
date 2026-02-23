@php
    $title = 'Bright Ummah Academy - Testimonials';
@endphp
@extends('admin.layouts.sidebar')

@section('content')

<div class="ch3yp cnbwt cs7xl clu2m c6btv clbq0 cxsfz">

    <!-- Page header -->
    <div class="cgd7w">
        <h1 class="text-gray-800 dark:text-gray-100 font-bold c459m cbtcb">Testimonials</h1>
    </div>

    <div>

        <!-- Components -->
        <div class="cvsuf cvxzw">
            <!-- Table Row with Accordion -->
            <div>
                <h2 class="text-gray-800 dark:text-gray-100 font-bold cbtcb cai6b">Posted Testimonials</h2>
                <!-- Start -->
                <div class="border border-gray-200 cghq3 cb8zv">
                    <div class="cocyr">
                        <table class="ce8qq c0zkc ca8s8 cn9pt co0ms c6btv">
                            <!-- Table body -->
                            <tbody class="text-sm" x-data="{ open: null }">
                                @forelse($postedTestimonials as $testimonial)
                                <tr>
                                    <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                        <div class="flex items-center text-gray-800">
                                            <div class="flex items-center justify-center dark:bg-gray-700 mr-2 cyhlg coqgc czvpl cr0m4 c59cs">
                                                <img class="cpts2" src="{{ $testimonial->photo ? asset('storage/' . $testimonial->photo) : asset('assets/admin/img/user-avatar-32.png') }}" width="40" height="40" alt="User">
                                            </div>
                                            <div class="text-gray-800 dark:text-gray-100 c1k3n">{{ ucwords(strtolower($testimonial->name)) }}</div>
                                        </div>
                                    </td>
                                    <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                        <div class="c2hoo">{{ ucwords(strtolower($testimonial->institute)) }}</div>
                                    </td>
                                    <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                        <div class="c2hoo">{{ ucwords(strtolower($testimonial->country)) }}</div>
                                    </td>
                                    <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                        <div class="c2hoo">{{ optional($testimonial->date)->format('Y-m-d') }}</div>
                                    </td>
                                    <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                        <div class="inline-flex rounded-full cfts0 c5px7 cydwr c1k3n ch4gv cdw1w">Posted</div>
                                    </td>
                                    <td class="cq84g cyjcc cgn91 cn8zk c9hxi c72q5">
                                        <div class="flex items-center">
                                            <button class="c3e4j cg12x cmpw7 cdqku c98dn" :class="{ 'cbjxm': open === {{ $testimonial->id }} }" @click.prevent="open = (open === {{ $testimonial->id }} ? null : {{ $testimonial->id }})" :aria-expanded="open === {{ $testimonial->id }}" aria-controls="description-{{ $testimonial->id }}">
                                                <span class="cn8jz">Menu</span>
                                                <svg class="cbm9w cue4z cmwfi" viewBox="0 0 32 32">
                                                    <path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <!--
                                                Example of content revealing when clicking the button on the right side:
                                                Note that you must set a "colspan" attribute on the <td> element,
                                                and it should match the number of columns in your table
                                                -->
                                <tr id="description-{{ $testimonial->id }}" role="region" x-show="open === {{ $testimonial->id }}" x-cloak="">
                                    <td colspan="10" class="cyjcc cgn91 c9hxi c72q5">
                                        <div class="dark:text-gray-400 coulr cgk1f c1f2y c9j8s">

                                            <div class="flex items-center">
                                                <svg class="mr-2 cmpw7 cdqku cbm9w coqgc" width="16" height="16">
                                                    <path d="M1 16h3c.3 0 .5-.1.7-.3l11-11c.4-.4.4-1 0-1.4l-3-3c-.4-.4-1-.4-1.4 0l-11 11c-.2.2-.3.4-.3.7v3c0 .6.4 1 1 1zm1-3.6l10-10L13.6 4l-10 10H2v-1.6z"></path>
                                                </svg>
                                                <div class="caf78">{{ $testimonial->message }}</div>
                                            </div>

                                            <div class="mt-3 flex flex-wrap items-center cnnms" style="padding: 8px;">
                                                <div class="ctq43">
                                                    <a href="{{ route('admin.testimonials.approve', $testimonial) }}" class="btn bg-white border-gray-200 text-gray-800 cc0oq cghq3 cspbm c0zkc c2vpa">
                                                        <svg class="cmpw7 cdqku cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                            <path d="M11.7.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-.4 1 0-1.4l-4-4zM4.6 14H2v-2.6l6-6L9.4 4l-6 6zM12 6.6L9.4 4 11 2.4 13.6 5 12 6.6z"></path>
                                                        </svg>
                                                        <span class="c8bkw">Edit</span>
                                                    </a>
                                                </div>

                                                <div class="ctq43">
                                                    <button type="button" class="btn bg-white border-gray-200 cc0oq cghq3 cspbm c2vpa czr3n" @click="$dispatch('open-delete-modal', { id: {{ $testimonial->id }}, name: '{{ addslashes($testimonial->name) }}' })">
                                                        <svg class="cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                            <path d="M5 7h2v6H5V7zm4 0h2v6H9V7zm3-6v2h4v2h-1v10c0 .6-.4 1-1 1H2c-.6 0-1-.4-1-1V5H0V3h4V1c0-.6.4-1 1-1h6c.6 0 1 .4 1 1zM6 2v1h4V2H6zm7 3H3v9h10V5z"></path>
                                                        </svg>
                                                        <span class="c8bkw">Delete</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="10" class="cyjcc cgn91 c9hxi c72q5">
                                        <div class="text-center text-gray-500 dark:text-gray-400 py-6">Belum ada data</div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- End -->
            </div>

            <!-- Rich Table Row with Accordion -->
            <div>
                <h2 class="text-gray-800 dark:text-gray-100 font-bold cbtcb cai6b">Latest Testimonials</h2>

                <!-- Start -->
                <div class="border border-gray-200 cghq3 cb8zv">
                    <div class="cocyr">
                        <table class="ce8qq c0zkc ca8s8 cn9pt co0ms c6btv">
                            <!-- Table body -->
                            <tbody class="text-sm" x-data="{ open: null }">
                                @forelse($latestTestimonials as $testimonial)
                                <tr>
                                    <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                        <div class="flex items-center text-gray-800">
                                            <div class="text-gray-800 dark:text-gray-100 c1k3n">{{ ucwords(strtolower($testimonial->name)) }}</div>
                                        </div>
                                    </td>

                                    <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                        <div class="c2hoo">{{ ucwords(strtolower($testimonial->institute)) }}</div>
                                    </td>
                                    <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                        <div class="c2hoo">{{ ucwords(strtolower($testimonial->country)) }}</div>
                                    </td>
                                    <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                        <div class="c2hoo">{{ optional($testimonial->created_at)->format('Y-m-d') }}</div>
                                    </td>
                                    <td class="cq84g cyjcc cgn91 cn8zk c9hxi c72q5">
                                        <div class="flex items-center">
                                            <button class="c3e4j cg12x cmpw7 cdqku c98dn" :class="{ 'cbjxm': open === {{ $testimonial->id }} }" @click.prevent="open = (open === {{ $testimonial->id }} ? null : {{ $testimonial->id }})" :aria-expanded="open === {{ $testimonial->id }}" aria-controls="description-latest-{{ $testimonial->id }}">
                                                <span class="cn8jz">Menu</span>
                                                <svg class="cbm9w cue4z cmwfi" viewBox="0 0 32 32">
                                                    <path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <tr id="description-latest-{{ $testimonial->id }}" role="region" x-show="open === {{ $testimonial->id }}" x-cloak="">
                                    <td colspan="10" class="cyjcc cgn91 c9hxi c72q5">
                                        <div class="dark:text-gray-400 coulr cgk1f c1f2y c9j8s">
                                            <div class="text-sm cxg65">
                                                <div>{{ $testimonial->message }}</div>
                                            </div>
                                            <a href="{{ route('admin.testimonials.approve', $testimonial) }}" class="bg-gray-900 cdj8c cg0jr ch8z9 cilvw cyn7a cnf4p">Approve</a>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="10" class="cyjcc cgn91 c9hxi c72q5">
                                        <div class="text-center text-gray-500 dark:text-gray-400 py-6">Belum ada data</div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>

                    </div>
                </div>
                <!-- End -->
            </div>

        </div>

    </div>

    <!-- Delete Modal -->
    <div x-data="{ modalOpen: false, deleteTestimonialId: null, deleteTestimonialName: '' }" @open-delete-modal.window="modalOpen = true; deleteTestimonialId = $event.detail.id; deleteTestimonialName = $event.detail.name">
        <!-- Modal backdrop -->
        <div class="bg-gray-900 c29tc c2iqv cini7 cjxg0 cys4p" x-show="modalOpen" x-transition:enter="cxxol cbmha c8uqq" x-transition:enter-start="opacity-0" x-transition:enter-end="cgcrn" x-transition:leave="cxxol cbmha cf39k" x-transition:leave-start="cgcrn" x-transition:leave-end="opacity-0" aria-hidden="true" x-cloak></div>
        <!-- Modal dialog -->
        <div id="danger-modal" class="flex items-center justify-center cxe43 cnbwt cini7 cjxg0 cys4p codu7 clbq0" role="dialog" aria-modal="true" x-show="modalOpen" x-transition:enter="cxxol cz9ag c8uqq" x-transition:enter-start="opacity-0 cu867" x-transition:enter-end="cgcrn csdj3" x-transition:leave="cxxol cz9ag c8uqq" x-transition:leave-start="cgcrn csdj3" x-transition:leave-end="opacity-0 cu867" x-cloak>
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
                            <div class="text-gray-800 dark:text-gray-100 cgulq c7x0x">Delete Testimonial?</div>
                        </div>
                        <!-- Modal content -->
                        <div class="text-sm ckdp3">
                            <div class="cweej">
                                <p>Are you sure you want to delete testimonial <strong x-text="deleteTestimonialName"></strong>? This action cannot be undone.</p>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex flex-wrap justify-end ch3kz">
                            <button type="button" class="border-gray-200 text-gray-800 cc0oq cghq3 cspbm c0zkc cnf4p" @click="modalOpen = false">Cancel</button>
                            <form :action="'/admin/testimonials/' + deleteTestimonialId" method="POST" style="display: inline;">
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

</div>

@endsection