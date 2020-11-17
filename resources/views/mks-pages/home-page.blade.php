@extends('layout.mks_Main')
@section('content')
    <div class="site-section bg-light">
        <div class="container">
            <div class="row align-items-stretch retro-layout-2">
                @foreach ($blog as $post)
                <div class="col-md-4">
                    <a href="{{ url('blog/'.$post->id.'/view') }}" class="h-entry mb-30 v-height gradient">   
                        <img src="{{ asset('uploads/'.$post->thumbnail) }}" alt="Image" class="img-fluid rounded">
                        <div class="text">
                            <h2><small>{{ $post->posttitle }}</small></h2>
                            <small class="text-white">{{$post->created_at->format('d-m-Y')}}</small>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection