<?php
session_start();
require_once 'controllers/errorPage.php';

function IsLoadView($archivoController, $WhatAction, $url = null)
{

    # WhatAction
    #    - LoadAction
    #    - LoadView
    #    - LoadIndex

    //verifica si el directorio existe
    if (file_exists($archivoController)) {
        //llama al archivo que se necesita en la carpta controllers para poder instanciarlos despues

        require_once $archivoController;

        if ($WhatAction == 'LoadObjectAction') {
            $caracterspecial = '_';

            $ctr = $_POST['Ctr'];
            $acc = $_POST['Acc'];
           
            //crear un nuevo controlador y carga el modelo
            $controller = new $ctr;
             //verifica y quita el caracter "_"
            if (strpos($ctr, $caracterspecial) != false ) {
                $ctr = (strtolower($ctr));
                $ctr = preg_replace('([_])', '', $ctr);

                $controller->cargarModel($ctr);
                $controller->{$acc}();
                
            } else {
                $controller->cargarModel($ctr);
                $controller->{$acc}();
                
            }
        }

        if ($WhatAction == 'LoadView') {
            $caracterspecial = '_';
            //crear un nuevo controlador,carga el modelo y carga el index del controlador
            $clase      = ucwords($url[0]);
            $controller = new $clase;
            if (strpos($clase, $caracterspecial) != false) {
                $clase = strtolower($clase);
                $clase = preg_replace('([_])', '', $clase);
               
                $controller->cargarModel($clase);
                $controller->{'index'}();
            } else {
                $controller->cargarModel($clase);
                $controller->{'index'}();
            }
        }

        if ($WhatAction == 'LoadIndex') {
            //dirige al main()
            $controller = new Main();
            $controller->{'index'}();
            return false;
        }

    } else {

        $controller = new ErrorPage();

    }
}

function IsCleanUrl()
{
    //verifica url que envia el href en la cabecera
    $url = isset($_GET['url']) ? $_GET['url'] : null;
    //quita el caracter "/" si esta de ultimo
    $url = rtrim($url, '/');
    
    //meter en un array los string separados por "/"
    $url = explode('/', $url);

    return $url;
}

//confirma si la sesion esta abierta o no
if (isset($_SESSION['rol']) && isset($_SESSION['nombre']) && isset($_SESSION['apellido'])) {

    if (isset($_POST['cerrarSesion'])) {
        unset($_SESSION['rol'], $_SESSION['nombre'], $_SESSION['apellido'], $_SESSION['idUsuario'], $_SESSION['correo']);
        session_destroy();
        header("Location: ../P_unicatolica");
    }
    //CONPRUEBA SI LA URL ESTA VACIA false si lo esta : true si no lo esta
    $exist = empty($_GET['url']) ? false : true;

    if (isset($_POST['Acc']) && isset($_POST['Ctr'])) {
        //genera un directorio con el $_post[ctr] y llama la funcion iloadView que esta arriva
        $ctr               = $_POST['Ctr'];
        $archivoController = 'controllers/' . $ctr . '.php';
        IsLoadView($archivoController, 'LoadObjectAction');

    } else if ($exist) {
        //genera un directoria con la url y llama la  funcion lsloadview que esta arriba
        $url               = IsCleanUrl();
        $archivoController = 'controllers/' . $url[0] . '.php';
        IsLoadView($archivoController, 'LoadView', $url);

    } else {
        //dirige al main
        $archivoController = 'controllers/main.php';
        IsLoadView($archivoController, 'LoadIndex');

    }
} else {
    //confimacion de datos para entrar
    $archivoController = 'controllers/login.php';
    require $archivoController;
    $Inicio = new Login();
    $Inicio->cargarModel('login');

    if (isset($_POST['email']) && isset($_POST['password'])) {
        $Inicio->validate($_POST['email'], $_POST['password']);
    }
}
// session_destroy();
?>