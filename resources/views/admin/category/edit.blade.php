@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        <h1>Edit Category</h1>
    </div>
    <div class="row">
        <div class="col-md-8">
          {{-- @if(Session('success'))
          <div class="alert alert-success" role="alert">
            {{Session('success')}}
          </div>
           @endif --}}
  <div class="card-body">
    <form action="{{url('update_cat/'.$categories->id)}}" method="POST" enctype="multipart/form-data">
   @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for=""><b> Name:</b></label>
            <input type="text" value="{{$categories->name}}" class="form-control" name="name">
        </div>
         <div class="col-md-6 mb-3">
            <label for=""><b> Phone</b></label>
            <input type="text" value="{{$categories->phone}}" class="form-control" name="phone">
        </div>
         <div class="col-md-6 mb-3">
            <label for=""><b> Latitude</b></label>
            <input type="number" step=any value="{{$categories->latitude}}" class="form-control" name="latitude">
        </div>
         <div class="col-md-6 mb-3">
            <label for=""><b> Longitude</b></label>
            <input type="number" step=any value="{{$categories->longitude}}" class="form-control" name="longitude">
        </div>
        
        @if ($categories->image)
            <img src="{{ asset('asset/upload/category/'.$categories->image) }}" alt="Image Here">

        @endif

        <div class="col-md-12">
            <label for=""><b>Image</b></label>
             <br> 
            <input type="file"   name="image">
        </div>
        
        <div class="col-md-12">
            <br><br>
            <button type="submit" class="btn-btn-primary">Submit</button>
        </div>
    </div>
    </form>

  </div>

</div>




@endsection