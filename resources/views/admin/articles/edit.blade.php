@extends('admin.layouts.sidebar')

@section('content')
<div class="ch3yp cnbwt cs7xl clu2m c6btv clbq0 cxsfz">

                    <!-- Smaller container -->
                    <div class="cbb0u clu2m">

                        <!-- Page header -->
                        <div class="c2g1r cwnq4 cnlq0 cgd7w">
    
                            <!-- Left: Title -->
                            <div class="c2rn6 cdiog">
                                <h1 class="text-gray-800 dark:text-gray-100 font-bold c459m cbtcb">Edit Articles</h1>
                            </div>
    
                        </div>

                        <!-- Tasks -->
                        <div class="cmxzb">

                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <label class="block text-sm c1k3n cu6vl" for="placeholder">Judul</label>
                                            <input id="placeholder" class="caqf9 c6btv" type="text" placeholder="Masukkan judul...">
                                        </div>
                                        <!-- End -->
                                    </div>
                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <label class="block text-sm c1k3n cu6vl" for="mandatory">Hastag <span class="czr3n"></span></label>
                                            <input id="mandatory" class="caqf9 c6btv" type="text" required="">
                                        </div>
                                        <!-- End -->
                                    </div>
                                    <div class="cm3b7 c51uw ccww4 csdex cemhh c4sak">

                                <!-- Avatars -->
                                <div class="flex cjgpi coqgc cg40v">
                                    <a class="block" href="#0">
                                    <button class="flex justify-center items-center rounded-full bg-white border border-gray-200 text-violet-500 cc0oq cghq3 cspbm c2vpa cxxol c5vqk c8bkw cex0k c6oul">
                                        <span class="cn8jz">Add new user</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-photo"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 8h.01" /><path d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12" /><path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5" /><path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3" /></svg>
                                    </button> 
                                    </a>
                                    <a class="block" href="#0">
                                    <button class="flex justify-center items-center rounded-full bg-white border border-gray-200 text-violet-500 cc0oq cghq3 cspbm c2vpa cxxol c5vqk c8bkw cex0k c6oul">
                                        <span class="cn8jz">Add new user</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-point"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 12a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /></svg>
                                    </button>                                     
                                    </a>
                                    <a class="block" href="#0">
                                    <button class="flex justify-center items-center rounded-full bg-white border border-gray-200 text-violet-500 cc0oq cghq3 cspbm c2vpa cxxol c5vqk c8bkw cex0k c6oul">
                                        <span class="cn8jz">Add new user</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-indent-increase"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M20 6l-11 0" /><path d="M20 12l-7 0" /><path d="M20 18l-11 0" /><path d="M4 8l4 4l-4 4" /></svg>
                                    </button>                                    </a>
                                    <button class="flex justify-center items-center rounded-full bg-white border border-gray-200 text-violet-500 cc0oq cghq3 cspbm c2vpa cxxol c5vqk c8bkw cex0k c6oul">
                                        <span class="cn8jz">Add new user</span>
                                        <svg class="w-3 h-3 cbm9w" viewBox="0 0 12 12">
                                            <path d="M11 5H7V1a1 1 0 0 0-2 0v4H1a1 1 0 0 0 0 2h4v4a1 1 0 0 0 2 0V7h4a1 1 0 0 0 0-2Z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="flex flex-wrap items-center c9uh3">
                            
                                    <div class="cm0ci">
                                        <!-- Start -->
                                        <label class="flex items-center">
                                            <input type="radio" name="radio-buttons" class="cgd3c">
                                            <span class="text-sm c8bkw">Paragraf</span>
                                        </label>
                                        <!-- End -->
                                    </div>
                            
                                    <div class="cm0ci">
                                        <!-- Start -->
                                        <label class="flex items-center">
                                            <input type="radio" name="radio-buttons" class="cgd3c" checked="">
                                            <span class="text-sm c8bkw">Point</span>
                                        </label>
                                        <!-- End -->
                                    </div>
                                    <div class="cm0ci">
                                        <!-- Start -->
                                        <label class="flex items-center">
                                            <input type="radio" name="radio-buttons" class="cgd3c" checked="">
                                            <span class="text-sm c8bkw">Photo</span>
                                        </label>
                                        <!-- End -->
                                    </div></div>
                                </div>
    
    
                            </div>

                            <!-- Group 1 -->
                            <div>
                                <div class="cweej">
    
                                    <!-- Task -->
                                    <div class="bg-white c2vpa c1hly c5vqk clxb7" draggable="true">
                                        <div class="c2g1r cv0ns cnlq0">
                                            <!-- Left side -->
                                            <div class="cjav5 c2rn6 cz7b0 cxg65 cbw8w">
                                                <div class="flex items-center">
                                                    <!-- Drag button -->
                                                    <button class="mr-2 c8uzu">
                                                        <span class="cn8jz">Drag</span>
                                                        <svg class="w-3 h-3 ca2tk cyq9w" viexbox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0 1h12v2H0V1Zm0 4h12v2H0V5Zm0 4h12v2H0V9Z" fill-rule="evenodd"></path>
                                                        </svg>
                                                    </button>
                                                    <!-- Checkbox button -->
                                                    <label class="flex items-center">
                                                        <span class="text-gray-800 dark:text-gray-100 c225f c1k3n c8bkw">Paragraf</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- Right side -->
                                            <div class="flex items-center justify-end cp3jk">
                                                <!-- Attach button -->
                                                <button class="casia cz0f0 cmpw7 cdqku">
                                                   <svg class="cbm9w czr3n coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                        <path d="M5 7h2v6H5V7zm4 0h2v6H9V7zm3-6v2h4v2h-1v10c0 .6-.4 1-1 1H2c-.6 0-1-.4-1-1V5H0V3h4V1c0-.6.4-1 1-1h6c.6 0 1 .4 1 1zM6 2v1h4V2H6zm7 3H3v9h10V5z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div>
                                            
                                        <!-- Start -->
                                        <div>
                                            <textarea id="placeholder" class="caqf9 c6btv" rows="4" placeholder="Something cool..."></textarea>
                                        </div>
                                        <!-- End -->
                                    </div>

                                    </div>

                                    <!-- Task -->
                                    <div class="bg-white c2vpa c1hly c5vqk clxb7" draggable="true">
                                        <div class="c2g1r cv0ns cnlq0">
                                            <!-- Left side -->
                                            <div class="cjav5 c2rn6 cz7b0 cxg65 cbw8w">
                                                <div class="flex items-center">
                                                    <!-- Drag button -->
                                                    <button class="mr-2 c8uzu">
                                                        <span class="cn8jz">Drag</span>
                                                        <svg class="w-3 h-3 ca2tk cyq9w" viexbox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0 1h12v2H0V1Zm0 4h12v2H0V5Zm0 4h12v2H0V9Z" fill-rule="evenodd"></path>
                                                        </svg>
                                                    </button>
                                                    <!-- Checkbox button -->
                                                    <label class="flex items-center">
                                                        <span class="text-gray-800 dark:text-gray-100 c225f c1k3n c8bkw">Point</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- Right side -->
                                            <div class="flex items-center justify-end cp3jk">
                                                <svg class="w-3 h-3 cbm9w" viewBox="0 0 12 12">
                                            <path d="M11 5H7V1a1 1 0 0 0-2 0v4H1a1 1 0 0 0 0 2h4v4a1 1 0 0 0 2 0V7h4a1 1 0 0 0 0-2Z"></path>
                                        </svg>
                                                <!-- Attach button -->
                                                <button class="casia cz0f0 cmpw7 cdqku">
                                                   <svg class="cbm9w czr3n coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                        <path d="M5 7h2v6H5V7zm4 0h2v6H9V7zm3-6v2h4v2h-1v10c0 .6-.4 1-1 1H2c-.6 0-1-.4-1-1V5H0V3h4V1c0-.6.4-1 1-1h6c.6 0 1 .4 1 1zM6 2v1h4V2H6zm7 3H3v9h10V5z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div>
                                            
                                        <div>
                                        <!-- Start -->
                                        <div>
                                            <div class="cm84d">
                                                <input id="prefix" class="caqf9 c6btv cxbw2" type="text">
                                                <div class="flex items-center pointer-events-none c29dn cqdkw cini7">
                                                    <span class="text-sm cmpw7 cdqku c1k3n cb2br">Point</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End -->
                                    </div>
                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <div class="cm84d">
                                                <input id="prefix" class="caqf9 c6btv cxbw2" type="text">
                                                <div class="flex items-center pointer-events-none c29dn cqdkw cini7">
                                                    <span class="text-sm cmpw7 cdqku c1k3n cb2br">Point</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End -->
                                    </div>
                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <div class="cm84d">
                                                <input id="prefix" class="caqf9 c6btv cxbw2" type="text">
                                                <div class="flex items-center pointer-events-none c29dn cqdkw cini7">
                                                    <span class="text-sm cmpw7 cdqku c1k3n cb2br">Point</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End -->
                                    </div>
                                    </div>

                                    </div>

                                    <!-- Task -->
                                    <div class="bg-white c2vpa c1hly c5vqk clxb7" draggable="true">
                                        <div class="c2g1r cv0ns cnlq0">
                                            <!-- Left side -->
                                            <div class="cjav5 c2rn6 cz7b0 cxg65 cbw8w">
                                                <div class="flex items-center">
                                                    <!-- Drag button -->
                                                    <button class="mr-2 c8uzu">
                                                        <span class="cn8jz">Drag</span>
                                                        <svg class="w-3 h-3 ca2tk cyq9w" viexbox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0 1h12v2H0V1Zm0 4h12v2H0V5Zm0 4h12v2H0V9Z" fill-rule="evenodd"></path>
                                                        </svg>
                                                    </button>
                                                    <!-- Checkbox button -->
                                                    <label class="flex items-center">
                                                        <span class="text-gray-800 dark:text-gray-100 c225f c1k3n c8bkw">Photo</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- Right side -->
                                            <div class="flex items-center justify-end cp3jk">
                                                <!-- Attach button -->
                                                <button class="casia cz0f0 cmpw7 cdqku">
                                                   <svg class="cbm9w czr3n coqgc" width="16" height="16" viewBox="0 0 16 16">
                                                        <path d="M5 7h2v6H5V7zm4 0h2v6H9V7zm3-6v2h4v2h-1v10c0 .6-.4 1-1 1H2c-.6 0-1-.4-1-1V5H0V3h4V1c0-.6.4-1 1-1h6c.6 0 1 .4 1 1zM6 2v1h4V2H6zm7 3H3v9h10V5z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div>
                                        
                                    </div>

                                    </div>

                                    
                                    <hr class="cghq3 cbv37 cr4kg cf7n6">

                                    
                                    <div>
                                        <div class="flex flex-wrap items-center cnnms">
                                            <div class="ctq43">
                                    <button class="btn bg-gray-900 cdj8c cg0jr ch8z9 cilvw cyn7a">Update</button>   
                                    </div>
                                    <div class="ctq43">
                                    <button class="btn bg-white border-gray-200 text-gray-800 cc0oq cghq3 cspbm c0zkc c2vpa">Cancel</button> 
                                    </div>
                                        </div>
                                        </div>                                

                                </div>
                                
                            </div>
                            
                        </div>

                    </div>

                </div>

@endsection