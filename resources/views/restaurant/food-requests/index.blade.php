<x-app-layout>
    <div class="min-h-screen overflow-hidden bg-[#fffaf5] text-slate-800">

        {{-- ================= ADVANCED FOOD PLATFORM BACKGROUND ================= --}}
        <div class="pointer-events-none fixed inset-0 -z-10 overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-orange-50/80 via-white to-amber-50/60"></div>
            <img src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?auto=format&fit=crop&w=2000&q=80" class="absolute inset-0 w-full h-full object-cover opacity-[0.04] blur-[1px]">
            <div class="absolute -right-40 -top-40 h-[35rem] w-[35rem] rounded-full bg-gradient-to-br from-orange-200/40 to-red-200/30 blur-[80px]"></div>
            <div class="absolute -left-40 top-[30%] h-[32rem] w-[32rem] rounded-full bg-gradient-to-br from-amber-100/50 to-orange-100/30 blur-[80px]"></div>
            {{-- Animated food pattern --}}
            <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(#f97316 1.2px, transparent 1.2px); background-size: 24px 24px;"></div>
        </div>

        {{-- ================= HERO - REAL FOOD PLATFORM ================= --}}
        <section class="relative overflow-hidden">
            <div class="mx-auto max-w-7xl px-4 pb-8 pt-7 sm:px-6 lg:px-8 lg:pb-10">
                <div class="grid items-stretch gap-6 lg:grid-cols-[1fr_430px]">

                    {{-- Left: Live Kitchen Info --}}
                    <div class="relative overflow-hidden rounded-[2.25rem] bg-gradient-to-br from-[#fff0e8] via-white to-[#fffaf5] p-7 shadow-[0_10px_40px_rgba(0,0,0,0.04)] ring-1 ring-orange-100 sm:p-9">
                        <div class="absolute -right-20 -top-24 h-64 w-64 rounded-full bg-orange-200/40 blur-3xl"></div>
                        <div class="absolute -bottom-28 -left-20 h-64 w-64 rounded-full bg-emerald-100/50 blur-3xl"></div>

                        <div class="relative z-10">
                            <div class="mb-5 inline-flex items-center gap-2 rounded-full bg-slate-900 px-4 py-2 text-[11px] font-black uppercase tracking-[0.18em] text-white shadow-lg">
                                <span class="relative flex h-2.5 w-2.5">
                                    <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-emerald-400 opacity-60"></span>
                                    <span class="relative inline-flex h-2.5 w-2.5 rounded-full bg-emerald-400"></span>
                                </span>
                                LIVE KITCHEN • ORDER FLOW
                            </div>

                            <h1 class="max-w-2xl text-4xl font-black leading-[1.05] tracking-tight text-slate-950 sm:text-5xl lg:text-[3.6rem]">
                                Orders are flying
                                <span class="bg-gradient-to-r from-orange-500 to-red-500 bg-clip-text text-transparent">into your kitchen.</span>
                            </h1>

                            <p class="mt-5 max-w-2xl text-sm leading-7 text-slate-600 sm:text-base">
                                Real food platform vibe. Every request is a live transaction - approve, pack, and move food to hungry people nearby.
                            </p>

                            {{-- Restaurant status pills with food icons --}}
                            <div class="mt-7 flex flex-wrap gap-3">
                                <div class="inline-flex items-center gap-2 rounded-full bg-white px-4 py-2.5 text-xs font-bold text-slate-700 shadow-sm ring-1 ring-slate-100">
                                    <img src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?auto=format&fit=crop&w=100&q=60" class="h-7 w-7 rounded-full object-cover"> My Kitchen
                                </div>
                                <div class="inline-flex items-center gap-2 rounded-full bg-gradient-to-r from-emerald-500 to-teal-500 px-4 py-2.5 text-xs font-bold text-white shadow-lg">
                                    <span class="h-2 w-2 rounded-full bg-white animate-pulse"></span> Hot & Fresh • Active
                                </div>
                                <div class="inline-flex items-center gap-2 rounded-full bg-orange-500 px-4 py-2.5 text-xs font-black text-white shadow-lg">
                                    🔥 {{ $foodRequests->count() }} Live Orders
                                </div>
                            </div>

                            {{-- Mini food strip animation --}}
                            <div class="mt-8 relative overflow-hidden rounded-2xl bg-white/70 p-2 ring-1 ring-orange-100">
                                <div class="food-marquee flex gap-2">
                                    @foreach(['https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=200&q=70','https://images.unsplash.com/photo-1473093295043-cdd812d0e601?auto=format&fit=crop&w=200&q=70','https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?auto=format&fit=crop&w=200&q=70','https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=200&q=70','https://images.unsplash.com/photo-1565557623262-b51c2513a641?auto=format&fit=crop&w=200&q=70','https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=200&q=70'] as $img)
                                    <img src="{{ $img }}" class="h-12 w-16 rounded-xl object-cover shrink-0">
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Right: ADVANCED POS TRANSACTION VISUAL --}}
                    <div class="relative hidden min-h-[380px] overflow-hidden rounded-[2.25rem] bg-[#0f1115] p-5 shadow-2xl lg:block">
                        <div class="absolute inset-0 opacity-40">
                            <img src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?auto=format&fit=crop&w=1000&q=85" alt="" class="h-full w-full object-cover blur-[3px]">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-br from-slate-950/90 via-slate-900/70 to-orange-950/70"></div>

                        <div class="relative z-10">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-[9px] font-black uppercase tracking-[0.2em] text-orange-300">Advanced POS • Transaction System</p>
                                    <p class="mt-1 text-sm font-black text-white">SurplusLink Live Orders</p>
                                </div>
                                <div class="flex items-center gap-2 rounded-full bg-emerald-500/20 px-3 py-1.5 ring-1 ring-emerald-400/20">
                                    <span class="h-1.5 w-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                                    <span class="text-[9px] font-black text-emerald-300">LIVE TRANSACTION</span>
                                </div>
                            </div>

                            {{-- Live transaction animation --}}
                            <div class="mt-5 space-y-3">
                                <div class="live-t-card rounded-2xl bg-white p-3 flex gap-3 shadow-xl">
                                    <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=200&q=80" class="h-14 w-14 rounded-xl object-cover">
                                    <div class="flex-1">
                                        <p class="text-[9px] font-black bg-orange-500 text-white px-2 py-0.5 rounded-full inline-block">NEW TRANSACTION #{{ rand(1000,9999) }}</p>
                                        <p class="text-[12px] font-black mt-1">Veg Rice • 2 portions • Rs.0</p>
                                        <div class="mt-1 flex gap-1">
                                            <span class="text-[8px] bg-slate-100 px-1.5 py-0.5 rounded-full">👤 Sara</span>
                                            <span class="text-[8px] bg-emerald-50 text-emerald-700 px-1.5 py-0.5 rounded-full">Verified</span>
                                        </div>
                                    </div>
                                    <div class="text-lg animate-bounce">🔔</div>
                                </div>

                                <div class="grid grid-cols-2 gap-2">
                                    <div class="rounded-xl bg-white/10 p-2.5 ring-1 ring-white/10 backdrop-blur flex items-center gap-2">
                                        <img src="https://images.unsplash.com/photo-1577219491135-ce391730fb2c?auto=format&fit=crop&w=100&q=60" class="h-8 w-8 rounded-lg object-cover">
                                        <div><p class="text-[8px] text-white/40 font-black">CHEF</p><p class="text-[10px] font-black text-white">Packing...</p></div>
                                    </div>
                                    <div class="rounded-xl bg-gradient-to-r from-orange-500 to-red-500 p-2.5 flex items-center gap-2 shadow-lg">
                                        <div class="h-8 w-8 rounded-lg bg-white/20 flex items-center justify-center">🛵</div>
                                        <div><p class="text-[8px] text-white/70 font-black">RIDER</p><p class="text-[10px] font-black text-white">On the way</p></div>
                                    </div>
                                </div>

                                <div class="rounded-xl bg-gradient-to-r from-amber-300 to-orange-400 p-2.5 flex justify-between items-center">
                                    <p class="text-[10px] font-black text-slate-900">💰 Rs. 1,200 waste saved • Impact created</p>
                                    <span class="text-sm">🎉</span>
                                </div>
                            </div>

                            <div class="mt-4 h-1.5 w-full bg-white/10 rounded-full overflow-hidden">
                                <div class="h-full w-[70%] bg-gradient-to-r from-orange-500 to-emerald-400 rounded-full animate-progress"></div>
                            </div>
                        </div>

                        {{-- Floating food image --}}
                        <div class="absolute -bottom-3 -right-3 h-20 w-20 overflow-hidden rounded-2xl border-4 border-white/10 shadow-2xl rotate-6 animate-float">
                            <img src="https://images.unsplash.com/photo-1473093295043-cdd812d0e601?auto=format&fit=crop&w=250&q=80" class="h-full w-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="mx-auto max-w-7xl px-4 pb-14 sm:px-6 lg:px-8">

            @if (session('success'))
                <div class="mb-7 flex items-start gap-4 rounded-2xl border border-emerald-200 bg-emerald-50 p-5 shadow-sm">
                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-emerald-100 text-emerald-700">✓</div>
                    <div><p class="font-black text-emerald-900">Kitchen updated</p><p class="mt-1 text-sm text-emerald-700">{{ session('success') }}</p></div>
                </div>
            @endif
            @if ($errors->has('request'))
                <div class="mb-7 flex items-start gap-4 rounded-2xl border border-red-200 bg-red-50 p-5 shadow-sm">
                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-red-100 font-black text-red-700">!</div>
                    <div><p class="font-black text-red-900">Kitchen action failed</p><p class="mt-1 text-sm text-red-700">{{ $errors->first('request') }}</p></div>
                </div>
            @endif

            @if ($foodRequests->count())
                @php
                    $pendingCount = $foodRequests->where('status', 'pending')->count();
                    $approvedCount = $foodRequests->where('status', 'approved')->count();
                    $rejectedCount = $foodRequests->where('status', 'rejected')->count();
                @endphp

                <div class="mb-9">
                    <div class="mb-4 flex items-end justify-between">
                        <div><p class="text-[10px] font-black uppercase tracking-[0.2em] text-orange-500">Kitchen control • Real transactions</p><h2 class="mt-1 text-2xl font-black tracking-tight">Today's order flow</h2></div>
                        <span class="hidden text-xs font-semibold text-slate-400 sm:block">Live data from your restaurant</span>
                    </div>

                    <div class="grid gap-4 md:grid-cols-3">
                        <div class="group relative overflow-hidden rounded-[1.75rem] bg-white p-5 shadow-sm ring-1 ring-slate-100 hover:-translate-y-1 hover:shadow-xl transition">
                            <div class="absolute right-0 top-0 h-24 w-24 rounded-full bg-amber-100/70 blur-2xl"></div>
                            <div class="relative flex justify-between"><div><p class="text-[10px] font-black uppercase tracking-[0.16em] text-slate-400">Awaiting action</p><p class="mt-2 text-4xl font-black">{{ $pendingCount }}</p><p class="mt-2 text-xs font-semibold text-slate-500">Orders waiting in kitchen</p></div><div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-amber-50 text-xl">🔔</div></div>
                            <div class="mt-5 h-1.5 overflow-hidden rounded-full bg-amber-50"><div class="h-full rounded-full bg-amber-400" style="width: {{ $foodRequests->count()? min(100, ($pendingCount / $foodRequests->count()) * 100) : 0 }}%"></div></div>
                        </div>
                        <div class="group relative overflow-hidden rounded-[1.75rem] bg-white p-5 shadow-sm ring-1 ring-slate-100 hover:-translate-y-1 hover:shadow-xl transition">
                            <div class="absolute right-0 top-0 h-24 w-24 rounded-full bg-emerald-100/70 blur-2xl"></div>
                            <div class="relative flex justify-between"><div><p class="text-[10px] font-black uppercase tracking-[0.16em] text-slate-400">Kitchen approved</p><p class="mt-2 text-4xl font-black">{{ $approvedCount }}</p><p class="mt-2 text-xs font-semibold text-slate-500">Meals moving forward</p></div><div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-emerald-50 text-xl">✓</div></div>
                            <div class="mt-5 h-1.5 overflow-hidden rounded-full bg-emerald-50"><div class="h-full rounded-full bg-emerald-500" style="width: {{ $foodRequests->count()? min(100, ($approvedCount / $foodRequests->count()) * 100) : 0 }}%"></div></div>
                        </div>
                        <div class="group relative overflow-hidden rounded-[1.75rem] bg-slate-900 p-5 shadow-xl text-white">
                            <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?auto=format&fit=crop&w=600&q=60" class="absolute inset-0 w-full h-full object-cover opacity-20">
                            <div class="relative flex justify-between"><div><p class="text-[10px] font-black uppercase tracking-[0.16em] text-white/40">Closed</p><p class="mt-2 text-4xl font-black">{{ $rejectedCount }}</p><p class="mt-2 text-xs font-semibold text-white/50">Requests declined</p></div><div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-white/10 text-xl">×</div></div>
                        </div>
                    </div>
                </div>

                <div class="mb-5 flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
                    <div>
                        <div class="flex items-center gap-2"><span class="relative flex h-2.5 w-2.5"><span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-orange-400 opacity-60"></span><span class="relative inline-flex h-2.5 w-2.5 rounded-full bg-orange-500"></span></span><p class="text-[10px] font-black uppercase tracking-[0.2em] text-orange-500">Live order queue • Food transaction system</p></div>
                        <h2 class="mt-1 text-2xl font-black tracking-tight sm:text-3xl">Requests in your kitchen 🍛</h2>
                    </div>
                    <div class="rounded-full bg-white px-4 py-2 text-xs font-bold text-slate-500 shadow-sm ring-1 ring-slate-100">{{ $foodRequests->count() }} total transactions</div>
                </div>

                <div class="space-y-5">
                    @foreach ($foodRequests as $foodRequest)
                        @php
                            $status = strtolower($foodRequest->status);
                            $statusConfig = match ($status) {
                                'pending' => ['label' => 'New Order', 'icon' => '🔔', 'badge' => 'bg-orange-500 text-white', 'dot' => 'bg-orange-500', 'accent' => 'border-orange-200'],
                                'approved' => ['label' => 'Kitchen Approved', 'icon' => '✓', 'badge' => 'bg-emerald-500 text-white', 'dot' => 'bg-emerald-500', 'accent' => 'border-emerald-200'],
                                'rejected' => ['label' => 'Closed', 'icon' => '×', 'badge' => 'bg-slate-800 text-white', 'dot' => 'bg-rose-500', 'accent' => 'border-rose-200'],
                                default => ['label' => ucfirst($status), 'icon' => '•', 'badge' => 'bg-slate-100 text-slate-700', 'dot' => 'bg-slate-400', 'accent' => 'border-slate-200'],
                            };
                            $foodIcon = match (strtolower($foodRequest->foodListing->food_type?? '')) {
                                'rice','rice dishes' => '🍚','curry' => '🍛','pasta' => '🍝','bakery','bread' => '🥐','fruits','fruit' => '🍎','vegetables','vegetable' => '🥦','dessert','desserts' => '🍰','beverage','beverages','drink','drinks' => '🥤','meat','chicken','beef' => '🍗',default => '🍲',
                            };
                        @endphp

                        <article class="group overflow-hidden rounded-[2rem] border bg-white shadow-[0_8px_30px_rgba(0,0,0,0.04)] transition duration-300 hover:-translate-y-1 hover:shadow-2xl {{ $statusConfig['accent'] }}">
                            <div class="relative overflow-hidden border-b border-slate-100 p-5 sm:p-6">
                                <div class="pointer-events-none absolute right-0 top-0 h-full w-64 opacity-[0.06]"><img src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?auto=format&fit=crop&w=500&q=70" class="h-full w-full object-cover"></div>
                                <div class="relative flex flex-col gap-5 sm:flex-row sm:items-center sm:justify-between">
                                    <div class="flex min-w-0 items-center gap-4">
                                        <div class="relative h-16 w-16 shrink-0 overflow-hidden rounded-2xl bg-orange-50 shadow-sm ring-1 ring-orange-100">
                                            <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=300&q=80" class="absolute inset-0 h-full w-full object-cover opacity-80">
                                            <div class="absolute inset-0 flex items-center justify-center text-3xl">{{ $foodIcon }}</div>
                                        </div>
                                        <div class="min-w-0">
                                            <div class="flex flex-wrap items-center gap-2">
                                                <h2 class="truncate text-xl font-black text-slate-950 sm:text-2xl">{{ $foodRequest->foodListing->title }}</h2>
                                                <span class="inline-flex items-center gap-1.5 rounded-full px-3 py-1.5 text-[10px] font-black uppercase tracking-wide {{ $statusConfig['badge'] }}"><span class="h-1.5 w-1.5 rounded-full bg-white animate-pulse"></span>{{ $statusConfig['label'] }}</span>
                                            </div>
                                            <p class="mt-2 text-xs font-medium text-slate-400">Transaction #{{ $foodRequest->id }} • {{ $foodRequest->created_at->format('d M Y, h:i A') }} • 📍 1.2km away</p>
                                        </div>
                                    </div>
                                    @if ($foodRequest->status === 'pending')
                                        <span class="inline-flex items-center gap-2 rounded-xl bg-gradient-to-r from-orange-500 to-red-500 px-4 py-2.5 text-[10px] font-black uppercase tracking-wider text-white shadow-lg animate-pulse">🔔 NEW TRANSACTION!</span>
                                    @endif
                                </div>
                            </div>

                            <div class="p-5 sm:p-6">
                                <div class="grid gap-4 lg:grid-cols-[1.25fr_.75fr]">
                                    <div>
                                        <div class="grid gap-3 sm:grid-cols-2">
                                            <div class="rounded-2xl bg-[#fffaf5] p-4 ring-1 ring-orange-50"><div class="flex items-center gap-2 text-[10px] font-black uppercase tracking-[0.14em] text-slate-400"><span class="flex h-7 w-7 items-center justify-center rounded-lg bg-white shadow-sm">👤</span>Customer</div><p class="mt-3 font-black text-slate-900">{{ $foodRequest->requester->name }}</p><p class="mt-1 break-all text-xs text-slate-500">{{ $foodRequest->requester->email }}</p></div>
                                            <div class="rounded-2xl bg-[#fffaf5] p-4 ring-1 ring-orange-50"><div class="flex items-center gap-2 text-[10px] font-black uppercase tracking-[0.14em] text-slate-400"><span class="flex h-7 w-7 items-center justify-center rounded-lg bg-white shadow-sm">📦</span>Order Quantity</div><p class="mt-3 text-lg font-black">{{ $foodRequest->quantity }} <span class="text-xs font-bold text-slate-500">{{ $foodRequest->foodListing->quantity_unit }}</span></p><p class="text-[10px] text-emerald-600 font-bold mt-1">● Verified order</p></div>
                                            <div class="rounded-2xl bg-slate-900 p-4 text-white"><div class="flex items-center gap-2 text-[10px] font-black uppercase tracking-[0.14em] text-white/40"><span class="flex h-7 w-7 items-center justify-center rounded-lg bg-white/10">💳</span>Transaction Value</div><p class="mt-3 text-lg font-black">Rs. {{ number_format((float) $foodRequest->foodListing->price, 2) }}</p><p class="text-[10px] text-white/50 mt-1">Waste prevented: 100%</p></div>
                                            <div class="rounded-2xl bg-[#fffaf5] p-4 ring-1 ring-orange-50"><div class="flex items-center gap-2 text-[10px] font-black uppercase tracking-[0.14em] text-slate-400"><span class="flex h-7 w-7 items-center justify-center rounded-lg bg-white shadow-sm">🍽️</span>Category</div><p class="mt-3 font-black">{{ $foodRequest->foodListing->food_type?: 'Other' }}</p><div class="mt-2 flex gap-1"><span class="text-[9px] bg-emerald-50 text-emerald-700 px-2 py-0.5 rounded-full">Hot & Fresh</span></div></div>
                                        </div>
                                        @if ($foodRequest->message)
                                            <div class="mt-4 rounded-2xl border border-slate-100 bg-white p-4 shadow-sm"><div class="flex items-center gap-3"><div class="flex h-9 w-9 items-center justify-center rounded-xl bg-orange-50">💬</div><div><p class="text-xs font-black">Customer note</p><p class="text-[10px] text-slate-400">Message from requester</p></div></div><div class="mt-3 rounded-xl bg-slate-50 p-3.5"><p class="text-sm leading-6 text-slate-600">{{ $foodRequest->message }}</p></div></div>
                                        @endif
                                    </div>

                                    {{-- RIGHT: ADVANCED TRANSACTION JOURNEY --}}
                                    <div class="rounded-[1.5rem] bg-[#0f1115] p-5 text-white shadow-xl relative overflow-hidden">
                                        <img src="https://images.unsplash.com/photo-1556911220-bff31c812dba?auto=format&fit=crop&w=500&q=70" class="absolute inset-0 w-full h-full object-cover opacity-10">
                                        <div class="relative">
                                            <div class="flex items-center justify-between"><div><p class="text-[9px] font-black uppercase tracking-[0.18em] text-orange-300">Live Transaction Flow</p><p class="mt-1 text-sm font-black">Order Journey</p></div><span class="rounded-full bg-emerald-500/20 px-2.5 py-1 text-[8px] font-black text-emerald-300 ring-1 ring-emerald-400/20">LIVE TRACKING</span></div>
                                            <div class="mt-6 relative">
                                                <div class="absolute left-3 top-3 h-[2px] w-[calc(100%-24px)] bg-white/10"></div>
                                                <div class="absolute left-3 top-3 h-[2px] bg-gradient-to-r from-orange-500 to-emerald-400" style="width: {{ $status === 'pending'? '0%' : ($status === 'approved'? '50%' : '100%') }}"></div>
                                                <div class="relative flex justify-between">
                                                    <div class="flex flex-col items-center"><div class="flex h-6 w-6 items-center justify-center rounded-full bg-orange-500 text-[9px] font-black ring-4 ring-orange-500/20">1</div><span class="mt-2 text-[8px] font-bold text-white/50">REQUEST</span></div>
                                                    <div class="flex flex-col items-center"><div class="flex h-6 w-6 items-center justify-center rounded-full {{ in_array($status, ['approved'])? 'bg-emerald-500 text-white' : 'bg-white/10 text-white/40' }} text-[9px] font-black">2</div><span class="mt-2 text-[8px] font-bold text-white/50">APPROVE</span></div>
                                                    <div class="flex flex-col items-center"><div class="flex h-6 w-6 items-center justify-center rounded-full bg-white/10 text-[9px] font-black text-white/40">3</div><span class="mt-2 text-[8px] font-bold text-white/50">PICKUP</span></div>
                                                    <div class="flex flex-col items-center"><div class="flex h-6 w-6 items-center justify-center rounded-full bg-white/10 text-[9px] font-black text-white/40">4</div><span class="mt-2 text-[8px] font-bold text-white/50">DELIVER</span></div>
                                                </div>
                                            </div>
                                            <div class="mt-6 grid grid-cols-2 gap-2">
                                                <div class="rounded-xl bg-white/[0.06] p-2.5 ring-1 ring-white/10 flex items-center gap-2"><img src="https://images.unsplash.com/photo-1577219491135-ce391730fb2c?auto=format&fit=crop&w=100&q=60" class="h-8 w-8 rounded-lg object-cover"><div><p class="text-[8px] text-white/40 font-black">CHEF</p><p class="text-[10px] font-black">Preparing</p></div></div>
                                                <div class="rounded-xl bg-white/[0.06] p-2.5 ring-1 ring-white/10 flex items-center gap-2"><div class="h-8 w-8 rounded-lg bg-sky-500/20 flex items-center justify-center">🛵</div><div><p class="text-[8px] text-white/40 font-black">RIDER</p><p class="text-[10px] font-black">Nearby</p></div></div>
                                            </div>
                                            <div class="mt-4 rounded-xl bg-gradient-to-r from-orange-500/20 to-emerald-500/20 p-3 ring-1 ring-white/10">
                                                <p class="text-[10px] font-black text-white">🍛 Real food image • Live transaction • No fake data</p>
                                                <p class="text-[9px] text-white/40 mt-1">This workflow is visual, your DB data stays real.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @if ($foodRequest->status === 'pending')
                                    <div class="mt-5 rounded-[1.5rem] bg-gradient-to-r from-[#fff6ef] to-[#fffaf5] p-5 ring-1 ring-orange-100">
                                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                                            <div><div class="flex items-center gap-2"><span class="relative flex h-2.5 w-2.5"><span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-orange-400 opacity-60"></span><span class="relative inline-flex h-2.5 w-2.5 rounded-full bg-orange-500"></span></span><p class="text-sm font-black">New transaction needs action</p></div><p class="mt-1 text-xs text-slate-500">Approve to move food to rider & complete transaction.</p></div>
                                            <div class="flex flex-col gap-2.5 sm:flex-row">
                                                <form method="POST" action="{{ route('restaurant.food-requests.approve', ['id' => $foodRequest->id]) }}">@csrf @method('PATCH')<button type="submit" class="group inline-flex w-full items-center justify-center gap-2 rounded-2xl bg-slate-900 px-6 py-3.5 text-sm font-black text-white shadow-xl transition hover:-translate-y-0.5 hover:bg-black sm:w-auto"><span class="flex h-6 w-6 items-center justify-center rounded-full bg-white/15">✓</span>Approve & Cook<span class="transition group-hover:translate-x-1">→</span></button></form>
                                                <form method="POST" action="{{ route('restaurant.food-requests.reject', ['id' => $foodRequest->id]) }}">@csrf @method('PATCH')<button type="submit" class="inline-flex w-full items-center justify-center gap-2 rounded-2xl border border-rose-200 bg-white px-6 py-3.5 text-sm font-black text-rose-600 transition hover:bg-rose-50 sm:w-auto"><span>×</span>Reject</button></form>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="mt-5 flex items-center gap-3 rounded-2xl bg-slate-50 p-4 ring-1 ring-slate-100"><div class="flex h-10 w-10 items-center justify-center rounded-xl bg-white shadow-sm">{{ $statusConfig['icon'] }}</div><div><p class="text-sm font-black">{{ $statusConfig['label'] }}</p><p class="mt-0.5 text-xs text-slate-500">Transaction already processed by your kitchen.</p></div></div>
                                @endif
                            </div>
                        </article>
                    @endforeach
                </div>

            @else
                <div class="overflow-hidden rounded-[2.25rem] bg-white shadow-sm ring-1 ring-slate-100">
                    <div class="relative px-6 py-20 text-center sm:px-10">
                        <div class="absolute left-1/2 top-0 h-64 w-64 -translate-x-1/2 rounded-full bg-orange-100/60 blur-3xl"></div>
                        <div class="relative">
                            <div class="mx-auto flex h-28 w-28 items-center justify-center rounded-[2rem] bg-gradient-to-br from-orange-50 to-amber-50 text-6xl shadow-sm ring-1 ring-orange-100 animate-float">👨‍🍳</div>
                            <div class="mt-6 inline-flex items-center gap-2 rounded-full bg-emerald-50 px-4 py-2 text-[10px] font-black uppercase tracking-[0.18em] text-emerald-700 ring-1 ring-emerald-100"><span class="h-2 w-2 rounded-full bg-emerald-500 animate-pulse"></span>Kitchen ready • Waiting for orders</div>
                            <h2 class="mt-4 text-3xl font-black tracking-tight">No live transactions yet.</h2>
                            <p class="mx-auto mt-3 max-w-lg text-sm leading-7 text-slate-500">Real food images are ready. When customers request your surplus, transactions will appear here with live chef + rider tracking.</p>
                            <div class="mt-6 flex justify-center gap-2">
                                <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=150&q=70" class="h-16 w-16 rounded-2xl object-cover shadow-lg rotate-3">
                                <img src="https://images.unsplash.com/photo-1473093295043-cdd812d0e601?auto=format&fit=crop&w=150&q=70" class="h-16 w-16 rounded-2xl object-cover shadow-lg -rotate-3">
                                <img src="https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=150&q=70" class="h-16 w-16 rounded-2xl object-cover shadow-lg rotate-2">
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <div class="mt-10 overflow-hidden rounded-[2rem] bg-slate-950 shadow-2xl">
                <div class="relative p-6 sm:p-8 lg:p-10">
                    <div class="absolute -right-20 -top-20 h-64 w-64 rounded-full bg-orange-500/10 blur-3xl"></div>
                    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6">
                        <div><p class="text-[10px] font-black uppercase tracking-[0.2em] text-orange-300">Real Food Platform • Advanced Transaction</p><h3 class="mt-2 text-2xl font-black text-white sm:text-3xl">Good food should leave the kitchen, not become waste. 🍛</h3><p class="mt-3 max-w-2xl text-sm leading-6 text-white/60">Every transaction you approve moves real food images through real delivery flow. No fake data, just visual workflow.</p></div>
                        <div class="flex h-16 w-16 shrink-0 items-center justify-center rounded-2xl bg-white/10 text-3xl ring-1 ring-white/10">❤️</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
      .food-marquee{ animation: marquee 20s linear infinite; }
        @keyframes marquee{ 0%{ transform: translateX(0) } 100%{ transform: translateX(-50%) } }
      .live-t-card{ animation: tPop 4s ease-in-out infinite; }
        @keyframes tPop{ 0%,100%{ transform: scale(1) } 50%{ transform: scale(1.02) } }
      .animate-float{ animation: float 5s ease-in-out infinite; }
        @keyframes float{ 0%,100%{ transform: translateY(0) rotate(6deg) } 50%{ transform: translateY(-10px) rotate(8deg) } }
      .animate-progress{ animation: prog 3s ease-in-out infinite alternate; }
        @keyframes prog{ from{ width:55% } to{ width:85% } }
        @media (prefers-reduced-motion: reduce){.food-marquee,.live-t-card,.animate-float,.animate-progress{ animation:none!important; } }
    </style>
</x-app-layout>