@extends('coba.layouts.sidebar')

@section('content')

<div class="ch3yp cnbwt cs7xl clu2m c6btv clbq0 cxsfz" x-data="calendar" x-init="initCalendar">

                    <!-- Page header -->
                    <div class="c2g1r cwnq4 cnlq0 cdiog">

                        <!-- Left: Title -->
                        <div class="c2rn6 cdiog">
                            <h1 class="text-gray-800 dark:text-gray-100 font-bold c459m cbtcb"><span x-text="`${monthNames[month]} ${year}`"></span></h1>
                        </div>

                        <!-- Right: Actions -->
                        <div class="cm3b7 c51uw ccww4 csdex cbe1i c4sak">

                            <!-- Previous month button -->
                            <button class="btn bg-white border-gray-200 text-gray-500 dark:text-gray-400 cpqp6 cv9uq c14v6 cc0oq cha85 czr0s cbnll cghq3 c7cy2 cspbm czsk6 clwnn c2vpa ch4gv" :disabled="month === 0 ? true : false" @click="month--; getDays()">
                                <span class="cn8jz">Previous month</span><wbr>
                                <svg class="cmpw7 cdqku cbm9w" width="16" height="16" viewBox="0 0 16 16">
                                    <path d="M9.4 13.4l1.4-1.4-4-4 4-4-1.4-1.4L4 8z"></path>
                                </svg>
                            </button>                                    
                            
                            <!-- Next month button -->
                            <button class="btn bg-white border-gray-200 text-gray-500 dark:text-gray-400 cpqp6 cv9uq c14v6 cc0oq cha85 czr0s cbnll cghq3 c7cy2 cspbm czsk6 clwnn c2vpa ch4gv" :disabled="month === 11 ? true : false" @click="month++; getDays()">
                                <span class="cn8jz">Next month</span><wbr>
                                <svg class="cmpw7 cdqku cbm9w" width="16" height="16" viewBox="0 0 16 16">
                                    <path d="M6.6 13.4L5.2 12l4-4-4-4 1.4-1.4L12 8z"></path>
                                </svg>
                            </button>

                            <hr class="cmr9m cb4ug cvwbh cav8x c1ibf cn8zk">
                            
                            <!-- Create event button -->
                            <button class="btn bg-gray-900 cdj8c cg0jr ch8z9 cilvw cyn7a">Create Event</button>
                        
                        </div>

                    </div>

                    <!-- Filters and view buttons -->
                    <div class="c2g1r cwnq4 cnlq0 cdiog">

                        <!-- Filters  -->
                        <div class="mr-2 c2rn6 cdiog">
                            <ul class="flex flex-wrap items-center -m-1">
                                <li class="m-1">
                                    <button class="bg-white border-gray-200 text-gray-500 dark:text-gray-400 cc0oq cghq3 cspbm c2vpa cnf4p">
                                        <div class="curtj coqgc ct6wo cajux"></div>
                                        <span class="c6jja">Acme Inc.</span>
                                    </button>
                                </li>
                                <li class="m-1">
                                    <button class="bg-white border-gray-200 text-gray-500 dark:text-gray-400 cc0oq cghq3 cspbm c2vpa cnf4p">
                                        <div class="bg-green-500 coqgc ct6wo cajux"></div>
                                        <span class="c6jja">Life &amp; Family</span>
                                    </button>
                                </li>
                                <li class="m-1">
                                    <button class="bg-white border-gray-200 text-gray-500 dark:text-gray-400 cc0oq cghq3 cspbm c2vpa cnf4p">
                                        <div class="cjnnd coqgc ct6wo cajux"></div>
                                        <span class="c6jja">Reservations</span>
                                    </button>
                                </li>
                                <li class="m-1">
                                    <button class="bg-white border-gray-200 text-gray-500 dark:text-gray-400 cc0oq cghq3 cspbm c2vpa cnf4p">
                                        <div class="cg902 coqgc ct6wo cajux"></div>
                                        <span class="c6jja">Events</span>
                                    </button>
                                </li>
                                <li class="m-1">
                                    <button class="bg-white border-gray-200 text-gray-500 dark:text-gray-400 cc0oq cghq3 cspbm c2vpa cnf4p">
                                        <div class="bg-yellow-500 coqgc ct6wo cajux"></div>
                                        <span class="c6jja">Misc</span>
                                    </button>
                                </li>
                                <li class="m-1">
                                    <button class="bg-white border-gray-200 text-violet-500 cc0oq cghq3 cspbm c2vpa cnf4p">+Add New</button>
                                </li>
                            </ul>
                        </div>

                        <!-- View buttons (requires custom integration) -->
                        <div class="flex c8vtj cd1s6">
                            <button class="btn bg-white border-gray-200 text-violet-500 cghq3 cjcwh c5kv5 c2vpa cyf18">Month</button>
                            <button class="btn bg-white border-gray-200 cghq3 ck4w7 cjcwh c0zkc c5kv5 csd0k c2vpa c1ukq cyf18">Week</button>
                            <button class="btn bg-white border-gray-200 cghq3 ck4w7 cjcwh c0zkc c5kv5 csd0k c2vpa c1ukq cyf18">Day</button>
                        </div>
                    </div>

                    <!-- Calendar table -->
                    <div class="bg-white c2vpa cxe43 c1hly c4jqr" x-cloak="">

                        <!-- Days of the week -->
                        <div class="border-gray-200 cghq3 c1jxa ctv3r cn3m2 c4sak">
                            <template x-for="(day, index) in dayNames" :key="index">	
                                <div class="c6kcn c72q5">
                                    <div class="text-gray-500 text-sm cydwr c1k3n c2y99" x-text="day.substring(0,3)"></div>
                                    <div class="text-gray-500 dark:text-gray-400 text-sm hidden cydwr c1k3n cv9uc" x-text="day"></div>
                                </div>
                            </template>
                        </div>

                        <!-- Day cells -->
                        <div class="cmr9m c1jxa cvwbh cn3m2 c4sak">
                            <!-- Diagonal stripes pattern -->
                            <svg class="cn8jz">
                                <defs>
                                    <pattern id="stripes" patternUnits="userSpaceOnUse" width="5" height="5" patternTransform="rotate(135)">
                                        <line class="ctwj6 cu09u cy3ej cr9x4" x1="0" y="0" x2="0" y2="5" stroke-width="2"></line>
                                    </pattern>
                                </defs>
                            </svg>
                            <!-- Empty cells (previous month) -->
                            <template x-for="blankday in startingBlankDays">
                                <div class="c2vpa cgk1f cijov chfho cmnnk">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
                                        <rect width="100%" height="100%" fill="url(#stripes)"></rect>
                                    </svg>
                                </div>
                            </template>
                            <!-- Days of the current month -->
                            <template x-for="(day, dayIndex) in daysInMonth" :key="dayIndex">	
                                <div class="bg-white c2vpa cxe43 cm84d cijov chfho cmnnk">
                                    <div class="flex cm3rx cetff cav8x">
                                        <!-- Events -->
                                        <div class="flex cxe43 c1fz8 cm84d cetff ctnmi cbw8w">
                                            <template x-for="event in getEvents(day)">	
                                                <button class="c2hoo cm84d c6btv cu6vl">
                                                    <div class="cxe43 cb8zv cdw1w c9hxi" :class="{
                                                            'cpcyu curtj': event.eventColor === 'sky',
                                                            'cpcyu cjnnd': event.eventColor === 'indigo',
                                                            'cpcyu bg-yellocye3x00': event.eventColor === 'yellow',
                                                            'cpcyu bg-green-500': event.eventColor === 'green',
                                                            'cpcyu cg902': event.eventColor === 'red',
                                                        }">
                                                        <!-- Event name -->
                                                        <div class="cgulq c941w c1iho" x-text="event.eventName"></div>
                                                        <!-- Event time -->
                                                        <div class="hidden c0ef0 czwep c941w c1iho">
                                                            <!-- Start date -->
                                                            <template x-if="event.eventStart">
                                                                <span x-text="event.eventStart.toLocaleTimeString([], {hour12: true, hour: 'numeric', minute:'numeric'})"></span>
                                                            </template>
                                                            <!-- End date -->
                                                            <template x-if="event.eventEnd">
                                                                <span>
                                                                    - <span x-text="event.eventEnd.toLocaleTimeString([], {hour12: true, hour: 'numeric', minute:'numeric'})"></span>
                                                                </span>
                                                            </template>
                                                        </div> 
                                                    </div>
                                                </button>
                                            </template>
                                            <div class="pointer-events-none cx0lt c7rlo cv9py cyysc cqdkw cq5bq cgky2 cu1dd crees" aria-hidden="true"></div>
                                        </div>
                                        <!-- Cell footer -->
                                        <div class="flex items-center cm3rx c1fz8 ctnmi">
                                            <!-- More button (if more than 2 events) -->
                                            <template x-if="getEvents(day).length > 2">
                                                <button class="text-gray-500 border border-gray-200 cghq3 c0zkc cq84g cydwr c1k3n cnujc cb8zv c83go cxzoe c1iho">
                                                    <span class="czxy6">+</span><span x-text="getEvents(day).length - 2"></span> <span class="hidden c3lnj">more</span>
                                                </button>
                                            </template>
                                            <!-- Day number -->
                                            <button class="inline-flex items-center justify-center rounded-full cefwk cfcla c0zkc cydwr c1k3n cp06m cbh9e c1iho ctt6r cg8so" :class="{'text-violet-500': isToday(day) }" x-text="day"></button>                                                
                                        </div>
                                    </div>
                                </div>
                            </template>
                            <!-- Empty cells (next month) -->
                            <template x-for="blankday in endingBlankDays">
                                <div class="c2vpa cgk1f cijov chfho cmnnk">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
                                        <rect width="100%" height="100%" fill="url(#stripes)"></rect>
                                    </svg>
                                </div>
                            </template>	                                    
                        </div>
                    </div>

                </div>

@endsection