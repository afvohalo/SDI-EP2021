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
        print_r($_POST['formularioSalas']);
        $nombre1    = $_POST['formularioUsuario'][0];
        $nombre2    = $_POST['formularioSalas'][1];
        $apellido1  = $_POST['formularioSalas'][2];
        $apellido2  = $_POST['formularioSalas'][3];
        $correo  = $_POST['formularioSalas'][4];
        $contrasena  = $_POST['formularioSalas'][5];
        $telefono  = $_POST['formularioSalas'][6];
        $documento  = $_POST['formularioSalas'][7];
        $idtipodocumento  = $_POST['formularioSalas'][8];
        $estado  = $_POST['formularioSalas'][9];
        $rol  = $_POST['formularioSalas'][10];

        $this->model->save(
        ['NombreUsuario' => $nameusuario, /*,
         ''=> $cantidadsalas, 'VbSalas' => $vbsalas*/]);
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

        $idusuaruo   = $_POST['id'];
        $nameusuario = $_POST['formularioUsuarioEdit'][0];
        //$cantidadsalas  = $_POST['formularioSalasEdit'][1];
        //$VbSalas        = $_POST['formularioSalasEdit'][2];
        $this->model->update($idsalas, $nameusuario/* $cantidadsalas, $VbSalas*/);
        $this->RefreshDataTable();

    }

}