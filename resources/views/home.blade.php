@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color:#FFFFFF;"><b>DASHBOARD</b></div>
            </div>
 
            <div class="row">
                <div class="col-12">
                    <div class="col-md-6" style="float:left;">
                        <div class="card shadow  mt-5 ">
                            <div class="card-body " style="background-color:#EEEBEB; border-radius:5px;">
                                {{-- @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif --}}
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="ml-3" style="font-size:30px;text-decoration:none;color:#000000;">Write a Blog</p>
                                    </div><br>
                                    <div class="col-md-4">
                                        <a href="/contentupload" class="btn btn-info btn-rounded mt-2 ml-5" style="width:120px;"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;Add Blog</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-md-6" style="float:right;">
                        <div class="card shadow mt-5" >
                            <div class="card-body" style="background-color:#EEEBEB;">
                                {{-- @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif --}}
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="ml-3" style="font-size:30px;text-decoration:none;color:#000000;">Add New Video</p>
                                    </div><br>
                                    <div class="col-md-4">
                                        <a href="/videodetails" class="btn btn-info btn-rounded mt-2 ml-5" style="width:120px;"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;Add Video</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="col-md-6" style="float:left;">
                        <div class="card shadow mt-5">
                            <div class="card-body" style="background-color:#EEEBEB;">
                                {{-- @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif --}}
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="ml-3" style="font-size:30px;text-decoration:none;color:#000000;">Add New Audio</p>
                                    </div><br>
                                    <div class="col-md-4">
                                        <a href="/audio" class="btn btn-info btn-rounded mt-2 ml-5" style="width:120px;"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;Add Audio</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-md-6" style="float:right;">
                        <div class="card shadow mt-5" >
                            <div class="card-body" style="background-color:#EEEBEB;">
                                {{-- @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif --}}
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="ml-3" style="font-size:30px;text-decoration:none;color:#000000;">Add Presentation</p>
                                    </div><br>
                                    <div class="col-md-4">
                                        <a href="/upload-presentations" class="btn btn-info btn-rounded mt-2 ml-5" style="width:120px;"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;Add Docs</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" style="float:left;">
                        <div class="card shadow mt-5" >
                            <div class="card-body" style="background-color:#EEEBEB;">
                                {{-- @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif --}}
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="ml-3" style="font-size:30px;text-decoration:none;color:#000000;">Add Document</p>
                                    </div><br>
                                    <div class="col-md-4">
                                        <a href="/upload-documents" class="btn btn-info btn-rounded mt-2 ml-5" style="width:120px;"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;Add Docs</a>
                                    </div>
                                </div>
                            </div>
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



