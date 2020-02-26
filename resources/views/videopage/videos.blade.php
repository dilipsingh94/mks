@extends('layout.master')
@section('content')
<div class="site-section bg-light">
   <div class="container">
      <div class="row ">
         <div class="col-12">
            <h2>Recent Videos</h2><hr>
         </div>
      </div>
      {{-- <div class="video-block section-padding pt-4 ml-2"> --}}
      <div class="row">
         @foreach ($newvideo as $video)
            <div class="col-lg-3 mb-4">
               <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" width="250" height="220" src="https://www.youtube.com/embed/{{$video->embedlink}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               </div>

               <div>
                  <div class="video-title">
                     <a href="/single-video/{{$video->id}}">{{$video->videotitle}}</a>
                  </div>
                  <!--uploader name-->
                  <div class="video-page text-success" style="float:left;">
                     {{$video->uploadername}}<i class="fas fa-check-circle text-success"></i></a>
                  </div>
                  <!--upload date-->
                  <div class="video-view" style="float:right;">
                     <i class="fas fa-calendar-alt"></i> {{$video->created_at->format('d-m-y')}}
                  </div>
               </div>
            </div>
         @endforeach
      </div>
      {{-- </div> --}}
      {{$newvideo->links()}}
   </div>
</div>
@endsection