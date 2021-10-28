<?php

class Tipodocumento extends Controller
{

    private $data;
    public function __construct()
    {
        parent::__construct();
        $this->view->render('tipodocumento/index');

    }

    public function index()
    {
        $this->view->render('estructura/header'); //HEADER

        $this->view->render('tipodocumento/index');
        $this->RefreshDataTable();
        $this->view->render('tipodocumento/formcreate');

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
        $this->view->render('tipodocumento/table', $this->getData());
    }

    public function registrarTipodocumento()
    {

        echo "<p>Guardando datos satisfactoriamente</p>";

        $nametipodocumento = $_POST['formularioTipoDocumento'];
        $this->model->save(['NuevoTipoDocumento' => $nametipodocumento[0]]);
        $this->RefreshDataTable();
        
        
    }

    public function deleteTipodocumento()
    {

        echo "<p>Guardando datos satisfactoriamente</p>";
        
    $id = $_POST['id'];
    $this->model->delete(['id' => $id]);
    $this->RefreshDataTable();
     

    }

    public function oneTipodocumento()
    {

        echo "<p> datos cargados satisfactoriamente</p>";
        
        $id  = $_POST['id'];
        $res = $this->model->getId($id);
        $this->setData($res);
    

        $this->view->render('tipodocumento/formedit', $this->getData());
        
    }

    public function editTipodocumento()
    {

        /* echo "<p>Guardando datos satisfactoriamente</p>"; */
        
    $idtipodocumento = $_POST['id'];
    $nametipodocumento   = $_POST['formularioTipodocumentoEdit'];
    $this->model->update($idtipodocumento, $nametipodocumento[0]);
    $this->RefreshDataTable();
     
    }

}
