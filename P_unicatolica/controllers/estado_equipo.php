<?php

class Estado_equipo extends Controller
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

        $this->view->render('estado_equipo/index');
        $this->RefreshDataTable();
        $this->view->render('estado_equipo/formcreate');

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
        $this->view->render('estado_equipo/table', $this->getData());
    }

    public function registrarEstadoEquipo()
    {

        echo "<p>Guardando datos satisfactoriamente</p>";

        $namedocumento = $_POST['formularioEstadoEquipo'];
        $this->model->save(['Nuevoestadoequipo' => $nameEstadoEquipo[0]]);
        $this->RefreshDataTable();

    }

    public function deleteEstadoEquipo()
    {

        echo "<p>Guardando datos satisfactoriamente</p>";

        $id = $_POST['id'];
        $this->model->delete(['id' => $id]);
        $this->RefreshDataTable();

    }

    public function oneEstadoEquipo()
    {

        echo "<p>Guardando datos satisfactoriamente</p>";

        $id  = $_POST['id'];
        $res = $this->model->getId($id);
        $this->setData($res);

        $this->view->render('estado_equipo / formedit', $this->getData());
        /* print_r($this->getData()); */
    }

    public function editEstadoEquipo()
    {

        /* echo "<p>Guardando datos satisfactoriamente</p>"; */

        $idEstadoEquipo   = $_POST['id'];
        $nameEstadoEquipo = $_POST['formularioEstadoEquipoEdit'];
        $this->model->update($idEstadoEquipo, $nameEstadoEquipo[0]);
        $this->RefreshDataTable();

    }

}
