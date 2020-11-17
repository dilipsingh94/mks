<div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>
  
<header class="site-navbar shadow" role="banner">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-4 site-logo">
                <a href="{{url('home')}}" class="text-black h2 mb-0">
                    <img src="{{ asset('./mks-resources/mks-logo.png') }}" alt="MKS-News LOGO" width="90%" style="padding: 2%;">
                </a>
            </div>
            <div class="col-8 text-right">
                <nav class="site-navigation" role="navigation">
                    <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block mb-0">
                        <li><a href="{{ url('home') }}"><i class="fa fa-home fa-2x text-danger"></i></a></li>
                        <li><a href="{{ url('blogpost/list') }}">Blogs</a></li>
                        <li><a href="{{ url('videos/list') }}">Video</a></li>
                        <li><a href="{{ url('document/list') }}">Pressnotes</a></li>
                        <span>|</span>
                        {{-- <li><a href="/audios/show">Audio</a></li> --}}
                        {{-- <li><a href="/show/presentations">Presentations</a></li> --}}
                        {{-- <li><a href="#"> <i class="fa fa-sign-out"></i> Logout</a></li> --}}
                        

                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"> <i class="fa fa-lock"></i> {{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <i class="fa fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

                    </ul>
                </nav>
                <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span class="icon-menu h3"></span></a></div>
            </div>
        </div>
    </div>
</header>
        


