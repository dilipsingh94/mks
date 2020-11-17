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
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" width="250" height="220" src="https://www.youtube.com/embed/{{ $video->embedlink }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <h6 class="text-black text-capitalize" style="padding-top: 10px">{{ $video->videotitle }}</h6>
                            <span>{{ $video->description }}</span>
                            <span class="text-danger"><i class="fa fa-calendar"></i> {{ $video->created_at->format('d-m-Y') }}</span>
                        </div>
                    </div>
                </div>
                <!-- END main-content -->

                <div class="col-md-12 col-lg-3 sidebar">                    
                    <!-- END sidebar-box -->
                    <div class="sidebar-box">
                        <div class="bio text-center">
                            <img src="{{ asset('./mks-resources/editor.png')}}" alt="Image Placeholder" class="img-fluid mb-5">
                            <div class="bio-body">
                                <h2>{{ $video->uploadername }}</h2>
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
        <a href="{{ url('videos') }}" class="float">
            <i class="fa fa-reply my-float"></i>
        </a>
    </section>
@endsection