<?php

include 'imodel.php';
class Model
{

    public function __construct()
    {
        $this->db = new Database();
    }

    public function query($query)
    {
        return $this->db->conexion()->query($query);
    }

    public function prepare($query)
    {
        return $this->db->conexion()->prepare($query);
    }

    public function showError($accion, $modelo, $error)
    {
        error_log('No se pudo ' . $accion . ' el dato model ' . $modelo . ' ' . $error);
    }

    public function ShowConsole($data)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

}
