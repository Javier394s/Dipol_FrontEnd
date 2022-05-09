<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title') | front end
    </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/mdb.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
</head>
<body>
    
    @include('layout.inc.frontend-navbar')

    <main>
        @yield('content')
    </main>

    @include('layout.inc.adminfooter')

    <script src="{{ asset("/js/jquery.min.js") }}"></script>
    <script src="{{ asset("/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("/js/aos.js") }}"></script>
    <script src="{{ asset("/js/smoothscroll.js") }}"></script>
    <script src="{{ asset("/js/custom.js") }}"></script>
    <script src="{{ asset("/js/mdb.min.js") }}"></script>
</body>
</html>