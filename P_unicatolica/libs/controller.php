<?php

class Controller
{

    public function __construct()
    {
        //echo "<p> Controlador base </p>";
        $this->view = new View();
    }

    public function cargarModel($model)
    {
        $url = 'models/' . $model . 'model.php';

        //echo " ".$url;

        if (file_exists($url)) {
            require $url;

            $NombreModel = $model . 'Model';
            $this->model = new $NombreModel;
            //echo " ".$NombreModel;
        }
    }

    public function cargarModelFixed($model)
    {
        $url = 'models/' . $model . 'model.php';

        //echo " ".$url;

        if (file_exists($url)) {
            require $url;

            $NombreModel               = $model . 'Model';
            $this->{$model . "_model"} = new $NombreModel;
            //echo " ".$NombreModel;
        }
    }

    public function ShowConsole($data)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

}
