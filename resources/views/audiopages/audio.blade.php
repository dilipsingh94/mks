@extends('layout.master')
@section('content')
<div class="site-section bg-light">
   <div class="container">
       <div class="row ">
           <div class="col-12">
               <h2>Recently Uploaded </h2><hr>
           </div>
       </div>
      {{-- <div class="video-block section-padding pt-4 ml-2"> --}}
         <div class="row">
            @foreach ($newaudio as $audio)
               <div class="col-lg-3 mb-4">
                  <div class="embed-responsive embed-responsive-16by9">
                     <iframe width="100%" height="166" scrolling="no" frameborder="no" src="{{$audio->embedlink}}"></iframe> 
                  </div>
                  <div >
                     <div class="video-title">
                        <a href="/single-audio/{{$audio->id}}">{{$audio->audiotitle}}</a>
                     </div>
                     <div class="video-page text-success" style="float:left;">
                        {{$audio->uploadername}}  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                     </div>
                     <div class="video-view" style="float:right;">
                        <i class="fas fa-calendar-alt"></i> {{$audio->created_at->format('d-m-y')}}
                     </div>
                  </div>
               </div>
            @endforeach
         </div>
      {{-- </div> --}}
      {{$newaudio->links()}}
   </div>
</div>
@endsection
                  
                  