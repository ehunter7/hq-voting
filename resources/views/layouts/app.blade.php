<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>HQ Voting</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Open+Sans:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans bg-gray-background text-gray-900 text-sm">
    <header class="flex items-center justify-between px-8 py-4">
        <a href="#"><img src="{{ asset('img/logo50.svg')}}" alt="logo"></a>
        <div class="flex items-center">
            @if (Route::has('login'))
            <div class="p-6 text-right">
                @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="{{route('logout')}}" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>
                @else
                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                    in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
                @endauth
            </div>
            @endif
            <a href="#">
                <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp" alt="avatar" class="w-10 h-10 rounded-full">
            </a>
        </div>
    </header>
    <main class="container mx-auto max-w-custom flex">
        <div class="w-70 mr-5">
            <div class="bg-white border-2 rounded-xl mt-16" style="
                border-image-source: linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
                border-image-slice: 1;
                background-image: linear-gradient(to bottom, #ffffff, #ffffff), linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
                background-origin: border-box;
                background-clip: content-box, border-box;
            ">
                <div class="text-center px-6 py-2 pt-6">
                    <h3 class="font-semibold text-base">Add an idea</h3>
                    <p class="text-xs mt-4">Let us know what you would like and we'll take a look!</p>
                </div>
                <form action="#" method="POST" class="space-y-4 px-4 py-6">
                    <div>
                        <input type="text" class="text-sm border-none w-full bg-gray-100 rounded-xl placeholder-gray-900 px-4 py-2" placeholder="Your Idea">
                    </div>
                    <div>
                        <select name="category_add" id="category_add" class="bg-gray-100 w-full rounded-xl px-4 py-2 border-none text-sm">
                            <option value="Category One">Category One</option>
                            <option value="Category Two">Category Two</option>
                            <option value="Category Three">Category Three</option>
                            <option value="Category Four">Category Four</option>
                        </select>
                    </div>
                    <div>
                        <textarea name="idea" id="idea" cols="30" rows="4" class="w-full bg-gray-100 rounded-xl placeholder-gray-900 text-sm px-4 py-2 border-none" placeholder="Describe your idea"></textarea>
                    </div>
                    <div>
                        <div class="flex items-center justify-between space-x-3">
                            <button type="button" class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 text-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-gray-500 transform -rotate-45">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13" />
                                </svg>

                                <span class="ml-1">Attach</span>

                            </button>
                            <button type="submit" class="text-white flex items-center justify-center w-1/2 h-11 text-xs bg-blue text-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3">


                                <span class="ml-1">Submit</span>

                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="w-175">
            <nav class="flex items-center justify-between text-xs">
                <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
                    <li>
                        <a href="#" class="border-b-4 pb-3 border-blue">
                            All Ideas (87)
                        </a>
                    </li>
                    <li>
                        <a href="#" class="test-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">
                            Considering (6)
                        </a>
                    </li>
                    <li>
                        <a href="#" class="test-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">
                            In Progress (1)
                        </a>
                    </li>
                </ul>
                <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                    <li>
                        <a href="#" class="test-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">
                            Implemented (10)
                        </a>
                    </li>
                    <li>
                        <a href="#" class="test-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">
                            Closed (55)
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="mt-8">
                {{$slot}}
            </div>
        </div>

    </main>
</body>

</html>