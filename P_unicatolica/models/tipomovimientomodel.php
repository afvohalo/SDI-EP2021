<?php

class tipomovimientoModel extends Model implements IModel
{

    public function __construct()
    {
        parent::__construct();
    }

    //CRUD
    
    public function save($data)
    {

    try {

    $query = $this->prepare('INSERT INTO tbltipo_movimiento(Tip_mov_nombre) VALUES (:NuevoTipoMovimiento)'); //Preparando la consulta
    $query->execute([
    'NuevoTipoMovimiento' => $data['NuevoTipoMovimiento'],
    ]); // Aca mandamos a ejecutar la consulta pasando por ultimo los values :value

    } catch (PDOException $e) {
    $this->showError('save', 'tipomovimiento', $e);
    }

    }
     

    public function getAll()
    {
        try {
            $query = $this->prepare('SELECT * FROM tbltipo_movimiento');
            $query->execute();
            return $query->fetchAll();
        } catch (PDOException $e) {
            $this->showError('getAll', 'tipomovimiento', $e);
        }
    }
    
    public function delete($id)
    {

    try {

    $query = $this->prepare('DELETE FROM tbltipo_movimiento WHERE Tip_mov_id=:id');
    $query->execute($id);

    } catch (PDOException $e) {
    $this->showError('delete', 'tipomovimiento', $e);
    }

    }
     
    
    public function getId($id)
    {
    try {

    $query = $this->prepare('SELECT * FROM tbltipo_movimiento WHERE Tip_mov_id=:id');
    $query->execute(['id' => $id]);

    return $query->fetchAll();

    } catch (PDOException $e) {
    $this->showError('getId', 'tipomovimiento', $e);
    }
    }
    
public function update($id, $name)
{
try {

$query = $this->prepare('UPDATE tbltipo_movimiento SET Tip_mov_nombre =:name WHERE Tip_mov_id=:id');
$query->execute([
'id'   => $id,
'name' => $name,
]);

} catch (PDOException $e) {
$this->showError('update', 'tipomovimiento', $e);
}
}
 
}
