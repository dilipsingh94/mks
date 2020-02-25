@extends('layout.master')
@section('content')
<div class="site-section bg-light">
    <div class="container" style="margin-right:20px;">
        <div class="row mb-5">
            <div class="col-12">
                <h2>Recent Posts</h2>
                <hr>
            </div>
        </div>
        
        <div class="row">
            @foreach ($newblog as $blog)
            <div class="col-lg-12 ">
                <div class="entry2 ">
                    <img src="{{ asset('uploads/'.$blog->thumbnail)}}" alt="Image" class="img-fluid rounded" height="200px" id="thumbnailimg" />
                    <div class="excerpt" style="width:200px;">
                        <p class="post-category text-white bg-secondary">{{$blog->category}}</p>
                        <h2><p style="color:#2f89fc;">{{$blog->posttitle}}</p></h2>
                        <div class="post-meta align-items-center text-left clearfix">
                            <span class="d-inline-block mt-1">By <a href="#">{{$blog->writer}}</a></span>
                            <span>&nbsp;-&nbsp;{{$blog->created_at->format('d-m-Y')}}</span><br><br>
                        </div>
                        <p>{{$blog->blog}}</p>
                        <p><a href="{{$blog->link}}">Read More</a></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{$newblog->links()}}
    </div>
</div>
    
@endsection