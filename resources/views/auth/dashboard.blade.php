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
                            @role('user|writer')
                            <a href="#">write post</a><br>
                            @endrole

                            @role('writer')
                            <a href="#">edit post</a><br>
                            <a href="#">see all post</a><br>
                            <a href="{{url('auth/dashboard/admin/create')}}">Add user</a><br>
                            <a href="{{url('auth/dashboard/admin')}}">All users</a><br>

                            @endrole

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

                        <a href="{{url('auth/logout')}}" > Logout</a>
                        
                        @endguest
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection