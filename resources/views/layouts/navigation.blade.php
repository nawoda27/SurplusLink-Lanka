<nav
    x-data="{ open: false }"
    class="sticky top-0 z-50 border-b border-orange-100/80 bg-[#FFFAF5]/95 backdrop-blur-xl"
>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="flex min-h-16 items-center justify-between gap-4">

            {{-- =====================================================
                 BRAND
            ====================================================== --}}
            <div class="shrink-0">
                <a
                    href="{{ route('dashboard') }}"
                    class="group flex items-center gap-2.5"
                >
                    <div
                        class="flex h-10 w-10 items-center justify-center rounded-2xl bg-[#FF7A3D] text-lg shadow-md shadow-orange-200 transition duration-300 group-hover:-rotate-2 group-hover:scale-105"
                    >
                        🍊
                    </div>

                    <div class="hidden sm:block">
                        <div class="text-[17px] font-black leading-tight tracking-tight text-slate-950">
                            Surplus<span class="text-[#FF7A3D]">Link</span>
                        </div>

                        <div class="text-[9px] font-bold uppercase tracking-[0.18em] text-slate-400">
                            Lanka
                        </div>
                    </div>
                </a>
            </div>


            {{-- =====================================================
                 DESKTOP NAVIGATION
            ====================================================== --}}
            <div class="hidden flex-1 items-center lg:flex">

                <div class="ms-8 flex items-center gap-1">

                    {{-- Dashboard --}}
                    <a
                        href="{{ route('dashboard') }}"
                        class="inline-flex items-center gap-2 rounded-xl px-3.5 py-2.5 text-sm font-bold transition duration-200
                        {{ request()->routeIs('dashboard')
                            ? 'bg-orange-50 text-orange-600 ring-1 ring-orange-100'
                            : 'text-slate-600 hover:bg-white hover:text-orange-600' }}"
                    >
                        <span class="text-base">⌂</span>
                        Dashboard
                    </a>


                    {{-- =================================================
                         ADMIN NAVIGATION
                    ================================================== --}}
                    @if (Auth::user()->role === 'admin')

                        <a
                            href="{{ route('admin.dashboard') }}"
                            class="inline-flex items-center gap-2 rounded-xl px-3.5 py-2.5 text-sm font-bold transition duration-200
                            {{ request()->routeIs('admin.dashboard')
                                ? 'bg-orange-50 text-orange-600 ring-1 ring-orange-100'
                                : 'text-slate-600 hover:bg-white hover:text-orange-600' }}"
                        >
                            <span>📊</span>
                            Admin Dashboard
                        </a>

                        <a
                            href="{{ route('admin.users') }}"
                            class="inline-flex items-center gap-2 rounded-xl px-3.5 py-2.5 text-sm font-bold transition duration-200
                            {{ request()->routeIs('admin.users')
                                ? 'bg-orange-50 text-orange-600 ring-1 ring-orange-100'
                                : 'text-slate-600 hover:bg-white hover:text-orange-600' }}"
                        >
                            <span>👥</span>
                            Users
                        </a>


                    {{-- =================================================
                         RESTAURANT NAVIGATION
                    ================================================== --}}
                    @elseif (Auth::user()->role === 'restaurant')

                        <a
                            href="{{ route('restaurant.food-listings.index') }}"
                            class="inline-flex items-center gap-2 rounded-xl px-3.5 py-2.5 text-sm font-bold transition duration-200
                            {{ request()->routeIs('restaurant.food-listings.*')
                                ? 'bg-orange-50 text-orange-600 ring-1 ring-orange-100'
                                : 'text-slate-600 hover:bg-white hover:text-orange-600' }}"
                        >
                            <span>🍽️</span>
                            Food Listings
                        </a>

                        <a
                            href="{{ route('restaurant.food-requests.index') }}"
                            class="inline-flex items-center gap-2 rounded-xl px-3.5 py-2.5 text-sm font-bold transition duration-200
                            {{ request()->routeIs('restaurant.food-requests.*')
                                ? 'bg-orange-50 text-orange-600 ring-1 ring-orange-100'
                                : 'text-slate-600 hover:bg-white hover:text-orange-600' }}"
                        >
                            <span>📋</span>
                            Food Requests
                        </a>

                        <a
                            href="{{ route('restaurant.profile') }}"
                            class="inline-flex items-center gap-2 rounded-xl px-3.5 py-2.5 text-sm font-bold transition duration-200
                            {{ request()->routeIs('restaurant.profile')
                                ? 'bg-orange-50 text-orange-600 ring-1 ring-orange-100'
                                : 'text-slate-600 hover:bg-white hover:text-orange-600' }}"
                        >
                            <span>🏪</span>
                            Business Profile
                        </a>


                    {{-- =================================================
                         CUSTOMER / NGO NAVIGATION
                    ================================================== --}}
                    @elseif (
                        Auth::user()->role === 'customer' ||
                        Auth::user()->role === 'ngo'
                    )

                        <a
                            href="{{ route('food-listings.browse') }}"
                            class="inline-flex items-center gap-2 rounded-xl px-3.5 py-2.5 text-sm font-bold transition duration-200
                            {{ request()->routeIs('food-listings.browse')
                                ? 'bg-orange-50 text-orange-600 ring-1 ring-orange-100'
                                : 'text-slate-600 hover:bg-white hover:text-orange-600' }}"
                        >
                            <span>🍽️</span>
                            Browse Food
                        </a>

                        <a
                            href="{{ route('food-requests.my-requests') }}"
                            class="inline-flex items-center gap-2 rounded-xl px-3.5 py-2.5 text-sm font-bold transition duration-200
                            {{ request()->routeIs('food-requests.my-requests')
                                ? 'bg-orange-50 text-orange-600 ring-1 ring-orange-100'
                                : 'text-slate-600 hover:bg-white hover:text-orange-600' }}"
                        >
                            <span>📋</span>
                            My Requests
                        </a>

                        @if (Auth::user()->role === 'ngo')

                            <a
                                href="{{ route('ngo.profile') }}"
                                class="inline-flex items-center gap-2 rounded-xl px-3.5 py-2.5 text-sm font-bold transition duration-200
                                {{ request()->routeIs('ngo.profile')
                                    ? 'bg-orange-50 text-orange-600 ring-1 ring-orange-100'
                                    : 'text-slate-600 hover:bg-white hover:text-orange-600' }}"
                            >
                                <span>🏢</span>
                                Organization
                            </a>

                        @endif


                    {{-- =================================================
                         DELIVERY PARTNER NAVIGATION
                    ================================================== --}}
                    @elseif (Auth::user()->role === 'delivery_partner')

                        <a
                            href="{{ route('delivery-partner.dashboard') }}"
                            class="inline-flex items-center gap-2 rounded-xl px-3.5 py-2.5 text-sm font-bold transition duration-200
                            {{ request()->routeIs('delivery-partner.dashboard')
                                ? 'bg-orange-50 text-orange-600 ring-1 ring-orange-100'
                                : 'text-slate-600 hover:bg-white hover:text-orange-600' }}"
                        >
                            <span>🚚</span>
                            My Deliveries
                        </a>

                        <a
                            href="{{ route('delivery-partner.profile') }}"
                            class="inline-flex items-center gap-2 rounded-xl px-3.5 py-2.5 text-sm font-bold transition duration-200
                            {{ request()->routeIs('delivery-partner.profile')
                                ? 'bg-orange-50 text-orange-600 ring-1 ring-orange-100'
                                : 'text-slate-600 hover:bg-white hover:text-orange-600' }}"
                        >
                            <span>👤</span>
                            Delivery Profile
                        </a>

                    @endif

                </div>

            </div>


            {{-- =====================================================
                 RIGHT SIDE — NOTIFICATIONS + USER
            ====================================================== --}}
            <div class="hidden items-center gap-3 sm:flex">

                {{-- Notifications --}}
                <a
                    href="{{ route('notifications.index') }}"
                    class="relative flex h-10 w-10 items-center justify-center rounded-xl bg-white text-lg text-slate-500 shadow-sm ring-1 ring-slate-200 transition duration-200 hover:-translate-y-0.5 hover:text-orange-500 hover:ring-orange-200"
                    aria-label="Notifications"
                >
                    🔔

                    @if (Auth::user()->unreadNotifications->count() > 0)
                        <span
                            class="absolute -right-1 -top-1 flex h-5 min-w-5 items-center justify-center rounded-full bg-[#FF7A3D] px-1 text-[9px] font-black text-white ring-2 ring-[#FFFAF5]"
                        >
                            {{ Auth::user()->unreadNotifications->count() }}
                        </span>
                    @endif
                </a>


                {{-- User dropdown --}}
                <x-dropdown align="right" width="56">

                    <x-slot name="trigger">

                        <button
                            type="button"
                            class="group inline-flex items-center gap-3 rounded-2xl bg-white px-3 py-2 shadow-sm ring-1 ring-slate-200 transition duration-200 hover:-translate-y-0.5 hover:ring-orange-200 focus:outline-none focus:ring-2 focus:ring-orange-300"
                        >

                            {{-- Avatar --}}
                            <div
                                class="flex h-9 w-9 items-center justify-center rounded-xl bg-orange-50 text-sm font-black text-orange-600 ring-1 ring-orange-100"
                            >
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                            </div>


                            {{-- User information --}}
                            <div class="hidden text-left lg:block">

                                <p class="max-w-28 truncate text-sm font-black text-slate-800">
                                    {{ Auth::user()->name }}
                                </p>

                                <p class="text-[10px] font-bold uppercase tracking-wider text-slate-400">
                                    {{ str_replace('_', ' ', Auth::user()->role) }}
                                </p>

                            </div>


                            {{-- Arrow --}}
                            <svg
                                class="h-4 w-4 text-slate-400 transition duration-200 group-hover:text-orange-500"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"
                                />
                            </svg>

                        </button>

                    </x-slot>


                    <x-slot name="content">

                        {{-- Account information --}}
                        <div class="border-b border-slate-100 px-4 py-3">

                            <p class="text-xs font-bold uppercase tracking-wider text-slate-400">
                                Signed in as
                            </p>

                            <p class="mt-1 truncate text-sm font-black text-slate-800">
                                {{ Auth::user()->email }}
                            </p>

                        </div>


                        {{-- Profile --}}
                        <x-dropdown-link :href="route('profile.edit')">
                            <span class="flex items-center gap-2">
                                👤
                                Profile
                            </span>
                        </x-dropdown-link>


                        {{-- Notifications --}}
                        <x-dropdown-link :href="route('notifications.index')">
                            <span class="flex items-center gap-2">
                                🔔
                                Notifications

                                @if (Auth::user()->unreadNotifications->count() > 0)
                                    <span class="ml-auto rounded-full bg-orange-100 px-2 py-0.5 text-[10px] font-black text-orange-700">
                                        {{ Auth::user()->unreadNotifications->count() }}
                                    </span>
                                @endif
                            </span>
                        </x-dropdown-link>


                        <div class="my-1 border-t border-slate-100"></div>


                        {{-- Logout --}}
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link
                                :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();"
                            >
                                <span class="flex items-center gap-2 text-red-500">
                                    ↪
                                    Log Out
                                </span>
                            </x-dropdown-link>
                        </form>

                    </x-slot>

                </x-dropdown>

            </div>


            {{-- =====================================================
                 MOBILE MENU BUTTON
            ====================================================== --}}
            <div class="flex items-center sm:hidden">

                <button
                    type="button"
                    @click="open = !open"
                    class="flex h-11 w-11 items-center justify-center rounded-2xl bg-white text-slate-600 shadow-sm ring-1 ring-slate-200 transition duration-200 hover:text-orange-500 hover:ring-orange-200 focus:outline-none focus:ring-2 focus:ring-orange-300"
                    aria-label="Toggle navigation menu"
                    :aria-expanded="open.toString()"
                >

                    {{-- Hamburger --}}
                    <svg
                        x-show="!open"
                        x-cloak
                        class="h-6 w-6"
                        stroke="currentColor"
                        fill="none"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"
                        />
                    </svg>


                    {{-- Close --}}
                    <svg
                        x-show="open"
                        x-cloak
                        class="h-6 w-6"
                        stroke="currentColor"
                        fill="none"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"
                        />
                    </svg>

                </button>

            </div>

        </div>

    </div>


    {{-- =============================================================
         MOBILE NAVIGATION
    ============================================================== --}}
    <div
        x-cloak
        x-show="open"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="border-t border-orange-100 bg-white sm:hidden"
    >

        <div class="space-y-1 px-4 pb-4 pt-3">

            {{-- Dashboard --}}
            <a
                href="{{ route('dashboard') }}"
                class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-bold transition
                {{ request()->routeIs('dashboard')
                    ? 'bg-orange-50 text-orange-600'
                    : 'text-slate-600 hover:bg-orange-50 hover:text-orange-600' }}"
            >
                <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-slate-50">
                    ⌂
                </span>

                Dashboard
            </a>


            {{-- =====================================================
                 ADMIN MOBILE
            ====================================================== --}}
            @if (Auth::user()->role === 'admin')

                <a
                    href="{{ route('admin.dashboard') }}"
                    class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-bold transition
                    {{ request()->routeIs('admin.dashboard')
                        ? 'bg-orange-50 text-orange-600'
                        : 'text-slate-600 hover:bg-orange-50 hover:text-orange-600' }}"
                >
                    <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-orange-50">
                        📊
                    </span>

                    Admin Dashboard
                </a>

                <a
                    href="{{ route('admin.users') }}"
                    class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-bold transition
                    {{ request()->routeIs('admin.users')
                        ? 'bg-orange-50 text-orange-600'
                        : 'text-slate-600 hover:bg-orange-50 hover:text-orange-600' }}"
                >
                    <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-orange-50">
                        👥
                    </span>

                    User Management
                </a>


            {{-- =====================================================
                 RESTAURANT MOBILE
            ====================================================== --}}
            @elseif (Auth::user()->role === 'restaurant')

                <a
                    href="{{ route('restaurant.food-listings.index') }}"
                    class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-bold transition
                    {{ request()->routeIs('restaurant.food-listings.*')
                        ? 'bg-orange-50 text-orange-600'
                        : 'text-slate-600 hover:bg-orange-50 hover:text-orange-600' }}"
                >
                    <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-orange-50">
                        🍽️
                    </span>

                    Food Listings
                </a>

                <a
                    href="{{ route('restaurant.food-requests.index') }}"
                    class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-bold transition
                    {{ request()->routeIs('restaurant.food-requests.*')
                        ? 'bg-orange-50 text-orange-600'
                        : 'text-slate-600 hover:bg-orange-50 hover:text-orange-600' }}"
                >
                    <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-orange-50">
                        📋
                    </span>

                    Food Requests
                </a>

                <a
                    href="{{ route('restaurant.profile') }}"
                    class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-bold transition
                    {{ request()->routeIs('restaurant.profile')
                        ? 'bg-orange-50 text-orange-600'
                        : 'text-slate-600 hover:bg-orange-50 hover:text-orange-600' }}"
                >
                    <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-orange-50">
                        🏪
                    </span>

                    Business Profile
                </a>


            {{-- =====================================================
                 CUSTOMER / NGO MOBILE
            ====================================================== --}}
            @elseif (
                Auth::user()->role === 'customer' ||
                Auth::user()->role === 'ngo'
            )

                <a
                    href="{{ route('food-listings.browse') }}"
                    class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-bold transition
                    {{ request()->routeIs('food-listings.browse')
                        ? 'bg-orange-50 text-orange-600'
                        : 'text-slate-600 hover:bg-orange-50 hover:text-orange-600' }}"
                >
                    <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-orange-50">
                        🍽️
                    </span>

                    Browse Food
                </a>

                <a
                    href="{{ route('food-requests.my-requests') }}"
                    class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-bold transition
                    {{ request()->routeIs('food-requests.my-requests')
                        ? 'bg-orange-50 text-orange-600'
                        : 'text-slate-600 hover:bg-orange-50 hover:text-orange-600' }}"
                >
                    <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-orange-50">
                        📋
                    </span>

                    My Requests
                </a>

                @if (Auth::user()->role === 'ngo')

                    <a
                        href="{{ route('ngo.profile') }}"
                        class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-bold transition
                        {{ request()->routeIs('ngo.profile')
                            ? 'bg-orange-50 text-orange-600'
                            : 'text-slate-600 hover:bg-orange-50 hover:text-orange-600' }}"
                    >
                        <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-orange-50">
                            🏢
                        </span>

                        Organization Profile
                    </a>

                @endif


            {{-- =====================================================
                 DELIVERY PARTNER MOBILE
            ====================================================== --}}
            @elseif (Auth::user()->role === 'delivery_partner')

                <a
                    href="{{ route('delivery-partner.dashboard') }}"
                    class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-bold transition
                    {{ request()->routeIs('delivery-partner.dashboard')
                        ? 'bg-orange-50 text-orange-600'
                        : 'text-slate-600 hover:bg-orange-50 hover:text-orange-600' }}"
                >
                    <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-orange-50">
                        🚚
                    </span>

                    My Deliveries
                </a>

                <a
                    href="{{ route('delivery-partner.profile') }}"
                    class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-bold transition
                    {{ request()->routeIs('delivery-partner.profile')
                        ? 'bg-orange-50 text-orange-600'
                        : 'text-slate-600 hover:bg-orange-50 hover:text-orange-600' }}"
                >
                    <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-orange-50">
                        👤
                    </span>

                    Delivery Profile
                </a>

            @endif


            {{-- =====================================================
                 MOBILE NOTIFICATIONS
            ====================================================== --}}
            <a
                href="{{ route('notifications.index') }}"
                class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-bold transition
                {{ request()->routeIs('notifications.*')
                    ? 'bg-orange-50 text-orange-600'
                    : 'text-slate-600 hover:bg-orange-50 hover:text-orange-600' }}"
            >
                <span class="relative flex h-9 w-9 items-center justify-center rounded-xl bg-orange-50">
                    🔔

                    @if (Auth::user()->unreadNotifications->count() > 0)
                        <span class="absolute -right-1 -top-1 flex h-5 min-w-5 items-center justify-center rounded-full bg-orange-500 px-1 text-[9px] font-black text-white ring-2 ring-white">
                            {{ Auth::user()->unreadNotifications->count() }}
                        </span>
                    @endif
                </span>

                <span>
                    Notifications
                </span>

                @if (Auth::user()->unreadNotifications->count() > 0)
                    <span class="ml-auto rounded-full bg-orange-100 px-2.5 py-1 text-[10px] font-black text-orange-700">
                        {{ Auth::user()->unreadNotifications->count() }} new
                    </span>
                @endif
            </a>

        </div>


        {{-- =====================================================
             MOBILE ACCOUNT AREA
        ====================================================== --}}
        <div class="border-t border-slate-100 bg-[#FFFAF5] px-4 pb-5 pt-4">

            <div class="flex items-center gap-3">

                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-orange-100 text-base font-black text-orange-600 ring-1 ring-orange-200">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>

                <div class="min-w-0">

                    <p class="truncate text-sm font-black text-slate-900">
                        {{ Auth::user()->name }}
                    </p>

                    <p class="truncate text-xs font-medium text-slate-500">
                        {{ Auth::user()->email }}
                    </p>

                </div>

            </div>


            <div class="mt-3 grid grid-cols-2 gap-2">

                {{-- Profile --}}
                <a
                    href="{{ route('profile.edit') }}"
                    class="flex items-center justify-center gap-2 rounded-xl bg-white px-3 py-3 text-xs font-black text-slate-700 ring-1 ring-slate-200 transition hover:text-orange-600 hover:ring-orange-200"
                >
                    👤
                    Profile
                </a>


                {{-- Logout --}}
                <form
                    method="POST"
                    action="{{ route('logout') }}"
                >
                    @csrf

                    <a
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault(); this.closest('form').submit();"
                        class="flex w-full items-center justify-center gap-2 rounded-xl bg-white px-3 py-3 text-xs font-black text-red-500 ring-1 ring-slate-200 transition hover:bg-red-50 hover:ring-red-100"
                    >
                        ↪
                        Log Out
                    </a>
                </form>

            </div>

        </div>

    </div>

</nav>
