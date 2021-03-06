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
        $this->renderViewFormInventario();
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

        public function renderViewFormInventario()
    {
        $SelectEstadoInventario   = $this->model->consultaDatos('tblestado_inventario');

        $Data = (object) [
            'select_estadoinventario' => $SelectEstadoInventario,
        ];
        
        $this->view->render('inventario/formcreate',  $Data);
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
        
        $consulta=$this->model->save(['NombreInv' => $nameinventario,'CantidadInv'=> $cantidadinventario,'EstadoInv' => $estadoinventario]);
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
        

        $SelectEstadoInventario = $this->model->consultaDatos('tblestado_inventario');

        $Data = (object) [
            'select_estadoinventario' => $SelectEstadoInventario,
            'data' => $res,
        ];

        $this->view->render('inventario/formedit', $Data);
        /* print_r($this->getData()); */
    }

    public function editinventario()
    {

        /* echo "<p>Guardando datos satisfactoriamente</p>"; */

        $idInventario        = $_POST['id'];
        echo $idInventario;
        $nameinventario     
        = $_POST['formularioInventarioEdit'][0];
        $cantidadinventario 
        = $_POST['formularioInventarioEdit'][1];
        $estadoinventario   
        = $_POST['formularioInventarioEdit'][2];
        $this->model->update($idInventario, $nameinventario, $cantidadinventario, $estadoinventario);
        $this->RefreshDataTable();

    }

}