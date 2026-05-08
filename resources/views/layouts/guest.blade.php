<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen bg-[radial-gradient(circle_at_top_left,_#fff7ed_0%,_#f6eee4_36%,_#ede4d8_100%)]">
            <div class="min-h-screen grid lg:grid-cols-[1.1fr_0.9fr]">
                <aside class="hidden lg:flex relative overflow-hidden bg-[#1f1a17] text-white px-12 py-14">
                    <div class="absolute inset-0 opacity-40" style="background: radial-gradient(circle at 20% 20%, rgba(231, 91, 43, 0.35) 0, transparent 28%), radial-gradient(circle at 80% 30%, rgba(255, 232, 204, 0.2) 0, transparent 22%), linear-gradient(145deg, rgba(255,255,255,0.06), rgba(255,255,255,0));"></div>
                    <div class="relative z-10 max-w-lg flex flex-col justify-between">
                        <div class="flex items-center gap-3">
                            <x-application-logo class="h-12 w-12 fill-current text-white/90" />
                            <div>
                                <p class="text-xs uppercase tracking-[0.35em] text-white/60">Mon Site Laravel</p>
                                <h1 class="text-2xl font-semibold">Espace privé</h1>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div>
                                <p class="text-sm uppercase tracking-[0.3em] text-[#f3c9b5] mb-3">Connexion simplifiée</p>
                                <h2 class="text-4xl font-semibold leading-tight">Une interface nette pour revenir à vos tâches en quelques secondes.</h2>
                            </div>

                            <div class="grid gap-4 text-sm text-white/78">
                                <div class="rounded-2xl border border-white/10 bg-white/5 p-4 backdrop-blur">
                                    Suivez vos tâches, consultez le blog et gérez votre profil depuis un seul espace.
                                </div>
                                <div class="rounded-2xl border border-white/10 bg-white/5 p-4 backdrop-blur">
                                    Un design plus lisible, plus contrasté et pensé pour la lecture sur mobile.
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>

                <main class="flex items-center justify-center px-6 py-10 sm:px-8 lg:px-12">
                    <div class="w-full max-w-md">
                        <div class="mb-6 flex items-center gap-3 lg:hidden">
                            <x-application-logo class="h-11 w-11 fill-current text-gray-700" />
                            <div>
                                <p class="text-xs uppercase tracking-[0.35em] text-gray-500">Mon Site Laravel</p>
                                <p class="text-sm text-gray-600">Espace privé</p>
                            </div>
                        </div>

                        <div class="rounded-[1.75rem] bg-white/95 p-6 sm:p-8 shadow-[0_24px_80px_rgba(31,26,23,0.16)] ring-1 ring-black/5 backdrop-blur">
                            {{ $slot }}
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
