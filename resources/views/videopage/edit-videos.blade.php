@extends('layout.master')
@section('content')
<div class="site-section bg-light">
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <div class="card card-body shadow">
                    <h2 class="card-title">Update Content</h2>
                    <form class="form-horizontal m-t-40" method="post" action="/video/update/{{$newvideo->id}}">
                        {{ csrf_field()}}
                        {{method_field('PUT')}}
                        {{-- <input type="hidden" name="id" value="{{$newvideo->id}}"> --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Videotitle">Video Title</label>
                                <input type="text" class="form-control form-control-line" placeholder="Enter Subheading" value="{{$newvideo->videotitle}}" name="videotitle">
                                </div> 
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="uploadername">Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Name" value="{{$newvideo->uploadername}}" name="uploadername"> 
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Link">Enter Embed ID</label>
                                    <input type="text" class="form-control form-control-line" placeholder="Enter Link" value="{{$newvideo->embedlink}}" name="embedlink">
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description">Video Description</label>
                                    <textarea class="form-control" rows="5" placeholder="Write a Description" name="description" >{{$newvideo->description}}</textarea>
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