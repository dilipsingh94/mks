@extends('layout.admin_Main')
@section('content')
    <div class="container-fluid mt-3">
        <div class="row" style="padding: 2%">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header rounded bg-info" style="font-size: 20px; color: white; font-weight: bold;">Post New Video</div>
                    <div class="card-body">                        
                        <div class="col-12">
                            <form role="form" method="POST" action="{{ route('video.store') }}" >
                                {{ csrf_field()}}
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Author</label>
                                            <input type="text" class="form-control" name="uploadername" value="{{ \Auth::user()->name }}" required readonly> 
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="videotitle">Video Title</label>
                                            <input type="text" class="form-control form-control-line" placeholder="Enter Video Title" name="videotitle">
                                        </div> 
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="Link">Embed Link</label>
                                            <input type="text" class="form-control form-control-line" placeholder="Enter Link " name="embedlink" required>
                                        </div> 
                                    </div>
                                </div>                                
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="description">Video Description</label>
                                            <textarea class="form-control" rows="5" placeholder="Write A Description" name="description" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="display: block; text-align: center;">
                                    <button type="submit" class="btn btn-info rounded text-center shadow" >Submit</button>
                                    <a href="{{ route('videos.list') }}" class="btn btn-danger shadow rounded text-center" style="margin-left: 10px;">Cancel</a>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <a href="{{ route('videos.list') }}" class="float">
            <i class="fa fa-reply my-float"></i>
        </a>
    </div>
@endsection