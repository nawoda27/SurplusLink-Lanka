<x-app-layout>

    <div
        class="relative min-h-screen overflow-hidden bg-[#fffaf7] text-[#211c19] antialiased selection:bg-[#ff7048]/20"
        x-data="{
            activeImage: 0,
            isPaused: false,
            timer: null,

            images: [
                {
                    src: 'https://images.unsplash.com/photo-1540189549336-e6e99c3679fe?auto=format&fit=crop&w=1500&q=90',
                    title: 'Fresh meals',
                    subtitle: 'Good food ready for a better destination',
                    label: 'Fresh surplus'
                },
                {
                    src: 'https://images.unsplash.com/photo-1473093295043-cdd812d0e601?auto=format&fit=crop&w=1500&q=90',
                    title: 'Prepared with care',
                    subtitle: 'Food businesses can share what remains',
                    label: 'Local business'
                },
                {
                    src: 'https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=1500&q=90',
                    title: 'Discover something good',
                    subtitle: 'Browse available food through one platform',
                    label: 'Available food'
                },
                {
                    src: 'https://images.unsplash.com/photo-1498837167922-ddd27525d352?auto=format&fit=crop&w=1500&q=90',
                    title: 'Request what you need',
                    subtitle: 'Choose a listing and submit your request',
                    label: 'Simple request'
                },
                {
                    src: 'https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?auto=format&fit=crop&w=1500&q=90',
                    title: 'Better destinations',
                    subtitle: 'Follow your request until completion',
                    label: 'Connected journey'
                }
            ],

            startSlider() {
                if (this.timer) clearInterval(this.timer);

                this.timer = setInterval(() => {
                    if (!this.isPaused) {
                        this.nextImage();
                    }
                }, 5200);
            },

            nextImage() {
                this.activeImage = (this.activeImage + 1) % this.images.length;
            },

            previousImage() {
                this.activeImage =
                    (this.activeImage - 1 + this.images.length) % this.images.length;
            },

            selectImage(index) {
                this.activeImage = index;
            }
        }"
        x-init="startSlider()"
        @mouseenter="isPaused = true"
        @mouseleave="isPaused = false"
    >

        {{-- ============================================================
             GLOBAL BACKGROUND
        ============================================================= --}}
        <div class="pointer-events-none fixed inset-0 overflow-hidden">

            <div
                class="absolute -left-[220px] -top-[220px] h-[620px] w-[620px] rounded-full bg-[radial-gradient(circle,rgba(255,112,72,0.12)_0%,rgba(255,112,72,0.04)_42%,transparent_70%)]">
            </div>

            <div
                class="absolute -right-[220px] top-[80px] h-[580px] w-[580px] rounded-full bg-[radial-gradient(circle,rgba(246,190,92,0.11)_0%,rgba(246,190,92,0.035)_42%,transparent_70%)]">
            </div>

            <div
                class="absolute left-[35%] top-[48%] h-[520px] w-[520px] rounded-full bg-[radial-gradient(circle,rgba(46,125,85,0.07)_0%,transparent_68%)]">
            </div>

            <div
                class="absolute inset-0 opacity-[0.018]"
                style="background-image:radial-gradient(#1c1816 1px,transparent 1px);background-size:24px 24px;">
            </div>

        </div>


        {{-- ============================================================
             PREMIUM ANIMATIONS
        ============================================================= --}}
        <style>

            @keyframes dashboardFloat {
                0%, 100% {
                    transform: translateY(0) rotate(0deg);
                }

                50% {
                    transform: translateY(-8px) rotate(.6deg);
                }
            }

            @keyframes dashboardFloatReverse {
                0%, 100% {
                    transform: translateY(0);
                }

                50% {
                    transform: translateY(7px);
                }
            }

            @keyframes softPulse {
                0%, 100% {
                    opacity: .55;
                    transform: scale(1);
                }

                50% {
                    opacity: 1;
                    transform: scale(1.15);
                }
            }

            @keyframes flowPulse {
                0% {
                    transform: scale(.85);
                    opacity: .3;
                }

                50% {
                    transform: scale(1);
                    opacity: 1;
                }

                100% {
                    transform: scale(.85);
                    opacity: .3;
                }
            }

            @keyframes flowMove {
                0% {
                    left: 0%;
                    opacity: 0;
                }

                15% {
                    opacity: 1;
                }

                80% {
                    opacity: 1;
                }

                100% {
                    left: 100%;
                    opacity: 0;
                }
            }

            @keyframes shimmer {
                0% {
                    transform: translateX(-130%);
                }

                100% {
                    transform: translateX(130%);
                }
            }

            @keyframes gentleRotate {
                0%, 100% {
                    transform: rotate(-2deg);
                }

                50% {
                    transform: rotate(2deg);
                }
            }

            @keyframes progressFill {
                from {
                    width: 0%;
                }

                to {
                    width: 100%;
                }
            }

            @keyframes imageFloat {
                0%, 100% {
                    transform: translate3d(0, 0, 0) scale(1);
                }

                50% {
                    transform: translate3d(-8px, -5px, 0) scale(1.025);
                }
            }

            .dashboard-float {
                animation: dashboardFloat 5s ease-in-out infinite;
            }

            .dashboard-float-reverse {
                animation: dashboardFloatReverse 6s ease-in-out infinite;
            }

            .soft-pulse {
                animation: softPulse 2.8s ease-in-out infinite;
            }

            .flow-pulse {
                animation: flowPulse 2.2s ease-in-out infinite;
            }

            .flow-dot {
                animation: flowMove 3.2s linear infinite;
            }

            .flow-dot.delay-1 {
                animation-delay: 1.05s;
            }

            .flow-dot.delay-2 {
                animation-delay: 2.1s;
            }

            .hero-image-float {
                animation: imageFloat 12s ease-in-out infinite;
            }

            .hero-progress {
                animation: progressFill 5.2s linear forwards;
            }

            .dashboard-shimmer::after {
                content: "";
                position: absolute;
                inset: 0;
                width: 30%;
                background: linear-gradient(
                    90deg,
                    transparent,
                    rgba(255,255,255,.12),
                    transparent
                );
                transform: translateX(-130%);
                animation: shimmer 8s ease-in-out infinite;
            }

            .gentle-rotate {
                animation: gentleRotate 5s ease-in-out infinite;
            }

            @media (prefers-reduced-motion: reduce) {

                .dashboard-float,
                .dashboard-float-reverse,
                .soft-pulse,
                .flow-pulse,
                .flow-dot,
                .hero-image-float,
                .dashboard-shimmer::after,
                .gentle-rotate {
                    animation: none !important;
                }

            }

        </style>


        {{-- ============================================================
             MAIN CONTENT
        ============================================================= --}}
        <main class="relative mx-auto max-w-[1500px] px-4 py-6 sm:px-6 lg:px-8 lg:py-9">


            {{-- ========================================================
                 DASHBOARD HEADER
            ========================================================= --}}
            <header class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">

                <div class="min-w-0">

                    <div
                        class="inline-flex items-center gap-2 rounded-full border border-[#f0e1d9] bg-white/85 px-3.5 py-1.5 shadow-[0_4px_18px_rgba(54,38,30,0.035)] backdrop-blur-md">

                        <span
                            class="h-2 w-2 rounded-full bg-[#ff7048] shadow-[0_0_9px_rgba(255,112,72,0.55)]">
                        </span>

                        <span class="text-[9px] font-black uppercase tracking-[0.2em] text-[#d86442]">
                            Customer Dashboard
                        </span>

                    </div>


                    <h1
                        class="mt-4 text-[32px] font-black leading-[1] tracking-[-0.045em] text-[#1c1816] sm:text-[45px] lg:text-[48px]">

                        Hi, {{ auth()->user()->name }}

                        <span class="ml-1 inline-block">
                            👋
                        </span>

                    </h1>


                    <p class="mt-3 max-w-2xl text-[13px] leading-6 text-[#8b807a] sm:text-[14px]">
                        Discover available surplus food, manage your requests and stay connected from one place.
                    </p>

                </div>


                <div class="flex flex-col gap-2.5 sm:flex-row">

                    <a
                        href="{{ route('food-requests.my-requests') }}"
                        class="group inline-flex items-center justify-center gap-2 rounded-2xl border border-[#e8ddd6] bg-white px-5 py-3.5 text-[12px] font-black text-[#3d342f] shadow-[0_6px_20px_rgba(45,32,25,0.04)] transition duration-300 hover:-translate-y-0.5 hover:border-[#d9cbc3] hover:shadow-[0_12px_26px_rgba(45,32,25,0.07)]"
                    >

                        <svg
                            class="h-4 w-4 text-[#df6845] transition group-hover:-translate-y-0.5"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M9 5H7a2 2 0 00-2 2v11a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M9 5a3 3 0 016 0M9 12h6M9 16h4"
                            />
                        </svg>

                        My Requests

                    </a>


                    <a
                        href="{{ route('food-listings.browse') }}"
                        class="group inline-flex items-center justify-center gap-2.5 rounded-2xl bg-[#1c1816] px-5 py-3.5 text-[12px] font-black text-white shadow-[0_10px_25px_rgba(28,24,22,0.14)] transition duration-300 hover:-translate-y-0.5 hover:bg-[#2b2522]"
                    >

                        <svg
                            class="h-4 w-4 transition duration-300 group-hover:scale-110"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.9"
                                d="M21 21l-4.35-4.35m2.35-5.65a8 8 0 11-16 0 8 8 0 0116 0z"
                            />
                        </svg>

                        Explore Food

                        <span class="transition duration-300 group-hover:translate-x-1">
                            →
                        </span>

                    </a>

                </div>

            </header>


            {{-- ========================================================
                 PREMIUM FOOD IMAGE HERO
            ========================================================= --}}
            <section
                class="dashboard-shimmer relative mt-8 overflow-hidden rounded-[2.5rem] bg-[#ff7048] shadow-[0_28px_70px_rgba(255,112,72,0.20)]"
            >

                <div class="absolute inset-0 overflow-hidden">

                    <div class="absolute -right-28 -top-36 h-[500px] w-[500px] rounded-full bg-white/[0.12]"></div>

                    <div class="absolute -bottom-44 left-[25%] h-[500px] w-[500px] rounded-full bg-white/[0.07] blur-3xl"></div>

                    <div
                        class="absolute left-0 top-0 h-full w-full bg-[radial-gradient(80%_100%_at_0%_0%,rgba(255,255,255,0.20),transparent_58%)]">
                    </div>

                </div>


                <div class="relative grid lg:grid-cols-[0.84fr_1.16fr]">


                    {{-- ====================================================
                         HERO COPY
                    ===================================================== --}}
                    <div class="relative z-20 px-6 py-10 sm:px-9 sm:py-12 lg:px-12 lg:py-14">

                        <div
                            class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-3.5 py-2 text-[9px] font-black uppercase tracking-[0.17em] text-white backdrop-blur-md">

                            <span
                                class="flex h-6 w-6 items-center justify-center rounded-full bg-white text-[13px] text-[#ff7048]">
                                ♻️
                            </span>

                            Smart surplus marketplace

                        </div>


                        <h2
                            class="mt-6 max-w-[16ch] text-[38px] font-black leading-[0.96] tracking-[-0.05em] text-white sm:text-[51px]">

                            Good food can still make a difference.

                        </h2>


                        <p class="mt-5 max-w-[51ch] text-[13px] leading-6 text-white/80 sm:text-[14px] sm:leading-7">
                            Discover food shared by local businesses before it goes to waste.
                            Request what you need and follow the journey until completion.
                        </p>


                        <div class="mt-7 flex flex-col gap-2.5 sm:flex-row">

                            <a
                                href="{{ route('food-listings.browse') }}"
                                class="group inline-flex items-center justify-center gap-2 rounded-2xl bg-white px-5 py-3.5 text-[12px] font-black text-[#df6845] shadow-[0_12px_30px_rgba(0,0,0,0.12)] transition duration-300 hover:-translate-y-0.5 hover:shadow-[0_18px_38px_rgba(0,0,0,0.16)]"
                            >

                                Browse available food

                                <span
                                    class="flex h-6 w-6 items-center justify-center rounded-full bg-[#fff0e9] transition duration-300 group-hover:bg-[#ff7048] group-hover:text-white">
                                    →
                                </span>

                            </a>


                            <a
                                href="{{ route('food-requests.my-requests') }}"
                                class="inline-flex items-center justify-center rounded-2xl border border-white/25 bg-white/10 px-5 py-3.5 text-[12px] font-bold text-white backdrop-blur-md transition duration-300 hover:bg-white/15"
                            >
                                Track my requests
                            </a>

                        </div>


                        {{-- REAL ACTIVITY --}}
                        <div
                            class="mt-8 grid max-w-[430px] grid-cols-3 overflow-hidden rounded-2xl border border-white/15 bg-white/[0.08] backdrop-blur-md">

                            <div class="px-3 py-3.5 text-center sm:px-4">

                                <p class="text-[21px] font-black tracking-tight text-white">
                                    {{ $activity['total'] ?? 0 }}
                                </p>

                                <p class="mt-0.5 text-[8px] font-black uppercase tracking-[0.13em] text-white/55">
                                    Requests
                                </p>

                            </div>


                            <div class="border-x border-white/10 px-3 py-3.5 text-center sm:px-4">

                                <p class="text-[21px] font-black tracking-tight text-white">
                                    {{ $activity['approved'] ?? 0 }}
                                </p>

                                <p class="mt-0.5 text-[8px] font-black uppercase tracking-[0.13em] text-white/55">
                                    Approved
                                </p>

                            </div>


                            <div class="px-3 py-3.5 text-center sm:px-4">

                                <p class="text-[21px] font-black tracking-tight text-white">
                                    {{ $activity['completed'] ?? 0 }}
                                </p>

                                <p class="mt-0.5 text-[8px] font-black uppercase tracking-[0.13em] text-white/55">
                                    Completed
                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- ====================================================
                         ANIMATED FOOD SHOWCASE
                    ===================================================== --}}
                    <div
                        class="relative min-h-[500px] overflow-hidden lg:min-h-[570px]"
                        @mouseenter="isPaused = true"
                        @mouseleave="isPaused = false"
                    >

                        {{-- Image layers --}}
                        <template x-for="(image, index) in images" :key="image.src">

                            <div
                                x-show="activeImage === index"
                                x-transition:enter="transition ease-out duration-1000"
                                x-transition:enter-start="opacity-0 scale-[1.08]"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-700 absolute inset-0"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-[1.03]"
                                class="absolute inset-0"
                            >

                                <img
                                    :src="image.src"
                                    :alt="image.title"
                                    class="hero-image-float absolute inset-0 h-full w-full object-cover"
                                >

                                <div class="absolute inset-0 bg-gradient-to-r from-[#ff7048] via-[#ff7048]/20 to-transparent"></div>

                                <div class="absolute inset-0 bg-gradient-to-t from-[#15110f]/75 via-transparent to-transparent"></div>

                                <div class="absolute inset-0 bg-gradient-to-br from-white/10 via-transparent to-black/10"></div>

                            </div>

                        </template>


                        {{-- Top floating badge --}}
                        <div
                            class="dashboard-float absolute left-6 top-7 z-20 w-[245px] rounded-[1.45rem] border border-white/45 bg-white/95 p-4 shadow-[0_22px_48px_rgba(0,0,0,0.17)] backdrop-blur-xl sm:left-8"
                        >

                            <div class="flex items-center gap-3">

                                <div
                                    class="h-12 w-12 overflow-hidden rounded-xl bg-[#fff0e9] shadow-sm"
                                >

                                    <img
                                        :src="images[activeImage].src"
                                        :alt="images[activeImage].title"
                                        class="h-full w-full object-cover transition duration-700"
                                    >

                                </div>


                                <div class="min-w-0">

                                    <div class="flex items-center gap-2">

                                        <span class="h-2 w-2 rounded-full bg-emerald-500 soft-pulse"></span>

                                        <span
                                            class="text-[8px] font-black uppercase tracking-[0.14em] text-emerald-600"
                                            x-text="images[activeImage].label"
                                        ></span>

                                    </div>

                                    <p
                                        class="mt-1 truncate text-[13px] font-black text-[#211c19]"
                                        x-text="images[activeImage].title"
                                    ></p>

                                    <p
                                        class="mt-0.5 line-clamp-1 text-[10px] text-[#8b807a]"
                                        x-text="images[activeImage].subtitle"
                                    ></p>

                                </div>

                            </div>

                        </div>


                        {{-- Image counter --}}
                        <div
                            class="absolute right-6 top-7 z-20 flex items-center gap-2 rounded-full border border-white/25 bg-black/25 px-3.5 py-2 text-[9px] font-black text-white backdrop-blur-md sm:right-8"
                        >

                            <span x-text="String(activeImage + 1).padStart(2, '0')"></span>

                            <span class="text-white/40">/</span>

                            <span x-text="String(images.length).padStart(2, '0')"></span>

                        </div>


                        {{-- Main image caption --}}
                        <div class="absolute bottom-[115px] left-6 z-20 max-w-[360px] sm:left-8">

                            <p
                                class="text-[9px] font-black uppercase tracking-[0.2em] text-white/65"
                                x-text="images[activeImage].label"
                            ></p>

                            <h3
                                class="mt-2 text-[27px] font-black leading-[1.05] tracking-[-0.035em] text-white sm:text-[34px]"
                                x-text="images[activeImage].title"
                            ></h3>

                            <p
                                class="mt-2 text-[11px] leading-5 text-white/70 sm:text-[12px]"
                                x-text="images[activeImage].subtitle"
                            ></p>

                        </div>


                        {{-- Bottom control panel --}}
                        <div
                            class="absolute inset-x-5 bottom-5 z-30 rounded-[1.4rem] border border-white/20 bg-black/25 p-3 backdrop-blur-xl sm:inset-x-8"
                        >

                            <div class="flex items-center gap-3">

                                {{-- Previous --}}
                                <button
                                    type="button"
                                    @click="previousImage()"
                                    class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border border-white/20 bg-white/10 text-white transition duration-300 hover:bg-white/20"
                                    aria-label="Previous food image"
                                >
                                    ←
                                </button>


                                {{-- Thumbnails --}}
                                <div class="flex min-w-0 flex-1 gap-2">

                                    <template x-for="(image, index) in images" :key="'thumb-' + index">

                                        <button
                                            type="button"
                                            @click="selectImage(index)"
                                            class="group relative h-11 min-w-0 flex-1 overflow-hidden rounded-xl border transition duration-300"
                                            :class="activeImage === index
                                                ? 'border-white ring-2 ring-white/30'
                                                : 'border-white/15 opacity-55 hover:opacity-100'"
                                            :aria-label="'Show ' + image.title"
                                        >

                                            <img
                                                :src="image.src"
                                                :alt="image.title"
                                                class="h-full w-full object-cover transition duration-500 group-hover:scale-110"
                                            >

                                            <span
                                                class="absolute inset-0 bg-black/25"
                                                :class="activeImage === index ? 'opacity-0' : 'opacity-100'"
                                            ></span>

                                        </button>

                                    </template>

                                </div>


                                {{-- Next --}}
                                <button
                                    type="button"
                                    @click="nextImage()"
                                    class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border border-white/20 bg-white/10 text-white transition duration-300 hover:bg-white/20"
                                    aria-label="Next food image"
                                >
                                    →
                                </button>

                            </div>


                            {{-- Progress --}}
                            <div class="mt-2.5 h-[2px] overflow-hidden rounded-full bg-white/15">

                                <div
                                    class="hero-progress h-full rounded-full bg-white/85"
                                    :key="activeImage"
                                ></div>

                            </div>

                        </div>


                        {{-- Floating workflow card --}}
                        <div
                            class="dashboard-float-reverse absolute bottom-[150px] right-7 z-20 hidden w-[235px] rounded-[1.35rem] border border-white/45 bg-white/95 p-4 shadow-[0_22px_48px_rgba(0,0,0,0.18)] backdrop-blur-xl xl:block"
                        >

                            <div class="flex items-start gap-3">

                                <div
                                    class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-[#effaf5] text-emerald-600"
                                >
                                    ✓
                                </div>

                                <div>

                                    <p class="text-[8px] font-black uppercase tracking-[0.14em] text-emerald-600">
                                        Connected workflow
                                    </p>

                                    <p class="mt-1 text-[12px] font-black leading-5 text-[#211c19]">
                                        Discover → Request → Receive
                                    </p>

                                    <p class="mt-1 text-[9px] leading-4 text-[#8b807a]">
                                        Follow your food request through each stage.
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </section>


            {{-- ========================================================
                 ACTIVITY STATS
            ========================================================= --}}
            <section class="mt-10">

                <div class="flex flex-col gap-1 sm:flex-row sm:items-end sm:justify-between">

                    <div>

                        <p class="text-[9px] font-black uppercase tracking-[0.2em] text-[#df6845]">
                            Your activity
                        </p>

                        <h2 class="mt-1.5 text-[23px] font-black tracking-[-0.03em] text-[#211c19]">
                            Request overview
                        </h2>

                    </div>


                    <a
                        href="{{ route('food-requests.my-requests') }}"
                        class="hidden text-[11px] font-black text-[#df6845] transition hover:text-[#c85232] sm:block"
                    >
                        View all requests →
                    </a>

                </div>


                <div class="mt-5 grid grid-cols-2 gap-3 lg:grid-cols-4">


                    {{-- Total --}}
                    <div
                        class="group rounded-[1.65rem] border border-[#eee3dc] bg-white p-5 shadow-[0_7px_25px_rgba(50,36,29,0.04)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(50,36,29,0.075)]"
                    >

                        <div class="flex items-center justify-between">

                            <span
                                class="flex h-11 w-11 items-center justify-center rounded-[14px] bg-[#fff2ec] text-[19px] transition group-hover:scale-105">
                                📋
                            </span>

                            <span class="text-[8px] font-black uppercase tracking-[0.12em] text-[#b5a8a1]">
                                All requests
                            </span>

                        </div>

                        <p class="mt-5 text-[30px] font-black leading-none tracking-[-0.04em] text-[#211c19]">
                            {{ $activity['total'] ?? 0 }}
                        </p>

                        <p class="mt-2 text-[11px] font-semibold text-[#8b807a]">
                            Total submitted
                        </p>

                    </div>


                    {{-- Pending --}}
                    <div
                        class="group rounded-[1.65rem] border border-[#eee3dc] bg-white p-5 shadow-[0_7px_25px_rgba(50,36,29,0.04)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(50,36,29,0.075)]"
                    >

                        <div class="flex items-center justify-between">

                            <span
                                class="flex h-11 w-11 items-center justify-center rounded-[14px] bg-[#fff8e7] text-[19px] transition group-hover:scale-105">
                                ⏳
                            </span>

                            <span class="text-[8px] font-black uppercase tracking-[0.12em] text-[#b5a8a1]">
                                Waiting
                            </span>

                        </div>

                        <p class="mt-5 text-[30px] font-black leading-none tracking-[-0.04em] text-[#211c19]">
                            {{ $activity['pending'] ?? 0 }}
                        </p>

                        <p class="mt-2 text-[11px] font-semibold text-[#8b807a]">
                            Awaiting response
                        </p>

                    </div>


                    {{-- Approved --}}
                    <div
                        class="group rounded-[1.65rem] border border-[#eee3dc] bg-white p-5 shadow-[0_7px_25px_rgba(50,36,29,0.04)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(50,36,29,0.075)]"
                    >

                        <div class="flex items-center justify-between">

                            <span
                                class="flex h-11 w-11 items-center justify-center rounded-[14px] bg-[#fff1eb] text-[19px] transition group-hover:scale-105">
                                ✓
                            </span>

                            <span class="text-[8px] font-black uppercase tracking-[0.12em] text-[#b5a8a1]">
                                Approved
                            </span>

                        </div>

                        <p class="mt-5 text-[30px] font-black leading-none tracking-[-0.04em] text-[#211c19]">
                            {{ $activity['approved'] ?? 0 }}
                        </p>

                        <p class="mt-2 text-[11px] font-semibold text-[#8b807a]">
                            Moving forward
                        </p>

                    </div>


                    {{-- Completed --}}
                    <div
                        class="group rounded-[1.65rem] border border-[#eee3dc] bg-white p-5 shadow-[0_7px_25px_rgba(50,36,29,0.04)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_15px_35px_rgba(50,36,29,0.075)]"
                    >

                        <div class="flex items-center justify-between">

                            <span
                                class="flex h-11 w-11 items-center justify-center rounded-[14px] bg-[#edf6ef] text-[19px] transition group-hover:scale-105">
                                🌱
                            </span>

                            <span class="text-[8px] font-black uppercase tracking-[0.12em] text-[#b5a8a1]">
                                Completed
                            </span>

                        </div>

                        <p class="mt-5 text-[30px] font-black leading-none tracking-[-0.04em] text-[#211c19]">
                            {{ $activity['completed'] ?? 0 }}
                        </p>

                        <p class="mt-2 text-[11px] font-semibold text-[#8b807a]">
                            Successfully received
                        </p>

                    </div>

                </div>

            </section>


            {{-- ========================================================
                 VISUAL WORKFLOW
            ========================================================= --}}
            <section
                class="mt-10 overflow-hidden rounded-[2rem] border border-[#eee3dc] bg-white shadow-[0_10px_32px_rgba(50,36,29,0.04)]"
            >

                <div class="border-b border-[#f0e7e2] px-6 py-6 sm:px-8">

                    <div class="flex flex-col gap-2 sm:flex-row sm:items-end sm:justify-between">

                        <div>

                            <p class="text-[9px] font-black uppercase tracking-[0.2em] text-[#df6845]">
                                Connected workflow
                            </p>

                            <h2 class="mt-1.5 text-[21px] font-black tracking-[-0.025em] text-[#211c19]">
                                How your request moves
                            </h2>

                        </div>

                        <p class="max-w-md text-[11px] leading-5 text-[#9a8d86] sm:text-right">
                            A simple journey from available surplus food to a completed request.
                        </p>

                    </div>

                </div>


                <div class="px-5 py-7 sm:px-8 sm:py-9">

                    <div class="relative">

                        <div class="absolute left-[12%] right-[12%] top-[31px] hidden h-px bg-[#eadfd8] sm:block"></div>


                        <div class="absolute left-[12%] right-[12%] top-[28px] hidden h-2 overflow-hidden sm:block">

                            <span class="flow-dot absolute h-1.5 w-1.5 rounded-full bg-[#ff7048]"></span>

                            <span class="flow-dot delay-1 absolute h-1.5 w-1.5 rounded-full bg-emerald-500"></span>

                            <span class="flow-dot delay-2 absolute h-1.5 w-1.5 rounded-full bg-sky-500"></span>

                        </div>


                        <div class="grid gap-6 sm:grid-cols-4">


                            <div class="relative text-center">

                                <div
                                    class="mx-auto flex h-[62px] w-[62px] items-center justify-center rounded-[20px] border border-[#ffd8ca] bg-[#fff3ee] text-2xl shadow-sm flow-pulse">
                                    🍱
                                </div>

                                <p class="mt-4 text-[9px] font-black uppercase tracking-[0.17em] text-[#df6845]">
                                    Step 01
                                </p>

                                <h3 class="mt-1 text-[13px] font-black text-[#211c19]">
                                    Discover
                                </h3>

                                <p class="mx-auto mt-1 max-w-[150px] text-[10px] leading-5 text-[#91847d]">
                                    Find available surplus food.
                                </p>

                            </div>


                            <div class="relative text-center">

                                <div
                                    class="mx-auto flex h-[62px] w-[62px] items-center justify-center rounded-[20px] border border-[#ffe5b7] bg-[#fff9ec] text-2xl flow-pulse">
                                    📝
                                </div>

                                <p class="mt-4 text-[9px] font-black uppercase tracking-[0.17em] text-amber-600">
                                    Step 02
                                </p>

                                <h3 class="mt-1 text-[13px] font-black text-[#211c19]">
                                    Request
                                </h3>

                                <p class="mx-auto mt-1 max-w-[150px] text-[10px] leading-5 text-[#91847d]">
                                    Choose quantity and submit.
                                </p>

                            </div>


                            <div class="relative text-center">

                                <div
                                    class="mx-auto flex h-[62px] w-[62px] items-center justify-center rounded-[20px] border border-[#cce9dc] bg-[#effaf5] text-2xl flow-pulse">
                                    ✓
                                </div>

                                <p class="mt-4 text-[9px] font-black uppercase tracking-[0.17em] text-emerald-600">
                                    Step 03
                                </p>

                                <h3 class="mt-1 text-[13px] font-black text-[#211c19]">
                                    Approval
                                </h3>

                                <p class="mx-auto mt-1 max-w-[150px] text-[10px] leading-5 text-[#91847d]">
                                    Restaurant reviews your request.
                                </p>

                            </div>


                            <div class="relative text-center">

                                <div
                                    class="mx-auto flex h-[62px] w-[62px] items-center justify-center rounded-[20px] border border-[#cfe4f4] bg-[#f0f8fd] text-2xl flow-pulse">
                                    🚚
                                </div>

                                <p class="mt-4 text-[9px] font-black uppercase tracking-[0.17em] text-sky-600">
                                    Step 04
                                </p>

                                <h3 class="mt-1 text-[13px] font-black text-[#211c19]">
                                    Delivery
                                </h3>

                                <p class="mx-auto mt-1 max-w-[150px] text-[10px] leading-5 text-[#91847d]">
                                    Follow the request to completion.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </section>


            {{-- ========================================================
                 DISCOVERY + QUICK ACTIONS + MISSION
            ========================================================= --}}
            <section class="mt-10 grid gap-5 lg:grid-cols-12">


                {{-- FOOD DISCOVERY --}}
                <a
                    href="{{ route('food-listings.browse') }}"
                    class="group relative min-h-[410px] overflow-hidden rounded-[2rem] bg-[#211c19] shadow-[0_18px_45px_rgba(35,25,20,0.10)] lg:col-span-5"
                >

                    <img
                        src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?auto=format&fit=crop&w=1200&q=90"
                        alt="Fresh food available to discover"
                        class="absolute inset-0 h-full w-full object-cover transition duration-[1.2s] ease-out group-hover:scale-110"
                    >

                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/35 to-black/5"></div>


                    <div
                        class="absolute left-5 top-5 inline-flex items-center gap-2 rounded-full border border-white/25 bg-white/90 px-3 py-1.5 text-[9px] font-black uppercase tracking-[0.12em] text-[#211c19] shadow-lg backdrop-blur-md"
                    >

                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-500 soft-pulse"></span>

                        Explore food

                    </div>


                    <div class="absolute inset-x-0 bottom-0 p-7">

                        <p class="text-[9px] font-black uppercase tracking-[0.18em] text-white/55">
                            Surplus marketplace
                        </p>

                        <h3 class="mt-2 text-[28px] font-black leading-[1.04] tracking-[-0.035em] text-white">
                            Find something good
                            <br>
                            before it goes to waste.
                        </h3>

                        <p class="mt-3 max-w-[36ch] text-[12px] leading-5 text-white/65">
                            Browse available food and send a request directly through the platform.
                        </p>


                        <span
                            class="mt-5 inline-flex items-center gap-2 rounded-full bg-white px-4 py-2.5 text-[11px] font-black text-[#211c19] shadow-lg transition duration-300 group-hover:gap-3"
                        >

                            Browse available food

                            <span>
                                →
                            </span>

                        </span>

                    </div>

                </a>


                {{-- QUICK ACTIONS --}}
                <div
                    class="rounded-[2rem] border border-[#eee3dc] bg-white p-6 shadow-[0_10px_30px_rgba(50,36,29,0.04)] lg:col-span-4"
                >

                    <p class="text-[9px] font-black uppercase tracking-[0.19em] text-[#df6845]">
                        Quick access
                    </p>

                    <h3 class="mt-1.5 text-[20px] font-black tracking-[-0.025em] text-[#211c19]">
                        What would you like to do?
                    </h3>


                    <div class="mt-6 space-y-3">


                        <a
                            href="{{ route('food-listings.browse') }}"
                            class="group flex items-center gap-4 rounded-[1.25rem] border border-[#f0e5df] bg-[#fffaf7] p-3.5 transition duration-300 hover:-translate-y-0.5 hover:border-[#ffd7c8] hover:bg-[#fff5ef]"
                        >

                            <span
                                class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-white text-[19px] shadow-sm transition group-hover:scale-105">
                                🔎
                            </span>

                            <span class="min-w-0 flex-1">

                                <span class="block text-[12px] font-black text-[#211c19]">
                                    Browse food
                                </span>

                                <span class="mt-0.5 block text-[10px] text-[#91847d]">
                                    Discover available listings
                                </span>

                            </span>

                            <span
                                class="text-[#b7aaa3] transition group-hover:translate-x-1 group-hover:text-[#df6845]">
                                →
                            </span>

                        </a>


                        <a
                            href="{{ route('food-requests.my-requests') }}"
                            class="group flex items-center gap-4 rounded-[1.25rem] border border-[#f0e5df] bg-[#fffaf7] p-3.5 transition duration-300 hover:-translate-y-0.5 hover:border-[#ffd7c8] hover:bg-[#fff5ef]"
                        >

                            <span
                                class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-white text-[19px] shadow-sm transition group-hover:scale-105">
                                📦
                            </span>

                            <span class="min-w-0 flex-1">

                                <span class="block text-[12px] font-black text-[#211c19]">
                                    My requests
                                </span>

                                <span class="mt-0.5 block text-[10px] text-[#91847d]">
                                    Track request progress
                                </span>

                            </span>

                            <span
                                class="text-[#b7aaa3] transition group-hover:translate-x-1 group-hover:text-[#df6845]">
                                →
                            </span>

                        </a>


                        <a
                            href="{{ route('notifications.index') }}"
                            class="group flex items-center gap-4 rounded-[1.25rem] border border-[#f0e5df] bg-[#fffaf7] p-3.5 transition duration-300 hover:-translate-y-0.5 hover:border-[#ffd7c8] hover:bg-[#fff5ef]"
                        >

                            <span
                                class="relative flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-white text-[19px] shadow-sm transition group-hover:scale-105"
                            >

                                🔔

                                @if ($recentNotifications->contains(fn ($notification) => is_null($notification->read_at)))

                                    <span
                                        class="absolute -right-0.5 -top-0.5 h-2.5 w-2.5 rounded-full border-2 border-white bg-[#ff7048] shadow-[0_0_7px_rgba(255,112,72,0.4)]">
                                    </span>

                                @endif

                            </span>

                            <span class="min-w-0 flex-1">

                                <span class="block text-[12px] font-black text-[#211c19]">
                                    Notifications
                                </span>

                                <span class="mt-0.5 block text-[10px] text-[#91847d]">
                                    View your latest updates
                                </span>

                            </span>

                            <span
                                class="text-[#b7aaa3] transition group-hover:translate-x-1 group-hover:text-[#df6845]">
                                →
                            </span>

                        </a>

                    </div>

                </div>


                {{-- MISSION --}}
                <div
                    class="relative overflow-hidden rounded-[2rem] bg-[#214033] p-7 shadow-[0_15px_40px_rgba(33,64,51,0.16)] lg:col-span-3"
                >

                    <div class="absolute -right-14 -top-14 h-40 w-40 rounded-full bg-white/[0.06]"></div>

                    <div class="absolute -bottom-12 -left-10 h-36 w-36 rounded-full bg-[#ff7048]/15 blur-xl"></div>


                    <div class="relative">

                        <div
                            class="gentle-rotate flex h-11 w-11 items-center justify-center rounded-xl border border-white/10 bg-white/10 text-xl backdrop-blur-md">
                            🌱
                        </div>


                        <p class="mt-6 text-[8px] font-black uppercase tracking-[0.19em] text-white/40">
                            Our mission
                        </p>


                        <h3 class="mt-2 text-[21px] font-black leading-tight tracking-[-0.025em] text-white">
                            Keep good food in the community.
                        </h3>


                        <p class="mt-3 text-[11px] leading-5 text-white/58">
                            SurplusLink creates a structured connection between food businesses, people and delivery partners.
                        </p>


                        <div class="mt-7 border-t border-white/10 pt-5">

                            <p class="text-[8px] font-black uppercase tracking-[0.14em] text-white/35">
                                Your completed requests
                            </p>

                            <p class="mt-1 text-[30px] font-black tracking-[-0.04em] text-white">
                                {{ $activity['completed'] ?? 0 }}
                            </p>

                            <p class="mt-1 text-[10px] text-white/40">
                                completed through SurplusLink
                            </p>

                        </div>

                    </div>

                </div>

            </section>


            {{-- ========================================================
                 RECENT NOTIFICATIONS
            ========================================================= --}}
            <section class="mt-10">

                <div class="flex flex-col gap-2 sm:flex-row sm:items-end sm:justify-between">

                    <div>

                        <p class="text-[9px] font-black uppercase tracking-[0.2em] text-[#df6845]">
                            Stay informed
                        </p>

                        <h2 class="mt-1.5 text-[23px] font-black tracking-[-0.03em] text-[#211c19]">
                            Recent updates
                        </h2>

                        <p class="mt-1 text-[12px] text-[#8b807a]">
                            Important updates about your food requests.
                        </p>

                    </div>


                    <a
                        href="{{ route('notifications.index') }}"
                        class="text-[11px] font-black text-[#df6845] transition hover:text-[#c85232]"
                    >
                        View all notifications →
                    </a>

                </div>


                <div
                    class="mt-5 overflow-hidden rounded-[1.8rem] border border-[#eee3dc] bg-white shadow-[0_8px_28px_rgba(50,36,29,0.04)]"
                >

                    @forelse ($recentNotifications as $notification)

                        <a
                            href="{{ ($notification->data['food_request_id'] ?? false)
                                ? route('food-requests.my-requests')
                                : route('notifications.index') }}"
                            class="group block border-b border-[#f3ebe6] last:border-b-0 transition duration-300 hover:bg-[#fffaf7] {{ is_null($notification->read_at) ? 'bg-[#fff8f4]' : 'bg-white' }}"
                        >

                            <div class="flex gap-4 px-5 py-5 sm:px-6">

                                <div
                                    class="relative flex h-11 w-11 shrink-0 items-center justify-center rounded-[14px] {{ is_null($notification->read_at) ? 'bg-[#fff0e9] text-[#df6845]' : 'bg-[#f7f1ed] text-[#897b73]' }}"
                                >

                                    <span class="text-lg">
                                        🔔
                                    </span>


                                    @if (is_null($notification->read_at))

                                        <span
                                            class="absolute -right-1 -top-1 h-3 w-3 rounded-full border-2 border-white bg-[#ff7048] shadow-[0_0_8px_rgba(255,112,72,0.45)]">
                                        </span>

                                    @endif

                                </div>


                                <div class="min-w-0 flex-1">

                                    <div class="flex flex-wrap items-center gap-2">

                                        <p class="break-words text-[12px] font-black text-[#241f1c]">
                                            {{ $notification->data['title'] ?? 'Notification' }}
                                        </p>


                                        @if (is_null($notification->read_at))

                                            <span
                                                class="rounded-full bg-[#ff7048] px-2 py-0.5 text-[7px] font-black uppercase tracking-wider text-white">
                                                New
                                            </span>

                                        @endif

                                    </div>


                                    <p class="mt-1.5 break-words text-[11px] leading-5 text-[#81746d]">
                                        {{ $notification->data['message'] ?? '' }}
                                    </p>


                                    <div
                                        class="mt-2 flex flex-wrap items-center gap-2 text-[9px] font-semibold text-[#b0a19a]"
                                    >

                                        <span>
                                            {{ $notification->created_at->diffForHumans() }}
                                        </span>


                                        @if ($notification->data['food_request_id'] ?? false)

                                            <span class="h-1 w-1 rounded-full bg-[#d7cbc4]"></span>

                                            <span class="font-black text-[#df6845]">
                                                View request →
                                            </span>

                                        @endif

                                    </div>

                                </div>


                                <div class="hidden items-center sm:flex">

                                    <span
                                        class="flex h-8 w-8 items-center justify-center rounded-full bg-[#f8f2ee] text-[#a18f86] transition duration-300 group-hover:translate-x-0.5 group-hover:bg-[#fff0e9] group-hover:text-[#df6845]"
                                    >
                                        →
                                    </span>

                                </div>

                            </div>

                        </a>


                    @empty

                        <div class="px-6 py-12 text-center sm:py-14">

                            <div
                                class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-[#fff4ef] text-xl shadow-sm">
                                ✨
                            </div>

                            <h3 class="mt-4 text-[16px] font-black text-[#241f1c]">
                                You're all caught up
                            </h3>

                            <p class="mx-auto mt-1.5 max-w-md text-[11px] leading-5 text-[#8b807a]">
                                Updates about your food requests will appear here.
                            </p>

                        </div>

                    @endforelse

                </div>

            </section>


            {{-- ========================================================
                 FINAL INFORMATION PANEL
            ========================================================= --}}
            <section
                class="mt-10 overflow-hidden rounded-[2rem] border border-[#eee3dc] bg-[#fdf7f2]"
            >

                <div class="grid lg:grid-cols-[0.8fr_1.2fr]">


                    <div class="border-b border-[#eee3dc] p-7 sm:p-9 lg:border-b-0 lg:border-r">

                        <p class="text-[9px] font-black uppercase tracking-[0.2em] text-[#df6845]">
                            Simple process
                        </p>


                        <h2
                            class="mt-2 text-[24px] font-black leading-tight tracking-[-0.035em] text-[#211c19]"
                        >
                            From surplus food
                            <br>
                            to your table.
                        </h2>


                        <p class="mt-3 max-w-sm text-[12px] leading-5 text-[#8b807a]">
                            SurplusLink connects food businesses, customers and delivery partners through one structured workflow.
                        </p>


                        <a
                            href="{{ route('food-listings.browse') }}"
                            class="mt-6 inline-flex items-center gap-2 rounded-xl bg-[#1c1816] px-4 py-3 text-[11px] font-black text-white transition duration-300 hover:-translate-y-0.5 hover:bg-[#302a27]"
                        >
                            Start exploring

                            <span>
                                →
                            </span>

                        </a>

                    </div>


                    <div class="grid sm:grid-cols-3">


                        <div class="border-b border-[#eee3dc] p-6 sm:border-b-0 sm:border-r">

                            <span
                                class="flex h-10 w-10 items-center justify-center rounded-xl bg-white text-[10px] font-black text-[#df6845] shadow-sm">
                                01
                            </span>


                            <h3 class="mt-5 text-[13px] font-black text-[#211c19]">
                                Discover
                            </h3>


                            <p class="mt-2 text-[11px] leading-5 text-[#8b807a]">
                                Browse available surplus food from participating businesses.
                            </p>

                        </div>


                        <div class="border-b border-[#eee3dc] p-6 sm:border-b-0 sm:border-r">

                            <span
                                class="flex h-10 w-10 items-center justify-center rounded-xl bg-white text-[10px] font-black text-amber-500 shadow-sm">
                                02
                            </span>


                            <h3 class="mt-5 text-[13px] font-black text-[#211c19]">
                                Request
                            </h3>


                            <p class="mt-2 text-[11px] leading-5 text-[#8b807a]">
                                Choose the quantity you need and send your request.
                            </p>

                        </div>


                        <div class="p-6">

                            <span
                                class="flex h-10 w-10 items-center justify-center rounded-xl bg-white text-[10px] font-black text-emerald-600 shadow-sm">
                                03
                            </span>


                            <h3 class="mt-5 text-[13px] font-black text-[#211c19]">
                                Receive
                            </h3>


                            <p class="mt-2 text-[11px] leading-5 text-[#8b807a]">
                                Follow the request and delivery status until completion.
                            </p>

                        </div>

                    </div>

                </div>

            </section>


            {{-- ========================================================
                 FOOTER MESSAGE
            ========================================================= --}}
            <div class="py-10 text-center">

                <div
                    class="inline-flex items-center gap-2 rounded-full border border-[#eee3dc] bg-white/70 px-4 py-2 text-[9px] font-black uppercase tracking-[0.15em] text-[#b4a69f] shadow-sm"
                >

                    <span class="text-emerald-600">
                        🌱
                    </span>

                    Save food • Support communities • Reduce waste

                </div>

            </div>


        </main>

    </div>

</x-app-layout>