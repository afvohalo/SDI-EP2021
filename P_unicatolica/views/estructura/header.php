<!DOCTYPE html>
<html lang="en" id="root">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="stylesheet" href="public/css/default.css">
    <link rel="stylesheet" href="public/css/toastr.min.css">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script src="public/js/function_globals.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>



    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->

    <link rel="stylesheet" href="public/css/home.css">
    <link rel="icon" type="image/png" href="public/img/LogoSencillo.png" />


    <!-- testing -->




    <title>ADPCUC</title>


</head>

<body>


    <div id="Header">
        <div class="NavLogo">
            <div class="NavNoLogo">
                <a href="./"><img src="public/img/,.png" class="responsive-img "></a>
            </div>
        </div>

        <div >
            <nav class="navbar navbar-expand-lg navbar-r-dark bg-dark" >
                <div >
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

                    <ul class="navbar-nav" >


                        <li><a href="caso" class="nav-link"><i class="material-icons left">assignment</i>Casos</a></li>


                        <li><a href="inventario" class="nav-link"><i class="material-icons left">storage</i>Inventario</a></li>


                        <li><a href="movimiento" class="nav-link"><i class="material-icons left">today</i>Historial</a></li>


                        <li><a href="estado_equipo" class="nav-link"><i class="material-icons left">book</i>Estado equipos</a></li>


                        <li> <a href="documento" class="nav-link"><i class="material-icons left">description</i>documento</a></li>

                        <li class="nav-item dropdown" >
                            <a class="nav-link dropdown-toggle" id="MenuAdmin" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Avanzado<i class="material-icons">settings</i></a>
                            <div class="dropdown-menu" aria-labelledby="MenuAdmin">
                                <?php include_once "ajustes_nav.php"?>
                            </div>
                        </li>

                        <li class="nav-link">
                            <form method="post">
                                <input type="hidden" name="cerrarSesion">
                                <a class="sidenav-trigger hoverable ">Cerrar Sesion<i class="material-icons">logout</i>
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- MENU RESPONSIVE DE HAMBURGUESA DE LAS OPCIONES PRINCIPALES -->
    <!--<ul class="sidenav" id="mobile-demo">

        <li><a href="caso" class="hoverable"><i class="material-icons left">assignment</i>Casos</a></li>



        <li><a href="inventario" class="hoverable"><i class="material-icons left">storage</i>Inventario</a></li>



        <li><a href="movimiento" class="hoverable"><i class="material-icons left">today</i>Historial</a></li>



        <li><a href="costos" class="hoverable"><i class="material-icons left">book</i>Costos</a></li>



        <li> <a href="orden" class="hoverable"><i class="material-icons left">description</i>Orden</a></li>
            </ul> -->
    <!-- MENU RESPONSIVE DE HAMBURGUESA DE LAS OPCIONES PRINCIPALES -->
