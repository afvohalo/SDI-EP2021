<?php

class Movimiento extends Controller
{

    private $data;
    public function __construct()
    {
        parent::__construct();
        $this->view->render('movimiento/index');

    }

    public function index()
    {
        $this->view->render('estructura/header'); //HEADER

        $this->view->render('movimiento/index');
        $this->RefreshDataTable();
        $this->view->render('movimiento/formcreate');

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
        $this->view->render('movimiento/table', $this->getData());
    }

    public function registrarmovimiento()
    {

        echo "<p>Guardando datos satisfactoriamente</p>";
        //var_dump($_POST['formulariomovimiento']);
        $conceptomovimiento 	= $_POST['formulariomovimiento'][0];
        $codigomovimiento       = $_POST['formulariomovimiento'][1];
        $usuariomovimiento      = $_POST['formulariomovimiento'][2];
        $tipomovimiento      	= $_POST['formulariomovimiento'][3];;
        $this->model->save(['conceptomovimiento' => $conceptomovimiento, 'codigomovimiento' => $codigomovimiento, 'usuariomovimiento' => $usuariomovimiento, 'tipomovimiento' => $tipomovimiento]);
        $this->RefreshDataTable();

    }

    public function deletemovimiento()
    {

        echo "<p>Guardando datos satisfactoriamente</p>";

        $id = $_POST['id'];
        $this->model->delete(['id' => $id]);
        $this->RefreshDataTable();

    }

    public function onemovimiento()
    {

        echo "<p>Guardando datos satisfactoriamente</p>";

        $id  = $_POST['id'];
        $res = $this->model->getId($id);
        $this->setData($res);

        $this->view->render('movimiento/formedit', $this->getData());
        /* print_r($this->getData()); */
    }

    public function editmovimiento()
    {

        /* echo "<p>Guardando datos satisfactoriamente</p>"; */

        $idmovimiento        	= $_POST['id'];
        $conceptomovimiento     = $_POST['formulariomovimientoEdit'][0];
        $codigomovimiento  	    = $_POST['formulariomovimientoEdit'][1];
        $usuariomovimiento      = $_POST['formulariomovimientoEdit'][2];
        $tipomovimiento         = $_POST['formulariomovimientoEdit'][3];


        $this->model->update($idmovimiento, $conceptomovimiento, $codigomovimiento, $usuariomovimiento, $tipomovimiento);
        $this->RefreshDataTable();

    }

}
