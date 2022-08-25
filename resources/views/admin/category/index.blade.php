@extends('layouts.admin')
@section('content')

      @if(Session('success'))
      <div class="alert alert-success" role="alert">
        {{Session('success')}}
      </div>


      @endif

<div class="card">
    <div class="card-header">
        <h4>Outlate</h4>
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Phone No</th>
                
                <th>Map</th>
                <th>Image</th>
                <th>Action</th>
            </thead>

            <tbody>
                @foreach ( $categories as $category )


                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->phone }}</td>
                    
                    <td><iframe src="{{ url('https://www.google.com/maps?q='.$category->latitude.','.$category->longitude.'&h1=es;z=14&output=embed') }}" frameborder="0"></iframe></td>
                    
                     <td>
                      <img src="{{ asset('asset/upload/category/'.$category->image) }}" class="cat-img" alt="Image Here">
                    </td>
                    <td> <a href="{{route('edit.cat',$category->id)}}">
                      <button class="btn btn-primary">   Edit </button> </a>
                      <a href="{{route('delete.cat',$category->id)}}">
                      <button class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>


    </div>

</div>




@endsection