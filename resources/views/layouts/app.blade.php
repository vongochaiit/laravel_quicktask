<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel Quickstart - Basic</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
        
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a href="{!! route('user.change-language', ['en']) !!}">English</a>||
          <a href="{!! route('user.change-language', ['vi']) !!}">Vietnam</a>
        </nav>

        @yield('content')
    </body>
</html>
