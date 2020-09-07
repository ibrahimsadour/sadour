@extends('layouts.AdminDashboard')

@section('verify_login_user')

    <!-- Section -->
    <section class="vh-lg-100 d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center form-bg-image" data-background-lg="{{asset('admin_dashboard/assets/img/illustrations/signin.svg') }}">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="signin-inner my-3 my-lg-0 bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                            <h1 class="mb-0 h3">Verify Your Email Address</h1>
                        
                        <br>
                        <p class="mb-4">Before proceeding, please check your email for a verification link.</p>

                        <div class="mb-4">
                            <label for="email">If you did not receive the email</label>
                            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                @csrf
                                <button type="submit" class="btn btn-link p-0 m-0 align-baseline" style="color: blue;">click here to request another</button>.
                            </form> 
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
