<?php

class tipodocumentoModel extends Model implements IModel
{

    public function __construct()
    {
        parent::__construct();
    }

    //CRUD
    
    public function save($data)
    {

    try {

    $query = $this->prepare('INSERT INTO tbltipo_documento(Tip_doc_nombre) VALUES (:NuevoTipoDocumento)'); //Preparando la consulta
    $query->execute([
    'NuevoTipoDocumento' => $data['NuevoTipoDocumento'],
    ]); // Aca mandamos a ejecutar la consulta pasando por ultimo los values :value

    } catch (PDOException $e) {
    $this->showError('save', 'tipodocumento', $e);
    }

    }
     

    public function getAll()
    {
        try {
            $query = $this->prepare('SELECT * FROM tbltipo_documento');
            $query->execute();
            return $query->fetchAll();
        } catch (PDOException $e) {
            $this->showError('getAll', 'tipodocumento', $e);
        }
    }
    
    public function delete($id)
    {

    try {

    $query = $this->prepare('DELETE FROM tbltipo_documento WHERE Tip_doc_id=:id');
    $query->execute($id);

    } catch (PDOException $e) {
    $this->showError('delete', 'tipodocumento', $e);
    }

    }
     
    
    public function getId($id)
    {
    try {

    $query = $this->prepare('SELECT * FROM tbltipo_documento WHERE Tip_doc_id=:id');
    $query->execute(['id' => $id]);

    return $query->fetchAll();

    } catch (PDOException $e) {
    $this->showError('getId', 'tipodocumento', $e);
    }
    }
    
public function update($id, $name)
{
try {

$query = $this->prepare('UPDATE tbltipo_documento SET Tip_doc_nombre =:name WHERE Tip_doc_id=:id');
$query->execute([
'id'   => $id,
'name' => $name,
]);

} catch (PDOException $e) {
$this->showError('update', 'tipodocumento', $e);
}
}
 
}
