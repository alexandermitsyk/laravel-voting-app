<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laracasts voting</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Open+Sans:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans bg-gray-background text-gray-900 text-sm">
    <header class="flex items-center justify-between px-8 py-4">
        <a href="#" class=""><img src="{{ asset('img/logo.svg') }}" /></a>
        <div class="flex items-center">
            @if (Route::has('login'))
                <div class="px-6 py-4">
                    @auth
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <a href="#" class="">
                <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp" alt=""
                    class="w-10 h-10 rounded-full">
            </a>
        </div>
    </header>

    <main class="container mx-auto flex max-w-custom">
        <div class="w-70 mr-5">
            <div class="border-2 border-gray-100 rounded-xl mt-16 bg-white">
                <div class="text-center px-4 py-2 pt-6">
                    <h3 class="font-semibold text-base">Add an idea</h3>
                    <p class="text-xs mt-4">
                        Let us now what you would like and we'll take a look over!
                    </p>

                    <form action="#" method="post" class="space-y-4 py-6 text-sm">
                        <div>
                            <input type="text"
                                class="w-full bg-gray-100 rounded-xl text-sm placeholder-gray-900 px-4 py-2 border-none"
                                placeholder="Your idea" />
                        </div>

                        <div>
                            <select name="category-add" id="category-add"
                                class="w-full rounded-xl py2 border-none bg-gray-100 text-sm">
                                <option value="Category One">Category One</option>
                                <option value="Category Two">Category Two</option>
                            </select>
                        </div>

                        <div>
                            <textarea name="idea" id="idea" cols="30" rows="4"
                                class="w-full bg-gray-100 rounded-xl placeholder-gray-900 px-4 py-2 border-none text-sm resize-none"
                                placeholder="Describe your idea"></textarea>
                        </div>

                        <div class="flex items-center justify-between space-x-3">
                            <button type="button"
                                class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 px-6 py-3">
                                <svg class="w-4 h-4 flex-none stroke-gray-900 -rotate-45" viewBox="0 0 24 24"
                                    fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48">
                                    </path>
                                </svg>
                                <span class="ml-1">Attach</span>
                            </button>

                            <button type="submit"
                                class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover px-6 py-3">
                                <span class="ml-1 text-white">Submit</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="w-175">
            <nav class="flex items-center justify-between text-xs">
                <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
                    <li><a href="" class="border-b-4 pb-3 font-bold border-blue">All ideas (87)</a></li>
                    <li><a href=""
                            class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Considering
                            (6)</a></li>
                    <li><a href=""
                            class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">In
                            Progress (1)</a></li>
                </ul>

                <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
                    <li><a href=""
                            class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Implemented
                            (10)</a></li>
                    <li><a href=""
                            class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Closed
                            (55)</a></li>
                </ul>
            </nav>
            <div class="mt-8">
                {{ $slot }}
            </div>
        </div>
    </main>
</body>

</html>
