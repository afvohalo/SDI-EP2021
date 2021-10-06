<?php

class movimientoModel extends Model implements IModel
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
            $sql = 'INSERT INTO tblmovimiento(Mov_concepto,Mov_codigo,Tblusuario_Usu_id,Tbltipo_movimiento_Tip_mov_id) VALUES
            ("' . $data['conceptomovimiento'] . '","' . $data['codigomovimiento'] . '","' . $data['usuariomovimiento'] . '","' . $data['tipomovimiento'] . '")';
            echo $sql;
            $query = $this->prepare($sql);
            //Preparando la consulta
            $query->execute(); // Aca mandamos a ejecutar la consulta pasando por ultimo los values :value

        } catch (PDOException $e) {
            $this->showError('save', 'movimiento', $e);
        }

    }

    public function getAll()
    {
        try {
            $query = $this->prepare('SELECT * FROM tblmovimiento');
            $query->execute();
            return $query->fetchAll();
        } catch (PDOException $e) {
            $this->showError('getAll', 'movimiento', $e);
        }
    }

    public function delete($id)
    {

        try {

            $query = $this->prepare('DELETE FROM tblmovimiento WHERE Mov_id=:id');
            $query->execute($id);

        } catch (PDOException $e) {
            $this->showError('delete', 'movimiento', $e);
        }

    }

    public function getId($id)
    {
        try {

            $query = $this->prepare('SELECT * FROM tblmovimiento WHERE Mov_id=:id');
            $query->execute(['id' => $id]);

            return $query->fetchAll();

        } catch (PDOException $e) {
            $this->showError('getId', 'movimiento', $e);
        }
    }

    public function update($id, $concepto, $codigo, $usuario, $tipo)
    {
        try {

            $query = $this->prepare('UPDATE tblmovimiento SET Mov_concepto =:concepto, Mov_codigo =:codigo, Tblusuario_Usu_id =:usuario, Tbltipo_movimiento_Tip_mov_id =:tipo WHERE Mov_id=:id');
            $query->execute([
                'id'            => $id,
                'concepto'      => $concepto,
                'codigo'        => $codigo,
                'usuario'       => $usuario,
                'tipo'          => $tipo,
            ]);

        } catch (PDOException $e) {
            $this->showError('update', 'movimiento', $e);
        }
    }

}
