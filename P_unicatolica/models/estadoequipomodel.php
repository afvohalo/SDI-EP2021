<?php

class estadoequipoModel extends Model implements IModel
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

            $query = $this->prepare('INSERT INTO tblestado_equipos(Est_equipos_nombre) VALUES (:NuevoEstadoEquipo)'); //Preparando la consulta
            $query->execute(['NuevoEstadoEquipo' => $data['Nuevoestadoequipo'],
            ]); // Aca mandamos a ejecutar la consulta pasando por ultimo los values :value

        } catch (PDOException $e) {
            $this->showError('save', 'estadoequipo', $e);
        }

    }

    public function getAll()
    {
        try {
            $query = $this->prepare('SELECT * FROM tblestado_equipos');
            $query->execute();
            return $query->fetchAll();
        } catch (PDOException $e) {
            $this->showError('getAll', 'estadoequipo', $e);
        }
    }

    public function delete($id)
    {

        try {

            $query = $this->prepare('DELETE FROM tblestado_equipos WHERE Est_equipos_id=:id');
            $query->execute($id);

        } catch (PDOException $e) {
            $this->showError('delete', 'estadoequipo', $e);
        }

    }

    public function getId($id)
    {
        try {

            $query = $this->prepare('SELECT * FROM tblestado_equipos WHERE Est_equipos_id=:id');
            $query->execute(['id' => $id]);

            return $query->fetchAll();

        } catch (PDOException $e) {
            $this->showError('getId', 'estadoequipo', $e);
        }
    }

    public function update($id, $name)
    {
        try {

            $query = $this->prepare('UPDATE tblestado_equipos SET Est_equipos_nombre =:name WHERE Est_equipos_id=:id');
            $query->execute([
                'id'   => $id,
                'name' => $name,
            ]);

        } catch (PDOException $e) {
            $this->showError('update', 'estadoequipo', $e);
        }
    }

}
