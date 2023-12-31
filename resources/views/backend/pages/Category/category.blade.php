@extends('backend.master')
@section('content')

<div class="container">
    <h2>Category Item</h2>
    <br>
    <a class="btn btn-success" href="{{route('category.form')}}">Add Fish Category</a>
 <br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Status</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($category as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->name}}</td>
      <td>
        <img width="50px";height="50px"; src="{{url('/uploads/'.$item->image)}}" alt="">
      </td>
      <td>{{$item->status}}</td>
      <td>{{$item->description}}</td>
      
   
<td>
<a class="btn btn-info" href="">View</a>
<a class="btn btn-warning" href=""> Edit</a>
<a class="btn btn-danger" href="">Delete</a>
</td>
</tr>
    @endforeach
    
    
  </tbody>
</table>

{{$category->links()}}


</div>


@endsection