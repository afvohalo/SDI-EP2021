<!DOCTYPE html>
<html lang="en" id="root">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="public/css/font-awesome.css">
    <link rel="stylesheet" href="public/css/estilos.css">
    <link rel="stylesheet" href="public/css/default.css">
    <link rel="stylesheet" href="public/css/toastr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
    
   
    
    <script src="public/js/jquery-3.4.1.slim.js"></script>
    <script src="public/js/bootstrap.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->





    <!-- testing -->

    <style>
        .navbar {
            position: sticky;
            top: 0;
            z-index: 1;
            
        }

        #carouselExampleIndicators {
            z-index: 0;
        }
        
    </style>


    <title>Control inventario sistemas</title>
    <link rel="icon" type="image/png" href="public/img/unicatolica.png">
    </div>

        
    <nav class="navbar navbar-expand-lg navbar-light bt-header-stick active" style="background-color: #205f9b;">
    <a href="./"><img src="public/img/logowhite.png" style="height: 80px; width: auto; padding: 8px;"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="bi bi-justify" style="color: white;"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item my-2 ml-4">
                    <b><a class="nav-link text-white" href="inventario">Inventario</a></b>
                </li>
                <li class="nav-item my-2 ml-4">
                <b><a class="nav-link text-white" href="rol">Mantenimiento</a></b>
                </li>
                <li class="nav-item my-2 ml-4">
                <b><a class="nav-link text-white" href="caso">Solicitudes</a></b>
                </li>
                <li class="nav-item my-2 ml-4">
                <b><a class="nav-link text-white" href="documento">Documento</a></b>
                </li>

                <li class="nav-item dropdown my-2 ml-4">
                    <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <b><i class="bi bi-gear-fill"></i> Otros</b>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item my-2 ml-4">
                <b><a class="nav-link text-white" href="documento"><i class="bi bi-x-circle-fill"></i> Salir</a></b>
                </li>



        </div>
    </nav>

    
</head>

<body>













    <!-- MENU RESPONSIVE DE HAMBURGUESA DE LAS OPCIONES PRINCIPALES -->
    <!--<ul class="sidenav" id="mobile-demo">

        <li><a href="caso" class="hoverable"><i class="material-icons left">assignment</i>Casos</a></li>



        <li><a href="inventario" class="hoverable"><i class="material-icons left">storage</i>Inventario</a></li>



        <li><a href="movimiento" class="hoverable"><i class="material-icons left">today</i>Historial</a></li>



        <li><a href="costos" class="hoverable"><i class="material-icons left">book</i>Costos</a></li>



        <li> <a href="orden" class="hoverable"><i class="material-icons left">description</i>Orden</a></li>
            </ul> -->
    <!-- MENU RESPONSIVE DE HAMBURGUESA DE LAS OPCIONES PRINCIPALES -->