<x-app-layout>

    <div class="min-h-screen bg-[#FFFAF5]">

        {{-- =====================================================
            PAGE
        ====================================================== --}}
        <main class="mx-auto max-w-7xl px-4 py-7 sm:px-6 lg:px-8 lg:py-10">

            {{-- Breadcrumb --}}
            <div class="mb-7 flex items-center gap-2 text-sm">
                <a
                    href="{{ route('food-listings.browse') }}"
                    class="font-semibold text-gray-500 transition hover:text-[#F56F32]"
                >
                    Browse Food
                </a>

                <span class="text-gray-300">/</span>

                <span class="font-semibold text-gray-900">
                    {{ $foodListing->title }}
                </span>
            </div>


            {{-- =================================================
                ERROR
            ================================================== --}}
            @if ($errors->any())

                <div class="mb-7 rounded-2xl border border-red-200 bg-red-50 px-5 py-4">
                    <div class="flex gap-3">

                        <div class="mt-0.5 text-red-500">
                            ⚠
                        </div>

                        <div>
                            <p class="text-sm font-bold text-red-800">
                                Please check your request.
                            </p>

                            <ul class="mt-2 space-y-1 text-sm text-red-700">
                                @foreach ($errors->all() as $error)
                                    <li>• {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>

            @endif


            {{-- =================================================
                HERO FOOD AREA
            ================================================== --}}
            <section class="relative mb-8 overflow-hidden rounded-[32px] bg-[#2E211B] shadow-[0_20px_60px_rgba(55,35,20,0.14)]">

                {{-- Background food image --}}
                <div class="absolute inset-0">

                    <img
                        src="https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=1800&q=85"
                        alt="Fresh surplus food"
                        class="h-full w-full object-cover opacity-45"
                    >

                    <div class="absolute inset-0 bg-gradient-to-r from-[#241914] via-[#2E211B]/85 to-[#2E211B]/35"></div>

                </div>


                {{-- Decorative glow --}}
                <div class="absolute -right-20 -top-24 h-72 w-72 rounded-full bg-orange-400/20 blur-3xl"></div>


                <div class="relative grid min-h-[340px] items-end lg:grid-cols-[1.15fr_.85fr]">

                    {{-- Hero content --}}
                    <div class="px-6 py-9 sm:px-10 sm:py-12 lg:px-12">

                        <div class="mb-5 inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-2 text-xs font-black uppercase tracking-[0.14em] text-white backdrop-blur-md">

                            <span class="h-2 w-2 rounded-full bg-emerald-400"></span>

                            Surplus Food

                        </div>


                        <h1 class="max-w-3xl text-4xl font-black leading-[1.05] tracking-tight text-white sm:text-5xl lg:text-6xl">

                            Good food deserves
                            <span class="text-[#FF9A62]">
                                another purpose.
                            </span>

                        </h1>


                        <p class="mt-5 max-w-2xl text-sm leading-7 text-white/75 sm:text-base">

                            Request surplus food from

                            <span class="font-bold text-white">
                                {{ $foodListing->restaurant->business_name }}
                            </span>

                            and help keep perfectly good food from going to waste.

                        </p>


                        {{-- Restaurant --}}
                        <div class="mt-7 flex flex-wrap items-center gap-3">

                            <div class="flex items-center gap-3 rounded-2xl border border-white/10 bg-white/10 px-4 py-3 backdrop-blur-md">

                                <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-white/15">
                                    🍽️
                                </div>

                                <div>

                                    <p class="text-[10px] font-bold uppercase tracking-wider text-white/45">
                                        Listed by
                                    </p>

                                    <p class="text-sm font-bold text-white">
                                        {{ $foodListing->restaurant->business_name }}
                                    </p>

                                </div>

                            </div>


                            @if ($foodListing->restaurant->city)

                                <div class="flex items-center gap-2 rounded-2xl border border-white/10 bg-white/10 px-4 py-3 text-sm font-semibold text-white/80 backdrop-blur-md">
                                    📍 {{ $foodListing->restaurant->city }}
                                </div>

                            @endif

                        </div>

                    </div>


                    {{-- Floating food summary --}}
                    <div class="hidden items-center justify-center px-8 pb-10 lg:flex">

                        <div class="relative">

                            <div class="h-56 w-56 overflow-hidden rounded-[38px] border-8 border-white/10 shadow-2xl rotate-2">

                                <img
                                    src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=700&q=85"
                                    alt="Food"
                                    class="h-full w-full object-cover"
                                >

                            </div>


                            <div class="absolute -bottom-5 -left-8 rounded-2xl border border-white/20 bg-white/95 px-5 py-4 shadow-2xl">

                                <p class="text-[10px] font-black uppercase tracking-widest text-gray-400">
                                    Price
                                </p>

                                <p class="mt-1 text-2xl font-black text-[#F56F32]">
                                    Rs. {{ number_format($foodListing->price, 2) }}
                                </p>

                                <p class="text-[10px] font-semibold text-gray-400">
                                    per {{ $foodListing->quantity_unit }}
                                </p>

                            </div>


                            <div class="absolute -right-5 -top-5 flex h-14 w-14 items-center justify-center rounded-2xl bg-[#FF7A3D] text-2xl shadow-xl shadow-orange-900/20">
                                ❤️
                            </div>

                        </div>

                    </div>

                </div>

            </section>


            {{-- =================================================
                MAIN CONTENT
            ================================================== --}}
            <div class="grid gap-8 lg:grid-cols-[minmax(0,1fr)_390px]">


                {{-- =================================================
                    LEFT
                ================================================== --}}
                <section>

                    {{-- Food title row --}}
                    <div class="mb-6">

                        <div class="flex flex-wrap items-center gap-2">

                            @if ($foodListing->food_type)

                                <span class="rounded-full bg-orange-100 px-3 py-1.5 text-xs font-black text-[#E85F27]">
                                    {{ $foodListing->food_type }}
                                </span>

                            @endif


                            @if ($foodListing->status === 'available')

                                <span class="inline-flex items-center gap-2 rounded-full bg-emerald-50 px-3 py-1.5 text-xs font-black text-emerald-700">

                                    <span class="h-2 w-2 rounded-full bg-emerald-500"></span>

                                    Available now

                                </span>

                            @else

                                <span class="rounded-full bg-gray-100 px-3 py-1.5 text-xs font-bold text-gray-600">
                                    {{ ucfirst($foodListing->status) }}
                                </span>

                            @endif

                        </div>


                        <h2 class="mt-4 text-3xl font-black tracking-tight text-gray-900 sm:text-4xl">
                            {{ $foodListing->title }}
                        </h2>

                        <p class="mt-2 text-sm text-gray-500">
                            A surplus food listing available through SurplusLink Lanka.
                        </p>

                    </div>


                    {{-- Description --}}
                    @if ($foodListing->description)

                        <div class="mb-7">

                            <p class="max-w-3xl text-[15px] leading-7 text-gray-600">
                                {{ $foodListing->description }}
                            </p>

                        </div>

                    @endif


                    {{-- =================================================
                        FOOD DETAILS
                    ================================================== --}}
                    <div class="grid gap-3 sm:grid-cols-2">


                        {{-- Quantity --}}
                        <div class="flex gap-4 rounded-2xl border border-orange-100 bg-white p-5 shadow-sm">

                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-orange-50 text-xl">
                                📦
                            </div>

                            <div>

                                <p class="text-[10px] font-black uppercase tracking-widest text-gray-400">
                                    Available
                                </p>

                                <p class="mt-1 text-sm font-black text-gray-900">
                                    {{ $foodListing->quantity }}
                                    {{ $foodListing->quantity_unit }}
                                </p>

                            </div>

                        </div>


                        {{-- Pickup --}}
                        <div class="flex gap-4 rounded-2xl border border-orange-100 bg-white p-5 shadow-sm">

                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-orange-50 text-xl">
                                📍
                            </div>

                            <div class="min-w-0">

                                <p class="text-[10px] font-black uppercase tracking-widest text-gray-400">
                                    Pickup
                                </p>

                                <p class="mt-1 text-sm font-black leading-5 text-gray-900">
                                    {{ $foodListing->pickup_address }}
                                </p>

                            </div>

                        </div>


                        {{-- Expiry --}}
                        <div class="flex gap-4 rounded-2xl border border-orange-100 bg-white p-5 shadow-sm">

                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-orange-50 text-xl">
                                ⏰
                            </div>

                            <div>

                                <p class="text-[10px] font-black uppercase tracking-widest text-gray-400">
                                    Available until
                                </p>

                                <p class="mt-1 text-sm font-black text-gray-900">
                                    {{ $foodListing->available_until->format('d M Y') }}
                                </p>

                                <p class="text-xs text-gray-500">
                                    {{ $foodListing->available_until->format('h:i A') }}
                                </p>

                            </div>

                        </div>


                        {{-- Impact --}}
                        <div class="flex gap-4 rounded-2xl border border-emerald-100 bg-emerald-50/70 p-5 shadow-sm">

                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-white text-xl">
                                🌱
                            </div>

                            <div>

                                <p class="text-[10px] font-black uppercase tracking-widest text-emerald-600">
                                    Community impact
                                </p>

                                <p class="mt-1 text-sm font-black text-gray-900">
                                    Food waste reduced
                                </p>

                                <p class="text-xs text-gray-500">
                                    Every request helps redirect surplus food.
                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- =================================================
                        HOW IT WORKS
                    ================================================== --}}
                    <div class="mt-9 rounded-[28px] border border-gray-100 bg-white p-6 shadow-sm sm:p-8">

                        <div class="flex flex-col gap-2 sm:flex-row sm:items-end sm:justify-between">

                            <div>

                                <p class="text-[10px] font-black uppercase tracking-[0.16em] text-[#F56F32]">
                                    Request journey
                                </p>

                                <h3 class="mt-1 text-xl font-black text-gray-900">
                                    What happens after you request?
                                </h3>

                            </div>

                            <span class="text-xs font-semibold text-gray-400">
                                Simple & transparent
                            </span>

                        </div>


                        <div class="relative mt-8 grid gap-7 sm:grid-cols-3">

                            {{-- Line --}}
                            <div class="absolute left-[16%] right-[16%] top-5 hidden h-px bg-orange-100 sm:block"></div>


                            {{-- 1 --}}
                            <div class="relative">

                                <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-full bg-[#FF7A3D] text-sm font-black text-white shadow-lg shadow-orange-200">
                                    1
                                </div>

                                <h4 class="text-sm font-black text-gray-900">
                                    Send request
                                </h4>

                                <p class="mt-1 text-xs leading-5 text-gray-500">
                                    Select your quantity and send the request to the restaurant.
                                </p>

                            </div>


                            {{-- 2 --}}
                            <div class="relative">

                                <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-full border-4 border-orange-50 bg-white text-sm font-black text-[#F56F32] shadow-sm">
                                    2
                                </div>

                                <h4 class="text-sm font-black text-gray-900">
                                    Restaurant reviews
                                </h4>

                                <p class="mt-1 text-xs leading-5 text-gray-500">
                                    The restaurant reviews your request and decides whether to approve it.
                                </p>

                            </div>


                            {{-- 3 --}}
                            <div class="relative">

                                <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-full border-4 border-emerald-50 bg-white text-sm font-black text-emerald-600 shadow-sm">
                                    3
                                </div>

                                <h4 class="text-sm font-black text-gray-900">
                                    Track progress
                                </h4>

                                <p class="mt-1 text-xs leading-5 text-gray-500">
                                    Follow the request from your My Requests page.
                                </p>

                            </div>

                        </div>

                    </div>

                </section>


                {{-- =================================================
                    RIGHT — REQUEST FORM
                ================================================== --}}
                <aside>

                    <div class="lg:sticky lg:top-24">

                        <div class="overflow-hidden rounded-[30px] border border-orange-100 bg-white shadow-[0_18px_55px_rgba(80,40,10,0.10)]">


                            {{-- Form header --}}
                            <div class="relative overflow-hidden bg-[#2E211B] px-6 py-7 sm:px-7">

                                <div class="absolute -right-10 -top-10 h-32 w-32 rounded-full bg-orange-400/20 blur-3xl"></div>

                                <div class="relative">

                                    <div class="flex items-center justify-between gap-4">

                                        <div>

                                            <p class="text-[10px] font-black uppercase tracking-[0.17em] text-orange-300">
                                                Reserve surplus food
                                            </p>

                                            <h2 class="mt-2 text-2xl font-black tracking-tight text-white">
                                                Request Food
                                            </h2>

                                        </div>

                                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-white/10 text-xl">
                                            🛒
                                        </div>

                                    </div>

                                    <p class="mt-3 text-sm leading-6 text-white/60">
                                        Select the quantity you need and send your request.
                                    </p>

                                </div>

                            </div>


                            {{-- Form --}}
                            <form
                                method="POST"
                                action="{{ route('food-requests.store', $foodListing->id) }}"
                                class="p-6 sm:p-7"
                            >

                                @csrf


                                {{-- Quantity --}}
                                <div>

                                    <div class="flex items-end justify-between gap-3">

                                        <div>

                                            <label
                                                for="quantity"
                                                class="text-sm font-black text-gray-900"
                                            >
                                                Quantity
                                            </label>

                                            <p class="mt-1 text-xs text-gray-500">
                                                Maximum
                                                <span class="font-bold text-gray-700">
                                                    {{ $foodListing->quantity }}
                                                    {{ $foodListing->quantity_unit }}
                                                </span>
                                            </p>

                                        </div>

                                        <span class="rounded-full bg-orange-50 px-3 py-1 text-[10px] font-black uppercase tracking-wide text-orange-600">
                                            {{ $foodListing->quantity_unit }}
                                        </span>

                                    </div>


                                    {{-- Stepper --}}
                                    <div class="mt-4 flex items-center rounded-2xl border border-gray-200 bg-[#FFFAF5] p-1.5 focus-within:border-[#FF7A3D] focus-within:ring-4 focus-within:ring-orange-100">

                                        <button
                                            type="button"
                                            id="decreaseQty"
                                            class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl text-2xl font-bold text-gray-500 transition hover:bg-white hover:text-[#F56F32]"
                                            aria-label="Decrease quantity"
                                        >
                                            −
                                        </button>

                                        <input
                                            type="number"
                                            name="quantity"
                                            id="quantity"
                                            min="1"
                                            max="{{ $foodListing->quantity }}"
                                            step="1"
                                            value="{{ old('quantity', 1) }}"
                                            required
                                            class="h-12 w-full border-0 bg-transparent text-center text-xl font-black text-gray-900 outline-none focus:ring-0"
                                        >

                                        <button
                                            type="button"
                                            id="increaseQty"
                                            class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl text-2xl font-bold text-gray-500 transition hover:bg-white hover:text-[#F56F32]"
                                            aria-label="Increase quantity"
                                        >
                                            +
                                        </button>

                                    </div>


                                    @error('quantity')

                                        <p class="mt-2 text-xs font-semibold text-red-600">
                                            {{ $message }}
                                        </p>

                                    @enderror

                                </div>


                                {{-- Message --}}
                                <div class="mt-7">

                                    <div class="flex items-center justify-between gap-3">

                                        <label
                                            for="message"
                                            class="text-sm font-black text-gray-900"
                                        >
                                            Message
                                            <span class="font-medium text-gray-400">
                                                optional
                                            </span>
                                        </label>

                                        <span class="text-[10px] font-semibold text-gray-400">
                                            1000 max
                                        </span>

                                    </div>

                                    <p class="mt-1 text-xs text-gray-500">
                                        Add a note for the restaurant if needed.
                                    </p>


                                    <textarea
                                        name="message"
                                        id="message"
                                        rows="4"
                                        maxlength="1000"
                                        placeholder="Example: Please let me know about pickup instructions..."
                                        class="mt-3 w-full resize-none rounded-2xl border-gray-200 bg-[#FFFAF5] px-4 py-3 text-sm leading-6 text-gray-800 placeholder:text-gray-400 focus:border-[#FF7A3D] focus:ring-4 focus:ring-orange-100"
                                    >{{ old('message') }}</textarea>


                                    @error('message')

                                        <p class="mt-2 text-xs font-semibold text-red-600">
                                            {{ $message }}
                                        </p>

                                    @enderror

                                </div>


                                {{-- Total --}}
                                <div class="mt-7 rounded-2xl bg-[#FFF3E9] p-4">

                                    <div class="flex items-center justify-between gap-4">

                                        <div>

                                            <p class="text-[10px] font-black uppercase tracking-[0.14em] text-orange-600">
                                                Estimated total
                                            </p>

                                            <p class="mt-1 text-xs text-orange-700/60">
                                                Quantity × unit price
                                            </p>

                                        </div>

                                        <p
                                            id="totalPrice"
                                            class="text-2xl font-black text-[#E85F27]"
                                        >
                                            Rs. {{ number_format($foodListing->price, 2) }}
                                        </p>

                                    </div>

                                </div>


                                {{-- Submit --}}
                                <button
                                    type="submit"
                                    class="mt-6 flex w-full items-center justify-center gap-3 rounded-2xl bg-[#FF7A3D] px-5 py-4 text-sm font-black text-white shadow-lg shadow-orange-200 transition duration-200 hover:-translate-y-0.5 hover:bg-[#F56F32] hover:shadow-xl focus:outline-none focus:ring-4 focus:ring-orange-200"
                                >
                                    <span>
                                        Send Food Request
                                    </span>

                                    <span class="text-lg" aria-hidden="true">
                                        →
                                    </span>
                                </button>


                                {{-- Trust --}}
                                <div class="mt-4 flex gap-2 rounded-xl bg-emerald-50 px-3 py-3 text-xs leading-5 text-emerald-700">

                                    <span class="font-black">
                                        ✓
                                    </span>

                                    <p>
                                        Your request will be reviewed by the restaurant before approval.
                                    </p>

                                </div>

                            </form>

                        </div>


                        {{-- Back --}}
                        <a
                            href="{{ route('food-listings.browse') }}"
                            class="mt-4 flex items-center justify-center gap-2 rounded-2xl border border-gray-200 bg-white px-5 py-3.5 text-sm font-bold text-gray-600 shadow-sm transition hover:border-orange-200 hover:bg-orange-50 hover:text-[#F56F32]"
                        >
                            <span>←</span>
                            Back to Browse Food
                        </a>

                    </div>

                </aside>

            </div>

        </main>

    </div>


    {{-- =========================================================
        QUANTITY CALCULATOR
    ========================================================== --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const quantityInput = document.getElementById('quantity');
            const decreaseButton = document.getElementById('decreaseQty');
            const increaseButton = document.getElementById('increaseQty');
            const totalPrice = document.getElementById('totalPrice');

            if (
                !quantityInput ||
                !decreaseButton ||
                !increaseButton ||
                !totalPrice
            ) {
                return;
            }

            const unitPrice = {{ (float) $foodListing->price }};
            const maxQuantity = {{ (float) $foodListing->quantity }};

            function updateTotal() {

                let quantity = parseFloat(quantityInput.value);

                if (isNaN(quantity) || quantity < 1) {
                    quantity = 1;
                }

                if (quantity > maxQuantity) {
                    quantity = maxQuantity;
                }

                quantity = Math.floor(quantity);

                if (quantity < 1) {
                    quantity = 1;
                }

                quantityInput.value = quantity;

                const total = quantity * unitPrice;

                totalPrice.textContent =
                    'Rs. ' + total.toLocaleString('en-LK', {
                        minimumFractionDigits: 2,
                        maximumFractionDigits: 2
                    });
            }


            decreaseButton.addEventListener('click', function () {

                let quantity = parseFloat(quantityInput.value) || 1;

                if (quantity > 1) {
                    quantityInput.value = quantity - 1;
                    updateTotal();
                }

            });


            increaseButton.addEventListener('click', function () {

                let quantity = parseFloat(quantityInput.value) || 1;

                if (quantity < maxQuantity) {
                    quantityInput.value = quantity + 1;
                    updateTotal();
                }

            });


            quantityInput.addEventListener('input', updateTotal);

            quantityInput.addEventListener('change', updateTotal);

            updateTotal();

        });
    </script>

</x-app-layout>
