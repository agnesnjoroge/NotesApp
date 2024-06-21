<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
                
        <link href="{{ ('app.css') }}" rel="stylesheet">
        <!---<link rel="stylesheet" href="app/css">-->
        <title>Laravel</title>
        
    </head>
    <body class="antialiased">
      @session('message')
      <div class="success-message">
          {{session('message')}}
      </div>
      
      @endsession
       {{ $slot }}
    </body>
</html>
        