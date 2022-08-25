@extends('layouts.admin')

@section('content')

<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" > Add Outlet</button>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Department</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
      <div class="modal-body">
        <div class="card">
          <div class="card-header">Please Input New Status</div>

          <form action="{{route('store.out')}}" method="POST" enctype="multipart/form-data>
            @csrf
            
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('name')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Phone</label>
              <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('name')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Latitude</label>
              <input type="number" name="latitude" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" step=any>
              @error('name')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Longitude</label>
              <input type="number" name="longitude" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" step=any>
              @error('name')
              <span class="alert alert-danger">{{$message}}</span>
              @enderror

            </div>
            <div class="col-md-4">
            <label for="Choose Image"><b>Image</b></label>
             <br> 
            <input type="file"  name="image">
        </div>




<br> <br>

            <button type="submit" class="btn btn-primary">Add </button>

          </form>



        </div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add </button>
      </div> -->
    </div>
  </div>
</div>


<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
<div class="container">
  <div class="row">
    <div class="col-md-10">
      @if(Session('success'))
      <div class="alert alert-success" role="alert">
        {{Session('success')}}
      </div>


      @endif
      <div class="card">
        <div class="card-header">
          Outlet

        </div>


    <table class="table">
<thead>
<tr>
<th scope="col">SL</th>
<th scope="col">Name</th>
<th scope="col">Phone</th>
<th scope="col">Latitude</th>
<th scope="col">Longitude</th>
<th scope="col">Image</th>
<th scope="col">Action</th>


</tr>
</thead>
<tbody>


@php($i=1)
@foreach($outlets as $outlet)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{ $outlet->name }}</td>
                    <td>{{ $outlet->phone }}</td>
                    <td>{{ $outlet->latitude }}</td>
                    <td>{{ $outlet->longitude }}</td>
                    <td>
                      <img src="{{ asset('asset/upload/outlet/'.$outlet->image) }}" class="cat-img" alt="Image Here">
                    </td>
                    <td> <a href="{{route('edit.out',$outlet->id)}}">
                      <button class="btn btn-primary">   Edit </button> </a>
                      <a href="{{route('delete.out',$outlet->id)}}">
                      <button class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
@endforeach

</tbody>
</table>

</div>

</div>




</div>
</div>
    </div>
</div>







@endsection