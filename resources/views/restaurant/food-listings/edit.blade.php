<x-app-layout>

    {{-- Page --}}
    <div class="min-h-screen bg-[#fffaf5]">

        {{-- Decorative background --}}
        <div class="relative overflow-hidden">
            <div class="absolute -top-20 -right-20 h-64 w-64 rounded-full bg-[#ff7a59]/10 blur-3xl"></div>
            <div class="absolute top-40 -left-24 h-72 w-72 rounded-full bg-emerald-200/20 blur-3xl"></div>

            <div class="relative mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">

                {{-- Breadcrumb --}}
                <div class="mb-6">
                    <a href="{{ route('restaurant.food-listings.index') }}"
                       class="inline-flex items-center gap-2 text-sm font-semibold text-gray-500 transition hover:text-[#ef6348]">
                        <span class="text-lg">←</span>
                        Back to Food Listings
                    </a>
                </div>

                {{-- Hero --}}
                <div class="mb-8 grid gap-6 lg:grid-cols-[1fr_320px] lg:items-stretch">

                    <div class="relative overflow-hidden rounded-[2rem] bg-gradient-to-br from-[#fff0e9] via-white to-[#fffaf5] p-7 shadow-sm ring-1 ring-[#f3ddd5] sm:p-10">

                        <div class="absolute -right-10 -top-10 text-[9rem] opacity-[0.08]">
                            🍲
                        </div>

                        <div class="relative max-w-2xl">

                            <div class="mb-4 inline-flex items-center gap-2 rounded-full bg-white px-4 py-2 text-xs font-bold uppercase tracking-[0.16em] text-[#ef6348] shadow-sm ring-1 ring-[#f3ddd5]">
                                <span class="h-2 w-2 rounded-full bg-[#ef6348]"></span>
                                Restaurant Food Listing
                            </div>

                            <h1 class="text-3xl font-black tracking-tight text-gray-900 sm:text-4xl">
                                Edit Your
                                <span class="text-[#ef6348]">Surplus Food</span>
                            </h1>

                            <p class="mt-4 max-w-xl text-sm leading-7 text-gray-600 sm:text-base">
                                Keep your food information accurate so customers, NGOs,
                                and delivery partners can clearly understand what is available.
                            </p>

                            <div class="mt-6 flex flex-wrap gap-3">

                                <div class="inline-flex items-center gap-2 rounded-full bg-white px-4 py-2 text-sm font-semibold text-gray-700 shadow-sm ring-1 ring-gray-100">
                                    <span>🍽️</span>
                                    {{ $foodListing->title }}
                                </div>

                                <div class="inline-flex items-center gap-2 rounded-full bg-emerald-50 px-4 py-2 text-sm font-semibold text-emerald-700 ring-1 ring-emerald-100">
                                    <span>♻️</span>
                                    Helping reduce food waste
                                </div>

                            </div>
                        </div>
                    </div>


                    {{-- Listing Preview --}}
                    <div class="rounded-[2rem] bg-white p-6 shadow-sm ring-1 ring-gray-100">

                        <div class="flex h-full flex-col">

                            <p class="text-xs font-bold uppercase tracking-[0.16em] text-gray-400">
                                Current Listing
                            </p>

                            <div class="mt-5 flex flex-1 flex-col justify-between">

                                <div>
                                    <div class="flex h-20 w-20 items-center justify-center rounded-3xl bg-[#fff0e9] text-5xl">
                                        @php
                                            $foodIcon = match (strtolower($foodListing->food_type ?? '')) {
                                                'rice' => '🍚',
                                                'curry' => '🍛',
                                                'bakery' => '🥐',
                                                'fruits' => '🍎',
                                                'vegetables' => '🥦',
                                                default => '🍲',
                                            };
                                        @endphp

                                        {{ $foodIcon }}
                                    </div>

                                    <h2 class="mt-5 text-xl font-black text-gray-900">
                                        {{ $foodListing->title }}
                                    </h2>

                                    <p class="mt-2 text-sm leading-6 text-gray-500">
                                        {{ $foodListing->food_type ?: 'Surplus Food' }}
                                    </p>
                                </div>

                                <div class="mt-6 rounded-2xl bg-[#fffaf5] p-4">
                                    <div class="flex items-center justify-between gap-4">
                                        <span class="text-sm text-gray-500">
                                            Available quantity
                                        </span>

                                        <span class="font-black text-gray-900">
                                            {{ $foodListing->quantity }}
                                            {{ $foodListing->quantity_unit }}
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>


                {{-- Validation Errors --}}
                @if ($errors->any())

                    <div class="mb-6 rounded-2xl border border-red-200 bg-red-50 p-5 text-red-700 shadow-sm">

                        <div class="flex items-start gap-3">

                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-red-100">
                                ⚠️
                            </div>

                            <div>
                                <h3 class="font-bold">
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


                {{-- Main Form Layout --}}
                <div class="grid gap-8 lg:grid-cols-[minmax(0,1fr)_300px]">

                    {{-- Form --}}
                    <div class="overflow-hidden rounded-[2rem] bg-white shadow-sm ring-1 ring-gray-100">

                        <form method="POST"
                              action="{{ route('restaurant.food-listings.update', $foodListing->id) }}"
                              class="p-6 sm:p-8 lg:p-10">

                            @csrf
                            @method('PUT')


                            {{-- Section 1 --}}
                            <div>

                                <div class="mb-6 flex items-start gap-4">

                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-[#fff0e9] text-xl">
                                        🍽️
                                    </div>

                                    <div>
                                        <h2 class="text-lg font-black text-gray-900">
                                            Food Details
                                        </h2>

                                        <p class="mt-1 text-sm text-gray-500">
                                            Update the basic information about your surplus food.
                                        </p>
                                    </div>

                                </div>


                                <div class="space-y-6">

                                    {{-- Food Name --}}
                                    <div>
                                        <x-input-label
                                            for="title"
                                            value="Food Name"
                                            class="font-semibold text-gray-700"
                                        />

                                        <x-text-input
                                            id="title"
                                            name="title"
                                            type="text"
                                            class="mt-2 block w-full rounded-2xl border-gray-200 bg-[#fffdfb] px-4 py-3.5 shadow-sm transition focus:border-[#ef6348] focus:ring-[#ef6348]"
                                            value="{{ old('title', $foodListing->title) }}"
                                            required
                                            autofocus
                                            placeholder="e.g. Vegetable Rice"
                                        />

                                        <x-input-error
                                            :messages="$errors->get('title')"
                                            class="mt-2"
                                        />
                                    </div>


                                    {{-- Food Type --}}
                                    <div>

                                        <x-input-label
                                            for="food_type"
                                            value="Food Type"
                                            class="font-semibold text-gray-700"
                                        />

                                        <select
                                            id="food_type"
                                            name="food_type"
                                            class="mt-2 block w-full rounded-2xl border-gray-200 bg-[#fffdfb] px-4 py-3.5 text-sm shadow-sm transition focus:border-[#ef6348] focus:ring-[#ef6348]"
                                        >
                                            <option value="">Select food type</option>

                                            <option value="Rice"
                                                {{ old('food_type', $foodListing->food_type) === 'Rice' ? 'selected' : '' }}>
                                                🍚 Rice
                                            </option>

                                            <option value="Curry"
                                                {{ old('food_type', $foodListing->food_type) === 'Curry' ? 'selected' : '' }}>
                                                🍛 Curry
                                            </option>

                                            <option value="Bakery"
                                                {{ old('food_type', $foodListing->food_type) === 'Bakery' ? 'selected' : '' }}>
                                                🥐 Bakery
                                            </option>

                                            <option value="Fruits"
                                                {{ old('food_type', $foodListing->food_type) === 'Fruits' ? 'selected' : '' }}>
                                                🍎 Fruits
                                            </option>

                                            <option value="Vegetables"
                                                {{ old('food_type', $foodListing->food_type) === 'Vegetables' ? 'selected' : '' }}>
                                                🥦 Vegetables
                                            </option>

                                            <option value="Other"
                                                {{ old('food_type', $foodListing->food_type) === 'Other' ? 'selected' : '' }}>
                                                🍲 Other
                                            </option>
                                        </select>

                                        <x-input-error
                                            :messages="$errors->get('food_type')"
                                            class="mt-2"
                                        />

                                    </div>


                                    {{-- Description --}}
                                    <div>

                                        <x-input-label
                                            for="description"
                                            value="Description"
                                            class="font-semibold text-gray-700"
                                        />

                                        <textarea
                                            id="description"
                                            name="description"
                                            rows="5"
                                            class="mt-2 block w-full rounded-2xl border-gray-200 bg-[#fffdfb] px-4 py-3.5 text-sm shadow-sm transition focus:border-[#ef6348] focus:ring-[#ef6348]"
                                            placeholder="Describe the food, ingredients, packaging, or any important information."
                                        >{{ old('description', $foodListing->description) }}</textarea>

                                        <p class="mt-2 text-xs text-gray-400">
                                            Clear information helps people understand the food before requesting it.
                                        </p>

                                        <x-input-error
                                            :messages="$errors->get('description')"
                                            class="mt-2"
                                        />

                                    </div>

                                </div>

                            </div>


                            {{-- Divider --}}
                            <div class="my-10 border-t border-gray-100"></div>


                            {{-- Section 2 --}}
                            <div>

                                <div class="mb-6 flex items-start gap-4">

                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-orange-50 text-xl">
                                        📦
                                    </div>

                                    <div>
                                        <h2 class="text-lg font-black text-gray-900">
                                            Quantity & Pricing
                                        </h2>

                                        <p class="mt-1 text-sm text-gray-500">
                                            Keep the available quantity and price up to date.
                                        </p>
                                    </div>

                                </div>


                                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">

                                    {{-- Quantity --}}
                                    <div>

                                        <x-input-label
                                            for="quantity"
                                            value="Quantity"
                                            class="font-semibold text-gray-700"
                                        />

                                        <x-text-input
                                            id="quantity"
                                            name="quantity"
                                            type="number"
                                            step="0.01"
                                            min="0.01"
                                            class="mt-2 block w-full rounded-2xl border-gray-200 bg-[#fffdfb] px-4 py-3.5 shadow-sm transition focus:border-[#ef6348] focus:ring-[#ef6348]"
                                            value="{{ old('quantity', $foodListing->quantity) }}"
                                            required
                                        />

                                        <x-input-error
                                            :messages="$errors->get('quantity')"
                                            class="mt-2"
                                        />

                                    </div>


                                    {{-- Quantity Unit --}}
                                    <div>

                                        <x-input-label
                                            for="quantity_unit"
                                            value="Quantity Unit"
                                            class="font-semibold text-gray-700"
                                        />

                                        <select
                                            id="quantity_unit"
                                            name="quantity_unit"
                                            class="mt-2 block w-full rounded-2xl border-gray-200 bg-[#fffdfb] px-4 py-3.5 text-sm shadow-sm transition focus:border-[#ef6348] focus:ring-[#ef6348]"
                                            required
                                        >
                                            <option value="portions"
                                                {{ old('quantity_unit', $foodListing->quantity_unit) === 'portions' ? 'selected' : '' }}>
                                                Portions
                                            </option>

                                            <option value="kg"
                                                {{ old('quantity_unit', $foodListing->quantity_unit) === 'kg' ? 'selected' : '' }}>
                                                Kilograms (kg)
                                            </option>

                                            <option value="packets"
                                                {{ old('quantity_unit', $foodListing->quantity_unit) === 'packets' ? 'selected' : '' }}>
                                                Packets
                                            </option>

                                            <option value="boxes"
                                                {{ old('quantity_unit', $foodListing->quantity_unit) === 'boxes' ? 'selected' : '' }}>
                                                Boxes
                                            </option>

                                            <option value="pieces"
                                                {{ old('quantity_unit', $foodListing->quantity_unit) === 'pieces' ? 'selected' : '' }}>
                                                Pieces
                                            </option>
                                        </select>

                                        <x-input-error
                                            :messages="$errors->get('quantity_unit')"
                                            class="mt-2"
                                        />

                                    </div>

                                </div>


                                {{-- Price --}}
                                <div class="mt-6">

                                    <x-input-label
                                        for="price"
                                        value="Price (Rs.)"
                                        class="font-semibold text-gray-700"
                                    />

                                    <div class="relative mt-2">

                                        <span class="pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-sm font-bold text-gray-400">
                                            Rs.
                                        </span>

                                        <x-text-input
                                            id="price"
                                            name="price"
                                            type="number"
                                            step="0.01"
                                            min="0"
                                            class="block w-full rounded-2xl border-gray-200 bg-[#fffdfb] py-3.5 pl-12 pr-4 shadow-sm transition focus:border-[#ef6348] focus:ring-[#ef6348]"
                                            value="{{ old('price', $foodListing->price) }}"
                                            required
                                        />

                                    </div>

                                    <p class="mt-2 flex items-center gap-2 text-xs text-gray-400">
                                        <span>💡</span>
                                        Enter 0 if the food is being donated for free.
                                    </p>

                                    <x-input-error
                                        :messages="$errors->get('price')"
                                        class="mt-2"
                                    />

                                </div>

                            </div>


                            {{-- Divider --}}
                            <div class="my-10 border-t border-gray-100"></div>


                            {{-- Section 3 --}}
                            <div>

                                <div class="mb-6 flex items-start gap-4">

                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-emerald-50 text-xl">
                                        📍
                                    </div>

                                    <div>
                                        <h2 class="text-lg font-black text-gray-900">
                                            Pickup Information
                                        </h2>

                                        <p class="mt-1 text-sm text-gray-500">
                                            Make collection details clear and easy to understand.
                                        </p>
                                    </div>

                                </div>


                                <div class="space-y-6">

                                    {{-- Pickup Address --}}
                                    <div>

                                        <x-input-label
                                            for="pickup_address"
                                            value="Pickup Address"
                                            class="font-semibold text-gray-700"
                                        />

                                        <textarea
                                            id="pickup_address"
                                            name="pickup_address"
                                            rows="4"
                                            class="mt-2 block w-full rounded-2xl border-gray-200 bg-[#fffdfb] px-4 py-3.5 text-sm shadow-sm transition focus:border-[#ef6348] focus:ring-[#ef6348]"
                                            placeholder="Enter the location where the food can be collected."
                                            required
                                        >{{ old('pickup_address', $foodListing->pickup_address) }}</textarea>

                                        <x-input-error
                                            :messages="$errors->get('pickup_address')"
                                            class="mt-2"
                                        />

                                    </div>


                                    {{-- Available Until --}}
                                    <div>

                                        <x-input-label
                                            for="available_until"
                                            value="Available Until"
                                            class="font-semibold text-gray-700"
                                        />

                                        <x-text-input
                                            id="available_until"
                                            name="available_until"
                                            type="datetime-local"
                                            class="mt-2 block w-full rounded-2xl border-gray-200 bg-[#fffdfb] px-4 py-3.5 shadow-sm transition focus:border-[#ef6348] focus:ring-[#ef6348]"
                                            value="{{ old('available_until', $foodListing->available_until->format('Y-m-d\TH:i')) }}"
                                            required
                                        />

                                        <p class="mt-2 flex items-center gap-2 text-xs text-gray-400">
                                            <span>⏰</span>
                                            Choose the date and time until the food remains available for pickup.
                                        </p>

                                        <x-input-error
                                            :messages="$errors->get('available_until')"
                                            class="mt-2"
                                        />

                                    </div>

                                </div>

                            </div>


                            {{-- Actions --}}
                            <div class="mt-10 flex flex-col-reverse gap-3 border-t border-gray-100 pt-7 sm:flex-row sm:items-center sm:justify-between">

                                <a href="{{ route('restaurant.food-listings.index') }}"
                                   class="inline-flex items-center justify-center rounded-2xl border border-gray-200 bg-white px-5 py-3 text-sm font-bold text-gray-600 transition hover:border-gray-300 hover:bg-gray-50 hover:text-gray-900">
                                    Cancel
                                </a>

                                <button
                                    type="submit"
                                    class="inline-flex items-center justify-center gap-2 rounded-2xl bg-[#ef6348] px-7 py-3.5 text-sm font-bold text-white shadow-lg shadow-[#ef6348]/20 transition duration-200 hover:-translate-y-0.5 hover:bg-[#e9573b] hover:shadow-xl hover:shadow-[#ef6348]/25 focus:outline-none focus:ring-2 focus:ring-[#ef6348] focus:ring-offset-2"
                                >
                                    <span>✓</span>
                                    Update Food Listing
                                </button>

                            </div>

                        </form>

                    </div>


                    {{-- Right Sidebar --}}
                    <aside class="space-y-5">

                        {{-- Update Tips --}}
                        <div class="rounded-[2rem] bg-white p-6 shadow-sm ring-1 ring-gray-100">

                            <div class="flex items-center gap-3">
                                <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-[#fff0e9] text-xl">
                                    ✨
                                </div>

                                <div>
                                    <h3 class="font-black text-gray-900">
                                        Update Tips
                                    </h3>

                                    <p class="text-xs text-gray-400">
                                        Keep your listing useful
                                    </p>
                                </div>
                            </div>


                            <div class="mt-6 space-y-4">

                                <div class="flex gap-3">
                                    <span class="mt-0.5 text-base">📦</span>
                                    <p class="text-sm leading-6 text-gray-600">
                                        Keep the quantity accurate so requests do not exceed what is available.
                                    </p>
                                </div>

                                <div class="flex gap-3">
                                    <span class="mt-0.5 text-base">📍</span>
                                    <p class="text-sm leading-6 text-gray-600">
                                        Use a clear pickup address to make collection easier.
                                    </p>
                                </div>

                                <div class="flex gap-3">
                                    <span class="mt-0.5 text-base">⏰</span>
                                    <p class="text-sm leading-6 text-gray-600">
                                        Make sure the availability time reflects the actual pickup window.
                                    </p>
                                </div>

                            </div>

                        </div>


                        {{-- Current Status --}}
                        <div class="rounded-[2rem] bg-[#fff0e9] p-6 ring-1 ring-[#f3ddd5]">

                            <div class="flex items-center justify-between">

                                <span class="text-xs font-bold uppercase tracking-[0.14em] text-[#c9513b]">
                                    Listing Status
                                </span>

                                <span class="rounded-full bg-white px-3 py-1.5 text-xs font-black capitalize text-[#ef6348] shadow-sm">
                                    {{ $foodListing->status }}
                                </span>

                            </div>

                            <div class="mt-5">

                                <p class="text-2xl font-black text-gray-900">
                                    {{ $foodListing->quantity }}
                                    <span class="text-sm font-bold text-gray-500">
                                        {{ $foodListing->quantity_unit }}
                                    </span>
                                </p>

                                <p class="mt-1 text-sm text-gray-500">
                                    Currently listed quantity
                                </p>

                            </div>

                        </div>


                        {{-- Impact --}}
                        <div class="rounded-[2rem] bg-emerald-50 p-6 ring-1 ring-emerald-100">

                            <div class="text-2xl">
                                🌱
                            </div>

                            <h3 class="mt-3 font-black text-emerald-900">
                                Every listing matters
                            </h3>

                            <p class="mt-2 text-sm leading-6 text-emerald-800/80">
                                Updating this listing helps people find accurate surplus food
                                and makes redistribution easier.
                            </p>

                        </div>

                    </aside>

                </div>

            </div>

        </div>

    </div>

</x-app-layout>
