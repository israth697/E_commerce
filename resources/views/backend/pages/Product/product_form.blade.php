@extends('backend.master')
@section('content')
@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
    @endif
<div class="container">
  <h2>Input The Product Details</h2>
  <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
    @csrf
  @if($errors->any())
        @foreach($errors->all() as $error)
          <p class="alert alert-danger">{{$error}}</p>
        @endforeach
    @endif

    
  
  <div class="form-group">
    <label for="">Name</label>
    <input type="name" name="name" class="form-control" id=""  placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="">Product Image</label>
    <input type="file" name="image" class="form-control" id=""  placeholder="upload the image">
  </div>
  <div class="form-group">
    <label for="">Description</label>
    <input type="text" name="description" class="form-control" id=""  placeholder="Enter the weapon description">
  </div>
<br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>


@endsection
