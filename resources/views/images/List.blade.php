@extends('layouts.layout')
   
@section('content')
  <a href="{{ route('image.create') }}" class="btn btn-success mb-2">Add</a> 
  <br>
   <div class="row">
        <div class="col-12">
          
          <table class="table table-bordered" id="laravel_crud">
           <thead>
              <tr>
                 <th>Id</th>
                 <th>Title</th>
                 <th>image Code</th>
                 <th>Description</th>
                 <th>images</th>
                 <th>Created at</th>
                 <td colspan="2">Action</td>
              </tr>
           </thead>
           <tbody>
              @foreach($images as $image)
              <tr>
                 <td>{{ $image->id }}</td>
                 <td>{{ $image->title }}</td>
                 <td>{{ $image->image_code }}</td>
                 <td>{{ $image->description }}</td>
                 <td><img src="public/img/avatar.jpg" alt="{{ $image->image_code }}" width="50" height="50"></td>
                 <td>{{ date('Y-m-d', strtotime($image->created_at)) }}</td>
                 <td><a href="{{ route('image.edit',$image->id)}}" class="btn btn-primary">Edit</a></td>
                 <td>
                 <form action="{{ route('image.destroy', $image->id)}}" method="post">
                  {{ csrf_field() }}
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                </td>
              </tr>
              @endforeach
           </tbody>
          </table>
       </div> 
   </div>
 @endsection