<!-- resources/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Application') - {{App::getLocale()}}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    
    <header>

        <ul>
            <li><a style="color:red" href="{{config('app.url')}}/tr">Türkçe</a></li>
            <li><a style="color:red" href="{{config('app.url')}}/en">English</a></li>
            <li>{{App::getLocale()}}</li>

        </ul>

        <nav>
            <!-- Navigation bar -->
            <ul>

                <li><a style="color:red" href="{{config('app.url')}}/{{App::getLocale()}}">{{ __('homepage.AnaSayfa') }}</a></li>

                @foreach ($mainNavigation as $menu)
                <li><a href="{{config('app.url')}}/{{$menu['lang']}}/{{$menu['url']}}">{{$menu['title']}}</a></li>
                @if($menu['sub'])
                <ul>
                    @foreach ($menu['sub'] as $submenu)
                    <li><a href="{{config('app.url')}}/{{$menu['lang']}}/{{$menu['url']}}/{{$submenu['url']}}">{{$menu['title']}}</a></li>
                    @endforeach
                </ul>
                @endif
                @endforeach
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Footer content -->
        <p>&copy; 2024 My Application. All rights reserved.</p>

        <p>Footer Navigasyon</p>
        <ul>

            @foreach ($footernNavigation as $menu)
            <li><a href="{{config('app.url')}}/{{$menu['lang']}}/{{$menu['url']}}">{{$menu['title']}}</a></li>
            @if($menu['sub'])
            <ul>
                @foreach ($menu['sub'] as $submenu)
                <li><a href="{{config('app.url')}}/{{$menu['lang']}}/{{$menu['url']}}/{{$submenu['url']}}">{{$menu['title']}}</a></li>
                @endforeach
            </ul>
            @endif
            @endforeach
        </ul>
    </footer>
</body>

</html>