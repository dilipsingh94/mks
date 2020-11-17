@extends('layout.mks_Main')
@section('content')
    <div class="site-section">
        <div class="container">            
            <div class="row py-4">
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
        </div>
        <a href="{{ url('/') }}" class="float">
            <i class="fa fa-reply my-float"></i>
        </a>
    </div>
@endsection