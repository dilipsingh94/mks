@extends('layout.master')
@section('content')
<div class="site-section bg-light">
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <div class="card card-body shadow">
                    <h2 class="card-title">Update Content</h2>
                    <form class="form-horizontal m-t-40" method="post" action="/update/audio/{{$newaudio->id}}">
                        {{ csrf_field()}}
                        {{method_field('PUT')}}
                        {{-- <input type="hidden" name="id" value="{{$newaudio->id}}"> --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="auidotitle">Audio Title</label>
                                <input type="text" class="form-control form-control-line" placeholder="Enter Subheading" value="{{$newaudio->audiotitle}}" name="audiotitle">
                                </div> 
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="uploadername">Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Name" value="{{$newaudio->uploadername}}" name="uploadername"> 
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Link">Enter Embed ID</label>
                                    <input type="text" class="form-control form-control-line" placeholder="Enter Link" value="{{$newaudio->embedlink}}" name="embedlink">
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