<!doctype html>
<html lang="{{config('app.locale')}}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>Fernando Mocelin Moraes & Advogados</title>
    <link rel="stylesheet" href="{{asset('public/css/app.css')}}" type="text/css">
    
    
    </head>    
    <body>  
        @include('inc.header')  
        @include('inc.navbar')
        @yield('content')        
    </body>
        @include('inc.footer')
</html>