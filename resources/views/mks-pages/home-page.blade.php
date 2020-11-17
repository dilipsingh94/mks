@extends('layout.mks_Main')
@section('content')
    <div class="site-section bg-light">
        <div class="container">
            <div class="row align-items-stretch retro-layout-2" style="margin-top: 5%;">
                @foreach ($blog as $post)
                <div class="col-md-4">
                    <a href="{{ url('blog/'.$post->id.'/view') }}" class="h-entry mb-30 v-height gradient">   
                        <img src="{{ asset('uploads/'.$post->thumbnail) }}" alt="Image" class="img-fluid rounded">
                        <div class="text">
                            <h2><small>{{ $post->posttitle }}</small></h2>
                            <small class="text-white">{{$post->created_at->format('d-m-Y')}}</small>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            <hr class="border border-info">
            <div class="row col justify-content-center align-content-center shadow-lg" style="background: floralwhite">
                <img src="{{ asset('./mks-resources/video.png')}}" width="5%" class="img-fluid rounded" style="padding: 10px;" id="thumbnailimg">
                &nbsp;&nbsp;<h3 style="margin-top: 1%">Our Recent Videos</h3>
            </div>
            <hr class="border border-danger">
            <div class="row align-items-stretch retro-layout-2" style="margin-top: 3%;">
                @foreach ($video as $post)
                <div class="col-lg-4 mb-4">
                    <div class="entry2">
                        <div class="excerpt">
                            <div class="post-meta align-items-center text-left clearfix">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" width="250" height="220" src="https://www.youtube.com/embed/{{ $post->embedlink }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <a href="{{ url('video/'.$post->id.'/view') }}">
                                    <h6 class="text-black text-capitalize" style="padding-top: 10px">{{ $post->videotitle }}</h6>
                                    <span>{{$post->description}}</span><br>
                                </a>
                                <span class="d-inline-block mt-1 text-info text-capitalize">Uploaded By -&nbsp;{{$post->uploadername}} <i class="fa fa-check-circle"></i> </span>
                                <span class="text-danger" style="float: right"><i class="fa fa-calendar"></i> {{$post->created_at->format('d-m-Y')}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach                
            </div>
            <hr class="border border-info">
            <div class="row col justify-content-center align-content-center shadow-lg" style="background: floralwhite">
                <img src="{{ asset('./mks-resources/pdf.png')}}" width="5%" class="img-fluid rounded" style="padding: 10px;" id="thumbnailimg">
                &nbsp;&nbsp;<h3 style="margin-top: 1%">Our Recent Pressnotes</h3>
            </div>
            <hr class="border border-danger">
            <div class="row align-items-stretch retro-layout-2" style="margin-top: 3%;">
                @foreach ($pressnote as $post)
                <div class="col-lg-3 mb-4">
                    <div class="entry2">
                        {{-- <img src="{{ asset('images/pdf.png')}}" width="50%" class="img-fluid rounded"  id="thumbnailimg"> --}}
                        <object width="100%" height="300" data="{{ asset('uploads/'.$post->documentfile) }}"></object>
                        <a href="{{ asset('uploads/'.$post->documentfile) }}" target="_blank">
                        <div class="excerpt">
                            <h6 class="text-black text-capitalize" style="padding-top: 10px">{{ $post->documenttitle }}</h6>
                            <div class="post-meta align-items-center text-left clearfix">
                                <span class="d-inline-block mt-1 text-info text-capitalize">Uploaded By -&nbsp;{{$post->uploadername}} <i class="fa fa-check-circle"></i> </span> <br>
                                <span class="text-danger"><i class="fa fa-calendar"></i> {{$post->created_at->format('d-m-Y')}}</span>
                            </div>
                        </div>
                        </a>

                    </div>
                </div>
                @endforeach                
            </div>
        </div>
    </div>
@endsection