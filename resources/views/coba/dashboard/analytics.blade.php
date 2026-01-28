@extends('coba.layouts.sidebar')
@section('content')

<div class="ch3yp cnbwt cs7xl clu2m c6btv clbq0 cxsfz">

                    <!-- Page header -->
                    <div class="c2g1r cwnq4 cnlq0 cgd7w">
                    
                        <!-- Left: Title -->
                        <div class="c2rn6 cdiog">
                            <h1 class="text-gray-800 dark:text-gray-100 font-bold c459m cbtcb">Analytics</h1>
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
                            
                        </div>
                    
                    </div>

                    <!-- Cards -->
                    <div class="c7nom ckn6o c4sak">

                        <!-- Line chart (Analytics) -->
                        <div class="flex bg-white c2vpa c18ad coz6m c1hly c5vqk cetff">
                            <header class="flex items-center cghq3 cbv37 ctv3r cx3hp cz8qb">
                                <h2 class="text-gray-800 dark:text-gray-100 cgulq">Analytics</h2>
                            </header>
                            <div class="cx3hp cwn3v">
                                <div class="flex flex-wrap ccue7">
                                    <!-- Unique Visitors -->
                                    <div class="flex items-center cuvgf">
                                        <div class="clxab">
                                            <div class="flex items-center">
                                                <div class="text-3xl font-bold text-gray-800 dark:text-gray-100 mr-2">24.7K</div>
                                                <div class="text-sm cdjj4 c1k3n">+49%</div>
                                            </div>
                                            <div class="text-sm text-gray-500 dark:text-gray-400">Unique Visitors</div>
                                        </div>
                                        <div class="hidden dark:bg-gray-700 cvwbh cyqqd clxab cn8zk cue4z" aria-hidden="true"></div>
                                    </div>
                                    <!-- Total Pageviews -->
                                    <div class="flex items-center cuvgf">
                                        <div class="clxab">
                                            <div class="flex items-center">
                                                <div class="text-3xl font-bold text-gray-800 dark:text-gray-100 mr-2">56.9K</div>
                                                <div class="text-sm cdjj4 c1k3n">+7%</div>
                                            </div>
                                            <div class="text-sm text-gray-500 dark:text-gray-400">Total Pageviews</div>
                                        </div>
                                        <div class="hidden dark:bg-gray-700 cvwbh cyqqd clxab cn8zk cue4z" aria-hidden="true"></div>
                                    </div>
                                    <!-- Bounce Rate -->
                                    <div class="flex items-center cuvgf">
                                        <div class="clxab">
                                            <div class="flex items-center">
                                                <div class="text-3xl font-bold text-gray-800 dark:text-gray-100 mr-2">54%</div>
                                                <div class="text-sm czr3n c1k3n">-7%</div>
                                            </div>
                                            <div class="text-sm text-gray-500 dark:text-gray-400">Bounce Rate</div>
                                        </div>
                                        <div class="hidden dark:bg-gray-700 cvwbh cyqqd clxab cn8zk cue4z" aria-hidden="true"></div>
                                    </div>
                                    <!-- Visit Duration-->
                                    <div class="flex items-center">
                                        <div>
                                            <div class="flex items-center">
                                                <div class="text-3xl font-bold text-gray-800 dark:text-gray-100 mr-2">2m 56s</div>
                                                <div class="text-sm czr3n c1k3n">+7%</div>
                                            </div>
                                            <div class="text-sm text-gray-500 dark:text-gray-400">Visit Duration</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/analytics-charts.js for config -->
                            <div class="cbw8w">
                                <!-- Change the height attribute to adjust the chart height -->
                                <canvas id="analytics-card-01" width="800" height="300"></canvas>
                            </div>
                        </div>

                        <!--  Line chart (Active Users Right Now) -->
                        <div class="flex bg-white c2vpa c18r2 coz6m c1hly c5vqk cetff">
                            <header class="cghq3 cbv37 ctv3r cx3hp cz8qb">
                                <h2 class="text-gray-800 dark:text-gray-100 cgulq">Active Users Right Now</h2>
                            </header>
                            <!-- Card content -->
                            <div class="flex cetff cav8x">
                                <!-- Live visitors number -->
                                <div class="cx3hp c72q5">
                                    <div class="flex items-center">
                                        <!-- Red dot -->
                                        <div class="flex items-center justify-center w-3 h-3 cm84d chfzq" aria-hidden="true">
                                            <div class="inline-flex rounded-full cu2fn cattr cr9x4 cqdkw cav8x c6btv"></div>
                                            <div class="inline-flex rounded-full cg902 cm84d csh1p co6q2"></div>
                                        </div>
                                        <!-- Vistors number -->
                                        <div>
                                            <div class="text-3xl font-bold text-gray-800 dark:text-gray-100 mr-2">347</div>
                                            <div class="text-sm text-gray-500 dark:text-gray-400">Live visitors</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Chart built with Chart.js 3 -->
                                <!-- Check out src/js/analytics-charts.js for config -->
                                <div>
                                    <!-- Change the height attribute to adjust the chart height -->
                                    <canvas id="analytics-card-02" width="389" height="70"></canvas>
                                </div>

                                <!-- Table -->
                                <div class="cbw8w cx3hp cqynh cmyi8">
                                    <div class="cocyr">
                                        <table class="c0zkc cn9pt c6btv">
                                            <!-- Table header -->
                                            <thead class="cmpw7 cdqku c0ef0 c1iho">
                                                <tr>
                                                    <th class="cuvgf">
                                                        <div class="cgulq c2hoo">Top pages</div>
                                                    </th>
                                                    <th class="cuvgf">
                                                        <div class="cgulq chvik">Active users</div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <!-- Table body -->
                                            <tbody class="text-sm ce8qq ca8s8 co0ms">
                                                <!-- Row -->
                                                <tr>
                                                    <td class="cuvgf">
                                                        <div class="c2hoo">preview.cruip.com/open-pro/</div>
                                                    </td>
                                                    <td class="cuvgf">
                                                        <div class="text-gray-800 c1k3n chvik">94</div>
                                                    </td>
                                                </tr>
                                                <!-- Row -->
                                                <tr>
                                                    <td class="cuvgf">
                                                        <div class="c2hoo">preview.cruip.com/simple/</div>
                                                    </td>
                                                    <td class="cuvgf">
                                                        <div class="text-gray-800 c1k3n chvik">42</div>
                                                    </td>
                                                </tr>
                                                <!-- Row -->
                                                <tr>
                                                    <td class="cuvgf">
                                                        <div class="c2hoo">cruip.com/unlimited/</div>
                                                    </td>
                                                    <td class="cuvgf">
                                                        <div class="text-gray-800 c1k3n chvik">12</div>
                                                    </td>
                                                </tr>
                                                <!-- Row -->
                                                <tr>
                                                    <td class="cuvgf">
                                                        <div class="c2hoo">preview.cruip.com/twist/</div>
                                                    </td>
                                                    <td class="cuvgf">
                                                        <div class="text-gray-800 c1k3n chvik">4</div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- Card footer -->
                                <div class="chvik cx3hp c1rbs">
                                    <a class="text-sm text-violet-500 c5ylh ceetm c1k3n" href="#0">Real-Time Report -&gt;</a>
                                </div>
                            </div>
                        </div>

                        <!-- Stacked bar chart (Acquisition Channels) -->
                        <div class="flex bg-white c2vpa ci500 coz6m c1hly c5vqk cetff">
                            <header class="flex items-center cghq3 cbv37 ctv3r cx3hp cz8qb">
                                <h2 class="text-gray-800 dark:text-gray-100 cgulq">Acquisition Channels</h2>
                            </header>
                            <div class="cx3hp cz8qb">
                                <div id="analytics-card-03-legend" class="cu6vl cbw8w">
                                    <ul class="flex flex-wrap cw4lm"></ul>
                                </div>
                            </div>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/analytics-charts.js for config -->
                            <div class="cbw8w">
                                <!-- Change the height attribute to adjust the chart height -->
                                <canvas id="analytics-card-03" width="595" height="248"></canvas>
                            </div>
                        </div>

                        <!-- Horizontal bar chart (Audience Overview) -->
                        <div class="flex bg-white c2vpa ci500 coz6m c1hly c5vqk cetff">
                            <header class="cghq3 cbv37 ctv3r cx3hp cz8qb">
                                <h2 class="text-gray-800 dark:text-gray-100 cgulq">Audience Overview</h2>
                            </header>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/analytics-charts.js for config -->
                            <div id="analytics-card-04-legend" class="cx3hp cz8qb">
                                <ul class="flex flex-wrap cw4lm"></ul>
                            </div>
                            <div class="cbw8w">
                                <!-- Change the height attribute to adjust the chart height -->
                                <canvas id="analytics-card-04" width="595" height="248"></canvas>
                            </div>
                        </div>

                        <!-- Report card (Top Channels) -->
                        <div class="flex bg-white c2vpa ci500 c18r2 coz6m c1hly c5vqk cetff">
                            <header class="cghq3 cbv37 ctv3r cx3hp cz8qb">
                                <h2 class="text-gray-800 dark:text-gray-100 cgulq">Top Channels</h2>
                            </header>
                            <div class="cbw8w c9j8s">
                                <div class="flex cetff cav8x">
                                    <!-- Card content -->
                                    <div class="cbw8w">
                                        <ul class="flex cmpw7 cm3rx cgulq cdqku ch3kz c0ef0 c1iho c9hxi">
                                            <li>Source</li>
                                            <li>Visitors</li>
                                        </ul>

                                        <ul class="text-sm text-gray-800 dark:text-gray-100 c1647 cdiog c7gr8">
                                            <!-- Item -->
                                            <li class="cm84d c9hxi cwn3v">
                                                <div class="c8y7a c9v1h cjnvs cqdkw cini7" aria-hidden="true" style="width: 82%;"></div>
                                                <div class="flex cm3rx ch3kz cm84d">
                                                    <div>Google</div>
                                                    <div class="c1k3n">4.7K</div>
                                                </div>
                                            </li>
                                            <!-- Item -->
                                            <li class="cm84d c9hxi cwn3v">
                                                <div class="c8y7a c9v1h cjnvs cqdkw cini7" aria-hidden="true" style="width: 70%;"></div>
                                                <div class="flex cm3rx ch3kz cm84d">
                                                    <div>Indiehackers.com</div>
                                                    <div class="c1k3n">4.2K</div>
                                                </div>
                                            </li>
                                            <!-- Item -->
                                            <li class="cm84d c9hxi cwn3v">
                                                <div class="c8y7a c9v1h cjnvs cqdkw cini7" aria-hidden="true" style="width: 60%;"></div>
                                                <div class="flex cm3rx ch3kz cm84d">
                                                    <div>DuckDuckGo</div>
                                                    <div class="c1k3n">3.4K</div>
                                                </div>
                                            </li>
                                            <!-- Item -->
                                            <li class="cm84d c9hxi cwn3v">
                                                <div class="c8y7a c9v1h cjnvs cqdkw cini7" aria-hidden="true" style="width: 44%;"></div>
                                                <div class="flex cm3rx ch3kz cm84d">
                                                    <div>Hacker News</div>
                                                    <div class="c1k3n">3.1K</div>
                                                </div>
                                            </li>
                                            <!-- Item -->
                                            <li class="cm84d c9hxi cwn3v">
                                                <div class="c8y7a c9v1h cjnvs cqdkw cini7" aria-hidden="true" style="width: 40%;"></div>
                                                <div class="flex cm3rx ch3kz cm84d">
                                                    <div>Github.com</div>
                                                    <div class="c1k3n">2.2K</div>
                                                </div>
                                            </li>
                                            <!-- Item -->
                                            <li class="cm84d c9hxi cwn3v">
                                                <div class="c8y7a c9v1h cjnvs cqdkw cini7" aria-hidden="true" style="width: 30%;"></div>
                                                <div class="flex cm3rx ch3kz cm84d">
                                                    <div>Madewithvuejs.com</div>
                                                    <div class="c1k3n">1.7K</div>
                                                </div>
                                            </li>
                                            <!-- Item -->
                                            <li class="cm84d c9hxi cwn3v">
                                                <div class="c8y7a c9v1h cjnvs cqdkw cini7" aria-hidden="true" style="width: 22%;"></div>
                                                <div class="flex cm3rx ch3kz cm84d">
                                                    <div>Producthunt.com</div>
                                                    <div class="c1k3n">924</div>
                                                </div>
                                            </li>
                                            <!-- Item -->
                                            <li class="cm84d c9hxi cwn3v">
                                                <div class="c8y7a c9v1h cjnvs cqdkw cini7" aria-hidden="true" style="width: 12%;"></div>
                                                <div class="flex cm3rx ch3kz cm84d">
                                                    <div>Dev.to</div>
                                                    <div class="c1k3n">696</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="cghq3 cbv37 cydwr cr4kg cqynh ckyhn">
                                        <a class="text-sm text-violet-500 c5ylh ceetm c1k3n" href="#0">Channels Report -&gt;</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Report card (Top Pages) -->
                        <div class="flex bg-white c2vpa ci500 c18r2 coz6m c1hly c5vqk cetff">
                            <header class="cghq3 cbv37 ctv3r cx3hp cz8qb">
                                <h2 class="text-gray-800 dark:text-gray-100 cgulq">Top Pages</h2>
                            </header>
                            <div class="cbw8w c9j8s">
                                <div class="flex cetff cav8x">
                                    <!-- Card content -->
                                    <div class="cbw8w">
                                        <ul class="flex cmpw7 cm3rx cgulq cdqku ch3kz c0ef0 c1iho c9hxi">
                                            <li>Source</li>
                                            <li>Pageviews</li>
                                        </ul>

                                        <ul class="text-sm text-gray-800 dark:text-gray-100 c1647 cdiog c7gr8">
                                            <!-- Item -->
                                            <li class="cm84d c9hxi cwn3v">
                                                <div class="bg-green-50 c418g cjnvs cqdkw cini7" aria-hidden="true" style="width: 82%;"></div>
                                                <div class="flex cm3rx ch3kz cm84d">
                                                    <div>cruip.com/</div>
                                                    <div class="c1k3n">28K</div>
                                                </div>
                                            </li>
                                            <!-- Item -->
                                            <li class="cm84d c9hxi cwn3v">
                                                <div class="bg-green-50 c418g cjnvs cqdkw cini7" aria-hidden="true" style="width: 70%;"></div>
                                                <div class="flex cm3rx ch3kz cm84d">
                                                    <div>preview.cruip.com/open-pro/</div>
                                                    <div class="c1k3n">12K</div>
                                                </div>
                                            </li>
                                            <!-- Item -->
                                            <li class="cm84d c9hxi cwn3v">
                                                <div class="bg-green-50 c418g cjnvs cqdkw cini7" aria-hidden="true" style="width: 60%;"></div>
                                                <div class="flex cm3rx ch3kz cm84d">
                                                    <div>preview.cruip.com/appy/</div>
                                                    <div class="c1k3n">9.7K</div>
                                                </div>
                                            </li>
                                            <!-- Item -->
                                            <li class="cm84d c9hxi cwn3v">
                                                <div class="bg-green-50 c418g cjnvs cqdkw cini7" aria-hidden="true" style="width: 44%;"></div>
                                                <div class="flex cm3rx ch3kz cm84d">
                                                    <div>cruip.com/unlimited/</div>
                                                    <div class="c1k3n">9.2K</div>
                                                </div>
                                            </li>
                                            <!-- Item -->
                                            <li class="cm84d c9hxi cwn3v">
                                                <div class="bg-green-50 c418g cjnvs cqdkw cini7" aria-hidden="true" style="width: 40%;"></div>
                                                <div class="flex cm3rx ch3kz cm84d">
                                                    <div>preview.cruip.com/simple/</div>
                                                    <div class="c1k3n">7K</div>
                                                </div>
                                            </li>
                                            <!-- Item -->
                                            <li class="cm84d c9hxi cwn3v">
                                                <div class="bg-green-50 c418g cjnvs cqdkw cini7" aria-hidden="true" style="width: 30%;"></div>
                                                <div class="flex cm3rx ch3kz cm84d">
                                                    <div>cruip.com/about-us/</div>
                                                    <div class="c1k3n">6.4K</div>
                                                </div>
                                            </li>
                                            <!-- Item -->
                                            <li class="cm84d c9hxi cwn3v">
                                                <div class="bg-green-50 c418g cjnvs cqdkw cini7" aria-hidden="true" style="width: 22%;"></div>
                                                <div class="flex cm3rx ch3kz cm84d">
                                                    <div>docs.cruip.com/</div>
                                                    <div class="c1k3n">5.4K</div>
                                                </div>
                                            </li>
                                            <!-- Item -->
                                            <li class="cm84d c9hxi cwn3v">
                                                <div class="bg-green-50 c418g cjnvs cqdkw cini7" aria-hidden="true" style="width: 12%;"></div>
                                                <div class="flex cm3rx ch3kz cm84d">
                                                    <div>preview.cruip.com/twist/</div>
                                                    <div class="c1k3n">2.2K</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="cghq3 cbv37 cydwr cr4kg cqynh ckyhn">
                                        <a class="text-sm text-violet-500 c5ylh ceetm c1k3n" href="#0">Page Report -&gt;</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Report card (Top Countries) -->
                        <div class="flex bg-white c2vpa ci500 c18r2 coz6m c1hly c5vqk cetff">
                            <header class="cghq3 cbv37 ctv3r cx3hp cz8qb">
                                <h2 class="text-gray-800 dark:text-gray-100 cgulq">Top Countries</h2>
                            </header>
                            <div class="cbw8w c9j8s">
                                <div class="flex cetff cav8x">
                                    <!-- Card content -->
                                    <div class="cbw8w">
                                        <ul class="flex cmpw7 cm3rx cgulq cdqku ch3kz c0ef0 c1iho c9hxi">
                                            <li>Source</li>
                                            <li>Sessions</li>
                                        </ul>

                                        <ul class="text-sm text-gray-800 dark:text-gray-100 c1647 cdiog c7gr8">
                                            <!-- Item -->
                                            <li class="cm84d c9hxi cwn3v">
                                                <div class="cxutl cw69r cjnvs cqdkw cini7" aria-hidden="true" style="width: 82%;"></div>
                                                <div class="flex cm3rx ch3kz cm84d">
                                                    <div>🇨🇮 Ireland</div>
                                                    <div class="c1k3n">4.2K</div>
                                                </div>
                                            </li>
                                            <!-- Item -->
                                            <li class="cm84d c9hxi cwn3v">
                                                <div class="cxutl cw69r cjnvs cqdkw cini7" aria-hidden="true" style="width: 70%;"></div>
                                                <div class="flex cm3rx ch3kz cm84d">
                                                    <div>🇺🇸 United States</div>
                                                    <div class="c1k3n">3.4K</div>
                                                </div>
                                            </li>
                                            <!-- Item -->
                                            <li class="cm84d c9hxi cwn3v">
                                                <div class="cxutl cw69r cjnvs cqdkw cini7" aria-hidden="true" style="width: 60%;"></div>
                                                <div class="flex cm3rx ch3kz cm84d">
                                                    <div>🇩🇪 Germany</div>
                                                    <div class="c1k3n">1.6k</div>
                                                </div>
                                            </li>
                                            <!-- Item -->
                                            <li class="cm84d c9hxi cwn3v">
                                                <div class="cxutl cw69r cjnvs cqdkw cini7" aria-hidden="true" style="width: 44%;"></div>
                                                <div class="flex cm3rx ch3kz cm84d">
                                                    <div>🇮🇹 Italy</div>
                                                    <div class="c1k3n">1.2k</div>
                                                </div>
                                            </li>
                                            <!-- Item -->
                                            <li class="cm84d c9hxi cwn3v">
                                                <div class="cxutl cw69r cjnvs cqdkw cini7" aria-hidden="true" style="width: 40%;"></div>
                                                <div class="flex cm3rx ch3kz cm84d">
                                                    <div>🇬🇧 United Kingdom</div>
                                                    <div class="c1k3n">912</div>
                                                </div>
                                            </li>
                                            <!-- Item -->
                                            <li class="cm84d c9hxi cwn3v">
                                                <div class="cxutl cw69r cjnvs cqdkw cini7" aria-hidden="true" style="width: 30%;"></div>
                                                <div class="flex cm3rx ch3kz cm84d">
                                                    <div>🇫🇷 France</div>
                                                    <div class="c1k3n">677</div>
                                                </div>
                                            </li>
                                            <!-- Item -->
                                            <li class="cm84d c9hxi cwn3v">
                                                <div class="cxutl cw69r cjnvs cqdkw cini7" aria-hidden="true" style="width: 22%;"></div>
                                                <div class="flex cm3rx ch3kz cm84d">
                                                    <div>🇮🇳 India</div>
                                                    <div class="c1k3n">449</div>
                                                </div>
                                            </li>
                                            <!-- Item -->
                                            <li class="cm84d c9hxi cwn3v">
                                                <div class="cxutl cw69r cjnvs cqdkw cini7" aria-hidden="true" style="width: 12%;"></div>
                                                <div class="flex cm3rx ch3kz cm84d">
                                                    <div>🇸🇬 Singapore</div>
                                                    <div class="c1k3n">269</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="cghq3 cbv37 cydwr cr4kg cqynh ckyhn">
                                        <a class="text-sm text-violet-500 c5ylh ceetm c1k3n" href="#0">Countries Report -&gt;</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Doughnut chart (Sessions By Device) -->
                        <div class="flex bg-white c2vpa ci500 c18r2 coz6m c1hly c5vqk cetff">
                            <header class="cghq3 cbv37 ctv3r cx3hp cz8qb">
                                <h2 class="text-gray-800 dark:text-gray-100 cgulq">Sessions By Device</h2>
                            </header>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/analytics-charts.js for config -->
                            <div class="flex justify-center cetff cbw8w">
                                <div>
                                    <!-- Change the height attribute to adjust the chart height -->
                                    <canvas id="analytics-card-08" width="389" height="260"></canvas>
                                </div>
                                <div id="analytics-card-08-legend" class="cx3hp cfv15 cl05g">
                                    <ul class="flex flex-wrap justify-center -m-1"></ul>
                                </div>
                            </div>
                        </div>

                        <!-- Doughnut chart (Visit By Age Category) -->
                        <div class="flex bg-white c2vpa ci500 c18r2 coz6m c1hly c5vqk cetff">
                            <header class="cghq3 cbv37 ctv3r cx3hp cz8qb">
                                <h2 class="text-gray-800 dark:text-gray-100 cgulq">Sessions By Age</h2>
                            </header>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/analytics-charts.js for config -->
                            <div class="flex justify-center cetff cbw8w">
                                <div>
                                    <!-- Change the height attribute to adjust the chart height -->
                                    <canvas id="analytics-card-09" width="389" height="260"></canvas>
                                </div>
                                <div id="analytics-card-09-legend" class="cx3hp cfv15 cl05g">
                                    <ul class="flex flex-wrap justify-center -m-1"></ul>
                                </div>
                            </div>
                        </div>

                        <!-- Polar chart (Sessions By Gender) -->
                        <div class="flex bg-white c2vpa ci500 c18r2 coz6m c1hly c5vqk cetff">
                            <header class="cghq3 cbv37 ctv3r cx3hp cz8qb">
                                <h2 class="text-gray-800 dark:text-gray-100 cgulq">Sessions By Gender</h2>
                            </header>
                            <!-- Chart built with Chart.js 3 -->
                            <!-- Check out src/js/analytics-charts.js for config -->
                            <div class="flex justify-center cetff cbw8w">
                                <div>
                                    <!-- Change the height attribute to adjust the chart height -->
                                    <canvas id="analytics-card-10" width="389" height="260"></canvas>
                                </div>
                                <div id="analytics-card-10-legend" class="cx3hp cfv15 cl05g">
                                    <ul class="flex flex-wrap justify-center -m-1"></ul>
                                </div>
                            </div>
                        </div>

                        <!-- Table (Top Products) -->
                        <div class="bg-white c2vpa coz6m c1hly c5vqk">
                            <header class="cghq3 cbv37 ctv3r cx3hp cz8qb">
                                <h2 class="text-gray-800 dark:text-gray-100 cgulq">Top Products</h2>
                            </header>
                            <div class="c9j8s">

                                <!-- Table -->
                                <div class="cocyr">
                                    <table class="c0zkc cn9pt c6btv">
                                        <!-- Table header -->
                                        <thead class="dark:bg-gray-700 rounded-sm clrir cmpw7 cdqku cgk1f c0ef0 c1iho">
                                            <tr>
                                                <th class="cq84g c27zx">
                                                    <div class="cgulq c2hoo">Product</div>
                                                </th>
                                                <th class="cq84g c27zx">
                                                    <div class="cgulq c2hoo">Created by</div>
                                                </th>
                                                <th class="cq84g c27zx">
                                                    <div class="cgulq c2hoo">Category</div>
                                                </th>
                                                <th class="cq84g c27zx">
                                                    <div class="cgulq cydwr">Total impressions</div>
                                                </th>
                                                <th class="cq84g c27zx">
                                                    <div class="cgulq cydwr">Top country</div>
                                                </th>
                                                <th class="cq84g c27zx">
                                                    <div class="cgulq cydwr">CR</div>
                                                </th>
                                                <th class="cq84g c27zx">
                                                    <div class="cgulq c2hoo">Value</div>
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
                                                    <div class="flex cjgpi coqgc cg40v">
                                                        <a class="block" href="#0">
                                                            <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/user-28-01.jpg') }}" width="28" height="28" alt="User 01">
                                                        </a>
                                                        <a class="block" href="#0">
                                                            <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/user-28-02.jpg') }}" width="28" height="28" alt="User 02">
                                                        </a>
                                                        <a class="block" href="#0">
                                                            <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/user-28-03.jpg') }}" width="28" height="28" alt="User 03">
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="flex items-center">
                                                        <svg class="mr-2 cmpw7 cdqku cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                            <path d="M4.3 4.5c1.9-1.9 5.1-1.9 7 0 .7.7 1.2 1.7 1.4 2.7l2-.3c-.2-1.5-.9-2.8-1.9-3.8C10.1.4 5.7.4 2.9 3.1L.7.9 0 7.3l6.4-.7-2.1-2.1zM15.6 8.7l-6.4.7 2.1 2.1c-1.9 1.9-5.1 1.9-7 0-.7-.7-1.2-1.7-1.4-2.7l-2 .3c.2 1.5.9 2.8 1.9 3.8 1.4 1.4 3.1 2 4.9 2 1.8 0 3.6-.7 4.9-2l2.2 2.2.8-6.4z"></path>
                                                        </svg>
                                                        <div>Subscription</div>
                                                    </div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="cydwr">20,929</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="cydwr c7x0x">🇺🇸</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="cydwr">27.4%</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="cdjj4 c1k3n c2hoo">$12,499.77</div>
                                                </td>
                                            </tr>
                                            <!-- Row -->
                                            <tr>
                                                <td class="cq84g c27zx">
                                                    <div class="flex items-center">
                                                        <div class="rounded-full mr-2 bg-green-500 coqgc czvpl">
                                                            <svg class="cbm9w cpcyu cex0k c6oul" viewBox="0 0 36 36">
                                                                <path d="M11 22.012a1 1 0 01-.707-1.707l4.5-4.5a1 1 0 011.414 0l3.293 3.293 4.793-4.793a1 1 0 111.414 1.414l-5.5 5.5a1 1 0 01-1.414 0L15.5 17.926l-3.793 3.793a1 1 0 01-.707.293z"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="text-gray-800 dark:text-gray-100 c1k3n">Machine Learning A-Z</div>
                                                    </div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="flex cjgpi coqgc cg40v">
                                                        <a class="block" href="#0">
                                                            <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/user-28-07.jpg') }}" width="28" height="28" alt="User 07">
                                                        </a>
                                                        <a class="block" href="#0">
                                                            <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/user-28-04.jpg') }}" width="28" height="28" alt="User 04">
                                                        </a>
                                                        <a class="block" href="#0">
                                                            <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/user-28-11.jpg') }}" width="28" height="28" alt="User 11">
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="flex items-center">
                                                        <svg class="mr-2 cmpw7 cdqku cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                            <path d="M4.3 4.5c1.9-1.9 5.1-1.9 7 0 .7.7 1.2 1.7 1.4 2.7l2-.3c-.2-1.5-.9-2.8-1.9-3.8C10.1.4 5.7.4 2.9 3.1L.7.9 0 7.3l6.4-.7-2.1-2.1zM15.6 8.7l-6.4.7 2.1 2.1c-1.9 1.9-5.1 1.9-7 0-.7-.7-1.2-1.7-1.4-2.7l-2 .3c.2 1.5.9 2.8 1.9 3.8 1.4 1.4 3.1 2 4.9 2 1.8 0 3.6-.7 4.9-2l2.2 2.2.8-6.4z"></path>
                                                        </svg>
                                                        <div>Subscription</div>
                                                    </div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="cydwr">17,944</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="cydwr c7x0x">🇬🇧</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="cydwr">22.6%</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="cdjj4 c1k3n c2hoo">$4,227.09</div>
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
                                                        <div class="text-gray-800 dark:text-gray-100 c1k3n">2024 Web Bootcamp</div>
                                                    </div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="flex cjgpi coqgc cg40v">
                                                        <a class="block" href="#0">
                                                            <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/user-28-05.jpg') }}" width="28" height="28" alt="User 05">
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="flex items-center">
                                                        <svg class="mr-2 cmpw7 cdqku cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                            <path d="M4.3 4.5c1.9-1.9 5.1-1.9 7 0 .7.7 1.2 1.7 1.4 2.7l2-.3c-.2-1.5-.9-2.8-1.9-3.8C10.1.4 5.7.4 2.9 3.1L.7.9 0 7.3l6.4-.7-2.1-2.1zM15.6 8.7l-6.4.7 2.1 2.1c-1.9 1.9-5.1 1.9-7 0-.7-.7-1.2-1.7-1.4-2.7l-2 .3c.2 1.5.9 2.8 1.9 3.8 1.4 1.4 3.1 2 4.9 2 1.8 0 3.6-.7 4.9-2l2.2 2.2.8-6.4z"></path>
                                                        </svg>
                                                        <div>Subscription</div>
                                                    </div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="cydwr">16,097</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="cydwr c7x0x">🇫🇷</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="cydwr">22.4%</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="cdjj4 c1k3n c2hoo">$2,499.77</div>
                                                </td>
                                            </tr>
                                            <!-- Row -->
                                            <tr>
                                                <td class="cq84g c27zx">
                                                    <div class="flex items-center">
                                                        <div class="rounded-full mr-2 curtj coqgc czvpl">
                                                            <svg class="cbm9w cpcyu cex0k c6oul" viewBox="0 0 36 36">
                                                                <path d="M18 26a8 8 0 118-8 8.009 8.009 0 01-8 8zm0-14a6 6 0 100 12 6 6 0 000-12z"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="text-gray-800 dark:text-gray-100 c1k3n">Digital Marketing Course</div>
                                                    </div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="flex cjgpi coqgc cg40v">
                                                        <a class="block" href="#0">
                                                            <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/user-28-06.jpg') }}" width="28" height="28" alt="User 06">
                                                        </a>
                                                        <a class="block" href="#0">
                                                            <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/user-28-11.jpg') }}" width="28" height="28" alt="User 11">
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="flex items-center">
                                                        <svg class="mr-2 cmpw7 cdqku cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                            <path d="M4.3 4.5c1.9-1.9 5.1-1.9 7 0 .7.7 1.2 1.7 1.4 2.7l2-.3c-.2-1.5-.9-2.8-1.9-3.8C10.1.4 5.7.4 2.9 3.1L.7.9 0 7.3l6.4-.7-2.1-2.1zM15.6 8.7l-6.4.7 2.1 2.1c-1.9 1.9-5.1 1.9-7 0-.7-.7-1.2-1.7-1.4-2.7l-2 .3c.2 1.5.9 2.8 1.9 3.8 1.4 1.4 3.1 2 4.9 2 1.8 0 3.6-.7 4.9-2l2.2 2.2.8-6.4z"></path>
                                                        </svg>
                                                        <div>Subscription</div>
                                                    </div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="cydwr">12,996</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="cydwr c7x0x">🇮🇹</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="cydwr">22.1%</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="cdjj4 c1k3n c2hoo">$2,224.09</div>
                                                </td>
                                            </tr>
                                            <!-- Row -->
                                            <tr>
                                                <td class="cq84g c27zx">
                                                    <div class="flex items-center">
                                                        <div class="rounded-full mr-2 cg902 coqgc czvpl">
                                                            <svg class="cbm9w cpcyu cex0k c6oul" viewBox="0 0 36 36">
                                                                <circle cx="18" cy="18" r="3"></circle>
                                                                <path d="M13.05 24.363l-.707-.707a8 8 0 010-11.312l.707-.707 1.414 1.414-.707.707a6 6 0 000 8.484l.707.707-1.414 1.414zM22.95 24.363l-1.414-1.414.707-.707a6 6 0 000-8.484l-.707-.707 1.414-1.414.707.707a8 8 0 010 11.312l-.707.707z"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="text-gray-800 dark:text-gray-100 c1k3n">Form Builder PRO</div>
                                                    </div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="flex cjgpi coqgc cg40v">
                                                        <a class="block" href="#0">
                                                            <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/user-28-09.jpg') }}" width="28" height="28" alt="User 09">
                                                        </a>
                                                        <a class="block" href="#0">
                                                            <img class="rounded-full ctxup cv1so chwil ct7xr" src="{{ asset('assets/admin/img/user-28-01.jpg') }}" width="28" height="28" alt="User 01">
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="flex items-center">
                                                        <svg class="mr-2 cmpw7 cdqku cbm9w coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                            <path d="M4.3 4.5c1.9-1.9 5.1-1.9 7 0 .7.7 1.2 1.7 1.4 2.7l2-.3c-.2-1.5-.9-2.8-1.9-3.8C10.1.4 5.7.4 2.9 3.1L.7.9 0 7.3l6.4-.7-2.1-2.1zM15.6 8.7l-6.4.7 2.1 2.1c-1.9 1.9-5.1 1.9-7 0-.7-.7-1.2-1.7-1.4-2.7l-2 .3c.2 1.5.9 2.8 1.9 3.8 1.4 1.4 3.1 2 4.9 2 1.8 0 3.6-.7 4.9-2l2.2 2.2.8-6.4z"></path>
                                                        </svg>
                                                        <div>Subscription</div>
                                                    </div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="cydwr">7,097</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="cydwr c7x0x">🇩🇪</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="cydwr">17.4%</div>
                                                </td>
                                                <td class="cq84g c27zx">
                                                    <div class="cdjj4 c1k3n c2hoo">$1,949.72</div>
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
                @section('page-scripts')
<script src="{{ asset('assets/admin/js/analytics-charts.js') }}"></script>
@endsection