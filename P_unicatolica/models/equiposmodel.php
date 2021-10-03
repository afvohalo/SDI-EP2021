<?php

class equiposModel extends Model implements IModel
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
            $sql = 'INSERT INTO tblequipos(Equ_nombre,Equ_detalles,Equ_teclado,Equ_mouse,Equ_gualla,Equ_candado,Tblestado_equipos_Est_equipos_id,Tblsalas_sal_id) VALUES
            ("' . $data['nombreequipos'] . '","' . $data['detalleequipos'] . '","' . $data['tecladoequipos'] . '","' . $data['mouseequipos'] . '","' . $data['guayaequipos'] . '","' . $data['candadoequipos'] .'","' . $data['estadoequipos'] . '","' . $data['salaequipos'] .'")';
            echo $sql;
            $query = $this->prepare($sql);
            //Preparando la consulta
            $query->execute(); // Aca mandamos a ejecutar la consulta pasando por ultimo los values :value

        } catch (PDOException $e) {
            $this->showError('save', 'equipos', $e);
        }

    }

    public function getAll()
    {
        try {
            $query = $this->prepare('SELECT * FROM tblequipos');
            $query->execute();
            return $query->fetchAll();
        } catch (PDOException $e) {
            $this->showError('getAll', 'equipos', $e);
        }
    }

    public function delete($id)
    {

        try {

            $query = $this->prepare('DELETE FROM tblequipos WHERE Equ_id=:id');
            $query->execute($id);

        } catch (PDOException $e) {
            $this->showError('delete', 'equipos', $e);
        }

    }

    public function getId($id)
    {
        try {

            $query = $this->prepare('SELECT * FROM tblequipos WHERE Equ_id=:id');
            $query->execute(['id' => $id]);

            return $query->fetchAll();

        } catch (PDOException $e) {
            $this->showError('getId', 'equipos', $e);
        }
    }

    public function update($id, $nombre, $detalles, $teclado, $mouse, $guaya, $candado, $estado, $sala)
    {
        try {

            $query = $this->prepare('UPDATE tblequipos SET Equ_nombre =:nombre, Equ_detalles =:detalles, Equ_teclado =:teclado,
                                     Equ_mouse =:mouse, Equ_guaya =:guaya, Equ_candado =:candado, Tblestado_equipos_Est_equipos_id =:estado,
                                     Tblsalas_sal_id =:sala WHERE Equ_id=:id');
            $query->execute([
                'id'            => $id,
                'nombre'        => $nombre,
                'detalles'      => $detalles,
                'teclado'       => $teclado,
                'mouse'         => $mouse,
                'guaya'         => $guaya,
                'candado'       => $candado,
                'estado'        => $estado,
                'sala'          => $sala,
            ]);

        } catch (PDOException $e) {
            $this->showError('update', 'equipos', $e);
        }
    }

}
