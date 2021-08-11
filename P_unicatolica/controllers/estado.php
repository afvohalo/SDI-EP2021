<?php

class Estado extends Controller
{

    private $data;
    public function __construct()
    {
        parent::__construct();
        $this->view->render('estado/index');

    }

    public function index()
    {
        $this->view->render('estructura/header'); //HEADER

        $this->view->render('estado/index');
        $this->RefreshDataTable();
        $this->view->render('estado/formcreate');

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
        $this->view->render('estado/table', $this->getData());
    }

    public function registrarEstado()
    {

        echo "<p>Guardando datos satisfactoriamente</p>";

        $nameestado = $_POST['formularioEstado'];
        $this->model->save(['NuevoEstado' => $nameestado[0]]);
        $this->RefreshDataTable();

    }

    public function deleteEstado()
    {

        echo "<p>Guardando datos satisfactoriamente</p>";
        
    $id = $_POST['id'];
    $this->model->delete(['id' => $id]);
    $this->RefreshDataTable();
     

    }

    public function oneEstado()
    {

        echo "<p>Guardando datos satisfactoriamente</p>";
        
        $id  = $_POST['id'];
        $res = $this->model->getId($id);
        $this->setData($res);
         

        $this->view->render('estado/formedit', $this->getData());
        /* print_r($this->getData()); */
    }

    public function editEstado()
    {

        /* echo "<p>Guardando datos satisfactoriamente</p>"; */
        
    $idestado = $_POST['id'];
    $nameestado   = $_POST['formularioEstadoEdit'];
    $this->model->update($idestado, $nameestado[0]);
    $this->RefreshDataTable();
     
    }

}