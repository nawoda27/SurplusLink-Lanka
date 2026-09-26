<x-app-layout>

    <div class="food-listings-page min-h-screen overflow-hidden bg-[#fffaf5] text-slate-800">

        {{-- =========================================================
             BACKGROUND ATMOSPHERE
        ========================================================== --}}
        <div class="pointer-events-none fixed inset-0 -z-10 overflow-hidden">

            <div class="absolute inset-0 opacity-[0.055]">

                <img
                    src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?auto=format&fit=crop&w=2200&q=80"
                    alt=""
                    class="h-full w-full scale-110 object-cover blur-2xl"
                >

            </div>

            <div class="absolute inset-0 bg-gradient-to-b from-[#fffaf5]/95 via-[#fffaf5]/90 to-[#fffaf5]"></div>

            <div class="absolute -right-32 top-10 h-80 w-80 rounded-full bg-orange-200/40 blur-3xl"></div>

            <div class="absolute -left-32 top-[45%] h-80 w-80 rounded-full bg-emerald-100/50 blur-3xl"></div>

            <div class="absolute right-[20%] bottom-0 h-64 w-64 rounded-full bg-amber-100/40 blur-3xl"></div>

        </div>


        {{-- =========================================================
             TOP LIVE KITCHEN BAR
        ========================================================== --}}
        <section class="mx-auto max-w-7xl px-4 pt-5 sm:px-6 lg:px-8">

            <div class="flex flex-wrap items-center justify-between gap-3">

                <div class="flex items-center gap-2">

                    <span class="relative flex h-3 w-3">

                        <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-emerald-400 opacity-60"></span>

                        <span class="relative inline-flex h-3 w-3 rounded-full bg-emerald-500"></span>

                    </span>

                    <span class="text-[10px] font-black uppercase tracking-[0.2em] text-emerald-700">
                        Live Kitchen
                    </span>

                    <span class="text-xs text-slate-300">
                        •
                    </span>

                    <span class="text-xs font-semibold text-slate-500">
                        Surplus inventory
                    </span>

                </div>


                <div class="flex flex-wrap items-center gap-2">

                    <span class="rounded-full bg-white/85 px-3 py-1.5 text-[9px] font-black uppercase tracking-wider text-orange-600 shadow-sm ring-1 ring-orange-100 backdrop-blur">
                        🍳 Kitchen Active
                    </span>

                    <span class="rounded-full bg-white/85 px-3 py-1.5 text-[9px] font-black uppercase tracking-wider text-slate-500 shadow-sm ring-1 ring-slate-100 backdrop-blur">
                        Fresh Today
                    </span>

                </div>

            </div>

        </section>


        {{-- =========================================================
             HERO
        ========================================================== --}}
        <section class="relative">

            <div class="mx-auto max-w-7xl px-4 pb-8 pt-6 sm:px-6 lg:px-8 lg:pb-10">

                {{-- Breadcrumb --}}
                <div class="mb-6 flex items-center gap-2 text-xs font-semibold">

                    <a
                        href="{{ route('restaurant.dashboard') }}"
                        class="text-slate-400 transition hover:text-orange-600"
                    >
                        Dashboard
                    </a>

                    <span class="text-slate-300">
                        /
                    </span>

                    <span class="text-orange-600">
                        Food Listings
                    </span>

                </div>


                <div class="grid items-center gap-8 lg:grid-cols-[1fr_.85fr]">

                    {{-- Hero Copy --}}
                    <div>

                        <div class="mb-5 inline-flex items-center gap-2 rounded-full bg-white/90 px-4 py-2 shadow-sm ring-1 ring-orange-100 backdrop-blur">

                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-orange-50 text-lg">
                                🍱
                            </span>

                            <span class="text-[10px] font-black uppercase tracking-[0.16em] text-orange-600">
                                Surplus Food Management
                            </span>

                        </div>


                        <h1 class="max-w-3xl text-4xl font-black leading-[1.04] tracking-tight text-slate-950 sm:text-5xl lg:text-[4rem]">

                            What's leaving your

                            <span class="text-orange-500">
                                kitchen
                            </span>

                            today?

                        </h1>


                        <p class="mt-5 max-w-2xl text-base leading-7 text-slate-600 sm:text-lg">

                            Manage your restaurant's surplus food, keep good meals
                            visible, and give every available portion another destination.

                        </p>


                        <div class="mt-7 flex flex-wrap gap-3">

                            <a
                                href="{{ route('restaurant.food-listings.create') }}"
                                class="group inline-flex items-center gap-2 rounded-2xl bg-orange-500 px-5 py-3.5 text-sm font-black text-white shadow-xl shadow-orange-200 transition duration-300 hover:-translate-y-1 hover:bg-orange-600 hover:shadow-2xl focus:outline-none focus:ring-2 focus:ring-orange-300 focus:ring-offset-2"
                            >

                                <span class="flex h-7 w-7 items-center justify-center rounded-full bg-white/20 text-lg">
                                    +
                                </span>

                                Add surplus food

                                <span class="transition duration-300 group-hover:translate-x-1">
                                    →
                                </span>

                            </a>


                            <a
                                href="{{ route('restaurant.dashboard') }}"
                                class="inline-flex items-center gap-2 rounded-2xl bg-white/90 px-5 py-3.5 text-sm font-black text-slate-700 shadow-sm ring-1 ring-slate-200 transition duration-300 hover:-translate-y-1 hover:text-orange-600 hover:ring-orange-200"
                            >

                                ←

                                Kitchen dashboard

                            </a>

                        </div>


                        <div class="mt-6 flex flex-wrap gap-x-6 gap-y-3">

                            <div class="flex items-center gap-2 text-xs font-bold text-slate-500">

                                <span class="flex h-6 w-6 items-center justify-center rounded-full bg-emerald-50 text-emerald-600">
                                    ✓
                                </span>

                                Less food waste

                            </div>


                            <div class="flex items-center gap-2 text-xs font-bold text-slate-500">

                                <span class="flex h-6 w-6 items-center justify-center rounded-full bg-orange-50 text-orange-600">
                                    ✓
                                </span>

                                More community meals

                            </div>

                        </div>

                    </div>


                    {{-- Hero Food Visual --}}
                    <div class="relative mx-auto hidden h-[310px] w-full max-w-md lg:block">

                        <div class="absolute inset-0 rounded-[3rem] bg-gradient-to-br from-orange-100 via-white to-emerald-100 blur-xl"></div>


                        {{-- Main food image --}}
                        <div class="hero-food-main absolute left-1/2 top-1/2 z-20 h-64 w-72 -translate-x-1/2 -translate-y-1/2 overflow-hidden rounded-[2.5rem] border-4 border-white shadow-2xl">

                            <img
                                src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=900&q=85"
                                alt="Fresh restaurant food"
                                class="h-full w-full object-cover"
                            >

                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/65 via-transparent to-transparent"></div>

                            <div class="absolute bottom-5 left-5 right-5">

                                <span class="rounded-full bg-white/15 px-3 py-1.5 text-[9px] font-black uppercase tracking-wider text-white backdrop-blur">
                                    Kitchen Fresh
                                </span>

                                <p class="mt-2 text-xl font-black text-white">
                                    Good food deserves another destination.
                                </p>

                            </div>

                        </div>


                        {{-- Floating image --}}
                        <div class="listing-float absolute left-0 top-5 z-30 h-24 w-24 overflow-hidden rounded-[1.5rem] border-4 border-white shadow-xl">

                            <img
                                src="https://images.unsplash.com/photo-1473093295043-cdd812d0e601?auto=format&fit=crop&w=400&q=85"
                                alt="Fresh pasta"
                                class="h-full w-full object-cover"
                            >

                        </div>


                        {{-- Floating image --}}
                        <div class="listing-float listing-float-delay absolute bottom-4 right-0 z-30 h-28 w-28 overflow-hidden rounded-[1.75rem] border-4 border-white shadow-xl">

                            <img
                                src="https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=400&q=85"
                                alt="Vegetable food"
                                class="h-full w-full object-cover"
                            >

                        </div>


                        {{-- Status pill --}}
                        <div class="absolute right-3 top-3 z-40 rounded-2xl bg-white/95 px-4 py-3 shadow-xl ring-1 ring-white backdrop-blur">

                            <div class="flex items-center gap-2">

                                <span class="relative flex h-2.5 w-2.5">

                                    <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-emerald-400"></span>

                                    <span class="relative h-2.5 w-2.5 rounded-full bg-emerald-500"></span>

                                </span>

                                <span class="text-[9px] font-black uppercase tracking-wider text-emerald-700">
                                    Kitchen Active
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <div class="mx-auto max-w-7xl px-4 pb-14 sm:px-6 lg:px-8">


            {{-- =====================================================
                 SUCCESS MESSAGE
            ====================================================== --}}
            @if (session('success'))

                <div class="mb-8 overflow-hidden rounded-2xl border border-emerald-200 bg-white shadow-sm">

                    <div class="flex items-center gap-4 px-5 py-4">

                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-emerald-50 text-lg text-emerald-600">
                            ✓
                        </div>

                        <div class="min-w-0">

                            <p class="text-sm font-black text-emerald-800">
                                Kitchen updated successfully
                            </p>

                            <p class="mt-0.5 text-sm text-emerald-700">
                                {{ session('success') }}
                            </p>

                        </div>

                    </div>

                </div>

            @endif


            {{-- =====================================================
                 INVENTORY SUMMARY
            ====================================================== --}}
            @if ($foodListings->count() > 0)

                <section class="mb-10">

                    <div class="mb-5 flex flex-col gap-2 sm:flex-row sm:items-end sm:justify-between">

                        <div>

                            <p class="text-[10px] font-black uppercase tracking-[0.2em] text-orange-500">
                                Kitchen inventory
                            </p>

                            <h2 class="mt-1 text-2xl font-black tracking-tight text-slate-950 sm:text-3xl">
                                Today's surplus at a glance.
                            </h2>

                        </div>

                        <span class="text-xs font-semibold text-slate-400">
                            Live from your restaurant account
                        </span>

                    </div>


                    <div class="grid gap-4 sm:grid-cols-3">

                        {{-- Total --}}
                        <div class="inventory-stat">

                            <div class="flex items-start justify-between">

                                <div class="stat-icon bg-orange-50">
                                    🍱
                                </div>

                                <span class="stat-label bg-orange-50 text-orange-600">
                                    Inventory
                                </span>

                            </div>

                            <p class="mt-5 text-xs font-bold uppercase tracking-wider text-slate-400">
                                Total Listings
                            </p>

                            <p class="mt-1 text-4xl font-black tracking-tight text-slate-950">
                                {{ $foodListings->count() }}
                            </p>

                            <p class="mt-2 text-xs font-medium text-slate-500">
                                Food items managed by your kitchen
                            </p>

                        </div>


                        {{-- Available --}}
                        <div class="inventory-stat">

                            <div class="flex items-start justify-between">

                                <div class="stat-icon bg-emerald-50">
                                    🌱
                                </div>

                                <span class="stat-label bg-emerald-50 text-emerald-700">
                                    Live
                                </span>

                            </div>

                            <p class="mt-5 text-xs font-bold uppercase tracking-wider text-slate-400">
                                Available Now
                            </p>

                            <p class="mt-1 text-4xl font-black tracking-tight text-emerald-600">
                                {{ $foodListings->where('status', 'available')->count() }}
                            </p>

                            <p class="mt-2 text-xs font-medium text-slate-500">
                                Surplus food currently visible
                            </p>

                        </div>


                        {{-- Impact --}}
                        <div class="inventory-stat">

                            <div class="flex items-start justify-between">

                                <div class="stat-icon bg-amber-50">
                                    ❤️
                                </div>

                                <span class="stat-label bg-amber-50 text-amber-700">
                                    Impact
                                </span>

                            </div>

                            <p class="mt-5 text-xs font-bold uppercase tracking-wider text-slate-400">
                                Kitchen Mission
                            </p>

                            <p class="mt-1 text-2xl font-black tracking-tight text-slate-950">
                                Less Waste
                            </p>

                            <p class="mt-2 text-xs font-medium text-slate-500">
                                More good meals reach communities
                            </p>

                        </div>

                    </div>

                </section>


                {{-- =================================================
                     INVENTORY HEADER
                ================================================== --}}
                <section class="mb-5">

                    <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">

                        <div>

                            <div class="flex items-center gap-2">

                                <span class="relative flex h-2.5 w-2.5">

                                    <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-emerald-400 opacity-60"></span>

                                    <span class="relative h-2.5 w-2.5 rounded-full bg-emerald-500"></span>

                                </span>

                                <p class="text-[10px] font-black uppercase tracking-[0.2em] text-emerald-700">
                                    Live inventory
                                </p>

                            </div>

                            <h2 class="mt-2 text-2xl font-black tracking-tight text-slate-950">
                                Your surplus collection
                            </h2>

                            <p class="mt-1 text-sm text-slate-500">
                                Food currently managed by your restaurant.
                            </p>

                        </div>


                        <div class="rounded-full bg-white px-4 py-2 text-xs font-bold text-slate-500 shadow-sm ring-1 ring-slate-100">

                            {{ $foodListings->count() }}

                            {{ $foodListings->count() === 1 ? 'listing' : 'listings' }}

                        </div>

                    </div>

                </section>


                {{-- =================================================
                     FOOD CARDS
                ================================================== --}}
                <section class="grid grid-cols-1 gap-6 md:grid-cols-2 xl:grid-cols-3">

                    @foreach ($foodListings as $listing)

                        @php

                            $foodType = strtolower($listing->food_type ?? '');

                            $foodImage = match (true) {

                                str_contains($foodType, 'rice')
                                    => 'https://images.unsplash.com/photo-1512058564366-18510be2db19?auto=format&fit=crop&w=900&q=85',

                                str_contains($foodType, 'pasta')
                                    => 'https://images.unsplash.com/photo-1473093295043-cdd812d0e601?auto=format&fit=crop&w=900&q=85',

                                str_contains($foodType, 'bread') || str_contains($foodType, 'bakery')
                                    => 'https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=900&q=85',

                                str_contains($foodType, 'vegetable')
                                    => 'https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=900&q=85',

                                str_contains($foodType, 'fruit')
                                    => 'https://images.unsplash.com/photo-1610832958506-aa56368176cf?auto=format&fit=crop&w=900&q=85',

                                str_contains($foodType, 'dessert') || str_contains($foodType, 'sweet')
                                    => 'https://images.unsplash.com/photo-1551024506-0bccd828d307?auto=format&fit=crop&w=900&q=85',

                                str_contains($foodType, 'drink') || str_contains($foodType, 'beverage')
                                    => 'https://images.unsplash.com/photo-1544145945-f90425340c7e?auto=format&fit=crop&w=900&q=85',

                                str_contains($foodType, 'chicken') || str_contains($foodType, 'meat')
                                    => 'https://images.unsplash.com/photo-1532550907401-a500c9a57435?auto=format&fit=crop&w=900&q=85',

                                default
                                    => 'https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=900&q=85',

                            };


                            $status = strtolower($listing->status ?? '');

                            $statusAvailable = $status === 'available';

                            $statusLabel = $statusAvailable
                                ? 'Available'
                                : ucfirst($status ?: 'Inactive');

                        @endphp


                        <article class="food-card group">

                            {{-- =================================================
                                 FOOD IMAGE
                            ================================================== --}}
                            <div class="food-card-image">

                                <img
                                    src="{{ $foodImage }}"
                                    alt="{{ $listing->title }}"
                                    class="h-full w-full object-cover"
                                >


                                {{-- Image overlay --}}
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-slate-950/5 to-transparent"></div>


                                {{-- Top status --}}
                                <div class="absolute left-4 right-4 top-4 flex items-start justify-between gap-3">

                                    <span class="rounded-full bg-white/90 px-3 py-1.5 text-[9px] font-black uppercase tracking-wider text-slate-700 shadow-sm backdrop-blur">

                                        {{ $listing->food_type ?: 'Food' }}

                                    </span>


                                    <span class="inline-flex items-center gap-1.5 rounded-full bg-white/95 px-3 py-1.5 text-[9px] font-black uppercase tracking-wider shadow-sm backdrop-blur
                                        {{ $statusAvailable
                                            ? 'text-emerald-700'
                                            : 'text-slate-600' }}">

                                        <span class="h-1.5 w-1.5 rounded-full
                                            {{ $statusAvailable
                                                ? 'bg-emerald-500'
                                                : 'bg-slate-400' }}">
                                        </span>

                                        {{ $statusLabel }}

                                    </span>

                                </div>


                                {{-- Bottom image title --}}
                                <div class="absolute bottom-4 left-4 right-4">

                                    <div class="flex items-end justify-between gap-3">

                                        <div class="min-w-0">

                                            <p class="text-[9px] font-black uppercase tracking-[0.16em] text-orange-200">
                                                Kitchen surplus
                                            </p>

                                            <h3 class="mt-1 truncate text-xl font-black text-white">
                                                {{ $listing->title }}
                                            </h3>

                                        </div>


                                        <div class="shrink-0 rounded-xl bg-black/25 px-3 py-2 text-right backdrop-blur-md">

                                            <p class="text-[8px] font-bold uppercase tracking-wider text-white/60">
                                                Price
                                            </p>

                                            <p class="text-sm font-black text-white">
                                                Rs. {{ number_format($listing->price, 2) }}
                                            </p>

                                        </div>

                                    </div>

                                </div>

                            </div>


                            {{-- =================================================
                                 CARD BODY
                            ================================================== --}}
                            <div class="flex flex-1 flex-col p-5">

                                @if ($listing->description)

                                    <p class="line-clamp-2 text-sm leading-6 text-slate-500">
                                        {{ $listing->description }}
                                    </p>

                                @else

                                    <p class="text-sm italic text-slate-400">
                                        No description added for this listing.
                                    </p>

                                @endif


                                {{-- Information grid --}}
                                <div class="mt-5 grid grid-cols-2 gap-3">

                                    <div class="info-box">

                                        <span class="info-icon bg-orange-50">
                                            📦
                                        </span>

                                        <div class="min-w-0">

                                            <p class="info-label">
                                                Quantity
                                            </p>

                                            <p class="info-value">
                                                {{ $listing->quantity }}

                                                <span class="font-semibold text-slate-400">
                                                    {{ $listing->quantity_unit }}
                                                </span>
                                            </p>

                                        </div>

                                    </div>


                                    <div class="info-box">

                                        <span class="info-icon bg-emerald-50">
                                            🌱
                                        </span>

                                        <div class="min-w-0">

                                            <p class="info-label">
                                                Status
                                            </p>

                                            <p class="info-value {{ $statusAvailable ? 'text-emerald-600' : '' }}">
                                                {{ $statusLabel }}
                                            </p>

                                        </div>

                                    </div>

                                </div>


                                {{-- Availability --}}
                                <div class="mt-3 flex items-start gap-3 rounded-2xl border border-orange-100 bg-orange-50/45 px-3.5 py-3.5">

                                    <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-white text-sm shadow-sm">
                                        ⏰
                                    </div>

                                    <div class="min-w-0">

                                        <p class="text-[9px] font-black uppercase tracking-wider text-orange-500">
                                            Available until
                                        </p>

                                        <p class="mt-1 text-sm font-black text-slate-800">
                                            {{ $listing->available_until->format('d M Y, h:i A') }}
                                        </p>

                                    </div>

                                </div>


                                {{-- Pickup --}}
                                <div class="mt-3 flex items-start gap-3 rounded-2xl border border-slate-100 bg-slate-50/70 px-3.5 py-3.5">

                                    <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-white text-sm shadow-sm">
                                        📍
                                    </div>

                                    <div class="min-w-0">

                                        <p class="text-[9px] font-black uppercase tracking-wider text-slate-400">
                                            Pickup point
                                        </p>

                                        <p class="mt-1 line-clamp-2 text-sm font-semibold leading-5 text-slate-600">
                                            {{ $listing->pickup_address }}
                                        </p>

                                    </div>

                                </div>


                                {{-- Actions --}}
                                <div class="mt-auto pt-5">

                                    <div class="flex gap-2.5">

                                        <a
                                            href="{{ route('restaurant.food-listings.edit', $listing->id) }}"
                                            class="group flex flex-1 items-center justify-center gap-2 rounded-xl bg-orange-500 px-4 py-3 text-xs font-black uppercase tracking-wide text-white shadow-sm transition duration-200 hover:-translate-y-0.5 hover:bg-orange-600 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-orange-300 focus:ring-offset-2"
                                        >

                                            <span>
                                                ✏️
                                            </span>

                                            Edit

                                            <span class="transition group-hover:translate-x-0.5">
                                                →
                                            </span>

                                        </a>


                                        <form
                                            method="POST"
                                            action="{{ route('restaurant.food-listings.destroy', $listing->id) }}"
                                            class="shrink-0"
                                            onsubmit="return confirm('Are you sure you want to delete this food listing? This action cannot be undone.');"
                                        >

                                            @csrf

                                            @method('DELETE')


                                            <button
                                                type="submit"
                                                class="flex h-full min-h-[44px] w-12 items-center justify-center rounded-xl border border-red-100 bg-red-50 text-red-500 transition duration-200 hover:-translate-y-0.5 hover:bg-red-100 hover:text-red-700 focus:outline-none focus:ring-2 focus:ring-red-300 focus:ring-offset-2"
                                                aria-label="Delete {{ $listing->title }}"
                                            >

                                                🗑️

                                            </button>

                                        </form>

                                    </div>

                                </div>

                            </div>

                        </article>

                    @endforeach

                </section>


                {{-- =================================================
                     KITCHEN FLOW
                ================================================== --}}
                <section class="mt-12">

                    <div class="overflow-hidden rounded-[2rem] bg-white shadow-sm ring-1 ring-slate-100">

                        <div class="grid lg:grid-cols-[.8fr_1.2fr]">

                            {{-- Image --}}
                            <div class="relative min-h-[280px] overflow-hidden bg-slate-950">

                                <img
                                    src="https://images.unsplash.com/photo-1556911220-bff31c812dba?auto=format&fit=crop&w=1100&q=85"
                                    alt="Chef preparing food in a restaurant kitchen"
                                    class="absolute inset-0 h-full w-full object-cover opacity-75"
                                >

                                <div class="absolute inset-0 bg-gradient-to-br from-slate-950/80 via-slate-950/30 to-orange-900/40"></div>


                                <div class="relative flex h-full flex-col justify-end p-7">

                                    <div class="mb-auto">

                                        <span class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1.5 text-[9px] font-black uppercase tracking-wider text-white backdrop-blur">

                                            <span class="h-2 w-2 rounded-full bg-emerald-400"></span>

                                            Live kitchen

                                        </span>

                                    </div>


                                    <div>

                                        <p class="text-[10px] font-black uppercase tracking-[0.2em] text-orange-300">
                                            From your kitchen
                                        </p>

                                        <h3 class="mt-2 text-2xl font-black text-white">
                                            Cook. List. Share.
                                        </h3>

                                        <p class="mt-2 max-w-md text-sm leading-6 text-white/70">
                                            Every good portion you list has another chance
                                            to become someone's meal.
                                        </p>

                                    </div>

                                </div>

                            </div>


                            {{-- Flow --}}
                            <div class="p-6 sm:p-8">

                                <p class="text-[10px] font-black uppercase tracking-[0.2em] text-orange-500">
                                    SurplusLink workflow
                                </p>

                                <h3 class="mt-2 text-2xl font-black text-slate-950">
                                    What happens next?
                                </h3>


                                <div class="mt-7 grid gap-5 sm:grid-cols-2">

                                    <div class="workflow-item">

                                        <span class="workflow-number">
                                            01
                                        </span>

                                        <div>

                                            <h4 class="font-black text-slate-900">
                                                Food gets listed
                                            </h4>

                                            <p class="mt-1 text-sm leading-6 text-slate-500">
                                                Your surplus becomes visible to eligible requesters.
                                            </p>

                                        </div>

                                    </div>


                                    <div class="workflow-item">

                                        <span class="workflow-number">
                                            02
                                        </span>

                                        <div>

                                            <h4 class="font-black text-slate-900">
                                                Request arrives
                                            </h4>

                                            <p class="mt-1 text-sm leading-6 text-slate-500">
                                                Someone discovers food that matches their need.
                                            </p>

                                        </div>

                                    </div>


                                    <div class="workflow-item">

                                        <span class="workflow-number">
                                            03
                                        </span>

                                        <div>

                                            <h4 class="font-black text-slate-900">
                                                You approve
                                            </h4>

                                            <p class="mt-1 text-sm leading-6 text-slate-500">
                                                Your restaurant confirms the requested quantity.
                                            </p>

                                        </div>

                                    </div>


                                    <div class="workflow-item">

                                        <span class="workflow-number">
                                            04
                                        </span>

                                        <div>

                                            <h4 class="font-black text-slate-900">
                                                Food moves
                                            </h4>

                                            <p class="mt-1 text-sm leading-6 text-slate-500">
                                                Pickup or delivery completes the redistribution.
                                            </p>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </section>


                {{-- =================================================
                     IMPACT
                ================================================== --}}
                <section class="mt-10">

                    <div class="relative overflow-hidden rounded-[2rem] bg-emerald-950 px-6 py-8 text-white shadow-xl sm:px-8">

                        <div class="absolute -right-20 -top-20 h-64 w-64 rounded-full bg-emerald-700/30 blur-3xl"></div>

                        <div class="absolute -bottom-20 -left-20 h-64 w-64 rounded-full bg-orange-500/15 blur-3xl"></div>


                        <div class="relative flex flex-col gap-6 md:flex-row md:items-center md:justify-between">

                            <div>

                                <div class="flex items-center gap-2">

                                    <span class="text-xl">
                                        🌱
                                    </span>

                                    <span class="text-[10px] font-black uppercase tracking-[0.2em] text-emerald-300">
                                        Kitchen impact
                                    </span>

                                </div>

                                <h3 class="mt-2 text-2xl font-black sm:text-3xl">
                                    Every listing can become a meaningful meal.
                                </h3>

                                <p class="mt-3 max-w-2xl text-sm leading-6 text-emerald-100">
                                    Your restaurant is not just managing inventory.
                                    You're giving good food another destination.
                                </p>

                            </div>


                            <a
                                href="{{ route('restaurant.food-listings.create') }}"
                                class="inline-flex shrink-0 items-center justify-center gap-2 rounded-xl bg-white px-5 py-3 text-sm font-black text-emerald-950 transition duration-200 hover:-translate-y-0.5 hover:bg-orange-50"
                            >

                                Share More Food

                                <span>
                                    →
                                </span>

                            </a>

                        </div>

                    </div>

                </section>


            @else

                {{-- =================================================
                     EMPTY KITCHEN
                ================================================== --}}
                <section class="overflow-hidden rounded-[2.25rem] bg-white shadow-xl shadow-slate-200/40 ring-1 ring-slate-100">

                    <div class="relative grid items-center lg:grid-cols-[.9fr_1.1fr]">

                        <div class="relative min-h-[360px] overflow-hidden bg-slate-950">

                            <img
                                src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?auto=format&fit=crop&w=1100&q=85"
                                alt="Restaurant kitchen"
                                class="absolute inset-0 h-full w-full object-cover opacity-75"
                            >

                            <div class="absolute inset-0 bg-gradient-to-br from-slate-950/80 via-slate-950/25 to-orange-900/40"></div>


                            <div class="relative flex h-full flex-col justify-end p-7 sm:p-9">

                                <span class="mb-auto inline-flex w-fit items-center gap-2 rounded-full bg-white/10 px-3 py-1.5 text-[9px] font-black uppercase tracking-wider text-white backdrop-blur">

                                    <span class="h-2 w-2 rounded-full bg-orange-400"></span>

                                    Kitchen waiting

                                </span>


                                <div>

                                    <p class="text-[10px] font-black uppercase tracking-[0.2em] text-orange-300">
                                        Start sharing
                                    </p>

                                    <h2 class="mt-2 text-3xl font-black text-white">
                                        Your first listing starts here.
                                    </h2>

                                </div>

                            </div>

                        </div>


                        <div class="px-6 py-12 text-center sm:px-10 lg:text-left">

                            <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-[1.75rem] bg-orange-50 text-4xl lg:mx-0">
                                🍱
                            </div>


                            <p class="mt-6 text-[10px] font-black uppercase tracking-[0.2em] text-orange-500">
                                Surplus inventory
                            </p>


                            <h3 class="mt-2 text-2xl font-black text-slate-950 sm:text-3xl">
                                No food listings yet.
                            </h3>


                            <p class="mx-auto mt-3 max-w-lg text-sm leading-7 text-slate-500 lg:mx-0">
                                Add your first surplus food listing and make
                                good food discoverable through SurplusLink.
                            </p>


                            <a
                                href="{{ route('restaurant.food-listings.create') }}"
                                class="mt-7 inline-flex items-center gap-2 rounded-2xl bg-orange-500 px-6 py-3.5 text-sm font-black text-white shadow-xl shadow-orange-200 transition duration-300 hover:-translate-y-1 hover:bg-orange-600 hover:shadow-2xl focus:outline-none focus:ring-2 focus:ring-orange-300 focus:ring-offset-2"
                            >

                                <span class="text-lg">
                                    +
                                </span>

                                Add first listing

                                <span>
                                    →
                                </span>

                            </a>

                        </div>

                    </div>

                </section>

            @endif


            {{-- =====================================================
                 BOTTOM BRAND STRIP
            ====================================================== --}}
            <div class="mt-8 flex flex-col gap-3 px-1 sm:flex-row sm:items-center sm:justify-between">

                <div class="flex items-center gap-2 text-xs font-medium text-slate-500">

                    <span class="flex h-7 w-7 items-center justify-center rounded-full bg-emerald-50 text-emerald-600">
                        ♻️
                    </span>

                    <span>
                        Together, we're turning surplus into impact.
                    </span>

                </div>


                <span class="text-[10px] font-black uppercase tracking-[0.18em] text-slate-400">
                    SurplusLink Lanka
                </span>

            </div>

        </div>

    </div>


    {{-- =============================================================
         FOOD LISTINGS PAGE STYLES
    ============================================================= --}}
    <style>

        /* =========================================================
           HERO FOOD
        ========================================================== */

        .hero-food-main {
            animation: heroFoodFloat 5s ease-in-out infinite;
        }


        @keyframes heroFoodFloat {

            0%,
            100% {
                transform: translate(-50%, -50%) rotate(0deg);
            }

            50% {
                transform: translate(-50%, -52%) rotate(1deg);
            }

        }


        /* =========================================================
           FLOATING FOOD
        ========================================================== */

        .listing-float {
            animation: listingFloat 4.5s ease-in-out infinite;
        }


        .listing-float-delay {
            animation-delay: 1.4s;
        }


        @keyframes listingFloat {

            0%,
            100% {
                transform: translateY(0) rotate(0deg);
            }

            50% {
                transform: translateY(-10px) rotate(2deg);
            }

        }


        /* =========================================================
           INVENTORY STATS
        ========================================================== */

        .inventory-stat {
            border-radius: 1.75rem;
            background: rgba(255,255,255,.95);
            padding: 1.5rem;
            box-shadow: 0 8px 30px rgba(15,23,42,.045);
            border: 1px solid rgba(226,232,240,.75);
            transition:
                transform .3s ease,
                box-shadow .3s ease;
        }


        .inventory-stat:hover {
            transform: translateY(-4px);
            box-shadow: 0 18px 45px rgba(15,23,42,.08);
        }


        .stat-icon {
            display: flex;
            height: 48px;
            width: 48px;
            align-items: center;
            justify-content: center;
            border-radius: 16px;
            font-size: 1.4rem;
        }


        .stat-label {
            border-radius: 999px;
            padding: 6px 10px;
            font-size: 9px;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: .08em;
        }


        /* =========================================================
           FOOD CARD
        ========================================================== */

        .food-card {
            display: flex;
            height: 100%;
            flex-direction: column;
            overflow: hidden;
            border-radius: 1.75rem;
            background: rgba(255,255,255,.97);
            border: 1px solid rgba(226,232,240,.8);
            box-shadow: 0 10px 35px rgba(74,45,32,.055);
            transition:
                transform .35s cubic-bezier(.2,.8,.2,1),
                box-shadow .35s ease,
                border-color .35s ease;
        }


        .food-card:hover {
            transform: translateY(-7px);
            border-color: rgba(251,146,60,.25);
            box-shadow: 0 25px 60px rgba(74,45,32,.11);
        }


        .food-card-image {
            position: relative;
            height: 225px;
            overflow: hidden;
            background: #fff1e6;
        }


        .food-card-image img {
            transition:
                transform .8s cubic-bezier(.2,.8,.2,1),
                filter .5s ease;
        }


        .food-card:hover .food-card-image img {
            transform: scale(1.075);
            filter: saturate(1.08);
        }


        /* =========================================================
           INFO BOX
        ========================================================== */

        .info-box {
            display: flex;
            min-width: 0;
            align-items: center;
            gap: 10px;
            border-radius: 1rem;
            background: #fffaf5;
            padding: .75rem;
        }


        .info-icon {
            display: flex;
            height: 34px;
            width: 34px;
            flex-shrink: 0;
            align-items: center;
            justify-content: center;
            border-radius: 11px;
            font-size: .85rem;
        }


        .info-label {
            font-size: 9px;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: .08em;
            color: #94a3b8;
        }


        .info-value {
            margin-top: 2px;
            font-size: .8rem;
            font-weight: 900;
            color: #1e293b;
        }


        /* =========================================================
           WORKFLOW
        ========================================================== */

        .workflow-item {
            display: flex;
            align-items: flex-start;
            gap: 13px;
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

            .hero-food-main,
            .listing-float {
                animation: none !important;
            }

            .food-card,
            .inventory-stat,
            .food-card-image img {
                transition: none !important;
            }

        }


        /* =========================================================
           MOBILE
        ========================================================== */

        @media (max-width: 640px) {

            .food-card-image {
                height: 205px;
            }

        }

    </style>

</x-app-layout>
