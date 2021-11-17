




<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<style>
    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-image: linear-gradient(
      rgba(0, 15, 58, 0.5),
      rgba(76, 126, 233, 0.5)
    );
  background-color: #00274b;
    }

    .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
    }

    .form-signin .checkbox {
        font-weight: 400;
    }

    .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
    }

    .form-signin .form-control:focus {
        z-index: 2;
    }


    .input-group-prepend span {
        width: 40px;
        background-color: #ffffff;
        color: rgb(49, 106, 182);
        border: 0 !important;
    }


    input:focus {
        outline: 0 0 0 0 !important;
        box-shadow: 0 0 0 0 !important;

    }

    .login_btn {
        color: black;
        background-color: lightblue;
        width: 100px;
    }

    .login_btn:hover {
        color: black;
        background-color: white;
    }

    .links {
        color: white;
    }

    .links a {
        margin-left: 4px;
    }
</style>
<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
</style>


<!-- Custom styles for this template -->


<body class="text-center">

    <form class="form-signin" method="post">
        <img class="mb-4" src="public/img/logowhite.png" alt="" width="300" height="100">
        <h5 class="h5 mb-3 font-weight-normal text-white">INCIAR SESION</h5>
        <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="email" name="email" id="email" class="form-control" class="validate" placeholder="Correo Electronico">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password" id="password" class="validate" class="form-control" placeholder="Contraseña">
						<button style="width: 70px;" class="btn btn-primary" type="button" onclick="mostrarContrasena()"><i class="fas fa-eye"></i></button>
					</div>
					<div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
					</div>
        <p class="mt-5 mb-3 text-white">&copy; Sistemas Melendez</p>
    </form>

    <script>
        function mostrarContrasena() {
            var tipo = document.getElementById("password");
            if (tipo.type == "password") {
                tipo.type = "text";
            } else {
                tipo.type = "password";
            }
        }
    </script>