@extends('layout.master')
@section('content')
<div class="site-section bg-light">
   <div class="container">
       <div class="row ">
           <div class="col-12">
               <h2>Recent Presentations </h2><hr>
           </div>
       </div>
      {{-- <div class="video-block section-padding pt-4 ml-2"> --}}
         <div class="row">
            @foreach ($newppt as $ppt)
            <div class="col-lg-3 mb-4">
               <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" width="250" height="220" src="{{$ppt->documentlink}}" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen></iframe>
               </div>
               <div >
                  <div class="video-title">
                  <a href="/{{$ppt->titlelink}}/{{$ppt->id}}">{{$ppt->title}}</a>
                  </div>
                  
                  <div class="video-page text-success">
                     {{$ppt->name}}  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                  <a href="/uploads/{{$ppt->presentation}}" download="{{$ppt->presentation}}"><i class="fa fa-download" aria-hidden="true"></i></a>
                  </div>
                  <div class="video-view"><i class="fas fa-calendar-alt"></i> {{$ppt->created_at->format('d-m-y')}}
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      {{-- </div> --}}
      {{$newppt->links()}}
   </div>
</div>
@endsection