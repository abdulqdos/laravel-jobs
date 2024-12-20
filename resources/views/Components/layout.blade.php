<!doctype html>
<html lang="en" class="h-full">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> Example</title>
        @vite(['resources/js/app.js'])
    </head>
    <body class="h-full">
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex shrink-0 items-center">
                        <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                    </div>
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <x-nav-link href="/" :active="request()->is('/')"> Home </x-nav-link>
                            <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                            <x-nav-link href="/contact" :active="request()->is('contact')">Contact Us</x-nav-link>
                            <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <div class="flex flex-row gap-4">
                        @guest
                            <x-nav-link href="/login" :active="request()->is('login')">sign in</x-nav-link>
                            <x-nav-link href="/register" :active="request()->is('register')">sign up</x-nav-link>
                        @endguest
                        @auth
                            <form method="post" action="/logout">
                                @csrf
                                <x-form-button class="bg-gray-800 hover:bg-gray-900"> logout </x-form-button>
                            </form>
                        @endauth
                    </div>
                    <!-- Profile dropdown -->
                    <div class="relative ml-3">
                        <div>
{{--                            <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">--}}
{{--                                <span class="absolute -inset-1.5"></span>--}}
{{--                                <span class="sr-only">Open user menu</span>--}}
{{--                                <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">--}}
{{--                            </button>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <x-nav-link href="/" class="block rounded-md px-3 py-2 text-base font-medium {{ request()->is('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}" aria-current="page"> Home </x-nav-link>
                <x-nav-link href="/about" class="block rounded-md px-3 py-2 text-base font-medium {{ request()->is('/about') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">About</x-nav-link>
                <x-nav-link href="/contact" class="block rounded-md px-3 py-2 text-base font-medium {{ request()->is('/contact') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">Contact Us</x-nav-link>
            </div>
        </div>
    </nav>
        <main class="bg-gray-100">
            <header class="flex flex-row gap-4 justify-between items-center mx-10 bg-white">
                <h1 class="text-4xl font-bold mb-4 flex flex-row gab-4 text-primary">
                    {{ $heading }}
                </h1>

                <x-button href="/jobs/create" class=" {{ request()->is('jobs') ? 'flex' : 'hidden' }} "> Create Job</x-button>

            </header>
            {{ $slot }}
        </main>
    </body>
</html>
