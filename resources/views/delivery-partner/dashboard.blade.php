<x-app-layout>

    <div class="min-h-screen overflow-hidden bg-[#fffaf6] text-[#241f1c] antialiased selection:bg-[#ff7048]/20">

        <style>
            @keyframes dp-float {
                0%, 100% { transform: translateY(0); }
                50% { transform: translateY(-8px); }
            }

            @keyframes dp-pulse {
                0%, 100% { transform: scale(1); opacity: .55; }
                50% { transform: scale(1.25); opacity: .12; }
            }

            @keyframes dp-drive {
                0% { left: 8%; }
                48% { left: 52%; }
                100% { left: 88%; }
            }

            @keyframes dp-route {
                0% { stroke-dashoffset: 900; }
                100% { stroke-dashoffset: 0; }
            }

            @keyframes dp-food {
                0%, 100% {
                    transform: translateY(0) rotate(0deg);
                    opacity: 1;
                }
                50% {
                    transform: translateY(-9px) rotate(-2deg);
                    opacity: .9;
                }
            }

            @keyframes dp-glow {
                0%, 100% { box-shadow: 0 0 0 0 rgba(255,112,72,.18); }
                50% { box-shadow: 0 0 0 12px rgba(255,112,72,0); }
            }

            @keyframes dp-scan {
                0% { transform: translateX(-110%); }
                100% { transform: translateX(110%); }
            }

            .dp-float {
                animation: dp-float 5s ease-in-out infinite;
            }

            .dp-float-slow {
                animation: dp-float 7s ease-in-out infinite;
            }

            .dp-pulse {
                animation: dp-pulse 2.8s ease-in-out infinite;
            }

            .dp-drive {
                animation: dp-drive 7s ease-in-out infinite alternate;
            }

            .dp-food {
                animation: dp-food 4s ease-in-out infinite;
            }

            .dp-glow {
                animation: dp-glow 3s ease-in-out infinite;
            }

            .dp-route-line {
                stroke-dasharray: 14 12;
                animation: dp-route 9s linear infinite;
            }

            .dp-scan {
                animation: dp-scan 4s ease-in-out infinite;
            }

            @media (prefers-reduced-motion: reduce) {
                .dp-float,
                .dp-float-slow,
                .dp-pulse,
                .dp-drive,
                .dp-food,
                .dp-glow,
                .dp-route-line,
                .dp-scan {
                    animation: none !important;
                }
            }
        </style>


        <div class="mx-auto max-w-[1440px] px-4 py-6 sm:px-6 lg:px-10 lg:py-9">


            {{-- =========================================================
                 HEADER
            ========================================================== --}}

            <section>

                <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">

                    <div class="max-w-3xl">

                        <div class="inline-flex items-center gap-2 rounded-full border border-[#f0ddd4] bg-white px-3.5 py-2 shadow-[0_4px_16px_rgba(40,25,18,0.035)]">

                            <span class="relative flex h-2.5 w-2.5">

                                <span class="dp-pulse absolute inset-0 rounded-full bg-[#ff7048]"></span>

                                <span class="relative h-2.5 w-2.5 rounded-full bg-[#ff7048]"></span>

                            </span>

                            <span class="text-[10px] font-black uppercase tracking-[0.18em] text-[#dc6844]">
                                Delivery Partner
                            </span>

                        </div>


                        <h1 class="mt-5 text-[34px] font-black leading-[0.95] tracking-[-0.035em] text-[#211c19] sm:text-[46px]">

                            Welcome, {{ auth()->user()->name }}

                            <span class="inline-block">
                                👋
                            </span>

                        </h1>


                        <p class="mt-4 max-w-2xl text-[14px] leading-6 text-[#887b74] sm:text-[15px]">
                            Keep surplus food moving from local kitchens to the people and communities who need it.
                        </p>

                    </div>


                    <a
                        href="{{ route('delivery-partner.profile') }}"
                        class="group inline-flex w-full items-center justify-center gap-3 rounded-2xl border border-[#eadcd5] bg-white px-5 py-3.5 text-[13px] font-black text-[#403731] shadow-[0_6px_20px_rgba(40,25,18,0.035)] transition duration-300 hover:-translate-y-0.5 hover:border-[#dfcbc1] hover:shadow-[0_12px_28px_rgba(40,25,18,0.07)] sm:w-auto"
                    >

                        <span class="flex h-8 w-8 items-center justify-center rounded-xl bg-[#fff1eb] text-base transition group-hover:scale-105">
                            ⚙️
                        </span>

                        <span>Manage Profile</span>

                        <span class="text-[#df6845] transition group-hover:translate-x-0.5">
                            →
                        </span>

                    </a>

                </div>

            </section>



            {{-- =========================================================
                 HERO — ROUTE TO IMPACT
            ========================================================== --}}

            <section class="relative mt-9 overflow-hidden rounded-[2.8rem] border border-[#f0d9cf] bg-[#fff1e9] shadow-[0_28px_70px_rgba(70,35,20,0.10)]">

                {{-- Background shapes --}}

                <div class="pointer-events-none absolute inset-0 overflow-hidden">

                    <div class="absolute -right-28 -top-28 h-[430px] w-[430px] rounded-full bg-[#ff7048]/10"></div>

                    <div class="absolute -bottom-32 left-[32%] h-[380px] w-[380px] rounded-full bg-[#e6a95d]/10 blur-3xl"></div>

                    <div class="absolute left-[46%] top-10 h-24 w-24 rounded-full border border-[#ff7048]/10"></div>

                    <div class="absolute bottom-12 right-[38%] h-16 w-16 rounded-full border border-emerald-600/10"></div>

                </div>


                <div class="relative grid lg:grid-cols-[.9fr_1.1fr]">


                    {{-- LEFT HERO COPY --}}

                    <div class="flex flex-col justify-center px-6 py-9 sm:px-9 sm:py-12 lg:px-14 lg:py-14">

                        <div class="inline-flex w-fit items-center gap-2 rounded-full border border-[#f1cbbd] bg-white/75 px-3.5 py-2 backdrop-blur">

                            <span class="flex h-6 w-6 items-center justify-center rounded-full bg-[#ff7048] text-[13px] text-white">
                                🏍️
                            </span>

                            <span class="text-[10px] font-black uppercase tracking-[0.15em] text-[#c85d3d]">
                                Route to Impact
                            </span>

                        </div>


                        <h2 class="mt-7 max-w-[13ch] text-[42px] font-black leading-[0.91] tracking-[-0.045em] text-[#211c19] sm:text-[54px]">

                            Food is ready.

                            <span class="text-[#ff7048]">
                                You move it.
                            </span>

                        </h2>


                        <p class="mt-6 max-w-xl text-[14px] leading-7 text-[#766962] sm:text-[15px]">
                            Every pickup is more than a delivery. It is a connection between surplus food and someone who can benefit from it.
                        </p>


                        <div class="mt-8 flex flex-wrap gap-3">

                            <a
                                href="#available-deliveries"
                                class="group inline-flex items-center gap-3 rounded-2xl bg-[#ff7048] px-5 py-3.5 text-[12px] font-black text-white shadow-[0_12px_25px_rgba(255,112,72,.22)] transition duration-300 hover:-translate-y-1 hover:bg-[#f5653d]"
                            >

                                Find a Delivery

                                <span class="flex h-6 w-6 items-center justify-center rounded-full bg-white/15 transition group-hover:translate-x-0.5">
                                    →
                                </span>

                            </a>


                            <a
                                href="#my-deliveries"
                                class="inline-flex items-center rounded-2xl border border-[#ead2c8] bg-white/70 px-5 py-3.5 text-[12px] font-black text-[#594c45] backdrop-blur transition hover:-translate-y-0.5 hover:bg-white"
                            >
                                My Deliveries
                            </a>

                        </div>


                        {{-- LIVE STATS --}}

                        <div class="mt-9 grid grid-cols-3 overflow-hidden rounded-2xl border border-[#efd7cd] bg-white/65 backdrop-blur">

                            <div class="px-3 py-4 sm:px-5">

                                <p class="text-[21px] font-black text-[#211c19]">
                                    {{ $availableDeliveries->count() }}
                                </p>

                                <p class="mt-1 text-[8px] font-black uppercase tracking-[0.13em] text-[#a4948c]">
                                    Available
                                </p>

                            </div>


                            <div class="border-l border-[#efdcd4] px-3 py-4 sm:px-5">

                                <p class="text-[21px] font-black text-[#211c19]">
                                    {{ $myDeliveries->whereIn('status', ['assigned', 'picked_up'])->count() }}
                                </p>

                                <p class="mt-1 text-[8px] font-black uppercase tracking-[0.13em] text-[#a4948c]">
                                    Active
                                </p>

                            </div>


                            <div class="border-l border-[#efdcd4] px-3 py-4 sm:px-5">

                                <p class="text-[21px] font-black text-emerald-700">
                                    {{ $myDeliveries->where('status', 'delivered')->count() }}
                                </p>

                                <p class="mt-1 text-[8px] font-black uppercase tracking-[0.13em] text-[#a4948c]">
                                    Completed
                                </p>

                            </div>

                        </div>

                    </div>



                    {{-- RIGHT VISUAL — MAP + RIDE --}}

                    <div class="relative min-h-[430px] overflow-hidden bg-[#f9eee7] lg:min-h-[520px]">


                        {{-- Food photography --}}

                        <img
                            src="https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=1000&q=85"
                            alt="Fresh prepared food"
                            class="absolute right-[-7%] top-[5%] h-[190px] w-[250px] rounded-[2rem] object-cover opacity-80 shadow-2xl rotate-[4deg] sm:h-[220px] sm:w-[290px]"
                        >


                        <div class="absolute inset-0 bg-gradient-to-r from-[#f9eee7] via-transparent to-transparent"></div>


                        {{-- Stylized map --}}

                        <div class="absolute bottom-0 left-0 right-0 top-[18%] overflow-hidden">


                            {{-- map grid --}}

                            <div
                                class="absolute inset-0 opacity-50"
                                style="
                                    background-image:
                                        linear-gradient(rgba(100,75,60,.07) 1px, transparent 1px),
                                        linear-gradient(90deg, rgba(100,75,60,.07) 1px, transparent 1px);
                                    background-size: 34px 34px;
                                "
                            ></div>


                            {{-- roads --}}

                            <div class="absolute -left-10 top-[38%] h-[18px] w-[120%] rotate-[9deg] rounded-full bg-white/80 shadow-sm"></div>

                            <div class="absolute -left-10 top-[67%] h-[22px] w-[120%] -rotate-[13deg] rounded-full bg-white/75 shadow-sm"></div>

                            <div class="absolute left-[42%] -top-10 h-[120%] w-[18px] rotate-[17deg] rounded-full bg-white/75 shadow-sm"></div>


                            {{-- Route SVG --}}

                            <svg
                                class="absolute inset-0 h-full w-full"
                                viewBox="0 0 700 450"
                                preserveAspectRatio="none"
                                aria-label="Stylized delivery route preview"
                            >

                                <path
                                    d="M70 330 C180 230 205 370 300 275 S445 100 615 155"
                                    fill="none"
                                    stroke="#ff7048"
                                    stroke-width="8"
                                    stroke-linecap="round"
                                    stroke-dasharray="14 12"
                                    class="dp-route-line"
                                />

                            </svg>


                            {{-- Pickup pin --}}

                            <div class="absolute left-[10%] top-[67%]">

                                <div class="relative flex h-12 w-12 items-center justify-center rounded-full border-4 border-white bg-[#ff7048] text-lg text-white shadow-[0_12px_25px_rgba(255,112,72,.30)]">
                                    🏪
                                </div>

                                <div class="mt-2 rounded-xl bg-white px-3 py-1.5 text-[8px] font-black uppercase tracking-wider text-[#6f625b] shadow-lg">
                                    Pickup
                                </div>

                            </div>


                            {{-- Community destination --}}

                            <div class="absolute right-[10%] top-[27%]">

                                <div class="relative flex h-12 w-12 items-center justify-center rounded-full border-4 border-white bg-emerald-600 text-lg text-white shadow-[0_12px_25px_rgba(22,101,52,.22)]">
                                    ❤️
                                </div>

                                <div class="mt-2 rounded-xl bg-white px-3 py-1.5 text-[8px] font-black uppercase tracking-wider text-emerald-700 shadow-lg">
                                    Community
                                </div>

                            </div>


                            {{-- Moving rider --}}

                            <div class="dp-drive absolute top-[48%] z-20">

                                <div class="relative flex items-center gap-2 rounded-2xl border border-white bg-white px-3 py-2 shadow-[0_15px_35px_rgba(40,25,18,.14)]">

                                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#fff0e9] text-xl">
                                        🏍️
                                    </div>

                                    <div class="hidden sm:block">

                                        <p class="text-[8px] font-black uppercase tracking-wider text-[#a39289]">
                                            Rider
                                        </p>

                                        <p class="text-[11px] font-black text-[#332a26]">
                                            Food in motion
                                        </p>

                                    </div>

                                </div>

                            </div>


                            {{-- Vehicle detail card --}}

                            <div class="dp-float absolute bottom-7 left-6 z-30 w-[230px] rounded-[1.5rem] border border-white/80 bg-white/95 p-4 shadow-[0_25px_55px_rgba(40,25,18,.14)] backdrop-blur-xl sm:left-8">

                                <div class="flex items-center justify-between">

                                    <div>

                                        <p class="text-[8px] font-black uppercase tracking-[0.15em] text-[#a6968e]">
                                            Your vehicle
                                        </p>

                                        <p class="mt-1 text-[14px] font-black text-[#241f1c]">
                                            {{ $deliveryPartner->vehicle_type }}
                                        </p>

                                    </div>

                                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-[#fff0e9] text-xl">
                                        🏍️
                                    </div>

                                </div>


                                <div class="mt-3 flex items-center justify-between rounded-xl bg-[#faf6f3] px-3 py-2.5">

                                    <span class="text-[9px] font-bold text-[#9a8b83]">
                                        Vehicle
                                    </span>

                                    <span class="text-[10px] font-black text-[#3b312c]">
                                        {{ $deliveryPartner->vehicle_number ?: 'Not provided' }}
                                    </span>

                                </div>

                            </div>


                            {{-- Route preview label --}}

                            <div class="absolute right-6 bottom-8 z-30 hidden rounded-2xl border border-white/70 bg-[#241f1c]/90 px-4 py-3 text-white shadow-2xl backdrop-blur-md sm:block">

                                <p class="text-[8px] font-black uppercase tracking-[0.15em] text-white/40">
                                    Visual route preview
                                </p>

                                <div class="mt-2 flex items-center gap-2 text-[10px] font-bold">

                                    <span class="h-2 w-2 rounded-full bg-[#ff7048]"></span>

                                    Kitchen

                                    <span class="text-white/30">→</span>

                                    <span class="h-2 w-2 rounded-full bg-emerald-400"></span>

                                    Community

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </section>



            {{-- =========================================================
                 SUCCESS / ERROR
            ========================================================== --}}

            @if (session('success'))

                <div class="mt-7 flex items-start gap-3 rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-3.5 shadow-sm">

                    <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-xl bg-emerald-100 text-sm text-emerald-700">
                        ✓
                    </div>

                    <div>

                        <p class="text-[12px] font-black text-emerald-800">
                            Delivery update successful
                        </p>

                        <p class="mt-0.5 text-[11px] leading-5 text-emerald-700">
                            {{ session('success') }}
                        </p>

                    </div>

                </div>

            @endif


            @if ($errors->has('delivery'))

                <div class="mt-4 flex items-start gap-3 rounded-2xl border border-rose-200 bg-rose-50 px-4 py-3.5 shadow-sm">

                    <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-xl bg-rose-100 text-sm font-black text-rose-700">
                        !
                    </div>

                    <div>

                        <p class="text-[12px] font-black text-rose-800">
                            Delivery update needs attention
                        </p>

                        <p class="mt-0.5 text-[11px] leading-5 text-rose-700">
                            {{ $errors->first('delivery') }}
                        </p>

                    </div>

                </div>

            @endif



            {{-- =========================================================
                 FOOD DELIVERY TRANSACTION ANIMATION
            ========================================================== --}}

            <section class="mt-12">

                <div class="flex flex-col gap-2">

                    <p class="text-[10px] font-black uppercase tracking-[0.18em] text-[#df6a46]">
                        Food in motion
                    </p>

                    <h2 class="text-[25px] font-black tracking-[-0.025em] text-[#211c19]">
                        From kitchen to community
                    </h2>

                    <p class="text-[13px] text-[#8b807a]">
                        A visual preview of how a surplus food delivery moves through the platform.
                    </p>

                </div>


                <div class="relative mt-6 overflow-hidden rounded-[2.3rem] border border-[#efdfd7] bg-white shadow-[0_12px_40px_rgba(38,26,20,.05)]">


                    {{-- animated scanning light --}}

                    <div class="dp-scan pointer-events-none absolute inset-y-0 left-0 w-1/3 bg-gradient-to-r from-transparent via-[#ff7048]/5 to-transparent"></div>


                    <div class="relative grid gap-0 lg:grid-cols-[1fr_auto_1fr_auto_1fr]">


                        {{-- Kitchen --}}

                        <div class="relative p-6 sm:p-8">

                            <div class="flex items-center gap-4">

                                <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-[#fff0e9] text-2xl">
                                    👨‍🍳
                                </div>

                                <div>

                                    <p class="text-[8px] font-black uppercase tracking-[0.16em] text-[#a7978f]">
                                        Step 01
                                    </p>

                                    <h3 class="mt-1 text-[16px] font-black text-[#2b2420]">
                                        Food ready
                                    </h3>

                                </div>

                            </div>


                            <div class="dp-food mt-5 overflow-hidden rounded-2xl">

                                <img
                                    src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=700&q=85"
                                    alt="Prepared surplus food"
                                    class="h-32 w-full object-cover"
                                >

                            </div>


                            <div class="mt-3 inline-flex items-center gap-2 rounded-full bg-[#fff7f2] px-3 py-1.5 text-[9px] font-black text-[#b76648]">
                                🍱 Surplus food
                            </div>

                        </div>


                        {{-- Connector --}}

                        <div class="hidden items-center justify-center px-2 lg:flex">

                            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-[#fff0e9] text-[#ff7048]">
                                →
                            </div>

                        </div>


                        {{-- Rider --}}

                        <div class="relative border-t border-[#f3e7e1] p-6 sm:p-8 lg:border-l lg:border-t-0">

                            <div class="flex items-center gap-4">

                                <div class="dp-glow flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-[#fff7e8] text-2xl">
                                    🏍️
                                </div>

                                <div>

                                    <p class="text-[8px] font-black uppercase tracking-[0.16em] text-[#a7978f]">
                                        Step 02
                                    </p>

                                    <h3 class="mt-1 text-[16px] font-black text-[#2b2420]">
                                        On the move
                                    </h3>

                                </div>

                            </div>


                            <div class="mt-8 rounded-2xl bg-[#faf7f4] p-5">

                                <div class="flex items-center justify-between">

                                    <span class="text-[9px] font-black uppercase tracking-wider text-[#a3938a]">
                                        Delivery route
                                    </span>

                                    <span class="inline-flex items-center gap-1.5 rounded-full bg-amber-50 px-2.5 py-1 text-[8px] font-black text-amber-700">
                                        <span class="h-1.5 w-1.5 rounded-full bg-amber-500"></span>
                                        Moving
                                    </span>

                                </div>


                                <div class="relative mt-6 h-12">

                                    <div class="absolute left-0 right-0 top-5 h-1 rounded-full bg-[#eadfd9]"></div>

                                    <div class="absolute left-0 top-5 h-1 w-2/3 rounded-full bg-gradient-to-r from-[#ff7048] to-[#e7a02e]"></div>

                                    <div class="dp-drive absolute top-0">

                                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-white text-lg shadow-lg">
                                            🏍️
                                        </div>

                                    </div>

                                </div>


                                <div class="mt-2 flex justify-between text-[8px] font-black uppercase tracking-wider text-[#a99b93]">

                                    <span>Pickup</span>

                                    <span>Destination</span>

                                </div>

                            </div>

                        </div>


                        {{-- Connector --}}

                        <div class="hidden items-center justify-center px-2 lg:flex">

                            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-emerald-50 text-emerald-600">
                                →
                            </div>

                        </div>


                        {{-- Community --}}

                        <div class="relative border-t border-[#f3e7e1] bg-[#f8fbf8] p-6 sm:p-8 lg:border-l lg:border-t-0">

                            <div class="flex items-center gap-4">

                                <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-emerald-100 text-2xl">
                                    ❤️
                                </div>

                                <div>

                                    <p class="text-[8px] font-black uppercase tracking-[0.16em] text-[#8ca093]">
                                        Step 03
                                    </p>

                                    <h3 class="mt-1 text-[16px] font-black text-[#284332]">
                                        Food arrives
                                    </h3>

                                </div>

                            </div>


                            <div class="mt-5 rounded-2xl border border-emerald-100 bg-white p-5">

                                <div class="flex items-center gap-3">

                                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-50 text-lg">
                                        ✓
                                    </div>

                                    <div>

                                        <p class="text-[11px] font-black text-emerald-800">
                                            Community impact
                                        </p>

                                        <p class="mt-1 text-[9px] text-emerald-700/70">
                                            Good food reaches its destination.
                                        </p>

                                    </div>

                                </div>


                                <div class="mt-5 flex items-center gap-2">

                                    <span class="h-2 flex-1 rounded-full bg-emerald-100"></span>

                                    <span class="h-2 flex-1 rounded-full bg-emerald-200"></span>

                                    <span class="h-2 flex-1 rounded-full bg-emerald-400"></span>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </section>



            {{-- =========================================================
                 DELIVERY OVERVIEW
            ========================================================== --}}

            <section class="mt-12">

                <div>

                    <p class="text-[10px] font-black uppercase tracking-[0.18em] text-[#df6a46]">
                        Delivery overview
                    </p>

                    <h2 class="mt-1.5 text-[25px] font-black tracking-[-0.025em] text-[#211c19]">
                        Your delivery activity
                    </h2>

                    <p class="mt-1 text-[13px] text-[#8b807a]">
                        See what is waiting, in progress, and completed.
                    </p>

                </div>


                <div class="mt-6 grid grid-cols-2 gap-3 sm:grid-cols-3 sm:gap-4">


                    {{-- Available --}}

                    <div class="group relative overflow-hidden rounded-[1.6rem] border border-[#f0e2db] bg-white p-4 shadow-[0_7px_24px_rgba(38,26,20,0.035)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_16px_34px_rgba(38,26,20,0.07)] sm:p-5">

                        <div class="flex h-11 w-11 items-center justify-center rounded-[14px] bg-[#fff1eb] text-[20px] transition group-hover:scale-110">
                            📦
                        </div>

                        <p class="mt-6 text-[31px] font-black leading-none tracking-[-0.03em] text-[#211c19]">
                            {{ $availableDeliveries->count() }}
                        </p>

                        <p class="mt-2 text-[12px] font-bold text-[#857972] sm:text-[13px]">
                            Available deliveries
                        </p>

                        <div class="absolute -bottom-10 -right-10 h-24 w-24 rounded-full bg-[#fff4ef] opacity-70 transition duration-500 group-hover:scale-125"></div>

                    </div>


                    {{-- Active --}}

                    <div class="group relative overflow-hidden rounded-[1.6rem] border border-[#f0e2db] bg-white p-4 shadow-[0_7px_24px_rgba(38,26,20,0.035)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_16px_34px_rgba(38,26,20,0.07)] sm:p-5">

                        <div class="flex h-11 w-11 items-center justify-center rounded-[14px] bg-[#fff7e8] text-[20px] transition group-hover:scale-110">
                            🚚
                        </div>

                        <p class="mt-6 text-[31px] font-black leading-none tracking-[-0.03em] text-[#211c19]">
                            {{ $myDeliveries->whereIn('status', ['assigned', 'picked_up'])->count() }}
                        </p>

                        <p class="mt-2 text-[12px] font-bold text-[#857972] sm:text-[13px]">
                            Active deliveries
                        </p>

                        <div class="absolute -bottom-10 -right-10 h-24 w-24 rounded-full bg-[#fff8ec] opacity-70 transition duration-500 group-hover:scale-125"></div>

                    </div>


                    {{-- Completed --}}

                    <div class="group relative col-span-2 overflow-hidden rounded-[1.6rem] border border-[#f0e2db] bg-white p-4 shadow-[0_7px_24px_rgba(38,26,20,0.035)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_16px_34px_rgba(38,26,20,0.07)] sm:col-span-1 sm:p-5">

                        <div class="flex h-11 w-11 items-center justify-center rounded-[14px] bg-[#edf6ef] text-[20px] transition group-hover:scale-110">
                            ✓
                        </div>

                        <p class="mt-6 text-[31px] font-black leading-none tracking-[-0.03em] text-emerald-700">
                            {{ $myDeliveries->where('status', 'delivered')->count() }}
                        </p>

                        <p class="mt-2 text-[12px] font-bold text-[#857972] sm:text-[13px]">
                            Completed deliveries
                        </p>

                        <div class="absolute -bottom-10 -right-10 h-24 w-24 rounded-full bg-[#edf6ef] opacity-70 transition duration-500 group-hover:scale-125"></div>

                    </div>

                </div>

            </section>



            {{-- =========================================================
                 AVAILABLE DELIVERIES
            ========================================================== --}}

            <section id="available-deliveries" class="mt-12 scroll-mt-24">

                <div class="flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">

                    <div>

                        <p class="text-[10px] font-black uppercase tracking-[0.18em] text-[#df6a46]">
                            Find a task
                        </p>

                        <h2 class="mt-1.5 text-[25px] font-black tracking-[-0.025em] text-[#211c19]">
                            Available Deliveries
                        </h2>

                        <p class="mt-1 text-[13px] text-[#8b807a]">
                            Delivery tasks currently waiting for a partner.
                        </p>

                    </div>


                    <span class="inline-flex w-fit items-center gap-2 rounded-full bg-[#fff1eb] px-3.5 py-2 text-[10px] font-black uppercase tracking-wider text-[#df6845]">

                        <span class="h-2 w-2 rounded-full bg-[#ff7048]"></span>

                        {{ $availableDeliveries->count() }} Available

                    </span>

                </div>


                @if ($availableDeliveries->isEmpty())

                    <div class="mt-6 rounded-[2rem] border border-[#f0e2db] bg-white px-6 py-14 text-center shadow-[0_7px_24px_rgba(38,26,20,0.035)]">

                        <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-[#fff3ed] text-2xl">
                            🕊️
                        </div>

                        <h3 class="mt-5 text-[17px] font-black text-[#241f1c]">
                            No deliveries available right now
                        </h3>

                        <p class="mx-auto mt-2 max-w-md text-[12px] leading-5 text-[#8b807a]">
                            New delivery tasks will appear here when approved food requests need a delivery partner.
                        </p>

                        <div class="mt-6 inline-flex items-center gap-2 rounded-full bg-[#f7f1ed] px-4 py-2 text-[10px] font-bold text-[#9a8c84]">
                            ✨ Check back when new tasks arrive
                        </div>

                    </div>

                @else

                    <div class="mt-6 space-y-4">

                        @foreach ($availableDeliveries as $delivery)

                            @php
                                $quantity = rtrim(
                                    rtrim(
                                        number_format(
                                            (float) $delivery->foodRequest->quantity,
                                            2,
                                            '.',
                                            ''
                                        ),
                                        '0'
                                    ),
                                    '.'
                                );
                            @endphp


                            <article class="group overflow-hidden rounded-[1.9rem] border border-[#f0e2db] bg-white shadow-[0_8px_28px_rgba(38,26,20,0.035)] transition duration-300 hover:-translate-y-0.5 hover:border-[#e4d3ca] hover:shadow-[0_18px_40px_rgba(38,26,20,0.07)]">

                                <div class="p-5 sm:p-6">

                                    <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">


                                        <div class="min-w-0 flex-1">

                                            <div class="flex flex-wrap items-center gap-2.5">

                                                <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-[#fff1eb] text-[21px]">
                                                    🍱
                                                </span>

                                                <div class="min-w-0">

                                                    <p class="text-[9px] font-black uppercase tracking-[0.15em] text-[#b09f97]">
                                                        New delivery task
                                                    </p>

                                                    <h3 class="mt-0.5 break-words text-[18px] font-black text-[#241f1c]">
                                                        {{ $delivery->foodRequest->foodListing->title }}
                                                    </h3>

                                                </div>

                                                <span class="inline-flex shrink-0 items-center rounded-full bg-[#fff7e8] px-3 py-1 text-[9px] font-black uppercase tracking-wider text-[#bd861e]">
                                                    Pending
                                                </span>

                                            </div>


                                            <div class="mt-6 grid gap-3 md:grid-cols-[1fr_auto_1fr] md:items-stretch">

                                                <div class="rounded-2xl border border-[#f0e5df] bg-[#fffaf7] p-4">

                                                    <div class="flex items-center gap-2">

                                                        <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-[#fff0e9] text-sm">
                                                            📍
                                                        </span>

                                                        <p class="text-[9px] font-black uppercase tracking-[0.13em] text-[#df6845]">
                                                            Pickup
                                                        </p>

                                                    </div>

                                                    <p class="mt-3 break-words text-[11.5px] leading-5 text-[#625852]">
                                                        {{ $delivery->pickup_address }}
                                                    </p>

                                                </div>


                                                <div class="hidden items-center justify-center md:flex">

                                                    <div class="flex h-9 w-9 items-center justify-center rounded-full bg-[#f7eee9] text-sm text-[#df6845]">
                                                        →
                                                    </div>

                                                </div>


                                                <div class="rounded-2xl border border-[#e5eee7] bg-[#f7fbf8] p-4">

                                                    <div class="flex items-center gap-2">

                                                        <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-white text-sm shadow-sm">
                                                            📦
                                                        </span>

                                                        <p class="text-[9px] font-black uppercase tracking-[0.13em] text-emerald-700">
                                                            Delivery
                                                        </p>

                                                    </div>

                                                    <p class="mt-3 break-words text-[11.5px] leading-5 text-[#625852]">
                                                        {{ $delivery->delivery_address }}
                                                    </p>

                                                </div>

                                            </div>


                                            <div class="mt-4 flex flex-wrap gap-x-5 gap-y-2">

                                                <span class="inline-flex items-center gap-1.5 text-[11px] font-semibold text-[#8b807a]">
                                                    🍱
                                                    {{ $quantity }}
                                                    {{ $delivery->foodRequest->foodListing->quantity_unit }}
                                                </span>

                                                <span class="inline-flex items-center gap-1.5 text-[11px] font-semibold text-[#8b807a]">
                                                    🏪
                                                    <span class="break-words">
                                                        {{ $delivery->foodRequest->foodListing->restaurant->business_name }}
                                                    </span>
                                                </span>

                                                <span class="inline-flex items-center gap-1.5 text-[11px] font-semibold text-[#8b807a]">
                                                    👤
                                                    <span class="break-words">
                                                        {{ $delivery->foodRequest->requester->name }}
                                                    </span>
                                                </span>

                                            </div>

                                        </div>


                                        <div class="w-full shrink-0 lg:w-auto">

                                            <form
                                                method="POST"
                                                action="{{ route('delivery-partner.deliveries.accept', $delivery->id) }}"
                                            >

                                                @csrf
                                                @method('PATCH')

                                                <button
                                                    type="submit"
                                                    class="group/btn inline-flex w-full items-center justify-center gap-2.5 rounded-2xl bg-[#ff7048] px-6 py-3.5 text-[12px] font-black text-white shadow-[0_10px_22px_rgba(255,112,72,0.20)] transition duration-300 hover:-translate-y-0.5 hover:bg-[#f5653d] hover:shadow-[0_14px_28px_rgba(255,112,72,0.27)] lg:w-auto"
                                                >

                                                    <span class="text-base transition group-hover/btn:translate-x-0.5">
                                                        🚚
                                                    </span>

                                                    Accept Delivery

                                                    <span class="transition group-hover/btn:translate-x-0.5">
                                                        →
                                                    </span>

                                                </button>

                                            </form>

                                        </div>

                                    </div>

                                </div>

                            </article>

                        @endforeach

                    </div>

                @endif

            </section>



            {{-- =========================================================
                 MY DELIVERIES
            ========================================================== --}}

            <section id="my-deliveries" class="mt-12 scroll-mt-24">

                <div class="flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">

                    <div>

                        <p class="text-[10px] font-black uppercase tracking-[0.18em] text-[#df6a46]">
                            Your route history
                        </p>

                        <h2 class="mt-1.5 text-[25px] font-black tracking-[-0.025em] text-[#211c19]">
                            My Deliveries
                        </h2>

                        <p class="mt-1 text-[13px] text-[#8b807a]">
                            Manage your assigned tasks and update their progress.
                        </p>

                    </div>


                    <span class="inline-flex w-fit items-center rounded-full bg-[#f3f0f7] px-3.5 py-2 text-[10px] font-black uppercase tracking-wider text-[#76687e]">
                        {{ $myDeliveries->count() }} Total
                    </span>

                </div>


                @if ($myDeliveries->isEmpty())

                    <div class="mt-6 rounded-[2rem] border border-[#f0e2db] bg-white px-6 py-14 text-center shadow-[0_7px_24px_rgba(38,26,20,0.035)]">

                        <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-[#f7f1ed] text-2xl">
                            🚚
                        </div>

                        <h3 class="mt-5 text-[17px] font-black text-[#241f1c]">
                            No assigned deliveries yet
                        </h3>

                        <p class="mx-auto mt-2 max-w-md text-[12px] leading-5 text-[#8b807a]">
                            When you accept a delivery task, it will appear here so you can track the full journey.
                        </p>

                    </div>

                @else

                    <div class="mt-6 space-y-5">

                        @foreach ($myDeliveries as $delivery)

                            @php
                                $quantity = rtrim(
                                    rtrim(
                                        number_format(
                                            (float) $delivery->foodRequest->quantity,
                                            2,
                                            '.',
                                            ''
                                        ),
                                        '0'
                                    ),
                                    '.'
                                );

                                $statusClasses = [
                                    'assigned' => 'bg-[#fff1eb] text-[#d95f3e] border-[#ffd8ca]',
                                    'picked_up' => 'bg-[#fff7e8] text-[#b47d19] border-[#f1dfb6]',
                                    'delivered' => 'bg-[#edf6ef] text-[#317a4e] border-[#d1e5d6]',
                                    'cancelled' => 'bg-[#fff0f0] text-[#c94d4d] border-[#f0cccc]',
                                ];

                                $statusLabels = [
                                    'assigned' => 'Assigned',
                                    'picked_up' => 'In Transit',
                                    'delivered' => 'Completed',
                                    'cancelled' => 'Cancelled',
                                ];

                                $statusClass = $statusClasses[$delivery->status]
                                    ?? 'bg-[#f5f2ef] text-[#756a63] border-[#e6ddd7]';

                                $statusLabel = $statusLabels[$delivery->status]
                                    ?? ucfirst(str_replace('_', ' ', $delivery->status));
                            @endphp


                            <article class="overflow-hidden rounded-[2rem] border border-[#f0e2db] bg-white shadow-[0_8px_28px_rgba(38,26,20,0.035)]">


                                <div class="border-b border-[#f3e9e4] px-5 py-5 sm:px-6">

                                    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

                                        <div class="flex min-w-0 items-center gap-3">

                                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-[#fff1eb] text-[20px]">
                                                🍱
                                            </div>

                                            <div class="min-w-0">

                                                <p class="text-[9px] font-black uppercase tracking-[0.15em] text-[#b09f97]">
                                                    Delivery Task #{{ $delivery->id }}
                                                </p>

                                                <h3 class="mt-1 break-words text-[17px] font-black text-[#241f1c]">
                                                    {{ $delivery->foodRequest->foodListing->title }}
                                                </h3>

                                            </div>

                                        </div>


                                        <span class="inline-flex w-fit shrink-0 items-center rounded-full border px-3 py-1.5 text-[9px] font-black uppercase tracking-wider {{ $statusClass }}">
                                            {{ $statusLabel }}
                                        </span>

                                    </div>

                                </div>


                                <div class="p-5 sm:p-6">


                                    {{-- Progress --}}

                                    <div class="mb-7">

                                        <div class="flex items-center justify-between text-[9px] font-black uppercase tracking-[0.12em]">

                                            <span class="{{ in_array($delivery->status, ['assigned', 'picked_up', 'delivered']) ? 'text-[#df6845]' : 'text-[#b4a59d]' }}">
                                                Assigned
                                            </span>

                                            <span class="{{ in_array($delivery->status, ['picked_up', 'delivered']) ? 'text-[#d08b20]' : 'text-[#b4a59d]' }}">
                                                Picked up
                                            </span>

                                            <span class="{{ $delivery->status === 'delivered' ? 'text-emerald-600' : 'text-[#b4a59d]' }}">
                                                Delivered
                                            </span>

                                        </div>


                                        <div class="mt-3 flex items-center">

                                            <div class="h-2 flex-1 overflow-hidden rounded-full bg-[#f2e9e4]">

                                                <div
                                                    class="h-full rounded-full transition-all duration-500
                                                        {{ $delivery->status === 'assigned' ? 'w-1/3 bg-[#ff7048]' : '' }}
                                                        {{ $delivery->status === 'picked_up' ? 'w-2/3 bg-[#e7a02e]' : '' }}
                                                        {{ $delivery->status === 'delivered' ? 'w-full bg-emerald-500' : '' }}
                                                        {{ $delivery->status === 'cancelled' ? 'w-0 bg-rose-400' : '' }}"
                                                ></div>

                                            </div>

                                        </div>

                                    </div>


                                    {{-- Route --}}

                                    <div class="grid gap-3 md:grid-cols-[1fr_auto_1fr] md:items-stretch">

                                        <div class="rounded-2xl border border-[#f0e5df] bg-[#fffaf7] p-4">

                                            <div class="flex items-center gap-2">

                                                <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-[#fff0e9] text-sm">
                                                    📍
                                                </span>

                                                <p class="text-[9px] font-black uppercase tracking-[0.13em] text-[#df6845]">
                                                    Pickup
                                                </p>

                                            </div>

                                            <p class="mt-3 break-words text-[11.5px] leading-5 text-[#625852]">
                                                {{ $delivery->pickup_address }}
                                            </p>

                                        </div>


                                        <div class="hidden items-center justify-center md:flex">

                                            <div class="flex h-9 w-9 items-center justify-center rounded-full bg-[#f7eee9] text-sm text-[#df6845]">
                                                →
                                            </div>

                                        </div>


                                        <div class="rounded-2xl border border-[#e5eee7] bg-[#f7fbf8] p-4">

                                            <div class="flex items-center gap-2">

                                                <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-white text-sm shadow-sm">
                                                    📦
                                                </span>

                                                <p class="text-[9px] font-black uppercase tracking-[0.13em] text-emerald-700">
                                                    Destination
                                                </p>

                                            </div>

                                            <p class="mt-3 break-words text-[11.5px] leading-5 text-[#625852]">
                                                {{ $delivery->delivery_address }}
                                            </p>

                                        </div>

                                    </div>


                                    {{-- Meta --}}

                                    <div class="mt-4 grid gap-3 sm:grid-cols-3">

                                        <div class="rounded-xl bg-[#faf7f4] px-4 py-3">

                                            <p class="text-[9px] font-black uppercase tracking-[0.12em] text-[#a99b93]">
                                                Quantity
                                            </p>

                                            <p class="mt-1 text-[12px] font-black text-[#352d29]">
                                                {{ $quantity }}
                                                {{ $delivery->foodRequest->foodListing->quantity_unit }}
                                            </p>

                                        </div>


                                        <div class="rounded-xl bg-[#faf7f4] px-4 py-3">

                                            <p class="text-[9px] font-black uppercase tracking-[0.12em] text-[#a99b93]">
                                                Restaurant
                                            </p>

                                            <p class="mt-1 break-words text-[12px] font-black text-[#352d29]">
                                                {{ $delivery->foodRequest->foodListing->restaurant->business_name }}
                                            </p>

                                        </div>


                                        <div class="rounded-xl bg-[#faf7f4] px-4 py-3">

                                            <p class="text-[9px] font-black uppercase tracking-[0.12em] text-[#a99b93]">
                                                Recipient
                                            </p>

                                            <p class="mt-1 break-words text-[12px] font-black text-[#352d29]">
                                                {{ $delivery->foodRequest->requester->name }}
                                            </p>

                                        </div>

                                    </div>


                                    {{-- Actions --}}

                                    <div class="mt-5 border-t border-[#f3e9e4] pt-5">

                                        @if ($delivery->status === 'assigned')

                                            <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

                                                <div>

                                                    <p class="text-[13px] font-black text-[#241f1c]">
                                                        Ready to start?
                                                    </p>

                                                    <p class="mt-1 text-[11px] leading-5 text-[#8b807a]">
                                                        Pick up the food and start the delivery journey.
                                                    </p>

                                                </div>


                                                <form
                                                    method="POST"
                                                    action="{{ route('delivery-partner.deliveries.in-transit', $delivery->id) }}"
                                                >

                                                    @csrf
                                                    @method('PATCH')

                                                    <button
                                                        type="submit"
                                                        class="inline-flex w-full items-center justify-center gap-2 rounded-2xl bg-[#e79a2c] px-6 py-3.5 text-[12px] font-black text-white shadow-[0_9px_20px_rgba(231,154,44,0.18)] transition duration-300 hover:-translate-y-0.5 hover:bg-[#d98d21] sm:w-auto"
                                                    >
                                                        🚚
                                                        Start Delivery
                                                        →
                                                    </button>

                                                </form>

                                            </div>


                                        @elseif ($delivery->status === 'picked_up')

                                            <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

                                                <div>

                                                    <p class="text-[13px] font-black text-[#241f1c]">
                                                        Delivery in progress
                                                    </p>

                                                    <p class="mt-1 text-[11px] leading-5 text-[#8b807a]">
                                                        Confirm once the food reaches the recipient.
                                                    </p>

                                                </div>


                                                <form
                                                    method="POST"
                                                    action="{{ route('delivery-partner.deliveries.complete', $delivery->id) }}"
                                                >

                                                    @csrf
                                                    @method('PATCH')

                                                    <button
                                                        type="submit"
                                                        class="inline-flex w-full items-center justify-center gap-2 rounded-2xl bg-[#3b8b5c] px-6 py-3.5 text-[12px] font-black text-white shadow-[0_9px_20px_rgba(59,139,92,0.18)] transition duration-300 hover:-translate-y-0.5 hover:bg-[#32794f] sm:w-auto"
                                                    >
                                                        ✓
                                                        Complete Delivery
                                                    </button>

                                                </form>

                                            </div>


                                        @elseif ($delivery->status === 'delivered')

                                            <div class="flex items-center gap-3 rounded-2xl border border-[#d6e9da] bg-[#f1f8f3] px-4 py-3.5">

                                                <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-[#e2f1e5] text-emerald-700">
                                                    ✓
                                                </div>

                                                <div>

                                                    <p class="text-[12px] font-black text-emerald-800">
                                                        Delivery completed
                                                    </p>

                                                    <p class="mt-0.5 text-[10.5px] text-emerald-700">
                                                        This delivery successfully reached its destination.
                                                    </p>

                                                </div>

                                            </div>


                                        @elseif ($delivery->status === 'cancelled')

                                            <div class="flex items-center gap-3 rounded-2xl border border-[#efd0d0] bg-[#fff4f4] px-4 py-3.5">

                                                <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-[#ffe5e5] text-rose-600">
                                                    !
                                                </div>

                                                <div>

                                                    <p class="text-[12px] font-black text-rose-800">
                                                        Delivery cancelled
                                                    </p>

                                                    <p class="mt-0.5 text-[10.5px] text-rose-700">
                                                        This delivery task is no longer active.
                                                    </p>

                                                </div>

                                            </div>

                                        @endif

                                    </div>

                                </div>

                            </article>

                        @endforeach

                    </div>

                @endif

            </section>



            {{-- =========================================================
                 RECENT UPDATES
            ========================================================== --}}

            <section class="mt-12">

                <div class="flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">

                    <div>

                        <p class="text-[10px] font-black uppercase tracking-[0.18em] text-[#df6a46]">
                            Stay updated
                        </p>

                        <h2 class="mt-1.5 text-[25px] font-black tracking-[-0.025em] text-[#211c19]">
                            Recent Updates
                        </h2>

                        <p class="mt-1 text-[13px] text-[#8b807a]">
                            Important updates about your requests and deliveries.
                        </p>

                    </div>


                    <a
                        href="{{ route('notifications.index') }}"
                        class="inline-flex w-fit items-center gap-1.5 text-[12px] font-black text-[#df6845] transition hover:text-[#c95232]"
                    >
                        View all
                        <span>→</span>
                    </a>

                </div>


                <div class="mt-5 overflow-hidden rounded-[2rem] border border-[#f0e2db] bg-white shadow-[0_8px_28px_rgba(38,26,20,0.035)]">

                    @forelse ($recentNotifications as $notification)

                        <a
                            href="{{ $notification->data['food_request_id'] ?? false ? route('food-requests.my-requests') : route('notifications.index') }}"
                            class="group block border-b border-[#f3e9e4] last:border-b-0 transition duration-300 hover:bg-[#fffaf7] {{ is_null($notification->read_at) ? 'bg-[#fff8f3]' : 'bg-white' }}"
                        >

                            <div class="flex gap-4 px-5 py-5 sm:px-6">

                                <div class="relative flex h-11 w-11 shrink-0 items-center justify-center rounded-[14px] {{ is_null($notification->read_at) ? 'bg-[#fff0e9] text-[#df6845]' : 'bg-[#f7f1ed] text-[#897b73]' }}">

                                    <span class="text-lg">
                                        🔔
                                    </span>

                                    @if (is_null($notification->read_at))

                                        <span class="absolute -right-1 -top-1 h-3 w-3 rounded-full border-2 border-white bg-[#ff7048]"></span>

                                    @endif

                                </div>


                                <div class="min-w-0 flex-1">

                                    <div class="flex flex-wrap items-center gap-2">

                                        <p class="break-words text-[13px] font-black text-[#241f1c]">
                                            {{ $notification->data['title'] ?? 'Notification' }}
                                        </p>

                                        @if (is_null($notification->read_at))

                                            <span class="inline-flex rounded-full bg-[#ff7048] px-2 py-0.5 text-[8px] font-black uppercase tracking-wider text-white">
                                                New
                                            </span>

                                        @endif

                                    </div>

                                    <p class="mt-1.5 break-words text-[12px] leading-5 text-[#81746d]">
                                        {{ $notification->data['message'] ?? '' }}
                                    </p>

                                    <div class="mt-2 flex flex-wrap items-center gap-2 text-[10px] font-semibold text-[#b0a19a]">

                                        <span>
                                            {{ $notification->created_at->diffForHumans() }}
                                        </span>

                                        @if ($notification->data['food_request_id'] ?? false)

                                            <span class="h-1 w-1 rounded-full bg-[#d7cbc4]"></span>

                                            <span class="text-[#df6845]">
                                                View request →
                                            </span>

                                        @endif

                                    </div>

                                </div>


                                <div class="hidden shrink-0 items-center sm:flex">

                                    <span class="flex h-8 w-8 items-center justify-center rounded-full bg-[#f8f2ee] text-[#a18f86] transition duration-300 group-hover:bg-[#fff0e9] group-hover:text-[#df6845] group-hover:translate-x-0.5">
                                        →
                                    </span>

                                </div>

                            </div>

                        </a>

                    @empty

                        <div class="px-6 py-12 text-center sm:py-14">

                            <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-[#fff4ef] text-2xl shadow-sm">
                                ✨
                            </div>

                            <h3 class="mt-5 text-[17px] font-black text-[#241f1c]">
                                You're all caught up
                            </h3>

                            <p class="mx-auto mt-2 max-w-md text-[12px] leading-5 text-[#8b807a]">
                                New delivery and request updates will appear here when something needs your attention.
                            </p>

                        </div>

                    @endforelse

                </div>

            </section>



            {{-- =========================================================
                 MISSION
            ========================================================== --}}

            <section class="mt-12">

                <div class="relative overflow-hidden rounded-[2.3rem] bg-[#214333] px-6 py-8 sm:px-9">

                    <div class="absolute -right-16 -top-20 h-48 w-48 rounded-full bg-white/[0.05]"></div>

                    <div class="absolute -bottom-20 left-[35%] h-40 w-40 rounded-full bg-[#ff7048]/10 blur-xl"></div>

                    <div class="relative flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between">

                        <div class="flex items-start gap-4">

                            <div class="dp-float flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-white/10 text-xl">
                                🌱
                            </div>

                            <div>

                                <p class="text-[9px] font-black uppercase tracking-[0.17em] text-white/40">
                                    SurplusLink mission
                                </p>

                                <h3 class="mt-1.5 text-[20px] font-black text-white">
                                    Move food. Reduce waste. Create impact.
                                </h3>

                                <p class="mt-1.5 max-w-2xl text-[11.5px] leading-5 text-white/55">
                                    Every completed delivery helps keep surplus food moving through the community.
                                </p>

                            </div>

                        </div>


                        <a
                            href="{{ route('delivery-partner.profile') }}"
                            class="inline-flex shrink-0 items-center justify-center rounded-xl bg-white px-5 py-3 text-[11px] font-black text-[#214333] transition hover:bg-[#fff5ef]"
                        >
                            View Profile →
                        </a>

                    </div>

                </div>

            </section>



            {{-- FOOTER --}}

            <section class="mt-12 pb-3">

                <div class="flex items-center gap-4">

                    <span class="h-px flex-1 bg-gradient-to-r from-transparent to-[#eee1da]"></span>

                    <span class="flex items-center gap-2 text-[9px] font-black uppercase tracking-[0.17em] text-[#b9aaa3]">
                        ♻️ SurplusLink Lanka
                    </span>

                    <span class="h-px flex-1 bg-gradient-to-l from-transparent to-[#eee1da]"></span>

                </div>

                <p class="mt-4 text-center text-[10px] font-bold tracking-[0.08em] text-[#c3b5ae]">
                    Connect surplus • Deliver with purpose • Reduce waste
                </p>

            </section>


        </div>

    </div>

</x-app-layout>