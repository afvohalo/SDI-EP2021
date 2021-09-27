<?php

class Rol extends Controller
{

    private $data;
    public function __construct()
    {
        parent::__construct();
        $this->view->render('rol/index');

    }

    public function index()
    {
        $this->view->render('estructura/header'); //HEADER

        $this->view->render('rol/index');
        $this->RefreshDataTable();
        $this->view->render('rol/formcreate');

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
        $this->view->render('rol/table', $this->getData());
    }

    public function registrarRol()
    {

        echo "<p>Guardando datos satisfactoriamente</p>";

        $namerol = $_POST['formularioRol'];
        $this->model->save(['NuevoRol' => $namerol[0]]);
        $this->RefreshDataTable();

    }

    public function deleteRol()
    {

        echo "<p>Guardando datos satisfactoriamente</p>";
        
    $id = $_POST['id'];
    $this->model->delete(['id' => $id]);
    $this->RefreshDataTable();
     

    }

    public function oneRol()
    {

        echo "<p>Guardando datos satisfactoriamente</p>";
        
        $id  = $_POST['id'];
        $res = $this->model->getId($id);
        $this->setData($res);
         

        $this->view->render('rol/formedit', $this->getData());
        /* print_r($this->getData()); */
    }

    public function editRol()
    {

        /* echo "<p>Guardando datos satisfactoriamente</p>"; */
        
    $idrol = $_POST['id'];
    $namerol   = $_POST['formularioRolEdit'];
    $this->model->update($idrol, $namerol[0]);
    $this->RefreshDataTable();
     
    }

}
