<!DOCTYPE html>
<html lang="id" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio of Eka Rizky Nauvan Nurilham — Web Developer & Informatics Student. I build websites that work — and look like they mean it.">
    <meta name="author" content="Eka Rizky Nauvan Nurilham">

    <!-- Open Graph -->
    <meta property="og:title" content="Eka Rizky Nauvan Nurilham — Web Developer">
    <meta property="og:description" content="I build websites that work — and look like they mean it.">
    <meta property="og:type" content="website">

    <title>@yield('title', 'Eka Rizky Nauvan Nurilham — Web Developer')</title>
    <link rel="icon" type="image/png" href="{{ asset('logo-icon.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600&family=Fira+Code:wght@400;700&display=swap" rel="stylesheet">

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js" defer></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Loader -->
    <div class="loader" id="loader">
        <div class="loader-text">ERN</div>
    </div>


    <!-- Navbar -->
    <nav class="navbar" id="navbar">
        <div class="container nav-container">
            <a href="{{ route('home') }}" class="logo">ERN<span class="logo-dot">.</span></a>
            <button class="hamburger" id="hamburger" aria-label="Toggle menu">
                <span></span><span></span><span></span>
            </button>
            <ul class="nav-links" id="navLinks">
                <li><a href="{{ route('home') }}#about">About</a></li>
                <li><a href="{{ route('home') }}#skills">Skills</a></li>
                <li><a href="{{ route('home') }}#projects">Projects</a></li>
                <li><a href="{{ route('home') }}#contact">Contact</a></li>
                <li><button class="theme-toggle" id="themeToggle" aria-label="Toggle theme">
                    <svg class="icon-sun" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"/><path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/></svg>
                    <svg class="icon-moon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"/></svg>
                </button></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-left">
                    <span class="footer-logo">ERN<span class="logo-dot">.</span></span>
                    <p class="footer-tagline">Designed & built by<br>Eka Rizky Nauvan Nurilham</p>
            </div>
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Eka Rizky Nauvan Nurilham. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
