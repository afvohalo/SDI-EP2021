<?php

class Salasusuario extends Controller
{

    private $data;
    public function __construct()
    {
        parent::__construct();
        $this->view->render('salasusuario/index');

    }

    public function index()
    {
        $this->view->render('estructura/header'); //HEADER

        $this->view->render('salasusuario/index');
        $this->RefreshDataTable();
        $this->view->render('salasusuario/formcreate');

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
        $this->view->render('salasusuario/table', $this->getData());
    }

    public function registrarSalasUsuario()
    {

        //echo "<p>Guardando datos satisfactoriamente</p>";
        print_r($_POST['formularioUsuario']);
        $DatosUsuario = (object) [
            'nombre1'   => $_POST['formularioUsuario'][0],
            'nombre2'   => $_POST['formularioUsuario'][1],
            'apellido1' => $_POST['formularioUsuario'][2],

        ];

        $this->model->save($DatosUsuario);
        $this->RefreshDataTable();

    }

    public function deleteSalasUsuario()
    {

        echo "<p> datos borrados satisfactoriamente</p>";

        $id = $_POST['id'];
        $this->model->delete(['id' => $id]);
        $this->RefreshDataTable();

    }

    public function oneSalasUsuario()
    {

        echo "<p> datos cargados satisfactoriamente</p>";

        $id  = $_POST['id'];
        $res = $this->model->getId($id);
        $this->setData($res);

        $this->view->render('salasusuario/formedit', $this->getData());
        /* print_r($this->getData()); */
    }

    public function editSalasUsuario()
    {

        /* echo "<p>Guardando datos satisfactoriamente</p>"; */

        $idusuario = $_POST['id'];

        $DatosEditUsuario = (object) [
            'nombre1'         => $_POST['formularioUsuarioEdit'][0],
            'nombre2'         => $_POST['formularioUsuarioEdit'][1],
            'apellido1'       => $_POST['formularioUsuarioEdit'][2],
            'apellido2'       => $_POST['formularioUsuarioEdit'][3],
            'correo'          => $_POST['formularioUsuarioEdit'][4],
            'contrasena'      => $_POST['formularioUsuarioEdit'][5],
            'telefono'        => $_POST['formularioUsuarioEdit'][6],
            'documento'       => $_POST['formularioUsuarioEdit'][7],
            'idtipodocumento' => $_POST['formularioUsuarioEdit'][8],
            'estado'          => $_POST['formularioUsuarioEdit'][9],
            'rol'             => $_POST['formularioUsuarioEdit'][10],
        ];

        $this->model->update($idusuario, $DatosEditUsuario);
        $this->RefreshDataTable();

    }

}
