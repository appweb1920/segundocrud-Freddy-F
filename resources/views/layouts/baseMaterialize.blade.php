<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Refacciones</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Materialize minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Extra Styles -->
    <link rel="stylesheet" href="css/app.css">

</head>
<body>
    <nav>
        <div class="nav-wrapper blue-grey darken-4">
        <a href="/inicio" class="brand-logo">
            <i class="medium material-icons">home</i> 
            Inventario de Refacciones
        </a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="/verRefacciones"><i class="material-icons left">home_repair_service</i>Lista de refacciones</a></li>
            <li><a href="/nuevaRefaccion"><i class="tiny material-icons left">add</i>Nueva refacción</a></li>
        </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="/verRefacciones"><i class="material-icons left">home_repair_service</i>Lista de refacciones</a></li>
        <li><a href="/nuevaRefaccion"><i class="material-icons left">add</i>Nueva refacción</a></li>
    </ul>

    

    @yield('container')
    
    <!-- JQuery minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.sidenav').sidenav();
        });
    </script>
</body>
</html>

