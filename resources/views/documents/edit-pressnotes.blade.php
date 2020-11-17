@extends('layout.admin_Main')
@section('content')
    <div class="container-fluid mt-3">
        <div class="row" style="padding: 2%">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header rounded bg-info" style="font-size: 20px; color: white; font-weight: bold;">Edit Pressnote</div>
                    <div class="card-body">                        
                        <div class="col-12">
                            <form role="form" method="POST" action="{{ url('document/update/'.$docs->id) }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="uploader name">Author</label>
                                            <input type="text" class="form-control" name="uploadername" value="{{ \Auth::user()->name }}" required readonly> 
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="documenttitle">Document Name</label>
                                            <input type="text" class="form-control form-control-line" placeholder="Enter Document Name" value="{{ $docs->documenttitle }}" name="documenttitle" required>
                                        </div> 
                                    </div>
                                    <div class="col-sm-12"> 
                                        <div class="form-group">
                                            <label>Document File</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01" name="documentfile" required>
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose File to upload</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                                <div class="row" style="display: block; text-align: center;">
                                    <button type="submit" class="btn btn-info rounded text-center shadow" >Submit</button>
                                    <a href="{{ route('pressnote.list') }}" class="btn btn-danger shadow rounded text-center" style="margin-left: 10px;">Cancel</a>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <a href="{{ route('pressnote.list') }}" class="float">
            <i class="fa fa-reply my-float"></i>
        </a>
    </div>
@endsection