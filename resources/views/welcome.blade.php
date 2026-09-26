<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta
        name="description"
        content="SurplusLink Lanka connects surplus food from restaurants with people and organizations who can put it to good use."
    >

    <meta name="theme-color" content="#ff7048">

    <title>SurplusLink Lanka | Good Food, Better Destination</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link
        href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800,900&display=swap"
        rel="stylesheet"
    >

    <!-- Laravel Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Figtree', sans-serif;
        }

        .hero-bg {
            background:
                radial-gradient(circle at 8% 12%, rgba(255, 112, 72, 0.12), transparent 28%),
                radial-gradient(circle at 92% 12%, rgba(16, 185, 129, 0.10), transparent 25%),
                radial-gradient(circle at 55% 100%, rgba(251, 191, 36, 0.08), transparent 30%);
        }

        .grid-pattern {
            background-image:
                linear-gradient(rgba(148, 163, 184, 0.055) 1px, transparent 1px),
                linear-gradient(90deg, rgba(148, 163, 184, 0.055) 1px, transparent 1px);
            background-size: 32px 32px;
        }

        /*
        |--------------------------------------------------------------------------
        | Hero Food Image Transition
        |--------------------------------------------------------------------------
        */

        .food-slide {
            position: absolute;
            inset: 0;
            background-size: cover;
            background-position: center;
            opacity: 0;
            animation: foodFade 20s infinite;
            transform: scale(1.08);
        }

        .food-slide:nth-child(1) {
            background-image:
                linear-gradient(rgba(20, 15, 10, 0.05), rgba(20, 15, 10, 0.12)),
                url('https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=1200&q=85');
            animation-delay: 0s;
        }

        .food-slide:nth-child(2) {
            background-image:
                linear-gradient(rgba(20, 15, 10, 0.05), rgba(20, 15, 10, 0.12)),
                url('https://images.unsplash.com/photo-1473093295043-cdd812d0e601?auto=format&fit=crop&w=1200&q=85');
            animation-delay: 5s;
        }

        .food-slide:nth-child(3) {
            background-image:
                linear-gradient(rgba(20, 15, 10, 0.05), rgba(20, 15, 10, 0.12)),
                url('https://images.unsplash.com/photo-1540189549336-e6e99c3679fe?auto=format&fit=crop&w=1200&q=85');
            animation-delay: 10s;
        }

        .food-slide:nth-child(4) {
            background-image:
                linear-gradient(rgba(20, 15, 10, 0.05), rgba(20, 15, 10, 0.12)),
                url('https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=1200&q=85');
            animation-delay: 15s;
        }

        @keyframes foodFade {
            0% {
                opacity: 0;
                transform: scale(1.08);
            }

            5% {
                opacity: 1;
            }

            25% {
                opacity: 1;
                transform: scale(1);
            }

            30% {
                opacity: 0;
            }

            100% {
                opacity: 0;
                transform: scale(1.08);
            }
        }

        /*
        |--------------------------------------------------------------------------
        | Floating UI Animations
        |--------------------------------------------------------------------------
        */

        .float-card {
            animation: floatingCard 5s ease-in-out infinite;
        }

        .float-card-delay {
            animation: floatingCard 5s ease-in-out 1.2s infinite;
        }

        @keyframes floatingCard {
            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-9px);
            }
        }

        .pulse-dot {
            animation: pulseDot 2s ease-in-out infinite;
        }

        @keyframes pulseDot {
            0%,
            100% {
                box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.25);
            }

            50% {
                box-shadow: 0 0 0 7px rgba(16, 185, 129, 0);
            }
        }

        .soft-float {
            animation: softFloat 7s ease-in-out infinite;
        }

        @keyframes softFloat {
            0%,
            100% {
                transform: translateY(0) rotate(0deg);
            }

            50% {
                transform: translateY(-10px) rotate(1deg);
            }
        }

        /*
        |--------------------------------------------------------------------------
        | Reduced Motion
        |--------------------------------------------------------------------------
        */

        @media (prefers-reduced-motion: reduce) {
            html {
                scroll-behavior: auto;
            }

            .food-slide,
            .float-card,
            .float-card-delay,
            .pulse-dot,
            .soft-float {
                animation: none !important;
            }

            .food-slide:first-child {
                opacity: 1;
                transform: none;
            }
        }
    </style>
</head>

<body class="bg-[#fffaf7] text-slate-800 antialiased">

    {{-- =========================================================
         NAVIGATION
    ========================================================== --}}
    <header class="sticky top-0 z-50 border-b border-[#f0e9e3] bg-[#fffaf7]/90 backdrop-blur-xl">

        <div class="mx-auto flex h-[76px] max-w-[1440px] items-center justify-between px-5 sm:px-8 lg:px-10">

            {{-- Brand --}}
            <a
                href="{{ url('/') }}"
                class="group flex items-center gap-3"
            >

                <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-[#ff7048] text-white shadow-sm transition duration-300 group-hover:scale-105">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 21c4.5-3.2 7-7.1 7-11.2C19 6.2 16.2 3 12 3S5 6.2 5 9.8C5 13.9 7.5 17.8 12 21Z"
                        />
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 19V8"
                        />
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 12c-2.1 0-3.7-.9-4.7-2.5M12 14c2.1 0 3.7-.9 4.7-2.5"
                        />
                    </svg>

                </div>

                <div class="leading-none">

                    <div class="text-[19px] font-black tracking-tight text-slate-950">
                        Surplus<span class="text-[#ff7048]">Link</span>
                    </div>

                    <div class="mt-1 text-[9px] font-extrabold uppercase tracking-[0.22em] text-slate-400">
                        Lanka
                    </div>

                </div>

            </a>


            {{-- Desktop navigation --}}
            <nav class="hidden items-center gap-8 lg:flex">

                <a
                    href="#how-it-works"
                    class="text-sm font-bold text-slate-500 transition hover:text-[#ff7048]"
                >
                    How it works
                </a>

                <a
                    href="#about"
                    class="text-sm font-bold text-slate-500 transition hover:text-[#ff7048]"
                >
                    About
                </a>

                <a
                    href="#roles"
                    class="text-sm font-bold text-slate-500 transition hover:text-[#ff7048]"
                >
                    For everyone
                </a>

            </nav>


            {{-- Authentication --}}
            <div class="flex items-center gap-2 sm:gap-3">

                @auth

                    <a
                        href="{{ url('/dashboard') }}"
                        class="inline-flex items-center gap-2 rounded-xl border border-[#f0e9e3] bg-white px-4 py-2.5 text-sm font-extrabold text-slate-700 shadow-sm transition hover:border-[#ffd7c8] hover:text-[#ff7048]"
                    >
                        Dashboard
                        <span>→</span>
                    </a>

                @else

                    @if (Route::has('login'))

                        <a
                            href="{{ route('login') }}"
                            class="hidden rounded-xl px-3 py-2.5 text-sm font-extrabold text-slate-600 transition hover:text-[#ff7048] sm:inline-flex"
                        >
                            Log in
                        </a>

                    @endif

                    @if (Route::has('register'))

                        <a
                            href="{{ route('register') }}"
                            class="inline-flex items-center gap-2 rounded-xl bg-[#ff7048] px-4 py-2.5 text-sm font-black text-white shadow-sm transition duration-300 hover:bg-[#f45d35] hover:shadow-md sm:px-5"
                        >
                            Get started
                            <span>→</span>
                        </a>

                    @endif

                @endauth

            </div>

        </div>

    </header>


    {{-- =========================================================
         HERO
    ========================================================== --}}
    <main>

        <section class="hero-bg relative overflow-hidden">

            <div class="pointer-events-none absolute inset-0 grid-pattern opacity-40"></div>

            <div class="pointer-events-none absolute -left-32 top-20 h-72 w-72 rounded-full bg-orange-200/25 blur-3xl"></div>

            <div class="pointer-events-none absolute -right-32 top-16 h-80 w-80 rounded-full bg-emerald-200/20 blur-3xl"></div>


            <div class="relative mx-auto max-w-[1440px] px-5 pb-16 pt-14 sm:px-8 sm:pb-20 sm:pt-20 lg:px-10 lg:pb-24 lg:pt-24">

                <div class="grid items-center gap-14 lg:grid-cols-[0.92fr_1.08fr] lg:gap-16">


                    {{-- HERO CONTENT --}}
                    <div class="max-w-2xl">

                        <div class="inline-flex items-center gap-2 rounded-full border border-[#ffd9ca] bg-white/80 px-3.5 py-2 text-[10px] font-black uppercase tracking-[0.17em] text-[#e85e38] shadow-sm backdrop-blur">

                            <span class="pulse-dot h-2 w-2 rounded-full bg-emerald-500"></span>

                            Smart surplus food redistribution

                        </div>


                        <h1 class="mt-6 text-5xl font-black leading-[0.97] tracking-[-0.05em] text-slate-950 sm:text-6xl lg:text-[70px]">

                            Good food deserves

                            <span class="block text-[#ff7048]">
                                a better destination.
                            </span>

                        </h1>


                        <p class="mt-6 max-w-xl text-base leading-7 text-slate-500 sm:text-lg sm:leading-8">

                            SurplusLink Lanka creates a digital bridge between
                            food businesses with usable surplus and people or
                            organizations who can put it to good use.

                        </p>


                        {{-- CTA --}}
                        <div class="mt-8 flex flex-col gap-3 sm:flex-row">

                            @auth

                                <a
                                    href="{{ url('/dashboard') }}"
                                    class="inline-flex items-center justify-center gap-2 rounded-2xl bg-[#ff7048] px-6 py-3.5 text-sm font-black text-white shadow-lg shadow-orange-200/50 transition duration-300 hover:-translate-y-0.5 hover:bg-[#f45d35] hover:shadow-xl"
                                >
                                    Go to dashboard
                                    <span>→</span>
                                </a>

                            @else

                                @if (Route::has('register'))

                                    <a
                                        href="{{ route('register') }}"
                                        class="inline-flex items-center justify-center gap-2 rounded-2xl bg-[#ff7048] px-6 py-3.5 text-sm font-black text-white shadow-lg shadow-orange-200/50 transition duration-300 hover:-translate-y-0.5 hover:bg-[#f45d35] hover:shadow-xl"
                                    >
                                        Join SurplusLink
                                        <span>→</span>
                                    </a>

                                @endif

                            @endauth


                            @if (Route::has('login'))

                                <a
                                    href="{{ route('login') }}"
                                    class="inline-flex items-center justify-center rounded-2xl border border-[#e9dfd8] bg-white px-6 py-3.5 text-sm font-black text-slate-700 shadow-sm transition hover:-translate-y-0.5 hover:border-[#ffd0c0] hover:text-[#ff7048]"
                                >
                                    Sign in
                                </a>

                            @endif

                        </div>


                        {{-- Product points --}}
                        <div class="mt-8 grid gap-3 sm:grid-cols-3">

                            <div class="flex items-center gap-2">

                                <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-emerald-50 text-xs font-black text-emerald-600">
                                    ✓
                                </span>

                                <span class="text-[11px] font-bold text-slate-500">
                                    Live availability
                                </span>

                            </div>

                            <div class="flex items-center gap-2">

                                <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-orange-50 text-xs font-black text-[#ff7048]">
                                    ✓
                                </span>

                                <span class="text-[11px] font-bold text-slate-500">
                                    Request workflow
                                </span>

                            </div>

                            <div class="flex items-center gap-2">

                                <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-sky-50 text-xs font-black text-sky-600">
                                    ✓
                                </span>

                                <span class="text-[11px] font-bold text-slate-500">
                                    Delivery tracking
                                </span>

                            </div>

                        </div>

                    </div>


                    {{-- =================================================
                         HERO VISUAL / IMAGE TRANSITION
                    ================================================== --}}
                    <div class="relative mx-auto w-full max-w-[680px]">

                        {{-- Main image container --}}
                        <div class="relative overflow-hidden rounded-[2.8rem] border-[6px] border-white bg-slate-100 shadow-2xl shadow-slate-300/40">

                            <div class="relative h-[480px] overflow-hidden rounded-[2.3rem] sm:h-[540px]">

                                {{-- Food image slides --}}
                                <div class="food-slide"></div>
                                <div class="food-slide"></div>
                                <div class="food-slide"></div>
                                <div class="food-slide"></div>


                                {{-- Dark / warm overlay --}}
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/65 via-transparent to-slate-950/10"></div>


                                {{-- Top live badge --}}
                                <div class="absolute left-5 right-5 top-5 flex items-center justify-between sm:left-7 sm:right-7 sm:top-7">

                                    <div class="flex items-center gap-2 rounded-full border border-white/30 bg-white/90 px-3 py-2 shadow-lg backdrop-blur-xl">

                                        <span class="pulse-dot h-2 w-2 rounded-full bg-emerald-500"></span>

                                        <span class="text-[10px] font-black uppercase tracking-[0.12em] text-slate-700">
                                            Live surplus
                                        </span>

                                    </div>


                                    <div class="rounded-full border border-white/30 bg-black/20 px-3 py-2 text-[10px] font-black text-white backdrop-blur-xl">
                                        SurplusLink Lanka
                                    </div>

                                </div>


                                {{-- Floating listing card --}}
                                <div class="float-card absolute left-5 top-24 w-[230px] rounded-2xl border border-white/70 bg-white/95 p-4 shadow-2xl backdrop-blur-xl sm:left-7 sm:w-[255px]">

                                    <div class="flex items-center gap-3">

                                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-orange-50 text-xl">
                                            🍝
                                        </div>

                                        <div class="min-w-0">

                                            <p class="text-xs font-black text-slate-950">
                                                Fresh surplus available
                                            </p>

                                            <p class="mt-1 truncate text-[10px] font-semibold text-slate-400">
                                                Restaurant food listing
                                            </p>

                                        </div>

                                    </div>


                                    <div class="mt-4 flex items-center justify-between">

                                        <span class="rounded-full bg-emerald-50 px-2.5 py-1 text-[9px] font-black text-emerald-700">
                                            Available
                                        </span>

                                        <span class="text-[10px] font-black text-slate-500">
                                            View listing →
                                        </span>

                                    </div>

                                </div>


                                {{-- Bottom request status --}}
                                <div class="float-card-delay absolute bottom-6 right-5 w-[245px] rounded-2xl border border-white/70 bg-white/95 p-4 shadow-2xl backdrop-blur-xl sm:bottom-7 sm:right-7 sm:w-[275px]">

                                    <div class="flex items-start gap-3">

                                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                                            ✓
                                        </div>

                                        <div class="min-w-0">

                                            <p class="text-xs font-black text-slate-950">
                                                Request approved
                                            </p>

                                            <p class="mt-1 text-[10px] leading-4 font-semibold text-slate-400">
                                                Your food request has moved to the delivery workflow.
                                            </p>

                                        </div>

                                    </div>


                                    <div class="mt-4 flex items-center gap-1.5">

                                        <span class="h-1.5 flex-1 rounded-full bg-emerald-500"></span>

                                        <span class="h-1.5 flex-1 rounded-full bg-emerald-500"></span>

                                        <span class="h-1.5 flex-1 rounded-full bg-emerald-500"></span>

                                        <span class="h-1.5 flex-1 rounded-full bg-slate-200"></span>

                                    </div>

                                    <div class="mt-2 flex justify-between text-[8px] font-bold text-slate-400">

                                        <span>Requested</span>
                                        <span>Approved</span>
                                        <span>Delivery</span>

                                    </div>

                                </div>


                                {{-- Bottom text --}}
                                <div class="absolute bottom-7 left-5 max-w-[240px] text-white sm:bottom-9 sm:left-7">

                                    <p class="text-[9px] font-black uppercase tracking-[0.2em] text-white/70">
                                        Food with purpose
                                    </p>

                                    <h2 class="mt-2 text-2xl font-black tracking-tight sm:text-3xl">
                                        Keep good food
                                        <span class="text-orange-200">
                                            in circulation.
                                        </span>
                                    </h2>

                                </div>

                            </div>

                        </div>


                        {{-- Small floating impact card --}}
                        <div class="soft-float absolute -bottom-6 -left-3 hidden rounded-2xl border border-[#f0e9e3] bg-white p-3.5 shadow-xl sm:block lg:-left-7">

                            <div class="flex items-center gap-3">

                                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-[#fff5eb] text-xl">
                                    🌱
                                </div>

                                <div>

                                    <p class="text-[9px] font-black uppercase tracking-[0.16em] text-slate-400">
                                        Platform focus
                                    </p>

                                    <p class="mt-1 text-xs font-black text-slate-900">
                                        Reduce avoidable waste
                                    </p>

                                </div>

                            </div>

                        </div>


                        {{-- Image transition indicators --}}
                        <div class="absolute bottom-5 left-1/2 flex -translate-x-1/2 gap-1.5 rounded-full bg-black/20 px-3 py-2 backdrop-blur-md">

                            <span class="h-1.5 w-5 rounded-full bg-white"></span>
                            <span class="h-1.5 w-1.5 rounded-full bg-white/50"></span>
                            <span class="h-1.5 w-1.5 rounded-full bg-white/50"></span>
                            <span class="h-1.5 w-1.5 rounded-full bg-white/50"></span>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        {{-- =========================================================
             ABOUT
        ========================================================== --}}
        <section
            id="about"
            class="border-y border-[#f0e9e3] bg-white"
        >

            <div class="mx-auto max-w-[1440px] px-5 py-16 sm:px-8 sm:py-20 lg:px-10">

                <div class="grid gap-12 lg:grid-cols-[0.8fr_1.2fr] lg:items-center lg:gap-20">

                    <div>

                        <div class="inline-flex items-center gap-2 rounded-full bg-[#fff5eb] px-3 py-1.5 text-[10px] font-black uppercase tracking-[0.16em] text-[#e85e38]">
                            <span>🌱</span>
                            Why SurplusLink?
                        </div>

                        <h2 class="mt-4 text-3xl font-black tracking-tight text-slate-950 sm:text-4xl">
                            A digital bridge for
                            <span class="text-[#ff7048]">
                                surplus food.
                            </span>
                        </h2>

                    </div>


                    <div>

                        <p class="text-base leading-7 text-slate-600 sm:text-lg sm:leading-8">
                            Food businesses can have safe, usable food remaining
                            after their normal sales period. SurplusLink Lanka
                            provides a structured way to make that food visible,
                            allow users or organizations to request it, and
                            coordinate the next step.
                        </p>

                        <div class="mt-7 grid gap-3 sm:grid-cols-2">

                            <div class="rounded-2xl border border-[#f0e9e3] bg-[#fffaf7] p-5">

                                <div class="flex items-center gap-3">

                                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-orange-50 text-xl">
                                        🍽️
                                    </div>

                                    <div>

                                        <p class="text-sm font-black text-slate-900">
                                            Food businesses
                                        </p>

                                        <p class="mt-1 text-xs font-semibold text-slate-400">
                                            List available surplus
                                        </p>

                                    </div>

                                </div>

                            </div>


                            <div class="rounded-2xl border border-[#f0e9e3] bg-[#fffaf7] p-5">

                                <div class="flex items-center gap-3">

                                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-50 text-xl">
                                        🤝
                                    </div>

                                    <div>

                                        <p class="text-sm font-black text-slate-900">
                                            People & organizations
                                        </p>

                                        <p class="mt-1 text-xs font-semibold text-slate-400">
                                            Discover and request
                                        </p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        {{-- =========================================================
             HOW IT WORKS
        ========================================================== --}}
        <section
            id="how-it-works"
            class="bg-[#fffaf7]"
        >

            <div class="mx-auto max-w-[1440px] px-5 py-16 sm:px-8 sm:py-20 lg:px-10">

                <div class="mx-auto max-w-2xl text-center">

                    <div class="inline-flex rounded-full bg-white px-3.5 py-2 text-[10px] font-black uppercase tracking-[0.16em] text-[#e85e38] ring-1 ring-[#f0e9e3]">
                        How it works
                    </div>

                    <h2 class="mt-4 text-3xl font-black tracking-tight text-slate-950 sm:text-4xl">
                        From surplus food to
                        <span class="text-[#ff7048]">
                            meaningful action.
                        </span>
                    </h2>

                    <p class="mt-4 text-sm leading-7 text-slate-500 sm:text-base">
                        A connected workflow that keeps food listings,
                        requests and delivery steps together.
                    </p>

                </div>


                <div class="mt-12 grid gap-5 md:grid-cols-2 lg:grid-cols-4">

                    @php
                        $steps = [
                            [
                                'number' => '01',
                                'icon' => '🍽️',
                                'label' => 'Discover',
                                'title' => 'Surplus gets listed',
                                'text' => 'Restaurants and food businesses can make available surplus food visible through the platform.',
                                'bg' => 'bg-orange-50',
                                'textColor' => 'text-[#ff7048]',
                                'numberBg' => 'bg-[#ff7048]',
                            ],
                            [
                                'number' => '02',
                                'icon' => '🔎',
                                'label' => 'Explore',
                                'title' => 'Users find food',
                                'text' => 'Customers and NGOs can browse available listings and discover suitable food.',
                                'bg' => 'bg-emerald-50',
                                'textColor' => 'text-emerald-600',
                                'numberBg' => 'bg-emerald-600',
                            ],
                            [
                                'number' => '03',
                                'icon' => '📝',
                                'label' => 'Request',
                                'title' => 'A request is reviewed',
                                'text' => 'Food businesses can review requests and manage the next step through their dashboard.',
                                'bg' => 'bg-sky-50',
                                'textColor' => 'text-sky-600',
                                'numberBg' => 'bg-sky-600',
                            ],
                            [
                                'number' => '04',
                                'icon' => '🚚',
                                'label' => 'Connect',
                                'title' => 'Delivery is coordinated',
                                'text' => 'Approved requests can move into a delivery workflow for pickup and completion.',
                                'bg' => 'bg-amber-50',
                                'textColor' => 'text-amber-600',
                                'numberBg' => 'bg-amber-500',
                            ],
                        ];
                    @endphp


                    @foreach ($steps as $step)

                        <div class="group rounded-[1.8rem] border border-[#f0e9e3] bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                            <div class="relative flex h-16 w-16 items-center justify-center rounded-2xl {{ $step['bg'] }} text-2xl transition duration-300 group-hover:scale-105">

                                {{ $step['icon'] }}

                                <span class="absolute -right-2 -top-2 flex h-7 w-7 items-center justify-center rounded-full {{ $step['numberBg'] }} text-[10px] font-black text-white">
                                    {{ $step['number'] }}
                                </span>

                            </div>

                            <p class="mt-6 text-[10px] font-black uppercase tracking-[0.16em] {{ $step['textColor'] }}">
                                {{ $step['label'] }}
                            </p>

                            <h3 class="mt-2 text-lg font-black text-slate-950">
                                {{ $step['title'] }}
                            </h3>

                            <p class="mt-2 text-sm leading-6 text-slate-500">
                                {{ $step['text'] }}
                            </p>

                        </div>

                    @endforeach

                </div>

            </div>

        </section>


        {{-- =========================================================
             ROLES
        ========================================================== --}}
        <section
            id="roles"
            class="border-y border-[#f0e9e3] bg-white"
        >

            <div class="mx-auto max-w-[1440px] px-5 py-16 sm:px-8 sm:py-20 lg:px-10">

                <div class="max-w-2xl">

                    <div class="inline-flex rounded-full bg-[#fff5eb] px-3 py-1.5 text-[10px] font-black uppercase tracking-[0.16em] text-[#e85e38]">
                        One connected platform
                    </div>

                    <h2 class="mt-4 text-3xl font-black tracking-tight text-slate-950 sm:text-4xl">
                        Designed around the people
                        <span class="text-[#ff7048]">
                            behind the process.
                        </span>
                    </h2>

                </div>


                <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">

                    @php
                        $roles = [
                            [
                                'icon' => '🧑‍🍳',
                                'label' => 'For customers',
                                'title' => 'Find & request',
                                'text' => 'Discover available food, choose the quantity you need and track your requests.',
                                'bg' => 'bg-orange-50',
                                'color' => 'text-[#ff7048]',
                            ],
                            [
                                'icon' => '🏪',
                                'label' => 'For restaurants',
                                'title' => 'List & manage',
                                'text' => 'Publish surplus listings, manage quantities and review incoming requests.',
                                'bg' => 'bg-amber-50',
                                'color' => 'text-amber-600',
                            ],
                            [
                                'icon' => '🤝',
                                'label' => 'For NGOs',
                                'title' => 'Coordinate support',
                                'text' => 'Discover suitable surplus food and manage requests through an organization-focused experience.',
                                'bg' => 'bg-emerald-50',
                                'color' => 'text-emerald-600',
                            ],
                            [
                                'icon' => '🚚',
                                'label' => 'For delivery partners',
                                'title' => 'Move food forward',
                                'text' => 'Accept available delivery tasks and update progress from pickup to completion.',
                                'bg' => 'bg-sky-50',
                                'color' => 'text-sky-600',
                            ],
                        ];
                    @endphp


                    @foreach ($roles as $role)

                        <div class="group rounded-[1.8rem] border border-[#f0e9e3] bg-[#fffaf7] p-6 transition duration-300 hover:-translate-y-1 hover:border-[#ffd4c5] hover:shadow-lg">

                            <div class="flex h-14 w-14 items-center justify-center rounded-2xl {{ $role['bg'] }} text-2xl transition duration-300 group-hover:scale-105">
                                {{ $role['icon'] }}
                            </div>

                            <p class="mt-6 text-[10px] font-black uppercase tracking-[0.16em] {{ $role['color'] }}">
                                {{ $role['label'] }}
                            </p>

                            <h3 class="mt-2 text-lg font-black text-slate-950">
                                {{ $role['title'] }}
                            </h3>

                            <p class="mt-2 text-sm leading-6 text-slate-500">
                                {{ $role['text'] }}
                            </p>

                        </div>

                    @endforeach

                </div>

            </div>

        </section>


        {{-- =========================================================
             PLATFORM CAPABILITIES
        ========================================================== --}}
        <section class="bg-[#fffaf7]">

            <div class="mx-auto max-w-[1440px] px-5 py-16 sm:px-8 sm:py-20 lg:px-10">

                <div class="grid gap-12 lg:grid-cols-[1fr_1fr] lg:items-center lg:gap-20">


                    {{-- Visual --}}
                    <div class="relative overflow-hidden rounded-[2.6rem] border border-[#f0e9e3] bg-white p-4 shadow-xl shadow-slate-200/50">

                        <div class="relative min-h-[430px] overflow-hidden rounded-[2.2rem] bg-gradient-to-br from-emerald-50 via-white to-orange-50">

                            <div class="grid-pattern absolute inset-0 opacity-40"></div>


                            <div class="relative flex min-h-[430px] flex-col justify-center px-6 sm:px-10">

                                <div class="rounded-3xl border border-white bg-white/90 p-5 shadow-xl backdrop-blur-xl">

                                    <div class="flex items-center justify-between">

                                        <div>

                                            <p class="text-[9px] font-black uppercase tracking-[0.16em] text-slate-400">
                                                Surplus workflow
                                            </p>

                                            <h3 class="mt-1 text-lg font-black text-slate-950">
                                                From listing to delivery
                                            </h3>

                                        </div>

                                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                                            ✓
                                        </div>

                                    </div>


                                    <div class="mt-6 space-y-4">

                                        <div class="flex items-center gap-3">

                                            <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-orange-50 text-sm">
                                                🍽️
                                            </div>

                                            <div class="flex-1">

                                                <div class="flex items-center justify-between">

                                                    <span class="text-xs font-black text-slate-700">
                                                        Food listing
                                                    </span>

                                                    <span class="text-[9px] font-bold text-emerald-600">
                                                        Active
                                                    </span>

                                                </div>

                                                <div class="mt-2 h-1.5 rounded-full bg-slate-100">
                                                    <div class="h-1.5 w-full rounded-full bg-orange-400"></div>
                                                </div>

                                            </div>

                                        </div>


                                        <div class="flex items-center gap-3">

                                            <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-sky-50 text-sm">
                                                📝
                                            </div>

                                            <div class="flex-1">

                                                <div class="flex items-center justify-between">

                                                    <span class="text-xs font-black text-slate-700">
                                                        Food request
                                                    </span>

                                                    <span class="text-[9px] font-bold text-emerald-600">
                                                        Approved
                                                    </span>

                                                </div>

                                                <div class="mt-2 h-1.5 rounded-full bg-slate-100">
                                                    <div class="h-1.5 w-3/4 rounded-full bg-sky-400"></div>
                                                </div>

                                            </div>

                                        </div>


                                        <div class="flex items-center gap-3">

                                            <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-emerald-50 text-sm">
                                                🚚
                                            </div>

                                            <div class="flex-1">

                                                <div class="flex items-center justify-between">

                                                    <span class="text-xs font-black text-slate-700">
                                                        Delivery
                                                    </span>

                                                    <span class="text-[9px] font-bold text-amber-600">
                                                        In progress
                                                    </span>

                                                </div>

                                                <div class="mt-2 h-1.5 rounded-full bg-slate-100">
                                                    <div class="h-1.5 w-1/2 rounded-full bg-emerald-400"></div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>


                                <div class="mt-4 grid grid-cols-3 gap-3">

                                    <div class="rounded-2xl border border-white bg-white/80 p-3 text-center shadow-sm">

                                        <div class="text-lg">
                                            📦
                                        </div>

                                        <p class="mt-1 text-[9px] font-black text-slate-600">
                                            Listings
                                        </p>

                                    </div>

                                    <div class="rounded-2xl border border-white bg-white/80 p-3 text-center shadow-sm">

                                        <div class="text-lg">
                                            🔔
                                        </div>

                                        <p class="mt-1 text-[9px] font-black text-slate-600">
                                            Updates
                                        </p>

                                    </div>

                                    <div class="rounded-2xl border border-white bg-white/80 p-3 text-center shadow-sm">

                                        <div class="text-lg">
                                            🚚
                                        </div>

                                        <p class="mt-1 text-[9px] font-black text-slate-600">
                                            Delivery
                                        </p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    {{-- Text --}}
                    <div>

                        <div class="inline-flex rounded-full bg-white px-3.5 py-2 text-[10px] font-black uppercase tracking-[0.16em] text-emerald-600 ring-1 ring-[#f0e9e3]">
                            Built for a connected workflow
                        </div>

                        <h2 class="mt-4 text-3xl font-black tracking-tight text-slate-950 sm:text-4xl">
                            More than a food
                            <span class="text-[#ff7048]">
                                listing page.
                            </span>
                        </h2>

                        <p class="mt-4 max-w-xl text-sm leading-7 text-slate-500 sm:text-base">
                            SurplusLink is designed around the full journey of
                            surplus food — from listing and requesting to
                            approval, notifications and delivery coordination.
                        </p>


                        <div class="mt-8 space-y-3">

                            <div class="flex gap-4 rounded-2xl border border-[#f0e9e3] bg-white p-4">

                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-orange-50 text-[#ff7048]">
                                    ✓
                                </div>

                                <div>

                                    <h3 class="text-sm font-black text-slate-900">
                                        Structured food listings
                                    </h3>

                                    <p class="mt-1 text-xs leading-5 text-slate-500">
                                        Quantity, food type, location and
                                        availability stay together.
                                    </p>

                                </div>

                            </div>


                            <div class="flex gap-4 rounded-2xl border border-[#f0e9e3] bg-white p-4">

                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                                    ✓
                                </div>

                                <div>

                                    <h3 class="text-sm font-black text-slate-900">
                                        Request management
                                    </h3>

                                    <p class="mt-1 text-xs leading-5 text-slate-500">
                                        Requests can move through a clear
                                        review and approval workflow.
                                    </p>

                                </div>

                            </div>


                            <div class="flex gap-4 rounded-2xl border border-[#f0e9e3] bg-white p-4">

                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-sky-50 text-sky-600">
                                    ✓
                                </div>

                                <div>

                                    <h3 class="text-sm font-black text-slate-900">
                                        Delivery coordination
                                    </h3>

                                    <p class="mt-1 text-xs leading-5 text-slate-500">
                                        Approved requests can move into a
                                        tracked delivery workflow.
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        {{-- =========================================================
             FINAL CTA
        ========================================================== --}}
        <section class="bg-white">

            <div class="mx-auto max-w-[1440px] px-5 pb-16 sm:px-8 sm:pb-20 lg:px-10">

                <div class="relative overflow-hidden rounded-[2.8rem] bg-[#ff7048] px-6 py-12 text-white shadow-2xl shadow-orange-200/50 sm:px-10 sm:py-14 lg:px-14">

                    <div class="absolute -right-20 -top-24 h-64 w-64 rounded-full bg-white/10"></div>

                    <div class="absolute -bottom-28 left-1/3 h-72 w-72 rounded-full bg-orange-900/10"></div>


                    <div class="relative flex flex-col gap-8 lg:flex-row lg:items-center lg:justify-between">

                        <div class="max-w-2xl">

                            <p class="text-[10px] font-black uppercase tracking-[0.2em] text-orange-100">
                                SurplusLink Lanka
                            </p>

                            <h2 class="mt-3 text-3xl font-black leading-tight tracking-tight sm:text-4xl">
                                Give surplus food
                                a better destination.
                            </h2>

                            <p class="mt-4 max-w-xl text-sm leading-6 text-orange-50 sm:text-base">
                                Explore the platform and become part of a
                                connected surplus food redistribution workflow.
                            </p>

                        </div>


                        <div class="flex shrink-0 flex-col gap-3 sm:flex-row">

                            @auth

                                <a
                                    href="{{ url('/dashboard') }}"
                                    class="inline-flex items-center justify-center gap-2 rounded-2xl bg-white px-6 py-3.5 text-sm font-black text-[#e85e38] shadow-sm transition hover:bg-orange-50"
                                >
                                    Open dashboard
                                    <span>→</span>
                                </a>

                            @else

                                @if (Route::has('register'))

                                    <a
                                        href="{{ route('register') }}"
                                        class="inline-flex items-center justify-center gap-2 rounded-2xl bg-white px-6 py-3.5 text-sm font-black text-[#e85e38] shadow-sm transition hover:bg-orange-50"
                                    >
                                        Get started
                                        <span>→</span>
                                    </a>

                                @endif

                                @if (Route::has('login'))

                                    <a
                                        href="{{ route('login') }}"
                                        class="inline-flex items-center justify-center rounded-2xl border border-white/30 bg-white/10 px-6 py-3.5 text-sm font-black text-white transition hover:bg-white/15"
                                    >
                                        Sign in
                                    </a>

                                @endif

                            @endauth

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </main>


    {{-- =========================================================
         FOOTER
    ========================================================== --}}
    <footer class="border-t border-[#f0e9e3] bg-[#fffaf7]">

        <div class="mx-auto max-w-[1440px] px-5 py-10 sm:px-8 lg:px-10">

            <div class="flex flex-col gap-8 md:flex-row md:items-center md:justify-between">

                <div>

                    <a
                        href="{{ url('/') }}"
                        class="inline-flex items-center gap-3"
                    >

                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#ff7048] text-white">

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M12 21c4.5-3.2 7-7.1 7-11.2C19 6.2 16.2 3 12 3S5 6.2 5 9.8C5 13.9 7.5 17.8 12 21Z"
                                />
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M12 19V8"
                                />
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M12 12c-2.1 0-3.7-.9-4.7-2.5M12 14c2.1 0 3.7-.9 4.7-2.5"
                                />
                            </svg>

                        </div>

                        <div>

                            <div class="text-base font-black tracking-tight text-slate-950">
                                Surplus<span class="text-[#ff7048]">Link</span>
                            </div>

                            <div class="mt-0.5 text-[8px] font-extrabold uppercase tracking-[0.2em] text-slate-400">
                                Lanka
                            </div>

                        </div>

                    </a>

                    <p class="mt-3 max-w-sm text-xs leading-5 text-slate-400">
                        A smart surplus food redistribution platform designed
                        to connect food, people and purpose.
                    </p>

                </div>


                <div class="flex flex-wrap items-center gap-x-6 gap-y-3">

                    <a
                        href="#how-it-works"
                        class="text-xs font-bold text-slate-500 transition hover:text-[#ff7048]"
                    >
                        How it works
                    </a>

                    <a
                        href="#about"
                        class="text-xs font-bold text-slate-500 transition hover:text-[#ff7048]"
                    >
                        About
                    </a>

                    <a
                        href="#roles"
                        class="text-xs font-bold text-slate-500 transition hover:text-[#ff7048]"
                    >
                        For everyone
                    </a>

                    @guest

                        @if (Route::has('login'))

                            <a
                                href="{{ route('login') }}"
                                class="text-xs font-bold text-slate-500 transition hover:text-[#ff7048]"
                            >
                                Sign in
                            </a>

                        @endif

                    @endguest

                </div>

            </div>


            <div class="mt-8 flex flex-col gap-2 border-t border-[#f0e9e3] pt-6 text-[10px] font-semibold text-slate-400 sm:flex-row sm:items-center sm:justify-between">

                <p>
                    © {{ date('Y') }} SurplusLink Lanka. All rights reserved.
                </p>

                <p>
                    Built with purpose. 🌱
                </p>

            </div>

        </div>

    </footer>

</body>
</html>
