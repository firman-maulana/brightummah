<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}">
    <title>@yield('title', 'Admin Dashboard') - Bright Ummah Academy</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        :root {
            --primary: #16a34a;
            --primary-dark: #15803d;
            --sidebar-width: 250px;
            --sidebar-width-min: 70px;
            --topbar-height: 56px;
            --bottombar-height: 64px;
            --border-color: #e5e7eb;
            --bg-light: #f9fafb;
            --text-primary: #111827;
            --text-secondary: #6b7280;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background: #f3f4f6;
            font-size: 14px;
            color: var(--text-primary);
        }

        /* Sidebar - Desktop */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: var(--sidebar-width);
            background: #fff;
            border-right: 1px solid var(--border-color);
            z-index: 1000;
            display: flex;
            flex-direction: column;
            transition: width 0.3s ease;
        }

        .sidebar.minimized {
            width: var(--sidebar-width-min);
        }

        .sidebar-header {
            height: var(--topbar-height);
            padding: 0 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid var(--border-color);
        }

        .sidebar-brand {
            font-size: 16px;
            font-weight: 700;
            color: var(--primary);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
            white-space: nowrap;
        }

        .sidebar-brand i {
            font-size: 20px;
        }

        .sidebar.minimized .sidebar-brand span {
            display: none;
        }

        .sidebar-toggle {
            background: none;
            border: none;
            cursor: pointer;
            color: var(--text-secondary);
            font-size: 18px;
            padding: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: color 0.2s;
        }

        .sidebar-toggle:hover {
            color: var(--primary);
        }

        .sidebar-menu {
            flex: 1;
            padding: 15px 0;
            overflow-y: auto;
        }

        .sidebar-menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar-menu li {
            margin-bottom: 2px;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px 15px;
            color: var(--text-secondary);
            text-decoration: none;
            transition: all 0.2s;
            font-size: 14px;
        }

        .sidebar-menu a:hover {
            background: #f0f9ff;
            color: var(--primary);
        }

        .sidebar-menu a.active {
            background: #f0fdf4;
            color: var(--primary);
            font-weight: 600;
            border-left: 3px solid var(--primary);
            padding-left: 12px;
        }

        .sidebar-menu i {
            font-size: 18px;
            width: 24px;
            text-align: center;
            flex-shrink: 0;
        }

        .sidebar-menu span {
            white-space: nowrap;
            transition: opacity 0.2s;
        }

        .sidebar.minimized .sidebar-menu span {
            display: none;
        }

        .sidebar-footer {
            padding: 12px 15px;
            border-top: 1px solid var(--border-color);
        }

        .sidebar-footer a {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #ef4444;
            text-decoration: none;
            font-size: 14px;
            transition: all 0.2s;
        }

        .sidebar-footer a:hover {
            color: #dc2626;
        }

        .sidebar-footer i {
            font-size: 18px;
            width: 24px;
            text-align: center;
        }

        .sidebar.minimized .sidebar-footer span {
            display: none;
        }

        /* Bottom Navigation - Mobile */
        .bottombar {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            height: var(--bottombar-height);
            background: #fff;
            border-top: 1px solid var(--border-color);
            z-index: 1000;
            display: none;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.05);
        }

        .bottombar-nav {
            display: flex;
            justify-content: space-around;
            align-items: center;
            height: 100%;
            padding: 0 8px;
        }

        .bottombar-nav a {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 4px;
            padding: 8px 12px;
            color: var(--text-secondary);
            text-decoration: none;
            transition: all 0.2s;
            border-radius: 8px;
            min-width: 64px;
        }

        .bottombar-nav a:hover {
            background: #f0f9ff;
            color: var(--primary);
        }

        .bottombar-nav a.active {
            color: var(--primary);
            background: #f0fdf4;
        }

        .bottombar-nav a i {
            font-size: 22px;
        }

        .bottombar-nav a span {
            font-size: 11px;
            font-weight: 500;
        }

        /* Main Content */
        .main-content {
            margin-left: var(--sidebar-width);
            min-height: 100vh;
            transition: margin-left 0.3s ease;
        }

        .main-content.expanded {
            margin-left: var(--sidebar-width-min);
        }

        /* Topbar */
        .topbar {
            height: var(--topbar-height);
            background: #fff;
            border-bottom: 1px solid var(--border-color);
            padding: 0 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 999;
        }

        .topbar-title {
            font-size: 16px;
            font-weight: 600;
            color: var(--text-primary);
            margin: 0;
        }

        .topbar-user {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .topbar-user .avatar {
            width: 32px;
            height: 32px;
            border-radius: 6px;
            background: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            font-size: 12px;
        }

        .topbar-user .name {
            font-size: 13px;
            font-weight: 500;
            color: var(--text-primary);
            display: none;
        }

        @media (min-width: 1024px) {
            .topbar-user .name {
                display: block;
            }
        }

        /* Content Area */
        .content-area {
            padding: 24px;
        }

        /* Cards */
        .card {
            border: 1px solid var(--border-color);
            border-radius: 8px;
            box-shadow: none;
            margin-bottom: 20px;
            background: #fff;
        }

        .card-header {
            background: #fff;
            border-bottom: 1px solid var(--border-color);
            padding: 16px 20px;
            font-weight: 600;
            font-size: 15px;
            color: var(--text-primary);
        }

        .card-body {
            padding: 20px;
        }

        .stat-card {
            background: #fff;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            padding: 20px;
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .stat-card .icon {
            width: 48px;
            height: 48px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            flex-shrink: 0;
        }

        .stat-card .icon.primary {
            background: #f0fdf4;
            color: var(--primary);
        }

        .stat-card .icon.blue {
            background: #eff6ff;
            color: #3b82f6;
        }

        .stat-card .icon.yellow {
            background: #fffbeb;
            color: #f59e0b;
        }

        .stat-card .icon.red {
            background: #fef2f2;
            color: #ef4444;
        }

        .stat-card .info {
            flex: 1;
        }

        .stat-card .label {
            font-size: 13px;
            color: var(--text-secondary);
            margin-bottom: 4px;
        }

        .stat-card .value {
            font-size: 24px;
            font-weight: 700;
            color: var(--text-primary);
        }

        /* Button */
        .btn {
            border-radius: 6px;
            padding: 8px 16px;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.2s;
        }

        .btn-primary {
            background: var(--primary);
            border: none;
        }

        .btn-primary:hover {
            background: var(--primary-dark);
        }

        .btn-outline-primary {
            border: 1px solid var(--primary);
            color: var(--primary);
            background: transparent;
        }

        .btn-outline-primary:hover {
            background: var(--primary);
            color: white;
        }

        .btn-sm {
            padding: 6px 12px;
            font-size: 13px;
        }

        .btn-danger {
            background: #ef4444;
            border: none;
        }

        .btn-danger:hover {
            background: #dc2626;
        }

        /* Table */
        .table {
            font-size: 14px;
        }

        .table thead th {
            background: #f9fafb;
            border-bottom: 1px solid var(--border-color);
            font-weight: 600;
            color: var(--text-primary);
            padding: 12px;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .table tbody td {
            padding: 12px;
            vertical-align: middle;
            border-bottom: 1px solid #f3f4f6;
        }

        .table tbody tr:hover {
            background: #fafbfc;
        }

        /* Form Controls */
        .form-control, .form-select {
            border: 1px solid var(--border-color);
            border-radius: 6px;
            padding: 8px 12px;
            font-size: 14px;
            transition: all 0.2s;
            background: #fff;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(22, 163, 74, 0.1);
            background: #fff;
        }

        .form-label {
            font-size: 13px;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 6px;
        }

        /* Alerts */
        .alert {
            border-radius: 6px;
            border: none;
            font-size: 14px;
            padding: 12px 16px;
            margin-bottom: 20px;
        }

        .alert-success {
            background: #f0fdf4;
            color: #166534;
        }

        .alert-danger {
            background: #fef2f2;
            color: #991b1b;
        }

        /* Badge */
        .badge {
            padding: 4px 10px;
            border-radius: 4px;
            font-weight: 500;
            font-size: 11px;
        }

        .bg-secondary {
            background: #e5e7eb !important;
            color: var(--text-primary) !important;
        }

        .bg-success {
            background: var(--primary) !important;
        }

        .bg-primary {
            background: #3b82f6 !important;
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 48px 20px;
            color: var(--text-secondary);
        }

        .empty-state i {
            font-size: 48px;
            opacity: 0.2;
            margin-bottom: 16px;
        }

        .empty-state p {
            margin: 0;
            font-size: 15px;
        }

        /* Form Section */
        .form-section {
            margin-bottom: 24px;
        }

        .form-section-title {
            font-size: 13px;
            font-weight: 700;
            color: var(--text-secondary);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 12px;
        }

        /* Button Group */
        .btn-group-sm > .btn {
            padding: 6px 10px;
            font-size: 13px;
        }

        /* Input Feedback */
        .invalid-feedback {
            font-size: 12px;
            margin-top: 4px;
        }

        .is-invalid {
            border-color: #ef4444 !important;
        }

        /* Responsive - Tablet & Mobile */
        @media (max-width: 768px) {
            /* Hide sidebar on mobile */
            .sidebar {
                display: none;
            }

            /* Show bottombar on mobile */
            .bottombar {
                display: block;
            }

            /* Adjust main content for mobile */
            .main-content {
                margin-left: 0;
                margin-bottom: var(--bottombar-height);
            }

            .main-content.expanded {
                margin-left: 0;
            }

            /* Reduce padding on mobile */
            .content-area {
                padding: 16px;
                padding-bottom: calc(16px + var(--bottombar-height));
            }

            .topbar {
                padding: 0 16px;
            }

            .topbar-title {
                font-size: 14px;
            }

            .stat-card {
                padding: 16px;
            }

            .stat-card .value {
                font-size: 20px;
            }

            /* Table responsiveness */
            .table-responsive {
                overflow-x: auto;
            }

            /* Card adjustments */
            .card-body {
                padding: 16px;
            }
        }

        /* Scrollbar */
        .sidebar-menu::-webkit-scrollbar {
            width: 6px;
        }

        .sidebar-menu::-webkit-scrollbar-track {
            background: transparent;
        }

        .sidebar-menu::-webkit-scrollbar-thumb {
            background: #d1d5db;
            border-radius: 3px;
        }

        .sidebar-menu::-webkit-scrollbar-thumb:hover {
            background: #9ca3af;
        }

        /* Info Table */
        .info-table {
            font-size: 13px;
        }

        .info-table td:first-child {
            color: var(--text-secondary);
            font-weight: 500;
            width: 40%;
        }

        .info-table td {
            padding: 8px 0;
            border-bottom: 1px solid var(--border-color);
        }

        .info-table tr:last-child td {
            border-bottom: none;
        }
    </style>

    @stack('styles')
</head>
<body>
    <!-- Sidebar - Desktop Only -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <a href="{{ route('admin.dashboard') }}" class="sidebar-brand">
                <span>Bright Ummah Academy</span>
            </a>
            <button class="sidebar-toggle" id="sidebarToggle" title="Minimize">
                <i class="bi bi-chevron-left"></i>
            </button>
        </div>
        
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" title="Dashboard">
                        <i class="bi bi-grid-1x2"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.programs') }}" class="{{ request()->routeIs('admin.programs*') ? 'active' : '' }}" title="Programs">
                        <i class="bi bi-book"></i>
                        <span>Programs</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.programs') }}" class="{{ request()->routeIs('admin.programs*') ? 'active' : '' }}" title="Messages">
                        <i class="bi bi-book"></i>
                        <span>Messages</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.users') }}" class="{{ request()->routeIs('admin.users*') ? 'active' : '' }}" title="Users">
                        <i class="bi bi-people"></i>
                        <span>Users</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="sidebar-footer">
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" title="Logout">
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>

    <!-- Bottom Navigation - Mobile Only -->
    <div class="bottombar">
        <nav class="bottombar-nav">
            <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i class="bi bi-grid-1x2"></i>
                <span>Dashboard</span>
            </a>
            <a href="{{ route('admin.programs') }}" class="{{ request()->routeIs('admin.programs*') ? 'active' : '' }}">
                <i class="bi bi-book"></i>
                <span>Programs</span>
            </a>
            <a href="{{ route('admin.programs') }}" class="{{ request()->routeIs('admin.programs*') ? 'active' : '' }}">
                <i class="bi bi-book"></i>
                <span>Messages</span>
            </a>
            <a href="{{ route('admin.users') }}" class="{{ request()->routeIs('admin.users*') ? 'active' : '' }}">
                <i class="bi bi-people"></i>
                <span>Users</span>
            </a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form-mobile').submit();">
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
            </a>
        </nav>
        <form id="logout-form-mobile" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>

    <!-- Main Content -->
    <div class="main-content" id="mainContent">
        <!-- Topbar -->
        <div class="topbar">
            <h5 class="topbar-title">@yield('page-title', 'Dashboard')</h5>
            <div class="topbar-user">
                <div class="avatar">{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</div>
                <span class="name">{{ auth()->user()->name }}</span>
            </div>
        </div>

        <!-- Content -->
        <div class="content-area">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="bi bi-exclamation-circle me-2"></i>{{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @yield('content')
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('mainContent');
        const toggleBtn = document.getElementById('sidebarToggle');

        // Sidebar toggle untuk desktop
        if (toggleBtn) {
            toggleBtn.addEventListener('click', () => {
                sidebar.classList.toggle('minimized');
                mainContent.classList.toggle('expanded');
                localStorage.setItem('sidebarMinimized', sidebar.classList.contains('minimized'));
            });
        }

        // Load saved sidebar state (hanya untuk desktop)
        if (window.innerWidth > 768) {
            if (localStorage.getItem('sidebarMinimized') === 'true') {
                sidebar.classList.add('minimized');
                mainContent.classList.add('expanded');
            }
        }

        // Handle window resize
        window.addEventListener('resize', () => {
            if (window.innerWidth <= 768) {
                // Mobile view - pastikan sidebar classes di-reset
                sidebar.classList.remove('minimized');
                mainContent.classList.remove('expanded');
            } else {
                // Desktop view - restore saved state
                if (localStorage.getItem('sidebarMinimized') === 'true') {
                    sidebar.classList.add('minimized');
                    mainContent.classList.add('expanded');
                }
            }
        });
    </script>
    
    @stack('scripts')
</body>
</html>