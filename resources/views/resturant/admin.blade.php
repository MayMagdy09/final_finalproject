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
    <div id="app" >
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm" style="background-color: black;">
            <div class="container" >
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{asset("imgs/logo2.jpg")}}" style="height: 100px; width: 100px;" >
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto text-light bold">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a class="nav-link active "  href="/category">Food Category</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link active"   href="/item">Menu Items</a>
                          </li> 
                          <li class="nav-item">
                            <a class="nav-link active"   href="/user">Manage Admins</a>
                          </li> 
                          <li class="nav-item">
                            <a class="nav-link active"   href="/info">Resturant info</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active"   href="/branch">Branches</a>
                          </li>  
                          <li class="nav-item">
                            <a class="nav-link active" 
                              href="delivery">Delivery locations</a>
                          </li>  
                          <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="{{ route('bag') }}">Orders</a>
                    </li>
                    <li class="nav-item">
                        <span class="badge badge-pill badge-danger">
                            @if (session()->has("bag"))
                                {{count(session()->get("bag"))}}
                            @else
                                0
                            @endif
                        </span>
                    </li>
                          
                        
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
                            <a id="navbarDropdown" class="btn btn-warning" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 container-fluid">
            @yield('content')
        </main>
            <footer class=" mb-0" style="color:darkgoldenrod; background-color: black;">
                <hr>
                @section('links')
                <div class="row">
                   <div class="col-md-3">
                    <ul> 
                    <label > About us </label>
                        <li> <a style="color: darkgoldenrod;" href="/history"> Our History</a> </li>
                        <li><a style="color: darkgoldenrod;" href="#"> News & Notifications</a></li>
                        <li> <a  style="color: darkgoldenrod;" href="#"> Our Food</a> </li>
                    </ul>
                   </div>
                   <div class="col-md-3">
                    <ul> 
                    <label > Contact Us </label>
                        <li><a style="color: darkgoldenrod;" href="#"> Mobile App</a> </li>
                        <li><a style="color: darkgoldenrod;" href="#"> Telphone Num </a></li>
                       
                    </ul>
                   </div>
                   <div class="col-md-3">
                    <ul> 
                        <label > pages </label>
                        <li><a style="color: darkgoldenrod;" href="https://www.facebook.com/McDonaldsEgypt/"> facebook </a> </li>
                        <li><a style="color: darkgoldenrod;" href="https://twitter.com/mcdonalds?lang=ar"> twitter </a></li>
                        <li><a style="color: darkgoldenrod;" href="https://www.instagram.com/mcdonalds/"> instagram </a></li>

                    </ul>
                   </div>
                </div>
               
                @show
        
              </footer>
       
    </div>
</body>
</html>
