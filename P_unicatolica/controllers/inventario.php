<?php

class Inventario extends Controller
{

    private $data;
    public function __construct()
    {
        parent::__construct();
        $this->view->render('inventario/index');

    }

    public function index()
    {
        $this->view->render('estructura/header'); //HEADER

        $this->view->render('inventario/index');
        $this->RefreshDataTable();
        $this->view->render('inventario/formcreate');

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
        $this->view->render('inventario/table', $this->getData());
    }

    public function registrarinventario()
    {

        echo "<p>Guardando datos satisfactoriamente</p>";
        //var_dump($_POST['formularioSalas']);
        $nameinventario     
        = $_POST['formularioInventario'][0];
        $cantidadinventario 
        = $_POST['formularioInventario'][1];
        $estadoinventario   
        = $_POST['formularioInventario'][2];
        
        $this->model->save(['NombreInv' => $namesalas,'CantidadInv'=> $cantidadsalas,'EstadoInv' => $estadoinventario]);
        $this->RefreshDataTable();

    }

    public function deleteinventario()
    {

        echo "<p>dato Borrado satisfactoriamente</p>";

        $id = $_POST['id'];
        $this->model->delete(['id' => $id]);
        $this->RefreshDataTable();

    }

    public function oneinventario()
    {

        echo "<p>datos cargados satisfactoriamente</p>";

        $id  = $_POST['id'];
        $res = $this->model->getId($id);
        $this->setData($res);

        $this->view->render('inventario/formedit', $this->getData());
        /* print_r($this->getData()); */
    }

    public function editinventario()
    {

        /* echo "<p>Guardando datos satisfactoriamente</p>"; */

        $idIventario        = $_POST['id'];
        $nameinventario     
        = $_POST['formularioInventario'][0];
        $cantidadinventario 
        = $_POST['formularioInventario'][1];
        $estadoinventario   
        = $_POST['formularioInventario'][2];
        $this->model->update($idInventario, $nameinventario, $cantidadinventario, $estadoinventario);
        $this->RefreshDataTable();

    }

}