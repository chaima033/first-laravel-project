<x-guest-layout>
    <div class="mb-6 space-y-2">
        <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#e75b2b]">Créer un compte</p>
        <h2 class="text-3xl font-semibold text-gray-900">Rejoignez l’espace privé</h2>
        <p class="text-sm leading-6 text-gray-600">Créez votre compte pour gérer vos tâches et retrouver vos pages en un seul endroit.</p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-5">
        @csrf

        <!-- Name -->
        <div class="space-y-2">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block w-full rounded-2xl border-gray-200 px-4 py-3 shadow-sm focus:border-[#e75b2b] focus:ring-[#e75b2b]" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="space-y-2">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full rounded-2xl border-gray-200 px-4 py-3 shadow-sm focus:border-[#e75b2b] focus:ring-[#e75b2b]" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="space-y-2">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block w-full rounded-2xl border-gray-200 px-4 py-3 shadow-sm focus:border-[#e75b2b] focus:ring-[#e75b2b]"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="space-y-2">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block w-full rounded-2xl border-gray-200 px-4 py-3 shadow-sm focus:border-[#e75b2b] focus:ring-[#e75b2b]"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between gap-4 pt-2 flex-wrap">
            <a class="text-sm font-medium text-[#bf3f17] hover:text-[#7a2f12]" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="w-full sm:w-auto justify-center rounded-2xl bg-[#e75b2b] px-4 py-3 text-sm font-semibold uppercase tracking-[0.25em] shadow-[0_14px_30px_rgba(231,91,43,0.25)] hover:bg-[#bf3f17] focus:ring-[#e75b2b]">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
