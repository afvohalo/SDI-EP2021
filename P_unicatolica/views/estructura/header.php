<!DOCTYPE html>
<html lang="en" id="root">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="stylesheet" href="public/css/default.css">
    <link rel="stylesheet" href="public/css/toastr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="public/js/bootstrap.js"></script>
    <script src="public/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->





    <!-- testing -->

    <style>
        .navbar {
            
            position: sticky;
            z-index: 1;
            top: 0;

        }
        
    </style>


    <title>SISTEMAS MELENDEZ</title>
    </div>


    <nav class="navbar navbar-expand-lg navbar-light bg-light bt-header-stick active">
        <img src="public/img/logo.svg" style="height: 80px; width: auto;">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item my-2 ">
                    <a class="nav-link" href="inventario">inventario</a>
                </li>
                <li class="nav-item my-2 ">
                    <a class="nav-link" href="rol">rol</a>
                </li>
                <li class="nav-item my-2 ">
                    <a class="nav-link" href="caso">caso</a>
                </li>
                <li class="nav-item my-2 ">
                    <a class="nav-link" href="movimiento">movimiento</a>
                </li>
                <li class="nav-item my-2 ">
                    <a class="nav-link" href="estado_equipo">estado equipos</a>
                </li>
                <li class="nav-item my-2 ">
                    <a class="nav-link" href="documento">documento</a>
                </li>

                <li class="nav-item dropdown my-2 ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Otros
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item my-2">
                    <a class="nav-link text-danger" href="documento">Cerrar sesion</a>
                </li>



        </div>
    </nav>

    <div class="carru">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="3000" id="slide1">


                </div>

                <div class="carousel-item" data-interval="3000" id="slide2">


                </div>

                <div class="carousel-item" data-interval="3000" id="slide3">


                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>

    <div class="card">
        <div class="card-body">
            This is some text within a card body.
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            This is some text within a card body.
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            This is some text within a card body.
        </div>
    </div>






</head>
<style>
    #slide1 {
        background: url('public/img/slider1.jpeg');
        background-position: center;
        background-size: cover;
        height: 400px;
    }

    #slide2 {
        background: url('public/img/slider2.jpg');
        background-position: center;
        background-size: cover;
        height: 400px;
    }

    #slide3 {
        background: url('public/img/slider3.jpg');
        background-position: center;
        background-size: cover;
        height: 400px;
    }
</style>
<script>
    $('.carousel').carousel({
        interval: 2000,

    });
</script>

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