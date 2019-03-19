<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>farmCrud Application</title>
    <link href="{{ asset('css/mycss.css') }}" rel="stylesheet" type="text/css" />
     <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
    {{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>--}}
    {{--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>--}}


</head>
<body>
  <div class="container">
    @yield('form')
  </div>
  
  {{--  --}}
 
    
</body>
</html>