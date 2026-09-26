<x-app-layout>
    <div class="min-h-screen overflow-hidden bg-[#fffaf6] text-[#241f1c] antialiased">

        <style>
            @keyframes profile-float {
                0%, 100% {
                    transform: translateY(0);
                }
                50% {
                    transform: translateY(-5px);
                }
            }

            .profile-float {
                animation: profile-float 5s ease-in-out infinite;
            }
        </style>

        <div class="mx-auto max-w-[1380px] px-4 py-6 sm:px-6 lg:px-10 lg:py-9">

            {{-- =====================================================
                 TOP NAV / BACK
            ====================================================== --}}
            <div class="flex flex-wrap items-center justify-between gap-3">

                <a href="{{ route('delivery-partner.dashboard') }}"
                   class="group inline-flex items-center gap-2 text-[12px] font-black text-[#756962] transition hover:text-[#df6845]">

                    <span class="flex h-9 w-9 items-center justify-center rounded-xl border border-[#eadcd5] bg-white text-[#df6845] shadow-sm transition group-hover:-translate-x-0.5">
                        ←
                    </span>

                    Back to Dashboard
                </a>

                <div class="inline-flex items-center gap-2 rounded-full border border-[#eadcd5] bg-white px-3.5 py-2 shadow-[0_4px_16px_rgba(40,25,18,0.035)]">

                    <span class="h-2.5 w-2.5 rounded-full bg-[#ff7048]"></span>

                    <span class="text-[9px] font-black uppercase tracking-[0.17em] text-[#df6845]">
                        Delivery Partner Profile
                    </span>

                </div>

            </div>


            {{-- =====================================================
                 HERO
            ====================================================== --}}
            <section class="relative mt-7 overflow-hidden rounded-[2.5rem] bg-[#ff7048] shadow-[0_24px_65px_rgba(255,112,72,0.17)]">

                <div class="pointer-events-none absolute inset-0 overflow-hidden">

                    <div class="absolute -right-28 -top-32 h-[430px] w-[430px] rounded-full bg-white/[0.12]"></div>

                    <div class="absolute -bottom-32 left-[30%] h-[320px] w-[320px] rounded-full bg-[#ffb094]/20 blur-2xl"></div>

                    <div class="absolute right-[30%] top-[25%] h-24 w-24 rounded-full border border-white/10"></div>

                </div>

                <div class="relative grid lg:grid-cols-[1.2fr_.8fr]">

                    <div class="px-6 py-9 sm:px-9 sm:py-12 lg:px-14 lg:py-14">

                        <div class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-3.5 py-2 backdrop-blur-md">

                            <span class="flex h-6 w-6 items-center justify-center rounded-full bg-white text-[13px]">
                                🏍️
                            </span>

                            <span class="text-[9px] font-black uppercase tracking-[0.16em] text-white">
                                Partner information
                            </span>

                        </div>

                        <h1 class="mt-6 max-w-[14ch] text-[40px] font-black leading-[0.94] tracking-[-0.04em] text-white sm:text-[52px]">
                            Your delivery profile.
                        </h1>

                        <p class="mt-5 max-w-xl text-[14px] leading-7 text-white/80 sm:text-[15px]">
                            Keep your vehicle, contact and location details up to date so delivery tasks can be completed smoothly.
                        </p>

                        <div class="mt-7 flex flex-wrap gap-2.5">

                            <span class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3.5 py-2 text-[10px] font-bold text-white backdrop-blur-md">
                                📱
                                {{ $deliveryPartner->phone ?: 'Phone not provided' }}
                            </span>

                            <span class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3.5 py-2 text-[10px] font-bold text-white backdrop-blur-md">
                                📍
                                {{ $deliveryPartner->city }}
                            </span>

                        </div>

                    </div>


                    {{-- Hero visual --}}
                    <div class="relative hidden min-h-[350px] overflow-hidden lg:block">

                        <img
                            src="https://images.unsplash.com/photo-1558981806-ec527fa84c39?auto=format&fit=crop&w=1100&q=88"
                            alt="Motorcycle used for delivery"
                            class="absolute inset-0 h-full w-full object-cover"
                        >

                        <div class="absolute inset-0 bg-gradient-to-r from-[#ff7048] via-[#ff7048]/45 to-transparent"></div>

                        <div class="absolute inset-0 bg-gradient-to-t from-black/25 via-transparent to-transparent"></div>


                        <div class="profile-float absolute bottom-8 right-8 w-[240px] rounded-[1.5rem] border border-white/50 bg-white/95 p-4 shadow-2xl backdrop-blur-xl">

                            <div class="flex items-center gap-3">

                                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#fff0e9] text-xl">
                                    🏍️
                                </div>

                                <div class="min-w-0">

                                    <p class="text-[9px] font-black uppercase tracking-[0.14em] text-[#aa9b93]">
                                        Your vehicle
                                    </p>

                                    <p class="mt-1 truncate text-[14px] font-black text-[#241f1c]">
                                        {{ $deliveryPartner->vehicle_type }}
                                    </p>

                                </div>

                            </div>

                            <div class="mt-4 rounded-xl bg-[#faf6f3] px-3 py-2.5">

                                <p class="text-[8px] font-black uppercase tracking-[0.13em] text-[#aa9b93]">
                                    Vehicle number
                                </p>

                                <p class="mt-1 text-[11px] font-black text-[#352d29]">
                                    {{ $deliveryPartner->vehicle_number ?: 'Not provided' }}
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </section>


            {{-- =====================================================
                 SUCCESS MESSAGE
            ====================================================== --}}
            @if (session('success'))

                <div class="mt-7 flex items-start gap-3 rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-3.5 shadow-sm">

                    <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-xl bg-emerald-100 text-sm font-black text-emerald-700">
                        ✓
                    </div>

                    <div>

                        <p class="text-[12px] font-black text-emerald-800">
                            Profile updated successfully
                        </p>

                        <p class="mt-0.5 text-[11px] leading-5 text-emerald-700">
                            {{ session('success') }}
                        </p>

                    </div>

                </div>

            @endif


            {{-- =====================================================
                 VALIDATION ERRORS
            ====================================================== --}}
            @if ($errors->any())

                <div class="mt-5 rounded-[1.5rem] border border-rose-200 bg-rose-50 p-5">

                    <div class="flex items-start gap-3">

                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-rose-100 font-black text-rose-700">
                            !
                        </div>

                        <div>

                            <h2 class="text-[13px] font-black text-rose-800">
                                Please check the highlighted information
                            </h2>

                            <ul class="mt-2 space-y-1 text-[11px] leading-5 text-rose-700">

                                @foreach ($errors->all() as $error)
                                    <li>• {{ $error }}</li>
                                @endforeach

                            </ul>

                        </div>

                    </div>

                </div>

            @endif


            {{-- =====================================================
                 MAIN CONTENT
            ====================================================== --}}
            <div class="mt-10 grid gap-7 lg:grid-cols-[minmax(0,1fr)_340px] lg:items-start">


                {{-- =================================================
                     PROFILE FORM
                ================================================== --}}
                <section>

                    <div class="mb-5">

                        <p class="text-[10px] font-black uppercase tracking-[0.18em] text-[#df6a46]">
                            Profile details
                        </p>

                        <h2 class="mt-1.5 text-[25px] font-black tracking-[-0.025em] text-[#211c19]">
                            Keep your information current
                        </h2>

                        <p class="mt-1 text-[13px] text-[#8b807a]">
                            These details help SurplusLink coordinate your delivery work.
                        </p>

                    </div>


                    <form
                        method="POST"
                        action="{{ route('delivery-partner.profile.update') }}"
                        class="space-y-5"
                    >

                        @csrf
                        @method('PATCH')


                        {{-- =============================================
                             PERSONAL / CONTACT
                        ============================================== --}}
                        <div class="rounded-[2rem] border border-[#f0e2db] bg-white p-5 shadow-[0_8px_28px_rgba(38,26,20,0.035)] sm:p-7">

                            <div class="flex items-start gap-3 border-b border-[#f2e8e3] pb-5">

                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-[#fff0e9] text-lg">
                                    👤
                                </div>

                                <div>

                                    <h3 class="text-[15px] font-black text-[#241f1c]">
                                        Contact Information
                                    </h3>

                                    <p class="mt-1 text-[11px] leading-5 text-[#8b807a]">
                                        Make sure restaurants and recipients can reach you when necessary.
                                    </p>

                                </div>

                            </div>


                            <div class="mt-6">

                                <label
                                    for="phone"
                                    class="text-[10px] font-black uppercase tracking-[0.13em] text-[#71655f]"
                                >
                                    Phone Number
                                </label>

                                <div class="relative mt-2">

                                    <span class="pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-sm">
                                        📱
                                    </span>

                                    <input
                                        id="phone"
                                        name="phone"
                                        type="text"
                                        value="{{ old('phone', $deliveryPartner->phone) }}"
                                        placeholder="0771234567"
                                        maxlength="20"
                                        class="w-full rounded-2xl border border-[#eadfd9] bg-[#fffaf7] py-3.5 pl-11 pr-4 text-[13px] font-semibold text-[#352d29] outline-none transition placeholder:text-[#b9aaa3] focus:border-[#ff9a7d] focus:bg-white focus:ring-4 focus:ring-[#ff7048]/10"
                                    />

                                </div>

                                @error('phone')
                                    <p class="mt-2 text-[10px] font-semibold text-rose-600">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>

                        </div>


                        {{-- =============================================
                             VEHICLE
                        ============================================== --}}
                        <div class="rounded-[2rem] border border-[#f0e2db] bg-white p-5 shadow-[0_8px_28px_rgba(38,26,20,0.035)] sm:p-7">

                            <div class="flex items-start gap-3 border-b border-[#f2e8e3] pb-5">

                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-[#fff7e8] text-lg">
                                    🏍️
                                </div>

                                <div>

                                    <h3 class="text-[15px] font-black text-[#241f1c]">
                                        Vehicle Information
                                    </h3>

                                    <p class="mt-1 text-[11px] leading-5 text-[#8b807a]">
                                        Tell us what you use to safely transport surplus food.
                                    </p>

                                </div>

                            </div>


                            <div class="mt-6 grid gap-5 sm:grid-cols-2">

                                {{-- Vehicle Type --}}
                                <div>

                                    <label
                                        for="vehicle_type"
                                        class="text-[10px] font-black uppercase tracking-[0.13em] text-[#71655f]"
                                    >
                                        Vehicle Type
                                    </label>

                                    <div class="relative mt-2">

                                        <span class="pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-sm">
                                            🚲
                                        </span>

                                        <input
                                            id="vehicle_type"
                                            name="vehicle_type"
                                            type="text"
                                            value="{{ old('vehicle_type', $deliveryPartner->vehicle_type) }}"
                                            placeholder="Motorcycle"
                                            maxlength="100"
                                            required
                                            class="w-full rounded-2xl border border-[#eadfd9] bg-[#fffaf7] py-3.5 pl-11 pr-4 text-[13px] font-semibold text-[#352d29] outline-none transition placeholder:text-[#b9aaa3] focus:border-[#ff9a7d] focus:bg-white focus:ring-4 focus:ring-[#ff7048]/10"
                                        />

                                    </div>

                                    @error('vehicle_type')
                                        <p class="mt-2 text-[10px] font-semibold text-rose-600">
                                            {{ $message }}
                                        </p>
                                    @enderror

                                </div>


                                {{-- Vehicle Number --}}
                                <div>

                                    <label
                                        for="vehicle_number"
                                        class="text-[10px] font-black uppercase tracking-[0.13em] text-[#71655f]"
                                    >
                                        Vehicle Number
                                    </label>

                                    <div class="relative mt-2">

                                        <span class="pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-sm">
                                            🔖
                                        </span>

                                        <input
                                            id="vehicle_number"
                                            name="vehicle_number"
                                            type="text"
                                            value="{{ old('vehicle_number', $deliveryPartner->vehicle_number) }}"
                                            placeholder="WP ABC-1234"
                                            maxlength="50"
                                            class="w-full rounded-2xl border border-[#eadfd9] bg-[#fffaf7] py-3.5 pl-11 pr-4 text-[13px] font-semibold uppercase text-[#352d29] outline-none transition placeholder:normal-case placeholder:text-[#b9aaa3] focus:border-[#ff9a7d] focus:bg-white focus:ring-4 focus:ring-[#ff7048]/10"
                                        />

                                    </div>

                                    @error('vehicle_number')
                                        <p class="mt-2 text-[10px] font-semibold text-rose-600">
                                            {{ $message }}
                                        </p>
                                    @enderror

                                </div>

                            </div>


                            <div class="mt-5 rounded-2xl border border-[#f2e6de] bg-[#fffaf7] px-4 py-3.5">

                                <div class="flex items-start gap-3">

                                    <span class="mt-0.5 text-sm">
                                        💡
                                    </span>

                                    <p class="text-[10.5px] leading-5 text-[#887b74]">
                                        Keep your vehicle number accurate so your delivery identity can be verified when needed.
                                    </p>

                                </div>

                            </div>

                        </div>


                        {{-- =============================================
                             LOCATION
                        ============================================== --}}
                        <div class="rounded-[2rem] border border-[#f0e2db] bg-white p-5 shadow-[0_8px_28px_rgba(38,26,20,0.035)] sm:p-7">

                            <div class="flex items-start gap-3 border-b border-[#f2e8e3] pb-5">

                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-[#edf6ef] text-lg">
                                    📍
                                </div>

                                <div>

                                    <h3 class="text-[15px] font-black text-[#241f1c]">
                                        Location Information
                                    </h3>

                                    <p class="mt-1 text-[11px] leading-5 text-[#8b807a]">
                                        Your location helps with delivery coordination and task availability.
                                    </p>

                                </div>

                            </div>


                            <div class="mt-6">

                                <label
                                    for="address"
                                    class="text-[10px] font-black uppercase tracking-[0.13em] text-[#71655f]"
                                >
                                    Address
                                </label>

                                <textarea
                                    id="address"
                                    name="address"
                                    rows="3"
                                    maxlength="500"
                                    required
                                    placeholder="Your current delivery area address"
                                    class="mt-2 w-full resize-none rounded-2xl border border-[#eadfd9] bg-[#fffaf7] px-4 py-3.5 text-[13px] font-semibold leading-6 text-[#352d29] outline-none transition placeholder:text-[#b9aaa3] focus:border-[#ff9a7d] focus:bg-white focus:ring-4 focus:ring-[#ff7048]/10"
                                >{{ old('address', $deliveryPartner->address) }}</textarea>

                                @error('address')
                                    <p class="mt-2 text-[10px] font-semibold text-rose-600">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>


                            <div class="mt-5">

                                <label
                                    for="city"
                                    class="text-[10px] font-black uppercase tracking-[0.13em] text-[#71655f]"
                                >
                                    City
                                </label>

                                <div class="relative mt-2">

                                    <span class="pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-sm">
                                        🏙️
                                    </span>

                                    <input
                                        id="city"
                                        name="city"
                                        type="text"
                                        value="{{ old('city', $deliveryPartner->city) }}"
                                        placeholder="Ratnapura"
                                        maxlength="100"
                                        required
                                        class="w-full rounded-2xl border border-[#eadfd9] bg-[#fffaf7] py-3.5 pl-11 pr-4 text-[13px] font-semibold text-[#352d29] outline-none transition placeholder:text-[#b9aaa3] focus:border-[#ff9a7d] focus:bg-white focus:ring-4 focus:ring-[#ff7048]/10"
                                    />

                                </div>

                                @error('city')
                                    <p class="mt-2 text-[10px] font-semibold text-rose-600">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>

                        </div>


                        {{-- =============================================
                             SAVE
                        ============================================== --}}
                        <div class="flex flex-col gap-4 rounded-[2rem] border border-[#f0e2db] bg-white p-5 shadow-[0_8px_28px_rgba(38,26,20,0.035)] sm:flex-row sm:items-center sm:justify-between sm:p-6">

                            <div>

                                <p class="text-[13px] font-black text-[#241f1c]">
                                    Ready to save your changes?
                                </p>

                                <p class="mt-1 text-[11px] leading-5 text-[#8b807a]">
                                    Your updated delivery details will be used across the platform.
                                </p>

                            </div>

                            <button
                                type="submit"
                                class="group inline-flex w-full items-center justify-center gap-2.5 rounded-2xl bg-[#ff7048] px-7 py-3.5 text-[12px] font-black text-white shadow-[0_10px_22px_rgba(255,112,72,0.20)] transition duration-300 hover:-translate-y-0.5 hover:bg-[#f5653d] hover:shadow-[0_14px_28px_rgba(255,112,72,0.27)] sm:w-auto"
                            >
                                Save Changes

                                <span class="transition group-hover:translate-x-0.5">
                                    →
                                </span>
                            </button>

                        </div>

                    </form>

                </section>


                {{-- =================================================
                     SIDEBAR
                ================================================== --}}
                <aside class="space-y-5 lg:sticky lg:top-24">


                    {{-- Verification --}}
                    <div class="overflow-hidden rounded-[2rem] border border-[#f0e2db] bg-white shadow-[0_8px_28px_rgba(38,26,20,0.035)]">

                        <div class="bg-[#214333] px-5 py-6 sm:px-6">

                            <div class="flex items-start justify-between gap-4">

                                <div>

                                    <p class="text-[9px] font-black uppercase tracking-[0.17em] text-white/45">
                                        Partner status
                                    </p>

                                    <h3 class="mt-1.5 text-[21px] font-black text-white">
                                        Verification
                                    </h3>

                                </div>

                                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-white/10 text-lg">
                                    🛡️
                                </div>

                            </div>

                        </div>


                        <div class="p-5 sm:p-6">

                            @if ($deliveryPartner->verification_status === 'verified')

                                <div class="rounded-2xl border border-[#d5e8d9] bg-[#f1f8f3] p-4">

                                    <div class="flex items-center gap-3">

                                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#e0f0e4] text-emerald-700">
                                            ✓
                                        </div>

                                        <div>

                                            <p class="text-[12px] font-black text-emerald-800">
                                                Verified Partner
                                            </p>

                                            <p class="mt-0.5 text-[10px] text-emerald-700">
                                                Your profile is verified.
                                            </p>

                                        </div>

                                    </div>

                                </div>

                            @elseif ($deliveryPartner->verification_status === 'pending')

                                <div class="rounded-2xl border border-[#f0dfb9] bg-[#fff9ec] p-4">

                                    <div class="flex items-center gap-3">

                                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#fff0c9] text-[#b47d19]">
                                            ⏳
                                        </div>

                                        <div>

                                            <p class="text-[12px] font-black text-[#966c17]">
                                                Verification Pending
                                            </p>

                                            <p class="mt-0.5 text-[10px] text-[#a9822e]">
                                                Your profile is awaiting review.
                                            </p>

                                        </div>

                                    </div>

                                </div>

                            @else

                                <div class="rounded-2xl border border-[#efd0d0] bg-[#fff4f4] p-4">

                                    <div class="flex items-center gap-3">

                                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#ffe5e5] text-rose-600">
                                            !
                                        </div>

                                        <div>

                                            <p class="text-[12px] font-black text-rose-800">
                                                {{ ucfirst($deliveryPartner->verification_status) }}
                                            </p>

                                            <p class="mt-0.5 text-[10px] text-rose-700">
                                                Please check your profile information.
                                            </p>

                                        </div>

                                    </div>

                                </div>

                            @endif

                        </div>

                    </div>


                    {{-- Quick Overview --}}
                    <div class="rounded-[2rem] border border-[#f0e2db] bg-white p-5 shadow-[0_8px_28px_rgba(38,26,20,0.035)] sm:p-6">

                        <div class="flex items-center justify-between">

                            <div>

                                <p class="text-[9px] font-black uppercase tracking-[0.16em] text-[#b09f97]">
                                    Quick overview
                                </p>

                                <h3 class="mt-1.5 text-[18px] font-black text-[#241f1c]">
                                    Your details
                                </h3>

                            </div>

                            <span class="text-lg">
                                📋
                            </span>

                        </div>


                        <div class="mt-5 space-y-3">

                            <div class="flex items-center justify-between gap-4 border-b border-[#f3e9e4] pb-3">

                                <span class="text-[10px] font-bold text-[#9a8c84]">
                                    Vehicle
                                </span>

                                <span class="max-w-[150px] truncate text-right text-[11px] font-black text-[#352d29]">
                                    {{ $deliveryPartner->vehicle_type }}
                                </span>

                            </div>


                            <div class="flex items-center justify-between gap-4 border-b border-[#f3e9e4] pb-3">

                                <span class="text-[10px] font-bold text-[#9a8c84]">
                                    Vehicle No.
                                </span>

                                <span class="max-w-[150px] truncate text-right text-[11px] font-black text-[#352d29]">
                                    {{ $deliveryPartner->vehicle_number ?: 'Not provided' }}
                                </span>

                            </div>


                            <div class="flex items-center justify-between gap-4 border-b border-[#f3e9e4] pb-3">

                                <span class="text-[10px] font-bold text-[#9a8c84]">
                                    City
                                </span>

                                <span class="max-w-[150px] truncate text-right text-[11px] font-black text-[#352d29]">
                                    {{ $deliveryPartner->city }}
                                </span>

                            </div>


                            <div class="flex items-center justify-between gap-4">

                                <span class="text-[10px] font-bold text-[#9a8c84]">
                                    Status
                                </span>

                                <span class="inline-flex items-center gap-1.5 rounded-full bg-[#edf6ef] px-2.5 py-1 text-[9px] font-black uppercase tracking-wider text-[#317a4e]">
                                    <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                                    {{ ucfirst($deliveryPartner->verification_status) }}
                                </span>

                            </div>

                        </div>

                    </div>


                    {{-- Tips --}}
                    <div class="rounded-[2rem] border border-[#f0e2db] bg-[#fffaf7] p-5 sm:p-6">

                        <div class="flex items-start gap-3">

                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-[#fff0e9] text-lg">
                                💡
                            </div>

                            <div>

                                <h3 class="text-[13px] font-black text-[#352d29]">
                                    Profile tips
                                </h3>

                                <ul class="mt-3 space-y-2.5 text-[10.5px] leading-5 text-[#887b74]">

                                    <li class="flex gap-2">
                                        <span class="text-[#ff7048]">•</span>
                                        Keep your phone number reachable.
                                    </li>

                                    <li class="flex gap-2">
                                        <span class="text-[#ff7048]">•</span>
                                        Keep vehicle information accurate.
                                    </li>

                                    <li class="flex gap-2">
                                        <span class="text-[#ff7048]">•</span>
                                        Use your current delivery area.
                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>


                    {{-- Mission --}}
                    <div class="relative overflow-hidden rounded-[2rem] bg-[#ff7048] p-5 shadow-[0_15px_35px_rgba(255,112,72,0.13)] sm:p-6">

                        <div class="absolute -right-10 -top-10 h-28 w-28 rounded-full bg-white/10"></div>

                        <div class="relative">

                            <span class="text-2xl">
                                🌱
                            </span>

                            <p class="mt-4 text-[9px] font-black uppercase tracking-[0.16em] text-white/60">
                                Your impact
                            </p>

                            <h3 class="mt-1.5 text-[17px] font-black leading-6 text-white">
                                Good food deserves a destination.
                            </h3>

                            <p class="mt-2 text-[10.5px] leading-5 text-white/75">
                                Every delivery helps reduce food waste and strengthen the local community.
                            </p>

                        </div>

                    </div>

                </aside>

            </div>


            {{-- =====================================================
                 BOTTOM TRUST STRIP
            ====================================================== --}}
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
