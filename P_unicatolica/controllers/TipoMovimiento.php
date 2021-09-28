<?php

class TipoMovimiento extends Controller
{

    private $data;
    public function __construct()
    {
        parent::__construct();
        $this->view->render('tipomovimiento/index');

    }

    public function index()
    {
        $this->view->render('estructura/header'); //HEADER

        $this->view->render('tipomovimiento/index');
        $this->RefreshDataTable();
        $this->view->render('tipomovimiento/formcreate');

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
        $this->view->render('tipomovimiento/table', $this->getData());
    }

    public function registrarTipoMovimiento()
    {

        echo "<p>Guardando datos satisfactoriamente</p>";
        //var_dump($_POST['formularioSalas']);
        $nametipomovimiento = $_POST['formularioTipomovimiento'];
        $this->model->save(['NuevoTipoMovimiento' => $nametipomovimiento[0]]);
        $this->RefreshDataTable();

    }

    public function deleteTipoMovimiento()
    {

        echo "<p>Guardando datos satisfactoriamente</p>";

        $id = $_POST['id'];
        $this->model->delete(['id' => $id]);
        $this->RefreshDataTable();

    }

    public function oneTipoMovimiento()
    {

        echo "<p>Guardando datos satisfactoriamente</p>";

        $id  = $_POST['id'];
        $res = $this->model->getId($id);
        $this->setData($res);

        $this->view->render('tipomovimiento/formedit', $this->getData());
        /* print_r($this->getData()); */
    }

    public function editTipoMovimiento()
    {

        /* echo "<p>Guardando datos satisfactoriamente</p>"; */

        $idtipomovimiento        = $_POST['id'];
        $nametipomovimiento      = $_POST['formularioTipomovimientoEdit'];
        $this->model->update($idtipomovimiento, $nametipomovimiento[0]);
        $this->RefreshDataTable();

    }

}
