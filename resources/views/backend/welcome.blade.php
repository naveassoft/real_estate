<!DOCTYPE html>
<html>
    <head>
        @include('backend.inc.css')
    </head>

    <body>
        @include('backend.inc.sidebar')
        @include('backend.inc.head')

        @yield('content')

        @include('backend.inc.js')
    </body>
</html>
