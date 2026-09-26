<x-app-layout>
    <div class="min-h-screen bg-[#fffaf5] text-slate-800">

        {{-- Page Header --}}
        <section class="relative overflow-hidden">
            <div class="absolute -top-24 -right-20 h-72 w-72 rounded-full bg-orange-100/70 blur-3xl"></div>
            <div class="absolute top-24 -left-24 h-64 w-64 rounded-full bg-emerald-100/50 blur-3xl"></div>

            <div class="relative mx-auto max-w-6xl px-4 pb-8 pt-8 sm:px-6 lg:px-8 lg:pb-10 lg:pt-12">

                <div class="flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between">

                    <div class="flex items-center gap-4">

                        <div class="flex h-16 w-16 shrink-0 items-center justify-center rounded-[1.35rem] bg-orange-100 text-3xl shadow-sm">
                            👤
                        </div>

                        <div>
                            <p class="text-sm font-bold uppercase tracking-[0.15em] text-orange-500">
                                Your account
                            </p>

                            <h1 class="mt-1 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">
                                Profile
                            </h1>

                            <p class="mt-1 text-sm text-slate-500">
                                Manage your personal information and account settings.
                            </p>
                        </div>

                    </div>

                    <a
                        href="{{ route('food-listings.browse') }}"
                        class="inline-flex items-center justify-center gap-2 rounded-2xl bg-white px-5 py-3 text-sm font-bold text-slate-700 shadow-sm ring-1 ring-slate-200 transition duration-300 hover:-translate-y-0.5 hover:ring-orange-200"
                    >
                        <span>←</span>
                        Back to food
                    </a>

                </div>

            </div>
        </section>


        {{-- Profile Content --}}
        <main class="mx-auto max-w-6xl px-4 pb-14 sm:px-6 lg:px-8">

            {{-- Success Message --}}
            @if (session('status') === 'profile-updated')
                <div class="mb-6 flex items-start gap-3 rounded-2xl bg-emerald-50 p-4 text-sm font-semibold text-emerald-800 ring-1 ring-emerald-100">
                    <span class="text-lg">✓</span>

                    <div>
                        <p class="font-extrabold">
                            Profile updated successfully
                        </p>

                        <p class="mt-0.5 font-medium text-emerald-700">
                            Your account information has been saved.
                        </p>
                    </div>
                </div>
            @endif


            <div class="grid gap-6 lg:grid-cols-[.72fr_1.28fr]">

                {{-- Profile Summary --}}
                <aside class="h-fit overflow-hidden rounded-[2rem] bg-white shadow-sm ring-1 ring-slate-100">

                    <div class="bg-gradient-to-br from-orange-50 via-white to-emerald-50 p-6 sm:p-8">

                        <div class="flex flex-col items-center text-center">

                            <div class="flex h-24 w-24 items-center justify-center rounded-[2rem] bg-orange-100 text-5xl shadow-sm ring-8 ring-white">
                                👤
                            </div>

                            <h2 class="mt-5 text-xl font-extrabold text-slate-900">
                                {{ auth()->user()->name }}
                            </h2>

                            <p class="mt-1 break-all text-sm font-medium text-slate-500">
                                {{ auth()->user()->email }}
                            </p>

                            <span class="mt-4 inline-flex items-center gap-2 rounded-full bg-emerald-50 px-4 py-2 text-xs font-extrabold text-emerald-700">
                                <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                                Active account
                            </span>

                        </div>

                    </div>

                    <div class="border-t border-slate-100 p-5 sm:p-6">

                        <div class="space-y-4">

                            <div class="flex items-center gap-3">
                                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-orange-50">
                                    📍
                                </div>

                                <div class="min-w-0">
                                    <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">
                                        Delivery address
                                    </p>

                                    <p class="mt-0.5 truncate text-sm font-bold text-slate-700">
                                        {{ auth()->user()->city ?: 'Not added yet' }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-center gap-3">
                                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-50">
                                    🍽️
                                </div>

                                <div>
                                    <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">
                                        Account type
                                    </p>

                                    <p class="mt-0.5 text-sm font-bold capitalize text-slate-700">
                                        {{ str_replace('_', ' ', auth()->user()->role) }}
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>

                </aside>


                {{-- Main Profile Forms --}}
                <div class="space-y-6">

                    {{-- Personal Information --}}
                    <section class="overflow-hidden rounded-[2rem] bg-white shadow-sm ring-1 ring-slate-100">

                        <div class="border-b border-slate-100 px-6 py-5 sm:px-8">

                            <div class="flex items-center gap-3">

                                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-orange-50 text-xl">
                                    ✏️
                                </div>

                                <div>
                                    <h2 class="text-lg font-extrabold text-slate-900">
                                        Personal information
                                    </h2>

                                    <p class="mt-0.5 text-sm text-slate-500">
                                        Update your name, email and delivery details.
                                    </p>
                                </div>

                            </div>

                        </div>

                        <div class="p-6 sm:p-8">
                            @include('profile.partials.update-profile-information-form')
                        </div>

                    </section>


                    {{-- Password --}}
                    <section class="overflow-hidden rounded-[2rem] bg-white shadow-sm ring-1 ring-slate-100">

                        <div class="border-b border-slate-100 px-6 py-5 sm:px-8">

                            <div class="flex items-center gap-3">

                                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-50 text-xl">
                                    🔐
                                </div>

                                <div>
                                    <h2 class="text-lg font-extrabold text-slate-900">
                                        Password & security
                                    </h2>

                                    <p class="mt-0.5 text-sm text-slate-500">
                                        Keep your SurplusLink account secure.
                                    </p>
                                </div>

                            </div>

                        </div>

                        <div class="p-6 sm:p-8">
                            @include('profile.partials.update-password-form')
                        </div>

                    </section>


                    {{-- Delete Account --}}
                    <section class="overflow-hidden rounded-[2rem] bg-white shadow-sm ring-1 ring-red-100">

                        <div class="border-b border-red-50 bg-red-50/40 px-6 py-5 sm:px-8">

                            <div class="flex items-center gap-3">

                                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-red-100 text-xl">
                                    ⚠️
                                </div>

                                <div>
                                    <h2 class="text-lg font-extrabold text-slate-900">
                                        Delete account
                                    </h2>

                                    <p class="mt-0.5 text-sm text-slate-500">
                                        Permanently remove your account and associated data.
                                    </p>
                                </div>

                            </div>

                        </div>

                        <div class="p-6 sm:p-8">
                            @include('profile.partials.delete-user-form')
                        </div>

                    </section>

                </div>

            </div>


            {{-- Trust / Impact Message --}}
            <section class="mt-8 overflow-hidden rounded-[2rem] bg-emerald-900 px-6 py-7 text-white shadow-xl shadow-emerald-100 sm:px-8">

                <div class="flex flex-col gap-5 sm:flex-row sm:items-center sm:justify-between">

                    <div>
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-emerald-300">
                            Your SurplusLink account
                        </p>

                        <h3 class="mt-2 text-xl font-extrabold sm:text-2xl">
                            One profile. A more connected food community. 🌱
                        </h3>

                        <p class="mt-2 max-w-2xl text-sm leading-6 text-emerald-100">
                            Keep your delivery details up to date so food requests can be
                            processed smoothly and reach the right place.
                        </p>
                    </div>

                    <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-white/10 text-2xl ring-1 ring-white/10">
                        🧡
                    </div>

                </div>

            </section>

        </main>

    </div>
</x-app-layout>