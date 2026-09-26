<x-app-layout>

    <div class="min-h-screen overflow-hidden bg-[#fffaf5]">

        {{-- =========================================================
            PAGE BACKGROUND
        ========================================================== --}}
        <div class="pointer-events-none fixed inset-0 overflow-hidden">

            <div class="absolute -right-32 -top-32 h-96 w-96 rounded-full bg-[#ffd5c4]/45 blur-3xl"></div>

            <div class="absolute -left-40 top-[38%] h-96 w-96 rounded-full bg-[#e2f3e9]/50 blur-3xl"></div>

            <div class="absolute right-[20%] top-[55%] h-56 w-56 rounded-full bg-[#fff0d8]/60 blur-3xl"></div>

        </div>


        <div class="relative mx-auto max-w-7xl px-4 py-7 sm:px-6 sm:py-10 lg:px-8">

            {{-- =====================================================
                TOP NAV / BREADCRUMB
            ====================================================== --}}
            <div class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

                <div class="flex flex-wrap items-center gap-2 text-sm">

                    <a
                        href="{{ route('restaurant.dashboard') }}"
                        class="font-medium text-[#8f7d75] transition hover:text-[#f06445]"
                    >
                        Dashboard
                    </a>

                    <span class="text-[#d8c9c1]">/</span>

                    <a
                        href="{{ route('restaurant.food-listings.index') }}"
                        class="font-medium text-[#8f7d75] transition hover:text-[#f06445]"
                    >
                        Food Listings
                    </a>

                    <span class="text-[#d8c9c1]">/</span>

                    <span class="font-bold text-[#f06445]">
                        New Listing
                    </span>

                </div>


                <a
                    href="{{ route('restaurant.food-listings.index') }}"
                    class="inline-flex w-fit items-center gap-2 rounded-2xl border border-[#eaded7] bg-white/90 px-4 py-2.5 text-sm font-bold text-[#665650] shadow-sm backdrop-blur transition duration-300 hover:-translate-y-0.5 hover:border-[#f5b49f] hover:text-[#f06445]"
                >
                    <span>←</span>
                    Back to Listings
                </a>

            </div>


            {{-- =====================================================
                HERO
            ====================================================== --}}
            <section class="relative mb-10 overflow-hidden rounded-[2rem] border border-[#f1dfd5] bg-white shadow-[0_18px_55px_rgba(79,48,35,0.08)]">

                <div class="grid lg:grid-cols-[1.05fr_0.95fr]">

                    {{-- Hero Copy --}}
                    <div class="relative overflow-hidden p-7 sm:p-10 lg:p-12">

                        <div class="absolute -left-20 -top-20 h-48 w-48 rounded-full bg-[#fff0e8]"></div>

                        <div class="relative">

                            <div class="inline-flex items-center gap-2 rounded-full border border-[#ffd7c7] bg-[#fff7f2] px-3.5 py-2 text-xs font-extrabold uppercase tracking-[0.16em] text-[#e96f45]">
                                <span class="flex h-5 w-5 items-center justify-center rounded-full bg-[#f06445] text-[10px] text-white">
                                    +
                                </span>

                                Share Surplus Food
                            </div>


                            <h1 class="mt-5 max-w-xl text-3xl font-black tracking-tight text-[#30241f] sm:text-4xl lg:text-[3.25rem] lg:leading-[1.08]">
                                Give your extra food
                                <span class="text-[#f06445]">another destination.</span>
                            </h1>


                            <p class="mt-5 max-w-xl text-sm leading-7 text-[#776760] sm:text-base">
                                Create a clear food listing and connect today's surplus
                                with someone in the SurplusLink community.
                            </p>


                            {{-- Mini Process --}}
                            <div class="mt-8 flex flex-wrap items-center gap-2">

                                <div class="inline-flex items-center gap-2 rounded-full bg-[#fff2eb] px-3 py-2 text-xs font-bold text-[#e96f45]">
                                    <span>🍲</span>
                                    Surplus Food
                                </div>

                                <span class="text-[#d8b5a7]">→</span>

                                <div class="inline-flex items-center gap-2 rounded-full bg-[#fff8e8] px-3 py-2 text-xs font-bold text-[#ad7624]">
                                    <span>📋</span>
                                    Listing
                                </div>

                                <span class="text-[#d8b5a7]">→</span>

                                <div class="inline-flex items-center gap-2 rounded-full bg-[#edf8f1] px-3 py-2 text-xs font-bold text-emerald-700">
                                    <span>❤️</span>
                                    Community
                                </div>

                            </div>

                        </div>

                    </div>


                    {{-- Hero Visual --}}
                    <div class="relative min-h-[310px] overflow-hidden bg-[#f8eee8] lg:min-h-full">

                        <img
                            src="https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=1200&q=88"
                            alt="Fresh food prepared for sharing"
                            class="absolute inset-0 h-full w-full object-cover"
                        >

                        <div class="absolute inset-0 bg-gradient-to-br from-[#5b382b]/15 via-transparent to-[#f06445]/40"></div>


                        {{-- Floating Food Card --}}
                        <div class="absolute left-5 top-6 rounded-2xl border border-white/60 bg-white/90 px-4 py-3 shadow-[0_15px_35px_rgba(45,30,24,0.15)] backdrop-blur-md sm:left-8 sm:top-8">

                            <div class="flex items-center gap-3">

                                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#fff0e8] text-xl">
                                    🍱
                                </div>

                                <div>
                                    <p class="text-[10px] font-bold uppercase tracking-wider text-[#a38e85]">
                                        Ready to share
                                    </p>

                                    <p class="text-sm font-extrabold text-[#30241f]">
                                        Fresh surplus
                                    </p>
                                </div>

                            </div>

                        </div>


                        {{-- Impact Card --}}
                        <div class="absolute bottom-6 right-5 rounded-2xl border border-white/60 bg-white/90 px-4 py-3 shadow-[0_15px_35px_rgba(45,30,24,0.15)] backdrop-blur-md sm:bottom-8 sm:right-8">

                            <div class="flex items-center gap-3">

                                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#eaf8f0] text-xl">
                                    🌱
                                </div>

                                <div>
                                    <p class="text-[10px] font-bold uppercase tracking-wider text-emerald-600">
                                        SurplusLink
                                    </p>

                                    <p class="text-sm font-extrabold text-[#315c46]">
                                        Food with purpose
                                    </p>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </section>


            {{-- =====================================================
                VALIDATION
            ====================================================== --}}
            @if ($errors->any())

                <div class="mb-8 overflow-hidden rounded-[1.5rem] border border-red-200 bg-white shadow-sm">

                    <div class="flex items-start gap-4 bg-red-50 px-5 py-4 sm:px-6">

                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-red-100 font-black text-red-600">
                            !
                        </div>

                        <div>

                            <p class="font-bold text-red-800">
                                Please check your listing details
                            </p>

                            <p class="mt-1 text-sm text-red-700">
                                Some information needs to be corrected before publishing.
                            </p>

                            <ul class="mt-3 space-y-1 text-sm text-red-700">

                                @foreach ($errors->all() as $error)

                                    <li class="flex items-start gap-2">
                                        <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-red-400"></span>
                                        <span>{{ $error }}</span>
                                    </li>

                                @endforeach

                            </ul>

                        </div>

                    </div>

                </div>

            @endif


            {{-- =====================================================
                MAIN CONTENT
            ====================================================== --}}
            <div class="grid grid-cols-1 gap-8 xl:grid-cols-[minmax(0,1fr)_340px]">

                {{-- =================================================
                    FORM
                ================================================== --}}
                <div>

                    {{-- Progress --}}
                    <div class="mb-6 rounded-[1.5rem] border border-[#eee1d9] bg-white p-4 shadow-[0_8px_25px_rgba(80,50,35,0.045)] sm:p-5">

                        <div class="flex items-center justify-between gap-3">

                            <div class="flex min-w-0 items-center gap-3">

                                <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-[#f06445] text-xs font-black text-white">
                                    1
                                </div>

                                <div class="min-w-0">
                                    <p class="truncate text-xs font-bold uppercase tracking-wider text-[#f06445]">
                                        Step 1
                                    </p>

                                    <p class="truncate text-sm font-bold text-[#30241f]">
                                        Food information
                                    </p>
                                </div>

                            </div>


                            <div class="hidden h-px flex-1 bg-[#eadfd8] sm:block"></div>


                            <div class="hidden items-center gap-3 sm:flex">

                                <div class="flex h-9 w-9 items-center justify-center rounded-full bg-[#fff0e8] text-xs font-black text-[#e96f45]">
                                    2
                                </div>

                                <div>
                                    <p class="text-xs font-bold uppercase tracking-wider text-[#a28e86]">
                                        Step 2
                                    </p>

                                    <p class="text-sm font-bold text-[#665650]">
                                        Quantity
                                    </p>
                                </div>

                            </div>


                            <div class="hidden h-px flex-1 bg-[#eadfd8] sm:block"></div>


                            <div class="hidden items-center gap-3 sm:flex">

                                <div class="flex h-9 w-9 items-center justify-center rounded-full bg-[#edf8f1] text-xs font-black text-emerald-700">
                                    3
                                </div>

                                <div>
                                    <p class="text-xs font-bold uppercase tracking-wider text-emerald-600">
                                        Step 3
                                    </p>

                                    <p class="text-sm font-bold text-[#315c46]">
                                        Pickup
                                    </p>
                                </div>

                            </div>

                        </div>

                    </div>


                    {{-- Form Card --}}
                    <div class="overflow-hidden rounded-[2rem] border border-[#eee1d9] bg-white shadow-[0_14px_45px_rgba(74,45,32,0.065)]">

                        <form
                            method="POST"
                            action="{{ route('restaurant.food-listings.store') }}"
                        >

                            @csrf


                            {{-- =================================================
                                FOOD DETAILS
                            ================================================== --}}
                            <section class="border-b border-[#f1e7e1] p-6 sm:p-8 lg:p-9">

                                <div class="mb-7 flex items-start gap-4">

                                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-[#fff0e8] text-xl shadow-sm">
                                        🍽️
                                    </div>

                                    <div>

                                        <p class="text-[11px] font-black uppercase tracking-[0.18em] text-[#f06445]">
                                            Food details
                                        </p>

                                        <h2 class="mt-1 text-xl font-black text-[#30241f]">
                                            What are you sharing?
                                        </h2>

                                        <p class="mt-1 text-sm text-[#89766e]">
                                            Give recipients enough information to understand the food.
                                        </p>

                                    </div>

                                </div>


                                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">

                                    {{-- Food Name --}}
                                    <div>

                                        <label
                                            for="title"
                                            class="block text-sm font-bold text-[#3b302b]"
                                        >
                                            Food Name
                                            <span class="text-[#f06445]">*</span>
                                        </label>

                                        <input
                                            id="title"
                                            name="title"
                                            type="text"
                                            value="{{ old('title') }}"
                                            placeholder="e.g. Vegetable Rice"
                                            required
                                            autofocus
                                            class="mt-2 block w-full rounded-2xl border-[#e4d8d1] bg-[#fffdfb] px-4 py-3.5 text-sm text-[#30241f] shadow-sm outline-none transition placeholder:text-[#b6a49c] focus:border-[#f06445] focus:ring-4 focus:ring-[#f06445]/10"
                                        >

                                        @error('title')
                                            <p class="mt-2 text-xs font-semibold text-red-600">
                                                {{ $message }}
                                            </p>
                                        @enderror

                                    </div>


                                    {{-- Food Type --}}
                                    <div>

                                        <label
                                            for="food_type"
                                            class="block text-sm font-bold text-[#3b302b]"
                                        >
                                            Food Type
                                        </label>

                                        <select
                                            id="food_type"
                                            name="food_type"
                                            class="mt-2 block w-full rounded-2xl border-[#e4d8d1] bg-[#fffdfb] px-4 py-3.5 text-sm text-[#30241f] shadow-sm outline-none transition focus:border-[#f06445] focus:ring-4 focus:ring-[#f06445]/10"
                                        >

                                            <option value="">Select food type</option>

                                            <option value="Rice" {{ old('food_type') === 'Rice' ? 'selected' : '' }}>
                                                🍚 Rice
                                            </option>

                                            <option value="Curry" {{ old('food_type') === 'Curry' ? 'selected' : '' }}>
                                                🍛 Curry
                                            </option>

                                            <option value="Bakery" {{ old('food_type') === 'Bakery' ? 'selected' : '' }}>
                                                🥖 Bakery
                                            </option>

                                            <option value="Fruits" {{ old('food_type') === 'Fruits' ? 'selected' : '' }}>
                                                🍎 Fruits
                                            </option>

                                            <option value="Vegetables" {{ old('food_type') === 'Vegetables' ? 'selected' : '' }}>
                                                🥗 Vegetables
                                            </option>

                                            <option value="Other" {{ old('food_type') === 'Other' ? 'selected' : '' }}>
                                                🍱 Other
                                            </option>

                                        </select>

                                        @error('food_type')
                                            <p class="mt-2 text-xs font-semibold text-red-600">
                                                {{ $message }}
                                            </p>
                                        @enderror

                                    </div>

                                </div>


                                {{-- Description --}}
                                <div class="mt-6">

                                    <div class="flex items-center justify-between gap-3">

                                        <label
                                            for="description"
                                            class="block text-sm font-bold text-[#3b302b]"
                                        >
                                            Description
                                        </label>

                                        <span class="text-[11px] font-semibold text-[#b09d95]">
                                            Optional
                                        </span>

                                    </div>

                                    <textarea
                                        id="description"
                                        name="description"
                                        rows="4"
                                        placeholder="Mention ingredients, freshness, packaging, preparation time or anything useful..."
                                        class="mt-2 block w-full resize-none rounded-2xl border-[#e4d8d1] bg-[#fffdfb] px-4 py-3.5 text-sm leading-6 text-[#30241f] shadow-sm outline-none transition placeholder:text-[#b6a49c] focus:border-[#f06445] focus:ring-4 focus:ring-[#f06445]/10"
                                    >{{ old('description') }}</textarea>

                                    <p class="mt-2 text-xs text-[#a5928a]">
                                        Clear descriptions help recipients make faster decisions.
                                    </p>

                                    @error('description')
                                        <p class="mt-2 text-xs font-semibold text-red-600">
                                            {{ $message }}
                                        </p>
                                    @enderror

                                </div>

                            </section>


                            {{-- =================================================
                                QUANTITY
                            ================================================== --}}
                            <section class="border-b border-[#f1e7e1] p-6 sm:p-8 lg:p-9">

                                <div class="mb-7 flex items-start gap-4">

                                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-[#fff5df] text-xl shadow-sm">
                                        📦
                                    </div>

                                    <div>

                                        <p class="text-[11px] font-black uppercase tracking-[0.18em] text-[#c78728]">
                                            Quantity & pricing
                                        </p>

                                        <h2 class="mt-1 text-xl font-black text-[#30241f]">
                                            How much is available?
                                        </h2>

                                        <p class="mt-1 text-sm text-[#89766e]">
                                            Make the available amount clear for every request.
                                        </p>

                                    </div>

                                </div>


                                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">

                                    {{-- Quantity --}}
                                    <div>

                                        <label
                                            for="quantity"
                                            class="block text-sm font-bold text-[#3b302b]"
                                        >
                                            Quantity
                                            <span class="text-[#f06445]">*</span>
                                        </label>

                                        <input
                                            id="quantity"
                                            name="quantity"
                                            type="number"
                                            step="0.01"
                                            min="0.01"
                                            value="{{ old('quantity') }}"
                                            placeholder="e.g. 25"
                                            required
                                            class="mt-2 block w-full rounded-2xl border-[#e4d8d1] bg-[#fffdfb] px-4 py-3.5 text-sm text-[#30241f] shadow-sm outline-none transition placeholder:text-[#b6a49c] focus:border-[#f06445] focus:ring-4 focus:ring-[#f06445]/10"
                                        >

                                        @error('quantity')
                                            <p class="mt-2 text-xs font-semibold text-red-600">
                                                {{ $message }}
                                            </p>
                                        @enderror

                                    </div>


                                    {{-- Unit --}}
                                    <div>

                                        <label
                                            for="quantity_unit"
                                            class="block text-sm font-bold text-[#3b302b]"
                                        >
                                            Quantity Unit
                                            <span class="text-[#f06445]">*</span>
                                        </label>

                                        <select
                                            id="quantity_unit"
                                            name="quantity_unit"
                                            required
                                            class="mt-2 block w-full rounded-2xl border-[#e4d8d1] bg-[#fffdfb] px-4 py-3.5 text-sm text-[#30241f] shadow-sm outline-none transition focus:border-[#f06445] focus:ring-4 focus:ring-[#f06445]/10"
                                        >

                                            <option value="portions" {{ old('quantity_unit', 'portions') === 'portions' ? 'selected' : '' }}>
                                                Portions
                                            </option>

                                            <option value="kg" {{ old('quantity_unit') === 'kg' ? 'selected' : '' }}>
                                                Kilograms (kg)
                                            </option>

                                            <option value="packets" {{ old('quantity_unit') === 'packets' ? 'selected' : '' }}>
                                                Packets
                                            </option>

                                            <option value="boxes" {{ old('quantity_unit') === 'boxes' ? 'selected' : '' }}>
                                                Boxes
                                            </option>

                                            <option value="pieces" {{ old('quantity_unit') === 'pieces' ? 'selected' : '' }}>
                                                Pieces
                                            </option>

                                        </select>

                                        @error('quantity_unit')
                                            <p class="mt-2 text-xs font-semibold text-red-600">
                                                {{ $message }}
                                            </p>
                                        @enderror

                                    </div>

                                </div>


                                {{-- Price --}}
                                <div class="mt-6">

                                    <label
                                        for="price"
                                        class="block text-sm font-bold text-[#3b302b]"
                                    >
                                        Price (Rs.)
                                        <span class="text-[#f06445]">*</span>
                                    </label>

                                    <div class="relative mt-2">

                                        <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-sm font-black text-[#a18c84]">
                                            Rs.
                                        </span>

                                        <input
                                            id="price"
                                            name="price"
                                            type="number"
                                            step="0.01"
                                            min="0"
                                            value="{{ old('price', '0') }}"
                                            placeholder="0.00"
                                            required
                                            class="block w-full rounded-2xl border-[#e4d8d1] bg-[#fffdfb] py-3.5 pl-12 pr-4 text-sm text-[#30241f] shadow-sm outline-none transition placeholder:text-[#b6a49c] focus:border-[#f06445] focus:ring-4 focus:ring-[#f06445]/10"
                                        >

                                    </div>

                                    <div class="mt-2 flex items-center gap-2 text-xs text-[#8f7d75]">
                                        <span class="text-emerald-600">♥</span>
                                        Enter <strong>0</strong> when the food is donated for free.
                                    </div>

                                    @error('price')
                                        <p class="mt-2 text-xs font-semibold text-red-600">
                                            {{ $message }}
                                        </p>
                                    @enderror

                                </div>

                            </section>


                            {{-- =================================================
                                PICKUP
                            ================================================== --}}
                            <section class="p-6 sm:p-8 lg:p-9">

                                <div class="mb-7 flex items-start gap-4">

                                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-[#edf8f1] text-xl shadow-sm">
                                        📍
                                    </div>

                                    <div>

                                        <p class="text-[11px] font-black uppercase tracking-[0.18em] text-emerald-600">
                                            Pickup details
                                        </p>

                                        <h2 class="mt-1 text-xl font-black text-[#30241f]">
                                            Where and when?
                                        </h2>

                                        <p class="mt-1 text-sm text-[#89766e]">
                                            Give the delivery or requester a clear collection point.
                                        </p>

                                    </div>

                                </div>


                                {{-- Address --}}
                                <div>

                                    <label
                                        for="pickup_address"
                                        class="block text-sm font-bold text-[#3b302b]"
                                    >
                                        Pickup Address
                                        <span class="text-[#f06445]">*</span>
                                    </label>

                                    <textarea
                                        id="pickup_address"
                                        name="pickup_address"
                                        rows="3"
                                        required
                                        placeholder="Enter the exact location where the food can be collected..."
                                        class="mt-2 block w-full resize-none rounded-2xl border-[#e4d8d1] bg-[#fffdfb] px-4 py-3.5 text-sm leading-6 text-[#30241f] shadow-sm outline-none transition placeholder:text-[#b6a49c] focus:border-[#f06445] focus:ring-4 focus:ring-[#f06445]/10"
                                    >{{ old('pickup_address') }}</textarea>

                                    <p class="mt-2 text-xs text-[#a5928a]">
                                        Include building name, street, floor or a useful collection point.
                                    </p>

                                    @error('pickup_address')
                                        <p class="mt-2 text-xs font-semibold text-red-600">
                                            {{ $message }}
                                        </p>
                                    @enderror

                                </div>


                                {{-- Available Until --}}
                                <div class="mt-6">

                                    <label
                                        for="available_until"
                                        class="block text-sm font-bold text-[#3b302b]"
                                    >
                                        Available Until
                                        <span class="text-[#f06445]">*</span>
                                    </label>

                                    <input
                                        id="available_until"
                                        name="available_until"
                                        type="datetime-local"
                                        value="{{ old('available_until') }}"
                                        required
                                        class="mt-2 block w-full rounded-2xl border-[#e4d8d1] bg-[#fffdfb] px-4 py-3.5 text-sm text-[#30241f] shadow-sm outline-none transition focus:border-[#f06445] focus:ring-4 focus:ring-[#f06445]/10"
                                    >

                                    <div class="mt-3 flex items-start gap-2 rounded-xl bg-[#fff8e8] px-4 py-3 text-xs leading-5 text-[#86652e]">
                                        <span>⏰</span>

                                        <span>
                                            Set a realistic deadline so food can be collected while it is still suitable.
                                        </span>
                                    </div>

                                    @error('available_until')
                                        <p class="mt-2 text-xs font-semibold text-red-600">
                                            {{ $message }}
                                        </p>
                                    @enderror

                                </div>

                            </section>


                            {{-- =================================================
                                ACTIONS
                            ================================================== --}}
                            <div class="border-t border-[#f1e7e1] bg-[#fffaf5] p-5 sm:px-8 sm:py-6">

                                <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">

                                    <a
                                        href="{{ route('restaurant.food-listings.index') }}"
                                        class="inline-flex items-center justify-center gap-2 rounded-2xl border border-[#e5d9d2] bg-white px-5 py-3.5 text-sm font-bold text-[#6e5d56] transition hover:border-[#d6c7bf] hover:bg-[#fffdfb]"
                                    >
                                        ←
                                        Cancel
                                    </a>


                                    <button
                                        type="submit"
                                        class="group inline-flex items-center justify-center gap-3 rounded-2xl bg-[#f06445] px-7 py-3.5 text-sm font-black text-white shadow-[0_12px_28px_rgba(240,100,69,0.23)] transition duration-300 hover:-translate-y-0.5 hover:bg-[#df5437] hover:shadow-[0_16px_34px_rgba(240,100,69,0.28)] focus:outline-none focus:ring-4 focus:ring-[#f06445]/20"
                                    >

                                        <span class="flex h-6 w-6 items-center justify-center rounded-full bg-white/15">
                                            +
                                        </span>

                                        Publish Food Listing

                                        <span class="transition-transform duration-300 group-hover:translate-x-1">
                                            →
                                        </span>

                                    </button>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>


                {{-- =================================================
                    RIGHT SIDEBAR
                ================================================== --}}
                <aside class="space-y-5 xl:sticky xl:top-24">

                    {{-- Live Preview --}}
                    <div class="overflow-hidden rounded-[2rem] border border-[#eee1d9] bg-white shadow-[0_12px_35px_rgba(80,50,35,0.07)]">

                        <div class="border-b border-[#f2e8e2] px-5 py-4">

                            <div class="flex items-center justify-between gap-3">

                                <div>
                                    <p class="text-[10px] font-black uppercase tracking-[0.17em] text-[#f06445]">
                                        Preview
                                    </p>

                                    <h3 class="mt-1 text-base font-black text-[#30241f]">
                                        Your listing card
                                    </h3>
                                </div>

                                <span class="rounded-full bg-emerald-50 px-2.5 py-1 text-[10px] font-bold text-emerald-700">
                                    Draft
                                </span>

                            </div>

                        </div>


                        <div class="p-4">

                            <div class="overflow-hidden rounded-[1.5rem] border border-[#eee1d9] bg-[#fffaf5]">

                                <div class="relative h-36 overflow-hidden">

                                    <img
                                        src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=800&q=85"
                                        alt="Food listing preview"
                                        class="h-full w-full object-cover"
                                    >

                                    <div class="absolute left-3 top-3 rounded-full bg-white/90 px-2.5 py-1 text-[10px] font-black text-[#e96f45] shadow-sm backdrop-blur">
                                        SURPLUS FOOD
                                    </div>

                                    <div class="absolute bottom-3 right-3 rounded-full bg-emerald-500 px-2.5 py-1 text-[10px] font-black text-white shadow-sm">
                                        Available
                                    </div>

                                </div>


                                <div class="p-4">

                                    <h4 class="font-black text-[#30241f]">
                                        {{ old('title', 'Your food name') }}
                                    </h4>

                                    <p class="mt-1 text-xs text-[#95827a]">
                                        {{ old('food_type', 'Food type') }}
                                    </p>


                                    <div class="mt-4 grid grid-cols-2 gap-2">

                                        <div class="rounded-xl bg-white p-3">

                                            <p class="text-[9px] font-bold uppercase tracking-wider text-[#a28e86]">
                                                Quantity
                                            </p>

                                            <p class="mt-1 text-sm font-black text-[#30241f]">
                                                {{ old('quantity', '—') }}
                                                {{ old('quantity_unit', '') }}
                                            </p>

                                        </div>


                                        <div class="rounded-xl bg-white p-3">

                                            <p class="text-[9px] font-bold uppercase tracking-wider text-[#a28e86]">
                                                Price
                                            </p>

                                            <p class="mt-1 text-sm font-black text-[#f06445]">
                                                Rs. {{ old('price', '0') }}
                                            </p>

                                        </div>

                                    </div>


                                    <div class="mt-3 flex items-center gap-2 text-xs text-[#7d6b64]">
                                        <span>📍</span>
                                        <span class="truncate">
                                            {{ old('pickup_address', 'Pickup location') }}
                                        </span>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    {{-- Listing Tips --}}
                    <div class="overflow-hidden rounded-[2rem] border border-[#eee1d9] bg-white shadow-[0_10px_30px_rgba(80,50,35,0.05)]">

                        <div class="bg-[#fff0e8] px-5 py-4">

                            <div class="flex items-center gap-3">

                                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-white text-lg shadow-sm">
                                    💡
                                </div>

                                <div>

                                    <h3 class="text-sm font-black text-[#30241f]">
                                        Make your listing useful
                                    </h3>

                                    <p class="text-xs text-[#8d7770]">
                                        Small details make a difference.
                                    </p>

                                </div>

                            </div>

                        </div>


                        <div class="p-5">

                            <div class="space-y-4">

                                <div class="flex items-start gap-3">

                                    <div class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-[#fff3ec] text-[10px] font-black text-[#e96f45]">
                                        01
                                    </div>

                                    <p class="text-sm leading-5 text-[#6f5d56]">
                                        Use a clear food name.
                                    </p>

                                </div>


                                <div class="flex items-start gap-3">

                                    <div class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-[#fff7e7] text-[10px] font-black text-[#b67a23]">
                                        02
                                    </div>

                                    <p class="text-sm leading-5 text-[#6f5d56]">
                                        Enter the real available quantity.
                                    </p>

                                </div>


                                <div class="flex items-start gap-3">

                                    <div class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-[#edf8f1] text-[10px] font-black text-emerald-700">
                                        03
                                    </div>

                                    <p class="text-sm leading-5 text-[#6f5d56]">
                                        Make pickup information precise.
                                    </p>

                                </div>


                                <div class="flex items-start gap-3">

                                    <div class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-[#f0f5ff] text-[10px] font-black text-blue-600">
                                        04
                                    </div>

                                    <p class="text-sm leading-5 text-[#6f5d56]">
                                        Choose a realistic availability deadline.
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>


                    {{-- Impact --}}
                    <div class="relative overflow-hidden rounded-[2rem] bg-[#214d42] p-6 shadow-[0_15px_35px_rgba(33,77,66,0.15)]">

                        <div class="absolute -right-12 -top-12 h-36 w-36 rounded-full bg-white/10 blur-2xl"></div>

                        <div class="relative">

                            <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-white/10 text-xl">
                                🌱
                            </div>

                            <p class="mt-5 text-xs font-black uppercase tracking-[0.16em] text-emerald-200">
                                Why it matters
                            </p>

                            <h3 class="mt-2 text-lg font-black text-white">
                                Surplus food can become community support.
                            </h3>

                            <p class="mt-2 text-sm leading-6 text-white/65">
                                Every accurate listing makes it easier for someone
                                to discover, request and collect available food.
                            </p>

                        </div>

                    </div>


                    {{-- Safety / Trust --}}
                    <div class="rounded-[2rem] border border-[#dcefe4] bg-[#f3fbf6] p-5">

                        <div class="flex items-start gap-3">

                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-white text-emerald-600 shadow-sm">
                                ✓
                            </div>

                            <div>

                                <p class="text-sm font-black text-[#315c46]">
                                    Before you publish
                                </p>

                                <p class="mt-1 text-xs leading-5 text-[#6c8779]">
                                    Check the quantity, price, pickup location
                                    and availability time one more time.
                                </p>

                            </div>

                        </div>

                    </div>

                </aside>

            </div>


            {{-- =====================================================
                FOOTER MESSAGE
            ====================================================== --}}
            <div class="mt-10 flex flex-col gap-3 border-t border-[#eee1d9] pt-6 sm:flex-row sm:items-center sm:justify-between">

                <div class="flex items-center gap-2 text-xs text-[#8d7a72]">

                    <span class="text-emerald-600">
                        ♻️
                    </span>

                    <span>
                        Surplus food today. Community impact tomorrow.
                    </span>

                </div>

                <span class="text-xs font-black tracking-wide text-[#b09d95]">
                    SURPLUSLINK LANKA
                </span>

            </div>

        </div>

    </div>

</x-app-layout>
