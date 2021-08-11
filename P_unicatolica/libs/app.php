
<?php

if (isset($_POST['Acc'])) {
    $d=$_GET['url']." ".$_POST['Acc']." ".$_POST['Ctr'];
    //echo "<script type='text/javascript'>console.log($d);</script>";
}else{echo "lol";}


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

            $ctr = $_POST['Ctr'];
            $acc = $_POST['Acc'];
            //crear un nuevo controlador y carga el modelo
            $controller = new $ctr;
            //echo "<script type='text/javascript'>console.log($acc);</script>";
            $controller->cargarModel($ctr);
            $controller->{$acc}();
        }

        if ($WhatAction == 'LoadView') {
            //crear un nuevo controlador,carga el modelo y carga el index del controlador
            $clase      = ucwords($url[0]);
            $controller = new $clase;
            $controller->cargarModel($url[0]);
            $controller->{'index'}();
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
    print_r($url);
    //meter en un array los string separados por "/"
    $url = explode('/', $url);

    return $url;
}

$exist = empty($_GET['url']) ? false : true;

if (isset($_POST['Acc']) && isset($_POST['Ctr'])) {
    //genera un directorio con el $_post[ctr] y llama la funcion iloadView que esta arriva
    $ctr               = $_POST['Ctr'];
    $archivoController = 'controllers/' . $ctr . '.php';
    //echo "<script type='text/javascript'>console.log($archivoController);</script>";
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

?>