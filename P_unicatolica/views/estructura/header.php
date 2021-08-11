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
                <a href="./"><img src="public/img/logoSigmaSena.png" class="responsive-img "></a>
            </div>
        </div>

        <div id="NavHeader">
            <nav>
                <div class="nav-wrapper">
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

                    <ul id="nav-mobile" class="left hide-on-med-and-down">


                        <li><a href="caso" class="hoverable"><i class="material-icons left">assignment</i>Casos</a></li>


                        <li><a href="inventario" class="hoverable"><i class="material-icons left">storage</i>Inventario</a></li>


                        <li><a href="movimiento" class="hoverable"><i class="material-icons left">today</i>Historial</a></li>


                                                <li><a href="estado_equipo" class="hoverable"><i class="material-icons left">book</i>Estado equipos</a></li>


                        <li> <a href="documento" class="hoverable"><i class="material-icons left">description</i>documento</a></li>
                    </ul>


                    <ul class="right">
                    <div style="width: 100px; display: flex; margin-right: 10px;">

                        <li >
                            <a data-target="MenuAdmin" style="display: block; margin: 0px;" class="sidenav-trigger hoverable" ><i class="material-icons">settings</i></a>
                        </li>

                        <li style="height: auto;">
                            <form method="post">
                                <input type="hidden" name="cerrarSesion">
                                <button style="background-color: #8b0d32; height: 95%; margin: 0px; border: #8b0d32;   color: #FFFFFF; width: 50px; cursor: pointer;" class="sidenav-trigger hoverable "><i class="material-icons">power_settings_new</i>
                                </button>
                            </form>
                        </li>
                    </div>
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
