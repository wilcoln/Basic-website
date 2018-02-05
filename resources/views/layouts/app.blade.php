<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--  Minified css  --}}
    <link rel="stylesheet" href="css/app.css">
    <title>Acme</title>
</head>
<body>
    @include('inc.navbar')
   <div class="container mt-5">
       @if(Request::is('/'))
            @include('inc.showcase')
       @endif
        <div class="row">
        <div class="col-md-8">
            @include('inc.alerts')
            @yield('content')
        </div>
        <div class="col-md-4">
             @include('inc.sidebar')
        </div>
    </div>
   </div>
   @include('inc.footer');
    
    {{--  Minified js  --}}
     <script src="js/app.js"></script>
    @yield('scripts')
   
</body>
</html>