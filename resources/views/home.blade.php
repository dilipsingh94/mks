@extends('layout.admin_Main')
@section('content')
    <div class="site-section bg-light">
        <div class="container-fluid mt-2">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card shadow rounded m-t-10 m-b-10">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col align-self-center">
                                        <img src="{{ asset('./mks-resources/editor.png')}}" alt="Blog image" class="img-fluid mb-5">
                                    </div>
                                    <div class="col m-l-10 align-self-center">
                                        <h6 class="text-muted m-b-0">Total BlogPosts</h6>
                                        <h4 class="m-b-0">{{ $blog->count('$id') }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card shadow rounded m-t-10 m-b-10">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col align-self-center">
                                        <img src="{{ asset('./mks-resources/video.png')}}" alt="video image" class="img-fluid mb-5">
                                    </div>
                                    <div class="col m-l-10 align-self-center">
                                        <h6 class="text-muted m-b-0">Total Video's</h6>
                                        <h4 class="m-b-0">{{ $video->count('$id') }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card shadow rounded m-t-10 m-b-10">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col align-self-center">
                                        <img src="{{ asset('./mks-resources/pdf.png')}}" alt="pdf image" class="img-fluid mb-5">
                                    </div>
                                    <div class="col m-l-10 align-self-center">
                                        <h6 class="text-muted m-b-0">Total Pressnotes</h6>
                                        <h4 class="m-b-0">{{ $pressnotes->count('$id') }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



