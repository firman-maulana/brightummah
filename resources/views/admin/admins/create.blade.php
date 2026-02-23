@php
    $title = 'Bright Ummah Academy - Create Admin';
@endphp
@extends('admin.layouts.secondsidebar')

@section('content')

<div class="ch3yp cnbwt cs7xl clu2m c6btv clbq0 cxsfz">

    <!-- Page header -->
    <div class="cgd7w">
        <h1 class="text-gray-800 dark:text-gray-100 font-bold c459m cbtcb">Create Admin</h1>
    </div>

    <div>

        <!-- Components -->
        <div class="cvsuf cvxzw">

            <!-- Input Types -->
            <div>
                <form action="{{ route('admin.admins.store') }}" method="POST">
                    @csrf
                    
                    <div class="cbpe3 coah6 c4sak">
                    
                        <div>
                            <!-- Start -->
                            <div>
                                <label class="block text-sm c1k3n cu6vl" for="name">Name</label>
                                <input name="name" id="name" class="caqf9 c6btv @error('name') border-red-500 @enderror" type="text" value="{{ old('name') }}" placeholder="Enter admin name" required>
                                @error('name')
                                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- End -->
                        </div>
                        
                        <div>
                            <!-- Start -->
                            <div>
                                <label class="block text-sm c1k3n cu6vl" for="email">Email Address</label>
                                <input name="email" id="email" class="caqf9 c6btv @error('email') border-red-500 @enderror" type="email" value="{{ old('email') }}" placeholder="admin@example.com" required>
                                @error('email')
                                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- End -->
                        </div>
                        
                        <div>
                            <!-- Start -->
                            <div>
                                <label class="block text-sm c1k3n cu6vl" for="password">Password</label>
                                <input name="password" id="password" class="caqf9 c6btv @error('password') border-red-500 @enderror" type="password" placeholder="Minimum 8 characters" required>
                                @error('password')
                                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- End -->
                        </div>
                        
                        <div>
                            <!-- Start -->
                            <div>
                                <label class="block text-sm c1k3n cu6vl" for="password_confirmation">Confirm Password</label>
                                <input name="password_confirmation" id="password_confirmation" class="caqf9 c6btv" type="password" placeholder="Re-enter password" required>
                            </div>
                            <!-- End -->
                        </div>

                    </div>

                    <hr class="cghq3 cbv37 cr4kg cf7n6">

                    <div>
                        <div class="flex flex-wrap items-center cnnms">
                            <div class="ctq43">
                                <!-- Start -->
                                <button type="submit" class="btn bg-gray-900 cdj8c cg0jr ch8z9 cilvw cyn7a">
                                    Save
                                </button>
                                <!-- End -->
                            </div>
                            <div class="ctq43">
                                <!-- Start -->
                                <a href="{{ route('admin.admins') }}" class="btn bg-white border-gray-200 text-gray-800 cc0oq cghq3 cspbm c0zkc c2vpa">Cancel</a>
                                <!-- End -->
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>

</div>

@endsection
