<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Typing Test</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- CSS Styles -->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css" />
    <!-- Connect FontAwesome icons -->
    <script src="https://kit.fontawesome.com/2c9f15701e.js" crossorigin="anonymous"></script>
    <!-- Import JS files -->
    <script defer type="text/javascript" src="{{asset('js/form.js') }}"></script>
</head>
    <body>
        <div class="app">
            <div class="container">
                @include('includes.header')
                @yield('content')
                <div>
                    @guest
                    @else
                        <div class="dashboard">
                            <span class="greeting">
                                Greetings, you are logged as user with nickname: {{ Auth::user()->name }}
                            </span>
                            <div class="dashboard-button">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                    @csrf
                                    <input type="submit" value="Logout" name="submit">
                                </form>
                            </div>
                    </div>
                </div> @endguest </div>
        </div>
    </body>
</html>
