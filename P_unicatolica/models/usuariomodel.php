<?php

class usuarioModel extends Model implements IModel
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
            $sql = 'INSERT INTO tblusuario(Usu_nombre1,
            Usu_nombre2,
            Usu_apellido1,
            Usu_apellido2,
            Usu_correo,
            Usu_contraseña,
            Usu_telefono,
            Usu_documento,
            Usu_tipodocumento,
            Usu_estado,
            Usu_rol
            ) VALUES
            (
            "' . $data['NombreSalas'] . '",
            "' . $data['CantidadSalas'] . '",
            "' . $data['VbSalas'] . '"
            )';
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
            $query = $this->prepare('SELECT * FROM tblusuario');
            $query->execute();
            return $query->fetchAll();
        } catch (PDOException $e) {
            $this->showError('getAll', 'usuario', $e);
        }
    }

    public function delete($id)
    {

        try {

            $query = $this->prepare('DELETE FROM tblusario WHERE Usu_id=:id');
            $query->execute($id);

        } catch (PDOException $e) {
            $this->showError('delete', 'usuario', $e);
        }

    }

    public function getId($id)
    {
        try {

            $query = $this->prepare('SELECT * FROM tblusuario WHERE Usu_id=:id');
            $query->execute(['id' => $id]);

            return $query->fetchAll();

        } catch (PDOException $e) {
            $this->showError('getId', 'usuario', $e);
        }
    }

    public function update($id, $name, $cantidad, $VB)
    {
        try {

            $query = $this->prepare('UPDATE tblUsuario SET Usu_nombre1 =:name WHERE Usu_id=:id');
            $query->execute([
                'id'   => $id,
                'name' => $name,
            ]);

        } catch (PDOException $e) {
            $this->showError('update', 'usuario', $e);
        }
    }

}