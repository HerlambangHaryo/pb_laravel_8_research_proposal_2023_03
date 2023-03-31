<!DOCTYPE html>
<html>
        <head> 
        <meta charset="utf-8" />
        <title>@yield('title')</title>
 

        <link href="{{ asset('/public/print') }}/css/general.css" rel="stylesheet" />

        </head>
        <body class="A4x portraitx"> 
                @yield('content')  
        </body>
</html>
