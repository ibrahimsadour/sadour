@extends('layouts.AdminDashboard')

@section('register_form')
<main>
    <!-- Section -->
    <section class="vh-lg-100 d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center form-bg-image" data-background-lg="{{asset('admin_dashboard/assets/img/illustrations/signin.svg') }}">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="signin-inner my-3 my-lg-0 bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                        <div class="text-center text-md-center mb-4 mt-md-0">
                            <h1 class="mb-0 h3">Create an account</h1>
                        </div>
                        <form method="POST" action="{{url('auth/post-register')}}">
                        @csrf

                            <!-- Form  Name-->
                            <div class="form-group mb-4">
                                <label for="name">Your Naam</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon3"><span class="fas fa-user"></span></span>
                                    <input type="text" name="name" id="name"  class="form-control @error('name') is-invalid @enderror" placeholder="Enter Your Name"   value="{{ old('name') }}"  autocomplete="name" autofocus required>
                                </div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                            </div>


                            <!-- Form  Email-->
                            <div class="form-group mb-4">
                                <label for="email">Your Email</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon3"><span class="fas fa-envelope"></span></span>
                                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="example@company.com"    value="{{ old('email') }}" autocomplete="email"autofocus  required>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                            </div>


                            <!-- Form  Mobile-->
                            <div class="form-group mb-4">
                                <label for="mobile">Your Mobile</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon3"><span class="fas fa-phone"></span></span>
                                    <input type="text" id="mobile"  class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}"  placeholder="+123456789" autocomplete="mobile" autofocus required>
                                </div>
                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                            </div>

                            <!-- End of Password -->
                            <div class="form-group">
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="password">Your Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon4"><span class="fas fa-unlock-alt"></span></span>
                                        <input type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" required autocomplete="new-password">
                                    </div>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror  
                                </div>
                                <!-- End of Form -->

                                <!-- Form Confirm Password-->
                                <div class="form-group mb-4">
                                    <label for="confirm_password">Confirm Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon5"><span class="fas fa-unlock-alt"></span></span>
                                        <input type="password" placeholder="Confirm Password" class="form-control" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
                                    </div>  
                                </div>
                                <!-- End of Form -->
                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="checkbox" value="" id="terms" required>
                                    <label class="form-check-label" for="terms">
                                        I agree to the <a href="#">terms and conditions</a>
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-block btn-primary">Sign in</button>
                        </form>
                        <div class="mt-3 mb-4 text-center">
                            <span class="font-weight-normal">or</span>
                        </div>
                        <div class="btn-wrapper my-4 text-center">
                            <button class="btn btn-icon-only btn-pill btn-outline-light text-facebook mr-2" type="button" aria-label="facebook button" title="facebook button">
                                <span aria-hidden="true" class="fab fa-facebook-f"></span>
                            </button>
                            <button class="btn btn-icon-only btn-pill btn-outline-light text-twitter mr-2" type="button" aria-label="twitter button" title="twitter button">
                                <span aria-hidden="true" class="fab fa-twitter"></span>
                            </button>
                            <button class="btn btn-icon-only btn-pill btn-outline-light text-facebook" type="button" aria-label="github button" title="github button">
                                <span aria-hidden="true" class="fab fa-github"></span>
                            </button>
                        </div>
                        <div class="d-flex justify-content-center align-items-center mt-4">
                            <span class="font-weight-normal">
                                Already have an account?
                                <a href="{{url('auth/login')}}" class="font-weight-bold">Login here</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
