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

        echo "<p>Guardando datos satisfactoriamente</p>";
        //var_dump($_POST['formularioSalas']);
        $nameusuario = $_POST['formularioUsuario'][0];
        //$cantidadsalas = $_POST['formularioSalas'][1];
        //$vbsalas       = $_POST['formularioSalas'][2];
        $this->model->save(['NombreUsuario' => $nameusuario, /*,
    'CantidadSalas'                   => $cantidadsalas, 'VbSalas' => $vbsalas*/]);
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
