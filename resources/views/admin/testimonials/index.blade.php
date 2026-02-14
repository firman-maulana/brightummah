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
                                            <tbody class="text-sm" x-data="{ open: false }">
                                                <!-- Row -->
                                                <tr>
                                                    <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                        <div class="flex items-center text-gray-800">
                                                            <div class="flex items-center justify-center dark:bg-gray-700 rounded-full mr-2 cyhlg coqgc czvpl cr0m4 c59cs">
                                                                <img class="rounded-full cpts2" src="./images/user-40-07.jpg" width="40" height="40" alt="User 01">
                                                            </div>
                                                            <div class="text-gray-800 dark:text-gray-100 c1k3n">Name</div>
                                                        </div>
                                                    </td>
                                                    <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                        <div class="c2hoo"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5d303c2f36733e3c30382f32331d3c2d2d733e3230">Institute</a></div>
                                                    </td>
                                                    <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                        <div class="inline-flex rounded-full cfts0 c5px7 cydwr c1k3n ch4gv cdw1w">Refunded</div>
                                                    </td>
                                                    <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                        <div class="cydwr">1</div>
                                                    </td>
                                                    <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                        <div class="c2hoo">🇲🇽 New Mexico, MX</div>
                                                    </td>
                                                    <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                        <div class="flex items-center">
                                                            <svg class="mr-2 cmpw7 cdqku cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                                <path d="M4.3 4.5c1.9-1.9 5.1-1.9 7 0 .7.7 1.2 1.7 1.4 2.7l2-.3c-.2-1.5-.9-2.8-1.9-3.8C10.1.4 5.7.4 2.9 3.1L.7.9 0 7.3l6.4-.7-2.1-2.1zM15.6 8.7l-6.4.7 2.1 2.1c-1.9 1.9-5.1 1.9-7 0-.7-.7-1.2-1.7-1.4-2.7l-2 .3c.2 1.5.9 2.8 1.9 3.8 1.4 1.4 3.1 2 4.9 2 1.8 0 3.6-.7 4.9-2l2.2 2.2.8-6.4z"></path>
                                                            </svg>
                                                            <div>Subscription</div>
                                                        </div>
                                                    </td>
                                                    <td class="cq84g cyjcc cgn91 cn8zk c9hxi c72q5">
                                                        <div class="flex items-center">
                                                            <button class="c3e4j cg12x cmpw7 cdqku c98dn" :class="{ 'cbjxm': open }" @click.prevent="open = !open" :aria-expanded="open" aria-controls="description-01">
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
                                                <tr id="description-01" role="region" x-show="open" x-cloak="">
                                                    <td colspan="10" class="cyjcc cgn91 c9hxi c72q5">
                                                        <div class="flex items-center dark:text-gray-400 coulr cgk1f c1f2y c9j8s">
                                                            <svg class="mr-2 cmpw7 cdqku cbm9w coqgc" width="16" height="16">
                                                                <path d="M1 16h3c.3 0 .5-.1.7-.3l11-11c.4-.4.4-1 0-1.4l-3-3c-.4-.4-1-.4-1.4 0l-11 11c-.2.2-.3.4-.3.7v3c0 .6.4 1 1 1zm1-3.6l10-10L13.6 4l-10 10H2v-1.6z"></path>
                                                            </svg>
                                                            <div class="caf78">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                                        </div>
                                                    </td>
                                                </tr>
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
                                            <tbody class="text-sm" x-data="{ open: false }">
                                                <!-- Row -->
                                                <tr>
                                                    <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                        <div class="flex items-center text-gray-800">
                                                            <div class="text-gray-800 dark:text-gray-100 c1k3n">Name</div>
                                                        </div>
                                                    </td>
                                                    <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                        <div class="c2hoo"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5d303c2f36733e3c30382f32331d3c2d2d733e3230">Institute</a></div>
                                                    </td>
                                                    <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                        <div class="c2hoo">Country</div>
                                                    </td>
                                                    <td class="cq84g cyjcc cgn91 c9hxi c72q5">
                                                        <div class="c2hoo">Date</div>
                                                    </td>
                                                    <td class="cq84g cyjcc cgn91 cn8zk c9hxi c72q5">
                                                        <div class="flex items-center">
                                                            <button class="c3e4j cg12x cmpw7 cdqku c98dn" :class="{ 'cbjxm': open }" @click.prevent="open = !open" :aria-expanded="open" aria-controls="description-01">
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
                                                <tr id="description-01" role="region" x-show="open" x-cloak="">
                                                    <td colspan="10" class="cyjcc cgn91 c9hxi c72q5">
                                                        <div class="dark:text-gray-400 coulr cgk1f c1f2y c9j8s">
                                                            <div class="text-sm cxg65">
                                                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis. Ut enim ad minim veniam quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                                            </div>
                                                            <button class="bg-gray-900 cdj8c cg0jr ch8z9 cilvw cyn7a cnf4p">Approve</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- End -->
                            </div>                            

                        </div>

                    </div>

                </div>

@endsection