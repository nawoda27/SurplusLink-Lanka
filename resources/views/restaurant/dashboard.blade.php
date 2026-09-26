<x-app-layout>

    <div class="restaurant-dashboard min-h-screen overflow-hidden bg-[#fffaf5] text-slate-800">

        {{-- =========================================================
             BACKGROUND
        ========================================================== --}}
        <div class="pointer-events-none fixed inset-0 -z-10 overflow-hidden">

            {{-- Blurred kitchen background --}}
            <div class="absolute inset-0 opacity-[0.10]">

                <img
                    src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?auto=format&fit=crop&w=2200&q=85"
                    alt=""
                    class="h-full w-full scale-110 object-cover blur-2xl"
                >

            </div>

            <div class="absolute inset-0 bg-gradient-to-b from-[#fffaf5]/95 via-[#fffaf5]/92 to-[#fffaf5]"></div>

            <div class="absolute -right-40 top-20 h-[32rem] w-[32rem] rounded-full bg-orange-200/35 blur-3xl"></div>

            <div class="absolute -left-40 top-[55%] h-[30rem] w-[30rem] rounded-full bg-emerald-200/25 blur-3xl"></div>

        </div>


        {{-- =========================================================
             TOP RESTAURANT STATUS BAR
        ========================================================== --}}
        <section class="mx-auto max-w-7xl px-4 pt-5 sm:px-6 lg:px-8">

            <div class="flex flex-wrap items-center justify-between gap-3">

                <div class="flex items-center gap-2">

                    <span class="relative flex h-3 w-3">

                        <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-emerald-400 opacity-60"></span>

                        <span class="relative inline-flex h-3 w-3 rounded-full bg-emerald-500"></span>

                    </span>

                    <span class="text-[11px] font-black uppercase tracking-[0.18em] text-emerald-700">
                        Live Kitchen
                    </span>

                    <span class="text-xs font-medium text-slate-400">
                        •
                    </span>

                    <span class="text-xs font-semibold text-slate-500">
                        Kitchen is active
                    </span>

                </div>


                <div class="flex items-center gap-2">

                    <span class="rounded-full bg-white/80 px-3 py-1.5 text-[10px] font-black uppercase tracking-wider text-orange-600 shadow-sm ring-1 ring-orange-100">
                        Hot & Fresh
                    </span>

                    <span class="rounded-full bg-white/80 px-3 py-1.5 text-[10px] font-black uppercase tracking-wider text-slate-500 shadow-sm ring-1 ring-slate-100">
                        My Kitchen
                    </span>

                </div>

            </div>

        </section>


        {{-- =========================================================
             HERO
        ========================================================== --}}
        <section class="relative mx-auto max-w-7xl px-4 pb-10 pt-6 sm:px-6 lg:px-8">

            <div class="grid items-center gap-10 lg:grid-cols-[.85fr_1.15fr]">

                {{-- =================================================
                     LEFT COPY
                ================================================== --}}
                <div class="relative z-20">

                    <div class="mb-5 inline-flex items-center gap-2 rounded-full bg-white/90 px-4 py-2 shadow-sm ring-1 ring-orange-100 backdrop-blur">

                        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-orange-50 text-lg">
                            👨‍🍳
                        </span>

                        <span class="text-xs font-black uppercase tracking-[0.12em] text-orange-600">
                            Restaurant Partner
                        </span>

                    </div>


                    <h1 class="max-w-2xl text-4xl font-black leading-[1.02] tracking-tight text-slate-950 sm:text-5xl lg:text-[4.25rem]">

                        Your kitchen.

                        <span class="text-orange-500">
                            Your surplus.
                        </span>

                        <br>

                        <span class="text-slate-900">
                            Someone's next meal.
                        </span>

                    </h1>


                    <p class="mt-6 max-w-xl text-base leading-7 text-slate-600 sm:text-lg">
                        Turn today's extra food into tomorrow's community impact
                        through SurplusLink Lanka.
                    </p>


                    {{-- Buttons --}}
                    <div class="mt-8 flex flex-wrap gap-3">

                        <a
                            href="{{ route('restaurant.food-listings.create') }}"
                            class="group inline-flex items-center gap-2 rounded-2xl bg-orange-500 px-5 py-3.5 text-sm font-black text-white shadow-xl shadow-orange-200 transition duration-300 hover:-translate-y-1 hover:bg-orange-600 hover:shadow-2xl focus:outline-none focus:ring-2 focus:ring-orange-300 focus:ring-offset-2"
                        >

                            <span class="text-lg">
                                ＋
                            </span>

                            Add surplus food

                            <span class="transition duration-300 group-hover:translate-x-1">
                                →
                            </span>

                        </a>


                        <a
                            href="{{ route('restaurant.food-listings.index') }}"
                            class="inline-flex items-center gap-2 rounded-2xl bg-white/90 px-5 py-3.5 text-sm font-black text-slate-700 shadow-sm ring-1 ring-slate-200 transition duration-300 hover:-translate-y-1 hover:text-orange-600 hover:ring-orange-200"
                        >

                            🍽️

                            My Kitchen

                        </a>

                    </div>


                    {{-- Restaurant promise --}}
                    <div class="mt-7 flex flex-wrap gap-5">

                        <div class="flex items-center gap-2">

                            <span class="flex h-7 w-7 items-center justify-center rounded-full bg-emerald-50 text-sm text-emerald-600">
                                ✓
                            </span>

                            <span class="text-xs font-bold text-slate-500">
                                Reduce waste
                            </span>

                        </div>


                        <div class="flex items-center gap-2">

                            <span class="flex h-7 w-7 items-center justify-center rounded-full bg-orange-50 text-sm text-orange-600">
                                ♡
                            </span>

                            <span class="text-xs font-bold text-slate-500">
                                Feed your community
                            </span>

                        </div>


                        <div class="flex items-center gap-2">

                            <span class="flex h-7 w-7 items-center justify-center rounded-full bg-sky-50 text-sm text-sky-600">
                                ⚡
                            </span>

                            <span class="text-xs font-bold text-slate-500">
                                Fast redistribution
                            </span>

                        </div>

                    </div>

                </div>


                {{-- =================================================
                     RIGHT VISUAL
                ================================================== --}}
                <div class="relative mx-auto min-h-[590px] w-full max-w-2xl">

                    {{-- Kitchen image layer --}}
                    <div class="absolute inset-4 overflow-hidden rounded-[3rem] opacity-80">

                        <img
                            src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?auto=format&fit=crop&w=1400&q=85"
                            alt="Restaurant kitchen"
                            class="h-full w-full object-cover blur-[2px]"
                        >

                        <div class="absolute inset-0 bg-gradient-to-br from-orange-100/80 via-white/55 to-emerald-100/70"></div>

                    </div>


                    {{-- Floating food image 01 --}}
                    <div class="food-float food-float-one absolute left-0 top-16 z-10 hidden h-28 w-28 overflow-hidden rounded-[1.75rem] border-4 border-white shadow-2xl sm:block">

                        <img
                            src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=500&q=85"
                            alt="Fresh salad"
                            class="h-full w-full object-cover"
                        >

                    </div>


                    {{-- Floating food image 02 --}}
                    <div class="food-float food-float-two absolute right-0 top-8 z-10 hidden h-32 w-32 overflow-hidden rounded-[2rem] border-4 border-white shadow-2xl sm:block">

                        <img
                            src="https://images.unsplash.com/photo-1473093295043-cdd812d0e601?auto=format&fit=crop&w=500&q=85"
                            alt="Fresh pasta"
                            class="h-full w-full object-cover"
                        >

                    </div>


                    {{-- Floating food image 03 --}}
                    <div class="food-float food-float-three absolute bottom-20 left-3 z-20 hidden h-24 w-24 overflow-hidden rounded-[1.5rem] border-4 border-white shadow-2xl sm:block">

                        <img
                            src="https://images.unsplash.com/photo-1563379926898-05f4575a45d8?auto=format&fit=crop&w=500&q=85"
                            alt="Pasta meal"
                            class="h-full w-full object-cover"
                        >

                    </div>


                    {{-- Floating food image 04 --}}
                    <div class="food-float food-float-four absolute bottom-10 right-4 z-20 hidden h-28 w-28 overflow-hidden rounded-[1.75rem] border-4 border-white shadow-2xl sm:block">

                        <img
                            src="https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=500&q=85"
                            alt="Vegetable curry"
                            class="h-full w-full object-cover"
                        >

                    </div>


                    {{-- =================================================
                         MAIN POS CARD
                    ================================================== --}}
                    <div class="pos-card absolute left-1/2 top-1/2 z-30 w-[92%] max-w-[450px] -translate-x-1/2 -translate-y-1/2">

                        <div class="overflow-hidden rounded-[2rem] bg-[#17191d] shadow-[0_35px_80px_rgba(15,23,42,.28)] ring-1 ring-white/10">

                            {{-- POS header --}}
                            <div class="border-b border-white/10 px-5 py-4">

                                <div class="flex items-center justify-between">

                                    <div>

                                        <div class="flex items-center gap-2">

                                            <span class="h-2 w-2 rounded-full bg-emerald-400 shadow-[0_0_12px_rgba(52,211,153,.9)]"></span>

                                            <span class="text-[10px] font-black uppercase tracking-[0.2em] text-emerald-400">
                                                Live Kitchen POS
                                            </span>

                                        </div>

                                        <p class="mt-1 text-xs font-medium text-slate-500">
                                            SurplusLink Restaurant Console
                                        </p>

                                    </div>


                                    <div class="rounded-xl bg-white/5 px-3 py-2 text-right">

                                        <p class="text-[9px] font-bold uppercase tracking-wider text-slate-500">
                                            Kitchen
                                        </p>

                                        <p class="text-xs font-black text-white">
                                            ONLINE
                                        </p>

                                    </div>

                                </div>

                            </div>


                            {{-- NEW ORDER badge --}}
                            <div class="px-5 pt-5">

                                <div class="new-order-badge inline-flex items-center gap-2 rounded-full bg-orange-500 px-3.5 py-2 shadow-lg shadow-orange-950/30">

                                    <span class="flex h-5 w-5 items-center justify-center rounded-full bg-white/20 text-[10px]">
                                        🔔
                                    </span>

                                    <span class="text-[10px] font-black uppercase tracking-[0.14em] text-white">
                                        New Order!
                                    </span>

                                </div>

                            </div>


                            {{-- Order --}}
                            <div class="px-5 pb-5 pt-4">

                                <div class="rounded-[1.5rem] bg-white/[0.06] p-4 ring-1 ring-white/[0.07]">

                                    <div class="flex items-center gap-4">

                                        <div class="h-16 w-16 overflow-hidden rounded-2xl">

                                            <img
                                                src="https://images.unsplash.com/photo-1473093295043-cdd812d0e601?auto=format&fit=crop&w=300&q=85"
                                                alt="Fresh pasta order"
                                                class="h-full w-full object-cover"
                                            >

                                        </div>


                                        <div class="min-w-0 flex-1">

                                            <p class="text-[9px] font-black uppercase tracking-wider text-orange-400">
                                                Surplus order
                                            </p>

                                            <h3 class="mt-1 truncate text-base font-black text-white">
                                                Creamy Pasta
                                            </h3>

                                            <p class="mt-1 text-xs text-slate-500">
                                                Community request · 2 portions
                                            </p>

                                        </div>


                                        <div class="text-right">

                                            <p class="text-[9px] font-bold uppercase tracking-wider text-slate-500">
                                                Status
                                            </p>

                                            <p class="mt-1 text-xs font-black text-emerald-400">
                                                Accepted
                                            </p>

                                        </div>

                                    </div>


                                    {{-- Kitchen progress --}}
                                    <div class="mt-5">

                                        <div class="mb-2 flex items-center justify-between">

                                            <span class="text-[9px] font-black uppercase tracking-wider text-slate-500">
                                                Kitchen progress
                                            </span>

                                            <span class="text-[10px] font-black text-orange-400">
                                                72%
                                            </span>

                                        </div>


                                        <div class="h-2 overflow-hidden rounded-full bg-white/10">

                                            <div class="kitchen-progress h-full w-[72%] rounded-full bg-gradient-to-r from-orange-500 via-orange-400 to-emerald-400"></div>

                                        </div>


                                        <div class="mt-2 flex justify-between text-[9px] font-bold text-slate-600">

                                            <span>
                                                Order
                                            </span>

                                            <span class="text-orange-400">
                                                Packing...
                                            </span>

                                            <span>
                                                Rider
                                            </span>

                                        </div>

                                    </div>

                                </div>


                                {{-- Chef + rider --}}
                                <div class="mt-4 grid grid-cols-2 gap-3">

                                    <div class="rounded-2xl bg-white/[0.05] p-3">

                                        <div class="flex items-center gap-3">

                                            <div class="h-10 w-10 overflow-hidden rounded-xl">

                                                <img
                                                    src="https://images.unsplash.com/photo-1577219491135-ce391730fb2c?auto=format&fit=crop&w=200&q=85"
                                                    alt="Chef preparing food"
                                                    class="h-full w-full object-cover"
                                                >

                                            </div>

                                            <div>

                                                <p class="text-[8px] font-black uppercase tracking-wider text-slate-600">
                                                    Kitchen
                                                </p>

                                                <p class="mt-0.5 text-xs font-black text-white">
                                                    Chef is cooking
                                                </p>

                                            </div>

                                        </div>

                                    </div>


                                    <div class="rounded-2xl bg-white/[0.05] p-3">

                                        <div class="flex items-center gap-3">

                                            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-sky-500/10 text-lg">
                                                🛵
                                            </div>

                                            <div>

                                                <p class="text-[8px] font-black uppercase tracking-wider text-slate-600">
                                                    Delivery
                                                </p>

                                                <p class="mt-0.5 text-xs font-black text-white">
                                                    Rider nearby
                                                </p>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>


                            {{-- POS footer --}}
                            <div class="border-t border-white/10 px-5 py-4">

                                <div class="flex items-center justify-between">

                                    <div>

                                        <p class="text-[9px] font-bold uppercase tracking-wider text-slate-600">
                                            Platform
                                        </p>

                                        <p class="mt-1 text-xs font-black text-slate-300">
                                            SurplusLink Lanka
                                        </p>

                                    </div>


                                    <div class="flex items-center gap-2">

                                        <span class="h-2 w-2 rounded-full bg-emerald-400"></span>

                                        <span class="text-[9px] font-black uppercase tracking-wider text-emerald-400">
                                            Connected
                                        </span>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    {{-- Small status card --}}
                    <div class="absolute bottom-4 right-1 z-40 hidden w-44 rounded-2xl bg-white/90 p-3 shadow-xl ring-1 ring-white backdrop-blur sm:block">

                        <div class="flex items-center gap-3">

                            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-50 text-lg">
                                🔥
                            </div>

                            <div>

                                <p class="text-[9px] font-black uppercase tracking-wider text-slate-400">
                                    Kitchen status
                                </p>

                                <p class="mt-0.5 text-xs font-black text-slate-800">
                                    Hot & Fresh
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        {{-- =========================================================
             REAL DATABASE STAT
        ========================================================== --}}
        <section class="mx-auto max-w-7xl px-4 pb-8 sm:px-6 lg:px-8">

            <div class="grid gap-4 md:grid-cols-3">

                {{-- REAL --}}
                <div class="group rounded-[1.75rem] bg-white/95 p-5 shadow-sm ring-1 ring-slate-100 transition duration-300 hover:-translate-y-1 hover:shadow-xl sm:p-6">

                    <div class="flex items-start justify-between">

                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-orange-50 text-2xl">
                            🍲
                        </div>

                        <span class="rounded-full bg-emerald-50 px-3 py-1 text-[10px] font-black uppercase tracking-wider text-emerald-700">
                            Live data
                        </span>

                    </div>

                    <p class="mt-5 text-sm font-bold text-slate-500">
                        Active Listings
                    </p>

                    <p class="mt-1 text-4xl font-black tracking-tight text-slate-950">
                        {{ $activeListings }}
                    </p>

                    <a
                        href="{{ route('restaurant.food-listings.index') }}"
                        class="mt-4 inline-flex items-center gap-1 text-sm font-black text-orange-600 transition hover:text-orange-700"
                    >
                        View My Kitchen
                        <span>→</span>
                    </a>

                </div>


                {{-- VISUAL --}}
                <div class="rounded-[1.75rem] bg-white/95 p-5 shadow-sm ring-1 ring-slate-100 sm:p-6">

                    <div class="flex items-start justify-between">

                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-amber-50 text-2xl">
                            🔔
                        </div>

                        <span class="rounded-full bg-amber-50 px-3 py-1 text-[10px] font-black uppercase tracking-wider text-amber-700">
                            Workflow
                        </span>

                    </div>

                    <p class="mt-5 text-sm font-bold text-slate-500">
                        Kitchen Requests
                    </p>

                    <p class="mt-1 text-4xl font-black tracking-tight text-slate-950">
                        NEW
                    </p>

                    <p class="mt-4 text-sm font-medium text-slate-500">
                        Review incoming community requests.
                    </p>

                </div>


                {{-- VISUAL --}}
                <div class="rounded-[1.75rem] bg-white/95 p-5 shadow-sm ring-1 ring-slate-100 sm:p-6">

                    <div class="flex items-start justify-between">

                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-emerald-50 text-2xl">
                            🛵
                        </div>

                        <span class="rounded-full bg-emerald-50 px-3 py-1 text-[10px] font-black uppercase tracking-wider text-emerald-700">
                            Live flow
                        </span>

                    </div>

                    <p class="mt-5 text-sm font-bold text-slate-500">
                        Delivery Network
                    </p>

                    <p class="mt-1 text-4xl font-black tracking-tight text-slate-950">
                        ON
                    </p>

                    <p class="mt-4 text-sm font-medium text-slate-500">
                        From kitchen counter to community.
                    </p>

                </div>

            </div>

        </section>


        {{-- =========================================================
             RESTAURANT WORKSPACE
        ========================================================== --}}
        <section class="mx-auto max-w-7xl px-4 pb-10 sm:px-6 lg:px-8">

            <div class="mb-6">

                <p class="text-[11px] font-black uppercase tracking-[0.2em] text-orange-500">
                    My Kitchen
                </p>

                <h2 class="mt-2 text-2xl font-black tracking-tight text-slate-950 sm:text-3xl">
                    Everything your restaurant needs.
                </h2>

            </div>


            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">

                {{-- Listings --}}
                <a
                    href="{{ route('restaurant.food-listings.index') }}"
                    class="workspace-card group"
                >

                    <div class="workspace-image">

                        <img
                            src="https://images.unsplash.com/photo-1498837167922-ddd27525d352?auto=format&fit=crop&w=700&q=85"
                            alt="Fresh food ingredients"
                        >

                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/65 to-transparent"></div>

                        <span class="absolute left-4 top-4 rounded-full bg-white/90 px-3 py-1.5 text-[9px] font-black uppercase tracking-wider text-orange-600 backdrop-blur">
                            Kitchen
                        </span>

                        <p class="absolute bottom-4 left-4 text-lg font-black text-white">
                            Food Listings
                        </p>

                    </div>


                    <div class="p-5">

                        <p class="text-sm leading-6 text-slate-500">
                            Manage today's surplus food and keep your available items visible.
                        </p>

                        <span class="mt-4 inline-flex items-center gap-1 text-sm font-black text-orange-600">
                            Open kitchen
                            →
                        </span>

                    </div>

                </a>


                {{-- Requests --}}
                <a
                    href="{{ route('restaurant.food-requests.index') }}"
                    class="workspace-card group"
                >

                    <div class="workspace-image">

                        <img
                            src="https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=700&q=85"
                            alt="Prepared food"
                        >

                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/65 to-transparent"></div>

                        <span class="absolute left-4 top-4 rounded-full bg-orange-500 px-3 py-1.5 text-[9px] font-black uppercase tracking-wider text-white">
                            New Order
                        </span>

                        <p class="absolute bottom-4 left-4 text-lg font-black text-white">
                            Food Requests
                        </p>

                    </div>


                    <div class="p-5">

                        <p class="text-sm leading-6 text-slate-500">
                            Review requests, approve suitable quantities and move food forward.
                        </p>

                        <span class="mt-4 inline-flex items-center gap-1 text-sm font-black text-orange-600">
                            Review requests
                            →
                        </span>

                    </div>

                </a>


                {{-- Profile --}}
                <a
                    href="{{ route('restaurant.profile') }}"
                    class="workspace-card group"
                >

                    <div class="workspace-image">

                        <img
                            src="https://images.unsplash.com/photo-1515003197210-e0cd71810b5f?auto=format&fit=crop&w=700&q=85"
                            alt="Restaurant kitchen"
                        >

                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/65 to-transparent"></div>

                        <span class="absolute left-4 top-4 rounded-full bg-emerald-500 px-3 py-1.5 text-[9px] font-black uppercase tracking-wider text-white">
                            Restaurant
                        </span>

                        <p class="absolute bottom-4 left-4 text-lg font-black text-white">
                            Restaurant Profile
                        </p>

                    </div>


                    <div class="p-5">

                        <p class="text-sm leading-6 text-slate-500">
                            Keep your restaurant identity, contact information and location updated.
                        </p>

                        <span class="mt-4 inline-flex items-center gap-1 text-sm font-black text-orange-600">
                            Manage profile
                            →
                        </span>

                    </div>

                </a>

            </div>

        </section>


        {{-- =========================================================
             LIVE WORKFLOW
        ========================================================== --}}
        <section class="mx-auto max-w-7xl px-4 pb-10 sm:px-6 lg:px-8">

            <div class="overflow-hidden rounded-[2rem] bg-white/95 shadow-sm ring-1 ring-slate-100">

                <div class="grid lg:grid-cols-[.75fr_1.25fr]">

                    <div class="relative min-h-[260px] overflow-hidden bg-slate-950">

                        <img
                            src="https://images.unsplash.com/photo-1556911220-bff31c812dba?auto=format&fit=crop&w=1000&q=85"
                            alt="Chef working in a restaurant kitchen"
                            class="absolute inset-0 h-full w-full object-cover opacity-70"
                        >

                        <div class="absolute inset-0 bg-gradient-to-br from-slate-950/85 via-slate-950/40 to-orange-900/40"></div>


                        <div class="relative flex h-full flex-col justify-end p-7">

                            <div class="mb-auto">

                                <span class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1.5 text-[9px] font-black uppercase tracking-wider text-white backdrop-blur">

                                    <span class="h-2 w-2 rounded-full bg-emerald-400"></span>

                                    LIVE KITCHEN

                                </span>

                            </div>


                            <div>

                                <p class="text-xs font-black uppercase tracking-[0.18em] text-orange-300">
                                    Restaurant workflow
                                </p>

                                <h3 class="mt-2 text-2xl font-black text-white">
                                    Cook. Pack. Share.
                                </h3>

                            </div>

                        </div>

                    </div>


                    <div class="p-6 sm:p-8">

                        <div class="grid gap-5 sm:grid-cols-2">

                            <div class="workflow-step">

                                <span class="workflow-number">
                                    01
                                </span>

                                <div>

                                    <h4 class="font-black text-slate-900">
                                        Surplus appears
                                    </h4>

                                    <p class="mt-1 text-sm leading-6 text-slate-500">
                                        Your kitchen identifies good food that can be shared.
                                    </p>

                                </div>

                            </div>


                            <div class="workflow-step">

                                <span class="workflow-number">
                                    02
                                </span>

                                <div>

                                    <h4 class="font-black text-slate-900">
                                        Food gets listed
                                    </h4>

                                    <p class="mt-1 text-sm leading-6 text-slate-500">
                                        Create a listing and make the food discoverable.
                                    </p>

                                </div>

                            </div>


                            <div class="workflow-step">

                                <span class="workflow-number">
                                    03
                                </span>

                                <div>

                                    <h4 class="font-black text-slate-900">
                                        Request arrives
                                    </h4>

                                    <p class="mt-1 text-sm leading-6 text-slate-500">
                                        A customer or community requester finds the food.
                                    </p>

                                </div>

                            </div>


                            <div class="workflow-step">

                                <span class="workflow-number">
                                    04
                                </span>

                                <div>

                                    <h4 class="font-black text-slate-900">
                                        Food moves
                                    </h4>

                                    <p class="mt-1 text-sm leading-6 text-slate-500">
                                        Approval, pickup and delivery complete the journey.
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        {{-- =========================================================
             IMPACT FOOTER
        ========================================================== --}}
        <section class="mx-auto max-w-7xl px-4 pb-12 sm:px-6 lg:px-8">

            <div class="relative overflow-hidden rounded-[2.25rem] bg-emerald-950 px-6 py-9 text-white shadow-xl sm:px-9">

                <div class="absolute -right-20 -top-20 h-64 w-64 rounded-full bg-emerald-700/30 blur-3xl"></div>

                <div class="absolute -bottom-20 -left-20 h-64 w-64 rounded-full bg-orange-500/15 blur-3xl"></div>


                <div class="relative flex flex-col gap-6 md:flex-row md:items-center md:justify-between">

                    <div>

                        <p class="text-[10px] font-black uppercase tracking-[0.22em] text-emerald-300">
                            SurplusLink Lanka
                        </p>

                        <h3 class="mt-2 max-w-2xl text-2xl font-black sm:text-3xl">
                            Good food should not end as waste.
                        </h3>

                        <p class="mt-3 max-w-2xl text-sm leading-6 text-emerald-100">
                            Every surplus listing gives good food another destination.
                        </p>

                    </div>


                    <div class="flex h-16 w-16 shrink-0 items-center justify-center rounded-2xl bg-white/10 text-3xl ring-1 ring-white/10">
                        ❤️
                    </div>

                </div>

            </div>

        </section>

    </div>


    {{-- =============================================================
         RESTAURANT DASHBOARD STYLES
    ============================================================= --}}
    <style>

        /* =========================================================
           FLOATING FOOD PHOTOS
        ========================================================== */

        .food-float {
            animation: foodFloat 5s ease-in-out infinite;
        }

        .food-float-one {
            animation-delay: 0s;
        }

        .food-float-two {
            animation-delay: 1.1s;
        }

        .food-float-three {
            animation-delay: 2s;
        }

        .food-float-four {
            animation-delay: 2.8s;
        }


        @keyframes foodFloat {

            0%,
            100% {
                transform: translateY(0) rotate(0deg);
            }

            50% {
                transform: translateY(-12px) rotate(2deg);
            }

        }


        /* =========================================================
           POS CARD
        ========================================================== */

        .pos-card {
            animation: posEnter 1.2s cubic-bezier(.2,.8,.2,1) both;
        }


        @keyframes posEnter {

            from {
                opacity: 0;
                transform: translate(-50%, -46%) scale(.94);
            }

            to {
                opacity: 1;
                transform: translate(-50%, -50%) scale(1);
            }

        }


        /* =========================================================
           NEW ORDER
        ========================================================== */

        .new-order-badge {
            animation: newOrderPulse 2.4s ease-in-out infinite;
        }


        @keyframes newOrderPulse {

            0%,
            100% {
                transform: scale(1);
                box-shadow: 0 10px 25px rgba(249,115,22,.15);
            }

            50% {
                transform: scale(1.035);
                box-shadow: 0 10px 35px rgba(249,115,22,.35);
            }

        }


        /* =========================================================
           KITCHEN PROGRESS
        ========================================================== */

        .kitchen-progress {
            animation: kitchenProgress 4s ease-in-out infinite alternate;
        }


        @keyframes kitchenProgress {

            from {
                width: 58%;
            }

            to {
                width: 78%;
            }

        }


        /* =========================================================
           WORKSPACE CARDS
        ========================================================== */

        .workspace-card {
            overflow: hidden;
            border-radius: 1.75rem;
            background: rgba(255,255,255,.95);
            box-shadow: 0 8px 25px rgba(15,23,42,.05);
            border: 1px solid rgba(226,232,240,.8);
            transition:
                transform .3s ease,
                box-shadow .3s ease,
                border-color .3s ease;
        }


        .workspace-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 25px 55px rgba(15,23,42,.10);
            border-color: rgba(251,146,60,.25);
        }


        .workspace-image {
            position: relative;
            height: 190px;
            overflow: hidden;
        }


        .workspace-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .7s ease;
        }


        .workspace-card:hover .workspace-image img {
            transform: scale(1.06);
        }


        /* =========================================================
           WORKFLOW
        ========================================================== */

        .workflow-step {
            display: flex;
            align-items: flex-start;
            gap: 14px;
        }


        .workflow-number {
            display: flex;
            height: 38px;
            width: 38px;
            flex-shrink: 0;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            background: #fff1e6;
            color: #ea580c;
            font-size: 10px;
            font-weight: 900;
        }


        /* =========================================================
           REDUCED MOTION
        ========================================================== */

        @media (prefers-reduced-motion: reduce) {

            .food-float,
            .pos-card,
            .new-order-badge,
            .kitchen-progress {
                animation: none !important;
            }

            .workspace-card,
            .workspace-image img {
                transition: none !important;
            }

        }


        /* =========================================================
           MOBILE
        ========================================================== */

        @media (max-width: 640px) {

            .restaurant-dashboard {
                overflow-x: hidden;
            }

            .pos-card {
                width: 94%;
            }

            .workspace-image {
                height: 170px;
            }

        }

    </style>

</x-app-layout>
