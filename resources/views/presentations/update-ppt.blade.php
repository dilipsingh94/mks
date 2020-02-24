@extends('layout.master')
@section('content')
<div class="site-section bg-light">
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <div class="card card-body shadow">
                <h2 class="card-title">Edit Presentation</h2>
                <form class="form-horizontal m-t-40" method="POST" action="/updateppt/{{$newppt->id}}" enctype="multipart/form-data" >
                    {{ csrf_field()}}
                    {{method_field('PUT')}}
                    {{-- <input type="hidden" name="id" value="{{$newppt->id}}"> --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="uploader name">Uploader Name</label>
                                <input type="text" class="form-control form-control-line" placeholder="Enter Your Name" value="{{$newppt->name}}" name="name" required>
                                </div> 
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Presentation Title</label>
                                    <input type="text" class="form-control" placeholder="Enter Presentation Title" value="{{$newppt->title}}" name="title" required> 
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Link">Enter Link</label>
                                    <input type="text" class="form-control form-control-line" placeholder="Enter Presentation Link" value="{{$newppt->documentlink}}" name="documentlink" required>
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="titlelink">Title Link </label>
                                    <input type="text" class="form-control" placeholder="Enter title Link" value="{{$newppt->titlelink}}" name="titlelink" required> 
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Presentation File </label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01" name="presentation" value="{{ asset('uploads/'.$newppt->presentation)}}" >
                                            <label class="custom-file-label" for="inputGroupFile01" >Choose file to upload</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success waves-effect waves-light" >Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection