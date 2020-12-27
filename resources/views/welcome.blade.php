<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

        <nav class="navbar navbar-expand-md navbar-dark bg-primary shadow-sm">
            {{-- navbar-light bg-white --}}
            <div class="container">
                {{-- container --}}
                <a class="navbar-brand" href="{{ url('/') }}">
                    Faculty Of Informatics Engineering
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        
                        @guest


                        @else

                        {{-- @if (Auth::user()->office_id != 4)
                            <li class="nav-item {{ Request::path() == 'documents' ? 'active' : '' }}">
                                <a class="nav-link font-weight-bolder" href="/documents">الوثائق</a>
                            </li>
                            <li class="nav-item {{ Request::path() == 'requests' ? 'active' : '' }}">
                                <a class="nav-link font-weight-bolder" href="/requests">الطلبات</a>
                            </li>
                        @endif --}}
                        
                        @endguest
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <img src="{{ asset('/images/logocut.png') }}"  width="100px" height="100px">
                        {{-- <!-- Authentication Links -->
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                                </div>
                            </li>
                        @endguest
                    </ul> --}}
                </div>
            </div>
        </nav>
        
        <div class="view" style="background-image: url('images/logo.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <div class="flex-center position-ref full-height">
            

            <div class="content">
                {{-- <div class="title m-b-md">
                    جامعة تشرين، كلية الهندسة المعلوماتية
                </div> --}}

                <div class="links">
                    @auth
                    {{-- @if (auth()->user()->office_id != 4)
                        <a href="{{ route('home') }}">Home</a>
                    @else
                        <a href="{{ route('requesthome') }}">Home</a>
                    @endif --}}

                    <a href="{{ route('requesthome') }}">
                        <button class="btn btn-primary">Home</button>
                    </a>

                    {{-- <button class="btn btn-primary">
                        <a href="{{ route('requesthome') }}" style="color: white;">Home</a>
                    </button> --}}
                        {{-- <a href="{{ url('/documents') }}">Home</a> --}}
                    @else
                        <a href="{{ route('login') }}">
                            <button class="btn btn-primary">login</button>
                        </a>
                        <a href="{{ route('register') }}">
                            <button class="btn btn-primary">Register</button>
                        </a>
                        {{-- <button class="btn btn-primary">
                            <a href="{{ route('login') }}" style="color: white;">Login</a>
                            </button> --}}
                        {{-- <button class="btn btn-primary">
                        <a href="{{ route('register') }}" style="color: white;">Register</a>
                        </button> --}}
                    @endauth
                </div>
            </div>
        </div>
    </body>
</html>
