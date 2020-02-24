@extends('layout.master')
@section('content')
<div class="site-section bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <h2>Recent Documents</h2>
                <hr>
            </div>
        </div>
       
        <div class="row">
            @foreach ($newdocs as $docs)
                <div class="col-lg-2 mb-4">
                    <div class="entry2">
                        <a href="{{ asset('uploads/'.$docs->documentfile)}}"><img src="{{ asset('learning-plug-ins/images/pdf.png')}}" class="img-fluid rounded"  id="thumbnailimg"></a>
                        <div class="excerpt">
                            <h2>{{$docs->documenttitle}}</h2>
                            <div class="post-meta align-items-center text-left clearfix">
                                <span class="d-inline-block mt-1">By <a href="#">{{$docs->uploadername}}</a></span><br>
                               <b > <i class="fas fa-calendar-alt"></i><span>&nbsp;&nbsp;{{$docs->created_at->format('d-m-Y')}}</span></b>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{$newdocs->links()}}
    </div>
</div>
    
@endsection
        