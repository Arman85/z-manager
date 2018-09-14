<!DOCTYPE html>
<html>
  <head>
    <title>Админ панель | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/mystyles.css') }}">
    <!-- Progress bar -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/icons/favicon.png')}}">
  </head>

  <body>

    <!-- Sidebar -->
    @include('backend.partials._header')

    <!-- Page Content -->
    <div style="margin-left:18%">

    @yield('content')
    
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script>
      $(document).ready(function(){
        @yield('scripts')
      });
      
    </script>
        
  </body>
</html>
