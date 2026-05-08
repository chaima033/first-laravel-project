<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name', 'Mon Site Laravel'))</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&display=swap');

        :root {
            --brand-cream: #fdf7ef;
            --brand-cream-2: #ffe8cc;
            --brand-card: #fffdf9;
            --brand-ink: #1f1a17;
            --brand-muted: #6f635a;
            --brand-accent: #e75b2b;
            --brand-accent-dark: #bf3f17;
            --brand-border: #efdfcf;
            --brand-shadow: 0 14px 34px rgba(35, 23, 12, 0.11);
            --brand-success: #2f855a;
            --brand-warning: #b7791f;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Space Grotesk', 'Segoe UI', Tahoma, sans-serif;
            color: var(--brand-ink);
            background:
                radial-gradient(circle at 10% -10%, #fff8f0 0%, transparent 45%),
                radial-gradient(circle at 95% 8%, #ffe9d2 0%, transparent 28%),
                linear-gradient(145deg, var(--brand-cream) 0%, #fff3e6 100%);
            min-height: 100vh;
            display: grid;
            grid-template-columns: auto 1fr;
            grid-template-rows: auto 1fr auto;
        }

        .site-nav {
            position: sticky;
            top: 0;
            z-index: 50;
            background: rgba(253, 247, 239, 0.9);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--brand-border);
            grid-column: 1 / -1;
        }

        .site-nav-inner {
            max-width: 1100px;
            margin: 0 auto;
            padding: 14px 18px;
            display: flex;
            justify-content: space-between;
            gap: 16px;
            align-items: center;
            flex-wrap: wrap;
        }

        .site-brand {
            font-weight: 700;
            text-decoration: none;
            color: var(--brand-ink);
            font-size: 1.05rem;
        }

        .site-nav-list {
            list-style: none;
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .site-nav-link,
        .site-nav-action {
            color: var(--brand-ink);
            text-decoration: none;
            font-weight: 700;
            padding: 9px 14px;
            border-radius: 999px;
            transition: 0.2s ease;
            white-space: nowrap;
            border: 0;
            background: transparent;
            cursor: pointer;
            font: inherit;
        }

        .site-nav-link:hover,
        .site-nav-action:hover {
            background: #ffe8d5;
            color: #7a2f12;
        }

        .site-nav-link.active {
            background: var(--brand-accent);
            color: #fff;
        }

        .site-auth {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .site-auth-name {
            font-weight: 700;
            color: var(--brand-muted);
        }

        .container {
            width: min(1100px, 92vw);
            margin: 30px auto;
            flex: 1;
        }

        .hero {
            background: radial-gradient(circle at top right, #fff4e6 0%, var(--brand-cream) 45%, var(--brand-cream-2) 100%);
            border: 1px solid var(--brand-border);
            border-radius: 22px;
            padding: 24px;
            box-shadow: var(--brand-shadow);
            margin-bottom: 22px;
        }

        .hero h1 {
            font-size: clamp(1.65rem, 4.2vw, 2.4rem);
            margin-bottom: 6px;
        }

        .hero p {
            color: var(--brand-muted);
            line-height: 1.6;
        }

        .panel {
            background: var(--brand-card);
            border: 1px solid var(--brand-border);
            border-radius: 16px;
            padding: 18px;
            box-shadow: 0 6px 18px rgba(28, 18, 10, 0.07);
        }

        .grid {
            display: grid;
            gap: 14px;
        }

        .grid-3 {
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        }

        .grid-2 {
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        }

        .card-title {
            font-size: 1.15rem;
            margin-bottom: 8px;
        }

        .muted {
            color: var(--brand-muted);
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 11px;
            padding: 10px 15px;
            text-decoration: none;
            font-weight: 700;
            transition: 0.2s ease;
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background: var(--brand-accent);
            color: #fff;
        }

        .btn-primary:hover {
            background: var(--brand-accent-dark);
        }

        .line-sep {
            margin: 16px 0;
            border: 0;
            border-top: 1px solid var(--brand-border);
        }

        .article-link {
            color: var(--brand-ink);
            text-decoration: none;
        }

        .article-link:hover {
            color: var(--brand-accent-dark);
        }

        .status-ok {
            color: var(--brand-success);
            font-weight: 700;
        }

        .status-warn {
            color: var(--brand-warning);
            font-weight: 700;
        }

        .sidebar {
            display: flex;
            flex-direction: column;
            width: 250px;
            background: rgba(253, 247, 239, 0.95);
            backdrop-filter: blur(10px);
            border-right: 1px solid var(--brand-border);
            padding: 18px 0;
            grid-row: 2;
            grid-column: 1;
            max-height: calc(100vh - 60px);
            overflow-y: auto;
        }

        .sidebar-brand {
            padding: 14px 18px;
            margin-bottom: 10px;
            border-bottom: 1px solid var(--brand-border);
        }

        .sidebar-brand a {
            font-weight: 700;
            text-decoration: none;
            color: var(--brand-ink);
            font-size: 1.05rem;
            display: block;
        }

        .sidebar-nav-list {
            list-style: none;
            flex: 1;
        }

        .sidebar-nav-item {
            margin: 0;
        }

        .sidebar-nav-link,
        .sidebar-nav-action {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 12px 18px;
            color: var(--brand-ink);
            text-decoration: none;
            font-weight: 600;
            transition: 0.2s ease;
            border-left: 3px solid transparent;
            border: 0;
            background: transparent;
            cursor: pointer;
            font: inherit;
            width: 100%;
            text-align: left;
        }

        .sidebar-nav-link:hover,
        .sidebar-nav-action:hover {
            background: rgba(231, 91, 43, 0.1);
            color: var(--brand-accent);
            border-left-color: var(--brand-accent);
        }

        .sidebar-nav-link.active {
            background: rgba(231, 91, 43, 0.15);
            color: var(--brand-accent);
            border-left-color: var(--brand-accent);
        }

        .sidebar-auth {
            padding: 14px 18px;
            border-top: 1px solid var(--brand-border);
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .sidebar-auth-name {
            font-weight: 700;
            color: var(--brand-muted);
            font-size: 0.95rem;
            padding: 0 0 8px 0;
            border-bottom: 1px solid var(--brand-border);
            margin-bottom: 8px;
        }

        .site-footer {
            width: min(1100px, 92vw);
            margin: 0 auto 22px;
            border: 1px solid var(--brand-border);
            border-radius: 16px;
            background: rgba(255, 255, 255, 0.72);
            text-align: center;
            color: var(--brand-muted);
            padding: 14px;
            font-size: 0.95rem;
            grid-column: 1 / -1;
        }

        .container {
            grid-row: 2;
            grid-column: 2;
        }

        @media (max-width: 640px) {
            body {
                grid-template-columns: 1fr;
            }

            .sidebar-overlay {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(0, 0, 0, 0.3);
                z-index: 35;
                animation: fadeIn 0.3s ease;
            }

            .sidebar-overlay.active {
                display: block;
            }

            @keyframes fadeIn {
                from { opacity: 0; }
                to { opacity: 1; }
            }

            .sidebar {
                display: flex;
                position: fixed;
                left: 0;
                top: 60px;
                width: 250px;
                height: calc(100vh - 60px);
                z-index: 40;
                transform: translateX(-100%);
                transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            }

            .sidebar.active {
                transform: translateX(0);
            }

            .toggle-sidebar {
                display: flex;
                width: 40px;
                height: 40px;
                border: none;
                background: transparent;
                cursor: pointer;
                flex-direction: column;
                justify-content: center;
                gap: 5px;
                padding: 0;
                margin-right: 10px;
                position: relative;
                z-index: 45;
            }

            .toggle-sidebar span {
                width: 24px;
                height: 2px;
                background: var(--brand-accent);
                transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
                border-radius: 2px;
                transform-origin: center;
            }

            .toggle-sidebar.active span:nth-child(1) {
                transform: rotate(45deg) translate(10px, 10px);
            }

            .toggle-sidebar.active span:nth-child(2) {
                opacity: 0;
                transform: translateX(-10px);
            }

            .toggle-sidebar.active span:nth-child(3) {
                transform: rotate(-45deg) translate(7px, -7px);
            }

            .container {
                width: 94vw;
                margin: 18px auto;
                grid-column: 1 / -1;
            }

            .hero,
            .panel {
                padding: 14px;
            }

            .site-nav-list {
                display: none;
            }

            .site-auth {
                display: none;
            }
        }

        @media (min-width: 641px) {
            .toggle-sidebar {
                display: none !important;
            }

            .sidebar-overlay {
                display: none !important;
            }
        }
    </style>
    @yield('styles')
</head>
<body>
    <nav class="site-nav">
        <div class="site-nav-inner">
            <button id="toggle-sidebar" class="toggle-sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Ouvrir le menu de navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a href="{{ route('home') }}" class="site-brand">Mon Site Laravel</a>
            <ul class="site-nav-list">
                <li><a href="{{ route('home') }}" class="site-nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Accueil</a></li>
                <li><a href="{{ route('about') }}" class="site-nav-link {{ request()->routeIs('about') ? 'active' : '' }}">A propos</a></li>
                <li><a href="{{ route('services') }}" class="site-nav-link {{ request()->routeIs('services') ? 'active' : '' }}">Services</a></li>
                <li><a href="{{ route('blog') }}" class="site-nav-link {{ request()->routeIs('blog') || request()->routeIs('blog.article') ? 'active' : '' }}">Blog</a></li>
                <li><a href="{{ route('contact') }}" class="site-nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                <li><a href="{{ route('produit') }}" class="site-nav-link {{ request()->routeIs('produit') ? 'active' : '' }}">Produits</a></li>
                @auth
                    <li><a href="{{ route('tasks.index') }}" class="site-nav-link {{ request()->routeIs('tasks.*') ? 'active' : '' }}">Taches</a></li>
                @endauth
            </ul>

            <div class="site-auth">
                @auth
                    <span class="site-auth-name">{{ Auth::user()->name }}</span>
                    <a href="{{ route('profile.edit') }}" class="site-nav-link">Profile</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="site-nav-action">Log out</button>
                    </form>
                @endauth
            </div>
        </div>
    </nav>

    <div id="sidebar-overlay" class="sidebar-overlay" aria-hidden="true" tabindex="-1"></div>

    <aside id="sidebar" class="sidebar">
        <div class="sidebar-brand">
            <a href="{{ route('home') }}">Mon Site Laravel</a>
        </div>
        <ul class="sidebar-nav-list">
            <li class="sidebar-nav-item"><a href="{{ route('home') }}" class="sidebar-nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Accueil</a></li>
            <li class="sidebar-nav-item"><a href="{{ route('about') }}" class="sidebar-nav-link {{ request()->routeIs('about') ? 'active' : '' }}">A propos</a></li>
            <li class="sidebar-nav-item"><a href="{{ route('services') }}" class="sidebar-nav-link {{ request()->routeIs('services') ? 'active' : '' }}">Services</a></li>
            <li class="sidebar-nav-item"><a href="{{ route('blog') }}" class="sidebar-nav-link {{ request()->routeIs('blog') || request()->routeIs('blog.article') ? 'active' : '' }}">Blog</a></li>
            <li class="sidebar-nav-item"><a href="{{ route('contact') }}" class="sidebar-nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
            <li class="sidebar-nav-item"><a href="{{ route('produit') }}" class="sidebar-nav-link {{ request()->routeIs('produit') ? 'active' : '' }}">Produits</a></li>
            @auth
                <li class="sidebar-nav-item"><a href="{{ route('tasks.index') }}" class="sidebar-nav-link {{ request()->routeIs('tasks.*') ? 'active' : '' }}">Taches</a></li>
            @endauth
        </ul>

        <div class="sidebar-auth">
            @auth
                <div class="sidebar-auth-name">{{ Auth::user()->name }}</div>
                <a href="{{ route('profile.edit') }}" class="sidebar-nav-link">Profile</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="sidebar-nav-action">Log out</button>
                </form>
            @endauth
        </div>
    </aside>

    <div class="container">
        @yield('content')
        {{ $slot ?? '' }}
    </div>

    <footer class="site-footer">
        <p>&copy; {{ date('Y') }} Mon Site Laravel. Tous droits reserves.</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleBtn = document.getElementById('toggle-sidebar');
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebar-overlay');

            function setAriaOpen() {
                if (toggleBtn) toggleBtn.setAttribute('aria-expanded', 'true');
                if (sidebar) sidebar.setAttribute('aria-hidden', 'false');
                if (overlay) overlay.setAttribute('aria-hidden', 'false');
            }

            function setAriaClosed() {
                if (toggleBtn) toggleBtn.setAttribute('aria-expanded', 'false');
                if (sidebar) sidebar.setAttribute('aria-hidden', 'true');
                if (overlay) overlay.setAttribute('aria-hidden', 'true');
            }

            function closeSidebar() {
                sidebar.classList.remove('active');
                toggleBtn.classList.remove('active');
                overlay.classList.remove('active');
                setAriaClosed();
            }

            function openSidebar() {
                sidebar.classList.add('active');
                toggleBtn.classList.add('active');
                overlay.classList.add('active');
                setAriaOpen();
            }

            if (toggleBtn && sidebar && overlay) {
                // Initialize aria states
                setAriaClosed();

                // Toggle sidebar on button click
                toggleBtn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    if (sidebar.classList.contains('active')) {
                        closeSidebar();
                    } else {
                        openSidebar();
                    }
                });

                // Close sidebar when overlay is clicked
                overlay.addEventListener('click', function() {
                    closeSidebar();
                });

                // Close sidebar when a link is clicked on mobile
                const sidebarLinks = sidebar.querySelectorAll('a, button');
                sidebarLinks.forEach(link => {
                    link.addEventListener('click', function() {
                        if (window.innerWidth <= 640) {
                            closeSidebar();
                        }
                    });
                });

                // Close sidebar when clicking outside on mobile
                document.addEventListener('click', function(event) {
                    if (window.innerWidth <= 640) {
                        if (sidebar.classList.contains('active') &&
                            !sidebar.contains(event.target) &&
                            !toggleBtn.contains(event.target)) {
                            closeSidebar();
                        }
                    }
                });

                // Handle window resize
                window.addEventListener('resize', function() {
                    if (window.innerWidth > 640) {
                        closeSidebar();
                    }
                });
            }
        });
    </script>

    @yield('scripts')
</body>
</html>
