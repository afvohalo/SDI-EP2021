<?php 

class loginModel extends Model{


    public function __construct()
    {
        parent::__construct();
    }
    
    public function validarLogin($email,$password){

    
            try {
                $query = $this->prepare("SELECT * FROM tblusuario WHERE Usu_correo ='$email' AND  Usu_contraseña ='$password' AND Tblestado_est_id=1");
                $query->execute(); 

                return $query->fetchAll();
            } catch (PDOException $e) {
                $this->showError('Login Usuarios','tblusuario',$e);
            }
        
    }
}
?>