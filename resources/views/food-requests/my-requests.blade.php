<x-app-layout>

    <div class="min-h-screen bg-[#fffaf5] text-slate-800">

        {{-- =========================================================
             HERO
        ========================================================== --}}
        <section class="relative overflow-hidden">

            <div class="absolute -right-28 -top-24 h-80 w-80 rounded-full bg-orange-100/70 blur-3xl"></div>
            <div class="absolute -left-28 top-40 h-72 w-72 rounded-full bg-emerald-100/50 blur-3xl"></div>

            <div class="relative mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8 lg:py-10">

                <div class="grid items-center gap-8 lg:grid-cols-[1.15fr_.85fr]">

                    {{-- Hero Content --}}
                    <div class="max-w-2xl">

                        <div class="inline-flex items-center gap-2 rounded-full bg-white px-4 py-2 text-xs font-black uppercase tracking-wider text-orange-600 shadow-sm ring-1 ring-orange-100">

                            <span class="flex h-7 w-7 items-center justify-center rounded-full bg-orange-50 text-sm">
                                📦
                            </span>

                            Request tracker

                        </div>


                        <h1 class="mt-5 text-4xl font-black tracking-tight text-slate-950 sm:text-5xl lg:text-[3.6rem] lg:leading-[1.05]">

                            Follow your food
                            <span class="text-orange-500">
                                from request to impact.
                            </span>

                        </h1>


                        <p class="mt-5 max-w-xl text-base leading-7 text-slate-600 sm:text-lg">
                            Track every request submitted by your organization and
                            see how surplus food moves through the SurplusLink network.
                        </p>


                        <div class="mt-7 flex flex-wrap gap-3">

                            <a
                                href="{{ route('food-listings.browse') }}"
                                class="group inline-flex items-center gap-2 rounded-2xl bg-orange-500 px-5 py-3.5 text-sm font-black text-white shadow-lg shadow-orange-200 transition duration-300 hover:-translate-y-0.5 hover:bg-orange-600 hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-orange-300 focus:ring-offset-2"
                            >
                                Browse available food

                                <span class="transition duration-300 group-hover:translate-x-1">
                                    →
                                </span>

                            </a>


                            <div class="inline-flex items-center gap-2 rounded-2xl bg-white px-5 py-3.5 text-sm font-bold text-slate-600 shadow-sm ring-1 ring-slate-200">

                                <span class="flex h-7 w-7 items-center justify-center rounded-xl bg-emerald-50 text-sm">
                                    🌱
                                </span>

                                Community impact

                            </div>

                        </div>

                    </div>


                    {{-- Hero Visual --}}
                    <div class="relative mx-auto hidden w-full max-w-md lg:block">

                        <div class="absolute -inset-6 rounded-[3rem] bg-gradient-to-br from-orange-100 via-white to-emerald-100 opacity-80 blur-2xl"></div>


                        <div class="relative overflow-hidden rounded-[2.25rem] bg-white p-3 shadow-2xl shadow-slate-200/80 ring-1 ring-slate-100">

                            <div class="relative overflow-hidden rounded-[1.8rem] bg-gradient-to-br from-orange-100 via-amber-50 to-emerald-100">

                                <img
                                    src="https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=1000&q=85"
                                    alt="Fresh food prepared for community redistribution"
                                    class="h-[300px] w-full object-cover"
                                >

                                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/65 via-transparent to-transparent"></div>


                                <div class="absolute bottom-0 left-0 right-0 p-5">

                                    <div class="rounded-2xl bg-white/95 p-4 shadow-xl backdrop-blur">

                                        <div class="flex items-center justify-between gap-4">

                                            <div>

                                                <p class="text-[10px] font-black uppercase tracking-[0.16em] text-orange-500">
                                                    Your journey
                                                </p>

                                                <p class="mt-1 text-lg font-black text-slate-950">
                                                    Request → Impact
                                                </p>

                                                <p class="mt-1 text-xs font-medium text-slate-500">
                                                    Every approved request helps reduce food waste.
                                                </p>

                                            </div>


                                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-emerald-50 text-xl ring-1 ring-emerald-100">
                                                🤝
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


        {{-- =========================================================
             STATUS GUIDE
        ========================================================== --}}
        <section class="mx-auto max-w-7xl px-4 pb-8 sm:px-6 lg:px-8">

            <div class="grid grid-cols-2 gap-3 md:grid-cols-4">

                {{-- Pending --}}
                <div class="group rounded-[1.4rem] bg-white p-4 shadow-sm ring-1 ring-slate-100 transition duration-300 hover:-translate-y-1 hover:shadow-lg">

                    <div class="flex items-center gap-3">

                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-amber-50 text-lg ring-1 ring-amber-100">
                            ⏳
                        </div>

                        <div class="min-w-0">

                            <p class="text-sm font-black text-slate-900">
                                Pending
                            </p>

                            <p class="mt-0.5 text-[11px] font-medium text-slate-400">
                                Awaiting approval
                            </p>

                        </div>

                    </div>

                </div>


                {{-- Approved --}}
                <div class="group rounded-[1.4rem] bg-white p-4 shadow-sm ring-1 ring-slate-100 transition duration-300 hover:-translate-y-1 hover:shadow-lg">

                    <div class="flex items-center gap-3">

                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-sky-50 text-lg ring-1 ring-sky-100">
                            ✓
                        </div>

                        <div class="min-w-0">

                            <p class="text-sm font-black text-slate-900">
                                Approved
                            </p>

                            <p class="mt-0.5 text-[11px] font-medium text-slate-400">
                                Request accepted
                            </p>

                        </div>

                    </div>

                </div>


                {{-- In Transit --}}
                <div class="group rounded-[1.4rem] bg-white p-4 shadow-sm ring-1 ring-slate-100 transition duration-300 hover:-translate-y-1 hover:shadow-lg">

                    <div class="flex items-center gap-3">

                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-violet-50 text-lg ring-1 ring-violet-100">
                            🚚
                        </div>

                        <div class="min-w-0">

                            <p class="text-sm font-black text-slate-900">
                                In Transit
                            </p>

                            <p class="mt-0.5 text-[11px] font-medium text-slate-400">
                                Food is on the way
                            </p>

                        </div>

                    </div>

                </div>


                {{-- Delivered --}}
                <div class="group rounded-[1.4rem] bg-white p-4 shadow-sm ring-1 ring-slate-100 transition duration-300 hover:-translate-y-1 hover:shadow-lg">

                    <div class="flex items-center gap-3">

                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-emerald-50 text-lg ring-1 ring-emerald-100">
                            🤝
                        </div>

                        <div class="min-w-0">

                            <p class="text-sm font-black text-slate-900">
                                Delivered
                            </p>

                            <p class="mt-0.5 text-[11px] font-medium text-slate-400">
                                Journey completed
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        {{-- =========================================================
             REQUEST LIST
        ========================================================== --}}
        <section class="mx-auto max-w-7xl px-4 pb-12 sm:px-6 lg:px-8">

            <div class="mb-6 flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">

                <div>

                    <div class="flex items-center gap-2">

                        <span class="flex h-8 w-8 items-center justify-center rounded-xl bg-orange-50 text-sm ring-1 ring-orange-100">
                            🍱
                        </span>

                        <p class="text-xs font-black uppercase tracking-[0.18em] text-orange-500">
                            Request activity
                        </p>

                    </div>


                    <h2 class="mt-2 text-2xl font-black tracking-tight text-slate-950 sm:text-3xl">
                        Your submitted requests
                    </h2>


                    <p class="mt-1 text-sm leading-6 text-slate-500">
                        Keep an eye on the latest progress of your food requests.
                    </p>

                </div>


                @if ($foodRequests->count() > 0)

                    <div class="inline-flex w-fit items-center gap-2 rounded-full bg-white px-4 py-2 text-xs font-black text-slate-600 shadow-sm ring-1 ring-slate-200">

                        <span class="flex h-6 w-6 items-center justify-center rounded-full bg-orange-50 text-orange-600">
                            {{ $foodRequests->count() }}
                        </span>

                        {{ $foodRequests->count() === 1 ? 'Request' : 'Requests' }}

                    </div>

                @endif

            </div>


            @if ($foodRequests->count() > 0)

                <div class="space-y-5">

                    @foreach ($foodRequests as $foodRequest)

                        @php

                            $requestStatus = strtolower(
                                $foodRequest->status ?? ''
                            );

                            $deliveryStatus = $foodRequest->deliveryTask
                                ? strtolower($foodRequest->deliveryTask->status ?? '')
                                : null;


                            if ($requestStatus === 'rejected') {

                                $effectiveStatus = 'rejected';

                            } elseif ($deliveryStatus === 'delivered') {

                                $effectiveStatus = 'delivered';

                            } elseif ($deliveryStatus === 'picked_up') {

                                $effectiveStatus = 'in_transit';

                            } elseif ($deliveryStatus === 'assigned') {

                                $effectiveStatus = 'approved';

                            } else {

                                $effectiveStatus = $requestStatus;

                            }


                            $statusClasses = match ($effectiveStatus) {

                                'pending' =>
                                    'bg-amber-50 text-amber-700 ring-1 ring-amber-100',

                                'approved' =>
                                    'bg-sky-50 text-sky-700 ring-1 ring-sky-100',

                                'in_transit' =>
                                    'bg-violet-50 text-violet-700 ring-1 ring-violet-100',

                                'delivered', 'completed' =>
                                    'bg-emerald-50 text-emerald-700 ring-1 ring-emerald-100',

                                'rejected' =>
                                    'bg-rose-50 text-rose-700 ring-1 ring-rose-100',

                                default =>
                                    'bg-slate-50 text-slate-700 ring-1 ring-slate-100',
                            };


                            $statusIcon = match ($effectiveStatus) {

                                'pending' => '⏳',

                                'approved' => '✓',

                                'in_transit' => '🚚',

                                'delivered', 'completed' => '✓',

                                'rejected' => '✕',

                                default => '•',
                            };


                            $statusLabel = match ($effectiveStatus) {

                                'in_transit' =>
                                    'In Transit',

                                'delivered', 'completed' =>
                                    'Delivered',

                                default =>
                                    ucfirst(
                                        str_replace(
                                            '_',
                                            ' ',
                                            $effectiveStatus
                                        )
                                    ),
                            };


                            $progressStep = match ($effectiveStatus) {

                                'pending' => 1,

                                'approved' => 2,

                                'in_transit' => 3,

                                'delivered', 'completed' => 4,

                                'rejected' => 0,

                                default => 1,
                            };


                            $foodEmoji = match (
                                strtolower($foodRequest->foodListing->food_type ?? '')
                            ) {

                                'rice',
                                'rice dishes' => '🍚',

                                'pasta' => '🍝',

                                'bread',
                                'bakery' => '🥐',

                                'dessert',
                                'desserts' => '🍰',

                                'beverage',
                                'drinks' => '🥤',

                                'fruit',
                                'fruits' => '🍓',

                                'vegetarian',
                                'vegan' => '🥗',

                                'chicken' => '🍗',

                                'seafood' => '🐟',

                                default => '🍲',
                            };


                            $foodBackground = match (
                                strtolower($foodRequest->foodListing->food_type ?? '')
                            ) {

                                'rice',
                                'rice dishes' =>
                                    'from-amber-100 via-orange-50 to-yellow-50',

                                'pasta' =>
                                    'from-orange-100 via-amber-50 to-red-50',

                                'bread',
                                'bakery' =>
                                    'from-yellow-100 via-orange-50 to-amber-50',

                                'dessert',
                                'desserts' =>
                                    'from-pink-100 via-orange-50 to-amber-50',

                                'beverage',
                                'drinks' =>
                                    'from-sky-100 via-cyan-50 to-emerald-50',

                                'fruit',
                                'fruits' =>
                                    'from-rose-100 via-orange-50 to-lime-50',

                                'vegetarian',
                                'vegan' =>
                                    'from-emerald-100 via-lime-50 to-yellow-50',

                                'chicken' =>
                                    'from-orange-100 via-amber-50 to-yellow-50',

                                'seafood' =>
                                    'from-cyan-100 via-sky-50 to-blue-50',

                                default =>
                                    'from-orange-100 via-amber-50 to-emerald-50',
                            };

                        @endphp


                        <article class="group overflow-hidden rounded-[2rem] bg-white shadow-sm ring-1 ring-slate-100 transition duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-slate-200/70">

                            {{-- REQUEST TOP --}}
                            <div class="p-5 sm:p-7">

                                <div class="flex flex-col gap-5 sm:flex-row sm:items-start sm:justify-between">

                                    <div class="flex min-w-0 gap-4">

                                        {{-- Food Visual --}}
                                        <div class="relative flex h-20 w-20 shrink-0 items-center justify-center overflow-hidden rounded-[1.5rem] bg-gradient-to-br {{ $foodBackground }} shadow-sm ring-1 ring-white">

                                            <div class="absolute -right-3 -top-3 h-10 w-10 rounded-full bg-white/30"></div>

                                            <div class="absolute -bottom-4 -left-3 h-12 w-12 rounded-full bg-white/20"></div>

                                            <span class="relative text-4xl transition duration-500 group-hover:scale-110">
                                                {{ $foodEmoji }}
                                            </span>

                                        </div>


                                        {{-- Food Information --}}
                                        <div class="min-w-0 pt-1">

                                            <p class="text-[10px] font-black uppercase tracking-[0.16em] text-orange-500">
                                                Food request
                                            </p>


                                            <h3 class="mt-1 line-clamp-2 text-xl font-black leading-6 text-slate-950">
                                                {{ $foodRequest->foodListing->title }}
                                            </h3>


                                            <div class="mt-2 flex flex-wrap items-center gap-x-3 gap-y-1 text-xs font-semibold text-slate-500">

                                                <span class="inline-flex items-center gap-1.5">
                                                    🏪
                                                    {{ $foodRequest->foodListing->restaurant->business_name }}
                                                </span>


                                                <span class="hidden text-slate-300 sm:inline">
                                                    •
                                                </span>


                                                <span class="inline-flex items-center gap-1.5">
                                                    📦
                                                    {{ $foodRequest->quantity }}
                                                    {{ $foodRequest->foodListing->quantity_unit }}
                                                </span>

                                            </div>

                                        </div>

                                    </div>


                                    {{-- STATUS --}}
                                    <span class="inline-flex w-fit shrink-0 items-center gap-2 rounded-full px-3.5 py-2 text-xs font-black {{ $statusClasses }}">

                                        <span>
                                            {{ $statusIcon }}
                                        </span>

                                        {{ $statusLabel }}

                                    </span>

                                </div>


                                {{-- PROGRESS --}}
                                @if ($effectiveStatus !== 'rejected')

                                    <div class="mt-8 rounded-[1.5rem] bg-[#fffaf5] px-4 py-5 sm:px-6">

                                        <div class="mb-5 flex items-center justify-between">

                                            <div>

                                                <p class="text-[10px] font-black uppercase tracking-[0.16em] text-slate-400">
                                                    Request progress
                                                </p>

                                                <p class="mt-1 text-sm font-black text-slate-800">

                                                    @if ($effectiveStatus === 'pending')

                                                        Waiting for restaurant approval

                                                    @elseif ($effectiveStatus === 'approved')

                                                        Request approved and preparing for delivery

                                                    @elseif ($effectiveStatus === 'in_transit')

                                                        Your food is currently on the way

                                                    @elseif (in_array($effectiveStatus, ['delivered', 'completed']))

                                                        Delivery completed successfully

                                                    @endif

                                                </p>

                                            </div>


                                            <span class="hidden rounded-full bg-white px-3 py-1.5 text-[10px] font-black text-orange-600 ring-1 ring-orange-100 sm:inline-flex">

                                                Step {{ $progressStep }} of 4

                                            </span>

                                        </div>


                                        <div class="relative">

                                            {{-- Connector --}}
                                            <div class="absolute left-[12.5%] right-[12.5%] top-5 hidden h-1 rounded-full bg-slate-200 sm:block"></div>


                                            <div
                                                class="absolute left-[12.5%] top-5 hidden h-1 rounded-full bg-orange-400 transition-all duration-500 sm:block"
                                                style="width: {{ $progressStep <= 1 ? 0 : (($progressStep - 1) / 3) * 75 }}%;"
                                            ></div>


                                            <div class="relative grid grid-cols-4 gap-2">

                                                {{-- Requested --}}
                                                <div class="text-center">

                                                    <div class="mx-auto flex h-10 w-10 items-center justify-center rounded-full border-4 border-white text-xs font-black shadow-sm
                                                        {{ $progressStep >= 1
                                                            ? 'bg-orange-500 text-white'
                                                            : 'bg-slate-100 text-slate-400' }}">

                                                        @if ($progressStep > 1)
                                                            ✓
                                                        @else
                                                            1
                                                        @endif

                                                    </div>


                                                    <p class="mt-2 text-[10px] font-black sm:text-xs
                                                        {{ $progressStep >= 1
                                                            ? 'text-orange-600'
                                                            : 'text-slate-400' }}">
                                                        Requested
                                                    </p>

                                                </div>


                                                {{-- Approved --}}
                                                <div class="text-center">

                                                    <div class="mx-auto flex h-10 w-10 items-center justify-center rounded-full border-4 border-white text-xs font-black shadow-sm
                                                        {{ $progressStep >= 2
                                                            ? 'bg-orange-500 text-white'
                                                            : 'bg-slate-100 text-slate-400' }}">

                                                        @if ($progressStep > 2)
                                                            ✓
                                                        @else
                                                            2
                                                        @endif

                                                    </div>


                                                    <p class="mt-2 text-[10px] font-black sm:text-xs
                                                        {{ $progressStep >= 2
                                                            ? 'text-orange-600'
                                                            : 'text-slate-400' }}">
                                                        Approved
                                                    </p>

                                                </div>


                                                {{-- In Transit --}}
                                                <div class="text-center">

                                                    <div class="mx-auto flex h-10 w-10 items-center justify-center rounded-full border-4 border-white text-xs font-black shadow-sm
                                                        {{ $progressStep >= 3
                                                            ? 'bg-orange-500 text-white'
                                                            : 'bg-slate-100 text-slate-400' }}">

                                                        @if ($progressStep > 3)
                                                            ✓
                                                        @else
                                                            3
                                                        @endif

                                                    </div>


                                                    <p class="mt-2 text-[10px] font-black sm:text-xs
                                                        {{ $progressStep >= 3
                                                            ? 'text-orange-600'
                                                            : 'text-slate-400' }}">
                                                        In Transit
                                                    </p>

                                                </div>


                                                {{-- Delivered --}}
                                                <div class="text-center">

                                                    <div class="mx-auto flex h-10 w-10 items-center justify-center rounded-full border-4 border-white text-xs font-black shadow-sm
                                                        {{ $progressStep >= 4
                                                            ? 'bg-emerald-500 text-white'
                                                            : 'bg-slate-100 text-slate-400' }}">

                                                        @if ($progressStep >= 4)
                                                            ✓
                                                        @else
                                                            4
                                                        @endif

                                                    </div>


                                                    <p class="mt-2 text-[10px] font-black sm:text-xs
                                                        {{ $progressStep >= 4
                                                            ? 'text-emerald-600'
                                                            : 'text-slate-400' }}">
                                                        Delivered
                                                    </p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                @else

                                    {{-- Rejected --}}
                                    <div class="mt-6 rounded-[1.5rem] border border-rose-100 bg-rose-50/70 p-4 sm:p-5">

                                        <div class="flex items-start gap-3">

                                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-rose-100 text-rose-600">
                                                ✕
                                            </div>


                                            <div>

                                                <p class="text-sm font-black text-rose-800">
                                                    Request not approved
                                                </p>

                                                <p class="mt-1 text-xs leading-5 text-rose-600">
                                                    This request was rejected by the restaurant.
                                                    You can continue exploring other available surplus food.
                                                </p>

                                            </div>

                                        </div>

                                    </div>

                                @endif


                                {{-- DETAILS --}}
                                <div class="mt-6 grid gap-3 sm:grid-cols-3">

                                    {{-- Requested --}}
                                    <div class="rounded-2xl bg-slate-50 px-4 py-3.5 ring-1 ring-slate-100 transition duration-300 group-hover:bg-orange-50/40">

                                        <p class="text-[10px] font-black uppercase tracking-[0.12em] text-slate-400">
                                            Requested
                                        </p>

                                        <p class="mt-1 text-sm font-bold text-slate-800">
                                            {{ $foodRequest->created_at->format('d M Y') }}
                                        </p>

                                        <p class="mt-0.5 text-[11px] font-medium text-slate-400">
                                            {{ $foodRequest->created_at->format('h:i A') }}
                                        </p>

                                    </div>


                                    {{-- Quantity --}}
                                    <div class="rounded-2xl bg-slate-50 px-4 py-3.5 ring-1 ring-slate-100 transition duration-300 group-hover:bg-orange-50/40">

                                        <p class="text-[10px] font-black uppercase tracking-[0.12em] text-slate-400">
                                            Quantity
                                        </p>

                                        <p class="mt-1 text-sm font-bold text-slate-800">
                                            {{ $foodRequest->quantity }}
                                            {{ $foodRequest->foodListing->quantity_unit }}
                                        </p>

                                        <p class="mt-0.5 text-[11px] font-medium text-slate-400">
                                            Requested amount
                                        </p>

                                    </div>


                                    {{-- Location --}}
                                    <div class="rounded-2xl bg-slate-50 px-4 py-3.5 ring-1 ring-slate-100 transition duration-300 group-hover:bg-orange-50/40">

                                        <p class="text-[10px] font-black uppercase tracking-[0.12em] text-slate-400">
                                            Pickup location
                                        </p>

                                        <p class="mt-1 truncate text-sm font-bold text-slate-800">
                                            {{ $foodRequest->foodListing->restaurant->city ?: 'Location available' }}
                                        </p>

                                        <p class="mt-0.5 text-[11px] font-medium text-slate-400">
                                            Restaurant
                                        </p>

                                    </div>

                                </div>


                                {{-- DELIVERY UPDATE --}}
                                @if ($foodRequest->deliveryTask)

                                    <div class="mt-4 overflow-hidden rounded-[1.5rem] border border-violet-100 bg-violet-50/60">

                                        <div class="p-4 sm:p-5">

                                            <div class="flex items-start gap-3">

                                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-violet-100 text-lg">
                                                    🚚
                                                </div>


                                                <div class="min-w-0 flex-1">

                                                    <div class="flex flex-wrap items-center justify-between gap-2">

                                                        <p class="text-[10px] font-black uppercase tracking-[0.14em] text-violet-600">
                                                            Delivery update
                                                        </p>


                                                        <span class="rounded-full bg-white px-3 py-1 text-[10px] font-black text-violet-700 ring-1 ring-violet-100">
                                                            {{ ucfirst(str_replace('_', ' ', $deliveryStatus ?? 'preparing')) }}
                                                        </span>

                                                    </div>


                                                    <p class="mt-1.5 text-sm font-bold leading-6 text-slate-800">

                                                        @if ($deliveryStatus === 'assigned')

                                                            A delivery partner has accepted this delivery task.

                                                        @elseif ($deliveryStatus === 'picked_up')

                                                            Your food has been picked up and is currently on the way.

                                                        @elseif ($deliveryStatus === 'delivered')

                                                            Your food has been successfully delivered.

                                                        @else

                                                            Your delivery task is being prepared.

                                                        @endif

                                                    </p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                @endif


                                {{-- MESSAGE --}}
                                @if ($foodRequest->message)

                                    <div class="mt-4 rounded-[1.3rem] border border-orange-100 bg-orange-50/50 px-4 py-3.5">

                                        <p class="text-[10px] font-black uppercase tracking-[0.14em] text-orange-600">
                                            Your message
                                        </p>

                                        <p class="mt-1 text-sm leading-6 text-slate-600">
                                            "{{ $foodRequest->message }}"
                                        </p>

                                    </div>

                                @endif

                            </div>

                        </article>

                    @endforeach

                </div>


            @else

                {{-- =================================================
                     EMPTY STATE
                ================================================== --}}
                <div class="overflow-hidden rounded-[2rem] bg-white shadow-sm ring-1 ring-slate-100">

                    <div class="relative px-6 py-16 text-center sm:px-10 sm:py-20">

                        <div class="absolute -right-20 -top-20 h-48 w-48 rounded-full bg-orange-100/60 blur-3xl"></div>

                        <div class="absolute -bottom-20 -left-20 h-48 w-48 rounded-full bg-emerald-100/60 blur-3xl"></div>


                        <div class="relative">

                            <div class="mx-auto flex h-24 w-24 items-center justify-center rounded-[2rem] bg-gradient-to-br from-orange-100 via-amber-50 to-emerald-100 text-5xl shadow-sm ring-1 ring-orange-100">
                                🍃
                            </div>


                            <p class="mt-6 text-xs font-black uppercase tracking-[0.18em] text-orange-500">
                                Your journey starts here
                            </p>


                            <h3 class="mt-2 text-2xl font-black tracking-tight text-slate-950 sm:text-3xl">
                                No food requests yet
                            </h3>


                            <p class="mx-auto mt-3 max-w-md text-sm leading-6 text-slate-500">
                                Explore available surplus food and submit your first
                                request to start moving good food towards your community.
                            </p>


                            <a
                                href="{{ route('food-listings.browse') }}"
                                class="group mt-7 inline-flex items-center gap-2 rounded-2xl bg-orange-500 px-6 py-3.5 text-sm font-black text-white shadow-lg shadow-orange-200 transition duration-300 hover:-translate-y-0.5 hover:bg-orange-600 hover:shadow-xl"
                            >
                                Discover surplus food

                                <span class="transition duration-300 group-hover:translate-x-1">
                                    →
                                </span>

                            </a>

                        </div>

                    </div>

                </div>

            @endif

        </section>


        {{-- =========================================================
             IMPACT STRIP
        ========================================================== --}}
        <section class="mx-auto max-w-7xl px-4 pb-10 sm:px-6 lg:px-8">

            <div class="relative overflow-hidden rounded-[2rem] bg-emerald-900 px-6 py-8 text-white shadow-xl shadow-emerald-100 sm:px-8">

                <div class="absolute -right-16 -top-20 h-48 w-48 rounded-full bg-emerald-700/40 blur-2xl"></div>

                <div class="absolute -bottom-20 left-1/3 h-48 w-48 rounded-full bg-emerald-800/50 blur-2xl"></div>


                <div class="relative grid gap-7 md:grid-cols-[1fr_auto] md:items-center">

                    <div>

                        <p class="text-xs font-black uppercase tracking-[0.18em] text-emerald-300">
                            Community impact
                        </p>


                        <h3 class="mt-2 max-w-2xl text-2xl font-black leading-tight sm:text-3xl">
                            Every successful request gives surplus food another destination. 🌱
                        </h3>


                        <p class="mt-3 max-w-2xl text-sm leading-6 text-emerald-100">
                            SurplusLink connects available food with organizations
                            that can turn it into meaningful community support.
                        </p>

                    </div>


                    <a
                        href="{{ route('food-listings.browse') }}"
                        class="group inline-flex w-fit items-center gap-2 rounded-2xl bg-white px-5 py-3.5 text-sm font-black text-emerald-800 shadow-lg transition duration-300 hover:-translate-y-0.5 hover:shadow-xl"
                    >
                        Find more food

                        <span class="transition duration-300 group-hover:translate-x-1">
                            →
                        </span>

                    </a>

                </div>

            </div>

        </section>

    </div>

</x-app-layout>
