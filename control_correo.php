
<?php 
if (isset($_POST["btnrecuperar"])) {
   $validacion = false; 
   if(strlen($_POST['txt_cor']) >= 1 ){ 
        
            require 'Class/DAO.php'; 
            $d = new DAO(); 
        
            $txt_cor = trim($_POST['txt_cor']); 
            
            $lista = $d->ListarAdministradores(); 
            $email = "";
        
            for ($i=0; $i < count($lista); $i++) {  
                $a = $lista[$i]; 
                $email = $a->getEmail(); 
                if($email == $txt_cor){ //INICIO IF VALIDACION BOOLEAN
                    $validacion = true; 
                    $idad= $a->getidadm();
                } // FIN IF VALIDACION BOOL
            } //FIN FOR 
        } 

        if($validacion == true){ //INICIO NEXT PAGE
            //session_name('datos');
            session_start();
            $id_empresa = $d->buscarId($idad);
            $_SESSION["idemp"] = $id_empresa;
            $_SESSION["idad"] = $idad;
            $_SESSION["ema"] = $email;

            echo '<script> window.location.replace("recuperarContraseña.php");  
            </script>';  
        }else{ 
            echo '<h6 style="color:white">Error al Validar </h6>'; 
            

        }//FIN VALIDACION BOOLEAN PARA NEXT PAGE 


} // FIN IF BOTON

?>

