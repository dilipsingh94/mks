@extends('layout.admin_Main')
@section('content')
<div class="site-section bg-light">
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <div class="card card-body shadow">
                <h4 class="card-title">Edit Post</h4>
                <form class="form-horizontal m-t-40" method="POST" action="{{ url('blogpost/update/'.$blog->id) }}" enctype="multipart/form-data" >
                    {{ csrf_field()}}
                    {{-- {{method_field('PUT')}} --}}
                    {{-- <input type="hidden" name="id" value="{{$blog->id}}"> --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="writer">Author</label>
                                    <input type="text" class="form-control" value="{{$blog->writer}}" name="writer" required readonly> 
                                </div> 
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="category">Category</label>
                                <input type="text" class="form-control form-control-line" value="{{$blog->category}}" name="category" required>
                                </div> 
                            </div>                            
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Link">Short Description</label>
                                    <input type="text" class="form-control form-control-line" value="{{$blog->description}}" name="description" required>
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="posttitle">Title</label>
                                    <input type="text" class="form-control" value="{{$blog->posttitle}}" name="posttitle" required> 
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Thumbnail Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01" name="thumbnail" value="{{ asset('uploads/'.$blog->thumbnail)}}" >
                                            <label class="custom-file-label" for="inputGroupFile01" >Choose file to upload</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="raddress">Your Content</label>
                                    <textarea class="form-control" rows="5" placeholder="Write A Blog" maxlength="150"  name="blog" required>{{$blog->blog}}</textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success waves-effect waves-light" >Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('post.list') }}" class="float">
        <i class="fa fa-reply my-float"></i>
    </a>
</div>
@endsection