<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    </head>
    <body>
        <nav class="navbar navbar-light bg-light">
              <span class="navbar-brand mb-0 h1">You are logging as {{ Auth::user()->name}} </span>
              <span> 
                  <a href="dashboard" class="btn btn-primary">Dashboard</a>
                  <a href="logout" class="btn btn-danger">Log Out</a>
              </span>
        
          </nav>
          
            @yield('content')
    </body>
</html>