@include('layout.mks_Header')
<div class="site-wrap">
    @include('layout.mks_Navbar')
    @yield('content')
    @include('layout.mks_Footer')
</div>
@include('layout.mks_Footer_scripts')