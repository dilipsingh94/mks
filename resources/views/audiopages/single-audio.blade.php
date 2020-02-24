@extends('layout.master')
@section('content')
<div class="site-section bg-light">
    <div class="container">
       {{-- <div class="video-block section-padding pt-4 ml-2"> --}}
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" width="250" height="220" src="{{$newaudio->embedlink}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div id="single-video-title">
                    <h5>{{$newaudio->audiotitle}}</h5>
                </div>
                
                <div class="video-page text-success" style="float:right;">
                    {{$newaudio->uploadername}}  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                </div>
                <div class="video-view">
                    <i class="fas fa-calendar-alt"></i> {{$newaudio->created_at}}
                </div>
                <hr>
                {{-- <div class="">
                    <h3>Description</h3>
                    <p>{{$newaudio->description}}</p>
                </div> --}}
            </div>
            </div>
        </div>
    </div>
 </div>
@endsection