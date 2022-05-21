<?php 
require("Class/DAO.php");
$d = new DAO();
if (isset($_POST["btnvalida"])) {
  $rut = $_POST["txt_rut"];
  $pas = $_POST["txt_pas"];
  $tra = $d->ValidarLogin($rut, $pas);
  if ($tra == 1) {
     session_start();
    $_SESSION["rut"] = $rut;
    $_SESSION["pas"] = $pas;
    echo "<script>top.location = 'principal.php'</script>";
    exit;
  }else{
    
    echo "<script>window.location = 'login.html'</script>";
  }
}else{ 
          echo '<h6 style="color:red">Error al validar el usuario y contraseña</h6>'; 
      } 

  
 if(isset($_POST['btn_ing'])){ 
     $validacion = false; 
     if(strlen($_POST['txt_rut']) >= 1 && strlen($_POST['txt_pass'] >= 1)){ 
  
     require 'Class/DAO.php'; 
     $d = new DAO(); 
  
     $txt_rut = trim($_POST['txt_rut']); 
     $txt_pas = trim($_POST['txt_pass']); 
  
     $lista = $d->ListarSesion(); 
     $rut = ""; $pas = ""; $est=""; 
  
     for ($i=0; $i < count($lista); $i++) {  
         $u = $lista[$i]; 
         $rut = $u->getRut(); 
         $pas = $u->getClave(); 
         $tip = $u->getTipo(); 
         if($rut == $txt_rut and $pas == $txt_pas){ 
             $validacion = true; 
             $tipo = $tip; 
              
         } 
     } 
 } 
  
      
     if($validacion == true){ 
         session_name('data'); 
         session_start(); 
         $_SESSION['rut'] = $txt_rut; 
         $_SESSION['tipo'] = $tipo; 
         if($tipo == "ADMINISTRADOR"){ 
             echo '<script> window.location.replace("menuA.php");  
         </script>'; 
         }else{ 
             echo '<script> window.location.replace("menu.php");  
         </script>'; 
         } 
          
          
     }else{ 
         echo '<h6 style="color:red">Error al validar el usuario y contraseña</h6>'; 
     } 
 } 
 ?>



