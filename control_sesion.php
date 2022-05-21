<?php 
if (isset($_POST["btnvalida"])) {
  $validacion = false; 
  if(strlen($_POST['txt_rut']) >= 1 && strlen($_POST['txt_pas'] >= 1)){ 
 
    require 'Class/DAO.php'; 
    $d = new DAO(); 
 
    $txt_rut = trim($_POST['txt_rut']); 
    $txt_pas = trim($_POST['txt_pas']); 
 
    $lista = $d->ListarTrabajadores(); 
    $rut = ""; $pas = "";
 
    for ($i=0; $i < count($lista); $i++) {  
        $t = $lista[$i]; 
        $rut = $t->getRut(); 
        $pas = $t->getPassword(); 
        if($rut == $txt_rut and $pas == $txt_pas){ 
            $validacion = true; 
        } 
    } 
} 


if($validacion == true){ 
     session_start();
    $_SESSION["rut"] = $rut;
    $_SESSION["pas"] = $pas;
    echo '<script> window.location.replace("principal.html");  
    </script>';  
}else{ 
    echo '<script> window.location.replace("login.php");  
    </script>'; 
    echo '<h6 style="color:red">Error al validar el usuario y contraseña</h6>'; 
} 
} 
?>







