<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color:#111111; color:#fefefe;font-size: 25px">
            <div class="container" style="border-bottom:1px solid  rgb(51, 255, 85);">
                <a class="navbar-brand" style="background-color:#111111; color:#fefefe; font-size:1.4em" href="{{ url('/') }}">
                    {{ config('app.name', 'Realtimemovie') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" 
                                style="background-color:#111111; color:#fefefe;"
                                class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    <a href="{{url('/mycart')}}" class="dropdown-item" method="POST" action="mycart">カートを見る</a>
                                </div>
                            </li>
                            <a href="{{('/mycart')}}" action="mycart">
                            <img src="{{asset('img/cart.png')}}" alt="" class="cart" method="POST" style="width:30px; height:30px; color:#fefefe;">
                        </a>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="footer">
            @guest
            <p class="nav-item" style="display:inline;">
              <a href="{{route('register')}}" class="nav-link" style="color:#fefefe; display:inline;">{{__('Login')}}</a>

              @if (Route::has('register'))

              <a href="{{route('register')}}" style="color:#fefefe; display:inline;" class="navlink">{{__('Register')}}</a>
            </p>
            @endif

            @endguest
            <br>
            <div style="margin-top:24px;" class="inroom">
            --おうち時間で上映中の映画を--<br>
            <p style="font-size:2.4em;" class="footer-logo">RealtimeMovie</p>
            </div>

            <p style="font-size:0.7em;"class="copyright">@copyright 2020</p>

        </footer>
    </div>
</body>
</html>
