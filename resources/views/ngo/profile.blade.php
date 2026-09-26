<x-app-layout>

    <div class="min-h-screen bg-[#fffaf5] text-slate-800">

        {{-- =========================================================
             HERO
        ========================================================== --}}
        <section class="relative overflow-hidden">

            <div class="absolute -right-28 -top-24 h-80 w-80 rounded-full bg-orange-100/70 blur-3xl"></div>
            <div class="absolute -left-28 top-36 h-72 w-72 rounded-full bg-emerald-100/50 blur-3xl"></div>

            <div class="relative mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8 lg:py-10">

                <div class="grid items-center gap-8 lg:grid-cols-[1.15fr_.85fr]">

                    {{-- Hero Content --}}
                    <div class="max-w-2xl">

                        <a
                            href="{{ route('ngo.dashboard') }}"
                            class="inline-flex items-center gap-2 rounded-full bg-white px-4 py-2 text-xs font-black text-slate-500 shadow-sm ring-1 ring-slate-200 transition duration-300 hover:-translate-x-0.5 hover:text-orange-600 hover:ring-orange-200"
                        >
                            <span>←</span>
                            NGO Dashboard
                        </a>


                        <div class="mt-5 inline-flex items-center gap-2 rounded-full bg-white px-4 py-2 text-xs font-black uppercase tracking-wider text-orange-600 shadow-sm ring-1 ring-orange-100">

                            <span class="flex h-7 w-7 items-center justify-center rounded-full bg-orange-50 text-sm">
                                🤝
                            </span>

                            Organization profile

                        </div>


                        <h1 class="mt-5 text-4xl font-black tracking-tight text-slate-950 sm:text-5xl lg:text-[3.6rem] lg:leading-[1.05]">

                            Build your organization's
                            <span class="text-orange-500">
                                trusted profile.
                            </span>

                        </h1>


                        <p class="mt-5 max-w-xl text-base leading-7 text-slate-600 sm:text-lg">
                            Keep your organization's information accurate so restaurants,
                            delivery partners and the SurplusLink platform know who they
                            are supporting.
                        </p>


                        <div class="mt-7 flex flex-wrap gap-3">

                            <div class="inline-flex items-center gap-2 rounded-2xl bg-white px-4 py-3 text-sm font-bold text-slate-600 shadow-sm ring-1 ring-slate-200">

                                <span class="flex h-7 w-7 items-center justify-center rounded-xl bg-emerald-50 text-sm">
                                    🌱
                                </span>

                                Community focused

                            </div>


                            <div class="inline-flex items-center gap-2 rounded-2xl bg-white px-4 py-3 text-sm font-bold text-slate-600 shadow-sm ring-1 ring-slate-200">

                                <span class="flex h-7 w-7 items-center justify-center rounded-xl bg-orange-50 text-sm">
                                    ✓
                                </span>

                                Organization details

                            </div>

                        </div>

                    </div>


                    {{-- Hero Visual --}}
                    <div class="relative mx-auto w-full max-w-md">

                        <div class="absolute -inset-6 rounded-[3rem] bg-gradient-to-br from-orange-100 via-white to-emerald-100 opacity-80 blur-2xl"></div>


                        <div class="relative overflow-hidden rounded-[2.25rem] bg-white p-3 shadow-2xl shadow-slate-200/80 ring-1 ring-slate-100">

                            <div class="relative overflow-hidden rounded-[1.8rem] bg-gradient-to-br from-orange-100 via-amber-50 to-emerald-100">

                                <img
                                    src="https://images.unsplash.com/photo-1559027615-cd4628902d4a?auto=format&fit=crop&w=1000&q=85"
                                    alt="Community volunteers working together"
                                    class="h-[300px] w-full object-cover"
                                >

                                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/65 via-transparent to-transparent"></div>


                                <div class="absolute bottom-0 left-0 right-0 p-5">

                                    <div class="rounded-2xl bg-white/95 p-4 shadow-xl backdrop-blur">

                                        <div class="flex items-center justify-between gap-4">

                                            <div class="min-w-0">

                                                <p class="text-[10px] font-black uppercase tracking-[0.16em] text-orange-500">
                                                    Your organization
                                                </p>

                                                <p class="mt-1 truncate text-lg font-black text-slate-950">
                                                    {{ $ngo->organization_name ?: 'Your NGO' }}
                                                </p>

                                                <p class="mt-1 text-xs font-medium text-slate-500">
                                                    Helping move surplus food towards communities.
                                                </p>

                                            </div>


                                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-emerald-50 text-xl ring-1 ring-emerald-100">
                                                🌱
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
             SUCCESS MESSAGE
        ========================================================== --}}
        @if (session('success'))

            <section class="mx-auto max-w-7xl px-4 pb-4 sm:px-6 lg:px-8">

                <div class="flex items-start gap-3 rounded-[1.5rem] border border-emerald-100 bg-emerald-50 px-5 py-4 shadow-sm">

                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-emerald-100 text-emerald-700">
                        ✓
                    </div>

                    <div>

                        <p class="text-sm font-black text-emerald-800">
                            Profile updated
                        </p>

                        <p class="mt-0.5 text-xs leading-5 text-emerald-700">
                            {{ session('success') }}
                        </p>

                    </div>

                </div>

            </section>

        @endif


        {{-- =========================================================
             VALIDATION ERRORS
        ========================================================== --}}
        @if ($errors->any())

            <section class="mx-auto max-w-7xl px-4 pb-4 sm:px-6 lg:px-8">

                <div class="rounded-[1.5rem] border border-rose-100 bg-rose-50 px-5 py-4 shadow-sm">

                    <div class="flex items-start gap-3">

                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-rose-100 text-rose-600">
                            !
                        </div>


                        <div class="min-w-0">

                            <p class="text-sm font-black text-rose-800">
                                Please check the highlighted information
                            </p>

                            <ul class="mt-2 space-y-1 text-xs leading-5 text-rose-700">

                                @foreach ($errors->all() as $error)

                                    <li class="flex items-start gap-2">
                                        <span>•</span>
                                        <span>{{ $error }}</span>
                                    </li>

                                @endforeach

                            </ul>

                        </div>

                    </div>

                </div>

            </section>

        @endif


        {{-- =========================================================
             PROFILE CONTENT
        ========================================================== --}}
        <section class="mx-auto max-w-7xl px-4 pb-12 sm:px-6 lg:px-8">

            <div class="grid gap-6 lg:grid-cols-[1fr_330px] lg:items-start">

                {{-- =================================================
                     MAIN FORM
                ================================================== --}}
                <div class="overflow-hidden rounded-[2rem] bg-white shadow-sm ring-1 ring-slate-100">

                    <div class="border-b border-slate-100 px-5 py-6 sm:px-7">

                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

                            <div>

                                <p class="text-xs font-black uppercase tracking-[0.18em] text-orange-500">
                                    Organization details
                                </p>

                                <h2 class="mt-1 text-2xl font-black tracking-tight text-slate-950">
                                    Tell us about your NGO
                                </h2>

                                <p class="mt-1 text-sm leading-6 text-slate-500">
                                    Keep these details current to maintain a clear and trusted profile.
                                </p>

                            </div>


                            {{-- Verification Badge --}}
                            @if ($ngo->verification_status === 'verified')

                                <span class="inline-flex w-fit items-center gap-2 rounded-full bg-emerald-50 px-4 py-2 text-xs font-black text-emerald-700 ring-1 ring-emerald-100">

                                    <span class="flex h-5 w-5 items-center justify-center rounded-full bg-emerald-500 text-[10px] text-white">
                                        ✓
                                    </span>

                                    Verified organization

                                </span>

                            @elseif ($ngo->verification_status === 'rejected')

                                <span class="inline-flex w-fit items-center gap-2 rounded-full bg-rose-50 px-4 py-2 text-xs font-black text-rose-700 ring-1 ring-rose-100">

                                    <span class="flex h-5 w-5 items-center justify-center rounded-full bg-rose-500 text-[10px] text-white">
                                        !
                                    </span>

                                    Verification rejected

                                </span>

                            @else

                                <span class="inline-flex w-fit items-center gap-2 rounded-full bg-amber-50 px-4 py-2 text-xs font-black text-amber-700 ring-1 ring-amber-100">

                                    <span class="flex h-5 w-5 items-center justify-center rounded-full bg-amber-400 text-[10px] text-white">
                                        ⏳
                                    </span>

                                    Verification pending

                                </span>

                            @endif

                        </div>

                    </div>


                    <form
                        method="POST"
                        action="{{ route('ngo.profile.update') }}"
                    >

                        @csrf
                        @method('PATCH')


                        {{-- =========================================
                             BASIC INFORMATION
                        ========================================== --}}
                        <div class="p-5 sm:p-7">

                            <div class="mb-6 flex items-center gap-3">

                                <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-orange-50 text-lg ring-1 ring-orange-100">
                                    🏢
                                </div>

                                <div>

                                    <p class="text-xs font-black uppercase tracking-[0.14em] text-orange-500">
                                        Section 01
                                    </p>

                                    <h3 class="mt-0.5 text-lg font-black text-slate-950">
                                        Organization information
                                    </h3>

                                </div>

                            </div>


                            <div class="grid gap-5 sm:grid-cols-2">

                                {{-- Organization Name --}}
                                <div class="sm:col-span-2">

                                    <label
                                        for="organization_name"
                                        class="text-xs font-black uppercase tracking-[0.12em] text-slate-500"
                                    >
                                        Organization name
                                    </label>


                                    <div class="relative mt-2">

                                        <span class="pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-lg">
                                            🏢
                                        </span>


                                        <input
                                            id="organization_name"
                                            name="organization_name"
                                            type="text"
                                            value="{{ old('organization_name', $ngo->organization_name) }}"
                                            required
                                            autofocus
                                            autocomplete="organization"
                                            placeholder="Enter your organization's name"
                                            class="h-12 w-full rounded-2xl border-0 bg-[#fffaf5] pl-12 pr-4 text-sm font-semibold text-slate-800 ring-1 ring-slate-200 transition placeholder:text-slate-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-orange-400"
                                        >

                                    </div>


                                    @error('organization_name')

                                        <p class="mt-2 text-xs font-semibold text-rose-600">
                                            {{ $message }}
                                        </p>

                                    @enderror

                                </div>


                                {{-- Registration Number --}}
                                <div>

                                    <label
                                        for="registration_number"
                                        class="text-xs font-black uppercase tracking-[0.12em] text-slate-500"
                                    >
                                        Registration number
                                    </label>


                                    <div class="relative mt-2">

                                        <span class="pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-lg">
                                            🪪
                                        </span>


                                        <input
                                            id="registration_number"
                                            name="registration_number"
                                            type="text"
                                            value="{{ old('registration_number', $ngo->registration_number) }}"
                                            placeholder="NGO registration number"
                                            class="h-12 w-full rounded-2xl border-0 bg-[#fffaf5] pl-12 pr-4 text-sm font-semibold text-slate-800 ring-1 ring-slate-200 transition placeholder:text-slate-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-orange-400"
                                        >

                                    </div>


                                    <p class="mt-2 text-xs leading-5 text-slate-400">
                                        Official organization registration reference.
                                    </p>


                                    @error('registration_number')

                                        <p class="mt-1 text-xs font-semibold text-rose-600">
                                            {{ $message }}
                                        </p>

                                    @enderror

                                </div>


                                {{-- Phone --}}
                                <div>

                                    <label
                                        for="phone"
                                        class="text-xs font-black uppercase tracking-[0.12em] text-slate-500"
                                    >
                                        Phone number
                                    </label>


                                    <div class="relative mt-2">

                                        <span class="pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-lg">
                                            📞
                                        </span>


                                        <input
                                            id="phone"
                                            name="phone"
                                            type="text"
                                            value="{{ old('phone', $ngo->phone) }}"
                                            autocomplete="tel"
                                            placeholder="0771234567"
                                            class="h-12 w-full rounded-2xl border-0 bg-[#fffaf5] pl-12 pr-4 text-sm font-semibold text-slate-800 ring-1 ring-slate-200 transition placeholder:text-slate-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-orange-400"
                                        >

                                    </div>


                                    @error('phone')

                                        <p class="mt-2 text-xs font-semibold text-rose-600">
                                            {{ $message }}
                                        </p>

                                    @enderror

                                </div>


                                {{-- Description --}}
                                <div class="sm:col-span-2">

                                    <label
                                        for="description"
                                        class="text-xs font-black uppercase tracking-[0.12em] text-slate-500"
                                    >
                                        Organization description
                                    </label>


                                    <textarea
                                        id="description"
                                        name="description"
                                        rows="5"
                                        placeholder="Tell people about your organization, mission and the communities you support."
                                        class="mt-2 block w-full resize-y rounded-2xl border-0 bg-[#fffaf5] px-4 py-3.5 text-sm font-medium leading-6 text-slate-800 ring-1 ring-slate-200 transition placeholder:text-slate-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-orange-400"
                                    >{{ old('description', $ngo->description) }}</textarea>


                                    <p class="mt-2 text-xs leading-5 text-slate-400">
                                        A clear description helps communicate your organization's purpose.
                                    </p>


                                    @error('description')

                                        <p class="mt-2 text-xs font-semibold text-rose-600">
                                            {{ $message }}
                                        </p>

                                    @enderror

                                </div>

                            </div>

                        </div>


                        {{-- DIVIDER --}}
                        <div class="mx-5 border-t border-slate-100 sm:mx-7"></div>


                        {{-- =========================================
                             LOCATION
                        ========================================== --}}
                        <div class="p-5 sm:p-7">

                            <div class="mb-6 flex items-center gap-3">

                                <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-sky-50 text-lg ring-1 ring-sky-100">
                                    📍
                                </div>

                                <div>

                                    <p class="text-xs font-black uppercase tracking-[0.14em] text-sky-500">
                                        Section 02
                                    </p>

                                    <h3 class="mt-0.5 text-lg font-black text-slate-950">
                                        Organization location
                                    </h3>

                                </div>

                            </div>


                            <div class="grid gap-5 sm:grid-cols-2">

                                {{-- Address --}}
                                <div class="sm:col-span-2">

                                    <label
                                        for="address"
                                        class="text-xs font-black uppercase tracking-[0.12em] text-slate-500"
                                    >
                                        Organization address
                                    </label>


                                    <textarea
                                        id="address"
                                        name="address"
                                        rows="3"
                                        required
                                        autocomplete="street-address"
                                        placeholder="Enter your organization's full address"
                                        class="mt-2 block w-full resize-y rounded-2xl border-0 bg-[#fffaf5] px-4 py-3.5 text-sm font-medium leading-6 text-slate-800 ring-1 ring-slate-200 transition placeholder:text-slate-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-orange-400"
                                    >{{ old('address', $ngo->address) }}</textarea>


                                    @error('address')

                                        <p class="mt-2 text-xs font-semibold text-rose-600">
                                            {{ $message }}
                                        </p>

                                    @enderror

                                </div>


                                {{-- City --}}
                                <div>

                                    <label
                                        for="city"
                                        class="text-xs font-black uppercase tracking-[0.12em] text-slate-500"
                                    >
                                        City
                                    </label>


                                    <div class="relative mt-2">

                                        <span class="pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-lg">
                                            🏙️
                                        </span>


                                        <input
                                            id="city"
                                            name="city"
                                            type="text"
                                            value="{{ old('city', $ngo->city) }}"
                                            required
                                            autocomplete="address-level2"
                                            placeholder="Enter your city"
                                            class="h-12 w-full rounded-2xl border-0 bg-[#fffaf5] pl-12 pr-4 text-sm font-semibold text-slate-800 ring-1 ring-slate-200 transition placeholder:text-slate-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-orange-400"
                                        >

                                    </div>


                                    @error('city')

                                        <p class="mt-2 text-xs font-semibold text-rose-600">
                                            {{ $message }}
                                        </p>

                                    @enderror

                                </div>


                                {{-- Location Note --}}
                                <div class="flex items-center rounded-2xl bg-sky-50/70 p-4 ring-1 ring-sky-100">

                                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-white text-lg shadow-sm">
                                        📦
                                    </div>


                                    <div class="ml-3">

                                        <p class="text-xs font-black text-sky-800">
                                            Better coordination
                                        </p>

                                        <p class="mt-0.5 text-[11px] leading-5 text-sky-600">
                                            Accurate location details help with food redistribution and delivery coordination.
                                        </p>

                                    </div>

                                </div>

                            </div>

                        </div>


                        {{-- DIVIDER --}}
                        <div class="mx-5 border-t border-slate-100 sm:mx-7"></div>


                        {{-- =========================================
                             VERIFICATION
                        ========================================== --}}
                        <div class="p-5 sm:p-7">

                            <div class="mb-6 flex items-center gap-3">

                                <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-emerald-50 text-lg ring-1 ring-emerald-100">
                                    🛡️
                                </div>

                                <div>

                                    <p class="text-xs font-black uppercase tracking-[0.14em] text-emerald-600">
                                        Section 03
                                    </p>

                                    <h3 class="mt-0.5 text-lg font-black text-slate-950">
                                        Verification status
                                    </h3>

                                </div>

                            </div>


                            @if ($ngo->verification_status === 'verified')

                                <div class="rounded-[1.5rem] border border-emerald-100 bg-emerald-50/70 p-5">

                                    <div class="flex items-start gap-4">

                                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-emerald-500 text-xl text-white shadow-sm">
                                            ✓
                                        </div>


                                        <div>

                                            <div class="flex flex-wrap items-center gap-2">

                                                <h4 class="text-base font-black text-emerald-900">
                                                    Organization verified
                                                </h4>

                                                <span class="rounded-full bg-white px-2.5 py-1 text-[10px] font-black text-emerald-700 ring-1 ring-emerald-100">
                                                    VERIFIED
                                                </span>

                                            </div>


                                            <p class="mt-1 text-sm leading-6 text-emerald-700">
                                                Your organization has been verified by the SurplusLink platform administrator.
                                            </p>

                                        </div>

                                    </div>

                                </div>

                            @elseif ($ngo->verification_status === 'rejected')

                                <div class="rounded-[1.5rem] border border-rose-100 bg-rose-50/70 p-5">

                                    <div class="flex items-start gap-4">

                                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-rose-500 text-xl text-white shadow-sm">
                                            !
                                        </div>


                                        <div>

                                            <h4 class="text-base font-black text-rose-900">
                                                Verification requires attention
                                            </h4>

                                            <p class="mt-1 text-sm leading-6 text-rose-700">
                                                Your organization verification was rejected.
                                                Please ensure the information above is accurate and contact the platform administrator if necessary.
                                            </p>

                                        </div>

                                    </div>

                                </div>

                            @else

                                <div class="rounded-[1.5rem] border border-amber-100 bg-amber-50/70 p-5">

                                    <div class="flex items-start gap-4">

                                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-amber-400 text-xl text-white shadow-sm">
                                            ⏳
                                        </div>


                                        <div>

                                            <h4 class="text-base font-black text-amber-900">
                                                Verification pending
                                            </h4>

                                            <p class="mt-1 text-sm leading-6 text-amber-700">
                                                Your organization details are waiting for review by the platform administrator.
                                            </p>

                                        </div>

                                    </div>

                                </div>

                            @endif


                            <p class="mt-3 text-xs leading-5 text-slate-400">
                                Verification status is managed by the platform administrator and cannot be changed from this page.
                            </p>

                        </div>


                        {{-- ACTION BAR --}}
                        <div class="border-t border-slate-100 bg-[#fffaf5] px-5 py-5 sm:px-7">

                            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">

                                <div>

                                    <p class="text-xs font-black text-slate-700">
                                        Ready to update your profile?
                                    </p>

                                    <p class="mt-0.5 text-[11px] text-slate-400">
                                        Your changes will be saved to your organization profile.
                                    </p>

                                </div>


                                <div class="flex flex-wrap items-center gap-3">

                                    <a
                                        href="{{ route('ngo.dashboard') }}"
                                        class="inline-flex items-center justify-center gap-2 rounded-2xl bg-white px-5 py-3 text-sm font-black text-slate-600 ring-1 ring-slate-200 transition duration-300 hover:-translate-y-0.5 hover:text-orange-600 hover:ring-orange-200"
                                    >
                                        Cancel
                                    </a>


                                    <button
                                        type="submit"
                                        class="group inline-flex items-center justify-center gap-2 rounded-2xl bg-orange-500 px-5 py-3 text-sm font-black text-white shadow-md shadow-orange-200 transition duration-300 hover:-translate-y-0.5 hover:bg-orange-600 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-orange-300 focus:ring-offset-2"
                                    >
                                        Save changes

                                        <span class="transition duration-300 group-hover:translate-x-1">
                                            →
                                        </span>

                                    </button>

                                </div>

                            </div>

                        </div>

                    </form>

                </div>


                {{-- =================================================
                     SIDEBAR
                ================================================== --}}
                <aside class="space-y-5 lg:sticky lg:top-24">

                    {{-- Organization Overview --}}
                    <div class="overflow-hidden rounded-[2rem] bg-white shadow-sm ring-1 ring-slate-100">

                        <div class="border-b border-slate-100 px-5 py-5">

                            <p class="text-xs font-black uppercase tracking-[0.16em] text-orange-500">
                                Profile overview
                            </p>

                            <h3 class="mt-1 text-lg font-black text-slate-950">
                                Organization snapshot
                            </h3>

                        </div>


                        <div class="space-y-3 p-5">

                            <div class="rounded-2xl bg-[#fffaf5] p-4">

                                <div class="flex items-center gap-3">

                                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-orange-50 text-lg">
                                        🏢
                                    </div>

                                    <div class="min-w-0">

                                        <p class="text-[10px] font-black uppercase tracking-wider text-slate-400">
                                            Organization
                                        </p>

                                        <p class="mt-1 truncate text-sm font-black text-slate-800">
                                            {{ $ngo->organization_name ?: 'Not provided' }}
                                        </p>

                                    </div>

                                </div>

                            </div>


                            <div class="rounded-2xl bg-[#fffaf5] p-4">

                                <div class="flex items-center gap-3">

                                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-sky-50 text-lg">
                                        📍
                                    </div>

                                    <div class="min-w-0">

                                        <p class="text-[10px] font-black uppercase tracking-wider text-slate-400">
                                            Location
                                        </p>

                                        <p class="mt-1 truncate text-sm font-black text-slate-800">
                                            {{ $ngo->city ?: 'Not provided' }}
                                        </p>

                                    </div>

                                </div>

                            </div>


                            <div class="rounded-2xl bg-[#fffaf5] p-4">

                                <div class="flex items-center gap-3">

                                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-emerald-50 text-lg">
                                        🛡️
                                    </div>

                                    <div class="min-w-0">

                                        <p class="text-[10px] font-black uppercase tracking-wider text-slate-400">
                                            Verification
                                        </p>

                                        <p class="mt-1 text-sm font-black text-slate-800">
                                            {{ ucfirst($ngo->verification_status ?? 'Pending') }}
                                        </p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    {{-- Profile Tips --}}
                    <div class="rounded-[2rem] bg-gradient-to-br from-orange-50 via-white to-amber-50 p-5 shadow-sm ring-1 ring-orange-100">

                        <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-white text-lg shadow-sm ring-1 ring-orange-100">
                            💡
                        </div>


                        <p class="mt-4 text-xs font-black uppercase tracking-[0.16em] text-orange-500">
                            Profile tips
                        </p>


                        <h3 class="mt-1 text-lg font-black text-slate-950">
                            Keep your information clear
                        </h3>


                        <ul class="mt-4 space-y-3 text-xs leading-5 text-slate-600">

                            <li class="flex gap-2">
                                <span class="text-emerald-500">✓</span>
                                Use your official organization name.
                            </li>

                            <li class="flex gap-2">
                                <span class="text-emerald-500">✓</span>
                                Keep your contact number current.
                            </li>

                            <li class="flex gap-2">
                                <span class="text-emerald-500">✓</span>
                                Provide a clear organization description.
                            </li>

                            <li class="flex gap-2">
                                <span class="text-emerald-500">✓</span>
                                Keep your address accurate for coordination.
                            </li>

                        </ul>

                    </div>


                    {{-- Impact Card --}}
                    <div class="relative overflow-hidden rounded-[2rem] bg-emerald-900 p-6 text-white shadow-xl shadow-emerald-100">

                        <div class="absolute -right-10 -top-10 h-28 w-28 rounded-full bg-emerald-700/40 blur-xl"></div>


                        <div class="relative">

                            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-white/10 text-2xl ring-1 ring-white/10">
                                🌱
                            </div>


                            <p class="mt-5 text-xs font-black uppercase tracking-[0.16em] text-emerald-300">
                                Your mission
                            </p>


                            <h3 class="mt-1 text-xl font-black leading-tight">
                                Good food should reach people who need it.
                            </h3>


                            <p class="mt-3 text-xs leading-5 text-emerald-100">
                                A complete organization profile helps build trust
                                across the SurplusLink redistribution network.
                            </p>

                        </div>

                    </div>


                    {{-- Back Link --}}
                    <a
                        href="{{ route('ngo.dashboard') }}"
                        class="flex items-center justify-center gap-2 rounded-2xl bg-white px-5 py-3.5 text-sm font-black text-slate-600 shadow-sm ring-1 ring-slate-200 transition duration-300 hover:-translate-y-0.5 hover:text-orange-600 hover:ring-orange-200"
                    >
                        <span>←</span>
                        Back to NGO dashboard
                    </a>

                </aside>

            </div>

        </section>


        {{-- =========================================================
             TRUST STRIP
        ========================================================== --}}
        <section class="mx-auto max-w-7xl px-4 pb-10 sm:px-6 lg:px-8">

            <div class="border-t border-slate-200/70 pt-8">

                <div class="grid gap-4 sm:grid-cols-3">

                    <div class="flex items-center gap-3">

                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-orange-50 text-lg">
                            🔐
                        </div>

                        <div>

                            <p class="text-xs font-black text-slate-800">
                                Secure information
                            </p>

                            <p class="text-[11px] text-slate-400">
                                Your profile stays within the platform.
                            </p>

                        </div>

                    </div>


                    <div class="flex items-center gap-3">

                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-emerald-50 text-lg">
                            ✓
                        </div>

                        <div>

                            <p class="text-xs font-black text-slate-800">
                                Verified network
                            </p>

                            <p class="text-[11px] text-slate-400">
                                Verification is managed by admins.
                            </p>

                        </div>

                    </div>


                    <div class="flex items-center gap-3">

                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-sky-50 text-lg">
                            🤝
                        </div>

                        <div>

                            <p class="text-xs font-black text-slate-800">
                                Community focused
                            </p>

                            <p class="text-[11px] text-slate-400">
                                Built for meaningful redistribution.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </div>

</x-app-layout>
