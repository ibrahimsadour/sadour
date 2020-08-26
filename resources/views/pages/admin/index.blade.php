@extends('layouts.app')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3 align="center"> Data </h3>
  <br />
  @if($message = Session::get('success'))
  <div class="alert alert-success">
   <p>{{$message}}</p>
  </div>
  @endif
  <div align="right">
  
   <a href="{{url('auth/dashboard/admin/create')}}" class="btn btn-primary">Toevoegen</a>

   <br />
   <br />
  </div>
  <table class="table table-bordered table-striped">
   <tr>
   <th>Id</th>
    <th>name</th>
    <th>description</th>
    <th>keywords</th>
    <th>date</th>
    <th>Address</th>
    <th>Email</th>
    <th>Phone</th>
    <th>function</th>
    <th>Edit</th>
   </tr>
   @foreach($website_strings as $row)
   <tr>
   <td>{{$row['id']}}</td>
    <td>{{$row['name']}}</td>
    <td>{{$row['description']}}</td>
    <td>{{$row['keywords']}}</td>
    <td>{{$row['date']}}</td>
    <td>{{$row['Address']}}</td>
    <td>{{$row['Email']}}</td>
    <td>{{$row['Phone']}}</td>
    <td>{{$row['function']}}</td>
    <td><a href="{{action('Admin\AdminAddUsersController@edit', $row['id'])}}" class="btn btn-warning">Bewerken</a></td>

 
    <td>
   
    </td>
   </tr>
   @endforeach
  </table>
 </div>
</div>

@endsection