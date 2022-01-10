<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">
        <div class="navbar-logo" data-navbar-theme="theme4">
            <a class="mobile-menu" id="mobile-collapse" href="#!">
                <i class="ti-menu"></i>
            </a>
            <a class="mobile-search morphsearch-search" href="#">
                <i class="ti-search"></i>
            </a>
            <a href="index.html">
                <img class="img-fluid" src="{{asset('assets/images/logo.png')}}" alt="Theme-Logo">
            </a>
            <a class="mobile-options">
                <i class="ti-more"></i>
            </a>
        </div>
        <div class="navbar-container container-fluid">
            <div>
               
                <ul class="nav-right">
                    
                    <li class="user-profile header-notification">
                        <a href="#!">
                            <img src="{{asset('assets/images/user.png')}}" alt="User-Profile-Image">
                            <i class="ti-angle-down"></i>
                        </a>
                        <ul class="show-notification profile-notification">
                                <!-- Authentication Links -->
                        @guest
                        <li >
                            <a class="nav-link" href="{{ route('login') }}"><i class="ion-person"></i>{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li >
                                <a class="nav-link" href="{{ route('register') }}"><i class="ion-person-add"></i>{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li >
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"><i class="ti-layout-sidebar-left"></i>
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                        </ul>
                    </li>
                </ul>
                <!-- search -->
               
                <!-- search end -->
            </div>
        </div>
    </div>
</nav>
