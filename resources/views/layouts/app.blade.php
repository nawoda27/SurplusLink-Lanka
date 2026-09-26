<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'SurplusLink Lanka') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800,900&display=swap"
            rel="stylesheet"
        />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="font-sans antialiased bg-[#fffaf7] text-slate-800">
        <div
            x-data="{ sidebarOpen: false }"
            class="min-h-screen"
        >

            {{-- =========================================================
                 MOBILE OVERLAY
            ========================================================== --}}
            <div
                x-show="sidebarOpen"
                x-transition.opacity
                @click="sidebarOpen = false"
                class="fixed inset-0 z-40 bg-slate-900/30 backdrop-blur-sm lg:hidden"
                style="display: none;"
            ></div>


            {{-- =========================================================
                 SIDEBAR
            ========================================================== --}}
            <aside
                class="fixed inset-y-0 left-0 z-50 flex w-[270px] flex-col border-r border-[#f0e9e3] bg-white transition-transform duration-300 lg:translate-x-0"
                :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
            >

                {{-- Logo --}}
                <div class="flex h-[88px] items-center border-b border-[#f4eee9] px-7">
                    <a
                        href="{{ route('dashboard') }}"
                        class="flex items-center gap-3"
                    >
                        <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-[#ff7048] text-white shadow-sm">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M12 3c-3.5 2.2-6.5 5.8-6.5 9.5A6.5 6.5 0 0012 19a6.5 6.5 0 006.5-6.5C18.5 8.8 15.5 5.2 12 3z"
                                />
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M9.5 14.5c.8-1.7 2-3.1 4.2-4.2"
                                />
                            </svg>
                        </div>

                        <div>
                            <div class="text-[20px] font-black tracking-tight text-slate-900">
                                Surplus<span class="text-[#ff7048]">Link</span>
                            </div>

                            <div class="text-[10px] font-bold uppercase tracking-[0.18em] text-slate-400">
                                Lanka
                            </div>
                        </div>
                    </a>

                    {{-- Mobile close --}}
                    <button
                        type="button"
                        @click="sidebarOpen = false"
                        class="ml-auto rounded-xl p-2 text-slate-400 hover:bg-slate-50 hover:text-slate-700 lg:hidden"
                    >
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
                                d="M6 18L18 6M6 6l12 12"
                            />
                        </svg>
                    </button>
                </div>


                {{-- Navigation --}}
                <nav class="flex-1 overflow-y-auto px-4 py-6">

                    <p class="px-3 pb-3 text-[10px] font-extrabold uppercase tracking-[0.18em] text-slate-400">
                        Main Menu
                    </p>

                    <div class="space-y-1.5">

                        {{-- Home --}}
                        <a
                            href="{{ route('dashboard') }}"
                            class="group flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-semibold transition
                            {{ request()->routeIs('dashboard')
                                ? 'bg-[#fff5eb] text-[#ff7048]'
                                : 'text-slate-500 hover:bg-[#fffaf7] hover:text-slate-800' }}"
                        >
                            <span
                                class="flex h-9 w-9 items-center justify-center rounded-xl
                                {{ request()->routeIs('dashboard')
                                    ? 'bg-white text-[#ff7048] shadow-sm'
                                    : 'bg-slate-50 text-slate-400 group-hover:text-slate-700' }}"
                            >
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
                                        d="M3 10.5L12 3l9 7.5V21a1 1 0 01-1 1h-5v-7H9v7H4a1 1 0 01-1-1v-10.5z"
                                    />
                                </svg>
                            </span>

                            <span>Home</span>
                        </a>


                        {{-- Customer / NGO --}}
                        @if(auth()->check() && in_array(auth()->user()->role, ['customer', 'ngo'], true))

                            <a
                                href="{{ route('food-listings.browse') }}"
                                class="group flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-semibold transition
                                {{ request()->routeIs('food-listings.browse') || request()->routeIs('food-requests.create')
                                    ? 'bg-[#fff5eb] text-[#ff7048]'
                                    : 'text-slate-500 hover:bg-[#fffaf7] hover:text-slate-800' }}"
                            >
                                <span
                                    class="flex h-9 w-9 items-center justify-center rounded-xl
                                    {{ request()->routeIs('food-listings.browse') || request()->routeIs('food-requests.create')
                                        ? 'bg-white text-[#ff7048] shadow-sm'
                                        : 'bg-slate-50 text-slate-400 group-hover:text-slate-700' }}"
                                >
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
                                            d="M7 3h10M6 7h12M5 11h14M4 15h16M7 19h10"
                                        />
                                    </svg>
                                </span>

                                <span>Browse Food</span>
                            </a>

                            <a
                                href="{{ route('food-requests.my-requests') }}"
                                class="group flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-semibold transition
                                {{ request()->routeIs('food-requests.my-requests')
                                    ? 'bg-[#fff5eb] text-[#ff7048]'
                                    : 'text-slate-500 hover:bg-[#fffaf7] hover:text-slate-800' }}"
                            >
                                <span
                                    class="flex h-9 w-9 items-center justify-center rounded-xl
                                    {{ request()->routeIs('food-requests.my-requests')
                                        ? 'bg-white text-[#ff7048] shadow-sm'
                                        : 'bg-slate-50 text-slate-400 group-hover:text-slate-700' }}"
                                >
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
                                            d="M9 5h6M9 9h6M9 13h4M7 3h10a2 2 0 012 2v14a2 2 0 01-2 2H7a2 2 0 01-2-2V5a2 2 0 012-2z"
                                        />
                                    </svg>
                                </span>

                                <span>My Requests</span>
                            </a>

                        @endif


                        {{-- Restaurant --}}
                        @if(auth()->check() && auth()->user()->role === 'restaurant')

                            <a
                                href="{{ route('restaurant.food-listings.index') }}"
                                class="group flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-semibold transition
                                {{ request()->routeIs('restaurant.food-listings.*')
                                    ? 'bg-[#fff5eb] text-[#ff7048]'
                                    : 'text-slate-500 hover:bg-[#fffaf7] hover:text-slate-800' }}"
                            >
                                <span
                                    class="flex h-9 w-9 items-center justify-center rounded-xl
                                    {{ request()->routeIs('restaurant.food-listings.*')
                                        ? 'bg-white text-[#ff7048] shadow-sm'
                                        : 'bg-slate-50 text-slate-400 group-hover:text-slate-700' }}"
                                >
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
                                            d="M4 6h16M4 10h16M6 14h12M8 18h8"
                                        />
                                    </svg>
                                </span>

                                <span>Food Listings</span>
                            </a>

                            <a
                                href="{{ route('restaurant.food-requests.index') }}"
                                class="group flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-semibold transition
                                {{ request()->routeIs('restaurant.food-requests.*')
                                    ? 'bg-[#fff5eb] text-[#ff7048]'
                                    : 'text-slate-500 hover:bg-[#fffaf7] hover:text-slate-800' }}"
                            >
                                <span
                                    class="flex h-9 w-9 items-center justify-center rounded-xl
                                    {{ request()->routeIs('restaurant.food-requests.*')
                                        ? 'bg-white text-[#ff7048] shadow-sm'
                                        : 'bg-slate-50 text-slate-400 group-hover:text-slate-700' }}"
                                >
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
                                            d="M8 7h8M8 11h8M8 15h5M5 3h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2z"
                                        />
                                    </svg>
                                </span>

                                <span>Requests</span>
                            </a>

                        @endif


                        {{-- Delivery Partner --}}
                        @if(auth()->check() && auth()->user()->role === 'delivery_partner')

                            <a
                                href="{{ route('delivery-partner.dashboard') }}"
                                class="group flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-semibold transition
                                {{ request()->routeIs('delivery-partner.dashboard')
                                    ? 'bg-[#fff5eb] text-[#ff7048]'
                                    : 'text-slate-500 hover:bg-[#fffaf7] hover:text-slate-800' }}"
                            >
                                <span
                                    class="flex h-9 w-9 items-center justify-center rounded-xl
                                    {{ request()->routeIs('delivery-partner.dashboard')
                                        ? 'bg-white text-[#ff7048] shadow-sm'
                                        : 'bg-slate-50 text-slate-400 group-hover:text-slate-700' }}"
                                >
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
                                            d="M3 7h11v10H3zM14 10h4l3 3v4h-7zM7 19a2 2 0 100-4 2 2 0 000 4zM18 19a2 2 0 100-4 2 2 0 000 4z"
                                        />
                                    </svg>
                                </span>

                                <span>Deliveries</span>
                            </a>

                        @endif


                        {{-- Admin --}}
                        @if(auth()->check() && auth()->user()->role === 'admin')

                            <a
                                href="{{ route('admin.dashboard') }}"
                                class="group flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-semibold transition
                                {{ request()->routeIs('admin.dashboard')
                                    ? 'bg-[#fff5eb] text-[#ff7048]'
                                    : 'text-slate-500 hover:bg-[#fffaf7] hover:text-slate-800' }}"
                            >
                                <span
                                    class="flex h-9 w-9 items-center justify-center rounded-xl
                                    {{ request()->routeIs('admin.dashboard')
                                        ? 'bg-white text-[#ff7048] shadow-sm'
                                        : 'bg-slate-50 text-slate-400 group-hover:text-slate-700' }}"
                                >
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
                                            d="M4 13h6V4H4v9zM14 20h6v-9h-6v9zM14 8h6V4h-6v4zM4 20h6v-3H4v3z"
                                        />
                                    </svg>
                                </span>

                                <span>Admin Dashboard</span>
                            </a>

                            <a
                                href="{{ route('admin.users') }}"
                                class="group flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-semibold transition
                                {{ request()->routeIs('admin.users*')
                                    ? 'bg-[#fff5eb] text-[#ff7048]'
                                    : 'text-slate-500 hover:bg-[#fffaf7] hover:text-slate-800' }}"
                            >
                                <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-slate-50 text-slate-400 group-hover:text-slate-700">
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
                                            d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2M9 11a4 4 0 100-8 4 4 0 000 8zM22 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"
                                        />
                                    </svg>
                                </span>

                                <span>Users</span>
                            </a>

                        @endif


                        {{-- Notifications --}}
                        <a
                            href="{{ route('notifications.index') }}"
                            class="group flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-semibold transition
                            {{ request()->routeIs('notifications.*')
                                ? 'bg-[#fff5eb] text-[#ff7048]'
                                : 'text-slate-500 hover:bg-[#fffaf7] hover:text-slate-800' }}"
                        >
                            <span
                                class="relative flex h-9 w-9 items-center justify-center rounded-xl
                                {{ request()->routeIs('notifications.*')
                                    ? 'bg-white text-[#ff7048] shadow-sm'
                                    : 'bg-slate-50 text-slate-400 group-hover:text-slate-700' }}"
                            >
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
                                        d="M15 17h5l-1.4-1.4A2 2 0 0118 14.2V11a6 6 0 10-12 0v3.2a2 2 0 01-.6 1.4L4 17h5m6 0a3 3 0 01-6 0"
                                    />
                                </svg>
                            </span>

                            <span>Notifications</span>

                            @if(auth()->check() && auth()->user()->unreadNotifications()->count() > 0)
                                <span class="ml-auto flex h-5 min-w-5 items-center justify-center rounded-full bg-[#ff7048] px-1.5 text-[10px] font-extrabold text-white">
                                    {{ auth()->user()->unreadNotifications()->count() }}
                                </span>
                            @endif
                        </a>


                        {{-- Profile --}}
                        <a
                            href="{{ route('profile.edit') }}"
                            class="group flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-semibold transition
                            {{ request()->routeIs('profile.*')
                                ? 'bg-[#fff5eb] text-[#ff7048]'
                                : 'text-slate-500 hover:bg-[#fffaf7] hover:text-slate-800' }}"
                        >
                            <span
                                class="flex h-9 w-9 items-center justify-center rounded-xl
                                {{ request()->routeIs('profile.*')
                                    ? 'bg-white text-[#ff7048] shadow-sm'
                                    : 'bg-slate-50 text-slate-400 group-hover:text-slate-700' }}"
                            >
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
                                        d="M20 21a8 8 0 00-16 0M12 13a4 4 0 100-8 4 4 0 000 8z"
                                    />
                                </svg>
                            </span>

                            <span>Profile</span>
                        </a>

                    </div>
                </nav>


                {{-- Impact / Promo Card --}}
                <div class="px-4 pb-4">
                    <div class="overflow-hidden rounded-3xl bg-[#fff5eb] p-5">
                        <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-2xl bg-white text-[#ff7048] shadow-sm">
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
                                    d="M12 3c-4.4 3.2-7 6.5-7 10.2A7 7 0 0012 20a7 7 0 007-6.8C19 9.5 16.4 6.2 12 3z"
                                />
                            </svg>
                        </div>

                        <h3 class="text-sm font-extrabold text-slate-900">
                            Save good food.
                        </h3>

                        <p class="mt-1 text-xs leading-5 text-slate-500">
                            Help redirect surplus food to people who can use it.
                        </p>

                        @if(auth()->check() && in_array(auth()->user()->role, ['customer', 'ngo'], true))
                            <a
                                href="{{ route('food-listings.browse') }}"
                                class="mt-4 inline-flex items-center gap-2 rounded-xl bg-[#ff7048] px-4 py-2.5 text-xs font-bold text-white shadow-sm transition hover:bg-[#f45d35]"
                            >
                                Browse food

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-3.5 w-3.5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M5 12h14M13 6l6 6-6 6"
                                    />
                                </svg>
                            </a>
                        @endif
                    </div>
                </div>


                {{-- User Profile --}}
                @auth
                    <div class="border-t border-[#f4eee9] p-4">
                        <div class="flex items-center gap-3">

                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-[#ffe7dc] text-sm font-extrabold text-[#ff7048]">
                                {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                            </div>

                            <div class="min-w-0 flex-1">
                                <p class="truncate text-sm font-bold text-slate-900">
                                    {{ auth()->user()->name }}
                                </p>

                                <p class="truncate text-[11px] capitalize text-slate-400">
                                    {{ str_replace('_', ' ', auth()->user()->role) }}
                                </p>
                            </div>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <button
                                    type="submit"
                                    title="Log out"
                                    class="rounded-xl p-2 text-slate-400 transition hover:bg-slate-50 hover:text-[#ff7048]"
                                >
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
                                            d="M10 17l5-5-5-5M15 12H3M21 19V5a2 2 0 00-2-2h-5"
                                        />
                                    </svg>
                                </button>
                            </form>

                        </div>
                    </div>
                @endauth

            </aside>


            {{-- =========================================================
                 MAIN AREA
            ========================================================== --}}
            <div class="min-h-screen lg:pl-[270px]">

                {{-- Top Navigation --}}
                <header class="sticky top-0 z-30 border-b border-[#f0e9e3] bg-[#fffaf7]/95 backdrop-blur-md">
                    <div class="flex h-[76px] items-center gap-4 px-4 sm:px-6 lg:px-8">

                        {{-- Mobile menu --}}
                        <button
                            type="button"
                            @click="sidebarOpen = true"
                            class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl border border-[#f0e9e3] bg-white text-slate-600 shadow-sm lg:hidden"
                        >
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
                                    d="M4 6h16M4 12h16M4 18h16"
                                />
                            </svg>
                        </button>


                        {{-- Context --}}
                        <div class="hidden min-w-0 md:block">
                            <p class="text-[10px] font-extrabold uppercase tracking-[0.16em] text-slate-400">
                                SurplusLink Lanka
                            </p>

                            <p class="truncate text-sm font-bold text-slate-800">
                                @if(auth()->check())
                                    Welcome back, {{ auth()->user()->name }}
                                @else
                                    Welcome to SurplusLink
                                @endif
                            </p>
                        </div>


                        {{-- Spacer --}}
                        <div class="flex-1"></div>


                        {{-- Notifications --}}
                        @auth
                            <a
                                href="{{ route('notifications.index') }}"
                                class="relative flex h-11 w-11 items-center justify-center rounded-2xl border border-[#f0e9e3] bg-white text-slate-500 shadow-sm transition hover:border-[#ffd7c8] hover:text-[#ff7048]"
                                title="Notifications"
                            >
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
                                        d="M15 17h5l-1.4-1.4A2 2 0 0118 14.2V11a6 6 0 10-12 0v3.2a2 2 0 01-.6 1.4L4 17h5m6 0a3 3 0 01-6 0"
                                    />
                                </svg>

                                @if(auth()->user()->unreadNotifications()->count() > 0)
                                    <span class="absolute right-2 top-2 h-2.5 w-2.5 rounded-full border-2 border-white bg-[#ff7048]"></span>
                                @endif
                            </a>


                            {{-- Profile shortcut --}}
                            <a
                                href="{{ route('profile.edit') }}"
                                class="hidden items-center gap-2 rounded-2xl border border-[#f0e9e3] bg-white py-1.5 pl-1.5 pr-3 shadow-sm transition hover:border-[#ffd7c8] sm:flex"
                            >
                                <span class="flex h-8 w-8 items-center justify-center rounded-xl bg-[#ffe7dc] text-xs font-extrabold text-[#ff7048]">
                                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                                </span>

                                <span class="max-w-[120px] truncate text-xs font-bold text-slate-700">
                                    {{ auth()->user()->name }}
                                </span>
                            </a>
                        @endauth

                    </div>
                </header>


                {{-- Page Heading --}}
                @isset($header)
                    <div class="px-4 pt-7 sm:px-6 lg:px-8">
                        <div class="mx-auto max-w-[1500px]">
                            {{ $header }}
                        </div>
                    </div>
                @endisset


                {{-- Page Content --}}
                <main class="px-4 py-7 sm:px-6 lg:px-8 lg:py-8">
                    <div class="mx-auto max-w-[1500px]">
                        {{ $slot }}
                    </div>
                </main>

            </div>

        </div>
    </body>
</html>