@extends('layout.master')
@section('content')
<div class="site-section bg-light">
    <!-- Modal -->
    <div class="modal fade" id="myModalNorm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" id="modal">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">
                        Create New Blog
                    </h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <form role="form" method="POST" action="{{url('/contentupload/blogstore')}}" enctype="multipart/form-data">
                                {{ csrf_field()}}
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="category">Category</label>
                                            <input type="text" class="form-control form-control-line" placeholder="Enter Category" name="category" required>
                                        </div> 
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="writer">Blog Writer </label>
                                            <input type="text" class="form-control" placeholder="Enter Your Name" name="writer" required> 
                                        </div>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="Link">Enter Link</label>
                                            <input type="text" class="form-control form-control-line" placeholder="Enter Link " name="link" required>
                                        </div> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="posttitle">Post Title  </label>
                                            <input type="text" class="form-control" placeholder="Enter Post title" maxlength="100" name="posttitle" required> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12"> 
                                        <div class="form-group">
                                            <label>Thumbnail Image</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01" name="thumbnail" required>
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose Thumbnail to upload</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="blog">Blog</label>
                                            <textarea class="form-control" rows="5" placeholder="Write A Blog(max 150 words)" maxlength="150" name="blog" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success" >Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="/home" class="btn btn-info ml-4">Back</a>
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Blog Details</h2>
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
                        {{-- <h6 class="card-subtitle"></h6> --}}
                        @if(\Session::has('success'))
                        <div class="success alert-success">
                            <p>{{\Session::get('success')}}</p>
                        </div>
                        @endif 
                        <div class="row">
                            <div class="col-sm-10">
                                <div class="card m-t-15" style="width:300px;">
                                    <div class="card-body">
                                        <div class="d-flex flex-row">
                                            <div class="round align-self-center round-info "><i class="fa fa-rss" aria-hidden="true"></i>
                                            </div>
                                            <div class="m-l-10 align-self-center">
                                                <h6 class="text-muted m-b-0">Total Blogs</h6>
                                                <h5 class="m-b-0">{{$newblog ->count('$id')}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <button class="btn btn-info btn-md mt-5 ml-5" data-toggle="modal" data-target="#myModalNorm" >
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;Create Blog
                                </button>
                            </div>
                        </div>
                        <div class="table-responsive m-t-10">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>SNo.</th>
                                        <th id="post">Post Title</th>
                                        <th>Category</th>
                                        {{-- <th id="link">Link</th> --}}
                                        <th id="writer_name">Writer</th>
                                        <th id="created_date">Created At</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($newblog as $blog)
                                    <tr>
                                        <td>{{$blog->id}}</td>
                                        <td>{{$blog->posttitle}}</td>
                                        <td>{{$blog->category}}</td>
                                        {{-- <td >{{$blog->link}}</td> --}}
                                        <td>{{$blog->writer}}</td>
                                        <td>{{$blog->created_at->format('d-m-Y')}}</td>
                                        <td>
                                            {{-- <a href="/edit/{{$blog->id}}" class="btn btn-success" style="float:left;">Edit</a>
                                            <a href="/blog/delete/{{$blog->id}}" class="btn btn-danger"  style="float:right;">Delete</a> --}}
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item " href="/edit/blog/{{$blog->id}}" >Edit</a>
                                                    <a class="dropdown-item"  href="/blog/delete/{{$blog->id}}">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>
@endsection
                                    
               
            
                
                
                

                            

    
