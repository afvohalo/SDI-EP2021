<?php 

    class Login extends Controller {

        function __construct()
        {   
            parent::__construct();
            /* $this->view->render('main/index'); */
            /* echo "<p>Nuevo Controlador Main</p>"; */
            
        }

        public function index(){            

            $this->view->render('login/index');
          
        }
        public function validate($email,$password){

            
            $password = md5($password);

                $Validacion=$this->model->validarLogin($email,$password);
                
                
                if (!empty($Validacion)) {
                    
                    $_SESSION['rol']= $Validacion[0]['tblrol_rol_id'];
                    $_SESSION['nombre']= $Validacion[0]['usu_nombre1'];
                    $_SESSION['apellido']= $Validacion[0]['usu_apellido1'];
                    $_SESSION['correo']= $Validacion[0]['usu_correo'];
                    $_SESSION['idUsuario']= $Validacion[0]['usu_id'];
                    header("Location: ../sigma_sena");
                }else{                    
                    ?>
                    <script> alert("Usuario no registrado")</script>
                    <?php
                }
        }

    }

?>