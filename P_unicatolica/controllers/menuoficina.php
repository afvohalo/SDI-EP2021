<?php

class Menuoficina extends Controller
{

    public function __construct()
    {
        parent::__construct();
        /* $this->view->render('main/index'); */
        /* echo "<p>Nuevo Controlador Main</p>"; */
    }

    public function index()
    {
        $this->view->render('estructura/header'); //HEADER
        $this->view->render('estructura/menuoficina');
        //$this->view->render('estructura/ajustes_nav'); //BarraLateral
        //$this->view->render('estructura/footer'); //FOOTER
    }

}
