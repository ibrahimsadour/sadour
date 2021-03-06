@extends('layouts.AdminDashboard')


@section('login_form')
<main>
    <!-- Section -->
    <section class="vh-lg-100 d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center form-bg-image" data-background-lg="{{asset('admin_dashboard/assets/img/illustrations/signin.svg') }}">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="signin-inner my-3 my-lg-0 bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                        <div class="text-center text-md-center mb-4 mt-md-0">
                            <h1 class="mb-0 h3">Sign in to our platform</h1>

                        </div>
                        <form method="POST" action="{{url('auth/post-login')}}">
                        @csrf
                            <!-- Form -->
                            <div class="form-group mb-4">
                                <label for="identify">Your Email Or Mobile</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><span class="fas fa-envelope"></span></span>
                                    <input type="text" class="form-control {{ $errors->has('mobile') || $errors->has('email') ? ' is-invalid' : '' }}" placeholder="example@company.com" id="identify"  name="identify" value="{{ old('mobile') ?: old('email') }}" required autofocus>
                                </div>
                                @error('identify')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                            </div>
                            <!-- End of Form -->
                            <div class="form-group">
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="password">Your Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon2"><span class="fas fa-unlock-alt"></span></span>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    </div>  
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!-- End of Form -->
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck5">
                                        <label class="form-check-label" for="defaultCheck5">
                                            Remember me
                                        </label>
                                    </div>
                                    @if (Route::has('password.request'))
                                    <div><a href="{{ route('password.request') }}" class="small text-right">Lost password?</a></div>
                                    @endif
                                </div>
                            </div>
                            @if($message = Session::get('success'))
                                <div class="alert alert-danger">
                                <p class="aanapssen">{{$message}}</p>
                                </div>
                            @endif
                            <button type="submit" class="btn btn-block btn-primary">Sign in</button>
                        </form>
                        <div class="mt-3 mb-4 text-center">
                            <span class="font-weight-normal">or login with</span>
                        </div>
                        <div class="btn-wrapper my-4 text-center">
                            <a class="btn btn-icon-only btn-pill btn-outline-light text-facebook mr-2" href="{{url('auth/login/facebook')}}" aria-label="facebook button" title="facebook button">
                                <span aria-hidden="true" class="fab fa-facebook-f" style="position: relative;top: 8px;"></span>
                            </a>
                            <a class="btn btn-icon-only btn-pill btn-outline-light text-facebook mr-2" href="{{url('auth/login/linkedin')}}" aria-label="linkedin button" title="google button">
                                <span aria-hidden="true" class="fab fa-linkedin" style="position: relative;top: 8px;"></span>
                            </a>
                            <a class="btn btn-icon-only btn-pill btn-outline-light text-google mr-2" href="{{url('auth/login/google')}}" aria-label="google button" title="google button">
                                <span aria-hidden="true" class="fab fa-google" style="position: relative;top: 8px;"></span>
                            </a>
                            <a class="btn btn-icon-only btn-pill btn-outline-light text-github" href="{{url('auth/login/github')}}"   aria-label="github button" title="github button">
                                <span aria-hidden="true" class="fab fa-github" style="position: relative;top: 8px;"></span>
                            </a>
                        </div>
                        <div class="d-flex justify-content-center align-items-center mt-4">
                            <span class="font-weight-normal">
                                Not registered?
                                <a href="{{url('auth/register')}}" class="font-weight-bold">Create account</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


@endsection