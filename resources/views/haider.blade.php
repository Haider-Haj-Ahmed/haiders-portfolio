<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haider Al-Haj Ahmed | Backend Architect</title>
    <meta name="description" content="Portfolio of Haider Al-Haj Ahmed - Software Engineer & Backend Developer specializing in scalable Laravel systems.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'deep-slate': '#0a0a0a',
                        'obsidian': '#121212',
                        'cyan-accent': '#00f0ff',
                        'violet-accent': '#bd00ff',
                    },
                    fontFamily: {
                        'mono': ['JetBrains Mono', 'monospace'],
                        'sans': ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Three.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/three@0.157.0/build/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.157.0/examples/js/controls/OrbitControls.js"></script>

    <style>
        /* Floating animations */
        @keyframes floatPhoto {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        .animate-float-photo {
            animation: floatPhoto 6s ease-in-out infinite;
        }

        @keyframes floatIcon {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-12px); }
        }
        .float-icon {
            animation: floatIcon 5s ease-in-out infinite;
            filter: drop-shadow(0 0 10px rgba(0, 240, 255, 0.8));
            pointer-events: none;
            z-index: 20;
        }
        .float-icon:nth-child(1) { animation-duration: 5s; animation-delay: 0s; }
        .float-icon:nth-child(2) { animation-duration: 6s; animation-delay: -2s; }
        .float-icon:nth-child(3) { animation-duration: 4.5s; animation-delay: -4s; }
        .float-icon:nth-child(4) { animation-duration: 5.5s; animation-delay: -1s; }
        .float-icon:nth-child(5) { animation-duration: 6.5s; animation-delay: -3s; }

        /* Glow ring */
        @keyframes glowPulse {
            0% { box-shadow: 0 0 0 0 rgba(0, 240, 255, 0.4); }
            70% { box-shadow: 0 0 0 15px rgba(0, 240, 255, 0); }
            100% { box-shadow: 0 0 0 0 rgba(0, 240, 255, 0); }
        }
        .glow-ring {
            animation: glowPulse 3s infinite;
        }

        .cursor-blink::after {
            content: '_';
            animation: blink 1s step-end infinite;
        }
        @keyframes blink {
            50% { opacity: 0; }
        }

        /* Fade-up */
        .fade-up {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }
        .fade-up.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Flip cards */
        .flip-card {
            perspective: 1000px;
        }
        .flip-card-inner {
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }
        .flip-card:hover .flip-card-inner,
        .flip-card.flipped .flip-card-inner {
            transform: rotateY(180deg);
        }
        .flip-card-front, .flip-card-back {
            backface-visibility: hidden;
        }
        .flip-card-back {
            transform: rotateY(180deg);
        }

        /* 3D Canvas */
        #three-canvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            pointer-events: none;
            filter: blur(3px);
        }
        .content-layer {
            position: relative;
            z-index: 1;
        }

        /* Navbar states */
        .navbar-scrolled {
            background: rgba(10, 10, 10, 0.8) !important;
            backdrop-filter: blur(16px);
            box-shadow: 0 4px 20px rgba(0, 240, 255, 0.1);
        }
        .navbar-hidden {
            transform: translateY(-120%);
            opacity: 0;
            transition: transform 0.4s ease, opacity 0.4s ease;
        }
        .navbar-visible {
            transform: translateY(0);
            opacity: 1;
            transition: transform 0.4s ease, opacity 0.4s ease;
        }

        /* Custom scrollbars */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        ::-webkit-scrollbar-track {
            background: #121212;
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, #00f0ff, #bd00ff);
            border-radius: 10px;
            border: 1px solid rgba(0,0,0,0.3);
        }
        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(180deg, #bd00ff, #00f0ff);
        }

        #terminal-output::-webkit-scrollbar {
            width: 4px;
        }
        #terminal-output::-webkit-scrollbar-track {
            background: #0a0a0a;
        }
        #terminal-output::-webkit-scrollbar-thumb {
            background: #00f0ff;
            border-radius: 10px;
        }

        * {
            scrollbar-width: thin;
            scrollbar-color: #00f0ff #121212;
        }

        /* Adjust floating icon sizes for mobile */
        @media (max-width: 640px) {
            .float-icon {
                font-size: 1.5rem !important;
            }
        }
    </style>
</head>
<body class="bg-deep-slate text-gray-200 font-sans antialiased">

<canvas id="three-canvas"></canvas>

<!-- Navbar -->
<nav id="navbar" class="fixed top-3 left-3 right-3 md:top-4 md:left-6 md:right-6 z-50 py-2 md:py-3 transition-all duration-500 bg-white/5 backdrop-blur-md rounded-xl md:rounded-2xl border border-white/10 shadow-lg navbar-visible">
    <div class="container mx-auto px-4 md:px-6 flex justify-between items-center">
        <div class="flex items-center gap-2">
            <i class="fas fa-laptop-code text-xl md:text-2xl text-cyan-accent"></i>
            <span class="font-mono text-sm md:text-lg font-bold text-white">Haider Al-Haj Ahmed</span>
        </div>
        <div class="hidden md:flex gap-6 text-sm font-medium text-gray-300">
            <a href="#hero" class="hover:text-cyan-accent transition">Home</a>
            <a href="#about" class="hover:text-cyan-accent transition">About</a>
            <a href="#tech-stack" class="hover:text-cyan-accent transition">Arsenal</a>
            <a href="#projects" class="hover:text-cyan-accent transition">Projects</a>
            <a href="#philosophy" class="hover:text-cyan-accent transition">Philosophy</a>
            <a href="#contact" class="hover:text-cyan-accent transition">Contact</a>
        </div>
        <button id="mobileMenuBtn" class="md:hidden text-2xl text-gray-300 hover:text-cyan-accent">
            <i class="fas fa-bars"></i>
        </button>
    </div>
    <div id="mobileMenu" class="fixed top-0 right-0 h-full w-64 bg-obsidian/95 backdrop-blur-lg shadow-2xl transform translate-x-full transition-transform duration-500 z-50 md:hidden rounded-l-2xl">
        <div class="p-6 pt-20 flex flex-col gap-6">
            <button id="closeMenuBtn" class="absolute top-5 right-5 text-2xl text-gray-400"><i class="fas fa-times"></i></button>
            <a href="#hero" class="nav-link-mobile text-gray-300 font-medium text-lg py-2 border-b border-gray-800">Home</a>
            <a href="#about" class="nav-link-mobile text-gray-300 font-medium text-lg py-2 border-b border-gray-800">About</a>
            <a href="#tech-stack" class="nav-link-mobile text-gray-300 font-medium text-lg py-2 border-b border-gray-800">Arsenal</a>
            <a href="#projects" class="nav-link-mobile text-gray-300 font-medium text-lg py-2 border-b border-gray-800">Projects</a>
            <a href="#philosophy" class="nav-link-mobile text-gray-300 font-medium text-lg py-2 border-b border-gray-800">Philosophy</a>
            <a href="#contact" class="nav-link-mobile text-gray-300 font-medium text-lg py-2">Contact</a>
        </div>
    </div>
</nav>

<!-- Hero Section – adjusted mobile spacing -->
<section id="hero" class="min-h-screen flex items-center justify-center px-4 pt-20 md:pt-0 pb-16 md:pb-0 relative overflow-hidden content-layer">
    <div class="w-full max-w-6xl flex flex-col lg:flex-row items-center gap-8 lg:gap-16 relative z-10">
        <!-- Terminal -->
        <div class="w-full lg:w-1/2">
            <div class="bg-obsidian/90 backdrop-blur-sm border border-gray-800 rounded-xl shadow-2xl overflow-hidden">
                <div class="flex items-center px-4 py-3 bg-gray-900/90 border-b border-gray-800">
                    <div class="flex space-x-2">
                        <div class="w-3 h-3 rounded-full bg-red-500"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                    </div>
                    <span class="ml-4 text-xs font-mono text-gray-400">haider@portfolio ~</span>
                </div>
                <div class="p-6 font-mono text-sm md:text-base">
                    <div id="terminal-output" class="space-y-2 min-h-[200px] text-gray-300 max-h-[400px] overflow-y-auto">
                        <p class="text-cyan-accent">Welcome to Haider Al-Haj Ahmed's portfolio.</p>
                        <p>Type <span class="text-violet-accent font-bold">help</span> to see available commands.</p>
                    </div>
                    <div class="flex items-center mt-4">
                        <span class="text-cyan-accent mr-2">❯</span>
                        <input type="text" id="terminal-input"
                               class="bg-transparent outline-none flex-1 text-white font-mono caret-cyan-accent"
                               placeholder="Type a command..."
                               autofocus>
                    </div>
                </div>
            </div>
        </div>

        <!-- Photo – reduced size on mobile -->
        <div class="w-full lg:w-1/2 flex justify-center items-center">
            <div class="relative w-56 h-56 sm:w-64 sm:h-64 md:w-80 md:h-80 lg:w-[420px] lg:h-[420px]">
                <span class="float-icon absolute text-4xl sm:text-5xl md:text-6xl -top-5 left-1/2 transform -translate-x-1/2" style="font-size: 3rem;">⚙️</span>
                <span class="float-icon absolute text-4xl sm:text-5xl md:text-6xl top-1/2 -right-5 transform -translate-y-1/2" style="font-size: 2.5rem;">🐘</span>
                <span class="float-icon absolute text-4xl sm:text-5xl md:text-6xl -bottom-5 left-1/2 transform -translate-x-1/2" style="font-size: 2.8rem;">⚡</span>
                <span class="float-icon absolute text-4xl sm:text-5xl md:text-6xl top-1/2 -left-5 transform -translate-y-1/2" style="font-size: 2.5rem;">📦</span>
                <span class="float-icon absolute text-4xl sm:text-5xl md:text-6xl top-0 left-0 transform -translate-x-1/2 -translate-y-1/2" style="font-size: 2.2rem;">🔀</span>

                <div class="absolute inset-0 rounded-full overflow-hidden shadow-2xl ring-4 ring-cyan-accent/30 glow-ring animate-float-photo z-10">
                    <div class="absolute inset-0 bg-gradient-to-tr from-cyan-accent/20 to-violet-accent/20 z-10 rounded-full"></div>
                    <img src="/haider3.jpeg" alt="Haider Al-Haj Ahmed"
                         class="w-full h-full object-cover object-top scale-105 transition-transform duration-700 hover:scale-110">
                </div>
                <div class="absolute -bottom-6 -left-6 w-24 h-24 bg-cyan-accent/10 rounded-full blur-2xl opacity-60 animate-pulse"></div>
                <div class="absolute -top-6 -right-6 w-20 h-20 bg-violet-accent/10 rounded-full blur-xl opacity-50 animate-pulse delay-700"></div>
            </div>
        </div>
    </div>

    <!-- Scroll down arrow -->
    <div class="absolute bottom-6 left-0 right-0 flex justify-center animate-bounce">
        <a href="#about" class="text-gray-500 hover:text-cyan-accent transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
            <span class="text-xs">Scroll down</span>
        </a>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-24 px-4 fade-up content-layer">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl md:text-5xl font-mono font-bold text-white mb-6">
            <span class="text-cyan-accent">> </span>whois<span class="text-violet-accent">.about</span>
        </h2>
        <p class="text-lg md:text-xl text-gray-400 max-w-2xl mx-auto leading-relaxed">
            I'm Haider Al-Haj Ahmed, a Software Engineering student at <span class="text-cyan-accent font-semibold">Homs University</span> and a freelance backend developer. My journey started with a passion for translating complex ideas into clean, maintainable code. As a former freelance translator, I learned that precision and structure matter – the same principles I now apply to architecting robust backend systems.
        </p>
        <p class="mt-4 text-gray-500">
            I specialize in building <span class="text-white font-medium">Laravel APIs</span> that scale elegantly, with a deep respect for separation of concerns and clean code.
        </p>
    </div>
</section>

<!-- Tech Stack - Arsenal -->
<section id="tech-stack" class="py-24 px-4 bg-obsidian fade-up content-layer">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl md:text-5xl font-mono font-bold text-center text-white mb-16">
            <span class="text-cyan-accent">> </span>cat<span class="text-violet-accent">.arsenal</span>
        </h2>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Skill cards (same as before) -->
            <div class="flip-card h-48 cursor-pointer">
                <div class="flip-card-inner relative w-full h-full">
                    <div class="flip-card-front absolute inset-0 bg-gray-900 border border-gray-800 rounded-xl flex flex-col items-center justify-center p-4">
                        <span class="text-4xl mb-2">⚙️</span>
                        <h3 class="font-mono font-bold text-lg text-white">Laravel</h3>
                    </div>
                    <div class="flip-card-back absolute inset-0 bg-gray-800 border border-cyan-accent/30 rounded-xl flex flex-col items-center justify-center p-4 text-center">
                        <p class="text-cyan-accent font-mono font-bold text-sm mb-1">Proficiency</p>
                        <div class="w-full bg-gray-700 h-1 rounded-full overflow-hidden">
                            <div class="bg-cyan-accent h-full w-[95%]"></div>
                        </div>
                        <p class="text-xs text-gray-400 mt-2">Expert in building robust APIs and full-stack apps</p>
                    </div>
                </div>
            </div>
            <div class="flip-card h-48 cursor-pointer">
                <div class="flip-card-inner relative w-full h-full">
                    <div class="flip-card-front absolute inset-0 bg-gray-900 border border-gray-800 rounded-xl flex flex-col items-center justify-center p-4">
                        <span class="text-4xl mb-2">🐘</span>
                        <h3 class="font-mono font-bold text-lg text-white">PHP</h3>
                    </div>
                    <div class="flip-card-back absolute inset-0 bg-gray-800 border border-violet-accent/30 rounded-xl flex flex-col items-center justify-center p-4 text-center">
                        <p class="text-violet-accent font-mono font-bold text-sm mb-1">Proficiency</p>
                        <div class="w-full bg-gray-700 h-1 rounded-full overflow-hidden">
                            <div class="bg-violet-accent h-full w-[90%]"></div>
                        </div>
                        <p class="text-xs text-gray-400 mt-2">OOP, MVC, modern PHP 8+ features</p>
                    </div>
                </div>
            </div>
            <div class="flip-card h-48 cursor-pointer">
                <div class="flip-card-inner relative w-full h-full">
                    <div class="flip-card-front absolute inset-0 bg-gray-900 border border-gray-800 rounded-xl flex flex-col items-center justify-center p-4">
                        <span class="text-4xl mb-2">⚡</span>
                        <h3 class="font-mono font-bold text-lg text-white">Livewire</h3>
                    </div>
                    <div class="flip-card-back absolute inset-0 bg-gray-800 border border-cyan-accent/30 rounded-xl flex flex-col items-center justify-center p-4 text-center">
                        <p class="text-cyan-accent font-mono font-bold text-sm mb-1">Proficiency</p>
                        <div class="w-full bg-gray-700 h-1 rounded-full overflow-hidden">
                            <div class="bg-cyan-accent h-full w-[85%]"></div>
                        </div>
                        <p class="text-xs text-gray-400 mt-2">Dynamic interfaces with server-side power</p>
                    </div>
                </div>
            </div>
            <div class="flip-card h-48 cursor-pointer">
                <div class="flip-card-inner relative w-full h-full">
                    <div class="flip-card-front absolute inset-0 bg-gray-900 border border-gray-800 rounded-xl flex flex-col items-center justify-center p-4">
                        <span class="text-4xl mb-2">📦</span>
                        <h3 class="font-mono font-bold text-lg text-white">MySQL</h3>
                    </div>
                    <div class="flip-card-back absolute inset-0 bg-gray-800 border border-violet-accent/30 rounded-xl flex flex-col items-center justify-center p-4 text-center">
                        <p class="text-violet-accent font-mono font-bold text-sm mb-1">Proficiency</p>
                        <div class="w-full bg-gray-700 h-1 rounded-full overflow-hidden">
                            <div class="bg-violet-accent h-full w-[80%]"></div>
                        </div>
                        <p class="text-xs text-gray-400 mt-2">Schema design, optimization, Eloquent</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-24 px-4 fade-up content-layer">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-3xl md:text-5xl font-mono font-bold text-center text-white mb-16">
            <span class="text-cyan-accent">> </span>ls<span class="text-violet-accent">.projects</span>
        </h2>
        <div class="flex flex-wrap justify-center gap-8">
            <!-- Project 1: TechTalk API -->
            <div class="w-full sm:w-80 lg:w-96 bg-obsidian/90 backdrop-blur-sm border border-gray-800 rounded-xl p-6 hover:border-cyan-accent/50 transition-colors group">
                <div class="flex justify-between items-start">
                    <h3 class="text-xl font-mono font-bold text-white group-hover:text-cyan-accent">TechTalk API</h3>
                    <a href="https://github.com/Haider-Haj-Ahmed/laravel-blog-api.git" target="_blank" class="text-gray-500 hover:text-white transition-colors" title="View on GitHub">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                    </a>
                </div>
                <div class="flex flex-wrap gap-2 mt-3">
                    <span class="px-2 py-1 text-xs rounded bg-cyan-accent/20 text-cyan-accent font-mono">Laravel 12</span>
                    <span class="px-2 py-1 text-xs rounded bg-violet-accent/20 text-violet-accent font-mono">Sanctum</span>
                    <span class="px-2 py-1 text-xs rounded bg-gray-700 text-gray-300 font-mono">MySQL</span>
                </div>
                <p class="text-gray-400 mt-4 text-sm">A scalable content & auth platform with OTP verification and a personalized feed.</p>
                <button onclick="toggleCaseStudy('case1')" class="mt-4 text-cyan-accent font-mono text-sm hover:underline inline-flex items-center gap-1">
                    Read case study <span id="case1-icon">▼</span>
                </button>
                <div id="case1" class="hidden mt-4 pt-4 border-t border-gray-800 text-sm space-y-3">
                    <div><h4 class="font-bold text-white">Problem</h4><p class="text-gray-400">Build a secure backend for a social platform with auth, post management, and a recommendation engine.</p></div>
                    <div><h4 class="font-bold text-white">Solution</h4><p class="text-gray-400">Used Laravel Sanctum for token-based auth with OTP, implemented CRUD with draft state, and designed a personalized feed based on user interactions.</p></div>
                    <div><h4 class="font-bold text-white">My Role & Achievement</h4><p class="text-gray-400">Sole backend developer. Architected a clean, maintainable API with strict separation of concerns.</p></div>
                </div>
            </div>

            <!-- Project 2: WorkNetSYR API -->
            <div class="w-full sm:w-80 lg:w-96 bg-obsidian/90 backdrop-blur-sm border border-gray-800 rounded-xl p-6 hover:border-violet-accent/50 transition-colors group">
                <div class="flex justify-between items-start">
                    <h3 class="text-xl font-mono font-bold text-white group-hover:text-violet-accent">WorkNetSYR API</h3>
                    <a href="https://github.com/Haider-Haj-Ahmed/worknetsyr-api.git" target="_blank" class="text-gray-500 hover:text-white transition-colors" title="View on GitHub">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                    </a>
                </div>
                <div class="flex flex-wrap gap-2 mt-3">
                    <span class="px-2 py-1 text-xs rounded bg-violet-accent/20 text-violet-accent font-mono">Laravel</span>
                    <span class="px-2 py-1 text-xs rounded bg-cyan-accent/20 text-cyan-accent font-mono">REST API</span>
                    <span class="px-2 py-1 text-xs rounded bg-gray-700 text-gray-300 font-mono">MySQL</span>
                </div>
                <p class="text-gray-400 mt-4 text-sm">A job-market API connecting professionals with project owners in Syria.</p>
                <button onclick="toggleCaseStudy('case2')" class="mt-4 text-cyan-accent font-mono text-sm hover:underline inline-flex items-center gap-1">
                    Read case study <span id="case2-icon">▼</span>
                </button>
                <div id="case2" class="hidden mt-4 pt-4 border-t border-gray-800 text-sm space-y-3">
                    <div><h4 class="font-bold text-white">Problem</h4><p class="text-gray-400">Create a comprehensive API to bridge talented professionals and project owners for the "Forsa" mobile app.</p></div>
                    <div><h4 class="font-bold text-white">Solution</h4><p class="text-gray-400">Co-developed the backend using Laravel with high-level abstractions and advanced software engineering principles.</p></div>
                    <div><h4 class="font-bold text-white">My Role & Achievement</h4><p class="text-gray-400">Backend co-developer. Delivered a production-ready, scalable codebase through rigorous methodology.</p></div>
                </div>
            </div>

            <!-- Project 3: Dental Clinic API -->
            <div class="w-full sm:w-80 lg:w-96 bg-obsidian/90 backdrop-blur-sm border border-gray-800 rounded-xl p-6 hover:border-cyan-accent/50 transition-colors group">
                <div class="flex justify-between items-start">
                    <h3 class="text-xl font-mono font-bold text-white group-hover:text-cyan-accent">Dental Clinic API</h3>
                    <a href="https://github.com/Haider-Haj-Ahmed/dental-clinic.git" target="_blank" class="text-gray-500 hover:text-white transition-colors" title="View on GitHub">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                    </a>
                </div>
                <div class="flex flex-wrap gap-2 mt-3">
                    <span class="px-2 py-1 text-xs rounded bg-cyan-accent/20 text-cyan-accent font-mono">Laravel 13</span>
                    <span class="px-2 py-1 text-xs rounded bg-violet-accent/20 text-violet-accent font-mono">Sanctum</span>
                    <span class="px-2 py-1 text-xs rounded bg-gray-700 text-gray-300 font-mono">MySQL</span>
                </div>
                <p class="text-gray-400 mt-4 text-sm">Comprehensive REST API for dental clinics: appointments, patient records, odontogram, billing, inventory.</p>
                <button onclick="toggleCaseStudy('case3')" class="mt-4 text-cyan-accent font-mono text-sm hover:underline inline-flex items-center gap-1">
                    Read case study <span id="case3-icon">▼</span>
                </button>
                <div id="case3" class="hidden mt-4 pt-4 border-t border-gray-800 text-sm space-y-3">
                    <div><h4 class="font-bold text-white">Problem</h4><p class="text-gray-400">Dental practices need a robust, offline‑capable backend handling appointments, clinical charting, billing, and recalls – without monolithic overhead.</p></div>
                    <div><h4 class="font-bold text-white">Solution</h4><p class="text-gray-400">Architected a versioned Laravel API (v1) with Sanctum tokens, scoped abilities, soft‑delete patients, queued reminders, and dedicated modules for tooth/perio charting, treatment plans, invoices, and low‑stock inventory alerts.</p></div>
                    <div><h4 class="font-bold text-white">My Role & Achievement</h4><p class="text-gray-400">Sole backend architect. Implemented the entire API surface (~60+ endpoints) following JSON:API conventions, throttling, and mobile‑first authentication flow.</p></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Philosophy & Architecture -->
<section id="philosophy" class="py-24 px-4 bg-obsidian fade-up content-layer">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl md:text-5xl font-mono font-bold text-center text-white mb-16">
            <span class="text-cyan-accent">> </span>how<span class="text-violet-accent">.build</span>
        </h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="group p-6 bg-gray-900 border border-gray-800 rounded-xl hover:border-cyan-accent transition-all duration-300">
                <div class="text-3xl mb-4">🧩</div>
                <h3 class="font-mono font-bold text-white group-hover:text-cyan-accent">OOP</h3>
                <p class="text-gray-400 text-sm mt-2">I model real-world entities using classes, inheritance, and polymorphism to keep code modular and extensible.</p>
            </div>
            <div class="group p-6 bg-gray-900 border border-gray-800 rounded-xl hover:border-violet-accent transition-all duration-300">
                <div class="text-3xl mb-4">📂</div>
                <h3 class="font-mono font-bold text-white group-hover:text-violet-accent">MVC</h3>
                <p class="text-gray-400 text-sm mt-2">Separation of concerns is non-negotiable. Controllers handle requests, models encapsulate data, and views present it.</p>
            </div>
            <div class="group p-6 bg-gray-900 border border-gray-800 rounded-xl hover:border-cyan-accent transition-all duration-300">
                <div class="text-3xl mb-4">🧹</div>
                <h3 class="font-mono font-bold text-white group-hover:text-cyan-accent">Clean Code</h3>
                <p class="text-gray-400 text-sm mt-2">Readability, meaningful names, and small functions make my codebase a pleasure to maintain.</p>
            </div>
            <div class="group p-6 bg-gray-900 border border-gray-800 rounded-xl hover:border-violet-accent transition-all duration-300">
                <div class="text-3xl mb-4">🔗</div>
                <h3 class="font-mono font-bold text-white group-hover:text-violet-accent">Separation of Concerns</h3>
                <p class="text-gray-400 text-sm mt-2">Each layer of the application has a single responsibility, ensuring scalability and testability.</p>
            </div>
        </div>
        <div class="mt-16 flex justify-center">
            <div class="bg-gray-900 border border-gray-800 p-6 rounded-xl max-w-2xl w-full">
                <p class="text-center font-mono text-sm text-gray-400 mb-4">Typical System Architecture</p>
                <div class="flex flex-col md:flex-row items-center justify-center gap-2 md:gap-1 text-xs font-mono text-gray-300">
                    <div class="bg-cyan-accent/20 border border-cyan-accent/50 px-3 py-1 rounded">Client</div>
                    <span class="md:hidden text-gray-600 my-1">↓</span>
                    <span class="hidden md:inline text-gray-600">→</span>
                    <div class="bg-violet-accent/20 border border-violet-accent/50 px-3 py-1 rounded">API Gateway</div>
                    <span class="md:hidden text-gray-600 my-1">↓</span>
                    <span class="hidden md:inline text-gray-600">→</span>
                    <div class="bg-cyan-accent/20 border border-cyan-accent/50 px-3 py-1 rounded">App Logic</div>
                    <span class="md:hidden text-gray-600 my-1">↓</span>
                    <span class="hidden md:inline text-gray-600">→</span>
                    <div class="bg-violet-accent/20 border border-violet-accent/50 px-3 py-1 rounded">Database</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-24 px-4 text-center fade-up content-layer">
    <h2 class="text-3xl md:text-5xl font-mono font-bold text-white mb-6">
        <span class="text-cyan-accent">> </span>connect<span class="text-violet-accent">.now</span>
    </h2>
    <p class="text-gray-400 mb-10">Let's build something scalable together.</p>
    <div class="flex flex-wrap justify-center gap-6">
        <a href="mailto:haideralhajahmed2@gmail.com" class="inline-flex items-center gap-2 bg-gray-900 hover:bg-cyan-accent/10 border border-gray-800 hover:border-cyan-accent text-white font-mono px-6 py-3 rounded-lg transition-all">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/></svg>
            Email
        </a>
        <a href="https://github.com/Haider-Haj-Ahmed" target="_blank" class="inline-flex items-center gap-2 bg-gray-900 hover:bg-violet-accent/10 border border-gray-800 hover:border-violet-accent text-white font-mono px-6 py-3 rounded-lg transition-all">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
            GitHub
        </a>
        <a href="https://instagram.com/haider_cz" target="_blank" class="inline-flex items-center gap-2 bg-gray-900 hover:bg-pink-600/20 border border-gray-800 hover:border-pink-500 text-white font-mono px-6 py-3 rounded-lg transition-all">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
            Instagram
        </a>
        <a href="https://t.me/haider_cz" target="_blank" class="inline-flex items-center gap-2 bg-gray-900 hover:bg-blue-500/20 border border-gray-800 hover:border-blue-400 text-white font-mono px-6 py-3 rounded-lg transition-all">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.446 1.394c-.14.18-.357.295-.6.295-.002 0-.003 0-.005 0l.213-3.054 5.56-5.022c.24-.213-.054-.334-.373-.121l-6.869 4.326-2.96-.924c-.64-.203-.658-.64.135-.954l11.566-4.458c.538-.196 1.006.128.832.941z"/></svg>
            Telegram
        </a>
        <a href="https://wa.me/0932938041" target="_blank" class="inline-flex items-center gap-2 bg-gray-900 hover:bg-green-500/20 border border-gray-800 hover:border-green-400 text-white font-mono px-6 py-3 rounded-lg transition-all">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297a11.815 11.815 0 00-8.417-3.488c-6.558 0-11.896 5.339-11.896 11.904 0 2.097.549 4.144 1.591 5.947l-1.742 6.361 6.507-1.708a11.862 11.862 0 005.544 1.41c6.557 0 11.896-5.338 11.896-11.904 0-3.179-1.24-6.17-3.483-8.422z"/></svg>
            WhatsApp
        </a>
    </div>
    <div class="mt-10 flex flex-col items-center gap-2">
        <p class="text-gray-500 text-sm font-mono flex items-center gap-2">
            <i class="fas fa-laptop-code text-cyan-accent text-xl"></i> Haider Al-Haj Ahmed
        </p>
        <p class="text-gray-600 text-xs">Built with Laravel & Tailwind</p>
    </div>
</section>

<!-- Three.js Scene -->
<script>
    (function() {
        const canvas = document.getElementById('three-canvas');
        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 0.1, 100);
        camera.position.set(0, 1.5, 8);
        camera.lookAt(0, 0.5, 0);
        const renderer = new THREE.WebGLRenderer({ canvas, alpha: true, antialias: true });
        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
        renderer.setSize(window.innerWidth, window.innerHeight);

        const ambientLight = new THREE.AmbientLight(0x222244, 2.5);
        scene.add(ambientLight);
        const keyLight = new THREE.DirectionalLight(0xffffff, 3);
        keyLight.position.set(5, 5, 5);
        scene.add(keyLight);
        const rimLight = new THREE.DirectionalLight(0x00f0ff, 2);
        rimLight.position.set(-5, 0, -5);
        scene.add(rimLight);
        const accentLight = new THREE.PointLight(0xbd00ff, 2.5, 10);
        accentLight.position.set(2, 1, 2);
        scene.add(accentLight);

        const laptopGroup = new THREE.Group();
        const bodyMat = new THREE.MeshStandardMaterial({ color: 0x2a2a2a, metalness: 0.85, roughness: 0.25 });
        const screenMat = new THREE.MeshStandardMaterial({ color: 0x0a0a0a, metalness: 0.3, roughness: 0.1, emissive: 0x001122, emissiveIntensity: 0.4 });
        const accentMat = new THREE.MeshStandardMaterial({ color: 0x00f0ff, metalness: 0.9, roughness: 0.2, emissive: 0x00f0ff, emissiveIntensity: 0.6 });

        const base = new THREE.Mesh(new THREE.BoxGeometry(2.6, 0.1, 1.8), bodyMat);
        laptopGroup.add(base);
        const baseTop = new THREE.Mesh(new THREE.BoxGeometry(2.5, 0.08, 1.7), new THREE.MeshStandardMaterial({ color: 0x333333, metalness: 0.9, roughness: 0.2 }));
        baseTop.position.y = 0.09;
        laptopGroup.add(baseTop);
        const trackpad = new THREE.Mesh(new THREE.BoxGeometry(0.8, 0.02, 0.5), bodyMat);
        trackpad.position.set(0, 0.11, -0.4);
        laptopGroup.add(trackpad);

        const keyMat = new THREE.MeshStandardMaterial({ color: 0x1a1a1a, metalness: 0.5, roughness: 0.4 });
        for (let row = 0; row < 4; row++) {
            for (let col = 0; col < 10; col++) {
                const key = new THREE.Mesh(new THREE.BoxGeometry(0.16, 0.02, 0.1), keyMat);
                key.position.set(-0.9 + col * 0.2, 0.11, 0.1 + row * 0.18);
                laptopGroup.add(key);
            }
        }

        const screenGroup = new THREE.Group();
        screenGroup.position.set(0, 0.15, -0.75);
        screenGroup.rotation.x = -0.25;
        const screen = new THREE.Mesh(new THREE.BoxGeometry(2.4, 1.5, 0.08), screenMat);
        screen.position.y = 0.8;
        screenGroup.add(screen);
        const bezel = new THREE.Mesh(new THREE.BoxGeometry(2.5, 1.6, 0.09), new THREE.MeshStandardMaterial({ color: 0x111111, metalness: 0.95, roughness: 0.15 }));
        bezel.position.set(0, 0.8, -0.02);
        screenGroup.add(bezel);
        const cameraDot = new THREE.Mesh(new THREE.SphereGeometry(0.03, 8, 8), accentMat);
        cameraDot.position.set(0, 1.55, 0.06);
        screenGroup.add(cameraDot);
        const glowBar = new THREE.Mesh(new THREE.BoxGeometry(2.5, 0.03, 0.04), accentMat);
        glowBar.position.set(0, 0.05, 0.06);
        screenGroup.add(glowBar);
        laptopGroup.add(screenGroup);

        const hingeGlow = new THREE.Mesh(new THREE.CylinderGeometry(0.03, 0.03, 2.3, 8), accentMat);
        hingeGlow.rotation.z = Math.PI / 2;
        hingeGlow.position.set(0, 0.14, -0.78);
        laptopGroup.add(hingeGlow);
        laptopGroup.position.set(0, 0.3, 0);
        scene.add(laptopGroup);

        const binaryGroup = new THREE.Group();
        const columnsCount = 30;
        for (let c = 0; c < columnsCount; c++) {
            const x = (Math.random() - 0.5) * 12;
            const z = (Math.random() - 0.5) * 10;
            const speed = 0.01 + Math.random() * 0.04;
            const opacity = 0.15 + Math.random() * 0.3;
            for (let r = 0; r < 25; r++) {
                const char = Math.random() > 0.5 ? '0' : '1';
                const fontSize = 0.15 + Math.random() * 0.15;
                const textCanvas = document.createElement('canvas');
                textCanvas.width = 64;
                textCanvas.height = 64;
                const ctx = textCanvas.getContext('2d');
                ctx.fillStyle = `rgba(0, 240, 255, ${opacity})`;
                ctx.font = 'bold 40px JetBrains Mono, monospace';
                ctx.textAlign = 'center';
                ctx.textBaseline = 'middle';
                ctx.fillText(char, 32, 32);
                const texture = new THREE.CanvasTexture(textCanvas);
                texture.minFilter = THREE.LinearFilter;
                texture.magFilter = THREE.LinearFilter;
                const spriteMat = new THREE.SpriteMaterial({ map: texture, transparent: true, blending: THREE.AdditiveBlending });
                const sprite = new THREE.Sprite(spriteMat);
                sprite.position.set(x, Math.random() * 6 - 2, z);
                sprite.scale.set(fontSize, fontSize, 1);
                sprite.userData = { speed: speed, resetY: 4 + Math.random() * 2 };
                binaryGroup.add(sprite);
            }
        }
        scene.add(binaryGroup);

        const starsGeo = new THREE.BufferGeometry();
        const starsCount = 600;
        const starsPositions = new Float32Array(starsCount * 3);
        for (let i = 0; i < starsCount * 3; i += 3) {
            starsPositions[i] = (Math.random() - 0.5) * 20;
            starsPositions[i + 1] = (Math.random() - 0.5) * 12;
            starsPositions[i + 2] = (Math.random() - 0.5) * 15;
        }
        starsGeo.setAttribute('position', new THREE.BufferAttribute(starsPositions, 3));
        const starsMat = new THREE.PointsMaterial({ color: 0xffffff, size: 0.03, transparent: true, opacity: 0.6, blending: THREE.AdditiveBlending });
        const stars = new THREE.Points(starsGeo, starsMat);
        scene.add(stars);

        const clock = new THREE.Clock();
        function animate() {
            requestAnimationFrame(animate);
            const elapsed = clock.getElapsedTime();
            laptopGroup.position.y = 0.3 + Math.sin(elapsed * 1.2) * 0.25;
            laptopGroup.rotation.y = Math.sin(elapsed * 0.4) * 0.3;
            laptopGroup.rotation.x = Math.sin(elapsed * 0.5) * 0.05;
            screenGroup.rotation.x = -0.25 + Math.sin(elapsed * 0.7) * 0.05;
            binaryGroup.children.forEach(sprite => {
                sprite.position.y -= sprite.userData.speed;
                if (sprite.position.y < -3) sprite.position.y = sprite.userData.resetY;
            });
            stars.rotation.y += 0.0002;
            stars.rotation.x += 0.0001;
            accentLight.intensity = 2.5 + Math.sin(elapsed * 2) * 0.8;
            renderer.render(scene, camera);
        }
        animate();

        window.addEventListener('resize', () => {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
        });
    })();
</script>

<!-- Main Scripts -->
<script>
    // ── Smart Navbar Show/Hide ──
    const navbar = document.getElementById('navbar');
    let lastScrollY = window.scrollY;
    const scrollThreshold = 80;
    function updateNavbar() {
        const currentScrollY = window.scrollY;
        if (currentScrollY <= 0) {
            navbar.classList.remove('navbar-hidden', 'navbar-scrolled');
            navbar.classList.add('navbar-visible');
            return;
        }
        if (currentScrollY > scrollThreshold) {
            navbar.classList.add('navbar-scrolled');
        } else {
            navbar.classList.remove('navbar-scrolled');
        }
        if (currentScrollY > lastScrollY && currentScrollY > 100) {
            navbar.classList.add('navbar-hidden');
            navbar.classList.remove('navbar-visible');
        } else if (currentScrollY < lastScrollY) {
            navbar.classList.remove('navbar-hidden');
            navbar.classList.add('navbar-visible');
        }
        lastScrollY = currentScrollY;
    }
    window.addEventListener('scroll', updateNavbar, { passive: true });

    // ── Mobile Menu ──
    const menuBtn = document.getElementById('mobileMenuBtn');
    const closeBtn = document.getElementById('closeMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    function toggleMenu(show) {
        if (show) { mobileMenu.classList.remove('translate-x-full'); document.body.style.overflow = 'hidden'; }
        else { mobileMenu.classList.add('translate-x-full'); document.body.style.overflow = ''; }
    }
    menuBtn?.addEventListener('click', () => toggleMenu(true));
    closeBtn?.addEventListener('click', () => toggleMenu(false));
    document.querySelectorAll('.nav-link-mobile').forEach(link => {
        link.addEventListener('click', () => toggleMenu(false));
    });

    // ── Terminal CLI ──
    const outputDiv = document.getElementById('terminal-output');
    const inputField = document.getElementById('terminal-input');

    const commands = {
        'whois': 'Haider Al-Haj Ahmed — Software Engineer & Backend Developer.<br>Studies at Homs University, building scalable systems with Laravel.',
        'skills': 'Core: Laravel, PHP, Livewire, JavaScript, MySQL<br>Principles: REST APIs, OOP, MVC, Clean Code, Separation of Concerns.',
        'projects': '1. TechTalk API - Social platform with auth & feeds<br>2. WorkNetSYR API - Job market connector (Forsa app)<br>3. Dental Clinic API - Clinic management system',
        'clear': () => { outputDiv.innerHTML = ''; return ''; },
        'help': 'Available commands: <span class="text-cyan-accent">whois, skills, projects, clear, help, contact, laravel, php, livewire, mysql, oop, mvc, api</span>',
        'contact': 'Email: haideralhajahmed2@gmail.com<br>GitHub: github.com/Haider-Haj-Ahmed<br>Instagram: haider_cz<br>Telegram: haider_cz<br>WhatsApp: 0932938041',
        'laravel': 'Laravel – a PHP web application framework with elegant syntax. It provides tools for routing, authentication, caching, and more, allowing me to build robust and maintainable APIs quickly.',
        'php': 'PHP – the server-side scripting language that powers the web. I use modern PHP (8+) with OOP principles to write clean, efficient backend logic.',
        'livewire': 'Livewire – a full-stack framework for Laravel that makes building dynamic interfaces simple without leaving the comfort of PHP. It handles AJAX calls and DOM updates seamlessly.',
        'mysql': 'MySQL – the world’s most popular open-source relational database. I design normalized schemas, write optimized queries, and use Eloquent ORM to interact with data elegantly.',
        'oop': 'Object-Oriented Programming – a paradigm that organizes code into objects containing data and methods. I use inheritance, encapsulation, and polymorphism to create modular, reusable software.',
        'mvc': 'Model-View-Controller – an architectural pattern that separates an application into three interconnected components. This separation keeps my code organized, scalable, and testable.',
        'api': 'REST API – Representational State Transfer, a set of constraints for building web services. I design APIs that are stateless, resource-oriented, and follow HTTP standards for seamless client-server communication.'
    };

    inputField.addEventListener('keydown', function(e) {
        if (e.key === 'Enter') {
            const cmd = inputField.value.trim().toLowerCase();
            inputField.value = '';
            if (cmd === '') return;

            const cmdLine = document.createElement('p');
            cmdLine.innerHTML = `<span class="text-cyan-accent">❯</span> <span class="text-white">${cmd}</span>`;
            outputDiv.appendChild(cmdLine);

            if (commands[cmd]) {
                const response = document.createElement('p');
                if (typeof commands[cmd] === 'function') {
                    commands[cmd]();
                } else {
                    response.innerHTML = commands[cmd];
                    response.classList.add('text-gray-300');
                    outputDiv.appendChild(response);
                }
            } else {
                const errorMsg = document.createElement('p');
                errorMsg.innerHTML = `<span class="text-red-400">Command not found: ${cmd}</span>. Type <span class="text-violet-accent">help</span> for options.`;
                outputDiv.appendChild(errorMsg);
            }
            outputDiv.scrollTop = outputDiv.scrollHeight;
        }
    });

    // ── Toggle case studies ──
    function toggleCaseStudy(id) {
        const el = document.getElementById(id);
        const icon = document.getElementById(id + '-icon');
        el.classList.toggle('hidden');
        if (icon) icon.textContent = el.classList.contains('hidden') ? '▼' : '▲';
    }

    // ── Scroll fade-up ──
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) entry.target.classList.add('visible');
        });
    }, { threshold: 0.1 });
    document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));
</script>
</body>
</html>
