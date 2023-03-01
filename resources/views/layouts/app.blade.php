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
                <a href="{{ route('login') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                    in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
                @endauth
            </div>
            @endif
            <a href="#">
                <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp" alt="avatar"
                    class="w-10 h-10 rounded-full">
            </a>
        </div>
    </header>
    <main class="container mx-auto max-w-custom flex">
        <div class="w-70 mr-5">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ullam corrupti sed cupiditate ipsa? Sapiente
            ad doloremque molestias, id, ab temporibus ipsum fugit ratione dicta aperiam impedit doloribus repellat
            dignissimos alias, vero hic voluptates. Modi, saepe eius quisquam repellendus molestiae fugit iusto dolorum
            quo eum magnam ad illum repellat labore ducimus suscipit voluptate veritatis fuga animi commodi placeat
            minima. Consequuntur velit fuga suscipit nesciunt consequatur id facere quod, cumque similique harum sint
            hic quis debitis? Suscipit quas amet dolorum maxime. Accusamus culpa veniam quae vel placeat minima laborum
            blanditiis aspernatur voluptatem doloremque, laboriosam nemo aut iste minus possimus deserunt quidem.
        </div>
        <div class="w-175">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates nemo minus voluptate enim aspernatur
            ducimus ipsum esse possimus corrupti libero odio neque, nesciunt ab numquam earum, distinctio ex incidunt
            hic placeat ipsam quo. Nulla optio dolorem assumenda accusantium reprehenderit, deserunt ad dolorum et
            aperiam eligendi quis voluptatum similique adipisci sequi nobis sit, corporis vero! Error in modi quod
            ducimus magnam? Quod qui et nisi sed, doloremque architecto quidem vero tempore voluptatem quis, voluptates
            nulla laboriosam iste facere ea? Iste, expedita minus, fugit voluptates quasi beatae debitis ea totam ipsa
            neque velit modi provident recusandae sunt ad eum dolorum tenetur in reiciendis? Numquam unde qui architecto
            ex! At odit vero illo quo, harum libero architecto! Totam quasi deleniti error, reprehenderit consequatur
            ducimus accusantium maiores corrupti reiciendis! Eveniet culpa totam facere. Cum architecto commodi,
            accusamus adipisci dignissimos, nostrum veritatis laudantium cupiditate, laboriosam esse dolorem! Incidunt,
            eum perspiciatis. Quae asperiores assumenda dolor aspernatur quaerat, accusantium libero cumque officia
            inventore itaque numquam pariatur, aliquid unde eveniet quisquam facere est veritatis cupiditate incidunt
            perspiciatis officiis suscipit atque odio? Eos in recusandae voluptates officia, fugiat alias consequatur
            molestias porro omnis sed, maxime sit iure voluptatem at itaque pariatur. Tempora aperiam repellendus eius
            voluptatibus non aliquid eveniet?
        </div>
    </main>
</body>

</html>