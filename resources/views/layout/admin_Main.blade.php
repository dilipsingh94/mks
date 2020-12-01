@include('layout.admin_Header')
<div class="site-wrap">
    @include('layout.admin_navbar')
    @yield('content')
    @include('layout.mks_Footer')
</div>
@include('layout.mks_Footer_scripts')