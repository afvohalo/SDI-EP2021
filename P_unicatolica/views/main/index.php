<center>
        <h6 class="titulo_inicio">SISTEMA CONTROL DE INVENTARIO MELENDEZ</h6>
</center>

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

    
        .navbar {
            background: #FFCD48;
            position: sticky;
            top: 0;
            z-index: 1;
        }

        #carouselExampleIndicators {
            z-index: 0;
        }
    
</style>
<script>
    $('.carousel').carousel({
        interval: 2000,

    });
</script>

