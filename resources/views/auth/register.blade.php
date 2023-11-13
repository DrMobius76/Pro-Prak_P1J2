<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Naam')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" placeholder="Naam" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="email@gmail.com" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Wachtwoord')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Password1234" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Bevestig Wachtwoord')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" placeholder="Password1234" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- GENDER
        <div>
            <x-input-label for="gender" :value="__('Gender')" />
            <label for="genderMale">Male</label>
            <x-text-input id="genderMale" class=" mt-1" type="radio" name="gender" :value="old('male')" required autofocus autocomplete="gender" />
            <label for="genderFemale">Female</label>
            <x-text-input id="genderFemale" class=" mt-1" type="radio" name="gender" :value="old('female')" required autofocus autocomplete="gender" />
            <label for="genderOther">Gremlin</label>
            <x-text-input id="genderOther" class=" mt-1" type="radio" name="gender" :value="old('gremlin')" required autofocus autocomplete="gender" />
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div> -->

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

        <!-- IsAdmin -->
        <div>
            <input type="hidden" name="isAdmin" id="isAdmin" value=0>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>