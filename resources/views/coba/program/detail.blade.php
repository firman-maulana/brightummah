@extends('coba.layouts.sidebar')
@section('content')

<div class="cnbwt cs7xl c6btv clbq0 cxsfz">

                    <!-- Page content -->
                    <div class="flex c7k8z c2eqw cxsy8 cbxj7 cetff clu2m">

                        <!-- Content -->
                        <div>
                            <div class="cai6b">
                                <a class="bg-white border-gray-200 text-gray-800 cc0oq cghq3 cspbm c0zkc c2vpa cnf4p cb2br" href="{{ route('program') }}">
                                    <svg class="mr-2 cmpw7 cdqku cbm9w" width="7" height="12" viewBox="0 0 7 12">
                                        <path d="M5.4.6 6.8 2l-4 4 4 4-1.4 1.4L0 6z"></path>
                                    </svg>
                                    <span>Back To Program</span>
                                </a>
                            </div>
                            <div class="text-sm text-violet-500 cgulq c0ef0 c6f83">Mon 27 Dec, 2024 - 9:00 PM -&gt; 10:00 PM</div>
                            <header class="cdiog">
                                <!-- Title -->
                                <h1 class="text-gray-800 dark:text-gray-100 font-bold c459m cbtcb c6f83">The World of AI and Machine Learning — Open Chat</h1>
                                <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts.</p>
                            </header>

                            <!-- Meta -->
                            <div class="c2g1r cwnq4 cld0c cjav5 cnlq0 cai6b">
                                <!-- Author -->
                                <div class="flex items-center ccduf">
                                    <a class="block mr-2 coqgc" href="#0">
                                        <img class="rounded-full" src="{{ asset('assets/admin/img/user-32-07.jpg') }}" width="32" height="32" alt="User 04">
                                    </a>
                                    <div class="text-sm cq84g">Teacher by <a class="text-gray-800 dark:text-gray-100 cgulq" href="#0">Monica Fishkin</a></div>
                                </div>
                                <!-- Right side -->
                                <div class="flex flex-wrap items-center c51uw ch3kz">
                                    <!-- Tags -->
                                    <div class="inline-flex items-center border border-gray-200 dark:text-gray-400 rounded-full cghq3 c1ukq cydwr c1k3n ch4gv c1iho cwn3v">
                                        <svg class="h-3 mr-2 ca2tk cyq9w cuv1l" viewBox="0 0 16 12">
                                            <path d="m16 2-4 2.4V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7.6l4 2.4V2ZM2 10V2h8v8H2Z"></path>
                                        </svg>
                                        <span>Online Event</span>
                                    </div>
                                    <div class="inline-flex rounded-full c1lu4 c19il cydwr c1k3n c0ef0 ch4gv c1iho cwn3v">Free</div>
                                </div>
                            </div>

                            <!-- Image -->
                            <figure class="cai6b">
                                <img class="rounded-sm c6btv" src="{{ asset('assets/admin/img/meetup-image.jpg') }}" width="640" height="360" alt="Meetup">
                            </figure>

                            <!-- Post content -->
                            <div>
                                <h2 class="text-gray-800 dark:text-gray-100 font-bold ce5fk clctu c6f83">Program Details</h2>
                                <p class="cai6b">In the world of AI, behavioural predictions are leading the charge to better machine learning.</p>
                                <p class="cai6b">There is so much happening in the AI space. Advances in the economic sectors have seen automated business practices rapidly increasing economic value. While the realm of the human sciences has used the power afforded by computational capabilities to solve many human based dilemmas. Even the art scene has adopted carefully selected ML applications to usher in the technological movement.</p>
                                <p class="cai6b">Join us every second Wednesday as we host an open discussion about the amazing things happening in the world of AI and machine learning. Feel free to share your experiences, ask questions, ponder the possibilities, or just listen as we explore new topics and revisit old ones.</p>
                            </div>

                            <hr class="cghq3 cbv37 cr4kg cf7n6">

                            <!-- Photos -->
                            <div>
                                <h2 class="text-gray-800 dark:text-gray-100 font-bold ce5fk clctu c6f83">Photos (3)</h2>
                                <div class="cdj80 cemhh cf7n6 c4sak">
                                    <a class="block" href="#0">
                                        <img class="rounded-sm c6btv" src="{{ asset('assets/admin/img/meetup-photo-01.jpg') }}" width="203" height="152" alt="Meetup photo 01">
                                    </a>
                                    <a class="block" href="#0">
                                        <img class="rounded-sm c6btv" src="{{ asset('assets/admin/img/meetup-photo-02.jpg') }}" width="203" height="152" alt="Meetup photo 02">
                                    </a>
                                    <a class="block" href="#0">
                                        <img class="rounded-sm c6btv" src="{{ asset('assets/admin/img/meetup-photo-03.jpg') }}" width="203" height="152" alt="Meetup photo 03">
                                    </a>
                                </div>
                            </div>

                            <hr class="cghq3 cbv37 cr4kg cf7n6">

                            <!-- Comments -->
                            <div>
                                <h2 class="text-gray-800 dark:text-gray-100 font-bold ce5fk clctu c6f83">Comments (3)</h2>
                                <ul class="cvw0d cf7n6">
                                    <!-- Comment -->
                                    <li class="flex ce4zk">
                                        <a class="block coqgc chfzq" href="#0">
                                            <img class="rounded-full" src="{{ asset('assets/admin/img/user-32-07.jpg') }}" width="32" height="32" alt="User 07">
                                        </a>
                                        <div class="cbw8w">
                                            <div class="text-sm text-gray-800 dark:text-gray-100 cgulq c6f83">Taylor Nieman</div>
                                            <div class="caf78">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.”</div>
                                        </div>
                                    </li>
                                    <!-- Comment -->
                                    <li class="flex ce4zk">
                                        <a class="block coqgc chfzq" href="#0">
                                            <img class="rounded-full" src="{{ asset('assets/admin/img/user-32-08.jpg') }}" width="32" height="32" alt="User 08">
                                        </a>
                                        <div class="cbw8w">
                                            <div class="text-sm text-gray-800 dark:text-gray-100 cgulq c6f83">Meagan Loyst</div>
                                            <div class="caf78">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.”</div>
                                        </div>
                                    </li>
                                    <!-- Comment -->
                                    <li class="flex ce4zk">
                                        <a class="block coqgc chfzq" href="#0">
                                            <img class="rounded-full" src="{{ asset('assets/admin/img/user-32-02.jpg') }}" width="32" height="32" alt="User 02">
                                        </a>
                                        <div class="cbw8w">
                                            <div class="text-sm text-gray-800 dark:text-gray-100 cgulq c6f83">Frank Malik</div>
                                            <div class="caf78">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.”</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <hr class="cghq3 cbv37 cr4kg cf7n6">

                            <!-- Similar Meetups -->
                            <div>
                                <h2 class="text-gray-800 dark:text-gray-100 font-bold ce5fk clctu c6f83">Other Programs</h2>
                                <div class="ccr53 cvsuf cifdz cf7n6">
                                    <!-- Related item -->
                                    <article class="flex bg-white c2vpa cxe43 c1hly c5vqk">
                                        <!-- Image -->
                                        <a class="block ck67t ccnsg cm84d coqgc ckarq cd1i2" href="#0">
                                            <img class="ccrfs cfwu1 cqdkw cav8x c6btv" src="{{ asset('assets/admin/img/meetups-thumb-02.jpg') }}" width="220" height="236" alt="Meetup 02">
                                            <!-- Like button -->
                                            <button class="mr-4 cqdkw cgky2 cli41 cfo3t">
                                                <div class="bg-gray-900 rounded-full cxnba cyn7a">
                                                    <span class="cn8jz">Like</span>
                                                    <svg class="cbm9w cue4z cmwfi" viewBox="0 0 32 32">
                                                        <path d="M22.682 11.318A4.485 4.485 0 0019.5 10a4.377 4.377 0 00-3.5 1.707A4.383 4.383 0 0012.5 10a4.5 4.5 0 00-3.182 7.682L16 24l6.682-6.318a4.5 4.5 0 000-6.364zm-1.4 4.933L16 21.247l-5.285-5A2.5 2.5 0 0112.5 12c1.437 0 2.312.681 3.5 2.625C17.187 12.681 18.062 12 19.5 12a2.5 2.5 0 011.785 4.251h-.003z"></path>
                                                    </svg>
                                                </div>
                                            </button>
                                        </a>
                                        <!-- Content -->
                                        <div class="flex cetff cbw8w csusu">
                                            <div class="cbw8w">
                                                <div class="text-sm text-violet-500 cgulq c0ef0 c6f83">Mon 27 Dec, 2024</div>
                                                <a class="inline-flex c6f83" href="#0">
                                                    <h3 class="font-bold text-gray-800 dark:text-gray-100 c7x0x">New York &amp; New Jersey Virtual Retreat 2024</h3>
                                                </a>
                                                <div class="text-sm">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts.</div>
                                            </div>
                                            <!-- Footer -->
                                            <div class="flex items-center cm3rx c7gr8">
                                                <!-- Tag -->
                                                <div class="inline-flex items-center border border-gray-200 dark:text-gray-400 rounded-full cghq3 c1ukq cydwr c1k3n ch4gv c1iho cwn3v">
                                                    <svg class="h-3 mr-2 ca2tk cyq9w cuv1l" viewBox="0 0 16 12">
                                                        <path d="m16 2-4 2.4V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7.6l4 2.4V2ZM2 10V2h8v8H2Z"></path>
                                                    </svg>
                                                    <span>Online Event</span>
                                                </div>
                                                <!-- Avatars -->
                                                <div class="flex items-center ch3kz">
                                                    <div class="flex cjgpi c45a5">
                                                        <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/avatar-02.jpg') }}" width="28" height="28" alt="User 02">
                                                        <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/avatar-03.jpg') }}" width="28" height="28" alt="User 03">
                                                        <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/avatar-04.jpg') }}" width="28" height="28" alt="User 04">
                                                    </div>
                                                    <div class="cmpw7 cdqku c1k3n c1iho caf78">+132</div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            
                        </div>

                        <!-- Sidebar -->
                        <div class="cr78y">

                            <!-- 1st block -->
                            <div class="bg-white c2vpa c1hly c5vqk cl6wk ch0sq csusu">
                                <div class="cweej">
                                    <button class="btn bg-gray-900 cdj8c cg0jr ch8z9 cilvw cyn7a c6btv">
                                        <svg class="cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
                                            <path d="m2.457 8.516.969-.99 2.516 2.481 5.324-5.304.985.989-6.309 6.284z"></path>
                                        </svg>
                                        <span class="cpts2">Update</span>
                                    </button>
                                    <button class="btn border-gray-200 text-gray-800 cc0oq cghq3 cspbm c0zkc c6btv">
                                        <svg class="cvqus coqgc" width="16" height="16" viewBox="0 0 16 16">
                                            <path d="M14.682 2.318A4.485 4.485 0 0 0 11.5 1 4.377 4.377 0 0 0 8 2.707 4.383 4.383 0 0 0 4.5 1a4.5 4.5 0 0 0-3.182 7.682L8 15l6.682-6.318a4.5 4.5 0 0 0 0-6.364Zm-1.4 4.933L8 12.247l-5.285-5A2.5 2.5 0 0 1 4.5 3c1.437 0 2.312.681 3.5 2.625C9.187 3.681 10.062 3 11.5 3a2.5 2.5 0 0 1 1.785 4.251h-.003Z"></path>
                                        </svg>
                                        <span class="c8bkw">Delete</span>
                                    </button>
                                </div>
                            </div>

                            <!-- 2nd block -->
                            <div class="bg-white c2vpa c1hly c5vqk cl6wk ch0sq csusu">
                                <div class="flex cm3rx cqkjy c6r0l">
                                    <div class="text-sm text-gray-800 dark:text-gray-100 cgulq">Attendees (127)</div>
                                    <a class="text-sm text-violet-500 c5ylh ceetm c1k3n" href="#0">View All</a>
                                </div>
                                <ul class="cjav5">
                                    <li>
                                        <div class="flex cm3rx">
                                            <div class="flex items-center cbw8w">
                                                <div class="cm84d chfzq">
                                                    <img class="rounded-full cue4z cmwfi" src="{{ asset('assets/admin/img/user-32-08.jpg') }}" width="32" height="32" alt="User 08">
                                                </div>
                                                <div class="c941w">
                                                    <span class="text-sm text-gray-800 dark:text-gray-100 c1k3n">Carolyn McNeail</span>
                                                </div>
                                            </div>
                                            <button class="rounded-full c3e4j cg12x cmpw7 cdqku">
                                                <span class="cn8jz">Menu</span>
                                                <svg class="cbm9w cue4z cmwfi" viewBox="0 0 32 32">
                                                    <circle cx="16" cy="16" r="2"></circle>
                                                    <circle cx="10" cy="16" r="2"></circle>
                                                    <circle cx="22" cy="16" r="2"></circle>
                                                </svg>
                                            </button>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex cm3rx">
                                            <div class="flex items-center cbw8w">
                                                <div class="cm84d chfzq">
                                                    <img class="rounded-full cue4z cmwfi" src="{{ asset('assets/admin/img/user-32-01.jpg') }}" width="32" height="32" alt="User 01">
                                                </div>
                                                <div class="c941w">
                                                    <span class="text-sm text-gray-800 dark:text-gray-100 c1k3n">Dominik Lamakani</span>
                                                </div>
                                            </div>
                                            <button class="rounded-full c3e4j cg12x cmpw7 cdqku">
                                                <span class="cn8jz">Menu</span>
                                                <svg class="cbm9w cue4z cmwfi" viewBox="0 0 32 32">
                                                    <circle cx="16" cy="16" r="2"></circle>
                                                    <circle cx="10" cy="16" r="2"></circle>
                                                    <circle cx="22" cy="16" r="2"></circle>
                                                </svg>
                                            </button>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex cm3rx">
                                            <div class="flex items-center cbw8w">
                                                <div class="cm84d chfzq">
                                                    <img class="rounded-full cue4z cmwfi" src="{{ asset('assets/admin/img/user-32-03.jpg') }}" width="32" height="32" alt="User 03">
                                                </div>
                                                <div class="c941w">
                                                    <span class="text-sm text-gray-800 dark:text-gray-100 c1k3n">Ivan Mesaros</span>
                                                </div>
                                            </div>
                                            <button class="rounded-full c3e4j cg12x cmpw7 cdqku">
                                                <span class="cn8jz">Menu</span>
                                                <svg class="cbm9w cue4z cmwfi" viewBox="0 0 32 32">
                                                    <circle cx="16" cy="16" r="2"></circle>
                                                    <circle cx="10" cy="16" r="2"></circle>
                                                    <circle cx="22" cy="16" r="2"></circle>
                                                </svg>
                                            </button>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex cm3rx">
                                            <div class="flex items-center cbw8w">
                                                <div class="cm84d chfzq">
                                                    <img class="rounded-full cue4z cmwfi" src="{{ asset('assets/admin/img/user-32-05.jpg') }}" width="32" height="32" alt="User 05">
                                                </div>
                                                <div class="c941w">
                                                    <span class="text-sm text-gray-800 dark:text-gray-100 c1k3n">Maria Martinez</span>
                                                </div>
                                            </div>
                                            <button class="rounded-full c3e4j cg12x cmpw7 cdqku">
                                                <span class="cn8jz">Menu</span>
                                                <svg class="cbm9w cue4z cmwfi" viewBox="0 0 32 32">
                                                    <circle cx="16" cy="16" r="2"></circle>
                                                    <circle cx="10" cy="16" r="2"></circle>
                                                    <circle cx="22" cy="16" r="2"></circle>
                                                </svg>
                                            </button>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <!-- 3rd block -->
                            <div class="bg-white c2vpa c1hly c5vqk cl6wk ch0sq csusu">
                                <div class="flex cm3rx cqkjy c6r0l">
                                    <div class="text-sm text-gray-800 dark:text-gray-100 cgulq">Invite Friends</div>
                                    <a class="text-sm text-violet-500 c5ylh ceetm c1k3n" href="#0">View All</a>
                                </div>
                                <ul class="cjav5">
                                    <li>
                                        <div class="flex items-center cm3rx">
                                            <div class="flex items-center cbw8w">
                                                <div class="cm84d chfzq">
                                                    <img class="rounded-full cue4z cmwfi" src="{{ asset('assets/admin/img/user-32-02.jpg') }}" width="32" height="32" alt="User 02">
                                                </div>
                                                <div class="c941w">
                                                    <span class="text-sm text-gray-800 dark:text-gray-100 c1k3n">Haruki Masuno</span>
                                                </div>
                                            </div>
                                            <button class="btn-xs border-gray-200 text-gray-800 rounded-full cc0oq cghq3 cspbm c0zkc cpw2l ch4gv c1iho cwn3v">Invite</button>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center cm3rx">
                                            <div class="flex items-center cbw8w">
                                                <div class="cm84d chfzq">
                                                    <img class="rounded-full cue4z cmwfi" src="{{ asset('assets/admin/img/user-32-04.jpg') }}" width="32" height="32" alt="User 04">
                                                </div>
                                                <div class="c941w">
                                                    <span class="text-sm text-gray-800 dark:text-gray-100 c1k3n">Joe Huang</span>
                                                </div>
                                            </div>
                                            <button class="btn-xs border-gray-200 text-gray-800 rounded-full cc0oq cghq3 cspbm c0zkc cpw2l ch4gv c1iho cwn3v">Invite</button>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center cm3rx">
                                            <div class="flex items-center cbw8w">
                                                <div class="cm84d chfzq">
                                                    <img class="rounded-full cue4z cmwfi" src="{{ asset('assets/admin/img/user-32-06.jpg') }}" width="32" height="32" alt="User 06">
                                                </div>
                                                <div class="c941w">
                                                    <span class="text-sm text-gray-800 dark:text-gray-100 c1k3n">Carolyn McNeail</span>
                                                </div>
                                            </div>
                                            <button class="btn-xs border-gray-200 text-gray-800 rounded-full cc0oq cghq3 cspbm c0zkc cpw2l ch4gv c1iho cwn3v">Invite</button>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center cm3rx">
                                            <div class="flex items-center cbw8w">
                                                <div class="cm84d chfzq">
                                                    <img class="rounded-full cue4z cmwfi" src="{{ asset('assets/admin/img/user-32-08.jpg') }}" width="32" height="32" alt="User 08">
                                                </div>
                                                <div class="c941w">
                                                    <span class="text-sm text-gray-800 dark:text-gray-100 c1k3n">Lisa Sitwala</span>
                                                </div>
                                            </div>
                                            <button class="btn-xs border-gray-200 text-gray-800 rounded-full cc0oq cghq3 cspbm c0zkc cpw2l ch4gv c1iho cwn3v">Invite</button>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>

                </div>

@endsection