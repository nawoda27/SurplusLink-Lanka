<x-app-layout>

    <x-slot name="header">
        <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <div class="flex items-center gap-3">
                <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-[#fff0e8] text-xl shadow-sm">
                    🛡️
                </div>

                <div>
                    <p class="text-[11px] font-bold uppercase tracking-[0.2em] text-[#e96f45]">
                        SurplusLink Lanka
                    </p>

                    <h2 class="mt-0.5 text-xl font-bold tracking-tight text-[#2f2521] sm:text-2xl">
                        {{ __('Admin Dashboard') }}
                    </h2>
                </div>
            </div>

            <div class="inline-flex w-fit items-center gap-2 rounded-full border border-emerald-100 bg-emerald-50 px-4 py-2 text-xs font-bold text-emerald-700">
                <span class="relative flex h-2.5 w-2.5">
                    <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-emerald-400 opacity-50"></span>
                    <span class="relative inline-flex h-2.5 w-2.5 rounded-full bg-emerald-500"></span>
                </span>

                Platform Active
            </div>
        </div>
    </x-slot>

    <div class="min-h-screen overflow-hidden bg-[#fffaf5]">

        {{-- ========================================================= --}}
        {{-- HERO / CONTROL CENTER --}}
        {{-- ========================================================= --}}

        <section class="relative overflow-hidden border-b border-[#f2e3d9] bg-gradient-to-br from-[#fff7f0] via-[#fffaf6] to-[#f7fbf8]">

            {{-- Decorative shapes --}}
            <div class="pointer-events-none absolute -right-28 -top-28 h-80 w-80 rounded-full bg-[#ffb996]/25 blur-3xl"></div>
            <div class="pointer-events-none absolute -bottom-32 -left-24 h-72 w-72 rounded-full bg-[#cdeedd]/35 blur-3xl"></div>

            <div class="pointer-events-none absolute right-[18%] top-16 hidden h-2 w-2 rounded-full bg-[#e96f45]/40 sm:block"></div>
            <div class="pointer-events-none absolute right-[12%] top-28 hidden h-3 w-3 rounded-full bg-[#e96f45]/20 sm:block"></div>
            <div class="pointer-events-none absolute left-[15%] top-20 hidden h-2 w-2 rounded-full bg-emerald-400/40 sm:block"></div>

            <div class="relative mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">

                <div class="grid items-center gap-10 lg:grid-cols-[1.05fr_.95fr]">

                    {{-- Hero copy --}}
                    <div>

                        <div class="inline-flex items-center gap-2 rounded-full border border-[#ffd6c3] bg-white/80 px-3.5 py-2 text-[11px] font-extrabold uppercase tracking-[0.17em] text-[#e96f45] shadow-sm backdrop-blur">
                            <span class="h-2 w-2 rounded-full bg-[#f28a5e]"></span>
                            Platform Control Center
                        </div>

                        <h1 class="mt-5 max-w-3xl text-4xl font-black leading-[1.05] tracking-tight text-[#2e241f] sm:text-5xl lg:text-6xl">
                            Keep every part of
                            <span class="text-[#e96f45]">SurplusLink</span>
                            connected.
                        </h1>

                        <p class="mt-5 max-w-2xl text-sm leading-7 text-[#76645d] sm:text-base">
                            Monitor the people, restaurants, NGOs, food listings,
                            requests and deliveries that keep the surplus food
                            redistribution network moving.
                        </p>

                        {{-- Hero actions --}}
                        <div class="mt-7 flex flex-wrap gap-3">

                            <a
                                href="{{ route('admin.users') }}"
                                class="inline-flex items-center gap-2 rounded-2xl bg-[#e96f45] px-5 py-3.5 text-sm font-bold text-white shadow-[0_12px_25px_rgba(233,111,69,.22)] transition duration-300 hover:-translate-y-0.5 hover:bg-[#df6139] focus:outline-none focus:ring-2 focus:ring-[#f3a180] focus:ring-offset-2"
                            >
                                Manage Users
                                <span aria-hidden="true">→</span>
                            </a>

                            <div class="inline-flex items-center gap-2 rounded-2xl border border-[#eadfd8] bg-white/80 px-5 py-3.5 text-sm font-semibold text-[#685750] shadow-sm">
                                <span class="text-base">🌱</span>
                                Food redistribution network
                            </div>

                        </div>

                    </div>

                    {{-- Visual control map --}}
                    <div class="relative">

                        <div class="relative min-h-[330px] overflow-hidden rounded-[2.25rem] border border-white bg-white/75 p-5 shadow-[0_25px_70px_rgba(75,49,36,.10)] backdrop-blur-xl">

                            {{-- Background grid --}}
                            <div
                                class="pointer-events-none absolute inset-0 opacity-60"
                                style="background-image: linear-gradient(#eadfd8 1px, transparent 1px), linear-gradient(90deg, #eadfd8 1px, transparent 1px); background-size: 32px 32px;"
                            ></div>

                            {{-- Decorative circles --}}
                            <div class="absolute -right-12 -top-12 h-40 w-40 rounded-full border-[18px] border-[#fff0e8]"></div>
                            <div class="absolute -bottom-16 -left-16 h-48 w-48 rounded-full border-[20px] border-[#eef9f2]"></div>

                            <div class="relative z-10">

                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-[10px] font-extrabold uppercase tracking-[0.2em] text-[#a08c84]">
                                            Network overview
                                        </p>

                                        <p class="mt-1 text-lg font-extrabold text-[#30241f]">
                                            Live platform pulse
                                        </p>
                                    </div>

                                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#fff0e8] text-lg">
                                        📡
                                    </div>
                                </div>

                                {{-- Network nodes --}}
                                <div class="relative mt-8 h-[215px]">

                                    {{-- Connecting lines --}}
                                    <div class="absolute left-[19%] top-[38%] h-px w-[27%] rotate-[18deg] bg-[#efb39a]"></div>
                                    <div class="absolute left-[46%] top-[47%] h-px w-[27%] -rotate-[18deg] bg-[#c4dfce]"></div>
                                    <div class="absolute left-[30%] top-[62%] h-px w-[40%] rotate-[-4deg] bg-[#ead3c7]"></div>

                                    {{-- Restaurant --}}
                                    <div class="absolute left-[3%] top-[24%]">
                                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl border border-[#ffd8c6] bg-[#fff1e9] text-2xl shadow-sm">
                                            🍽️
                                        </div>

                                        <p class="mt-2 text-[10px] font-bold text-[#7b6860]">
                                            Restaurants
                                        </p>
                                    </div>

                                    {{-- Users --}}
                                    <div class="absolute left-[42%] top-[38%]">
                                        <div class="relative flex h-16 w-16 items-center justify-center rounded-full border-[6px] border-white bg-[#e96f45] text-2xl shadow-[0_10px_25px_rgba(233,111,69,.25)]">
                                            👥

                                            <span class="absolute -right-1 -top-1 h-4 w-4 rounded-full border-2 border-white bg-emerald-500"></span>
                                        </div>

                                        <p class="mt-2 text-center text-[10px] font-extrabold text-[#6f5c55]">
                                            Community
                                        </p>
                                    </div>

                                    {{-- NGOs --}}
                                    <div class="absolute right-[4%] top-[13%]">
                                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl border border-[#d8efdf] bg-[#effaf3] text-2xl shadow-sm">
                                            🤝
                                        </div>

                                        <p class="mt-2 text-[10px] font-bold text-[#648070]">
                                            NGOs
                                        </p>
                                    </div>

                                    {{-- Delivery --}}
                                    <div class="absolute bottom-[4%] left-[30%]">
                                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl border border-[#dbe8f8] bg-[#f1f7ff] text-2xl shadow-sm">
                                            🛵
                                        </div>

                                        <p class="mt-2 text-[10px] font-bold text-[#63778f]">
                                            Delivery
                                        </p>
                                    </div>

                                    {{-- Food --}}
                                    <div class="absolute bottom-[7%] right-[12%]">
                                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl border border-[#ffe6ba] bg-[#fff8e9] text-2xl shadow-sm">
                                            🍱
                                        </div>

                                        <p class="mt-2 text-[10px] font-bold text-[#8d7450]">
                                            Food
                                        </p>
                                    </div>

                                </div>

                                {{-- Network footer --}}
                                <div class="absolute bottom-5 left-5 right-5 flex items-center justify-between rounded-2xl border border-white/80 bg-white/85 px-4 py-3 shadow-sm backdrop-blur">
                                    <div class="flex items-center gap-2">
                                        <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                                        <span class="text-xs font-bold text-[#5e7467]">
                                            Network connected
                                        </span>
                                    </div>

                                    <span class="text-[10px] font-semibold text-[#a18d85]">
                                        Visual overview
                                    </span>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>


        {{-- ========================================================= --}}
        {{-- MAIN CONTENT --}}
        {{-- ========================================================= --}}

        <div class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">

            {{-- ===================================================== --}}
            {{-- NETWORK STATISTICS --}}
            {{-- ===================================================== --}}

            <section>

                <div class="mb-6 flex flex-col gap-2 sm:flex-row sm:items-end sm:justify-between">
                    <div>
                        <p class="text-[11px] font-extrabold uppercase tracking-[0.2em] text-[#e96f45]">
                            Network
                        </p>

                        <h2 class="mt-1 text-2xl font-extrabold tracking-tight text-[#332722] sm:text-3xl">
                            Platform at a glance
                        </h2>
                    </div>

                    <p class="text-sm text-[#9a877f]">
                        Current platform records
                    </p>
                </div>


                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4">

                    {{-- Users --}}
                    <div class="group relative overflow-hidden rounded-[1.75rem] border border-[#f1e4dc] bg-white p-6 shadow-[0_10px_32px_rgba(75,50,35,.055)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_20px_45px_rgba(75,50,35,.10)]">

                        <div class="absolute -right-8 -top-8 h-24 w-24 rounded-full bg-[#fff1e9] transition duration-500 group-hover:scale-125"></div>

                        <div class="relative">
                            <div class="flex items-start justify-between">

                                <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#fff0e8] text-xl shadow-sm transition duration-300 group-hover:scale-105">
                                    👥
                                </div>

                                <span class="rounded-full bg-[#fff7f2] px-2.5 py-1 text-[10px] font-extrabold uppercase tracking-wider text-[#e96f45]">
                                    Members
                                </span>
                            </div>

                            <p class="mt-7 text-sm font-semibold text-[#927e76]">
                                Total Users
                            </p>

                            <p class="mt-1 text-4xl font-black tracking-tight text-[#30241f]">
                                {{ $statistics['totalUsers'] }}
                            </p>

                            <p class="mt-2 text-xs leading-5 text-[#a5928a]">
                                Registered members across the platform
                            </p>
                        </div>
                    </div>


                    {{-- Restaurants --}}
                    <div class="group relative overflow-hidden rounded-[1.75rem] border border-[#f1e4dc] bg-white p-6 shadow-[0_10px_32px_rgba(75,50,35,.055)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_20px_45px_rgba(75,50,35,.10)]">

                        <div class="absolute -right-8 -top-8 h-24 w-24 rounded-full bg-[#fff1e9] transition duration-500 group-hover:scale-125"></div>

                        <div class="relative">
                            <div class="flex items-start justify-between">

                                <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#fff0e8] text-xl shadow-sm transition duration-300 group-hover:scale-105">
                                    🍽️
                                </div>

                                <span class="rounded-full bg-[#fff7f2] px-2.5 py-1 text-[10px] font-extrabold uppercase tracking-wider text-[#e96f45]">
                                    Partners
                                </span>
                            </div>

                            <p class="mt-7 text-sm font-semibold text-[#927e76]">
                                Restaurants
                            </p>

                            <p class="mt-1 text-4xl font-black tracking-tight text-[#30241f]">
                                {{ $statistics['totalRestaurants'] }}
                            </p>

                            <p class="mt-2 text-xs leading-5 text-[#a5928a]">
                                Food businesses contributing surplus
                            </p>
                        </div>
                    </div>


                    {{-- NGOs --}}
                    <div class="group relative overflow-hidden rounded-[1.75rem] border border-[#e0eee5] bg-white p-6 shadow-[0_10px_32px_rgba(75,50,35,.055)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_20px_45px_rgba(75,50,35,.10)]">

                        <div class="absolute -right-8 -top-8 h-24 w-24 rounded-full bg-[#eefaf2] transition duration-500 group-hover:scale-125"></div>

                        <div class="relative">
                            <div class="flex items-start justify-between">

                                <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#eaf8f0] text-xl shadow-sm transition duration-300 group-hover:scale-105">
                                    🤝
                                </div>

                                <span class="rounded-full bg-[#effaf3] px-2.5 py-1 text-[10px] font-extrabold uppercase tracking-wider text-emerald-700">
                                    Impact
                                </span>
                            </div>

                            <p class="mt-7 text-sm font-semibold text-[#809188]">
                                NGOs
                            </p>

                            <p class="mt-1 text-4xl font-black tracking-tight text-[#30241f]">
                                {{ $statistics['totalNgos'] }}
                            </p>

                            <p class="mt-2 text-xs leading-5 text-[#8ca095]">
                                Community organisations connected
                            </p>
                        </div>
                    </div>


                    {{-- Delivery --}}
                    <div class="group relative overflow-hidden rounded-[1.75rem] border border-[#e1eaf5] bg-white p-6 shadow-[0_10px_32px_rgba(75,50,35,.055)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_20px_45px_rgba(75,50,35,.10)]">

                        <div class="absolute -right-8 -top-8 h-24 w-24 rounded-full bg-[#f0f6ff] transition duration-500 group-hover:scale-125"></div>

                        <div class="relative">
                            <div class="flex items-start justify-between">

                                <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#f0f6ff] text-xl shadow-sm transition duration-300 group-hover:scale-105">
                                    🛵
                                </div>

                                <span class="rounded-full bg-[#f2f7ff] px-2.5 py-1 text-[10px] font-extrabold uppercase tracking-wider text-blue-600">
                                    Movement
                                </span>
                            </div>

                            <p class="mt-7 text-sm font-semibold text-[#8492a0]">
                                Delivery Partners
                            </p>

                            <p class="mt-1 text-4xl font-black tracking-tight text-[#30241f]">
                                {{ $statistics['totalDeliveryPartners'] }}
                            </p>

                            <p class="mt-2 text-xs leading-5 text-[#8e9aa7]">
                                Partners helping food reach people
                            </p>
                        </div>
                    </div>

                </div>
            </section>


            {{-- ===================================================== --}}
            {{-- REDISTRIBUTION FLOW --}}
            {{-- ===================================================== --}}

            <section class="mt-12">

                <div class="mb-6">
                    <p class="text-[11px] font-extrabold uppercase tracking-[0.2em] text-[#e96f45]">
                        Food Journey
                    </p>

                    <h2 class="mt-1 text-2xl font-extrabold tracking-tight text-[#332722] sm:text-3xl">
                        From surplus to impact
                    </h2>

                    <p class="mt-1 max-w-2xl text-sm leading-6 text-[#8d7971]">
                        SurplusLink connects every stage of the redistribution journey
                        through one coordinated platform.
                    </p>
                </div>


                <div class="relative overflow-hidden rounded-[2rem] border border-[#f1e3da] bg-white p-6 shadow-[0_12px_35px_rgba(75,50,35,.055)] sm:p-8">

                    {{-- Decorative background --}}
                    <div class="pointer-events-none absolute -right-20 -top-20 h-56 w-56 rounded-full bg-[#fff0e8]"></div>
                    <div class="pointer-events-none absolute -bottom-24 left-1/3 h-60 w-60 rounded-full bg-[#eef9f2]"></div>

                    <div class="relative">

                        <div class="grid grid-cols-1 gap-4 md:grid-cols-5">

                            {{-- Step 1 --}}
                            <div class="relative rounded-2xl border border-[#f2e5dc] bg-[#fffaf7] p-5">

                                <div class="flex items-center justify-between">
                                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#fff0e8] text-lg">
                                        🍽️
                                    </span>

                                    <span class="text-[10px] font-black text-[#c2afa7]">
                                        01
                                    </span>
                                </div>

                                <h3 class="mt-5 font-bold text-[#3a2c27]">
                                    Food Business
                                </h3>

                                <p class="mt-1 text-xs leading-5 text-[#95827a]">
                                    Surplus food becomes available.
                                </p>

                            </div>


                            {{-- Connector --}}
                            <div class="hidden items-center justify-center md:flex">
                                <div class="h-px w-full bg-gradient-to-r from-[#f4c5b0] to-[#e8d9d1]"></div>
                                <span class="-ml-1 text-[#e96f45]">›</span>
                            </div>


                            {{-- Step 2 --}}
                            <div class="relative rounded-2xl border border-[#f2e5dc] bg-[#fffaf7] p-5">

                                <div class="flex items-center justify-between">
                                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#fff7e8] text-lg">
                                        🍱
                                    </span>

                                    <span class="text-[10px] font-black text-[#c2afa7]">
                                        02
                                    </span>
                                </div>

                                <h3 class="mt-5 font-bold text-[#3a2c27]">
                                    Food Listing
                                </h3>

                                <p class="mt-1 text-xs leading-5 text-[#95827a]">
                                    Available food enters the network.
                                </p>

                            </div>


                            {{-- Connector --}}
                            <div class="hidden items-center justify-center md:flex">
                                <div class="h-px w-full bg-gradient-to-r from-[#eadfd8] to-[#cce6d6]"></div>
                                <span class="-ml-1 text-emerald-600">›</span>
                            </div>


                            {{-- Step 3 --}}
                            <div class="relative rounded-2xl border border-[#dfeee5] bg-[#f7fcf8] p-5">

                                <div class="flex items-center justify-between">
                                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#eaf8f0] text-lg">
                                        🤝
                                    </span>

                                    <span class="text-[10px] font-black text-[#b0c2b7]">
                                        03
                                    </span>
                                </div>

                                <h3 class="mt-5 font-bold text-[#345344]">
                                    Request
                                </h3>

                                <p class="mt-1 text-xs leading-5 text-[#789183]">
                                    Community members or NGOs request food.
                                </p>

                            </div>


                            {{-- Connector mobile-friendly --}}
                            <div class="hidden items-center justify-center md:flex">
                                <div class="h-px w-full bg-gradient-to-r from-[#cce6d6] to-[#c7ddef]"></div>
                                <span class="-ml-1 text-blue-500">›</span>
                            </div>


                            {{-- Step 4 --}}
                            <div class="relative rounded-2xl border border-[#dce7f2] bg-[#f7faff] p-5">

                                <div class="flex items-center justify-between">
                                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#edf5ff] text-lg">
                                        🛵
                                    </span>

                                    <span class="text-[10px] font-black text-[#aab8c7]">
                                        04
                                    </span>
                                </div>

                                <h3 class="mt-5 font-bold text-[#40566e]">
                                    Delivery
                                </h3>

                                <p class="mt-1 text-xs leading-5 text-[#7c8da0]">
                                    Food moves towards its destination.
                                </p>

                            </div>

                        </div>

                        <div class="mt-6 flex items-center gap-3 rounded-2xl border border-[#dcefe4] bg-[#f2fbf5] px-4 py-3.5">
                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-white shadow-sm">
                                ❤️
                            </div>

                            <p class="text-xs font-semibold leading-5 text-[#557362]">
                                The final destination is not just delivery — it is meaningful community impact.
                            </p>
                        </div>

                    </div>
                </div>
            </section>


            {{-- ===================================================== --}}
            {{-- ACTIVITY METRICS --}}
            {{-- ===================================================== --}}

            <section class="mt-12">

                <div class="mb-6 flex flex-col gap-2 sm:flex-row sm:items-end sm:justify-between">

                    <div>
                        <p class="text-[11px] font-extrabold uppercase tracking-[0.2em] text-[#e96f45]">
                            Activity
                        </p>

                        <h2 class="mt-1 text-2xl font-extrabold tracking-tight text-[#332722] sm:text-3xl">
                            Redistribution activity
                        </h2>
                    </div>

                    <span class="text-sm text-[#9b8880]">
                        Platform-wide overview
                    </span>

                </div>


                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">

                    {{-- Listings --}}
                    <div class="group rounded-[1.6rem] border border-[#f1e4dc] bg-white p-5 shadow-[0_8px_28px_rgba(75,50,35,.045)] transition duration-300 hover:-translate-y-1">

                        <div class="flex items-center justify-between">
                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-[#fff0e8] text-lg">
                                🍱
                            </div>

                            <span class="text-xs font-bold text-[#e96f45]">
                                Food
                            </span>
                        </div>

                        <p class="mt-5 text-xs font-bold uppercase tracking-wider text-[#a18d85]">
                            Food Listings
                        </p>

                        <p class="mt-1 text-3xl font-black text-[#30241f]">
                            {{ $statistics['totalFoodListings'] }}
                        </p>

                        <div class="mt-5 h-1.5 overflow-hidden rounded-full bg-[#fff0e8]">
                            <div class="h-full w-3/4 rounded-full bg-[#f28a5e]"></div>
                        </div>

                        <p class="mt-3 text-xs text-[#9b8880]">
                            Food shared through SurplusLink
                        </p>

                    </div>


                    {{-- Requests --}}
                    <div class="group rounded-[1.6rem] border border-[#f1e4dc] bg-white p-5 shadow-[0_8px_28px_rgba(75,50,35,.045)] transition duration-300 hover:-translate-y-1">

                        <div class="flex items-center justify-between">
                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-[#fff6df] text-lg">
                                📦
                            </div>

                            <span class="text-xs font-bold text-[#c38b3c]">
                                Requests
                            </span>
                        </div>

                        <p class="mt-5 text-xs font-bold uppercase tracking-wider text-[#a18d85]">
                            Food Requests
                        </p>

                        <p class="mt-1 text-3xl font-black text-[#30241f]">
                            {{ $statistics['totalFoodRequests'] }}
                        </p>

                        <div class="mt-5 h-1.5 overflow-hidden rounded-full bg-[#fff6df]">
                            <div class="h-full w-2/3 rounded-full bg-[#e8a64d]"></div>
                        </div>

                        <p class="mt-3 text-xs text-[#9b8880]">
                            Requests submitted by the community
                        </p>

                    </div>


                    {{-- Verification --}}
                    <div class="group rounded-[1.6rem] border border-[#f1e4dc] bg-white p-5 shadow-[0_8px_28px_rgba(75,50,35,.045)] transition duration-300 hover:-translate-y-1">

                        <div class="flex items-center justify-between">
                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-[#fff1ed] text-lg">
                                🔎
                            </div>

                            <span class="text-xs font-bold text-[#e96f45]">
                                Review
                            </span>
                        </div>

                        <p class="mt-5 text-xs font-bold uppercase tracking-wider text-[#a18d85]">
                            Pending Verification
                        </p>

                        <p class="mt-1 text-3xl font-black text-[#30241f]">
                            {{ $statistics['pendingVerifications'] }}
                        </p>

                        <div class="mt-5 h-1.5 overflow-hidden rounded-full bg-[#fff1ed]">
                            <div class="h-full w-1/2 rounded-full bg-[#e96f45]"></div>
                        </div>

                        <p class="mt-3 text-xs text-[#9b8880]">
                            Organisations awaiting review
                        </p>

                    </div>


                    {{-- Completed --}}
                    <div class="group rounded-[1.6rem] border border-[#dceee3] bg-white p-5 shadow-[0_8px_28px_rgba(75,50,35,.045)] transition duration-300 hover:-translate-y-1">

                        <div class="flex items-center justify-between">
                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-[#eaf8f0] text-lg">
                                ✅
                            </div>

                            <span class="text-xs font-bold text-emerald-700">
                                Success
                            </span>
                        </div>

                        <p class="mt-5 text-xs font-bold uppercase tracking-wider text-[#82968a]">
                            Completed Deliveries
                        </p>

                        <p class="mt-1 text-3xl font-black text-[#30241f]">
                            {{ $statistics['completedDeliveries'] }}
                        </p>

                        <div class="mt-5 h-1.5 overflow-hidden rounded-full bg-[#eaf8f0]">
                            <div class="h-full w-full rounded-full bg-emerald-500"></div>
                        </div>

                        <p class="mt-3 text-xs text-[#81968a]">
                            Successful food deliveries
                        </p>

                    </div>

                </div>
            </section>


            {{-- ===================================================== --}}
            {{-- ADMIN WORKSPACE --}}
            {{-- ===================================================== --}}

            <section class="mt-12">

                <div class="relative overflow-hidden rounded-[2.25rem] bg-[#30241f] p-7 text-white shadow-[0_22px_55px_rgba(48,36,31,.15)] sm:p-9 lg:p-10">

                    {{-- Decorative shapes --}}
                    <div class="pointer-events-none absolute -right-20 -top-24 h-72 w-72 rounded-full bg-[#e96f45]/20 blur-3xl"></div>
                    <div class="pointer-events-none absolute -bottom-28 left-[28%] h-64 w-64 rounded-full bg-emerald-400/10 blur-3xl"></div>

                    <div class="pointer-events-none absolute right-12 top-12 hidden h-20 w-20 rounded-2xl border border-white/10 rotate-12 lg:block"></div>
                    <div class="pointer-events-none absolute bottom-10 right-32 hidden h-12 w-12 rounded-full border border-white/10 lg:block"></div>

                    <div class="relative">

                        <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">

                            <div class="max-w-2xl">

                                <span class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/10 px-3 py-1.5 text-[10px] font-extrabold uppercase tracking-[0.18em] text-[#ffd6c5]">
                                    <span class="h-1.5 w-1.5 rounded-full bg-[#f08a60]"></span>
                                    Administration
                                </span>

                                <h2 class="mt-4 text-3xl font-black tracking-tight sm:text-4xl">
                                    Keep the platform
                                    <span class="text-[#f39a74]">moving.</span>
                                </h2>

                                <p class="mt-3 max-w-xl text-sm leading-6 text-white/60">
                                    Manage the people and platform activity behind
                                    SurplusLink Lanka from one central workspace.
                                </p>

                            </div>

                            <a
                                href="{{ route('admin.users') }}"
                                class="inline-flex w-fit items-center gap-2 rounded-2xl bg-[#f07a4d] px-5 py-3.5 text-sm font-bold text-white shadow-lg shadow-[#e96f45]/20 transition duration-300 hover:-translate-y-0.5 hover:bg-[#e96f45] focus:outline-none focus:ring-2 focus:ring-[#f7a17d] focus:ring-offset-2 focus:ring-offset-[#30241f]"
                            >
                                Open User Management
                                <span aria-hidden="true">→</span>
                            </a>

                        </div>


                        <div class="mt-9 grid grid-cols-1 gap-4 md:grid-cols-3">

                            {{-- User Management --}}
                            <div class="group rounded-2xl border border-white/10 bg-white/[0.055] p-5 backdrop-blur-sm transition duration-300 hover:bg-white/[0.09]">

                                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-[#f07a4d]/15 text-lg">
                                    👥
                                </div>

                                <h3 class="mt-5 font-bold">
                                    User Management
                                </h3>

                                <p class="mt-2 text-sm leading-5 text-white/50">
                                    Manage registered users, roles and account status
                                    across the platform.
                                </p>

                                <div class="mt-5 flex items-center gap-2 text-xs font-bold text-[#f3a17d]">
                                    <span>Manage accounts</span>
                                    <span>→</span>
                                </div>

                            </div>


                            {{-- Verification --}}
                            <div class="group rounded-2xl border border-white/10 bg-white/[0.055] p-5 backdrop-blur-sm transition duration-300 hover:bg-white/[0.09]">

                                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-400/10 text-lg">
                                    🛡️
                                </div>

                                <h3 class="mt-5 font-bold">
                                    Verification
                                </h3>

                                <p class="mt-2 text-sm leading-5 text-white/50">
                                    Monitor organisations awaiting review and help
                                    maintain a trusted network.
                                </p>

                                <div class="mt-5 flex items-center gap-2 text-xs font-bold text-emerald-300">
                                    <span>
                                        {{ $statistics['pendingVerifications'] }} pending
                                    </span>
                                </div>

                            </div>


                            {{-- Platform Activity --}}
                            <div class="group rounded-2xl border border-white/10 bg-white/[0.055] p-5 backdrop-blur-sm transition duration-300 hover:bg-white/[0.09]">

                                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-white/10 text-lg">
                                    📈
                                </div>

                                <h3 class="mt-5 font-bold">
                                    Platform Activity
                                </h3>

                                <p class="mt-2 text-sm leading-5 text-white/50">
                                    Monitor listings, requests and completed deliveries
                                    across the network.
                                </p>

                                <div class="mt-5 flex items-center gap-2 text-xs font-bold text-white/55">
                                    <span>
                                        {{ $statistics['totalFoodListings'] }} listings
                                    </span>

                                    <span>•</span>

                                    <span>
                                        {{ $statistics['totalFoodRequests'] }} requests
                                    </span>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

            </section>


            {{-- ===================================================== --}}
            {{-- IMPACT FOOTER --}}
            {{-- ===================================================== --}}

            <section class="mt-10">

                <div class="relative overflow-hidden rounded-[1.75rem] border border-[#dcefe4] bg-[#f2fbf5] px-6 py-7 sm:px-7">

                    <div class="pointer-events-none absolute -right-16 -top-16 h-40 w-40 rounded-full bg-white/60"></div>

                    <div class="relative flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between">

                        <div class="flex items-start gap-4">

                            <div class="flex h-13 w-13 shrink-0 items-center justify-center rounded-2xl bg-white text-xl shadow-sm">
                                🌱
                            </div>

                            <div>
                                <p class="font-extrabold text-[#315c46]">
                                    Every connection creates impact.
                                </p>

                                <p class="mt-1 max-w-2xl text-sm leading-6 text-[#668273]">
                                    SurplusLink helps turn available food into meaningful
                                    community support through coordinated redistribution.
                                </p>
                            </div>

                        </div>

                        <div class="flex shrink-0 items-center gap-2 text-xs font-extrabold uppercase tracking-wider text-emerald-700">
                            <span class="h-2.5 w-2.5 rounded-full bg-emerald-500"></span>
                            Building a better food network
                        </div>

                    </div>

                </div>

            </section>

        </div>
    </div>

    {{-- ============================================================= --}}
    {{-- SUBTLE ANIMATIONS --}}
    {{-- ============================================================= --}}

    <style>
        @keyframes adminPulse {
            0%, 100% {
                opacity: .45;
                transform: scale(1);
            }

            50% {
                opacity: .9;
                transform: scale(1.08);
            }
        }

        .admin-pulse {
            animation: adminPulse 3s ease-in-out infinite;
        }

        @media (prefers-reduced-motion: reduce) {
            .admin-pulse,
            .animate-ping {
                animation: none !important;
            }

            * {
                scroll-behavior: auto !important;
            }
        }
    </style>

</x-app-layout>
