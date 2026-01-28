@extends('coba.layouts.sidebar')  
@section('content')

                <div class="ch3yp cnbwt cs7xl clu2m c6btv clbq0 cxsfz">

                    <!-- Dashboard actions -->
                    <div class="c2g1r cwnq4 cnlq0 cgd7w">

                        <!-- Left: Title -->
                        <div class="c2rn6 cdiog">
                            <h1 class="text-gray-800 dark:text-gray-100 font-bold c459m cbtcb">Dashboard</h1>
                        </div>

                        <!-- Right: Actions -->
                        <div class="cm3b7 c51uw ccww4 csdex cbe1i c4sak">

                            <!-- Filter button -->
                            <div class="inline-flex cm84d" x-data="{ open: false }">
                                <button class="btn bg-white border-gray-200 cc0oq cghq3 cspbm cmpw7 c2vpa cdqku ch4gv" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                                    <span class="cn8jz">Filter</span><wbr>
                                    <svg class="cbm9w" width="16" height="16" viewBox="0 0 16 16">
                                        <path d="M0 3a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1ZM3 8a1 1 0 0 1 1-1h8a1 1 0 1 1 0 2H4a1 1 0 0 1-1-1ZM7 12a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2H7Z"></path>
                                    </svg>
                                </button>
                                <div class="bg-white border border-gray-200 cghq3 c2vpa cbx8s cxe43 cniog cw4rt c29dn cb8zv ccwri cqdkw ctd47 cvh5f c1yoz cu1dd cvggx ccwg3" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="cxxol cbmha c8uqq c98dn" x-transition:enter-start="opacity-0 cx9xg" x-transition:enter-end="cgcrn csdj3" x-transition:leave="cxxol cbmha c8uqq" x-transition:leave-start="cgcrn" x-transition:leave-end="opacity-0" x-cloak="">
                                    <div class="cmpw7 cgulq cdqku c0ef0 c1yoz c1iho cb2br cif3q">Filters</div>
                                    <ul class="cdiog">
                                        <li class="cb2br cwn3v">
                                            <label class="flex items-center">
                                                <input type="checkbox" class="crgcy" checked="">
                                                <span class="text-sm c1k3n c8bkw">Direct VS Indirect</span>
                                            </label>
                                        </li>
                                        <li class="cb2br cwn3v">
                                            <label class="flex items-center">
                                                <input type="checkbox" class="crgcy" checked="">
                                                <span class="text-sm c1k3n c8bkw">Real Time Value</span>
                                            </label>
                                        </li>
                                        <li class="cb2br cwn3v">
                                            <label class="flex items-center">
                                                <input type="checkbox" class="crgcy" checked="">
                                                <span class="text-sm c1k3n c8bkw">Top Channels</span>
                                            </label>
                                        </li>
                                        <li class="cb2br cwn3v">
                                            <label class="flex items-center">
                                                <input type="checkbox" class="crgcy">
                                                <span class="text-sm c1k3n c8bkw">Sales VS Refunds</span>
                                            </label>
                                        </li>
                                        <li class="cb2br cwn3v">
                                            <label class="flex items-center">
                                                <input type="checkbox" class="crgcy">
                                                <span class="text-sm c1k3n c8bkw">Last Order</span>
                                            </label>
                                        </li>
                                        <li class="cb2br cwn3v">
                                            <label class="flex items-center">
                                                <input type="checkbox" class="crgcy">
                                                <span class="text-sm c1k3n c8bkw">Total Spent</span>
                                            </label>
                                        </li>
                                    </ul>
                                    <div class="border-gray-200 cghq3 cxyug cgk1f cr4kg cb2br cuvgf">
                                        <ul class="flex items-center cm3rx">
                                            <li>
                                                <button class="btn-xs bg-white border-gray-200 cc0oq cghq3 cspbm c2vpa czr3n">Clear</button>
                                            </li>
                                            <li>
                                                <button class="btn-xs bg-white border-gray-200 text-gray-800 cc0oq cghq3 cspbm c0zkc c2vpa" @click="open = false" @focusout="open = false">Apply</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Datepicker built with flatpickr -->
                            <div class="cm84d">
                                <input class="datepicker c29yw cqahh c0zkc c2vpa c0afh c1ukq c1k3n caqf9 ct9oo" placeholder="Select dates" data-class="flatpickr-right">
                                <div class="flex items-center pointer-events-none c29dn cqdkw cini7">
                                    <svg class="ml-3 cmpw7 cdqku cbm9w" width="16" height="16" viewBox="0 0 16 16">
                                        <path d="M5 4a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2H5Z"></path>
                                        <path d="M4 0a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V4a4 4 0 0 0-4-4H4ZM2 4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4Z"></path>
                                    </svg>
                                </div>
                            </div>

                            <!-- Add view button -->
                            <button class="btn bg-gray-900 cdj8c cg0jr ch8z9 cilvw cyn7a">
                                <svg class="cbm9w cbmv0 coqgc" width="16" height="16" viewBox="0 0 16 16">
                                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                                </svg>
                                <span class="cyga5">Add View</span>
                            </button>

                        </div>

                    </div>

                    <!-- Cards -->
                    <div class="c7nom ckn6o c4sak">

                        <!-- Line chart (Acme Plus) -->
                        <div class="flex bg-white c2vpa ci500 c18r2 coz6m c1hly c5vqk cetff">
                            <div class="cx3hp cfkjc">
                                <header class="flex cm3rx ce4zk c6f83">
                                    <h2 class="text-gray-800 dark:text-gray-100 cgulq c7x0x">Acme Plus</h2>
                                    <!-- Menu button -->
                                    <div class="inline-flex cm84d" x-data="{ open: false }">
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
                                                    <a class="text-sm flex c196r cqahh c0zkc c1ukq c1k3n cb2br cwn3v" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 1</a>
                                                </li>
                                                <li>
                                                    <a class="text-sm flex c196r cqahh c0zkc c1ukq c1k3n cb2br cwn3v" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 2</a>
                                                </li>
                                                <li>
                                                    <a class="text-sm flex c84kf czr3n c1k3n cb2br cwn3v" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Remove</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </header>
                                <div class="cmpw7 cgulq cdqku c0ef0 c1iho cu6vl">Sales</div>
                                <div class="flex ce4zk">
                                    <div class="text-3xl font-bold text-gray-800 dark:text-gray-100 mr-2">$24,780</div>
                                    <div class="text-sm rounded-full c1lu4 c19il c1k3n c5idz">+49%</div>
                                </div>
                            </div>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/dashboard-charts.js for config -->
                            <div class="c2tvp cf4hy cbw8w">
                                <!-- Change the height attribute to adjust the chart height -->
                                <canvas id="dashboard-card-01" width="389" height="128"></canvas>
                            </div>
                        </div>

                        <!-- Line chart (Acme Advanced) -->
                        <div class="flex bg-white c2vpa ci500 c18r2 coz6m c1hly c5vqk cetff">
                            <div class="cx3hp cfkjc">
                                <header class="flex cm3rx ce4zk c6f83">
                                    <h2 class="text-gray-800 dark:text-gray-100 cgulq c7x0x">Acme Advanced</h2>
                                    <!-- Menu button -->
                                    <div class="inline-flex cm84d" x-data="{ open: false }">
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
                                                    <a class="text-sm flex c196r cqahh c0zkc c1ukq c1k3n cb2br cwn3v" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 1</a>
                                                </li>
                                                <li>
                                                    <a class="text-sm flex c196r cqahh c0zkc c1ukq c1k3n cb2br cwn3v" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 2</a>
                                                </li>
                                                <li>
                                                    <a class="text-sm flex c84kf czr3n c1k3n cb2br cwn3v" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Remove</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </header>
                                <div class="cmpw7 cgulq cdqku c0ef0 c1iho cu6vl">Sales</div>
                                <div class="flex ce4zk">
                                    <div class="text-3xl font-bold text-gray-800 dark:text-gray-100 mr-2">$17,489</div>
                                    <div class="text-sm rounded-full cx6qj cz4gk c1k3n c5idz">-14%</div>
                                </div>
                            </div>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/dashboard-charts.js for config -->
                            <div class="c2tvp cf4hy cbw8w">
                                <!-- Change the height attribute to adjust the chart height -->
                                <canvas id="dashboard-card-02" width="389" height="128"></canvas>
                            </div>
                        </div>
                        
                        <!-- Line chart (Acme Professional) -->
                        <div class="flex bg-white c2vpa ci500 c18r2 coz6m c1hly c5vqk cetff">
                            <div class="cx3hp cfkjc">
                                <header class="flex cm3rx ce4zk c6f83">
                                    <h2 class="text-gray-800 dark:text-gray-100 cgulq c7x0x">Acme Professional</h2>
                                    <!-- Menu button -->
                                    <div class="inline-flex cm84d" x-data="{ open: false }">
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
                                                    <a class="text-sm flex c196r cqahh c0zkc c1ukq c1k3n cb2br cwn3v" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 1</a>
                                                </li>
                                                <li>
                                                    <a class="text-sm flex c196r cqahh c0zkc c1ukq c1k3n cb2br cwn3v" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 2</a>
                                                </li>
                                                <li>
                                                    <a class="text-sm flex c84kf czr3n c1k3n cb2br cwn3v" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Remove</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </header>
                                <div class="cmpw7 cgulq cdqku c0ef0 c1iho cu6vl">Sales</div>
                                <div class="flex ce4zk">
                                    <div class="text-3xl font-bold text-gray-800 dark:text-gray-100 mr-2">$9,962</div>
                                    <div class="text-sm rounded-full c1lu4 c19il c1k3n c5idz">+29%</div>
                                </div>
                            </div>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/dashboard-charts.js for config -->
                            <div class="c2tvp cf4hy cbw8w">
                                <!-- Change the height attribute to adjust the chart height -->
                                <canvas id="dashboard-card-03" width="389" height="128"></canvas>
                            </div>
                        </div>
                        
                        <!-- Bar chart (Direct vs Indirect) -->
                        <div class="flex bg-white c2vpa ci500 coz6m c1hly c5vqk cetff">
                            <header class="cghq3 cbv37 ctv3r cx3hp cz8qb">
                                <h2 class="text-gray-800 dark:text-gray-100 cgulq">Direct VS Indirect</h2>
                            </header>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/dashboard-charts.js for config -->
                            <div id="dashboard-card-04-legend" class="cx3hp c72q5">
                                <ul class="flex flex-wrap cw4lm"></ul>
                            </div>
                            <div class="cbw8w">
                                <!-- Change the height attribute to adjust the chart height -->
                                <canvas id="dashboard-card-04" width="595" height="248"></canvas>
                            </div>
                        </div>
                        
                        <!-- Line chart (Real Time Value) -->
                        <div class="flex bg-white c2vpa ci500 coz6m c1hly c5vqk cetff">
                            <header class="flex items-center cghq3 cbv37 ctv3r cx3hp cz8qb">
                                <h2 class="text-gray-800 dark:text-gray-100 cgulq">Real Time Value</h2>
                                <div class="cm84d c8bkw" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                                    <button class="block" aria-haspopup="true" :aria-expanded="open" @focus="open = true" @focusout="open = false" @click.prevent="">
                                        <svg class="cmpw7 cdqku cbm9w" width="16" height="16" viewBox="0 0 16 16">
                                            <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                        </svg>
                                    </button>
                                    <div class="c7yzf cbh7j c5d6p cqdkw cvggx">
                                        <div class="bg-white dark:text-gray-100 border border-gray-200 cghq3 c2vpa cxe43 cb8zv ccwri c6f83 cb2br cuvgf" x-show="open" x-transition:enter="cxxol cbmha c8uqq c98dn" x-transition:enter-start="opacity-0 cvtzh" x-transition:enter-end="cgcrn csdj3" x-transition:leave="cxxol cbmha c8uqq" x-transition:leave-start="cgcrn" x-transition:leave-end="opacity-0" x-cloak="">
                                            <div class="cq84g cydwr c1iho">Built with <a class="celj7" @focus="open = true" @focusout="open = false" href="https://www.chartjs.org/" target="_blank">Chart.js</a></div>
                                        </div>
                                    </div>
                                </div>
                            </header>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/dashboard-charts.js for config -->
                            <div class="cx3hp c72q5">
                                <div class="flex ce4zk">
                                    <div class="text-3xl font-bold text-gray-800 dark:text-gray-100 mr-2 c2hrs">$<span id="dashboard-card-05-value">57.81</span></div>
                                    <div id="dashboard-card-05-deviation" class="text-sm rounded-full c1k3n c5idz"></div>
                                </div>
                            </div>
                            <div class="cbw8w">
                                <!-- Change the height attribute to adjust the chart height -->
                                <canvas id="dashboard-card-05" width="595" height="248"></canvas>
                            </div>
                        </div>
                        
                        <!-- Doughnut chart (Top Countries) -->
                        <div class="flex bg-white c2vpa ci500 c18r2 coz6m c1hly c5vqk cetff">
                            <header class="cghq3 cbv37 ctv3r cx3hp cz8qb">
                                <h2 class="text-gray-800 dark:text-gray-100 cgulq">Top Countries</h2>
                            </header>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/dashboard-charts.js for config -->
                            <div class="flex justify-center cetff cbw8w">
                                <div>
                                    <!-- Change the height attribute to adjust the chart height -->
                                    <canvas id="dashboard-card-06" width="389" height="260"></canvas>
                                </div>
                                <div id="dashboard-card-06-legend" class="cx3hp cfv15 cl05g">
                                    <ul class="flex flex-wrap justify-center -m-1"></ul>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Table (Top Channels) -->
                        <div class="bg-white c2vpa c18ad coz6m c1hly c5vqk">
                            <header class="cghq3 cbv37 ctv3r cx3hp cz8qb">
                                <h2 class="text-gray-800 dark:text-gray-100 cgulq">Top Channels</h2>
                            </header>
                            <div class="c9j8s">

                                <!-- Table -->
                                <div class="cocyr">
                                    <table class="c0zkc cn9pt c6btv">
                                        <!-- Table header -->
                                        <thead class="dark:bg-gray-700 rounded-sm clrir cmpw7 cdqku cgk1f c0ef0 c1iho">
                                            <tr>
                                                <th class="c27zx">
                                                    <div class="cgulq c2hoo">Source</div>
                                                </th>
                                                <th class="c27zx">
                                                    <div class="cgulq cydwr">Visitors</div>
                                                </th>
                                                <th class="c27zx">
                                                    <div class="cgulq cydwr">Revenues</div>
                                                </th>
                                                <th class="c27zx">
                                                    <div class="cgulq cydwr">Sales</div>
                                                </th>
                                                <th class="c27zx">
                                                    <div class="cgulq cydwr">Conversion</div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <!-- Table body -->
                                        <tbody class="text-sm ce8qq ca8s8 c1k3n co0ms">
                                            <!-- Row -->
                                            <tr>
                                                <td class="c27zx">
                                                    <div class="flex items-center">
                                                        <svg class="mr-2 coqgc czvpl" width="36" height="36" viewBox="0 0 36 36">
                                                            <circle fill="#24292E" cx="18" cy="18" r="18"></circle>
                                                            <path d="M18 10.2c-4.4 0-8 3.6-8 8 0 3.5 2.3 6.5 5.5 7.6.4.1.5-.2.5-.4V24c-2.2.5-2.7-1-2.7-1-.4-.9-.9-1.2-.9-1.2-.7-.5.1-.5.1-.5.8.1 1.2.8 1.2.8.7 1.3 1.9.9 2.3.7.1-.5.3-.9.5-1.1-1.8-.2-3.6-.9-3.6-4 0-.9.3-1.6.8-2.1-.1-.2-.4-1 .1-2.1 0 0 .7-.2 2.2.8.6-.2 1.3-.3 2-.3s1.4.1 2 .3c1.5-1 2.2-.8 2.2-.8.4 1.1.2 1.9.1 2.1.5.6.8 1.3.8 2.1 0 3.1-1.9 3.7-3.7 3.9.3.4.6.9.6 1.6v2.2c0 .2.1.5.6.4 3.2-1.1 5.5-4.1 5.5-7.6-.1-4.4-3.7-8-8.1-8z" fill="#FFF"></path>
                                                        </svg>
                                                        <div class="text-gray-800 dark:text-gray-100">Github.com</div>
                                                    </div>
                                                </td>
                                                <td class="c27zx">
                                                    <div class="cydwr">2.4K</div>
                                                </td>
                                                <td class="c27zx">
                                                    <div class="c612e cydwr">$3,877</div>
                                                </td>
                                                <td class="c27zx">
                                                    <div class="cydwr">267</div>
                                                </td>
                                                <td class="c27zx">
                                                    <div class="csh63 cydwr">4.7%</div>
                                                </td>
                                            </tr>
                                            <!-- Row -->
                                            <tr>
                                                <td class="c27zx">
                                                    <div class="flex items-center">
                                                        <svg class="mr-2 coqgc czvpl" width="36" height="36" viewBox="0 0 36 36">
                                                            <circle fill="#1877F2" cx="18" cy="18" r="18"></circle>
                                                            <path d="M16.023 26 16 19h-3v-3h3v-2c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V16H23l-1 3h-2.72v7h-3.257Z" fill="#FFF" fill-rule="nonzero"></path>
                                                        </svg>
                                                        <div class="text-gray-800 dark:text-gray-100">Facebook</div>
                                                    </div>
                                                </td>
                                                <td class="c27zx">
                                                    <div class="cydwr">2.2K</div>
                                                </td>
                                                <td class="c27zx">
                                                    <div class="c612e cydwr">$3,426</div>
                                                </td>
                                                <td class="c27zx">
                                                    <div class="cydwr">249</div>
                                                </td>
                                                <td class="c27zx">
                                                    <div class="csh63 cydwr">4.4%</div>
                                                </td>
                                            </tr>
                                            <!-- Row -->
                                            <tr>
                                                <td class="c27zx">
                                                    <div class="flex items-center">
                                                        <svg class="mr-2 coqgc czvpl" width="36" height="36" viewBox="0 0 36 36">
                                                            <circle fill="#EA4335" cx="18" cy="18" r="18"></circle>
                                                            <path d="M18 17v2.4h4.1c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C21.6 11.7 20 11 18.1 11c-3.9 0-7 3.1-7 7s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H18z" fill="#FFF" fill-rule="nonzero"></path>
                                                        </svg>
                                                        <div class="text-gray-800 dark:text-gray-100">Google (organic)</div>
                                                    </div>
                                                </td>
                                                <td class="c27zx">
                                                    <div class="cydwr">2.0K</div>
                                                </td>
                                                <td class="c27zx">
                                                    <div class="c612e cydwr">$2,444</div>
                                                </td>
                                                <td class="c27zx">
                                                    <div class="cydwr">224</div>
                                                </td>
                                                <td class="c27zx">
                                                    <div class="csh63 cydwr">4.2%</div>
                                                </td>
                                            </tr>
                                            <!-- Row -->
                                            <tr>
                                                <td class="c27zx">
                                                    <div class="flex items-center">
                                                        <svg class="mr-2 coqgc czvpl" width="36" height="36" viewBox="0 0 36 36">
                                                            <circle fill="#4BC9FF" cx="18" cy="18" r="18"></circle>
                                                            <path d="M26 14.3c-.1 1.6-1.2 3.7-3.3 6.4-2.2 2.8-4 4.2-5.5 4.2-.9 0-1.7-.9-2.4-2.6C14 19.9 13.4 15 12 15c-.1 0-.5.3-1.2.8l-.8-1c.8-.7 3.5-3.4 4.7-3.5 1.2-.1 2 .7 2.3 2.5.3 2 .8 6.1 1.8 6.1.9 0 2.5-3.4 2.6-4 .1-.9-.3-1.9-2.3-1.1.8-2.6 2.3-3.8 4.5-3.8 1.7.1 2.5 1.2 2.4 3.3z" fill="#FFF" fill-rule="nonzero"></path>
                                                        </svg>
                                                        <div class="text-gray-800 dark:text-gray-100">Vimeo.com</div>
                                                    </div>
                                                </td>
                                                <td class="c27zx">
                                                    <div class="cydwr">1.9K</div>
                                                </td>
                                                <td class="c27zx">
                                                    <div class="c612e cydwr">$2,236</div>
                                                </td>
                                                <td class="c27zx">
                                                    <div class="cydwr">220</div>
                                                </td>
                                                <td class="c27zx">
                                                    <div class="csh63 cydwr">4.2%</div>
                                                </td>
                                            </tr>
                                            <!-- Row -->
                                            <tr>
                                                <td class="c27zx">
                                                    <div class="flex items-center">
                                                        <svg class="mr-2 coqgc czvpl" width="36" height="36" viewBox="0 0 36 36">
                                                            <circle fill="#0E2439" cx="18" cy="18" r="18"></circle>
                                                            <path d="M14.232 12.818V23H11.77V12.818h2.46zM15.772 23V12.818h2.462v4.087h4.012v-4.087h2.456V23h-2.456v-4.092h-4.012V23h-2.461z" fill="#E6ECF4"></path>
                                                        </svg>
                                                        <div class="text-gray-800 dark:text-gray-100">Indiehackers.com</div>
                                                    </div>
                                                </td>
                                                <td class="c27zx">
                                                    <div class="cydwr">1.7K</div>
                                                </td>
                                                <td class="c27zx">
                                                    <div class="c612e cydwr">$2,034</div>
                                                </td>
                                                <td class="c27zx">
                                                    <div class="cydwr">204</div>
                                                </td>
                                                <td class="c27zx">
                                                    <div class="csh63 cydwr">3.9%</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                        
                        <!-- Line chart (Sales Over Time) -->
                        <div class="flex bg-white c2vpa ci500 coz6m c1hly c5vqk cetff">
                            <header class="flex items-center cghq3 cbv37 ctv3r cx3hp cz8qb">
                                <h2 class="text-gray-800 dark:text-gray-100 cgulq">Sales Over Time (all stores)</h2>
                            </header>
                            <div class="cx3hp c72q5">
                                <div class="flex flex-wrap cm3rx cgqme cw4lm cywa8">
                                    <div class="flex ce4zk">
                                        <div class="text-3xl font-bold text-gray-800 dark:text-gray-100 mr-2">$1,482</div>
                                        <div class="text-sm rounded-full cx6qj cz4gk c1k3n c5idz">-22%</div>
                                    </div>
                                    <div id="dashboard-card-08-legend" class="cu6vl cbw8w">
                                        <ul class="flex flex-wrap c51uw cw4lm"></ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/dashboard-charts.js for config -->
                            <div class="cbw8w">
                                <!-- Change the height attribute to adjust the chart height -->
                                <canvas id="dashboard-card-08" width="595" height="248"></canvas>
                            </div>
                        </div>

                        <!-- Stacked bar chart (Sales VS Refunds) -->
                        <div class="flex bg-white c2vpa ci500 coz6m c1hly c5vqk cetff">
                            <header class="flex items-center cghq3 cbv37 ctv3r cx3hp cz8qb">
                                <h2 class="text-gray-800 dark:text-gray-100 cgulq">Sales VS Refunds</h2>
                                <div class="cm84d c8bkw" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                                    <button class="block" href="#0" aria-haspopup="true" :aria-expanded="open" @focus="open = true" @focusout="open = false" @click.prevent="">
                                        <svg class="cmpw7 cdqku cbm9w" width="16" height="16" viewBox="0 0 16 16">
                                            <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                        </svg>
                                    </button>
                                    <div class="c7yzf cbh7j c5d6p cqdkw cvggx">
                                        <div class="bg-white dark:text-gray-100 border border-gray-200 cefhw c2vpa cxe43 cb8zv ccwri cx54e c6f83 cb2br cuvgf" x-show="open" x-transition:enter="cxxol cbmha c8uqq c98dn" x-transition:enter-start="opacity-0 cvtzh" x-transition:enter-end="cgcrn csdj3" x-transition:leave="cxxol cbmha c8uqq" x-transition:leave-start="cgcrn" x-transition:leave-end="opacity-0" x-cloak="">
                                            <div class="text-sm">Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</div>
                                        </div>
                                    </div>
                                </div>
                            </header>
                            <div class="cx3hp c72q5">
                                <div class="flex ce4zk">
                                    <div class="text-3xl font-bold text-gray-800 dark:text-gray-100 mr-2">+$6,796</div>
                                    <div class="text-sm rounded-full cx6qj cz4gk c1k3n c5idz">-34%</div>
                                </div>
                            </div>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/dashboard-charts.js for config -->
                            <div class="cbw8w">
                                <!-- Change the height attribute to adjust the chart height -->
                                <canvas id="dashboard-card-09" width="595" height="248"></canvas>
                            </div>
                        </div>

                        <!-- Card (Recent Activity) -->
                        <div class="bg-white c2vpa czyy4 coz6m c1hly c5vqk">
                            <header class="cghq3 cbv37 ctv3r cx3hp cz8qb">
                                <h2 class="text-gray-800 dark:text-gray-100 cgulq">Recent Activity</h2>
                            </header>
                            <div class="c9j8s">

                                <!-- Card content -->
                                <!-- "Today" group -->
                                <div>
                                    <header class="dark:bg-gray-700 rounded-sm clrir cmpw7 cgulq cdqku cgk1f c0ef0 c1iho c27zx">Today</header>
                                    <ul class="ce7qj">
                                        <!-- Item -->
                                        <li class="flex c9hxi">
                                            <div class="rounded-full cjnnd coqgc chhat chfzq cex0k c6oul">
                                                <svg class="cbm9w cpcyu cex0k c6oul" viewBox="0 0 36 36">
                                                    <path d="M18 10c-4.4 0-8 3.1-8 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L18.9 22H18c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex items-center text-sm cghq3 cbv37 ctv3r cbw8w cuvgf">
                                                <div class="flex cm3rx cbw8w">
                                                    <div class="cxb46"><a class="text-gray-800 dark:text-gray-100 cigpx c4t3r c1k3n" href="#0">Nick Mark</a> mentioned <a class="text-gray-800 dark:text-gray-100 cigpx c4t3r c1k3n" href="#0">Sara Smith</a> in a new post</div>
                                                    <div class="coqgc c4tdj c8bkw">
                                                        <a class="text-violet-500 c5ylh ceetm c1k3n" href="#0">View<span class="hidden c5fh5"> -&gt;</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="flex c9hxi">
                                            <div class="rounded-full cg902 coqgc chhat chfzq cex0k c6oul">
                                                <svg class="cbm9w cpcyu cex0k c6oul" viewBox="0 0 36 36">
                                                    <path d="M25 24H11a1 1 0 01-1-1v-5h2v4h12v-4h2v5a1 1 0 01-1 1zM14 13h8v2h-8z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex items-center text-sm cghq3 cbv37 ctv3r cbw8w cuvgf">
                                                <div class="flex cm3rx cbw8w">
                                                    <div class="cxb46">The post <a class="text-gray-800 dark:text-gray-100 cigpx c4t3r c1k3n" href="#0">Post Name</a> was removed by <a class="text-gray-800 dark:text-gray-100 cigpx c4t3r c1k3n" href="#0">Nick Mark</a></div>
                                                    <div class="coqgc c4tdj c8bkw">
                                                        <a class="text-violet-500 c5ylh ceetm c1k3n" href="#0">View<span class="hidden c5fh5"> -&gt;</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="flex c9hxi">
                                            <div class="rounded-full bg-green-500 coqgc chhat chfzq cex0k c6oul">
                                                <svg class="cbm9w cpcyu cex0k c6oul" viewBox="0 0 36 36">
                                                    <path d="M15 13v-3l-5 4 5 4v-3h8a1 1 0 000-2h-8zM21 21h-8a1 1 0 000 2h8v3l5-4-5-4v3z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex items-center text-sm cbw8w cuvgf">
                                                <div class="flex cm3rx cbw8w">
                                                    <div class="cxb46"><a class="text-gray-800 dark:text-gray-100 cigpx c4t3r c1k3n" href="#0">Patrick Sullivan</a> published a new <a class="text-gray-800 dark:text-gray-100 cigpx c4t3r c1k3n" href="#0">post</a></div>
                                                    <div class="coqgc c4tdj c8bkw">
                                                        <a class="text-violet-500 c5ylh ceetm c1k3n" href="#0">View<span class="hidden c5fh5"> -&gt;</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- "Yesterday" group -->
                                <div>
                                    <header class="dark:bg-gray-700 rounded-sm clrir cmpw7 cgulq cdqku cgk1f c0ef0 c1iho c27zx">Yesterday</header>
                                    <ul class="ce7qj">
                                        <!-- Item -->
                                        <li class="flex c9hxi">
                                            <div class="rounded-full curtj coqgc chhat chfzq cex0k c6oul">
                                                <svg class="cbm9w cpcyu cex0k c6oul" viewBox="0 0 36 36">
                                                    <path d="M23 11v2.085c-2.841.401-4.41 2.462-5.8 4.315-1.449 1.932-2.7 3.6-5.2 3.6h-1v2h1c3.5 0 5.253-2.338 6.8-4.4 1.449-1.932 2.7-3.6 5.2-3.6h3l-4-4zM15.406 16.455c.066-.087.125-.162.194-.254.314-.419.656-.872 1.033-1.33C15.475 13.802 14.038 13 12 13h-1v2h1c1.471 0 2.505.586 3.406 1.455zM24 21c-1.471 0-2.505-.586-3.406-1.455-.066.087-.125.162-.194.254-.316.422-.656.873-1.028 1.328.959.878 2.108 1.573 3.628 1.788V25l4-4h-3z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex items-center text-sm cghq3 cbv37 ctv3r cbw8w cuvgf">
                                                <div class="flex cm3rx cbw8w">
                                                    <div class="cxb46"><a class="text-gray-800 dark:text-gray-100 cigpx c4t3r c1k3n" href="#0">240+</a> users have subscribed to <a class="text-gray-800 dark:text-gray-100 cigpx c4t3r c1k3n" href="#0">Newsletter #1</a></div>
                                                    <div class="coqgc c4tdj c8bkw">
                                                        <a class="text-violet-500 c5ylh ceetm c1k3n" href="#0">View<span class="hidden c5fh5"> -&gt;</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="flex c9hxi">
                                            <div class="rounded-full cjnnd coqgc chhat chfzq cex0k c6oul">
                                                <svg class="cbm9w cpcyu cex0k c6oul" viewBox="0 0 36 36">
                                                    <path d="M18 10c-4.4 0-8 3.1-8 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L18.9 22H18c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex items-center text-sm cbw8w cuvgf">
                                                <div class="flex cm3rx cbw8w">
                                                    <div class="cxb46">The post <a class="text-gray-800 dark:text-gray-100 cigpx c4t3r c1k3n" href="#0">Post Name</a> was suspended by <a class="text-gray-800 dark:text-gray-100 cigpx c4t3r c1k3n" href="#0">Nick Mark</a></div>
                                                    <div class="coqgc c4tdj c8bkw">
                                                        <a class="text-violet-500 c5ylh ceetm c1k3n" href="#0">View<span class="hidden c5fh5"> -&gt;</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <!-- Card (Income/Expenses) -->
                        <div class="bg-white c2vpa czyy4 coz6m c1hly c5vqk">
                            <header class="cghq3 cbv37 ctv3r cx3hp cz8qb">
                                <h2 class="text-gray-800 dark:text-gray-100 cgulq">Income/Expenses</h2>
                            </header>
                            <div class="c9j8s">

                                <!-- Card content -->
                                <!-- "Today" group -->
                                <div>
                                    <header class="dark:bg-gray-700 rounded-sm clrir cmpw7 cgulq cdqku cgk1f c0ef0 c1iho c27zx">Today</header>
                                    <ul class="ce7qj">
                                        <!-- Item -->
                                        <li class="flex c9hxi">
                                            <div class="rounded-full cg902 coqgc chhat chfzq cex0k c6oul">
                                                <svg class="cbm9w cpcyu cex0k c6oul" viewBox="0 0 36 36">
                                                    <path d="M17.7 24.7l1.4-1.4-4.3-4.3H25v-2H14.8l4.3-4.3-1.4-1.4L11 18z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex items-center text-sm cghq3 cbv37 ctv3r cbw8w cuvgf">
                                                <div class="flex cm3rx cbw8w">
                                                    <div class="cxb46"><a class="text-gray-800 dark:text-gray-100 cigpx c4t3r c1k3n" href="#0">Qonto</a> billing</div>
                                                    <div class="cd40e coqgc c8bkw">
                                                        <span class="text-gray-800 dark:text-gray-100 c1k3n">-$49.88</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="flex c9hxi">
                                            <div class="rounded-full bg-green-500 coqgc chhat chfzq cex0k c6oul">
                                                <svg class="cbm9w cpcyu cex0k c6oul" viewBox="0 0 36 36">
                                                    <path d="M18.3 11.3l-1.4 1.4 4.3 4.3H11v2h10.2l-4.3 4.3 1.4 1.4L25 18z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex items-center text-sm cghq3 cbv37 ctv3r cbw8w cuvgf">
                                                <div class="flex cm3rx cbw8w">
                                                    <div class="cxb46"><a class="text-gray-800 dark:text-gray-100 cigpx c4t3r c1k3n" href="#0">Cruip.com</a> Market Ltd 70 Wilson St London</div>
                                                    <div class="cd40e coqgc c8bkw">
                                                        <span class="cdjj4 c1k3n">+249.88</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="flex c9hxi">
                                            <div class="rounded-full bg-green-500 coqgc chhat chfzq cex0k c6oul">
                                                <svg class="cbm9w cpcyu cex0k c6oul" viewBox="0 0 36 36">
                                                    <path d="M18.3 11.3l-1.4 1.4 4.3 4.3H11v2h10.2l-4.3 4.3 1.4 1.4L25 18z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex items-center text-sm cghq3 cbv37 ctv3r cbw8w cuvgf">
                                                <div class="flex cm3rx cbw8w">
                                                    <div class="cxb46"><a class="text-gray-800 dark:text-gray-100 cigpx c4t3r c1k3n" href="#0">Notion Labs Inc</a></div>
                                                    <div class="cd40e coqgc c8bkw">
                                                        <span class="cdjj4 c1k3n">+99.99</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="flex c9hxi">
                                            <div class="rounded-full bg-green-500 coqgc chhat chfzq cex0k c6oul">
                                                <svg class="cbm9w cpcyu cex0k c6oul" viewBox="0 0 36 36">
                                                    <path d="M18.3 11.3l-1.4 1.4 4.3 4.3H11v2h10.2l-4.3 4.3 1.4 1.4L25 18z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex items-center text-sm cghq3 cbv37 ctv3r cbw8w cuvgf">
                                                <div class="flex cm3rx cbw8w">
                                                    <div class="cxb46"><a class="text-gray-800 dark:text-gray-100 cigpx c4t3r c1k3n" href="#0">Market Cap Ltd</a></div>
                                                    <div class="cd40e coqgc c8bkw">
                                                        <span class="cdjj4 c1k3n">+1,200.88</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="flex c9hxi">
                                            <div class="rounded-full cvwbh coqgc chhat chfzq cex0k c6oul">
                                                <svg class="cdqku cbm9w cex0k c6oul" viewBox="0 0 36 36">
                                                    <path d="M21.477 22.89l-8.368-8.367a6 6 0 008.367 8.367zm1.414-1.413a6 6 0 00-8.367-8.367l8.367 8.367zM18 26a8 8 0 110-16 8 8 0 010 16z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex items-center text-sm cghq3 cbv37 ctv3r cbw8w cuvgf">
                                                <div class="flex cm3rx cbw8w">
                                                    <div class="cxb46"><a class="text-gray-800 dark:text-gray-100 cigpx c4t3r c1k3n" href="#0">App.com</a> Market Ltd 70 Wilson St London</div>
                                                    <div class="cd40e coqgc c8bkw">
                                                        <span class="text-gray-800 dark:text-gray-100 c8uxq c1k3n">+$99.99</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Item -->
                                        <li class="flex c9hxi">
                                            <div class="rounded-full cg902 coqgc chhat chfzq cex0k c6oul">
                                                <svg class="cbm9w cpcyu cex0k c6oul" viewBox="0 0 36 36">
                                                    <path d="M17.7 24.7l1.4-1.4-4.3-4.3H25v-2H14.8l4.3-4.3-1.4-1.4L11 18z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex items-center text-sm cbw8w cuvgf">
                                                <div class="flex cm3rx cbw8w">
                                                    <div class="cxb46"><a class="text-gray-800 dark:text-gray-100 cigpx c4t3r c1k3n" href="#0">App.com</a> Market Ltd 70 Wilson St London</div>
                                                    <div class="cd40e coqgc c8bkw">
                                                        <span class="text-gray-800 dark:text-gray-100 c1k3n">-$49.88</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
@endsection              
@section('page-scripts')
<script src="{{ asset('assets/admin/js/dashboard-charts.js') }}"></script>
@endsection