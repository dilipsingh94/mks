@extends('layout.master')
@section('content')
<div class="site-section bg-light">
    <div class="container">
       {{-- <div class="video-block section-padding pt-4 ml-2"> --}}
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" width="250" height="220" src="https://www.youtube.com/embed/{{$newvideo->embedlink}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div id="single-video-title">
                    <h5>{{$newvideo->videotitle}}</h5>
                </div>
                
                <div class="video-page text-success" style="float:right;">
                    {{$newvideo->uploadername}}  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                </div>
                <div class="video-view">
                    
                    {{$newvideo->created_at->format('d-m-y')}}
                </div>
                <hr>
                <div class="">
                    <h3>Description</h3>
                    <p>{{$newvideo->description}}</p>
                </div>
            </div>
            </div>
        </div>
    </div>
 </div>
@endsection