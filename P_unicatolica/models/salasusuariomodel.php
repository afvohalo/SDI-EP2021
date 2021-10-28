<?php

class salasusuarioModel extends Model implements IModel
{

    public function __construct()
    {
        parent::__construct();
    }

    //CRUD

    public function save($data)
    {
        print_r($data);

        try {
            $sql = 'INSERT INTO tblusuario(Tblusuarios_Usu_id,Tblsalas_Sal_id) VALUES("' . $data->usuario . '","' . $data->sala . '")';
            echo $sql;
            $query = $this->prepare($sql);
            //Preparando la consulta
            $query->execute(); // Aca mandamos a ejecutar la consulta pasando por ultimo los values :value

        } catch (PDOException $e) {
            $this->showError('save', 'usuario', $e);
        }

    }

    public function getAll()
    {
        try {
            $query = $this->prepare('SELECT * FROM tblsalas_usuarios');
            $query->execute();
            return $query->fetchAll();
        } catch (PDOException $e) {
            $this->showError('getAll', 'salasusuario', $e);
        }
    }

    public function delete($id)
    {

        try {

            $query = $this->prepare('DELETE FROM tblsalas_usuarios WHERE Sal_usu_id=:id');
            $query->execute($id);

        } catch (PDOException $e) {
            $this->showError('delete', 'salasusuario', $e);
        }

    }

    public function getId($id)
    {
        try {

            $query = $this->prepare('SELECT * FROM tblsalas_usuarios WHERE Sal_usu_id=:id');
            $query->execute(['id' => $id]);

            return $query->fetchAll();

        } catch (PDOException $e) {
            $this->showError('getId', 'salasusuario', $e);
        }
    }

    public function update($id, $data)
    {
        try {

            $query = $this->prepare('UPDATE tblsalas_usuarios SET
                Tblusuarios_Usu_id = "' . $data->usuario . '",
                Tblsalas_Sal_id = "' . $data->sala . '"
                WHERE Sal_usu_id= "' . $id . '"');
            $query->execute();

        } catch (PDOException $e) {
            $this->showError('update', 'salasusuario', $e);
        }
    }

}
