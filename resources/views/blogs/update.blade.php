@extends('layout.master')
@section('content')
<div class="site-section bg-light">
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <div class="card card-body shadow">
                <h2 class="card-title">Edit Blog</h2>
                <form class="form-horizontal m-t-40" method="POST" action="/updateblog/{{$newblog->id}}" enctype="multipart/form-data" >
                    {{ csrf_field()}}
                    {{method_field('PUT')}}
                    {{-- <input type="hidden" name="id" value="{{$newblog->id}}"> --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category">Category</label>
                                <input type="text" class="form-control form-control-line" placeholder="Enter Category" value="{{$newblog->category}}" name="category" required>
                                </div> 
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="writer">Blog Writer </label>
                                    <input type="text" class="form-control" placeholder="Enter Your Name" value="{{$newblog->writer}}" name="writer" required> 
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Link">Enter Link</label>
                                    <input type="text" class="form-control form-control-line" placeholder="Enter Link" value="{{$newblog->link}}" name="link" required>
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="posttitle">Post Title  </label>
                                    <input type="text" class="form-control" placeholder="Enter Post title" value="{{$newblog->posttitle}}" name="posttitle" required> 
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Thumbnail Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01" name="thumbnail" value="{{ asset('uploads/'.$newblog->thumbnail)}}" >
                                            <label class="custom-file-label" for="inputGroupFile01" >Choose file to upload</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="raddress">Blog</label>
                                    <textarea class="form-control" rows="5" placeholder="Write A Blog" maxlength="150"  name="blog" required>{{$newblog->blog}}</textarea>
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