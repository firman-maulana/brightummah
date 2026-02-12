@extends('admin.layouts.sidebar')

@section('content')

<div class="ch3yp cnbwt cs7xl clu2m c6btv clbq0 cxsfz">

    <!-- Page header -->
    <div class="c5w78 cxg65 c3nk1">
        <div class="c5w78 cxg65">
            <h1 class="text-gray-800 dark:text-gray-100 font-bold c459m cbtcb">Management Admin ✨</h1>
        </div>

        @if(session('success'))
        <div class="bg-emerald-100 border border-emerald-400 text-emerald-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
        @endif

        @if(session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('error') }}</span>
        </div>
        @endif

        <!-- Right: Actions -->
        <div class="cqogy cnnms">
            <!-- Search form -->
            <form method="GET" action="{{ route('admin.admins') }}" class="c84a4" id="searchFormAdmins">
                <label for="action-search" class="cn8jz">Search</label>
                <input id="action-search" name="search" class="caqf9" type="search" placeholder="Search admin…" value="{{ request('search') }}">
                <button type="submit" class="c29dn cqdkw cini7 cqogy" aria-label="Search">
                    <svg class="cbm9w coqgc cfh3y" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                        <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                    </svg>
                </button>
            </form>

            <script>
            document.getElementById('action-search').addEventListener('input', function() {
                document.getElementById('searchFormAdmins').submit();
            });
            </script>
            <!-- Add admin button -->
            <a href="{{ route('admin.admins.create') }}" class="btn bg-gray-900 cdj8c cg0jr ch8z9 cilvw cyn7a">
                <svg class="cbm9w coqgc cfh3y" width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                </svg>
                <span class="hidden xs:block ml-2">Add Admin</span>
            </a>
        </div>
    </div>

    <!-- Table -->
    <div class="bg-white border border-gray-200 cghq3 c2vpa cb8zv ccwri">
        <!-- Table -->
        <div class="cqnhx">
            <table class="c6btv">
                <!-- Table header -->
                <thead class="text-xs cmpw7 cgulq cdqku c0ef0 c1iho border-gray-200 cghq3 ctv3r">
                    <tr>
                        <th class="cnbwt cs7xl c3nk1">
                            <div class="text-left c1k3n">Name</div>
                        </th>
                        <th class="cnbwt cs7xl c3nk1">
                            <div class="text-left c1k3n">Email</div>
                        </th>
                        <th class="cnbwt cs7xl c3nk1">
                            <div class="text-left c1k3n">Role</div>
                        </th>
                        <th class="cnbwt cs7xl c3nk1">
                            <div class="text-left c1k3n">Created</div>
                        </th>
                        <th class="cnbwt cs7xl c3nk1">
                            <div class="text-center c1k3n">Actions</div>
                        </th>
                    </tr>
                </thead>
                <!-- Table body -->
                <tbody class="text-sm">
                    @forelse($admins as $admin)
                    <tr class="border-gray-200 cghq3 ctv3r">
                        <td class="cnbwt cs7xl c3nk1">
                            <div class="flex items-center">
                                <div class="rounded-full cmpw7 cdqku cbm9w coqgc cue4z cmwfi bg-violet-500">
                                    <svg class="cbm9w coqgc cfh3y" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div class="text-gray-800 dark:text-gray-100 c1k3n">{{ $admin->name }}</div>
                            </div>
                        </td>
                        <td class="cnbwt cs7xl c3nk1">
                            <div class="text-left">{{ $admin->email }}</div>
                        </td>
                        <td class="cnbwt cs7xl c3nk1">
                            <div class="inline-flex c1k3n rounded-full text-center cnbwt cs7xl bg-violet-100 text-violet-600">
                                Admin
                            </div>
                        </td>
                        <td class="cnbwt cs7xl c3nk1">
                            <div>{{ $admin->created_at->format('M d, Y') }}</div>
                        </td>
                        <td class="cnbwt cs7xl c3nk1">
                            <div class="flex items-center justify-center space-x-2">
                                <a href="{{ route('admin.admins.edit', $admin) }}" class="text-gray-400 hover:text-gray-500 rounded-full">
                                    <span class="cn8jz">Edit</span>
                                    <svg class="cbm9w coqgc cfh3y" width="16" height="16" viewBox="0 0 16 16">
                                        <path d="M11.7.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM4.6 14H2v-2.6l6-6L10.6 8l-6 6zM12 6.6L9.4 4 11 2.4 13.6 5 12 6.6z"></path>
                                    </svg>
                                </a>
                                <form method="POST" action="{{ route('admin.admins.destroy', $admin) }}" onsubmit="return confirm('Are you sure you want to delete this admin?')" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-600 rounded-full">
                                        <span class="cn8jz">Delete</span>
                                        <svg class="cbm9w coqgc cfh3y" width="16" height="16" viewBox="0 0 16 16">
                                            <path d="M5 7h2v6H5V7zm4 0h2v6H9V7zm3-6v2h4v2h-1v10c0 .6-.4 1-1 1H2c-.6 0-1-.4-1-1V5H0V3h4V1c0-.6.4-1 1-1h6c.6 0 1 .4 1 1zM6 2v1h4V2H6zm7 3H3v9h10V5z"></path>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="cnbwt cs7xl c3nk1 text-center">
                            <div class="text-gray-500 dark:text-gray-400">No admins found</div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination -->
    <div class="c7gr8">
        {{ $admins->links() }}
    </div>

</div>

@endsection
