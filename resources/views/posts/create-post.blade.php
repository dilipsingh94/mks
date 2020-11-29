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
                            <form role="form" method="POST" id="blog-form" action="{{url('blogpost/store')}}" enctype="multipart/form-data">
                                {{ csrf_field()}}
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="writer">Author </label>
                                            {{-- <input type="text" class="form-control" value="{{\Auth::user()->name}}" name="writer" required readonly>  --}}
                                            <input type="text" class="form-control" name="writer" id="writer" required> 
                                        </div>
                                    </div>
                
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="category">Category</label>
                                            <input type="text" class="form-control form-control-line" placeholder="Enter Category" name="category" id="category" required>
                                        </div> 
                                    </div>
                                    
                                </div> 
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="posttitle">Title</label>
                                            <input type="text" class="form-control" placeholder="Enter Post title" maxlength="100" name="posttitle" id="posttitle" required> 
                                        </div>
                                    </div>
                                </div>
                
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="description">Short Descrption</label>
                                            <input type="text" class="form-control form-control-line" placeholder="Enter Description" maxlength="150" name="description" id="description" required>
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
                                            <textarea class="form-control" rows="5" placeholder="Write Content" name="blog" id="blog" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="display: block; text-align: center;">
                                    <button type="button" class="btn btn-info rounded text-center shadow" id="previewBtn" data-toggle="modal" data-target=".bd-example-modal-lg">Preview</button>
                                    {{-- <button type="submit" class="btn btn-info rounded text-center shadow" >Submit</button> --}}
                                    <a href="{{ route('post.list') }}" class="btn btn-danger shadow rounded text-center" style="margin-left: 10px;">Cancel</a>
                                </div>

                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            {{-- <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Post Preview</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div> --}}
                                            <div class="modal-body">
                                                <div class="col-sm-12">
                                                    <div class="row blog-entries element-animate">
                                                        {{ csrf_field() }}
                                                        <div class="col-sm-12 main-content">            
                                                            <div class="post-content-body">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-2">
                                                                        <h2 id="modalposttitle"></h2>
                                                                        <img src="" alt="Post Image" id="modalthumbnail" class="img-fluid rounded">
                                                                    </div>
                                                                </div>
                                                                <p class="post-category text-white bg-secondary" id="modalcategory"></p>
                                                                <h3 id="modaldescription"></h3>
                                                                <h4 id="modalwriter"></h4>
                                                                <p class="text-justify text-black" id="modalblog"></p>
                                                            </div>
                                                        </div>
                                                    </div>                                               
                                                </div>                                            
                                            </div>
                                            <div class="modal-footer" style="display: block ruby; text-align: center;">
                                                <button type="submit" class="btn btn-info rounded text-center shadow">Submit</button>
                                                <button type="button" class="btn btn-danger shadow rounded text-center" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
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