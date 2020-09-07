@extends('layouts.AdminDashboard')

@section('rest_password')

<main>

    <!-- Section -->
    <section class="vh-lg-100 bg-soft d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center form-bg-image">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="signin-inner my-3 my-lg-0 bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                        <h1 class="h3 mb-4">Reset password</h1>
                        <form  method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

                            <!-- Form -->
                            <div class="mb-4">
                                <label for="email">Your Email</label>
                                <div class="input-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>  
                            </div>
                            <!-- End of Form -->

                            <!-- Form -->
                            <div class="mb-4">
                                <label for="password">Your Password</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon4"><span class="fas fa-unlock-alt"></span></span>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>  
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="confirm_password">Confirm Password</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon5"><span class="fas fa-unlock-alt"></span></span>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>  
                            </div>
                            <!-- End of Form -->
                            <button type="submit" class="btn btn-block btn-primary">Reset password</button>
                        </form>
                        <div class="d-flex justify-content-center align-items-center mt-4">
                            <span class="font-weight-normal">
                                Go back to the
                                <a href="{{url('auth/login')}}" class="font-weight-bold">login page</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
