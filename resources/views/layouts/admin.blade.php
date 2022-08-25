<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <!-- Styles -->
        

        <!-- Scripts -->
         <!-- Scripts -->
         
       <link rel="stylesheet" href="{{ asset('admin/css/material-dashboard.css') }}">

        <!-- Scripts -->
       
    </head>
    <body>
        <div class="wrapper">
            @include('layouts.inc.sidebar')
            <div class="main-panel">
                @include('layouts.inc.adminnav')
                <div class="content">
                    @yield('content')
                </div>
                @include('layouts.inc.adminfooter')
            </div>
        </div>


       <script src="{{ asset('admin/js/jquery.min.js') }}" defer ></script>
  <script src="{{ asset('admin/js/popper.min.js') }}" defer ></script>
  <script src="{{ asset('admin/js/bootstrap-material-design.min.js') }}" defer ></script>
  <script src="{{ asset('admin/js/perfect-scrollbar.jquery.min.js') }}" defer ></script>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  @yield('scripts')
    </body>
</html>
