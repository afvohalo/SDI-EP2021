<?php

class View
{

    public function __construct()
    {
        //echo "<p> Vista Base </p>";
    }

    public function render($nombre, $data = [])
    {

        $this->d = $data;
        require 'views/' . $nombre . '.php';
    }

}
