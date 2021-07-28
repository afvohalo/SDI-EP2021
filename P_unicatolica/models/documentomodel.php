<?php

class documentoModel extends Model implements IModel
{

    public function __construct()
    {
        parent::__construct();
    }

    //CRUD
    
    public function save($data)
    {

    try {

    $query = $this->prepare('INSERT INTO tbltipo_documento(tip_doc_descripcion) VALUES (:tip_doc_descripcion)'); //Preparando la consulta
    $query->execute([
    'tip_doc_descripcion' => $data['tip_doc_descripcion'],
    ]); // Aca mandamos a ejecutar la consulta pasando por ultimo los values :value

    } catch (PDOException $e) {
    $this->showError('save', 'documento', $e);
    }

    }
     

    public function getAll()
    {
        try {
            $query = $this->prepare('SELECT * FROM tbltipo_documento');
            $query->execute();
            return $query->fetchAll();
        } catch (PDOException $e) {
            $this->showError('getAll', 'documento', $e);
        }
    }
    /*
    public function delete($id)
    {

    try {

    $query = $this->prepare('DELETE FROM tbltipo_documento WHERE tip_doc_id=:id');
    $query->execute($id);

    } catch (PDOException $e) {
    $this->showError('delete', 'deocumento', $e);
    }

    }
     */
    /*
    public function getId($id)
    {
    try {

    $query = $this->prepare('SELECT * FROM tbltipo_documento WHERE tip_doc_id=:id');
    $query->execute(['id' => $id]);

    return $query->fetchAll();

    } catch (PDOException $e) {
    $this->showError('getId', 'documento', $e);
    }
    }
     */
    /*
public function update($id, $name)
{
try {

$query = $this->prepare('UPDATE tbltipo_documento SET tip_doc_descripcion=:name WHERE tip_doc_id=:id');
$query->execute([
'id'   => $id,
'name' => $name,
]);

} catch (PDOException $e) {
$this->showError('update', 'rol', $e);
}
}
 */
}
