<!DOCTYPE html>
<head>
  <title>Library</title>

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

    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <style type=text/css>
    body{
      background: url("{{asset('images/back_.JPG')}}");
      /*background-size: 100% auto;*/
    }
      header{opacity: 0.7;}
      footer{background-color:#fff;opacity:0.9;text-align:center;}
  
    </style>
    
  </head>
  <body>
  <header class="jumbotron">
  <!--<div align="right">
      <a href="library"> <b>Home</b></a><br />
      <a href="login"> <b>login</b></a><br />
      <a href="register"> <b>Registration</b></a>
     </div>-->


     <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('', 'الرئيسيــة') }}
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
                                <a id="navbarDropdown"  href="./chat" role="button" data-toggle="" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div  aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>

                                <div  aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="./admin">
                                        {{ __('Admin') }}
                                    </a>
                                </div>

                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    
    <div class="container">
      <div class="col-md-10">
      <h1 align='center'>مكتبة المعهد التقني الصناعي - الحوبان</h1>
      </div>
      <!--<div class="col-md-2">
      Date : {{$date ?? ''}} <br /> Time : {{$time ?? ''}}
      </div>-->
  </div>
  </header>

  @yield('content')

  <footer class="container">
جميع الحقوق محفوظة  للمعهد التقني الصناعي - الحوبان - قسم تقنية معلومات
  </footer>
</body>
</html>
