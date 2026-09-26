<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sign in — SurplusLink Lanka</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#fffaf6] text-slate-800 antialiased">

    <div class="min-h-screen overflow-hidden bg-[#fffaf6]">

        <style>
            @keyframes foodOne {
                0%,
                28% {
                    opacity: 1;
                    transform: scale(1);
                }

                33%,
                61% {
                    opacity: 0;
                    transform: scale(1.035);
                }

                66%,
                100% {
                    opacity: 0;
                    transform: scale(1.035);
                }
            }

            @keyframes foodTwo {
                0%,
                28% {
                    opacity: 0;
                    transform: scale(1.035);
                }

                33%,
                61% {
                    opacity: 1;
                    transform: scale(1);
                }

                66%,
                94% {
                    opacity: 0;
                    transform: scale(1.035);
                }

                100% {
                    opacity: 0;
                    transform: scale(1.035);
                }
            }

            @keyframes foodThree {
                0%,
                61% {
                    opacity: 0;
                    transform: scale(1.035);
                }

                66%,
                94% {
                    opacity: 1;
                    transform: scale(1);
                }

                100% {
                    opacity: 0;
                    transform: scale(1.035);
                }
            }

            @keyframes softFloat {
                0%,
                100% {
                    transform: translateY(0);
                }

                50% {
                    transform: translateY(-8px);
                }
            }

            @keyframes softFloatReverse {
                0%,
                100% {
                    transform: translateY(0) rotate(0deg);
                }

                50% {
                    transform: translateY(7px) rotate(2deg);
                }
            }

            .food-image-one {
                animation: foodOne 15s ease-in-out infinite;
            }

            .food-image-two {
                animation: foodTwo 15s ease-in-out infinite;
            }

            .food-image-three {
                animation: foodThree 15s ease-in-out infinite;
            }

            .soft-float {
                animation: softFloat 5s ease-in-out infinite;
            }

            .soft-float-reverse {
                animation: softFloatReverse 6s ease-in-out infinite;
            }

            @media (prefers-reduced-motion: reduce) {
                .food-image-one,
                .food-image-two,
                .food-image-three,
                .soft-float,
                .soft-float-reverse {
                    animation: none;
                }

                .food-image-one {
                    opacity: 1;
                }

                .food-image-two,
                .food-image-three {
                    opacity: 0;
                }
            }
        </style>


        {{-- ============================================================
             MAIN LAYOUT
        ============================================================= --}}
        <div class="grid min-h-screen lg:grid-cols-[52%_48%]">


            {{-- ============================================================
                 LEFT SIDE — BRAND + FOOD EXPERIENCE
            ============================================================= --}}
            <section class="relative hidden min-h-screen overflow-hidden lg:flex">


                {{-- Base background --}}
                <div class="absolute inset-0 bg-[#fff1df]"></div>


                {{-- =====================================================
                     FOOD IMAGE 01
                ====================================================== --}}
                <div class="absolute inset-0 overflow-hidden">

                    <img
                        src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=1800&q=90"
                        alt="Fresh healthy meal"
                        class="food-image-one absolute inset-0 h-full w-full object-cover"
                    >

                    <img
                        src="https://images.unsplash.com/photo-1540189549336-e6e99c3679fe?auto=format&fit=crop&w=1800&q=90"
                        alt="Fresh colorful food"
                        class="food-image-two absolute inset-0 h-full w-full object-cover"
                    >

                    <img
                        src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?auto=format&fit=crop&w=1800&q=90"
                        alt="Fresh prepared food"
                        class="food-image-three absolute inset-0 h-full w-full object-cover"
                    >


                    {{-- Warm overlays --}}
                    <div class="absolute inset-0 bg-gradient-to-b from-[#fff2dc]/95 via-[#fff0dc]/35 to-[#1f1814]/60"></div>

                    <div class="absolute inset-0 bg-gradient-to-r from-[#fff0dc]/95 via-[#fff0dc]/25 to-transparent"></div>

                    <div class="absolute inset-0 bg-gradient-to-t from-[#1f1814]/70 via-transparent to-transparent"></div>

                </div>


                {{-- Decorative glow --}}
                <div class="pointer-events-none absolute -left-32 top-20 h-72 w-72 rounded-full bg-orange-300/25 blur-3xl"></div>

                <div class="pointer-events-none absolute -right-32 -top-24 h-80 w-80 rounded-full bg-emerald-200/25 blur-3xl"></div>

                <div class="pointer-events-none absolute -bottom-32 left-[38%] h-80 w-80 rounded-full bg-orange-300/20 blur-3xl"></div>


                {{-- Floating leaf --}}
                <div class="soft-float pointer-events-none absolute -left-5 top-[18%] z-10 text-[100px] opacity-20">
                    🌿
                </div>


                {{-- =====================================================
                     LEFT CONTENT
                ====================================================== --}}
                <div class="relative z-10 flex min-h-screen w-full flex-col justify-between px-10 py-10 xl:px-16 xl:py-12">


                    {{-- BRAND --}}
                    <div>

                        <a
                            href="{{ url('/') }}"
                            class="group inline-flex items-center gap-4"
                        >

                            <div class="relative flex h-[68px] w-[68px] items-center justify-center overflow-hidden rounded-[22px] bg-white/95 shadow-[0_15px_35px_rgba(80,45,20,0.12)] ring-1 ring-white/80 backdrop-blur-xl transition duration-300 group-hover:-translate-y-1">

                                <div class="absolute inset-0 bg-gradient-to-br from-orange-50 to-emerald-50"></div>

                                <svg
                                    class="relative h-10 w-10 text-[#f36b2f]"
                                    viewBox="0 0 48 48"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >

                                    <path
                                        d="M24 41C24 41 10 31.8 10 19.5C10 13.7 14.3 9 19.6 9C22.1 9 24.4 10.2 26 12.1C27.6 10.2 29.9 9 32.4 9C37.7 9 42 13.7 42 19.5C42 31.8 28 41 24 41Z"
                                        fill="currentColor"
                                        opacity=".18"
                                    />

                                    <path
                                        d="M24 39V17"
                                        stroke="currentColor"
                                        stroke-width="2.7"
                                        stroke-linecap="round"
                                    />

                                    <path
                                        d="M24 25C19.5 25 16.2 22.9 14.2 19.2"
                                        stroke="currentColor"
                                        stroke-width="2.7"
                                        stroke-linecap="round"
                                    />

                                    <path
                                        d="M24 29C28.5 29 31.8 26.9 33.8 23.2"
                                        stroke="currentColor"
                                        stroke-width="2.7"
                                        stroke-linecap="round"
                                    />

                                    <path
                                        d="M24 17C24 13.8 25.7 11.4 28.5 9.8"
                                        stroke="#26352d"
                                        stroke-width="2.7"
                                        stroke-linecap="round"
                                    />

                                </svg>

                            </div>


                            <div>

                                <p class="text-[28px] font-black leading-none tracking-[-0.04em] text-[#17232c] xl:text-[31px]">
                                    Surplus<span class="text-[#f36b2f]">Link</span>
                                </p>

                                <p class="mt-2 text-[11px] font-bold uppercase tracking-[0.22em] text-[#6f6a65]">
                                    Lanka
                                </p>

                            </div>

                        </a>

                    </div>


                    {{-- HERO --}}
                    <div class="max-w-xl py-10">

                        <div class="inline-flex items-center gap-2 rounded-full border border-white/70 bg-white/75 px-4 py-2 text-[10px] font-black uppercase tracking-[0.18em] text-[#df6845] shadow-[0_8px_25px_rgba(60,40,25,0.06)] backdrop-blur-xl">

                            <span class="flex h-5 w-5 items-center justify-center rounded-full bg-[#ff7048] text-[9px] text-white">
                                ✓
                            </span>

                            Smart surplus food platform

                        </div>


                        <h1 class="mt-7 max-w-[10ch] text-[48px] font-black leading-[0.94] tracking-[-0.055em] text-[#18232c] xl:text-[62px]">

                            Good food deserves

                            <span class="block text-[#f36b2f]">
                                a second chance.
                            </span>

                        </h1>


                        <p class="mt-6 max-w-[48ch] text-[15px] leading-7 text-[#55504b] xl:text-[16px] xl:leading-8">

                            Connect with restaurants, discover available surplus food,
                            reduce unnecessary waste and help keep good food moving
                            through the community.

                        </p>


                        {{-- TRUST POINTS --}}
                        <div class="mt-7 flex flex-wrap gap-2.5">

                            <span class="inline-flex items-center gap-2 rounded-full border border-white/70 bg-white/65 px-3.5 py-2 text-[10px] font-bold text-[#625a54] backdrop-blur-md">

                                <span class="text-emerald-600">
                                    ●
                                </span>

                                Real-time listings

                            </span>


                            <span class="inline-flex items-center gap-2 rounded-full border border-white/70 bg-white/65 px-3.5 py-2 text-[10px] font-bold text-[#625a54] backdrop-blur-md">

                                <span class="text-[#ff7048]">
                                    ●
                                </span>

                                Request tracking

                            </span>


                            <span class="inline-flex items-center gap-2 rounded-full border border-white/70 bg-white/65 px-3.5 py-2 text-[10px] font-bold text-[#625a54] backdrop-blur-md">

                                <span class="text-sky-600">
                                    ●
                                </span>

                                Delivery workflow

                            </span>

                        </div>

                    </div>


                    {{-- IMPACT CARDS --}}
                    <div class="grid max-w-2xl grid-cols-3 gap-3">


                        <div class="soft-float rounded-[1.4rem] border border-white/65 bg-white/70 px-3 py-4 text-center shadow-[0_12px_30px_rgba(45,30,20,0.08)] backdrop-blur-xl">

                            <div class="mx-auto flex h-10 w-10 items-center justify-center rounded-xl bg-[#fff1e8] text-lg">
                                🌱
                            </div>

                            <p class="mt-2 text-[11px] font-black text-[#302a26]">
                                Less Waste
                            </p>

                            <p class="mt-1 text-[9px] font-semibold leading-4 text-[#81766f]">
                                Keep good food useful
                            </p>

                        </div>


                        <div
                            class="soft-float rounded-[1.4rem] border border-white/65 bg-white/70 px-3 py-4 text-center shadow-[0_12px_30px_rgba(45,30,20,0.08)] backdrop-blur-xl"
                            style="animation-delay:.8s;"
                        >

                            <div class="mx-auto flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-50 text-lg">
                                🤝
                            </div>

                            <p class="mt-2 text-[11px] font-black text-[#302a26]">
                                Stronger Communities
                            </p>

                            <p class="mt-1 text-[9px] font-semibold leading-4 text-[#81766f]">
                                Connect people and food
                            </p>

                        </div>


                        <div
                            class="soft-float rounded-[1.4rem] border border-white/65 bg-white/70 px-3 py-4 text-center shadow-[0_12px_30px_rgba(45,30,20,0.08)] backdrop-blur-xl"
                            style="animation-delay:1.6s;"
                        >

                            <div class="mx-auto flex h-10 w-10 items-center justify-center rounded-xl bg-orange-50 text-lg">
                                💚
                            </div>

                            <p class="mt-2 text-[11px] font-black text-[#302a26]">
                                Better Tomorrow
                            </p>

                            <p class="mt-1 text-[9px] font-semibold leading-4 text-[#81766f]">
                                Small actions matter
                            </p>

                        </div>

                    </div>

                </div>


                {{-- IMAGE STATUS --}}
                <div class="absolute bottom-7 right-8 z-20 hidden items-center gap-2 rounded-full border border-white/40 bg-black/10 px-3 py-2 text-[9px] font-bold text-white/80 backdrop-blur-md xl:flex">

                    <span class="h-1.5 w-1.5 rounded-full bg-white"></span>

                    Fresh food • New possibilities

                </div>

            </section>


            {{-- ============================================================
                 RIGHT SIDE — LOGIN
            ============================================================= --}}
            <section class="relative flex min-h-screen items-center justify-center overflow-hidden bg-[#fffaf6] px-5 py-8 sm:px-8 lg:px-10 xl:px-14">


                {{-- Background decoration --}}
                <div class="pointer-events-none absolute -right-32 -top-32 h-[420px] w-[420px] rounded-full bg-[radial-gradient(circle,rgba(255,112,72,0.11),transparent_68%)]"></div>

                <div class="pointer-events-none absolute -bottom-32 -left-28 h-[380px] w-[380px] rounded-full bg-[radial-gradient(circle,rgba(72,145,105,0.10),transparent_68%)]"></div>


                {{-- Dot pattern --}}
                <div
                    class="pointer-events-none absolute inset-0 opacity-[0.025]"
                    style="background-image:radial-gradient(#25201d 1px,transparent 1px);background-size:22px 22px;"
                ></div>


                {{-- Floating food --}}
                <div class="soft-float pointer-events-none absolute right-[5%] top-[10%] hidden text-4xl opacity-20 xl:block">
                    🥬
                </div>

                <div class="soft-float-reverse pointer-events-none absolute bottom-[11%] left-[7%] hidden text-3xl opacity-20 xl:block">
                    🍅
                </div>


                {{-- =====================================================
                     LOGIN WRAPPER
                ====================================================== --}}
                <div class="relative z-10 w-full max-w-[510px]">


                    {{-- MOBILE BRAND --}}
                    <div class="mb-7 flex items-center gap-3 lg:hidden">

                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#ff7048] text-xl text-white shadow-lg shadow-orange-200">
                            🌱
                        </div>

                        <div>

                            <p class="text-[22px] font-black tracking-tight text-[#18232c]">
                                Surplus<span class="text-[#f36b2f]">Link</span>
                            </p>

                            <p class="text-[9px] font-black uppercase tracking-[0.18em] text-[#8b807a]">
                                Lanka
                            </p>

                        </div>

                    </div>


                    {{-- =================================================
                         LOGIN CARD
                    ================================================== --}}
                    <div class="relative overflow-hidden rounded-[2rem] border border-[#eee4dd] bg-white/95 p-7 shadow-[0_25px_70px_rgba(52,38,30,0.09)] backdrop-blur-xl sm:p-9">


                        {{-- Card glow --}}
                        <div class="pointer-events-none absolute -right-20 -top-20 h-44 w-44 rounded-full bg-orange-100/60 blur-3xl"></div>

                        <div class="pointer-events-none absolute -bottom-20 -left-20 h-44 w-44 rounded-full bg-emerald-100/50 blur-3xl"></div>


                        <div class="relative">


                            {{-- Welcome icon --}}
                            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#fff1e9] text-xl ring-1 ring-[#ffd9ca]">
                                👋
                            </div>


                            {{-- TITLE --}}
                            <div class="mt-6">

                                <p class="text-[10px] font-black uppercase tracking-[0.2em] text-[#df6845]">
                                    Welcome back
                                </p>

                                <h2 class="mt-2 text-[30px] font-black leading-tight tracking-[-0.035em] text-[#18232c] sm:text-[36px]">

                                    Sign in to

                                    <span class="text-[#f36b2f]">
                                        SurplusLink.
                                    </span>

                                </h2>

                                <p class="mt-3 max-w-sm text-[13px] leading-6 text-[#8b807a]">
                                    Continue your journey and help good food find a better destination.
                                </p>

                            </div>


                            {{-- SESSION STATUS --}}
                            @if (session('status'))

                                <div class="mt-5 rounded-xl border border-emerald-100 bg-emerald-50 px-4 py-3 text-[12px] font-semibold text-emerald-700">
                                    {{ session('status') }}
                                </div>

                            @endif


                            {{-- =================================================
                                 LOGIN FORM
                            ================================================== --}}
                            <form
                                method="POST"
                                action="{{ route('login') }}"
                                class="mt-7 space-y-5"
                            >

                                @csrf


                                {{-- EMAIL --}}
                                <div>

                                    <label
                                        for="email"
                                        class="text-[11px] font-black uppercase tracking-[0.14em] text-[#4b433e]"
                                    >
                                        Email address
                                    </label>


                                    <div class="group relative mt-2">

                                        <div class="pointer-events-none absolute left-4 top-1/2 z-10 flex -translate-y-1/2 items-center justify-center text-[#9c918a] transition group-focus-within:text-[#f36b2f]">

                                            <svg
                                                class="h-5 w-5"
                                                fill="none"
                                                stroke="currentColor"
                                                viewBox="0 0 24 24"
                                            >

                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="1.8"
                                                    d="M3 7l9 6 9-6M5 5h14a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2z"
                                                />

                                            </svg>

                                        </div>


                                        <input
                                            id="email"
                                            type="email"
                                            name="email"
                                            value="{{ old('email') }}"
                                            required
                                            autofocus
                                            autocomplete="username"
                                            placeholder="you@example.com"
                                            class="h-[58px] w-full rounded-[1.05rem] border-0 bg-[#faf8f6] pl-12 pr-4 text-[13px] font-semibold text-[#302a27] shadow-inner ring-1 ring-[#e5ddd8] transition duration-200 placeholder:text-[#aaa09a] focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#ff7048]/60 focus:shadow-[0_8px_25px_rgba(255,112,72,0.08)]"
                                        >

                                    </div>


                                    @error('email')

                                        <p class="mt-2 text-[11px] font-semibold text-rose-600">
                                            {{ $message }}
                                        </p>

                                    @enderror

                                </div>


                                {{-- PASSWORD --}}
                                <div>

                                    <label
                                        for="password"
                                        class="text-[11px] font-black uppercase tracking-[0.14em] text-[#4b433e]"
                                    >
                                        Password
                                    </label>


                                    <div class="group relative mt-2">

                                        <div class="pointer-events-none absolute left-4 top-1/2 z-10 flex -translate-y-1/2 items-center justify-center text-[#9c918a] transition group-focus-within:text-[#f36b2f]">

                                            <svg
                                                class="h-5 w-5"
                                                fill="none"
                                                stroke="currentColor"
                                                viewBox="0 0 24 24"
                                            >

                                                <rect
                                                    x="4"
                                                    y="10"
                                                    width="16"
                                                    height="11"
                                                    rx="2"
                                                    stroke-width="1.8"
                                                />

                                                <path
                                                    stroke-linecap="round"
                                                    stroke-width="1.8"
                                                    d="M8 10V7a4 4 0 018 0v3"
                                                />

                                            </svg>

                                        </div>


                                        <input
                                            id="password"
                                            type="password"
                                            name="password"
                                            required
                                            autocomplete="current-password"
                                            placeholder="Enter your password"
                                            class="h-[58px] w-full rounded-[1.05rem] border-0 bg-[#faf8f6] pl-12 pr-14 text-[13px] font-semibold tracking-[0.05em] text-[#302a27] shadow-inner ring-1 ring-[#e5ddd8] transition duration-200 placeholder:text-[#aaa09a] placeholder:tracking-normal focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#ff7048]/60 focus:shadow-[0_8px_25px_rgba(255,112,72,0.08)]"
                                        >


                                        <button
                                            type="button"
                                            id="togglePassword"
                                            aria-label="Show password"
                                            class="absolute right-2 top-1/2 flex h-10 w-10 -translate-y-1/2 items-center justify-center rounded-xl text-[#958a83] transition hover:bg-white hover:text-[#f36b2f] focus:outline-none focus:ring-2 focus:ring-orange-300"
                                        >

                                            <svg
                                                id="eyeIcon"
                                                class="h-5 w-5"
                                                fill="none"
                                                stroke="currentColor"
                                                viewBox="0 0 24 24"
                                            >

                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="1.8"
                                                    d="M2.5 12s3.5-6 9.5-6 9.5 6 9.5 6-3.5 6-9.5 6-9.5-6-9.5-6z"
                                                />

                                                <circle
                                                    cx="12"
                                                    cy="12"
                                                    r="2.5"
                                                    stroke-width="1.8"
                                                />

                                            </svg>

                                        </button>

                                    </div>


                                    @error('password')

                                        <p class="mt-2 text-[11px] font-semibold text-rose-600">
                                            {{ $message }}
                                        </p>

                                    @enderror

                                </div>


                                {{-- REMEMBER / FORGOT --}}
                                <div class="flex flex-col gap-3 pt-1 sm:flex-row sm:items-center sm:justify-between">

                                    <label
                                        for="remember_me"
                                        class="inline-flex cursor-pointer items-center gap-2.5"
                                    >

                                        <input
                                            id="remember_me"
                                            type="checkbox"
                                            name="remember"
                                            class="h-4 w-4 rounded-[5px] border-[#d9cec7] text-[#ff7048] shadow-sm focus:ring-2 focus:ring-[#ff7048]/40"
                                        >

                                        <span class="text-[12px] font-semibold text-[#756b64]">
                                            Remember me
                                        </span>

                                    </label>


                                    @if (Route::has('password.request'))

                                        <a
                                            href="{{ route('password.request') }}"
                                            class="text-[12px] font-black text-[#e26640] transition hover:text-[#c84e2e] hover:underline focus:outline-none"
                                        >
                                            Forgot your password?
                                        </a>

                                    @endif

                                </div>


                                {{-- LOGIN BUTTON --}}
                                <button
                                    type="submit"
                                    class="group relative flex h-[58px] w-full items-center justify-center gap-3 overflow-hidden rounded-[1.05rem] bg-gradient-to-r from-[#ff7048] to-[#f25f32] text-[12px] font-black uppercase tracking-[0.16em] text-white shadow-[0_14px_30px_rgba(255,112,72,0.28)] transition duration-300 hover:-translate-y-0.5 hover:shadow-[0_18px_38px_rgba(255,112,72,0.34)] focus:outline-none focus:ring-2 focus:ring-[#ff7048] focus:ring-offset-2 active:translate-y-0"
                                >

                                    <span class="absolute inset-0 -translate-x-full bg-gradient-to-r from-transparent via-white/20 to-transparent transition duration-700 group-hover:translate-x-full"></span>

                                    <span class="relative">
                                        Log in
                                    </span>

                                    <span class="relative text-lg transition duration-300 group-hover:translate-x-1">
                                        →
                                    </span>

                                </button>

                            </form>


                            {{-- REGISTER --}}
                            @if (Route::has('register'))

                                <div class="my-7 flex items-center gap-3">

                                    <div class="h-px flex-1 bg-[#eee7e2]"></div>

                                    <span class="whitespace-nowrap text-[10px] font-bold text-[#aaa09a]">
                                        New to SurplusLink?
                                    </span>

                                    <div class="h-px flex-1 bg-[#eee7e2]"></div>

                                </div>


                                <a
                                    href="{{ route('register') }}"
                                    class="group flex h-[50px] w-full items-center justify-center gap-2 rounded-[1rem] border border-[#e7ddd7] bg-white text-[12px] font-black text-[#403832] shadow-sm transition duration-300 hover:-translate-y-0.5 hover:border-[#ffcdbd] hover:bg-[#fffaf7] hover:text-[#e15f39] hover:shadow-md"
                                >

                                    Create an account

                                    <span class="transition duration-300 group-hover:translate-x-1">
                                        →
                                    </span>

                                </a>

                            @endif


                            {{-- SECURITY --}}
                            <div class="mt-6 flex items-center justify-center gap-2">

                                <svg
                                    class="h-4 w-4 text-emerald-600"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="1.8"
                                        d="M12 3l7 3v5c0 4.7-3 8.4-7 10-4-1.6-7-5.3-7-10V6l7-3z"
                                    />

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="1.8"
                                        d="M9 12l2 2 4-4"
                                    />

                                </svg>


                                <p class="text-[10px] font-semibold text-[#a09690]">
                                    Your account information is securely protected.
                                </p>

                            </div>

                        </div>


                        {{-- BOTTOM BRAND --}}
                        <p class="mt-5 text-center text-[10px] font-semibold text-[#aaa09a]">

                            SurplusLink Lanka

                            <span class="mx-1 text-[#d7cbc4]">
                                •
                            </span>

                            Save food. Support communities. Reduce waste.

                        </p>

                    </div>

                </div>

            </section>

        </div>

    </div>


    {{-- ================================================================
         PASSWORD VISIBILITY
    ================================================================= --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const passwordInput = document.getElementById('password');
            const toggleButton = document.getElementById('togglePassword');
            const eyeIcon = document.getElementById('eyeIcon');

            if (!passwordInput || !toggleButton || !eyeIcon) {
                return;
            }

            toggleButton.addEventListener('click', function () {

                const isPassword = passwordInput.type === 'password';

                passwordInput.type = isPassword ? 'text' : 'password';

                toggleButton.setAttribute(
                    'aria-label',
                    isPassword ? 'Hide password' : 'Show password'
                );

                eyeIcon.innerHTML = isPassword
                    ? `
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.8"
                            d="M3 3l18 18"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.8"
                            d="M10.6 10.6a2 2 0 002.8 2.8"
                        />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.8"
                            d="M9.9 5.2A10.6 10.6 0 0112 5c6 0 9.5 7 9.5 7a16 16 0 01-3.1 3.8M6.1 6.1C3.8 7.6 2.5 10 2.5 12c0 0 3.5 7 9.5 7 1.4 0 2.7-.3 3.8-.8"
                        />
                    `
                    : `
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.8"
                            d="M2.5 12s3.5-6 9.5-6 9.5 6 9.5 6-3.5 6-9.5 6-9.5-6-9.5-6z"
                        />

                        <circle
                            cx="12"
                            cy="12"
                            r="2.5"
                            stroke-width="1.8"
                        />
                    `;

            });

        });
    </script>

</body>

</html>