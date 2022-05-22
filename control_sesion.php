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
    echo "<script>top.location = 'principal.html'</script>";
    exit;
  }else{
    
    echo '<h6 style="color:white">Error al validar el usuario y contraseña</h6>'; 
  }
}
 ?> 
