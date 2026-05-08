<x-guest-layout>
    <div class="mb-6 space-y-2">
        <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#e75b2b]">Connexion</p>
        <h2 class="text-3xl font-semibold text-gray-900">Content de vous revoir</h2>
        <p class="text-sm leading-6 text-gray-600">Connectez-vous pour accéder à votre tableau de bord, vos tâches et vos pages privées.</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4 rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-emerald-700" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf

        <!-- Email Address -->
        <div class="space-y-2">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full rounded-2xl border-gray-200 px-4 py-3 shadow-sm focus:border-[#e75b2b] focus:ring-[#e75b2b]" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="space-y-2">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block w-full rounded-2xl border-gray-200 px-4 py-3 shadow-sm focus:border-[#e75b2b] focus:ring-[#e75b2b]"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between gap-4 flex-wrap">
            <!-- Remember Me -->
            <label for="remember_me" class="inline-flex items-center gap-2 text-sm text-gray-600">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-[#e75b2b] shadow-sm focus:ring-[#e75b2b]" name="remember">
                <span>{{ __('Remember me') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm font-medium text-[#bf3f17] hover:text-[#7a2f12]" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

        <div class="pt-2">
            <x-primary-button class="w-full justify-center rounded-2xl bg-[#e75b2b] px-4 py-3 text-sm font-semibold uppercase tracking-[0.25em] shadow-[0_14px_30px_rgba(231,91,43,0.25)] hover:bg-[#bf3f17] focus:ring-[#e75b2b]">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
