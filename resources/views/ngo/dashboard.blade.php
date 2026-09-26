<x-app-layout>

    <div class="min-h-screen overflow-hidden bg-[#fffaf5] text-slate-800">

        <style>
            @keyframes ngoFloat {
                0%, 100% {
                    transform: translateY(0) rotate(0deg);
                }
                50% {
                    transform: translateY(-12px) rotate(1deg);
                }
            }

            @keyframes ngoFloatReverse {
                0%, 100% {
                    transform: translateY(0) rotate(0deg);
                }
                50% {
                    transform: translateY(10px) rotate(-1deg);
                }
            }

            @keyframes ngoPulse {
                0%, 100% {
                    transform: scale(1);
                    opacity: .75;
                }
                50% {
                    transform: scale(1.08);
                    opacity: 1;
                }
            }

            @keyframes ngoSlideFood {
                0% {
                    transform: translateX(-18px);
                    opacity: .2;
                }
                18%, 72% {
                    transform: translateX(0);
                    opacity: 1;
                }
                90%, 100% {
                    transform: translateX(18px);
                    opacity: .2;
                }
            }

            @keyframes ngoProgress {
                0% {
                    width: 12%;
                }
                35% {
                    width: 42%;
                }
                65% {
                    width: 70%;
                }
                100% {
                    width: 92%;
                }
            }

            @keyframes ngoCheck {
                0%, 65% {
                    transform: scale(.75);
                    opacity: .35;
                }
                75%, 100% {
                    transform: scale(1);
                    opacity: 1;
                }
            }

            @keyframes ngoHeart {
                0%, 100% {
                    transform: scale(1);
                }
                50% {
                    transform: scale(1.18);
                }
            }

            .ngo-float {
                animation: ngoFloat 5s ease-in-out infinite;
            }

            .ngo-float-reverse {
                animation: ngoFloatReverse 6s ease-in-out infinite;
            }

            .ngo-pulse {
                animation: ngoPulse 3s ease-in-out infinite;
            }

            .ngo-food-flow {
                animation: ngoSlideFood 5s ease-in-out infinite;
            }

            .ngo-progress {
                animation: ngoProgress 5s ease-in-out infinite alternate;
            }

            .ngo-check {
                animation: ngoCheck 5s ease-in-out infinite;
            }

            .ngo-heart {
                animation: ngoHeart 2.5s ease-in-out infinite;
            }

            @media (prefers-reduced-motion: reduce) {
                .ngo-float,
                .ngo-float-reverse,
                .ngo-pulse,
                .ngo-food-flow,
                .ngo-progress,
                .ngo-check,
                .ngo-heart {
                    animation: none !important;
                }
            }
        </style>


        {{-- ========================================================= --}}
        {{-- HERO --}}
        {{-- ========================================================= --}}

        <section class="relative overflow-hidden">

            {{-- Decorative background --}}
            <div class="absolute -right-32 -top-32 h-96 w-96 rounded-full bg-orange-200/40 blur-3xl"></div>
            <div class="absolute -left-32 top-56 h-96 w-96 rounded-full bg-emerald-200/40 blur-3xl"></div>
            <div class="absolute right-1/3 top-1/3 h-56 w-56 rounded-full bg-yellow-100/40 blur-3xl"></div>

            <div class="relative mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8 lg:py-12">

                <div class="grid items-center gap-10 lg:grid-cols-[1fr_.95fr]">

                    {{-- LEFT CONTENT --}}
                    <div class="max-w-2xl">

                        <div class="inline-flex items-center gap-2 rounded-full bg-white px-4 py-2 text-xs font-black uppercase tracking-[0.14em] text-emerald-700 shadow-sm ring-1 ring-emerald-100">

                            <span class="flex h-7 w-7 items-center justify-center rounded-full bg-emerald-50">
                                🤝
                            </span>

                            NGO Community Network

                        </div>


                        <h1 class="mt-5 text-4xl font-black tracking-tight text-slate-950 sm:text-5xl lg:text-[3.8rem] lg:leading-[1.04]">

                            Help good food
                            <span class="text-orange-500">
                                reach good people.
                            </span>

                        </h1>


                        <p class="mt-5 max-w-xl text-base leading-7 text-slate-600 sm:text-lg">
                            Discover available surplus food, request what your community needs,
                            and follow every connection from restaurant to community.
                        </p>


                        {{-- ACTIONS --}}
                        <div class="mt-7 flex flex-wrap gap-3">

                            <a
                                href="{{ route('food-listings.browse') }}"
                                class="group inline-flex items-center gap-2 rounded-2xl bg-orange-500 px-5 py-3.5 text-sm font-black text-white shadow-lg shadow-orange-200 transition duration-300 hover:-translate-y-1 hover:bg-orange-600 hover:shadow-xl"
                            >
                                <span>🍱</span>

                                Browse Surplus Food

                                <span class="transition duration-300 group-hover:translate-x-1">
                                    →
                                </span>
                            </a>


                            <a
                                href="{{ route('food-requests.my-requests') }}"
                                class="inline-flex items-center gap-2 rounded-2xl bg-white px-5 py-3.5 text-sm font-black text-slate-700 shadow-sm ring-1 ring-slate-200 transition duration-300 hover:-translate-y-1 hover:text-orange-600 hover:ring-orange-200"
                            >
                                <span>📋</span>

                                My Requests
                            </a>

                        </div>


                        {{-- TRUST POINTS --}}
                        <div class="mt-7 flex flex-wrap gap-x-6 gap-y-3 text-xs font-bold text-slate-500">

                            <span class="flex items-center gap-2">
                                <span class="text-emerald-500">✓</span>
                                Community focused
                            </span>

                            <span class="flex items-center gap-2">
                                <span class="text-emerald-500">✓</span>
                                Real-time request tracking
                            </span>

                            <span class="flex items-center gap-2">
                                <span class="text-emerald-500">✓</span>
                                Reduce food waste
                            </span>

                        </div>

                    </div>


                    {{-- ================================================= --}}
                    {{-- HERO VISUAL / COMMUNITY FOOD JOURNEY --}}
                    {{-- ================================================= --}}

                    <div class="relative mx-auto w-full max-w-xl">

                        {{-- Floating food image --}}
                        <div class="ngo-float absolute -left-4 top-12 z-20 hidden h-20 w-20 overflow-hidden rounded-2xl border-4 border-white shadow-xl sm:block">

                            <img
                                src="https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=300&q=85"
                                alt="Fresh prepared food"
                                class="h-full w-full object-cover"
                            >

                        </div>


                        {{-- Floating vegetables --}}
                        <div class="ngo-float-reverse absolute -right-3 bottom-20 z-20 hidden h-24 w-24 overflow-hidden rounded-3xl border-4 border-white shadow-xl sm:block">

                            <img
                                src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=350&q=85"
                                alt="Fresh vegetables"
                                class="h-full w-full object-cover"
                            >

                        </div>


                        {{-- Main visual --}}
                        <div class="relative overflow-hidden rounded-[2.5rem] bg-white p-3 shadow-2xl shadow-slate-200/80 ring-1 ring-slate-100">

                            <div class="relative overflow-hidden rounded-[2rem]">

                                <img
                                    src="https://images.unsplash.com/photo-1498837167922-ddd27525d352?auto=format&fit=crop&w=1200&q=85"
                                    alt="Community food"
                                    class="h-[410px] w-full object-cover"
                                >

                                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/75 via-slate-950/5 to-transparent"></div>


                                {{-- Floating impact card --}}
                                <div class="absolute left-4 right-4 top-4">

                                    <div class="flex items-center justify-between rounded-2xl bg-white/90 px-4 py-3 shadow-lg backdrop-blur-md">

                                        <div class="flex items-center gap-3">

                                            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-50 text-lg">
                                                🌱
                                            </div>

                                            <div>

                                                <p class="text-[9px] font-black uppercase tracking-[0.16em] text-emerald-600">
                                                    Community first
                                                </p>

                                                <p class="text-xs font-black text-slate-900">
                                                    Food with purpose
                                                </p>

                                            </div>

                                        </div>


                                        <div class="ngo-pulse flex h-9 w-9 items-center justify-center rounded-full bg-orange-50 text-sm">
                                            ❤️
                                        </div>

                                    </div>

                                </div>


                                {{-- Bottom journey card --}}
                                <div class="absolute bottom-4 left-4 right-4">

                                    <div class="rounded-[1.5rem] bg-white/95 p-4 shadow-xl backdrop-blur-md">

                                        <div class="flex items-center justify-between gap-3">

                                            <div>

                                                <p class="text-[9px] font-black uppercase tracking-[0.16em] text-orange-500">
                                                    SurplusLink journey
                                                </p>

                                                <p class="mt-1 text-base font-black text-slate-950">
                                                    From surplus to community.
                                                </p>

                                            </div>


                                            <div class="ngo-heart flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-orange-50 text-xl">
                                                ❤️
                                            </div>

                                        </div>


                                        {{-- Mini progress --}}
                                        <div class="mt-4">

                                            <div class="h-2 overflow-hidden rounded-full bg-slate-100">

                                                <div class="ngo-progress h-full rounded-full bg-gradient-to-r from-orange-400 to-emerald-500"></div>

                                            </div>


                                            <div class="mt-2 flex justify-between text-[9px] font-bold text-slate-400">

                                                <span>Food shared</span>
                                                <span>Community impact</span>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        {{-- ========================================================= --}}
        {{-- QUICK VALUE CARDS --}}
        {{-- ========================================================= --}}

        <section class="mx-auto max-w-7xl px-4 pb-8 sm:px-6 lg:px-8">

            <div class="grid gap-4 sm:grid-cols-3">

                <div class="group rounded-[1.75rem] bg-white p-5 shadow-sm ring-1 ring-slate-100 transition duration-300 hover:-translate-y-1 hover:shadow-lg">

                    <div class="flex items-center gap-4">

                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-orange-50 text-xl transition duration-300 group-hover:scale-110">
                            🍱
                        </div>

                        <div>

                            <p class="text-[10px] font-black uppercase tracking-[0.16em] text-slate-400">
                                Discover
                            </p>

                            <p class="mt-1 text-sm font-black text-slate-900">
                                Find available surplus food
                            </p>

                        </div>

                    </div>

                </div>


                <div class="group rounded-[1.75rem] bg-white p-5 shadow-sm ring-1 ring-slate-100 transition duration-300 hover:-translate-y-1 hover:shadow-lg">

                    <div class="flex items-center gap-4">

                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-emerald-50 text-xl transition duration-300 group-hover:scale-110">
                            🤝
                        </div>

                        <div>

                            <p class="text-[10px] font-black uppercase tracking-[0.16em] text-slate-400">
                                Connect
                            </p>

                            <p class="mt-1 text-sm font-black text-slate-900">
                                Request what your community needs
                            </p>

                        </div>

                    </div>

                </div>


                <div class="group rounded-[1.75rem] bg-white p-5 shadow-sm ring-1 ring-slate-100 transition duration-300 hover:-translate-y-1 hover:shadow-lg">

                    <div class="flex items-center gap-4">

                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-sky-50 text-xl transition duration-300 group-hover:scale-110">
                            🚚
                        </div>

                        <div>

                            <p class="text-[10px] font-black uppercase tracking-[0.16em] text-slate-400">
                                Track
                            </p>

                            <p class="mt-1 text-sm font-black text-slate-900">
                                Follow every request
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        {{-- ========================================================= --}}
        {{-- COMMUNITY TRANSACTION / ANIMATION --}}
        {{-- ========================================================= --}}

        <section class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">

            <div class="overflow-hidden rounded-[2.5rem] bg-white shadow-sm ring-1 ring-slate-100">

                <div class="grid lg:grid-cols-[.8fr_1.2fr]">

                    {{-- LEFT STORY --}}
                    <div class="relative overflow-hidden bg-gradient-to-br from-emerald-50 via-white to-orange-50 p-7 sm:p-9">

                        <div class="absolute -right-16 -top-16 h-48 w-48 rounded-full bg-emerald-200/50 blur-3xl"></div>

                        <div class="relative">

                            <div class="inline-flex items-center gap-2 rounded-full bg-white px-3 py-1.5 text-[10px] font-black uppercase tracking-[0.16em] text-emerald-700 shadow-sm ring-1 ring-emerald-100">

                                <span class="h-2 w-2 rounded-full bg-emerald-500"></span>

                                Community flow

                            </div>


                            <h2 class="mt-5 text-2xl font-black tracking-tight text-slate-950 sm:text-3xl">
                                A simple journey.
                                <span class="text-orange-500">
                                    A meaningful result.
                                </span>
                            </h2>


                            <p class="mt-4 max-w-md text-sm leading-6 text-slate-500">
                                SurplusLink visually connects the people and organizations
                                involved in moving good food towards communities.
                            </p>


                            {{-- Food photo --}}
                            <div class="mt-7 flex items-center gap-4">

                                <div class="ngo-food-flow h-20 w-20 overflow-hidden rounded-2xl border-4 border-white shadow-lg">

                                    <img
                                        src="https://images.unsplash.com/photo-1473093295043-cdd812d0e601?auto=format&fit=crop&w=300&q=85"
                                        alt="Prepared food"
                                        class="h-full w-full object-cover"
                                    >

                                </div>


                                <div>

                                    <p class="text-xs font-black text-slate-900">
                                        Good food is still valuable.
                                    </p>

                                    <p class="mt-1 text-xs leading-5 text-slate-500">
                                        Let's help it reach someone who needs it.
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>


                    {{-- RIGHT FLOW --}}
                    <div class="p-7 sm:p-9">

                        <div class="flex items-center justify-between gap-4">

                            <div>

                                <p class="text-[10px] font-black uppercase tracking-[0.18em] text-orange-500">
                                    Visual workflow
                                </p>

                                <h3 class="mt-1 text-xl font-black text-slate-950">
                                    Surplus → Community
                                </h3>

                            </div>


                            <span class="rounded-full bg-orange-50 px-3 py-1.5 text-[9px] font-black uppercase tracking-wider text-orange-600">
                                Live concept
                            </span>

                        </div>


                        <div class="mt-7 space-y-3">


                            {{-- STEP 01 --}}
                            <div class="group flex items-center gap-4 rounded-2xl bg-[#fffaf5] p-4 transition duration-300 hover:bg-orange-50">

                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-orange-100 text-lg">
                                    🍱
                                </div>

                                <div class="min-w-0 flex-1">

                                    <div class="flex items-center justify-between gap-3">

                                        <p class="text-sm font-black text-slate-900">
                                            Surplus food available
                                        </p>

                                        <span class="text-[9px] font-black uppercase text-orange-500">
                                            01
                                        </span>

                                    </div>

                                    <p class="mt-1 text-xs text-slate-500">
                                        Restaurant shares available food.
                                    </p>

                                </div>

                            </div>


                            {{-- CONNECTOR --}}
                            <div class="ml-5 h-4 w-px bg-gradient-to-b from-orange-200 to-emerald-200"></div>


                            {{-- STEP 02 --}}
                            <div class="group flex items-center gap-4 rounded-2xl bg-emerald-50/70 p-4 transition duration-300 hover:bg-emerald-100">

                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-emerald-100 text-lg">
                                    🤝
                                </div>

                                <div class="min-w-0 flex-1">

                                    <div class="flex items-center justify-between gap-3">

                                        <p class="text-sm font-black text-slate-900">
                                            NGO sends a request
                                        </p>

                                        <span class="text-[9px] font-black uppercase text-emerald-600">
                                            02
                                        </span>

                                    </div>

                                    <p class="mt-1 text-xs text-slate-500">
                                        Organization requests suitable food.
                                    </p>

                                </div>

                            </div>


                            <div class="ml-5 h-4 w-px bg-gradient-to-b from-emerald-200 to-sky-200"></div>


                            {{-- STEP 03 --}}
                            <div class="group flex items-center gap-4 rounded-2xl bg-sky-50/70 p-4 transition duration-300 hover:bg-sky-100">

                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-sky-100 text-lg">
                                    🚚
                                </div>

                                <div class="min-w-0 flex-1">

                                    <div class="flex items-center justify-between gap-3">

                                        <p class="text-sm font-black text-slate-900">
                                            Food moves to community
                                        </p>

                                        <span class="text-[9px] font-black uppercase text-sky-600">
                                            03
                                        </span>

                                    </div>

                                    <p class="mt-1 text-xs text-slate-500">
                                        Approved requests continue through delivery.
                                    </p>

                                </div>

                            </div>


                            <div class="ml-5 h-4 w-px bg-gradient-to-b from-sky-200 to-emerald-200"></div>


                            {{-- STEP 04 --}}
                            <div class="ngo-check flex items-center gap-4 rounded-2xl bg-emerald-600 p-4 text-white shadow-lg shadow-emerald-100">

                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-white/15 text-lg ring-1 ring-white/10">
                                    ❤️
                                </div>

                                <div class="min-w-0 flex-1">

                                    <div class="flex items-center justify-between gap-3">

                                        <p class="text-sm font-black">
                                            Community impact
                                        </p>

                                        <span class="rounded-full bg-white/15 px-2.5 py-1 text-[9px] font-black uppercase tracking-wider">
                                            Impact
                                        </span>

                                    </div>

                                    <p class="mt-1 text-xs text-emerald-100">
                                        Food reaches people who need it.
                                    </p>

                                </div>

                            </div>

                        </div>


                        <p class="mt-5 text-[10px] font-medium text-slate-400">
                            Visual workflow preview · Your real requests and statuses remain unchanged below.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        {{-- ========================================================= --}}
        {{-- MAIN ACTIONS --}}
        {{-- ========================================================= --}}

        <section class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">

            <div class="mb-7">

                <p class="text-xs font-black uppercase tracking-[0.18em] text-orange-500">
                    Your workspace
                </p>

                <h2 class="mt-2 text-2xl font-black tracking-tight text-slate-950 sm:text-3xl">
                    What would you like to do?
                </h2>

                <p class="mt-2 max-w-2xl text-sm leading-6 text-slate-500">
                    Manage your organization's food discovery and redistribution activities
                    from one place.
                </p>

            </div>


            <div class="grid gap-6 lg:grid-cols-2">


                {{-- BROWSE FOOD --}}
                <div class="group relative overflow-hidden rounded-[2rem] bg-white shadow-sm ring-1 ring-slate-100 transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                    <div class="absolute -right-16 -top-16 h-48 w-48 rounded-full bg-orange-100 blur-3xl transition duration-500 group-hover:bg-orange-200"></div>

                    <div class="relative p-6 sm:p-7">

                        <div class="flex items-start justify-between gap-5">

                            <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-orange-50 text-2xl ring-1 ring-orange-100 transition duration-300 group-hover:scale-110">
                                🍱
                            </div>

                            <span class="rounded-full bg-orange-50 px-3 py-1.5 text-[10px] font-black uppercase tracking-wider text-orange-600">
                                Food discovery
                            </span>

                        </div>


                        <h3 class="mt-6 text-2xl font-black tracking-tight text-slate-950">
                            Browse Surplus Food
                        </h3>


                        <p class="mt-3 max-w-lg text-sm leading-6 text-slate-500">
                            Explore food shared by participating restaurants and food businesses.
                            Search by food type or location and find available opportunities for your organization.
                        </p>


                        <div class="mt-6">

                            <a
                                href="{{ route('food-listings.browse') }}"
                                class="group inline-flex items-center gap-2 rounded-2xl bg-orange-500 px-5 py-3 text-sm font-black text-white shadow-md shadow-orange-200 transition duration-300 hover:bg-orange-600 hover:shadow-lg"
                            >
                                Explore Food

                                <span class="transition duration-300 group-hover:translate-x-1">
                                    →
                                </span>
                            </a>

                        </div>

                    </div>

                </div>


                {{-- MY REQUESTS --}}
                <div class="group relative overflow-hidden rounded-[2rem] bg-white shadow-sm ring-1 ring-slate-100 transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                    <div class="absolute -right-16 -top-16 h-48 w-48 rounded-full bg-emerald-100 blur-3xl transition duration-500 group-hover:bg-emerald-200"></div>

                    <div class="relative p-6 sm:p-7">

                        <div class="flex items-start justify-between gap-5">

                            <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-emerald-50 text-2xl ring-1 ring-emerald-100 transition duration-300 group-hover:scale-110">
                                📋
                            </div>

                            <span class="rounded-full bg-emerald-50 px-3 py-1.5 text-[10px] font-black uppercase tracking-wider text-emerald-700">
                                Request tracking
                            </span>

                        </div>


                        <h3 class="mt-6 text-2xl font-black tracking-tight text-slate-950">
                            My Food Requests
                        </h3>


                        <p class="mt-3 max-w-lg text-sm leading-6 text-slate-500">
                            Review requests submitted by your organization and follow their progress
                            from approval through delivery.
                        </p>


                        <div class="mt-6">

                            <a
                                href="{{ route('food-requests.my-requests') }}"
                                class="group inline-flex items-center gap-2 rounded-2xl bg-emerald-600 px-5 py-3 text-sm font-black text-white shadow-md shadow-emerald-100 transition duration-300 hover:bg-emerald-700 hover:shadow-lg"
                            >
                                View My Requests

                                <span class="transition duration-300 group-hover:translate-x-1">
                                    →
                                </span>
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        {{-- ========================================================= --}}
        {{-- HOW IT WORKS --}}
        {{-- ========================================================= --}}

        <section class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">

            <div class="overflow-hidden rounded-[2.25rem] bg-white shadow-sm ring-1 ring-slate-100">

                <div class="grid lg:grid-cols-[.8fr_1.2fr] lg:items-center">

                    <div class="p-6 sm:p-8 lg:p-10">

                        <p class="text-xs font-black uppercase tracking-[0.18em] text-orange-500">
                            Simple redistribution flow
                        </p>


                        <h2 class="mt-2 text-3xl font-black tracking-tight text-slate-950">
                            From surplus
                            <span class="text-orange-500">
                                to community impact.
                            </span>
                        </h2>


                        <p class="mt-4 text-sm leading-6 text-slate-500">
                            SurplusLink helps connect organizations with available food
                            through a simple request and delivery journey.
                        </p>


                        <div class="mt-6 flex items-center gap-3">

                            <div class="h-10 w-10 overflow-hidden rounded-xl">

                                <img
                                    src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=200&q=80"
                                    alt="Prepared meal"
                                    class="h-full w-full object-cover"
                                >

                            </div>

                            <div>

                                <p class="text-xs font-black text-slate-900">
                                    Every connection matters.
                                </p>

                                <p class="text-[10px] text-slate-500">
                                    Food • People • Community
                                </p>

                            </div>

                        </div>

                    </div>


                    <div class="grid gap-4 bg-[#fffaf5] p-6 sm:grid-cols-3 sm:p-8">


                        <div class="rounded-2xl bg-white p-5 shadow-sm ring-1 ring-orange-100">

                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-orange-50 text-sm font-black text-orange-600">
                                01
                            </div>

                            <h3 class="mt-4 text-sm font-black text-slate-900">
                                Discover
                            </h3>

                            <p class="mt-2 text-xs leading-5 text-slate-500">
                                Find suitable surplus food listings.
                            </p>

                        </div>


                        <div class="rounded-2xl bg-white p-5 shadow-sm ring-1 ring-emerald-100">

                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-50 text-sm font-black text-emerald-700">
                                02
                            </div>

                            <h3 class="mt-4 text-sm font-black text-slate-900">
                                Request
                            </h3>

                            <p class="mt-2 text-xs leading-5 text-slate-500">
                                Submit a request for your organization.
                            </p>

                        </div>


                        <div class="rounded-2xl bg-white p-5 shadow-sm ring-1 ring-sky-100">

                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-sky-50 text-sm font-black text-sky-700">
                                03
                            </div>

                            <h3 class="mt-4 text-sm font-black text-slate-900">
                                Create impact
                            </h3>

                            <p class="mt-2 text-xs leading-5 text-slate-500">
                                Follow the journey towards delivery.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        {{-- ========================================================= --}}
        {{-- REAL IMPACT / FOOD PHOTO STRIP --}}
        {{-- ========================================================= --}}

        <section class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">

            <div class="grid gap-4 sm:grid-cols-3">

                <div class="group relative h-52 overflow-hidden rounded-[2rem]">

                    <img
                        src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=700&q=85"
                        alt="Healthy meal"
                        class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                    >

                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>

                    <div class="absolute bottom-4 left-4">

                        <p class="text-[9px] font-black uppercase tracking-[0.18em] text-orange-300">
                            Nourishment
                        </p>

                        <p class="mt-1 text-sm font-black text-white">
                            Good food can make a difference.
                        </p>

                    </div>

                </div>


                <div class="group relative h-52 overflow-hidden rounded-[2rem]">

                    <img
                        src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?auto=format&fit=crop&w=700&q=85"
                        alt="Fresh food shared with others"
                        class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                    >

                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>

                    <div class="absolute bottom-4 left-4">

                        <p class="text-[9px] font-black uppercase tracking-[0.18em] text-emerald-300">
                            Connection
                        </p>

                        <p class="mt-1 text-sm font-black text-white">
                            Surplus becomes opportunity.
                        </p>

                    </div>

                </div>


                <div class="group relative h-52 overflow-hidden rounded-[2rem]">

                    <img
                        src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=700&q=85"
                        alt="Fresh vegetables"
                        class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                    >

                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>

                    <div class="absolute bottom-4 left-4">

                        <p class="text-[9px] font-black uppercase tracking-[0.18em] text-orange-300">
                            Sustainability
                        </p>

                        <p class="mt-1 text-sm font-black text-white">
                            Less waste. More impact.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        {{-- ========================================================= --}}
        {{-- MISSION STRIP --}}
        {{-- ========================================================= --}}

        <section class="mx-auto max-w-7xl px-4 pb-12 pt-4 sm:px-6 lg:px-8">

            <div class="relative overflow-hidden rounded-[2.5rem] bg-emerald-900 p-7 text-white shadow-xl shadow-emerald-100 sm:p-9">

                <div class="absolute -right-20 -top-20 h-56 w-56 rounded-full bg-emerald-700/40 blur-3xl"></div>
                <div class="absolute -bottom-20 -left-12 h-48 w-48 rounded-full bg-orange-500/20 blur-3xl"></div>


                <div class="relative flex flex-col gap-7 md:flex-row md:items-center md:justify-between">

                    <div class="max-w-2xl">

                        <div class="flex items-center gap-3">

                            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-white/10 text-2xl ring-1 ring-white/10">
                                🌱
                            </div>

                            <p class="text-xs font-black uppercase tracking-[0.18em] text-emerald-300">
                                SurplusLink mission
                            </p>

                        </div>


                        <h2 class="mt-4 text-2xl font-black leading-tight sm:text-3xl">
                            Good food should reach people who need it.
                        </h2>


                        <p class="mt-3 text-sm leading-6 text-emerald-100">
                            Every successful connection between surplus food and a community
                            organization can help reduce waste and create meaningful social impact.
                        </p>

                    </div>


                    <a
                        href="{{ route('food-listings.browse') }}"
                        class="group inline-flex shrink-0 items-center justify-center gap-2 rounded-2xl bg-white px-5 py-3.5 text-sm font-black text-emerald-900 transition duration-300 hover:-translate-y-1 hover:bg-orange-50"
                    >
                        Find Available Food

                        <span class="transition duration-300 group-hover:translate-x-1">
                            →
                        </span>

                    </a>

                </div>

            </div>

        </section>

    </div>

</x-app-layout>
