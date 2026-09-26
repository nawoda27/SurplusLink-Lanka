<x-app-layout>

    <x-slot name="header">
        <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <div class="flex items-center gap-3">
                    <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-[#fff0e8] text-xl shadow-sm">
                        👥
                    </div>

                    <div>
                        <h2 class="text-xl font-bold tracking-tight text-[#30241f] sm:text-2xl">
                            User Management
                        </h2>

                        <p class="mt-0.5 text-sm text-[#8d7971]">
                            Manage registered SurplusLink Lanka users and account access.
                        </p>
                    </div>
                </div>
            </div>

            <div class="inline-flex w-fit items-center gap-2 rounded-full border border-emerald-100 bg-emerald-50 px-4 py-2 text-xs font-bold text-emerald-700">
                <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                {{ $users->total() }} Registered Users
            </div>
        </div>
    </x-slot>

    <div class="min-h-screen bg-[#fffaf5]">

        {{-- Decorative Header --}}
        <div class="relative overflow-hidden border-b border-[#f4e6dc] bg-gradient-to-br from-[#fff7f0] via-[#fffaf5] to-[#fff2ea]">

            <div class="pointer-events-none absolute -right-20 -top-24 h-64 w-64 rounded-full bg-[#ffd9c7]/45 blur-3xl"></div>
            <div class="pointer-events-none absolute -bottom-24 left-10 h-52 w-52 rounded-full bg-[#dff3e8]/50 blur-3xl"></div>

            <div class="relative mx-auto max-w-7xl px-4 py-9 sm:px-6 lg:px-8">

                <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">

                    <div class="max-w-2xl">

                        <span class="inline-flex items-center rounded-full border border-[#ffd7c5] bg-white/80 px-3 py-1.5 text-xs font-bold uppercase tracking-[0.17em] text-[#e96f45] shadow-sm">
                            Administration
                        </span>

                        <h1 class="mt-4 text-3xl font-extrabold tracking-tight text-[#30241f] sm:text-4xl">
                            Platform
                            <span class="text-[#e96f45]">Users</span>
                        </h1>

                        <p class="mt-3 max-w-xl text-sm leading-6 text-[#7d6b64] sm:text-base">
                            Review members, organisations, roles and account access
                            across the SurplusLink Lanka network.
                        </p>

                    </div>

                    <div class="flex items-center gap-3 rounded-3xl border border-white bg-white/90 px-5 py-4 shadow-[0_12px_35px_rgba(80,50,35,0.07)]">

                        <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-[#fff0e8] text-xl">
                            🛡️
                        </div>

                        <div>
                            <p class="text-xs font-bold uppercase tracking-wider text-[#a18d85]">
                                Access Control
                            </p>

                            <p class="mt-0.5 text-sm font-bold text-[#3a2c27]">
                                Manage safely
                            </p>
                        </div>

                    </div>

                </div>

            </div>
        </div>

        <div class="mx-auto max-w-7xl px-4 py-9 sm:px-6 lg:px-8">

            {{-- Success Message --}}
            @if (session('success'))

                <div
                    class="mb-7 rounded-2xl border border-emerald-100 bg-emerald-50 p-4 shadow-sm"
                    role="alert"
                >
                    <div class="flex items-start gap-3">

                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-white text-emerald-600 shadow-sm">
                            ✓
                        </div>

                        <div>
                            <p class="text-sm font-bold text-emerald-800">
                                Action completed
                            </p>

                            <p class="mt-0.5 text-sm text-emerald-700">
                                {{ session('success') }}
                            </p>
                        </div>

                    </div>
                </div>

            @endif

            {{-- Error Message --}}
            @if ($errors->has('user'))

                <div
                    class="mb-7 rounded-2xl border border-rose-100 bg-rose-50 p-4 shadow-sm"
                    role="alert"
                >
                    <div class="flex items-start gap-3">

                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-white text-rose-600 shadow-sm">
                            !
                        </div>

                        <div>
                            <p class="text-sm font-bold text-rose-800">
                                Action could not be completed
                            </p>

                            <p class="mt-0.5 text-sm text-rose-700">
                                {{ $errors->first('user') }}
                            </p>
                        </div>

                    </div>
                </div>

            @endif

            {{-- Search & Filters --}}
            <section class="mb-8">

                <div class="mb-4">
                    <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#e96f45]">
                        Directory
                    </p>

                    <h2 class="mt-1 text-2xl font-bold tracking-tight text-[#332722]">
                        Find Platform Users
                    </h2>

                    <p class="mt-1 text-sm text-[#8d7971]">
                        Search by name or email and narrow the results by role or status.
                    </p>
                </div>

                <div class="rounded-[1.8rem] border border-[#f1e4db] bg-white p-5 shadow-[0_10px_30px_rgba(80,50,35,0.055)] sm:p-6">

                    <form
                        method="GET"
                        action="{{ route('admin.users') }}"
                        class="grid grid-cols-1 gap-5 lg:grid-cols-12"
                    >

                        {{-- Search --}}
                        <div class="lg:col-span-5">

                            <label
                                for="search"
                                class="mb-2 block text-sm font-bold text-[#4a3932]"
                            >
                                Search users
                            </label>

                            <div class="relative">

                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-[#b19c93]">
                                    <svg
                                        class="h-5 w-5"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M21 21l-4.35-4.35m2.35-5.65a8 8 0 11-16 0 8 8 0 0116 0z"
                                        />
                                    </svg>
                                </div>

                                <input
                                    id="search"
                                    type="text"
                                    name="search"
                                    value="{{ $search ?? '' }}"
                                    placeholder="Search by name or email..."
                                    class="block w-full rounded-2xl border-[#eadcd3] bg-[#fffaf7] py-3 pl-11 pr-4 text-sm text-[#3c2d27] shadow-sm transition placeholder:text-[#b19d94] focus:border-[#e96f45] focus:ring-[#e96f45]"
                                >

                            </div>

                        </div>

                        {{-- Role --}}
                        <div class="lg:col-span-3">

                            <label
                                for="role"
                                class="mb-2 block text-sm font-bold text-[#4a3932]"
                            >
                                Role
                            </label>

                            <select
                                id="role"
                                name="role"
                                class="block w-full rounded-2xl border-[#eadcd3] bg-[#fffaf7] py-3 text-sm text-[#3c2d27] shadow-sm transition focus:border-[#e96f45] focus:ring-[#e96f45]"
                            >
                                <option value="">All roles</option>

                                <option
                                    value="customer"
                                    @selected(($role ?? '') === 'customer')
                                >
                                    Customer
                                </option>

                                <option
                                    value="restaurant"
                                    @selected(($role ?? '') === 'restaurant')
                                >
                                    Restaurant
                                </option>

                                <option
                                    value="ngo"
                                    @selected(($role ?? '') === 'ngo')
                                >
                                    NGO
                                </option>

                                <option
                                    value="delivery_partner"
                                    @selected(($role ?? '') === 'delivery_partner')
                                >
                                    Delivery Partner
                                </option>

                                <option
                                    value="admin"
                                    @selected(($role ?? '') === 'admin')
                                >
                                    Admin
                                </option>
                            </select>

                        </div>

                        {{-- Status --}}
                        <div class="lg:col-span-2">

                            <label
                                for="status"
                                class="mb-2 block text-sm font-bold text-[#4a3932]"
                            >
                                Status
                            </label>

                            <select
                                id="status"
                                name="status"
                                class="block w-full rounded-2xl border-[#eadcd3] bg-[#fffaf7] py-3 text-sm text-[#3c2d27] shadow-sm transition focus:border-[#e96f45] focus:ring-[#e96f45]"
                            >
                                <option value="">All statuses</option>

                                <option
                                    value="active"
                                    @selected(($status ?? '') === 'active')
                                >
                                    Active
                                </option>

                                <option
                                    value="inactive"
                                    @selected(($status ?? '') === 'inactive')
                                >
                                    Inactive
                                </option>
                            </select>

                        </div>

                        {{-- Actions --}}
                        <div class="flex items-end gap-3 lg:col-span-2">

                            <button
                                type="submit"
                                class="inline-flex min-h-[46px] flex-1 items-center justify-center gap-2 rounded-2xl bg-[#e96f45] px-4 py-3 text-sm font-bold text-white shadow-[0_8px_20px_rgba(233,111,69,0.20)] transition duration-300 hover:-translate-y-0.5 hover:bg-[#df6239] focus:outline-none focus:ring-2 focus:ring-[#e96f45] focus:ring-offset-2"
                            >
                                <svg
                                    class="h-4 w-4"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M21 21l-4.35-4.35m2.35-5.65a8 8 0 11-16 0 8 8 0 0116 0z"
                                    />
                                </svg>

                                Search
                            </button>

                            <a
                                href="{{ route('admin.users') }}"
                                class="inline-flex min-h-[46px] items-center justify-center rounded-2xl border border-[#eadcd3] bg-white px-4 py-3 text-sm font-bold text-[#65534b] shadow-sm transition duration-300 hover:-translate-y-0.5 hover:bg-[#fff7f2] focus:outline-none focus:ring-2 focus:ring-[#e96f45] focus:ring-offset-2"
                            >
                                Clear
                            </a>

                        </div>

                    </form>

                </div>

            </section>

            {{-- Directory Summary --}}
            <div class="mb-5 grid grid-cols-1 gap-4 sm:grid-cols-3">

                <div class="rounded-[1.4rem] border border-[#f1e4db] bg-white p-5 shadow-[0_8px_25px_rgba(80,50,35,0.045)]">
                    <div class="flex items-center gap-3">
                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#fff0e8]">
                            👥
                        </div>

                        <div>
                            <p class="text-xs font-bold uppercase tracking-wider text-[#a18d85]">
                                Total
                            </p>

                            <p class="text-2xl font-extrabold text-[#30241f]">
                                {{ $users->total() }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="rounded-[1.4rem] border border-[#dcefe4] bg-[#f5fcf7] p-5 shadow-[0_8px_25px_rgba(80,50,35,0.035)]">
                    <div class="flex items-center gap-3">
                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-white text-emerald-600">
                            ✓
                        </div>

                        <div>
                            <p class="text-xs font-bold uppercase tracking-wider text-[#7b9585]">
                                Current Page
                            </p>

                            <p class="text-2xl font-extrabold text-[#315c46]">
                                {{ $users->count() }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="rounded-[1.4rem] border border-[#f1e4db] bg-white p-5 shadow-[0_8px_25px_rgba(80,50,35,0.045)]">
                    <div class="flex items-center gap-3">
                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#fff5df]">
                            🔎
                        </div>

                        <div>
                            <p class="text-xs font-bold uppercase tracking-wider text-[#a18d85]">
                                Results
                            </p>

                            <p class="text-sm font-bold text-[#4a3932]">
                                {{ $users->firstItem() ?? 0 }}
                                –
                                {{ $users->lastItem() ?? 0 }}
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Users Directory --}}
            <section>

                <div class="mb-4 flex flex-col gap-2 sm:flex-row sm:items-end sm:justify-between">

                    <div>
                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#e96f45]">
                            Directory
                        </p>

                        <h2 class="mt-1 text-2xl font-bold tracking-tight text-[#332722]">
                            Registered Users
                        </h2>
                    </div>

                    <p class="text-sm text-[#8d7971]">
                        Showing
                        <span class="font-bold text-[#55443d]">
                            {{ $users->count() }}
                        </span>
                        of
                        <span class="font-bold text-[#55443d]">
                            {{ $users->total() }}
                        </span>
                        users
                    </p>

                </div>

                <div class="overflow-hidden rounded-[1.8rem] border border-[#f1e4db] bg-white shadow-[0_12px_35px_rgba(80,50,35,0.06)]">

                    {{-- Desktop / Tablet Table --}}
                    <div class="overflow-x-auto">

                        <table class="min-w-full">

                            <thead class="border-b border-[#f1e4db] bg-[#fffaf7]">

                                <tr>

                                    <th
                                        scope="col"
                                        class="px-6 py-4 text-left text-[11px] font-extrabold uppercase tracking-[0.14em] text-[#9b877f]"
                                    >
                                        User
                                    </th>

                                    <th
                                        scope="col"
                                        class="px-6 py-4 text-left text-[11px] font-extrabold uppercase tracking-[0.14em] text-[#9b877f]"
                                    >
                                        Role
                                    </th>

                                    <th
                                        scope="col"
                                        class="px-6 py-4 text-left text-[11px] font-extrabold uppercase tracking-[0.14em] text-[#9b877f]"
                                    >
                                        Status
                                    </th>

                                    <th
                                        scope="col"
                                        class="px-6 py-4 text-left text-[11px] font-extrabold uppercase tracking-[0.14em] text-[#9b877f]"
                                    >
                                        Registered
                                    </th>

                                    <th
                                        scope="col"
                                        class="px-6 py-4 text-right text-[11px] font-extrabold uppercase tracking-[0.14em] text-[#9b877f]"
                                    >
                                        Access
                                    </th>

                                </tr>

                            </thead>

                            <tbody class="divide-y divide-[#f4e8e0]">

                                @forelse ($users as $user)

                                    @php
                                        $roleLabel = ucwords(
                                            str_replace('_', ' ', $user->role)
                                        );

                                        $roleStyles = match ($user->role) {
                                            'customer' => [
                                                'bg' => 'bg-[#fff0e8]',
                                                'text' => 'text-[#d9633b]',
                                                'icon' => '🧑',
                                            ],
                                            'restaurant' => [
                                                'bg' => 'bg-[#fff5df]',
                                                'text' => 'text-[#b87920]',
                                                'icon' => '🍽️',
                                            ],
                                            'ngo' => [
                                                'bg' => 'bg-[#eaf8f0]',
                                                'text' => 'text-emerald-700',
                                                'icon' => '🤝',
                                            ],
                                            'delivery_partner' => [
                                                'bg' => 'bg-[#f0f6ff]',
                                                'text' => 'text-blue-600',
                                                'icon' => '🛵',
                                            ],
                                            'admin' => [
                                                'bg' => 'bg-[#f3efff]',
                                                'text' => 'text-violet-700',
                                                'icon' => '🛡️',
                                            ],
                                            default => [
                                                'bg' => 'bg-gray-100',
                                                'text' => 'text-gray-700',
                                                'icon' => '👤',
                                            ],
                                        };
                                    @endphp

                                    <tr class="group transition duration-200 hover:bg-[#fffaf7]">

                                        {{-- User --}}
                                        <td class="px-6 py-5">

                                            <div class="flex min-w-[240px] items-center gap-3">

                                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-[#fff0e8] text-sm font-extrabold text-[#e96f45] shadow-sm transition duration-200 group-hover:scale-105">
                                                    {{ strtoupper(substr($user->name, 0, 1)) }}
                                                </div>

                                                <div class="min-w-0">

                                                    <p class="truncate font-bold text-[#332722]">
                                                        {{ $user->name }}
                                                    </p>

                                                    <p class="truncate text-sm text-[#907c74]">
                                                        {{ $user->email }}
                                                    </p>

                                                </div>

                                            </div>

                                        </td>

                                        {{-- Role --}}
                                        <td class="whitespace-nowrap px-6 py-5">

                                            <span class="inline-flex items-center gap-2 rounded-full {{ $roleStyles['bg'] }} px-3 py-1.5 text-xs font-bold {{ $roleStyles['text'] }}">
                                                <span>{{ $roleStyles['icon'] }}</span>
                                                {{ $roleLabel }}
                                            </span>

                                        </td>

                                        {{-- Status --}}
                                        <td class="whitespace-nowrap px-6 py-5">

                                            @if ($user->status === 'active')

                                                <span class="inline-flex items-center gap-2 rounded-full bg-emerald-50 px-3 py-1.5 text-xs font-bold text-emerald-700">
                                                    <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                                                    Active
                                                </span>

                                            @else

                                                <span class="inline-flex items-center gap-2 rounded-full bg-gray-100 px-3 py-1.5 text-xs font-bold text-gray-600">
                                                    <span class="h-2 w-2 rounded-full bg-gray-400"></span>
                                                    {{ ucfirst($user->status) }}
                                                </span>

                                            @endif

                                        </td>

                                        {{-- Registered --}}
                                        <td class="whitespace-nowrap px-6 py-5">

                                            <div>
                                                <p class="text-sm font-semibold text-[#55443d]">
                                                    {{ $user->created_at?->format('d M Y') }}
                                                </p>

                                                <p class="mt-0.5 text-xs text-[#aa968d]">
                                                    {{ $user->created_at?->format('h:i A') }}
                                                </p>
                                            </div>

                                        </td>

                                        {{-- Actions --}}
                                        <td class="whitespace-nowrap px-6 py-5 text-right">

                                            @if ($user->id === auth()->id())

                                                <span class="inline-flex items-center gap-2 rounded-xl border border-[#eadfd8] bg-[#faf7f4] px-3 py-2 text-xs font-bold text-[#a18d85]">
                                                    <span>🔐</span>
                                                    Current account
                                                </span>

                                            @elseif ($user->status === 'active')

                                                <form
                                                    method="POST"
                                                    action="{{ route('admin.users.deactivate', $user->id) }}"
                                                    class="inline"
                                                    onsubmit="return confirm('Are you sure you want to deactivate this user account?');"
                                                >

                                                    @csrf
                                                    @method('PATCH')

                                                    <button
                                                        type="submit"
                                                        class="inline-flex items-center gap-2 rounded-xl border border-rose-100 bg-rose-50 px-3.5 py-2 text-xs font-bold text-rose-700 transition duration-200 hover:-translate-y-0.5 hover:bg-rose-100 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:ring-offset-2"
                                                    >
                                                        <span>⏸</span>
                                                        Deactivate
                                                    </button>

                                                </form>

                                            @else

                                                <form
                                                    method="POST"
                                                    action="{{ route('admin.users.activate', $user->id) }}"
                                                    class="inline"
                                                    onsubmit="return confirm('Are you sure you want to activate this user account?');"
                                                >

                                                    @csrf
                                                    @method('PATCH')

                                                    <button
                                                        type="submit"
                                                        class="inline-flex items-center gap-2 rounded-xl border border-emerald-100 bg-emerald-50 px-3.5 py-2 text-xs font-bold text-emerald-700 transition duration-200 hover:-translate-y-0.5 hover:bg-emerald-100 focus:outline-none focus:ring-2 focus:ring-emerald-400 focus:ring-offset-2"
                                                    >
                                                        <span>✓</span>
                                                        Activate
                                                    </button>

                                                </form>

                                            @endif

                                        </td>

                                    </tr>

                                @empty

                                    <tr>

                                        <td
                                            colspan="5"
                                            class="px-6 py-20 text-center"
                                        >

                                            <div class="mx-auto max-w-sm">

                                                <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-3xl bg-[#fff0e8] text-2xl">
                                                    👥
                                                </div>

                                                <h3 class="mt-5 text-lg font-bold text-[#43332d]">
                                                    No users found
                                                </h3>

                                                <p class="mt-2 text-sm leading-6 text-[#907c74]">
                                                    No accounts match your current search
                                                    or filter criteria.
                                                </p>

                                                <a
                                                    href="{{ route('admin.users') }}"
                                                    class="mt-5 inline-flex items-center justify-center rounded-2xl bg-[#e96f45] px-5 py-3 text-sm font-bold text-white shadow-[0_8px_20px_rgba(233,111,69,0.18)] transition hover:-translate-y-0.5 hover:bg-[#df6239]"
                                                >
                                                    Clear Filters
                                                </a>

                                            </div>

                                        </td>

                                    </tr>

                                @endforelse

                            </tbody>

                        </table>

                    </div>

                    {{-- Pagination --}}
                    @if ($users->hasPages())

                        <div class="border-t border-[#f1e4db] bg-[#fffaf7] px-5 py-4 sm:px-6">
                            {{ $users->links() }}
                        </div>

                    @endif

                </div>

            </section>

            {{-- Security / Impact Strip --}}
            <section class="mt-10">

                <div class="flex flex-col gap-5 rounded-[1.7rem] border border-[#dcefe4] bg-[#f2fbf5] px-6 py-6 sm:flex-row sm:items-center sm:justify-between">

                    <div class="flex items-start gap-4">

                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-white text-xl shadow-sm">
                            🛡️
                        </div>

                        <div>
                            <p class="font-bold text-[#315c46]">
                                Responsible platform management
                            </p>

                            <p class="mt-1 max-w-2xl text-sm leading-5 text-[#668273]">
                                Account access is managed carefully to keep the
                                SurplusLink community trusted and secure.
                            </p>
                        </div>

                    </div>

                    <div class="flex shrink-0 items-center gap-2 text-sm font-bold text-emerald-700">
                        <span class="h-2.5 w-2.5 rounded-full bg-emerald-500"></span>
                        Secure access control
                    </div>

                </div>

            </section>

        </div>
    </div>

</x-app-layout>
