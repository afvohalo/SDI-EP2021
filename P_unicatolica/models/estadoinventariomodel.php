<?php

class estadoinventarioModel extends Model implements IModel
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

            $query = $this->prepare('INSERT INTO tblestado_inventario(Est_inv_nombre) VALUES (:NuevoEstadoInventario)'); //Preparando la consulta
            $query->execute(['NuevoEstadoInventario' => $data['Nuevoestadoinventario'],
            ]); // Aca mandamos a ejecutar la consulta pasando por ultimo los values :value

        } catch (PDOException $e) {
            $this->showError('save', 'estadoinventario', $e);
        }

    }

    public function getAll()
    {
        try {
            $query = $this->prepare('SELECT * FROM tblestado_inventario');
            $query->execute();
            return $query->fetchAll();
        } catch (PDOException $e) {
            $this->showError('getAll', 'estadoinventario', $e);
        }
    }

    public function delete($id)
    {

        try {

            $query = $this->prepare('DELETE FROM tblestado_inventario WHERE Est_inv_id=:id');
            $query->execute($id);

        } catch (PDOException $e) {
            $this->showError('delete', 'estadoinventario', $e);
        }

    }

    public function getId($id)
    {
        try {

            $query = $this->prepare('SELECT * FROM tblestado_inventario WHERE Est_inv_id=:id');
            $query->execute(['id' => $id]);

            return $query->fetchAll();

        } catch (PDOException $e) {
            $this->showError('getId', 'estadoinventario', $e);
        }
    }

    public function update($id, $name)
    {
        try {

            $query = $this->prepare('UPDATE tblestado_inventario SET Est_inv_nombre =:name WHERE Est_inv_id=:id');
            $query->execute([
                'id'   => $id,
                'name' => $name,
            ]);

        } catch (PDOException $e) {
            $this->showError('update', 'estadoinventario', $e);
        }
    }

}
