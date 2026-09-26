<x-app-layout>

    <div class="min-h-screen bg-[#fffaf7] text-slate-800">

        {{-- =========================================================
             MARKETPLACE HEADER
        ========================================================== --}}
        <section class="border-b border-[#f0e9e3] bg-[#fffaf7]">
            <div class="mx-auto max-w-[1500px] px-4 py-7 sm:px-6 lg:px-8">

                <div class="flex flex-col gap-5 lg:flex-row lg:items-end lg:justify-between">

                    <div>
                        <div class="inline-flex items-center gap-2 rounded-full bg-[#fff1e9] px-3 py-1.5 text-[11px] font-extrabold uppercase tracking-[0.14em] text-[#ff7048]">
                            <span class="h-1.5 w-1.5 rounded-full bg-[#ff7048]"></span>
                            Surplus marketplace
                        </div>

                        <h1 class="mt-3 text-3xl font-black tracking-tight text-slate-950 sm:text-4xl">
                            Find good food,
                            <span class="text-[#ff7048]">not food waste.</span>
                        </h1>

                        <p class="mt-2 max-w-2xl text-sm leading-6 text-slate-500 sm:text-base">
                            Discover available surplus food from participating restaurants
                            and request what you need before it goes to waste.
                        </p>
                    </div>

                    <a
                        href="{{ route('food-requests.my-requests') }}"
                        class="inline-flex w-fit items-center gap-2 rounded-2xl border border-[#f0e9e3] bg-white px-4 py-3 text-sm font-extrabold text-slate-700 shadow-sm transition hover:border-[#ffd7c8] hover:text-[#ff7048]"
                    >
                        <span class="flex h-8 w-8 items-center justify-center rounded-xl bg-[#fff5eb] text-[#ff7048]">
                            📦
                        </span>

                        My requests

                        <span class="text-slate-400">→</span>
                    </a>

                </div>

            </div>
        </section>


        {{-- =========================================================
             SEARCH / FILTER TOOLBAR
        ========================================================== --}}
        <section
            id="food-listings"
            class="scroll-mt-24 border-b border-[#f0e9e3] bg-white"
        >
            <div class="mx-auto max-w-[1500px] px-4 py-5 sm:px-6 lg:px-8">

                <form method="GET" action="{{ route('food-listings.browse') }}">

                    <div class="grid gap-3 lg:grid-cols-[1.8fr_1fr_1fr_auto]">

                        {{-- Search --}}
                        <div class="relative">

                            <label for="search" class="sr-only">
                                Search food
                            </label>

                            <span class="pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="m21 21-4.35-4.35m1.35-5.65a7 7 0 11-14 0 7 7 0 0114 0z"
                                    />
                                </svg>
                            </span>

                            <input
                                id="search"
                                type="text"
                                name="search"
                                value="{{ $search }}"
                                placeholder="Search meals, dishes or restaurants..."
                                class="h-12 w-full rounded-2xl border-0 bg-[#fffaf7] pl-11 pr-4 text-sm font-semibold text-slate-800 ring-1 ring-[#f0e9e3] transition placeholder:text-slate-400 focus:bg-white focus:ring-2 focus:ring-[#ff7048]"
                            >

                        </div>


                        {{-- Food Type --}}
                        <div>

                            <label for="food_type" class="sr-only">
                                Food type
                            </label>

                            <select
                                id="food_type"
                                name="food_type"
                                class="h-12 w-full rounded-2xl border-0 bg-[#fffaf7] px-4 text-sm font-bold text-slate-700 ring-1 ring-[#f0e9e3] transition focus:bg-white focus:ring-2 focus:ring-[#ff7048]"
                            >
                                <option value="">All food types</option>

                                @foreach ($foodTypes as $type)
                                    <option
                                        value="{{ $type }}"
                                        @selected($foodType === $type)
                                    >
                                        {{ $type }}
                                    </option>
                                @endforeach
                            </select>

                        </div>


                        {{-- City --}}
                        <div>

                            <label for="city" class="sr-only">
                                Location
                            </label>

                            <select
                                id="city"
                                name="city"
                                class="h-12 w-full rounded-2xl border-0 bg-[#fffaf7] px-4 text-sm font-bold text-slate-700 ring-1 ring-[#f0e9e3] transition focus:bg-white focus:ring-2 focus:ring-[#ff7048]"
                            >
                                <option value="">All locations</option>

                                @foreach ($cities as $availableCity)
                                    <option
                                        value="{{ $availableCity }}"
                                        @selected($city === $availableCity)
                                    >
                                        {{ $availableCity }}
                                    </option>
                                @endforeach
                            </select>

                        </div>


                        {{-- Search Button --}}
                        <button
                            type="submit"
                            class="h-12 rounded-2xl bg-[#ff7048] px-7 text-sm font-black text-white shadow-sm transition duration-300 hover:bg-[#f45d35] hover:shadow-md"
                        >
                            Search
                        </button>

                    </div>


                    {{-- Active Filters --}}
                    @if ($search || $foodType || $city)

                        <div class="mt-4 flex flex-wrap items-center gap-2">

                            <span class="mr-1 text-xs font-bold text-slate-400">
                                Filters:
                            </span>

                            @if ($search)
                                <span class="inline-flex items-center gap-1.5 rounded-full bg-[#fff1e9] px-3 py-1.5 text-xs font-extrabold text-[#e85e38]">
                                    Search: {{ $search }}
                                </span>
                            @endif

                            @if ($foodType)
                                <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-3 py-1.5 text-xs font-extrabold text-emerald-700">
                                    {{ $foodType }}
                                </span>
                            @endif

                            @if ($city)
                                <span class="inline-flex items-center gap-1.5 rounded-full bg-sky-50 px-3 py-1.5 text-xs font-extrabold text-sky-700">
                                    {{ $city }}
                                </span>
                            @endif

                            <a
                                href="{{ route('food-listings.browse') }}"
                                class="rounded-full px-3 py-1.5 text-xs font-black text-slate-500 transition hover:bg-slate-100 hover:text-slate-800"
                            >
                                Clear all
                            </a>

                        </div>

                    @endif

                </form>

            </div>
        </section>


        {{-- =========================================================
             MAIN MARKETPLACE
        ========================================================== --}}
        <main class="mx-auto max-w-[1500px] px-4 py-8 sm:px-6 lg:px-8">

            {{-- =====================================================
                 MARKETPLACE HEADING
            ====================================================== --}}
            <section>

                <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">

                    <div>

                        <div class="flex items-center gap-2">
                            <span class="h-2 w-2 rounded-full bg-emerald-500"></span>

                            <p class="text-xs font-extrabold uppercase tracking-[0.16em] text-emerald-600">
                                Live availability
                            </p>
                        </div>

                        <h2 class="mt-2 text-2xl font-black tracking-tight text-slate-950 sm:text-3xl">
                            Available Surplus Near You
                        </h2>

                        <p class="mt-1 text-sm text-slate-500">
                            Choose from food that is currently available to request.
                        </p>

                    </div>


                    @if ($foodListings->isNotEmpty())

                        <div class="inline-flex w-fit items-center gap-2 rounded-full bg-white px-3.5 py-2 text-xs font-extrabold text-slate-500 ring-1 ring-[#f0e9e3]">
                            <span class="text-emerald-500">●</span>

                            {{ $foodListings->count() }}
                            listing{{ $foodListings->count() === 1 ? '' : 's' }}
                        </div>

                    @endif

                </div>


                {{-- =================================================
                     EMPTY STATE
                ================================================== --}}
                @if ($foodListings->isEmpty())

                    <div class="mt-7 rounded-[2rem] border border-[#f0e9e3] bg-white px-6 py-16 text-center shadow-sm">

                        <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-3xl bg-[#fff5eb] text-4xl">
                            🍽️
                        </div>

                        <p class="mt-5 text-xs font-black uppercase tracking-[0.16em] text-[#ff7048]">
                            No matches
                        </p>

                        <h3 class="mt-2 text-2xl font-black text-slate-950">
                            No surplus food found
                        </h3>

                        <p class="mx-auto mt-2 max-w-md text-sm leading-6 text-slate-500">
                            Try changing your search or removing one of the filters
                            to see more available listings.
                        </p>

                        @if ($search || $foodType || $city)

                            <a
                                href="{{ route('food-listings.browse') }}"
                                class="mt-6 inline-flex items-center gap-2 rounded-2xl bg-[#ff7048] px-5 py-3 text-sm font-black text-white shadow-sm transition hover:bg-[#f45d35]"
                            >
                                View all food
                                <span>→</span>
                            </a>

                        @endif

                    </div>

                @else

                    {{-- =================================================
                         FOOD LISTING GRID
                    ================================================== --}}
                    <div class="mt-7 grid gap-5 sm:grid-cols-2 xl:grid-cols-3">

                        @foreach ($foodListings as $foodListing)

                            @php
                                $foodTypeValue = strtolower(trim($foodListing->food_type ?? ''));

                                $foodEmoji = match ($foodTypeValue) {
                                    'rice', 'rice dishes' => '🍚',
                                    'pasta' => '🍝',
                                    'bread', 'bakery' => '🥐',
                                    'dessert', 'desserts' => '🍰',
                                    'beverage', 'drinks' => '🥤',
                                    'fruit', 'fruits' => '🍓',
                                    'vegetarian', 'vegan' => '🥗',
                                    'chicken' => '🍗',
                                    'seafood' => '🐟',
                                    default => '🍲',
                                };

                                $foodBackground = match ($foodTypeValue) {
                                    'rice', 'rice dishes' => 'from-amber-100 via-orange-50 to-yellow-50',
                                    'pasta' => 'from-orange-100 via-amber-50 to-red-50',
                                    'bread', 'bakery' => 'from-yellow-100 via-orange-50 to-amber-50',
                                    'dessert', 'desserts' => 'from-pink-100 via-orange-50 to-amber-50',
                                    'beverage', 'drinks' => 'from-sky-100 via-cyan-50 to-emerald-50',
                                    'fruit', 'fruits' => 'from-rose-100 via-orange-50 to-lime-50',
                                    'vegetarian', 'vegan' => 'from-emerald-100 via-lime-50 to-yellow-50',
                                    'chicken' => 'from-orange-100 via-amber-50 to-yellow-50',
                                    'seafood' => 'from-cyan-100 via-sky-50 to-blue-50',
                                    default => 'from-orange-100 via-amber-50 to-emerald-50',
                                };

                                $hoursRemaining = now()->diffInHours(
                                    $foodListing->available_until,
                                    false
                                );

                                $isEndingSoon = $hoursRemaining >= 0 && $hoursRemaining <= 6;
                            @endphp


                            <article
                                class="group overflow-hidden rounded-[1.8rem] border border-[#f0e9e3] bg-white shadow-sm transition duration-300 hover:-translate-y-1.5 hover:border-[#ffd7c8] hover:shadow-xl hover:shadow-slate-200/70"
                            >

                                {{-- =================================================
                                     FOOD VISUAL
                                ================================================== --}}
                                <div class="relative h-52 overflow-hidden bg-gradient-to-br {{ $foodBackground }}">

                                    <div class="absolute inset-0 bg-white/10"></div>

                                    <div class="absolute -right-10 -top-10 h-32 w-32 rounded-full bg-white/30"></div>

                                    <div class="absolute -bottom-12 -left-8 h-36 w-36 rounded-full bg-white/20"></div>


                                    {{-- Food icon --}}
                                    <div class="absolute inset-0 flex items-center justify-center">

                                        <div class="flex h-32 w-32 items-center justify-center rounded-[2rem] bg-white/45 shadow-lg shadow-orange-900/5 backdrop-blur-sm transition duration-500 group-hover:scale-110">

                                            <span class="text-7xl drop-shadow-md">
                                                {{ $foodEmoji }}
                                            </span>

                                        </div>

                                    </div>


                                    {{-- Food type --}}
                                    <div class="absolute left-4 top-4 rounded-full bg-white/95 px-3 py-1.5 text-[10px] font-black text-[#e85e38] shadow-sm">
                                        {{ $foodListing->food_type ?: 'Food' }}
                                    </div>


                                    {{-- Availability --}}
                                    <div class="absolute right-4 top-4">

                                        @if ($isEndingSoon)

                                            <span class="inline-flex items-center gap-1.5 rounded-full bg-amber-500 px-3 py-1.5 text-[10px] font-black text-white shadow-sm">
                                                <span class="h-1.5 w-1.5 rounded-full bg-white"></span>
                                                Ending soon
                                            </span>

                                        @else

                                            <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-500 px-3 py-1.5 text-[10px] font-black text-white shadow-sm">
                                                <span class="h-1.5 w-1.5 rounded-full bg-white"></span>
                                                Available
                                            </span>

                                        @endif

                                    </div>

                                </div>


                                {{-- =================================================
                                     CARD BODY
                                ================================================== --}}
                                <div class="p-5">

                                    {{-- Title / Restaurant / Price --}}
                                    <div class="flex items-start justify-between gap-4">

                                        <div class="min-w-0">

                                            <h3 class="line-clamp-2 text-lg font-black leading-6 text-slate-950">
                                                {{ $foodListing->title }}
                                            </h3>

                                            <p class="mt-1.5 flex items-center gap-1.5 text-xs font-bold text-slate-500">

                                                <span class="text-[#ff7048]">
                                                    ●
                                                </span>

                                                <span class="truncate">
                                                    {{ $foodListing->restaurant->business_name }}
                                                </span>

                                            </p>

                                        </div>


                                        <div class="shrink-0 text-right">

                                            <p class="text-[9px] font-extrabold uppercase tracking-wider text-slate-400">
                                                Price
                                            </p>

                                            <p class="mt-0.5 text-sm font-black text-slate-950">
                                                Rs. {{ number_format((float) $foodListing->price, 2) }}
                                            </p>

                                        </div>

                                    </div>


                                    {{-- Description --}}
                                    @if ($foodListing->description)

                                        <p class="mt-3 line-clamp-2 text-sm leading-6 text-slate-500">
                                            {{ $foodListing->description }}
                                        </p>

                                    @endif


                                    {{-- Metadata --}}
                                    <div class="mt-5 grid grid-cols-2 gap-2">

                                        <div class="rounded-2xl bg-[#fffaf7] p-3 ring-1 ring-[#f0e9e3]">

                                            <p class="text-[9px] font-extrabold uppercase tracking-wider text-slate-400">
                                                Quantity
                                            </p>

                                            <p class="mt-1 text-xs font-black text-slate-800">
                                                {{ $foodListing->quantity }}
                                                {{ $foodListing->quantity_unit }}
                                            </p>

                                        </div>


                                        <div class="rounded-2xl bg-[#fffaf7] p-3 ring-1 ring-[#f0e9e3]">

                                            <p class="text-[9px] font-extrabold uppercase tracking-wider text-slate-400">
                                                Location
                                            </p>

                                            <p class="mt-1 truncate text-xs font-black text-slate-800">
                                                {{ $foodListing->restaurant->city ?: 'Available' }}
                                            </p>

                                        </div>

                                    </div>


                                    {{-- Availability --}}
                                    <div class="mt-2 flex items-center gap-2 rounded-2xl bg-slate-50 px-3 py-2.5">

                                        <span class="text-sm">
                                            ⏰
                                        </span>

                                        <div class="min-w-0">

                                            <p class="text-[9px] font-extrabold uppercase tracking-wider text-slate-400">
                                                Available until
                                            </p>

                                            <p class="mt-0.5 text-xs font-black text-slate-700">
                                                {{ $foodListing->available_until->format('d M, h:i A') }}
                                            </p>

                                        </div>

                                    </div>


                                    {{-- CTA --}}
                                    <a
                                        href="{{ route('food-requests.create', $foodListing->id) }}"
                                        class="mt-4 flex w-full items-center justify-center gap-2 rounded-2xl bg-[#ff7048] px-4 py-3.5 text-sm font-black text-white shadow-sm transition duration-300 hover:bg-[#f45d35] hover:shadow-md"
                                    >
                                        Request this food

                                        <span class="transition duration-300 group-hover:translate-x-1">
                                            →
                                        </span>
                                    </a>

                                </div>

                            </article>

                        @endforeach

                    </div>

                @endif

            </section>


            {{-- =========================================================
                 HOW IT WORKS
            ========================================================== --}}
            <section class="mt-16 border-t border-[#f0e9e3] pt-12">

                <div class="max-w-2xl">

                    <p class="text-xs font-extrabold uppercase tracking-[0.16em] text-[#ff7048]">
                        Simple process
                    </p>

                    <h2 class="mt-2 text-2xl font-black tracking-tight text-slate-950 sm:text-3xl">
                        From surplus to something meaningful.
                    </h2>

                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        SurplusLink keeps the process simple for people who want to
                        access good food and help reduce unnecessary waste.
                    </p>

                </div>


                <div class="mt-7 grid gap-4 md:grid-cols-3">

                    {{-- Step 1 --}}
                    <div class="rounded-[1.6rem] border border-[#f0e9e3] bg-white p-5 shadow-sm">

                        <div class="flex items-center gap-4">

                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-[#fff5eb] text-lg">
                                🔎
                            </div>

                            <div>
                                <p class="text-[10px] font-black uppercase tracking-wider text-[#ff7048]">
                                    Step 01
                                </p>

                                <h3 class="mt-1 text-sm font-black text-slate-900">
                                    Discover
                                </h3>
                            </div>

                        </div>

                        <p class="mt-4 text-sm leading-6 text-slate-500">
                            Browse available surplus food from participating restaurants.
                        </p>

                    </div>


                    {{-- Step 2 --}}
                    <div class="rounded-[1.6rem] border border-[#f0e9e3] bg-white p-5 shadow-sm">

                        <div class="flex items-center gap-4">

                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-emerald-50 text-lg">
                                📝
                            </div>

                            <div>
                                <p class="text-[10px] font-black uppercase tracking-wider text-emerald-600">
                                    Step 02
                                </p>

                                <h3 class="mt-1 text-sm font-black text-slate-900">
                                    Request
                                </h3>
                            </div>

                        </div>

                        <p class="mt-4 text-sm leading-6 text-slate-500">
                            Select the quantity you need and send your request.
                        </p>

                    </div>


                    {{-- Step 3 --}}
                    <div class="rounded-[1.6rem] border border-[#f0e9e3] bg-white p-5 shadow-sm">

                        <div class="flex items-center gap-4">

                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-amber-50 text-lg">
                                🌱
                            </div>

                            <div>
                                <p class="text-[10px] font-black uppercase tracking-wider text-amber-600">
                                    Step 03
                                </p>

                                <h3 class="mt-1 text-sm font-black text-slate-900">
                                    Make an impact
                                </h3>
                            </div>

                        </div>

                        <p class="mt-4 text-sm leading-6 text-slate-500">
                            Help give good surplus food a useful destination.
                        </p>

                    </div>

                </div>

            </section>


            {{-- =========================================================
                 IMPACT FOOTER
            ========================================================== --}}
            <section class="mt-10">

                <div class="relative overflow-hidden rounded-[2rem] bg-emerald-900 px-6 py-8 text-white shadow-xl shadow-emerald-100 sm:px-8">

                    <div class="absolute -right-16 -top-20 h-48 w-48 rounded-full bg-emerald-700/40 blur-2xl"></div>

                    <div class="absolute -bottom-20 left-1/3 h-48 w-48 rounded-full bg-emerald-800/50 blur-2xl"></div>

                    <div class="relative flex flex-col gap-6 md:flex-row md:items-center md:justify-between">

                        <div class="max-w-2xl">

                            <p class="text-[10px] font-black uppercase tracking-[0.18em] text-emerald-300">
                                SurplusLink Lanka
                            </p>

                            <h3 class="mt-2 text-2xl font-black leading-tight sm:text-3xl">
                                Good food can still do good. 🌱
                            </h3>

                            <p class="mt-3 text-sm leading-6 text-emerald-100">
                                Discover available surplus, make a request and help keep
                                usable food in circulation.
                            </p>

                        </div>

                        <a
                            href="#food-listings"
                            class="inline-flex w-fit shrink-0 items-center gap-2 rounded-2xl bg-white px-5 py-3 text-sm font-black text-emerald-900 transition hover:bg-emerald-50"
                        >
                            Browse available food
                            <span>↑</span>
                        </a>

                    </div>

                </div>

            </section>

        </main>

    </div>

</x-app-layout>
