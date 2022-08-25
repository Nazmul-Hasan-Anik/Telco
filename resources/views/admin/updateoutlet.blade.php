@extends('layouts.admin')

@section('content')

<div class="py-12">



<div class="container">
  <div class="row">

    <div class="col-md-8">


    <div class="card">
      <div class="card-header">Edit </div>
      <form action="{{route('update.out',$outlets->id)}}" method="post" enctype="multipart/form-data">
        @csrf

        
        <div class="form-group">
          <label for="exampleInputEmail1"> Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$outlets->name}}">

        </div>
        <div class="form-group">
          <label for="exampleInputEmail1"> Phone</label>
          <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$outlets->phone}}">

        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Latitude</label>
          <input type="number" name="latitude" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$outlets->latitude}}">

        </div>
        <div class="form-group">
          <label for="exampleInputEmail1"> Name</label>
          <input type="number" name="longitude" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$outlets->longitude}}">

        </div>
        
        

        <button type="submit" class="btn btn-primary">Update Outlet</button>


      </form>



</div>
</div>
  </div>

</div>
</div>

@endsection