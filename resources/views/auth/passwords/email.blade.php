@extends('layouts.AdminDashboard')
<style>
.red_more{

    width: 300px;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 2;
  overflow: hidden;
}
.alert{
    margin-bottom: 0rem;
}
.alert-success{
    color: black!important;

}
.alert-danger{
    color: black!important;

}

.alert {
padding: 0rem 1rem!important;
}
.aanapssen{
    text-align: center;
    font-weight: 700;
}
</style>
@section('rest_password_with_email')

<main>

<!-- Section -->
<section class="vh-lg-100 bg-soft d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center form-bg-image">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div class="signin-inner my-3 my-lg-0 bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                    <h1 class="h3">Forgot your password?</h1>
                    <p class="mb-4">Don't fret! Just type in your email and we will send you a code to reset your password!</p>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                        <!-- Form -->
                        <div class="mb-4">
                            <label for="email">Your Email</label>
                            <div class="input-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror  
                        </div>
                        <!-- End of Form -->
                        <button type="submit" class="btn btn-block btn-primary">Recover password</button>
                    </form>
                    <div class="d-flex justify-content-center align-items-center mt-4">
                        <span class="font-weight-normal">
                            Go back to the
                            <a href="./sign-in.html" class="font-weight-bold">login page</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
@endsection
