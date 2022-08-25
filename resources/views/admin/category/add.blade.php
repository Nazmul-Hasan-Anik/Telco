@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        <h1>Add Outlet</h1>
    </div>
    <div class="row">
        <div class="col-md-8">
          {{-- @if(Session('success'))
          <div class="alert alert-success" role="alert">
            {{Session('success')}}
          </div>
           @endif --}}
  <div class="card-body">
    <form action="{{ url('insert-categories') }}" method="POST" enctype="multipart/form-data">
   @csrf
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for=""><b> Name:</b></label>
            <input type="text" class="form-control" name="name">
        </div>
         <div class="col-md-6 mb-3">
            <label for=""><b> Phone</b></label>
            <input type="text" class="form-control" name="phone">
        </div>
        <div class="col-md-12 mb-3">
            <label for=""><b> Latitude</b></label>
             <input type="number" step=any class="form-control" name="latitude">
        </div>
        <div class="col-md-12 mb-3">
            <label for=""><b> Longitude</b></label>
           <input type="number" step=any class="form-control" name="longitude">
        </div>
       
        <div class="col-md-12">
            <label for=""><b>Image</b></label>
             <br> 
            <input type="file"  name="image">
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