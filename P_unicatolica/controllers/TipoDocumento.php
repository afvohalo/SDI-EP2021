<?php

class TipoDocumento extends Controller
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

    public function registrarTipoDocumento()
    {

        echo "<p>Guardando datos satisfactoriamente</p>";
        //var_dump($_POST['formularioSalas']);
        $nametipodocumento = $_POST['formularioTipodocumento'];
        $this->model->save(['NuevoTipoDocumento' => $nametipodocumento[0]]);
        $this->RefreshDataTable();

    }

    public function deleteTipoDocumento()
    {

        echo "<p>Guardando datos satisfactoriamente</p>";

        $id = $_POST['id'];
        $this->model->delete(['id' => $id]);
        $this->RefreshDataTable();

    }

    public function oneTipoDocumento()
    {

        echo "<p>Guardando datos satisfactoriamente</p>";

        $id  = $_POST['id'];
        $res = $this->model->getId($id);
        $this->setData($res);

        $this->view->render('tipodocumento/formedit', $this->getData());
        /* print_r($this->getData()); */
    }

    public function editTipoDocumento()
    {

        /* echo "<p>Guardando datos satisfactoriamente</p>"; */

        $idtipodocumento        = $_POST['id'];
        $nametipodocumento      = $_POST['formularioTipodocumentoEdit'];
        $this->model->update($idtipodocumento, $nametipodocumento[0]);
        $this->RefreshDataTable();

    }

}
