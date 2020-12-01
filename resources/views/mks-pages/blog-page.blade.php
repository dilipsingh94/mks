@extends('layout.mks_Main')
@section('content')
    <div class="site-section">
        <div class="container">            
            <div class="row py-4" style="margin-top: 3%">
            @foreach ($blog as $post)
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <div class="entry2">
                            <div class="card-img-top">
                                <a href="{{ url('blog/'.$post->id.'/view') }}"><img src="{{ asset('uploads/'.$post->thumbnail) }}" alt="Image" height="300" class="img-fluid rounded"> </a>
                            </div>
                            {{-- <div class="card-body"> --}}
                                <div class="excerpt">
                                    <span class="post-category text-white bg-info mb-3">{{$post->category}}</span>
                                    <a href="{{ url('blog/'.$post->id.'/view') }}"> <p>{{ $post->posttitle }}</p> </a>
                                    <div class="post-meta align-items-center text-left clearfix">
                                        <figure class="author-figure mb-0 mr-3 float-left">
                                            <img src="{{ asset('mks-resources/symbol-icon.png') }}" alt="Repoter Image" height="30" width="30" class="img-fluid">
                                        </figure>
                                        <span class="d-inline-block mt-1 text-danger text-uppercase" >By&nbsp;{{$post->writer}}</span>
                                        <span class="text-danger">&nbsp;-&nbsp; {{$post->created_at->format('d-m-Y')}}</span><br>   
                                        {{-- <p>{{$post->description}}</p> --}}
                                        <small><a href="{{ url('blog/'.$post->id.'/view') }}">Read More...</a></small>
                                    </div>
                                    <iframe src="https://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fmks.dzn%2Fblog%2F13%2Fview&width=450&layout=standard&action=like&size=small&share=true&height=35&appId" width="450" height="35" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                                </div>
                                
                            {{-- </div> --}}
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