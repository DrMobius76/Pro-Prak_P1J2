<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div>
                <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                    {{ __('Your email address is unverified.') }}

                    <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if (session('status') === 'verification-link-sent')
                <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                    {{ __('A new verification link has been sent to your email address.') }}
                </p>
                @endif
            </div>
            @endif
        </div>

        <!-- PHONE -->
        <div>
            <x-input-label for="phone" :value="__('Telefoonnummer')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="number" name="phone" :value="old('phone')" placeholder="+31 6 12345678 / 06 12345678" required autofocus autocomplete="phone" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- BIRTHDATE -->
        <div>
            <x-input-label for="birthdate" :value="__('Geboortedatum')" />
            <x-text-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')" required autofocus autocomplete="birthdate" />
            <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
        </div>

        <!-- RESIDENCE -->
        <div>
            <x-input-label for="residence" :value="__('Woonplaats')" />
            <x-text-input id="residence" class="block mt-1 w-full" type="text" name="residence" :value="old('residence')" placeholder="Plaatsnaam" required autofocus autocomplete="residence" />
            <x-input-error :messages="$errors->get('residence')" class="mt-2" />
        </div>

        <!-- STREET -->
        <div>
            <x-input-label for="street" :value="__('Straatnaam')" />
            <x-text-input id="street" class="block mt-1 w-full" type="text" name="street" :value="old('street')" placeholder="Straatnaam" required autofocus autocomplete="street" />
            <x-input-error :messages="$errors->get('street')" class="mt-2" />
        </div>

        <!-- HOUSENUMBER -->
        <div>
            <x-input-label for="housenumber" :value="__('Huisnummer')" />
            <x-text-input id="housenumber" class="block mt-1 w-full" type="text" name="housenumber" :value="old('housenumber')" placeholder="16A" required autofocus autocomplete="housenumber" />
            <x-input-error :messages="$errors->get('housenumber')" class="mt-2" />
        </div>

        <!-- ZIPCODE -->
        <div>
            <x-input-label for="zipcode" :value="__('Postcode')" />
            <x-text-input id="zipcode" class="block mt-1 w-full" type="text" name="zipcode" :value="old('zipcode')" placeholder="1234AB" required autofocus autocomplete="zipcode" />
            <x-input-error :messages="$errors->get('zipcode')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>