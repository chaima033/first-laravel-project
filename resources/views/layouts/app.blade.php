<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title', 'Mon Site Laravel')</title>
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
			display: flex;
			flex-direction: column;
		}

		.site-nav {
			position: sticky;
			top: 0;
			z-index: 50;
			background: rgba(253, 247, 239, 0.86);
			backdrop-filter: blur(10px);
			border-bottom: 1px solid var(--brand-border);
		}

		.site-nav-list {
			list-style: none;
			display: flex;
			gap: 10px;
			max-width: 1100px;
			margin: 0 auto;
			padding: 14px 18px;
			overflow-x: auto;
		}

		.site-nav-link {
			color: var(--brand-ink);
			text-decoration: none;
			font-weight: 700;
			padding: 9px 14px;
			border-radius: 999px;
			transition: 0.2s ease;
			white-space: nowrap;
		}

		.site-nav-link:hover {
			background: #ffe8d5;
			color: #7a2f12;
		}

		.site-nav-link.active {
			background: var(--brand-accent);
			color: #fff;
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
		}

		@media (max-width: 640px) {
			.container {
				width: 94vw;
				margin: 18px auto;
			}

			.hero,
			.panel {
				padding: 14px;
			}
		}
	</style>
	@yield('styles')
</head>
<body>
	<nav class="site-nav">
		<ul class="site-nav-list">
			<li><a href="/home" class="site-nav-link {{ request()->is('home') ? 'active' : '' }}">Accueil</a></li>
			<li><a href="/about" class="site-nav-link {{ request()->is('about') ? 'active' : '' }}">A propos</a></li>
			<li><a href="/services" class="site-nav-link {{ request()->is('services') ? 'active' : '' }}">Services</a></li>
			<li><a href="/blog" class="site-nav-link {{ request()->is('blog') || request()->is('blog/*') ? 'active' : '' }}">Blog</a></li>
			<li><a href="/tasks" class="site-nav-link {{ request()->is('tasks') || request()->is('tasks/*') ? 'active' : '' }}">Taches</a></li>
			<li><a href="/contact" class="site-nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
		</ul>
	</nav>

	<div class="container">
		@yield('content')
	</div>

	<footer class="site-footer">
		<p>&copy; {{ date('Y') }} Mon Site Laravel. Tous droits reserves.</p>
	</footer>
	@yield('scripts')
</body>
</html>
