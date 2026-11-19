<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="PT Nusa Sensa Teknologi - Solusi Rekayasa IoT (Internet of Things), Konsultan IT Terpercaya, dan Software House Enterprise di Indonesia.">
    <meta name="keywords"
        content="IoT Indonesia, Smart Hardware, IT Consultant, Software House, Telemetri, Firmware, Cloud Architecture, PT Nusa Sensa Teknologi">

    <title>PT Nusa Sensa Teknologi | IoT Engineering, IT Consultant & Software House</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon/favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">

    <!-- Google Fonts: Plus Jakarta Sans, Inter, JetBrains Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="bg-[#f8faff] text-slate-800 antialiased selection:bg-[#006dff] selection:text-white relative overflow-x-hidden">

    <!-- =========================================================================
         NAVIGATION HEADER (SKYSHI-STYLE GLASSMORPHIC)
         ========================================================================= -->
    <header
        class="fixed top-0 inset-x-0 z-50 bg-white/65 backdrop-blur-[12px] border-b border-[#d4dff8]/70 transition-all">
        <div class="mx-auto flex h-20 max-w-7xl items-center justify-between px-5 sm:px-8 lg:px-10">

            <!-- Brand Logo -->
            <a href="#hero" class="flex items-center group py-1" aria-label="Nusa Sensa Home">
                <img src="{{ asset('images/ic_mark_primary.png') }}" alt="PT Nusa Sensa Teknologi"
                    class="h-9 sm:h-16 w-auto object-contain transition-transform group-hover:scale-102">
            </a>

            <!-- Desktop Navigation Links (Skyshi Style) -->
            <nav id="site-navigation"
                class="hidden min-[1080px]:flex items-center gap-7 text-sm font-medium text-slate-600">
                <a href="#hero"
                    class="inline-flex items-center gap-1 text-[#006dff] font-semibold hover:text-[#0e4197] transition-colors">
                    Beranda
                </a>

                <!-- Dropdown Layanan & Solusi -->
                <div class="relative group">
                    <button type="button"
                        class="inline-flex items-center gap-1.5 py-2 hover:text-[#006dff] transition-colors cursor-pointer"
                        id="nav-dropdown-btn">
                        <span>Layanan &amp; Solusi</span>
                        <svg class="h-4 w-4 text-slate-400 group-hover:text-[#006dff] group-hover:rotate-180 transition-transform"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <!-- Dropdown Menu -->
                    <div
                        class="invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-200 absolute left-0 top-full mt-1 w-64 rounded-xl border border-[#d4dff8] bg-white/95 backdrop-blur-md p-2.5 shadow-xl shadow-blue-900/5">
                        <a href="#services"
                            class="flex items-start gap-2.5 rounded-lg p-2.5 hover:bg-blue-50/80 transition-colors">
                            <div
                                class="flex h-7 w-7 items-center justify-center rounded-md bg-blue-100 text-[#006dff] shrink-0 mt-0.5">
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                                </svg>
                            </div>
                            <div>
                                <div class="text-xs font-semibold text-slate-800">Internet of Things (IoT)</div>
                                <div class="text-[11px] text-slate-500">Hardware, PCB &amp; Firmware</div>
                            </div>
                        </a>
                        <a href="#services"
                            class="flex items-start gap-2.5 rounded-lg p-2.5 hover:bg-blue-50/80 transition-colors">
                            <div
                                class="flex h-7 w-7 items-center justify-center rounded-md bg-cyan-100 text-cyan-700 shrink-0 mt-0.5">
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                            </div>
                            <div>
                                <div class="text-xs font-semibold text-slate-800">IT Consultant</div>
                                <div class="text-[11px] text-slate-500">Arsitektur Cloud &amp; Audit</div>
                            </div>
                        </a>
                        <a href="#services"
                            class="flex items-start gap-2.5 rounded-lg p-2.5 hover:bg-blue-50/80 transition-colors">
                            <div
                                class="flex h-7 w-7 items-center justify-center rounded-md bg-indigo-100 text-indigo-700 shrink-0 mt-0.5">
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                </svg>
                            </div>
                            <div>
                                <div class="text-xs font-semibold text-slate-800">Software House</div>
                                <div class="text-[11px] text-slate-500">Web Dashboard &amp; Mobile Apps</div>
                            </div>
                        </a>
                    </div>
                </div>

                <a href="#live-telemetry"
                    class="inline-flex items-center gap-1.5 hover:text-[#006dff] transition-colors">
                    <span class="h-2 w-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    Live Telemetri
                </a>
                <a href="#workflow" class="hover:text-[#006dff] transition-colors">Alur Kerja</a>
                <a href="#why-us" class="hover:text-[#006dff] transition-colors">Keunggulan</a>
                <a href="#faq" class="hover:text-[#006dff] transition-colors">FAQ</a>
            </nav>

            <!-- Right Side: CTA Button & Mobile Hamburger Toggle -->
            <div class="flex items-center gap-3">
                <a href="#contact"
                    class="hidden sm:inline-flex items-center justify-center rounded-lg bg-[#006dff] px-6 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-[#0e4197] active:scale-95 transition-all">
                    Mulai Konsultasi
                </a>

                <!-- Mobile Hamburger Button -->
                <button id="mobile-menu-btn" type="button"
                    class="min-[1080px]:hidden flex h-10 w-10 items-center justify-center rounded-lg border border-[#d4dff8] text-slate-700 hover:bg-blue-50 transition-colors"
                    aria-label="Toggle navigation">
                    <svg id="menu-icon-bars" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg id="menu-icon-close" class="h-5 w-5 hidden" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Dropdown Drawer -->
        <div id="mobile-menu-drawer"
            class="hidden min-[1080px]:hidden border-t border-[#d4dff8] bg-white/95 backdrop-blur-lg px-6 py-5 shadow-2xl">
            <div class="flex flex-col gap-4 text-sm font-medium text-slate-700">
                <a href="#hero" class="mobile-nav-link text-[#006dff] font-semibold py-1">Beranda</a>
                <a href="#services" class="mobile-nav-link py-1">Layanan (IoT, Cloud, Software)</a>
                <a href="#live-telemetry" class="mobile-nav-link py-1 flex items-center gap-2">
                    <span class="h-2 w-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    Live Telemetri
                </a>
                <a href="#workflow" class="mobile-nav-link py-1">Alur Kerja</a>
                <a href="#why-us" class="mobile-nav-link py-1">Keunggulan</a>
                <a href="#faq" class="mobile-nav-link py-1">FAQ</a>
                <a href="#contact"
                    class="mobile-nav-link mt-2 text-center rounded-lg bg-[#006dff] py-2.5 text-white font-semibold">
                    Mulai Konsultasi
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content Container -->
    <main class="relative z-10 pt-20 overflow-x-clip">

        <!-- =========================================================================
             SKY MOTION ATMOSPHERE (BLUEPRINT GRID, SOLAR BUILDINGS & WIND TURBINES)
             ========================================================================= -->
        <div class="pointer-events-none absolute inset-x-0 top-0 h-[880px] w-full overflow-hidden -z-10"
            aria-hidden="true">
            <svg class="w-full h-full" viewBox="0 0 1920 880" preserveAspectRatio="xMidYMin slice" fill="none">
                <defs>
                    <linearGradient id="hero-sky-grad" x1="0" y1="0" x2="0" y2="1">
                        <stop offset="0%" stop-color="#e2edff" />
                        <stop offset="45%" stop-color="#f0f6ff" />
                        <stop offset="100%" stop-color="#f8faff" />
                    </linearGradient>

                    <radialGradient id="hero-orb-grad" cx="50%" cy="50%" r="50%">
                        <stop offset="0%" stop-color="#006dff" stop-opacity="0.16" />
                        <stop offset="50%" stop-color="#38bdf8" stop-opacity="0.06" />
                        <stop offset="100%" stop-color="#38bdf8" stop-opacity="0" />
                    </radialGradient>

                    <pattern id="hero-sky-grid" width="64" height="64" patternUnits="userSpaceOnUse">
                        <path d="M 64 0 L 0 0 0 64" fill="none" stroke="#d4dff8" stroke-width="1"
                            stroke-opacity="0.75" />
                    </pattern>
                </defs>

                <!-- Sky Gradient Background -->
                <rect width="1920" height="880" fill="url(#hero-sky-grad)" />

                <!-- Blueprint / Sky Grid -->
                <rect width="1920" height="880" fill="url(#hero-sky-grid)" opacity="0.8" />

                <!-- Central Radiant Orb -->
                <circle cx="960" cy="380" r="420" fill="url(#hero-orb-grad)" />

                <!-- Expanding Signal / Radar Rings -->
                <circle cx="960" cy="380" r="240" stroke="#006dff" stroke-width="1.5" stroke-opacity="0.3" fill="none"
                    class="animate-hero-ring" />
                <circle cx="960" cy="380" r="240" stroke="#00d2ff" stroke-width="1.5" stroke-opacity="0.3" fill="none"
                    class="animate-hero-ring-late" />

                <!-- Drifting Stylized Clouds -->
                <g class="animate-cloud-a" opacity="0.75">
                    <g transform="translate(0, 110)">
                        <rect x="-110" y="-10" width="220" height="36" rx="18" fill="#ffffff" fill-opacity="0.85" />
                        <circle cx="-42" cy="-12" r="32" fill="#ffffff" fill-opacity="0.85" />
                        <circle cx="18" cy="-24" r="40" fill="#ffffff" fill-opacity="0.85" />
                        <circle cx="64" cy="-6" r="28" fill="#ffffff" fill-opacity="0.85" />
                    </g>
                </g>
                <g class="animate-cloud-b" opacity="0.6">
                    <g transform="translate(0, 190) scale(0.75)">
                        <rect x="-110" y="-10" width="220" height="36" rx="18" fill="#ffffff" fill-opacity="0.85" />
                        <circle cx="-42" cy="-12" r="32" fill="#ffffff" fill-opacity="0.85" />
                        <circle cx="18" cy="-24" r="40" fill="#ffffff" fill-opacity="0.85" />
                        <circle cx="64" cy="-6" r="28" fill="#ffffff" fill-opacity="0.85" />
                    </g>
                </g>
            </svg>
        </div>
        <!-- =========================================================================
             BACKGROUND SVG CIRCUIT GUIDE & DRONE LINE-FOLLOWER
             ========================================================================= -->
        <div class="pointer-events-none absolute inset-0 z-0 overflow-hidden" aria-hidden="true">
            <!-- Full Height Circuit SVG Path & Integrated Robot Drone -->
            <svg id="circuit-track-svg" class="w-full h-full overflow-visible" fill="none">
                <defs>
                    <!-- Circuit Gradient -->
                    <linearGradient id="circuit-gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                        <stop offset="0%" stop-color="#3b82f6" stop-opacity="0.35" />
                        <stop offset="30%" stop-color="#006dff" stop-opacity="0.8" />
                        <stop offset="70%" stop-color="#00d2ff" stop-opacity="0.8" />
                        <stop offset="100%" stop-color="#10b981" stop-opacity="0.6" />
                    </linearGradient>

                    <!-- Drone Beam Gradient -->
                    <linearGradient id="drone-beam-gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                        <stop offset="0%" stop-color="#00d2ff" stop-opacity="0.5" />
                        <stop offset="100%" stop-color="#00d2ff" stop-opacity="0" />
                    </linearGradient>

                    <!-- Glow Filter -->
                    <filter id="circuit-glow" x="-20%" y="-20%" width="140%" height="140%">
                        <feGaussianBlur stdDeviation="4" result="blur" />
                        <feComposite in="SourceGraphic" in2="blur" operator="over" />
                    </filter>

                    <!-- Drone Drop Shadow Filter -->
                    <filter id="drone-shadow" x="-50%" y="-50%" width="200%" height="200%">
                        <feDropShadow dx="0" dy="8" stdDeviation="12" flood-color="#006dff" flood-opacity="0.35" />
                    </filter>

                    <!-- FPV Carbon Weave Pattern -->
                    <pattern id="fpv-carbon-weave" width="4" height="4" patternUnits="userSpaceOnUse">
                        <rect width="4" height="4" fill="#080d1a" />
                        <rect width="2" height="2" fill="#141f36" />
                        <rect x="2" y="2" width="2" height="2" fill="#141f36" />
                    </pattern>

                    <!-- Two-Tone FPV Motor: Chrome Lower Base + Anodized Cyan Top Bell -->
                    <g id="fpv-twotone-motor">
                        <!-- Cyan TPU Arm Bumper Guard (Underneath motor tip, like photo) -->
                        <rect x="-9.5" y="-9.5" width="19" height="19" rx="5" fill="#00d2ff" stroke="#38bdf8" stroke-width="0.8" />
                        <!-- Chrome / Silver Lower Base Ring -->
                        <circle cx="0" cy="0" r="8" fill="#cbd5e1" stroke="#64748b" stroke-width="0.8" />
                        <!-- Anodized Blue/Cyan Upper Motor Bell -->
                        <circle cx="0" cy="0" r="7" fill="#0284c7" stroke="#00ffff" stroke-width="0.8" />
                        <!-- Motor CNC Spoke Cutouts -->
                        <circle cx="0" cy="0" r="4.8" fill="#0f172a" stroke="#0284c7" stroke-width="0.6" />
                        <circle cx="0" cy="0" r="3.2" fill="#b45309" /> <!-- Copper Stator Coils -->
                        <!-- Anodized Blue Titanium Center Nut -->
                        <circle cx="0" cy="0" r="2.2" fill="#006dff" stroke="#00ffff" stroke-width="0.6" />
                    </g>

                    <!-- Ice-Blue Translucent Tri-Blade Propeller (CW) -->
                    <g id="fpv-ice-triblade-cw">
                        <path d="M 0 0 C 3 4 8 12 17 15 C 12 11 6 5 0 0" fill="#38bdf8" fill-opacity="0.85" stroke="#e0f2fe" stroke-width="0.6" />
                        <path d="M 0 0 C 3 4 8 12 17 15 C 12 11 6 5 0 0" fill="#38bdf8" fill-opacity="0.85" stroke="#e0f2fe" stroke-width="0.6" transform="rotate(120)" />
                        <path d="M 0 0 C 3 4 8 12 17 15 C 12 11 6 5 0 0" fill="#38bdf8" fill-opacity="0.85" stroke="#e0f2fe" stroke-width="0.6" transform="rotate(240)" />
                        <!-- Leading Edge Shiny Highlights -->
                        <path d="M 0 0 C 3 4 8 12 17 15" fill="none" stroke="#ffffff" stroke-width="0.8" opacity="0.75" />
                        <path d="M 0 0 C 3 4 8 12 17 15" fill="none" stroke="#ffffff" stroke-width="0.8" opacity="0.75" transform="rotate(120)" />
                        <path d="M 0 0 C 3 4 8 12 17 15" fill="none" stroke="#ffffff" stroke-width="0.8" opacity="0.75" transform="rotate(240)" />
                        <!-- Center Hub Cap -->
                        <circle cx="0" cy="0" r="3" fill="#0284c7" stroke="#38bdf8" stroke-width="0.8" />
                    </g>

                    <!-- Ice-Blue Translucent Tri-Blade Propeller (CCW) -->
                    <g id="fpv-ice-triblade-ccw">
                        <path d="M 0 0 C -3 4 -8 12 -17 15 C -12 11 -6 5 0 0" fill="#38bdf8" fill-opacity="0.85" stroke="#e0f2fe" stroke-width="0.6" />
                        <path d="M 0 0 C -3 4 -8 12 -17 15 C -12 11 -6 5 0 0" fill="#38bdf8" fill-opacity="0.85" stroke="#e0f2fe" stroke-width="0.6" transform="rotate(120)" />
                        <path d="M 0 0 C -3 4 -8 12 -17 15 C -12 11 -6 5 0 0" fill="#38bdf8" fill-opacity="0.85" stroke="#e0f2fe" stroke-width="0.6" transform="rotate(240)" />
                        <path d="M 0 0 C -3 4 -8 12 -17 15" fill="none" stroke="#ffffff" stroke-width="0.8" opacity="0.75" />
                        <path d="M 0 0 C -3 4 -8 12 -17 15" fill="none" stroke="#ffffff" stroke-width="0.8" opacity="0.75" transform="rotate(120)" />
                        <path d="M 0 0 C -3 4 -8 12 -17 15" fill="none" stroke="#ffffff" stroke-width="0.8" opacity="0.75" transform="rotate(240)" />
                        <circle cx="0" cy="0" r="3" fill="#0284c7" stroke="#38bdf8" stroke-width="0.8" />
                    </g>
                </defs>

                <!-- Base Faint Circuit Line -->
                <path id="circuit-guide-path" d="M 0 0" stroke="#dbeafe" stroke-width="3" stroke-dasharray="8 8"
                    fill="none" />

                <!-- Active Progress Trail (Fills as user scrolls) -->
                <path id="circuit-trail-path" d="M 0 0" stroke="url(#circuit-gradient)" stroke-width="4"
                    filter="url(#circuit-glow)" fill="none" />

                <!-- Circuit Nodes along the route (Rendered dynamically) -->
                <g id="circuit-nodes-group"></g>

                <!-- =============================================================
                     THE FPV RACING / FREESTYLE DRONE (AS IN USER PHOTO)
                     ============================================================= -->
                <g id="robot-drone-g" transform="translate(0, 0)" class="will-change-transform">
                    <!-- Scaled compact FPV drone wrapper -->
                    <g transform="scale(0.7)">
                        <!-- Soft Forward Camera Glare (Subtle & Clean) -->
                        <polygon points="0,42 -40,110 40,110" fill="url(#drone-beam-gradient)" opacity="0.25" />

                        <!-- ==========================================
                             SOLID CARBON FIBER RACING ARMS
                             ========================================== -->
                        <!-- Front-Left Arm -->
                        <polygon points="-8,10 -35,22 -44,28 -38,34 -8,18" fill="url(#fpv-carbon-weave)" stroke="#38bdf8" stroke-width="0.8" />
                        <!-- Front-Right Arm -->
                        <polygon points="8,10 35,22 44,28 38,34 8,18" fill="url(#fpv-carbon-weave)" stroke="#38bdf8" stroke-width="0.8" />
                        <!-- Rear-Left Arm -->
                        <polygon points="-8,-8 -33,-26 -42,-32 -36,-38 -8,-16" fill="url(#fpv-carbon-weave)" stroke="#38bdf8" stroke-width="0.8" />
                        <!-- Rear-Right Arm -->
                        <polygon points="8,-8 33,-26 42,-32 36,-38 8,-16" fill="url(#fpv-carbon-weave)" stroke="#38bdf8" stroke-width="0.8" />

                        <!-- Grey Silicone Wire Clips on Arms (Like photo) -->
                        <rect x="-24" y="16" width="4.5" height="7" rx="1.5" fill="#475569" stroke="#64748b" stroke-width="0.5" transform="rotate(-22 -24 16)" />
                        <rect x="22" y="14" width="4.5" height="7" rx="1.5" fill="#475569" stroke="#64748b" stroke-width="0.5" transform="rotate(22 22 14)" />
                        <rect x="-24" y="-22" width="4.5" height="7" rx="1.5" fill="#475569" stroke="#64748b" stroke-width="0.5" transform="rotate(32 -24 -22)" />
                        <rect x="22" y="-24" width="4.5" height="7" rx="1.5" fill="#475569" stroke="#64748b" stroke-width="0.5" transform="rotate(-32 22 -24)" />

                        <!-- ==========================================
                             4 TWO-TONE MOTORS & ICE-BLUE PROPELLERS
                             ========================================== -->
                        <!-- Motor 1: Front-Left (-40, 28) - CCW -->
                        <g transform="translate(-40, 28)">
                            <circle cx="0" cy="0" r="21" fill="#00d2ff" fill-opacity="0.12" stroke="#38bdf8" stroke-width="0.8" stroke-dasharray="3 3"/>
                            <use href="#fpv-twotone-motor" />
                            <use href="#fpv-ice-triblade-ccw" class="animate-rotor-ccw" />
                        </g>

                        <!-- Motor 2: Front-Right (40, 28) - CW -->
                        <g transform="translate(40, 28)">
                            <circle cx="0" cy="0" r="21" fill="#00d2ff" fill-opacity="0.12" stroke="#38bdf8" stroke-width="0.8" stroke-dasharray="3 3"/>
                            <use href="#fpv-twotone-motor" />
                            <use href="#fpv-ice-triblade-cw" class="animate-rotor" />
                        </g>

                        <!-- Motor 3: Rear-Left (-38, -34) - CW -->
                        <g transform="translate(-38, -34)">
                            <circle cx="0" cy="0" r="21" fill="#00d2ff" fill-opacity="0.12" stroke="#38bdf8" stroke-width="0.8" stroke-dasharray="3 3"/>
                            <use href="#fpv-twotone-motor" />
                            <use href="#fpv-ice-triblade-cw" class="animate-rotor" />
                        </g>

                        <!-- Motor 4: Rear-Right (38, -34) - CCW -->
                        <g transform="translate(38, -34)">
                            <circle cx="0" cy="0" r="21" fill="#00d2ff" fill-opacity="0.12" stroke="#38bdf8" stroke-width="0.8" stroke-dasharray="3 3"/>
                            <use href="#fpv-twotone-motor" />
                            <use href="#fpv-ice-triblade-ccw" class="animate-rotor-ccw" />
                        </g>

                        <!-- ==========================================
                             SLENDER FUSELAGE & TOP PLATE WITH CYAN DECALS
                             ========================================== -->
                        <!-- Carbon Top Plate -->
                        <rect x="-9.5" y="-34" width="19" height="58" rx="3" fill="url(#fpv-carbon-weave)" stroke="#1e293b" stroke-width="1.2" />

                        <!-- Geometric Neon Cyan Racing Decals (Matching photo!) -->
                        <path d="M -7 -22 L -3 -14 L -3 10 L -7 18" fill="none" stroke="#00d2ff" stroke-width="1.6" stroke-linecap="round" />
                        <path d="M 7 -22 L 3 -14 L 3 10 L 7 18" fill="none" stroke="#00d2ff" stroke-width="1.6" stroke-linecap="round" />
                        <path d="M -5 -6 L 0 -11 L 5 -6" fill="none" stroke="#00ffff" stroke-width="1.2" stroke-linecap="round" />
                        <path d="M -5 6 L 0 11 L 5 6" fill="none" stroke="#00ffff" stroke-width="1.2" stroke-linecap="round" />

                        <!-- Center Skeleton Cutout with Cyan Accent Insert (Like photo) -->
                        <rect x="-4.5" y="-4" width="9" height="12" rx="1.5" fill="#00d2ff" fill-opacity="0.9" stroke="#38bdf8" stroke-width="0.6" />
                        <rect x="-2" y="-1" width="4" height="6" rx="1" fill="#090d16" />

                        <!-- Titanium Hardware Mounting Screws -->
                        <circle cx="-6.5" cy="18" r="1.1" fill="#cbd5e1" stroke="#475569" stroke-width="0.4" />
                        <circle cx="6.5" cy="18" r="1.1" fill="#cbd5e1" stroke="#475569" stroke-width="0.4" />
                        <circle cx="-6.5" cy="-28" r="1.1" fill="#cbd5e1" stroke="#475569" stroke-width="0.4" />
                        <circle cx="6.5" cy="-28" r="1.1" fill="#cbd5e1" stroke="#475569" stroke-width="0.4" />

                        <!-- ==========================================
                             REAR CYAN TPU TAIL BRACKET & VTX ANTENNA
                             ========================================== -->
                        <!-- Rear Cyan TPU Bracket (Like photo) -->
                        <rect x="-7.5" y="-38" width="15" height="7" rx="2" fill="#00d2ff" stroke="#38bdf8" stroke-width="0.8" />
                        <!-- Yellow XT60 Battery Connector Insert -->
                        <rect x="-4" y="-37" width="8" height="3.5" rx="1" fill="#eab308" stroke="#ca8a04" stroke-width="0.4" />

                        <!-- Horizontal Black Immortal-T Whisker Antenna -->
                        <line x1="-22" y1="-44" x2="22" y2="-44" stroke="#0f172a" stroke-width="2" stroke-linecap="round" />
                        <circle cx="-22" cy="-44" r="1.3" fill="#00d2ff" />
                        <circle cx="22" cy="-44" r="1.3" fill="#00d2ff" />

                        <!-- Black 5.8GHz VTX Antenna Mast -->
                        <line x1="0" y1="-38" x2="0" y2="-56" stroke="#0f172a" stroke-width="3.5" stroke-linecap="round" />
                        <!-- Cylindrical Black Antenna Head (As in photo!) -->
                        <rect x="-4.5" y="-64" width="9" height="9" rx="2.5" fill="#090d16" stroke="#1e293b" stroke-width="1" />
                        <circle cx="0" cy="-59.5" r="1.6" fill="#38bdf8" />

                        <!-- ==========================================
                             FRONT CYAN 3D-PRINTED TPU CANOPY & CAMERA
                             ========================================== -->
                        <!-- Molded Cyan TPU Hood / Canopy (Exact match to photo!) -->
                        <path d="M -9.5 24 L -9.5 38 L -6 44 L 6 44 L 9.5 38 L 9.5 24 L 7 22 L -7 22 Z" 
                              fill="#00d2ff" stroke="#38bdf8" stroke-width="1.2" />

                        <!-- Vertical Airflow Cooling Ribs on Cyan Canopy (Noticeable in photo) -->
                        <line x1="-4" y1="25" x2="-4" y2="39" stroke="#0284c7" stroke-width="1.6" stroke-linecap="round" />
                        <line x1="0" y1="25" x2="0" y2="40" stroke="#0284c7" stroke-width="2" stroke-linecap="round" />
                        <line x1="4" y1="25" x2="4" y2="39" stroke="#0284c7" stroke-width="1.6" stroke-linecap="round" />

                        <!-- Micro FPV Camera Lens (Centered at Nose) -->
                        <circle cx="0" cy="42" r="4.8" fill="#020617" stroke="#0f172a" stroke-width="1.5" />
                        <circle cx="0" cy="42" r="3.4" fill="#1e1b4b" />
                        <circle cx="-1.2" cy="40.8" r="1.3" fill="#00d2ff" opacity="0.9" />
                        <circle cx="1.2" cy="43" r="0.7" fill="#ffffff" opacity="0.85" />
                    </g>
                </g>
            </svg>
        </div>


        <!-- =====================================================================
             SECTION 1: HERO SECTION (CLEAN & CENTERED)
             ===================================================================== -->
        <section id="hero"
            class="relative z-10 mx-auto max-w-5xl px-4 pt-16 pb-28 sm:px-6 lg:px-8 text-center flex flex-col items-center">

            <!-- Pill Tagline -->
            <div
                class="inline-flex items-center gap-2 rounded-full bg-blue-50/90 backdrop-blur-sm border border-blue-200/80 px-4 py-1.5 text-xs font-semibold text-[#0e4197] mb-6 shadow-sm">
                <span class="flex h-2 w-2 rounded-full bg-[#006dff] animate-ping"></span>
                <span>IoT Solutions • IT Consultant • Software House</span>
            </div>

            <!-- Main Headline -->
            <h1
                class="text-4xl sm:text-6xl lg:text-7xl font-extrabold tracking-tight text-slate-900 leading-[1.12] mb-6 font-sans max-w-4xl">
                Hubungkan Dunia Fisik ke Digital dengan
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#0e4197] via-[#006dff] to-[#00d2ff]">
                    Presisi &amp; Keandalan Tinggi
                </span>
            </h1>

            <!-- Subheadline -->
            <p class="text-base sm:text-xl text-slate-600 mb-10 max-w-3xl leading-relaxed">
                <strong>PT Nusa Sensa Teknologi</strong> merekayasa perangkat keras IoT kustom, arsitektur cloud teruji,
                dan aplikasi enterprise modern untuk mengotomasi operasional bisnis Anda dari sensor hingga analitik.
            </p>

            <!-- CTAs -->
            <div class="flex flex-wrap items-center justify-center gap-4 mb-14">
                <a href="#contact"
                    class="inline-flex items-center justify-center rounded-xl bg-[#006dff] px-8 py-4 text-base font-semibold text-white shadow-xl shadow-blue-600/25 hover:bg-[#0e4197] hover:shadow-2xl hover:shadow-blue-500/30 transition-all active:scale-95">
                    Mulai Konsultasi Gratis
                    <svg class="ml-2.5 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
                <a href="#live-telemetry"
                    class="inline-flex items-center justify-center rounded-xl bg-white/90 backdrop-blur-sm border border-slate-200 px-7 py-4 text-base font-semibold text-slate-700 shadow-sm hover:border-blue-400 hover:text-[#006dff] hover:bg-blue-50/50 transition-all">
                    <svg class="mr-2 h-5 w-5 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                    Lihat Live Telemetri
                </a>
            </div>

            <!-- Credibility Badges -->
            <div class="grid grid-cols-3 gap-6 sm:gap-14 pt-8 border-t border-slate-200/80 max-w-2xl w-full">
                <div>
                    <div class="text-3xl sm:text-4xl font-extrabold text-[#0e4197]">50+</div>
                    <div class="text-xs sm:text-sm font-medium text-slate-500 mt-1">Hardware Deployed</div>
                </div>
                <div>
                    <div class="text-3xl sm:text-4xl font-extrabold text-[#0e4197]">99.98%</div>
                    <div class="text-xs sm:text-sm font-medium text-slate-500 mt-1">Uptime Telemetri</div>
                </div>
                <div>
                    <div class="text-3xl sm:text-4xl font-extrabold text-[#0e4197]">100%</div>
                    <div class="text-xs sm:text-sm font-medium text-slate-500 mt-1">Hak Cipta Milik Klien</div>
                </div>
            </div>
        </section>
        <!-- =====================================================================
             SECTION 2: TECH STACK & PROTOCOL TICKER (INFINITE SCROLL)
             ===================================================================== -->
        <section id="tech-stack" class="relative z-10 py-10 bg-white border-y border-slate-200/80 overflow-hidden">
            <div class="mx-auto max-w-7xl px-4 mb-4 text-center">
                <p class="text-xs font-semibold uppercase tracking-widest text-slate-400">
                    Ekosistem Teknologi, Protokol IoT & Cloud Terintegrasi
                </p>
            </div>

            <!-- Ticker Row -->
            <div class="flex overflow-hidden select-none">
                <div
                    class="animate-ticker flex items-center gap-10 whitespace-nowrap text-slate-600 font-medium text-sm">
                    <!-- Set 1 -->
                    <span class="flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-blue-500"></span>ESP32
                        &amp; STM32 Embedded</span>
                    <span class="flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-cyan-500"></span>LoRaWAN
                        &amp; NB-IoT</span>
                    <span class="flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-emerald-500"></span>MQTT
                        / CoAP Protocol</span>
                    <span class="flex items-center gap-2"><span
                            class="h-2 w-2 rounded-full bg-amber-500"></span>Raspberry Pi / Industrial IPC</span>
                    <span class="flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-indigo-500"></span>AWS
                        IoT Core &amp; GCP IoT</span>
                    <span class="flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-red-500"></span>Laravel
                        &amp; Go Microservices</span>
                    <span class="flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-blue-600"></span>Flutter
                        &amp; React Dashboard</span>
                    <span class="flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-teal-500"></span>Modbus
                        RTU / RS485</span>
                    <span class="flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-purple-500"></span>Docker
                        &amp; Kubernetes</span>
                    <span class="flex items-center gap-2"><span
                            class="h-2 w-2 rounded-full bg-slate-500"></span>TimescaleDB &amp; PostgreSQL</span>

                    <!-- Duplicate Set for Seamless Loop -->
                    <span class="flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-blue-500"></span>ESP32
                        &amp; STM32 Embedded</span>
                    <span class="flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-cyan-500"></span>LoRaWAN
                        &amp; NB-IoT</span>
                    <span class="flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-emerald-500"></span>MQTT
                        / CoAP Protocol</span>
                    <span class="flex items-center gap-2"><span
                            class="h-2 w-2 rounded-full bg-amber-500"></span>Raspberry Pi / Industrial IPC</span>
                    <span class="flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-indigo-500"></span>AWS
                        IoT Core &amp; GCP IoT</span>
                    <span class="flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-red-500"></span>Laravel
                        &amp; Go Microservices</span>
                    <span class="flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-blue-600"></span>Flutter
                        &amp; React Dashboard</span>
                    <span class="flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-teal-500"></span>Modbus
                        RTU / RS485</span>
                    <span class="flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-purple-500"></span>Docker
                        &amp; Kubernetes</span>
                    <span class="flex items-center gap-2"><span
                            class="h-2 w-2 rounded-full bg-slate-500"></span>TimescaleDB &amp; PostgreSQL</span>
                </div>
            </div>
        </section>

        <!-- =====================================================================
             SECTION 3: THREE CORE PILLARS (SERVICES GRID)
             ===================================================================== -->
        <section id="services" class="relative z-10 mx-auto max-w-6xl px-4 py-24 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span
                    class="rounded-full bg-blue-50 border border-blue-200 px-3.5 py-1 text-xs font-semibold text-[#0e4197] uppercase tracking-wider">
                    Layanan Utama
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4 tracking-tight">
                    Tiga Pilar Solusi untuk Mengakselerasi Industri Anda
                </h2>
                <p class="text-base sm:text-lg text-slate-600 mt-4 leading-relaxed">
                    Kami menggabungkan keahlian perangkat keras (hardware), kecerdasan komputasi awan (cloud), dan
                    rekayasa perangkat lunak (software) dalam satu atap sinergis.
                </p>
            </div>

            <!-- 3 Pillar Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- CARD 1: IOT SOLUTIONS -->
                <div class="tech-card rounded-2xl p-8 flex flex-col justify-between relative overflow-hidden group">
                    <div
                        class="absolute top-0 right-0 h-32 w-32 bg-blue-500/5 rounded-bl-full pointer-events-none group-hover:scale-110 transition-transform">
                    </div>
                    <div>
                        <!-- Icon -->
                        <div
                            class="flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-100 text-[#0e4197] mb-6 group-hover:bg-[#006dff] group-hover:text-white transition-colors">
                            <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-3">Internet of Things (IoT)</h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6">
                            Rekayasa perangkat keras dari skematik hingga produksi massal. Kami merancang sensor cerdas,
                            gateway telemetri, dan firmware low-power.
                        </p>
                        <!-- Capabilities Checklist -->
                        <ul class="space-y-2.5 text-sm text-slate-700">
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 text-[#006dff]" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Desain Kustom PCB &amp; Prototyping
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 text-[#006dff]" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Firmware C/C++ (FreeRTOS, ESP-IDF)
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 text-[#006dff]" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                LoRaWAN, Cellular (4G/NB-IoT), WiFi
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 text-[#006dff]" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Kalibrasi Sensor Industri &amp; RS485
                            </li>
                        </ul>
                    </div>

                    <div class="mt-8 pt-6 border-t border-slate-100">
                        <a href="#contact"
                            class="inline-flex items-center text-sm font-semibold text-[#006dff] group-hover:translate-x-1 transition-transform">
                            Diskusikan Proyek IoT &rarr;
                        </a>
                    </div>
                </div>

                <!-- CARD 2: IT CONSULTING -->
                <div class="tech-card rounded-2xl p-8 flex flex-col justify-between relative overflow-hidden group">
                    <div
                        class="absolute top-0 right-0 h-32 w-32 bg-cyan-500/5 rounded-bl-full pointer-events-none group-hover:scale-110 transition-transform">
                    </div>
                    <div>
                        <!-- Icon -->
                        <div
                            class="flex h-14 w-14 items-center justify-center rounded-2xl bg-cyan-100 text-cyan-700 mb-6 group-hover:bg-[#00d2ff] group-hover:text-white transition-colors">
                            <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-3">IT Consultant</h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6">
                            Pendampingan strategis untuk modernisasi sistem IT, desain arsitektur data terdistribusi,
                            serta audit keamanan siber dan skalabilitas cloud.
                        </p>
                        <!-- Capabilities Checklist -->
                        <ul class="space-y-2.5 text-sm text-slate-700">
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 text-cyan-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Desain Arsitektur Cloud &amp; Skalabilitas
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 text-cyan-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Audit Infrastruktur &amp; Security Review
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 text-cyan-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Implementasi DevOps &amp; CI/CD Pipeline
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 text-cyan-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                IT Feasibility &amp; Cost Optimization
                            </li>
                        </ul>
                    </div>

                    <div class="mt-8 pt-6 border-t border-slate-100">
                        <a href="#contact"
                            class="inline-flex items-center text-sm font-semibold text-cyan-700 group-hover:translate-x-1 transition-transform">
                            Konsultasi Arsitektur IT &rarr;
                        </a>
                    </div>
                </div>

                <!-- CARD 3: SOFTWARE HOUSE -->
                <div class="tech-card rounded-2xl p-8 flex flex-col justify-between relative overflow-hidden group">
                    <div
                        class="absolute top-0 right-0 h-32 w-32 bg-indigo-500/5 rounded-bl-full pointer-events-none group-hover:scale-110 transition-transform">
                    </div>
                    <div>
                        <!-- Icon -->
                        <div
                            class="flex h-14 w-14 items-center justify-center rounded-2xl bg-indigo-100 text-indigo-700 mb-6 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                            <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-3">Software House</h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6">
                            Pengembangan aplikasi web, mobile (iOS/Android), dashboard telemetri analitik, dan sistem
                            backend enterprise tangguh berstandar industri.
                        </p>
                        <!-- Capabilities Checklist -->
                        <ul class="space-y-2.5 text-sm text-slate-700">
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 text-indigo-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Real-Time Dashboard &amp; SCADA Web
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 text-indigo-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Aplikasi Mobile (Flutter &amp; React Native)
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 text-indigo-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                High-Throughput RESTful &amp; WebSocket API
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 text-indigo-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Integrasi ERP, CRM &amp; Database Telemetri
                            </li>
                        </ul>
                    </div>

                    <div class="mt-8 pt-6 border-t border-slate-100">
                        <a href="#contact"
                            class="inline-flex items-center text-sm font-semibold text-indigo-700 group-hover:translate-x-1 transition-transform">
                            Bangun Software Kustom &rarr;
                        </a>
                    </div>
                </div>

            </div>
        </section>

        <!-- =====================================================================
             SECTION 4: INTERACTIVE LIVE IOT TELEMETRY SIMULATOR
             ===================================================================== -->
        <section id="live-telemetry" class="relative z-10 mx-auto max-w-6xl px-4 py-20 sm:px-6 lg:px-8">
            <div
                class="rounded-3xl bg-white border border-slate-200/90 p-8 sm:p-12 shadow-xl shadow-blue-900/5 relative overflow-hidden">
                <!-- Ambient Subtle Glow Effects -->
                <div
                    class="absolute -top-32 -right-32 h-96 w-96 rounded-full bg-blue-100/60 blur-3xl pointer-events-none">
                </div>
                <div
                    class="absolute -bottom-32 -left-32 h-96 w-96 rounded-full bg-cyan-100/50 blur-3xl pointer-events-none">
                </div>

                <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">

                    <!-- Left Column: Explanation -->
                    <div class="lg:col-span-5 text-slate-800">
                        <div
                            class="inline-flex items-center gap-2 rounded-full bg-cyan-50 border border-cyan-200/80 px-3.5 py-1 text-xs font-mono font-medium text-cyan-800 mb-4 shadow-xs">
                            <span id="telemetry-led" class="h-2 w-2 rounded-full bg-emerald-500"></span>
                            <span>LIVE STREAM // NODE ID: NS-IOT-G408</span>
                        </div>

                        <h2
                            class="text-3xl sm:text-4xl font-extrabold tracking-tight mb-4 text-slate-900 font-sans leading-tight">
                            Simulasi Aliran Data Telemetri Real-Time
                        </h2>
                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-6">
                            Uji langsung bagaimana gateway IoT kami mengirimkan data sensor industri ke cloud secara
                            terenkripsi, stabil, dan presisi dalam hitungan milidetik.
                        </p>

                        <div class="space-y-3 mb-8 text-xs font-mono text-slate-700">
                            <div class="flex items-center gap-2.5">
                                <span
                                    class="flex h-5 w-5 items-center justify-center rounded-full bg-emerald-100 text-emerald-700 text-xs font-bold">&check;</span>
                                <span>Protokol MQTT v5.0 dengan Enkripsi TLS 1.3</span>
                            </div>
                            <div class="flex items-center gap-2.5">
                                <span
                                    class="flex h-5 w-5 items-center justify-center rounded-full bg-emerald-100 text-emerald-700 text-xs font-bold">&check;</span>
                                <span>Automatic Retry &amp; Local Flash Buffer bila Offline</span>
                            </div>
                            <div class="flex items-center gap-2.5">
                                <span
                                    class="flex h-5 w-5 items-center justify-center rounded-full bg-emerald-100 text-emerald-700 text-xs font-bold">&check;</span>
                                <span>Zero-Data Loss Architecture</span>
                            </div>
                        </div>

                        <button id="telemetry-ping-btn"
                            class="inline-flex items-center justify-center rounded-xl bg-[#006dff] hover:bg-[#0e4197] px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-blue-500/20 hover:shadow-xl hover:shadow-blue-500/30 active:scale-95 transition-all">
                            Kirim Sample Telemetri
                            <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                            </svg>
                        </button>
                    </div>

                    <!-- Right Column: Interactive Telemetry HUD Grid -->
                    <div class="lg:col-span-7">
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mb-6">
                            <!-- Metric 1: Temp -->
                            <div class="rounded-2xl bg-slate-50 border border-slate-200/90 p-4 shadow-xs">
                                <div class="text-[11px] font-mono text-slate-500 uppercase font-semibold">Suhu Ruang
                                </div>
                                <div id="telemetry-temp" class="text-2xl font-bold font-mono text-slate-900 mt-1">28.4
                                    °C</div>
                                <div
                                    class="text-[10px] font-semibold text-emerald-700 bg-emerald-50 border border-emerald-200/60 rounded-md px-1.5 py-0.5 mt-1.5 inline-block">
                                    &plusmn; 0.2° Presisi</div>
                            </div>

                            <!-- Metric 2: Humidity -->
                            <div class="rounded-2xl bg-slate-50 border border-slate-200/90 p-4 shadow-xs">
                                <div class="text-[11px] font-mono text-slate-500 uppercase font-semibold">Kelembapan
                                </div>
                                <div id="telemetry-hum" class="text-2xl font-bold font-mono text-slate-900 mt-1">64.2 %
                                </div>
                                <div
                                    class="text-[10px] font-semibold text-cyan-700 bg-cyan-50 border border-cyan-200/60 rounded-md px-1.5 py-0.5 mt-1.5 inline-block">
                                    Nominal RH</div>
                            </div>

                            <!-- Metric 3: Battery -->
                            <div class="rounded-2xl bg-slate-50 border border-slate-200/90 p-4 shadow-xs">
                                <div class="text-[11px] font-mono text-slate-500 uppercase font-semibold">Tegangan Sel
                                </div>
                                <div id="telemetry-volt" class="text-2xl font-bold font-mono text-slate-900 mt-1">3.68 V
                                </div>
                                <div
                                    class="text-[10px] font-semibold text-emerald-700 bg-emerald-50 border border-emerald-200/60 rounded-md px-1.5 py-0.5 mt-1.5 inline-block">
                                    Solar Assisted</div>
                            </div>

                            <!-- Metric 4: RSSI -->
                            <div class="rounded-2xl bg-slate-50 border border-slate-200/90 p-4 shadow-xs">
                                <div class="text-[11px] font-mono text-slate-500 uppercase font-semibold">Sinyal RSSI
                                </div>
                                <div id="telemetry-rssi" class="text-2xl font-bold font-mono text-slate-900 mt-1">-68
                                    dBm</div>
                                <div
                                    class="text-[10px] font-semibold text-emerald-700 bg-emerald-50 border border-emerald-200/60 rounded-md px-1.5 py-0.5 mt-1.5 inline-block">
                                    Sinyal Kuat</div>
                            </div>
                        </div>

                        <!-- Live JSON Stream Box (Clean Light Terminal / Console) -->
                        <div
                            class="rounded-2xl bg-slate-50/90 border border-slate-200/90 p-4 font-mono text-xs text-slate-700 shadow-xs">
                            <div
                                class="flex items-center justify-between pb-2 mb-2 border-b border-slate-200 text-[10px] text-slate-500 font-sans">
                                <div class="flex items-center gap-2 font-mono">
                                    <span class="inline-block h-2 w-2 rounded-full bg-cyan-500 animate-ping"></span>
                                    <span class="font-semibold text-slate-700">MQTT TOPIC:
                                        sensa/telemetry/v1/stream</span>
                                </div>
                                <span class="font-semibold">PAKET: <span id="telemetry-count"
                                        class="text-[#006dff] font-bold font-mono">14,820</span></span>
                            </div>
                            <pre id="telemetry-payload"
                                class="text-[#0e4197] text-[11px] leading-relaxed overflow-x-auto max-h-48 scrollbar-thin bg-white p-3.5 rounded-xl border border-slate-200 font-mono font-medium">{
  "node_id": "NS-IOT-G408",
  "firmware": "v3.1.2-sensa",
  "status": "OK_NOMINAL",
  "cloud_sync": true
}</pre>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- =====================================================================
             SECTION 5: 5-STEP EXECUTION WORKFLOW
             ===================================================================== -->
        <section id="workflow" class="relative z-10 mx-auto max-w-6xl px-4 py-24 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span
                    class="rounded-full bg-blue-50 border border-blue-200 px-3.5 py-1 text-xs font-semibold text-[#0e4197] uppercase tracking-wider">
                    Metodologi Pengerjaan
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4 tracking-tight">
                    5 Langkah Terstruktur Menuju Solusi Siap Produksi
                </h2>
                <p class="text-base sm:text-lg text-slate-600 mt-4 leading-relaxed">
                    Kami memastikan setiap tahapan berjalan transparan, terukur, dan melewati validasi pengujian ketat
                    sebelum dirilis ke lingkungan produksi.
                </p>
            </div>

            <!-- Stacking Sticky Process Cards (Skyshi Style) -->
            <div class="relative space-y-10 sm:space-y-14 pb-12">

                <!-- ==================== STEP 01 ==================== -->
                <div class="sticky rounded-3xl sm:rounded-[32px] p-6 sm:p-10 lg:p-12 transition-all duration-300 shadow-xl border border-blue-200/90 bg-[#f4f8ff] shadow-blue-900/5"
                    style="top: 96px; z-index: 10;">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                        <!-- Left Details -->
                        <div class="lg:col-span-6 xl:col-span-5">
                            <div class="inline-flex items-center justify-center px-4 py-1.5 rounded-xl bg-white border border-blue-200 text-blue-700 font-mono font-bold text-sm shadow-sm mb-6">
                                01
                            </div>
                            <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight mb-4">
                                Discovery, Studi Kelayakan &amp; Arsitektur Solusi
                            </h3>
                            <p class="text-sm sm:text-base text-slate-600 leading-relaxed mb-6">
                                Kami mendalami kebutuhan spesifik bisnis Anda, memetakan tantangan lapangan, mengevaluasi kelayakan teknis komponen perangkat keras, dan merumuskan cetak biru arsitektur sistem yang skalabel.
                            </p>
                            <div class="space-y-2.5">
                                <div class="flex items-start gap-2.5 text-xs sm:text-sm text-slate-700 font-medium">
                                    <svg class="w-4 h-4 text-blue-600 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Benchmarking &amp; pemilihan chipset industri (ESP32, STM32, Nordic nRF)</span>
                                </div>
                                <div class="flex items-start gap-2.5 text-xs sm:text-sm text-slate-700 font-medium">
                                    <svg class="w-4 h-4 text-blue-600 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Simulasi power budget baterai &amp; audit protokol (LoRaWAN / Cellular / MQTT)</span>
                                </div>
                                <div class="flex items-start gap-2.5 text-xs sm:text-sm text-slate-700 font-medium">
                                    <svg class="w-4 h-4 text-blue-600 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Penyusunan Dokumen Spesifikasi Kebutuhan Sistem (SRS) &amp; timeline terukur</span>
                                </div>
                            </div>
                        </div>

                        <!-- Right Interactive Visual -->
                        <div class="lg:col-span-6 xl:col-span-7">
                            <div class="rounded-2xl overflow-hidden border border-blue-200/80 bg-white shadow-md p-5 sm:p-6">
                                <div class="flex items-center justify-between border-b border-slate-100 pb-3 mb-5">
                                    <div class="flex items-center gap-2">
                                        <span class="w-3 h-3 rounded-full bg-blue-500 animate-pulse"></span>
                                        <span class="text-xs font-bold text-slate-800 uppercase tracking-wider">Topologi Arsitektur Sistem</span>
                                    </div>
                                    <span class="text-[11px] font-mono font-medium px-2 py-0.5 rounded bg-blue-50 text-blue-700 border border-blue-100">
                                        Phase 1 Verified
                                    </span>
                                </div>
                                <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 text-center mb-5">
                                    <div class="p-3 rounded-xl bg-slate-50 border border-slate-100">
                                        <div class="w-8 h-8 mx-auto rounded-lg bg-blue-100 text-blue-700 flex items-center justify-center mb-2">
                                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" /></svg>
                                        </div>
                                        <div class="text-xs font-bold text-slate-800">Edge Sensors</div>
                                        <div class="text-[10px] text-slate-500">I2C / RS485 Modbus</div>
                                    </div>
                                    <div class="p-3 rounded-xl bg-slate-50 border border-slate-100">
                                        <div class="w-8 h-8 mx-auto rounded-lg bg-indigo-100 text-indigo-700 flex items-center justify-center mb-2">
                                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                                        </div>
                                        <div class="text-xs font-bold text-slate-800">Smart Gateway</div>
                                        <div class="text-[10px] text-slate-500">ARM Cortex-M4</div>
                                    </div>
                                    <div class="p-3 rounded-xl bg-slate-50 border border-slate-100">
                                        <div class="w-8 h-8 mx-auto rounded-lg bg-sky-100 text-sky-700 flex items-center justify-center mb-2">
                                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0" /></svg>
                                        </div>
                                        <div class="text-xs font-bold text-slate-800">LoRaWAN/MQTT</div>
                                        <div class="text-[10px] text-slate-500">TLS 1.3 / AES-256</div>
                                    </div>
                                    <div class="p-3 rounded-xl bg-slate-50 border border-slate-100">
                                        <div class="w-8 h-8 mx-auto rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center mb-2">
                                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 00-9.78 2.096A4.001 4.001 0 003 15z" /></svg>
                                        </div>
                                        <div class="text-xs font-bold text-slate-800">Cloud &amp; Web</div>
                                        <div class="text-[10px] text-slate-500">TimescaleDB / REST</div>
                                    </div>
                                </div>
                                <div class="bg-blue-50/70 rounded-xl p-3 border border-blue-100 flex items-center justify-between text-xs">
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                        <span class="text-slate-700 font-medium">Estimasi Power Budget: <span class="font-bold text-blue-700">3+ Tahun</span> pada baterai Li-SOCl2 8500mAh</span>
                                    </div>
                                    <span class="font-mono text-[11px] font-semibold text-blue-600">Latency: &lt;65ms</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ==================== STEP 02 ==================== -->
                <div class="sticky rounded-3xl sm:rounded-[32px] p-6 sm:p-10 lg:p-12 transition-all duration-300 shadow-xl border border-amber-200/90 bg-[#fffbeb] shadow-amber-900/5"
                    style="top: 116px; z-index: 20;">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                        <!-- Left Details -->
                        <div class="lg:col-span-6 xl:col-span-5">
                            <div class="inline-flex items-center justify-center px-4 py-1.5 rounded-xl bg-white border border-amber-200 text-amber-800 font-mono font-bold text-sm shadow-sm mb-6">
                                02
                            </div>
                            <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight mb-4">
                                Desain Skematik PCB &amp; Prototyping UI/UX
                            </h3>
                            <p class="text-sm sm:text-base text-slate-600 leading-relaxed mb-6">
                                Merekayasa skematik sirkuit elektronik multi-layer dengan routing impedansi terkontrol, proteksi lonjakan tegangan, perancangan enclosure tahan cuaca, serta mockup visual aplikasi kendali.
                            </p>
                            <div class="space-y-2.5">
                                <div class="flex items-start gap-2.5 text-xs sm:text-sm text-slate-700 font-medium">
                                    <svg class="w-4 h-4 text-amber-600 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Routing multi-layer PCB dengan proteksi ESD, TVS &amp; isolasi optocoupler</span>
                                </div>
                                <div class="flex items-start gap-2.5 text-xs sm:text-sm text-slate-700 font-medium">
                                    <svg class="w-4 h-4 text-amber-600 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Modeling 3D casing enclosure industrial grade dengan standar rating IP65/IP67</span>
                                </div>
                                <div class="flex items-start gap-2.5 text-xs sm:text-sm text-slate-700 font-medium">
                                    <svg class="w-4 h-4 text-amber-600 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Desain antarmuka dashboard responsif (desktop, tablet, mobile) yang ergonomis</span>
                                </div>
                            </div>
                        </div>

                        <!-- Right Interactive Visual -->
                        <div class="lg:col-span-6 xl:col-span-7">
                            <div class="rounded-2xl overflow-hidden border border-amber-200/80 bg-white shadow-md p-5 sm:p-6">
                                <div class="flex items-center justify-between border-b border-slate-100 pb-3 mb-4">
                                    <div class="flex items-center gap-2">
                                        <span class="w-3 h-3 rounded-full bg-amber-500 animate-pulse"></span>
                                        <span class="text-xs font-bold text-slate-800 uppercase tracking-wider">EDA Circuit Board &amp; Enclosure Viewer</span>
                                    </div>
                                    <span class="text-[11px] font-mono font-medium px-2 py-0.5 rounded bg-amber-50 text-amber-800 border border-amber-200">
                                        DRC: 0 Errors (DFM Pass)
                                    </span>
                                </div>
                                <!-- Mockup Circuit Board & Layer Details -->
                                <div class="relative bg-slate-900 rounded-xl p-4 text-emerald-400 font-mono text-xs overflow-hidden mb-4 border border-slate-800">
                                    <div class="flex items-center justify-between border-b border-slate-800 pb-2 mb-3 text-[11px] text-slate-400">
                                        <div class="flex gap-2">
                                            <span class="text-amber-400 font-bold">L1: Top Copper</span>
                                            <span>•</span>
                                            <span>L2: GND Plane</span>
                                            <span>•</span>
                                            <span>L3: Power</span>
                                            <span>•</span>
                                            <span>L4: Bottom</span>
                                        </div>
                                        <span class="text-sky-400">FR4 High-TG 170°C</span>
                                    </div>
                                    <div class="grid grid-cols-3 gap-3 text-[11px]">
                                        <div class="bg-slate-800/80 p-2.5 rounded border border-slate-700/60">
                                            <div class="text-slate-400 text-[10px]">MCU CORE</div>
                                            <div class="text-amber-300 font-bold mt-0.5">ESP32-S3 WROOM</div>
                                            <div class="text-[10px] text-slate-400">Dual-Core 240MHz</div>
                                        </div>
                                        <div class="bg-slate-800/80 p-2.5 rounded border border-slate-700/60">
                                            <div class="text-slate-400 text-[10px]">ISOLATED BUS</div>
                                            <div class="text-amber-300 font-bold mt-0.5">RS-485 / Modbus</div>
                                            <div class="text-[10px] text-slate-400">2.5kVrms Galv. Iso</div>
                                        </div>
                                        <div class="bg-slate-800/80 p-2.5 rounded border border-slate-700/60">
                                            <div class="text-slate-400 text-[10px]">ENCLOSURE CAD</div>
                                            <div class="text-emerald-400 font-bold mt-0.5">IP67 Waterproof</div>
                                            <div class="text-[10px] text-slate-400">Polycarbonate V0</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-amber-50/70 rounded-xl p-3 border border-amber-200/80 flex items-center justify-between text-xs">
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 text-amber-700" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                                        <span class="text-slate-700 font-medium">Validasi DFM Siap Pabrikasi: <span class="font-bold text-amber-900">Gerber &amp; Pick-and-Place Ready</span></span>
                                    </div>
                                    <span class="font-mono text-[11px] font-semibold text-amber-800">4-Layer Stackup</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ==================== STEP 03 ==================== -->
                <div class="sticky rounded-3xl sm:rounded-[32px] p-6 sm:p-10 lg:p-12 transition-all duration-300 shadow-xl border border-purple-200/90 bg-[#faf5ff] shadow-purple-900/5"
                    style="top: 136px; z-index: 30;">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                        <!-- Left Details -->
                        <div class="lg:col-span-6 xl:col-span-5">
                            <div class="inline-flex items-center justify-center px-4 py-1.5 rounded-xl bg-white border border-purple-200 text-purple-700 font-mono font-bold text-sm shadow-sm mb-6">
                                03
                            </div>
                            <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight mb-4">
                                Rekayasa Firmware Real-Time &amp; Cloud Backend
                            </h3>
                            <p class="text-sm sm:text-base text-slate-600 leading-relaxed mb-6">
                                Penulisan kode firmware deterministic berbasis FreeRTOS / bare-metal dengan proteksi watchdog, algoritma edge filtering cerdas, pembaruan OTA terenkripsi, serta infrastruktur cloud data pipeline.
                            </p>
                            <div class="space-y-2.5">
                                <div class="flex items-start gap-2.5 text-xs sm:text-sm text-slate-700 font-medium">
                                    <svg class="w-4 h-4 text-purple-600 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>FreeRTOS task scheduling dengan prioritas deterministik &amp; zero memory leaks</span>
                                </div>
                                <div class="flex items-start gap-2.5 text-xs sm:text-sm text-slate-700 font-medium">
                                    <svg class="w-4 h-4 text-purple-600 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Secure Boot &amp; Dual-Partition Over-The-Air (OTA) dengan signature kriptografi</span>
                                </div>
                                <div class="flex items-start gap-2.5 text-xs sm:text-sm text-slate-700 font-medium">
                                    <svg class="w-4 h-4 text-purple-600 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Backend pipeline telemetri real-time dengan sinkronisasi offline-first otomatis</span>
                                </div>
                            </div>
                        </div>

                        <!-- Right Interactive Visual -->
                        <div class="lg:col-span-6 xl:col-span-7">
                            <div class="rounded-2xl overflow-hidden border border-purple-200/80 bg-white shadow-md p-5 sm:p-6">
                                <div class="flex items-center justify-between border-b border-slate-100 pb-3 mb-4">
                                    <div class="flex items-center gap-2">
                                        <span class="w-3 h-3 rounded-full bg-purple-500 animate-pulse"></span>
                                        <span class="text-xs font-bold text-slate-800 uppercase tracking-wider">Embedded Core &amp; Task Stream</span>
                                    </div>
                                    <span class="text-[11px] font-mono font-medium px-2 py-0.5 rounded bg-purple-50 text-purple-700 border border-purple-200">
                                        FreeRTOS v10.5 Active
                                    </span>
                                </div>
                                <!-- IDE Code Window -->
                                <div class="bg-slate-900 rounded-xl p-4 text-xs font-mono text-slate-300 overflow-x-auto mb-4 border border-slate-800">
                                    <div class="flex items-center justify-between border-b border-slate-800 pb-2 mb-3 text-[11px] text-slate-400">
                                        <span class="text-purple-400 font-semibold">sensor_telemetry_task.c</span>
                                        <span class="text-emerald-400">Watchdog: OK (Tick: 1ms)</span>
                                    </div>
                                    <div class="space-y-1 text-[11px] leading-relaxed">
                                        <div><span class="text-purple-400">void</span> <span class="text-sky-300">vTelemetryTask</span>(<span class="text-purple-400">void</span> *pvParameters) {</div>
                                        <div class="pl-4 text-slate-400">// Acquire calibrated multi-point ADC sample</div>
                                        <div class="pl-4"><span class="text-sky-300">sensor_payload_t</span> payload = <span class="text-amber-300">read_industrial_adc</span>();</div>
                                        <div class="pl-4"><span class="text-purple-400">if</span> (payload.status == <span class="text-emerald-400">SENSOR_OK</span>) {</div>
                                        <div class="pl-8"><span class="text-amber-300">aes256_gcm_encrypt</span>(&amp;payload, SECRET_KEY);</div>
                                        <div class="pl-8"><span class="text-amber-300">mqtt_publish_telemetry</span>(<span class="text-emerald-300">"telemetry/sensor01"</span>, payload);</div>
                                        <div class="pl-4">}</div>
                                        <div>}</div>
                                    </div>
                                </div>
                                <div class="bg-purple-50/70 rounded-xl p-3 border border-purple-200/80 flex items-center justify-between text-xs">
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 text-purple-700" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
                                        <span class="text-slate-700 font-medium">Memory Footprint: <span class="font-bold text-purple-900">RAM 32.4 KB (10.1%)</span> | Flash 380 KB</span>
                                    </div>
                                    <span class="font-mono text-[11px] font-semibold text-purple-700">OTA Dual-Slot OK</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ==================== STEP 04 ==================== -->
                <div class="sticky rounded-3xl sm:rounded-[32px] p-6 sm:p-10 lg:p-12 transition-all duration-300 shadow-xl border border-emerald-200/90 bg-[#f0fdf4] shadow-emerald-900/5"
                    style="top: 156px; z-index: 40;">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                        <!-- Left Details -->
                        <div class="lg:col-span-6 xl:col-span-5">
                            <div class="inline-flex items-center justify-center px-4 py-1.5 rounded-xl bg-white border border-emerald-200 text-emerald-800 font-mono font-bold text-sm shadow-sm mb-6">
                                04
                            </div>
                            <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight mb-4">
                                Uji Lapangan, Kalibrasi Sensor &amp; Stress Testing
                            </h3>
                            <p class="text-sm sm:text-base text-slate-600 leading-relaxed mb-6">
                                Pengujian komprehensif di lingkungan operasional ekstrem, kalibrasi multi-titik terhadap instrumen laboratorium terakreditasi, simulasi cuaca eksternal, dan uji keandalan transmisi 72 jam non-stop.
                            </p>
                            <div class="space-y-2.5">
                                <div class="flex items-start gap-2.5 text-xs sm:text-sm text-slate-700 font-medium">
                                    <svg class="w-4 h-4 text-emerald-600 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Thermal chamber stress testing (-20°C hingga +70°C) tanpa drift kalibrasi</span>
                                </div>
                                <div class="flex items-start gap-2.5 text-xs sm:text-sm text-slate-700 font-medium">
                                    <svg class="w-4 h-4 text-emerald-600 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Kalibrasi presisi multi-titik mengacu pada standar kalibrasi nasional (KAN)</span>
                                </div>
                                <div class="flex items-start gap-2.5 text-xs sm:text-sm text-slate-700 font-medium">
                                    <svg class="w-4 h-4 text-emerald-600 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Simulasi konektivitas buruk &amp; pengujian pemulihan otomatis packet loss 0%</span>
                                </div>
                            </div>
                        </div>

                        <!-- Right Interactive Visual -->
                        <div class="lg:col-span-6 xl:col-span-7">
                            <div class="rounded-2xl overflow-hidden border border-emerald-200/80 bg-white shadow-md p-5 sm:p-6">
                                <div class="flex items-center justify-between border-b border-slate-100 pb-3 mb-4">
                                    <div class="flex items-center gap-2">
                                        <span class="w-3 h-3 rounded-full bg-emerald-500 animate-pulse"></span>
                                        <span class="text-xs font-bold text-slate-800 uppercase tracking-wider">Field Diagnostics Telemetry HUD</span>
                                    </div>
                                    <span class="text-[11px] font-mono font-medium px-2 py-0.5 rounded bg-emerald-100/70 text-emerald-800 border border-emerald-300">
                                        QC PASSED: 100%
                                    </span>
                                </div>
                                <!-- Telemetry Gauges Grid -->
                                <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 mb-4">
                                    <div class="p-3 rounded-xl bg-slate-50 border border-slate-100 text-center">
                                        <div class="text-[10px] font-semibold text-slate-500 uppercase">Signal (RSSI)</div>
                                        <div class="text-base font-bold text-emerald-600 mt-0.5">-62 dBm</div>
                                        <div class="text-[10px] text-emerald-700 font-medium">Sangat Kuat</div>
                                    </div>
                                    <div class="p-3 rounded-xl bg-slate-50 border border-slate-100 text-center">
                                        <div class="text-[10px] font-semibold text-slate-500 uppercase">Packet Delivery</div>
                                        <div class="text-base font-bold text-slate-900 mt-0.5">99.98%</div>
                                        <div class="text-[10px] text-emerald-700 font-medium">0 Lost Packets</div>
                                    </div>
                                    <div class="p-3 rounded-xl bg-slate-50 border border-slate-100 text-center">
                                        <div class="text-[10px] font-semibold text-slate-500 uppercase">Chamber Temp</div>
                                        <div class="text-base font-bold text-slate-900 mt-0.5">+65.2°C</div>
                                        <div class="text-[10px] text-slate-600 font-medium">Thermal Stable</div>
                                    </div>
                                    <div class="p-3 rounded-xl bg-slate-50 border border-slate-100 text-center">
                                        <div class="text-[10px] font-semibold text-slate-500 uppercase">Continuous Test</div>
                                        <div class="text-base font-bold text-emerald-600 mt-0.5">72h : 00m</div>
                                        <div class="text-[10px] text-emerald-700 font-medium">Zero Reboots</div>
                                    </div>
                                </div>
                                <div class="bg-emerald-50/70 rounded-xl p-3 border border-emerald-200/80 flex items-center justify-between text-xs">
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 text-emerald-700" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                        <span class="text-slate-700 font-medium">Sertifikat Validasi: <span class="font-bold text-emerald-900">Lolos Uji Kalibrasi &amp; Siap Operasi Lapangan</span></span>
                                    </div>
                                    <span class="font-mono text-[11px] font-semibold text-emerald-800">ISO 9001 Compliant</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ==================== STEP 05 ==================== -->
                <div class="sticky rounded-3xl sm:rounded-[32px] p-6 sm:p-10 lg:p-12 transition-all duration-300 shadow-xl border border-cyan-200/90 bg-[#f0f9ff] shadow-cyan-900/5"
                    style="top: 176px; z-index: 50;">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                        <!-- Left Details -->
                        <div class="lg:col-span-6 xl:col-span-5">
                            <div class="inline-flex items-center justify-center px-4 py-1.5 rounded-xl bg-white border border-cyan-200 text-[#0e4197] font-mono font-bold text-sm shadow-sm mb-6">
                                05
                            </div>
                            <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight mb-4">
                                Deployment Produksi, Pelatihan &amp; Garansi SLA
                            </h3>
                            <p class="text-sm sm:text-base text-slate-600 leading-relaxed mb-6">
                                Fabrikasi massal terstandarisasi, instalasi langsung di lokasi mitra oleh tim ahli kami, pelatihan menyeluruh bagi teknisi dan staf operasional, serta garansi pemeliharaan SLA 24/7.
                            </p>
                            <div class="space-y-2.5">
                                <div class="flex items-start gap-2.5 text-xs sm:text-sm text-slate-700 font-medium">
                                    <svg class="w-4 h-4 text-cyan-700 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Instalasi &amp; komisioning perangkat di lapangan oleh teknisi bersertifikat</span>
                                </div>
                                <div class="flex items-start gap-2.5 text-xs sm:text-sm text-slate-700 font-medium">
                                    <svg class="w-4 h-4 text-cyan-700 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Sesi pelatihan operasional, user manual komprehensif &amp; dokumentasi API</span>
                                </div>
                                <div class="flex items-start gap-2.5 text-xs sm:text-sm text-slate-700 font-medium">
                                    <svg class="w-4 h-4 text-cyan-700 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Garansi penggantian hardware 12 bulan &amp; monitoring kesehatan armada 24/7</span>
                                </div>
                            </div>
                        </div>

                        <!-- Right Interactive Visual -->
                        <div class="lg:col-span-6 xl:col-span-7">
                            <div class="rounded-2xl overflow-hidden border border-cyan-200/80 bg-white shadow-md p-5 sm:p-6">
                                <div class="flex items-center justify-between border-b border-slate-100 pb-3 mb-4">
                                    <div class="flex items-center gap-2">
                                        <span class="w-3 h-3 rounded-full bg-cyan-600 animate-pulse"></span>
                                        <span class="text-xs font-bold text-slate-800 uppercase tracking-wider">Fleet Command &amp; SLA Status</span>
                                    </div>
                                    <span class="text-[11px] font-mono font-medium px-2 py-0.5 rounded bg-cyan-50 text-[#0e4197] border border-cyan-200">
                                        SLA 99.9% Active
                                    </span>
                                </div>
                                <!-- Fleet Telemetry Summary -->
                                <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 mb-4">
                                    <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-100">
                                        <div class="text-[10px] font-semibold text-slate-500 uppercase">Armada Aktif</div>
                                        <div class="text-lg font-bold text-[#0e4197] mt-0.5">1,420+ Node</div>
                                        <div class="text-[10px] text-slate-500">Tersebar di Indonesia</div>
                                    </div>
                                    <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-100">
                                        <div class="text-[10px] font-semibold text-slate-500 uppercase">Uptime Server</div>
                                        <div class="text-lg font-bold text-emerald-600 mt-0.5">99.98%</div>
                                        <div class="text-[10px] text-slate-500">30 Hari Terakhir</div>
                                    </div>
                                    <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-100 col-span-2 sm:col-span-1">
                                        <div class="text-[10px] font-semibold text-slate-500 uppercase">Response Time</div>
                                        <div class="text-lg font-bold text-cyan-600 mt-0.5">&lt; 15 Menit</div>
                                        <div class="text-[10px] text-slate-500">Dedicated Helpdesk</div>
                                    </div>
                                </div>
                                <div class="bg-cyan-50/70 rounded-xl p-3 border border-cyan-200/80 flex items-center justify-between text-xs">
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 text-[#0e4197]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" /></svg>
                                        <span class="text-slate-700 font-medium">Layanan Purna Jual: <span class="font-bold text-[#0e4197]">Garansi Hardware Penuh 1 Tahun</span></span>
                                    </div>
                                    <span class="font-mono text-[11px] font-semibold text-[#0e4197]">24/7 SLA Standby</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- =====================================================================
             SECTION 6: WHY NUSA SENSA (KEUNGGULAN KAMI)
             ===================================================================== -->
        <section id="why-us" class="relative z-10 mx-auto max-w-6xl px-4 py-20 sm:px-6 lg:px-8">
            <div
                class="rounded-3xl bg-gradient-to-br from-blue-50 to-indigo-50/50 border border-blue-200/60 p-8 sm:p-14">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                    <div class="lg:col-span-6">
                        <span
                            class="rounded-full bg-white border border-blue-200 px-3.5 py-1 text-xs font-semibold text-[#0e4197] uppercase tracking-wider">
                            Mengapa Kami
                        </span>
                        <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4 tracking-tight">
                            Solusi Terpadu: Tanpa Ribet Lempar Vendor
                        </h2>
                        <p class="text-base text-slate-600 mt-4 leading-relaxed">
                            Banyak proyek teknologi terhambat karena vendor hardware tidak mengerti kebutuhan cloud,
                            atau tim software tidak paham keterbatasan mikrokontroler.
                            <strong>Nusa Sensa menjembatani keduanya dalam satu tim inti yang solid.</strong>
                        </p>

                        <div class="mt-8 space-y-4">
                            <div class="flex items-start gap-3">
                                <div
                                    class="flex h-6 w-6 items-center justify-center rounded-full bg-[#006dff] text-white text-xs font-bold shrink-0 mt-0.5">
                                    &check;
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-slate-900">Kepemilikan Penuh (Full IP Ownership)
                                    </h4>
                                    <p class="text-xs text-slate-600 mt-0.5">Seluruh skematik PCB, Gerber file, kode
                                        firmware, dan source code software 100% menjadi milik perusahaan Anda.</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div
                                    class="flex h-6 w-6 items-center justify-center rounded-full bg-[#006dff] text-white text-xs font-bold shrink-0 mt-0.5">
                                    &check;
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-slate-900">Standar Industri &amp; Tahan Cuaca</h4>
                                    <p class="text-xs text-slate-600 mt-0.5">Perangkat keras dirancang tahan lingkungan
                                        outdoor (IP65/IP67), hemat daya baterai/panel surya, dan stabil beroperasi 24/7.
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div
                                    class="flex h-6 w-6 items-center justify-center rounded-full bg-[#006dff] text-white text-xs font-bold shrink-0 mt-0.5">
                                    &check;
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-slate-900">Sesi Review Arsitektur Awal Gratis</h4>
                                    <p class="text-xs text-slate-600 mt-0.5">Dapatkan sesi konsultasi teknis selama 45
                                        menit bersama tim Principal Engineer kami tanpa ikatan biaya komitmen.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-6 grid grid-cols-2 gap-4">
                        <div class="rounded-2xl bg-white p-6 shadow-sm border border-slate-200">
                            <div class="text-3xl font-black text-[#0e4197]">45 Min</div>
                            <div class="text-sm font-bold text-slate-800 mt-1">Free Technical Review</div>
                            <div class="text-xs text-slate-500 mt-1">Bedah arsitektur hardware &amp; software langsung
                                dengan engineer.</div>
                        </div>
                        <div class="rounded-2xl bg-white p-6 shadow-sm border border-slate-200">
                            <div class="text-3xl font-black text-[#0e4197]">2-4 Mgg</div>
                            <div class="text-sm font-bold text-slate-800 mt-1">Fast Prototype MVP</div>
                            <div class="text-xs text-slate-500 mt-1">Prototipe fungsional pertama siap diuji coba dalam
                                hitungan minggu.</div>
                        </div>
                        <div class="rounded-2xl bg-white p-6 shadow-sm border border-slate-200">
                            <div class="text-3xl font-black text-[#0e4197]">24/7</div>
                            <div class="text-sm font-bold text-slate-800 mt-1">SLA &amp; Monitoring</div>
                            <div class="text-xs text-slate-500 mt-1">Dukungan teknis responsif menjaga kelancaran sistem
                                Anda.</div>
                        </div>
                        <div class="rounded-2xl bg-white p-6 shadow-sm border border-slate-200">
                            <div class="text-3xl font-black text-[#0e4197]">100%</div>
                            <div class="text-sm font-bold text-slate-800 mt-1">Indonesian Talent</div>
                            <div class="text-xs text-slate-500 mt-1">Dikelola dan direkayasa oleh insinyur terbaik dalam
                                negeri.</div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- =====================================================================
             SECTION 7: FAQ ACCORDION
             ===================================================================== -->
        <section id="faq" class="relative z-10 mx-auto max-w-4xl px-4 py-20 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span
                    class="rounded-full bg-blue-50 border border-blue-200 px-3.5 py-1 text-xs font-semibold text-[#0e4197] uppercase tracking-wider">
                    Tanya Jawab
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4 tracking-tight">
                    Pertanyaan yang Sering Diajukan
                </h2>
            </div>

            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div class="rounded-xl border border-slate-200 bg-white shadow-sm overflow-hidden">
                    <button type="button"
                        class="faq-toggle flex w-full items-center justify-between p-5 text-left font-semibold text-slate-800 hover:text-[#006dff] transition-colors"
                        aria-expanded="false">
                        <span>Apakah PT Nusa Sensa Teknologi bisa membuat perangkat hardware IoT dari nol?</span>
                        <svg class="faq-icon h-5 w-5 text-slate-400 transition-transform duration-200" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div
                        class="faq-content hidden px-5 pb-5 text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                        Ya, tentu. Kami memiliki fasilitas dan tim insinyur untuk perancangan skematik, desain tata
                        letak PCB (layouting), perakitan komponen SMD/THT, pengkodean firmware low-level, hingga 3D
                        casing enclosure prototyping sesuai kebutuhan spesifik Anda.
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="rounded-xl border border-slate-200 bg-white shadow-sm overflow-hidden">
                    <button type="button"
                        class="faq-toggle flex w-full items-center justify-between p-5 text-left font-semibold text-slate-800 hover:text-[#006dff] transition-colors"
                        aria-expanded="false">
                        <span>Bagaimana dengan hak cipta intelektual (IP) dan source code proyek?</span>
                        <svg class="faq-icon h-5 w-5 text-slate-400 transition-transform duration-200" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div
                        class="faq-content hidden px-5 pb-5 text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                        Seluruh hak kekayaan intelektual (IP), file desain skematik, firmware, kode sumber aplikasi
                        web/mobile, dan dokumentasi arsitektur menjadi 100% kepemilikan Anda setelah proyek
                        diserahterimakan secara resmi. Kami juga menandatangani Non-Disclosure Agreement (NDA) sebelum
                        proyek dimulai.
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="rounded-xl border border-slate-200 bg-white shadow-sm overflow-hidden">
                    <button type="button"
                        class="faq-toggle flex w-full items-center justify-between p-5 text-left font-semibold text-slate-800 hover:text-[#006dff] transition-colors"
                        aria-expanded="false">
                        <span>Bisakah hanya menggunakan jasa IT Consultant atau Software House saja tanpa
                            hardware?</span>
                        <svg class="faq-icon h-5 w-5 text-slate-400 transition-transform duration-200" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div
                        class="faq-content hidden px-5 pb-5 text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                        Sangat bisa. Anda dapat menggunakan layanan kami secara modular: hanya IT Consultant (misal
                        audit infrastruktur / migrasi cloud), hanya Software House (pengembangan aplikasi web/mobile),
                        atau paket lengkap terintegrasi dengan hardware IoT.
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="rounded-xl border border-slate-200 bg-white shadow-sm overflow-hidden">
                    <button type="button"
                        class="faq-toggle flex w-full items-center justify-between p-5 text-left font-semibold text-slate-800 hover:text-[#006dff] transition-colors"
                        aria-expanded="false">
                        <span>Berapa estimasi waktu untuk pembuatan prototipe hingga siap produksi?</span>
                        <svg class="faq-icon h-5 w-5 text-slate-400 transition-transform duration-200" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div
                        class="faq-content hidden px-5 pb-5 text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                        Untuk prototipe fungsional (Proof of Concept / MVP) biasanya memakan waktu 2 hingga 6 minggu
                        tergantung kompleksitas sensor dan protokol. Untuk iterasi produksi skala penuh dan sertifikasi
                        biasanya berkisar antara 2 hingga 4 bulan.
                    </div>
                </div>
            </div>
        </section>

        <!-- =====================================================================
             SECTION 8: DRONE DOCKING STATION & CONTACT FORM
             ===================================================================== -->
        <section id="contact" class="relative z-10 mx-auto max-w-6xl px-4 py-24 sm:px-6 lg:px-8">
            <div
                class="rounded-3xl bg-white border border-slate-200/90 p-8 sm:p-14 text-slate-800 shadow-xl shadow-blue-900/5 relative overflow-hidden">
                <!-- Ambient Subtle Glow Effects -->
                <div
                    class="absolute -top-32 -right-32 h-96 w-96 rounded-full bg-blue-100/50 blur-3xl pointer-events-none">
                </div>
                <div
                    class="absolute -bottom-32 -left-32 h-96 w-96 rounded-full bg-cyan-100/40 blur-3xl pointer-events-none">
                </div>

                <!-- Header Status Pill -->
                <div class="relative z-10 flex flex-col items-center justify-center text-center mb-10">
                    <div
                        class="inline-flex items-center gap-2 rounded-full bg-emerald-50 border border-emerald-200/80 px-4 py-1.5 text-xs font-mono font-semibold text-emerald-800 shadow-xs">
                        <span class="h-2 w-2 rounded-full bg-emerald-500 animate-ping"></span>
                        <span>KONSULTASI TEKNIS // RESPON CEPAT 1X24 JAM</span>
                    </div>
                </div>

                <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-12">

                    <!-- Left Info -->
                    <div class="lg:col-span-5">
                        <span class="text-xs font-mono font-semibold uppercase tracking-wider text-[#006dff]">
                            Mulai Kolaborasi
                        </span>
                        <h2
                            class="text-3xl sm:text-4xl font-extrabold tracking-tight mt-2 text-slate-900 font-sans leading-tight">
                            Siap Membangun Solusi Cerdas Bersama Kami?
                        </h2>
                        <p class="text-slate-600 text-sm sm:text-base mt-4 leading-relaxed">
                            Hubungi tim insinyur <strong>PT Nusa Sensa Teknologi</strong> untuk mendiskusikan ide
                            perangkat, arsitektur cloud, atau kebutuhan software Anda.
                        </p>

                        <div class="mt-8 space-y-4">
                            <div class="flex items-center gap-3 text-sm text-slate-700">
                                <div
                                    class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-50 border border-blue-200/80 text-[#006dff] shadow-xs">
                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-xs text-slate-500 font-medium">Email Resmi</div>
                                    <div class="font-semibold text-slate-900">info@nusasensa.id</div>
                                </div>
                            </div>

                            <div class="flex items-center gap-3 text-sm text-slate-700">
                                <div
                                    class="flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-50 border border-emerald-200/80 text-emerald-600 shadow-xs">
                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-xs text-slate-500 font-medium">WhatsApp Bisnis</div>
                                    <div class="font-semibold text-slate-900">+62 851-8370-0720</div>
                                </div>
                            </div>

                            <div class="flex items-center gap-3 text-sm text-slate-700">
                                <div
                                    class="flex h-10 w-10 items-center justify-center rounded-xl bg-indigo-50 border border-indigo-200/80 text-indigo-600 shadow-xs">
                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-xs text-slate-500 font-medium">Head Office</div>
                                    <div class="font-semibold text-slate-900">Cilacap, Indonesia</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Form -->
                    <div
                        class="lg:col-span-7 rounded-2xl bg-slate-50/80 border border-slate-200/90 p-6 sm:p-8 relative shadow-xs">
                        <!-- Success Card State -->
                        <div id="consultation-success"
                            class="hidden flex-col items-center justify-center text-center py-10 px-4">
                            <div
                                class="flex h-16 w-16 items-center justify-center rounded-2xl bg-emerald-100 border border-emerald-300 text-emerald-600 mb-5 shadow-sm">
                                <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-2">Permintaan Konsultasi Diterima!</h3>
                            <p class="text-sm text-slate-600 max-w-md leading-relaxed mb-6">
                                Terima kasih telah menghubungi <strong>PT Nusa Sensa Teknologi</strong>. Tim Principal
                                Engineer kami akan meninjau spesifikasi proyek Anda dan segera menghubungi via WhatsApp
                                atau Email dalam 1x24 jam kerja.
                            </p>
                            <button id="consultation-reset-btn" type="button"
                                class="rounded-xl border border-slate-300 bg-white px-6 py-2.5 text-xs font-semibold text-slate-700 hover:text-[#006dff] hover:border-[#006dff] shadow-sm transition-all">
                                &larr; Kirim Pesan / Proyek Lain
                            </button>
                        </div>

                        <!-- Main Form -->
                        <form id="consultation-form" class="space-y-4">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Nama
                                        Lengkap</label>
                                    <input type="text" required placeholder="Budi Pratama"
                                        class="w-full rounded-xl bg-white border border-slate-300 px-4 py-2.5 text-sm text-slate-900 placeholder-slate-400 focus:border-[#006dff] focus:outline-none focus:ring-2 focus:ring-blue-500/20 shadow-xs transition-all">
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Email
                                        Bisnis</label>
                                    <input type="email" required placeholder="budi@perusahaan.com"
                                        class="w-full rounded-xl bg-white border border-slate-300 px-4 py-2.5 text-sm text-slate-900 placeholder-slate-400 focus:border-[#006dff] focus:outline-none focus:ring-2 focus:ring-blue-500/20 shadow-xs transition-all">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Nama Perusahaan /
                                        Instansi</label>
                                    <input type="text" required placeholder="PT Solusi Maju Bersama"
                                        class="w-full rounded-xl bg-white border border-slate-300 px-4 py-2.5 text-sm text-slate-900 placeholder-slate-400 focus:border-[#006dff] focus:outline-none focus:ring-2 focus:ring-blue-500/20 shadow-xs transition-all">
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Kebutuhan
                                        Solusi</label>
                                    <select
                                        class="w-full rounded-xl bg-white border border-slate-300 px-4 py-2.5 text-sm text-slate-900 focus:border-[#006dff] focus:outline-none focus:ring-2 focus:ring-blue-500/20 shadow-xs transition-all">
                                        <option>Solusi IoT &amp; Hardware Kustom</option>
                                        <option>IT Consultant &amp; Arsitektur Cloud</option>
                                        <option>Software House &amp; Dashboard SCADA</option>
                                        <option>Paket Solusi Lengkap (End-to-End)</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1.5">Jelaskan Rencana atau
                                    Kendala Proyek Anda</label>
                                <textarea rows="4" required
                                    placeholder="Contoh: Kami membutuhkan sensor pemantauan konsumsi daya listrik berbasis LoRaWAN yang terhubung ke dashboard web real-time..."
                                    class="w-full rounded-xl bg-white border border-slate-300 px-4 py-2.5 text-sm text-slate-900 placeholder-slate-400 focus:border-[#006dff] focus:outline-none focus:ring-2 focus:ring-blue-500/20 shadow-xs transition-all"></textarea>
                            </div>

                            <button type="submit"
                                class="w-full rounded-xl bg-gradient-to-r from-[#006dff] via-[#0e4197] to-[#006dff] hover:from-[#0e4197] hover:to-[#0050c7] py-3.5 text-sm font-bold text-white shadow-xl shadow-blue-600/20 hover:shadow-2xl hover:shadow-blue-500/30 active:scale-98 transition-all">
                                Ajukan Sesi Konsultasi Teknis Gratis
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </section>

        <!-- =========================================================================
             FOOTER (SKYSHI-STYLE ELEGANT MULTI-COLUMN)
             ========================================================================= -->
        <footer id="footer" class="border-t border-slate-200/80 pt-16 pb-12 relative z-10 bg-transparent">
            <!-- Subtle Ambient Background Glow -->
            <div class="pointer-events-none absolute inset-0 -z-10 overflow-hidden" aria-hidden="true">
                <div
                    class="absolute -bottom-24 left-1/2 -translate-x-1/2 h-80 w-[700px] rounded-full bg-blue-100/40 blur-3xl">
                </div>
            </div>

            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-12 pb-12">

                    <!-- Column 1: Brand & Description (5 cols) -->
                    <div class="lg:col-span-5">
                        <a href="#hero" class="inline-block mb-4">
                            <img src="{{ asset('images/logo_mark_text.png') }}" alt="PT Nusa Sensa Teknologi"
                                class="h-9 w-auto object-contain">
                        </a>
                        <p class="text-sm text-slate-600 leading-relaxed max-w-sm mb-6">
                            PT Nusa Sensa Teknologi merekayasa perangkat keras IoT kustom, arsitektur cloud teruji, dan
                            aplikasi enterprise modern untuk mengotomasi operasional bisnis Anda dari sensor hingga
                            analitik.
                        </p>
                        <div class="flex items-center gap-2 text-xs font-semibold text-[#0e4197]">
                            <span class="flex h-2 w-2 rounded-full bg-[#006dff]"></span>
                            <span>IoT Solutions &bull; IT Consultant &bull; Software House</span>
                        </div>
                    </div>

                    <!-- Column 2: Perusahaan (2 cols) -->
                    <div class="lg:col-span-2">
                        <h3 class="text-sm font-bold text-slate-900 mb-4 tracking-wide">Company</h3>
                        <ul class="space-y-2.5 text-sm text-slate-600">
                            <li><a href="#hero" class="hover:text-[#006dff] transition-colors">Beranda</a></li>
                            <li><a href="#services" class="hover:text-[#006dff] transition-colors">Layanan &amp;
                                    Solusi</a></li>
                            <li><a href="#live-telemetry" class="hover:text-[#006dff] transition-colors">Live
                                    Telemetri</a></li>
                            <li><a href="#workflow" class="hover:text-[#006dff] transition-colors">Alur Kerja</a></li>
                            <li><a href="#why-us" class="hover:text-[#006dff] transition-colors">Keunggulan</a></li>
                            <li><a href="#faq" class="hover:text-[#006dff] transition-colors">FAQ</a></li>
                            <li><a href="#contact" class="hover:text-[#006dff] transition-colors">Hubungi Kami</a></li>
                        </ul>
                    </div>

                    <!-- Column 3: Spesialisasi & Layanan (3 cols) -->
                    <div class="lg:col-span-3">
                        <h3 class="text-sm font-bold text-slate-900 mb-4 tracking-wide">Specialist &amp; Solusi</h3>
                        <ul class="space-y-2.5 text-sm text-slate-600">
                            <li><a href="#services" class="hover:text-[#006dff] transition-colors">Hardware &amp;
                                    Firmware IoT</a></li>
                            <li><a href="#services" class="hover:text-[#006dff] transition-colors">Smart Gateway &amp;
                                    Edge Sensor</a></li>
                            <li><a href="#services" class="hover:text-[#006dff] transition-colors">Cloud Architecture
                                    &amp; MQTT Broker</a></li>
                            <li><a href="#services" class="hover:text-[#006dff] transition-colors">Full-Stack Web &amp;
                                    Mobile App</a></li>
                            <li><a href="#services" class="hover:text-[#006dff] transition-colors">Industrial Modbus /
                                    RS485 SCADA</a></li>
                            <li><a href="#services" class="hover:text-[#006dff] transition-colors">Field Stress Testing
                                    &amp; SLA</a></li>
                        </ul>
                    </div>

                    <!-- Column 4: Social Media & Contact (2 cols) -->
                    <div class="lg:col-span-2">
                        <h3 class="text-sm font-bold text-slate-900 mb-4 tracking-wide">Social Media</h3>
                        <div class="flex items-center gap-3 mb-6">
                            <!-- Instagram -->
                            <a href="https://www.instagram.com/nusasensa" target="_blank" rel="noopener noreferrer"
                                class="flex h-10 w-10 items-center justify-center rounded-xl bg-slate-50 border border-slate-200 text-slate-600 hover:text-white hover:bg-gradient-to-tr hover:from-amber-500 hover:via-rose-500 hover:to-purple-600 hover:border-transparent transition-all shadow-sm hover:scale-105"
                                aria-label="Instagram">
                                <svg class="h-4.5 w-4.5 fill-current" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                            </a>

                            <!-- LinkedIn -->
                            <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer"
                                class="flex h-10 w-10 items-center justify-center rounded-xl bg-slate-50 border border-slate-200 text-slate-600 hover:text-white hover:bg-[#0a66c2] hover:border-transparent transition-all shadow-sm hover:scale-105"
                                aria-label="LinkedIn">
                                <svg class="h-4.5 w-4.5 fill-current" viewBox="0 0 24 24">
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                </svg>
                            </a>

                            <!-- GitHub -->
                            <a href="https://github.com" target="_blank" rel="noopener noreferrer"
                                class="flex h-10 w-10 items-center justify-center rounded-xl bg-slate-50 border border-slate-200 text-slate-600 hover:text-white hover:bg-slate-900 hover:border-transparent transition-all shadow-sm hover:scale-105"
                                aria-label="GitHub">
                                <svg class="h-4.5 w-4.5 fill-current" viewBox="0 0 24 24">
                                    <path
                                        d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                                </svg>
                            </a>

                            <!-- YouTube -->
                            <a href="https://youtube.com" target="_blank" rel="noopener noreferrer"
                                class="flex h-10 w-10 items-center justify-center rounded-xl bg-slate-50 border border-slate-200 text-slate-600 hover:text-white hover:bg-[#ff0000] hover:border-transparent transition-all shadow-sm hover:scale-105"
                                aria-label="YouTube">
                                <svg class="h-4.5 w-4.5 fill-current" viewBox="0 0 24 24">
                                    <path
                                        d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                </svg>
                            </a>
                        </div>
                        <div class="text-xs text-slate-500 leading-relaxed">
                            <span class="block font-semibold text-slate-700 mb-1">Email Resmi:</span>
                            <a href="mailto:info@nusasensa.com"
                                class="hover:text-[#006dff] transition-colors block">info@nusasensa.id</a>
                        </div>
                    </div>

                </div>

                <!-- Divider & Centered Copyright Address (Like Skyshi) -->
                <div class="border-t border-slate-200/80 pt-8 text-center text-xs text-slate-500 leading-relaxed">
                    <p class="font-semibold text-slate-700 mb-1">&copy; {{ date('Y') }} PT Nusa Sensa Teknologi. All
                        rights reserved.</p>
                </div>
            </div>
        </footer>

    </main>

    <!-- Floating WhatsApp Consultation Button -->
    <aside aria-label="Konsultasi Cepat" class="fixed bottom-6 right-6 z-40">
        <a href="https://wa.me/6285183700720?text=Halo%20PT%20Nusa%20Sensa%20Teknologi,%20saya%20tertarik%20untuk%20konsultasi%20solusi%20IoT%20/%20IT%20Consultant%20/%20Software."
            target="_blank" rel="noopener noreferrer"
            class="group flex items-center gap-3 rounded-full bg-emerald-500 hover:bg-emerald-600 text-white px-4 py-3 shadow-xl hover:shadow-2xl shadow-emerald-500/30 transition-all hover:scale-105 active:scale-95"
            aria-label="Chat WhatsApp">
            <span class="relative flex h-3 w-3">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span>
                <span class="relative inline-flex rounded-full h-3 w-3 bg-white"></span>
            </span>
            <!-- WhatsApp SVG Icon -->
            <svg class="h-5 w-5 fill-current" viewBox="0 0 24 24">
                <path
                    d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
            </svg>
            <span class="text-xs font-bold hidden sm:inline-block">Konsultasi via WhatsApp</span>
        </a>
    </aside>

</body>

</html>