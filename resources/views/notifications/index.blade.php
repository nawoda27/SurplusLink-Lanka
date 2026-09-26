<x-app-layout>
<div class="relative min-h-screen overflow-hidden bg-[#fffaf6] text-slate-800 antialiased">

    {{-- ================= FOOD APP BACKGROUND ================= --}}
    <div class="pointer-events-none fixed inset-0 -z-10 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-orange-50/80 via-[#fffaf6] to-emerald-50/40"></div>
        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=2000&q=80" class="absolute inset-0 w-full h-full object-cover opacity-[0.03] blur-[2px]">
        <div class="absolute -right-40 -top-40 h-[36rem] w-[36rem] rounded-full bg-gradient-to-br from-orange-200/30 to-amber-200/20 blur-[80px]"></div>
        <div class="absolute -left-40 top-[30%] h-[32rem] w-[32rem] rounded-full bg-gradient-to-br from-emerald-100/30 to-teal-100/20 blur-[80px]"></div>
    </div>

    <style>
      @keyframes notifIn{ from{ opacity:0; transform: translateY(12px) scale(0.98) } to{ opacity:1; transform: translateY(0) scale(1) } }
      @keyframes foodFloat{ 0%,100%{ transform: translateY(0) } 50%{ transform: translateY(-6px) } }
     .notif-enter{ animation: notifIn.5s ease-out both; }
     .food-float{ animation: foodFloat 4s ease-in-out infinite; }
    </style>

    <div class="relative mx-auto max-w-6xl px-4 py-6 sm:px-6 lg:px-8 lg:py-8">

        {{-- ================= HEADER - FOOD APP STYLE ================= --}}
        <header class="flex flex-col gap-5 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <div class="inline-flex items-center gap-2.5 rounded-full bg-white px-4 py-2 shadow-sm ring-1 ring-orange-100">
                    <span class="relative flex h-2.5 w-2.5">
                        @if($notifications->contains(fn($n)=>is_null($n->read_at)))
                            <span class="absolute inline-flex h-full w-full rounded-full bg-orange-400 opacity-60 animate-ping"></span>
                        @endif
                        <span class="relative h-2.5 w-2.5 rounded-full bg-orange-500"></span>
                    </span>
                    <span class="text-[11px] font-black uppercase tracking-widest text-orange-600">Live Food Activity</span>
                    <span class="text-[10px] bg-orange-50 text-orange-700 px-2 py-0.5 rounded-full font-black">{{ $notifications->count() }} updates</span>
                </div>

                <h1 class="mt-5 text-4xl font-black tracking-tight leading-none sm:text-5xl">
                    Your food
                    <span class="text-orange-500">updates.</span>
                </h1>
                <p class="mt-3 text-[14px] leading-6 text-slate-500 max-w-xl">
                    Real food platform notifications - requests, approvals, riders on the way, delivered. All your surplus transactions live.
                </p>

                <div class="mt-4 flex gap-2">
                    <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=100&q=60" class="h-9 w-9 rounded-full object-cover ring-2 ring-white shadow-sm food-float">
                    <img src="https://images.unsplash.com/photo-1473093295043-cdd812d0e601?auto=format&fit=crop&w=100&q=60" class="h-9 w-9 rounded-full object-cover ring-2 ring-white shadow-sm food-float" style="animation-delay:0.5s">
                    <img src="https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=100&q=60" class="h-9 w-9 rounded-full object-cover ring-2 ring-white shadow-sm food-float" style="animation-delay:1s">
                    <div class="h-9 px-3 rounded-full bg-slate-900 text-white flex items-center text-[11px] font-black shadow-lg">🍛 Live</div>
                </div>
            </div>

            @if($notifications->contains(fn($n)=>is_null($n->read_at)))
                <form method="POST" action="{{ route('notifications.read-all') }}">
                    @csrf @method('PATCH')
                    <button class="group inline-flex items-center gap-2 rounded-full bg-slate-900 text-white px-6 py-3.5 text-xs font-black shadow-xl hover:bg-black hover:-translate-y-0.5 transition-all">
                        ✓ Mark all as read <span class="group-hover:translate-x-1 transition">→</span>
                    </button>
                </form>
            @endif
        </header>

        @if(session('success'))
            <div class="notif-enter mt-6 rounded-2xl bg-emerald-50 border border-emerald-100 p-4 flex gap-3">
                <div class="h-9 w-9 rounded-xl bg-emerald-500 text-white flex items-center justify-center font-black">✓</div>
                <p class="text-sm font-bold text-emerald-800 mt-1">{{ session('success') }}</p>
            </div>
        @endif

        @php
            $unreadCount = $notifications->filter(fn($n)=>is_null($n->read_at))->count();
            $totalCount = $notifications->count();
        @endphp

        {{-- ================= STATS - SURPLUS THEME ================= --}}
        <section class="mt-8 grid gap-3 sm:grid-cols-3">
            <div class="rounded-[1.6rem] bg-white p-5 ring-1 ring-orange-100 shadow-[0_8px_30px_rgba(251,146,60,0.06)]">
                <div class="flex items-center gap-3">
                    <div class="h-11 w-11 rounded-2xl bg-orange-50 flex items-center justify-center text-xl">🔔</div>
                    <div><p class="text-[10px] font-black uppercase tracking-wider text-slate-400">Total Updates</p><p class="text-2xl font-black">{{ $totalCount }}</p></div>
                </div>
            </div>
            <div class="rounded-[1.6rem] bg-white p-5 ring-1 ring-amber-100 shadow-[0_8px_30px_rgba(251,146,60,0.06)]">
                <div class="flex items-center gap-3">
                    <div class="h-11 w-11 rounded-2xl bg-amber-50 flex items-center justify-center"><span class="h-2.5 w-2.5 bg-orange-500 rounded-full animate-pulse"></span></div>
                    <div><p class="text-[10px] font-black uppercase tracking-wider text-slate-400">Unread • New Food</p><p class="text-2xl font-black">{{ $unreadCount }}</p></div>
                </div>
            </div>
            <div class="rounded-[1.6rem] bg-gradient-to-br from-emerald-500 to-teal-600 p-5 text-white shadow-xl">
                <div class="flex items-center gap-3">
                    <div class="h-11 w-11 rounded-2xl bg-white/20 flex items-center justify-center text-white">✓</div>
                    <div><p class="text-[10px] font-black uppercase tracking-wider text-white/60">Status</p><p class="text-sm font-black">{{ $unreadCount>0?'Fresh orders waiting! 🔥':'All caught up ❤️' }}</p></div>
                </div>
            </div>
        </section>

        {{-- ================= NOTIFICATION FEED - FOOD APP STYLE ================= --}}
        <section class="mt-10">
            <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-3">
                <div>
                    <p class="text-[11px] font-black uppercase tracking-widest text-orange-500">Food Activity Feed</p>
                    <h2 class="mt-1 text-2xl font-black tracking-tight">Recent updates 🍛</h2>
                </div>
                @if($totalCount>0)
                    <div class="inline-flex items-center gap-2 rounded-full bg-white px-4 py-2 text-xs font-bold text-slate-600 ring-1 ring-slate-100 shadow-sm">
                        <span class="h-2 w-2 rounded-full {{ $unreadCount>0?'bg-orange-500 animate-pulse':'bg-emerald-500' }}"></span>
                        {{ $unreadCount>0? $unreadCount.' new food updates' : 'All read' }}
                    </div>
                @endif
            </div>

            @if($notifications->count()>0)
                <div class="mt-6 space-y-3">
                    @foreach($notifications as $notification)
                        @php
                            $isUnread = is_null($notification->read_at);
                            $title = $notification->data['title']?? 'Notification';
                            $message = $notification->data['message']?? '';
                            $lower = strtolower($title);
                            if(str_contains($lower,'approv')){ $type='approved'; $icon='✓'; $bg='bg-emerald-50'; $color='text-emerald-600'; $badge='bg-emerald-500'; $label='Approved • Ready'; $foodImg='https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=200&q=70'; }
                            elseif(str_contains($lower,'reject')){ $type='rejected'; $icon='×'; $bg='bg-red-50'; $color='text-red-500'; $badge='bg-slate-800'; $label='Closed'; $foodImg='https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=200&q=70'; }
                            elseif(str_contains($lower,'deliver')||str_contains($lower,'transit')||str_contains($lower,'rider')){ $type='delivery'; $icon='🛵'; $bg='bg-sky-50'; $color='text-sky-600'; $badge='bg-sky-500'; $label='On the way'; $foodImg='https://images.unsplash.com/photo-1473093295043-cdd812d0e601?auto=format&fit=crop&w=200&q=70'; }
                            else{ $type='general'; $icon='🍲'; $bg='bg-orange-50'; $color='text-orange-600'; $badge='bg-orange-500'; $label='Update'; $foodImg='https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=200&q=70'; }
                        @endphp

                        <article class="notif-enter group relative overflow-hidden rounded-[1.7rem] bg-white ring-1 {{ $isUnread?'ring-orange-200 shadow-[0_12px_40px_rgba(251,146,60,0.12)]':'ring-slate-100 shadow-[0_8px_30px_rgba(0,0,0,0.04)]' }} hover:-translate-y-1 hover:shadow-xl transition-all duration-300" style="animation-delay: {{ min($loop->index*60,400) }}ms">
                            @if($isUnread)<div class="absolute left-0 top-0 bottom-0 w-1.5 bg-gradient-to-b from-orange-400 to-red-400"></div>@endif

                            <div class="flex gap-4 p-5 sm:p-5">
                                {{-- Food image + icon --}}
                                <div class="relative shrink-0">
                                    <div class="h-14 w-14 rounded-2xl overflow-hidden ring-1 ring-orange-100 shadow-sm relative">
                                        <img src="{{ $foodImg }}" class="h-full w-full object-cover">
                                        <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                                        <div class="absolute inset-0 flex items-center justify-center text-white font-black text-lg">{{ $icon }}</div>
                                    </div>
                                    @if($isUnread)
                                        <span class="absolute -top-1 -right-1 h-5 w-5 rounded-full bg-orange-500 border-2 border-white flex items-center justify-center text-[8px] font-black text-white shadow-lg">!</span>
                                    @endif
                                </div>

                                <div class="min-w-0 flex-1">
                                    <div class="flex flex-wrap items-start justify-between gap-2">
                                        <div class="min-w-0 flex-1">
                                            <div class="flex flex-wrap items-center gap-2">
                                                <h3 class="text-[15px] font-black text-slate-900">{{ $title }}</h3>
                                                <span class="inline-flex items-center gap-1 rounded-full {{ $badge }} text-white px-2.5 py-1 text-[9px] font-black uppercase">{{ $label }}</span>
                                                @if($isUnread)<span class="inline-flex rounded-full bg-orange-50 text-orange-600 ring-1 ring-orange-100 px-2 py-1 text-[8px] font-black uppercase animate-pulse">New • Fresh</span>@endif
                                            </div>
                                            <p class="mt-1.5 text-[13px] leading-6 text-slate-600">{{ $message }}</p>
                                        </div>
                                        <div class="shrink-0 text-right">
                                            <p class="text-[11px] font-bold text-slate-500">{{ $notification->created_at->diffForHumans() }}</p>
                                            <p class="text-[10px] text-slate-400 mt-0.5">{{ $notification->created_at->format('d M, h:i A') }}</p>
                                        </div>
                                    </div>

                                    <div class="mt-4 flex flex-wrap items-center gap-2">
                                        @if($notification->data['food_request_id']??false)
                                            <a href="{{ route('food-requests.my-requests') }}" class="inline-flex items-center gap-1.5 rounded-full bg-orange-50 px-3.5 py-2 text-[11px] font-black text-orange-700 ring-1 ring-orange-100 hover:bg-orange-100 transition">🍛 View order →</a>
                                        @endif
                                        @if($isUnread)
                                            <form method="POST" action="{{ route('notifications.read',$notification->id) }}">@csrf @method('PATCH')<button class="inline-flex items-center gap-1.5 rounded-full bg-slate-900 text-white px-3.5 py-2 text-[11px] font-black hover:bg-black transition">✓ Mark read</button></form>
                                        @else
                                            <span class="inline-flex items-center gap-1 rounded-full bg-slate-50 px-3 py-2 text-[11px] font-bold text-slate-400 ring-1 ring-slate-100">✓ Read • {{ $type }}</span>
                                        @endif
                                        <span class="ml-auto inline-flex items-center gap-1 text-[10px] text-slate-400"><span class="h-1 w-1 bg-emerald-400 rounded-full"></span>SurplusLink • Food rescued</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>

                @if($notifications->hasPages())
                    <div class="mt-7 rounded-2xl bg-white ring-1 ring-slate-100 p-3 shadow-sm">{{ $notifications->links() }}</div>
                @endif

            @else
                <div class="mt-6 rounded-[2.2rem] bg-white ring-1 ring-slate-100 shadow-sm overflow-hidden">
                    <div class="relative px-8 py-16 text-center">
                        <div class="absolute -top-16 -right-16 h-48 w-48 rounded-full bg-orange-50 blur-2xl"></div>
                        <div class="mx-auto h-20 w-20 rounded-[1.6rem] bg-gradient-to-br from-orange-50 to-amber-50 flex items-center justify-center text-3xl ring-1 ring-orange-100 shadow-sm food-float">🔔</div>
                        <h3 class="mt-6 text-2xl font-black">No food updates yet</h3>
                        <p class="mt-2 text-sm text-slate-500 max-w-md mx-auto">When your surplus requests get approved, riders come, or food gets delivered, tasty updates will appear here.</p>
                        <div class="mt-6 flex justify-center gap-2">
                            <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=100&q=60" class="h-12 w-12 rounded-xl object-cover shadow-sm">
                            <img src="https://images.unsplash.com/photo-1473093295043-cdd812d0e601?auto=format&fit=crop&w=100&q=60" class="h-12 w-12 rounded-xl object-cover shadow-sm">
                            <img src="https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=100&q=60" class="h-12 w-12 rounded-xl object-cover shadow-sm">
                        </div>
                        <a href="{{ route('food-listings.browse') }}" class="mt-7 inline-flex items-center gap-2 rounded-full bg-slate-900 text-white px-6 py-3.5 text-sm font-black shadow-xl hover:bg-black hover:-translate-y-0.5 transition">🍲 Browse surplus food →</a>
                    </div>
                </div>
            @endif
        </section>

        {{-- Bottom --}}
        <section class="mt-10 rounded-[1.8rem] bg-gradient-to-r from-orange-50 via-white to-emerald-50 p-6 ring-1 ring-orange-100 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
            <div class="flex gap-3">
                <div class="h-11 w-11 rounded-xl bg-white shadow-sm ring-1 ring-orange-100 flex items-center justify-center text-lg">🌱</div>
                <div><p class="text-[11px] font-black uppercase tracking-widest text-orange-600">Food rescue live</p><p class="text-sm font-black mt-1">Every notification is a real meal moving. No fake data, just surplus saved. 🍛</p></div>
            </div>
            <a href="{{ route('food-requests.my-requests') }}" class="rounded-full bg-white px-5 py-3 text-xs font-black ring-1 ring-slate-200 shadow-sm hover:ring-orange-200 transition">View my orders →</a>
        </section>

        <div class="py-8 text-center">
            <span class="inline-flex items-center gap-2 rounded-full bg-white px-4 py-2 text-[10px] font-black uppercase tracking-wider text-slate-400 ring-1 ring-slate-100 shadow-sm">✓ SurplusLink • Fresh food updates • Food app experience</span>
        </div>
    </div>
</div>
</x-app-layout>