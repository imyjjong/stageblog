<x-guest-layout>
    <form class="auth" method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="auth__wrapper">
            <x-input-label class="auth__label" for="name" :value="__('Name')" />
            <x-text-input id="name" class="auth__input" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="auth__error" />
        </div>

        <div class="auth__wrapper">
            <x-input-label class="auth__label" for="image" :value="__('image')" />
            <x-text-input id="image" class="auth__input" type="text" name="image" :value="old('image')" required autofocus autocomplete="image" />
            <x-input-error :messages="$errors->get('image')" class="auth__error" />
        </div>

        <!-- Email Address -->
        <div class="auth__wrapper">
            <x-input-label class="auth__label" for="email" :value="__('Email')" />
            <x-text-input id="email" class="auth__input" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="auth__error" />
        </div>

        <!-- Password -->
        <div class="auth__wrapper">
            <x-input-label class="auth__label" for="password" :value="__('Password')" />

            <x-text-input id="password" class="auth__input"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="auth__error" />
        </div>

        <!-- Confirm Password -->
        <div class="auth__wrapper">
            <x-input-label class="auth__label" for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="auth__input"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="auth__error" />
        </div>

        <div class="auth__wrapper--submit">
            <a class="auth__wrapper--login" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="auth__button">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
