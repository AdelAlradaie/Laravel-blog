<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $metaTitle ? : 'Adel Blog' }}</title>
    <meta name="author" content="AdelAlradaie">
    <meta name="description" content="{{ $metaDescription }}">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 font-family-karla">

    <!-- Top Bar Nav -->


    <!-- Text Header -->
    <header class="w-full container mx-auto">
        <div class="flex flex-col items-center py-12">
            <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="{{ route('home') }}">
                Blog
            </a>
            <p class="text-lg text-gray-600">
                {{ App\Models\TextWidget::getTitle("header") }}
            </p>
        </div>
    </header>

    <!-- Topic Nav -->
    <nav class="w-full py-4 border-t border-b bg-gray-100" x-data="{ open: false }">
        <div class="block sm:hidden">
            <a href="#"
                class="block md:hidden text-base font-bold uppercase text-center flex justify-center items-center"
                @click="open = !open">
                Topics <i :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="fas ml-2"></i>
            </a>
        </div>
        <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
            <div
                class="w-full container mx-auto flex flex-col   lg:flex-row sm:flex-grow items-center justify-between text-sm font-bold uppercase mt-0 px-6 py-2">
                <div class="flex flex-col items-center flex-wrap gap-2 justify-center sm:flex-row">
                    <a href="{{ route('home') }}"
                        class="{{ request()->is('/') ? 'bg-blue-600 text-white':'' }} hover:bg-blue-600 hover:text-white rounded py-2 px-4 mx-2">Home</a>
                    @foreach($categories as $category)
                    <a class=" {{ request('category')?->slug ===$category->slug ?'bg-blue-600 text-white':''}} hover:bg-blue-600 hover:text-white rounded py-2 px-4 mx-2"
                        href="{{ route('by-category',$category->slug) }}">
                        {{ $category->title }}</a>
                    @endforeach
                    <a href="{{ route('about-us') }}"
                        class="{{ request()->is('about-us') ? 'bg-blue-600 text-white':'' }} hover:bg-blue-600 hover:text-white  rounded py-2 px-4 mx-2">About
                        us</a>
                </div>




                <div class="flex items-center">
                    <form action="{{ route('search') }}" method="get">
                        <input
                        name="q"
                        value="{{ request()->get('q') }}"
                            class="block font-meduim w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300  focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            placeholder="search">
                        </input>
                    </form>
                    @auth
                    <div class=" flex sm:items-center sm:ml-6">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button
                                    class="hover:bg-blue-600 hover:text-white  rounded py-2 px-4 mx-2 flex items-center">
                                    <div>{{ Auth::user()->name }}</div>

                                    <div class="ms-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                    @else

                    <a href="{{ route('login') }}"
                        class=" hover:bg-blue-600 hover:text-white  rounded py-2 px-4 mx-2">Login</a>
                    <a href="{{ route('register') }}"
                        class="bg-blue-600 text-white  rounded py-2 px-4 mx-2">Register</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>


    <div class="container mx-auto   py-6">




        <!-- Posts Section -->
        {{ $slot }}

        <!-- Sidebar Section -->

    </div>

    <footer class="w-full border-t bg-white pb-12">

        <div class="w-full container mx-auto flex flex-col items-center">

            <div class="uppercase py-6">&copy; Adelblog.com</div>
        </div>
    </footer>


    @livewireScripts
</body>

</html>