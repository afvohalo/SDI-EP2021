<!DOCTYPE html>
<html lang="en" id="root">

<head>
    <script src="public/js/bootstrap.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/jquery-3.4.1.slim.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script src="public/js/function_globals.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>


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






    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->





    <!-- testing -->

    <style>
        .navbar {
            position: sticky;
            top: 0;
            z-index: 1;
            box-shadow: 0px 8px 5px rgba(0, 0, 0, 0.2);
        }
    </style>


    <title>Control inventario sistemas</title>
    <link rel="icon" type="image/png" href="public/img/unicatolica.png">
    </div>


    <nav class="navbar navbar-expand-lg navbar-light bt-header-stick active" style="background-color: #ffffff;">
        <a href="./"><img src="public/img/logo.svg" style="height: 90px; width: auto; padding: 8px;"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="bi bi-justify" style="color: black;"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="my-2 ml-2">
                    <a class="navbar-brand">
                        <img src="public/img/avatar.png" width="40" height="40" alt="logo" class="rounded-circle">
                        <b class="text-black">INSERTE USUARIO</b>

                    </a>
                </li>
                <li class="nav-item my-2 ml-2">
                    <b><a class="nav-link text-black btninicio" href="./"><i class="bi bi-house-fill"></i> Inicio</a></b>
                </li>
                
                <li class="nav-item dropdown my-2 ml-2">
                    <a class="nav-link text-black dropdown-toggle btninicio " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <b><i class="bi bi-gear-fill"></i> Panel de control</b>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="inventario"><i class="bi bi-display"></i>inventario</a> 
                        <a class="dropdown-item" href="equipos"><i class="bi bi-display"></i>equipos</a>   
                        <a class="dropdown-item" href="estado"><i class="bi bi-bookmark-check-fill"></i> Estado</a>
                        <a class="dropdown-item" href="estado_equipo"><i class="bi bi-display"></i> Estado equipo</a>
                        <a class="dropdown-item" href="estado_inventario"><i class="bi bi-card-checklist"></i> Estado inventario</a>
                        <a class="dropdown-item" href="rol"><i class="bi bi-person-lines-fill"></i> Rol</a>
                        <a class="dropdown-item" href="tipodocumento"><i class="bi bi-credit-card-2-front-fill"></i> Tipo de documento</a>
                        <a class="dropdown-item" href="tipomovimiento"><i class="bi bi-arrow-left-right"></i> Tipo de movimiento</a>
                        
                    </div>
                </li>
                <li class=" my-2 ml-2 ">
                    <form method="post">
                        <input type="hidden" name="cerrarSesion">
                            <button><i class="bi bi-door-open-fill">Cerrar session</i>
                            </button>
                    </form>
                </li>



        </div>
    </nav>


</head>
