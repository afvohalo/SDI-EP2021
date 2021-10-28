<?php

class Estado_inventario extends Controller
{

    private $data;
    public function __construct()
    {
        parent::__construct();
        // $this->cargarModelFixed('estadoequipo');

    }

    public function index()
    {
        $this->view->render('estructura/header'); //HEADER

        $this->view->render('estado_inventario/index');
        $this->RefreshDataTable();
        $this->view->render('estado_inventario/formcreate');

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
        $this->view->render('estado_inventario/table', $this->getData());
    }

    public function registrarEstadoInventario()
    {

        echo "<p>Guardando datos satisfactoriamente</p>";

        $nameEstadoInventario = $_POST['formularioEstadoInventario'];
        $this->model->save(['Nuevoestadoinventario' => $nameEstadoInventario[0]]);
        $this->RefreshDataTable();

    }

    public function deleteEstadoInventario()
    {

        echo "<p>Guardando datos satisfactoriamente</p>";

        $id = $_POST['id'];
        $this->model->delete(['id' => $id]);
        $this->RefreshDataTable();

    }

    public function oneEstadoInventario()
    {

        echo "<p>Guardando datos satisfactoriamente</p>";

        $id  = $_POST['id'];
        $res = $this->model->getId($id);
        $this->setData($res);

        $this->view->render('estado_inventario/formedit', $this->getData());
        /* print_r($this->getData()); */
    }

    public function editEstadoInventario()
    {

        /* echo "<p>Guardando datos satisfactoriamente</p>"; */

        $idEstadoInventario   = $_POST['id'];
        $nameEstadoInventario = $_POST['formularioEstadoInventarioEdit'];
        $this->model->update($idEstadoInventario, $nameEstadoInventario[0]);
        $this->RefreshDataTable();

    }

}
