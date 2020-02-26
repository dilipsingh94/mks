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
                        Add New Audio
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
                            {{--  --}}
                        <form role="form" method="POST" action="{{url('/audio/audiostore')}}" >
                                {{ csrf_field()}}
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="audiotitle">Audio Title</label>
                                            <input type="text" class="form-control form-control-line" placeholder="Enter Audio Title" name="audiotitle">
                                        </div> 
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Uploader Name </label>
                                            <input type="text" class="form-control" placeholder="Enter Your Name" name="uploadername"> 
                                        </div>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="Link">Embed Link</label>
                                            <input type="text" class="form-control form-control-line" placeholder="Enter Link " name="embedlink">
                                        </div> 
                                    </div>
                                </div>
                                {{-- <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="posttitle">  </label>
                                            <input type="text" class="form-control" placeholder="Enter Post title" name="posttitle"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12"> 
                                        <div class="form-group">
                                            <label>Thumbnail Image</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01" name="thumbnail">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose Thumbnail to upload</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="description">audio Description</label>
                                            <textarea class="form-control" rows="5" placeholder="Write A Description" name="description"></textarea>
                                        </div>
                                    </div>
                                </div> --}}
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
                        <h2 class="card-title">Audio Details</h2>
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
                                            <div class="round align-self-center round-info "><i class="fa fa-volume-up" aria-hidden="true"></i>
                                            </div>
                                            <div class="m-l-10 align-self-center">
                                                <h6 class="text-muted m-b-0">Total Audio</h6>
                                            <h5 class="m-b-0">{{$newaudio->count('$id')}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <button class="btn btn-info btn-md mt-5" data-toggle="modal" data-target="#myModalNorm" >
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;Add New Audio
                                </button>
                            </div>
                        </div>
                        <div class="table-responsive m-t-10">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width:100px;">SNo.</th>
                                        <th>Audio Title</th>
                                        <th>Uploader Name</th>
                                        {{-- <th>Embed ID</th> --}}
                                        <th >Created At</th>
                                        <th style="width:180px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($newaudio as $audio)
                                    <tr>
                                        <td>{{$audio->id}}</td>
                                        <td>{{$audio->audiotitle}}</td>
                                        <td>{{$audio->uploadername}}</td>
                                        {{-- <td>{{$audio->embedlink}}</td> --}}
                                        <td>{{$audio->created_at->format('d-m-Y')}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item " href="/edit/audio/{{$audio->id}}" >Edit</a>
                                                    <a class="dropdown-item"  href="/audio/delete/{{$audio->id}}" >Delete</a>
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