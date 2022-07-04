
<?php 
    $con = mysqli_connect("localhost","id17942319_novatrace2","novaTrace2.0","id17942319_novaempresa");

	if(!$con){
	echo "no pudo conectarse al sv";
	}else{
	/*echo "Conexion satisfactoria";*/
	}
	
	if(isset($_POST['enviar'])){//inicio if post
	$nom     = $_POST['Nombre'];
    $rut     = $_POST['Rut'];
	$email   = $_POST['Email'];
	$tel     = $_POST['Telefono'];
    $pas     = $_POST['Password'];
 
	if(strlen($nom) >= 1 && strlen($rut) >= 1 && strlen($email) >= 1 && strlen($tel) >= 1 && strlen($pas) >=  1){//validacion

	$sql = "INSERT INTO administrador(id_adm, nom_adm, rut_adm, email_adm, tel_adm,pas_adm) VALUES (NULL,'$nom','$rut','$email',$tel,'$pas');";
	
	$resultado = mysqli_query($con,$sql);
	if($resultado){//iniicio resultado
	    echo '<h6 style="color:white">Usuario Registrado Correctamente.</h6>';
		echo '<script> window.location.replace("registrarEmpresa.php");  
		</script>';  

	}else{
	    echo '<h6><style="color:white">Error</h6>';
	}//fin resultado

	}else{//else validacion
	    echo '<h6 style="color:white">Porfavor Completar los Campos</h6>';
	}//validacion
}//fin post
  ?>



