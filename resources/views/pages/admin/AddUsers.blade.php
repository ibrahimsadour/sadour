@extends('layouts.app')

@section('add-adata')

<div class="row">
 <div class="col-md-12" style="max-width: 50%;"> 
  <br />
  <h3 aling="center">Add User</h3>
  <br />
  @if(count($errors) > 0)
  <div class="alert alert-danger">
   <ul>
   @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
   </ul>
  </div>
  @endif
  @if(\Session::has('success'))
  <div class="alert alert-success">
   <p>{{ \Session::get('success') }}</p>
  </div>
  @endif

    <form method="post" action="{{url('auth/dashboard/admin')}}">
        {{csrf_field()}}
        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="name" />
        </div>

        <div class="form-group">
            <input type="text" name="description" class="form-control" placeholder="description" />
        </div>

        <div class="form-group">
            <input type="text" name="keywords" class="form-control" placeholder="keywords" />
        </div>

        <div class="form-group">
            <input type="text" name="date" class="form-control" placeholder="date of birth" />
        </div>

        <div class="form-group">
            <input type="text" name="Address" class="form-control" placeholder="Address" />
        </div>

        <div class="form-group">
            <input type="text" name="Email" class="form-control" placeholder="Email" />
        </div>

        <div class="form-group">
            <input type="text" name="Phone" class="form-control" placeholder="Phone" />
        </div>

        <div class="form-group">
            <input type="text" name="function" class="form-control" placeholder="function" />
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" />
        </div>
    </form>
 </div>
</div>
@endsection