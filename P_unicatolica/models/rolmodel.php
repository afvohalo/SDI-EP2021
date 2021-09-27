<?php

class rolModel extends Model implements IModel
{

    public function __construct()
    {
        parent::__construct();
    }

    //CRUD
    
    public function save($data)
    {

    try {

    $query = $this->prepare('INSERT INTO tblrol(Rol_nombre) VALUES (:NuevoRol)'); //Preparando la consulta
    $query->execute([
    'NuevoRol' => $data['NuevoRol'],
    ]); // Aca mandamos a ejecutar la consulta pasando por ultimo los values :value

    } catch (PDOException $e) {
    $this->showError('save', 'rol', $e);
    }

    }
     

    public function getAll()
    {
        try {
            $query = $this->prepare('SELECT * FROM tblrol');
            $query->execute();
            return $query->fetchAll();
        } catch (PDOException $e) {
            $this->showError('getAll', 'rol', $e);
        }
    }
    
    public function delete($id)
    {

    try {

    $query = $this->prepare('DELETE FROM tblrol WHERE Rol_id=:id');
    $query->execute($id);

    } catch (PDOException $e) {
    $this->showError('delete', 'rol', $e);
    }

    }
     
    
    public function getId($id)
    {
    try {

    $query = $this->prepare('SELECT * FROM tblrol WHERE Rol_id=:id');
    $query->execute(['id' => $id]);

    return $query->fetchAll();

    } catch (PDOException $e) {
    $this->showError('getId', 'rol', $e);
    }
    }
    
public function update($id, $name)
{
try {

$query = $this->prepare('UPDATE tblrol SET Rol_nombre =:name WHERE Rol_id=:id');
$query->execute([
'id'   => $id,
'name' => $name,
]);

} catch (PDOException $e) {
$this->showError('update', 'rol', $e);
}
}
 
}
