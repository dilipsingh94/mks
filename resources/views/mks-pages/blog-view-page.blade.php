@extends('layout.mks_Main')
@section('content')
    <section class="site-section py-lg">
        <div class="container">        
            <div class="row blog-entries element-animate" style="margin-top: 5%">
                {{ csrf_field() }}
                <div class="col-sm-8 main-content">            
                    <div class="post-content-body">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <img src="{{ asset('mks-resources/blog-head.jpg') }}" alt="Image placeholder" width="50%" class="img-fluid rounded">
                            </div>
                            <div class="col-md-12 mb-4">
                                <h2>{{ $blog->posttitle }}</h2>
                                <img src="{{ asset('uploads/'.$blog->thumbnail) }}" alt="Image placeholder" class="img-fluid rounded">
                            </div>
                        </div>
                        <p class="post-category text-white bg-secondary">{{ $blog->category }}</p>
                        <h3>{{ $blog->description }}</h3>
                        <p class="text-justify text-black">{{ $blog->blog }}</p>
                        <div>
                            <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fmksnews.ind.in%2F&width=145&layout=button_count&action=like&size=small&share=true&height=46&appId" width="145" height="46" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        </div>
                    </div>
                    <div class="bio">
                        <div class="bio-body">
                            <h5>News By - {{ $blog->writer }}</h5>
                            <p class="social">
                                <img src="{{ asset('mks-resources/symbol-icon.png') }}" alt="Image" height="50" width="50">
                                <a target="_blank" href="https://www.facebook.com/mksnews2019/" class="p-2"><span class="fa fa-facebook"></span></a>
                                <a target="_blank" href="https://twitter.com/mksnews2019" class="p-2"><span class="fa fa-twitter"></span></a>
                                <a target="_blank" href="https://www.instagram.com/dilipsir.4444/?igshid=bt4lx57gsfy7" class="p-2"><span class="fa fa-instagram"></span></a>
                                <a target="_blank" href="https://www.youtube.com/channel/UCvEWO5VLjnaLw7Q_c8jdvUw" class="p-2"><span class="fa fa-youtube-play"></span></a>
                            </p>
                        </div>
                    </div>                    
                    <!-- ShareThis BEGIN -->
                    <div class="sharethis-inline-share-buttons"></div>
                    <!-- ShareThis END -->
                    
                </div>
                <!-- END main-content -->

                {{-- @foreach ($blog as $post) --}}
                <div class="col-sm-4 sidebar">                    
                    <h5 style="font-size: 30px; font-weight: bold;">Advertisements</h5>
                    <!-- END sidebar-box -->
                    <div class="sidebar-box">
                        <div class="text-center">
                            {{-- <img src="{{ asset('mks-resources/ad1.jpeg') }}" alt="Image" class="mb-3" width="100%"> --}}
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fmksnews2019%2F&tabs=timeline&width=340&height=420&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="420" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        </div>
                    </div>
                    <!-- END sidebar-box --> 
                </div>
                {{-- @endforeach --}}
                <!-- END sidebar -->

                <div class="col-sm-12">
                    <div class="powr-social-feed" id="6663a8c0_1606814951"></div><script src="https://www.powr.io/powr.js?platform=html"></script>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="card-title">Our recent Posts</h3>
                </div>
                @foreach ($blogpost as $post)
                <div class="col-md-3">
                    <a href="{{ url('blog/'.$post->id.'/view') }}" class="h-entry mb-30 v-height gradient">   
                        <img src="{{ asset('uploads/'.$post->thumbnail) }}" alt="Image" class="img-fluid rounded" width="100%">
                        <div class="" style="padding-top: 10px;">
                            <h6>{{ $post->posttitle }}</h6>
                            <small class="text-danger">{{$post->created_at->format('d-m-Y')}}</small>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        <a href="{{ url('blogs') }}" class="float">
            <i class="fa fa-reply my-float"></i>
        </a>
    </section>
@endsection