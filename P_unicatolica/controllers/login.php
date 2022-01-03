<?php 

    class Login extends Controller {

        function __construct()
        {   
            parent::__construct();
            /* $this->view->render('main/index'); */
            /* echo "<p>Nuevo Controlador Main</p>"; */
            $this->index();
        }

        public function index(){            

            $this->view->render('login/index');
          
        }
        public function validate($email,$password){


                $Validacion=$this->model->validarLogin($email,$password);
                
                
                if (!empty($Validacion)) {
                    
                    $_SESSION['rol']= $Validacion[0]['Tblrol_id'];
                    $_SESSION['nombre']= $Validacion[0]['Usu_nombre1'];
                    $_SESSION['apellido']= $Validacion[0]['Usu_apellido1'];
                    $_SESSION['correo']= $Validacion[0]['Usu_correo'];
                    $_SESSION['idUsuario']= $Validacion[0]['Usu_id'];
                    header("Location: ../P_unicatolica");
                }else{                    
                    ?>
                    <script> alert("Usuario no registrado")</script>
                    <?php
                }
        }

    }

?>
