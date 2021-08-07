 @section('navbar')

<header class="container-fluid" style="background-color: white;" id="upper">
    <div class="d-flex justify-content-center">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{-- Sumti Fashion --}}
            <img src="{{URL::asset('/images/sumti2.jpg')}}" class="img-fluid" alt="">
        </a>
    </div>
</header><!-- /header -->

  <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: white;z-index: 10;" id="navbar">
            <div class="container">
                <a class="navbar-brand" id="nav-brand"  href="{{ url('/') }}">
                    {{-- Sumti Fashion --}}
                    <img src="{{URL::asset('/images/sumti2.jpg')}}" class="img-fluid w-75" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}" style="background-color: #200085; ">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="./">HOME</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="about">ABOUT</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="contact">CONTACT</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link {{ Request::is('shop') ? 'active' : '' }}" href="shop">SHOP</a>
                      </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('REGISTER') }}</a>
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
                            <li class="pl-3 nav-item d-flex justify-content-center align-items-center">
                                <a href="cart">
                                <span class="fa fa-shopping-cart" style="font-size: 1.5rem;color: #F5AC01;">
                        </span>
                        <span class="badge px-1 text-light" style="border-radius: 10px;background-color: #240094;">
                                {{ session()->get('count') }}
                            </span>
                                </a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

@show