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
                       Upload Document
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
                            <form role="form" method="POST" action="{{url('/store/document')}}" enctype="multipart/form-data">
                                {{ csrf_field()}}
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="uploader name">Uploader Name </label>
                                            <input type="text" class="form-control" placeholder="Enter Your Name" name="uploadername" required> 
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="ppt title">Document Title</label>
                                            <input type="text" class="form-control form-control-line" placeholder="Enter Presentation title" name="documenttitle" required>
                                        </div> 
                                    </div>
                                </div> 
                                {{-- <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="embed Link">Enter Link</label>
                                            <input type="text" class="form-control form-control-line" placeholder="Enter Embed Link " name="documentlink" required>
                                        </div> 
                                    </div>
                                </div> --}}
                                {{-- <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="titlelink">Title Link </label>
                                            <input type="text" class="form-control" placeholder="Enter title Link" name="titlelink" required> 
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <div class="row">
                                    <div class="col-sm-12"> 
                                        <div class="form-group">
                                            <label>Thumbnail</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01" name="thumbnail" required>
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose Thumbnail to upload</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="row">
                                    <div class="col-sm-12"> 
                                        <div class="form-group">
                                            <label>Document file</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01" name="documentfile" required>
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose File to upload</label>
                                                </div>
                                            </div>
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
                        <h2 class="card-title">Document Details</h2>
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
                            <div class="col-lg-10">
                                <div class="card m-t-15" style="width:300px;">
                                    <div class="card-body">
                                        <div class="d-flex flex-row">
                                            <div class="round align-self-center round-info "><i class="fa fa-rss" aria-hidden="true"></i>
                                            </div>
                                            <div class="m-l-10 align-self-center">
                                                <h6 class="text-muted m-b-0">Total Document</h6>
                                                <h5 class="m-b-0">{{$newdocs->count('$id')}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <button class="btn btn-info btn-md mt-5 " data-toggle="modal" data-target="#myModalNorm" >
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;Add Document
                                </button>
                            </div>
                        </div>
                        <div class="table-responsive m-t-10">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>SNo.</th>
                                        <th id="post">Document Title</th>
                                        <th id="writer_name">Uploader Name</th>
                                        <th>Document</th>
                                        <th id="created_date">Created At</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($newdocs as $docs)
                                    <tr>
                                        <td>{{$docs->id}}</td>
                                        <td>{{$docs->documenttitle}}</td>
                                        <td>{{$docs->uploadername}}</td>
                                        <td>{{$docs->documentfile}}</td>
                                        <td>{{$docs->created_at->format('d-m-Y')}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item " href="/edit/{{$docs->id}}" >Edit</a>
                                                    <a class="dropdown-item"  href="/document/delete/{{$docs->id}}">Delete</a>
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
               