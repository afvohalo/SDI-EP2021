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
        print_r($data);

        try {
            $sql = 'INSERT INTO tblusuario(Usu_nombre1,
            Usu_nombre2,
            Usu_apellido1,
            Usu_apellido2,
            Usu_correo,
            Usu_contraseña,
            Usu_telefono,
            Usu_documento,
            Tbltipo_documento_Tip_doc_id,
            Tblestado_est_id,
            Tblrol_id
            ) VALUES
            (
            "' . $data->nombre1 . '",
            "' . $data->nombre2 . '",
            "' . $data->apellido1 . '",
            "' . $data->apellido2 . '",
            "' . $data->correo . '",
            "' . $data->contrasena . '",
            "' . $data->telefono . '",
            "' . $data->documento . '",
            "' . $data->idtipodocumento . '",
            "' . $data->estado . '",
            "' . $data->rol . '"
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

            $query = $this->prepare('DELETE FROM tblusuario WHERE Usu_id=:id');
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

    public function update($id, $data)
    {
        try {

            $query = $this->prepare('UPDATE tblUsuario SET
                Usu_nombre1 = "' . $data->nombre1 . '",
                Usu_nombre2 = "' . $data->nombre2 . '",
                Usu_apellido1 = "' . $data->apellido1 . '",
                Usu_apellido2 = "' . $data->apellido2 . '",
                Usu_correo = "' . $data->correo . '",
                Usu_contraseña = "' . $data->contrasena . '",
                Usu_telefono = "' . $data->telefono . '",
                Usu_documento = "' . $data->documento . '",
                Tbltipo_documento_Tip_doc_id = "' . $data->idtipodocumento . '",
                Tblestado_est_id = "' . $data->estado . '",
                Tblrol_id = "' . $data->rol . '"


                WHERE Usu_id= "' . $id . '"');
            $query->execute();

        } catch (PDOException $e) {
            $this->showError('update', 'usuario', $e);
        }
    }

}
