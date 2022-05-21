<?php
require 'Class/DAO.php';
$resp = '';
if(isset($_POST['rut']) and isset($_POST['pas'])){
	$d = new DAO();
    
    $txt_rut =trim($_POST['rut']);
	$txt_pas = md5(trim($_POST['pas']));
    
	$lista = $d->ListarTrabajadores();
	$validacion = false; $idtra=''; $rut=''; $pas='';
	for ($i=0; $i < count($lista); $i++) {        
		$t = $lista[$i];
		$idtra=$t->getidtra();
        $rut=$t->getRut();
		$pas=md5($t->getPassword());
        
        if ($rut == $txt_rut AND $pas == $txt_pas) {
			$validacion = true;
		}
	}
	if($validacion == true){
		session_name('Sistema');
		session_start();
        $_SESSION['rut'] = $txt_rut;
        $resp = 'ok';
	}else{
		$resp = 'Error al validar el Usuario y/o constraseña';
	}
}
echo $resp;
?>


