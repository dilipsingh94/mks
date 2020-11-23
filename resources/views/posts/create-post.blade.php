@extends('layout.admin_Main')
@section('content')
    <div class="container-fluid mt-3">
        <div class="row" style="padding: 2%">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header rounded bg-info" style="font-size: 20px; color: white; font-weight: bold;">Create New Post</div>
                    <div class="card-body">
                        <div class="col-sm-12">
                            <form role="form" method="POST" action="{{url('blogpost/store')}}" enctype="multipart/form-data">
                                {{ csrf_field()}}
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="writer">Author </label>
                                            {{-- <input type="text" class="form-control" value="{{\Auth::user()->name}}" name="writer" required readonly>  --}}
                                            <input type="text" class="form-control" name="writer" required> 
                                        </div>
                                    </div>
                
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="category">Category</label>
                                            <input type="text" class="form-control form-control-line" placeholder="Enter Category" name="category" required>
                                        </div> 
                                    </div>
                                    
                                </div> 
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="posttitle">Title</label>
                                            <input type="text" class="form-control" placeholder="Enter Post title" maxlength="100" name="posttitle" required> 
                                        </div>
                                    </div>
                                </div>
                
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="description">Short Descrption</label>
                                            <input type="text" class="form-control form-control-line" placeholder="Enter Description" maxlength="150" name="description" required>
                                        </div> 
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-12"> 
                                        <div class="form-group">
                                            <label>Thumbnail Image</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="form-control" id="thumbnail" name="thumbnail" required>
                                                    {{-- <label class="custom-file-label" for="inputGroupFile01">Choose Thumbnail to upload</label> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="blog">Type your content</label>
                                            <textarea class="form-control" rows="5" placeholder="Write Content" name="blog" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="display: block; text-align: center;">
                                    <button type="submit" class="btn btn-info rounded text-center shadow" >Submit</button>
                                    <a href="{{ route('post.list') }}" class="btn btn-danger shadow rounded text-center" style="margin-left: 10px;">Cancel</a>
                                </div>
                            </form>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ route('post.list') }}" class="float">
            <i class="fa fa-reply my-float"></i>
        </a>
    </div>
@endsection