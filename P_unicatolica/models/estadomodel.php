<?php

class estadoModel extends Model implements IModel
{

    public function __construct()
    {
        parent::__construct();
    }

    //CRUD
    
    public function save($data)
    {

    try {

    $query = $this->prepare('INSERT INTO tblestado(Est_nombre) VALUES (:NuevoEstado)'); //Preparando la consulta
    $query->execute([
    'NuevoEstado' => $data['NuevoEstado'],
    ]); // Aca mandamos a ejecutar la consulta pasando por ultimo los values :value

    } catch (PDOException $e) {
    $this->showError('save', 'estado', $e);
    }

    }
     

    public function getAll()
    {
        try {
            $query = $this->prepare('SELECT * FROM tblestado');
            $query->execute();
            return $query->fetchAll();
        } catch (PDOException $e) {
            $this->showError('getAll', 'estado', $e);
        }
    }
    
    public function delete($id)
    {

    try {

    $query = $this->prepare('DELETE FROM tblestado WHERE Est_id=:id');
    $query->execute($id);

    } catch (PDOException $e) {
    $this->showError('delete', 'estado', $e);
    }

    }
     
    
    public function getId($id)
    {
    try {

    $query = $this->prepare('SELECT * FROM tblestado WHERE Est_id=:id');
    $query->execute(['id' => $id]);

    return $query->fetchAll();

    } catch (PDOException $e) {
    $this->showError('getId', 'estado', $e);
    }
    }
    
public function update($id, $name)
{
try {

$query = $this->prepare('UPDATE tblestado SET Est_nombre =:name WHERE Est_id=:id');
$query->execute([
'id'   => $id,
'name' => $name,
]);

} catch (PDOException $e) {
$this->showError('update', 'estado', $e);
}
}
 
}
