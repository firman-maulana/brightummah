@extends('coba.layouts.sidebar')

@section('content')

 <div class="ch3yp cnbwt cs7xl clu2m c6btv clbq0 cxsfz">

                    <!-- Page header -->
                    <div class="cgd7w">

                        <!-- Title -->
                        <h1 class="text-gray-800 dark:text-gray-100 font-bold c459m cbtcb">Account Settings</h1>

                    </div>

                    <div class="bg-white c2vpa c1hly c5vqk cgd7w">
                        <div class="flex c2poy cwner cetff">

                            <!-- Sidebar -->
                            <div class="flex border-gray-200 cghq3 c9zp2 cjq31 colxp cschv cu49b cws0k c8vtj cyqqd cnuel ctv3r cb2br cwlwv">
                                <!-- Group 1 -->
                                <div>
                                    <div class="cmpw7 cgulq cdqku c0ef0 c1iho cxg65">Business settings</div>
                                    <ul class="flex c8vtj cyqqd cri0s chfzq">
                                        <li class="cved1 cri0s ce4il">
                                            <a class="flex items-center cq84g cb8zv ch4gv cuvgf" href="{{ route('account') }}">
                                                <svg class="mr-2 cmpw7 cdqku cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                    <path d="M8 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm-5.143 7.91a1 1 0 1 1-1.714-1.033A7.996 7.996 0 0 1 8 10a7.996 7.996 0 0 1 6.857 3.877 1 1 0 1 1-1.714 1.032A5.996 5.996 0 0 0 8 12a5.996 5.996 0 0 0-5.143 2.91Z"></path>
                                                </svg>
                                                <span class="text-sm c196r c18od c0zkc c1ukq c1k3n">My Account</span>
                                            </a>
                                        </li>
                                        <li class="cved1 cri0s ce4il">
                                            <a class="flex items-center cvwie cosgb c33r0 cgnhv cq84g cb8zv ch4gv cuvgf" href="{{ route('notifications') }}">
                                                <svg class="text-violet-400 mr-2 cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                    <path d="m9 12.614 4.806 1.374a.15.15 0 0 0 .174-.21L8.133 2.082a.15.15 0 0 0-.268 0L2.02 13.777a.149.149 0 0 0 .174.21L7 12.614V9a1 1 0 1 1 2 0v3.614Zm-1 1.794-5.257 1.503c-1.798.514-3.35-1.355-2.513-3.028L6.076 1.188c.791-1.584 3.052-1.584 3.845 0l5.848 11.695c.836 1.672-.714 3.54-2.512 3.028L8 14.408Z"></path>
                                                </svg>
                                                <span class="text-sm text-violet-500 csvw7 c1k3n">My Notifications</span>
                                            </a>
                                        </li>
                                        <li class="cved1 cri0s ce4il">
                                            <a class="flex items-center cq84g cb8zv ch4gv cuvgf" href="connected-apps.html">
                                                <svg class="mr-2 cmpw7 cdqku cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                    <path d="M8 3.414V6a1 1 0 1 1-2 0V1a1 1 0 0 1 1-1h5a1 1 0 0 1 0 2H9.414l6.293 6.293a1 1 0 1 1-1.414 1.414L8 3.414Zm0 9.172V10a1 1 0 1 1 2 0v5a1 1 0 0 1-1 1H4a1 1 0 0 1 0-2h2.586L.293 7.707a1 1 0 0 1 1.414-1.414L8 12.586Z"></path>
                                                </svg>
                                                <span class="text-sm c196r c18od c0zkc c1ukq c1k3n">Connected Apps</span>
                                            </a>
                                        </li>
                                        <li class="cved1 cri0s ce4il">
                                            <a class="flex items-center cq84g cb8zv ch4gv cuvgf" href="plans.html">
                                                <svg class="mr-2 cmpw7 cdqku cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                    <path d="M5 9a1 1 0 1 1 0-2h6a1 1 0 0 1 0 2H5ZM1 4a1 1 0 1 1 0-2h14a1 1 0 0 1 0 2H1Zm0 10a1 1 0 0 1 0-2h14a1 1 0 0 1 0 2H1Z"></path>
                                                </svg>
                                                <span class="text-sm c196r c18od c0zkc c1ukq c1k3n">Plans</span>
                                            </a>
                                        </li>
                                        <li class="cved1 cri0s ce4il">
                                            <a class="flex items-center cq84g cb8zv ch4gv cuvgf" href="billing.html">
                                                <svg class="mr-2 cmpw7 cdqku cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                    <path d="M0 4a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4v8a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4Zm2 0v8a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Zm9 1a1 1 0 0 1 0 2H5a1 1 0 1 1 0-2h6Zm0 4a1 1 0 0 1 0 2H5a1 1 0 1 1 0-2h6Z"></path>
                                                </svg>
                                                <span class="text-sm c196r c18od c0zkc c1ukq c1k3n">Billing &amp; Invoices</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Group 2 -->
                                <div>
                                    <div class="cmpw7 cgulq cdqku c0ef0 c1iho cxg65">Experience</div>
                                    <ul class="flex c8vtj cyqqd cri0s chfzq">
                                        <li class="cved1 cri0s ce4il">
                                            <a class="flex items-center cq84g cb8zv ch4gv cuvgf" href="{{ route('feedback') }}">
                                                <svg class="mr-2 cmpw7 cdqku cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                    <path d="M14.3.3c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-8 8c-.2.2-.4.3-.7.3-.3 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l8-8zM15 7c.6 0 1 .4 1 1 0 4.4-3.6 8-8 8s-8-3.6-8-8 3.6-8 8-8c.6 0 1 .4 1 1s-.4 1-1 1C4.7 2 2 4.7 2 8s2.7 6 6 6 6-2.7 6-6c0-.6.4-1 1-1z"></path>
                                                </svg>
                                                <span class="text-sm c196r c18od c0zkc c1ukq c1k3n">Give Feedback</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Panel -->
                            <div class="cbw8w">

                                <!-- Panel body -->
                                <div class="cmxzb c41yb">
                                    <h2 class="text-gray-800 dark:text-gray-100 font-bold cbtcb c6r0l">My Notifications</h2>

                                    <!-- General -->
                                    <section>
                                        <h3 class="text-gray-800 dark:text-gray-100 font-bold ce5fk clctu cu6vl">General</h3>
                                        <ul>
                                            <li class="flex items-center border-gray-200 cghq3 cm3rx ctv3r c72q5">
                                                <!-- Left -->
                                                <div>
                                                    <div class="text-gray-800 dark:text-gray-100 cgulq">Comments and replies</div>
                                                    <div class="text-sm">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</div>
                                                </div>
                                                <!-- Right -->
                                                <div class="flex items-center cfh3y" x-data="{ checked: true }">
                                                    <div class="text-sm mr-2 cmpw7 cdqku caf78" x-text="checked ? 'On' : 'Off'"></div>
                                                    <div class="c1ivc">
                                                        <input type="checkbox" id="comments" class="cn8jz" x-model="checked">
                                                        <label class="dark:bg-gray-700 cg3qz" for="comments">
                                                            <span class="bg-white c5vqk" aria-hidden="true"></span>
                                                            <span class="cn8jz">Enable smart sync</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="flex items-center border-gray-200 cghq3 cm3rx ctv3r c72q5">
                                                <!-- Left -->
                                                <div>
                                                    <div class="text-gray-800 dark:text-gray-100 cgulq">Messages</div>
                                                    <div class="text-sm">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</div>
                                                </div>
                                                <!-- Right -->
                                                <div class="flex items-center cfh3y" x-data="{ checked: true }">
                                                    <div class="text-sm mr-2 cmpw7 cdqku caf78" x-text="checked ? 'On' : 'Off'"></div>
                                                    <div class="c1ivc">
                                                        <input type="checkbox" id="messages" class="cn8jz" x-model="checked">
                                                        <label class="dark:bg-gray-700 cg3qz" for="messages">
                                                            <span class="bg-white c5vqk" aria-hidden="true"></span>
                                                            <span class="cn8jz">Enable smart sync</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="flex items-center border-gray-200 cghq3 cm3rx ctv3r c72q5">
                                                <!-- Left -->
                                                <div>
                                                    <div class="text-gray-800 dark:text-gray-100 cgulq">Mentions</div>
                                                    <div class="text-sm">Excepteur sint occaecat cupidatat non in culpa qui officia deserunt mollit.</div>
                                                </div>
                                                <!-- Right -->
                                                <div class="flex items-center cfh3y" x-data="{ checked: false }">
                                                    <div class="text-sm mr-2 cmpw7 cdqku caf78" x-text="checked ? 'On' : 'Off'"></div>
                                                    <div class="c1ivc">
                                                        <input type="checkbox" id="mentions" class="cn8jz" x-model="checked">
                                                        <label class="dark:bg-gray-700 cg3qz" for="mentions">
                                                            <span class="bg-white c5vqk" aria-hidden="true"></span>
                                                            <span class="cn8jz">Enable smart sync</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </section>

                                    <!-- Shares -->
                                    <section>
                                        <h3 class="text-gray-800 dark:text-gray-100 font-bold ce5fk clctu cu6vl">Shares</h3>
                                        <ul>
                                            <li class="flex items-center border-gray-200 cghq3 cm3rx ctv3r c72q5">
                                                <!-- Left -->
                                                <div>
                                                    <div class="text-gray-800 dark:text-gray-100 cgulq">Shares of my content</div>
                                                    <div class="text-sm">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</div>
                                                </div>
                                                <!-- Right -->
                                                <div class="flex items-center cfh3y">
                                                    <button class="border-gray-200 cc0oq cghq3 cspbm c5vqk cnf4p">Manage</button>
                                                </div>
                                            </li>
                                            <li class="flex items-center border-gray-200 cghq3 cm3rx ctv3r c72q5">
                                                <!-- Left -->
                                                <div>
                                                    <div class="text-gray-800 dark:text-gray-100 cgulq">Team invites</div>
                                                    <div class="text-sm">Excepteur sint occaecat cupidatat non in culpa qui officia deserunt mollit.</div>
                                                </div>
                                                <!-- Right -->
                                                <div class="flex items-center cfh3y">
                                                    <button class="border-gray-200 cc0oq cghq3 cspbm c5vqk cnf4p">Manage</button>
                                                </div>
                                            </li>
                                            <li class="flex items-center border-gray-200 cghq3 cm3rx ctv3r c72q5">
                                                <!-- Left -->
                                                <div>
                                                    <div class="text-gray-800 dark:text-gray-100 cgulq">Smart connection</div>
                                                    <div class="text-sm">Excepteur sint occaecat cupidatat non in culpa qui officia deserunt mollit.</div>
                                                </div>
                                                <!-- Right -->
                                                <div class="flex items-center cfh3y">
                                                    <div class="text-sm mr-2 hidden cmpw7 cdqku cyqqd caf78">Active</div>
                                                    <button class="border-gray-200 cc0oq cghq3 cspbm czr3n c5vqk cnf4p">Disable</button>
                                                </div>
                                            </li>
                                        </ul>
                                    </section>
                                </div>

                                <!-- Panel footer -->
                                <footer>
                                    <div class="flex border-gray-200 cghq3 cetff cr4kg cj8hp ckhro">
                                        <div class="flex c4tdj">
                                            <button class="btn border-gray-200 text-gray-800 cc0oq cghq3 cspbm c0zkc c2vpa">Cancel</button>
                                            <button class="btn bg-gray-900 ml-3 cdj8c cg0jr ch8z9 cilvw cyn7a">Save Changes</button>
                                        </div>
                                    </div>
                                </footer>

                            </div>

                        </div>
                    </div>

                </div>

@endsection