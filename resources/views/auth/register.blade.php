@extends('layout.mks_Main')
@section('content')
<div class="container">
    <div class="col-md-12 text-right">
        <div class="card-body card-rounded">
            <h6 class="card-header" style="background-color: aliceblue;">
                <a href="{{ url('login') }}"><i class="fa fa-lock"></i> Login</a>
            </h6>
        </div>
    </div>
    <div class="row justify-content-center" style="padding: 3%">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-info"> <i class="fa fa-user-plus fa-2x"></i> &nbsp; Register Here</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right text-info">Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control rounded @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right text-info">E-mail Address</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control rounded @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="avtar" class="col-md-4 col-form-label text-md-right text-info">Upload Photo</label>
                            <div class="col-md-6">
                                <input id="avtar" type="file" class="form-control rounded @error('avtar') is-invalid @enderror" name="avtar" required>
                                @error('avtar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right text-info">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control rounded @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right text-info">{{ __('Confirm Password') }}</label>                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control rounded" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-sm rounded">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ url('login') }}" class="float">
        <i class="fa fa-reply my-float"></i>
    </a>
</div>
@endsection
