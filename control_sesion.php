
<?php 
if (isset($_POST["btnvalida"])) {
   $validacion = false; 
        if(strlen($_POST['txt_rut']) >= 1 && strlen($_POST['txt_pas'] >= 1)){ 
        
            require 'Class/DAO.php'; 
            $d = new DAO(); 
        
            $txt_rut = trim($_POST['txt_rut']); 
            $txt_pas = trim($_POST['txt_pas']); 
            
            $lista = $d->ListarAdministradores(); 
            $rut = ""; $pas = "";
        
            for ($i=0; $i < count($lista); $i++) {  
                $a = $lista[$i]; 
                $rut = $a->getRut(); 
                $pas = $a->getPassword(); 
                if($rut == $txt_rut and $pas == $txt_pas){ //INICIO IF VALIDACION BOOLEAN
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
            $_SESSION["rut"] = $rut;
            $_SESSION["pas"] = $pas;

            echo '<script> window.location.replace("principal.html");  
            </script>';  
        }else{ 
            echo '<h6 style="color:white">Error al Validar el Usuario y Contraseña</h6>'; 
            

        }//FIN VALIDACION BOOLEAN PARA NEXT PAGE 
} // FIN IF BOTON

?>

