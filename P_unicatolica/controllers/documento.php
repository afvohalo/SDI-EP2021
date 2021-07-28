<?php

class Documento extends Controller
{

    private $data;
    public function __construct()
    {
        parent::__construct();
        $this->view->render('documento/index');

    }

    public function index()
    {
        $this->view->render('estructura/header'); //HEADER

        $this->view->render('documento/index');
        $this->RefreshDataTable();
        $this->view->render('documento/formcreate');

        //$this->view->render('estructura/ajustes_nav'); //NAV_AJUSTES
        //$this->view->render('estructura/footer'); //FOOTER
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
        $this->view->render('documento/table', $this->getData());
    }

    public function registrarDocumento()
    {

         echo "<p>Guardando datos satisfactoriamente</p>";
         
        $namedocumento = $_POST['formularioDocumento'];
        $this->model->save(['tip_doc_descripcion' => $namedocumento[0]]);
        $this->RefreshDataTable();
    

    }

    public function deleteDocumento()
    {

         echo "<p>Guardando datos satisfactoriamente</p>"; 
        /*
        $id = $_POST['id'];
        $this->model->delete(['id' => $id]);
        $this->RefreshDataTable();
        */

    }

    public function oneDocumento()
    {

         echo "<p>Guardando datos satisfactoriamente</p>"; 
        /*
        $id  = $_POST['id'];
        $res = $this->model->getId($id);
        $this->setData($res);
        */

        $this->view->render('documento/formedit', $this->getData());
        /* print_r($this->getData()); */
    }
    
    public function editDocumento()
    {   

        /* echo "<p>Guardando datos satisfactoriamente</p>"; */
        /*
        $idtipodocumento = $_POST['id'];
        $namedocumento   = $_POST['formularioDocumentoEdit'];
        $this->model->update($idtipodocumento, $namedocumento[0]);
        $this->RefreshDataTable();
        */
    }
    
      
}
