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

        $namesalas = $_POST['formularioSalas'];
        $cantidadsalas = $_POST['formularioSalas'];
        $vbsalas = $_POST['formularioSalas'];
        $this->model->save(['NuevoSalas' => $namesalas[0],$cantidadsalas[1],$vbsalas[2]]);
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
        
    $idsalas = $_POST['id'];
    $namesalas   = $_POST['formularioSalasEdit'];
    $this->model->update($idsalas, $namesalas[0]);
    $this->RefreshDataTable();
     
    }

}