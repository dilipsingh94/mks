<header class="site-navbar" role="banner">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-4 site-logo">
                <a href="{{url('/')}}" class="text-black h2 mb-0">
                    <img src="{{ asset('./mks-resources/mks-logo.png') }}" alt="MKS-News LOGO" width="100%" style="padding: 2%;">
                </a>
            </div>

            <div class="col-8 text-right">
                <nav class="site-navigation" role="navigation">
                    <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block mb-0">
                        <li><a href="{{ url('/') }}"><i class="fa fa-home fa-2x text-danger"></i></a></li>
                        <li><a href="{{ url('blogs') }}">Blogs</a></li>
                        <li><a href="{{ url('videos') }}">Videos</a></li>
                        <li><a href="{{ url('pressnotes') }}">Daily Pressnote</a></li>
                    </ul>
                </nav>
                <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><i class="fa fa-menu h3"></i></a>
            </div>
        </div>
    </div>
</header>