@extends('layout.mks_Main')
@section('content')
    <div class="site-section">
        <div class="container">            
            <div class="row py-4" style="margin-top: 5%">
            @foreach ($pressnote as $post)
                <div class="col-lg-3 mb-4">
                    <div class="entry2">                        
                        {{-- <img src="{{ asset('images/pdf.png')}}" width="50%" class="img-fluid rounded"  id="thumbnailimg"> --}}
                        <object width="100%" height="300" data="{{ asset('uploads/'.$post->documentfile) }}"></object>
                        <a href="{{ asset('uploads/'.$post->documentfile) }}" target="_blank">
                            <div class="excerpt">
                                <h6 class="text-black text-capitalize" style="padding-top: 10px">{{ $post->documenttitle }}</h6>
                                <div class="post-meta align-items-center text-left clearfix">
                                    <span class="d-inline-block mt-1 text-info text-capitalize">Uploaded By -&nbsp;{{$post->uploadername}} <i class="fa fa-check-circle"></i> </span> <br>
                                    <span class="text-danger"><i class="fa fa-calendar"></i> {{$post->created_at->format('d-m-Y')}}</span>
                                </div>
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