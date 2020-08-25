@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <center><div class="card-header" style="color: rgb(0 152 212);font-size: 18px;font-weight: 700;"> Welcome, please sign in</div></center>
                <center><img src="/img/admin/login_img.png" alt="login_img"  width="200" height="300"></center>


                <div class="card-body">
                    <form method="POST" action="{{url('auth/post-login')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="identify" class="col-md-4 col-form-label text-md-right">Email Or Mobile</label>
                            <div class="col-md-6">
                                <input id="identify" type="text" class="form-control{{ $errors->has('mobile') || $errors->has('email') ? ' is-invalid' : '' }}" name="identify" value="{{ old('mobile') ?: old('email') }}" required autofocus>
                                @error('identify')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            
                        </div> 

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                 Login
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
