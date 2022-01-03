<?php

class Equipos extends Controller
{

    private $data;
    public function __construct()
    {
        parent::__construct();
        $this->view->render('equipos/index');

    }

    public function index()
    {
        $this->view->render('estructura/header'); //HEADER

        $this->view->render('equipos/index');
        $this->RefreshDataTable();
        $this->renderViewFormEquipos();
        $this->view->render('equipos/formcreate');

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
        $this->view->render('equipos/table', $this->getData());
    }

    public function renderViewFormEquipos()
    {
        $SelectEstadoEquipos = $this->model->consultaDatos('tblestado_equipos');
        $SelectSalaEquipos   = $this->model->consultaDatos('tblsalas');

        $Data = (object) [
            'select_estadoequipos' => $SelectEstadoEquipos,
            'select_salaequipos'   => $SelectSalaEquipos,
        ];
        
        $this->view->render('equipos/formcreate',  $Data);
    }

    public function registrarequipos()
    {

        echo "<p>Guardando datos satisfactoriamente</p>";
        //var_dump($_POST['formularioequipos']);
        $nameequipos     	= $_POST['formularioequipos'][0];
        $detalleequipos 	= $_POST['formularioequipos'][1];
        $tecladoequipos     = $_POST['formularioequipos'][2];
        $mouseequipos       = $_POST['formularioequipos'][3];
        $guayaequipos      	= $_POST['formularioequipos'][4];
        $candadoequipos     = $_POST['formularioequipos'][5];
        $estadoequipos      = $_POST['formularioequipos'][6];
        $salaequipos      	= $_POST['formularioequipos'][7];
        $this->model->save(['nombreequipos' => $nameequipos,'detalleequipos' => $detalleequipos, 'tecladoequipos' => $tecladoequipos, 'mouseequipos' => $mouseequipos, 'guayaequipos' => $candadoequipos, 'candadoequipos' => $guayaequipos, 'estadoequipos' => 
        	$estadoequipos, 'salaequipos' => $salaequipos]);
        $this->RefreshDataTable();

    }

    public function deleteequipos()
    {

        echo "<p>Guardando datos satisfactoriamente</p>";

        $id = $_POST['id'];
        $this->model->delete(['id' => $id]);
        $this->RefreshDataTable();

    }

    public function oneequipos()
    {

        echo "<p>Guardando datos satisfactoriamente</p>";

        $id  = $_POST['id'];
        $res = $this->model->getId($id);
        $SelectEstadoEquipos = $this->model->consultaDatos('tblestado_equipos');
        $SelectSalaEquipos   = $this->model->consultaDatos('tblsalas');

        $Data = (object) [
            'select_estadoequipos' => $SelectEstadoEquipos,
            'select_salaequipos'   => $SelectSalaEquipos,
            'data' => $res,
        ];
        $this->view->render('equipos/formedit', $Data);
        /* print_r($this->getData()); */
    }

    public function editequipos()
    {

        /* echo "<p>Guardando datos satisfactoriamente</p>"; */

        $idequipos        	= $_POST['id'];
        $nameequipos      	= $_POST['formularioequiposEdit'][0];
        $detalleequipos  	= $_POST['formularioequiposEdit'][1];
        $tecladoequipos     = $_POST['formularioequiposEdit'][2];
        $mouseequipos       = $_POST['formularioequiposEdit'][3];
        $guayaequipos       = $_POST['formularioequiposEdit'][4];
        $candadoequipos     = $_POST['formularioequiposEdit'][5];
        $estadoequipos      = $_POST['formularioequiposEdit'][6];
        $salaequipos       	= $_POST['formularioequiposEdit'][7];


        $this->model->update($idequipos, $nameequipos, $detalleequipos, $tecladoequipos, $mouseequipos, $guayaequipos, $candadoequipos, $estadoequipos, 
        					 $salaequipos);
        $this->RefreshDataTable();

    }

}
