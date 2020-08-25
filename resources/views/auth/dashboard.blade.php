@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                        <br>
                        Welcome : {{ Auth::user()->name }}

                        <div class="links">
                            <a href="#">All student</a><br>
                            <a href="#">add</a><br>
                            <a href="#">Remove</a><br>
                            
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('auth/login')}}" style="color: rgb(0 152 212);font-size: 18px;font-weight: 700;">Login</a>
                            </li>
                            @if (url('auth/register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('auth/register')}}" style="color: rgb(0 152 212);font-size: 18px;font-weight: 700;"> Register </a>
                                </li>
                            @endif
                        @else

                        <a href="{{url('auth/login')}}" > Logout</a>
                        @endguest
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection