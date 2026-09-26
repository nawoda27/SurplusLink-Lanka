<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information, email address, and delivery address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        {{-- Name --}}
        <div>
            <x-input-label for="name" :value="__('Name')" />

            <x-text-input
                id="name"
                name="name"
                type="text"
                class="mt-1 block w-full"
                :value="old('name', $user->name)"
                required
                autofocus
                autocomplete="name"
            />

            <x-input-error
                class="mt-2"
                :messages="$errors->get('name')"
            />
        </div>

        {{-- Email --}}
        <div>
            <x-input-label for="email" :value="__('Email')" />

            <x-text-input
                id="email"
                name="email"
                type="email"
                class="mt-1 block w-full"
                :value="old('email', $user->email)"
                required
                autocomplete="username"
            />

            <x-input-error
                class="mt-2"
                :messages="$errors->get('email')"
            />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button
                            form="send-verification"
                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        >
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        {{-- Delivery Address --}}
        <div class="pt-4 border-t border-gray-200">
            <h3 class="text-base font-semibold text-gray-900">
                {{ __('Delivery Address') }}
            </h3>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('This address will be used when a delivery task is created for your approved food request.') }}
            </p>
        </div>

        {{-- Address --}}
        <div>
            <x-input-label for="address" :value="__('Address')" />

            <textarea
                id="address"
                name="address"
                rows="3"
                class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                autocomplete="street-address"
                placeholder="Enter your delivery address"
            >{{ old('address', $user->address) }}</textarea>

            <x-input-error
                class="mt-2"
                :messages="$errors->get('address')"
            />
        </div>

        {{-- City --}}
        <div>
            <x-input-label for="city" :value="__('City')" />

            <x-text-input
                id="city"
                name="city"
                type="text"
                class="mt-1 block w-full"
                :value="old('city', $user->city)"
                autocomplete="address-level2"
                placeholder="Enter your city"
            />

            <x-input-error
                class="mt-2"
                :messages="$errors->get('city')"
            />
        </div>

        {{-- Postal Code --}}
        <div>
            <x-input-label for="postal_code" :value="__('Postal Code')" />

            <x-text-input
                id="postal_code"
                name="postal_code"
                type="text"
                class="mt-1 block w-full"
                :value="old('postal_code', $user->postal_code)"
                autocomplete="postal-code"
                placeholder="Enter your postal code"
            />

            <x-input-error
                class="mt-2"
                :messages="$errors->get('postal_code')"
            />
        </div>

        {{-- Save --}}
        <div class="flex items-center gap-4">
            <x-primary-button>
                {{ __('Save') }}
            </x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>
    </form>
</section>