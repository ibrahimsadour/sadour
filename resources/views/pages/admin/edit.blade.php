@extends('layouts.app')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3>Edit all text of the Site</h3>
  <br />
  @if(count($errors) > 0)

  <div class="alert alert-danger">
         <ul>
         @foreach($errors->all() as $error)
          <li>{{$error}}</li>
         @endforeach
         </ul>
  @endif
  <form method="post" action="{{action('Admin\AdminAddUsersController@update',['admin' => $website_strings->id])}}">
   {{csrf_field()}}
   {{ method_field('PATCH') }}
   <div class="form-group">
    <input type="text" name="name" class="form-control" value="{{$website_strings->name}}" placeholder="Enter name" />
   </div>
   <div class="form-group">
    <input type="text" name="description" class="form-control" value="{{$website_strings->description}}" placeholder="Enter description" />
   </div>
   <div class="form-group">
    <input type="text" name="keywords" class="form-control" value="{{$website_strings->keywords}}" placeholder="Enter keywords" />
   </div>
   <div class="form-group">
    <input type="text" name="date" class="form-control" value="{{$website_strings->date}}" placeholder="Enter date" />
   </div>


   <div class="form-group">
    <input type="text" name="Address" class="form-control" value="{{$website_strings->Address}}" placeholder="Enter Address" />
   </div>

   <div class="form-group">
    <input type="text" name="Email" class="form-control" value="{{$website_strings->Email}}" placeholder="Enter Email" />
   </div>

   <div class="form-group">
    <input type="text" name="Phone" class="form-control" value="{{$website_strings->Phone}}" placeholder="Enter Phone" />
   </div>

   <div class="form-group">
    <input type="text" name="function" class="form-control" value="{{$website_strings->function}}" placeholder="Enter function" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Edit" />
   </div>
  </form>
 </div>
</div>

@endsection