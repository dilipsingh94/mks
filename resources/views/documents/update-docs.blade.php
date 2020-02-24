@extends('layout.master')
@section('content')
<div class="site-section bg-light">
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <div class="card card-body shadow">
                <h2 class="card-title">Edit Blog</h2>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="form-horizontal m-t-40" method="POST" action="/updatedocs/{{$newdocs->id}}" enctype="multipart/form-data" >
                    {{ csrf_field()}}
                    {{method_field('PUT')}}
                    {{-- <input type="hidden" name="id" value="{{$newdocs->id}}"> --}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="writer">Uploader Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Name" value="{{$newdocs->uploadername}}" name="uploadername" required> 
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="posttitle">Document Title  </label>
                                    <input type="text" class="form-control" placeholder="Enter Document title" value="{{$newdocs->documenttitle}}" name="documenttitle" required> 
                                </div> 
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Document File</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01" name="documentfile" value="{{ asset('uploads/'.$newdocs->documentfile)}}" >
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