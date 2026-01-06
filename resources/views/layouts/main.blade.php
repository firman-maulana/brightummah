<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Bright Ummah Learning</title>
</head>

<body class="font-['Inter'] bg-[#fafafa] text-[#1a1a1a]">
    <!-- Navbar -->
    <nav class="bg-white border-b border-gray-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-8 py-5">
            <div class="flex justify-between items-center">
                <div class="text-2xl font-bold text-green-600 tracking-tight">Bright Ummah</div>
                <ul class="hidden md:flex gap-10 list-none">
                    <li><a href="/" class="text-gray-600 font-medium text-[0.95rem] hover:text-green-600 transition-colors">Beranda</a></li>
                    <li><a href="/programs" class="text-gray-600 font-medium text-[0.95rem] hover:text-green-600 transition-colors">Program</a></li>
                </ul>
                <button class="px-6 py-2.5 bg-white border-2 border-green-600 rounded-md text-green-600 font-semibold text-sm hover:bg-green-600 hover:text-white transition-all">
                    Masuk
                </button>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 py-12">
        <div class="max-w-7xl mx-auto px-8">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-8">
                <div class="max-w-lg text-center md:text-left">
                    <div class="text-2xl font-bold text-green-600 mb-3">Bright Ummah</div>
                    <p class="text-gray-500 text-[0.95rem]">Platform Pendidikan Islami Modern</p>
                </div>

                <div class="text-center md:text-right w-full md:w-auto">
                    <ul class="flex flex-col gap-2.5 list-none">
                        <li><a href="/" class="text-gray-600 text-[0.95rem] font-medium hover:text-green-600 transition-colors">Beranda</a></li>
                        <li><a href="/programs" class="text-gray-600 text-[0.95rem] font-medium hover:text-green-600 transition-colors">Program</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-200 mt-8 pt-5 text-center">
                <p class="text-sm text-gray-500">© 2024 Bright Ummah Learning. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>