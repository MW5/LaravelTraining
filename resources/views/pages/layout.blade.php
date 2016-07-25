<!DOCTYPE html>
<html>
    <head>
        @yield('title')

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div class="container">
            @yield('nav')
            @yield('content')
        </div>
        
        @yield('footer')
    </body>
</html>
