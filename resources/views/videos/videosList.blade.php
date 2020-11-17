@extends('layout.admin_Main')
@section('content')
<style>
    .text12 {
        font-size: 13px;
    }
</style>
<div class="site-section bg-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Videos Details</h4>
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

                        @if(\Session::has('success'))
                            <div class="success alert-success alert-dismissable">
                                <p>{{\Session::get('success')}}</p>
                            </div>
                        @endif 
                        
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="card shadow rounded m-t-10 m-b-10">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col align-self-center">
                                                <img src="{{ asset('images/video.png')}}" width="50%" class="img-fluid rounded"  id="thumbnailimg">
                                                {{-- <i class="fa fa-film fa-4x bg-info text-white" style="padding: 10px; border-radius: 15px" aria-hidden="true"></i> --}}
                                            </div>
                                            <div class="col m-l-10 align-self-center">
                                                <h6 class="text-muted m-b-0">Total Videos</h6>
                                                <h4 class="m-b-0">{{$video ->count('$id')}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 text-right">
                                <a href="{{ route('video.add') }}" class="btn btn-info btn-sm rounded shadow mt-5 ml-5"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Create New Video</a>
                            </div>
                        </div>
                        <hr class="border border-info">
                        <div class="table-responsive m-t-20">
                            <table id="table" data-toggle="table" data-search="true" data-id-field="id" data-pagination="true" data-page-list="[10, 25, 50, 100, all]" >
                                <thead>
                                    <tr>
                                        <th>S.N</th>
                                        <th id="post">Title</th>
                                        <th id="writer_name">Author</th>
                                        <th id="description">Decription</th>
                                        <th id="embed_id">Link</th>
                                        <th id="created_date">Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($video as $vdo)
                                    <tr>
                                        <td class="text12">{{ $vdo->id }}</td>
                                        <td class="text12">{{ $vdo->videotitle }}</td>
                                        <td class="text12">{{ $vdo->uploadername }}</td>
                                        <td class="text12">{{ $vdo->description }}</td>
                                        <td class="text12">{{ $vdo->embedlink }}</td>
                                        <td class="text12">{{ $vdo->created_at->format('d-m-Y') }}</td>
                                        <td>
                                            <div class="btn btn-sm btn-group">
                                                <button type="button" class="btn btn-danger btn-sm rounded shadow dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item text12" href="{{ url('video/'.$vdo->id.'/edit') }}">Edit</a>
                                                    <a class="dropdown-item text12"  href="{{ url('video/'.$vdo->id.'/delete') }}">Delete</a>
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
    <a href="{{ url('home') }}" class="float">
        <i class="fa fa-reply my-float"></i>
    </a>
</div>
@endsection
                                    
               
            
                
                
                

                            

    
