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
    <body class="font-sans antialiased">
        <div class="min-h-screen">
        <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col ">
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <!-- Page content here -->
            <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">
            Open drawer
            </label>
        </div>
        <div class="drawer-side">
            <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
            <ul class="menu bg-base-200 text-base-content min-h-full w-24 p-4 gap-5">
            <!-- Sidebar content here -->
            <a href="/dashboard"><img src="{{asset('images/logo.svg')}}" class="w-20" alt=""></a>
            <li><a href="/dashboard"><img src="{{asset('images/home.svg')}}" class="w-10" alt=""></a></li>
            <li><a href="/loker"><img src="{{asset('images/briefcase.svg')}}" class="w-10" alt=""></a></li>
            <li><a href="/course"><img src="{{asset('images/book.svg')}}" class="w-8 text-center" alt=""></a></li>
            <li><a href="/profile"><img src="{{asset('images/profile.svg')}}" class="w-10" alt=""></a></li>
            <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                <img src="{{asset('images/logout.png')}}" class="w-10">
                            </x-dropdown-link>
                        </form> 
            </ul>
        </div>
        </div>
        </div>
    </body>
</html>
