<?php

class invetarioModel extends Model implements IModel
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
            $sql = 'INSERT INTO tblinventario(
                    Inv_nombre,Inv_cantidad ,
                    Tblestado_inventario__Est_inv_id, 
                ) VALUES
            ("' . $data['NombreInv'] . '",
                "' . $data['CantidadInv'] . '",
                "' . $data['EstadoInv'] . '")';
            echo $sql;
            $query = $this->prepare($sql);
            //Preparando la consulta
            $query->execute(); // Aca mandamos a ejecutar la consulta pasando por ultimo los values :value

        } catch (PDOException $e) {
            $this->showError('save', 'inventaro', $e);
        }

    }

    public function getAll()
    {
        try {
            $query = $this->prepare('SELECT * FROM tblinventario');
            $query->execute();
            return $query->fetchAll();
        } catch (PDOException $e) {
            $this->showError('getAll', 'inventaro', $e);
        }
    }

    public function delete($id)
    {

        try {

            $query = $this->prepare('DELETE FROM tbinventario WHERE Sal_id=:id');
            $query->execute($id);

        } catch (PDOException $e) {
            $this->showError('delete', 'inventaro', $e);
        }

    }

    public function getId($id)
    {
        try {

            $query = $this->prepare('SELECT * FROM tblinventario WHERE Sal_id=:id');
            $query->execute(['id' => $id]);

            return $query->fetchAll();

        } catch (PDOException $e) {
            $this->showError('getId', 'inventaro', $e);
        }
    }

    public function update($id, $name, $cantidad, $estado)
    {
        try {

            $query = $this->prepare('UPDATE tblinventario SET Inv_nombre =:name, Inv_cantidad =:cantidad, Tblestado_inventario__Est_inv_id =:estado, WHERE Sal_id=:id');
            $query->execute([
                'id'       => $id,
                'name'     => $name,
                'cantidad' => $cantidad,
                'estado'       => $VB,
            ]);

        } catch (PDOException $e) {
            $this->showError('update', 'inventaro', $e);
        }
    }

}