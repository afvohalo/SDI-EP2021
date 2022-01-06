<?php

class Salas extends Controller
{

    private $data;
    public function __construct()
    {
        parent::__construct();
        $this->view->render('salas/index');

    }

    public function index()
    {
        $this->view->render('estructura/header'); //HEADER

        $this->view->render('salas/index');
        $this->RefreshDataTable();
        $this->view->render('salas/formcreate');

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
        //var_export($res);
        $this->setData($res);
        $this->view->render('salas/table', $this->getData());
    }

    public function registrarSalas()
    {

        echo "<p>Guardando datos satisfactoriamente</p>";
        //var_dump($_POST['formularioSalas']);
        $namesalas     = $_POST['formularioSalas'][0];
        $cantidadsalas = $_POST['formularioSalas'][1];
        $vbsalas       = $_POST['formularioSalas'][2];
        $tlsalas       = $_POST['formularioSalas'][3];
        $this->model->save(['NombreSalas' => $namesalas,'CantidadSalas'                   => $cantidadsalas,'VbSalas' => $vbsalas, 'TlSalas' => $tlsalas]);
        $this->RefreshDataTable();

    }

    public function deleteSalas()
    {

        echo "<p>Guardando datos satisfactoriamente</p>";

        $id = $_POST['id'];
        $this->model->delete(['id' => $id]);
        $this->RefreshDataTable();

    }

    public function oneSalas()
    {

        echo "<p>Guardando datos satisfactoriamente</p>";

        $id  = $_POST['id'];
        $res = $this->model->getId($id);
        $this->setData($res);

        $this->view->render('salas/formedit', $this->getData());
        /* print_r($this->getData()); */
    }

    public function editSalas()
    {

        /* echo "<p>Guardando datos satisfactoriamente</p>"; */

        $idsalas        = $_POST['id'];
        $namesalas      = $_POST['formularioSalasEdit'][0];
        $cantidadsalas  = $_POST['formularioSalasEdit'][1];
        $VbSalas        = $_POST['formularioSalasEdit'][2];
        $TlSalas        = $_POST['formularioSalasEdit'][3];
        $this->model->update($idsalas, $namesalas, $cantidadsalas, $VbSalas, $TlSalas);
        $this->RefreshDataTable();

    }

}
