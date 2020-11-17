@extends('layout.mks_Main')
@section('content')
    <section class="site-section py-lg">
        <div class="container">        
            <div class="row blog-entries element-animate" style="margin-top: 5%">
                {{ csrf_field() }}
                <div class="col-md-12 col-lg-9 main-content">            
                    <div class="post-content-body">
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <img src="{{ asset('uploads/'.$blog->thumbnail) }}" alt="Image placeholder" class="img-fluid rounded">
                            </div>
                        </div>
                        <p class="post-category text-white bg-secondary">{{ $blog->category }}</p>
                        <h2>{{ $blog->posttitle }}</h2>
                        <p class="text-justify">{{ $blog->blog }}</p>
                    </div>
                </div>
                <!-- END main-content -->

                <div class="col-md-12 col-lg-3 sidebar">                    
                    <!-- END sidebar-box -->
                    <div class="sidebar-box">
                        <div class="bio text-center">
                            <img src="{{ asset('./mks-resources/editor.png')}}" alt="Image Placeholder" class="img-fluid mb-5">
                            <div class="bio-body">
                                <h2>{{ $blog->writer }}</h2>
                                <p class="social">
                                    <a target="_blank" href="https://www.facebook.com/mksnews2019/" class="p-2"><span class="fa fa-facebook"></span></a>
                                    <a target="_blank" href="https://twitter.com/mksnews2019" class="p-2"><span class="fa fa-twitter"></span></a>
                                    <a target="_blank" href="https://www.instagram.com/dilipsir.4444/?igshid=bt4lx57gsfy7" class="p-2"><span class="fa fa-instagram"></span></a>
                                    <a target="_blank" href="https://www.youtube.com/channel/UCvEWO5VLjnaLw7Q_c8jdvUw" class="p-2"><span class="fa fa-youtube-play"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- END sidebar-box --> 
                </div>
                <!-- END sidebar -->
            </div>
        </div>
        <a href="{{ url('blogs') }}" class="float">
            <i class="fa fa-reply my-float"></i>
        </a>
    </section>
@endsection