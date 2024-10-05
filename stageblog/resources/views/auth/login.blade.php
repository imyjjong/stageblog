<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form class="auth" method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="auth__wrapper">
            <x-input-label class="auth__label" for="email" :value="__('Email')" />
            <x-text-input id="email" class="auth__input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="auth__error" />
        </div>

        <!-- Password -->
        <div class="auth__wrapper">
            <x-input-label class="auth__label" for="password" :value="__('Password')" />

            <x-text-input id="password" class="auth__input"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="auth__error" />
        </div>

        <!-- Remember Me -->
        <div class="auth__wrapper">
            <label for="remember_me" class="auth__label">
                <input id="remember_me" type="checkbox" class="auth__checkbox" name="remember">
                <span class="auth__checkbox--text">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="auth__wrapper">
            @if (Route::has('password.request'))
                <a class="auth__forgot" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="auth__button">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
