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
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                <img src="{{asset("imgs/logo.jpg")}}"/>
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
                        <li class="nav-item">
                            <a class="nav-link active" href="/"><b>Home</b></a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">My account</a>
                        </li> --}}
                       
                        {{-- <li class="nav-item">
                            <a class="nav-link " href="/brand"></a>
                          </li>   --}}
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b>Menu</b> 
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach (App\Models\Category::all() as $category)
                            <a class="dropdown-item" href="/item/category/{{$category->id}}">{{$category->name}}</a>
                                @endforeach
                            {{-- <a class="dropdown-item" href="/beverages"><img src="{{asset("/imgs/beverages.jpg")}}" style="height: 40px; width: 40px;">Beverages</a>
                                <a class="dropdown-item" href="/category"><img src="{{asset("/imgs/breakfast.jpg")}}" style="height: 40px; width: 40px;">Breakfast</a>
                                <a class="dropdown-item" href="/category"><img src="{{asset("/imgs/burgers.jpg")}}"style="height: 40px; width: 40px;">Burgers</a>
                                <a class="dropdown-item" href="/category"><img src="{{asset("/imgs/chickensandwich.jpg")}}" style="height: 40px; width: 40px;">Chicken & Sandwiches</a>
                                <a class="dropdown-item" href="/category"><img src="{{asset("/imgs/combo.jpg")}}" style="height: 40px; width: 40px;">Combo Meal</a>
                                <a class="dropdown-item" href="/category"><img src="{{asset("/imgs/desserts.jpg")}}" style="height: 40px; width: 40px;">Desserts & Shakes</a>
                                <a class="dropdown-item" href="/category"><img src="{{asset("/imgs/happymeal.jpg")}}" style="height: 40px; width: 40px;">Happy Meal®</a>
                                <a class="dropdown-item" href="/category"><img src="{{asset("/imgs/cafedrink.jpg")}}" style="height: 40px; width: 40px;">McCafé® Drinks</a>
                                <a class="dropdown-item" href="/category"><img src="{{asset("/imgs/cafebakery.jpg")}}" style="height: 40px; width: 40px;">McCafé® Bakery</a>
                                <a class="dropdown-item" href="/category"><img src="{{asset("/imgs/snacks.jpg")}}" style="height: 40px; width: 40px;">Snacks & Sides</a> --}}
                              </div>
                          </li>
                          
                          <li class="nav-item">
                            <a class="nav-link active" href="/covid"><b>COVID-19</b></a>
                        </li>
                        @guest
                        
                            <li class="nav-item">
                                <a class="btn btn-warning font-weight-bold" href="{{ route('login') }}" >{{ __('Login') }}</a>
                            </li>
                        
                        
                            @if (Route::has('register'))
                                <li class="nav-item ml-1">
                                    <a class="btn btn-danger" href="{{ route('register') }}">{{ __('Register') }}</a>
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

        <main class="py-4">
            <div class="col-md-12 ml-5">
                @yield('content')

            </div>
        </main>

            <footer class="footer mt-auto py-3 bg-dark " style="color:darkgoldenrod;">
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
