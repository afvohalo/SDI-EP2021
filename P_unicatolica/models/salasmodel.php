Z<?php

class salasModel extends Model implements IModel
{

    public function __construct()
    {
        parent::__construct();
    }

    //CRUD

    public function save($data)
    {
        var_dump($data);

        try {
            $sql = 'INSERT INTO tblsalas(Sal_nombre,Sal_cantidad_equipo,Sal_videobeam) VALUES
            ("' . $data['NombreSalas'] . '","' . $data['CantidadSalas'] . '","' . $data['VbSalas'] . '")';
            echo $sql;
            $query = $this->prepare($sql);
            //Preparando la consulta
            $query->execute(); // Aca mandamos a ejecutar la consulta pasando por ultimo los values :value

        } catch (PDOException $e) {
            $this->showError('save', 'salas', $e);
        }

    }

    public function getAll()
    {
        try {
            $query = $this->prepare('SELECT * FROM tblsalas');
            $query->execute();
            return $query->fetchAll();
        } catch (PDOException $e) {
            $this->showError('getAll', 'salas', $e);
        }
    }

    public function delete($id)
    {

        try {

            $query = $this->prepare('DELETE FROM tblsalas WHERE Sal_id=:id');
            $query->execute($id);

        } catch (PDOException $e) {
            $this->showError('delete', 'salas', $e);
        }

    }

    public function getId($id)
    {
        try {

            $query = $this->prepare('SELECT * FROM tblsalas WHERE Sal_id=:id');
            $query->execute(['id' => $id]);

            return $query->fetchAll();

        } catch (PDOException $e) {
            $this->showError('getId', 'salas', $e);
        }
    }

    public function update($id, $name, $cantidad, $VB)
    {
        try {

            $query = $this->prepare('UPDATE tblsalas SET Sal_nombre =:name, Sal_cantidad_equipo =:cantidad, Sal_videobeam =:VB WHERE Sal_id=:id');
            $query->execute([
                'id'       => $id,
                'name'     => $name,
                'cantidad' => $cantidad,
                'VB'       => $VB,
            ]);

        } catch (PDOException $e) {
            $this->showError('update', 'salas', $e);
        }
    }

}
