@extends('layout.mks_Main')
@section('content')
    <div class="site-section">
        <div class="container">            
            <div class="row py-4" style="margin-top: 3%">
            @foreach ($blog as $post)
                <div class="col-lg-4 mb-4">
                    <div class="entry2">
                        <a href="{{ url('blog/'.$post->id.'/view') }}"><img src="{{ asset('uploads/'.$post->thumbnail) }}" alt="Image" class="img-fluid rounded">
                        <div class="excerpt">
                            <span class="post-category text-white bg-info mb-3">{{$post->category}}</span>
                            <h5>{{ $post->posttitle }}</h5>
                            <div class="post-meta align-items-center text-left clearfix">
                                <figure class="author-figure mb-0 mr-3 float-left">
                                    <img src="{{ asset('mks-resources/symbol-icon.png') }}" alt="Repoter Image" height="30" width="30" class="img-fluid">
                                </figure>
                                <span class="d-inline-block mt-1 text-danger text-uppercase" >By&nbsp;{{$post->writer}}</span>
                                <span class="text-danger">&nbsp;-&nbsp; {{$post->created_at->format('d-m-Y')}}</span>
                            </div>
                            <p>{{$post->description}}</p>
                            <small><a href="{{ url('blog/'.$post->id.'/view') }}">Read More...</a></small>
                        </div>
                        </a>
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