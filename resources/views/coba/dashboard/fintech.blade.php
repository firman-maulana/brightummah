@extends('coba.layouts.sidebar')
@section('content')

<div class="ch3yp cnbwt cs7xl clu2m c6btv clbq0 cxsfz">

                    <!-- Page header -->
                    <div class="c2g1r cwnq4 cnlq0 c6r0l">
                    
                        <!-- Left: Title -->
                        <div class="c2rn6 cdiog">
                            <h1 class="text-gray-800 dark:text-gray-100 font-bold c459m cbtcb">Fintech</h1>
                        </div>
                    
                        <!-- Right: Actions -->
                        <div class="cm3b7 c51uw ccww4 csdex cbe1i c4sak">
                            
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

                            <!-- Add account button -->
                            <button class="btn bg-gray-900 cdj8c cg0jr ch8z9 cilvw cyn7a">
                                <svg class="cbm9w cbmv0 coqgc" width="16" height="16" viewBox="0 0 16 16">
                                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                                </svg>
                                <span class="cyga5">Add Account</span>
                            </button>
                            
                        </div>
                    
                    </div>

                    <!-- Cards -->
                    <div class="c7nom ckn6o c4sak">

                        <!-- Page Intro -->                     
                        <div class="flex bg-white c2vpa coz6m c1hly c5vqk cetff">
                            <div class="cx3hp cwlwv">

                                <div class="cfe7d cq3sl clgee">
                                    <!-- Left side -->
                                    <div class="flex items-center cuqol cdiog">
                                        <!-- Avatar -->
                                        <div class="mr-4">
                                            <img class="inline-flex rounded-full" src="{{ asset('assets/admin/img/user-64-14.jpg') }}" width="64" height="64" alt="User">
                                        </div>
                                        <!-- User info -->
                                        <div>
                                            <div class="c6f83">Hey <strong class="text-gray-800 dark:text-gray-100 c1k3n">Mary</strong> 👋, this is your current balance:</div>
                                            <div class="text-3xl font-bold c612e">$47,347.09</div>
                                        </div>
                                    </div>
                                    <!-- Right side -->
                                    <ul class="flex flex-wrap justify-end cpc8j cjgpi coqgc cg40v">
                                        <li>
                                            <a class="block" href="#0">
                                                <img class="rounded-full cex0k c6oul" src="{{ asset('assets/admin/img/company-icon-06.svg') }}" width="36" height="36" alt="Account 01">
                                            </a>
                                        </li>
                                        <li>
                                            <a class="block" href="#0">
                                                <img class="rounded-full cex0k c6oul" src="{{ asset('assets/admin/img/company-icon-02.svg') }}" width="36" height="36" alt="Account 02">
                                            </a>
                                        </li>
                                        <li>
                                            <a class="block" href="#0">
                                                <img class="rounded-full cex0k c6oul" src="{{ asset('assets/admin/img/company-icon-03.svg') }}" width="36" height="36" alt="Account 03">
                                            </a>
                                        </li>
                                        <li>
                                            <button class="flex justify-center items-center rounded-full bg-white border border-gray-200 text-violet-500 cc0oq cghq3 cspbm c2vpa cxxol c5vqk cex0k c6oul">
                                                <span class="cn8jz">Add new account</span>
                                                <svg class="cbm9w" width="16" height="16" viewBox="0 0 16 16">
                                                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                                                </svg>
                                            </button>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        
                        <!-- Line chart (Portfolio Returns) -->
                        <div class="flex bg-white c2vpa c18ad coz6m c1hly c5vqk cetff">
                            <header class="flex items-center cghq3 cbv37 ctv3r cx3hp cz8qb">
                                <h2 class="text-gray-800 dark:text-gray-100 cgulq">Portfolio Returns</h2>
                            </header>
                            <div class="cx3hp c72q5">
                                <div class="flex flex-wrap cm3rx cgqme cw4lm cywa8">
                                    <div class="flex items-center">
                                        <div class="text-3xl font-bold text-gray-800 dark:text-gray-100 mr-2">244.7%</div>
                                        <div class="text-sm text-gray-500 dark:text-gray-400"><span class="text-gray-800 dark:text-gray-100 c1k3n">17.4%</span> AVG</div>
                                    </div>
                                    <div id="fintech-card-01-legend" class="cu6vl cbw8w">
                                        <ul class="flex flex-wrap c51uw cw4lm"></ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/fintech-charts.js for config -->
                            <div class="cbw8w">
                                <!-- Change the height attribute to adjust the chart height -->
                                <canvas id="fintech-card-01" width="800" height="300"></canvas>
                            </div>
                        </div>

                        <!-- Credit Card -->
                        <div class="flex clpet c18r2 coz6m c76xn cygks c1hly c5vqk cetff">
                            <header class="flex items-center ccjcw ctv3r cx3hp cz8qb">
                                <h2 class="cgulq cy3ej">Active Cards</h2>
                            </header>
                            <div class="flex cetff cav8x cx3hp cwlwv">
                                <!-- CC container -->
                                <div class="cwcgd cqtnx cm84d c91aq clu2m c6btv c42lz">
                                    <!-- Credit Card -->
                                    <div class="cz0zi cpome cxe43 crn59 cimsy c1hly cm84d csusu">
                                        <div class="flex cm3rx cm84d cetff cav8x">
                                            <!-- Logo on card -->
                                            <svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <defs>
                                                    <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="icon1-b">
                                                        <stop stop-color="#B7ACFF" offset="0%"></stop>
                                                        <stop stop-color="#E6E1FF" offset="100%"></stop>
                                                    </linearGradient>
                                                    <linearGradient x1="50%" y1="24.537%" x2="50%" y2="100%" id="icon1-c">
                                                        <stop stop-color="#4634B1" offset="0%"></stop>
                                                        <stop stop-color="#4634B1" stop-opacity="0" offset="100%"></stop>
                                                    </linearGradient>
                                                    <path id="icon1-a" d="M16 0l16 32-16-5-16 5z"></path>
                                                </defs>
                                                <g transform="rotate(90 16 16)" fill="none" fill-rule="evenodd">
                                                    <mask id="icon1-d" fill="#fff">
                                                        <use xlink:href="#icon1-a"></use>
                                                    </mask>
                                                    <use fill="url(#icon1-b)" xlink:href="#icon1-a"></use>
                                                    <path fill="url(#icon1-c)" mask="url(#icon1-d)" d="M16-6h20v38H16z"></path>
                                                </g>
                                            </svg>
                                            <!-- Card number -->
                                            <div class="flex font-bold cm3rx ccqra c079l cy3ej c7x0x">
                                                <span>****</span>
                                                <span>****</span>
                                                <span>****</span>
                                                <span>7328</span>
                                            </div>
                                            <!-- Card footer -->
                                            <div class="flex items-center cm3rx cm84d cjxkd cvggx">
                                                <!-- Card expiration -->
                                                <div class="text-sm font-bold ccqra c079l cy3ej cp3jk">
                                                    <span>EXP 12/24</span>
                                                    <span>CVC ***</span>
                                                </div>
                                            </div>
                                            <!-- Mastercard logo -->
                                            <svg class="cqdkw cq5bq cgky2" width="48" height="28" viewBox="0 0 48 28">
                                                <circle fill="#F0BB33" cx="34" cy="14" r="14" fill-opacity=".8"></circle>
                                                <circle fill="#FF5656" cx="14" cy="14" r="14" fill-opacity=".8"></circle>
                                            </svg>
                                        </div>
                                    </div>
                                    <!-- Options button -->
                                    <div class="inline-flex cqdkw cgky2 cli41" x-data="{ open: false }">
                                        <button class="rounded-full" :class="open ? 'cyhlg dark:cevqu text-gray-500 c0zkc': 'bg-white dark:cevqu cdqku cg12x dark:cdqku czr0s'" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
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
                                </div>
                                <!-- Details -->
                                <div class="flex justify-center cetff c7gr8 cbw8w">
                                    <div class="text-gray-500 cgulq c0ef0 c1iho cxg65">Details</div>
                                    <div class="cweej">
                                        <div>
                                            <div class="flex text-sm cm3rx c6f83">
                                                <div class="ckbo4">Payment Limits</div>
                                                <div class="cdqku caf78">$780,00 <span class="text-gray-500 dark:text-gray-400">/</span> $1,500.00</div>
                                            </div>
                                            <div class="h-2 rounded cuy6d cm84d c6btv">
                                                <div class="rounded-full cievy cqdkw cini7" aria-hidden="true" style="width: 50%;"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex text-sm cm3rx c6f83">
                                                <div class="ckbo4">ATM Limits</div>
                                                <div class="cdqku caf78">$179,00 <span class="text-gray-500 dark:text-gray-400">/</span> $1,000.00</div>
                                            </div>
                                            <div class="h-2 rounded cuy6d cm84d c6btv">
                                                <div class="rounded-full cievy cqdkw cini7" aria-hidden="true" style="width: 35%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Bar chart (Cash Flow) -->
                        <div class="flex bg-white c2vpa ci500 coz6m c1hly c5vqk cetff">
                            <header class="cghq3 cbv37 ctv3r cx3hp cz8qb">
                                <h2 class="text-gray-800 dark:text-gray-100 cgulq">Cash Flow</h2>
                            </header>
                            <div class="cx3hp c72q5">
                                <div class="flex flex-wrap cm3rx cgqme cw4lm cywa8">
                                    <div class="flex items-center">
                                        <div class="text-3xl font-bold text-gray-800 dark:text-gray-100 mr-2">$1,347.09</div>
                                        <div class="text-sm text-gray-500 dark:text-gray-400">Net</div>
                                    </div>
                                    <div id="fintech-card-03-legend" class="cu6vl cbw8w">
                                        <ul class="flex flex-wrap c51uw cw4lm"></ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/fintech-charts.js for config -->
                            <div class="cbw8w">
                                <!-- Change the height attribute to adjust the chart height -->
                                <canvas id="fintech-card-03" width="595" height="248"></canvas>
                            </div>
                        </div>

                        <!-- Horizontal bar chart (Cash Flow by Account) -->
                        <div class="flex bg-white c2vpa ci500 coz6m c1hly c5vqk cetff">
                            <header class="cghq3 cbv37 ctv3r cx3hp cz8qb">
                                <h2 class="text-gray-800 dark:text-gray-100 cgulq">Cash Flow by Account</h2>
                            </header>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/fintech-charts.js for config -->
                            <div id="fintech-card-04-legend" class="cx3hp cz8qb">
                                <ul class="flex flex-wrap cw4lm"></ul>
                            </div>
                            <div class="cbw8w">
                                <!-- Change the height attribute to adjust the chart height -->
                                <canvas id="fintech-card-04" width="595" height="248"></canvas>
                            </div>
                        </div>

                        <!-- Table (Recent Expenses) -->
                        <div class="bg-white c2vpa czyy4 coz6m c1hly c5vqk">
                            <header class="cghq3 cbv37 ctv3r cx3hp cz8qb">
                                <h2 class="text-gray-800 dark:text-gray-100 cgulq">Recent Expenses</h2>
                            </header>
                            <div class="c9j8s">

                                <!-- Table -->
                                <div class="cocyr">
                                    <table class="c0zkc cn9pt c6btv">
                                        <!-- Table header -->
                                        <thead class="dark:bg-gray-700 rounded-sm clrir cmpw7 cdqku cgk1f c0ef0 c1iho">
                                            <tr>
                                                <th class="cq84g c27zx">
                                                    <div class="cgulq c2hoo">Counterparty</div>
                                                </th>
                                                <th class="cq84g c27zx">
                                                    <div class="cgulq c2hoo">Account</div>
                                                </th>
                                                <th class="cq84g c27zx">
                                                    <div class="cgulq c2hoo">Date</div>
                                                </th>
                                                <th class="cq84g c27zx">
                                                    <div class="cgulq chvik">Amount</div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <!-- Table body -->
                                        <tbody class="text-sm ce8qq ca8s8 co0ms">
                                            <!-- Row -->
                                            <tr>
                                                <td class="cq84g c27zx">
                                                    <div class="flex items-center">
                                                        <div class="rounded-full mr-2 cjnnd coqgc czvpl">
                                                            <svg class="cbm9w cpcyu cex0k c6oul" viewBox="0 0 36 36">
                                                                <path d="M24.446 19.335a2.5 2.5 0 00-3.522 3.194c-.845.63-1.87.97-2.924.971a4.979 4.979 0 01-1.113-.135 4.436 4.436 0 01-1.343 1.682 6.91 6.91 0 006.9-1.165 2.5 2.5 0 002-4.547h.002zM20.431 11.938a2.5 2.5 0 10-.4 2.014 5.027 5.027 0 012.723 3.078c.148-.018.297-.028.446-.03a4.5 4.5 0 011.7.334 7.023 7.023 0 00-4.469-5.396zM14.969 20.25a2.49 2.49 0 00-1.932-1.234A4.624 4.624 0 0113 18.5a4.97 4.97 0 011.348-3.391 4.456 4.456 0 01-.788-2.016A6.989 6.989 0 0011 18.5c.003.391.04.781.11 1.166a2.5 2.5 0 103.859.584z"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="text-gray-800 dark:text-gray-100 c1k3n">Form Builder CP</div>
                                                    </div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div>Revolut</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div>22/01/2024</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="text-gray-800 dark:text-gray-100 c1k3n chvik">-$1,299.22</div>
                                                </td>
                                            </tr>
                                            <!-- Row -->
                                            <tr>
                                                <td class="cq84g c27zx">
                                                    <div class="flex items-center">
                                                        <div class="rounded-full mr-2 bg-gray-900 coqgc czvpl">
                                                            <svg class="cyn7a cbm9w cex0k c6oul" viewBox="0 0 36 36">
                                                                <path d="M12.014 25.752v-4.998c.196.42.495.749.896.987s.877.357 1.428.357a3.08 3.08 0 0 0 1.694-.483c.504-.322.9-.789 1.19-1.4.29-.611.434-1.328.434-2.149s-.145-1.535-.434-2.142c-.29-.607-.686-1.071-1.19-1.393a3.08 3.08 0 0 0-1.694-.483c-.55 0-1.027.119-1.428.357a2.21 2.21 0 0 0-.896.987v-1.246H9.256v11.606h2.758Zm1.414-6.062a1.34 1.34 0 0 1-1.022-.434c-.27-.29-.406-.686-.406-1.19 0-.495.135-.887.406-1.176a1.34 1.34 0 0 1 1.022-.434c.43 0 .777.142 1.043.427.266.285.399.679.399 1.183 0 .513-.133.912-.399 1.197-.266.285-.614.427-1.043.427Zm10.108 2.408c.924 0 1.771-.217 2.541-.651a4.8 4.8 0 0 0 1.827-1.813c.448-.775.672-1.647.672-2.618 0-.97-.222-1.843-.665-2.618a4.75 4.75 0 0 0-1.82-1.813 5.113 5.113 0 0 0-2.555-.651c-.924 0-1.773.217-2.548.651a4.786 4.786 0 0 0-1.834 1.813c-.448.775-.672 1.647-.672 2.618 0 .97.224 1.843.672 2.618a4.786 4.786 0 0 0 1.834 1.813 5.125 5.125 0 0 0 2.548.651Zm0-2.562c-.7 0-1.25-.229-1.652-.686-.401-.457-.602-1.069-.602-1.834 0-.784.2-1.402.602-1.855.401-.453.952-.679 1.652-.679s1.248.226 1.645.679c.397.453.595 1.071.595 1.855 0 .765-.2 1.377-.602 1.834-.401.457-.947.686-1.638.686Z"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="text-gray-800 dark:text-gray-100 c1k3n">PublicOne Inc.</div>
                                                    </div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div>Qonto</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div>22/01/2024</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="text-gray-800 dark:text-gray-100 c1k3n chvik">-$272.88</div>
                                                </td>
                                            </tr>
                                            <!-- Row -->
                                            <tr>
                                                <td class="cq84g c27zx">
                                                    <div class="flex items-center">
                                                        <div class="rounded-full mr-2 bg-green-500 coqgc czvpl">
                                                            <svg class="cbm9w cpcyu cex0k c6oul" viewBox="0 0 36 36">
                                                                <path d="M15 17h-3v-5a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v5h-3v-2.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0-.5.5V17Zm10 2a1 1 0 0 1 1 1v4a1 1 0 0 1-2 0v-1H12v1a1 1 0 0 1-2 0v-4a1 1 0 0 1 1-1h14Z"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="text-gray-800 dark:text-gray-100 c1k3n">Imperial Hotel ****</div>
                                                    </div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div>Revolut</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div>22/01/2024</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="text-gray-800 dark:text-gray-100 c1k3n chvik">-$999.44</div>
                                                </td>
                                            </tr>
                                            <!-- Row -->
                                            <tr>
                                                <td class="cq84g c27zx">
                                                    <div class="flex items-center">
                                                        <div class="rounded-full mr-2 curtj coqgc czvpl">
                                                            <svg class="cbm9w cpcyu cex0k c6oul" viewBox="0 0 36 36">
                                                                <path d="m26.3 16.1-2.6-.9-1.8-4.6c-.1-.4-.5-.6-.9-.6h-9c-.6 0-1 .4-1 1v12c0 .6.4 1 1 1h3.3c.6 1.2 1.8 2 3.2 2 1.4 0 2.6-.8 3.2-2.1.1 0 .2.1.3.1h4c.6 0 1-.4 1-1v-6c0-.4-.3-.8-.7-.9ZM25 22h-3c-.2-1.7-1.7-3-3.5-3s-3.2 1.3-3.4 3H13V12h7.3l1.7 4.4c.1.3.3.5.6.6l2.4.7V22Z"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="text-gray-800 dark:text-gray-100 c1k3n">Uber</div>
                                                    </div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div>N26</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div>22/01/2024</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="text-gray-800 dark:text-gray-100 c1k3n chvik">-$1,029.77</div>
                                                </td>
                                            </tr>
                                            <!-- Row -->
                                            <tr>
                                                <td class="cq84g c27zx">
                                                    <div class="flex items-center">
                                                        <div class="rounded-full mr-2 colbo coqgc czvpl">
                                                            <svg class="cbm9w cpcyu cex0k c6oul" viewBox="0 0 36 36">
                                                                <path d="M18 17v2.4h4.1c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C21.6 11.7 20 11 18.1 11c-3.9 0-7 3.1-7 7s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H18Z"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="text-gray-800 dark:text-gray-100 c1k3n">Google Limited UK</div>
                                                    </div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div>N26</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div>22/01/2024</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="text-gray-800 dark:text-gray-100 c1k3n chvik">-$1,921.26</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                                <div class="cghq3 cbv37 cydwr cr4kg c9hxi">
                                    <a class="block text-sm text-violet-500 c5ylh ceetm c1k3n cqynh ckyhn" href="#0">View All -&gt;</a>
                                </div>

                            </div>
                        </div>

                        <!-- Table (Recent Earnings) -->
                        <div class="bg-white c2vpa czyy4 coz6m c1hly c5vqk">
                            <header class="cghq3 cbv37 ctv3r cx3hp cz8qb">
                                <h2 class="text-gray-800 dark:text-gray-100 cgulq">Recent Earnings</h2>
                            </header>
                            <div class="c9j8s">

                                <!-- Table -->
                                <div class="cocyr">
                                    <table class="c0zkc cn9pt c6btv">
                                        <!-- Table header -->
                                        <thead class="dark:bg-gray-700 rounded-sm clrir cmpw7 cdqku cgk1f c0ef0 c1iho">
                                            <tr>
                                                <th class="cq84g c27zx">
                                                    <div class="cgulq c2hoo">Counterparty</div>
                                                </th>
                                                <th class="cq84g c27zx">
                                                    <div class="cgulq c2hoo">Account</div>
                                                </th>
                                                <th class="cq84g c27zx">
                                                    <div class="cgulq c2hoo">Date</div>
                                                </th>
                                                <th class="cq84g c27zx">
                                                    <div class="cgulq chvik">Amount</div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <!-- Table body -->
                                        <tbody class="text-sm ce8qq ca8s8 co0ms">
                                            <!-- Row -->
                                            <tr>
                                                <td class="cq84g c27zx">
                                                    <div class="flex items-center">
                                                        <div class="rounded-full mr-2 curtj coqgc czvpl">
                                                            <svg class="cbm9w cpcyu cex0k c6oul" viewBox="0 0 36 36">
                                                                <path d="M18 26a8 8 0 1 1 8-8 8.009 8.009 0 0 1-8 8Zm0-14a6 6 0 1 0 0 12 6 6 0 0 0 0-12Z"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="text-gray-800 dark:text-gray-100 c1k3n">Acme LTD UK</div>
                                                    </div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div>Revolut</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div>22/01/2024</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="cdjj4 c1k3n chvik">+$1,299.22</div>
                                                </td>
                                            </tr>
                                            <!-- Row -->
                                            <tr>
                                                <td class="cq84g c27zx">
                                                    <div class="flex items-center">
                                                        <div class="rounded-full mr-2 cjnnd coqgc czvpl">
                                                            <svg class="cbm9w cpcyu cex0k c6oul" viewBox="0 0 36 36">
                                                                <path d="M24.446 19.335a2.5 2.5 0 00-3.522 3.194c-.845.63-1.87.97-2.924.971a4.979 4.979 0 01-1.113-.135 4.436 4.436 0 01-1.343 1.682 6.91 6.91 0 006.9-1.165 2.5 2.5 0 002-4.547h.002zM20.431 11.938a2.5 2.5 0 10-.4 2.014 5.027 5.027 0 012.723 3.078c.148-.018.297-.028.446-.03a4.5 4.5 0 011.7.334 7.023 7.023 0 00-4.469-5.396zM14.969 20.25a2.49 2.49 0 00-1.932-1.234A4.624 4.624 0 0113 18.5a4.97 4.97 0 011.348-3.391 4.456 4.456 0 01-.788-2.016A6.989 6.989 0 0011 18.5c.003.391.04.781.11 1.166a2.5 2.5 0 103.859.584z"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="text-gray-800 dark:text-gray-100 c1k3n">Web.com</div>
                                                    </div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div>Qonto</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div>22/01/2024</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="cdjj4 c1k3n chvik">+$1,200.88</div>
                                                </td>
                                            </tr>
                                            <!-- Row -->
                                            <tr>
                                                <td class="cq84g c27zx">
                                                    <div class="flex items-center">
                                                        <div class="rounded-full mr-2 cxd1x coqgc czvpl">
                                                            <svg class="cbm9w cpcyu cex0k c6oul" viewBox="0 0 36 36">
                                                                <path d="M18 10.2c-4.4 0-8 3.6-8 8 0 3.5 2.3 6.5 5.5 7.6.4.1.5-.2.5-.4V24c-2.2.5-2.7-1-2.7-1-.4-.9-.9-1.2-.9-1.2-.7-.5.1-.5.1-.5.8.1 1.2.8 1.2.8.7 1.3 1.9.9 2.3.7.1-.5.3-.9.5-1.1-1.8-.2-3.6-.9-3.6-4 0-.9.3-1.6.8-2.1-.1-.2-.4-1 .1-2.1 0 0 .7-.2 2.2.8.6-.2 1.3-.3 2-.3s1.4.1 2 .3c1.5-1 2.2-.8 2.2-.8.4 1.1.2 1.9.1 2.1.5.6.8 1.3.8 2.1 0 3.1-1.9 3.7-3.7 3.9.3.4.6.9.6 1.6v2.2c0 .2.1.5.6.4 3.2-1.1 5.5-4.1 5.5-7.6-.1-4.4-3.7-8-8.1-8Z"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="text-gray-800 dark:text-gray-100 c1k3n">Github Inc.</div>
                                                    </div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div>N26</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div>22/01/2024</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="cdjj4 c1k3n chvik">+$499.99</div>
                                                </td>
                                            </tr>
                                            <!-- Row -->
                                            <tr>
                                                <td class="cq84g c27zx">
                                                    <div class="flex items-center">
                                                        <div class="rounded-full mr-2 coqgc czvpl">
                                                            <img class="rounded-full cex0k c6oul" src="{{ asset('assets/admin/img/user-64-14.jpg') }}" width="36" height="36" alt="User 05">
                                                        </div>
                                                        <div class="text-gray-800 dark:text-gray-100 c1k3n">Aprilynne Pills</div>
                                                    </div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div>Revolut</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div>22/01/2024</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="cdjj4 c1k3n chvik">+$2,179.36</div>
                                                </td>
                                            </tr>
                                            <!-- Row -->
                                            <tr>
                                                <td class="cq84g c27zx">
                                                    <div class="flex items-center">
                                                        <div class="rounded-full mr-2 cg902 coqgc czvpl">
                                                            <svg class="cbm9w cpcyu cex0k c6oul" viewBox="0 0 36 36">
                                                                <path d="M18 21a3 3 0 1 1 0-6 3 3 0 0 1 0 6Zm-4.95 3.363-.707-.707a8 8 0 0 1 0-11.312l.707-.707 1.414 1.414-.707.707a6 6 0 0 0 0 8.484l.707.707-1.414 1.414Zm9.9 0-1.414-1.414.707-.707a6 6 0 0 0 0-8.484l-.707-.707 1.414-1.414.707.707a8 8 0 0 1 0 11.312l-.707.707Z"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="text-gray-800 dark:text-gray-100 c1k3n">Form Builder PRO</div>
                                                    </div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div>Revolut</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div>22/01/2024</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="cdjj4 c1k3n chvik">+$249.88</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                                <div class="cghq3 cbv37 cydwr cr4kg c9hxi">
                                    <a class="block text-sm text-violet-500 c5ylh ceetm c1k3n cqynh ckyhn" href="#0">View All -&gt;</a>
                                </div>

                            </div>
                        </div>
                        
                        <!-- Line chart (Portfolio Returns) -->
                        <div class="flex bg-white c2vpa conof c18r2 coz6m c1hly c5vqk cetff">
                            <header class="flex items-center cghq3 cbv37 ctv3r cx3hp cz8qb">
                                <h2 class="text-gray-800 dark:text-gray-100 cgulq">Portfolio Returns</h2>
                            </header>
                            <div class="cx3hp c72q5">
                                <div class="text-sm caf78 c6f83">Hey Mark, you're very close to your goal:</div>
                                <div class="flex items-center">
                                    <div class="text-3xl font-bold text-gray-800 dark:text-gray-100 mr-2">$5,247.09</div>
                                    <div class="text-sm"><span class="cirto c1k3n">97.4%</span></div>
                                </div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">Out of $6,000</div>
                            </div>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/fintech-charts.js for config -->
                            <div class="cbw8w">
                                <!-- Change the height attribute to adjust the chart height -->
                                <canvas id="fintech-card-07" width="389" height="262"></canvas>
                            </div>
                        </div>
                        
                        <!-- Line chart (Growth Portfolio) -->
                        <div class="flex bg-white c2vpa ci500 c18r2 coz6m c1hly c5vqk cetff">
                            <header class="flex items-center cghq3 cbv37 ctv3r cx3hp cz8qb">
                                <h2 class="text-gray-800 dark:text-gray-100 cgulq">Growth Portfolio</h2>
                            </header>
                            <div class="cx3hp c72q5">
                                <div class="text-sm caf78 c6f83">Hey Mark, by age 65 you could have:</div>
                                <div class="text-3xl font-bold text-gray-800 dark:text-gray-100">$2M - $3.5M</div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">Risk level 8</div>
                            </div>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/fintech-charts.js for config -->
                            <div class="cbw8w">
                                <!-- Change the height attribute to adjust the chart height -->
                                <canvas id="fintech-card-08" width="389" height="262"></canvas>
                            </div>
                        </div>
                        
                        <!-- Pie chart (Portfolio Value) -->
                        <div class="flex bg-white c2vpa ci500 c18r2 coz6m c1hly c5vqk cetff">
                            <header class="flex items-center cghq3 cbv37 ctv3r cx3hp cz8qb">
                                <h2 class="text-gray-800 dark:text-gray-100 cgulq">Portfolio Value</h2>
                            </header>
                            <div class="cx3hp c72q5">
                                <div class="text-sm caf78 c6f83">Hey Mark, here is the value of your portfolio:</div>
                                <div class="text-3xl font-bold text-gray-800 dark:text-gray-100">$224,807.27</div>
                            </div>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/fintech-charts.js for config -->
                            <div class="flex justify-center cetff cbw8w">
                                <div>
                                    <!-- Change the height attribute to adjust the chart height -->
                                    <canvas id="fintech-card-09" width="389" height="220"></canvas>
                                </div>
                                <div id="fintech-card-09-legend" class="cx3hp cz8qb">
                                    <ul class="flex flex-wrap justify-center -m-1"></ul>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Line charts (Stock graphs) -->
                        <div class="flex bg-white c2vpa ci500 cdjoa coz6m c1hly c5vqk cetff">
                            <div class="cx3hp cfkjc">
                                <header>
                                    <h3 class="text-sm text-gray-500 cgulq c0ef0 cu6vl"><span class="text-gray-800 dark:text-gray-100">Google</span> - Alphabet</h3>
                                    <div class="font-bold text-gray-800 dark:text-gray-100 cbtcb cu6vl">$2,860.96</div>
                                    <div class="text-sm"><span class="czr3n c1k3n">-$49 (4,7%)</span> - Today</div>
                                </header>
                            </div>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/fintech-charts.js for config -->
                            <div class="cbw8w">
                                <!-- Change the height attribute to adjust the chart height -->
                                <canvas id="fintech-card-10" width="286" height="98"></canvas>
                            </div>
                        </div>
                        <div class="flex bg-white c2vpa ci500 cdjoa coz6m c1hly c5vqk cetff">
                            <div class="cx3hp cfkjc">
                                <header>
                                    <h3 class="text-sm text-gray-500 cgulq c0ef0 cu6vl"><span class="text-gray-800 dark:text-gray-100">Amzn</span> - Amazon Inc.</h3>
                                    <div class="font-bold text-gray-800 dark:text-gray-100 cbtcb cu6vl">$3,400.35</div>
                                    <div class="text-sm"><span class="cdjj4 c1k3n">+$142 (3,7%)</span> - Today</div>
                                </header>
                            </div>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/fintech-charts.js for config -->
                            <div class="cbw8w">
                                <!-- Change the height attribute to adjust the chart height -->
                                <canvas id="fintech-card-11" width="286" height="98"></canvas>
                            </div>
                        </div>
                        <div class="flex bg-white c2vpa ci500 cdjoa coz6m c1hly c5vqk cetff">
                            <div class="cx3hp cfkjc">
                                <header>
                                    <h3 class="text-gray-500 cgulq c0ef0 c1iho cu6vl"><span class="text-gray-800 dark:text-gray-100">Twtr</span> - Twitter Inc.</h3>
                                    <div class="font-bold text-gray-800 dark:text-gray-100 cbtcb cu6vl">$43.07</div>
                                    <div class="text-sm"><span class="cdjj4 c1k3n">+$4,20 (9,2%)</span> - Today</div>
                                </header>
                            </div>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/fintech-charts.js for config -->
                            <div class="cbw8w">
                                <!-- Change the height attribute to adjust the chart height -->
                                <canvas id="fintech-card-12" width="286" height="98"></canvas>
                            </div>
                        </div>
                        <div class="flex bg-white c2vpa ci500 cdjoa coz6m c1hly c5vqk cetff">
                            <div class="cx3hp cfkjc">
                                <header>
                                    <h3 class="text-sm text-gray-500 cgulq c0ef0 cu6vl"><span class="text-gray-800 dark:text-gray-100">Facebook</span> - Meta Inc.</h3>
                                    <div class="font-bold text-gray-800 dark:text-gray-100 cbtcb cu6vl">$333.79</div>
                                    <div class="text-sm"><span class="cdjj4 c1k3n">+$19,70 (4%)</span> - Today</div>
                                </header>
                            </div>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/fintech-charts.js for config -->
                            <div class="cbw8w">
                                <!-- Change the height attribute to adjust the chart height -->
                                <canvas id="fintech-card-13" width="286" height="98"></canvas>
                            </div>
                        </div>

                        <!-- Table (Market Trends) -->
                        <div class="bg-white c2vpa coz6m c1hly c5vqk">
                            <header class="cghq3 cbv37 ctv3r cx3hp cz8qb">
                                <h2 class="text-gray-800 dark:text-gray-100 cgulq">Market Trends</h2>
                            </header>
                            <div class="c9j8s">

                                <!-- Table -->
                                <div class="cocyr">
                                    <table class="c0zkc cn9pt c6btv">
                                        <!-- Table header -->
                                        <thead class="dark:bg-gray-700 rounded-sm clrir cmpw7 cdqku cgk1f c0ef0 c1iho">
                                            <tr>
                                                <th class="cq84g c27zx">
                                                    <div class="cgulq c2hoo">Market</div>
                                                </th>
                                                <th class="cq84g c27zx">
                                                    <div class="cgulq c2hoo">Mkt Cap</div>
                                                </th>
                                                <th class="cq84g c27zx">
                                                    <div class="cgulq c2hoo">Chart</div>
                                                </th>
                                                <th class="cq84g c27zx">
                                                    <div class="cgulq c2hoo">Price</div>
                                                </th>
                                                <th class="cq84g c27zx">
                                                    <div class="cgulq c2hoo">Chg. (24h)</div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <!-- Table body -->
                                        <tbody class="text-sm ce8qq ca8s8 c1k3n co0ms">
                                            <!-- Row -->
                                            <tr>
                                                <td class="cq84g ccxtb c27zx">
                                                    <div class="flex items-center">
                                                        <svg class="mr-2 coqgc czvpl" width="36" height="36" viewBox="0 0 36 36">
                                                            <circle fill="#1F2937" cx="18" cy="18" r="18"></circle>
                                                            <path fill="#12C57C" d="M18 10h-.189v2.926h.19c1.355 0 2.63.527 3.587 1.486a5.08 5.08 0 0 1 1.273 2.125h-5.05v2.926h8.057l.026-.159c.13-.79.14-1.593.033-2.389h.002l-.013-.085-.022-.134c0-.007-.002-.013-.003-.02l-.023-.139h-.002A8 8 0 0 0 18 10Zm-4.867 6.537h-3l-.026.16c-.071.43-.107.87-.107 1.303 0 4.411 3.589 8 8 8h.19v-2.926H18a5.04 5.04 0 0 1-3.588-1.486A5.041 5.041 0 0 1 12.926 18c0-.415.05-.828.149-1.228l.058-.235Z"></path>
                                                        </svg>
                                                        <div>
                                                            <div class="text-gray-800 dark:text-gray-100 c0ef0">Gvolt</div>
                                                            <div class="text-gray-500 c1iho">Greenvolt Energias</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="czb4f c2hoo">33.94B</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <!-- Chart built with Chart.js 3 -->
                                                    <!-- Check out src/js/fintech-charts.js for config -->
                                                    <div class="cj6f4">
                                                        <!-- Change the height attribute to adjust the chart height -->
                                                        <canvas id="fintech-card-14-a" width="96" height="32"></canvas>
                                                    </div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="c2hoo">$43.07</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="c612e c2hoo">+$4.20 (4%)</div>
                                                </td>
                                            </tr>
                                            <!-- Row -->
                                            <tr>
                                                <td class="cq84g ccxtb c27zx">
                                                    <div class="flex items-center">
                                                        <svg class="mr-2 coqgc czvpl" width="36" height="36" viewBox="0 0 36 36">
                                                            <circle fill="#1877F2" cx="18" cy="18" r="18"></circle>
                                                            <path d="M16.023 26 16 19h-3v-3h3v-2c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V16H23l-1 3h-2.72v7h-3.257Z" fill="#FFF" fill-rule="nonzero"></path>
                                                        </svg>
                                                        <div>
                                                            <div class="text-gray-800 dark:text-gray-100 c0ef0">Fb</div>
                                                            <div class="text-gray-500 c1iho">Meta Inc.</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="czb4f c2hoo">903.71B</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <!-- Chart built with Chart.js 3 -->
                                                    <!-- Check out src/js/fintech-charts.js for config -->
                                                    <div class="cj6f4">
                                                        <!-- Change the height attribute to adjust the chart height -->
                                                        <canvas id="fintech-card-14-b" width="96" height="32"></canvas>
                                                    </div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="c2hoo">$324.81</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="c612e c2hoo">+$12.20 (3.7%)</div>
                                                </td>
                                            </tr>
                                            <!-- Row -->
                                            <tr>
                                                <td class="cq84g ccxtb c27zx">
                                                    <div class="flex items-center">
                                                        <svg class="mr-2 coqgc czvpl" width="36" height="36" viewBox="0 0 36 36">
                                                            <circle fill="#EA4335" cx="18" cy="18" r="18"></circle>
                                                            <path d="M18 17v2.4h4.1c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C21.6 11.7 20 11 18.1 11c-3.9 0-7 3.1-7 7s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H18Z" fill="#FFF" fill-rule="nonzero"></path>
                                                        </svg>
                                                        <div>
                                                            <div class="text-gray-800 dark:text-gray-100 c0ef0">Googl</div>
                                                            <div class="text-gray-500 c1iho">Alphabet Inc.</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="czb4f c2hoo">1.70T</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <!-- Chart built with Chart.js 3 -->
                                                    <!-- Check out src/js/fintech-charts.js for config -->
                                                    <div class="cj6f4">
                                                        <!-- Change the height attribute to adjust the chart height -->
                                                        <canvas id="fintech-card-14-c" width="96" height="32"></canvas>
                                                    </div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="c2hoo">$2,860.96</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="czr3n c2hoo">-$12.20 (3.7%)</div>
                                                </td>
                                            </tr>
                                            <!-- Row -->
                                            <tr>
                                                <td class="cq84g ccxtb c27zx">
                                                    <div class="flex items-center">
                                                        <svg class="mr-2 coqgc czvpl" width="36" height="36" viewBox="0 0 36 36">
                                                            <circle fill="#1F2937" cx="18" cy="18" r="18"></circle>
                                                            <path d="M18.725 10.48C19.853 9.006 21.422 9 21.422 9s.233 1.384-.888 2.717c-1.197 1.424-2.557 1.191-2.557 1.191s-.256-1.12.748-2.429Zm-.605 3.398c.58 0 1.658-.79 3.06-.79 2.414 0 3.364 1.7 3.364 1.7s-1.858.94-1.858 3.221c0 2.573 2.314 3.46 2.314 3.46s-1.617 4.506-3.802 4.506c-1.003 0-1.783-.67-2.84-.67-1.078 0-2.147.695-2.843.695C13.52 26 11 21.725 11 18.29c0-3.381 2.133-5.155 4.134-5.155 1.3 0 2.31.743 2.986.743Z" fill="#FFF" fill-opacity=".9" fill-rule="nonzero"></path>
                                                        </svg>
                                                        <div>
                                                            <div class="text-gray-800 dark:text-gray-100 c0ef0">Aapl</div>
                                                            <div class="text-gray-500 c1iho">Apple Inc.</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="czb4f c2hoo">2.77T</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <!-- Chart built with Chart.js 3 -->
                                                    <!-- Check out src/js/fintech-charts.js for config -->
                                                    <div class="cj6f4">
                                                        <!-- Change the height attribute to adjust the chart height -->
                                                        <canvas id="fintech-card-14-d" width="96" height="32"></canvas>
                                                    </div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="c2hoo">$168.55</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="c612e c2hoo">+$7.44 (1.4%)</div>
                                                </td>
                                            </tr>
                                            <!-- Row -->
                                            <tr>
                                                <td class="cq84g ccxtb c27zx">
                                                    <div class="flex items-center">
                                                        <svg class="mr-2 coqgc czvpl" width="36" height="36" viewBox="0 0 36 36">
                                                            <circle fill="#3B7AFF" cx="18" cy="18" r="18"></circle>
                                                            <path d="M18.12 13.894c1.673 0 3.002 1.016 3.506 2.528H25C24.389 13.19 21.679 11 18.146 11 14.135 11 11 13.998 11 18.013S14.055 25 18.146 25c3.454 0 6.216-2.19 6.828-5.449h-3.348c-.478 1.512-1.807 2.555-3.48 2.555-2.312 0-3.932-1.747-3.932-4.093 0-2.372 1.595-4.12 3.905-4.12Z" fill="#FFF" fill-rule="nonzero"></path>
                                                        </svg>
                                                        <div>
                                                            <div class="text-gray-800 dark:text-gray-100 c0ef0">Coin</div>
                                                            <div class="text-gray-500 c1iho">Coinbase Global Inc.</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="czb4f c2hoo">50.89B</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <!-- Chart built with Chart.js 3 -->
                                                    <!-- Check out src/js/fintech-charts.js for config -->
                                                    <div class="cj6f4">
                                                        <!-- Change the height attribute to adjust the chart height -->
                                                        <canvas id="fintech-card-14-e" width="96" height="32"></canvas>
                                                    </div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="c2hoo">$236.48</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="czr3n c2hoo">-$24,30 (6.2%)</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>

@endsection