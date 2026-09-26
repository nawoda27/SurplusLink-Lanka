<x-app-layout>

    <div class="min-h-screen bg-[#fffaf5]">

        {{-- Decorative background --}}
        <div class="relative overflow-hidden">
            <div class="absolute -right-24 -top-24 h-80 w-80 rounded-full bg-[#ef6348]/10 blur-3xl"></div>
            <div class="absolute -left-24 top-96 h-80 w-80 rounded-full bg-emerald-200/20 blur-3xl"></div>

            <div class="relative mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">

                {{-- Breadcrumb --}}
                <div class="mb-6">
                    <a href="{{ route('restaurant.dashboard') }}"
                       class="inline-flex items-center gap-2 text-sm font-semibold text-gray-500 transition hover:text-[#ef6348]">
                        <span class="text-lg">←</span>
                        Back to Dashboard
                    </a>
                </div>


                {{-- Hero --}}
                <div class="mb-8 overflow-hidden rounded-[2rem] bg-gradient-to-br from-[#fff0e9] via-white to-[#fffaf5] p-7 shadow-sm ring-1 ring-[#f3ddd5] sm:p-10">

                    <div class="flex flex-col gap-7 lg:flex-row lg:items-center lg:justify-between">

                        <div class="max-w-2xl">

                            <div class="mb-4 inline-flex items-center gap-2 rounded-full bg-white px-4 py-2 text-xs font-bold uppercase tracking-[0.16em] text-[#ef6348] shadow-sm ring-1 ring-[#f3ddd5]">
                                <span class="h-2 w-2 rounded-full bg-[#ef6348]"></span>
                                Restaurant Profile
                            </div>

                            <h1 class="text-3xl font-black tracking-tight text-gray-900 sm:text-4xl">
                                Build Your
                                <span class="text-[#ef6348]">Business Profile</span>
                            </h1>

                            <p class="mt-4 max-w-xl text-sm leading-7 text-gray-600 sm:text-base">
                                Keep your restaurant information accurate so customers, NGOs,
                                and delivery partners know who they are working with.
                            </p>

                            <div class="mt-6 flex flex-wrap gap-3">

                                <div class="inline-flex items-center gap-2 rounded-full bg-white px-4 py-2 text-sm font-semibold text-gray-700 shadow-sm ring-1 ring-gray-100">
                                    <span>🍽️</span>
                                    {{ $restaurant->business_name }}
                                </div>

                                @if ($restaurant->verification_status === 'verified')

                                    <div class="inline-flex items-center gap-2 rounded-full bg-emerald-50 px-4 py-2 text-sm font-semibold text-emerald-700 ring-1 ring-emerald-100">
                                        <span>✓</span>
                                        Verified Business
                                    </div>

                                @else

                                    <div class="inline-flex items-center gap-2 rounded-full bg-amber-50 px-4 py-2 text-sm font-semibold text-amber-700 ring-1 ring-amber-100">
                                        <span>⏳</span>
                                        {{ ucfirst($restaurant->verification_status) }}
                                    </div>

                                @endif

                            </div>

                        </div>


                        {{-- Hero Visual --}}
                        <div class="hidden shrink-0 lg:block">

                            <div class="relative flex h-40 w-40 items-center justify-center rounded-[2.5rem] bg-white shadow-sm ring-1 ring-[#f3ddd5]">

                                <div class="absolute -right-3 -top-3 flex h-11 w-11 items-center justify-center rounded-2xl bg-[#ef6348] text-xl shadow-lg">
                                    ✨
                                </div>

                                <div class="text-7xl">
                                    🏪
                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- Success Message --}}
                @if (session('success'))

                    <div class="mb-6 flex items-start gap-4 rounded-2xl border border-emerald-200 bg-emerald-50 p-5 shadow-sm">

                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-emerald-100 text-lg">
                            ✓
                        </div>

                        <div>
                            <p class="font-bold text-emerald-900">
                                Profile updated
                            </p>

                            <p class="mt-1 text-sm text-emerald-700">
                                {{ session('success') }}
                            </p>
                        </div>

                    </div>

                @endif


                {{-- Validation Errors --}}
                @if ($errors->any())

                    <div class="mb-6 rounded-2xl border border-red-200 bg-red-50 p-5 text-red-700 shadow-sm">

                        <div class="flex items-start gap-3">

                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-red-100 text-lg">
                                !
                            </div>

                            <div>
                                <h3 class="font-bold text-red-900">
                                    Please check your information
                                </h3>

                                <ul class="mt-2 list-disc space-y-1 pl-5 text-sm">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>

                    </div>

                @endif


                {{-- Main Layout --}}
                <div class="grid gap-8 lg:grid-cols-[minmax(0,1fr)_320px]">


                    {{-- Form --}}
                    <div class="overflow-hidden rounded-[2rem] bg-white shadow-sm ring-1 ring-gray-100">

                        <form
                            method="POST"
                            action="{{ route('restaurant.profile.update') }}"
                            class="p-6 sm:p-8 lg:p-10"
                        >

                            @csrf
                            @method('PATCH')


                            {{-- Business Information --}}
                            <section>

                                <div class="mb-7 flex items-start gap-4">

                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-[#fff0e9] text-xl">
                                        🏪
                                    </div>

                                    <div>
                                        <h2 class="text-lg font-black text-gray-900">
                                            Business Information
                                        </h2>

                                        <p class="mt-1 text-sm text-gray-500">
                                            Tell people about your restaurant or food business.
                                        </p>
                                    </div>

                                </div>


                                <div class="space-y-6">

                                    {{-- Business Name --}}
                                    <div>

                                        <x-input-label
                                            for="business_name"
                                            :value="__('Business Name')"
                                            class="font-semibold text-gray-700"
                                        />

                                        <x-text-input
                                            id="business_name"
                                            name="business_name"
                                            type="text"
                                            class="mt-2 block w-full rounded-2xl border-gray-200 bg-[#fffdfb] px-4 py-3.5 shadow-sm transition focus:border-[#ef6348] focus:ring-[#ef6348]"
                                            :value="old('business_name', $restaurant->business_name)"
                                            required
                                            autofocus
                                            autocomplete="organization"
                                        />

                                        <x-input-error
                                            class="mt-2"
                                            :messages="$errors->get('business_name')"
                                        />

                                    </div>


                                    {{-- Business Type --}}
                                    <div>

                                        <x-input-label
                                            for="business_type"
                                            :value="__('Business Type')"
                                            class="font-semibold text-gray-700"
                                        />

                                        <x-text-input
                                            id="business_type"
                                            name="business_type"
                                            type="text"
                                            class="mt-2 block w-full rounded-2xl border-gray-200 bg-[#fffdfb] px-4 py-3.5 shadow-sm transition focus:border-[#ef6348] focus:ring-[#ef6348]"
                                            :value="old('business_type', $restaurant->business_type)"
                                            placeholder="e.g. Restaurant, Bakery, Cafe"
                                        />

                                        <x-input-error
                                            class="mt-2"
                                            :messages="$errors->get('business_type')"
                                        />

                                    </div>


                                    {{-- Description --}}
                                    <div>

                                        <x-input-label
                                            for="description"
                                            :value="__('Business Description')"
                                            class="font-semibold text-gray-700"
                                        />

                                        <textarea
                                            id="description"
                                            name="description"
                                            rows="5"
                                            class="mt-2 block w-full rounded-2xl border-gray-200 bg-[#fffdfb] px-4 py-3.5 text-sm shadow-sm transition focus:border-[#ef6348] focus:ring-[#ef6348]"
                                            placeholder="Tell people about your restaurant or food business."
                                        >{{ old('description', $restaurant->description) }}</textarea>

                                        <p class="mt-2 text-xs text-gray-400">
                                            A clear description helps others understand your business.
                                        </p>

                                        <x-input-error
                                            class="mt-2"
                                            :messages="$errors->get('description')"
                                        />

                                    </div>


                                    {{-- Phone --}}
                                    <div>

                                        <x-input-label
                                            for="phone"
                                            :value="__('Phone Number')"
                                            class="font-semibold text-gray-700"
                                        />

                                        <div class="relative mt-2">

                                            <span class="pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-lg">
                                                📞
                                            </span>

                                            <x-text-input
                                                id="phone"
                                                name="phone"
                                                type="text"
                                                class="block w-full rounded-2xl border-gray-200 bg-[#fffdfb] py-3.5 pl-12 pr-4 shadow-sm transition focus:border-[#ef6348] focus:ring-[#ef6348]"
                                                :value="old('phone', $restaurant->phone)"
                                                autocomplete="tel"
                                                placeholder="e.g. 0771234567"
                                            />

                                        </div>

                                        <x-input-error
                                            class="mt-2"
                                            :messages="$errors->get('phone')"
                                        />

                                    </div>

                                </div>

                            </section>


                            {{-- Divider --}}
                            <div class="my-10 border-t border-gray-100"></div>


                            {{-- Location --}}
                            <section>

                                <div class="mb-7 flex items-start gap-4">

                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-emerald-50 text-xl">
                                        📍
                                    </div>

                                    <div>
                                        <h2 class="text-lg font-black text-gray-900">
                                            Business Location
                                        </h2>

                                        <p class="mt-1 text-sm text-gray-500">
                                            Help people know where your surplus food can be collected.
                                        </p>
                                    </div>

                                </div>


                                <div class="space-y-6">

                                    {{-- Address --}}
                                    <div>

                                        <x-input-label
                                            for="address"
                                            :value="__('Business Address')"
                                            class="font-semibold text-gray-700"
                                        />

                                        <textarea
                                            id="address"
                                            name="address"
                                            rows="4"
                                            class="mt-2 block w-full rounded-2xl border-gray-200 bg-[#fffdfb] px-4 py-3.5 text-sm shadow-sm transition focus:border-[#ef6348] focus:ring-[#ef6348]"
                                            required
                                            autocomplete="street-address"
                                            placeholder="Enter your restaurant address"
                                        >{{ old('address', $restaurant->address) }}</textarea>

                                        <x-input-error
                                            class="mt-2"
                                            :messages="$errors->get('address')"
                                        />

                                    </div>


                                    {{-- City --}}
                                    <div>

                                        <x-input-label
                                            for="city"
                                            :value="__('City')"
                                            class="font-semibold text-gray-700"
                                        />

                                        <div class="relative mt-2">

                                            <span class="pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-lg">
                                                🏙️
                                            </span>

                                            <x-text-input
                                                id="city"
                                                name="city"
                                                type="text"
                                                class="block w-full rounded-2xl border-gray-200 bg-[#fffdfb] py-3.5 pl-12 pr-4 shadow-sm transition focus:border-[#ef6348] focus:ring-[#ef6348]"
                                                :value="old('city', $restaurant->city)"
                                                required
                                                autocomplete="address-level2"
                                                placeholder="Enter your city"
                                            />

                                        </div>

                                        <x-input-error
                                            class="mt-2"
                                            :messages="$errors->get('city')"
                                        />

                                    </div>

                                </div>

                            </section>


                            {{-- Divider --}}
                            <div class="my-10 border-t border-gray-100"></div>


                            {{-- Coordinates --}}
                            <section>

                                <div class="mb-7 flex items-start gap-4">

                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-orange-50 text-xl">
                                        🗺️
                                    </div>

                                    <div>
                                        <h2 class="text-lg font-black text-gray-900">
                                            Location Coordinates
                                        </h2>

                                        <p class="mt-1 text-sm text-gray-500">
                                            Optional coordinates for future map and nearby-food features.
                                        </p>
                                    </div>

                                </div>


                                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">

                                    {{-- Latitude --}}
                                    <div>

                                        <x-input-label
                                            for="latitude"
                                            :value="__('Latitude')"
                                            class="font-semibold text-gray-700"
                                        />

                                        <x-text-input
                                            id="latitude"
                                            name="latitude"
                                            type="number"
                                            step="0.0000001"
                                            class="mt-2 block w-full rounded-2xl border-gray-200 bg-[#fffdfb] px-4 py-3.5 shadow-sm transition focus:border-[#ef6348] focus:ring-[#ef6348]"
                                            :value="old('latitude', $restaurant->latitude)"
                                            placeholder="e.g. 6.9271"
                                        />

                                        <x-input-error
                                            class="mt-2"
                                            :messages="$errors->get('latitude')"
                                        />

                                    </div>


                                    {{-- Longitude --}}
                                    <div>

                                        <x-input-label
                                            for="longitude"
                                            :value="__('Longitude')"
                                            class="font-semibold text-gray-700"
                                        />

                                        <x-text-input
                                            id="longitude"
                                            name="longitude"
                                            type="number"
                                            step="0.0000001"
                                            class="mt-2 block w-full rounded-2xl border-gray-200 bg-[#fffdfb] px-4 py-3.5 shadow-sm transition focus:border-[#ef6348] focus:ring-[#ef6348]"
                                            :value="old('longitude', $restaurant->longitude)"
                                            placeholder="e.g. 79.8612"
                                        />

                                        <x-input-error
                                            class="mt-2"
                                            :messages="$errors->get('longitude')"
                                        />

                                    </div>

                                </div>


                                <div class="mt-5 rounded-2xl bg-[#fffaf5] p-4 ring-1 ring-[#f4e8df]">

                                    <div class="flex gap-3">

                                        <span class="text-lg">
                                            💡
                                        </span>

                                        <p class="text-xs leading-5 text-gray-500">
                                            Coordinates are optional. They can support future
                                            map-based discovery and nearby surplus food features.
                                        </p>

                                    </div>

                                </div>

                            </section>


                            {{-- Divider --}}
                            <div class="my-10 border-t border-gray-100"></div>


                            {{-- Verification --}}
                            <section>

                                <div class="mb-7 flex items-start gap-4">

                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-emerald-50 text-xl">
                                        🛡️
                                    </div>

                                    <div>
                                        <h2 class="text-lg font-black text-gray-900">
                                            Verification Status
                                        </h2>

                                        <p class="mt-1 text-sm text-gray-500">
                                            Your business verification is managed by the platform.
                                        </p>
                                    </div>

                                </div>


                                @if ($restaurant->verification_status === 'verified')

                                    <div class="rounded-2xl border border-emerald-200 bg-emerald-50 p-5">

                                        <div class="flex items-center gap-4">

                                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-white text-xl shadow-sm">
                                                ✓
                                            </div>

                                            <div>

                                                <div class="flex flex-wrap items-center gap-2">

                                                    <p class="font-black text-emerald-900">
                                                        Verified Business
                                                    </p>

                                                    <span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-bold text-emerald-700">
                                                        Verified
                                                    </span>

                                                </div>

                                                <p class="mt-1 text-sm text-emerald-700/80">
                                                    Your restaurant has been verified by a platform administrator.
                                                </p>

                                            </div>

                                        </div>

                                    </div>

                                @else

                                    <div class="rounded-2xl border border-amber-200 bg-amber-50 p-5">

                                        <div class="flex items-center gap-4">

                                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-white text-xl shadow-sm">
                                                ⏳
                                            </div>

                                            <div>

                                                <p class="font-black text-amber-900">
                                                    {{ ucfirst($restaurant->verification_status) }}
                                                </p>

                                                <p class="mt-1 text-sm text-amber-700/80">
                                                    Your verification status is managed by a platform administrator.
                                                </p>

                                            </div>

                                        </div>

                                    </div>

                                @endif

                            </section>


                            {{-- Actions --}}
                            <div class="mt-10 flex flex-col-reverse gap-3 border-t border-gray-100 pt-7 sm:flex-row sm:items-center sm:justify-between">

                                <a
                                    href="{{ route('restaurant.dashboard') }}"
                                    class="inline-flex items-center justify-center rounded-2xl border border-gray-200 bg-white px-5 py-3 text-sm font-bold text-gray-600 transition hover:border-gray-300 hover:bg-gray-50 hover:text-gray-900"
                                >
                                    Cancel
                                </a>

                                <button
                                    type="submit"
                                    class="inline-flex items-center justify-center gap-2 rounded-2xl bg-[#ef6348] px-7 py-3.5 text-sm font-bold text-white shadow-lg shadow-[#ef6348]/20 transition duration-200 hover:-translate-y-0.5 hover:bg-[#e9573b] hover:shadow-xl hover:shadow-[#ef6348]/25 focus:outline-none focus:ring-2 focus:ring-[#ef6348] focus:ring-offset-2"
                                >
                                    <span>✓</span>
                                    Save Changes
                                </button>

                            </div>

                        </form>

                    </div>


                    {{-- Sidebar --}}
                    <aside class="space-y-5">

                        {{-- Profile Overview --}}
                        <div class="rounded-[2rem] bg-white p-6 shadow-sm ring-1 ring-gray-100">

                            <p class="text-xs font-bold uppercase tracking-[0.14em] text-gray-400">
                                Business Overview
                            </p>

                            <div class="mt-5 flex items-center gap-4">

                                <div class="flex h-16 w-16 shrink-0 items-center justify-center rounded-3xl bg-[#fff0e9] text-3xl">
                                    🍽️
                                </div>

                                <div class="min-w-0">

                                    <h3 class="truncate text-lg font-black text-gray-900">
                                        {{ $restaurant->business_name }}
                                    </h3>

                                    <p class="mt-1 text-sm text-gray-500">
                                        {{ $restaurant->business_type ?: 'Food Business' }}
                                    </p>

                                </div>

                            </div>


                            <div class="mt-6 space-y-3">

                                <div class="flex items-start gap-3 rounded-2xl bg-[#fffaf5] p-3">
                                    <span>📍</span>

                                    <div>
                                        <p class="text-xs font-bold text-gray-400">
                                            Location
                                        </p>

                                        <p class="mt-1 text-sm font-semibold text-gray-700">
                                            {{ $restaurant->city ?: 'City not added' }}
                                        </p>
                                    </div>
                                </div>


                                <div class="flex items-start gap-3 rounded-2xl bg-[#fffaf5] p-3">
                                    <span>📞</span>

                                    <div>
                                        <p class="text-xs font-bold text-gray-400">
                                            Contact
                                        </p>

                                        <p class="mt-1 break-all text-sm font-semibold text-gray-700">
                                            {{ $restaurant->phone ?: 'Phone not added' }}
                                        </p>
                                    </div>
                                </div>

                            </div>

                        </div>


                        {{-- Profile Tips --}}
                        <div class="rounded-[2rem] bg-white p-6 shadow-sm ring-1 ring-gray-100">

                            <div class="flex items-center gap-3">

                                <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-[#fff0e9] text-xl">
                                    ✨
                                </div>

                                <div>
                                    <h3 class="font-black text-gray-900">
                                        Profile Tips
                                    </h3>

                                    <p class="text-xs text-gray-400">
                                        Make your profile useful
                                    </p>
                                </div>

                            </div>


                            <div class="mt-6 space-y-4">

                                <div class="flex gap-3">
                                    <span>🏪</span>

                                    <p class="text-sm leading-6 text-gray-600">
                                        Use your official business name so people can easily identify your restaurant.
                                    </p>
                                </div>

                                <div class="flex gap-3">
                                    <span>📍</span>

                                    <p class="text-sm leading-6 text-gray-600">
                                        Keep your address and city accurate for easier food collection.
                                    </p>
                                </div>

                                <div class="flex gap-3">
                                    <span>📞</span>

                                    <p class="text-sm leading-6 text-gray-600">
                                        Add a reliable contact number for smoother coordination.
                                    </p>
                                </div>

                            </div>

                        </div>


                        {{-- Impact --}}
                        <div class="rounded-[2rem] bg-emerald-50 p-6 ring-1 ring-emerald-100">

                            <div class="text-2xl">
                                ♻️
                            </div>

                            <h3 class="mt-3 font-black text-emerald-900">
                                Your business creates impact
                            </h3>

                            <p class="mt-2 text-sm leading-6 text-emerald-800/80">
                                A complete profile helps connect your surplus food
                                with the right people and organizations.
                            </p>

                        </div>

                    </aside>

                </div>


                {{-- Bottom Trust Strip --}}
                <div class="mt-10 overflow-hidden rounded-[2rem] bg-gradient-to-r from-[#fff0e9] via-white to-emerald-50 p-6 ring-1 ring-gray-100 sm:p-8">

                    <div class="flex flex-col gap-5 sm:flex-row sm:items-center sm:justify-between">

                        <div class="flex items-start gap-4">

                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-white text-2xl shadow-sm">
                                🤝
                            </div>

                            <div>
                                <h3 class="font-black text-gray-900">
                                    Better information builds better connections
                                </h3>

                                <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">
                                    Keep your restaurant details up to date so every
                                    surplus-food handover can happen more smoothly.
                                </p>
                            </div>

                        </div>

                        <div class="shrink-0 rounded-full bg-white px-4 py-2 text-xs font-bold text-[#ef6348] shadow-sm ring-1 ring-[#f3ddd5]">
                            SurplusLink Lanka
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>

</x-app-layout>