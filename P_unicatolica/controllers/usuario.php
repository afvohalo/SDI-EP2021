<?php

class Usuario extends Controller
{

    private $data;
    public function __construct()
    {
        parent::__construct();
        $this->view->render('usuario/index');

    }

    public function index()
    {
        $this->view->render('estructura/header'); //HEADER

        $this->view->render('usuario/index');
        $this->RefreshDataTable();
        $this->view->render('usuario/formcreate');

        //$this->view->render('estructura/ajustes_nav'); //NAV_AJUSTES
        $this->view->render('estructura/footer'); //FOOTER
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }

    public function RefreshDataTable()
    {
        $res = $this->model->getAll();
        $this->setData($res);
        $this->view->render('usuario/table', $this->getData());
    }

    public function registrarUsuario()
    {

        //echo "<p>Guardando datos satisfactoriamente</p>";
        print_r($_POST['formularioUsuario']);
        $DatosUsuario = (object) [
            'nombre1'         => ['formularioUsuario'][0],
            'nombre2'         => $_POST['formularioUsuario'][1],
            'apellido1'       => $_POST['formularioUsuario'][2],
            'apellido2'       => $_POST['formularioUsuario'][3],
            'correo'          => $_POST['formularioUsuario'][4],
            'contrasena'      => $_POST['formularioUsuario'][5],
            'telefono'        => $_POST['formularioUsuario'][6],
            'documento'       => $_POST['formularioUsuario'][7],
            'idtipodocumento' => $_POST['formularioUsuario'][8],
            'estado'          => $_POST['formularioUsuario'][9],
            'rol'             => $_POST['formularioUsuario'][10],
        ];

        $this->model->save($DatosUsuario);
        $this->RefreshDataTable();

    }

    public function deleteUsuario()
    {

        echo "<p> datos borrados satisfactoriamente</p>";

        $id = $_POST['id'];
        $this->model->delete(['id' => $id]);
        $this->RefreshDataTable();

    }

    public function oneUsuario()
    {

        echo "<p> datos cargados satisfactoriamente</p>";

        $id  = $_POST['id'];
        $res = $this->model->getId($id);
        $this->setData($res);

        $this->view->render('usuario/formedit', $this->getData());
        /* print_r($this->getData()); */
    }

    public function editUsuario()
    {

        /* echo "<p>Guardando datos satisfactoriamente</p>"; */

        $idusuario = $_POST['id'];

        $DatosEditUsuario = (object) [
            'nombre1'         => $_POST['formularioUsuario'][0],
            'nombre2'         => $_POST['formularioUsuario'][1],
            'apellido1'       => $_POST['formularioUsuario'][2],
            'apellido2'       => $_POST['formularioUsuario'][3],
            'correo'          => $_POST['formularioUsuario'][4],
            'contrasena'      => $_POST['formularioUsuario'][5],
            'telefono'        => $_POST['formularioUsuario'][6],
            'documento'       => $_POST['formularioUsuario'][7],
            'idtipodocumento' => $_POST['formularioUsuario'][8],
            'estado'          => $_POST['formularioUsuario'][9],
            'rol'             => $_POST['formularioUsuario'][10],
        ];

        $this->model->update($idusuariuo, $DatosEditUsuario);
        $this->RefreshDataTable();

    }

}
