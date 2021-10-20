<?php

class Salasusuario extends Controller
{

    private $data;
    public function __construct()
    {
        parent::__construct();
        $this->view->render('salasusuario/index');

    }

    public function index()
    {
        $this->view->render('estructura/header'); //HEADER

        $this->view->render('salasusuario/index');
        $this->RefreshDataTable();
        $this->view->render('salasusuario/formcreate');

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
        $this->setData($res);
        $this->view->render('salasusuario/table', $this->getData());
    }

    public function registrarSalasUsuario()
    {

        //echo "<p>Guardando datos satisfactoriamente</p>";
        print_r($_POST['formularioSalasUsuario']);
        $DatosSalaUsuario = (object) [
            'usuario' => $_POST['formularioSalasUsuario'][0],
            'sala'    => $_POST['formularioSalasUsuario'][1],

        ];

        $this->model->save($DatosSalaUsuario);
        $this->RefreshDataTable();

    }

    public function deleteSalasUsuario()
    {

        echo "<p> datos borrados satisfactoriamente</p>";

        $id = $_POST['id'];
        $this->model->delete(['id' => $id]);
        $this->RefreshDataTable();

    }

    public function oneSalasUsuario()
    {

        echo "<p> datos cargados satisfactoriamente</p>";

        $id  = $_POST['id'];
        $res = $this->model->getId($id);
        $this->setData($res);

        $this->view->render('salasusuario/formedit', $this->getData());
        /* print_r($this->getData()); */
    }

    public function editSalasUsuario()
    {

        /* echo "<p>Guardando datos satisfactoriamente</p>"; */

        $idSalaUsuario = $_POST['id'];

        $DatosEditSalaUsuario = (object) [
            'usuario' => $_POST['formularioSalasUsuarioEdit'][0],
            'sala'    => $_POST['formularioSalasUsuarioEdit'][1],

        ];

        $this->model->update($idSalaUsuario, $DatosEditUsuario);
        $this->RefreshDataTable();

    }

}
