<?php

class Database
{
    private $host;
    private $user;
    private $password;
    private $database;
    protected $conection;
    public function __construct()
    {

        $this->host     = constant('SERVER');
        $this->database = constant('DATABASE');
        $this->password = constant('PASSWORD');
        $this->user     = constant('USER');

    }

    public function conexion()
    {
        try {
            $this->conection = 'mysql:host=' . $this->host . ';dbname=' . $this->database . ';charset=utf8';

            $option = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false];

            $pdo = new PDO($this->conection, $this->user, $this->password, $option);
            return $pdo;

            //require_once '../index.php';
            echo "si conecto a la base de datos";

        } catch (PDOExecption $e) {
            print_r('Error de conexion' . $e->getMessage());
        }

    }

}
